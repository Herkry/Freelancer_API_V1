<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "skills";
    protected $fillable = ["skill_description"];
    protected $primaryKey = "skill_id";
    public $timestamps = false;

    //has
    //Skill has one to many rlshp with Specialization
    public function specializations(){
        return $this->hasMany(Specialization::class);
    }
}
