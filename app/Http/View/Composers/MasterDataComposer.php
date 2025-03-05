<?php

namespace App\Http\View\Composers;

use App\Main\Roles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class MasterDataComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        if(Auth::check()) {
            $view->with('user', Auth::user());
            // $view->with('roles', Roles::class);
        }
    }
}
