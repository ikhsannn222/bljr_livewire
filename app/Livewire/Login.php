<?php

namespace App\Livewire;

use  Illuminate\Support\Facades\Auth;
use  Illuminate\Validation\ValidationException;
use Validator;

use Livewire\Component;


#[\Livewire\Attributes\Layout('layouts.guest')]
class Login extends Component
{

    #[\Livewire\Attributes\Rule('required','email')]
    public string $email;

    #[\Livewire\Attributes\Rule('required')]
    public string $password;

    public function login()
    {
        if (Auth::attempt($this->validate())){
            return redirect()->route('home');
        }

        throw Illuminate\Validation\ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records'
        ]);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
