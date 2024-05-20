<?php

use App\Models\dealspayments;
use App\Models\leads;
use App\Models\leadsourcedata;
use App\Models\leadstage;
use App\Models\projects;
use App\Models\userlogin;
use App\Models\whatappTemplates;

if(!function_exists('checkservice_status')){
    function checkservice_status(){
         $leadsource=leadsourcedata::where('companyid',session()->get('cid'))->count();
         $leadstage=leadstage::where('companyid',session()->get('cid'))->count();
         $projects=projects::where('companyid',session()->get('cid'))->count();

        if($leadsource>0 && $leadstage>0  && $projects>0){
            return true;
        }else{
            return false;
        }
        //  $whatappTemplates=whatappTemplates::where('companyid',session()->get('cid'))->count();


        //  return $leadsource;
    }
}

if(!function_exists('checkservice_deal_status')){

    function checkservice_deal_status($id){
       
        $getdealstatus=leads::where('leadid',$id)->pluck('dealstatus');
        
        return $getdealstatus[0]; 
        // dd($getdealstatus[0]);
    //    dd($id);
        // if($id==2){
        //     return true;
        // }
    }

}


if(!function_exists('checkservice_deal_payment')){

    function checkservice_deal_payment($id){
       
        $getlead_value=leads::where('leadid',$id)->pluck('value');
        
        $getreceiuvedmaount=dealspayments::where('leadid',$id)->sum('adv');
        $bal=$getlead_value[0]-$getreceiuvedmaount;

        
        return [
            'lead_value' => $getlead_value[0],
            'received_amount' => $getreceiuvedmaount,
            'bal_amount' => $bal,
        ];


        
    }

}



if(!function_exists('checkservice_user_access')){

    function checkservice_user_access($id){
       

       $access_edit=userlogin::where('uid',$id)->pluck('edit_access');
       $access_delete=userlogin::where('uid',$id)->pluck('delete_access');


        return [
            'edit_access' => $access_edit[0],
            'delete_access' => $access_delete[0],
           
        ];

    //  dd($access_delete);

        // $getlead_value=leads::where('leadid',$id)->pluck('value');
        
        // $getreceiuvedmaount=dealspayments::where('leadid',$id)->sum('adv');
        // $bal=$getlead_value[0]-$getreceiuvedmaount;

        
        // return [
        //     'lead_value' => $getlead_value[0],
        //     'received_amount' => $getreceiuvedmaount,
        //     'bal_amount' => $bal,
        // ];


        
    }

}

