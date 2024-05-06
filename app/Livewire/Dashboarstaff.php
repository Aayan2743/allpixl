<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\userlogin;

class Dashboarstaff extends Component
{

    // alert
    #[On('update_list')]
    public function render()
    {
        $staffStatistics=[];
        $staffStatistics1=[];
        $staffStatistics2=[];
 $staffStatistics_count=userlogin::where('companyid',session()->get('cid'))->count();

 if($staffStatistics_count<=4){

    $staffStatistics= userlogin::withCount([
        'leads as deals_count' => function ($query) {
            $query->where('status', 4)
            ->where('companyid',session()->get('cid'));
        },
        'leads as leads_count' => function ($query) {
            $query->where('status', '!=', 4)
            ->where('companyid',session()->get('cid'));
        }
    ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
    ->orderByDesc('deals_count')
    ->orderByDesc('leads_count')
    ->where('companyid',session()->get('cid'))
    ->limit(4)
    ->get();

  }else if($staffStatistics_count>4 && $staffStatistics_count<=8 ){

    $staffStatistics= userlogin::withCount([
        'leads as deals_count' => function ($query) {
            $query->where('status', 4)
            ->where('companyid',session()->get('cid'));
            
        },
        'leads as leads_count' => function ($query) {
            $query->where('status', '!=', 4)
            ->where('companyid',session()->get('cid'));
            
        }
    ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
    ->orderByDesc('deals_count')
    ->orderByDesc('leads_count')
    ->limit(4)
    ->where('companyid',session()->get('cid'))
    ->get();




    $staffStatistics1= userlogin::withCount([
        'leads as deals_count' => function ($query) {
            $query->where('status', 4)
            ->where('companyid',session()->get('cid')) ;
        },
        'leads as leads_count' => function ($query) {
            $query->where('status', '!=', 4)
            ->where('companyid',session()->get('cid'));
        }
    ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
    ->orderByDesc('deals_count')
    ->orderByDesc('leads_count')
    ->where('companyid',session()->get('cid'))
   
    ->offset(4)
    ->limit(4)
    ->get();

  }else if($staffStatistics_count>8 ){
// && $staffStatistics_count<=13
    $staffStatistics= userlogin::withCount([
        'leads as deals_count' => function ($query) {
            $query->where('status', 4)
            ->where('companyid',session()->get('cid'));
        },
        'leads as leads_count' => function ($query) {
            $query->where('status', '!=', 4)
            ->where('companyid',session()->get('cid'));
        }
    ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
    ->orderByDesc('deals_count')
    ->orderByDesc('leads_count')
    ->where('companyid',session()->get('cid'))
    ->limit(4)
    ->get();




    $staffStatistics1= userlogin::withCount([
        'leads as deals_count' => function ($query) {
            $query->where('status', 4)
            ->where('companyid',session()->get('cid'));
        },
        'leads as leads_count' => function ($query) {
            $query->where('status', '!=', 4)
            ->where('companyid',session()->get('cid'));
        }
    ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
    ->orderByDesc('deals_count')
    ->orderByDesc('leads_count')
    ->where('companyid',session()->get('cid'))
    ->offset(4)
    ->limit(4)
    ->get();


    $staffStatistics2= userlogin::withCount([
        'leads as deals_count' => function ($query) {
            $query->where('status', 4)
            ->where('companyid',session()->get('cid'));
        },
        'leads as leads_count' => function ($query) {
            $query->where('status', '!=', 4)
            ->where('companyid',session()->get('cid'));
        }
    ])->selectRaw('loginusers.*, LEFT(fullname, 1) as fs')
    ->orderByDesc('deals_count')
    ->orderByDesc('leads_count')
    ->where('companyid',session()->get('cid'))
    ->offset(8)
    ->limit(4)
    ->get();

  //   dd($staffStatistics2);


  }



        return view('livewire.dashboarstaff',compact('staffStatistics','staffStatistics1','staffStatistics2'));
    }
}
