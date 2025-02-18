<?php

namespace App\Livewire\Student\Exam\Placement\Level;

use Livewire\Attributes\Title;
use Livewire\Component;

class LevelExamStudent extends Component
{
    #[Title('Kenaikan Level')]
    public function render()
    {
        return view('livewire.web.student.exam.placement.level.level-exam-student');
    }
}
