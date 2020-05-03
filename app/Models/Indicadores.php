<?php

namespace App\Models;

use App\Models\Indicadores;
use App\Models\Lancamentos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Indicadores extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
   
    protected $fillable = [
        
        'name', 'descricao'
    ];
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function lancamentos(){
        
        return $this->belongsTo(Lancamentos::class);
    }
}
