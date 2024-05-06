<?php

namespace App\Http\Controllers;


use App\Models\userlogin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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
use App\Models\dealspayments;

class demo extends Controller
{
   
  public function convertlead(Request $request,$id){
    // dd($id);
    $getleaddata=leads::where('leadid',$id)->get();
    //dd($getleaddata);
    return response()->json(['status' => 'success', 'data' => $getleaddata]);

  }

  public function addpayment(Request $request,$id){
    // dd(
    //   "finally came here...."
    // );

    //dd($id);

    $validator = Validator::make($request->all(), [
      'balpay'=>'required|numeric', //ok
  

                    ],
                  [
                 'balpay.required'=>'Balance Amount Should Not Be Empty',
                 'balpay.numeric'=>'Balance Allowed Only Numbers',
                 ]
                   );
                    if ($validator->fails()) {   
              
              $errors = $validator->errors()->messages();

                return response()->json(['status' => '0', 'message' => $errors]);
              
             }else{
              $updatepayment=dealspayments::create([
                'leadid'=>$id,
                'adv'=>$request->balpay,
        
              ]);
        
              if($updatepayment){
                return response()->json(['status' => 'success', 'message' => 'Payment Added succesfully....!']);
        
              }else{
                return response()->json(['status' => 'failuer', 'message' => 'Payment Not Added succesfully....!']);
              }
        
              
            }

      
  }

  public function getpaymet(Request $request,$id){

    $getrequiredamout=leads::select('value')->where('leadid',$id)->get();
    $getleaddata=dealspayments::where('leadid',$id)->get();
    $sum=0;
    $flag=0;
    $lastAdvAmount=0;
    $bal=$getrequiredamout[0]->value;
    if(count($getleaddata)>0){
      $lastAdvAmount = dealspayments::where('leadid', $id)
    ->orderBy('created_at', 'desc')
    ->value('adv');
    
    $sum = dealspayments::where('leadid', $id)->sum('adv');
    $bal=$getrequiredamout[0]->value-$sum;
      if($getrequiredamout[0]->value<$sum){
          // dd("extra paid");
          $flag=1;

      }elseif($getrequiredamout[0]->value>$sum){
          // dd("need to pay");
          $flag=2;
      }elseif($getrequiredamout[0]->value==$sum){
        $flag=3;  
        // dd("final close");
      }
    }

    return response()->json(['status' => 'success', 'data' => $getrequiredamout ,'data2'=>$getleaddata,'sum'=>$sum,'flag'=>$flag,'lastamount'=>$lastAdvAmount,'bal'=>$bal]);
    

  }





    public function recordcallnotes(Request $request,$id){
        //dd($request->id);
   
           $validator = Validator::make($request->all(), [
               'calltitle'=>'required', //ok
            //    'startingcall'=>'required', //ok
            //    'endingcall'=>'required', //ok
               'callnotes'=>'required', //ok
               'leadid'=>'required', //ok
            //    'nextfolloup'=>'required', //ok
         
                             ],
                           [
                          'calltitle.required'=>'Call Title Required',
                        //   'startingcall.required'=>'Call Starting Time &  Date Required',
                        //   'endingcall.required'=>'Call Ending Time &  Date Required',
                          'callnotes.required'=>'Call Notes Required',
                          'leadid.required'=>'Lead id Required',
                        //   'nextfolloup.required'=>'Pleas update next follow up details',
                         
                          ]
                            );
                             if ($validator->fails()) {   
                       
                       $errors = $validator->errors()->messages();
   
                         return response()->json(['status' => '0', 'message' => $errors]);
                         // return redirect()->back()->withErrors($errors)->withInput();
   
                      }else{
   
                           $addcalldate=leadcallnote::create([
                                   'leadid'=>$request->leadid,
                                   'calltitle'=>$request->calltitle,
                                //    'callstartingtime'=>$request->startingcall,
                                   'callendingtime'=>now(),
                                   'callnotes'=>$request->callnotes,
                                   'createdby_name'=>Session::get('fullname'),
                                   'createdby_id'=>Session::get('uid'),
                                   'created_at'=>now(),
                                 
   
                           ]);
   
                           $addactivity=leadactivity::create([
                               'leadid'=>$request->leadid,
                               'name'=>"Call",
                               'message'=>"Call Done with client",
                               'updated'=>now(),
                           ]);
   
                        //    $followupdata=folloups::create([
                        //        'leadid'=>$request->leadid,
                        //        'typeoffollowup'=>"Call",
                        //        'nextfollowup'=>$request->nextfolloup,
                        //    ]);
   
                           if($addcalldate){
                               return response()->json(['status' => 'success', 'message' => "Call Record Added"]);
                           }else{
                               return response()->json(['status' => 'failuer', 'message' => "Some thing went wrong please try again"]);
                           }
       
                           }
   
       }
   
    //
    // public function addemailnotes(Request $request,$id){
    //     //dd($request->leadidno);
     
    //          $validator = Validator::make($request->all(), [
    //              'mailtitle'=>'required', //ok
    //              'mailsenddate'=>'required', //ok
    //              'nextfollowupemail'=>'required', //ok
    //              'leadidno'=>'required', //ok
                 
           
    //                            ],
    //                          [
    //                         'mailtitle.required'=>'Mail Subject Required',
    //                         'mailsenddate.required'=>'Email Sent Date Required',
    //                         'nextfollowupemail.required'=>'Next Followup email required',
                            
                           
    //                         ]
    //                           );
    //                            if ($validator->fails()) {   
                         
    //                      $errorss = $validator->errors()->messages();
     
    //                        return response()->json(['status' => '0', 'message' => $errorss]);
    //                        // return redirect()->back()->withErrors($errors)->withInput();
     
    //                     }else{
    //                          // dd("close");
    //                          $addmaildate=mailsenddata::create([
    //                                  'leadid'=>$request->leadidno,
    //                                  'type'=>"Email",
    //                                  'emailsubject'=>$request->mailtitle,
    //                                  'mailsenddate'=>$request->mailsenddate,
    //                                  'updated_at'=>now(),
                                    
                                   
     
    //                          ]);
     
    //                          $addactivity=leadactivity::create([
    //                              'leadid'=>$request->leadidno,
    //                              'name'=>"Email",
    //                              'message'=>"Email Done with client",
    //                              'updated'=>now(),
    //                          ]);
     
    //                          $followupdata=folloups::create([
    //                              'leadid'=>$request->leadidno,
    //                              'typeoffollowup'=>"Email",
    //                              'nextfollowup'=>$request->nextfollowupemail,
    //                          ]);
     
    //                          if($addmaildate){
    //                              return response()->json(['status' => 'success', 'message' => "Email Record Added"]);
    //                          }else{
    //                              return response()->json(['status' => 'failuer', 'message' => "Some thing went wrong please try again"]);
    //                          }
         
    //                          }
     
    //      }
}
