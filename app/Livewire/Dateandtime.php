<?php

namespace App\Livewire;

use Livewire\Component;

class Dateandtime extends Component
{

    public $currentDate;
    public $currentTime;

    public function mount()
    {
        $this->currentTime = now()->format('h:i:s A');
        $this->currentDate = now()->format('M- d -Y');
        
    }
    public function render()
    {
        return view('livewire.dateandtime');
    }
}
