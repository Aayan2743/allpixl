<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\leadstage;
use App\Models\followtypedetails;
use App\Models\leads;
use App\Models\folloups;
use Carbon\Carbon;
use DB;

class ViewleadsFollowup extends Component
{

    public $leadid;
    public $nextfollowup;
    public $leadname;
    public $leadidno;
    public $customername;
    public $orginazation;
    public $phones;
    public $emailss;
    public $project;
    public $teamid;
    public $teamname;
    public $follouptype;
    public $followupnotes;


    public function cancel(){
        $this->reset(['nextfollowup','followupnotes']);
        $this->resetValidation();
    }

    public function addNewFollowup(){
       
        $this->validate([
            'leadidno'=>'required', //ok
            'follouptype'=>'required', //ok
            'nextfollowup'=>'required', //ok
            'followupnotes'=>'required', //ok
        ],
            [
                'leadidno.required'=>'Lead id Required',
                'follouptype.required'=>'Follow up type required',
                'nextfollowup.required'=>'Next Followup required',
                'followupnotes.required'=>'Followup notes Required',  
             
            
            ]);
            
            $followupdata=folloups::create([
                'leadid'=>$this->leadidno,
                'typeoffollowup'=>$this->follouptype,
                'nextfollowup'=>$this->nextfollowup,
                'customername'=>$this->customername,
                'phone'=>$this->phones,
                'email'=>$this->emailss,
                'project'=>$this->project,
                'companyname'=>$this->orginazation,
                'followupnotes'=>$this->followupnotes,
                'teamid'=>$this->teamid,
                'teamnames'=>$this->teamname,
                'companyid'=>session()->get('cid'),
            ]);
            // dd($followupdata);

            if($followupdata){
                $this->dispatch('alert',
                icon: 'success',
                title: 'New Followup Added...!',  
            );
            }
           

           


    }

    public function mount($id)
    {
        $this->leadid = $id;
    }
    public function render()
    {

        $getfollowuptype=followtypedetails::get();
        $getleadstage=leadstage::get();
        $getleads=leads::where('leadid',$this->leadid)->where('companyid',session()->get('cid'))->get();
        $this->customername=$getleads[0]->customer;
        $this->leadidno=$getleads[0]->leadid;
        $this->orginazation=$getleads[0]->ogrinazation;
        $this->phones=$getleads[0]->phone;
        $this->emailss=$getleads[0]->email;
        $this->project=$getleads[0]->title;
        $this->teamid=$getleads[0]->leadownerid ;
        $this->teamname=session()->get('fullname');

        $currentDate = Carbon::now()->startOfWeek();
        $endDate = Carbon::now()->endOfWeek();
        // Initialize an array to store the data for each day of the week
        $weekData = [];
        // Iterate through each day of the week
        while ($currentDate <= $endDate) {
            // Retrieve data for the current day from the database
            $dataForDay = DB::table('folloupstbl')
                            ->whereDate('nextfollowup', $currentDate->format('Y-m-d'))
                            ->where('leadid',$this->leadid)
                            ->get();
            // Store the data along with the day
            // $weekData[$currentDate->format('l')] = $dataForDay;
            $weekData[$currentDate->format('d')] = $dataForDay; // Format: Day of the week, Month Day
            // Move to the next day
            $currentDate->addDay();
        }
        return view('livewire.viewleads-followup',compact('weekData','getleads','getfollowuptype'));
    }
}
