<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaigns;
use PHPUnit\Exception;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\CampaignDonation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

//use UploadTrait;

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

    public function add()
    {
        return view('admin.campaigns.form');
    }

    public function save(Request $request)
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

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = $file->getClientOriginalName();
            $thumbnail = Str::random(7) . "_thumbnail_" . $name;
            while (file_exists('images/campaigns/' . $thumbnail)) {
                $thumbnail = Str::random(7) . "_thumbnail_" . $name;
            }
            $file->move('images/campaigns/', $thumbnail);
            $file_name = $thumbnail;
        } else {
            $file_name = 'logo.png';
        };

        if ($request->hasFile('full_size_thumbnail')) {
            $file = $request->file('full_size_thumbnail');
            $name = $file->getClientOriginalName();
            $full_size_thumbnail = Str::random(7) . "_full_size_thumbnail_" . $name;
            while (file_exists('images/campaigns/' . $full_size_thumbnail)) {
                $full_size_thumbnail = Str::random(7) . "_full_size_thumbnail_" . $name;
            }
            $file->move('images/campaigns/', $full_size_thumbnail);
            $file_name_full = $full_size_thumbnail;
        } else {
            $file_name_full = 'logo.png';
        };

        try {
            Campaigns::create([
                'name' => $request->get('name'),
                'campaign_chairman' => $request->get('campaign_chairman'),
                'short_description' => $request->get('short_description'),
                'long_description' => $request->get('long_description'),
                'thumbnail' => 'images/campaigns/'. $file_name,
                'full_size_thumbnail' => 'images/campaigns/'. $file_name_full
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }

        return redirect()->back()->with("success", "Add Campaign successfully");
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $campaign = Campaigns::find($id);
        return view('admin.campaigns.form_edit', compact('campaign'));
    }

    public function updated(Request $request)
    {
        $campaign = Campaigns::find($request->get("id"));

        $request->validate([
            'name' => 'required',
            'campaign_chairman' => 'required|string|max:255',
            'short_description' => 'required',
            'long_description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'full_size_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = $file->getClientOriginalName();
            $thumbnail = Str::random(7) . "_thumbnail_" . $name;
            while (file_exists('images/campaigns/' . $thumbnail)) {
                $thumbnail = Str::random(7) . "_thumbnail_" . $name;
            }
            $file->move('images/campaigns/', $thumbnail);
            $file_name = $thumbnail;
        } else {
            $file_name = 'logo.png';
        };

        if ($request->hasFile('full_size_thumbnail')) {
            $file = $request->file('full_size_thumbnail');
            $name = $file->getClientOriginalName();
            $full_size_thumbnail = Str::random(7) . "_full_size_thumbnail_" . $name;
            while (file_exists('images/campaigns/' . $full_size_thumbnail)) {
                $full_size_thumbnail = Str::random(7) . "_full_size_thumbnail_" . $name;
            }
            $file->move('images/campaigns/', $full_size_thumbnail);
            $file_name_full = $full_size_thumbnail;
        } else {
            $file_name_full = 'logo.png';
        };

        try {
            $campaign->update([
                'name' => $request->get('name'),
                'campaign_chairman' => $request->get('campaign_chairman'),
                'short_description' => $request->get('short_description'),
                'long_description' => $request->get('long_description'),
                'thumbnail' => 'images/campaigns/' . $file_name,
                'full_size_thumbnail' => 'images/campaigns/' . $file_name_full
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }

        return redirect(route('campaigns.list'));
    }

    public function delete($id)
    {
        $thumbnail = DB::table('campaigns')->where('id', '=', $id)->pluck('thumbnail')->first();
        $full_size_thumbnail = DB::table('campaigns')->where('id', '=', $id)->pluck('full_size_thumbnail')->first();

        if ($thumbnail == "logo.png" && $full_size_thumbnail == "logo.png") {
            DB::table('campaigns')->where('id', '=', $id)->delete();
            return redirect()->back()->with('thongbao', 'Xóa thành công');
        }

        if (file_exists('images/campaigns/' . $thumbnail)) {
            unlink('images/campaigns/' . $thumbnail);
        }

        if (file_exists('images/campaigns/' . $full_size_thumbnail)) {
            unlink('images/campaigns/' . $full_size_thumbnail);
        }

        DB::table('campaigns')->where('id', '=', $id)->delete();

        return redirect()->back()->with('thongbao', 'Xóa thành công');
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

        return redirect()->back();
    }


}
