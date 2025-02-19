<?php

namespace App\Livewire\Student\ReportCard;

use Livewire\Attributes\Title;
use Livewire\Component;

class ReportCardStudent extends Component
{
    #[Title('Rapor')]

    public function render()
    {
        return view('livewire.web.student.report-card.report-card-student');
    }
}
