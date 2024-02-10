<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $primarykey = 'id';
  
    protected $fillable = [	'customer_id','project_id','module_id','task_desc','task_detailed_understanding','assigned_to','expected_time_to_complete','expected_start_date','expected_completion_date','any_previous_task_reference','actual_start_date','actual_completion_date','actual_time_taken','resaon for_delay'];

 
    public function hasCustomer() {

         return $this->belongsTo('App\Models\Customer', 'customer_id', 'customer_id');
     } 

    public function hasProject() {
 
        return $this->belongsTo('App\Models\Project', 'project_id', 'project_id');
    }

    public function hasModule() {

        return $this->belongsTo('App\Models\module', 'module_id', 'module_id');
    }
}
