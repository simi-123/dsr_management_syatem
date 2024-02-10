<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Developermanager;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeveloperManagerController extends Controller
{
    public function index()
    { 

        $developer_managers = Developermanager::with(['hasDeveloper'])->orderBy('link_id','ASC')->get();
        
    //    dd($developer_managers);
        return view('admin.modules.developermanager.index',['developer_manager'=>$developer_managers]);

    }
    
    public function create(){
        // return view('admin.modules.developermanager.Create');

        $developer= DB::table('developers')->get();

        return view('admin.modules.developermanager.create',compact('developer'));
    }

    

    public function store(Request $request)
    {
    
        $validator = Validator::make($request->all(),[
            'developer_id' => 'required',
            'manager_id' => 'required',
            
        ]);
        if($validator->passes()){
            $developer_manager = new Developermanager();
            $developer_manager->developer_id = $request->developer_id; 
            $developer_manager->manager_id = $request->manager_id; 
            $developer_manager->save();
            

            return redirect()->route('DeveloperManager')->with('success', 'Link added successfully');
            
        }
        else{
            return redirect()->route('link.create')->withErrors($validator);
        }
              
    }


     public function edit($link_id){
        // $developer_managers = Developermanager::findOrFail($link_id);

        $developer_manager = DB::table('developer_manager')->where('link_id',$link_id)->select('*')->first();
        $developer= DB::table('developers')->get();
        
        return view('admin.modules.developermanager.edit',['developer_manager' => $developer_manager],compact('developer'));
    }


    public function update($link_id,Request $request){
        $validator = Validator::make($request->all(),[
            'developer_id' => 'required',
            'manager_id' => 'required',
            
            
        ]);
        if($validator->passes()){
            DB::table('developer_manager')
            ->where('link_id', $link_id)
            ->update([
            'developer_id' => $request->developer_id,
            'manager_id' => $request->manager_id 
            
        ]);         
            return redirect()->route('DeveloperManager')->with('success', 'Link added successfully');
    }
    
        else{
            return redirect()->route('link.edit',$link_id)->withErrors($validator);
         }   



     }
        
    

    public function destroy($link_id)
        {
            
            DB::table('developer_manager')->where('link_id', $link_id)->delete();
            return redirect('/DeveloperManager'); // Redirect back to the index page
        }
     }

