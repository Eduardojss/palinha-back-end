<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contratante extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    public $table = 'contratantes';

    public $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'tipo',
        'cpf_cnpj',
    ];

    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'id_contratante', 'id');
    }
}
