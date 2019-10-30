<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback_seminar extends Model
{
    protected $table = "feedback_seminar";
    protected $primaryKey = "id";
    protected  $fillable = [
        "seminar_id",
        "name",
        "email",
        "seminar_review",
        "active",
    ];
}
