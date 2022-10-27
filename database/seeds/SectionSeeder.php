<?php

use App\Page;
use App\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home_id    = Page::where('name', 'home')->first()->id;
        /** Home */
        Section::create(['page_id' => $home_id, 'name' => 'section_1']);
        Section::create(['page_id' => $home_id, 'name' => 'section_2']);
        Section::create([ 'page_id' => $home_id, 'name' => 'section_3']);
        Section::create([ 'page_id' => $home_id, 'name' => 'section_4']);

        /** Empresa */
        Section::create(['page_id' => Page::where('name', 'empresa')->first()->id, 'name' => 'section_1']);
        Section::create(['page_id' => Page::where('name', 'empresa')->first()->id, 'name' => 'section_2']);

        /** Servicios */
        Section::create(['page_id' => Page::where('name', 'servicios')->first()->id, 'name' => 'section_1']);

        /** Videos */
        Section::create(['page_id' => Page::where('name', 'videos')->first()->id, 'name' => 'section_1']);

        /** Clientes */
        Section::create(['page_id' => Page::where('name', 'clientes')->first()->id, 'name' => 'section_1']);

        /** Solicitud de presupuesto */
        Section::create(['page_id' => Page::where('name', 'solicitudad-presupuesto')->first()->id, 'name' => 'section_1']);

        /** Contacto */
        Section::create(['page_id' => Page::where('name', 'contacto')->first()->id, 'name' => 'section_1']);
    }
}
