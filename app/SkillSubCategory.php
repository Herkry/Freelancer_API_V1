<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSubCategory extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function skillsupercategory()
    {
        return $this->belongsTo('App\SkillSuperCategory', 'skillsupercategory_id');
    }
    public function appUser()
    {
        return $this->hasMany(AppUser::class, 'appuser_id');
    }
}
