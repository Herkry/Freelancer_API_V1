<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSuperCategory extends Model
{
    // protected $fillable = ['name', 'image_url'];
    protected $guarded = [];
    protected $primaryKey = 'skillsupercategory_id';

    public function skillsubcategories()
    {
        return $this->hasMany(SkillSubCategory::class, 'skillsupercategory_id');
    }
}
