<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserSkill as ResourcesUserSkill;
use App\UserSkill;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\UserSkillGetterController;
use App\Http\Controllers\Controller;

class UserSkillGetterController extends Controller
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
	
	
	//---------------------------------------getter function start------------------------------------------------------
	public function getUserSkills($appUserID){
        //get skills of a specific freelancer
        $userSkills = DB::table("user_skills")->where("appuser_id", "=", $appUserID)->get()->toArray();

        for ($i=0; $i < count($userSkills); $i++) { 

            //casting to array
            $userSkills[$i] = (array) $userSkills[$i];

            //getting details of the userskills
            $sub_skill_id = $userSkills[$i]["sub_skill_id"];

            $skill_details = DB::table("skill_sub_categories")->where("id", "=", $sub_skill_id)->get()->toArray();


            $userSkills[$i]["name"] = $skill_details[0]->name;
            $userSkills[$i]["created_at"] = $skill_details[0]->created_at;
            $userSkills[$i]["updated_at"] = $skill_details[0]->updated_at;
			$userSkills[$i]["image_url"] = $skill_details[0]->image_url;
			$userSkills[$i]["skillsupercategory_id"] = $skill_details[0]->skillsupercategory_id;

            //casting back to object
            $userSkills[$i] = (object) $userSkills[$i];
        }

        $userSkills2 = array();
        $userSkills2["data"] = $userSkills;
        


        return response()->json( $userSkills2, 200 );

    }
	//---------------------------------------getter function end-------------------------------------------------
	
	
	
	
	
	
	
	
	
	
	
	
	

	//----------------------------------------------------------------------------------------------------------
	//----------------------------------------------------------------------------------------------------------

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entries = [
            "sub_skill_id" => $request->sub_skill_id,
            "appuser_id" => $request->appuser_id,
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


}
