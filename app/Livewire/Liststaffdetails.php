<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\userlogin;
use Livewire\WithPagination;
class Liststaffdetails extends Component
{

    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public $empname;
    public $empemail;
    public $emppassword;
    public $emprole;
    public $empdesignation;
    public $empmobile;
    public $editid;
    public $password;
    public $edit_Access;
    public $allstaffaccess=[];



   
    public function edit_access_handler($id){

        $getdata=userlogin::where('uid',$id)->get();



        $edit_accesss=$getdata[0]->edit_access;
        
        if($edit_accesss==1){
            $updatedata=userlogin::where('uid',$id)->update([
                'edit_access'=>0
            ]);

           

            $this->dispatch('alert',
            title:'Edit Access Removed...!' );
        }else{

            $updatedata=userlogin::where('uid',$id)->update([
                'edit_access'=>1
            ]);

           

            $this->dispatch('alert',
            title:'Edit Access Given...!' );

        }
     
     
        // $delete_access=$getdata[0]->edit_access;


        // dd($getdata[0]->edit_access);
        // dd($getdata[0]->delete_access);

        // dd($id);
    }
    
    public function delete_access_handler($id){

        $getdata=userlogin::where('uid',$id)->get();

        

        $delete_access=$getdata[0]->delete_access;
        
        if($delete_access==1){
            $updatedata=userlogin::where('uid',$id)->update([
                'delete_access'=>0
            ]);

           

            $this->dispatch('alert',
            title:'Delete Access Removed...!' );
        }else{

            $updatedata=userlogin::where('uid',$id)->update([
                'delete_access'=>1
            ]);

           

            $this->dispatch('alert',
            title:'Delete Access Given...!' );

        }
     
     
        // $delete_access=$getdata[0]->edit_access;


        // dd($getdata[0]->edit_access);
        // dd($getdata[0]->delete_access);

        // dd($id);
    }

    public function create_new_employee(){

       
        $this->validate([
            'empname' => 'required', // 1MB Max
            'empemail' => 'required|email', // 1MB Max
            'emppassword' => 'required|min:6', // 1MB Max
            'emprole' => 'required', // 1MB Max
            'empdesignation' => 'required', // 1MB Max
            'empmobile' => 'required|numeric|digits:10', // 1MB Max
        ],
            [
             'empname.required'=>'Employee Name Required....!',   
             'empemail.required'=>'Employee Email ID  Required....!',   
             'empemail.email'=>'Employee Email ID Should Be Valid....!',   
             'emppassword.required'=>'Employee Password Required....!',   
             'emppassword.min'=>'Employee Password Minimum 6 Characters Required....!',   
             'emprole.required'=>'Employee Role Required....!',   
             'empdesignation.required'=>'Employee Designation Required....!',   
             'empmobile.required'=>'Employee Mobile Number Required....!',   
             'empmobile.numeric'=>'Employee Mobile Number Only Allowed Numbers....!',   
             'empmobile.digits'=>'Employee Mobile Number Only Allowed 10 Digits....!',   
            ]);

            $createleadsourse=userlogin::create([
                'email'=>$this->empemail,
                'password'=>$this->emppassword,
                'fullname'=>$this->empname,
                'role'=>$this->emprole,
                'mobile'=>$this->empmobile,
                'designation'=>$this->empdesignation,
                'companyname'=>session()->get('cname'),
                'companyid'=>session()->get('cid'),
                'edit_access'=>0,
                'delete_access'=>0,
              
            ]);
            if($createleadsourse){
                $this->dispatch('update_lists');
                $this->dispatch('alert',
                title:'New Employee Created...!' );
                $this->reset(['empemail','emppassword','empname','emprole','empmobile','empdesignation']);   
            }else{
                $this->dispatch('alert',
                title:'Something went wrong please try again...!' );
                $this->reset(['empemail','emppassword','empname','emprole','empmobile','empdesignation']);   
            }

    }

    public function allaccess(){

        // $this->reset(['empemail','emppassword','empname','emprole','empmobile','empdesignation','allstaffaccess']);   
        // // $this->allstaffaccess="";


        // $this->allstaffaccess=userlogin::where('companyid',session()->get('cid'))->get();
        // dd($this->allstaffaccess);
        
    }

