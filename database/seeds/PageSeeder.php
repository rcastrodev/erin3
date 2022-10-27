<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(['name' => 'home']);
        Page::create(['name' => 'empresa']);
        Page::create(['name' => 'secciones']);
        Page::create(['name' => 'familias']);
        Page::create(['name' => 'marcas']);
        Page::create(['name' => 'aplicaciones']);
        Page::create(['name' => 'servicios']);
        Page::create(['name' => 'videos']);
        Page::create(['name' => 'clientes']);
        Page::create(['name' => 'solicitudad-presupuesto']);
        Page::create(['name' => 'contacto']);
    }
}
