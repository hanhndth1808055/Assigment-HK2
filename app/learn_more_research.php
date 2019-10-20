<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learn_more_research extends Model
{
    protected $table = "learn_more_research";
    protected $primaryKey = 'learn_more_id';
    protected  $fillable = [
        "learn_more_research_name",
        "duration",
        "funded_by",
        "partners",
        "bodies_of_work",
        "services",
        "regions"
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActiveLearnMoreResearch =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];
}
