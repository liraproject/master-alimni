<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Main\Menu\GuestMenu;

class GuestSidebarComposer
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
            $view->with('menu', GuestMenu::all());
            $view->with('pageName', $pageName);
            $view->with('routePrefix', $routePrefix);
        }
    }
}
