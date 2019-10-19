<?php

namespace App\Http\Controllers;

use App\learn_more_research;
use App\partnership;
use App\research;
use App\seminar;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MyController_2 extends Controller
{


    /* ----- SEMINAR -----*/

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
        ];
        $this->validate($request,$ruler,$message);
        try{
        seminar::create([
            "seminar_picture"=> $request->get("seminar_picture"),
            "seminar_name"=> $request->get("seminar_name"),
            "seminar_time"=> $request->get("seminar_time"),
            "seminar_address"=> $request->get("seminar_address"),
        ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listSeminar");
    }

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

    /* ----- Research -----*/

    public function showResearch(){
        $researchs = research::paginate(5);
        return view("pages.research",compact('researchs'));
    }

    public function showListResearch(){
        $researchs = research::paginate(5);
        return view("admin.list.listResearch",compact('$researchs'));
    }

    public function addResearch(){
        $researchs = research::orderby("research_project_id","DESC")->get();
        return view("admin.form.formResearch",compact('researchs'));
    }
    public function saveResearch(Request $request){
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
        ];
        $ruler = [
            "learn_more_id" => "required|numeric",
            "research_picture" => "string|max:255",
            "research_project_name" => "string|max:255",
            "challenge" => "required",
            "key_Activities"=> "required",
            "impact" => "required"
        ];
        $this->validate($request,$ruler,$message);
        try{
            research::create([
                "learn_more_id"=> $request->get("learn_more_id"),
                "research_picture"=> $request->get("research_picture"),
                "research_project_name"=> $request->get("research_project_name"),
                "challenge"=> $request->get("challenge"),
                "key_Activities"=> $request->get("key_Activities"),
                "impact"=> $request->get("impact"),
            ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listResearch");
    }



    /* ----- Learn More Research -----*/

    public function showLearnMoreResearch(){
        $learnMoreResearchs = learn_more_research::paginate(5);
        return view("pages.researchDetail",compact('learnMoreResearchs'));
    }

    public function showListLearnMoreResearch(){
        $learnMoreResearchs = learn_more_research::paginate(5);
        return view("admin.list.listLearnMoreResearch",compact('learnMoreResearchs'));
    }

    public function addLearnMoreResearch(){
        return view("admin.form.formLearnMoreResearch");
    }
    public function saveLearnMoreResearch(Request $request){
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
        ];
        $ruler = [
            "project_director" => "string",
            "duration" => "string",
            "learn_more_project_link" => "required|string",
            "funded_by" => "string",
            "partners" => "string",
            "bodies_of_work"=> "string",
            "services"=> "string",
            "regions"=> "string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            learn_more_research::create([
                "project_director"=> $request->get("project_director"),
                "learn_more_project_link"=> $request->get("learn_more_project_link"),
                "duration"=> $request->get("duration"),
                "funded_by"=> $request->get("funded_by"),
                "partners"=> $request->get("partners"),
                "bodies_of_work"=> $request->get("bodies_of_work"),
                "services"=> $request->get("services"),
                "regions"=> $request->get("regions"),
            ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listLearnMoreResearch");
    }

}
