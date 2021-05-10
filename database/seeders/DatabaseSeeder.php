<?php

namespace Database\Seeders;

use App\Models\Enfermeiro;
use App\Models\Historico;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Secretario;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         Medico::factory(10)->create();
         Enfermeiro::factory(10)->create();
         Secretario::factory(10)->create();
         Paciente::factory(10)->create();
         Historico::factory(10)->create();
    }
}
