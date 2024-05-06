<?php

namespace App\Livewire;

use Livewire\Component;



class Profilepage extends Component
{

    public function open(){
        dd("dsfhjsdf");
    }

    public $isOpen = false;

    public function toggleDiv()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.profilepage');
    }
}
