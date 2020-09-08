<?php

namespace App\Http\Controllers;

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
    public function show($category_name)
    {
        //

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
