<?php

use App\SkillSuperCategory;
use Illuminate\Database\Seeder;

class SkillSuperCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Potential bug if adjusted, check the factory file b4 adjusting
        factory(SkillSuperCategory::class, 4)->create();
    }
}
