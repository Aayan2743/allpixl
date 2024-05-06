<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\folloups;
use App\Models\followtypedetails;
use Livewire\WithPagination;

class FollowupAll extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public $leadidno;
    public $dates;
    public $fid;
    public $ftype;
    public $customernames;
    public $orginazations;
    public $phones;
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
            'companyid'=> session()->get('cid'),
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

    public function allfollowup(){
        $this->default=0;
        $this->dates=now();
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

    public function render()
    {

        if(session()->get('role')==1){
            
            // for admin
            if($this->default==0){

                $getfollowuptype=followtypedetails::get();
                $followupdatas = folloups::orderBy('nextfollowup', 'desc')
                ->selectRaw('*,LEFT(customername, 1) as firstletter')
                ->whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')
                ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
                ->where('followupstatus',0)
               
                ->where('companyid',session()->get('cid'))
                ->paginate(5);  
        
                return view('livewire.followup-all',compact('followupdatas','getfollowuptype'));
            }else{

                $getfollowuptype=followtypedetails::get();
                $followupdatas = folloups::orderBy('nextfollowup', 'desc')
                ->selectRaw('*,LEFT(customername, 1) as firstletter')
               
                ->orderBy('nextfollowup','asc')
                ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
                ->where('followupstatus',0)
                ->where('companyid',session()->get('cid'))
               
                ->paginate(5);  
        
                return view('livewire.followup-all',compact('followupdatas','getfollowuptype'));

            }
           

        }else{

            // for staff

            if($this->default==0){
                
                $getfollowuptype=followtypedetails::get();
                $followupdatas = folloups::orderBy('nextfollowup', 'desc')
                ->selectRaw('*,LEFT(customername, 1) as firstletter')
                // ->whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')
                ->whereDate('nextfollowup', $this->dates)->orderBy('nextfollowup','asc')
                ->where('followupstatus',0)
                ->where('teamid',session()->get('uid'))
                ->where('companyid',session()->get('cid'))
                ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
                ->paginate(5);  
        
                return view('livewire.followup-all',compact('followupdatas','getfollowuptype'));

            }elseif($this->default==1){
                 
                $getfollowuptype=followtypedetails::get();
                $followupdatas = folloups::orderBy('nextfollowup', 'desc')
                ->selectRaw('*,LEFT(customername, 1) as firstletter')
                // ->whereDate('nextfollowup',now())
                ->orderBy('nextfollowup','asc')
                ->where('followupstatus',0)
                ->where('teamid',session()->get('uid'))
                ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
                ->where('companyid',session()->get('cid'))
                ->paginate(5);  
        
                return view('livewire.followup-all',compact('followupdatas','getfollowuptype'));

            }elseif($this->default==2){
                $getfollowuptype=followtypedetails::get();
                $followupdatas = folloups::orderBy('nextfollowup', 'desc')
                ->selectRaw('*,LEFT(customername, 1) as firstletter')
                ->whereDate('nextfollowup',$this->dates)
                ->orderBy('nextfollowup','asc')
                ->where('followupstatus',0)
                ->where('teamid',session()->get('uid'))
                ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
                ->where('companyid',session()->get('cid'))
                ->paginate(5);  
        
                return view('livewire.followup-all',compact('followupdatas','getfollowuptype'));

            }
           
            
        }

      
    }
}
