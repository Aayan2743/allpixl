<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class superadmin extends Model
{
    use HasFactory;

    public $table="superadmin";

    public $primary_key= "id";

    public $timestamps=false;
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'role',
        'id',
       
    ];

}
