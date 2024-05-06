<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class folloups extends Model
{
    use HasFactory;

    public $table="folloupstbl";

    public $primary_key= "fid";

    public $timestamps=false;
    protected $fillable = [
            'leadid',
            'typeoffollowup',
            'nextfollowup',
            'customername',
            'phone',
            'email',
            'project',
            'companyname',
            'followupstatus',
            'followupnotes',
            'teamid',
            'teamnames',
            'companyid',
           
           
    ] ;
}
