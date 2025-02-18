<?php

namespace App\Livewire\Student\Review;

use Livewire\Attributes\Title;
use Livewire\Component;

class ReviewStudent extends Component
{
    #[Title('Ulasan')]
    public function render()
    {
        return view('livewire.web.student.review.review-student');
    }
}
