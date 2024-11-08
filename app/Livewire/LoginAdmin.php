<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginAdmin extends Component
{

    public $email;
    public $password;
    public $remember;

public function submit(){
$this->validate([
    'email'=>'required|string|email',
    'password'=>'required',
    'remember'=>'nullable'

]);

if (! Auth::attempt
(['email'=>$this->email,
    'password'=>$this->password],
    $this->remember)
)
{
    throw ValidationException::withMessages(['email'=>'error']);

}
return to_route('index');
}
    public function render()
    {
        return view('livewire.login-admin');
    }
}
