<?php

namespace App\Http\Controllers;

use App\expert;
use App\feedback_research;
use App\learn_more_research;
use App\research;
use App\seminar;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /* ----- Research -----*/

    public function showResearch(){
        $researchs = research::paginate(5);
        $experts = expert::paginate(5);
        return view("pages.research",compact('researchs','experts'));
    }

    public function showListResearch(){
        $researchs = research::paginate(5);
        return view("admin.list.listResearch",compact('researchs'));
    }

    public function showTrashResearch(){
        $researchs = research::paginate(5);
        return view("admin.list.trashResearch",compact('researchs'));
    }

    public function addResearch(){
        $learnMoreResearchs = learn_more_research::orderBy("learn_more_id","ASC")->get();
        return view("admin.form.formResearch",compact('learnMoreResearchs'));
    }
    public function saveResearch(Request $request){
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
        ];
        $ruler = [
            "learn_more_id" => "required|numeric",
            "research_picture" => "string",
            "research_project_name" => "string",
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
        return redirect("research");
    }



    /* ----- Edit Research -----*/

    public function editResearch(Request $request){
        $research_id = $request->get('id');
        $research = research::find($research_id);
        $learnMoreResearch = learn_more_research::orderBy("learn_more_id","ASC")->get();
        return view("admin.edit.editResearch",compact('research',"learnMoreResearch"));
    }

    public function updateResearch(Request $request){
        $research = research::find($request->get("research_project_id"));
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Giá trị đã tồn tại"
        ];
        $ruler = [
            "learn_more_id" => "required|numeric",
            "research_picture" => "string",
            "research_project_name" => "string|unique:research,research_project_name,".$research->research_project_id.",research_project_id",
            "challenge" => "required",
            "key_Activities"=> "required",
            "impact" => "required"
        ];
        $this->validate($request,$ruler,$message);
        try{
            $research -> update([
                "learn_more_id"=> $request->get("learn_more_id"),
                "research_picture"=> $request->get("research_picture"),
                "research_project_name"=> $request->get("research_project_name"),
                "challenge"=> $request->get("challenge"),
                "key_Activities"=> $request->get("key_Activities"),
                "impact"=> $request->get("impact"),
            ]);

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
            "learn_more_research_name" => "string",
            "duration" => "string",
            "funded_by" => "string",
            "partners" => "string",
            "bodies_of_work"=> "string",
            "services"=> "string",
            "regions"=> "string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            learn_more_research::create([
                "learn_more_research_name"=> $request->get("learn_more_research_name"),
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

    public function editLearnMoreResearch(Request $request){
        $learn_more_id = $request->get('id');
        $learnMoreResearch = learn_more_research::find($learn_more_id);
        return view("admin.edit.editLearnMoreResearch",compact('learnMoreResearch'));
    }
    public function updateLearnMoreResearch(Request $request){
        $learnMoreResearch = learn_more_research::find($request->get('learn_more_id'));
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Giá trị đã tồn tại"
        ];
        $ruler = [
            "learn_more_research_name" => "string|unique:learn_more_research,learn_more_research_name,".$learnMoreResearch->learn_more_id.",learn_more_id",
            "duration" => "string",
            "funded_by" => "string",
            "partners" => "string",
            "bodies_of_work"=> "string",
            "services"=> "string",
            "regions"=> "string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            $learnMoreResearch->update([
                "learn_more_research_name"=> $request->get("learn_more_research_name"),
                "duration"=> $request->get("duration"),
                "funded_by"=> $request->get("funded_by"),
                "partners"=> $request->get("partners"),
                "bodies_of_work"=> $request->get("bodies_of_work"),
                "services"=> $request->get("services"),
                "regions"=> $request->get("regions"),
            ]);

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listLearnMoreResearch");
    }

    /* ----- Research Detail -----*/


    public function showResearchDetail(Request $request){
    $research_id = $request->get('id');
    $research = research::find($research_id);
    $learnMoreResearch = learn_more_research::orderBy("learn_more_id","ASC")->get();
    return view("pages.researchDetail",compact('research',"learnMoreResearch"));
    }





    /* ----- Expert -----*/


    public function showListExpert(){
        $experts = expert::paginate(5);
        return view("admin.list.listExpert",compact('experts'));
    }

    public function addExpert(){
        return view("admin.form.formExpert");
    }
    public function saveExpert(Request $request){
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
        ];
        $ruler = [
            "expert_name" => "string",
            "expert_picture" => "string",
            "expert_expertise" => "string",
            "expert_content" => "string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            expert::create([
                "expert_name"=> $request->get("expert_name"),
                "expert_picture"=> $request->get("expert_picture"),
                "expert_expertise"=> $request->get("expert_expertise"),
                "expert_content"=> $request->get("expert_content"),
            ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listExpert");
    }

    public function editExpert(Request $request){
        $expert_id = $request->get('id');
        $expert = expert::find($expert_id);
        return view("admin.edit.editExpert",compact('expert'));
    }
    public function updateExpert(Request $request){
        $expert = expert::find($request->get('expert_id'));
        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
            "unique" => "giá trị đã tồn tại"
        ];
        $ruler = [
            "expert_name" => "string|unique:expert,expert_name,".$expert->expert_id.",expert_id",
            "expert_picture" => "string",
            "expert_expertise" => "string",
            "expert_content" => "string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            $expert -> update([
                "expert_name"=> $request->get("expert_name"),
                "expert_picture"=> $request->get("expert_picture"),
                "expert_expertise"=> $request->get("expert_expertise"),
                "expert_content"=> $request->get("expert_content"),
            ]);

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("admin/listExpert");
    }

    /* Delete */

    /* Research */
    public function deleteResearch($id){
        $research = research::find($id);
        try{
            $research->active = research::DEACTIVE;
            $research->save();
        }catch (\Exception $e){
            return redirect("admin/listResearch")->with("error","Delete Error");
        }
        return redirect("admin/listResearch")->with("success","Delete Successfully");
    }

    public function recoverResearch($id){
        $research = research::find($id);
        try{
            $research->active = research::ACTIVE;
            $research->save();
        }catch (\Exception $e){
            return redirect("admin/trashResearch")->with("error","Recover Error");
        }
        return redirect("admin/trashResearch")->with("success","Recover Successfully");
    }

    /* Expert */
    public function deleteExpert($id){
        $expert = expert::find($id);
        try{
            $expert->active = expert::DEACTIVE;
            $expert->save();
        }catch (\Exception $e){
            return redirect("admin/listExpert")->with("error","Delete Error");
        }
        return redirect("admin/listExpert")->with("success","Delete Successfully");
    }

    /* learn more research */
    public function deleteLearnMoreResearch($id){
        $learnMoreResearch = learn_more_research::find($id);
        try{
            $learnMoreResearch->active = learn_more_research::DEACTIVE;
            $learnMoreResearch->save();
        }catch (\Exception $e){
            return redirect("admin/listLearnMoreResearch")->with("error","Delete Error");
        }
        return redirect("admin/listLearnMoreResearch")->with("success","Delete Successfully");
    }


    function showListFeedbackResearch (){
        $feedbackResearchs = feedback_research::paginate(10);
        return view("admin.list.listFeedbackResearch",compact('feedbackResearchs'));
    }

    function saveFeedbackResearch(Request $request){
        $research = research::find($request->get('research_project_id'));

        $message = [
            "required" => "Không được để trống",
            "string" => "Vui lòng nhập một chuỗi",
            "max" => "Tối đa 255 ký tự",
            "unique" => "giá trị đã tồn tại",
        ];
        $ruler = [
            "research_project_id" => "required|numeric",
            "name" => "string",
            "email" => "string",
            "research_review" => "string",
        ];
        $this->validate($request,$ruler,$message);
        try{
            feedback_research::create([
                "research_project_id"=> $request->get("research_project_id"),
                "name"=> $request->get("name"),
                "email"=> $request->get("email"),
                "research_review"=> $request->get("research_review"),
            ])->save();

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("researchDetail?id=".$research->research_project_id)->with('submit_success_feedback', 'Submit Feedback  Successful !');
    }
}
