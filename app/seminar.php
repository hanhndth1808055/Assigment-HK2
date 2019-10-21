<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    protected $table = 'seminar';
    protected $primaryKey = 'seminar_id';
    protected $fillable = [
        'seminar_picture',
        'seminar_name',
        'seminar_content',
        'seminar_time',
        'seminar_address',
        'active'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActiveSeminar =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];
}
