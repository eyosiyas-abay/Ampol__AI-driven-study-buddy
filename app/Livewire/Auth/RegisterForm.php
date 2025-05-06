<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
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
        tap(User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]), function ($user) {
            event(new Registered($user));
            $this->redirectRoute('verification.sent');
        });
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
