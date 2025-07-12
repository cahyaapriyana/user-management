<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Contact as ContactModel;

#[Title('Contact')]

class Contact extends Component
{
    public ContactForm $form;

    public function createNewMessage()
    {
        $this->form->store();

        $this->form->reset();  
        session()->flash('success', 'Message has been sent.');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
