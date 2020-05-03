<?php

namespace App\Models;

use App\Models\Indicadores;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Areas extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     */
    protected $table = 'areas';
    
    protected $fillable = [
        
        'name', 'localizacao', 'descricao', 'risco',
    ];
    
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function indicadores(){
        
        return $this->belongsToMany(Indicadores::class);
    }
}
