<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    protected $fillable = [
        
        'users_id', 'DESCRICAO', 'VALOR', 'CONTA', 'FILIAL', 'N_TITULO', 'PLACA', 'DATA', 'TIPO'
    ];
    
}
