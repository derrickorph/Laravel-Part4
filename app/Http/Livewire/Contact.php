<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $msg;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required|alpha',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'msg'=>'required|min:30',
        ]);
    }
    public function submitForm()
    {
        $this->validate([
            'name'=>'required|alpha',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'msg'=>'required|min:30',
        ]);
        dd($this->name,$this->email,$this->phone,$this->msg);
    }

    public function render()
    {
        return view('livewire.contact');
    }

}
