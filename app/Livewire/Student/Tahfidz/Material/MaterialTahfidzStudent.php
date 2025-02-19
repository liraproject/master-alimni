<?php

namespace App\Livewire\Student\Tahfidz\Material;

use Livewire\Attributes\Title;
use Livewire\Component;

class MaterialTahfidzStudent extends Component
{
    #[Title('Materi Tahfidz')]

    public function render()
    {
        return view('livewire.web.student.tahfidz.material.material-tahfidz-student');
    }
}
