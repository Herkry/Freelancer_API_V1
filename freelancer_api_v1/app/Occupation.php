<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $table = "occupations";
    protected $fillable = ["occupation_description, appuser_id"];
    protected $primaryKey = "occupation_id";
    public $timestamps = false;

    //belongs to
    //AppUser has one to many rlshp with Occupation
    public function appUser(){
        return $this->belongsTo(AppUser::class);
    }
}
