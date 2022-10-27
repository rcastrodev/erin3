<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'válvulas']);
        Category::create(['name' => 'cilindros']);
        Category::create(['name' => 'tratamiento de aire']);
        Category::create(['name' => 'conexiones']);
        Category::create(['name' => 'equipos para vacío']);
        Category::create(['name' => 'accesorios neumáticos']);
    }
}
