<?php

namespace Database\Seeders;
use App\Models\BarangModel;
use Database\Factories\BarangFactory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \Database\Factories\BarangFactory::new()->count(10)->create();
    }
    


    
}
