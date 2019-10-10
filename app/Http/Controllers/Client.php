<?php

namespace App\Http\Controllers;
use App\scholarship;
use Illuminate\Http\Request;
use DB;



class Client extends Controller
{
    public function viewScholarship(){
        $scholarships =

        // scholarship::join("unit","scholarship.unit_id","=","unit.unit_id")
        // ->orderBy("id","ASC")
        // ->paginate(5,["title","image","content","unit_name as unit_id","pay","startdate"
        // ,"status","scholarship.created_at"]);
         DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->paginate(10 ,["title","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","status","scholarship.created_at"]);

        return view("client.scholarship", compact("scholarships"));
    }
}
