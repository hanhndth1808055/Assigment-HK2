<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'email',
        'active',
        'created_at',
        'updated_at'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;


    public static $_status = [
        self ::ACTIVE => 'Contacted',
        self ::DEACTIVE => 'Not Contacted',
    ];
}
