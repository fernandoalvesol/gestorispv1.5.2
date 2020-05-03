<?php

namespace App\Policies;

use App\User;
use App\Models\Caixa;
use Illuminate\Auth\Access\HandlesAuthorization;

class CaixaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function viewCaixa(User $user, Caixa $caixa){
        
        
        return $user->id == $caixa->users_id;
        
    }
}
