<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    protected $table = "app_users";
    // protected $fillable = ["appuser_name, appuser_pass, appuser_fname, appuser_lname, appuser_email, appuser_location, appuser_type, appuser_phone, appuser_profile_img"];
    protected $guarded = [];
    protected $primaryKey = "appuser_id";
    public $timestamps = false;


    //has
    //User has one to many rlshp with Project
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    //User has one to many rlshp with UserSpecialization
    public function userSpecializations()
    {
        return $this->hasMany(UserSpecialization::class);
    }
    //User has one to many rlshp with Occupation
    public function occupations()
    {
        return $this->hasMany(Occupation::class);
    }

    //User has one to many rlshp with Invites
    // public function invites(){
    //     return $this->hasMany(Invite::class);
    // }
}
