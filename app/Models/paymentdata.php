<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentdata extends Model
{
    use HasFactory;

    public $table="paymenthistory";

    public $primary_key= "id";

    public $timestamps=false;
    protected $fillable = [
        'companyid',
        'uid',
        'amount',
        'plan',
        'regdate',
        'expdate',
        'expstatus',
       
    ];

}
