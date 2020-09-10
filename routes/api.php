<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//AppUsers
// Examples for illustration
Route::post("appusers", "AppUserController@newItem");
Route::get("appusers/{id}", "AppUserController@showItem");
Route::delete("appusers/{id}", "AppUserController@deleteItem");
Route::put("appusers/{id}", "AppUserController@updateItem");
Route::get("appusers/", "AppUserController@showAllItems");

// New routes below
Route::get("appusers/login/{appUser_email}", "AppUserController@showLoginDetails");


//Occupation
// Examples for illustration
// Route::post("occupations", "OccupationController@newItem");
// Route::get("occupations/{id}", "OccupationController@showItem");
// Route::delete("occupations/{id}", "OccupationController@deleteItem");
// Route::put("occupations/{id}", "OccupationController@updateItem");
// Route::get("occupations/", "OccupationController@showAllItems");
// New Routes below


//Projects
// Examples for illustration
// Route::post("projects", "ProjectController@newItem");
// Route::get("projects/{id}", "ProjectController@showItem");
// Route::delete("projects/{id}", "ProjectController@deleteItem");
// Route::put("projects/{id}", "ProjectController@updateItem");
// Route::get("projects/", "ProjectController@showAllItems");
// New Routes below
Route::get("appusers/freelancer/{id}/projects", "ProjectController@showProjectDetails");
Route::put("projects/finish/{id}", "ProjectController@finishProject");
Route::put("projects/progress/{id}", "ProjectController@updateProjectProgress");
Route::get("appusers/client/{id}/projects", "ProjectController@showClientProjectDetails");
Route::get("appusers/client/{id}/projects", "ProjectController@showClientProjectDetails");
Route::get("appusers/freelancer/{f_id}/client/{c_id}/project", "ProjectController@showClientSingleProjectDetails");
Route::put("projects/approve/{id}", "RequestController@updateProjectProgress");
Route::post('projects', "ProjectController@store");

Route::get("appusers/freelancer/{id}/requests", "ProjectController@showRequestDetails");


//Skills
// Examples for illustration
// Route::post("skills", "SkillController@newItem");
// Route::get("skills/{id}", "SkillController@showItem");
// Route::delete("skills/{id}", "SkillController@deleteItem");
// Route::put("skills/{id}", "SkillController@updateItem");
// Route::get("skills/", "SkillController@showAllItems");
// New Routes below


//Specialization
// Examples for illustration
// Route::post("specializations", "SpecializationController@newItem");
// Route::get("specializations/{id}", "SpecializationController@showItem");
// Route::delete("specializations/{id}", "SpecializationController@deleteItem");
// Route::put("specializations/{id}", "SpecializationController@updateItem");
// Route::get("specializations/", "SpecializationController@showAllItems");
// New Routes below


//UserSpecialization
// Examples for illustration
// Route::post("userspecializations", "SpecializationController@newItem");
// Route::get("userspecializations/{id}", "AppUserUserSpecializationController@showItem");
// Route::delete("userspecializations/{id}", "AppUserUserSpecializationController@deleteItem");
// Route::put("userspecializations/{id}", "AppUserUserSpecializationController@updateItem");
// Route::get("userspecializations/", "AppUserUserSpecializationController@showAllItems");
// New Routes below
//Test
Route::get('test', function () {
    $test = array("name" => "Anthony", "age" => "12");

    return $test;
});
/**
 * Gets the general categories
 * *http://localhost:8000/api/categories
 */
Route::get('categories', 'SkillSuperCategoryController@index');
/**
 * Gets the sub-categories of a specific category
 * *http://localhost:8000/api/categories/music
 */
//ANCHOR 1.0
Route::get('categories/{category_name}', 'SkillSuperCategoryController@show');
/**
 * !This route is being deprecated
 * Gets the artist in a given sub category
 * *http://localhost:8000/api/categories/music/voiceover
 */
// Route::get('categories/{category_name}/{sub_category_name}', 'SkillSubCategoryController@showFreelancer');

Route::get('categories/{category_name}/{sub_cat_id}', 'UserSkillController@show');
/**
 * Post freelancer details into user_skills table
 */
Route::post('userskills/', 'UserSkillController@store');
Route::get('userskills/{appUserID}', 'UserSkillGetterController@getUserSkills');
