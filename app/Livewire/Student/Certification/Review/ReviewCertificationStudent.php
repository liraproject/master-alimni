<?php

namespace App\Livewire\Student\Certification\Review;

use Livewire\Attributes\Title;
use Livewire\Component;

class ReviewCertificationStudent extends Component
{
    #[Title('Ulasan')]

    public function render()
    {
        return view('livewire.web.student.certification.review.review-certification-student');
    }
}
