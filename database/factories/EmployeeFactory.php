<?php

use App\Test;
use App\Employee;
use App\User;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    return [
        'name' => $faker->name,       
    ];
});
