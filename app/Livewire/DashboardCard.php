<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\leads;
use App\Models\folloups;
class DashboardCard extends Component
{
    public $followupcount;
    #[On('update_list')]
    public function render()
    {
        if(session()->get('role')==1){
            $leadcount=leads::where('status','!=',4)->where('companyid',session()->get('cid'))->count();
            
            $dealcount=leads::where('status','=',4)->where('companyid',session()->get('cid'))->count();
            // $followupcount=folloups::select('fid')->count();
            $this->followupcount=folloups::select('fid')->where('followupstatus',0)->where('companyid',session()->get('cid'))->count();
            return view('livewire.dashboard-card',
                    compact(
                        'leadcount',
                        'dealcount',
                        
                    )
            );
        }else{
            $leadcount=leads::where('status','!=',4)->where('leadownerid',session()->get('uid'))->where('companyid',session()->get('cid'))->count();
            // $leadcount=leads::count();
            $dealcount=leads::where('status','=',4)->where('companyid',session()->get('cid'))->where('leadownerid',session()->get('uid'))->count();
            $this->followupcount=folloups::select('fid')->where('followupstatus',0)->where('companyid',session()->get('cid'))->where('teamid',session()->get('uid'))->count();
            return view('livewire.dashboard-card',
                    compact(
                        'leadcount',
                        'dealcount',
                        
                    )
            );
        }
    }
}
