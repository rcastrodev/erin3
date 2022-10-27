<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => function () {
            return Category::inRandomOrder()->first()->id;
        },
        'name' => $faker->name,
        'description' => 'No permiten ningún tipo de visualización a través de las mismas. Ideal para comercios donde no se pretende que se vea hacia adentro. Se pueden utilizar para pintar publicidad',
        'main_features'  => '<div class="col-sm-12 col-md-6"><h4 class="mb-3 font-size-16 font-weight-600">Acorazada Ancha (12,5cm. Ancho tablillas)</h4>
        <ul><li><strong>Reforzada</strong><br>confeccionada con fleje acerado de 0,7 de espesor (Para luces hasta 8mts. de ancho)</li>
        <li><strong>Super</strong><br>confeccionada con fleje acerado de 0,9 de espesor (Para luces hasta 12mts. de ancho)</li></ul></div>
        <div class="col-sm-12 col-md-6"><h4 class="mb-3 font-size-16 font-weight-600">Acorazada Ancha (12,5cm. Ancho tablillas)</h4><ul>
        <li><strong>Reforzada</strong><br>confeccionada con fleje acerado de 0,7 de espesor (Para luces hasta 8mts. de ancho)</li><li><strong>Super</strong><br>confeccionada con fleje acerado de 0,9 de espesor (Para luces hasta 12mts. de ancho)</li></ul></div>',
        'extra1' =>'<iframe class="w-100" height="240" src="https://www.youtube.com/embed/arWC7iRyfQk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        'extra2' => '<iframe class="w-100" height="240" src="https://www.youtube.com/embed/PqZ1daYdIAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    ];
});
