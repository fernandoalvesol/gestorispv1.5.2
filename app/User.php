<?php

namespace App;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Filial;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'filial', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function caixas() {

        return $this->hasMany(User::class, 'users_id');
    }

    public function roles() {

        return $this->belongsToMany(\App\Models\Role::class);
    }
    
    public function filiais(){
        
        return $this->belongsToMany(Filial::class);
    }

    public function hasPermission(Permission $permissions) {


        return $this->hasAnyRoles($permissions->roles);
    }

    public function hasAnyRoles($roles) {

        if (is_array($roles) || is_object($roles)) {

            return $roles->intersect($this->roles)->count();
        }

        return $this->roles->contains('name', $roles);
    }

}
