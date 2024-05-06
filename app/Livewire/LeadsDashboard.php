<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\leads;

class LeadsDashboard extends Component
{

    public  $leadsdatas;
    public $showModal = false;

    public function showModal()
    {
        $this->showModal = true;
    }


    public function mount()
    {

        $this->leadsdatas = leads::
        selectRaw('*,LEFT(customer, 1) as firstletter')
        ->where('status','!=',4)
        ->orderBy('leadid', 'DESC')->get();

        // $this->products = leads::all();
    }

    public function render()
    {
        return view('livewire.leads-dashboard');
    }
}
