<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    //
    protected $guarded = [];

    public function appUser()
    {
        return $this->belongsToMany(AppUser::class, 'appuser_id');
    }
}
