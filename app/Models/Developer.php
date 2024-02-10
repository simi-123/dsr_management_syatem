<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $table = 'developers';
    protected $primaryKey = 'id';
    protected $fillable = ['developer_name','developer_email','password','developer_type','auth_token'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
  
    public function getDeveloperTypeAttribute()
    {
        return ($this->attributes['developer_type'] == 1) ? 'Active' : 'In-Active';
    }
    

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

}
