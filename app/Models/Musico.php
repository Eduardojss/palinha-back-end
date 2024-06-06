<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Musico extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    public $table = 'musicos';

    public $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'email',
        'ativo',
        'perfil_completo',
    ];

    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'id_musico', 'id');
    }
}
