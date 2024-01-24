<?php

use Faker\Generator as Faker;

$factory->define(App\Profession::class, function (Faker $faker) {

    $title = $faker->sentence(3);
    $description = $faker->sentence(3);
    $education_level = $faker->sentence(3);
    $salary = $faker->randomFloat(2, 1000, 5000);
    $sector = $faker->text;
    $experience_required = $faker->sentence(3);

    $profession = [
        'title' => $title,
        'description' => $description,
        'education_level' => $education_level,
        'salary' => $salary,
        'sector' => $sector,
        'experience_required' => $experience_required,
    ];

    return $profession;
});

