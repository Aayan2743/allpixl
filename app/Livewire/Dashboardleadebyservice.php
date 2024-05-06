<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\leads;
use Livewire\Attributes\On;


class Dashboardleadebyservice extends Component
{
    #[On('update_list')]
    public function render()
    {


        if(session()->get('role')==1){

            $leadServiceCount = leads::selectRaw("LEFT(lead.title, 1) as first_character_title, COUNT(*) as title_count, lead.title,projects.projectimage")
            ->where('lead.companyid',session()->get('cid'))
            ->leftJoin('projects', 'lead.title', '=', 'projects.Project_Name')
            ->where('lead.companyid', session()->get('cid'))
            ->where('projects.companyid', session()->get('cid'))
            // ->groupBy('first_character', 'lead.leadsource', 'leadsource.imagepath')
            ->groupBy('first_character_title', 'lead.title','projects.projectimage')
         
            ->orderBy('title_count', 'desc')
           
            ->get();




            return view('livewire.dashboardleadebyservice',compact('leadServiceCount'));

        }else{
            $leadServiceCount = leads::selectRaw("LEFT(lead.title, 1) as first_character_title, COUNT(*) as title_count, lead.title,projects.projectimage")
            ->where('lead.companyid',session()->get('cid'))
            ->leftJoin('projects', 'lead.title', '=', 'projects.Project_Name')
            ->where('lead.companyid', session()->get('cid'))
            ->where('projects.companyid', session()->get('cid'))
            // ->groupBy('first_character', 'lead.leadsource', 'leadsource.imagepath')
            ->groupBy('first_character_title', 'lead.title','projects.projectimage')
            ->where('lead.companyid',session()->get('cid'))
            ->orderBy('title_count', 'desc')
            ->where('leadownerid',session()->get('uid'))
            ->get();
            return view('livewire.dashboardleadebyservice',compact('leadServiceCount'));

        }

       


        // $leadSourcesCount = leads::selectRaw("LEFT(lead.leadsource, 1) as first_character, COUNT(*) as leadsource_count, lead.leadsource, leadsource.imagepath")
        // ->leftJoin('leadsource', 'lead.leadsource', '=', 'leadsource.leadsource')
        // ->groupBy('first_character', 'lead.leadsource', 'leadsource.imagepath')
        // ->orderBy('leadsource_count', 'desc')
        // ->get();



      
    }
}
