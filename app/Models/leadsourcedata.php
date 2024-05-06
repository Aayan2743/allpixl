<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leadsourcedata extends Model
{
    use HasFactory;

    public $table="leadsource";

    public $primary_key= "lsid ";

    public $timestamps=false;
    protected $fillable = [
            'lsid',
            'leadsource',
            'imagepath',
            'companyid',
         
    ] ;
}
