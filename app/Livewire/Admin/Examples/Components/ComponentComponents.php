<?php

namespace App\Livewire\Admin\Examples\Components;

use Livewire\Component;

class ComponentComponents extends Component
{
    public function mount()
    {
        // dd('apalah');
    }

    public function handleNotification()
    {
        dd('coba');
        // $this->dispatch('notification', text: 'Notification ('. $t .')');
    }

    public function render()
    {
        return view('livewire.web.admin.examples.components.component-components');
    }
}
