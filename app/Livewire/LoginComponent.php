<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\userlogin;
use App\Models\paymentdata;
use App\Models\customizedsettings;
use App\Models\superadmin;
class LoginComponent extends Component
{

    public $uname;
    public $upassw;

    
  


    public function Logincheck(){

        $this->validate([
            // 'uname'=>'required|email:rfc,dns',
            'uname'=>'required|email:filter',
            'upassw'=>'required',
           
        ],
        [
            'uname.required'=>'Registered Email id Required....!',
            'uname.email'=>'Registered Email Should Be in Correct Format....!',
            'upassw.required'=>'User Password Required....!',
           
            ]
        
    );

    $check=userlogin::where('email',$this->uname)->where('password', $this->upassw)->get();

    // $expdate=$check[0]->regendingdate;

    


    $heading=customizedsettings::get();


    if(count($check)>0){

        $expdate=paymentdata::where('companyid',$check[0]->companyid)->latest('regdate')->first();

        $contactno=superadmin::get();
        $currentDate = \Carbon\Carbon::now();

        // Assuming you have another date stored in a variable like $otherDate
        $otherDate = $expdate->expdate;
    
        // Calculate the difference in days between the current date and $otherDate
        $differenceInDays = $currentDate->diffInDays($otherDate);
    
        // Determine if the difference is negative
        $isNegative = $currentDate->lt($otherDate); 
        if($isNegative==false){
            session()->flash('error', 'Your Plan Expaired .');

        }else{
            session()->put('uid', $check[0]->uid);
            session()->put('scontactname', $contactno[0]->fullname);
            session()->put('scontactnamemobileno', $contactno[0]->mobileno);
            session()->put('email', $check[0]->email);
            session()->put('fullname', $check[0]->fullname);
            session()->put('role', $check[0]->role);
            session()->put('heading', $heading[0]->heading);
            session()->put('logo', $heading[0]->logo);
            session()->put('profilelogo', $check[0]->imagepath);  
            session()->put('cid', $check[0]->companyid);
            session()->put('expdate', $check[0]->regendingdate);
            session()->put('cname', $check[0]->companyname);
            // $req->session()->put('expdate', $check[0]->regendingdate);
                      
              
    
         
    
            return redirect()->route('admin.home');

        }


        // latest('regdate')->first();
        // dd($expdate->regdate);
       // dd($check[0]->fullname);
       
      
    }else{

        session()->flash('error', 'Invalid credentials.');
     
    }



        // $result=testdata::insert([
        //     'name'=>$this->name,
        //     'age'=>$this->age,
        //     'email'=>$this->email
        // ]);

        // if($result){
        //     $this->restFilter();
        //     $this->data=testdata::get();
        // }

        // dd($this->name, $this->age, $this->email);
    }

    public function updated($field){
        $this->validateOnly($field,[
            'uname'=>'required',
            'upassw'=>'required',
           
            
        ]);

      

     
    }

    public function restFilter(){
        $this->reset(['uname','upass']);
      
    }

    public function render()
    {
        return view('livewire.login-component');
    }
}
