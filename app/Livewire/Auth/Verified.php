<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Verified extends Component
{
    public $redirectUrl = '/';

    public function render()
    {
        return view('livewire.auth.verified');
    }
}
