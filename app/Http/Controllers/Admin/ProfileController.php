<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        $users =User::orderBy('id','ASC')->get();
        
       
        return view('user.index',['users'=>$users]);

    }

    public function create(){
        $users = DB::table('users')->get();

        return view('user.create',['users'=>$users]);
    }


    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            
            
            
        ]);
        if($validator->passes()){
            $user = new User();
            $user->name = $request->name; 
            $user-> email = $request->email; 
            $user->save();
        
            return redirect()->route('profile')->with('success', 'profile updated successfully');
            
        }
        else{
            return redirect()->route('profile.create')->withErrors($validator);
        }
   

    }  


 //function for edit
    public function edit($id){

        $user = DB::table('users')->where('id',$id)->select('*')->first();

        // $modules = Module::findOrFail($module_id);
        
        return view('user.edit',['user' => $user]);
    }
        
    public function update($id,Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required'
               
        ]);
        if($validator->passes()){
            DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email
           
            ]);    
            return redirect()->route('profile')->with('success','user updated successfully');
    }
    
        else{
            return redirect()->route('user.edit',$id)->withErrors($validator);
         }   



     }


//function for delete

public function destroy($id)
{
    DB::table('users')->where('id', $id)->delete();
    return redirect('/profile'); // Redirect back to the index page
}

 
}