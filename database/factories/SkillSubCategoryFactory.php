<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\SkillSubCategory;
use Faker\Generator as Faker;

$factory->define(SkillSubCategory::class, function (Faker $faker) {
    return [
        "name" => $faker->randomElement(array('VoiceOver', 'Mixing', 'Instrumentalist')),
        "image_url" => "https://firebasestorage.googleapis.com/v0/b/freelancer-3795f.appspot.com/o/singers_vocalist.jpg?alt=media&token=a30ec16b-87fb-4662-abac-5d89ad8543c1",
        "skillsupercategory_id" => $faker->numberBetween(1, 3)
    ];
});
// "description" => "Give your brand a voice over in any style, language, or accent imaginable",
