<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\leads;
use App\Models\dealspayment;


class Dealclosestatus extends Component
{
      
    public $id;
    public $dealamount;
    public $ids;
    public $leadstagetext;
    public $dealcloseststus;
    public function mount($id){
            $this->id=$id;

            // $this->dealcloseststus=leads::select('dealstatus')->where('leadid',$this->id)->get();   
            
            // $this->dealcloseststus=$id;
        // $update=leads::where()
        //    $this->tetx=leads::select('dealstatus')->where('leadid',$this->id)->get();
           
    }


    public function selectdealstatus($va){
        // dd($va);

        $update=leads::where('leadid',$this->id)->update([
            'dealstatus'=>$va
        ]);

        $this->dealcloseststus=$va;
        // dd($update);
        if($update==1){
            $this->dispatch('alert',
            icon: 'success',   
            title:"Deal Status Changed Successfully...!",
            );
        }
    }

    public function updatedealcloseststus(){
       //  $this->id= dealcloseststus;
    }

    public function render()
    {

    //  $this->leadstagetext=leads::select('dealstatus')->where('leadid',$this->id)->get();
        return view('livewire.dealclosestatus');
    }
}
