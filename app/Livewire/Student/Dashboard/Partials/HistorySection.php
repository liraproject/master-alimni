<?php

namespace App\Livewire\Student\Dashboard\Partials;

use Livewire\Component;
use Detection\MobileDetect;
use App\Main\Menu\StudentMenu;

class HistorySection extends Component
{
    public $quickMenu = [];
    public function render(MobileDetect $mobileDetect)
    {
        // dummy data tempoary
        $this->quickMenu = StudentMenu::quick();
        if ($mobileDetect->isMobile()) {
            return view('livewire.mobile.student.dashboard.partials.history-section');
        }
        return view('livewire.web.student.dashboard.partials.history-section');
    }
}
