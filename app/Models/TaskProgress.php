<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskProgress extends Model
{
    use HasFactory;

    protected $table = 'progress';
    protected $primaryKey = 'id';
    protected $fillable = ['date','developer','description_of_task_done','time_spent', 'is_complete'];

    public function hasDeveloper() {

        return $this->belongsTo('App\Models\Developer', 'developer', 'id');
    }
}
