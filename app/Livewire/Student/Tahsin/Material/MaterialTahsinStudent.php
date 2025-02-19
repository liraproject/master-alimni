<?php

namespace App\Livewire\Student\Tahsin\Material;

use Livewire\Attributes\Title;
use Livewire\Component;

class MaterialTahsinStudent extends Component
{
    #[Title('Materi Tahsin')]

    public function render()
    {
        return view('livewire.web.student.tahsin.material.material-tahsin-student');
    }
}
