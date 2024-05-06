<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class leads extends Model
{
    use HasFactory;


    public $table="lead";

    public $primary_key= "leadid";

    public $timestamps=false;
    protected $fillable = [
        'customer',
        'ogrinazation',
        'contactperson',
        
        
        'title',
        'description',
        'value',
        'currency',
        'label',
        'owner',
        'phone',
        'phonetype',
        'email',
        'emailtype',
        'addressline_1',
        'addressline_2',
        
        'addressline_3',
        'town',
        'state',
        'zipcode',
        'country',
        'created_at',
        'created_by',
        'created_by_id',
        'status',
        'expacteddate',
        'filepath',
        'content',
        'team',
        'dealstatus',
        'lead_comments',
        'dealfixdate',
        'leadsource',
        'leadownerid',
        'leadstagetext',
        'leaddata',
        'dealdata',
        'companyid',
        

    ] ;

    // public function getCreatedAtAttribute($value)
    // {
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-Y');
    // }

    public function user()
    {
        return $this->belongsTo(userlogin::class, 'leadownerid');
    }
}
