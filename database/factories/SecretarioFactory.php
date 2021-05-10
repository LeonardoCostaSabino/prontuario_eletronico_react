<?php

namespace Database\Factories;

use App\Models\Secretario;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SecretarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Secretario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricula' => $this->faker->randomNumber(8),
            'usuario_id' => User::factory(),
        ];
    }
}
