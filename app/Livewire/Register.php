<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{

    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register');
    }


    public function storeUser()
    {
        $validated=$this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255|min:4'


        ]);

       $user=User::create([
            'name'=>$this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);
        session()->flash('success', 'Registration Successful');
        return $this->redirect('/customers', navigate:true);

    }
}
