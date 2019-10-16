<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaigns;

class CampaignsController extends Controller
{
    const _LIMIT = 6;

    public function showCampaigns()
    {
        $campaigns = Campaigns::orderBy("created_at", "DESC")->take(self::_LIMIT)->get();
        return view('pages.campaigns', compact('campaigns'));
    }

    public function showCampaignDetail($id)
    {
        $campaigns = Campaigns::orderBy("created_at", "DESC")->take(self::_LIMIT)->get();
        $campaignDetail = Campaigns::findOrFail($id);
        return view('pages.campaign-details', compact('campaigns', 'campaignDetail'));
    }

    public function loadMore(Request $request)
    {
        $page = $request->has("page") ? $request->get("page") : 1;
        $offset = ($page - 1) * self::_LIMIT;
        $all_campaigns = Campaigns::orderBy("created_at", "DESC")
            ->offset($offset)
            ->take(self::_LIMIT)
            ->get();
        return response()->json($all_campaigns);
    }

    public function loadMoreHtml(Request $request)
    {
        $page = $request->has("page") ? $request->get("page") : 1;
        $offset = ($page - 1) * self::_LIMIT;

        $all_campaigns = Campaigns::orderBy("created_at", "DESC")
            ->offset($offset)
            ->take(self::_LIMIT)
            ->get();
//        return view('users.homeloadmore', compact('all_news'));
    }
}
