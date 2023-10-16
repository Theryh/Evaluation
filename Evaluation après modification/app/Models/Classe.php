<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Classe
 *
 * @property int $id
 * @property string $batiment
 * @property string $numero
 * @property int $is_ouverte
 * @property int $nombre_places
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ClasseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Classe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereBatiment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereIsOuverte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereNombrePlaces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Classe extends Model
{
    use HasFactory;
}
