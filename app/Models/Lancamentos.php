<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Areas;
use App\Models\Indicadores;

class Lancamentos extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'areas_id', 'indicadores_id', 'data', 'descricao', 'competencia', 'hora',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
        
    public function indicador(){
        
        return $this->belongsTo(Indicadores::class, 'indicadores_id');
    }
    
    public function areas(){
        
        return $this->belongsTo(Areas::class, 'areas_id');
    }

    
    
    
}
