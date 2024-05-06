<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leadlabel extends Model
{
    use HasFactory;

    public $table="leadlabel";

    public $primary_key= "id";

    public $timestamps=false;
    protected $fillable = [
            'id',
            'labelname',
          
    ] ;
}
