<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Caballero;

class Castillo extends Model
{
    /** @use HasFactory<\Database\Factories\CastilloFactory> */
    use HasFactory;

    public function caballeros(): BelongsToMany{
        return $this->belongsToMany(Caballero::class, 'caballero_castillo', 'id_caballero', 'id_castillo');
    }

    protected $fillable = ['nombre', 'numero_habitantes', 'reino'];
    protected $guarded = ['id'];
}
