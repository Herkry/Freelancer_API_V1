<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $table = "specializations";
    protected $fillable = ["specialization_description, skill_id"];
    protected $primaryKey = "specialization_id";
    public $timestamps = false;

    //has
    //Specialization has one to many rlshp with UserSpecialization
    public function userSpecializations(){
        return $this->hasMany(UserSpecialization::class);
    }

    //belongs to
    //Skill has one to many rlshp with Specialization
    public function skill(){
        return $this->belongsTo(Skill::class);
    }
    

}
