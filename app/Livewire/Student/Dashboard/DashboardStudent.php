<?php

namespace App\Livewire\Student\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardStudent extends Component
{
    #[Title('Dashboard Student')]
    public function render()
    {
        return view('livewire.web.student.dashboard.dashboard-student');
    }
}
