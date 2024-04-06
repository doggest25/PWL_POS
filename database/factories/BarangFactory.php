<?php

namespace Database\Factories;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Factories\Factory;


class BarangFactory extends Factory
{
    protected $model = BarangModel::class;

    public function definition()
    {
        return [
            'kategori_id' => KategoriModel::all()->random()->kategori_id,
            'barang_nama' => $this->faker->word,
            'harga_beli' => $this->faker->randomNumber(5),
            'harga_jual' => $this->faker->randomNumber(6),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
