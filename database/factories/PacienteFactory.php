<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cpf' => $this->faker->randomNumber(9),
            'data_nascimento' => $this->faker->date(),
            'sexo' => $this->faker->randomElement(['masculino' ,'feminino']),
            'tipo_sanguineo' =>  $this->faker->randomElement(['A' ,'B', 'AB', 'O']),
            'usuario_id' => User::factory(),
        ];
    }
}
