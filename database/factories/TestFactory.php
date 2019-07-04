<?php

use App\Test;
use App\User;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {

    return [
        'user_employee_name' => $faker->test,    
    ];
});
