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
        'enddate',
        'brief_content',

        // 'field_study',
        // 'number_awards',
        // 'target_group',
        // 'duration',
        // 'eligibility',
        // 'instructions',
        // 'link',

        'status',
        'created_at',
        'updateed_at'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;


    public static $_status = [
        self ::ACTIVE => 'Active',
        self ::DEACTIVE => 'Deactivated',
    ];
}
