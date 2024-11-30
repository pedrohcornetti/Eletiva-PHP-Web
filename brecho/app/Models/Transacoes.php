<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacoes extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'tipo', 'data_operacao', 'roupa_id'];	

    // Relacionamento com Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento com Roupas (muitos para muitos)
    public function roupa()
    {
        return $this->belongsTo(Roupas::class);
    }
}
