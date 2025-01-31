<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Caballero;

use Illuminate\Database\Eloquent\Model;

class Caballo extends Model
{
    /** @use HasFactory<\Database\Factories\CaballoFactory> */
    use HasFactory;

    public function caballero(): HasOne{
        return $this->hasOne(Caballero::class, 'id_caballo');
    }
}
