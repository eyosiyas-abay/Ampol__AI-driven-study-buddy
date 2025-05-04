<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class RegisterForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';

    public function submit()
    {
        $this->validate();
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
