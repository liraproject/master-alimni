<?php

namespace App\Livewire\Guest;

use App\Models\Teacher;
use Livewire\Component;

class DetailProgram extends Component
{
    public $mentors;

    public function mount()
    {
        $this->mentors = Teacher::with(['teacherSkills', 'teacherCertificates'])->get();
    }
    public function render()
    {
        return view('livewire.web.guest.detail-program')->layout('components.web.layouts.landing-layout');
    }
}
