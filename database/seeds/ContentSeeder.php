<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Home  */
        Content::create([
            'section_id'=> 1,
            'order'     => 'AA',
            'image'     => 'images/Mask_Group_107.png',
            'content_1' => 'ROSSI CORTINAS METÁLICAS SRL',
            'content_2' => 'Somos una empresa argentina dedicada fundamentalmente a la fabricación y colocación de cortinas metálicas.'
        ]);

        Content::create([
            'section_id'=> 2,
            'order' => 'AA',
            'content_1' => 'Enviamos tu compra', 
            'content_2' => 'Entregas a todo el país',
            'content_3' => 'fas fa-truck'
        ]);

        Content::create([
            'section_id'=> 2,
            'order' => 'BB',
            'content_1' => 'Pagá como quieras', 
            'content_2' => 'Tarjetas de crédito, o efectivo',
            'content_3' => 'far fa-credit-card'
        ]);

        Content::create([
            'section_id'=> 2,
            'order' => 'CC',
            'content_1' => 'Presupuesto sin cargo', 
            'content_2' => 'Realizamos tu presupuesto sin cargo',
            'content_3' => 'fas fa-lock'
        ]);


        Content::create([
            'section_id'=> 4,
            'content_1' => 'Rossi Cortinas metálicas', 
            'content_2' => 'Contamos con 121 años de experiencia.',
            'content_3' => 'Somos una empresa argentina dedicada fundamentalmente a la fabricación y colocación de cortinas metálicas. Hemos surgido de un emprendimiento iniciado con el esfuerzo y trabajo sostenido de nuestros abuelos, quienes nos transmitieron los secretos de nuestra profesión.'
        ]);

        Content::create([
            'section_id'=> 5,
            'order' => 'AA',
            'content_1' => 'Para tu hogar', 
            'content_2' => 'fas fa-home',
        ]);

        Content::create([
            'section_id'=> 5,
            'order' => 'BB',
            'content_1' => 'Para tu comercio', 
            'content_2' => 'fas fa-warehouse',
        ]);

        Content::create([
            'section_id'=> 5,
            'order' => 'CC',
            'content_1' => 'Para tu industria', 
            'content_2' => 'fas fa-industry',
        ]);


        /** Empresa  */
        Content::create([
            'section_id'=> 7,
            'content_1' => 'images/Mask_Group_103.png', 
        ]);

        Content::create([
            'section_id'=> 8,
            'content_1' => 'ROSSI CORTINAS METÁLICAS S.R.L.', 
            'content_2' => 'es una empresa argentina dedicada fundamentalmente a la fabricación y colocación de cortinas metálicas. Hemos surgido de un emprendimiento iniciado con el esfuerzo y trabajo sostenido de nuestros abuelos, quienes nos transmitieron los secretos de nuestra profesión, y hoy contamos con 121 años de experiencia.',
            'content_3' => 'Nuestro principal objetivo es ofrecer al cliente un servicio integral: desde un amplio asesoramiento profesional sobre modelos, opciones y calidad de cortinas disponibles, venta de equipos apropiados, instalación y puesta en marcha, hasta servicios de mantenimiento post-venta y venta de repuestos.',
            'content_4' => 'El ritmo ininterrumpido y creciente de trabajo, la incorporación paulatina y constante de clientes de primer nivel, combinados con la constante capacitación técnica del personal, el uso de tecnología de reconocida calidad y fundamentalmente la evaluación personalizada de cada caso en particular, nos permiten asegurar el cumplimiento de nuestro objetivo: mejorar la calidad de nuestros servicios, brindando respuestas certeras que esperamos que sean de la entera satisfacción de todos ustedes.',
        ]);
        
        /** Servicios */
        Content::create([
            'section_id'=> 9,
            'order'     => 'AA',
            'content_1' => 'Fabricación e instalación', 
            'content_2' => '<p>Contamos con las máquinas conformadoras donde se instalan las bobinas que fabrican las distintas tablillas, las cuales son cortadas a medida para el armado final de la cortina. El mismo sistema es utilizado para fabricar las guías y ejes.</p>
            <p> Somos los únicos fabricantes que contamos con técnicos de instalación propios de la empresa, no son tercerizados, y cuentan con seguro de vida y ART, evitando delegar responsabilidad entre el fabricante y los instaladores.</p>',
            'content_3' => 'images/Mask_Group_111.png'
        ]);

        Content::create([
            'section_id'=> 9,
            'order'     => 'BB',
            'content_1' => 'Reparación y mantenimiento', 
            'content_2' => '<p>Contá con nuestro servicio de reparación y asesoramiento para instalación de cortinas nuevas de forma inmediata. Tenemos móviles que recorren Capital Federal y Gran Buenos Aires, abarcando todo el conurbano</p>',
            'content_3' => 'images/Mask_Group_109.png'
        ]);

        Content::create([
            'section_id'=> 9,
            'order'     => 'CC',
            'content_1' => 'Venta de repuestos', 
            'content_2' => '<p>Contamos con repuestos para todo tipo de cortina</p>',
            'content_3' => 'images/Mask_Group_112.png'
        ]);
    }
}


