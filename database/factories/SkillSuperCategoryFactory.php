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
// // Not working as expected
// $categories = array(
//     'Music' => "https://firebasestorage.googleapis.com/v0/b/freelancer-3795f.appspot.com/o/song.xml?alt=media&token=afe196ef-463b-499e-86da-af88982a3092",
//     'Videography'  => "gs://freelancer-3795f.appspot.com/multimedia.xml",
//     'Art' => "gs://freelancer-3795f.appspot.com/paint.xml",
//     'Programming' => "https://firebasestorage.googleapis.com/v0/b/freelancer-3795f.appspot.com/o/development.xml?alt=media&token=ba4ffb61-0b9c-4f59-8973-ed583729487a"
// );
// //wirll only return the first element
// //Wrong logic
// foreach ($categories as $key => $value) {
//     return [
//         "name" => $key,
//         "image_url" => $value
//     ];
// }
