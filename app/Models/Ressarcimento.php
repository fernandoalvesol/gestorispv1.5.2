<?php

namespace App\Models;
use App\Models\Ressarcimento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ressarcimento extends Model
{

	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        
        'name', 'tipo', 'cor', 'placa', 'chassi', 
        'dtsinistro', 'dtressarcimento', 
        'status', 'dtrecuperado'
    ];
    
    
    
}
