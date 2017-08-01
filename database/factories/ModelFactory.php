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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        //'uuid' => $faker->uuid,
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret1',
        'birthday' => $faker->date(),
        'status' => $faker->word,
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\UserAddresses::class, function (Faker\Generator $faker) {

    return [
        //'uuid' => $faker->uuid,
        'user_id' => factory(\App\Models\User::class)->lazy(),
        'type' => $faker->word,
        'address' => $faker->address,
        'zip_code' => $faker->word,
        'status' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Country::class, function (Faker\Generator $faker) {

    return [
        'uuid' => $faker->uuid,
        'name' => $faker->country,
        'code' => $faker->countryCode,
        'status' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\State::class, function (Faker\Generator $faker) {

    return [
        'country_id' => factory(\App\Models\Country::class)->lazy(),
        //'uuid' => $faker->uuid,
        'name' => $faker->word,
        'code' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\City::class, function (Faker\Generator $faker) {

    return [
        'state_id' => factory(\App\Models\State::class)->lazy(),
        //'uuid' => $faker->uuid,
        'name' => $faker->word,
        'code' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SystemSettings::class, function (Faker\Generator $faker) {

    return [
        //'uuid' => $faker->uuid,
        'field' => $faker->word,
        'data' => $faker->word,
        'status' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\UserSettings::class, function (Faker\Generator $faker) {

    return [
        'user_id' => factory(\App\Models\User::class)->lazy(),
        //'uuid' => $faker->uuid,
        'field' => $faker->word,
        'data' => $faker->word,
        'status' => $faker->word,
    ];
});


