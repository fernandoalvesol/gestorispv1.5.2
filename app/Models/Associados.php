<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Associados extends Model
{
    protected $fillable = [
        
        'name', 'cpf', 'rg', 'logadouro', 'numero', 
        'bairro', 'cidade', 'cep', 'dtnascimento',
        'dtadesao', 'fone', 'celular',
        
    ];
    
}
