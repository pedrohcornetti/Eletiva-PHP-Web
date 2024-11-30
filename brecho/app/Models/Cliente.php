<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'telefone']; // Permite preencher esses campos

    /**
     * Relacionamento com Transacoes.
     * Um cliente pode ter muitas transações (trocas ou vendas).
     */
    public function transacoes()
    {
        return $this->hasMany(Transacao::class); // Relacionamento de um para muitos com Transacao
    }
}

