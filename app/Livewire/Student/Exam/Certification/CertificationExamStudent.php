<?php

namespace App\Livewire\Student\Exam\Certification;

use Livewire\Attributes\Title;
use Livewire\Component;

class CertificationExamStudent extends Component
{
    #[Title('Sertifikasi')]

    public function render()
    {
        return view('livewire.web.student.exam.certification.certification-exam-student');
    }
}
