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
use App\Models\whatappTemplates;
use App\Models\leadstage;
use App\Models\leadsourcedata;
use App\Models\leadactivity;
use App\Models\mailsenddata;
// use app\Models\whatappTemplates;
use App\Models\folloups;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use GuzzleHttp\Client;
// use Symfony\Component\HttpFoundation\Request;



class followup extends Controller
{


    public function sendmessage($id,$mm){
        
        $getmobile=leads::where('leadid',$mm)->pluck('phone');

        //  dd($getmobile[0]);
        // $message=whatappTemplates::where('templateid',$id)->pluck('template_message');
        $message=whatappTemplates::where('templateid',$id)->get();

        $Txtmessage=$message[0]->template_message;
        $TxtApi=$message[0]->apikey;
        $Mobile=$getmobile[0];

        //  dd($TxtApi);

    
$curl = curl_init();

curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.360messenger.net/sendMessage/47JC1WfbsxyTikurWK6braCWs7EjxROUyAn',
  CURLOPT_URL => 'https://api.360messenger.net/sendMessage/'.$TxtApi,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('phonenumber' => $Mobile,'text' => $Txtmessage,),
//   CURLOPT_POSTFIELDS => array('phonenumber' => '919440161007','text' => $Txtmessage,),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

if($response === false) {
    // Handle error here
    $errorCode = curl_errno($curl);
    $errorMessage = curl_error($curl);
    echo $errorMessage;

    // Handle error
} else {
    // Get HTTP status code
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    //  echo $statusCode;
    // echo $response;
    if($statusCode==201){
        echo $response;
        return back();
    }
    
    // Use $statusCode as needed
}
// echo $response;




}
    public function ffff(){
        dd("sdfhsd");
    }

    
    public function addcoursedetails(Request $request){
        //  dd($request->all());
        $validator = Validator::make($request->all(), [
          'coursename'=>'required', //ok
          'courseprice'=>'required', //ok
       
         
    
                        ],
                      [
                     'coursename.required'=>'Course Name Required',
                     'courseprice.required'=>'Course Amount Required',
                    
                
                     
                    
                     ]
                       );
                        if ($validator->fails()) {   
                  
                  $errorss = $validator->errors()->messages();
  
                    return response()->json(['status' => '0', 'message' => $errorss]);
                    // return redirect()->back()->withErrors($errors)->withInput();
  
                 }else{
  
                  $createcourse=projects::create([
                      'Project_Name'=>$request->coursename,
                      'amount'=>$request->courseprice,
                    
                    
                  ]);
                  if($createcourse){
                      return response()->json(['status' => 'success', 'message' => 'Course Created...!']);
                  }else{
                      return response()->json(['status' => 'failuer', 'message' => 'Some Thing Went Wrong  Pleas Try Again Later...!']);
                  }
                  
                  // $createcourse=  projects::where('leadid',$request->lid)->update([
                  //     'status'=>4,
                  //     'registrationamount'=>$request->registrationfee,
                  //     'balanceamount'=>$request->balance,
                  //     'dealfixdate'=>now(),
                  // ]);
                 
                 
  
                 }
  
      }

      public function deletecoursebyid(Request $request){
        //dd($request->all());
        $deletecourse=projects::where('pid',$request->fid)->delete();
        return response()->json(['status' => 'success', 'message' => 'Course Deleted Successfully...!']);
    }

      public function updatecourse(Request $request){
        //  dd($request->all());
         $validator = Validator::make($request->all(), [
          'coursename'=>'required', //ok
          'courseprise'=>'required', //ok
       
         
    
                        ],
                      [
                     'coursename.required'=>'Course Name Required',
                     'courseprice.required'=>'Course Amount Required',
                    
                     ]
                       );
                        if ($validator->fails()) {   
                  
                  $errorss = $validator->errors()->messages();
  
                    return response()->json(['status' => '0', 'message' => $errorss]);
                    // return redirect()->back()->withErrors($errors)->withInput();
  
                 }else{
  
                  $createcourseupdate=projects::where('pid',$request->courseid)->update([
                      'Project_Name'=>$request->coursename,
                      'amount'=>$request->courseprise,
                    
                    
                  ]);
                  if($createcourseupdate==1){
                      return response()->json(['status' => 'success', 'message' => 'Course Created...!']);
                  }
                  
                  // $createcourse=  projects::where('leadid',$request->lid)->update([
                  //     'status'=>4,
                  //     'registrationamount'=>$request->registrationfee,
                  //     'balanceamount'=>$request->balance,
                  //     'dealfixdate'=>now(),
                  // ]);
                 
                 
  
                 }
  
      }

