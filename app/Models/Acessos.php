<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Acessos extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    public $table = 'acessos';

    public $primaryKey = 'id';
    
    protected $fillable =[
        'ip_dispositivo'
    ];
}
