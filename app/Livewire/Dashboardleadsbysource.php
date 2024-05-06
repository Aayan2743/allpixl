<?php

namespace App\Livewire;

use App\Models\leadsourcedata;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\leads;
use DB;
 

class Dashboardleadsbysource extends Component


{

    public $leadSourcesCounts;

    public function mount(){
        // $this->leadSourcesCounts="fasfas";

        // $this->leadSourcesCounts = leads::selectRaw("LEFT(lead.leadsource, 1) as first_character, COUNT(*) as leadsource_count, lead.leadsource, leadsource.imagepath")
        // ->leftJoin('leadsource', 'lead.leadsource', '=', 'leadsource.leadsource')
        // ->where('lead.companyid', session()->get('cid'))
        // ->groupBy('first_character', 'lead.leadsource', 'leadsource.imagepath')
        // ->orderBy('leadsource_count', 'desc')
        // ->get();


    //      $leadSourcesCounts = leads::selectRaw("leadsource, COUNT(*) as lead_count")
    // ->where('companyid', session()->get('cid'))
    // ->groupBy('leadsource')
    // ->orderBy('lead_count', 'desc')
    // ->get();




      
    }

    // #[On('update_list')]
    public function render()
    {

        if(session()->get('role')==1){
         
         
           
            // $this->leadSourcesCounts=leads::where('lead.companyid', session()->get('cid'))->count();




        // $leadSourcesCountsddddddddddd = leads::selectRaw("LEFT(lead.leadsource, 1) as first_character, COUNT(*) as leadsource_count, lead.leadsource, leadsource.imagepath")
        // $leadSourcesCountsddddddddddd = leads::selectRaw("lead.leadsource as first_character, COUNT(*) as leadsource_count,lead.leadsource, leadsource.imagepath")
        // ->leftJoin('leadsource', 'lead.leadsource', '=', 'leadsource.leadsource')
        // ->where('lead.companyid', session()->get('cid'))
        // ->groupBy('first_character', 'lead.leadsource', 'leadsource.imagepath')
        // ->orderBy('leadsource_count', 'desc')
        // ->get();



            
            // $leadSourcesCountsddddddddddd = leads::select('leadsource', DB::raw('COUNT(*) as leadsource_count'))
            // ->groupBy('leadsource')
            // ->where('companyid',session()->get('cid'))
            // ->get();


            $leadSourcesCountsddddddddddd = leads::select('lead.leadsource', 'leadsource.imagepath', DB::raw('COUNT(*) as leadsource_count'))
            ->leftJoin('leadsource', 'lead.leadsource', '=', 'leadsource.leadsource')
            ->where('lead.companyid', session()->get('cid'))
            ->where('leadsource.companyid', session()->get('cid'))
            ->groupBy('lead.leadsource', 'leadsource.imagepath')
            ->distinct()
            ->get();

            // $getimage=leadsourcedata::where('leadsource',)

        // $leadSourcesCountsddddddddddd = leads::selectRaw("leadsource, COUNT(*) as lead_count")
        // ->where('companyid', session()->get('cid'))
        // ->groupBy('leadsource')
        // ->orderBy('lead_count', 'desc')
        // ->get();


        // $leadSourcesCounts = DB::table('leadsource')
        // ->leftJoin('lead', 'leadsource.leadsource', '=', 'lead.leadsource')
        // ->select('leadsource.leadsource as lead_source_name', DB::raw('COUNT(lead.leadid ) as lead_count'))
        // ->groupBy('leadsource.leadsource')
        // ->get()
        // ->toArray();

        //  dd($leadSourcesCounts);

        
        // $this->leadSourcesCounts=$leadSourcesCount;
        // leadSourcesCount
        return view('livewire.dashboardleadsbysource',compact('leadSourcesCountsddddddddddd'));
        // return view('livewire.dashboardleadsbysource');
        }   
        else{

            

        // $leadSourcesCount = leads::selectRaw("LEFT(lead.leadsource, 1) as first_character, COUNT(*) as leadsource_count, lead.leadsource, leadsource.imagepath")
        // ->leftJoin('leadsource', 'lead.leadsource', '=', 'leadsource.leadsource')
        // ->where('lead.companyid', session()->get('cid'))
        // ->where('lead.leadownerid',session()->get('uid'))
        // ->groupBy('first_character', 'lead.leadsource', 'leadsource.imagepath')
        // ->orderBy('leadsource_count', 'desc')
      
        // ->get();


        $leadSourcesCountsddddddddddd = leads::select('lead.leadsource', 'leadsource.imagepath', DB::raw('COUNT(*) as leadsource_count'))
        ->leftJoin('leadsource', 'lead.leadsource', '=', 'leadsource.leadsource')
        ->where('lead.companyid', session()->get('cid'))
        ->where('lead.leadownerid', session()->get('uid'))
        ->where('leadsource.companyid', session()->get('cid'))
        
        ->groupBy('lead.leadsource', 'leadsource.imagepath')
        ->distinct()
        ->get();


        // leadSourcesCount
        return view('livewire.dashboardleadsbysource',compact('leadSourcesCountsddddddddddd'));

            }

        }


        
    
}
