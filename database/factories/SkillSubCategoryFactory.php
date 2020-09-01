<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\SkillSubCategory;
use Faker\Generator as Faker;

$factory->define(SkillSubCategory::class, function (Faker $faker) {
    return [
        "name" => $faker->randomElement(array('VoiceOver', 'Mixing', 'Instrumentalist')),
        "description" => "Give your brand a voice over in any style, language, or accent imaginable",
        "image_url" => "/imageurl",
        "appuser_id" => $faker->numberBetween(1, 3),
        "skillsupercategory_id" => $faker->numberBetween(1, 3)
    ];
});
