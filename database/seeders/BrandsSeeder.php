<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::firstOrCreate(['name' => 'Siemens']);
        Brand::firstOrCreate(['name' => 'ABB']);
        Brand::firstOrCreate(['name' => 'Eaton']);
        Brand::firstOrCreate(['name' => 'Schnieder']);
        Brand::firstOrCreate(['name' => 'Festo']);
        Brand::firstOrCreate(['name' => 'Allen-Bradley']);
        Brand::firstOrCreate(['name' => 'Yaskawa']);
        Brand::firstOrCreate(['name' => 'Atlas Copco']);
        Brand::firstOrCreate(['name' => 'Demag']);
        Brand::firstOrCreate(['name' => 'Danfoss']);
        Brand::firstOrCreate(['name' => 'Ferraz Shawmut']);
        Brand::firstOrCreate(['name' => 'Bussmann']);
        Brand::firstOrCreate(['name' => 'Pepperl+Fuchs']);
    }
}
