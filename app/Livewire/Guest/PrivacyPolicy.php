<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use Livewire\Attributes\Title;

class PrivacyPolicy extends Component
{
    #[Title('Kebijakan Privasi')]

    public function render()
    {
        return view('livewire.guest.privacy-policy')->layout('components.web.layouts.guest-layout');
    }
}
