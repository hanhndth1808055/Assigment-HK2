<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback_partnership extends Model
{
    protected  $table = "feedback_partnership";
    protected $primaryKey = "id";
    protected  $fillable = [
        "partnership_id",
        "name",
        "email",
        "partnership_review",
        "active"
    ];
}
