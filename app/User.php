<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'newsletter', 'dob', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }

    //Check if a user has a certain role
    public function hasAnyRole($roles){
            //check if it's an array
        if(is_array($roles)){
                //loop trough the array
            foreach ($roles as $role){
                    //check if this user has a tole
                if($this->hasRole($role)){
                    //return true if it has the role
                    return true;
                }
            }
            //if not an array - check single role
        }else{
            if($this->hasRole($roles)){
                //return true if it has the role
                return true;
            }
        }
        //if user does not have roles
        return false;
    }

    //check if user have any role
    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        //if it does have the role
        return false;
    }
}
