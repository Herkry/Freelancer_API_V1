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
        factory(SkillSuperCategory::class, 20)->create();
    }
}
