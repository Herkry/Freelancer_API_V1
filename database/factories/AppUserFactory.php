<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppUser;
use App\Model;
use Faker\Generator as Faker;

$factory->define(AppUser::class, function (Faker $faker) {
    $qualificationsArray = ["B.A. Music ", "B.A Videography", "BSc. Telecommunication", "Bsc. Software Engineering"];
    $qualifications = $faker->randomElement($qualificationsArray);
    $descriptionArray = ["I will create the best voice over for your advert or presentation in an Irish accent"]; //More description can be addes later
    $description = $faker->randomElement($descriptionArray);

    return [
        "appuser_pass" => "12345678",
        "appuser_fname" => $faker->firstName(),
        "appuser_lname" => $faker->lastName(),
        "appuser_email" => $faker->email(),
        "appuser_location" => $faker->city,
        "appuser_type" => "user",
        "appuser_phone" => 0722700000,
        "appuser_profile_img" => $faker->imageUrl(),
        "appuser_portfolio" => $qualifications,
        "appuser_qualifications" => $qualifications,
        "appuser_description" => $description,
        "appuser_rating" => $faker->numberBetween(1, 5)
    ];
});
