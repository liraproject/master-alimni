<?php

namespace App\Livewire\Student\Raport;

use Livewire\Attributes\Title;
use Livewire\Component;

class RaportStudent extends Component
{
    #[Title('Raport')]
    public function render()
    {
        return view('livewire.web.student.raport.raport-student');
    }
}
