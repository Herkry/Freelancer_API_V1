<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSpecialization extends Model
{
    protected $table = "user_specializations";
    protected $fillable = ["user_specialization_description, appuser_id, specialization_id"];
    protected $primaryKey = "user_specialization_id";
    public $timestamps = false;

    //belongs to
    //AppUser has one to many rlshp with UserSpecialization
    public function appUser(){
        return $this->belongsTo(AppUser::class);
    }
    //Specialization has one to many rlshp with UserSpecialization
    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
}
