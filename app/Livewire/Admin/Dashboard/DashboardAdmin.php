<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardAdmin extends Component
{
    #[Title('Dashboard Admin')]
    public function render()
    {
        return view('livewire.web.admin.dashboard.dashboard-admin');
    }
}
