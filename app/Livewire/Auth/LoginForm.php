<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginForm extends Component
{
    public string $email = '';
    public string $password = '';

    public function submit()
    {
        $this->validate();
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|max:255',
        ];
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
