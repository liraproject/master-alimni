<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use Livewire\Attributes\Title;

class BoardingRegistration extends Component
{
    #[Title('Pilih Program Alimni')]

    public function render()
    {
        return view('livewire.web.guest.boarding-registration');
    }
}
