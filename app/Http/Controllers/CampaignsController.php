<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaigns;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\CampaignDonation;

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

    public function payWithStripe(Request $request)
    {

        // Program to display URL of current page.

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $link = "https";
        else
            $link = "http";

        // Here append the common URL characters.
        $link .= "://";

        // Append the host(domain name, ip) to the URL.
        $link .= $_SERVER['HTTP_HOST'];

        // Append the requested resource location to the URL
        $link .= $_SERVER['REQUEST_URI'];

        // Print the link - base - campaign id
        $campaignId = basename($link);

        try {
            // Set your secret key
            Stripe::setApiKey('sk_test_gXMn7CqFxFQ4lKpivESEoTxW00M4iP3S0v');

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => 500,
                'currency' => 'usd'
            ));

            $campaignDonation = CampaignDonation::create(array(
                'campaign_id' => $campaignId,
                'donor_email' => $request->stripeEmail,
                'customer_id' => $customer->id,
                'amount' => 5,
                'currency' => 'usd'
            ));

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

        $campaigns = Campaigns::orderBy("created_at", "DESC")->take(self::_LIMIT)->get();
        return view('pages.campaigns', compact('campaigns'));
    }
}
