<?php

namespace App\Livewire\Student\Tahsin\History;

use Livewire\Attributes\Title;
use Livewire\Component;

class HistoryTahsinStudent extends Component
{
    #[Title('Riwayat Tahsin')]

    public function render()
    {
        return view('livewire.web.student.tahsin.history.history-tahsin-student');
    }
}
