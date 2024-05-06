<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Carbon\Carbon;
use App\Models\leads;
class Dashboardleadvsdeal extends Component
{
    public $getleadsbythisweek;
    #[On('update_list')]
    public function render()
    {

       

        if(session()->get('role')==1){
           
            // for admin
            $currentWeekStartDate = Carbon::now()->startOfWeek();
            $currentWeekEndDate = Carbon::now()->endOfWeek();
            $currentMonth = Carbon::now()->month;

            $getleadbytoday=leads::whereDate('created_at',now())->where('companyid',session()->get('cid'))->count();
            $getdealsbytoday=leads::whereDate('created_at',now())->where('status','=',4)->where('companyid',session()->get('cid'))->count();

            // $this->getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('leadownerid',session()->get('uid'))->count();
            $this->getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('companyid',session()->get('cid'))->count();

            $getdealsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('companyid',session()->get('cid'))->where('status','=',4)->count();
            $getleadsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('companyid',session()->get('cid'))->count();
            $getdealsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('status','=',4)->where('companyid',session()->get('cid'))->count();
            return view('livewire.dashboardleadvsdeal',compact('getleadbytoday','getdealsbytoday','getdealsbythisweek','getleadsbythimonth','getdealsbythimonth'));


        }elseif(session()->get('role')==0){
            
            // fro staff
            $currentWeekStartDate = Carbon::now()->startOfWeek();
            $currentWeekEndDate = Carbon::now()->endOfWeek();
            $currentMonth = Carbon::now()->month;

            $getleadbytoday=leads::whereDate('created_at',now())->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count();
            $getdealsbytoday=leads::whereDate('created_at',now())->where('status','=',4)->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count();

            // $getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','!=',4)->where('leadownerid',session()->get('uid'))->count();
            $this->getleadsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count();
            $getdealsbythisweek = leads::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])->where('status','=',4)->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count();
         
            $getleadsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count();
            $getdealsbythimonth = leads::whereMonth('created_at', $currentMonth)->where('status','=',4)->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count();
            // return view('livewire.dashboardleadvsdeal',compact('getleadbytoday','getdealsbytoday','getleadsbythisweek','getdealsbythisweek','getleadsbythimonth','getdealsbythimonth'));
            return view('livewire.dashboardleadvsdeal',compact('getleadbytoday','getdealsbytoday','getdealsbythisweek','getleadsbythimonth','getdealsbythimonth'));

        }
    



       
    }
}
