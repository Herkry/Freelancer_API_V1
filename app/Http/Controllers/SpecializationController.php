<?php

namespace App\Http\Controllers;

use App\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    //Start-- Examples for illustration

    // //create(one) [POST]
    // public function newItem(Request $request){
    //     $specialization = new Specialization;
    //     $specialization->attr1 = $request->attr1; /*or*/ /*request("attr1")*/ /*or*/ /*$request->input("attr1")*/
    //     $specialization->save();

    //     //JSON below
    //     return response()->json( ["message" => "new Specialization created"], 201 );
    // }
    // //Route::post(specializations, "SpecializationController@newItem")

    // //show (one) [GET]
    // public function showItem($id){
    //     //$item = Item::find($id); //option 1

    //     if(Specialization::where("specialization_id", $id)->exists()){
    //         $specialization = Specialization::where("specialization_id", $id)->get()->toJson(JSON_PRETTY_PRINT);
    //         //JSON below
    //         return response($specialization, 200);
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "Specialization not found"], 404 );
    //     }

    // }
    // //Route::get(specializations/{id}, "SpecializationController@showItem")

    // //delete (one) [DELETE]
    // public function deleteItem($id){
    //     //$item = Item::find($id);//option 1
    //     //$item->delete();

    //     if(Specialization::where("specialization_id", $id)->exists()){
    //         $specialization = Specialization::find($id);
    //         $specialization->delete();
    //         //JSON below
    //         return response()->json( ["message" => "Occupations deleted"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "Occupations not found"], 401 );
    //     }
        
    // }
    // //Route::delete(specializations/{id}, SpecializationController@deleteItem)

    // //update(one) [PUT]
    // public function updateItem(Request $request, $id){
    //     //$item = Item::find($id);//option 1
    //     //$item->attr1 = "12345";
    //     //$item->save();

    //     if(Specialization::where("specialization_id", $id)->exists()){
    //         $specialization = Specialization::find($id);
    //         $specialization->attr1 = is_null($request->attr1) ? $specialization->attr1 : $request->attr1;
    //         $specialization->save();
    //         //JSON below
    //         return response()->json( ["message" => "specializations updated successfully"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "specialization not found"], 401 );
    //     }
        
    // }
    // //Route::put(specializations/{id}, SpecializationController@updateItem)

    // //show(all) [GET]
    // public function showAllItems(){
    //     $specializations = Specialization::all(); 
    //     $specializations = Specialization::get()->toJson(JSON_PRETTY_PRINT);

    //     //JSON below
    //     return response($specializations, 200);
    // }
    // //Route:post(specializations/, SpecializationController@showAllItems)

    //End

    //Functions below
    
}
