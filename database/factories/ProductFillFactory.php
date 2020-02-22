<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductFill;
use Faker\Generator as Faker;

$factory->define(ProductFill::class, function (Faker $faker) {
    $image = $faker->randomElement([
        "http://m.flohy.com/Uploads/Images/20180112/5a588835780f3.jpg",
        "http://m.flohy.com/Uploads/Images/20180124/5a684c7de3a37.jpg",
        "http://m.flohy.com/Uploads/Images/20180129/5a6f2634ef03b.jpg",
        "http://m.flohy.com/Uploads/Images/20190826/5d6349accfdbd.jpg",
    ]);

    return [
        'title'        => $faker->word,
        'fill_sn'  => $faker->word,
        'image'        => $image,
        'on_sale'      => true,
        'stock'       => $faker->randomNumber(5),
        'price'       => $faker->randomNumber(4),
    ];
});
