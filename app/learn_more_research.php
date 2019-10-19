<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learn_more_research extends Model
{
    protected $table = "learn_more_research";
    protected $primaryKey = 'learn_more_id';
    protected  $fillable = [
        "project_director",
        "duration",
        "learn_more_project_link",
        "funded_by",
        "partners",
        "bodies_of_work",
        "services",
        "regions"
    ];
}