      PUBLIC function getprojectdatabyid(Request $request){
        //dd($request->all());
         $getprojectid=projects::where('pid',$request->fid)->get();
 
         return response()->json(['status' => 'success', 'data' => $getprojectid]);
     }

    public function changestage(Request $request){
        // dd($request->all());
        $updatestage=leads::where('leadid',$request->leadidno)->update([
            'leadstagetext'=>$request->leadstage,
           
        ]);

        return response()->json(['status' => 'success', 'message' => 'Lead Stage Changed...!']);

    }

    public function deletetemplatebyid(Request $request){
        // dd($request->all());
        $deletedata=whatappTemplates::where('templateid',$request->fid)->delete();
        return response()->json(['status' => 'success', 'message' => 'Template Deleted...!']);

    }


    public function updatetemplatebyid(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'template_name'=>'required', //ok
            'template_message'=>'required', //ok
         
           
      
                          ],
                        [
                       'template_name.required'=>'Template Name Required',
                       'template_message.required'=>'Template Message Required',
                      
                  
                       
                      
                       ]
                         );
                          if ($validator->fails()) {   
                    
                    $errorss = $validator->errors()->messages();

                      return response()->json(['status' => '0', 'message' => $errorss]);
                      // return redirect()->back()->withErrors($errors)->withInput();

                   }else{
                    
                    $updatetemplate=whatappTemplates::where('templateid',$request->template_id)->update([
                        'template_name'=>$request->template_name,
                        'template_message'=>$request->template_message
                    ]);
                        

                    if($updatetemplate){
                        return response()->json(['status' => 'success', 'message' => "Template Updated....!"]);
                    }else{
                        return response()->json(['status' => 'failuer', 'message' => "Some Thing Went Wrong Please Try Again Later....!"]);
                    }

                   }


    }
    public function gettemplatebyid(Request $request){
        // dd($request->all());
        $getdata=whatappTemplates::where('templateid',$request->fid)->get();
        return response()->json(['status' => 'success', 'data' => $getdata]);

    }

    public function addwhatapptemplete(Request $request){
      //  dd($request->all());
      $validator = Validator::make($request->all(), [
        'template_name'=>'required', //ok
        'template_message'=>'required', //ok
     
       
  
                      ],
                    [
                   'template_name.required'=>'Template Name Required',
                   'template_message.required'=>'Template Message Required',
                  
              
                   
                  
                   ]
                     );
                      if ($validator->fails()) {   
                
                $errorss = $validator->errors()->messages();

                  return response()->json(['status' => '0', 'message' => $errorss]);
                  // return redirect()->back()->withErrors($errors)->withInput();

               }else{
                
                $createtemplate=whatappTemplates::create([
                    'template_name'=>$request->template_name,
                    'template_message'=> nl2br($request->template_message) ,
                  
                  
                ]);

                if($createtemplate){
                    return response()->json(['status' => 'success', 'message' => "Template Added....!"]);
                }else{
                    return response()->json(['status' => 'failuer', 'message' => "Some Thing Went Wrong Please Try Again Later....!"]);
                }

               }


    }

    public function deleteleadstagebyid(Request $request){
        // dd($request->all());
        $deletedata=leadstage::where('stageid',$request->fid)->delete();
        return response()->json(['status' => 'success', 'message' => 'Lead Stage Deleted...!']);

    }

    public function updateleadstagebyid(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'stagename'=>'required', //ok
          
           
      
                          ],
                        [
                       'stagename.required'=>'Lead Stage Name Required',
                     
                  
                       
                      
                       ]
                         );
                          if ($validator->fails()) {   
                    
                    $errorss = $validator->errors()->messages();

                      return response()->json(['status' => '0', 'message' => $errorss]);
                      // return redirect()->back()->withErrors($errors)->withInput();

                   }else{
                         $updatedata=leadstage::where('stageid',$request->stageid)->update([
                            'stagename'=>$request->stagename
                         ]);
                         return response()->json(['status' => 'success', 'message' => "Successfully Lead Stage Updated....!"]);

                   }

    }
    public function getleadstagebyid(Request $request){
        //dd($request->all());
        $getdata=leadstage::where('stageid',$request->fid)->get();
        return response()->json(['status' => 'success', 'data' => $getdata]);
    }
    public function addleadstage(Request $request){
        $validator = Validator::make($request->all(), [
            'stagename'=>'required', //ok
         
           
      
                          ],
                        [
                       'stagename.required'=>'Lead Stage Name Required',
                      
                  
                       
                      
                       ]
                         );
                          if ($validator->fails()) {   
                    
                    $errorss = $validator->errors()->messages();

                      return response()->json(['status' => '0', 'message' => $errorss]);
                      // return redirect()->back()->withErrors($errors)->withInput();

                   }else{
                    
                    $createleadsource=leadstage::create([
                        'stagename'=>$request->stagename,
                      
                    ]);

                    if($createleadsource){
                        return response()->json(['status' => 'success', 'message' => "Lead Stage Added....!"]);
                    }else{
                        return response()->json(['status' => 'failuer', 'message' => "Some Thing Went Wrong Please Try Again Later....!"]);
                    }

                   }

        // dd($request->all());
    }

    public function deleteleadsourcebyid(Request $request){
        //dd($request->all());
        $deletedata=leadsourcedata::where('lsid',$request->fid)->delete();
        return response()->json(['status' => 'success', 'message' => 'Lead Source  Deleted...!']);
    }

    public function updateleadsource(Request $request){
        $validator = Validator::make($request->all(), [
            'leadname'=>'required', //ok
          
           
      
                          ],
                        [
                       'leadname.required'=>'Lead Source Name Required',
                     
                  
                       
                      
                       ]
                         );
                          if ($validator->fails()) {   
                    
                    $errorss = $validator->errors()->messages();

                      return response()->json(['status' => '0', 'message' => $errorss]);
                      // return redirect()->back()->withErrors($errors)->withInput();

                   }else{
                         $updatedata=leadsourcedata::where('lsid',$request->lsidd)->update([
                            'leadsource'=>$request->leadname
                         ]);
                         return response()->json(['status' => 'success', 'message' => "Successfully Lead Source Updated....!"]);

                   }

    }

    public function getleadsourcebyid(Request $request){
        // dd($request->all());
    $getdata=leadsourcedata::where('lsid',$request->fid)->get();
        
    return response()->json(['status' => 'success', 'data' => $getdata]);

    }



    public function deletestaff(Request $request){
       // dd($request->all());

        $deletestaff=userlogin::where('uid',$request->staffid)->update([
            'status'=>0
        ]);
        
        return response()->json(['status' => 'success', 'message' => 'Employee Deleted...!']);

    }

    public function getmyprofiledetails(Request $request){

        $getprofile=userlogin::where('uid',$request->pid)->get();
        $imagepath=asset($getprofile[0]->imagepath);

        // dd($imagepath);
        return response()->json(['status' => 'success', 'data' => $getprofile ,'img'=>$imagepath]);
        //dd($getprofile);

    }

    public function updatemyprofiledetails(Request $request){
  //dd($request->all());
        $validator = Validator::make($request->all(), [
            'empname'=>'required', //ok
            'empemail'=>'required|email', //ok
            'phoneno'=>'required|numeric|digits:10', //ok
            'emppassword'=>'required', //ok
            'Designation'=>'required', //ok
            'avatar'=>'image|mimes:jpeg,png,jpg,gif|max:2048', //ok
           
      
                          ],
                        [
                       'empname.required'=>'Employee Name Required',
                       'empemail.required'=>'Employee Email  required',
                       'empemail.email'=>'Employee Email should be in correct required',
                       'phoneno.required'=>'Employee Mobile Number Required',
                       'phoneno.numeric'=>'Employee Mobile Number Allowed Only Digits ',
                       'phoneno.digits'=>'Employee Mobile Number Allowed Only 10 Digits ',
                       'Designation.required'=>'Employee Designation Required',
                       'avatar.image'=>'Employee Image Required',
                       'avatar.mimes'=>'Employee Image Allowed Only jpeg , png , jpg , gif ',
                  
                       
                      
                       ]
                         );
                          if ($validator->fails()) {   
                    
                    $errorss = $validator->errors()->messages();

                      return response()->json(['status' => '0', 'message' => $errorss]);
                      // return redirect()->back()->withErrors($errors)->withInput();

                   }else{

                    if($request->avatar==null){

                        $updateprofile=userlogin::where('uid',session()->get('uid'))->update([
                           
                            'fullname'=>$request->empname,
                            'email'=>$request->empemail,
                            'password'=>$request->emppassword,
                            'mobile'=>$request->phoneno,
                            'designation'=>$request->Designation
                    ]);

                    $request->session()->put('email', $request->empemail);
                    $request->session()->put('fullname', $request->empname);
                 

                    return response()->json(['status' => 'success', 'message' =>"Profile Updated Successfully...!"]);

                    } else{

                        if($request->imgpaths==null){
                            $image = $request->file('avatar');
                            $imageName = time() . '.' . $image->getClientOriginalExtension();
                            $image->move(public_path('images'), $imageName);
                           // dd('images'.'/'.$imageName);
                            $updateprofile=userlogin::where('uid',session()->get('uid'))->update([
                                    'imagepath'=>'images'.'/'.$imageName,
                                    'fullname'=>$request->empname,
                                    'email'=>$request->empemail,
                                    'password'=>$request->emppassword,
                                    'mobile'=>$request->phoneno,
                                    'designation'=>$request->Designation
                            ]);

                            $request->session()->put('email', $request->empemail);
                            $request->session()->put('fullname', $request->empname);
                            $request->session()->put('profilelogo', 'images'.'/'.$imageName);

                            return response()->json(['status' => 'success', 'message' =>"Profile Updated Successfully...!"]);
                        }else{

                            $fileToDelete = public_path($request->imgpaths);
                  
                            if(file_exists($fileToDelete)) {
                             //   dd("fsdjhf");
                                unlink($fileToDelete);
                                 
                                $image = $request->file('avatar');
                                $imageName = time() . '.' . $image->getClientOriginalExtension();
                                $image->move(public_path('images'), $imageName);
                               // dd('images'.'/'.$imageName);
                                $updateprofile=userlogin::where('uid',session()->get('uid'))->update([
                                        'imagepath'=>'images'.'/'.$imageName,
                                        'fullname'=>$request->empname,
                                        'email'=>$request->empemail,
                                        'password'=>$request->emppassword,
                                        'mobile'=>$request->phoneno,
                                        'designation'=>$request->Designation
                                ]);

                           
                                $request->session()->put('email', $request->empemail);
                                $request->session()->put('fullname', $request->empname);
                                $request->session()->put('profilelogo', 'images'.'/'.$imageName);
                             
                              
                              
                              
                                return response()->json(['status' => 'success', 'message' =>"Profile Updated Successfully...!"]);

                        }else{
                            $image = $request->file('avatar');
                            $imageName = time() . '.' . $image->getClientOriginalExtension();
                            $image->move(public_path('images'), $imageName);
                           // dd('images'.'/'.$imageName);
                            $updateprofile=userlogin::where('uid',session()->get('uid'))->update([
                                    'imagepath'=>'images'.'/'.$imageName,
                                    'fullname'=>$request->empname,
                                    'email'=>$request->empemail,
                                    'password'=>$request->emppassword,
                                    'mobile'=>$request->phoneno,
                                    'designation'=>$request->Designation
                            ]);

                       
                            $request->session()->put('email', $request->empemail);
                            $request->session()->put('fullname', $request->empname);
                            $request->session()->put('profilelogo', 'images'.'/'.$imageName);
                         
                          
                          
                          
                            return response()->json(['status' => 'success', 'message' =>"Profile Updated Successfully...!"]);

                        }




                        // $fileToDelete = public_path($request->imgpaths);
                  
                        // if(file_exists($fileToDelete)) {
                        //  //   dd("fsdjhf");
                        //     unlink($fileToDelete);
                             
                        //     $image = $request->file('avatar');
                        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
                        //     $image->move(public_path('images'), $imageName);
                        //    // dd('images'.'/'.$imageName);
                        //     $updateprofile=userlogin::where('uid',session()->get('uid'))->update([
                        //             'imagepath'=>'images'.'/'.$imageName,
                        //             'fullname'=>$request->empname,
                        //             'email'=>$request->empemail,
                        //             'password'=>$request->emppassword,
                        //             'mobile'=>$request->phoneno,
                        //             'designation'=>$request->Designation
                        //     ]);
                        //     return response()->json(['status' => 'success', 'message' =>"Profile Updated Successfully...!"]);

                          
                        // } else if(!file_exists($fileToDelete)) {
                        //       dd("djsdhd coming") ; 
                        //     $image = $request->file('avatar');
                        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
                        //     $image->move(public_path('images'), $imageName);
                        //    // dd('images'.'/'.$imageName);
                        //     $updateprofile=userlogin::where('uid',session()->get('uid'))->update([
                        //             'imagepath'=>'images'.'/'.$imageName,
                        //             'fullname'=>$request->empname,
                        //             'email'=>$request->empemail,
                        //             'password'=>$request->emppassword,
                        //             'mobile'=>$request->phoneno,
                        //             'designation'=>$request->Designation
                        //     ]);
                        //     return response()->json(['status' => 'success', 'message' =>"Profile Updated Successfully...!"]);
                          
                        // }
                       



                     
                               
                    }  

                   }


     

       
     


  

    }
}



    public function addfollowupnotes(Request $request,$id)
    {

//  dd($request->email);
            $validator = Validator::make($request->all(), [
                'leadidno'=>'required', //ok
                'follouptype'=>'required', //ok
                'nextfollowup'=>'required', //ok
                'followupnotes'=>'required', //ok
               
          
                              ],
                            [
                           'leadidno.required'=>'Lead id Required',
                           'follouptype.required'=>'Follow up type required',
                           'nextfollowup.required'=>'Next Followup required',
                           'followupnotes.required'=>'Followup notes Required',
                           
                          
                           ]
                             );
                              if ($validator->fails()) {   
                        
                        $errorss = $validator->errors()->messages();
    
                          return response()->json(['status' => '0', 'message' => $errorss]);
                          // return redirect()->back()->withErrors($errors)->withInput();
    
                       }else{
                            //dd("close");
                           
    
                            $followupdata=folloups::create([
                                'leadid'=>$request->leadidno,
                                'typeoffollowup'=>$request->follouptype,
                                'nextfollowup'=>$request->nextfollowup,
                                'customername'=>$request->customername,
                                'phone'=>$request->phone,
                                'email'=>$request->email,
                                'project'=>$request->project,
                                'companyname'=>$request->company,
                                'followupnotes'=>$request->followupnotes,
                                'teamid'=>$request->teamid,
                                'teamnames'=>$request->teamname,
                            ]);
    
                            if($followupdata){
                                return response()->json(['status' => 'success', 'message' => "Follow up Record Added"]);
                            }else{
                                return response()->json(['status' => 'failuer', 'message' => "Some thing went wrong please try again"]);
                            }
        
                            }
    
    }


     public function reshedule(Request $request,$id){

            //  dd($request->email);
                        $validator = Validator::make($request->all(), [
                            'leadidno'=>'required', //ok
                            'follouptype'=>'required', //ok
                            'nextfollowup'=>'required', //ok
                            'followupnotes'=>'required', //ok
                           
                      
                                          ],
                                        [
                                       'leadidno.required'=>'Lead id Required',
                                       'follouptype.required'=>'Follow up type required',
                                       'nextfollowup.required'=>'Next Followup required',
                                       'followupnotes.required'=>'Followup notes Required',
                                       
                                      
                                       ]
                                         );
                                          if ($validator->fails()) {   
                                    
                                    $errorss = $validator->errors()->messages();
                
                                      return response()->json(['status' => '0', 'message' => $errorss]);
                                      // return redirect()->back()->withErrors($errors)->withInput();
                
                                   }else{
                                        //dd("close");
                                       
                
                                        $followupdata=folloups::create([
                                            'leadid'=>$request->leadidno,
                                            'typeoffollowup'=>$request->follouptype,
                                            'nextfollowup'=>$request->nextfollowup,
                                            'customername'=>$request->customername,
                                            'phone'=>$request->phone,
                                            'email'=>$request->email,
                                            'project'=>$request->project,
                                            'companyname'=>$request->company,
                                            'followupnotes'=>$request->followupnotes,
                                            'teamid'=>$request->teamid,
                                            'teamnames'=>$request->teamname,
                                        ]);
                
                                        if($followupdata){
                                            return response()->json(['status' => 'success', 'message' => "Follow up Record Added"]);
                                        }else{
                                            return response()->json(['status' => 'failuer', 'message' => "Some thing went wrong please try again"]);
                                        }
                    
                                        }
                
     }

           
     public function viewleadforreshedule(Request $request){
        //dd($request->all());
        $getleads=folloups::where('fid',$request->fid)->get();

        return response()->json(['status' => 'success', 'data' => $getleads]);
        //dd($getleads);
     }

     public function reshedulefolloup(Request $request){
           

             $fid=intval(($request->fid));
           //  dd($fid);

            $validator = Validator::make($request->all(), [
                'sheduledfollowupdate'=>'required', //ok
                'followupnotes'=>'required', //ok
               
          
                              ],
                            [
                           'sheduledfollowupdate.required'=>'Next Sheduled Followup Date Required',
                           'followupnotes.required'=>'Please Write The Note...!',
                           
                           
                          
                           ]
                             );
                              if ($validator->fails()) {   
                        
                        $errorss = $validator->errors()->messages();
    
                          return response()->json(['status' => '0', 'message' => $errorss]);
                          // return redirect()->back()->withErrors($errors)->withInput();
    
                       }else{

                        $updatedata=folloups::where('fid',$fid)->update([
                            'followupstatus'=>1
                        ]);
            
                        $followupdata=folloups::create([
                            'leadid'=>$request->leadidno,
                            'typeoffollowup'=>$request->follouptype,
                            'nextfollowup'=>$request->sheduledfollowupdate,
                            'customername'=>$request->customername,
                            'phone'=>$request->phone,
                            'email'=>$request->email,
                            'project'=>$request->project,
                            'companyname'=>$request->company,
                            'followupnotes'=>$request->followupnotes,
                            'teamid'=>$request->teamid,
                            'teamnames'=>$request->teamname,
                        ]);
            
                     
                            return response()->json(['status' => 'success', 'message' => "Followup sheduled Successfully...!"]);
                    
                          //  return response()->json(['status' => 'failuer', 'message' => "Some Thing Went Wrong Please Try Again...!"]);
                     



                       }




          



//             "leadidno" => "51"
//   "fid" => "49"
//   "follouptype" => "Email"
//   "sheduledfollowupdate" => null
//   "customername" => "Mallesh"
//   "company" => "Mallesh"
//   "phone" => "9876543214"
//   "email" => "mallesh@gmail.com"
//   "project" => "SEO"
//   "followupnotes" => null
//   "teamid" => "6"
//   "teamname" => "viswa"



     }
    //
}
