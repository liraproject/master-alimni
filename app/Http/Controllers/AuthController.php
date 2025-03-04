<?php

namespace App\Http\Controllers;

use App\Main\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
        $validator = Validator::make([
            'email' => $request->email,
            'password' => $request->password,
        ], [
            'email' => ['required', 'exists:users'],
            'password' => ['required'],
        ], [
            'email.exists' => 'Username tidak ditemukan',
            'password.required' => 'Kata sandi tidak boleh kosong',
            'email.required' => 'Username tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            if ($request->has('simpanpwd')) {
                Cookie::queue('saveuser', $request->email, 20160);
                Cookie::queue('savepwd', $request->password, 20160);
            }
            switch (Auth::user()->role_id) {
                case Roles::ADMIN:
                    return redirect()->route('admin.dashboard');
                case Roles::STUDENT:
                    return redirect()->route('student.dashboard');
                case Roles::TEACHER:
                    return redirect()->route('teacher.dashboard');
                default:
                    return redirect('/login');
            }
        } else {
            $validator->errors()->add(
                'password', 'Kata sandi tidak sesuai dengan username',
            );

            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('loginView');
    }
}
