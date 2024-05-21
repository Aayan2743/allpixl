<?php
namespace App\Http\Controllers;
use App\Models\leadstage;
use App\Models\userlogin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\loginusers;
use App\Models\dealspayments;
use App\Models\followtypedetails;
use App\Models\leadlabel;
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
use App\Models\whatappTemplates;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Crypt;
class superadmin extends Controller
{


    public function mybillings(){

        $currentTime = now(); // Get current time using Laravel's helper function
        $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
          $quation = $this->quat();   

        return view('mybilling',compact('greeting','quation'));

    }

    public function getleaddatass(){
        dd("sgdjfgkd");
    }
    public function followupsget(){
        if(session()->get('role')==1){
            // for admin data
            $followupdatas = DB::table('folloupstbl')
            ->selectRaw('*,LEFT(customername, 1) as first_letter')
            ->get();
                $leadSourcesCount = leads::selectRaw("LEFT(leadsource, 1) as first_character, COUNT(*) as leadsource_count, leadsource")
                ->groupBy('first_character', 'leadsource')
                ->get();
                $leadServiceCount = leads::selectRaw("LEFT(title, 1) as first_character_title, COUNT(*) as title_count, title")
                ->groupBy('first_character_title', 'title')
                ->get();
                    $countofHot=leads::where('label',"Hot")->count();
                    $countofwarm=leads::where('label',"warm")->count();
                    $countofcold=leads::where('label',"cold")->count();
                    $countofwon=leads::where('dealstatus',1)->count();
                    $countoflost=leads::where('dealstatus',2)->count();
                    $getprojects = projects::get();
                    $getleadsource=leadsourcedata::get();
                    $getempdetails=userlogin::get();
                    $getalllabel=leadlabel::get();
        // dd($countofwon);
        $topLeads = leads::orderBy('leadid', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','!=',4)
            ->take(5)
            ->get();   
        $topdeals = leads::orderBy('dealfixdate', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','=',4)
            ->take(5)
            ->get();  
    // $getfollowups=folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    // $getfollowups=folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    // followupdatas
    $followupdatas = folloups::orderBy('nextfollowup', 'desc')
    ->selectRaw('*,LEFT(customername, 1) as firstletter')
    ->orderBy('nextfollowup','asc')
    ->where('followupstatus',0)
    ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
    ->get();  
    //   $followupdatas = folloups::orderBy('nextfollowup', 'desc')
    // ->selectRaw('*,LEFT(customername, 1) as firstletter')
    // ->whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')
    // ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
    // ->get();  
    // $followupdatas =folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    $getfollowuptype=followtypedetails::get();
    //dd($getfollowups);
    
       $currentTime = now(); // Get current time using Laravel's helper function
                          $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                            $quation = $this->quat();   
                         
    
                            $expaire=userlogin::select('regendingdate')->where('uid',session()->get('uid'))->get();
                            $currentDate = Carbon::now();
                            $expirationDate = Carbon::parse($expaire[0]->regendingdate);
                            $differenceInDays = $currentDate->diffInDays($expirationDate);
    
    return view("followup",compact("leadServiceCount","countofHot"
    ,"countofHot",
    "countofwarm",
    "greeting",
    "quation",
    "countofcold",
    "countofwon",
    "countoflost",
    "topLeads",
    "topdeals",
    "getprojects",
    "getleadsource",
    "getempdetails",
    "getalllabel",
    "followupdatas",
    "getfollowuptype",
    "differenceInDays",
));
       }elseif(session()->get('role')==0){
            // for staff
     // dd(session()->get('uid'));
            $followupdatas = DB::table('folloupstbl')
            ->selectRaw('*,LEFT(customername, 1) as first_letter')
            ->where('teamid',session()->get('uid'))->get();
               //dd($followupdatas);
          //  dd($leadSourcesCount);
                $getprojects = projects::get();
                $getleadsource=leadsourcedata::get();
                $getempdetails=userlogin::get();
                $getalllabel=leadlabel::get();
                    $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
        // dd($countofwon);
        $topLeads = leads::orderBy('leadid', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','!=',4)
            ->take(5)
            ->get();   
        $topdeals = leads::orderBy('dealfixdate', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','=',4)
            ->take(5)
            ->get();  
    $getfollowups=folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    $followupdatas = folloups::orderBy('nextfollowup', 'desc')
    ->selectRaw('*,LEFT(customername, 1) as firstletter')
    ->orderBy('nextfollowup','asc')
    ->where('followupstatus',0)
    ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
    ->where('teamid',session()->get('uid'))->get();
    $getfollowuptype=followtypedetails::get();
    //dd($getfollowups);
    
           $currentTime = now(); // Get current time using Laravel's helper function
                          $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                            $quation = $this->quat();   
    
    
                            $expaire=userlogin::select('regendingdate')->where('uid',session()->get('uid'))->get();
                            $currentDate = Carbon::now();
                            $expirationDate = Carbon::parse($expaire[0]->regendingdate);
                            $differenceInDays = $currentDate->diffInDays($expirationDate);

    return view("followup",compact("getfollowups","countofHot","followupdatas"
    ,"countofHot",
    "countofwarm",
    "countofcold",
    "greeting",
    "quation",
    "countofwon",
    "countoflost",
    "topLeads",
    "topdeals",
    "getprojects",
    "getleadsource",
    "getempdetails",
    "getalllabel",
    "getfollowuptype",
    "differenceInDays",
));
       }
    }
    public function profile(){
        if(Session::has('uid')){
            $uid = Session::get('uid');
            if(Session::get('role')==1){
                // for admin
                $getleads=leads::where('status','!=',4)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
              // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::where('uid',session()->get('uid'))->get();
                   $getalllabel=leadlabel::get();
                   
                //    $countofHot=leads::where('label',"Hot")->count();
                //    $countofwarm=leads::where('label',"warm")->count();
                //    $countofcold=leads::where('label',"cold")->count();

                   $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
                   $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
                   $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();

                   
                   
                   $countofwon=leads::where('dealstatus',1)->count();
                   $countoflost=leads::where('dealstatus',2)->count();
                   // dd($countofwon);
                   $topLeads = leads::orderBy('leadid', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','!=',4)
                       ->take(5)
                       ->get();   
                   $topdeals = leads::orderBy('dealfixdate', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','=',4)
                       ->take(5)
                       ->get();
                       $followupdatas = DB::table('folloupstbl')
                       ->selectRaw('*,LEFT(customername, 1) as first_letter')
                       ->get();
                        $leadsdatas = DB::table('lead')
                                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                                ->where('status','!=',4)
                                ->orderBy('leadid', 'desc')
                                ->get();
                        $dealsdatas = DB::table('lead')
                                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                                ->where('status','=',4)->get();
                //dd($getstaff);
                 //  dd($getstats[0]->city_name);

                 $currentTime = now(); // Get current time using Laravel's helper function
                 $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                 $quation = $this->quat();

                 $getprojects=projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();

                    return view("profile",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                        "countofHot",
                        "countofwarm",
                        "countofcold",
                        "countofwon",
                        "countoflost",
                        "topLeads",
                        "topdeals",
                        "leadsdatas",
                        "dealsdatas",
                        "getempdetails",
                        "getalllabel",
                        "greeting",
                        "quation",
                ));
                //dd($getleads);
                //   return view("dashboard.leads",compact("getleads"));
            }else{
                $getleads=leads::where('status','!=',4)->where('leadownerid',$uid)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
          // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::where('uid',session()->get('uid'))->get();
                   $getalllabel=leadlabel::get();
                //dd($getstaff);
                // $countofHot=leads::where('label',"Hot")->count();
                // $countofwarm=leads::where('label',"warm")->count();
                // $countofcold=leads::where('label',"cold")->count();
                // $countofwon=leads::where('dealstatus',1)->count();
                // $countoflost=leads::where('dealstatus',2)->count();
                //   $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                //     $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                //     $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
                   
                $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();  
                
                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                // dd($countofwon);
                $topLeads = leads::orderBy('leadid', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->take(5)
                    ->get();   
                $topdeals = leads::orderBy('dealfixdate', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->take(5)
                    ->get();
                    $leadsdatas = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->where('leadownerid',session()->get('uid'))->get();
                    $dealsdatas = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->where('leadownerid',session()->get('uid'))
                    ->orderBy('leadid', 'desc')
                    ->get();

                    $quation = $this->quat();

                
                    $currentTime = now(); // Get current time using Laravel's helper function
                    $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                    $quation = $this->quat();


                    $getprojects=projects::where('companyid',session()->get('cid'))->get();
                    $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
                    $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();

                  //  dd($leadsdatas);
                 //  dd($getstats[0]->city_name);
                 return view("profile",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                 "countofHot",
                 "countofwarm",
                 "countofcold",
                 "countofwon",
                 "countoflost",
                 "topLeads",
                 "topdeals",
                 "leadsdatas",
                 "dealsdatas",
                 "getempdetails",
                 "getalllabel",
                 "quation",
                 "greeting",
         ));
            }
        }else{
            return redirect("/");
        } 
            // return view('profile');
    }
    public function closefollowupdtatus(Request $req){
        //dd($req->all());
        $updateclosefolloup=folloups::where('fid',$req->fid)->update([
            'followupstatus'=>2
        ]);
        if($updateclosefolloup){
            return response()->json(['status' => 'success', 'message' =>"Follow up closed"]);
        }
    }
    public function getfollowdetails(Request $request){
        //dd($request->fid);
        $getfollowupbyid=folloups::where("fid",$request->fid)->get();
        return response()->json(['status' => 'success', 'data' => $getfollowupbyid]);
      //  dd($getfollowupbyid);
    }
    public function updateresheduledfolloup(Request $request){
        // dd($request->fid);
        $updateresheduledfollowup=folloups::where('fid',$request->fid)->update([
            'followupstatus'=>'1'
        ]);
        $followupdata=folloups::create([
            'leadid'=>$request->leadid,
            'typeoffollowup'=>$request->typeoffollowup,
            'nextfollowup'=>$request->nextfollowup,
            'customername'=>$request->customername,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'project'=>$request->project,
            'companyname'=>$request->companyname,
        ]);
        return response()->json(['status' => 'success', 'message' =>"Resheduled Done"]);
        //dd()
    }
    public function uploadlogo(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:20', // adjust max file size if needed
                          ],
                        [
                       'image.required'=>'Please Select File',
                       'image.image'=>'File Should be in image type only',
                       'image.mimes'=>'File Should be jpeg or png or jpg or gif only',
                       'image.max'=>'File Should be jpeg or png or jpg or gif only',
                       ]
                         );
                          if ($validator->fails()) {   
                    $errors = $validator->errors()->messages();
                       return response()->json(['status' => '0', 'message' => $errors]);
                   }else{
                  //  dd("dsdfsd");
                    if ($request->hasFile('image')) {
                        // if($request->filename!=null){
                        // }
                        // elseif($request->filename==null){
                            $image = $request->file('image');
                            $imageName = time() . '.' . $image->getClientOriginalExtension();
                            $uploadfile=customizedsettings::where('id',4)->update([
                                      'logo'=> $imageName, 
                            ]);
                            $image->move(public_path('images'), $imageName);
                            $request->session()->put('logo', $imageName);
                            return response()->json(['status' => 'success','message' => 'Image uploaded successfully.']);  
                        // }
                            // return 'All images deleted successfully.';
                    }
                    // return response()->json(['status' => 'failuer','message' => 'Some thing went wrong please try again later']);
                 }
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust max file size if needed
        // ]);
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imageName);
        //     return response()->json(['success' => 'Image uploaded successfully.']);
        // }
        // return response()->json(['error' => 'Error uploading image.']);
    }
    public function deletesourceid(Request $req){
            //dd($req->all());
            $deletesource=leadsourcedata::where('lsid',$req->leadsourelids)->delete();
            if($deletesource){
                return response()->json(['status' => 'success', 'message' =>"Lead source Deleted Sucessfully....!"]);
            }else{
                return response()->json(['status' => 'failuer', 'message' =>"Some thing went wrong please try again"]);
            }    
            //dd($deletesource);
    }
    public function updateleadsourcedatadetails(Request $req){
        //dd($req->all());
        $validator = Validator::make($req->all(), [
            'leadsourcename'=>'required', //ok
                          ],
                        [
                       'leadsourcename.required'=>'Lead Source Name Required',
                       ]
                         );
                          if ($validator->fails()) {   
$errors = $validator->errors()->messages();
                       return response()->json(['status' => '0', 'message' => $errors]);
                   }else{
                    $updateleadsource=leadsourcedata::where('lsid', $req->leadsourceid)->update([
                        'leadsource'=>$req->leadsourcename
                    ]);
                    if($updateleadsource){
                        return response()->json(['status' => 'success', 'message' =>"Lead Source Name Updated Sucessfully....!"]);
                    }else{
                        return response()->json(['status' => 'failuer', 'message' =>"Some thing went wrong please try again...!"]);
                    }
       }
        //dd($updateleadsource);
    }
    public function getleadosurce(Request $req){
       // dd($req->lid);
       $getdata=leadsourcedata::where("lsid",$req->lid)->get();
       return response()->json(['status' => 'success', 'data' =>$getdata]);
       //dd($getdata);
    }
    public function addleadsource(Request $req){
      //  dd($req->leadname);
            $addleadsourcedetails=leadsourcedata::create([
                'leadsource'=>$req->leadname
            ]);
            if($addleadsourcedetails){
                return response()->json(['status' => 'success', 'message' =>"New Lead Source Added Sucessfully...!"]);
            }else{
                return response()->json(['status' => 'failuer', 'message' =>"Some thing went wrong please try again...!"]);
            }
    }
    public function updatesession(Request $req){
     // dd($req->heading);
        $updateheading=customizedsettings::where('id','=',4)->update([
            'heading'=>$req->heading
        ]);
       // dd($updateheading);
        $req->session()->put('heading', $req->heading);
        return response()->json(['status' => 'success', 'message' =>"Title Updated Sucessfully...!"]);
        // Session::put([
        //     'key1' => 'new value 1',
        //     'key2' => 'new value 2',
        //     // Add more key-value pairs as needed
        // ]);
    }
    public function getfolloupbydate(Request $req){
        // dd("dsjkfs");
        $searchdate="";
        if($req->input('search_date')==null){
            $searchdate=now();
        }else{
            $searchdate=$req->input('search_date');
        }
        // dd($req->input('search_date'));
          $getfollowups=folloups::whereDate('nextfollowup',$searchdate)->where('followupstatus',0)->get();
//dd($getfollowups);
          return view('dashboard.followups', compact('getfollowups'));
    }
    public function updateleadstage(Request $req,$id){
      // dd($id);
    $leadid=intval($id);
    $status=$req->status;
    $updateleadstatus=leads::where("leadid",$leadid)->update(["leadstage"=>$status]);
    if($updateleadstatus){ 
        return response()->json(['status' => 'success', 'message' =>"Lead Status Updated Sucessfully.....!"]);
    } 
    }
    public function followups(){
       if(session()->get('role')==1){
            // for admin data
            $followupdatas = DB::table('folloupstbl')
            ->selectRaw('*,LEFT(customername, 1) as first_letter')
            ->get();
                $leadSourcesCount = leads::selectRaw("LEFT(leadsource, 1) as first_character, COUNT(*) as leadsource_count, leadsource")
                ->groupBy('first_character', 'leadsource')
                ->get();
                $leadServiceCount = leads::selectRaw("LEFT(title, 1) as first_character_title, COUNT(*) as title_count, title")
                ->groupBy('first_character_title', 'title')
                ->get();
                   
                    $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();
                    
                    $countofwon=leads::where('dealstatus',1)->count();
                    $countoflost=leads::where('dealstatus',2)->count();
                    
                    $getprojects = projects::where('companyid',session()->get('cid'))->get();
                    $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
                    $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
                    $getalllabel=leadlabel::get();

                        

        // dd($countofwon);
        $topLeads = leads::orderBy('leadid', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','!=',4)
            ->take(5)
            ->get();   
        $topdeals = leads::orderBy('dealfixdate', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','=',4)
            ->take(5)
            ->get();  
    // $getfollowups=folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    // $getfollowups=folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    // followupdatas
    $followupdatas = folloups::orderBy('nextfollowup', 'desc')
    ->selectRaw('*,LEFT(customername, 1) as firstletter')
    ->whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')
    ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
    ->get();  
    //   $followupdatas = folloups::orderBy('nextfollowup', 'desc')
    // ->selectRaw('*,LEFT(customername, 1) as firstletter')
    // ->whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')
    // ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
    // ->get();  
    // $followupdatas =folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    $getfollowuptype=followtypedetails::get();
    //dd($getfollowups);

    $currentTime = now(); // Get current time using Laravel's helper function
    $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
    $quation = $this->quat();    

    return view("followup",compact("leadServiceCount","countofHot"
    ,"countofHot",
    "countofwarm",
    "countofcold",
    "countofwon",
    "countoflost",
    "topLeads",
    "topdeals",
    "getprojects",
    "getleadsource",
    "getempdetails",
    "getalllabel",
    "followupdatas",
    "getfollowuptype",
    "greeting",
    "quation",
));
       }elseif(session()->get('role')==0){
            // for staff
     // dd(session()->get('uid'));
            $followupdatas = DB::table('folloupstbl')
            ->selectRaw('*,LEFT(customername, 1) as first_letter')
            ->where('teamid',session()->get('uid'))
            ->where('followupstatus',0)
            ->get();
               //dd($followupdatas);
          //  dd($leadSourcesCount);
                $getprojects = projects::get();
                $getleadsource=leadsourcedata::get();
                $getempdetails=userlogin::get();
                $getalllabel=leadlabel::get();

                $getprojects = projects::where('companyid',session()->get('cid'))->get();
                $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
                $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
                    // $countofHot=leads::where('label',"Hot")->count();
                    // $countofwarm=leads::where('label',"warm")->count();
                    // $countofcold=leads::where('label',"cold")->count();
                    // $countofwon=leads::where('dealstatus',1)->count();
                    // $countoflost=leads::where('dealstatus',2)->count();
                    
                   
                    
                    $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();


                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
        // dd($countofwon);
        $topLeads = leads::orderBy('leadid', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','!=',4)
            ->take(5)
            ->get();   
        $topdeals = leads::orderBy('dealfixdate', 'desc')
            ->selectRaw('*,LEFT(customer, 1) as firstletter')
            ->where('status','=',4)
            ->take(5)
            ->get();  
    $getfollowups=folloups::whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')->where('followupstatus',0)->get();
    
    $followupdatas = folloups::orderBy('nextfollowup', 'desc')
    ->selectRaw('*,LEFT(customername, 1) as firstletter')
    ->whereDate('nextfollowup',now())->orderBy('nextfollowup','asc')
    ->where('followupstatus',0)
    ->orderByRaw('FIELD(followupstatus, 0, 1, 2)')
     ->where('teamid',session()->get('uid'))->get();
    
    
     $getfollowuptype=followtypedetails::get();
    //dd($getfollowups);
    $currentTime = now(); // Get current time using Laravel's helper function
    $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
    
      $currentTime = now(); // Get current time using Laravel's helper function
                  $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                  $quation = $this->quat();
            
    
    return view("followup",compact("getfollowups","countofHot","followupdatas"
    ,"countofHot",
    "countofwarm",
    "countofcold",
    "countofwon",
    "countoflost",
    "topLeads",
    "topdeals",
    "getprojects",
    "getleadsource",
    "getempdetails",
    "getalllabel",
    "greeting",
    "quation",
    "getfollowuptype",
));
       }
    }
    public function addcallrecord(Request $request){
            $leadid=$request->leadid;  
            dd($leadid);
            $getleads=leads::where('leadid',$request->leadid)->get();
            $getleaddate=$getleads[0]->created_at;
            $getcalldata=leadcallnote::where('leadid',$leadid)->get();
              $updateddate=Carbon::parse($getleaddate)->format('d-M-Y');
              $getcalldate=Carbon::parse($getcalldata[0]->callstartingtime)->format('d-M-Y');
              $getcalltime=Carbon::parse($getcalldata[0]->callstartingtime)->format('H:i:s');
              $getcallenddate=Carbon::parse($getcalldata[0]->callendingtime)->format('d-M-Y');
              $getcallendtime=Carbon::parse($getcalldata[0]->callendingtime)->format('H:i:s');
          //  dd($getcallendtime);
                    $getstats=indiancitis::get();
                     $city_state = indiancitis::select('city_state')->distinct()->get();
                     $getprojects = projects::get();
                     $getstaff = userlogin::get();
                     $getleadactivity=leadactivity::where('leadid','=',$request->leadid)->get();
                // dd($getleadactivity);
                   //  dd($getstats[0]->city_name);
                  //  return redirect('')
                      // return view("dashboard.viewleads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadactivity"));
                      return view("dashboard.viewleads",compact("getstats","city_state","getprojects","getstaff","getleads","updateddate","getleadactivity","leadid","getcalldata","getcalltime","getcallenddate","getcallendtime"));
        // }
    }
    public function viewleads(Request $request){
        
         if(session()->get('role')==1)
         {
            $leadid=$request->id;
            $leadid=Crypt::decryptString($leadid);
            $checkleadordeal=leads::select('status')->where('leadid',$leadid)->where('companyid',session()->get('cid'))->get();
            // dd($checkleadordeal[0]->status);
            if($checkleadordeal[0]->status==4)
            {
                return redirect()->route('admin.viewdeals');
            }
             elseif($checkleadordeal[0]->status==0 || $checkleadordeal[0]->status==1 || $checkleadordeal[0]->status==2  || $checkleadordeal[0]->status==3)
            // else
            {
            //    dd("leads");
            $getleads=leads::where('leadid',$leadid)->where('companyid',session()->get('cid'))->get();
            //   dd($getleads);
             $getleaddate=$getleads[0]->created_at;
             //dd($getleaddate);
               $updateddate=Carbon::parse($getleaddate)->format('d-M-Y');
               //dd($updateddate);
               $getstats=indiancitis::get();
                      $city_state = indiancitis::select('city_state')->distinct()->get();
                      $getprojects = projects::get();
                      $getstaff = userlogin::get();
                      $getleadactivity=leadactivity::where('leadid','=',$leadid)->orderBy('updated', 'DESC')->get();
                      $getcalldata=leadcallnote::where('leadid',$leadid)->get();
                      $getemailrecords=mailsenddata::where('leadid',$leadid)->orderBy('updated_at', 'DESC')->get();
                      // $getfollowups=folloups::where('leadid',$leadid)->whereDate('nextfollowup',now())->get();
                      $getfollowups=folloups::where('leadid',$leadid)->get();
                      foreach ($getleadactivity as $data) {
                          $createdAt = $data['updated'];
                          // Extracting date and time separately
                          $date = Carbon::parse($createdAt)->toDateString(); // YYYY-MM-DD format
                          $time = Carbon::parse($createdAt)->toTimeString(); // HH:MM:SS format
                          // Pass $date and $time to the view
                          // return view('your-view', compact('date', 'time'));
                      ;
                      }
                    //   $countofHot=leads::where('label',"Hot")->count();
                    //   $countofwarm=leads::where('label',"warm")->count();
                    //   $countofcold=leads::where('label',"cold")->count();
                      
                    $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();


                      $countofwon=leads::where('dealstatus',1)->count();
                      $countoflost=leads::where('dealstatus',2)->count();
                      // dd($countofwon);
                      $topLeads = leads::orderBy('leadid', 'desc')
                          ->selectRaw('*,LEFT(customer, 1) as firstletter')
                          ->where('status','!=',4)
                          ->take(5)
                          ->get();   
                      $topdeals = leads::orderBy('dealfixdate', 'desc')
                          ->selectRaw('*,LEFT(customer, 1) as firstletter')
                          ->where('status','=',4)
                          ->take(5)
                          ->get();   
                             $getprojects=projects::get();
                             $getleadsource=leadsourcedata::get();
                             $getempdetails=userlogin::get();
                             $getalllabel=leadlabel::get();
                             $getfollowuptype=followtypedetails::get();
                          //    $startOfWeek = Carbon::now()->startOfWeek();
                          //     $endOfWeek = Carbon::now()->endOfWeek();
                          //     // Get the start and end of today
                          //     $startOfToday = Carbon::now()->startOfDay();
                          //     $endOfToday = Carbon::now()->endOfDay();
                          //     // Query the database table for data within the current week
                          //     $currentWeekData = folloups::whereBetween('nextfollowup', [$startOfWeek, $endOfWeek])->get();
                          //     // Query the database table for data for the current day
                          //     $currentDayData = folloups::whereBetween('nextfollowup', [$startOfToday, $endOfToday])->get();
                          //     // Combine the results
                          //     $combinedData = $currentWeekData->merge($currentDayData);
                          //    $startOfWeek = Carbon::now()->startOfWeek();
                          //    $endOfWeek = Carbon::now()->endOfWeek();
                          //    // Get the start and end of today
                          //    $startOfToday = Carbon::now()->startOfDay();
                          //    $endOfToday = Carbon::now()->endOfDay();
                          //    // Query the database table for data within the current week and including today
                          //    $currentWeekData = folloups::where(function ($query) use ($startOfWeek, $endOfWeek, $startOfToday, $endOfToday) {
                          //        $query->whereBetween('nextfollowup', [$startOfWeek, $endOfWeek])
                          //            ->orWhereBetween('nextfollowup', [$startOfToday, $endOfToday]);
                          //    })->get();
                          //    dd($combinedData);
                          $currentDate = Carbon::now()->startOfWeek();
                          $endDate = Carbon::now()->endOfWeek();
                          // Initialize an array to store the data for each day of the week
                          $weekData = [];
                          // Iterate through each day of the week
                          while ($currentDate <= $endDate) {
                              // Retrieve data for the current day from the database
                              $dataForDay = DB::table('folloupstbl')
                                              ->whereDate('nextfollowup', $currentDate->format('Y-m-d'))
                                              ->where('leadid',$leadid)
                                              ->get();
                              // Store the data along with the day
                              // $weekData[$currentDate->format('l')] = $dataForDay;
                              $weekData[$currentDate->format('d')] = $dataForDay; // Format: Day of the week, Month Day
                              // Move to the next day
                              $currentDate->addDay();
                          }
                          $getleadstage=leadstage::get();
  // dd($weekData);
                          $getwhatapptemplates=whatappTemplates::orderBy('templateid','DESC')->where('companyid',session()->get('cid'))->get();
                         
                            $currentTime = now(); // Get current time using Laravel's helper function
                          $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                         $quation = $this->quat();   
                         
                         $getallfollowupsdata=folloups::where('teamid',session()->get('uid'))->get();


                          return view("viewleads",compact(
                             "getstats","city_state","getprojects","getstaff",
                             "getleads","updateddate","getleadactivity","getcalldata",
                             "leadid","getemailrecords","getfollowups",
                             "greeting",
                             "quation",
                             "countofHot",
                             "countofcold",
                             "countofwon",
                             "countoflost",
                             "topLeads",
                             "topdeals",
                             "getleadsource",
                             "getalllabel",
                             "getempdetails",
                             "weekData",
                             "getfollowuptype",
                             "getleadstage",
                             
                             "getallfollowupsdata",
                             "getwhatapptemplates",
                             "countofwarm"));
            }
        
        }
        elseif(session()->get('role')==0)
        {
                 
           
            $leadid=$request->id;
            $leadid=Crypt::decryptString($leadid);
               $getleads=leads::where('leadid',$leadid)->get();
            //   dd($getleads);
             $getleaddate=$getleads[0]->created_at;
             //dd($getleaddate);
               $updateddate=Carbon::parse($getleaddate)->format('d-M-Y');
               //dd($updateddate);
               $getstats=indiancitis::get();
                      $city_state = indiancitis::select('city_state')->distinct()->get();
                      $getprojects = projects::get();
                      $getstaff = userlogin::get();
                      $getleadactivity=leadactivity::where('leadid','=',$leadid)->orderBy('updated', 'DESC')->get();
                      $getcalldata=leadcallnote::where('leadid',$leadid)->get();
                      $getemailrecords=mailsenddata::where('leadid',$leadid)->orderBy('updated_at', 'DESC')->get();
                      // $getfollowups=folloups::where('leadid',$leadid)->whereDate('nextfollowup',now())->get();
                      $getfollowups=folloups::where('leadid',$leadid)->get();
                      foreach ($getleadactivity as $data) {
                          $createdAt = $data['updated'];
                          // Extracting date and time separately
                          $date = Carbon::parse($createdAt)->toDateString(); // YYYY-MM-DD format
                          $time = Carbon::parse($createdAt)->toTimeString(); // HH:MM:SS format
                          // Pass $date and $time to the view
                          // return view('your-view', compact('date', 'time'));
                      ;
                      }
                      // $countofHot=leads::where('label',"Hot")->count();
                      // $countofwarm=leads::where('label',"warm")->count();
                      // $countofcold=leads::where('label',"cold")->count();
                      // $countofwon=leads::where('dealstatus',1)->count();
                      // $countoflost=leads::where('dealstatus',2)->count();
                    //  $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                    //   $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                    //   $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();

                    $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();

                      $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                      $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                      // dd($countofwon);
                      $topLeads = leads::orderBy('leadid', 'desc')
                          ->selectRaw('*,LEFT(customer, 1) as firstletter')
                          ->where('status','!=',4)
                          ->take(5)
                          ->get();   
                      $topdeals = leads::orderBy('dealfixdate', 'desc')
                          ->selectRaw('*,LEFT(customer, 1) as firstletter')
                          ->where('status','=',4)
                          ->take(5)
                          ->get();   
                             $getprojects=projects::get();
                             $getleadsource=leadsourcedata::get();
                             $getempdetails=userlogin::get();
                             $getalllabel=leadlabel::get();
                             $getfollowuptype=followtypedetails::get();
                          //    $startOfWeek = Carbon::now()->startOfWeek();
                          //     $endOfWeek = Carbon::now()->endOfWeek();
                          //     // Get the start and end of today
                          //     $startOfToday = Carbon::now()->startOfDay();
                          //     $endOfToday = Carbon::now()->endOfDay();
                          //     // Query the database table for data within the current week
                          //     $currentWeekData = folloups::whereBetween('nextfollowup', [$startOfWeek, $endOfWeek])->get();
                          //     // Query the database table for data for the current day
                          //     $currentDayData = folloups::whereBetween('nextfollowup', [$startOfToday, $endOfToday])->get();
                          //     // Combine the results
                          //     $combinedData = $currentWeekData->merge($currentDayData);
                          //    $startOfWeek = Carbon::now()->startOfWeek();
                          //    $endOfWeek = Carbon::now()->endOfWeek();
                          //    // Get the start and end of today
                          //    $startOfToday = Carbon::now()->startOfDay();
                          //    $endOfToday = Carbon::now()->endOfDay();
                          //    // Query the database table for data within the current week and including today
                          //    $currentWeekData = folloups::where(function ($query) use ($startOfWeek, $endOfWeek, $startOfToday, $endOfToday) {
                          //        $query->whereBetween('nextfollowup', [$startOfWeek, $endOfWeek])
                          //            ->orWhereBetween('nextfollowup', [$startOfToday, $endOfToday]);
                          //    })->get();
                          //    dd($combinedData);
                          $currentDate = Carbon::now()->startOfWeek();
                          $endDate = Carbon::now()->endOfWeek();
                          // Initialize an array to store the data for each day of the week
                          $weekData = [];
                          // Iterate through each day of the week
                          while ($currentDate <= $endDate) {
                              // Retrieve data for the current day from the database
                              $dataForDay = DB::table('folloupstbl')
                                              ->whereDate('nextfollowup', $currentDate->format('Y-m-d'))
                                              ->where('leadid',$leadid)
                                              ->get();
                              // Store the data along with the day
                              // $weekData[$currentDate->format('l')] = $dataForDay;
                              $weekData[$currentDate->format('d')] = $dataForDay; // Format: Day of the week, Month Day
                              // Move to the next day
                              $currentDate->addDay();
                          }
                          $getleadstage=leadstage::get();
  // dd($weekData);
                          $getwhatapptemplates=whatappTemplates::orderBy('templateid','DESC')->get();
                          $getwhatapptemplates=whatappTemplates::orderBy('templateid','DESC')->where('companyid',session()->get('cid'))->get();
                          $currentTime = now(); // Get current time using Laravel's helper function
                          $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                         $quation = $this->quat();   
                          
                         $getallfollowups=folloups::where('teamid',session()->get('uid'))->get();

                         $getallfollowupsdata=folloups::where('teamid',session()->get('uid'))->get();
                          return view("viewleads",compact(
                             "getstats","city_state","getprojects","getstaff",
                             "getleads","updateddate","getleadactivity","getcalldata",
                             "leadid","getemailrecords","getfollowups",
                             "countofHot",
                             "greeting",
                             "quation",
                             "countofcold",
                             "countofwon",
                             "countoflost",
                             "topLeads",
                             "getallfollowupsdata",
                             "topdeals",
                             "getleadsource",
                             "getalllabel",
                             "getempdetails",
                             "weekData",
                             "getfollowuptype",
                             "getleadstage",
                             "getallfollowups",
                             "getwhatapptemplates",
                             "countofwarm"));
           }
            // dd($checkleadordeal);
    }
    public function viewdealsdata(Request $request){
        if(session()->get('role')==1)
        {
           $leadid=$request->id;

           $leadid=Crypt::decryptString($leadid);
           $checkleadordeal=leads::select('status')->where('leadid',$leadid)->get();
           // dd($checkleadordeal[0]->status);
           if($checkleadordeal[0]->status==0 || $checkleadordeal[0]->status==1 || $checkleadordeal[0]->status==2  || $checkleadordeal[0]->status==3)
           {
               return redirect()->route('admin.viewdeals');
           }elseif($checkleadordeal[0]->status==4 )
           {
           //    dd("deals");
           $getleads=leads::where('leadid',$leadid)->get();

           //   dd($getleads);
            $getleaddate=$getleads[0]->created_at;
            //dd($getleaddate);
              $updateddate=Carbon::parse($getleaddate)->format('d-M-Y');
              //dd($updateddate);
              $getstats=indiancitis::get();
                     $city_state = indiancitis::select('city_state')->distinct()->get();
                     $getprojects = projects::get();
                     $getstaff = userlogin::get();
                     $getleadactivity=leadactivity::where('leadid','=',$leadid)->orderBy('updated', 'DESC')->get();
                     $getcalldata=leadcallnote::where('leadid',$leadid)->get();
                     $getemailrecords=mailsenddata::where('leadid',$leadid)->orderBy('updated_at', 'DESC')->get();
                     // $getfollowups=folloups::where('leadid',$leadid)->whereDate('nextfollowup',now())->get();
                     $getfollowups=folloups::where('leadid',$leadid)->where('companyid',session()->get('cid'))->get();
                     foreach ($getleadactivity as $data) {
                         $createdAt = $data['updated'];
                         // Extracting date and time separately
                         $date = Carbon::parse($createdAt)->toDateString(); // YYYY-MM-DD format
                         $time = Carbon::parse($createdAt)->toTimeString(); // HH:MM:SS formatindex
                         // Pass $date and $time to the view
                         // return view('your-view', compact('date', 'time'));
                     ;
                     }
                     $countofHot=leads::where('label',"Hot")->count();
                     $countofwarm=leads::where('label',"warm")->count();
                     $countofcold=leads::where('label',"cold")->count();
                     $countofwon=leads::where('dealstatus',1)->count();
                     $countoflost=leads::where('dealstatus',2)->count();
                     // dd($countofwon);
                     $topLeads = leads::orderBy('leadid', 'desc')
                         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                         ->where('status','!=',4)
                         ->take(5)
                         ->get();   
                     $topdeals = leads::orderBy('dealfixdate', 'desc')
                         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                         ->where('status','=',4)
                         ->take(5)
                         ->get();   
                            $getprojects=projects::get();
                            $getleadsource=leadsourcedata::get();
                            $getempdetails=userlogin::get();
                            $getalllabel=leadlabel::get();
                            $getfollowuptype=followtypedetails::get();
                         //    $startOfWeek = Carbon::now()->startOfWeek();
                         //     $endOfWeek = Carbon::now()->endOfWeek();
                         //     // Get the start and end of today
                         //     $startOfToday = Carbon::now()->startOfDay();
                         //     $endOfToday = Carbon::now()->endOfDay();
                         //     // Query the database table for data within the current week
                         //     $currentWeekData = folloups::whereBetween('nextfollowup', [$startOfWeek, $endOfWeek])->get();
                         //     // Query the database table for data for the current day
                         //     $currentDayData = folloups::whereBetween('nextfollowup', [$startOfToday, $endOfToday])->get();
                         //     // Combine the results
                         //     $combinedData = $currentWeekData->merge($currentDayData);
                         //    $startOfWeek = Carbon::now()->startOfWeek();
                         //    $endOfWeek = Carbon::now()->endOfWeek();
                         //    // Get the start and end of today
                         //    $startOfToday = Carbon::now()->startOfDay();
                         //    $endOfToday = Carbon::now()->endOfDay();
                         //    // Query the database table for data within the current week and including today
                         //    $currentWeekData = folloups::where(function ($query) use ($startOfWeek, $endOfWeek, $startOfToday, $endOfToday) {
                         //        $query->whereBetween('nextfollowup', [$startOfWeek, $endOfWeek])
                         //            ->orWhereBetween('nextfollowup', [$startOfToday, $endOfToday]);
                         //    })->get();
                         //    dd($combinedData);
                         $currentDate = Carbon::now()->startOfWeek();
                         $endDate = Carbon::now()->endOfWeek();
                         // Initialize an array to store the data for each day of the week
                         $weekData = [];
                         // Iterate through each day of the week
                         while ($currentDate <= $endDate) {
                             // Retrieve data for the current day from the database
                             $dataForDay = DB::table('folloupstbl')
                                             ->whereDate('nextfollowup', $currentDate->format('Y-m-d'))
                                             ->where('leadid',$leadid)
                                             ->get();
                             // Store the data along with the day
                             // $weekData[$currentDate->format('l')] = $dataForDay;
                             $weekData[$currentDate->format('d')] = $dataForDay; // Format: Day of the week, Month Day
                             // Move to the next day
                             $currentDate->addDay();
                         }
                         $getleadstage=leadstage::get();
                         $transactiondetails=dealspayments::where('leadid',$leadid)->orderBy('created_at','desc')->get();
                         $sum = dealspayments::where('leadid', $leadid)->sum('adv');
                         //dd($sum);
                        //  $firstLeadId = dealspayments::orderBy('leadid', 'asc')->value('leadid');
                        //  $firstLead = dealspayments::orderBy('created_at', 'asc')->first(['leadid', 'created_at','fixvalue','adv','balance']);
                         // dd($firstLead);   
 // dd($weekData);
                         $getwhatapptemplates=whatappTemplates::orderBy('templateid','DESC')->get();
                         
                            $currentTime = now(); // Get current time using Laravel's helper function
                          $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                            $quation = $this->quat();   
                         
                            $getallfollowups=folloups::where('leadid',$leadid)->get();
                            $getallfollowupsdata=folloups::where('leadid',$leadid)->get();
                         
                         return view("viewdeals",compact(
                            "getstats","city_state","getprojects","getstaff",
                            "getleads","updateddate","getleadactivity","getcalldata",
                            "leadid","getemailrecords","getfollowups",
                            "countofHot",
                            "greeting",
                            "quation",
                            "countofcold",
                            "countofwon",
                            "countoflost",
                            "topLeads",
                            "topdeals",
                            "getleadsource",
                            "getalllabel",
                            "getempdetails",
                            "weekData",
                            "getfollowuptype",
                            "getleadstage",
                            "getallfollowupsdata",
                            "getwhatapptemplates",
                            "transactiondetails",
                            "sum",
                            "countofwarm"));
          }
          
       }
       elseif(session()->get('role')==0)
          {
                $leadid=$request->id;
                $leadid=Crypt::decryptString($leadid);    
                $checkleadordeal=leads::select('status')->where('leadid',$leadid)->get();
                if($checkleadordeal[0]->status==0 || $checkleadordeal[0]->status==1 || $checkleadordeal[0]->status==2  || $checkleadordeal[0]->status==3){
                    return redirect()->route('admin.viewdeals');
                }elseif($checkleadordeal[0]->status==4 ){
                    $getleads=leads::where('leadid',$leadid)->get();
                    //   dd($getleads);
                     $getleaddate=$getleads[0]->created_at;
                     //dd($getleaddate);
                       $updateddate=Carbon::parse($getleaddate)->format('d-M-Y');
                       //dd($updateddate);
                       $getstats=indiancitis::get();
                              $city_state = indiancitis::select('city_state')->distinct()->get();
                              $getprojects = projects::get();
                              $getstaff = userlogin::get();
                              $getleadactivity=leadactivity::where('leadid','=',$leadid)->orderBy('updated', 'DESC')->get();
                              $getcalldata=leadcallnote::where('leadid',$leadid)->get();
                              $getemailrecords=mailsenddata::where('leadid',$leadid)->orderBy('updated_at', 'DESC')->get();
                              // $getfollowups=folloups::where('leadid',$leadid)->whereDate('nextfollowup',now())->get();
                              $getfollowups=folloups::where('leadid',$leadid)->get();
                              foreach ($getleadactivity as $data) {
                                  $createdAt = $data['updated'];
                                  // Extracting date and time separately
                                  $date = Carbon::parse($createdAt)->toDateString(); // YYYY-MM-DD format
                                  $time = Carbon::parse($createdAt)->toTimeString(); // HH:MM:SS format
                                  // Pass $date and $time to the view
                                  // return view('your-view', compact('date', 'time'));
                              ;
                              }
                              // $countofHot=leads::where('label',"Hot")->count();
                              // $countofwarm=leads::where('label',"warm")->count();
                              // $countofcold=leads::where('label',"cold")->count();
                              // $countofwon=leads::where('dealstatus',1)->count();
                              // $countoflost=leads::where('dealstatus',2)->count();
                                    $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                              $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                              $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
                              $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                              $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                              // dd($countofwon);
                              $topLeads = leads::orderBy('leadid', 'desc')
                                  ->selectRaw('*,LEFT(customer, 1) as firstletter')
                                  ->where('status','!=',4)
                                  ->take(5)
                                  ->get();   
                              $topdeals = leads::orderBy('dealfixdate', 'desc')
                                  ->selectRaw('*,LEFT(customer, 1) as firstletter')
                                  ->where('status','=',4)
                                  ->take(5)
                                  ->get();   
                                     $getprojects=projects::get();
                                     $getleadsource=leadsourcedata::get();
                                     $getempdetails=userlogin::get();
                                     $getalllabel=leadlabel::get();
                                     $getfollowuptype=followtypedetails::get();
                                  $currentDate = Carbon::now()->startOfWeek();
                                  $endDate = Carbon::now()->endOfWeek();
                                  // Initialize an array to store the data for each day of the week
                                  $weekData = [];
                                  // Iterate through each day of the week
                                  while ($currentDate <= $endDate) {
                                      // Retrieve data for the current day from the database
                                      $dataForDay = DB::table('folloupstbl')
                                                      ->whereDate('nextfollowup', $currentDate->format('Y-m-d'))
                                                      ->where('leadid',$leadid)
                                                      ->get();
                                      // Store the data along with the day
                                      // $weekData[$currentDate->format('l')] = $dataForDay;
                                      $weekData[$currentDate->format('d')] = $dataForDay; // Format: Day of the week, Month Day
                                      // Move to the next day
                                      $currentDate->addDay();
                                  }
                                  $getleadstage=leadstage::get();
          // dd($weekData);
                                  $getwhatapptemplates=whatappTemplates::orderBy('templateid','DESC')->get();
                                  $transactiondetails=dealspayments::where('leadid',$leadid)->orderBy('created_at','desc')->get();
                                  $sum = dealspayments::where('leadid', $leadid)->sum('adv');
                         
                                       $currentTime = now(); // Get current time using Laravel's helper function
                                     $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                                    $quation = $this->quat();   
                         
                                    $getallfollowupsdata=folloups::where('leadid',$leadid)->get();
                                  
                                  return view("viewdeals",compact(
                                     "getstats","city_state","getprojects","getstaff",
                                     "getleads","updateddate","getleadactivity","getcalldata",
                                     "leadid","getemailrecords","getfollowups",
                                     "greeting",
                                     "quation",
                                     "countofHot",
                                     "transactiondetails",
                                     "sum",
                                     "countofcold",
                                     "countofwon",
                                     "getallfollowupsdata",
                                     "countoflost",
                                     "topLeads",
                                     "topdeals",
                                     "getleadsource",
                                     "getalllabel",
                                     "getempdetails",
                                     "weekData",
                                     "getfollowuptype",
                                     "getleadstage",
                                     "getwhatapptemplates",
                                     "countofwarm"));
                   }
        }
           // dd($checkleadordeal);
   }
    //liststaff
    public function deleteleaddata(Request $request){
     $lid=intval($request->lid);
    // dd($lid);
        $deletelead=leads::where('leadid', $lid)->delete();
        if( $deletelead ){
            return response()->json(['status'=> 'success','message'=> 'Lead deleted successfully....!']);
        }else{
            return response()->json(['status'=> 'failuer','message'=> 'Some thing went wrong please try again']);
        }
        //$res=User::where('id',$id)->delete();
    }
    public function getheading(Request $request){
        $hid=intval($request->hid);
        $getdata=customizedsettings::where('id','=',$hid)->first();
        if($getdata){
            return response()->json(['status'=> 'success','data'=>$getdata]);
        }else{
            return response()->json(['status'=> 'failuer','data'=>"no data"]);
        }
    }
    public function savesettings(Request $request){
  //     dd($request->heading);
        $validator = Validator::make($request->all(), [
            'heading'=>'required', //ok
                          ],
                        [
                       'heading.required'=>'Company Titel Required',
                       ]
                         );
                          if ($validator->fails()) {   
$errors = $validator->errors()->messages();
                       return response()->json(['status' => '0', 'message' => $errors]);
                   }else{
                    $addsetting=customizedsettings::create([
                        'heading'=> $request->heading,
                    ]);
                    if($addsetting){
                        return response()->json(['status'=> 'success','message'=> "heading added successfully"]);
                    }else{
                        return response()->json(['status'=> 'failuer','message'=> "Some thing went wrong please try again"]);
                    }
       }
    }
    public function settings(){
        if(session()->has('uid'))
        {
            if(session()->get('role')==1){
                // admin
                     //    all from right start
                    //  $countofHot=leads::where('label',"Hot")->count();
                    //  $countofwarm=leads::where('label',"warm")->count();
                    //  $countofcold=leads::where('label',"cold")->count();

                     $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
                     $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
                     $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();


                     $countofwon=leads::where('dealstatus',1)->count();
                     $countoflost=leads::where('dealstatus',2)->count();
                     // dd($countofwon);
                     $topLeads = leads::orderBy('leadid', 'desc')
                         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                         ->where('status','!=',4)
                         ->take(5)
                         ->get();   
                     $topdeals = leads::orderBy('dealfixdate', 'desc')
                         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                         ->where('status','=',4)
                         ->take(5)
                         ->get();   
        $getprojects=projects::orderBy('pid', 'DESC')->get();
         $getleadsource=leadsourcedata::orderBy('lsid', 'DESC')->get();
         $getleadstage=leadstage::orderBy('stageid', 'DESC')->get();
         $getwhatsapp=whatappTemplates::orderBy('templateid', 'DESC')->get();
         $getempdetails=userlogin::get();
         $getalllabel=leadlabel::get();
         $getheading=customizedsettings::where('id',4)->get();
         $currentTime = now(); // Get current time using Laravel's helper function
            $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
         
            $quation = $this->quat();

            $getprojects=projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();

         return view("settings",compact("getheading","getleadsource",
        "countofHot",
        "countofwarm",
        "countofcold",
        "countofwon",
        "countoflost",
        "topLeads",
        "topdeals",
        "getprojects",
        "getleadsource",
        "getalllabel",
        "getempdetails",
        "getleadstage",
        "getwhatsapp",
        "greeting",
        "quation",
        ));
            }else{
                return redirect("/");
            }
        }else{
            return redirect("/");
        }
    }
    public function updatestaff(Request $request){
     //  dd($request->all());
        $validator = Validator::make($request->all(), [
            'empname'=>'required', //ok
            // 'empemail'=>'required|', //ok
            'emppassword'=>'required', //ok
            'empmobile'=>'required|numeric|digits:10', //ok
            'empdesignation'=>'required', //ok
            'empemail' => 'required|email', 
        //  'empemail' => 'required|email',
                          ],
                        [
                            'empname.required'=>'Staff Name Required',
                            'empdesignation.required'=>'Select Designation',
                            'emppassword.required'=>'Staff Password Required',
                            'empmobile.required'=>'Staff Phone Number Required',
                            'empmobile.numeric'=>'Staff Mobile allowed only Numbers',
                            'empmobile.digits'=>'Staff Mobile allowed Only 10 digits',
                            'empemail.required'=>'Staff Email Required',
                            'empemail.email'=>'Staff Email id should be in correct format',
                            'empemail.unique'=>'Staff Email id Already taken',
                       ]
                         );
                          if ($validator->fails()) {   
                            $errors = $validator->errors()->messages();
                       return response()->json(['status' => '0', 'message' => $errors]);
                   }else{
                   // dd($getmail[0]->email);
                    $updatestaff=userlogin::where('uid', $request->empid)->update([
                        'password'=> $request->emppassword,
                        'fullname'=> $request->empname,
                        'designation'=> $request->empdesignation,
                        'email'=> $request->empemail,
                        'mobile'=> $request->empmobile,
                    ]);
                    if($updatestaff){
                        return response()->json(['status'=> 'success','message'=> 'staff updated successfully...!']);
                    }
       }
    }
      public function getstaffbyid(Request $request){
        $staffid=intval($request->sid);
        $staffdatabyid=userlogin::where('uid',$staffid)->get();
        if(count($staffdatabyid)> 0){
            return response()->json(['status'=> 'success','data'=> $staffdatabyid]);  
        }else{
            return response()->json(['status'=> 'failuer','data'=> "no data found...!"]);  
        }
        //dd($staffdatabyid);
      }
    public function addstaff(Request $request){
        $validator = Validator::make($request->all(), [
            'empname'=>'required', //ok
            'empemail'=>'required|email|unique:loginusers,email', //ok
            'emppassword'=>'required', //ok
            'emprole'=>'required', //ok
            'empdesignation'=>'required', //ok
            'empmobile'=>'required|numeric|digits:10', //ok
                          ],
                        [
                       'empname.required'=>'Staff Name Required',
                       'emprole.required'=>'Select Role',
                       'empdesignation.required'=>'Staff Designation Required',
                       'empemail.email'=>'Incorrect Email Id',
                       'emppassword.required'=>'Staff Password Required',
                       'empmobile.required'=>'Staff Phone Number Required',
                       'empmobile.numeric'=>'Staff Mobile allowed only Numbers',
                       'empmobile.digits'=>'Staff Mobile allowed Only 10 digits',
                       ]
                         );
                          if ($validator->fails()) {   
                    $errors = $validator->errors()->messages();
                       return response()->json(['status' => '0', 'message' => $errors]);
                   }else{
                    $addstaff=userlogin::create([
                        'email'=> $request->empemail,
                        'password'=> $request->emppassword,
                        'fullname'=> $request->empname,
                        'role'=> $request->emprole,
                        'mobile'=> $request->empmobile,
                        'designation'=> $request->empdesignation,
                    ]);
                    if($addstaff){
                        return response()->json(['status'=> 'success','message'=> 'Staff added successfully']);
                    }else{
                        return response()->json(['status'=> 'failuer','message'=> 'some thing went wrong please try again']);
                    }
       }
    }
    public function liststaff(){
        if(Session::has('uid')){
            if(session()->get('role')==1){
                // for admin
                 //    all from right start
                //  $countofHot=leads::where('label',"Hot")->count();
                //  $countofwarm=leads::where('label',"warm")->count();
                //  $countofcold=leads::where('label',"cold")->count();

                 $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
                 $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
                 $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();



                 $countofwon=leads::where('dealstatus',1)->count();
                 $countoflost=leads::where('dealstatus',2)->count();
                 // dd($countofwon);
                 $topLeads = leads::orderBy('leadid', 'desc')
                     ->selectRaw('*,LEFT(customer, 1) as firstletter')
                     ->where('status','!=',4)
                     ->take(5)
                     ->get();   
                 $topdeals = leads::orderBy('dealfixdate', 'desc')
                     ->selectRaw('*,LEFT(customer, 1) as firstletter')
                     ->where('status','=',4)
                     ->take(5)
                     ->get();   
                    $getprojects=projects::get();
                        $getleadsource=leadsourcedata::get();
                        $getalllabel=leadlabel::get();
                        $getempdetails = userlogin::orderBy('uid', 'desc')
                        ->selectRaw('*,LEFT(fullname, 1) as fs')
                        ->where('status',1)
                        ->get();     
             // all from right end
             $stafflist=userlogin::get();
             // dd($stafflist);
             $currentTime = now(); // Get current time using Laravel's helper function
             $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));

             $quation = $this->quat();

             $getprojects=projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();

              return view("addstaff",compact("stafflist",
                    "countofHot",
                    "countofwarm",
                    "countofcold",
                    "countofwon",
                    "countoflost",
                    "getprojects",
                    "topdeals",
                    "getleadsource",
                    "getempdetails",
                    "getalllabel",
                    "greeting",
                    "topLeads",
                    "quation",
            ));
            }elseif(session()->get('role')==0){
                // for user
                // $countofHot=leads::where('label',"Hot")->count();
                // $countofwarm=leads::where('label',"warm")->count();
                // $countofcold=leads::where('label',"cold")->count();
                // $countofwon=leads::where('dealstatus',1)->count();
                // $countoflost=leads::where('dealstatus',2)->count();
                //   $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                //     $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                //     $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();

                    $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();


                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                // dd($countofwon);
                $topLeads = leads::orderBy('leadid', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->take(5)
                    ->get();   
                $topdeals = leads::orderBy('dealfixdate', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->take(5)
                    ->get();   
                $getempdetails = userlogin::orderBy('uid', 'desc')
                    ->selectRaw('*,LEFT(fullname, 1) as fs')
                    ->where('status',1)
                    ->get();     
                   $getprojects=projects::get();
                       $getleadsource=leadsourcedata::get();
                    //    $getempdetails=userlogin::get();
                       $getalllabel=leadlabel::get();
              //  dd($topdeals);
                $stafflist=userlogin::get();
                $currentTime = now(); // Get current time using Laravel's helper function
            $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
            $quation = $this->quat();

            
            $getprojects=projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
                // dd($stafflist);
                 return view("addstaff",compact("stafflist",
                 "countofHot",
                 "countofwarm",
                 "countofcold",
                 "countofwon",
                 "countoflost",
                 "getprojects",
                 "topdeals",
                 "getleadsource",
                 "getempdetails",
                 "getalllabel",
                 "topLeads",
                 "greeting",
                 "quation",
                ));
            }
        }else{
            return redirect("/");
        }
    }
    public function updatedeals(Request $request){
    // dd($request->all());
     $validator = Validator::make($request->all(), [
        'leadid'=>'required', //ok
        'customer'=>'required', //ok
        'Orginazation'=>'required', //ok
        'email'=>'required|email', //ok
        'phone'=>'required|numeric|digits:10', //ok
        'currency'=>'required|numeric', //ok
        'expecteddate'=>'required|date', //ok
        'contentss'=>'required', //ok
        'city'=>'required', //ok
                      ],
                    [
                   'customer.required'=>'Customer Name Required',
                   'Orginazation.required'=>'Orginazation Name Required',
                   'email.required'=>'Email Id Required',
                   'email.email'=>'Email Id in correct format',
                   'phone.required'=>'Mobile Number Required',
                   'phone.numeric'=>'Mobile Number Allowed only Numbers',
                   'phone.digits'=>'Mobile Number Allowed only 10 Digist',
                   'expecteddate.required'=>'Expected date Required',
                   'expecteddate.date'=>'Expected date should be in correct format',
                   'contentss.required'=>'Project details required',
                   'city.required'=>'City Details Required',
                   ]
                     );
                      if ($validator->fails()) {   
            $errors = $validator->errors()->messages();
                   return response()->json(['status' => '0', 'message' => $errors]);
               }else{
                $uid=Session::get('uid');
                $fullname=session('fullname');
                $updatedeal=leads::where('leadid', $request->leadid)->update([
                    'customer'=> $request->customer,
                    'ogrinazation'=> $request->Orginazation,
                    'email'=> $request->email,
                    'phone'=> $request->phone,
                    'value'=> $request->currency,   
                    'expacteddate'=> $request->expecteddate,
                    'team'=> $request->assignedteam,
                    'content'=> $request->contentss,
                    'created_by_id'=> $uid,
                    'town'=> $request->city,
                    'created_by'=> $fullname,
                    'dealfixdate'=> $request->dealfixdate,
                ]);
              // dd($updatedeal);
                //if($updatedeal){
                    return response()->json(['status'=> 'success','message'=> 'Deal updated sucessfully']);
                ///}
                }
    }
    public function logout(){
        Session::flush();
        return redirect("/");
    }
    public function updateremarks(Request $request){
        $updateleadstatus=leads::where("leadid",$request->lid)->update([
            "status"=> $request->leadremarks,
            "lead_comments"=> $request->leadcomments,
        ]);
        if($updateleadstatus==1){
          return response()->json(["status"=> "success","message"=> "Comments updated sucessfully...!"]);
        }elseif($updateleadstatus==0){
            return response()->json(["status"=> "failuer","message"=> "Some thing went wrong please try again...!"]);
        }
    }
    public function updateleads(Request $request){
        // dd($request->all());
        $fullname=session('fullname');
            $uid=session('uid');
//dd($request->all());
        $validator = Validator::make($request->all(), [
            'u_customer'=>'required', //ok
            'u_Orginazation'=>'required', //ok
            'u_title'=>'required', //ok
            'u_Description'=>'required', //ok
            'u_mobile'=>'required|numeric|digits:10', //ok
            'u_email'=>'required|email', //ok
            'leadsource'=>'required', //ok
            'leadlabel'=>'required', //ok
            'price'=>'required|numeric', //ok
            'leadowner'=>'required', //ok
            'city'=>'required', //ok
            'ownerid'=>'required', //ok
                          ],
                        [
                       'u_customer.required'=>'Customer Details Required',
                       'u_Orginazation.required'=>'Orginazation Name Required',
                       'u_title.required'=>'Project Name Required',
                       'u_Description.required'=>'Project Description Required',
                       'u_mobile.required'=>'Mobile Number Required',
                       'u_mobile.numeric'=>'Mobile Number Allowed Only Numbers',
                       'u_mobile.digits'=>'Mobile Number Allowed 10 Digits Only',
                       'u_email.required'=>'Email Id Required',
                       'leadsource.required'=>'Lead source Required',
                       'u_email.email'=>'Email Id in correct format',
                       'leadlabel.required'=>'Select Priority',
                       'price.required'=>'Price Required',
                       'price.numeric'=>'Price Allowed Only Numbers Required',
                       'leadowner.required'=>'Select Lead Owner',
                       'city.required'=>'Enter City Name',
                       ]
                         );
                          if ($validator->fails()) {   
                    $errors = $validator->errors()->messages();
                       return response()->json(['status' => '0', 'message' => $errors]);
                   }else{
                 // dd($request->input('u_customer'));
                    $upldatelead=leads::where('leadid', $request->input('lid'))->update([
                        'customer'=> $request->input('u_customer'),
                        'ogrinazation'=> $request->input('u_Orginazation'),
                        'title'=> $request->input('u_title'),
                        'description'=> $request->input('u_Description'),
                        'value'=> $request->input('price'),
                        'label'=> $request->input('leadlabel'),
                        'owner'=> $request->input('leadowner'),
                        'leadownerid'=> $request->input('ownerid'),
                        'phone'=> $request->input('u_mobile'),
                        'email'=> $request->input('u_email'),
                        'addressline_1'=> $request->input('u_address1'),
                        'addressline_2'=> $request->input('u_address2'),
                        'addressline_3'=> $request->input('u_address3'),
                        'town'=> $request->input('city'),
                        'state'=> $request->input('u_state'),
                        'zipcode'=> $request->input('u_zipcode'),
                        'country'=> $request->input('u_country'),
                        
                        'created_by'=> $fullname,
                        'created_by_id'=> $uid,
                        'leadsource'=> $request->input('leadsource')
                    ]);
                   // dd($upldatelead);
                    if($upldatelead==1){
                        return response()->json(['status'=> 'success','message'=> 'Updated Lead']);
                    }else{
                        return response()->json(['status'=> 'failuer','message'=> 'Some thing went wrong please try again']);
                    }
                    }
    }
    public function dealreopen(Request $request){
        $did=intval($request->input("lid"));
        $closedeal=leads::where('leadid',$did)->update([
            'dealstatus'=>3,
        ]);
        if($closedeal==1){
                return response()->json(['status'=> 'success','message'=>'Deal Reopened
                ']);    
        }else{
            return response()->json(['status'=> 'failuer','message'=>'Some thing went wrong please try again']);     
        }
    }
    public function deallost(Request $request){
        $did=intval($request->input("lid"));
        $closedeal=leads::where('leadid',$did)->update([
            'dealstatus'=>2,
        ]);
        if($closedeal==1){
                return response()->json(['status'=> 'success','message'=>'Deal lost']);    
        }else{
            return response()->json(['status'=> 'failuer','message'=>'Some thing went wrong please try again']);     
        }
    }
    public function closelead(Request $request){
        $did=intval($request->input("lid"));
        $closedeal=leads::where('leadid',$did)->update([
            'dealstatus'=>1,
        ]);
        if($closedeal==1){
                return response()->json(['status'=> 'success','message'=>'Deal Closed Successfully']);    
        }else{
            return response()->json(['status'=> 'failuer','message'=>'Some thing went wrong please try again']);     
        }
    }
public function viewdeals(Request $request){
    if(Session::has('uid')){
     // dd(Session::get("uid"));
        if(Session::get('role')== 1){
            // for admin
             //    all from right start
            //  $countofHot=leads::where('label',"Hot")->count();
            //  $countofwarm=leads::where('label',"warm")->count();
            //  $countofcold=leads::where('label',"cold")->count();

             $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
             $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
             $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();
             
             $countofwon=leads::where('dealstatus',1)->count();
             $countoflost=leads::where('dealstatus',2)->count();
             // dd($countofwon);
             $topLeads = leads::orderBy('leadid', 'desc')
                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
                 ->where('status','!=',4)
                 ->take(5)
                 ->get();   
             $topdeals = leads::orderBy('dealfixdate', 'desc')
                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
                 ->where('status','=',4)
                 ->take(5)
                 ->get(); 
                 $parameterValue = $request->query('s');
                // dd($parameterValue);
                 if($parameterValue==null){
                    $getalldeals = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as fs')
                    ->where('status','=',4)
                    ->orderBy('dealfixdate', 'DESC')->get();
                 }else{
                    $getalldeals = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as fs')
                    ->where('status','=',4)
                    ->where('dealstatus', $parameterValue)                  
                    ->orderBy('dealfixdate', 'DESC')->get();
                 } 

                  //  Suresh Changes 3/4/2024
                  $parameterValue = $request->query('s');
                  $parameterValue2=$request->query('s1');
                 // dd($parameterValue);
                
                 if($parameterValue==null && $parameterValue2==null){
                     $getalldeals = DB::table('lead')
                     ->selectRaw('*,LEFT(customer, 1) as fs')
                     ->where('status','=',4)
                                     
                     ->orderBy('dealfixdate', 'DESC')->get();
                 }elseif($parameterValue!==null){
                     $getalldeals = DB::table('lead')
                     ->selectRaw('*,LEFT(customer, 1) as fs')
                     ->where('status','=',4)
                     ->where('dealstatus', $parameterValue)                  
                     ->orderBy('dealfixdate', 'DESC')->get();
 
                 }elseif($parameterValue2==0){
                     $getalldeals = DB::table('lead')
                     ->selectRaw('*,LEFT(customer, 1) as fs')
                     ->where('status','=',4)                 
                     ->orderBy('expacteddate', 'ASC')->get();
                 }elseif($parameterValue2==1){
                     $getalldeals = DB::table('lead')
                     ->selectRaw('*,LEFT(customer, 1) as fs')
                     ->where('status','=',4)                 
                     ->orderBy('expacteddate', 'DESC')->get();
                 }
                 
            // END Suresh Changes 3/4/2024
                  
                



                $getprojects=projects::get();
                $getleadsource=leadsourcedata::get();
                $getempdetails=userlogin::get();
                $getalllabel=leadlabel::get();
                $getfollowuptype=followtypedetails::get();
                $getwhatapptemplates=whatappTemplates::orderBy('templateid','DESC')->get();
                $leadid=$request->id;


         // all from right end
        //  $currentMonth = Carbon::now()->month;
        //  $getdealsamount_monthly=leads::whereMonth('dealfixdate', $currentMonth)->where('leadownerid',session()->get('uid'))->where('status','=',4)->Where('dealstatus',0)->OrWhere('dealstatus',1)->sum('value');
         $currentMonth = Carbon::now()->month;
         $getdealsamount_monthly_1=leads::whereMonth('dealfixdate', $currentMonth)->where('status','=',4)->Where('dealstatus',1)->sum('value');
         $getdealsamount_monthly_0=leads::whereMonth('dealfixdate', $currentMonth)->where('status','=',4)->Where('dealstatus',0)->sum('value');
         $getdealsamount_monthly=$getdealsamount_monthly_1+$getdealsamount_monthly_0;
            $getleads=leads::where('status','=',4)->paginate(25);
           
            $currentTime = now(); // Get current time using Laravel's helper function
            $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
           
            $quation = $this->quat();
                
            $getprojects=projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();


            return view("deals",compact("getleads",
            "countofHot",
            "countofwarm",
            "countofcold",
            "countofwon",
            "countoflost",
            "topLeads",
            "getprojects",
            "getleadsource",
            "getempdetails",
            "getalllabel",
            "getalldeals",
            "topdeals",
            "getfollowuptype",
            "getwhatapptemplates",
            "greeting",
            "getdealsamount_monthly",
            "quation",
        ));
        }else if(Session::get("role")== 0){
             //    all from right start
            //  $countofHot=leads::where('label',"Hot")->count();
            //  $countofwarm=leads::where('label',"warm")->count();
            //  $countofcold=leads::where('label',"cold")->count();
            //  $countofwon=leads::where('dealstatus',1)->count();
            //  $countoflost=leads::where('dealstatus',2)->count();
            //   $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
            //         $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
            //         $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
                    
            $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count(); 
            
                    
                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
             // dd($countofwon);
             $topLeads = leads::orderBy('leadid', 'desc')
                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
                 ->where('status','!=',4)
                 ->take(5)
                 ->get();   
             $topdeals = leads::orderBy('dealfixdate', 'desc')
                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
                 ->where('status','=',4)
                 ->take(5)
                 ->get();   
                //  $getalldeals = DB::table('lead')
                //  ->selectRaw('*,LEFT(customer, 1) as fs')
                //  ->where('status','=',4)
                //  ->where('leadownerid',session()->get('uid'))
                //  ->orderBy('dealfixdate', 'DESC')->get();
                 $parameterValue = $request->query('s');
                 // dd($parameterValue);
                  if($parameterValue==null){
                     $getalldeals = DB::table('lead')
                     ->selectRaw('*,LEFT(customer, 1) as fs')
                     ->where('status','=',4)
                     ->where('leadownerid',session()->get('uid'))                
                     ->orderBy('dealfixdate', 'DESC')->get();
                  }else{
                     $getalldeals = DB::table('lead')
                     ->selectRaw('*,LEFT(customer, 1) as fs')
                     ->where('status','=',4)
                     ->where('leadownerid',session()->get('uid'))
                     ->where('dealstatus', $parameterValue)                  
                     ->orderBy('dealfixdate', 'DESC')->get();
                  }   
               
                //  Suresh Changes 3/4/2024
                $parameterValue = $request->query('s');
                $parameterValue2=$request->query('s1');
               // dd($parameterValue);
              
               if($parameterValue==null && $parameterValue2==null){
                   $getalldeals = DB::table('lead')
                   ->selectRaw('*,LEFT(customer, 1) as fs')
                   ->where('status','=',4)
                                   
                   ->orderBy('dealfixdate', 'DESC')->get();
               }elseif($parameterValue!==null){
                   $getalldeals = DB::table('lead')
                   ->selectRaw('*,LEFT(customer, 1) as fs')
                   ->where('status','=',4)
                   ->where('dealstatus', $parameterValue)                  
                   ->orderBy('dealfixdate', 'DESC')->get();

               }elseif($parameterValue2==0){
                   $getalldeals = DB::table('lead')
                   ->selectRaw('*,LEFT(customer, 1) as fs')
                   ->where('status','=',4)                 
                   ->orderBy('expacteddate', 'ASC')->get();
               }elseif($parameterValue2==1){
                   $getalldeals = DB::table('lead')
                   ->selectRaw('*,LEFT(customer, 1) as fs')
                   ->where('status','=',4)                 
                   ->orderBy('expacteddate', 'DESC')->get();
               }
               
          // END Suresh Changes 3/4/2024
                
              

               
                  $getprojects=projects::get();
                 $getleadsource=leadsourcedata::get();
                 $getempdetails=userlogin::get();
                 $getalllabel=leadlabel::get();
                 $getfollowuptype=followtypedetails::get();
                 $getwhatapptemplates=whatappTemplates::orderBy('templateid','DESC')->get();
         // all from right end
            $getleads=leads::where('status','=',4)->where('leadownerid',Session::get("uid"))->paginate(25);
            $currentMonth = Carbon::now()->month;
            $getdealsamount_monthly_1=leads::whereMonth('dealfixdate', $currentMonth)->where('leadownerid',session()->get('uid'))->where('status','=',4)->Where('dealstatus',1)->sum('value');
            $getdealsamount_monthly_0=leads::whereMonth('dealfixdate', $currentMonth)->where('leadownerid',session()->get('uid'))->where('status','=',4)->Where('dealstatus',0)->sum('value');
            $getdealsamount_monthly=$getdealsamount_monthly_1+$getdealsamount_monthly_0;
          // dd($getdealsamount_monthly);
            //dd(session()->get('uid'));
            
            $currentTime = now(); // Get current time using Laravel's helper function
            $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
            $quation = $this->quat();  

                  
            $getprojects=projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();

            return view("deals",compact("getleads",
            "countofHot",
            "countofwarm",
            "countofcold",
            "countofwon",
            "countoflost",
            "topLeads",
            "topdeals",
            "getprojects",
            "getleadsource",
            "getempdetails",
            "getalllabel",
            "getalldeals",
            "getfollowuptype",
            "getwhatapptemplates",
            "greeting",
            "getdealsamount_monthly",
            "quation",
        ));
        }
      }else{
          return redirect("/");
      }
}    //
    public function convertleadtodeal(Request $request){
    //   dd($request->dealfixdata);
        $validator = Validator::make($request->all(), [
            'lid'=>'required|numeric', //ok
            'amount'=>'required|numeric', //ok
            'expecteddate'=>'required|date', //ok
            'requirements'=>'required', //ok
            'dealfixdata'=>'required', //ok
                          ],
                        [
                       'lid.required'=>'Lead Id Required',
                       'lid.numeric'=>'Lead Id allowed only numbers Required',
                       'amount.required'=>'Amount  Required',
                       'amount.numeric'=>'Amount allowed only numbers Required',
                       'expecteddate.required'=>'Delivery date required',
                       'expecteddate.date'=>'Delivery date in correct format',
                       'requirements.required'=>'Deal Requirements Should not be empty',
                       'dealfixdata.required'=>'Select Deal fix Date',
                       ]
                         );
                          if ($validator->fails()) {   
    $errors = $validator->errors()->messages();
                       return response()->json(['status' => '0', 'message' => $errors]);
                   }else{
                    $convertleadtodeal=leads::where('leadid',$request->lid)->update([
                        'status'=>4,
                        'expacteddate'=>$request->expecteddate,
                        'value'=>$request->amount,
                        'content'=>$request->requirements,
                        'dealfixdate'=>$request->dealfixdata,
                    ]);
                    if($convertleadtodeal){
                        return response()->json(['status'=> 'success','message'=>"Lead successfully converted to Deal"]);
                    }else{
                        return response()->json(['status'=> 'failuer','message'=>"Some thing went wrong please try again later"]);
                    }
       }
    }
    public function getleaddata_new(){
        dd("dsfgvjnsdf");
    }
    public function getleaddata(Request $req){
       // dd($req->all());    
        $lid= $req->input("lid");
        $lid=intval($lid);
        $getleadsource=leadsourcedata::get();
        $getproject=projects::get();
        $getlebel=leadlabel::get();
        $getstaff=userlogin::get();

        $getleaddata=leads::where('leadid','=',$lid)->first();
        return response()->json(['status' => 'success', 'data' => $getleaddata,'data2'=>$getleadsource,'projects'=>$getproject,'labels'=>$getlebel,'liststaff'=>$getstaff ]);
    }
    public function superadminlogout(){
        Session::flush();
        return redirect("/");
    }
    public function adddeal(Request $request){
       // dd($request->all());
        $validator = Validator::make($request->all(), [
            'customer'=>'required', //ok
            'Orginazation'=>'required', //ok
            'Title'=>'required', //ok
            'Description'=>'required', //ok
            'mobile'=>'required|numeric|digits:10', //ok
            'email'=>'required|email', //ok
            'Priotity'=>'required', //ok
            'owner'=>'required', //ok
            'currency'=>'required|numeric', //ok
            'expecteddate'=>'required|date', //ok
            'contents'=>'required', //ok
            'ref'=>'required', //ok
                          ],
                        [
                       'customer.required'=>'Customer Name Required',
                       'Orginazation.required'=>'Orginazation Name Required',
                       'Title.required'=>'Project Name Required',
                       'mobile.required'=>'Mobile Number Required',
                       'mobile.numeric'=>'Mobile Number Allowed Only Numeric ',
                       'email.required'=>'Email Id Required',
                       'email.email'=>'Email Id should be correct',
                       'Priotity.required'=>'Customer Name Required',
                       'owner.required'=>'Owner Name Required',
                       'currency.required'=>'Amount Required',
                       'currency.numeric'=>'Amount Allowed in Number only',
                       'expecteddate.required'=>'Delivery Date Required',
                       'expecteddate.date'=>'Delivery Date Shoud be correct',
                       'contents.required'=>'contents Required',
                       'ref.required'=>'File Required',
                       ]
                         );
                          if ($validator->fails()) {   
                            $errors = $validator->errors()->messages();
                            return response()->json(['status' => '0', 'message' => $errors]);
             //   $errors = $validator->errors()->messages();
                   }else{
       }
    }
    public function convertdeal($id){   
        if(Session::has('uid')){
                // dd($id);
                // $did = Crypt::decryptString($id);
                $did=intval($id);
                $getleadbyid=leads::where('leadid',$did)->first();
               // dd($getleadbyid);
            $fullname=session('fullname');
            $uid=session('uid');
            $getstats=indiancitis::get();
            $city_state = indiancitis::select('city_state')->distinct()->get();
            return view("dashboard.convertdeal",compact("getstats","city_state","getleadbyid"));
        }else{
            return redirect("/");
        }
    } 
    public function getLeadDatas()
    {
        $leadData = leads::select('leadsource', \DB::raw('COUNT(*) as lead_count'))
        ->groupBy('leadsource')
        ->get()
        ->map(function ($item) {
            return [
                "category" => $item->leadsource,
                "value" => $item->lead_count,
                "full" => 100,
                "columnSettings" => [
                    "fill" => "color" // You need to replace this with the color logic
                ]
            ];
        });
return response()->json($leadData);
    }
    public function getColor()
    {
        // Logic to determine color dynamically
        // You can replace this with your own logic to determine the color
        return "chart.get('colors').getIndex(5)";
    }

    public function calucation(){
        $lead_current_week_revenue=leads::where('status','!=',4)->sum('value');
       
    }
    private function getGreetingMessage($time)
    {
        // Define your greeting messages based on time
        if ($time >= '05:00:00' && $time < '12:00:00') {
            return 'Good morning !';
        } elseif ($time >= '12:00:00' && $time < '18:00:00') {
            return 'Good afternoon !';
        } else {
            return 'Good evening !';
        }
    }

    private function quat()
    {

        $quotes = [
            "Success in sales and marketing starts with belief in your product.",
            "Marketing is the art of telling your story in a compelling way.",
            "Sales is about solving problems, not pushing products.",
            "In sales, persistence beats resistance.",
            "The best marketers are those who understand their customers deeply.",
            "Sales is not just about selling; it's about creating value.",
            "Marketing is the bridge between the product and the customer.",
            "To succeed in sales, focus on building relationships, not transactions.",
            "In marketing, consistency is key to building brand trust.",
            "Sales is about helping people make the right decision for them.",
            "Great marketing doesn't just sell a product; it sells an experience.",
            "In sales, listening is more important than talking.",
            "Marketing is about understanding what your customers need before they do.",
            "The best salespeople are problem solvers, not pitchmen.",
            "Good marketing makes the company look smart; great marketing makes the customer feel smart.",
            "In sales, rejection is just a step on the path to success.",
            "Marketing is not a one-time event; it's a continuous conversation.",
            "Sales is about building trust and rapport with your customers.",
            "Effective marketing speaks to the heart as well as the mind.",
            "Success in sales and marketing requires both strategy and execution."
        ];
         
        // Get a random index from the array
        $randomIndex = array_rand($quotes);
         
        // Get the random quote
        $randomQuote = $quotes[$randomIndex];

        return $randomQuote;

        // Define your greeting messages based on time
        
    }

    public function index(){
      // dd(Session::get('role'));
        if(Session::has('uid')){
               if(Session::get('role')==1){
                // for admin



             
                // dd($differenceInDays);
   



              
                $followupdatas = DB::table('folloupstbl')
                ->selectRaw('*,LEFT(customername, 1) as first_letter')
                ->whereDate('nextfollowup',now())
                // ->where('followupstatus',0)
                ->orderBy('fid', 'desc')
                ->take(3)   
                ->get();
                
               // dd($followupdatas);
                 $leadsdatas = DB::table('lead')
                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                ->where('status','!=',4)
                ->orderBy('created_at', 'desc')   
                ->take(3) 
                ->get();
                // $oddEvenResults = $leadsdatas->map(function ($lead, $index) {
                //     $lead->isEven = ($index % 2 == 0) ? true : false;
                //     return $lead;
                // });
                // dd($oddEvenResults);
            $currentWeekStartDate = Carbon::now()->startOfWeek();
            $currentWeekEndDate = Carbon::now()->endOfWeek();
            $leadcount=leads::where('status','!=',4)->count();
            // $leadcount=leads::count();
            $dealcount=leads::where('status','=',4)->count();
            $followupcount=folloups::select('fid')->count();
            $followupdata=folloups::get();
            $getleads=leads::where('status','!=',4)->orderBy('leadid', 'DESC')->get();
            
            // $getleadsamount_weekly=leads::where('status','!=',4)->sum('value');
            $getleadsamount_weekly = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','!=',4)->sum('value');        
                  //dd($getleadsamount);  
            $getfollowuptype=followtypedetails::get();
            $getprojects=projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();
            $getalllabel=leadlabel::get();
            // $getleadbytoday=leads::whereDate('created_at',now())->where('status','!=',4)->count();
            $getleadbytoday=leads::whereDate('created_at',now())->count();
            $getdealsbytoday=leads::whereDate('created_at',now())->where('status','=',4)->count();
            $getdealsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','=',4)->count();
            // $getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','!=',4)->count();
            $getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->count();
            $currentMonth = Carbon::now()->month;
           
           
            // $getdealsamount_monthly=leads::whereMonth('dealfixdate', $currentMonth)->where('status','=',4)->Where('dealstatus',0)->OrWhere('dealstatus',1)->sum('value');
                    
            $getdealsamount_monthly_1=leads::whereMonth('dealfixdate', $currentMonth)->where('status','=',4)->Where('dealstatus',1)->sum('value');
            $getdealsamount_monthly_0=leads::whereMonth('dealfixdate', $currentMonth)->where('status','=',4)->Where('dealstatus',0)->sum('value');
            $getdealsamount_monthly=$getdealsamount_monthly_1+$getdealsamount_monthly_0;

                //  dd($getdealsamount_monthly);


            $getdealsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('status','=',4)->count();
            // $getleadsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('status','!=',4)->count();
            $getleadsbythimonth = leads::whereMonth('created_at', $currentMonth)->count();
                   
                $leadSourcesCount = leads::selectRaw("LEFT(leadsource, 1) as first_character, COUNT(*) as leadsource_count, leadsource")
                    ->groupBy('first_character', 'leadsource')
                    ->orderBy('leadsource_count', 'desc')
                    ->get();

          

                    $leadServiceCount = leads::selectRaw("LEFT(title, 1) as first_character_title, COUNT(*) as title_count, title")
                    ->groupBy('first_character_title', 'title')
                    ->orderBy('title_count', 'desc')
                    ->get();


                        $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
                        $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
                        $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();
                      
                        $countofwon=leads::where('dealstatus',1)->count();
                        $countoflost=leads::where('dealstatus',2)->count();
                        // dd($countofwon);
                        $topLeads = leads::orderBy('leadid', 'desc')
                            ->selectRaw('*,LEFT(customer, 1) as firstletter')
                            ->where('status','!=',4)
                            ->take(5)
                            ->get();   
                        $topdeals = leads::orderBy('dealfixdate', 'desc')
                            ->selectRaw('*,LEFT(customer, 1) as firstletter')
                            ->where('status','=',4)
                            ->take(5)
                            ->get();   

                
            $staffStatistics= userlogin::withCount([
                'leads as deals_count' => function ($query) {
                    $query->where('status', 4);
                },
                'leads as leads_count' => function ($query) {
                    $query->where('status', '!=', 4);
                }
            ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
            ->orderByDesc('deals_count')
            ->orderByDesc('leads_count')
            ->get();

           


            // $staffStatistics= userlogin::where('companyid', session()->get('cid'))->withCount([
            //     'leads as deals_count' => function ($query) {
            //         $query->where('status', 4);
            //     },
            //     'leads as leads_count' => function ($query) {
            //         $query->where('status', '!=', 4);
            //     }
            // ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
            // ->orderByDesc('deals_count')
            // ->orderByDesc('leads_count')
            
            // ->get();



            // $counts = leads::selectRaw('COUNT(*) as count, leadstage')
            //     ->groupBy('leadstage')
            //     ->get()
            //     ->pluck('count', 'leadstage');
            //     $allStages = [0, 1, 2, 3, 4]; // Assuming these are all possible stages
            //         $counts = collect();
            //         foreach ($allStages as $stage) {
            //             $counts[$stage] = leads::where('leadstage', $stage)->count();
            //         }

                    $counts = leads::selectRaw('leadstagetext, COUNT(*) as count')
                    ->groupBy('leadstagetext')
                    ->where('status','!=',4)   
                    ->orderBy('count', 'desc')
                    ->get();


            $getalldeals = DB::table('lead')
            ->selectRaw('*,LEFT(customer, 1) as fs')
            ->where('status','=',4)->orderBy('dealfixdate', 'DESC')->get();
            // dd($getdealsamount_monthly);

            $currentTime = now(); // Get current time using Laravel's helper function
                  $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                  $quation = $this->quat();
              
              $countofleads=leads::where('status','!=',4)->count();    

              $countofdeals=leads::where('status','!=',4)->count();
             
              $staffStatistics=[];
              $staffStatistics1=[];
              $staffStatistics2=[];
       $staffStatistics_count=userlogin::count();

       if($staffStatistics_count<=4){

          $staffStatistics= userlogin::withCount([
              'leads as deals_count' => function ($query) {
                  $query->where('status', 4);
              },
              'leads as leads_count' => function ($query) {
                  $query->where('status', '!=', 4);
              }
          ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
          ->orderByDesc('deals_count')
          ->orderByDesc('leads_count')
          ->limit(4)
          ->get();

        }else if($staffStatistics_count>4 && $staffStatistics_count<=8 ){

          $staffStatistics= userlogin::withCount([
              'leads as deals_count' => function ($query) {
                  $query->where('status', 4);
              },
              'leads as leads_count' => function ($query) {
                  $query->where('status', '!=', 4);
              }
          ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
          ->orderByDesc('deals_count')
          ->orderByDesc('leads_count')
          ->limit(4)
          ->get();




          $staffStatistics1= userlogin::withCount([
              'leads as deals_count' => function ($query) {
                  $query->where('status', 4);
              },
              'leads as leads_count' => function ($query) {
                  $query->where('status', '!=', 4);
              }
          ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
          ->orderByDesc('deals_count')
          ->orderByDesc('leads_count')
         
          ->offset(4)
          ->limit(4)
          ->get();

        }else if($staffStatistics_count>8 ){
// && $staffStatistics_count<=13
          $staffStatistics= userlogin::withCount([
              'leads as deals_count' => function ($query) {
                  $query->where('status', 4);
              },
              'leads as leads_count' => function ($query) {
                  $query->where('status', '!=', 4);
              }
          ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
          ->orderByDesc('deals_count')
          ->orderByDesc('leads_count')
          ->limit(4)
          ->get();




          $staffStatistics1= userlogin::withCount([
              'leads as deals_count' => function ($query) {
                  $query->where('status', 4);
              },
              'leads as leads_count' => function ($query) {
                  $query->where('status', '!=', 4);
              }
          ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
          ->orderByDesc('deals_count')
          ->orderByDesc('leads_count')
         
          ->offset(4)
          ->limit(4)
          ->get();


          $staffStatistics2= userlogin::withCount([
              'leads as deals_count' => function ($query) {
                  $query->where('status', 4);
              },
              'leads as leads_count' => function ($query) {
                  $query->where('status', '!=', 4);
              }
          ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
          ->orderByDesc('deals_count')
          ->orderByDesc('leads_count')
         
          ->offset(8)
          ->limit(4)
          ->get();

        //   dd($staffStatistics2);


        }


            $expaire=userlogin::select('regendingdate')->where('uid',session()->get('uid'))->get();
            $currentDate = Carbon::now();
            $expirationDate = Carbon::parse($expaire[0]->regendingdate);
            $differenceInDays = $currentDate->diffInDays($expirationDate);



            return view("index",compact("topdeals",
            "countoflost","countofwon","topLeads","countofHot","countofwarm","countofcold","leadServiceCount","leadSourcesCount",
            "counts","staffStatistics","getleadsbythimonth","getdealsbythimonth","getdealsbytoday","getleadbytoday","getleadsbythisweek",
            "getdealsbythisweek","getalldeals","getalllabel","getempdetails","getleadsource","getprojects","getfollowuptype","getleads",
            "leadsdatas","followupdatas","followupdata","followupcount","leadcount",
            "dealcount","getleadsamount_weekly","getdealsamount_monthly","greeting","quation","countofleads","countofdeals","staffStatistics2","staffStatistics1","differenceInDays"));

           
               }elseif(Session::get('role')==0){
                // for staff
                $followupdatas = DB::table('folloupstbl')
                ->selectRaw('*,LEFT(customername, 1) as first_letter')
                ->where('teamid',session()->get('uid'))
                ->whereDate('nextfollowup',now())
                // ->where('followupstatus',0)
                ->orderBy('fid', 'desc')
                ->take(3) 
                ->get();
              //  dd($followupdatas);
                 $leadsdatas = DB::table('lead')
                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                ->where('status','!=',4)
                ->where('leadownerid',session()->get('uid'))
                ->orderBy('created_at', 'DESC')
                ->take(3)
                ->get();
                // dd(session()->get('uid'));
                // dd($leadsdatas);
            $leadcount=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->count();
            // $leadcount=leads::where('leadownerid',session()->get('uid'))->count();
            $dealcount=leads::where('status','=',4)->where('leadownerid',session()->get('uid'))->count();
            $followupcount=folloups::select('fid')->where('teamid',session()->get('uid'))->count();
            $getleadsamount=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->sum('value');
            $getdealsamount=leads::where('status','=',4)->where('leadownerid',session()->get('uid'))->sum('value');
            // $getdealsamount=leads::where('status','=',4)->sum('value');
            $followupdata=folloups::get();
            $getleads=leads::where('status','!=',4)->orderBy('leadid', 'DESC')->get();
            // dd($getleads);
            $getfollowuptype=followtypedetails::get();
            $getprojects=projects::get();
            $getleadsource=leadsourcedata::get();
            $getempdetails=userlogin::get();
            $getalllabel=leadlabel::get();

            $getprojects = projects::where('companyid',session()->get('cid'))->get();
            $getleadsource=leadsourcedata::where('companyid',session()->get('cid'))->get();
            $getempdetails=userlogin::where('companyid',session()->get('cid'))->get();

            // $getleadbytoday=leads::whereDate('created_at',now())->where('status','!=',4)->where('leadownerid',session()->get('uid'))->count();
            $getleadbytoday=leads::whereDate('created_at',now())->where('leadownerid',session()->get('uid'))->count();
            $getdealsbytoday=leads::whereDate('created_at',now())->where('status','=',4)->where('leadownerid',session()->get('uid'))->count();
            $currentWeekStartDate = Carbon::now()->startOfWeek();
            $currentWeekEndDate = Carbon::now()->endOfWeek();
            $getdealsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','=',4)->where('leadownerid',session()->get('uid'))->count();
            // $getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','!=',4)->where('leadownerid',session()->get('uid'))->count();
            $getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('leadownerid',session()->get('uid'))->count();
            $getleadsamount_weekly = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','!=',4)->where('leadownerid',session()->get('uid'))->sum('value');       
            // $currentMonth = Carbon::now()->month;
            // $getdealsamount_monthly=leads::whereMonth('dealfixdate', $currentMonth)->where('leadownerid',session()->get('uid'))->where('status','=',4)->Where('dealstatus',0)->OrWhere('dealstatus',1)->sum('value');
            $currentMonth = Carbon::now()->month;
            $getdealsamount_monthly_1=leads::whereMonth('dealfixdate', $currentMonth)->where('leadownerid',session()->get('uid'))->where('status','=',4)->Where('dealstatus',1)->sum('value');
            $getdealsamount_monthly_0=leads::whereMonth('dealfixdate', $currentMonth)->where('leadownerid',session()->get('uid'))->where('status','=',4)->Where('dealstatus',0)->sum('value');
            $getdealsamount_monthly=$getdealsamount_monthly_1+$getdealsamount_monthly_0;

          
            $getdealsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('status','=',4)->where('leadownerid',session()->get('uid'))->count();
            // $getleadsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('status','!=',4)->where('leadownerid',session()->get('uid'))->count();
            $getleadsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('leadownerid',session()->get('uid'))->count();
                    $leadSourcesCount = leads::selectRaw("LEFT(leadsource, 1) as first_character, COUNT(*) as leadsource_count, leadsource")
                    ->groupBy('first_character', 'leadsource')
                    ->where('leadownerid',session()->get('uid'))
                    ->orderBy('leadsource_count', 'desc')
                    ->get();



                    $leadServiceCount = leads::selectRaw("LEFT(title, 1) as first_character_title, COUNT(*) as title_count, title")
                    ->groupBy('first_character_title', 'title')
                    ->orderBy('title_count', 'desc')
                    ->where('leadownerid',session()->get('uid'))
                    ->get();
                    //    all from right start
                        // $countofHot=leads::where('label',"Hot")->count();
                        // $countofwarm=leads::where('label',"warm")->count();
                        // $countofcold=leads::where('label',"cold")->count();
                        // $countofwon=leads::where('dealstatus',1)->count();
                        // $countoflost=leads::where('dealstatus',2)->count();
                    $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    
                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                        // dd($countofwon);
                        $topLeads = leads::orderBy('leadid', 'desc')
                            ->selectRaw('*,LEFT(customer, 1) as firstletter')
                            ->where('status','!=',4)
                            ->take(5)
                            ->get();   
                        $topdeals = leads::orderBy('dealfixdate', 'desc')
                            ->selectRaw('*,LEFT(customer, 1) as firstletter')
                            ->where('status','=',4)
                            ->take(5)
                            ->get();   
                    // all from right end




              
                    $staffStatistics=[];
                    $staffStatistics1=[];
                    $staffStatistics2=[];
             $staffStatistics_count=userlogin::count();
      
             if($staffStatistics_count<=4){
      
                $staffStatistics= userlogin::withCount([
                    'leads as deals_count' => function ($query) {
                        $query->where('status', 4);
                    },
                    'leads as leads_count' => function ($query) {
                        $query->where('status', '!=', 4);
                    }
                ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
                ->orderByDesc('deals_count')
                ->orderByDesc('leads_count')
                ->limit(4)
                ->get();
      
              }else if($staffStatistics_count>4 && $staffStatistics_count<=8 ){
      
                $staffStatistics= userlogin::withCount([
                    'leads as deals_count' => function ($query) {
                        $query->where('status', 4);
                    },
                    'leads as leads_count' => function ($query) {
                        $query->where('status', '!=', 4);
                    }
                ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
                ->orderByDesc('deals_count')
                ->orderByDesc('leads_count')
                ->limit(4)
                ->get();
      
      
      
      
                $staffStatistics1= userlogin::withCount([
                    'leads as deals_count' => function ($query) {
                        $query->where('status', 4);
                    },
                    'leads as leads_count' => function ($query) {
                        $query->where('status', '!=', 4);
                    }
                ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
                ->orderByDesc('deals_count')
                ->orderByDesc('leads_count')
               
                ->offset(4)
                ->limit(4)
                ->get();
      
              }else if($staffStatistics_count>8 ){
      // && $staffStatistics_count<=13
                $staffStatistics= userlogin::withCount([
                    'leads as deals_count' => function ($query) {
                        $query->where('status', 4);
                    },
                    'leads as leads_count' => function ($query) {
                        $query->where('status', '!=', 4);
                    }
                ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
                ->orderByDesc('deals_count')
                ->orderByDesc('leads_count')
                ->limit(4)
                ->get();
      
      
      
      
                $staffStatistics1= userlogin::withCount([
                    'leads as deals_count' => function ($query) {
                        $query->where('status', 4);
                    },
                    'leads as leads_count' => function ($query) {
                        $query->where('status', '!=', 4);
                    }
                ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
                ->orderByDesc('deals_count')
                ->orderByDesc('leads_count')
               
                ->offset(4)
                ->limit(4)
                ->get();
      
      
                $staffStatistics2= userlogin::withCount([
                    'leads as deals_count' => function ($query) {
                        $query->where('status', 4);
                    },
                    'leads as leads_count' => function ($query) {
                        $query->where('status', '!=', 4);
                    }
                ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
                ->orderByDesc('deals_count')
                ->orderByDesc('leads_count')
               
                ->offset(8)
                ->limit(4)
                ->get();
      
              //   dd($staffStatistics2);
      
      
              }
      
      


            //  dd($staffStatistics_count);

          

            // dd(count($staffStatistics));
            // $counts = leads::selectRaw('COUNT(*) as count, leadstage')
            //     ->groupBy('leadstage')
            //     ->get()
            //     ->pluck('count', 'leadstage');
            //     $allstagesss=leadstage::select('stagename')->get();
            //    // dd($allstages);
            //     $allStages = [0, 1, 2, 3, 4]; // Assuming these are all possible stages
            //         $counts = collect();
            //         foreach ($allStages as $stage) {
            //             $counts[$stage] = leads::where('leadstage', $stage)->where('leadownerid',session()->get('uid'))->count();
            //             // $counts[$stage] = leads::where('leadstagetext', $stage)->where('leadownerid',session()->get('uid'))->count();
            //         }
                    $counts = leads::selectRaw('leadstagetext, COUNT(*) as count')
                    ->groupBy('leadstagetext')
                    ->orderBy('count', 'desc')
                    ->where('status','!=',4)   
                    ->where('leadownerid',session()->get('uid'))
                    ->get();


                     
        //     $counts = leads::where('companyid',session()->get('cid'))->selectRaw('leadstagetext, COUNT(*) as count')
        //     ->where('status','!=',4)   
        //    ->groupBy('leadstagetext')
        //    ->orderBy('count', 'desc')
        //    ->get();


                    // foreach ($counts as $count) {
                    //     // echo "Stage: " . $count->leadstagetext . ", Count: " . $count->leadstagetext . "<br>";
                    // }      
                   // dd($counts);
            $getalldeals = DB::table('lead')
            ->selectRaw('*,LEFT(customer, 1) as fs')
            ->where('status','=',4)
            ->where('leadownerid',session()->get('uid'))
            ->orderBy('dealfixdate', 'DESC')->get();

            $currentTime = now(); // Get current time using Laravel's helper function
            $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
          
            $quation = $this->quat();    
            
            $countofleads=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->count();
            $countofdeals=leads::where('status','=',4)->where('leadownerid',session()->get('uid'))->count();

            $expaire=userlogin::select('regendingdate')->where('uid',session()->get('uid'))->get();
            $currentDate = Carbon::now();
            $expirationDate = Carbon::parse($expaire[0]->regendingdate);
            $differenceInDays = $currentDate->diffInDays($expirationDate);


            return view("index",compact("topdeals",
            "countoflost","countofwon","topLeads","countofHot","countofwarm","countofcold","leadServiceCount","leadSourcesCount",
            "counts","staffStatistics","getleadsbythimonth","getdealsbythimonth","getdealsbytoday","getleadbytoday","getleadsbythisweek",
            "getdealsbythisweek","getalldeals","getalllabel","getempdetails","getleadsource","getprojects","getfollowuptype","getleads",
            "leadsdatas","followupdatas","followupdata","followupcount","leadcount",
            "dealcount","getleadsamount","getdealsamount","getleadsamount_weekly","getdealsamount_monthly","greeting","quation","countofleads","countofdeals",
                "staffStatistics1","staffStatistics2","differenceInDays"));
               }
        }else{
            return redirect("/");
        }
    }
    public function createlead(Request $request){
        //  dd($request->lead_date);
    // dd($request->Priotity);
        if(Session::has('uid')){
           // dd($request->all());
            $fullname=session('fullname');
            $uid=session('uid');
            $validator = Validator::make($request->all(), [
                'customer'=>'required', //ok
                // 'Orginazation'=>'required', //ok
                'Title'=>'required', //ok
                'Priotity'=>'required', //ok
             
                'mobile'=>'required|numeric|digits:10', //ok
                // 'email'=>'required|email', //ok
                'Description'=>'required', //ok
                'leadsource'=>'required', //ok
                // 'city'=>'required', //ok
              //ok
                              ],
                            [
                           'customer.required'=>'Customer Name Required',
                           'Orginazation.required'=>'Orginazation Name Required',
                        //    'Title.required'=>'Title  Required',
                           'Title.required'=>'Service Name Required',
                           'Description.required'=>'Description Required',
                           'mobile.required'=>'Mobile Number Required',
                           'mobile.numeric'=>'Mobile Number allowed digits only',
                           'mobile.digits'=>'Mobile allowed maximum 10 digits',
                           'email.required'=>'Email id Required',
                           'email.email'=>'Invalid email id',
                           'leadsource.required'=>'Lead Source Required',
                           'city.required'=>'Enter City Name',
                           'Priotity.required'=>'Lead Type Required',
                           ]
                             );
                              if ($validator->fails()) {   
                            $errors = $validator->errors()->messages();
                           return response()->json(['status' => '0', 'message' => $errors]);
                       }else{
                            $datetime="";
                        if($request->input('lead_date')==""){
                               $datetime=now();
                            //dd("empty");
                            }
                            else
                            {
                                $datetime=$request->input('lead_date') ;
                            }
                        $addlead=leads::create([
                            'customer'=> $request->input('customer'),
                            'ogrinazation'=> $request->input('Orginazation'),
                            'title'=> $request->input('Title2'),
                            'description'=> $request->input('Description'),
                            'value'=> $request->input('amount'),
                            'currency'=> $request->input('currency'),
                            'label'=> $request->input('Priotity'),
                            'owner'=> $request->input('owner'),
                            'leadownerid'=>$uid,
                            'phone'=> $request->input('mobile'),
                            'email'=> $request->input('email'),
                            'addressline_1'=> $request->input('address1'),
                            'addressline_2'=> $request->input('address2'),
                            'addressline_3'=> $request->input('address3'),
                            'town'=> $request->input('city'),
                            'state'=> $request->input('state'),
                            'zipcode'=> $request->input('zipcode'),
                            'country'=> $request->input('country'),
                            'created_at'=>$request->input('lead_date'),
                            // 'created_at'=>$datetime,
                            'leadsource'=>$request->input('leadsource'),
                            // 'created_at'=> now(),
                            'created_by'=> $fullname,
                            'created_by_id'=> $uid,
                            'companyid'=>session()->get('cid'),
                        ]);
                        if($addlead){
                           // return redirect()->route('admin.leads');
                           return response()->json(['status'=> 'success','message'=> 'Leaded Added successfully']);
                        }else{
                            return response()->json(['status'=> 'failuer','message'=> 'Leaded Added successfully']);
                        }
                            }
        }else{
            return redirect('/');
        }
    }
    public function getleads(){
        $leadsdatas = DB::table('lead')
        ->selectRaw('*,LEFT(customer, 1) as firstletter')
        ->where('status','!=',4)
        ->orderBy('leadid', 'DESC')->get();
        return response()->json($leadsdatas);
    }
    public function leads(Request $request){
        //dd($parameterValue);
        if(Session::has('uid')){
            $uid = Session::get('uid');
            if(Session::get('role')==1){
                // for admin
                $getleads=leads::where('status','!=',4)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
              // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::get();
                   $getalllabel=leadlabel::get();


                
                   
                //    $countofHot=leads::where('label',"Hot")->count();
                //    $countofwarm=leads::where('label',"warm")->count();
                //    $countofcold=leads::where('label',"cold")->count();

                $countofHot=leads::where('label',"Hot")->where('status','!=',4)->count();
                $countofwarm=leads::where('label',"warm")->where('status','!=',4)->count();
                $countofcold=leads::where('label',"cold")->where('status','!=',4)->count();

                $countofwon=leads::where('dealstatus',1)->count();
                   $countoflost=leads::where('dealstatus',2)->count();
                   $getallleadstages=leadstage::get();
                   // dd($countofwon);
                   $topLeads = leads::orderBy('leadid', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','!=',4)
                       ->take(5)
                       ->get();   
                   $topdeals = leads::orderBy('dealfixdate', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','=',4)
                       ->take(5)
                       ->get();
                       $followupdatas = DB::table('folloupstbl')
                       ->selectRaw('*,LEFT(customername, 1) as first_letter')
                       ->get();
                       $parameterValue = $request->query('parameter');
                       $parameterValue2 = $request->query('parameter2');
                   // dd($parameterValue2);
                        if($parameterValue==null && $parameterValue2==null){
                            $leadsdatas = DB::table('lead')
                            ->selectRaw('*,LEFT(customer, 1) as firstletter')
                            ->where('status','!=',4)
                            ->orderBy('created_at', 'DESC')->get();
                        }elseif($parameterValue!==null){
                            $leadsdatas = DB::table('lead')
                            ->selectRaw('*,LEFT(customer, 1) as firstletter')
                            ->where('status','!=',4)
                            ->where('label',$parameterValue)
                            ->orderBy('created_at', 'DESC')->get();
                        }elseif($parameterValue2!==null){
                            $leadsdatas = DB::table('lead')
                            ->selectRaw('*,LEFT(customer, 1) as firstletter')
                            ->where('status','!=',4)
                            ->where('leadstagetext',$parameterValue2)
                            ->orderBy('created_at', 'DESC')->get();
                        }
                        $datasArray = $leadsdatas->toArray();
                        //return response()->json($datasArray);
                        // $leadsdatas = DB::table('lead')
                        //         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                        //         ->where('status','!=',4)->get();
                        $dealsdatas = DB::table('lead')
                                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                             ->where('status','=',4)->get();
                             $currentWeekStartDate = Carbon::now()->startOfWeek();
                             $currentWeekEndDate = Carbon::now()->endOfWeek();
                             $getleadsamount_weekly = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','!=',4)->sum('value');        

                             $currentTime = now(); // Get current time using Laravel's helper function
            $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
            $quation = $this->quat();   
                

                             return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                        "countofHot",
                        "countofwarm",
                        "countofcold",
                        "countofwon",
                        "countoflost",
                        "topLeads",
                        "topdeals",
                        "leadsdatas",
                        "dealsdatas",
                        "getempdetails",
                        "getalllabel",
                        "getallleadstages",
                        "greeting",
                        "getleadsamount_weekly",
                        "quation",
                ));
                //dd($getleads);
                //   return view("dashboard.leads",compact("getleads"));
            }else{
                $getleads=leads::where('status','!=',4)->where('leadownerid',$uid)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
          // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::get();
                   $getalllabel=leadlabel::get();
                   $getallleadstages=leadstage::get();

                   
                //dd($getstaff);
                // $countofHot=leads::where('label',"Hot")->count();
                // $countofwarm=leads::where('label',"warm")->count();
                // $countofcold=leads::where('label',"cold")->count();
                // $countofwon=leads::where('dealstatus',1)->count();
                // $countoflost=leads::where('dealstatus',2)->count();
                //   $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                //     $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                //     $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
                    
                    $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->where('status','!=',4)->count();


                    
                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                // dd($countofwon);
                $topLeads = leads::orderBy('leadid', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->take(5)
                    ->get();   
                $topdeals = leads::orderBy('dealfixdate', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->take(5)
                    ->get();
                    // $leadsdatas = DB::table('lead')
                    // ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    // ->where('status','!=',4)
                    // ->where('leadownerid',session()->get('uid'))->get();
                    // $leadsdatas = DB::table('lead')
                    // ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    // ->where('status','!=',4)
                    // ->where('leadownerid',session()->get('uid'))
                    // ->orderBy('leadid', 'DESC')->get();
                    // $parameterValue = $request->query('parameter');
                    // if($parameterValue==null){
                    //     $leadsdatas = DB::table('lead')
                    //     ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    //     ->where('status','!=',4)
                    //     ->where('leadownerid',$uid)
                    //     ->orderBy('leadid', 'DESC')->get();
                    // }else{
                    //     $leadsdatas = DB::table('lead')
                    //     ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    //     ->where('status','!=',4)
                    //     ->where('leadownerid',$uid)
                    //     ->where('label',$parameterValue)
                    //     ->orderBy('leadid', 'DESC')->get();
                    // }
                    $parameterValue = $request->query('parameter');
                    $parameterValue2 = $request->query('parameter2');
                // dd($parameterValue2);
                     if($parameterValue==null && $parameterValue2==null){
                         $leadsdatas = DB::table('lead')
                         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                         ->where('status','!=',4)
                         ->where('leadownerid',$uid)
                         ->orderBy('created_at', 'DESC')->get();
                     }elseif($parameterValue!==null){
                         $leadsdatas = DB::table('lead')
                         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                         ->where('status','!=',4)
                         ->where('leadownerid',$uid)
                         ->where('label',$parameterValue)
                         ->orderBy('created_at', 'DESC')->get();
                     }elseif($parameterValue2!==null){
                         $leadsdatas = DB::table('lead')
                         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                         ->where('status','!=',4)
                         ->where('leadownerid',$uid)
                         ->where('leadstagetext',$parameterValue2)
                         ->orderBy('created_at', 'DESC')->get();
                     }
                    // $parameterValue = $request->query('parameter');
                    // $leadsdatas = DB::table('lead')
                    //  ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    //  ->where('status','!=',4)
                    //  ->where('label',$parameterValue)
                    //  ->orderBy('leadid', 'DESC')->get();
                    $dealsdatas = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->where('leadownerid',session()->get('uid'))->get();
                  //  dd($leadsdatas);
                 //  dd($getstats[0]->city_name);
                 $currentWeekStartDate = Carbon::now()->startOfWeek();
                 $currentWeekEndDate = Carbon::now()->endOfWeek();
                 $getleadsamount_weekly = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','!=',4)->where('leadownerid',$uid)->sum('value');    
                 $currentTime = now(); // Get current time using Laravel's helper function
                 $greeting = $this->getGreetingMessage($currentTime->format('H:i:s'));
                    
                 $quation = $this->quat();

                 return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                 "countofHot",
                 "countofwarm",
                 "countofcold",
                 "countofwon",
                 "countoflost",
                 "topLeads",
                 "topdeals",
                 "leadsdatas",
                 "dealsdatas",
                 "getempdetails",
                 "getalllabel",
                 "getallleadstages",
                 "greeting",
                 "getleadsamount_weekly",
                 "quation",
         ));
            }
        }else{
            return redirect("/");
        } 
            // dd($uid);
    }
    public function leads2(Request $request){
   $parameterValue = $request->query('parameter');
  // dd($parameterValue);
        if(Session::has('uid')){
            $uid = Session::get('uid');
            if(Session::get('role')==1){
                // for admin
                $getleads=leads::where('status','!=',4)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
              // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::get();
                   $getalllabel=leadlabel::get();
                   $countofHot=leads::where('label',"Hot")->count();
                   $countofwarm=leads::where('label',"warm")->count();
                   $countofcold=leads::where('label',"cold")->count();
                   $countofwon=leads::where('dealstatus',1)->count();
                   $countoflost=leads::where('dealstatus',2)->count();
                   // dd($countofwon);
                   $topLeads = leads::orderBy('leadid', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','!=',4)
                       ->take(5)
                       ->get();   
                   $topdeals = leads::orderBy('dealfixdate', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','=',4)
                       ->take(5)
                       ->get();
                       $followupdatas = DB::table('folloupstbl')
                       ->selectRaw('*,LEFT(customername, 1) as first_letter')
                       ->get();
                       $segments = collect(explode('/', $request->path()));
                       $lastSegment = $segments->last();
                       $parameterValue = $request->query('parameter');
               // dd($lastSegment);
                       $leadsdatas = DB::table('lead')
                        ->selectRaw('*,LEFT(customer, 1) as firstletter')
                        ->where('status','!=',4)
                        ->where('label',$parameterValue)
                        ->orderBy('leadid', 'DESC')->get();
                        $datasArray = $leadsdatas->toArray();
                        //return response()->json($datasArray);
                        // $leadsdatas = DB::table('lead')
                        //         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                        //         ->where('status','!=',4)->get();
                        $dealsdatas = DB::table('lead')
                                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                                ->where('status','=',4)->get();
                //dd($getstaff);
                 //  dd($getstats[0]->city_name);
                    return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                        "countofHot",
                        "countofwarm",
                        "countofcold",
                        "countofwon",
                        "countoflost",
                        "topLeads",
                        "topdeals",
                        "leadsdatas",
                        "dealsdatas",
                        "getempdetails",
                        "getalllabel",
                ));
                //dd($getleads);
                //   return view("dashboard.leads",compact("getleads"));
            }else{
                $getleads=leads::where('status','!=',4)->where('leadownerid',$uid)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
          // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::get();
                   $getalllabel=leadlabel::get();
                //dd($getstaff);
                // $countofHot=leads::where('label',"Hot")->count();
                // $countofwarm=leads::where('label',"warm")->count();
                // $countofcold=leads::where('label',"cold")->count();
                // $countofwon=leads::where('dealstatus',1)->count();
                // $countoflost=leads::where('dealstatus',2)->count();
                  $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                // dd($countofwon);
                $topLeads = leads::orderBy('leadid', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->take(5)
                    ->get();   
                $topdeals = leads::orderBy('dealfixdate', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->take(5)
                    ->get();
                    // $leadsdatas = DB::table('lead')
                    // ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    // ->where('status','!=',4)
                    // ->where('leadownerid',session()->get('uid'))->get();
                    $segments = collect(explode('/', $request->path()));
                    $lastSegment = $segments->last();
                    $parameterValue = $request->query('parameter');
                    $leadsdatas = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->where('leadownerid',session()->get('uid'))
                    ->where('label',$parameterValue)
                    ->orderBy('leadid', 'DESC')->get();
                    $dealsdatas = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->where('leadownerid',session()->get('uid'))->get();
                  //  dd($leadsdatas);
                 //  dd($getstats[0]->city_name);
                 return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                 "countofHot",
                 "countofwarm",
                 "countofcold",
                 "countofwon",
                 "countoflost",
                 "topLeads",
                 "topdeals",
                 "leadsdatas",
                 "dealsdatas",
                 "getempdetails",
                 "getalllabel",
         ));
            }
        }else{
            return redirect("/");
        } 
            // dd($uid);
    }
    public function leads34(Request $request){
        if(Session::has('uid')){
            $uid = Session::get('uid');
            if(Session::get('role')==1){
                // for admin
                $getleads=leads::where('status','!=',4)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
              // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::get();
                   $getalllabel=leadlabel::get();
                   $countofHot=leads::where('label',"Hot")->count();
                   $countofwarm=leads::where('label',"warm")->count();
                   $countofcold=leads::where('label',"cold")->count();
                   $countofwon=leads::where('dealstatus',1)->count();
                   $countoflost=leads::where('dealstatus',2)->count();
                   // dd($countofwon);
                   $topLeads = leads::orderBy('leadid', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','!=',4)
                       ->take(5)
                       ->get();   
                   $topdeals = leads::orderBy('dealfixdate', 'desc')
                       ->selectRaw('*,LEFT(customer, 1) as firstletter')
                       ->where('status','=',4)
                       ->take(5)
                       ->get();
                       $followupdatas = DB::table('folloupstbl')
                       ->selectRaw('*,LEFT(customername, 1) as first_letter')
                       ->get();
                       $segments = collect(explode('/', $request->path()));
                       $lastSegment = $segments->last();
                       $leadsdatas = DB::table('lead')
                        ->selectRaw('*,LEFT(customer, 1) as firstletter')
                        ->where('status','!=',4)
                        ->where('leadstagetext',$lastSegment)
                        ->orderBy('leadid', 'DESC')->get();
                        $datasArray = $leadsdatas->toArray();
                        //return response()->json($datasArray);
                        // $leadsdatas = DB::table('lead')
                        //         ->selectRaw('*,LEFT(customer, 1) as firstletter')
                        //         ->where('status','!=',4)->get();
                        $dealsdatas = DB::table('lead')
                                ->selectRaw('*,LEFT(customer, 1) as firstletter')
                                ->where('status','=',4)->get();
                //dd($getstaff);
                 //  dd($getstats[0]->city_name);
                    return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                        "countofHot",
                        "countofwarm",
                        "countofcold",
                        "countofwon",
                        "countoflost",
                        "topLeads",
                        "topdeals",
                        "leadsdatas",
                        "dealsdatas",
                        "getempdetails",
                        "getalllabel",
                ));
                //dd($getleads);
                //   return view("dashboard.leads",compact("getleads"));
            }else{
                $getleads=leads::where('status','!=',4)->where('leadownerid',$uid)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
          // dd($getleads);
                $getleadsource=leadsourcedata::get();
                   // dd($gethospitals);
                   $getstats=indiancitis::get();
                   $city_state = indiancitis::select('city_state')->distinct()->get();
                   $getprojects = projects::get();
                   $getstaff = userlogin::get();
                   $getempdetails=userlogin::get();
                   $getalllabel=leadlabel::get();
                //dd($getstaff);
                // $countofHot=leads::where('label',"Hot")->count();
                // $countofwarm=leads::where('label',"warm")->count();
                // $countofcold=leads::where('label',"cold")->count();
                // $countofwon=leads::where('dealstatus',1)->count();
                // $countoflost=leads::where('dealstatus',2)->count();
                  $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
                    $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
                    $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
                    $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
                    $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
                // dd($countofwon);
                $topLeads = leads::orderBy('leadid', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->take(5)
                    ->get();   
                $topdeals = leads::orderBy('dealfixdate', 'desc')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->take(5)
                    ->get();
                    // $leadsdatas = DB::table('lead')
                    // ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    // ->where('status','!=',4)
                    // ->where('leadownerid',session()->get('uid'))->get();
                    $segments = collect(explode('/', $request->path()));
                    $lastSegment = $segments->last();
                    $leadsdatas = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','!=',4)
                    ->where('leadownerid',session()->get('uid'))
                    ->where('leadstagetext',$lastSegment)
                    ->orderBy('leadid', 'DESC')->get();
                    $dealsdatas = DB::table('lead')
                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
                    ->where('status','=',4)
                    ->where('leadownerid',session()->get('uid'))->get();
                  //  dd($leadsdatas);
                 //  dd($getstats[0]->city_name);
                 return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
                 "countofHot",
                 "countofwarm",
                 "countofcold",
                 "countofwon",
                 "countoflost",
                 "topLeads",
                 "topdeals",
                 "leadsdatas",
                 "dealsdatas",
                 "getempdetails",
                 "getalllabel",
         ));
            }
        }else{
            return redirect("/");
        } 
    }
    // public function leads3(){
    //     dd("fgjkd");
    //     if(Session::has('uid')){
    //         $uid = Session::get('uid');
    //         if(Session::get('role')==1){
    //             // for admin
    //             $getleads=leads::where('status','!=',4)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
    //           // dd($getleads);
    //             $getleadsource=leadsourcedata::get();
    //                // dd($gethospitals);
    //                $getstats=indiancitis::get();
    //                $city_state = indiancitis::select('city_state')->distinct()->get();
    //                $getprojects = projects::get();
    //                $getstaff = userlogin::get();
    //                $getempdetails=userlogin::get();
    //                $getalllabel=leadlabel::get();
    //                $countofHot=leads::where('label',"Hot")->count();
    //                $countofwarm=leads::where('label',"warm")->count();
    //                $countofcold=leads::where('label',"cold")->count();
    //                $countofwon=leads::where('dealstatus',1)->count();
    //                $countoflost=leads::where('dealstatus',2)->count();
    //                // dd($countofwon);
    //                $topLeads = leads::orderBy('leadid', 'desc')
    //                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                    ->where('status','!=',4)
    //                    ->take(5)
    //                    ->get();   
    //                $topdeals = leads::orderBy('dealfixdate', 'desc')
    //                    ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                    ->where('status','=',4)
    //                    ->take(5)
    //                    ->get();
    //                    $followupdatas = DB::table('folloupstbl')
    //                    ->selectRaw('*,LEFT(customername, 1) as first_letter')
    //                    ->get();
    //                    $leadsdatas = DB::table('lead')
    //                     ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                     ->where('status','!=',4)
    //                     ->where('label','Hot')
    //                     ->orderBy('leadid', 'DESC')->get();
    //                     $datasArray = $leadsdatas->toArray();
    //                     //return response()->json($datasArray);
    //                     // $leadsdatas = DB::table('lead')
    //                     //         ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                     //         ->where('status','!=',4)->get();
    //                     $dealsdatas = DB::table('lead')
    //                             ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                             ->where('status','=',4)->get();
    //             //dd($getstaff);
    //              //  dd($getstats[0]->city_name);
    //                 return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
    //                     "countofHot",
    //                     "countofwarm",
    //                     "countofcold",
    //                     "countofwon",
    //                     "countoflost",
    //                     "topLeads",
    //                     "topdeals",
    //                     "leadsdatas",
    //                     "dealsdatas",
    //                     "getempdetails",
    //                     "getalllabel",
    //             ));
    //             //dd($getleads);
    //             //   return view("dashboard.leads",compact("getleads"));
    //         }else{
    //             $getleads=leads::where('status','!=',4)->where('leadownerid',$uid)->orderBy('created_at', 'desc')->paginate(25)->onEachSide(25);
    //       // dd($getleads);
    //             $getleadsource=leadsourcedata::get();
    //                // dd($gethospitals);
    //                $getstats=indiancitis::get();
    //                $city_state = indiancitis::select('city_state')->distinct()->get();
    //                $getprojects = projects::get();
    //                $getstaff = userlogin::get();
    //                $getempdetails=userlogin::get();
    //                $getalllabel=leadlabel::get();
    //             //dd($getstaff);
    //             // $countofHot=leads::where('label',"Hot")->count();
    //             // $countofwarm=leads::where('label',"warm")->count();
    //             // $countofcold=leads::where('label',"cold")->count();
    //             // $countofwon=leads::where('dealstatus',1)->count();
    //             // $countoflost=leads::where('dealstatus',2)->count();
    //               $countofHot=leads::where('label',"Hot")->where('leadownerid',session()->get('uid'))->count();
    //                 $countofwarm=leads::where('label',"warm")->where('leadownerid',session()->get('uid'))->count();
    //                 $countofcold=leads::where('label',"cold")->where('leadownerid',session()->get('uid'))->count();
    //                 $countofwon=leads::where('dealstatus',1)->where('leadownerid',session()->get('uid'))->count();
    //                 $countoflost=leads::where('dealstatus',2)->where('leadownerid',session()->get('uid'))->count();
    //             // dd($countofwon);
    //             $topLeads = leads::orderBy('leadid', 'desc')
    //                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                 ->where('status','!=',4)
    //                 ->take(5)
    //                 ->get();   
    //             $topdeals = leads::orderBy('dealfixdate', 'desc')
    //                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                 ->where('status','=',4)
    //                 ->take(5)
    //                 ->get();
    //                 // $leadsdatas = DB::table('lead')
    //                 // ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                 // ->where('status','!=',4)
    //                 // ->where('leadownerid',session()->get('uid'))->get();
    //                 $leadsdatas = DB::table('lead')
    //                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                 ->where('status','!=',4)
    //                 ->where('leadownerid',session()->get('uid'))
    //                 ->where('label','Hot')
    //                 ->orderBy('leadid', 'DESC')->get();
    //             dd($leadsdatas);
    //                 $dealsdatas = DB::table('lead')
    //                 ->selectRaw('*,LEFT(customer, 1) as firstletter')
    //                 ->where('status','=',4)
    //                 ->where('leadownerid',session()->get('uid'))->get();
    //               //  dd($leadsdatas);
    //              //  dd($getstats[0]->city_name);
    //              return view("leads",compact("getstats","city_state","getprojects","getstaff","getleads","getleadsource",
    //              "countofHot",
    //              "countofwarm",
    //              "countofcold",
    //              "countofwon",
    //              "countoflost",
    //              "topLeads",
    //              "topdeals",
    //              "leadsdatas",
    //              "dealsdatas",
    //              "getempdetails",
    //              "getalllabel",
    //      ));
    //         }
    //     }else{
    //         return redirect("/");
    //     } 
    //         // dd($uid);
    // }
    public function addleads(){
        if(Session::has('uid')){
            //  $gethospitals=hospitaldetails::get();
             // dd($gethospitals);
             $getstats=indiancitis::get();
             $leadsource=leadsourcedata::get();
             $city_state = indiancitis::select('city_state')->distinct()->get();
             $getprojects = projects::get();
             $getstaff = userlogin::get();
          //dd($getstaff);
           //  dd($getstats[0]->city_name);
              return view("addleads",compact("getstats","city_state","getprojects","getstaff","leadsource"));
          }else{
              return redirect("/");
          }
    }
}
