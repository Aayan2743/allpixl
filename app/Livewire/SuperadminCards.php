<?php

namespace App\Livewire;

use App\Models\userlogin;
use Livewire\Component;

class SuperadminCards extends Component
{
    public function render()
    {
        $activeusers=userlogin::where('status',0)->count();
        return view('livewire.superadmin-cards',compact('activeusers'));
    }
}
