<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignDonation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'campaign_id', 'donor_email', 'customer_id', 'amount', 'currency'
    ];
}
