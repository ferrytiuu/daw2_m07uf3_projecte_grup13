<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Apartaments extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    protected $primaryKey = 'codiApartament';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'codiApartament',
        'refCatastral',
        'ciutat',
        'barri',
        'nomCarrer',
        'numCarrer',
        'pis',
        'numLlits',
        'numHabitacions',
        'ascensor',
        'calefaccio',
        'aireAcondicionat',
    ];
}
