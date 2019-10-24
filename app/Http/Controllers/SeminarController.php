<?php

namespace App\Http\Controllers;

use App\seminar;
use App\seminar_register;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function showSeminar(){
        $seminars = seminar::paginate(5);
        return view("pages.seminar",compact('seminars'));
    }

    public function showListSeminar(){
        $seminars = seminar::paginate(5);
        return view("admin.list.listSeminar",compact('seminars'));
    }

    public function addSeminar(){
        $seminars = seminar::orderby("seminar_id","DESC")->get();
        return view("admin.form.formSeminar",compact('seminars'));
    }
    public function saveSeminar(Request $request){
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
        ];
        $ruler = [
            "seminar_picture" => "required|string|max:255",
            "seminar_name" => "required|string|max:255",
            "seminar_time" => "required|string|max:255",
            "seminar_address" => "required|string|max:255",
            "seminar_content" => "required|string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            seminar::create([
                "seminar_picture"=> $request->get("seminar_picture"),
                "seminar_name"=> $request->get("seminar_name"),
                "seminar_time"=> $request->get("seminar_time"),
                "seminar_address"=> $request->get("seminar_address"),
                "seminar_content"=> $request->get("seminar_content"),
            ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listSeminar");
    }

    /* seminar detail */
    public function showSeminarDetail(Request $request){
        $seminar_id = $request->get('id');
        $seminar = seminar::find($seminar_id);
        $seminars = seminar::orderBy("seminar_id","ASC");
        return view("pages.seminarDetail",compact('seminar','seminars'));

    }

    /* Seminar Edit */
    public function editSeminar(Request $request){
        $seminar_id = $request->get('id');
        $seminar = seminar::find($seminar_id);
        return view("admin.edit.editSeminar",compact('seminar'));
    }

    public function updateSeminar(Request $request){

        $seminar = seminar::find($request->get('seminar_id'));

        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
            "unique" => "giá trị đã tồn tại",
        ];
        $ruler = [
            "seminar_picture" => "required|string|max:255",
            "seminar_name" => "required|string|max:255|unique:seminar,seminar_name,".$seminar->seminar_id.",seminar_id",
            "seminar_time" => "required|string|max:255",
            "seminar_address" => "required|string|max:255",
            "seminar_content" => "required|string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            $seminar->update([
                "seminar_picture"=> $request->get("seminar_picture"),
                "seminar_name"=> $request->get("seminar_name"),
                "seminar_time"=> $request->get("seminar_time"),
                "seminar_address"=> $request->get("seminar_address"),
                "seminar_content"=> $request->get("seminar_content"),
            ]);

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listSeminar");
    }

    /* Seminar Register */

    function showListSeminarRegister(){
        $registerSeminars = seminar_register::paginate(5);
        return view('admin.list.listSeminarRegister',compact('registerSeminars'));
    }
    function saveSeminarRegister(Request $request){
        $seminar = seminar::find($request->get('seminar_id'));
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
            "unique" => "giá trị đã tồn tại",
        ];
        $ruler = [
            "seminar_id" => "required|numeric",
            "name" => "string",
            "email" => "string",
            "phone" => "string",
            "address" => "string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            seminar_register::create([
                "seminar_id"=> $request->get("seminar_id"),
                "name"=> $request->get("name"),
                "email"=> $request->get("email"),
                "phone"=> $request->get("phone"),
                "address"=> $request->get("address"),
            ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("seminarDetail?id=".$seminar->seminar_id)->with('status', 'Register Successful !');
    }
}

