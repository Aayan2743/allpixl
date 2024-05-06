<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userlogin extends Model
{
    use HasFactory;

    public $table="loginusers";

    public $primary_key= "uid";

    public $timestamps=false;
    protected $fillable = [
        'email',
        'password',
        'fullname',
        'role',
        'mobile',
        'designation',
        'imagepath ',
        'status',
        'companyid',
        'companyname',
        'plantype',
        'expstatus',
        'reregistrationdate',
        

    ] ;

    public function leads()
    {
        return $this->hasMany(leads::class, 'leadownerid','uid');
    }

}
