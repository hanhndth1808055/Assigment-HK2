<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partnership extends Model
{
    protected $table = 'partnership';
    protected $primaryKey = 'partnership_id';
    protected $fillable = [
        "partnership_edu_logo",
        "partnership_edu_name",
        "partnership_edu_infor",
        "partnership_edu_infor_readmore",
        "partnership_edu_address",
        "partnership_edu_tuition",
        "partnership_edu_average_tuition",
        "partnership_edu_percentage",
        "partnership_edu_value",
        "partnership_edu_website",
        "active",
    ];
    public const ACTIVE = 1;
    public const DEACTIVE = 0;
    public static $_statusActivePartnership =[
        self::ACTIVE => "Active",
        self::DEACTIVE => "De-Active",
    ];
}
