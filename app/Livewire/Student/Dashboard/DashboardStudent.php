<?php

namespace App\Livewire\Student\Dashboard;

use App\Main\Menu\StudentMenu;
use Detection\MobileDetect;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardStudent extends Component
{
    #[Title('Dashboard Student')]

    // array
    public $quickMenu = [];

    public function render(MobileDetect $mobileDetect)
    {
        $this->quickMenu = StudentMenu::quick();
        if ($mobileDetect->isMobile()) {
            return view('livewire.mobile.student.dashboard.dashboard-student')->layout('components.mobile.layouts.app');
        }
        return view('livewire.web.student.dashboard.dashboard-student');
    }
}
