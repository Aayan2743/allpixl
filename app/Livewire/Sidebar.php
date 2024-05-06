<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; 

class Sidebar extends Component
{    public $data="Cold";

    public function cold(){
       

        $this->emit('coldsearch',$this->data);
    }
    
    #[On('updateheading')]
    // #[On('post-created')] 
    public function updated(){
        notify()->success('Laravel Notify is awesome!');
    }
    
    public function render()
    {
        return view('livewire.sidebar');
    }
}
