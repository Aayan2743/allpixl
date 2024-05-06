<?php

namespace App\Livewire;
use App\Models\customizedsettings;

use Livewire\Component;

class Generalsetting extends Component
{
 
    public $title_heading;
    public function changetitle(){
        // dd("dsfkjsdfksd");
        $this->validate([
          
            'title_heading' => 'required', // 1MB Max
        ]);


        $updateheading=customizedsettings::where('id','=',4)->update([
            'heading'=>$this->title_heading,
            'companyid'=>session()->get('cid')
        ]);
       // dd($updateheading);
        session()->put('heading', $this->title_heading);
        $this->dispatch('updateheading');
        $this->dispatch('alert',
        position:'center',
        title:'Data Saved',
        
    );
        // notify()->success('Laravel Notify is awesome!');
        // dd("saved");
    }
 
    public function render()
    {



        $getheading=customizedsettings::where('id',4)->get();
        return view('livewire.generalsetting',
        compact(['getheading'])
    );
    }
}
