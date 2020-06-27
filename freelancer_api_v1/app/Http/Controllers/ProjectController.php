<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //Start-- Examples for illustration

    // //create(one) [POST]
    // public function newItem(Request $request){
    //     $project = new Project;
    //     $project->attr1 = /*request("attr1")*/ /*or*/ /*$request->input("attr1")*/ /*or*/ $request->attr1;
    //     $project->save();

    //     //JSON below
    //     return response()->json( ["message" => "new project created"], 201 );
    // }
    // //Route::post(projects/, "ProjectController@newItem")

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
}
