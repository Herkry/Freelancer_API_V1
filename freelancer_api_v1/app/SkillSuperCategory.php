<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSuperCategory extends Model
{
    // protected $fillable = ['name', 'image_url'];
    protected $guarded = [];

    public function skillsubcategory()
    {
        return $this->hasMany(SkillSubCategory::class);
    }
}
