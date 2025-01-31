<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Caballo;

class Escudero extends Model
{
    /** @use HasFactory<\Database\Factories\EscuderoFactory> */
    use HasFactory;

    public function caballero(): BelongsTo{
        return $this->belongsTo(Caballero::class, 'id_caballero');
    }
}
