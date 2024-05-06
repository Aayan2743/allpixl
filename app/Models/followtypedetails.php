<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followtypedetails extends Model
{
    use HasFactory;
    public $table="followuptype";

    public $primary_key= "fid";

    public $timestamps=false;
    protected $fillable = [
            'ftype',
            'fid',
           
    ] ;
}
