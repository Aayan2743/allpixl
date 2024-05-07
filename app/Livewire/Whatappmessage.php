<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\whatappTemplates;
use App\Models\leads;

class Whatappmessage extends Component
{

    public $leadId;

    public $loadingTemplateId = null;

    public function ss($id){
        // dd($this->leadId);

     

        $getmobile=leads::where('leadid',$this->leadId)->pluck('phone');

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
// echo $response;

if($response === false) {
    // Handle error here
    $errorCode = curl_errno($curl);
    $errorMessage = curl_error($curl);
    // echo $errorMessage;

    $this->dispatch('alert',
                icon: "error",
                
        title:$errorMessage 
    );

    // Handle error
} else {
    // Get HTTP status code
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    //  echo $statusCode;
    // echo $response;
    if($statusCode==201){
        sleep(2);
        $this->dispatch('alert',
                icon: "success",
                
        title:'<p>Message Sent Successfully...!</p>' 
    );
    }else{

        $this->dispatch('alert',
        icon: "error",
        
title:$statusCode 
);

        // dd($statusCode);
    }
    
    // Use $statusCode as needed
}
        
   
    }

    public function mount($id){
        $this->leadId=$id;
    }
    public function render()
    {

        $getwhatapptemplates=whatappTemplates::where('companyid',session()->get('cid'))->orderBy('templateid','DESC')->get();

        return view('livewire.whatappmessage',compact('getwhatapptemplates'));
    }
}
