<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Disability;
use Faker\Generator as Faker;

$factory->define(Disability::class, function (Faker $faker) {

    $disabilities = [
        'pregnant',
        'pwd',
    ];

    return [
        'name'=> $disabilities[array_rand($disabilities)]
    ];
});
