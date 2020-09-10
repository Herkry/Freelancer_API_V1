<?php

namespace App\Http\Controllers;

use App\AppUser;
use App\Http\Resources\AppUser as ResourcesAppUser;
use App\Http\Resources\UserSkill as ResourcesUserSkill;
use App\UserSkill;
use Illuminate\Http\Request;

class UserSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userSkills = UserSkill::paginate(15);
        return ResourcesUserSkill::collection($userSkills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entries = [
            "sub_skill_id" => (int)$request->sub_skill_id,
            "appuser_id" => (int)$request->appuser_id,
            "poster_image_url" => $request->poster_image_url,
            "description" => $request->description,
            "appuser_qualification" => $request->appuser_qualification
        ];
        $userSkill = UserSkill::create($entries);
        return response()->json([
            "message" => "new User skill created",
            "appuser" => $userSkill
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cat_name, $sub_cat_id)
    {
        //appUser is the method in the model
        // error_log($sub_cat_id);
        $usersArray = [];
        $userskill = UserSkill::where("sub_skill_id", (int)$sub_cat_id)->get();
        foreach ($userskill as $key => $value) {
            if ($value->sub_skill_id == $sub_cat_id) {
                //get userid
                $user_id = $value->appuser_id;
                $user = AppUser::where("appuser_id", $user_id)->get();
                array_push($usersArray, $user[0]);
            }
        }
        return ResourcesAppUser::collection($usersArray);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
