<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar_register extends Model
{
    protected $table = 'seminar_register';
    protected $primaryKey = 'seminar_register_id';
    protected $fillable = [
            'seminar_id',
            'name',
            'email',
            'phone',
            'address',
            'active',
            'created_at',
            'updated_at'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActiveSeminarRegister =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];
}
