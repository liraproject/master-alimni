<?php

namespace App\Livewire\Student\Tahfidz\Murajaah;

use Livewire\Attributes\Title;
use Livewire\Component;

class MurajaahTahfidzStudent extends Component
{
    #[Title('Murajaah')]

    public function render()
    {
        return view('livewire.web.student.tahfidz.murajaah.murajaah-tahfidz-student');
    }
}
