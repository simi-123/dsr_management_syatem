<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developermanager extends Model
{
    use HasFactory;

    protected $table = 'developer_manager';
    protected $primarykey = 'link_id';
   
    protected $fillable = 	['developer_id','manager_id'];

    public function hasDeveloper() {

        return $this->belongsTo('App\Models\Developer', 'developer_id', 'id');
    }
}
