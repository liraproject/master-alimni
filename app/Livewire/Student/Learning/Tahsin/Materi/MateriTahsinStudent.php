<?php

namespace App\Livewire\Student\Learning\Tahsin\Materi;

use Livewire\Attributes\Title;
use Livewire\Component;

class MateriTahsinStudent extends Component
{
    #[Title('Materi Tahsin')]
    public function render()
    {
        return view('livewire.web.student.learning.tahsin.materi.materi-tahsin-student');
    }
}
