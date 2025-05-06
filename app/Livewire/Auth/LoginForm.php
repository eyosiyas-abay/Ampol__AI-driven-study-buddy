<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginForm extends Component
{
    public string $email = '';
    public string $password = '';

    public function submit()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();

        if (! $user || ! Hash::check($this->password, $user->password)) {
            $this->addError('auth', 'The provided credentials are incorrect.');
            return;
        }

        Auth::login($user);
        $this->redirectRoute('get-started');
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
        ];
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
