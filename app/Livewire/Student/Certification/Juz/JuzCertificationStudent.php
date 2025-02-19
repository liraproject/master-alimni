<?php

namespace App\Livewire\Student\Certification\Juz;

use Livewire\Attributes\Title;
use Livewire\Component;

class JuzCertificationStudent extends Component
{
    #[Title('Ujian Kenaikan Juz')]

    public function render()
    {
        return view('livewire.web.student.certification.juz.juz-certification-student');
    }
}
