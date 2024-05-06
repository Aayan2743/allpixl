<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use DB;
use App\Models\leads;

class Dashboarddeals extends Component
{

    public $countofdeals;
    public $customers;
    public $dealfixdata;
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
    public $expecteddates;

    public $editid;

    public $leadamount;




    public function editdeal($id){
        
        $this->editid=$id;
        $this->resetValidation();

        $getlead=leads::where('leadid',$id)->get();
        // dd($getlead);

        $this->customersin=$getlead[0]->customer;
        $this->customers=$getlead[0]->customer;
        $this->Orginazations=$getlead[0]->ogrinazation;
        $this->Title=$getlead[0]->title;
        $this->Description=$getlead[0]->description;
        $this->Priotity=$getlead[0]->label;
        $this->selecedname=$getlead[0]->owner;
        $this->owner=$getlead[0]->leadownerid;
        $this->mobile=$getlead[0]->phone;
        $this->emails=$getlead[0]->email;
        $this->leadsource=$getlead[0]->leadsource;
        $this->citys=$getlead[0]->town;
        $this->leadprise=$getlead[0]->value;
        $this->expecteddates=$getlead[0]->expacteddate;
        $this->dealfixdata=$getlead[0]->dealfixdate;
        $this->dealrequirments=$getlead[0]->content;
       


    }

    public function convert_to_deal(){


        $this->validate([
            'customers' => 'required', // 1MB Max
            'Orginazations' => 'required', // 1MB Max
            'mobile' => 'required|numeric|digits:10', // 1MB Max
            'emails' => 'required|email', // 1MB Max
            'leadprise' => 'required|numeric', // 1MB Max
            'expecteddates' => 'required', // 1MB Max
            'dealrequirments' => 'required', // 1MB Max
          
        ],
            [
             'customers.required'=>'Customer Name Required....!',   
             'Orginazations.required'=>'Company Name Required....!',   
             'Title.required'=>'Service Name Required....!',   
             'leadprise.required'=>'Deal Fixed Amount Required....!',   
             'leadprise.numeric'=>'Deal Fixed Amount Allowed Only Digits....!',   
             'expecteddates.required'=>'Delivery Date Required....!',   
             'dealrequirments.required'=>'Briefly Deal Requirments Required....!',   
            
             'mobile.required'=>'Contact Mobile Number Required....!',   
             'mobile.numeric'=>'Contact Mobile Number Allowed Only Digits....!',   
             'mobile.digits'=>'Contact Mobile Number Allowed Only 10 Digits....!',   
             'emails.required'=>'Contact Email Id Required....!',   
             'emails.email'=>'Contact Email Id Should Be Valid....!',   
             
            
            ]);

            $createleadsourse=leads::where('leadid',$this->editid)->update([
                'customer'=>$this->customers,
                'ogrinazation'=>$this->Orginazations,
                'phone'=>$this->mobile,
                'email'=>$this->emails,
                'value'=>$this->leadprise,
                // 'dealfixdate'=>now(),
                'expacteddate'=>$this->expecteddates,
                'content'=>$this->dealrequirments,
                'status'=>4,
              
              
            ]);


            if($createleadsourse==1){
                $this->editid="";
                $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',    
                title:'Deal Updated Successfully...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource','dealrequirments','expecteddates']);   
            }
            else{
                $this->editid="";
                $this->dispatch('alert',
                icon:'success',
                title:'Nothing Updated...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource','dealrequirments','expecteddates']);    
            }


    }

    public function closedeal($id){
        $closedeal=leads::where('leadid',$id)->update([
            'dealstatus'=>1
        ]);

        if($closedeal==1){
            $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',    
                title:'Deal Closed Successfully...!' );
        }

    }

    public function reopen($id){
        $closedeal=leads::where('leadid',$id)->update([
            'dealstatus'=>3
        ]);

        if($closedeal==1){
            $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',    
                title:'Deal Reopened Successfully...!' );
        }

    }
    

    public function deallost($id){
        $closedeal=leads::where('leadid',$id)->update([
            'dealstatus'=>2
        ]);

        if($closedeal==1){
            $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',    
                title:'Deal Lost...!' );
        }

    }



    #[On('update_list')]
    public function render()
    {
        if(session()->get('role')==1){
         


            $getalldeals = DB::table('lead')
            ->selectRaw('*,LEFT(customer, 1) as fs')
            ->where('status','=',4)
            ->orderBy('dealfixdate', 'desc')   
            ->where('companyid',session()->get('cid'))   
            ->take(3) 
            ->get();
    
            $countofdeals=leads::where('status','=',4)->count();
            // $this->countofdeals=leads::where('status','!=',4)->count();
            return view('livewire.dashboarddeals',compact('getalldeals','countofdeals'));
        }else{

            // for user

          

            $getalldeals = DB::table('lead')
            ->selectRaw('*,LEFT(customer, 1) as fs')
            ->where('status','=',4)
            ->orderBy('dealfixdate', 'desc')   
            ->where('leadownerid',session()->get('uid'))
            
            ->take(3) 
            ->get();
            // $this->countofdeals=leads::where('status','!=',4)->where('leadownerid',session()->count());
            $this->countofdeals=leads::where('status','=',4)->where('leadownerid',session()->get('uid'))->count();

            return view('livewire.dashboarddeals',compact('getalldeals'));

        }

     
    }
}
