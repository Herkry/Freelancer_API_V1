<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //Start-- Examples for illustration

    // //create(one) [POST]
    // public function newItem(Request $request){
    //     $skill = new Skill;
    //     $skill->attr1 = $request->attr1; /*or*/ /*request("attr1")*/ /*or*/ /*$request->input("attr1")*/
    //     $skill->save();

    //     //JSON below
    //     return response()->json( ["message" => "new Skill created"], 201 );
    // }
    // //Route::post(skills/, "SkillController@newItem")

    // //show (one) [GET]
    // public function showItem($id){
    //     //$item = Item::find($id); //option 1

    //     if(Skill::where("skill_id", $id)->exists()){
    //         $skill = Skill::where("skill_id", $id)->get()->toJson(JSON_PRETTY_PRINT);
    //         //JSON below
    //         return response($skill, 200);
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "skill not found"], 404 );
    //     }

    // }
    // //Route::get(skills/{id}, "SkillController@showItem")

    // //delete (one) [DELETE]
    // public function deleteItem($id){
    //     //$item = Item::find($id);//option 1
    //     //$item->delete();

    //     if(Skill::where("skill_id", $id)->exists()){
    //         $skill = Skill::find($id);
    //         $skill->delete();
    //         //JSON below
    //         return response()->json( ["message" => "Skills deleted"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "Skill not found"], 401 );
    //     }
        
    // }
    // //Route::delete(skills/{id}, SkillController@deleteItem)

    // //update(one) [PUT]
    // public function updateItem(Request $request, $id){
    //     //$item = Item::find($id);//option 1
    //     //$item->attr1 = "12345";
    //     //$item->save();

    //     if(Skill::where("skill_id", $id)->exists()){
    //         $skill = Skill::find($id);
    //         $skill->attr1 = is_null($request->attr1) ? $skill->attr1 : $request->attr1;
    //         $skill->save();
    //         //JSON below
    //         return response()->json( ["message" => "Skills updated successfully"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "skill not found"], 401 );
    //     }
        
    // }
    // //Route::put(skills/{id}, SkillController@updateItem)

    // //show(all) [GET]
    // public function showAllItems(){
    //     $skills = Skill::all(); 
    //     $skills = Skill::get()->toJson(JSON_PRETTY_PRINT);

    //     //JSON below
    //     return response($skills, 200);
    // }
    // //Route:post(skills/, SkillController@showAllItems)

    //End

    //Functions below

}
