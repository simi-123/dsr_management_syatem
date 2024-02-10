<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
    use HasFactory;
    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','module_id','submodule_id','insert','update','delete','view','created_by','created_at','updated_at'];	


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
