<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['name' => 'camozzi']);
        Brand::create(['name' => 'eaton']);
        Brand::create(['name' => 'automación argentina']);
        Brand::create(['name' => 'deprag']);
        Brand::create(['name' => 'shuner']);
    }
}
