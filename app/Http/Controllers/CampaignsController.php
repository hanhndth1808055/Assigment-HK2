<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    public function showCampaigns(){
        return view('pages.campaigns');
    }
}
