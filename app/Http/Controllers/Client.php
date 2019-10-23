<?php

namespace App\Http\Controllers;
use App\scholarship;
use Illuminate\Http\Request;
use DB;



class Client extends Controller
{
    const _LIMIT = 3;
    public function viewScholarship(){
        $scholarships =
         DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->orderBy('id','DESC')
        ->where('status',1)
        ->paginate(5 ,["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);

        return view("client.scholarship", compact("scholarships"));
    }

    public function viewDetais($id){
        $detais = DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')

        ->where('id', $id) ->paginate(10 ,["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);

        $latestposts = DB::table('scholarship')->orderBy("id","DESC")
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->paginate(3,["id","title","unit_name as unit_id","image","scholarship.created_at","country_name as country_id"]);

        $coments = DB::table('scholarship_coment')
        ->where('id',$id)
        ->orderBy("created_at","DESC")->take(self::_LIMIT)->get();

        $totalcomment = DB::table('scholarship_coment')
        ->where('id',$id)
        ->count();
        // $scholarships = DB::table('scholarship')->orderBy('id','DESC')->get();

        return view('client.scholarship_detais', compact("detais","coments",'latestposts','totalcomment'));
    }
    public function registerScholarship($id){
        // $register = DB::table('register_scholarship')->get();
        $scholarships = DB::table('scholarship')->where('id','=',$id)
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->get(["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);

        // $unit = DB::table('unit')->get();

        return view('client.scholarship_register',compact('scholarships'));
    }

    public function viewHome(){
        $scholarships = DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->paginate(3 ,["id","title","enddate","image","content","country_name as country_id" ,
        "unit_name as unit_id","pay","startdate","brief_content","status","scholarship.created_at"]);

        $feedbacks = DB::table('scholarship_coment')
        ->join('scholarship','scholarship.id','=','scholarship_coment.id')
        ->where('active',1)
        ->orderBy('coment_id','DESC')
        ->paginate(6,['name','messager','title as id']);

        $campaigns = DB::table('campaigns')->orderBy('id','DESC')->paginate(4);
        $seminars = DB::table('seminar')->orderBy('seminar_id','ASC')->paginate(6);


        return view('client.home',compact('scholarships','feedbacks','campaigns','seminars'));
    }

    public function loadComentScholarship(Request $request){
        // dd($request->all());
        // "id" => $request -> get("page_id");
        $page_id = $request->has("page_id")?$request->get("page_id"):1;
        $page = $request->has("page")?$request->get("page"):1;
        $offset = ($page-1)*self::_LIMIT;
        $coments = DB::table('scholarship_coment')->orderBy("created_at","DESC")
            ->offset($offset)
            ->take(self::_LIMIT)
            ->where('id',$page_id)
            ->get();
        return view('client.load_coment',compact("coments"));
        // return response()->json($coments);
    }
    public function contactUs(){
        return view('client.contact');
    }
}
