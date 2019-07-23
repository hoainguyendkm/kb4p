<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'ten' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'img' => $faker->imageUrl,
        'muctieu_id' => rand(1,4),
        'gioitinh_id' => rand(1,4),
        'honnhan_id' => rand(1,4),
        'hocvan_id' => rand(1,4),
        'diachi_id' => rand(1,4),
        'tuoi' =>rand(30,69),
        'chieucao' =>rand(130,203),
        'cannang' =>rand(30,120),
        'toila' => $faker->paragraph,
        'timnguoi' => $faker->paragraph,
        'luotxem' => rand(1,100)
    ];
});
$factory->define(App\Muctieu::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
$factory->define(App\Gioitinh::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
$factory->define(App\Honnhan::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
$factory->define(App\Hocvan::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
$factory->define(App\Diachi::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});