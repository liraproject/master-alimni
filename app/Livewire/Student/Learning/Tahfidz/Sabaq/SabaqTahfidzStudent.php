<?php

namespace App\Livewire\Student\Learning\Tahfidz\Sabaq;

use Livewire\Attributes\Title;
use Livewire\Component;

class SabaqTahfidzStudent extends Component
{
    #[Title('Sabaq')]
    public function render()
    {
        return view('livewire.web.student.learning.tahfidz.sabaq.sabaq-tahfidz-student');
    }
}
