<?php

namespace App\Livewire\Student\Account;

use Detection\MobileDetect;
use Livewire\Attributes\Title;
use Livewire\Component;

class AccountStudent extends Component
{
    #[Title('Menejemen Akun')]

    public function render(MobileDetect $mobileDetect)
    {
        // if($mobileDetect->isMobile()) {
        //     return view('livewire.web.student.account.account-student')->layout('mobile.layouts.app');
        // }
        return view('livewire.web.student.account.account-student');
    }
}
