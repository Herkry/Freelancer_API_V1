<?php

namespace App\Http\Controllers;

use App\Project;
use App\AppUser;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //Start-- Examples for illustration
    // $projectArray = [
    //     "project_status" => $request->project_status,
    //     "project_review" => $request->project_review,
    //     "project_description" => $request->project_description,
    //     "project_price" => $request->project_price,
    //     "project_delivery_time" => $request->project_delivery_time,
    //     "appuser_inviter_id" => $request->appuser_inviter_id,
    //     "appuser_freelancer_id" => $request->appuser_freelancer_id
    // ];

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Route::post('projects', "ProjectController@store");
     */
    public function store(Request $request)
    {
        $projectArray = [
            "project_status" => $request->project_status,
            "project_description" => $request->project_description,
            "appuser_inviter_id" => (int)$request->appuser_inviter_id,
            "appuser_freelancer_id" => (int) $request->appuser_freelancer_id
        ];
        // $project = Project::create($projectArray);
        $project = new Project();
        $project->project_status = $request->project_status;
        $project->project_description = $request->project_description;
        $project->appuser_inviter_id = (int)$request->appuser_inviter_id;
        $project->appuser_freelancer_id = (int)$request->appuser_freelancer_id;
        $status = $project->save();
        if ($status) {
            return response()->json([
                "message" => "new Project created",
                "project" => $project
            ], 201);
        }

        return response()->json([
            "message" => "Fail",
        ], 201);
    }

    // public function newItem(Request $request)
    // {
    //     $project = new Project;
    //     $project->attr1 = /*request("attr1")*/ /*or*/ /*$request->input("attr1")*/ /*or*/ $request->attr1;
    //     $project->save();

    //     //JSON below
    //     return response()->json(["message" => "new project created"], 201);
    // }
    //Route::post(projects/, "ProjectController@newItem")

    // //show (one) [GET]
    // public function showItem($id){
    //     //$project = Project::find($id); //option 1

    //     if(Project::where("id", $id)->exists()){
    //         $project = Project::where("id", $id)->get()->toJson(JSON_PRETTY_PRINT);
    //         //JSON below
    //         return response($project, 200);
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "project not found"], 404 );
    //     }

    // }
    // //Route::get(projects/{id}, "ProjectController@showItem")

    // //delete (one) [DELETE]
    // public function deleteItem($id){
    //     //$project = Project::find($id);//option 1
    //     //$project->delete();

    //     if(Project::where("project_id", $id)->exists()){
    //         $project = Project::find($id);
    //         $project->delete();
    //         //JSON below
    //         return response()->json( ["message" => "projects deleted"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "project not found"], 401 );
    //     }

    // }
    // //Route::delete(projects/{id}, ProjectController@deleteItem)

    // //update(one) [PUT]
    // public function updateItem(Request $request, $id){
    //     //$project = Project::find($id);//option 1
    //     //$project->attr1 = "12345";
    //     //$project->save();

    //     if(Project::where("project_id", $id)->exists()){
    //         $project = Project::find($id);
    //         $project->attr1 = is_null($request->name) ? $project->attr1 : $request->attr1;
    //         $project->save();
    //         //JSON below
    //         return response()->json( ["message" => "projects updated successfully"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "project not found"], 401 );
    //     }

    // }
    // //Route::put(projects/{id}, ProjectController@updateItem)

    // //show(all) [GET]
    // public function showAllprojects(){
    //     $projects = Project::all(); //option 1
    //     $projects = Project::get()->toJson(JSON_PRETTY_PRINT);

    //     //JSON below
    //     return response($projects, 200);
    // }
    // //Route:post(projects/, ProjectController@showAllprojects)

    //End

    //Functions below
    //show many [GET]
    public function showProjectDetails($id)
    {
        //get projects which belong to freelancer
        $projects = DB::table("projects")->where([
            ["appuser_freelancer_id", "=", $id],
            ["project_status", "!=", "pendingFreelancerApproval"]
        ])
            ->orderBy("project_status", "desc")
            ->get()->toArray();


        for ($i = 0; $i < count($projects); $i++) {

            //casting to array
            $projects[$i] = (array) $projects[$i];

            //getting details of the inviter
            $appuser_inviter_id = $projects[$i]["appuser_inviter_id"];

            $inviter_details = DB::table("app_users")->where("appuser_id", "=", $appuser_inviter_id)->get()->toArray();


            $projects[$i]["project_item_requestor_name"] = $inviter_details[0]->appuser_lname;
            $projects[$i]["project_item_requestor_location"] = $inviter_details[0]->appuser_location;
            $projects[$i]["project_item_requestor_phone"] = $inviter_details[0]->appuser_phone;

            //casting back to object
            $projects[$i] = (object) $projects[$i];
        }

        $projects2 = array();
        $projects2["data"] = $projects;
        //$projects2 = $projects;

        //return response()->json( ["123"], 200 );
        return response()->json($projects2, 200);
    }

    public function finishProject(Request $request, $id)
    {
        if (Project::where("project_id", $id)->exists()) {
            $project = Project::find($id);
            //$project->project_status = is_null($request->project_status) ? $project->project_status : "pending2";
            $project->project_status = $request->project_status;
            $project->save();
            //JSON below
            return response()->json(["message" => "project status updated successfully"], 200);
        } else {
            //JSON below
            return response()->json(["message" => "project not found"], 401);
        }
    }

    public function updateProjectProgress(Request $request, $id)
    {
        $project = Project::find($id);


        if (Project::where("project_id", $id)->exists()) {
            $project = Project::find($id);
            //$project->project_progress = is_null($request->project_progress) ? $project->project_progress : "0";
            $project->project_progress = $request->project_progress;
            $project->save();
            //JSON below
            return response()->json(["message" => "project progress updated successfully"], 200);
        } else {
            //JSON below
            return response()->json(["message" => "project not found"], 401);
        }
    }

    public function showClientProjectDetails($id)
    {
        //get projects which belong to client
        $projects = DB::table("projects")->where([
            ["appuser_inviter_id", "=", $id],
            ["project_status", "!=", "pendingFreelancerApproval"]
        ])
            ->orderBy("project_status", "desc")
            ->get()->toArray();

        for ($i = 0; $i < count($projects); $i++) {

            //casting to array
            $projects[$i] = (array) $projects[$i];

            //getting details of the freelancer
            $appuser_freelancer_id = $projects[$i]["appuser_freelancer_id"];

            $freelancer_details = DB::table("app_users")->where("appuser_id", "=", $appuser_freelancer_id)->get()->toArray();


            $projects[$i]["project_item_freelancer_name"] = $freelancer_details[0]->appuser_lname;
            $projects[$i]["project_item_freelancer_location"] = $freelancer_details[0]->appuser_location;
            $projects[$i]["project_item_freelancer_phone"] = $freelancer_details[0]->appuser_phone;

            //casting back to object
            $projects[$i] = (object) $projects[$i];
        }

        $projects2 = array();
        $projects2["data"] = $projects;
        //$projects2 = $projects;

        return response()->json($projects2, 200);
    }

    public function showClientSingleProjectDetails($f_id, $c_id)
    {
        //get projects which belong to client
        $projects = DB::table("projects")->where([
            ["appuser_freelancer_id", "=", $f_id],
            ["appuser_inviter_id", "=", $c_id]

        ])->get()->toArray();

        for ($i = 0; $i < count($projects); $i++) {

            //casting to array
            $projects[$i] = (array) $projects[$i];

            //getting details of the freelancer
            $appuser_freelancer_id = $projects[$i]["appuser_freelancer_id"];

            $freelancer_details = DB::table("app_users")->where("appuser_id", "=", $appuser_freelancer_id)->get()->toArray();


            $projects[$i]["project_item_freelancer_name"] = $freelancer_details[0]->appuser_lname;
            $projects[$i]["project_item_freelancer_location"] = $freelancer_details[0]->appuser_location;
            $projects[$i]["project_item_freelancer_phone"] = $freelancer_details[0]->appuser_phone;

            //casting back to object
            $projects[$i] = (object) $projects[$i];
        }

        $projects2 = array();
        $projects2["data"] = $projects;
        //$projects2 = $projects;


        return response()->json($projects2, 200);
    }


    public function showRequestDetails($id){
        //get projects which belong to freelancer
        $projects = DB::table("projects")->where([["appuser_freelancer_id", "=", $id],
                                                 ["project_status", "=", "pendingFreelancerApproval" ]])
                                         ->orderBy("project_status", "desc")   
                                         ->get()->toArray();
        

        for ($i=0; $i < count($projects); $i++) { 

            //casting to array
            $projects[$i] = (array) $projects[$i];

            //getting details of the inviter
            $appuser_inviter_id = $projects[$i]["appuser_inviter_id"];

            $inviter_details = DB::table("app_users")->where("appuser_id", "=", $appuser_inviter_id)->get()->toArray();


            $projects[$i]["project_item_requestor_name"] = $inviter_details[0]->appuser_lname;
            $projects[$i]["project_item_requestor_location"] = $inviter_details[0]->appuser_location;
            $projects[$i]["project_item_requestor_phone"] = $inviter_details[0]->appuser_phone;

            //casting back to object
            $projects[$i] = (object) $projects[$i];
        }

        $projects2 = array();
        $projects2["data"] = $projects;
        //$projects2 = $projects;

        //return response()->json( ["123"], 200 );
        return response()->json( $projects2, 200 );

    }

}
