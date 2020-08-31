<?php

namespace App\Http\Controllers;

use App\AppUser;
use Illuminate\Http\Request;

class AppUserController extends Controller
{
    //Start-- Examples for illustration

    //create(one) [POST]
    public function newItem(Request $request)
    {
        $appUser = new AppUser;
        //NOTE Must pass First name, Last name, Email, , PhoneNumber, Password
        $appUser->appuser_name = $request->appuser_name; /*or*/ /*request("appuser_name")*/ /*or*/ /*$request->input("appuser_name")*/
        $appUser->appuser_pass = $request->appuser_pass;
        $appUser->save();

        //JSON below
        return response()->json(["message" => "new AppUser created"], 201);
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

}
