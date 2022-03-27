<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguers extends Model
{
    use HasFactory;
    
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = (['dniClient','codiApartament']);
    public $incrementing = false;

    protected $fillable = [
        'dniClient',
        'codiApartament',
        'dataInici',
        'horaInici',
        'dataFinal',
        'horaFinal',
        'llocLliurament',
        'llocDevolucio',
        'preuDia',
        'diposit',
        'quantitatDiposit',
        'tipusAsseguranca',
    ];
}
