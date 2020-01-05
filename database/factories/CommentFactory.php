<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'reply' => $faker->paragraph,
        'post_id' => function () {
            return factory(App\Post::class)->create()->id;
        }
    ];
});
