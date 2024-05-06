<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\projects;
use App\Models\userlogin;
use App\Models\leadlabel;
use App\Models\leadsourcedata;
 use App\Models\leads;

class Globaladdlead extends Component
{

    
    public $customers;
    public $customersin;
    public $Orginazations;
    public $Title;
    public $leadsource;
    public $mobile;
    public $emails;
    public $Priotity;
    public $leadprise;
    public $owner;//=session()->get('uid');
    // $this->owner=session()->get('uid');
    public $citys;
    public $selecedname;
    public $Description;
    public $dealrequirments;
    public $expecteddate;

    public $editid;

    public $isModalOpen = false;

    public function openModal()
    {
        $this->isModalOpen = true;
    }


    public function updatedOwner()
{

       $getname=userlogin::where('uid',$this->owner)->get();
       $this->selecedname=$getname[0]->fullname;
  
}

    public function mount(){
        // $this->owner="Hello";
        $this->owner=session()->get('uid');
        $getname=userlogin::where('uid',$this->owner)->get();
        $this->selecedname=$getname[0]->fullname;
    }

    // public function cancel(){
       
      
    //     $this->resetValidation();
    // }

    public function addNewLead(){   

        //   dd($this->selecedname);

        $this->validate([
            'customers' => 'required', // 1MB Max
            'Orginazations' => 'required', // 1MB Max
            'Title' => 'required', // 1MB Max
            'leadsource' => 'required', // 1MB Max
            'mobile' => 'required|numeric|digits:10', // 1MB Max
            'emails' => 'required|email', // 1MB Max
            'Priotity' => 'required', // 1MB Max
            'owner' => 'required', // 1MB Max
            'citys' => 'required', // 1MB Max
            'Description' => 'required', // 1MB Max
        ],
            [
             'customers.required'=>'Customer Name Required....!',   
             'Orginazations.required'=>'Company Name Required....!',   
             'Title.required'=>'Service Name Required....!',   
             'leadsource.required'=>'Lead Source Name Required....!',   
             'mobile.required'=>'Contact Mobile Number Required....!',   
             'mobile.numeric'=>'Contact Mobile Number Allowed Only Digits....!',   
             'mobile.digits'=>'Contact Mobile Number Allowed Only 10 Digits....!',   
             'emails.required'=>'Contact Email Id Required....!',   
             'emails.email'=>'Contact Email Id Should Be Valid....!',   
             'Priotity.required'=>'Select Lead Type....!',   
             'owner.required'=>'Select Lead Owner....!',   
             'citys.required'=>'City Name Required....!',   
             'Description.required'=>'Breif Description About Lead Required....!',   
            
            ]);

            $createleadsourse=leads::create([
                'customer'=>$this->customers,
                'ogrinazation'=>$this->Orginazations,
                'title'=>$this->Title,
                'description'=>$this->Description,
                'label'=>$this->Priotity,
                'owner'=>$this->selecedname,
                'value'=>$this->leadprise,
                'leadownerid'=>$this->owner,
                'phone'=>$this->mobile,
                'email'=>$this->emails,
                'leadsource'=>$this->leadsource,
                'town'=>$this->citys,
                'created_at'=>now(),
                'created_by'=>session()->get('fullname'),
                'created_by_id'=>session()->get('uid'),
              
            ]);
            if($createleadsourse){
               
               $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',
                title:'New Lead Created...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);   
            }else{
                $this->dispatch('alert',
                title:'Something went wrong please try again...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);     
            }



    }


    public function render()
    {
        $getprojects = projects::get();
        $getstaff = userlogin::get();
        $getempdetails=userlogin::get();
        $getalllabel=leadlabel::get();
        $getleadsource=leadsourcedata::get();

        $countofleads=leads::where('status','!=',4)->count();    
        // return view('livewire.dahboardviewleads',compact('leadsdatass','countofleads','getprojects','getempdetails','getalllabel','getleadsource'));

        return view('livewire.globaladdlead',compact('countofleads','getprojects','getempdetails','getalllabel','getleadsource'));
    }
}
