<?php

namespace Database\Factories;

use App\Models\AdminModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "username"  => $this->faker->userName,
            "email"     => $this->faker->safeEmail,
            "no_tlp"    => $this->faker->e164PhoneNumber,
            "password"  => Hash::make("123"),
            "created_at"=> now(),
            "updated_at"=> null,
            "deleted_at"=> null,
        ];
    }
}
