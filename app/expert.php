<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expert extends Model
{
    protected $table = 'expert';
    protected $primaryKey = 'expert_id';
    protected $fillable = [
    'expert_name',
        'expert_picture',
        'expert_expertise',
        'expert_content',
        'active'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActiveExpert =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];

}
