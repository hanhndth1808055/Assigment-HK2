<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scholarship_coment extends Model
{
    protected $table = 'scholarship_coment';
    protected $primarykey = 'coment_id' ;
    protected $fillable = [
        'id',
        'name',
        'email',
        'messager',
        'active',
        'updated_at',
        'created_at'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;


    public static $_status = [
        self ::ACTIVE => 'Show',
        self ::DEACTIVE => 'Hide',
    ];
}
