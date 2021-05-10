<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enfermeiro extends Model
{
    use HasFactory;

    /**
     * Atributos de adição em massa.
     *
     * @var array
     */
    protected $fillable = [
        'crm',
        'usuario_id',
    ];

    /**
     * Pega o usuário do enfermeiro
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
