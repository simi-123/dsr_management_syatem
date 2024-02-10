<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    use HasFactory;
    protected $table = 'projects';
    protected $primarykey = 'project_id';
    protected $fillable = ['project_code','customer_id','project_description','status'];

    public function getStatusAttribute()
    {
        return ($this->attributes['status'] == 1) ? 'Active' : 'In-Active';
    }  

    public function hasCustomer() {

        return $this->belongsTo('App\Models\Customer', 'customer_id', 'customer_id');
    }

    
}