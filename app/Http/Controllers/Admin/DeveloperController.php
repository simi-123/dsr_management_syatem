<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DeveloperController extends Controller
{
    public function index()
    { 

        $developers =Developer::orderBy('id','ASC')->get();
        
       
        return view('admin.modules.developer.list',['developers'=>$developers]);

    }

    public function create(){
        return view('admin.modules.developer.create');
    }


    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'developer_name' => 'required',
            'developer_email' => 'required',
            'password' => 'required',
            'developer_type' => 'required',
            'auth_token' => 'required',
            
        ]);
        if($validator->passes()){
            $developer = new Developer();
            $developer->developer_name = $request->developer_name; 
            $developer->developer_email = $request->developer_email;
            $password = $request->input('password');
            $encryptedPassword = md5($password);
            $developer->password = $encryptedPassword;
            $developer->developer_type = $request->developer_type; 
            $developer->auth_token = $request->auth_token;  
            $developer->save();
        
            return redirect()->route('DeveloperMaster')->with('success', 'developers details added successfully');
            
        }
        else{
            return redirect()->route('Developer.create')->withErrors($validator);
        }
   

    }  


 //function for edit
    public function edit($id){

        $developer = DB::table('developers')->where('id',$id)->select('*')->first();

        // $modules = Module::findOrFail($module_id);
        
        return view('admin.modules.developer.edit',['developer' => $developer]);
    }
        
    public function update($id,Request $request){
        $validator = Validator::make($request->all(),[
            $developer_name = $request->developer_name,
            $developer_email = $request->developer_email,
            $password = $request->input('password'),
            $encryptedPassword = md5($password),
            $developer_type = $request->developer_type,
            $auth_token = $request->auth_token,
               
        ]);
        if ($validator->passes()) {
            DB::table('developers')
            ->where('id', $id)
            ->update([
                'developer_name' => $developer_name,
                'developer_email' => $developer_email,
                'password' => $encryptedPassword,
                'developer_type' => $developer_type,
                'auth_token' => $auth_token
            ]);
            return redirect()->route('DeveloperMaster')->with('success','Developer details updated successfully');
    }
    
        else{
            return redirect()->route('Developer.edit',$id)->withErrors($validator);
         }   



     }


//function for delete

public function destroy($id)
{
    DB::table('developers')->where('id', $id)->delete();
    return redirect('/DeveloperMaster'); // Redirect back to the index page
}

 
}

