<?php

use App\SkillSubCategory;
use Illuminate\Database\Seeder;

class SkillSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SkillSubCategory::class, 20)->create();
    }
}
