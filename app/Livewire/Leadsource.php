<?php
namespace App\Livewire;
use App\Models\leadsourcedata;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
class Leadsource extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $leadsources;
    public $imagePath;
    public $leadsources_image;   
    public $leadsources_image1="";

    public $editid;

   

    public function deletePost($id){
        
        $deletedata=leadsourcedata::where('lsid',$id)->delete();

        if($deletedata){
            $this->dispatch('delete-leadsource');
        }

    }

    public function updatePost($id){
        //  dd($id);

        // $this->reset(['leadsources','leadsources_image']);

        $this->validate([
            'leadsources_image' => 'nullable|image|mimes:jpeg,png|max:1024', // 1MB Max
            // 'leadsources_image1' => 'image|mimes:jpeg,png|max:1024', // 1MB Max
            'leadsources' => 'required', // 1MB Max
        ]);
        // $this->leadsources_image->store('photos','public');
        if($this->leadsources_image){
            $imagePath = $this->leadsources_image->store('photos', 'public');
              $updatedata=leadsourcedata::where('lsid',$id)->where('companyid',session()->get('cid'))->update([
             'leadsource'=>$this->leadsources,
             'imagepath'=>$imagePath,
             ]);
             $this->editid="";
             if($updatedata==1){
                $this->dispatch('leadsoursecreate-alert',
                title:'Lead Source Updated Successfully...!'  
            );     
             }else{

                $this->dispatch('leadsoursecreate-alert',
                 title:'<p>Nothing Updated...!</p>');  
                
             }

           
            $this->reset(['leadsources','leadsources_image']);

        }else{
           

            $updatedata=leadsourcedata::where('lsid',$id)->where('companyid',session()->get('cid'))->update([
                'leadsource'=>$this->leadsources,
              
                ]);
            
            $this->editid="";

                if($updatedata==1){
                    $this->dispatch('leadsoursecreate-alert',
                    title:'Lead Source Updated Successfully...!'   
                );
                }else{
                    $this->dispatch('leadsoursecreate-alert',
                    title:'Nothing Updated...!'  
                );

                }

           
            $this->reset(['leadsources','leadsources_image']);

        }

        
        
        
        
        // $updatedata=leadsourcedata::where('lsid',$id)->update([
        //     'leadsource'=>$this->leadsources,
        //     'imagepath'=>$this->leadsources,
        // ]);

    }

    public function updated()
    {
        //
        $this->editid="";
    }

    public function updatingSearch()
    {
        $this->resetPage();
       
    }



    public function editPost($id){
        // dd($id);
        $this->editid=$id;

        $leadsoursename=leadsourcedata::where('lsid',$id)->where('companyid',session()->get('cid'))->get();
        // dd($leadsoursename[0]->leadsource);
        $this->leadsources=$leadsoursename[0]->leadsource;
       
        // $this->leadsources=

    }

    public function resetpost(){
        $this->editid="";
        $this->reset(['leadsources','leadsources_image']);
    }



    public function createleadsource(){
        $this->validate([
            'leadsources_image' => 'nullable|image|mimes:jpeg,png|max:1024', // 1MB Max
            'leadsources' => 'required', // 1MB Max
        ]);
       
        if($this->leadsources_image){
            
            $imagePath = $this->leadsources_image->store('photos', 'public');
         
            $createleadsourse=leadsourcedata::create([
                'leadsource'=>$this->leadsources,
                'imagepath'=>$imagePath,
                'companyid'=>session()->get('cid'),
            ]);
            $this->dispatch('leadsoursecreate-alert',
            title:'Lead Source Created Successfully...!'  
        );
            $this->reset(['leadsources','leadsources_image']);
        }else{
            $createleadsourse=leadsourcedata::create([
                'leadsource'=>$this->leadsources,
                'companyid'=>session()->get('cid'),
            
            ]);
            $this->dispatch('leadsoursecreate-alert',
            title:'Lead Source Created Successfully...!' 
        );
            $this->reset(['leadsources','leadsources_image']);

        }
    }
    public function render()
    {
        $getleadsource=leadsourcedata::orderBy('lsid', 'DESC')->where('companyid',session()->get('cid'))->paginate(5);
        return view('livewire.leadsource',compact(['getleadsource']));
    }
}
