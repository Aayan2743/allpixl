<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indiancitis extends Model
{
    use HasFactory;

    public $table="cities";

    public $primary_key= "city_id";

    public $timestamps=false;
    protected $fillable = [
        'city_id ',
        'city_name',
        'city_state',
    ];
}
