<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = "projects";
    protected $fillable = ["project_status, project_review, project_description, project_price, project_delivery_time, appuser_inviter_id, appuser_freelancer_id"];
    protected $primaryKey = "project_id";
    protected $guarded = [];
    public $timestamps = false;

    //belongs to
    //AppUser has one to many rlshp with Project
    public function appUser()
    {
        return $this->belongsTo(AppUser::class);
    }
}
