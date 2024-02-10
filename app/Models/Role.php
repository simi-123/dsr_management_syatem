<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = ['name','status'];


//relationships in User,Role and Permission models.  
  
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
  
  
  
  
    public function getStatusAttribute()
    {  
        return ($this->attributes['status'] == 1) ? 'Active' : 'In-Active';
    }  

}
