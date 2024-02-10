<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\module;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    public function index()
    { 

        $modules =Module::with(['hasProject'])->orderBy('module_id','ASC')->get();
        
        //   dd($modules);
        return view('admin.modules.module.index',['modules'=>$modules]);

    }

    public function create(){
        // $project = DB::table('projects')->get();

        // return view('admin.modules.module.create',compact('project'));

    $projects = Project::all(); // Retrieve projects from the database
    return view('admin.modules.module.create', compact('projects'));

    }


    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'project_id' => 'required',
            'module_name' => 'required',
            
            
            
        ]);
        if($validator->passes()){
            $module = new Module();
            $module->project_id = $request->project_id; 
            $module-> module_name = $request->module_name; 
            $module->save();
        
            return redirect()->route('ModuleMaster')->with('success', 'moduleadded successfully');
            
        }
        else{
            return redirect()->route('module.create')->withErrors($validator);
        }
   

    }  


 //function for edit
    public function edit($module_id){

        $module =Module::with(['hasProject'])->orderBy('module_id','ASC')->get();

        $projects = Project::all();
        
        // $modules = Module::findOrFail($module_id);
        
        return view('admin.modules.module.edit',compact('module', 'projects'));
    }
        
    public function update($module_id,Request $request){
        $validator = Validator::make($request->all(),[
            'project_id' => 'required',
            'module_name' => 'required',
               
        ]);
        if($validator->passes()){
            DB::table('modules')
            ->where('module_id', $module_id)
            ->update([
                'module_name' => $request->module_name
           
            ]);    
            return redirect()->route('ModuleMaster')->with('success','Module updated successfully');
    }
    
        else{
            return redirect()->route('module.edit',$module_id)->withErrors($validator);
         }   



     }


//function for edit

public function destroy($id)
{
    DB::table('modules')->where('module_id', $id)->delete();
    return redirect('/ModuleMaster'); // Redirect back to the index page
}

 
}
