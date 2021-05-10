<?php

namespace Database\Factories;

use App\Models\Enfermeiro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnfermeiroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enfermeiro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'crm' => $this->faker->randomNumber(8),
            'usuario_id' => User::factory(),
        ];
    }
}
