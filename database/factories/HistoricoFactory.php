<?php

namespace Database\Factories;

use App\Models\Historico;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoricoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Historico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'medicamentos' => $this->faker->text(),
            'diagnosticos' => $this->faker->text(),
            'tratamentos' => $this->faker->text(),
            'imunizacoes' => $this->faker->text(),
            'alergias' => $this->faker->text(),
            'exames' => $this->faker->text(),
            'paciente_id' => Paciente::factory(),
            'medico_id' => Medico::factory(),
        ];
    }
}
