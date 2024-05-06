<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leadactivity extends Model
{
    use HasFactory;


    public $table="activity";

    public $primary_key= "actid";

    public $timestamps=false;
    protected $fillable = [
            'leadid',
            'name',
            'message',
            'updated',
           
    ] ;

}
