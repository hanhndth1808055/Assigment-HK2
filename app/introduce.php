<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class introduce extends Model
{
    protected $table = 'introduce';
    protected $fillable = [
        "email",
        "phone",
        "address",
        "content",
        "image",
        "show",
        "created_at",
        "update_at",
    ];
}
