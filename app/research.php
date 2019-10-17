<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class research extends Model
{
    protected $table = 'research';
    protected $primaryKey = 'research_project_id';
    protected $fillable = [
        'expert_id',
        'research_project_name',
        'active'
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActiveResearch =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];
}
