<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;


class Users extends Component
{

    #[Validate('required|min:3')]
    public $name = '';
    
    #[Validate('required|email:dns|unique:users')]
    public $email = '';

    #[Validate('required|min:3')]
    public $password = '';
    

    public function createNewUser() {

        // // $validated = $this->validate([

        //     // 'name' => 'required|min:3',
        //     // 'email' => 'required|email:dns|unique:users',
        //     // 'password' => 'required|min:3',


        // ]);

        $this->validate(); 
        

       User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password)
       ]);

       $this->reset();
       session()->flash('success', 'User successfully Created.');

    }


    public function render()
    {
        return view('livewire.users', [

            'title' => 'User Page',
            'users' => User::all(),
        ]);
    }
}
