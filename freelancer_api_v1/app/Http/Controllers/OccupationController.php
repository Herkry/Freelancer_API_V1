<?php

namespace App\Http\Controllers;

use App\Occupation;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
    //Start-- Examples for illustration

    // //create(one) [POST]
    // public function newItem(Request $request){
    //     $occupation = new Occupation;
    //     $occupation->attr1 = $request->attr1; /*or*/ /*request("attr1")*/ /*or*/ /*$request->input("attr1")*/
    //     $occupation->save();

    //     //JSON below
    //     return response()->json( ["message" => "new Occupation created"], 201 );
    // }
    // //Route::post(occupations, "OccupationController@newItem")

    // //show (one) [GET]
    // public function showItem($id){
    //     //$item = Item::find($id); //option 1

    //     if(Occupation::where("occupation_id", $id)->exists()){
    //         $occupation = Occupation::where("occupation_id", $id)->get()->toJson(JSON_PRETTY_PRINT);
    //         //JSON below
    //         return response($occupation, 200);
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "Occupation not found"], 404 );
    //     }

    // }
    // //Route::get(occupations/{id}, "OccupationController@showItem")

    // //delete (one) [DELETE]
    // public function deleteItem($id){
    //     //$item = Item::find($id);//option 1
    //     //$item->delete();

    //     if(Occupation::where("occupation_id", $id)->exists()){
    //         $occupation = Occupation::find($id);
    //         $occupation->delete();
    //         //JSON below
    //         return response()->json( ["message" => "Occupations deleted"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "Occupations not found"], 401 );
    //     }
        
    // }
    // //Route::delete(occupations/{id}, OccupationController@deleteItem)

    // //update(one) [PUT]
    // public function updateItem(Request $request, $id){
    //     //$item = Item::find($id);//option 1
    //     //$item->attr1 = "12345";
    //     //$item->save();

    //     if(Occupation::where("occupation_id", $id)->exists()){
    //         $occupation = Occupation::find($id);
    //         $occupation->attr1 = is_null($request->attr1) ? $occupation->attr1 : $request->attr1;
    //         $occupation->save();
    //         //JSON below
    //         return response()->json( ["message" => "occupations updated successfully"], 200 );
    //     }
    //     else{
    //         //JSON below
    //         return response()->json( ["message" => "occupation not found"], 401 );
    //     }
        
    // }
    // //Route::put(occupations/{id}, OccupationController@updateItem)

    // //show(all) [GET]
    // public function showAllItems(){
    //     $occupations = Occupation::all(); 
    //     $occupations = Occcupation::get()->toJson(JSON_PRETTY_PRINT);

    //     //JSON below
    //     return response($occupations, 200);
    // }
    // //Route:post(occupations/, OccupationController@showAllItems)

    //End

    //Functions below

}
