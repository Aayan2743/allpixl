<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\whatappTemplates;
class Whatappsettings extends Component
{
    use WithPagination;
    public $templatename;
    public $templatemessage;
    public $apikey;
    public $apikeys;
    protected $paginationTheme = 'bootstrap';
    public $editleadstageid="";
    public function updatingSearch()
    {
        $this->resetPage();
    }

 
    public function create_template(){
        $this->validate([
            'templatename' => 'required', // 1MB Max
            'templatemessage' => 'required', // 1MB Max
            'apikey' => 'required', // 1MB Max
        ],
            [
             'templatename.required'=>'Template Name Required....!',   
             'templatemessage.required'=>'Template Message Required....!',   
             'apikey.required'=>'Api Key Required Required....!'   
            ]);
            $createleadsourse=whatappTemplates::create([
                'template_name'=>$this->templatename,
                'template_message'=>$this->templatemessage,
                'apikey'=>$this->apikey,
                'companyid'=>session()->get('cid')
            ]);
            if($createleadsourse){
                $this->dispatch('create_new_lead_stage',
                title:'New WhatApp Template Created...!' );
                $this->reset(['templatename','templatemessage']);   
            }else{
                $this->dispatch('create_new_lead_stage',
                title:'Something went wrong please try again...!' );
                $this->reset(['templatename','templatemessage']);  
            }
    }
    public function delete($id){
        // dd($id);
        $deletedata=whatappTemplates::where('templateid',$id)->delete();
        if($deletedata){
           $this->dispatch('delete_leadstage',
              title:'WhatApp Template Deleted Successfully...!'     
       );
        }
       }
    public function cancel(){
        $this->editleadstageid="";
        $this->reset(['templatename','templatemessage']);  
    }
    public function update($id){
        $this->editleadstageid=$id;
        $stagenames=whatappTemplates::select('template_name','template_message','apikey')->where('templateid',$id)->get();
        $this->templatename=$stagenames[0]->template_name;
        $this->templatemessage=$stagenames[0]->template_message;
        // dd($stagenames[0]->apikey);
        $this->apikey=$stagenames[0]->apikey;
        // dd($stagenames[0]->stagename);
    }
    public function update_changes($id){
        $this->validate([
            'templatename' => 'required', // 1MB Max
            'templatemessage' => 'required', // 1MB Max
            'apikey' => 'required', // 1MB Max
        ],
            [
             'templatename.required'=>'Template Name Required....!',   
             'templatemessage.required'=>'Template Message Required....!',   
             'apikey.required'=>'Api Key Required....!'   
            ]);
            $createleadsourse=whatappTemplates::where('templateid',$id)->update([
                'template_name'=>$this->templatename,
                'template_message'=>$this->templatemessage,
                'apikey'=>$this->apikey,
            ]);
            $this->editleadstageid="";
            if($createleadsourse==1){
                $this->dispatch('create_new_lead_stage',
                title:'WhatApp Template Updated...!' );
                $this->reset(['templatename','templatemessage']);   
            }else{
                $this->dispatch('create_new_lead_stage',
                title:'Nothing Updated...!' );
                $this->reset(['templatename','templatemessage']);   
            }
    }
    public function render()
    {
        $getwhatsapp=whatappTemplates::orderBy('templateid', 'DESC')->where('companyid',session()->get('cid'))->paginate(5);
        return view('livewire.whatappsettings',compact('getwhatsapp'));
    }
}
