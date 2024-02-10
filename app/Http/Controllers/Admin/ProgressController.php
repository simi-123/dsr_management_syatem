<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaskProgress;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    public function index()
    { 

        $progress = TaskProgress::with(['hasDeveloper'])->orderBy('id','ASC')->get();
// dd($progress);
        
        return view ('admin.modules.progress.index',['progress'=>$progress]);


     


    }

    public function create(){
        $developer = DB::table('developers')->get();
        $task = DB::table('tasks')->get();
        
        return view('admin.modules.progress.create',compact('developer','task'));
        
        
       
    }

    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'date' => 'required',
            'developer' => 'required',
            'description_of_task_done' =>'required',
            'time_spent' =>'required',
           	'is_complete'=>'required',
            
            	
        ]);

        if($validator->passes()){

            $progress= new TaskProgress();
            $progress->date= $request->date; 
            $progress->developer = $request->developer; 
            $progress->description_of_task_done = $request->description_of_task_done; 
            $progress->time_spent = $request->time_spent; 
            $progress->is_complete = $request->is_complete;
        
            
            $progress->save();
        
            return redirect()->route('ProgressMaster')->with('success', ' added successfully');
            
        }
        else{
            return redirect()->route('progress.create')->withErrors($validator);
        }
    
    

    }

    public function edit($id){
        
        $progress = TaskProgress::findOrFail($id);
        $developer = DB::table('developers')->get();
        $task = DB::table('tasks')->get();
        
        
        return view('admin.modules.progress.edit',['progress' => $progress],compact('developer','task'));
        
        
        
    }
        
    public function update($id,Request $request){
        
        $validator = Validator::make($request->all(),[
            'date' => 'required',
            'developer' => 'required',
            'description_of_task_done' =>'required',
            'time_spent' =>'required',
           	'is_complete'=>'required',
            
            
        ]);
        if($validator->passes()){
            $progress= Taskprogress::find($id);
            $progress->date= $request->date; 
            $progress->developer = $request->developer; 
            $progress->description_of_task_done = $request->descrtption_of_task_done; 
            $progress->time_spent = $request->time_spent; 
            $progress->is_complete = $request->is_complete; 
            $progress->save(); 
           
            
            return redirect()->route('ProgressMaster')->with('success','Module updated successfully');
    }
    
        else{
            return redirect()->route('progress.edit',$id)->withErrors($validator);
         }   



     }


//function for delete

 public function destroy($id)
        {
            $task =Taskprogress::findOrFail($id); // Find the task with the specified ID
            $task->delete(); // Delete the task
            return redirect('/ProgressMaster'); // Redirect back to the index page
        }

}
