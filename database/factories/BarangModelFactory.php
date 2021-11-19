<?php

namespace Database\Factories;

use App\Models\BarangModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BarangModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "namaBarang" => $this->faker->firstName(),
            "stok" => $this->faker->numberBetween(1, 10),
            "harga" => $this->faker->numberBetween(100000, 5000000),
            "berat" => $this->faker->randomNumber(2),
            "review" => $this->faker->paragraph(2),
            "fk_id_gambar" => $this->faker->numberBetween(1, 27),
            "fk_id_brand" => $this->faker->numberBetween(1, 36),
            "fk_id_kategori" => $this->faker->numberBetween(1, 11),
        ];
    }
}
