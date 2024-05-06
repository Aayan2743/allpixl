<?php
namespace App\Livewire;
use Livewire\Component;
use App\Models\superadmin;
use App\Models\userlogin;
use App\Models\plandetails;
use App\Models\paymentdata;
use Livewire\WithPagination;
use Carbon\Carbon;
class Listcustomers extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $alldata; 
    public $getuniqudata; 
    public $expiredRecords; 
    public $expDates; 
    public $cname; 
    public $isOpen = false; 
    public $username; 
    public $cmobile; 
    public $cemail; 
    public $cplan; 
    public $cpassword; 
    public $planamount; 
    public $plandays; 
    public $plantype; 
    public $current_planname; 
    public $current_plantype; 
    public $current_amount; 
    public $current_expiredate; 
    public $current_companyid; 
    public $current_uid; 
    public $filterbystatus=false; 


    protected $listeners = ['modalHidden'];

    public function resetall()
    {
        $this->reset([
            'cname',
            'username',
            'cmobile',
            'cemail',
            'cplan',
            'cpassword',
            'plandays',
            'planamount',
        ]);
    }


    public function sortbyactive(){
            // dd("sdfhsdf");
        $this->filterbystatus=true;
            // $all=userlogin::where('status',0)->paginate(5);
            // $plans=plandetails::get();
            // return view('livewire.listcustomers',compact('all','plans'));



    }
    public function mount(){

        $records = userlogin::all();
        foreach ($records as $value) {
            $expDateTime = Carbon::parse($value->regendingdate);
            // Get the current date and time
            $currentDateTime = Carbon::now();

            if ($expDateTime->lt($currentDateTime)) {
                //30-04-2024 < 01-05-2024
                // expaired 
                $update=userlogin::where('uid',$value->uid)->update([
                    'expstatus'=>0
                ]);

            } elseif ($expDateTime->gt($currentDateTime)) {
                // not  expired

                $update=userlogin::where('uid',$value->uid)->update([
                    'expstatus'=>1
                ]);
             } 
             
        }







        // $records = paymentdata::all();
        // foreach ($records as $value) {
        //     $expDateTime = Carbon::parse($value->expdate);
        //     // Get the current date and time
        //     $currentDateTime = Carbon::now();
        //     if ($expDateTime->lt($currentDateTime)) {
        //         //30-04-2024 < 01-05-2024
        //         // expaired 
        //         $update=paymentdata::where('expdate',$value->expdate)->update([
        //             'expstatus'=>0
        //         ]);

        //     } elseif ($expDateTime->gt($currentDateTime)) {
        //         $update=paymentdata::where('expdate',$value->expdate)->update([
        //             'expstatus'=>1
        //         ]);
        //      } 
             
        // }

        // $latestexpcompanyid = paymentdata::latest('expdate')->where('expstatus',0)->get();
      
        // if(count($latestexpcompanyid)>0){
        //     foreach($latestexpcompanyid as $values) {
        //         $updateinmainatable=userlogin::where('companyid',$values->companyid)->update([
        //             'expstatus'=>0,
        //             'regendingdate'=>$values->expdate,
                  
        //         ]);
        //     }
        // }else{
        // }
       
    }

    public function toggle()
    {
        $this->isOpen = !$this->isOpen; // Toggles the value of isOpen
    }
    public function extendplans(){
        $currentDate = Carbon::now();
        if ($currentDate->gt($this->current_expiredate)) {
            // renevel 
             $today=now();
           $regendingdate = $today->addDays($this->plandays);
           
           $adddate=paymentdata::create([
               'companyid'=>$this->current_companyid,
               'uid'=>$this->current_uid,
               'amount'=>$this->planamount,
               'plan'=>$this->plantype,
               'regdate'=>now(),
               'expdate'=>$regendingdate,
               'expstatus '=>1,
           ]);
           $update=userlogin::where('companyid',$this->current_companyid)->update([
               'regendingdate'=>$regendingdate,
               'plantype'=>$this->plantype,
               'expstatus'=>1,
           ]);


           $this->dispatch('alert',
           icon: 'success',   
           title:"Your Plan Renewel Successfully...!",
           );
           
        } elseif ($currentDate->lt($this->current_expiredate)) {
           
               // extend function 
           
            $today=now();
             $regendingdate = Carbon::parse($this->current_expiredate)->addDays($this->plandays);
           
            $adddate=paymentdata::create([
                'companyid'=>$this->current_companyid,
                'uid'=>$this->current_uid,
                'amount'=>$this->planamount,
                'plan'=>$this->plantype,
                'regdate'=>$this->current_expiredate,
                'expdate'=>$regendingdate,
                'expstatus '=>1,
            ]);
            $update=userlogin::where('companyid',$this->current_companyid)->update([
                'regendingdate'=>$regendingdate,
                'plantype'=>$this->plantype,
                'expstatus'=>1,
            ]);
            
            $this->dispatch('alert',
           icon: 'success',   
           title:"Your Plan Extended Successfully...!",
           );


        } 
        // dd($this->current_expiredate);
    }
    public function like($uid){
        // $this->planamount=$getamountbyplan[0]->amount;
        // $this->plandays=$getamountbyplan[0]->days;
        // $this->plantype=$getamountbyplan[0]->planid;

        $this->reset(['planamount','plandays','plantype','cplan']);

        // $getdata=userlogin::where('uid',$uid)->pluck('plantype');
        $getdata=userlogin::where('uid',$uid)->get();
        $this->current_uid=$uid;
        $this->current_companyid=$getdata[0]->companyid;
        $getplanname=plandetails::where('planid',$getdata[0]->plantype)->get();
        $this->current_planname=$getplanname[0]->name;
        $this->current_amount=$getplanname[0]->amount;
        $this->current_expiredate=$getdata[0]->regendingdate;
        //  dd($getplanname[0]->name);
        // dd($getplanname[0]->amount);
        // if($getdata[0]==1){ 
        // }
            // dd($getdata[0]);
    }
    public function addnewcustomer(){


      

             // $companyid = Crypt::encrypt($req->usermobile);
             $companyid = uniqid();
             $today=now();
            //  $demodays=plandetails::where('id',$this->plantype)->get();
             $regendingdate = $today->addDays($this->plandays);
        $this->validate([
            'cname'=>'required', 
            'username'=>'required', 
            'cmobile'=>'required|numeric|digits:10', 
            'cemail'=>'required|email|unique:loginusers,email', 
            // 'cplan'=>'required|numeric', 
            'cpassword'=>'required|min:6', 
         ],
         [
             'cname.required'=>'Customer Name Required....!',
             'username.required'=>'User Name Name Required....!',
             'cmobile.required'=>'Customer Mobile Number Required....!',
             'cmobile.numeric'=>'Customer Mobile Number Allowed Digits....!',
             'cmobile.digits'=>'Customer Mobile Number Allowed Only 10 Digits....!',
             'cemail.required'=>'Customer Email id Required....!',
             'cemail.unique'=>'The Following Email id Already Registered....!',
             'cemail.email'=>'Email id should be in correct format....!',
             'cplan.required'=>'Select Plan....!',
             'cpassword.required'=>'Password Field Required....!',
             'cpassword.min'=>'Password too short....!',
         ]
     );
     $adduser=userlogin::insertGetId([
        'email'=>$this->cemail,
        'password'=>$this->cpassword,
        'fullname'=>$this->username,
        'role'=>1,
        'mobile'=>$this->cmobile,
        'designation'=>1,
        'companyname'=>$this->cname,
        'companyid'=>$companyid,
        'reregistrationdate'=>now(),
        'regendingdate'=>$regendingdate,
        'plantype'=>$this->plantype,
     ]);
     $createpayment=paymentdata::create([
        'companyid'=>$companyid,
        'uid'=>$adduser,
        'amount'=>$this->planamount,
        'plan'=>$this->plantype,
        'regdate'=>now(),
        'expdate'=>$regendingdate
    ]);

    $this->dispatch('alert',
            icon: 'success',   
            title:"New Customer Added Successfully...!",
            );



    }
    public function selectplan($v){
        // dd($v);
        // current_plantype
        $getamountbyplan=plandetails::where('planid',$v)->get();
        $this->planamount=$getamountbyplan[0]->amount;
        $this->plandays=$getamountbyplan[0]->days;
        $this->plantype=$getamountbyplan[0]->planid;
    }
    public function getdata($v){
          $this->ss=$v;  
    }
    public function render()
    {

        if($this->isOpen==true){

            

            $all=userlogin::where('expstatus',0)->paginate(5);
            $plans=plandetails::get();
           return view('livewire.listcustomers',compact('all','plans'));

        }else{
            $all=userlogin::where('status',1)->paginate(5);
            $plans=plandetails::get();
           return view('livewire.listcustomers',compact('all','plans'));

        }

      
        
    }

    public function deleteCustomer($uid){
        $getcid=userlogin::where('uid',$uid)->pluck('companyid');
        // dd($getcid[0]);
        $changestatus=userlogin::where('companyid',$getcid[0])->update([
            'status'=>0,
        ]);


        $this->dispatch('alert',
        icon: 'success',   
        title:"Customer Deleted Successfully...!",
        );


    }
}
