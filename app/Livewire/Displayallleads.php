<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use DB;


use Livewire\Attributes\On;
use App\Models\leads;
use App\Models\projects;
use App\Models\userlogin;
use App\Models\leadlabel;
use App\Models\leadsourcedata;
use Illuminate\Support\Facades\Response;
use Livewire\WithPagination;


class Displayallleads extends Component
{

    public $search;
    public $searchbydata;
 
    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
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

    public $leadamount;
    public $leadtypesort;
    public $sortOption = '';
    public $deafult = 0;
    public $message = "Expected All Leads Revenue Rs";



public function downloadexcel(){
   
    if(session()->get('role')==1){
        // for admin
        $filePath = public_path('Book1.xlsx');

        // Check if the file exists
        if (file_exists($filePath)) {
            // Return the file as a downloadable response
            $this->dispatch('showpage',
            icon:'success',    
            title:'Sample Excel Format Downloaded...!' );
       
       
            return Response::download($filePath, 'example.xlsx');
          
       
        } else {
            // File not found, return a response indicating this
            return response()->json(['error' => 'File not found'], 404);
        }


    }else{
        // for staff

        $filePath = public_path('bulkuploadleads.xlsx');

        // Check if the file exists
        if (file_exists($filePath)) {
            // Return the file as a downloadable response
            $this->dispatch('showpage',
            icon:'success',    
            title:'Sample Excel Format Downloaded...!' );
       
       
            return Response::download($filePath, 'example.xlsx');
          
       
        } else {
            // File not found, return a response indicating this
            return response()->json(['error' => 'File not found'], 404);
        }

    }


 // Replace this path with the path to your Excel file


}



public function updatedleadtypesort($value){
    $this->leadtypesort=$value;
    // dd($value);

   
}


#[On('coldsearch')]
public function sortbylead($option){

    
    $this->sortOption = $option;
    $this->message = "Expected {$option} Leads Revenue Rs";
    
    
    
    if($option=="All"){
        $this->deafult =0;
    }else{
        $this->deafult =1;
    }
   



}

public function sortbyleadowner($option){
    $this->sortOption = $option;

    $name=userlogin::where('uid',$option)->pluck('fullname');
    // dd($name[0]);
    if(count($name)>0){
        $this->message = "Expected $name[0] Leads Revenue Rs";
    }else{
        $this->message = "Expected Leads Revenue Rs";
    }

   

    // dd( $this->sortOption);

    if($option=="All"){
        $this->deafult =0;
       
    }else{
        $this->deafult =2;
    }
    
}

    public function updatedOwner()
{

       $getname=userlogin::where('uid',$this->owner)->get();
       $this->selecedname=$getname[0]->fullname;
  
}

    public function mount(){
        // $this->owner="Hello";
        $this->owner=session()->get('uid');
        $getname=userlogin::where('uid',$this->owner)->get();
       if(count($getname)>0){
        $this->selecedname=$getname[0]->fullname;
       }

       $this->searchbydata = request()->query('q');
       if($this->searchbydata!=null){
        $this->deafult =1;
        $this->sortOption = $this->searchbydata;

       }
    //    dd($this->searchbydata);
    
       //    $this->sortOption=$this->searchbydata; 
        // 
    }

