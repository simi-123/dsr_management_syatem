<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    public function index(){

        $projects = Project::with(['hasCustomer'])->orderBy('project_id','ASC')->get();
        
       // dd($projects);

        return view('admin.modules.project.ProjectMaster',['projects' => $projects]);

    }

    public function create(){

        $customer = DB::table('customers')->get();

        return view('admin.modules.project.create',compact('customer'));

    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'project_code' => 'required',
            'customer_id' => 'required',
            'project_description' => 'required',
            'status' => 'required'

        ]);

        if($validator->passes()){
            //save data here
             $project = new Project();
             $project->project_code = $request->project_code;
              $project->customer_id = $request->customer_id;
              $project->project_description = $request->project_description;
              $project->status = $request->status;
              $project->save();
              $request->session();
    
     return redirect()->route('ProjectMaster')->with('success','Record added successfully.');

    }    else{
            //return with errors

            return redirect()->route('ProjectMaster.create')->withErrors($validator);
        }
    }
    
    public function edit($project_id){
        //dd($project_id);
       
       
        $project = DB::table('projects')->where('project_id',$project_id)->select('*')->first();
        $customer = DB::table('customers')->get();      
        // $project = Project::findOrFail($project_id);
        // dd($project);
        
        return view('admin.modules.project.edit',['project' => $project],compact('customer'));
    }
    public function update($project_id, Request $request) {
        $validator = Validator::make($request->all(), [
            'project_code' => 'required',
            'customer_id' => 'required',
            'project_description' => 'required',
            'status' => 'required'
        ]);
        
        DB::table('projects')
        ->where('project_id', $project_id)
        ->update([
            'project_code' => $request->project_code,
            'customer_id' => $request->customer_id,
            'project_description' => $request->project_description,
            'status' => $request->status,


            
        ]);
    
        return redirect()->route('ProjectMaster')->with('success', 'Record updated successfully.');
    }

     
    // public function destroy(Request $request){
    //     $project_id = $request->input('project_id');
    //     Project::find($project_id)->delete();
    
    // public function destroy($project_id)
    // {

        // DB::table('projects')->where('project_id',$project_id)->delete();

        // $project =Project::where('project_id',$project_id)->value('project_id');// Find the task with the specified ID
        // if(isset($project)){
        //     Project::destroy($project_id); // Delete the task
        // }
       

        public function destroy($id)
        {
            DB::table('projects')->where('project_id', $id)->delete();
        return redirect('/ProjectMaster'); // Redirect back to the index page
        }
    }

