<?php

namespace Database\Factories;

use App\Models\PromoModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class PromoModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PromoModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "namaPromo" => $this->faker->firstName(),
            "firstDate" => $this->faker->date("Y-m-d"),
            "expiredDate" => $this->faker->date("Y-m-d"),
            "hargaPromo" => $this->faker->numberBetween(100000, 1000000),
        ];
    }
}
