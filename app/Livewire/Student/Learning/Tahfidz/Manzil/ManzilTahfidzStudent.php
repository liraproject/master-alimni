<?php

namespace App\Livewire\Student\Learning\Tahfidz\Manzil;

use Livewire\Attributes\Title;
use Livewire\Component;

class ManzilTahfidzStudent extends Component
{
    #[Title('Manzil')]
    public function render()
    {
        return view('livewire.web.student.learning.tahfidz.manzil.manzil-tahfidz-student');
    }
}
