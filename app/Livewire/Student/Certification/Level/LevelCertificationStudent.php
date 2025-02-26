<?php

namespace App\Livewire\Student\Certification\Level;

use Livewire\Attributes\Title;
use Livewire\Component;

class LevelCertificationStudent extends Component
{
    #[Title('Ujain Kenaikan Level')]

    public function render()
    {
        return view('livewire.web.student.certification.level.level-certification-student');
    }
}
