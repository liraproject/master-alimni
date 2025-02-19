<?php

namespace App\Livewire\Student\Tahfidz\History;

use Livewire\Attributes\Title;
use Livewire\Component;

class HistoryTahfidzStudent extends Component
{
    #[Title('Riwayat Hafalan')]

    public function render()
    {
        return view('livewire.web.student.tahfidz.history.history-tahfidz-student');
    }
}
