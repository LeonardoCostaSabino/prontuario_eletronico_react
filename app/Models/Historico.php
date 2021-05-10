<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Historico extends Model
{
    use HasFactory;

    /**
     * Atributos de adi��o em massa.
     *
     * @var array
     */
    protected $fillable = [
        'medicamentos',
        'diagnosticos',
        'tratamentos',
        'imunizacoes',
        'alergias',
        'exames',
        'paciente_id',
        'medico_id',
    ];

    /**
     * Pega o paciente do hist�rico
     */
    public function paciente(): BelongsTo
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    /**
     * Pega os m�dicos do hist�rico
     */
    public function medico(): HasMany
    {
        return $this->hasMany(Medico::class, 'medico_id');
    }
}
