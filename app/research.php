<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class research extends Model
{
    protected $table = 'research';
    protected $primaryKey = 'research_project_id';
    protected $fillable = [
        'learn_more_id',
        'research_project_name',
        'research_picture',
        'challenge',
        'key_Activities',
        'impact',
        'active'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActiveResearch =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];
}
