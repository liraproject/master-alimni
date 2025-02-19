<?php

namespace App\Http\View\Composers;

use App\Main\Menu\AdminMenu;
use App\Main\Menu\StudentMenu;
use App\Main\Menu\TeacherMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        if (!is_null(request()->route())) {
            $pageName = request()->route()->getName();
            $routePrefix = explode('.', $pageName)[1] ?? '';

            switch (Auth::user()?->role_id) {
                case 1:
                    $view->with('menu', AdminMenu::all());
                    break;
                case 2:
                    $view->with('menu', StudentMenu::all());
                    break;
                case 3:
                    $view->with('menu', TeacherMenu::all());
                    break;
            }

            $view->with('pageName', $pageName);
            $view->with('routePrefix', $routePrefix);
        }
    }
}
