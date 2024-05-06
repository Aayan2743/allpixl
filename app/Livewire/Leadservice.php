<?php
namespace App\Livewire;
use Livewire\Component;
use App\Models\projects;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
class Leadservice extends Component
{
    public $coursename;
    public $courseimage;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $editleadstageid="";


    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount(){
        $editleadstageid=""; 
    }


    public function delete($id){
        $deletedata=projects::where('pid',$id)->delete();
        if($deletedata){
           $this->dispatch('delete_leadstage',
              title:'Lead Service Deleted Successfully...!'     
       );
        }
       }



    public function create_project(){
        $this->validate([
            'courseimage' => 'nullable|image|mimes:jpeg,png|max:1024', // 1MB Max
            'coursename' => 'required', // 1MB Max
        ],
            [
             'coursename.required'=>'Lead Service Name Required....!'   
            ]);
        if($this->courseimage){
            $imagePath = $this->courseimage->store('serviceimage', 'public');
            $createleadsourse=projects::create([
                'Project_Name'=>$this->coursename,
                'projectimage'=>$imagePath,
                'companyid'=>session()->get('cid'),
            ]);
            $this->dispatch('create_new_lead_stage',
            title:'New Service Created...!' 
         );
            $this->reset(['courseimage','coursename']);
        }else{
            $createleadsourse=projects::create([
                'Project_Name'=>$this->coursename,
                'companyid'=>session()->get('cid')
            ]);
            $this->dispatch('create_new_lead_stage',
            title:'New Service Created...!'  
         );
         $this->reset(['courseimage','coursename']);
        }
    }
    public function cancel(){
        $this->editleadstageid="";
        $this->reset(['courseimage','coursename']);
    }
    public function update($id){
        $this->editleadstageid=$id;
        $stagenames=projects::select('Project_Name')->where('pid',$id)->get();
        $this->coursename=$stagenames[0]->Project_Name;
        // dd($stagenames[0]->stagename);
    }
    public function update_changes($id){
        $this->validate([
            'courseimage' => 'nullable|image|mimes:jpeg,png|max:1024', // 1MB Max
            'coursename' => 'required', // 1MB Max
        ],
            [
             'coursename.required'=>'Service  Name Required....!',   
             'courseimage.image'=>'Only Image Allowed....!',   
             'courseimage.mimes'=>'Only Image *jpeg, *png Allowed....!',   
            ]);
        // $this->leadsources_image->store('photos','public');
        if($this->courseimage){
            $imagePath = $this->courseimage->store('serviceimage', 'public');
            $createleadsourse=projects::where('pid',$id)->update([
                'Project_Name'=>$this->coursename,
                'projectimage'=>$imagePath,
                'companyid'=>session()->get('cid')
            ]);
            $this->editleadstageid="";
            if($createleadsourse==1){
                $this->dispatch('create_new_lead_stage',
                title:'Service Name Updated...!' 
             );
             $this->reset(['coursename','courseimage']);
            }else{
                $this->dispatch('create_new_lead_stage',
                title:'Nothing Updated...!' 
             );
             $this->reset(['coursename','courseimage']);
            }
        }else{
            $createleadsourse=projects::where('pid',$id)->update([
                'Project_Name'=>$this->coursename,
                'companyid'=>session()->get('cid')
            ]);
            $this->editleadstageid="";
            if($createleadsourse==1){
                $this->dispatch('create_new_lead_stage',
                title:'Lead Stage Updated...!' 
             );
             $this->reset(['coursename','courseimage']);
            }else{
                $this->dispatch('create_new_lead_stage',
                title:'Nothing Updated...!' 
             );
             $this->reset(['coursename','courseimage']);
            }
        }    
        // $updatedata=leadsourcedata::where('lsid',$id)->update([
        //     'leadsource'=>$this->leadsources,
        //     'imagepath'=>$this->leadsources,
        // ]);
    }
   
    public function render()
    {
        $getprojects = projects::orderBy('pid','desc')->where('companyid',session()->get('cid'))->paginate(5);
        return view('livewire.leadservice',compact('getprojects'));
    }
}
