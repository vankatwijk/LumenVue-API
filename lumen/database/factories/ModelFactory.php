<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'language' => 'en',
        'currency' => 'Euro',
        'timezone' => 'UTC +1',
        'payment_method' => 'creditcard',
        'area_of_business' => 'healthcare',
        'plan_type' => 'basic',
        'cost' => $faker->randomDigit,
        'number' => $faker->randomDigit,
        'phone' => $faker->phoneNumber,
        'logo_img' => $faker->imageUrl($width = 200, $height = 200),
        'date' => $faker->date('Y-m-d', $unixTimestamp),
        'due_date' => $faker->date('Y-m-d', $unixTimestamp),
        'status' => 1,
        'text' => 'this a a fake account for testing',
    ];
});
