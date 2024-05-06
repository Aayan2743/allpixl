<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leadstage extends Model
{
    use HasFactory;
    public $table="leadstages";

    public $primary_key= "stageid";

    public $timestamps=false;
    protected $fillable = [
            'stageid',
            'stagename',
            'stageimage',
            'companyid',
         
    ] ;
}
