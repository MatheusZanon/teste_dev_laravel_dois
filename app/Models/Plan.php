<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table='plans';
    protected $primaryKey='codigo_id';

    public $incrementing = false;

    protected $fillable=['codigo_id', 'registro', 'nome'];

    public function beneficiarios()
    {
        return $this->hasMany(Beneficiario::class);
    }
}
