<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginForm extends Component
{
    public function someMethod()
    {
        dd('test');
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
