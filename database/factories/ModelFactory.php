<?php
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illluminate\Support\Facades\Hash;
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

$factory->define(\App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $this->faker->name,
        'password' => Hash::make('123456'),
        'email' => $this->faker->email,
    ];
});
$factory->define(\App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $this->faker->name,
        'price' => rand(0, 300),
        'description'=>$this->faker->text,
    ];
});