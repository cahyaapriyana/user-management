<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class UserRegisterForm extends Component
{
use WithFileUploads;

#[Validate('required|min:3')]
    public $name = '';
    
    #[Validate('required|email:dns|unique:users')]
    public $email = '';

    #[Validate('required|min:3')]
    public $password = '';
    
    #[Validate('image|max:5000')]
    public $avatar;

    public function render()
    {
        return view('livewire.user-register-form');
    }


    public function createNewUser() {



        $validated = $this->validate();
 
        if($this->avatar){
         $validated['avatar'] = $this->avatar->store('avatar', 'public');
        }
 
        User::create([
         'name' => $this->name,
         'email' => $this->email,
         'password' => Hash::make($this->password),
         'avatar' => $validated['avatar'] 
        ]);
 
        $this->reset();
        session()->flash('success', 'User successfully Created.');

        $this->dispatch('user-created');
 
     }
}
