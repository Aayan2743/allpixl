<?php

namespace App\Http\Controllers;
use App\Models\paymentdata;
use App\Models\userlogin;
use App\Models\plandetails;
use App\Models\customizedsettings;
use App\Models\superadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    //
    public function logincheck(Request $req){
     
        // $checkdata=
        $username = $req->uname;
        $userpassword = $req->upassword;
        //dd($req->all());

        $validator = Validator::make($req->all(), [
            'uname'=>'required', //ok
            'upassword'=>'required', //ok

               ],
             [
            'uname.required'=>'User Name Required....!',
            'upassword.required'=>'User Password Required....!',
           
            ]
              );
               if ($validator->fails()) {   
            $errors = $validator->errors()->messages();
            return response()->json(['status' => '0', 'message' => $errors]);
        }else{
                $check=userlogin::where('email',$username)->where('password', $userpassword)->get();
                $heading=customizedsettings::get();

                $contactno=superadmin::get();
              


                if(count($check)>0){

                    $expdate=paymentdata::where('companyid',$check[0]->companyid)->latest()->get();
                        

                    
                    // dd($check[0]->regendingdate);
                    $req->session()->put('uid', $check[0]->uid);
                    $req->session()->put('email', $check[0]->email);
                    $req->session()->put('fullname', $check[0]->fullname);
                    $req->session()->put('role', $check[0]->role);
                    $req->session()->put('heading', $heading[0]->heading);
                    $req->session()->put('logo', $heading[0]->logo);
                    $req->session()->put('profilelogo', $check[0]->imagepath);
                    $req->session()->put('cid', $check[0]->companyid);
                    $req->session()->put('expdate', $check[0]->regendingdate);
                    session()->put('scontactname', $contactno[0]->fullname);
                    session()->put('scontactnamemobileno', $contactno[0]->mobileno);
                  
                    
                    
                       
                    return response()->json(['status'=> 'success', 'message'=> 'Admin']);     
                  //  dd($check[0]->userid);
                    // $req->session()->put('userid', $check[0]->userid);
                    // $req->session()->put('fullname', $check[0]->fullname);
                    // $req->session()->put('user_role', $check[0]->user_role);
                    // $req->session()->put('user_name', $check[0]->user_name);
                    // $req->session()->put('hospital_id', $check[0]->hospital_id);
                    // $getrole=$check[0]->user_role;
                    //         if($getrole==1){
                    //             return response()->json(['status'=> '1', 'message'=> 'Super Admin']);
                    //         }elseif($getrole== 2){
                    //             return response()->json(['status'=> '2', 'message'=> 'Admin']);     
                    //         }
                    //         elseif($getrole== 3){
                    //             return response()->json(['status'=> '3', 'message'=> 'Hod']);     
                    //         }
                    //         elseif($getrole== 4){
                    //             return response()->json(['status'=> '4', 'message'=> 'Doctor']);     
                    //         }
                        // dd($getrole);
                }else{
                    return response()->json(['status'=> 'failuer', 'message'=> 'Invalid User Name / Password']);  
                    
                }   
               

            }

    }

    public function registercheck(Request $req){
        // dd($req->all());

     
       
        $validator = Validator::make($req->all(), [
            'companyname'=>'required', //ok
            'usermobile'=>'required|numeric|digits:10|unique:loginusers,mobile',//ok
            // 'usermobile'=>'required|numeric|digits:10',//ok
             'eamil'=>'required|email|unique:loginusers,email', //ok
            // 'eamil'=>'required|email', //ok
            'password'=>'required|min:6|max:12', //ok
            
               ],
             [
            'usermobile.required'=>'Mobile Number Required....!',
            'usermobile.numeric'=>'Mobile Allowed Only Numbers',
            'usermobile.digits'=>'Mobile Allowed Only 10 Digits',

            'companyname.required'=>'Company Name Required',
            'eamil.required'=>'Email id Required',
            'eamil.email'=>'Email id should be correct',
            'password.required'=>'Password Required',
            'password.min'=>'Password Min 6 Characters',
            'password.max'=>'Password Max 12 Characters',
           
           
           
            ]
              );
               if ($validator->fails()) {   
                
            $errors = $validator->errors()->messages();
            return response()->json(['status' => '0', 'message' => $errors]);
        }else{

            return response()->json(['status' => 'sendotp']);
       }

    // $this->adduser();

    }

    public function adduser(Request $req){
      


    
        $companyid = uniqid();
    
        $today=now();
       
        // only basic free plan 
        $demodays=plandetails::where('id',1)->get();
        $contactno=superadmin::get();
       

        $regendingdate = $today->addDays($demodays[0]->days);
        // dd($req->all());
        // dd($demodays[0]->id);


        // $newuser=userlogin::insertGetId([
        //     'email'=>$req->eamil,
        //     'password'=>$req->password,
        //     'role'=>1,
        //     'mobile'=>$req->usermobile,
        //     'companyname'=>$req->companyname,
        //     'companyid'=>$companyid,
        //     'fullname'=>$req->uname,
        //     'regdate'=>now(),
        //     'reregistrationdate'=>now(),
        //     'regendingdate'=>$regendingdate,
        //     'plantype'=>$demodays[0]->id,
            
        
        // ]);
        try{

            DB::beginTransaction();


            $newuser=userlogin::insertGetId([
                'email'=>$req->eamil,
                'password'=>$req->password,
                'role'=>1,
                'mobile'=>$req->usermobile,
                'companyname'=>$req->companyname,
                'companyid'=>$companyid,
                'fullname'=>$req->uname,
                'regdate'=>now(),
                'reregistrationdate'=>now(),
                'regendingdate'=>$regendingdate,
                'plantype'=>$demodays[0]->id,
    
            ]);
          
            
            // dd($newuser);
            $createpayment=paymentdata::create([
                'companyid'=>$companyid,
                'uid'=>$newuser,
                'amount'=>0,
                'plan'=>$demodays[0]->id,
                'regdate'=>now(),
                'expdate'=>$regendingdate
            ]);
    
           DB::commit();
    
            
          
   
            
               
            // return response()->json(['status'=> 'success', 'message'=> 'Admin']); 
    
            if($newuser){
            $req->session()->put('uid', $newuser);
            $req->session()->put('email', $req->eamil);
            $req->session()->put('fullname', $req->uname);
            $req->session()->put('role',1);
            $req->session()->put('heading', $req->companyname);
            $req->session()->put('expdate', $regendingdate);
            $req->session()->put('cname', $req->companyname,);
    
            session()->put('scontactname', $contactno[0]->fullname);
            session()->put('scontactnamemobileno', $contactno[0]->mobileno);
    
            $req->session()->put('cid', $companyid);
            // $req->session()->put('logo', $heading[0]->logo);
            // $req->session()->put('profilelogo', $check[0]->imagepath);
                return response()->json(['status' => 'success', 'message' => 'User Created Successfully....!']);
            }else{
                return response()->json(['status' => 'failuer', 'message' => 'User Not Created Successfully....!']);
            }

        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['status' => 'failuer', 'message' => $e]);

        }

       
        
    }
}
