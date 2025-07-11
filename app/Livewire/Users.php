<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Users extends Component
{

    public function createUser() {
       User::create([
        'name' => 'User Baru 3',
        'email' => 'tes12t@email.com',
        'password' => Hash::make('password')
       ]);
    }


    public function render()
    {
        return view('livewire.users', [

            'title' => 'User Page',
            'users' => User::all(),
        ]);
    }
}
