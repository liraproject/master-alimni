<?php

namespace App\Livewire\Student\Exam\Placement\Juz;

use Livewire\Attributes\Title;
use Livewire\Component;

class JuzExamStudent extends Component
{
    #[Title('Kenaikan Juz')]
    public function render()
    {
        return view('livewire.web.student.exam.placement.juz.juz-exam-student');
    }
}
