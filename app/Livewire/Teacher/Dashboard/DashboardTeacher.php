<?php

namespace App\Livewire\Teacher\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardTeacher extends Component
{
    #[Title('Dashboard Teacher')]
    public function render()
    {
        return view('livewire.web.teacher.dashboard.dashboard-teacher');
    }
}
