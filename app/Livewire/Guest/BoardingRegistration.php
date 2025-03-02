<?php

namespace App\Livewire\Guest;

use App\Models\ProgramCategory;
use Livewire\Component;
use Livewire\Attributes\Title;

class BoardingRegistration extends Component
{
    #[Title('Pilih Program Alimni')]

    //Object
    public $programCategories;

    //HOOK - Execute when component first rendered
    public function mount() {
        $this->programCategories = ProgramCategory::all();
    }

    public function render()
    {
        return view('livewire.web.guest.boarding-registration')->layout('components.web.layouts.guest-layout');
    }
}
