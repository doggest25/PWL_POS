<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriSeeder extends Seeder
{
    
    public function run(): void
    {
        $data =[
            [
                'kategori_id' => 2,
                'kategori_kode' => 'MNA',
                'kategori_nama' => 'Minuman',
                
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'DAG',
                'kategori_nama' => 'Daging',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'SYR',
                'kategori_nama' => 'Sayuran',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'IKN',
                'kategori_nama' => 'Ikan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