    public function cancel(){
        $this->resetValidation();
        $this->editid="";
        $this->reset(['empemail','emppassword','empname','emprole','empmobile','empdesignation']);   
    }

    public function editPost($id){
        $this->resetValidation();
        $this->editid=$id;

        $leadsoursename=userlogin::where('uid',$id)->get();

         $this->empname=$leadsoursename[0]->fullname;
         $this->empemail=$leadsoursename[0]->email;
         $this->emppassword=$leadsoursename[0]->password;
         $this->emprole=$leadsoursename[0]->role;
         $this->empdesignation=$leadsoursename[0]->designation;
         $this->empmobile=$leadsoursename[0]->mobile;
         $this->password=$leadsoursename[0]->password;
         

       
        // $this->leadsources=$leadsoursename[0]->leadsource;
        

    }

    public function update_changes($id){
        $this->validate([
            'empname' => 'required', // 1MB Max
            'empemail' => 'required|email', // 1MB Max
            'emppassword' => 'required|min:6', // 1MB Max
            'emprole' => 'required', // 1MB Max
            'empdesignation' => 'required', // 1MB Max
            'empmobile' => 'required|numeric|digits:10', // 1MB Max
        ],
            [
             'empname.required'=>'Employee Name Required....!',   
             'empemail.required'=>'Employee Email ID  Required....!',   
             'empemail.email'=>'Employee Email ID Should Be Valid....!',   
             'emppassword.required'=>'Employee Password Required....!',   
             'emppassword.min'=>'Employee Password Minimum 6 Characters Required....!',   
             'emprole.required'=>'Employee Role Required....!',   
             'empdesignation.required'=>'Employee Designation Required....!',   
             'empmobile.required'=>'Employee Mobile Number Required....!',   
             'empmobile.numeric'=>'Employee Mobile Number Only Allowed Numbers....!',   
             'empmobile.digits'=>'Employee Mobile Number Only Allowed 10 Digits....!',   
            ]);

            $createleadsourse=userlogin::where('uid',$id)->update([
                'email'=>$this->empemail,
                'password'=>$this->password,
                'fullname'=>$this->empname,
                'role'=>$this->emprole,
                'mobile'=>$this->empmobile,
                'designation'=>$this->empdesignation,
                'companyid'=>session()->get('cid')
              
            ]);
            if($createleadsourse==1){
                $this->dispatch('alert',
                title:'Employee Details Updated Successfully...!' );

                $this->resetValidation();
                $this->editid="";
                $this->reset(['empemail','emppassword','empname','emprole','empmobile','empdesignation']);   

                
            }else{
                $this->dispatch('alert',
                title:'Nothing Updated...!' );
                $this->resetValidation();
                $this->editid="";
                $this->reset(['empemail','emppassword','empname','emprole','empmobile','empdesignation']);   
            }

    }

    
    public function deletePost($id){
            
        if(session()->get('role')==1){
         
            if(session()->get('uid')==$id){
                $this->dispatch('alert',
                title:'You Dont have access to delete your data...!',
                icon:'error');

            }else{

                // $deletedata=userlogin::where('uid',$id)->delete();
                $deletedata=userlogin::where('uid',$id)->update([
                    'status'=>0
                ]);


                if($deletedata){
                   $this->dispatch('alert',
                      title:'Employee Data Succesfully Deleted...!',    
                      icon:'success' );    
               
                }
    
                    else{
    
                $this->dispatch('alert',
                title:'You Dont have access to delete the staff...!',
                icon:'error'
            );   

            }

           

            }
        }
        // dd($id);
       
       }


    public function render()
    {
       

        $getempdetails = userlogin::orderBy('uid', 'desc')
        ->selectRaw('*,LEFT(fullname, 1) as fs')
        ->where('status',1)
        ->where('companyid',session()->get('cid'))
        ->paginate(5);  
        
        return view('livewire.liststaffdetails',compact('getempdetails'));
    }
}
