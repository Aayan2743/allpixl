<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class whatappTemplates extends Model
{
    use HasFactory;
    public $table="whatapptemplate";

    public $primary_key= "templateid";

    public $timestamps=false;
    protected $fillable = [
        'templateid',
        'template_name',
        'template_message',
        'companyid',
        
        

    ] ;


}
