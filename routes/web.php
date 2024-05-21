<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\superadmin;
use App\Http\Controllers\followup;
use App\Http\Controllers\topadmin;
use App\Http\Controllers\demo;
use App\Http\Controllers\email;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\searchcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/livewire', function () {
    return view('livewirepage');
});



Route::get('aaa', function () {

    \Artisan::call('storage:link');

    dd("Cache is cleared");

});







// Asif code here 25-04-2024

Route::get('/superadmin', function () {
    return view('loginadmin');
})->middleware('postloginprevent');

// Asif code end here 25-04-2024

Route::get('/', function () {
    return view('login');
})->middleware('postloginprevent');

Route::post('adduser',[loginController::class,'adduser'])->name('admin.registercheck');

Route::post('registercheck',[loginController::class,'registercheck'])->name('admin.registercheck');

Route::get('/register', function () {
    // return view('register');
    // return view('register');
    return view('register-form');

    // return view('register1');
})->name('admin.back')->middleware('postloginprevent');


Route::get('/testlogin', function () {
    return view('template');
})->name('tlogin');

Route::post('/checklogin',[loginController::class,'logincheck'])->name('login.check');


Route::group(["prefix" => "/dashboard","middleware"=> ["checklogin"]], function () {
    Route::get('/',[superadmin::class,'index'])->name('admin.home');
    // Route::get('/{param}',[superadmin::class,'index22'])->where('param', '.*')->name('admin.home22');
    // Route::get('/',[superadmin::class,'index'])->name('admin.home');
    Route::any('/logout',[superadmin::class,'logout'])->name('admin.logout');
    // Route::any('/followups',[superadmin::class,'followups'])->name('admin.followups');



    Route::get('/leads/{parameter?}',[superadmin::class,'leads'])->name('admin.leads');
    Route::get('/leads/{parameter2?}',[superadmin::class,'leads'])->name('admin.leads1');

 


    Route::post('/upload',[UploadController::class,'upload'])->name('admin.uploadsss');
    // Route::get('/upload',[UploadController::class,'upload'])->name('admin.upload');

    // Route::get('admin/errorpage/{failures}', 'AdminController@errorpage')->name('admin.errorpage');
    Route::get('/errorpage/{failures?}',[UploadController::class,'errorpage'])->name('admin.errorpage');
    Route::get('/download-excel',[UploadController::class,'download'])->name('admin.excel');

    // Route::get('/download-excel', 'ExcelController@download')->name('download.excel');

    // Route::post('upload', 'UploadController@upload')->name('upload');
    
    // Route::get('/leads/{q?}',[searchcontroller::class,'searchfilter'])->name('admin.search');


 
    // Route::get('/leads/s/{parameter?}',[superadmin::class,'leads2'])->name('admin.leads2222');  // for cold
    // Route::get('/leads/{parameter?}',[superadmin::class,'leads2'])->name('admin.leads2222');  // for cold
    Route::get('/leads/search/{ppp}',[superadmin::class,'leads34'])->name('admin.leads3');  // for successfully
   
    Route::get('/add-leads',[superadmin::class,'addleads'])->name('admin.addleads');
    Route::post('/createlead',[superadmin::class,'createlead'])->name('admin.createlead');
    Route::any('/convertdeal/{id}',[superadmin::class,'convertdeal'])->name('admin.convertdeal');
    Route::post('/getleaddata',[superadmin::class,'getleaddata'])->name('admin.getleaddata');
   
    Route::get('/viewdeals/{s1?}',[superadmin::class,'viewdeals'])->name('admin.viewdeals');
    Route::any('/s/getleaddata',[superadmin::class,'getleaddatass'])->name('admin.getleaddatass');
    Route::post('/adddeal',[superadmin::class,'adddeal'])->name('admin.adddeal');
    Route::get('/viewdeals/{s?}',[superadmin::class,'viewdeals'])->name('admin.viewdeals');
    Route::post('/closelead',[superadmin::class,'closelead'])->name('admin.closelead');
    Route::any('/deallost',[superadmin::class,'deallost'])->name('admin.deallost');
    Route::any('/dealreopen',[superadmin::class,'dealreopen'])->name('admin.dealreopen');
    Route::any('/updateleads',[superadmin::class,'updateleads'])->name('admin.updateleads');
    Route::any('/updateremarks',[superadmin::class,'updateremarks'])->name('admin.updateremarks');
    Route::any('/logout',[superadmin::class,'logout'])->name('admin.logout');
    Route::any('/updatedeals',[superadmin::class,'updatedeals'])->name('admin.updatedeals');
    Route::any('/liststaff',[superadmin::class,'liststaff'])->name('admin.liststaff');
    Route::any('/my-billing',[superadmin::class,'mybillings'])->name('admin.mybillings');
    Route::any('/addstaff',[superadmin::class,'addstaff'])->name('admin.addstaff');
    Route::any('/getstaffbyid',[superadmin::class,'getstaffbyid'])->name('admin.getstaffbyid');
    Route::any('/updatestaff',[superadmin::class,'updatestaff'])->name('admin.updatestaff');
    Route::any('/settings',[superadmin::class,'settings'])->name('admin.settings');
    Route::any('/savesettings',[superadmin::class,'savesettings'])->name('admin.savesettings');
    Route::any('/followups',[superadmin::class,'followups'])->name('admin.followups');
    Route::get('/followups/{param}',[superadmin::class,'followupsget'])->where('param', '.*')->name('admin.followupsget');
    Route::any('/getprojectdata',[superadmin::class,'getprojectdata'])->name('admin.getprojectdata');
    Route::any('/closefollowupdtatus',[superadmin::class,'closefollowupdtatus'])->name('admin.closefollowupdtatus');
    // Route::any('/getheading',[superadmin::class,'getheading'])->name('admin.getheading');
    Route::post('/deleteleadbyid',[superadmin::class,'deleteleadbyid'])->name('admin.deleteleadbyid');
    Route::post('/deleteleaddata',[superadmin::class,'deleteleaddata'])->name('admin.deleteleaddata');
    Route::get('/getfolloupbydate',[superadmin::class,'getfolloupbydate'])->name('admin.getfolloupbydate');
    Route::post('/updatesession',[superadmin::class,'updatesession'])->name('admin.updatesession');
    Route::post('/addleadsource',[superadmin::class,'addleadsource'])->name('admin.addleadsource');
    Route::post('/getleadosurce',[superadmin::class,'getleadosurce'])->name('admin.getleadosurce');
    Route::post('/updateleadsourcedatadetails',[superadmin::class,'updateleadsourcedatadetails'])->name('admin.updateleadsourcedatadetails');
    Route::post('/deletesourceid',[superadmin::class,'deletesourceid'])->name('admin.deletesourceid');
    Route::post('/uploadlogo',[superadmin::class,'uploadlogo'])->name('admin.uploadlogo');
    Route::post('/updateresheduledfolloup',[superadmin::class,'updateresheduledfolloup'])->name('admin.updateresheduledfolloup');
    Route::post('/getfollowdetails',[superadmin::class,'getfollowdetails'])->name('admin.getfollowdetails');
    Route::post('/deletestaff',[followup::class,'deletestaff'])->name('admin.deletestaff');
    Route::post('/converttobooking',[followup::class,'converttobooking'])->name('admin.converttobooking');

    Route::post('/viewleadforreshedule',[followup::class,'viewleadforreshedule'])->name('admin.viewleadforreshedule');
    Route::post('/showallfollowups',[followup::class,'showallfollowups'])->name('admin.showallfollowups');
    Route::post('/reshedulefolloup',[followup::class,'reshedulefolloup'])->name('admin.reshedulefolloup');
    Route::post('/getmyprofiledetails',[followup::class,'getmyprofiledetails'])->name('admin.getmyprofiledetails');
    Route::post('/updatemyprofiledetails',[followup::class,'updatemyprofiledetails'])->name('admin.updatemyprofiledetails');
    Route::post('/getleadsourcebyid',[followup::class,'getleadsourcebyid'])->name('admin.getleadsourcebyid');
    Route::post('/updateleadsource',[followup::class,'updateleadsource'])->name('admin.updateleadsource');
    Route::post('/deleteleadsourcebyid',[followup::class,'deleteleadsourcebyid'])->name('admin.deleteleadsourcebyid');
    Route::post('/addleadstage',[followup::class,'addleadstage'])->name('admin.addleadstage');
    Route::post('/getleadstagebyid',[followup::class,'getleadstagebyid'])->name('admin.getleadstagebyid');
    Route::post('/updateleadstagebyid',[followup::class,'updateleadstagebyid'])->name('admin.updateleadstagebyid');
    Route::post('/deleteleadstagebyid',[followup::class,'deleteleadstagebyid'])->name('admin.deleteleadstagebyid');
    Route::post('/addwhatapptemplete',[followup::class,'addwhatapptemplete'])->name('admin.addwhatapptemplete');
    Route::post('/gettemplatebyid',[followup::class,'gettemplatebyid'])->name('admin.gettemplatebyid');
    Route::post('/updatetemplatebyid',[followup::class,'updatetemplatebyid'])->name('admin.updatetemplatebyid');
    Route::post('/deletetemplatebyid',[followup::class,'deletetemplatebyid'])->name('admin.deletetemplatebyid');
    Route::post('/addcoursedetails',[followup::class,'addcoursedetails'])->name('admin.addcoursedetails');
    Route::post('/getprojectdatabyid',[followup::class,'getprojectdatabyid'])->name('admin.getprojectdatabyid');
    Route::post('/updatecourse',[followup::class,'updatecourse'])->name('admin.updatecourse');
    Route::post('/deletecoursebyid',[followup::class,'deletecoursebyid'])->name('admin.deletecoursebyid');


    Route::any('/sendmesssage/{wid}/mm/{mno}',[followup::class,'sendmessage'])->name('admin.sendmessage');
    // Route::any('/sendmesssage',[followup::class,'sendmessage'])->name('admin.sendmessage');



    // working below
     Route::get('/viewleads/{id}',[superadmin::class,'viewleads'])->name('admin.viewleads');
     Route::get('/viewdeals/deals/{id}',[superadmin::class,'viewdealsdata'])->name('admin.viewdealsdata');
     Route::post('/viewdeals/deals/addpayment/{id}',[demo::class,'addpayment'])->name('admin.addpayment');
     Route::get('/viewleads/ss/{id}',[demo::class,'convertlead'])->name('admin.convertlead');
     Route::get('/viewleads/sss/{id}',[demo::class,'getpaymet'])->name('admin.getpaymet');

    //  Route::any('/getleaddata_new',[followup::class,'ffff'])->name('admin.getleaddata_new');
    //  Route::get('/viewleads/{id}/getleaddata_new',[followup::class,'ffff'])->name('admin.ffff');
     Route::get('/profile',[superadmin::class,'profile'])->name('admin.profile');
     Route::post('/viewleads/{id}',[demo::class,'recordcallnotes'])->name('admin.recordcallnotes');
    //  Route::post('/viewleads/convertdeals/{id}',[demo::class,'convertdeals'])->name('admin.convertdealssssss');
     Route::post('/getleaddatafordeal',[demo::class,'convertdeals'])->name('admin.getleaddatafordeal');
    
     Route::post('/viewleads/addemail/{id}',[email::class,'addemailnotes'])->name('admin.addemailnotes');
     Route::post('/viewleads/converttodeal/{id}',[email::class,'converttodeal'])->name('admin.converttodeal');
     Route::post('/viewleads/edit/{id}',[email::class,'editdeal'])->name('admin.editdeal');
     Route::post('/viewleads/addfollowup/{id}',[followup::class,'addfollowupnotes'])->name('admin.addfollowupnotes');
     Route::post('/viewleads/changestage/{id}',[followup::class,'changestage'])->name('admin.changestage');
     Route::post('/viewleads/reshedule/{id}',[followup::class,'reshedule'])->name('admin.reshedule');
     Route::post('/viewleads/updateleadstage/{id}',[superadmin::class,'updateleadstage'])->name('admin.updateleadstage');
     Route::post('/viewleads/createbooking/{id}',[superadmin::class,'createbooking'])->name('admin.createbooking');
     Route::post('/viewleads/closebooking/{id}',[superadmin::class,'closebooking'])->name('admin.closebooking');

     Route::post('/convertleadtodeal',[superadmin::class,'convertleadtodeal'])->name('admin.convertleadtodeal');
    //  Route::get('/getleads',[superadmin::class,'getleads'])->name('admin.getleads');
     Route::get('/getleadsdata',[superadmin::class,'getleads'])->name('admin.getleads');
});

// superadminlogincheck
Route::group(["prefix" => "/super-admin/dashboard","middleware"=> ["superadminlogincheck"]], function () {
    Route::get('/',[topadmin::class,'index'])->name('superadmin.home');
  
});



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/c', function () {
    return view('followup');
});


Route::get('/index', function () {
    return view('index');
});

// Route::get('/leads', function () {
//     return view('leads');
// });

Route::get('/addleads', function () {
    return view('addleads');
});

Route::get('/deals', function () {
    return view('deals');
});

// Route::get('/addstaff', function () {
//     return view('addstaff');
// });

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/loginss', function () {
    return view('login');
});
