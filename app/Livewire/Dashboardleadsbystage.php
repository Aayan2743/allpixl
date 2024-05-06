<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\leads;

class Dashboardleadsbystage extends Component
{

    #[On('update_list')]
    public function render()
    {


        if(session()->get('role')==1)
            {
                // for admin
                $counts = leads::selectRaw('leadstagetext, COUNT(*) as count')
                ->groupBy('leadstagetext')
                ->where('status','!=',4)   
                ->where('companyid',session()->get('cid'))   
                ->orderBy('count', 'desc')
                ->get();
        
                return view('livewire.dashboardleadsbystage',compact('counts'));
                
            }else{

                $counts = leads::selectRaw('leadstagetext, COUNT(*) as count')
                ->groupBy('leadstagetext')
                ->where('status','!=',4)   
                ->where('companyid',session()->get('cid'))   
                ->where('leadownerid',session()->get('uid'))   
                ->orderBy('count', 'desc')
                ->get();
        
                return view('livewire.dashboardleadsbystage',compact('counts'));

            }

      
    }
}
