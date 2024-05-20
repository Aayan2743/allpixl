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
    public $dealstatus;


    public function mount($id){
             $this->id=$id;
            //         // dd($id);

            //  $this->dealcloseststus=leads::select('dealstatus')->where('leadid',$this->id)->get();   
            
            //  $this->dealstatus=$this->dealcloseststus[0]->dealstatus;
            //  dd($this->dealcloseststus[0]->dealstatus);
            // $this->dealcloseststus=$id;
        // $update=leads::where()
        //    $this->tetx=leads::select('dealstatus')->where('leadid',$this->id)->get();
           
    }


    

    public function closedeal($id){
        // dd($id);

        $dealamount=checkservice_deal_payment($id);


        if($dealamount['bal_amount']<=0){

            $closedealstatus=leads::where('leadid',$id)->update([
                'dealstatus'=>1
            ]);
    
              $this->dispatch('alert12',
              icon: 'success',
              title: 'Deal Closed Successfully....!',
                );  

        }else{

          
    
              $this->dispatch('alert12',
              icon: 'success',
              title: 'Deal Cant Close Becaue of Balance Payment Pending....!',
                );  

        }


        // dd($dealamount['bal_amount']);

        
       

            
    


    }


    public function lostdeal($id){
        // dd($id);

        $closedealstatus=leads::where('leadid',$id)->update([
            'dealstatus'=>2
        ]);

          $this->dispatch('alert12',
          icon: 'success',
          title: 'Deal Lost....!',
            );  

            
    


    }

    
    public function reopendeal($id){
        // dd($id);

        $closedealstatus=leads::where('leadid',$id)->update([
            'dealstatus'=>3
        ]);

          $this->dispatch('alert12',
          icon: 'success',
          title: 'Deal Re opened Successfully....!',
            );  

            
    


    }

    


    



    public function render()
    {

    //  $this->leadstagetext=leads::select('dealstatus')->where('leadid',$this->id)->get();
        return view('livewire.dealclosestatus');
    }
}
