<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\SkillSuperCategory;
use Faker\Generator as Faker;

$factory->define(SkillSuperCategory::class, function (Faker $faker) {
    return [
        "name" => $faker->randomElement(array('Music', 'Videography', 'Art')),
        "image_url" => "img/url"
    ];
});
