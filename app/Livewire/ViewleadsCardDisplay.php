<?php
namespace App\Livewire;
use Livewire\Component;
use App\Models\leads;
use App\Models\leadstage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class ViewleadsCardDisplay extends Component
{
    public $id;
    public $leadid;
    public function mount($id)
    {
        $this->leadid = $id;
    }
    public function changedata($vv){
        // dd($this->leadid);
        $updatestage=leads::where('leadid',$this->leadid)->update([
            'leadstagetext'=>$vv
        ]);
        if($updatestage==1){
            $this->dispatch('alert',
            icon: 'success',
            title: 'Lead Stage Changed Successfully...!',       
        );
        }
    //    dd($this->leadid);
        // dd($vv);
    }
    public function render()
    {
        if(session()->get('role')==1)
        {
            $checkleadordeal=leads::select('status')->where('leadid',$this->leadid)->get();
            if($checkleadordeal[0]->status==4)
            {
                return redirect()->route('admin.viewdeals');
            }
             elseif($checkleadordeal[0]->status==0 || $checkleadordeal[0]->status==1 || $checkleadordeal[0]->status==2  || $checkleadordeal[0]->status==3)
            {
                $getleadstage=leadstage::where('companyid',session()->get('cid'))->get();
                $getleads=leads::where('leadid',$this->leadid)->get();
                return view('livewire.viewleads-card-display',compact('getleads','getleadstage'));
            }
        }else{
            $checkleadordeal=leads::select('status')->where('leadid',$this->leadid)->get();
            if($checkleadordeal[0]->status==4)
            {
                return redirect()->route('admin.viewdeals');
            }
             elseif($checkleadordeal[0]->status==0 || $checkleadordeal[0]->status==1 || $checkleadordeal[0]->status==2  || $checkleadordeal[0]->status==3)
            {
                $getleads=leads::where('leadid',$this->leadid)->where('leadownerid',session()->get('uid'))->get();
                $getleadstage=leadstage::where('companyid',session()->get('cid'))->get();
                return view('livewire.viewleads-card-display',compact('getleads','getleadstage'));
            }
        }
    }
}
