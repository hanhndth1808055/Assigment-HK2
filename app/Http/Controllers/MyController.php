<?php

namespace App\Http\Controllers;

use App\scholarship;
use App\unit;
use App\country;
use App\register_scholarship;
use App\scholarship_coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class MyController extends Controller
{
    const _LIMIT = 10;

    public function SCLList() {
        $scholars =
        DB::table('scholarship')
        ->join('unit', 'unit.unit_id', '=', 'scholarship.unit_id')
        ->join('country', 'country.country_id', '=', 'scholarship.country_id')
        ->orderBy("id","ASC")->paginate(20,["id","enddate","title","image","content","country_name as country_id",
        "unit_name as unit_id","pay","startdate","status","scholarship.created_at"]);
        return view("admin.list.scholarlist", compact("scholars") );
    }

    public function addCountry(){
        $countrys = country::orderBy("country_id","DESC")->get();
        return view("admin.form.formcountry",compact("countrys"));
    }
    public function saveCountry(Request $request){
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "max:150" => "max 150"
        ];

        $rules = [
            "country_name" => "required|string|max:150|unique:country",
            "short_name" => "required"
        ];

        $this->validate($request,$rules , $messages);
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
        return view("admin.form.formunit",compact("units","countrys"));
    }
    public function saveUnit(Request $request){
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "max:150" => "max 150"
        ];

        $rules = [
            "unit_name" => "required|string|max:150|unique:unit",
            "email" => "required"
        ];

        $this->validate($request,$rules , $messages);
        try{
            unit::create([
                "unit_name"=>$request->get("unit_name"),
                "email"=>$request->get("email"),
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
        return view('admin.form.formScholar', compact("scholars","countrys","units"));
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
            "title" => "required|string|max:150|unique:scholarship",
            "image" => "required",
            "content" => "required|string",
            "brief_content" => "required",
            // "unit" =>"required|string",
            // "country" =>"required|string",
            "pay" =>"required|numeric",
            "startdate" =>"date",
            "enddate" => "date",
            "image" => "image"
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
            "brief_content" => $request -> get('brief_content'),
            "unit_id" => $request->get("unit_id"),
            "country_id" => $request -> get("country_id"),
            "pay" => $request -> get("pay"),
            "enddate" => $request -> get('enddate'),
            "startdate"=> $request -> get("startdate"),

            // "field_study" => $request ->get("field_study"),
            // "number_awards" => $request ->get("number_awards"),
            // "target_group" => $request ->get("target_group"),
            // "duration" => $request ->get("duration"),
            // "eligibility" => $request -> get("eligibility"),
            // "instructions" => $request -> get("instructions"),
            // "link" => $request ->get("link"),


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

    function editScholarship(Request $request){
        // dd($request->all());
        $sc_id = $request -> get("id");
        $scholarships = scholarship::find($sc_id);
        $units = unit::orderBy("unit_id","ASC")->get();
        $countrys = country::orderBy("country_name","ASC")->get();
        return view("admin.edit.editscholarship",compact("scholarships","units","countrys"));
    }

    function updateScholarship(Request $request){
        $scholarships = scholarship::find($request -> get("id"));
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
            "title" => "required|string|max:255|unique:scholarship,title,".$scholarships -> id. ",id",
            "image" => "required",
            "content" => "required|string",

            // "unit" =>"required|string",
            // "country" =>"required|string",
            "pay" =>"required|numeric",
            "startdate" =>"date",
            "image" => "image"
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
            $scholarships -> update([
            "title"=>$request->get("title"),
            "content" =>$request->get("content"),
            "unit_id" => $request->get("unit_id"),
            "country_id" => $request -> get("country_id"),
            "pay" => $request -> get("pay"),
            "startdate"=> $request -> get("startdate"),
            "enddate" => $request -> get("enddate"),
            "brief_content" => $request ->get("brief_content"),

            // "field_study" => $request ->get("field_study"),
            // "number_awards" => $request ->get("number_awards"),
            // "target_group" => $request ->get("target_group"),
            // "duration" => $request ->get("duration"),
            // "eligibility" => $request -> get("eligibility"),
            // "instructions" => $request -> get("instructions"),
            // "link" => $request ->get("link"),

            "image" => $file_name,
            "status" => 1
        ]);
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        // return redirect('admin/scholars-ship');
        return redirect("admin/scholars-ship");
    }
    public function deletescholarship($id){
        $image = DB::table('scholarship')->where('id', '=', $id)->pluck('image')->first();
        if ($image == "logo.png")
        {
            DB::table('scholarship')->where('id', '=', $id)->delete();
            return redirect()->back()->with('thongbao', 'Xóa thành công');
        }
        if (file_exists('images/scholarship/' . $image)) {
            unlink('images/scholarship/' . $image);
        }
        DB::table('scholarship')->where('id', '=', $id)->delete();

        return redirect()->back()->with('thongbao', 'Xóa thành công');
    }

    public function scholarshipSaveComent(Request $request){
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",

        ];
        $rules = [
            "name" => "required",
            "email" => "required",
            "messager" => "required"
        ];

        $this->validate($request,$rules , $messages);
        try{
        scholarship_coment::create([
            "id" => $request ->get("id"),
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "messager"=>$request->get("messager"),
            "active" => 1 ,
        ])->save();
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        return redirect()->back();
    }

    public function coment(){
        $coments = DB::table('scholarship_coment')
        ->join('scholarship','scholarship.id','=','scholarship_coment.id')
        ->paginate(20,["coment_id","title as id","name","email","messager","active"]);
        // ->paginate(20);
        $totalcomment = DB::table('scholarship_coment')->count();
        return view("admin.list.coment", compact("coments","totalcomment"));
    }
    public function deletecoment($id){
        DB::table('scholarship_coment')->where('coment_id', '=', $id)->delete();
        return redirect()->back()->with('thongbao', 'Xóa thành công');
    }
    public function hideComent($id){
       $coments = DB::table('scholarship_coment')->where('coment_id','=',$id);
       $coments->update([
           "active" => 0
       ]);
       return redirect()->back()->with('thongbao', 'Xóa thành công');
    }
    public function showComent($id){
        $coments = DB::table('scholarship_coment')->where('coment_id','=',$id);
       $coments->update([
           "active" => 1
       ]);
       return redirect()->back()->with('thongbao', 'Xóa thành công');
    }

    public function hideScholarship($id){
        $scholarships = DB::table('scholarship')->where('id','=',$id);
        $scholarships->update([
            "status" => 0
        ]);
        return redirect()->back()->with('thongbao', 'Xóa thành công');
     }
     public function showScholarship($id){
         $scholarships = DB::table('scholarship')->where('id','=',$id);
        $scholarships->update([
            "status" => 1
        ]);
        return redirect()->back()->with('thongbao', 'Xóa thành công');
     }



     //register

     public function saveRegisterScholarship(Request $request){
        // dd($request->all());
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",

        ];
        $rules = [
            "name" => "required",
            "email" => "required",
            // "note" => "required",
            "phone"=>"required"
        ];
        $this->validate($request,$rules , $messages);
        try{
            register_scholarship::create([
            "id" => $request ->get("id"),
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "phone" => $request->get("phone"),
        ])->save();
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        return redirect()->back()->with("success","Register successfully!!!");
    }

    public function listRegister(){
        $registers = DB::table('register_scholarship')
        ->join('scholarship', 'scholarship.id', '=', 'register_scholarship.id')
        ->paginate(20,["title as id","name","phone","email","register_id","contact","register_scholarship.created_at"]);
        return view('admin.list.registerScholarship',compact('registers'));
    }


}
