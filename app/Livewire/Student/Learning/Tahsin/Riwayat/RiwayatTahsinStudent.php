<?php

namespace App\Livewire\Student\Learning\Tahsin\Riwayat;

use Livewire\Attributes\Title;
use Livewire\Component;

class RiwayatTahsinStudent extends Component
{
    #[Title('Riwayat Tahsin')]
    public function render()
    {
        return view('livewire.web.student.learning.tahsin.riwayat.riwayat-tahsin-student');
    }
}
