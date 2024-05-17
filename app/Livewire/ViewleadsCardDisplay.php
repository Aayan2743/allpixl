<?php
namespace App\Livewire;
use Livewire\Component;
use App\Models\leads;
use App\Models\leadstage;
use App\Models\projects;
use App\Models\userlogin;
use App\Models\leadsourcedata;
use App\Models\leadlabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class ViewleadsCardDisplay extends Component
{
    public $id;
    public $leadid;
    
    public $customers;
    public $customersin;
    public $Orginazations;
    public $Title;
    public $leadsource;
    public $mobile;
    public $emails;
    public $Priotity;
    public $leadprise;
    public $owner;//=session()->get('uid');
    // $this->owner=session()->get('uid');
    public $citys;
    public $selecedname;
    public $Description;
    public $dealrequirments;
    public $expecteddate;

    public $editid;

    
    
    
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
    
    
       public function editLead($id){
          

        $this->editid=$id;
        $this->resetValidation();

        $getlead=leads::where('leadid',$id)->get();

        $this->customersin=$getlead[0]->customer;
        $this->customers=$getlead[0]->customer;
        $this->Orginazations=$getlead[0]->ogrinazation;
        $this->Title=$getlead[0]->title;
        $this->Description=$getlead[0]->description;
        $this->Priotity=$getlead[0]->label;
        $this->selecedname=$getlead[0]->owner;
        $this->owner=$getlead[0]->leadownerid;
        $this->mobile=$getlead[0]->phone;
        $this->emails=$getlead[0]->email;
        $this->leadsource=$getlead[0]->leadsource;
        $this->citys=$getlead[0]->town;
        $this->leadprise=$getlead[0]->value;
       
        
        // dd($getlead);
       
    }


    public function cancel(){
        $this->editid="";
        $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);   
        $this->resetValidation();
    }
    
    public function updateLead(){

        
        $this->validate([
            'customers' => 'required', // 1MB Max
            // 'Orginazations' => 'required', // 1MB Max
            'Title' => 'required', // 1MB Max
            'leadsource' => 'required', // 1MB Max
            'mobile' => 'required|numeric|digits:10', // 1MB Max
            // 'emails' => 'required|email', // 1MB Max
            'Priotity' => 'required', // 1MB Max
            'owner' => 'required', // 1MB Max
            // 'citys' => 'required', // 1MB Max
            'Description' => 'required', // 1MB Max
        ],
            [
             'customers.required'=>'Customer Name Required....!',   
             'Orginazations.required'=>'Company Name Required....!',   
             'Title.required'=>'Service Name Required....!',   
             'leadsource.required'=>'Lead Source Name Required....!',   
             'mobile.required'=>'Contact Mobile Number Required....!',   
             'mobile.numeric'=>'Contact Mobile Number Allowed Only Digits....!',   
             'mobile.digits'=>'Contact Mobile Number Allowed Only 10 Digits....!',   
             'emails.required'=>'Contact Email Id Required....!',   
             'emails.email'=>'Contact Email Id Should Be Valid....!',   
             'Priotity.required'=>'Select Lead Type....!',   
             'owner.required'=>'Select Lead Owner....!',   
             'citys.required'=>'City Name Required....!',   
             'Description.required'=>'Breif Description About Lead Required....!',   
            
            ]);

            $createleadsourse=leads::where('leadid',$this->editid)->update([
                'customer'=>$this->customers,
                'ogrinazation'=>$this->Orginazations,
                'title'=>$this->Title,
                'description'=>$this->Description,
                'label'=>$this->Priotity,
                'owner'=>$this->selecedname,
                'leadownerid'=>$this->owner,
                'phone'=>$this->mobile,
                'email'=>$this->emails,
                'leadsource'=>$this->leadsource,
                'town'=>$this->citys,
                'value'=>$this->leadprise,
                'created_at'=>now(),
                'created_by'=>session()->get('fullname'),
                'created_by_id'=>session()->get('uid'),
              
            ]);
            if($createleadsourse==1){
                $this->editid="";
                $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',    
                title:'Lead Updated Successfully...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);   
            }else{
                $this->editid="";
                $this->dispatch('alert',
                title:'Nothing Updated...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);    
            }

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
                $getprojects = projects::where('companyid',session()->get('cid'))->get();
            $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
              $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
                $getalllabel=leadlabel::get();           
                
                return view('livewire.viewleads-card-display',compact('getleads','getleadstage','getprojects','getstaff','getempdetails','getleadsource','getalllabel'));
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
                
                
                
                $getprojects = projects::where('companyid',session()->get('cid'))->get();
            $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
              $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
                $getalllabel=leadlabel::get();    
                
                
                
                return view('livewire.viewleads-card-display',compact('getleads','getleadstage','getprojects','getstaff','getempdetails','getleadsource','getalllabel'));
            }
        }
    }
}
