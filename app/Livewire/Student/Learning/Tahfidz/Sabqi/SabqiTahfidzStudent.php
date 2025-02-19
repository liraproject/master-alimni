<?php

namespace App\Livewire\Student\Learning\Tahfidz\Sabqi;

use Livewire\Attributes\Title;
use Livewire\Component;

class SabqiTahfidzStudent extends Component
{
    #[Title('Sabqi')]
    public function render()
    {
        return view('livewire.web.student.learning.tahfidz.sabqi.sabqi-tahfidz-student');
    }
}
