<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppUser;
use App\Model;
use Faker\Generator as Faker;

$factory->define(AppUser::class, function (Faker $faker) {
    return [
        "appuser_name" => $faker->firstName(),
        "appuser_pass" => "12345678",
        "appuser_fname" => $faker->firstName(),
        "appuser_lname" => $faker->lastName(),
        "appuser_location" => $faker->city,
        "appuser_type" => "freelancer",
        "appuser_phone" => $faker->phoneNumber,
        "appuser_profile_img" => $faker->imageUrl(),
        "appuser_portfolio" => $faker->jobTitle,
        "appuser_qualifications" => $faker->jobTitle,
        "appuser_rating" => $faker->numberBetween(1, 5)
    ];
});
