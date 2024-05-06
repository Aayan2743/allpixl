<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

use App\Models\leads;

use App\Models\projects;
use App\Models\userlogin;
use App\Models\leadlabel;
use App\Models\leadsourcedata;

class Sidecard extends Component
{



    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }


    public function test(){
        $this->dispatch('openmodel');
    }

  

    #[On('update_list')]
    public function render()
    {



    

        if(session()->get('role')==1){
            //for admin
            $getprojects = projects::where('companyid',session()->get('cid'))->get();
            $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
            $getalllabel=leadlabel::get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();

            $countofleads=leads::where('status','!=',4)->where('companyid',session()->get('cid'))->count();  
            $countofHot=leads::where('label',"Hot")->where('companyid',session()->get('cid'))->where('status','!=',4)->count();
            $countofwarm=leads::where('label',"warm")->where('companyid',session()->get('cid'))->where('status','!=',4)->count();
            $countofcold=leads::where('label',"cold")->where('companyid',session()->get('cid'))->where('status','!=',4)->count();
            $countofwon=leads::where('dealstatus',1)->where('companyid',session()->get('cid'))->count();
            $countoflost=leads::where('dealstatus',2)->where('companyid',session()->get('cid'))->count();
    
            return view('livewire.sidecard',compact(
                'countofHot',    
                'countofwarm',    
                'countofcold',    
                'countofwon',    
                'countoflost','countofleads','getprojects','getempdetails','getalllabel','getleadsource'  
            ));



        }elseif(session()->get('role')==0){
            // for staff

            $getprojects = projects::where('companyid',session()->get('cid'))->get();
            $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
            $getalllabel=leadlabel::get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $countofleads=leads::where('companyid',session()->get('cid'))->where('status','!=',4)->count(); 

            $countofHot=leads::where('label',"Hot")->where('status','!=',4)->where('companyid',session()->get('cid'))->where('leadownerid',session()->get('uid'))->count();
            $countofwarm=leads::where('label',"warm")->where('status','!=',4)->where('companyid',session()->get('cid'))->where('leadownerid',session()->get('uid'))->count();
            $countofcold=leads::where('label',"cold")->where('status','!=',4)->where('companyid',session()->get('cid'))->where('leadownerid',session()->get('uid'))->count();
            $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('cid'))->count();
            $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('cid'))->count();
    
            return view('livewire.sidecard',compact(
                'countofHot',    
                'countofwarm',    
                'countofcold',    
                'countofwon',    
                'countoflost',    'countofleads','getprojects','getempdetails','getalllabel','getleadsource'   
            ));


        }
       
    }
}
