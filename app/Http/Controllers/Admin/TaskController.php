<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    { 

        $tasks = Task::with(['hasCustomer','hasProject','hasModule'])->orderBy('id','ASC')->get();
    
        return view('admin.modules.task.index',['tasks'=>$tasks]);

    }
    
    public function create(){
        $customer = DB::table('customers')->get();
        $project = DB::table('projects')->get();
        $module = DB::table('modules')->get();
        return view('admin.modules.task.Create',compact('customer','project','module'));
    }

    

    public function store(Request $request)
    {
        // dd($request); 
        $validator = Validator::make($request->all(),[
            'customer_id' => 'required',
            'project_id' => 'required',
            'module_id' =>'required',
            'task_desc' =>'required',
            'task_detailed_understanding' => 'required',
            'assigned_to' => 'required',
            'expected_time_to_complete' =>'required',
            'expected_start_date' =>'required',
            'expected_completion_date' => 'required',
            'any_previous_task_reference' => 'required',
            'actual_start_date' =>'required',
            'actual_completion_date' =>'required',
            'actual_time_taken' => 'required',
            // 'resaon_for_delay' => 'required',
            
            
            
        ]);
        if($validator->passes()){
            $task = new Task();
            $task-> customer_id = $request->customer_id; 
            $task-> project_id = $request->project_id; 
            $task->module_id = $request->module_id; 
            $task->task_desc = $request->task_desc; 
            $task->task_detailed_understanding = $request->task_detailed_understanding;
            $task->assigned_to =$request->assigned_to;
            $task->expected_time_to_complete =$request->expected_time_to_complete;
            $task->expected_start_date =$request->expected_start_date;
            $task->expected_completion_date = $request->expected_completion_date;
            $task->any_previous_task_reference =$request->any_previous_task_reference;
            $task->actual_start_date =$request->actual_start_date;
            $task->actual_completion_date =$request->actual_completion_date;
            $task->actual_time_taken =$request->actual_time_taken;
            // $task->resaon_for_delay =$request->resaon_for_delay;
            $task->save();
            $request->session();

            return redirect()->route('TaskMaster')->with('success', 'Record added successfully');
            
        }
        else{
            return redirect()->route('task.create')->withErrors($validator);
        }
              
    }
     public function edit($id){
        $tasks = Task::findOrFail($id);
        
        return view('admin.modules.task.edit',['task' => $tasks]);
    }
        
    public function update($id,Request $request){
      
        $validator = Validator::make($request->all(),[
            // 'customer_id' => 'required',
            // 'project_id' => 'required',
            // 'module_id' =>'required',
            'task_desc' =>'required',
            'task_detailed_understanding' => 'required',
            'assigned_to' => 'required',
            'expected_time_to_complete' =>'required',
            'expected_start_date' =>'required',
            'expected_completion_date' => 'required',
            'any_previous_task_reference' => 'required',
            'actual_start_date' =>'required',
            'actual_completion_date' =>'required',
            'actual_time_taken' => 'required',
            // 'resaon_for_delay' => 'required',
            
            
        ]);
        if($validator->passes()){
            $task = Task::find($id);
            // $task-> customer_id = $request->customer_id; 
            // $task-> project_id = $request->project_id; 
            // $task->module_id = $request->module_id; 
            $task->task_desc = $request->task_desc; 
            $task->task_detailed_understanding = $request->task_detailed_understanding;
            $task->assigned_to =$request->assigned_to;
            $task->expected_time_to_complete =$request->expected_time_to_complete;
            $task->expected_start_date =$request->expected_start_date;
            $task->expected_completion_date = $request->expected_completion_date;
            $task->any_previous_task_reference =$request->any_previous_task_reference;
            $task->actual_start_date =$request->actual_start_date;
            $task->actual_completion_date =$request->actual_completion_date;
            $task->actual_time_taken =$request->actual_time_taken;
            // $task->resaon_for_delay =$request->resaon_for_delay;
            $task->save();
            
            return redirect()->route('TaskMaster')->with('success', 'Record added successfully');
    }
    
        else{
            return redirect()->route('task.edit',$id)->withErrors($validator);
         }   



     }

    public function destroy($id)
        {
            $task =Task::findOrFail($id); // Find the task with the specified ID
            $task->delete(); // Delete the task
            return redirect('/TaskMaster'); // Redirect back to the index page
        }
     }

