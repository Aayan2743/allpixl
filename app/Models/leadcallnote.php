<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leadcallnote extends Model
{
    use HasFactory;

    public $table="leadcallnotes";

    public $primary_key= "callid";

    public $timestamps=false;
    protected $fillable = [
            'leadid',
            'callstartingtime',
            'callendingtime',
            'callnotes',
            'createdby_name',
            'createdby_id',
            'created_at',
            'updated_at',
            'calltitle',
    ] ;
}
