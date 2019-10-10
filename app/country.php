<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table = 'country';
    protected $primaryKey = 'country_id';
    protected $fillable = [
        'country_name',
        'short_name',
        'created_at',
        'updateed_at'
    ];
}
