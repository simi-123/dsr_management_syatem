<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $users = User::with(['Role'])->orderBy('id','DESC')->get();
        // dd($users);

        return view('users.index', compact('users'));
    }

    /**
     * Show form for creating user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $roles = Role::whereStatus(1)->get();
        // dd($roles);
        return view('users.create', compact('roles'));
    }
    /**
     * Store a newly created user
     * 
     * @param User $users
     * @param StoreUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request) 
    {   
        
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request['password']);
        $user->role = $request->input('role');
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    

    /**
     * Show user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the user from the database
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Return the user data
        return response()->json($user);
    }

    /**
     * Edit user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) 
    {
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update user data
     * 
     * @param User $user
     * @param UpdateUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UpdateUserRequest $request) 
    {
        $user->update($request->validated());

        $user->syncRoles($request->get('role'));

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request['password']);
        $user->role = $request->input('role');
        $user->save();
    
        return redirect()->route('user.index')
        ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Delete user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
            $user =User::findOrFail($id); // Find the task with the specified ID
            $user->delete(); // Delete the task

        return redirect()->route('user.index')
            ->withSuccess(__('User deleted successfully.'));
    }
    
}

