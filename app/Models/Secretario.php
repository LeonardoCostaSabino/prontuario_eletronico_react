<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Secretario extends Model
{
    use HasFactory;

    /**
     * Atributos de adição em massa.
     *
     * @var array
     */
    protected $fillable = [
        'matricula',
        'usuario_id',
    ];

    /**
     * Pega o usuario do secretario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
