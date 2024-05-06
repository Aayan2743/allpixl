<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\leadstage;
class Leadstages extends Component
{
    public $stagenames;
    public $stageimage;

    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $editleadstageid;

    public function cancel(){
        $this->editleadstageid="";
        $this->reset(['stageimage','stagenames']);
    }

    public function update_lead_stage($id){
        $this->editleadstageid=$id;
        $stagenames=leadstage::select('stagename')->where('stageid',$id)->get();
        $this->stagenames=$stagenames[0]->stagename;
        // dd($stagenames[0]->stagename);
    }

    public function updatePost($id){
        
       
        $this->validate([
            'stageimage' => 'nullable|image|mimes:jpeg,png|max:1024', // 1MB Max
            'stagenames' => 'required', // 1MB Max
        ],
            [
             'stagenames.required'=>'Lead Stage Name Required....!',   
             'stageimage.image'=>'Only Image Allowed....!',   
             'stageimage.mimes'=>'Only Image *jpeg, *png Allowed....!',   
            ]);


        // $this->leadsources_image->store('photos','public');
        if($this->stageimage){
            $imagePath = $this->stageimage->store('leadstage', 'public');
         
            $createleadsourse=leadstage::where('stageid',$id)->update([
                'stagename'=>$this->stagenames,
                'stageimage'=>$imagePath,
            ]);

            $this->editleadstageid="";

            if($createleadsourse==1){
                $this->dispatch('create_new_lead_stage',
                title:'<p>Lead Stage Updated...!</p>' 
             );
             $this->reset(['stageimage','stagenames']);

            }else{

                $this->dispatch('create_new_lead_stage',
                title:'<p>Nothing Updated...!</p>' 
             );
             $this->reset(['stageimage','stagenames']);

            }


          
        
            
        }else{

            $createleadsourse=leadstage::where('stageid',$id)->update([
                'stagename'=>$this->stagenames,
            
            ]);

            $this->editleadstageid="";

            if($createleadsourse==1){
                $this->dispatch('create_new_lead_stage',
                title:'<p>Lead Stage Updated...!</p>' 
             );
             $this->reset(['stageimage','stagenames']);

            }else{

                $this->dispatch('create_new_lead_stage',
                title:'<p>Nothing Updated...!</p>' 
             );
             $this->reset(['stageimage','stagenames']);

            }


          

        }    
        
        
        
        
       

    }


    public function delete_lead_stage($id){
     $deletedata=leadstage::where('stageid',$id)->where('companyid',session()->get('cid'))->delete();

     if($deletedata){
        $this->dispatch('delete_leadstage',
           title:'Lead Stage Deleted Successfully...!'     
    );
     }
        

    }


    public function createleadstage(){

        $this->validate([
            'stageimage' => 'nullable|image|mimes:jpeg,png|max:1024', // 1MB Max
            'stagenames' => 'required', // 1MB Max
        ],
            [
             'stagenames.required'=>'Lead Stage Name Required....!'   
            ]);
            
        if($this->stageimage){
            $imagePath = $this->stageimage->store('leadstage', 'public');
         
            $createleadsourse=leadstage::create([
                'stagename'=>$this->stagenames,
                'stageimage'=>$imagePath,
                'companyid'=>session()->get('cid'),
            ]);
            $this->dispatch('create_new_lead_stage',
            title:'New Lead Stage Created...!' 
         );
        
            $this->reset(['stageimage','stagenames']);
        }else{

            $createleadsourse=leadstage::create([
                'stagename'=>$this->stagenames,
                'companyid'=>session()->get('cid')
            
            ]);
            $this->dispatch('create_new_lead_stage',
            title:'New Lead Stage Created...!' 
         );

            $this->reset(['stageimage','stagenames']);

        }




      


    

    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $getleadstage=leadstage::orderBy('stageid', 'DESC')->where('companyid',session()->get('cid'))->paginate(5);
        return view('livewire.leadstages',compact('getleadstage'));
    }
}
