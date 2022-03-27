<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Clients extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    protected $primaryKey = 'dni';
    public $incrementing = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dni',
        'nomCognoms',
        'edat',
        'telefon',
        'adreca',
        'ciutat',
        'pais',
        'email',
        'tipusTargeta',
        'numTargeta',
    ];
}
