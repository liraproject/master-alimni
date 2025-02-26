<?php

namespace App\Livewire\Student\Registration;

use Livewire\Attributes\Title;
use Livewire\Component;

class RegistrationStudent extends Component
{
    #[Title('Pendaftaran')]

    public function render()
    {
        return view('livewire.web.student.registration.registration-student');
    }
}
