<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'thumbnail', 'full_size_thumbnail', 'name', 'campaign_chairman', 'short_description', 'long_description'
    ];

//    public function getThumbnailAttribute()
//    {
//        return $this->thumbnail;
//    }
//
//    public function getFullSizeThumbnailAttribute()
//    {
//        return $this->full_size_thumbnail;
//    }
}
