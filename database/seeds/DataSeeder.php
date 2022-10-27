<?php

use App\Data;
use App\Company;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_id = Company::first()->id;

        Data::create([
            'company_id'=> $company_id,
            'address'   => 'Av. de los Constituyentes 5751. CABA',
            'email'     => 'info@erin.com.ar',
            'phone1'    => '(+54 11) 4573-1313 / 0022',
            'phone2'    => '4573-1313',
            'phone3'    => '0022',
            'logo_header'=> 'images/data/logo_header.svg',
            'logo_footer'=> 'logo_footer.svg'
        ]);
    }
}