    public function addNewLead(){   

        //   dd($this->selecedname);

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

            $createleadsourse=leads::create([
                'customer'=>$this->customers,
                'ogrinazation'=>$this->Orginazations,
                'title'=>$this->Title,
                'description'=>$this->Description,
                'label'=>$this->Priotity,
                'owner'=>$this->selecedname,
                'value'=>$this->leadprise,
                'leadownerid'=>$this->owner,
                'phone'=>$this->mobile,
                'email'=>$this->emails,
                'leadsource'=>$this->leadsource,
                'town'=>$this->citys,
                'created_at'=>now(),
                'created_by'=>session()->get('fullname'),
                'created_by_id'=>session()->get('uid'),
                'companyid'=>session()->get('cid'),
              
            ]);
            if($createleadsourse){
               
               $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',
                title:'New Lead Created...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);   
            }else{
                $this->dispatch('alert',
                title:'Something went wrong please try again...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);     
            }



    }


    public function deletelead($id){
        
        $deletelead=leads::where('leadid',$id)->delete();

        if($deletelead==1){
            $this->dispatch('update_list');
            $this->dispatch('alert',
            icon:'success',
            title:'Lead Deleted...!' );
            $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource']);  

        }

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

    public function convert_to_deal(){


        $this->validate([
            'customers' => 'required', // 1MB Max
            'Orginazations' => 'required', // 1MB Max
            'mobile' => 'required|numeric|digits:10', // 1MB Max
            'emails' => 'required|email', // 1MB Max
            'leadprise' => 'required|numeric', // 1MB Max
            'expecteddate' => 'required', // 1MB Max
            'dealrequirments' => 'required', // 1MB Max
          
        ],
            [
             'customers.required'=>'Customer Name Required....!',   
             'Orginazations.required'=>'Company Name Required....!',   
             'Title.required'=>'Service Name Required....!',   
             'leadprise.required'=>'Deal Fixed Amount Required....!',   
             'leadprise.numeric'=>'Deal Fixed Amount Allowed Only Digits....!',   
             'expecteddate.required'=>'Delivery Date Required....!',   
             'dealrequirments.required'=>'Briefly Deal Requirments Required....!',   
            
             'mobile.required'=>'Contact Mobile Number Required....!',   
             'mobile.numeric'=>'Contact Mobile Number Allowed Only Digits....!',   
             'mobile.digits'=>'Contact Mobile Number Allowed Only 10 Digits....!',   
             'emails.required'=>'Contact Email Id Required....!',   
             'emails.email'=>'Contact Email Id Should Be Valid....!',   
             
            
            ]);

            $createleadsourse=leads::where('leadid',$this->editid)->update([
                'customer'=>$this->customers,
                'ogrinazation'=>$this->Orginazations,
                'phone'=>$this->mobile,
                'email'=>$this->emails,
                'value'=>$this->leadprise,
               
                'expacteddate'=>$this->expecteddate,
                'content'=>$this->dealrequirments,
                'status'=>4,
              
              
            ]);


            if($createleadsourse==1){
                $this->editid="";
                $this->dispatch('update_list');
                $this->dispatch('alert',
                icon:'success',    
                title:'Deal Created Successfully...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource','dealrequirments','expecteddate']);   
            }
            else{
                $this->editid="";
                $this->dispatch('alert',
                title:'Nothing Updated...!' );
                $this->reset(['customers','Orginazations','Title','Description','Priotity','owner','mobile','emails','citys','leadprise','leadsource','dealrequirments','expecteddate']);    
            }


    }

    
   #[On('update_list')]
    


    public function render()
    {


        

        if(session()->get('role')==1){
            

       


            if($this->deafult==0){
                $leadsdatas = DB::table('lead')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','!=',4)          
            ->where('companyid',session()->get('cid'))          
            ->orderBy('created_at', 'DESC')->paginate(5);

            $getprojects = projects::where('companyid',session()->get('cid'))->get();
            $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
            // $getalllabel=leadlabel::where('companyid',session()->get('cid'))->get();
            $getalllabel=leadlabel::get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();

            $this->leadamount=leads::where('status','!=',4)->where('companyid',session()->get('cid'))->sum('value');

            $countofleads=leads::where('status','!=',4)->where('companyid',session()->get('cid'))->count(); 

            }elseif($this->deafult==1){
               
                $leadsdatas = DB::table('lead')
                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                ->where('status','!=',4)   

                ->where('label',$this->sortOption)->where('companyid',session()->get('cid'))
                // ->Where('label',$this->searchbydata)->where('companyid',session()->get('cid'))         
                ->orderBy('created_at', 'DESC')->paginate(5);


                $getprojects = projects::where('companyid',session()->get('cid'))->get();
                $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
                $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
                $getalllabel=leadlabel::get();
                $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
    
                $this->leadamount=leads::where('status','!=',4)->where('label',$this->sortOption)->where('companyid',session()->get('cid'))->sum('value');
    
                $countofleads=leads::where('status','!=',4)->where('label',$this->sortOption)->where('companyid',session()->get('cid'))->count(); 

            }
            
            elseif($this->deafult==2){
                $leadsdatas = DB::table('lead')
                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                ->where('status','!=',4)          
                ->where('leadownerid',$this->sortOption)->where('companyid',session()->get('cid'))          
                ->orderBy('created_at', 'DESC')->paginate(5);


                $getprojects = projects::where('companyid',session()->get('cid'))->get();
                $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
                $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
                $getalllabel=leadlabel::get();
                $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
    
                $this->leadamount=leads::where('status','!=',4)->where('leadownerid',$this->sortOption)->where('companyid',session()->get('cid'))->sum('value');
    
                $countofleads=leads::where('status','!=',4)->where('label',$this->sortOption)->where('companyid',session()->get('cid'))->count(); 

            }else{

                $leadsdatas = DB::table('lead')
                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                ->where('status','!=',4)   

                ->where('label',$this->sortOption)->where('companyid',session()->get('cid'))
                // ->Where('label',$this->searchbydata)->where('companyid',session()->get('cid'))         
                ->orderBy('created_at', 'DESC')->paginate(5);


                $getprojects = projects::where('companyid',session()->get('cid'))->get();
                $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
                $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
                $getalllabel=leadlabel::get();
                $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
    
                $this->leadamount=leads::where('status','!=',4)->where('label',$this->sortOption)->where('companyid',session()->get('cid'))->sum('value');
    
                $countofleads=leads::where('status','!=',4)->where('label',$this->sortOption)->where('companyid',session()->get('cid'))->count(); 


            }
            



            
              
            // return view('livewire.dahboardviewleads',compact('leadsdatass','countofleads','getprojects','getempdetails','getalllabel','getleadsource'));

    
            return view('livewire.displayallleads',compact('leadsdatas','countofleads','getprojects','getempdetails','getalllabel','getleadsource'));


        }else{


            if($this->deafult==0){
                $leadsdatas = DB::table('lead')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','!=',4) 
            ->where('leadownerid',session()->get('uid'))       
            ->where('companyid',session()->get('cid'))  
            ->orderBy('created_at', 'DESC')->paginate(5);

            $getprojects = projects::where('companyid',session()->get('cid'))->get();
            $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
            $getalllabel=leadlabel::get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();

            $this->leadamount=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->sum('value');

            $countofleads=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count(); 

            }elseif($this->deafult==1){
                $leadsdatas = DB::table('lead')
                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                ->where('status','!=',4)          
                ->where('label',$this->sortOption) 
                ->where('leadownerid',session()->get('uid'))  
                ->where('companyid',session()->get('cid'))       
                ->orderBy('created_at', 'DESC')->paginate(5);


                $getprojects = projects::where('companyid',session()->get('cid'))->get();
                $getstaff = userlogin::where('companyid',session()->get('cid'))->get();
                $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
                $getalllabel=leadlabel::get();
                $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
    
                $this->leadamount=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->where('label',$this->sortOption)->where('companyid',session()->get('cid'))->sum('value');
    
                $countofleads=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->where('label',$this->sortOption)->where('companyid',session()->get('cid'))->count(); 

            }





        //     $leadsdatas = DB::table('lead')
        // ->selectRaw('*,LEFT(customer, 1) as firstletter')
        // ->where('status','!=',4)
        // ->where('leadownerid',session()->get('uid'))
        // ->orderBy('created_at', 'DESC')->paginate(5);
        
        //     $getprojects = projects::get();
        //     $getstaff = userlogin::get();
        //     $getempdetails=userlogin::get();
        //     $getalllabel=leadlabel::get();
        //     $getleadsource=leadsourcedata::get();
        //     $countofleads=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->count();    
        //     $this->leadamount=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->sum('value');

            return view('livewire.displayallleads',compact('leadsdatas','countofleads','getprojects','getempdetails','getalllabel','getleadsource'));


        }
        
    }
}
