<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medico extends Model
{
    use HasFactory;

    /**
     * Atributos de adi��o em massa.
     *
     * @var array
     */
    protected $fillable = [
        'crm',
        'especializacao',
        'usuario_id',
    ];

    /**
     * Pega a usu�rio do m�dico
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
