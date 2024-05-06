<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dealspayments extends Model
{
    use HasFactory;
    public $table="dealspayment";

    public $primary_key= "id";

    public $timestamps=false;
    protected $fillable = [
            'leadid',
            'fixvalue',
            'adv',
            'balance',
            'created_at',
            
           
           
    ] ;

}
