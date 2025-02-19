<?php

namespace App\Livewire\Student\Learning\Tahfidz\Materi;

use Livewire\Attributes\Title;
use Livewire\Component;

class MateriTahfidzStudent extends Component
{
    #[Title('Materi Tahfidz')]
    public function render()
    {
        return view('livewire.web.student.learning.tahfidz.materi.materi-tahfidz-student');
    }
}
