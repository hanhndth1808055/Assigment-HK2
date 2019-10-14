<?php

namespace App\Http\Controllers;
use App\scholarship;
use Illuminate\Http\Request;
use DB;



class Client extends Controller
{
    public function viewScholarship(){
        $scholarships =
         DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->orderBy('id','DESC')
        ->where('status',1)
        ->paginate(10 ,["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);

        return view("client.scholarship", compact("scholarships"));
    }

    public function viewDetais($id){
        $detais = DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->where('id', $id) ->paginate(10 ,["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);
        // $latestposts = DB::table('scholarship')->orderBy("id","DESC")->paginate(3);

        $coments = DB::table('scholarship_coment')->where('id', $id)->where('active', 1)
        ->paginate(3);

        return view('client.scholarship_detais', compact("detais","coments"));
    }
    public function registerScholarship($id){
        // $register = DB::table('register_scholarship')->get();
        $scholarships = DB::table('scholarship')->where('id','=',$id)
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->get(["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);
        return view('client.scholarship_register',compact('scholarships'));
    }

    public function viewHome(){
        $scholarships = DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->paginate(3 ,["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);

        return view('pages.home',compact('scholarships'));
    }
}
