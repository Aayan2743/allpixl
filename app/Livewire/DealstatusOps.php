<?php

namespace App\Livewire;

use Livewire\Component;

class DealstatusOps extends Component
{
    public $id;
    
    
    //  $this->id=$id;

    public function mount($id){
        $this->id=$id;
        // dd($id);

    }

    public function render()
    {
        return view('livewire.dealstatus-ops');
    }
}
