<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Caballo;
use App\Models\Castillo;
use App\Models\Escudero;
use Illuminate\Database\Eloquent\Model;

class Caballero extends Model
{
    /** @use HasFactory<\Database\Factories\CaballeroFactory> */
    use HasFactory;

    public function caballo(): BelongsTo{
        return $this->belongsTo(Caballo::class);
    }

    public function escuderos(): HasMany{
        return $this->hasMany(Escudero::class, 'id_caballero');
    }

    public function castillos(): BelongsToMany{
        return $this->belongsToMany(Castillo::class, 'caballero_castillo');
    }

    protected $fillable = ['nombre', 'apellido', 'edad', 'id_caballo'];
    protected $guarded = ['id'];
}
