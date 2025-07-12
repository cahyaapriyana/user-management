<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Contact as ContactModel;

class ContactForm extends Form
{
    #[Validate('required|email:dns')]
    public $email = '';
    #[Validate('required|min:3')]
    public $subject = '';
    #[Validate('required|min:3')]
    public $message = '';



    public function store()
    {
        $this->validate(); 

        ContactModel::create($this->all());
    }
}
