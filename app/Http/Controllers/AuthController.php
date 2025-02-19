<?php

namespace App\Http\Controllers;

use App\Main\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function landingView()
    {
        return view('landing-page');
    }
    
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:users'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        if (Auth::attempt(array('email' => $validated['email'], 'password' => $validated['password']))) {
            if ($request->has('simpanpwd')) {
                Cookie::queue('saveuser', $request->email, 20160);
                Cookie::queue('savepwd', $request->password, 20160);
            }
            switch (Auth::user()->role_id) {
                case Role::ADMIN:
                    return redirect()->route('admin.dashboard');
                case Role::STUDENT:
                    return redirect()->route('student.dashboard');
                case Role::TEACHER:
                    return redirect()->route('teacher.dashboard');
                default:
                    return redirect('/login');
            }
        } else {
            $validator->errors()->add(
                'password', 'The password does not match with username'
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function registerView(){
        return view('register');
    }

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'unique:users'],
            'password' => ['required',"confirmed", Password::min(7)],
        ]);

        $validated = $validator->validated();

        $user = User::create([
            'name' => $validated["name"],
            "email" => $validated["email"],
            "role_id" => 2,
            "password" => Hash::make($validated["password"])
        ]);

        Auth::login($user);

        return redirect()->route('student.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginView');
    }
}
