<?php

namespace App\Livewire\Student\Profile;

use Livewire\Attributes\Title;
use Livewire\Component;

class ProfileStudent extends Component
{
    #[Title('Profile')]
    public function render()
    {
        return view('livewire.web.student.profile.profile-student');
    }
}
