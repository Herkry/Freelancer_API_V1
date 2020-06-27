<?php

namespace App\Http\Controllers;

use App\UserSpecialization;
use Illuminate\Http\Request;

class UserSpecializationController extends Controller
{
    //Start-- Examples for illustration

    // //create(one) [POST]
    // public function newItem(Request $request){
    //     $userSpecialization = new UserSpecialization;
    //     $userSpecialization->attr1 = $request->attr1; /*or*/ /*request("attr1")*/ /*or*/ /*$request->input("attr1")*/
    //     $userSpecialization->save();

    //     //JSON below
    //     return response()->json( ["message" => "new UserSpecialization created"], 201 );
    // }
    // //Route::post(specializations, "UserSpecializationController@newItem")

    // //show (one) [GET]
    // public function showItem($id){
    //     //$item = Item::find($id); //option 1

    //     if(UserSpecialization::where("user_specialization_id", $id)->exists()){
    //         $userSpecialization = UserSpecialization::where("user_specialization_id", $id)->get()->toJson(JSON_PRETTY_PRINT);
    //         //JSON below
    //         return response($userSpecialization, 200);
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "UserSpecialization not found"], 404 );
    //     }

    // }
    // //Route::get(specializations/{id}, "UserSpecializationController@showItem")

    // //delete (one) [DELETE]
    // public function deleteItem($id){
    //     //$item = Item::find($id);//option 1
    //     //$item->delete();

    //     if(UserSpecialization::where("user_specialization_id", $id)->exists()){
    //         $userSpecialization = UserSpecialization::find($id);
    //         $userSpecialization->delete();
    //         //JSON below
    //         return response()->json( ["message" => "Occupations deleted"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "Occupations not found"], 401 );
    //     }
        
    // }
    // //Route::delete(specializations/{id}, UserSpecializationController@deleteItem)

    // //update(one) [PUT]
    // public function updateItem(Request $request, $id){
    //     //$item = Item::find($id);//option 1
    //     //$item->attr1 = "12345";
    //     //$item->save();

    //     if(UserSpecialization::where("user_specialization_id", $id)->exists()){
    //         $userSpecialization = UserSpecialization::find($id);
    //         $userSpecialization->attr1 = is_null($request->attr1) ? $userSpecialization->attr1 : $request->attr1;
    //         $userSpecialization->save();
    //         //JSON below
    //         return response()->json( ["message" => "specializations updated successfully"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "userSpecialization not found"], 401 );
    //     }
        
    // }
    // //Route::put(specializations/{id}, UserSpecializationController@updateItem)

    // //show(all) [GET]
    // public function showAllItems(){
    //     $specializations = UserSpecialization::all(); 
    //     $specializations = UserSpecialization::get()->toJson(JSON_PRETTY_PRINT);

    //     //JSON below
    //     return response($specializations, 200);
    // }
    // //Route:post(specializations/, UserSpecializationController@showAllItems)

    //End

    //Functions below
    
}
