<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\followtypedetails;
use DB;
use App\Models\folloups;

class Dashboardfollowup extends Component
{

    public $leadidno;
    public $dates;
    public $fid;
    public $customernames;
    public $orginazations;
    public $phones;
    public $ftype;
    public $emailss;
    public $project;
    public $teamid;
    public $teamname;
    public $shedulefollowup;
    public $followuptypes;
    public $followupnotes;
    public $default=0;
    public $datedefault=0;
    public $selectedDateTime;

    public function getfollowupdata($id){

        $this->reset(['shedulefollowup','followuptypes','followupnotes']);
        $this->resetValidation();
            // dd($id);
            $getdata=folloups::where('fid',$id)->get();
            // dd($getdata);
           
            $this->leadidno=$getdata[0]->leadid;
            $this->fid=$getdata[0]->fid;
            $this->customernames=$getdata[0]->customername;
            $this->orginazations=$getdata[0]->companyname;
            $this->phones=$getdata[0]->phone;
            $this->emailss=$getdata[0]->email;
            $this->project=$getdata[0]->project;
            $this->teamid=$getdata[0]->teamid;
            $this->teamname=$getdata[0]->teamnames;
            $this->ftype=$getdata[0]->typeoffollowup;



    }

    public function updateDates(){
       

        // dd($this->dates);
        $this->default=2;
       
    }

    public function mount(){
        $this->dates=now();
    }


    public function reshedulefollowups(){




        $this->validate([
               'shedulefollowup'=>'required', 
               'followuptypes'=>'required', 
               'followupnotes'=>'required', 
            ],
            [
                'shedulefollowup.required'=>'Next Followup Date Required....!',
                'followuptypes.required'=>'Please Select Followup type....!',
                'followupnotes.required'=>'Write Followup Remarks....!',
            ]
        );

        $updatedata=folloups::where('fid',$this->fid)->update([
            'followupstatus'=>1
        ]);
        
        $resheduled=folloups::create([
            'leadid'=> $this->leadidno,
            'typeoffollowup'=> $this->followuptypes,
            'nextfollowup'=> $this->shedulefollowup,
            'customername'=> $this->customernames,
            'phone'=> $this->phones,
            'email'=> $this->emailss,
            'project'=> $this->project,
            'companyname'=> $this->orginazations,
          
            'followupnotes'=> $this->followupnotes,
            'teamid'=> $this->teamid,
            'teamnames'=> $this->teamname,
        ]);

        if($resheduled && $updatedata==1){
            $this->dispatch('alert',
            icon:'success',
            title:'Followup Resheduled Successfully...!'    
        );
        }else{
            $this->dispatch('alert',
            icon:'error',
            title:'Some thing went wrong please try again...!'    
        );

        }


        // dd("sdkghsdfhgsdf");
    }

    public function cancel(){
        $this->reset(['shedulefollowup','followuptypes','followupnotes']);
        $this->resetValidation();
    }

    public function todayfollowup(){
     $this->default=1;
    }

    public function closefollowup(){
        // dd("sdsdhf");

        $this->validate([
            'followupnotes'=>'required', 
           
         ],
         [
             'followupnotes.required'=>'Followup close Notes Required....!',
            
         ]
     );

        $closefollowup=folloups::where('fid',$this->fid)->update([
            'followupstatus'=>2,
            'followupnotes'=>$this->followupnotes
        ]);
        if($closefollowup==1){
            $this->dispatch('alert',
            icon:'success',
            title:'Followup Closed Successfully...!'    
        );
        }

       
        

    }

    public function allfollowup(){
        $this->default=0;
        $this->dates=now();
    }



    public function render()
    {

        if(session()->get('role')==1){
            // for admin
            $getfollowuptype=followtypedetails::get();
            $followupdatas = DB::table('folloupstbl')
                ->selectRaw('*,LEFT(customername, 1) as first_letter')
                ->whereDate('nextfollowup',now())
                ->where('followupstatus',0)
                ->where('companyid',session()->get('cid'))
                ->orderBy('fid', 'desc')
                ->take(3)   
                ->get();
        return view('livewire.dashboardfollowup',compact('followupdatas','getfollowuptype'));


        }else{
            $getfollowuptype=followtypedetails::get();
            $followupdatas = DB::table('folloupstbl')
            ->selectRaw('*,LEFT(customername, 1) as first_letter')
            ->whereDate('nextfollowup',now())
            ->where('teamid',session()->get('uid'))
            ->where('followupstatus',0)
            ->where('companyid',session()->get('cid'))
            ->orderBy('fid', 'desc')
            ->take(3)   
            ->get();
            return view('livewire.dashboardfollowup',compact('followupdatas','getfollowuptype'));


        }

        
    }
}
