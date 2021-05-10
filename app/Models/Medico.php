<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medico extends Model
{
    use HasFactory;

    /**
     * Atributos de adição em massa.
     *
     * @var array
     */
    protected $fillable = [
        'crm',
        'especializacao',
        'usuario_id',
    ];

    /**
     * Pega a usuário do médico
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
