<?php

/*$factory->define(App\Product::class, function (Faker $faker) {
    return [
        //
    ];
});*/

factory(App\Products::class, 2)->create()->each(function ($u) {
    $u->posts()->save(factory(App\Products::class)->make());
});