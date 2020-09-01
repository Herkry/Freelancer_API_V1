<?php

namespace App\Http\Controllers;

use App\Project;
use App\AppUser;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    //----------------------------------------------------------------------------------------------------

    public function showProjectDetails($id){
        //get projects which belong to freelancer
        $projects = DB::table("projects")->where("appuser_freelancer_id", "=", $id)->get()->toArray();
        

        for ($i=0; $i < count($projects); $i++) { 

            //casting to array
            $projects[$i] = (array) $projects[$i];

            //getting details of the inviter
            $appuser_inviter_id = $projects[$i]["appuser_inviter_id"];

            $inviter_details = DB::table("app_users")->where("appuser_id", "=", $appuser_inviter_id)->get()->toArray();


            $projects[$i]["project_item_requestor_name"] = $inviter_details[0]->appuser_name;
            $projects[$i]["project_item_requestor_location"] = $inviter_details[0]->appuser_location;
            $projects[$i]["project_item_requestor_phone"] = $inviter_details[0]->appuser_phone;

            //casting back to object
            $projects[$i] = (object) $projects[$i];
        }

        $projects2 = array();
        $projects2["data"] = $projects;
        //$projects2 = $projects;

        return response()->json( $projects2, 200 );

    }

    //-------------------------------------------------------------------------------

    public function finishProject($id){
        if(Project::where("id", $id)->exists()){
            $project = Project::find($id);
            $project->project_status = is_null($request->project_status) ? $project->project_progress : "pending";
            $project->save();
            //JSON below
            return response()->json( ["message" => "project status updated successfully"], 200 );
            
        }
        else{
            //JSON below
            return response()->json( ["message" => "project not found"], 401 );
        }

    }

    public function updateProjectProgress($id){
        $project = Project::find($id);
        

        if(Project::where("project_id", $id)->exists()){
            $project = Project::find($id);
            $project->project_progress = is_null($request->project_progress) ? $project->project_progress : "0";
            $project->save();
            //JSON below
            return response()->json( ["message" => "project progress updated successfully"], 200 );
        }
        else{
            //JSON below
            return response()->json( ["message" => "project not found"], 401 );
        }

    }

    public function showClientProjectDetails($id){
        //get projects which belong to client
        $projects = DB::table("projects")->where("appuser_inviter_id", "=", $id)->get()->toArray();

        for ($i=0; $i < count($projects); $i++) { 

            //casting to array
            $projects[$i] = (array) $projects[$i];

            //getting details of the freelancer
            $appuser_freelancer_id = $projects[$i]["appuser_freelancer_id"];

            $freelancer_details = DB::table("app_users")->where("appuser_id", "=", $appuser_freelancer_id)->get()->toArray();


            $projects[$i]["project_item_freelancer_name"] = $freelancer_details[0]->appuser_name;
            $projects[$i]["project_item_freelancer_location"] = $freelancer_details[0]->appuser_location;
            $projects[$i]["project_item_freelancer_phone"] = $freelancer_details[0]->appuser_phone;

            //casting back to object
            $projects[$i] = (object) $projects[$i];
        }

        $projects2 = array();
        $projects2["data"] = $projects;
        $projects2 = $projects;

        return response()->json( $projects2, 200 );

    }

    public function showClientSingleProjectDetails($f_id, $c_id){
        //get projects which belong to client
        $projects = DB::table("projects")->where([
                                                    ["appuser_freelancer_id", "=", $f_id],
                                                    ["appuser_inviter_id", "=", $c_id]

                                                ])->get()->toArray();

        for ($i=0; $i < count($projects); $i++) { 

            //casting to array
            $projects[$i] = (array) $projects[$i];

            //getting details of the freelancer
            $appuser_freelancer_id = $projects[$i]["appuser_freelancer_id"];

            $freelancer_details = DB::table("app_users")->where("appuser_id", "=", $appuser_freelancer_id)->get()->toArray();


            $projects[$i]["project_item_freelancer_name"] = $freelancer_details[0]->appuser_name;
            $projects[$i]["project_item_freelancer_location"] = $freelancer_details[0]->appuser_location;
            $projects[$i]["project_item_freelancer_phone"] = $freelancer_details[0]->appuser_phone;

            //casting back to object
            $projects[$i] = (object) $projects[$i];
        }

        $projects2 = array();
        $projects2["data"] = $projects;
        $projects2 = $projects;


        return response()->json( $projects2, 200 );

    }


}
