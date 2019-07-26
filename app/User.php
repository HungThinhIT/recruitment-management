<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'fullname', 'email', 'phone', 'address', 'image', 'password'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email_verified_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role', 'userId', 'roleId');
    }
    /*public function permissions()
    {
        return $this->hasManyThrough('App\Permission', 'App\Role','');
    }*/
    public function articles()
    {
        return $this->hasMany('App\Article','userId','id');
    }

    public function hasAccess(array $permissions): bool
    {
        foreach ($this->roles as $role) {
            if($role->hasAccess($permissions)) return true;
        }
        return false;
    }
    //scope
    public function scopeSearchByKeyWord($query, $keyword)
    {   
        if ($keyword) 
            return $query->where('name', 'like', '%'.$keyword.'%')
                                ->orwhere('fullname', 'like', '%'.$keyword.'%')
                                ->orwhere('email', 'like', '%'.$keyword.'%')
                                ->orwhere('phone', 'like', '%'.$keyword.'%')
                                ->orwhere('address', 'like', '%'.$keyword.'%')
                                ->orWhereHas('roles', function (Builder $q) use ($keyword){
                                    $q->where('name', 'like', '%'.$keyword.'%');
                                });    
    }
    public function scopeSort($query, $field, $orderBy)
    {   
        if ($field) 
            return $query->orderBy($field, $orderBy);    
    }
}
