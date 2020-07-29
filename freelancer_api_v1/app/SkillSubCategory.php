<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSubCategory extends Model
{
    protected $guarded = [];
    public function skillsupercategory()
    {
        return $this->belongsTo(SkillSuperCategory::class);
    }
}
