<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    protected $table = 'contactus';
    protected $fillable = [
        'name',
        'email',
        'messager',
        'active',
        'created_at',
        'update_at'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;


    public static $_status = [
        self ::ACTIVE => 'Contacted',
        self ::DEACTIVE => 'Not Contacted',
    ];
}
