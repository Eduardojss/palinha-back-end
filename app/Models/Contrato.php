<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrato extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    public $table = 'contratos';

    public $primaryKey = 'id';

    protected $fillable = [
        'id_contratante',
        'id_musico',
        'data_apresentacao',
        'valor_contrato'
    ];

    public function contratante()
    {
        return $this->hasOne(Contratante::class, 'id_contratante', 'id');
    }

    public function musico()
    {
        return $this->hasOne(Musico::class, 'id_musico', 'id');
    }
}
