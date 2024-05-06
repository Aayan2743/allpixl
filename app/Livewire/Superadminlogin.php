<?php

namespace App\Livewire;

use Livewire\Component;
// use Livewire\Component;
use App\Models\userlogin;
use App\Models\superadmin;
use App\Models\paymentdata;
use App\Models\customizedsettings;


class Superadminlogin extends Component
{

    public $uname;
    public $upassw;

    
  


    public function Logincheck(){

        $this->validate([
            'uname'=>'required',
            'upassw'=>'required',
           
        ],
        [
            'uname.required'=>'User Name Required....!',
            'upassw.required'=>'User Password Required....!',
           
            ]
        
    );

    $check=superadmin::where('email',$this->uname)->where('password', $this->upassw)->get();

    // $expdate=$check[0]->regendingdate;

    


    // $heading=customizedsettings::get();

    if(count($check)>0){

            session()->put('ssid', $check[0]->id);
            session()->put('semail', $check[0]->email);
            session()->put('sfullname', $check[0]->fullname);
            session()->put('srole', $check[0]->role);
        
            // $req->session()->put('expdate', $check[0]->regendingdate);
                      
              
    
         
    
            return redirect()->route('superadmin.home');

        


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
        return view('livewire.superadminlogin');
    }
}
