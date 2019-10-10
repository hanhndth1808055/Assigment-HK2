<?php

namespace App\Http\Controllers;

use App\scholarship;
use App\unit;
use App\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MyController extends Controller
{
    public function SCLList() {
        $scholars = scholarship::orderBy("id","DESC")->paginate(20);
        return view("admin.scholarlist", compact("scholars") );
    }

    public function addCountry(){
        $countrys = country::orderBy("country_id","DESC")->get();
        return view("admin.formcountry",compact("countrys"));
    }
    public function saveCountry(Request $request){
        // $this-> validate($request,['name' => 'required|unique:country'],
        // ["required" => "vui lòng nhập vào thông tin","unique" => "Đã tồn tại"]);
        try{
            country::create([
                "country_name"=>$request->get("country_name"),
                "short_name" => $request -> get("short_name")
            ])->save();
            }
            catch(\Exception $e){
                die($e -> getMessage());
            }
            // return redirect('admin/scholars-ship');
            return redirect()->back()->with("success","Add country successfully");

    }


    public function addUnit(){
        $units = unit::orderBy("unit_id","DESC")->get();
        $countrys = country::orderBy("country_name","ASC")->get();
        return view("admin.formunit",compact("units","countrys"));
    }
    public function saveUnit(Request $request){
        try{
            unit::create([
                "unit_name"=>$request->get("unit_name"),
                "country_id" => $request -> get("country_id")
            ])->save();
            }
            catch(\Exception $e){
                die($e -> getMessage());
            }
            // return redirect('admin/scholars-ship');
            return redirect()->back()->with("success","Add unit successfully");

    }

    public function addScholar() {
        $scholars = scholarship::join("country","country.country_id","=","scholarship.country_id")
        ->orderBy("id","ASC")->get();
        $countrys = country::orderBy("country_name","ASC")->get();
        $units = unit::orderBy("unit_id","ASC")->get();
        return view('admin.formScholar', compact("scholars","countrys","units"));
    }

    public function saveScholar(Request $request) {
        // dd($request->all());

        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",
            "image" => "Vui lòng chọn ảnh phù hợp",
            "date" => "điền vào ngày tháng năm"
        ];

        $rules = [
            "title" => "required|string|max:255|unique:scholarship",
            "image" => "required",
            "content" => "required|string",
            // "unit" =>"required|string",
            // "country" =>"required|string",
            "pay" =>"required|numeric",
            "startdate" =>"date",
            "image" => "image|unique:scholarship"
        ];

        $this->validate($request,$rules , $messages);
        //Kiểm tra định dạng ảnh
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = Str::random(7) . "_image_" . $name;
            while (file_exists('images/scholarship/' . $image)) {
                $image = Str::random(7) . "_image_" . $name;
            }
            $file->move('images/scholarship/', $image);
            $file_name = $image;
        } else {
            $file_name = 'logo.png';
        };


        try{
        scholarship::create([
            "title"=>$request->get("title"),
            "content" =>$request->get("content"),
            "unit_id" => $request->get("unit_id"),
            "country_id" => $request -> get("country_id"),
            "pay" => $request -> get("pay"),
            "startdate"=> $request -> get("startdate"),
            "image" => $file_name,
            "status" => 1
        ])->save();
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        // return redirect('admin/scholars-ship');
        return redirect()->back()->with("success","Add Scholarship successfully");
    }
}
