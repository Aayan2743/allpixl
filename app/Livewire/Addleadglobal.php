<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\projects;
use App\Models\userlogin;
use App\Models\leadlabel;
use App\Models\leadsourcedata;
use App\Models\leads;

class Addleadglobal extends Component
{
    public function render()
    {

        
        $getprojects = projects::get();
        $getstaff = userlogin::get();
        $getempdetails=userlogin::get();
        $getalllabel=leadlabel::get();
        $getleadsource=leadsourcedata::get();

        $this->leadamount=leads::where('status','!=',4)->sum('value');

        $countofleads=leads::where('status','!=',4)->count();    
        return view('livewire.addleadglobal',compact('countofleads','getprojects','getempdetails','getalllabel','getleadsource'));

        // return view('livewire.addleadglobal');
    }
}
