<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;
    protected $tale='modules';
    protected $primarykey = 'module_id';
    protected $fillable = [
        'project_id',
        'module_name'      
    ];

    public function hasProject() {

        return $this->belongsTo('App\Models\Project', 'project_id', 'project_id');
    }

}
