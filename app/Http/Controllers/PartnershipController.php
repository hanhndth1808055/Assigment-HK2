<?php

namespace App\Http\Controllers;

use App\partnership;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    /* ----- Partnership -----*/

    public function showPartnership(){
        $partnerships = partnership::paginate(5);
        return view("pages.partnership",compact('partnerships'));
    }

    public function showListPartnership(){
        $partnerships = partnership::paginate(5);
        return view("admin.list.listPartnership",compact('partnerships'));
    }

    public function addPartnership(){
        return view("admin.form.formPartnership");
    }
    public function savePartnership(Request $request){
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
        ];
        $ruler = [
            "partnership_edu_logo" => "required",
            "partnership_edu_name" => "required",
            "partnership_edu_infor" => "required",
            "partnership_edu_infor_readmore" => "required",
            "partnership_edu_address" => "required|string|max:255",
            "partnership_edu_tuition" => "required",
            "partnership_edu_average_tuition" => "required",
            "partnership_edu_percentage" => "required",
            "partnership_edu_value" => "required",
            "partnership_edu_website" => "required|string|max:255",
        ];
        $this->validate($request,$ruler,$message);
        try{
            partnership::create([
                "partnership_edu_logo"=> $request->get("partnership_edu_logo"),
                "partnership_edu_name"=> $request->get("partnership_edu_name"),
                "partnership_edu_infor"=> $request->get("partnership_edu_infor"),
                "partnership_edu_infor_readmore"=> $request->get("partnership_edu_infor_readmore"),
                "partnership_edu_address"=> $request->get("partnership_edu_address"),
                "partnership_edu_tuition"=> $request->get("partnership_edu_tuition"),
                "partnership_edu_average_tuition"=> $request->get("partnership_edu_average_tuition"),
                "partnership_edu_percentage"=> $request->get("partnership_edu_percentage"),
                "partnership_edu_value"=> $request->get("partnership_edu_value"),
                "partnership_edu_website"=> $request->get("partnership_edu_website"),
            ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listPartnership");
    }

    /* Edit partnership */
    public function editPartnership(Request $request ){
        $partnership_id = $request ->get('id');
        $partnership = partnership::find($partnership_id);
        return view("admin.edit.editPartnership",compact('partnership'));
    }
    public function updatePartnership(Request $request){
        $partnership = partnership::find($request->get('partnership_id'));

        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Giá trị đã tồn tại"
        ];
        $ruler = [
            "partnership_edu_logo" => "required",
            "partnership_edu_name" => "required|unique:partnership,partnership_edu_name,".$partnership->partnership_id."partnership_id",
            "partnership_edu_infor" => "required",
            "partnership_edu_infor_readmore" => "required",
            "partnership_edu_address" => "required|string|max:255",
            "partnership_edu_tuition" => "required",
            "partnership_edu_average_tuition" => "required",
            "partnership_edu_percentage" => "required",
            "partnership_edu_value" => "required",
            "partnership_edu_website" => "required|string|max:255",
        ];
        $this->validate($request,$ruler,$message);
        try{
            $partnership-> update([
                "partnership_edu_logo"=> $request->get("partnership_edu_logo"),
                "partnership_edu_name"=> $request->get("partnership_edu_name"),
                "partnership_edu_infor"=> $request->get("partnership_edu_infor"),
                "partnership_edu_infor_readmore"=> $request->get("partnership_edu_infor_readmore"),
                "partnership_edu_address"=> $request->get("partnership_edu_address"),
                "partnership_edu_tuition"=> $request->get("partnership_edu_tuition"),
                "partnership_edu_average_tuition"=> $request->get("partnership_edu_average_tuition"),
                "partnership_edu_percentage"=> $request->get("partnership_edu_percentage"),
                "partnership_edu_value"=> $request->get("partnership_edu_value"),
                "partnership_edu_website"=> $request->get("partnership_edu_website"),
            ]);

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listPartnership");
    }
}
