<?php

namespace App\Livewire\Student\Tahsin\History\Detail;

use Detection\MobileDetect;
use Livewire\Attributes\Title;
use Livewire\Component;

class DetailHistoryTahsinStudent extends Component
{
    #[Title('Detail Riwayat Tahsin')]

    public function render(MobileDetect $mobileDetect)
    {
        if ($mobileDetect->isMobile()) {
            return view('livewire.mobile.student.tahsin.history.detail.detail-history-tahsin-student')->layout('components.mobile.layouts.app', ['routeBackButton' => 'student.dashboard']);
        }
        return view('livewire.web.student.tahsin.history.detail.detail-history-tahsin-student');
    }
}
