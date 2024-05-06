<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plandetails extends Model
{
    use HasFactory;

    public $table="plans";

    public $primary_key= "id";

    public $timestamps=false;
    protected $fillable = [
        'id ',
        'name',
        'amount',
        'days',
       
    ];

}
