<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlogin;
use Illuminate\Support\Facades\Validator;

use App\Models\loginusers;

use App\Models\leads;
use App\Models\projects;
use App\Models\indiancitis;
use App\Models\hospitaldetails;
use App\Models\designations;
use App\Models\leadcallnote;
use App\Models\customizedsettings;
use App\Models\leadsourcedata;
use App\Models\leadactivity;
use App\Models\mailsenddata;
use App\Models\folloups;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class email extends Controller
{
    //

    public function converttodeal(Request $request,$id){
      //dd($id);
      $validator = Validator::make($request->all(), [
        'leadvalue'=>'required|numeric', //ok
        'expdate'=>'required|date', //ok     
        'remarks'=>'required', //ok     

                      ],
                    [
                   'leadvalue.required'=>'Deal Amount Required',
                   'leadvalue.numeric'=>'Deal Amount allowed only numbers',
                   'remarks.required'=>'Deal Requirment Required',
                 //   'mailsenddate.required'=>'Email Sent Date Required',
                 //   'nextfollowupemail.required'=>'Next Followup email required',
                   
                  
                   ]
                     );
                      if ($validator->fails()) {   
                
                $errorss = $validator->errors()->messages();

                  return response()->json(['status' => '0', 'message' => $errorss]);
                  // return redirect()->back()->withErrors($errors)->withInput();

               }else{

                $updatedeals=leads::where('leadid',$id)->update([
                  'value'=>$request->leadvalue,
                  'dealfixdate'=>$request->dealfixdata,
                  'expacteddate'=>$request->expdate,
                  'description'=>$request->remarks,
                  'status'=>4,
                ]);


              // return redirect()->route('admin.viewdeals');
                return response()->json(['status' => 'success', 'message' => "Sucessfully converted deal...!"]);

               }
      
      //dd("sdgkjdfkgfdhg");
    }

    public function editdeal(Request $request,$id){
      //dd("sdfgjhg");
      $validator = Validator::make($request->all(), [
        'leadvalue'=>'required|numeric', //ok
        'expdate'=>'required|date', //ok     
        'remarks'=>'required', //ok    

        'customername'=>'required', //ok     
        'company'=>'required', //ok     
        'contactemail'=>'required|email', //ok     
        'contactphone'=>'required|numeric|digits:10', //ok     

                      ],
                    [
                   'leadvalue.required'=>'Deal Amount Required',
                   'leadvalue.numeric'=>'Deal Amount allowed only numbers',
                   'remarks.required'=>'Deal Requirment Required',

                   'customername.required'=>'Customer Name Required',
                   'company.required'=>'Company Name Required',
                   'contactemail.email'=>'Email id should be in correct format',
                   'contactemail.required'=>'Eamil id  Required',
                   'contactphone.required'=>'Contact Number Required',
                   'contactphone.numeric'=>'Contact Number allowed only numbers',
                   'contactphone.digits'=>'Contact Number allowed only 10 digits',
                 //   'mailsenddate.required'=>'Email Sent Date Required',
                 //   'nextfollowupemail.required'=>'Next Followup email required',
                   
                  
                   ]
                     );
                      if ($validator->fails()) {   
                
                $errorss = $validator->errors()->messages();

                  return response()->json(['status' => '0', 'message' => $errorss]);
                  // return redirect()->back()->withErrors($errors)->withInput();

               }else{

                $updatedeals=leads::where('leadid',$id)->update([


                  'value'=>$request->leadvalue,
                  'dealfixdate'=>$request->dealfixdata,
                  'expacteddate'=>$request->expdate,
                  'description'=>$request->remarks,
                  'customer'=>$request->customername,
                  'ogrinazation'=>$request->company,
                  'email'=>$request->contactemail,
                  'phone'=>$request->contactphone,
                 
                ]);

                return response()->json(['status' => 'success', 'message' => "Sucessfully converted deal...!"]);




               }


    }

       public function addemailnotes(Request $request,$id){
      //dd($request->id);
   
           $validator = Validator::make($request->all(), [
               'mailtitle'=>'required', //ok
            //    'mailsenddate'=>'required', //ok
            //    'nextfollowupemail'=>'required', //ok
               'leadidno'=>'required', //ok
               
         
                             ],
                           [
                          'mailtitle.required'=>'Mail Subject Required',
                        //   'mailsenddate.required'=>'Email Sent Date Required',
                        //   'nextfollowupemail.required'=>'Next Followup email required',
                          
                         
                          ]
                            );
                             if ($validator->fails()) {   
                       
                       $errorss = $validator->errors()->messages();
   
                         return response()->json(['status' => '0', 'message' => $errorss]);
                         // return redirect()->back()->withErrors($errors)->withInput();
   
                      }else{
                           // dd("close");
                           $addmaildate=mailsenddata::create([
                                   'leadid'=>$request->leadidno,
                                   'type'=>"Email",
                                   'emailsubject'=>$request->mailtitle,
                                   'mailsenddate'=>now(),
                                   'updated_at'=>now(),
                                  
                                 
   
                           ]);
   
                           $addactivity=leadactivity::create([
                               'leadid'=>$request->leadidno,
                               'name'=>"Email",
                               'message'=>"Email Done with client",
                               'updated'=>now(),
                           ]);
   
                          
   
                           if($addmaildate){
                               return response()->json(['status' => 'success', 'message' => "Email Record Added"]);
                           }else{
                               return response()->json(['status' => 'failuer', 'message' => "Some thing went wrong please try again"]);
                           }
       
                           }
   
       }
}
