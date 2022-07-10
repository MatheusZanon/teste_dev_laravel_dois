<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;

    protected $table='beneficiarios';
    protected $fillable=['nome', 'idade', 'registro', 'grupo', 'titular'];

    public function plans()
    {
        return $this->belongsTo(Plan::class);
    }
}
