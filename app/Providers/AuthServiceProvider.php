<?php

namespace App\Providers;
use App\Models\Caixa;
use App\Models\Permission;
use App\Models\Role;
use App\User;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        
       //Caixa::class => \App\Policies\CaixaPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    
    {
        $this->registerPolicies($gate);
        
        
        $permission = Permission::with('roles')->get();
        
        foreach ( $permission as $permissions )
        {
            
            $gate->define($permissions->name, function(User $user) use ($permissions){
            
                return $user->hasPermission($permissions);
                
            });
            
        }
            

        
    }
}
