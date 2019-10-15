<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table = 'unit';
    protected $primaryKey = 'unit_id';
    protected $fillable = [
        'unit_name',
        'country_id',
        'email',
        'created_at',
        'updateed_at'
    ];
}
