<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class DetailAboutUs extends Component
{
    public function render()
    {
        return view('livewire.web.guest.detail-about-us')->layout('components.web.layouts.landing-layout');
    }
}
