<?php

namespace App\Http\Controllers;

use App\Project;
use App\AppUser;
use DB;
use Illuminate\Http\Request;

class AppUserController extends Controller
{
    //Start-- Examples for illustration

    //create(one) [POST]
    public function newItem(Request $request)
    {
        $appuser_fname = $request->appuser_fname; /*or*/ /*request("appuser_name")*/ /*or*/ /*$request->input("appuser_name")*/
        $appuser_lname = $request->appuser_lname;
        $appuser_pass = $request->appuser_pass;
        $appuser_email = $request->appuser_email;
        $appuser_location = $request->appuser_location;
        $appuser_type = $request->appuser_type;
        $appuser_phone = (int)$request->appuser_phone;
        $appuser_profile_img = $request->appuser_profile_img;
        $appuser_qualifications = $request->appuser_qualifications;
        $appuser_portfolio = $request->appuser_portfolio;
        $appuser_description = $request->appuser_description;
        $appuser_rating = (int)$request->appuser_rating;

        $appUser = AppUser::create(
            [
                "appuser_fname" => $appuser_fname,
                "appuser_lname" => $appuser_lname,
                "appuser_pass" => $appuser_pass,
                "appuser_email" => $appuser_email,
                "appuser_location" => $appuser_location,
                "appuser_type" => $appuser_type,
                "appuser_phone" => $appuser_phone,
                "appuser_profile_img" => $appuser_profile_img,
                "appuser_qualifications" => $appuser_qualifications,
                "appuser_portfolio" => $appuser_portfolio,
                "appuser_description" => $appuser_description,
                "appuser_rating" => $appuser_rating,
            ]
        );
        error_log($appUser);

        //JSON below
        return response()->json([
            "message" => "new AppUser created",
            "appuser" => $appUser
        ], 201);
    }
    //Route::post(appusers/, "AppUserController@newItem")

    //show (one) [GET]
    public function showItem($id)
    {
        //$item = Item::find($id); //option 1

        if (AppUser::where("appuser_id", $id)->exists()) {
            $appUser = AppUser::where("appuser_id", $id)->get()->toJson(JSON_PRETTY_PRINT);
            //JSON below
            return response($appUser, 200);
        } else {
            //JSON below
            return response()->json(["message" => "appUser not found"], 404);
        }
    }
    //Route::get(appusers/{id}, "AppUserController@showItem")

    //delete (one) [DELETE]
    public function deleteItem($id)
    {
        //$item = Item::find($id);//option 1
        //$item->delete();

        if (AppUser::where("appuser_id", $id)->exists()) {
            $appUser = AppUser::find($id);
            $appUser->delete();
            //JSON below
            return response()->json(["message" => "appUsers deleted"], 200);
        } else {
            //JSON below
            return response()->json(["message" => "appUsers not found"], 401);
        }
    }
    //Route::delete(appusers/{id}, AppUserController@deleteItem)

    //update(one) [PUT]
    public function updateItem(Request $request, $id)
    {
        //$item = Item::find($id);//option 1
        //$item->appuser_name = "12345";
        //$item->save();

        if (AppUser::where("appuser_id", $id)->exists()) {
            $appUser = AppUser::find($id);
            $appUser->appuser_name = is_null($request->appuser_name) ? $appUser->appuser_name : $request->appuser_name;
            $appUser->save();
            //JSON below
            return response()->json(["message" => "appUsers updated successfully"], 200);
        } else {
            //JSON below
            return response()->json(["message" => "appUser not found"], 401);
        }
    }
    //Route::put(appusers/{id}, AppUserController@updateItem)

    //show(all) [GET]
    public function showAllItems()
    {
        $appUsers = AppUser::all();
        $appUsers = AppUser::get()->toJson(JSON_PRETTY_PRINT);

        //JSON below
        return response($appUsers, 200);
    }
    //Route:get(appusers/, AppUserController@showAllItems)

    //End

    //Functions below

    public function showLoginDetails($appUser_email){
        //get projects which belong to freelancer
        $appUserDetails = DB::table("app_users")->where("appuser_email", $appUser_email)
                                               ->get()->toArray();
                
        $appUserDetails2 = array();
        $appUserDetails2["data"] = $appUserDetails;

        //return response()->json( ["123"], 200 );
        return response()->json( $appUserDetails2, 200 );

    }

}
