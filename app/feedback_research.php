<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback_research extends Model
{
    protected $table = "feedback_research";
    protected $primaryKey = "id";
    protected  $fillable = [
        "research_project_id",
        "name",
        "email",
        "research_review",
        "active",
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActiveFeedbackResearch =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];
}
