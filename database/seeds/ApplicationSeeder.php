<?php

use App\Application;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::create(['name' => 'neumática']);
        Application::create(['name' => 'clinchado']);
        Application::create(['name' => 'prensado']);
        Application::create(['name' => 'ensamblado']);
        Application::create(['name' => 'mecanizado']);
        Application::create(['name' => 'inserción']);
        Application::create(['name' => 'acuñado']);
        Application::create(['name' => 'remachado']);
        Application::create(['name' => 'punzando']);
        Application::create(['name' => 'atonillado']);

    }
}
