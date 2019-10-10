<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scholarship extends Model
{
    protected $table = 'scholarship';
    protected $primarykey = 'id' ;
    protected $fillable = [
        'title',
        'image',
        'content',
        'unit_id',
        'country_id',
        'pay',
        'startdate',
        'status',
        'created_at',
        'updateed_at'
    ];
}
