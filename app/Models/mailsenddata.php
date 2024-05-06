<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mailsenddata extends Model
{
    use HasFactory;
    public $table="emailrecords";

    public $primary_key= "id";

    public $timestamps=false;
    protected $fillable = [
            'leadid',
            'type',
            'emailsubject',
            'mailsenddate',
            'updated_at',
         
    ] ;
}
