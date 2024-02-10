<?php
  
namespace App\Models;
  
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
  
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

       /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
  
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
  
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //protected $appends = ['role'];



    /**
     * Always encrypt password when it is updated.
     *
     * @param $value
     * @return string
     */
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }


   

    public function getUserRole($userId)
    {
        $user = $this->find($userId);
        $role = $user->role;
    
        // Use the $role variable as needed
        return $role;
    }


   

//relationships in User,Role and Permission models.

public function Role()
{
    return $this->belongsTo('App\Models\Role', 'role', 'id');
}

public function hasRole($role)
{
    if (is_string($role)) {
        return $this->roles->contains('name', $role);
    }

    return !!$role->intersect($this->roles)->count();
}


public function isAdmin()
{
    return $this->role === '1';
}

public function isManager()
{
    return $this->role === '2';
}

public function isDeveloper()
{
    return $this->role === '3';
}

}
