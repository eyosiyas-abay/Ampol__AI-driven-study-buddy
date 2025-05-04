<?php

namespace App\Livewire\Auth;

use App\Models\EmailVerification;
use App\Models\User;
use Livewire\Component;

class RegisterForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';

    protected $rules =  [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|min:8',
        'passwordConfirm' => 'required|string|min:8|same:password',
    ];

    protected $messages = [
        'passwordConfirm.same' => 'The password confirmation does not match.',
    ];

    public function registerUser(): void
    {
        $user = tap(new User, fn($user) =>  $user->fill([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]));

        $user->sendEmailVerificationNotification();
    }

    public function submit()
    {
        $this->validate();
        $this->registerUser();
    }


    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
