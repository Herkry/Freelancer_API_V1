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
