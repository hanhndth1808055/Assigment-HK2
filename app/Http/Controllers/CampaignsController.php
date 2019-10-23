<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaigns;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\CampaignDonation;
use UploadTrait;

class CampaignsController extends Controller
{
    const _LIMIT = 6;

    public $campaign = Campaigns::class;
    public function showCampaigns()
    {
        $campaigns = Campaigns::orderBy("created_at", "DESC")->take(self::_LIMIT)->get();
        return view('pages.campaigns', compact('campaigns'));
    }

    public function index()
    {
        $campaigns = Campaigns::orderBy("created_at", "DESC")->get();
        return view('admin.campaigns.index', compact('campaigns'));
    }

    public function addCampaign()
    {
        return view("admin.campaigns.form", compact('departments', 'positions', 'certifications', 'salary_s'));
    }
    public function updateCampaign(Request $request)
    {

        // Form validation
        $request->validate([
            'name' => 'required',
            'campaign_chairman' => 'required|string|max:255',
            'short_description' => 'required',
            'long_description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'full_size_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')) . '_' . time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $campaign->thumbnail = $filePath;
        }


        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
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
