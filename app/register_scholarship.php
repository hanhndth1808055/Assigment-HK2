<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register_scholarship extends Model
{
    protected $table = 'register_scholarship';
    protected $primarykey = 'register_id' ;
    protected $fillable = [
        "id",
        "name",
        "phone",
        "note",
        "email",
        "contact",
        "created_at",
        "updated_at"
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;


    public static $_status = [
        self ::ACTIVE => 'Contacted',
        self ::DEACTIVE => 'Not Contacted',
    ];
}
