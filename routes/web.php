<?php
use Illuminate\Support\Facades\{Route,Auth};
use App\Http\Controllers\{HomeController,RolesController,PermissionsController,UsersController,AdminController,ManagerController};
use App\Http\Controllers\Admin\{CustomerController,ProjectController,ModuleController,TaskController,DeveloperController,DeveloperManagerController,ProgressController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

 
Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
 });
 
Route::get('admin',function(){ return view('admin');})->name('admin')->middleware('admin');

Route::get('manager',function(){
    return view('manager');
})->name('manager')->middleware('manager');

Route::get('developer',function(){return view('developer');})->name('developer')->middleware('developer');

Auth::routes();
 
Route::get('/home', [HomeController::class,'index'])->name('home');

//Routes for customer master:
Route::get('/CustomerMaster',[CustomerController::class,'index'])->name('CustomerMaster');

Route::get('/CustomerMaster/create',[CustomerController::class,'create'])->name('customer.create');

Route::post('/CustomerMaster',[CustomerController::class,'store'])->name('customer.store');

Route::get('/CustomerMaster/{customer_id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');

Route::put('/CustomerMaster/{customer_id}', [CustomerController::class, 'update'])->name('customer.update');

Route::delete('/CustomerMaster/{customer_id}', [CustomerController::class, 'destroy'])->name('customer.destroy');


//Routes for project master:
Route::get('/ProjectMaster',[ProjectController::class,'index'])->name('ProjectMaster');

Route::get('/ProjectMaster/create',[ProjectController::class,'create'])->name('ProjectMaster.create');

Route::post('/ProjectMaster',[ProjectController::class,'store'])->name('ProjectMaster.store');

Route::get('/ProjectMaster/{project_id}/edit',[ProjectController::class,'edit'])->name('ProjectMaster.edit');

Route::put('/ProjectMaster/{project_id}',[ProjectController::class,'update'])->name('ProjectMaster.update');

Route::DELETE('/ProjectMaster/{project_id}',[ProjectController::class,'destroy'])->name('ProjectMaster.destroy');



//Routes for module master:
Route::get('/ModuleMaster',[ModuleController::class,'index'])->name('ModuleMaster');

Route::get('/ModuleMaster/create',[ModuleController::class,'create'])->name('module.create');

Route::post('/ModuleMaster',[ModuleController::class,'store'])->name('module.store');

Route::get('/ModuleMaster/{module_id}/edit', [ModuleController::class, 'edit'])->name('module.edit');

Route::put('/ModuleMaster/{module_id}', [ModuleController::class, 'update'])->name('module.update');

Route::delete('/ModuleMaster/{module_id}', [ModuleController::class, 'destroy'])->name('module.destroy');



//Routes for Task
Route::get('/TaskMaster',[TaskController::class,'index'])->name('TaskMaster');

Route::get('/TaskMaster/create',[TaskController::class,'create'])->name('task.create');

Route::post('/TaskMaster',[TaskController::class,'store'])->name('task.store');

Route::get('/TaskMaster/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');

Route::put('/TaskMaster/{id}', [TaskController::class, 'update'])->name('task.update');

Route::delete('/TaskMaster/{id}', [TaskController::class, 'destroy'])->name('task.destroy');





//Routes for Developer master
Route::get('/DeveloperMaster',[DeveloperController::class,'index'])->name('DeveloperMaster');

Route::get('/DeveloperMaster/create',[DeveloperController::class,'create'])->name('Developer.create');

Route::post('/DeveloperMaster',[DeveloperController::class,'store'])->name('Developer.store');

Route::get('/DeveloperMaster/{id}/edit', [DeveloperController::class, 'edit'])->name('Developer.edit');

Route::put('/DeveloperMaster/{id}', [DeveloperController::class, 'update'])->name('Developer.update');

Route::delete('/DeveloperMaster/{id}', [DeveloperController::class, 'destroy'])->name('Developer.destroy');



//Routes for developer manager link
Route::get('/DeveloperManager',[DeveloperManagerController::class,'index'])->name('DeveloperManager');

Route::get('/DeveloperManager/create',[DeveloperManagerController::class,'create'])->name('link.create');

Route::post('/DeveloperManager',[DeveloperManagerController::class,'store'])->name('link.store');

Route::get('/DeveloperManager/{link_id}/edit',[DeveloperManagerController::class,'edit'])->name('link.edit');

Route::put('/DeveloperManager/{link_id}',[DeveloperManagerController::class,'update'])->name('link.update');

Route::delete('/DeveloperManager/{link_id}', [DeveloperManagerController::class, 'destroy'])->name('link.destroy');




//Routes for Task Progress Master
Route::get('/TaskProgress',[ProgressController::class,'index'])->name('ProgressMaster');

Route::get('/TaskProgress/create',[ProgressController::class,'create'])->name('progress.create');

Route::post('/TaskProgress',[ProgressController::class,'store'])->name('progress.store');

Route::get('/TaskProgress/{id}/edit',[ProgressController::class,'edit'])->name('progress.edit');

Route::put('/TaskProgress/{id}',[ProgressController::class,'update'])->name('progress.update');

Route::delete('/ProgressMaster/{id}', [ProgressController::class, 'destroy'])->name('progress.destroy');


//Route for users
Route::resource('users',UsersController::class);

// Route for roles & permission
Route::resource('roles',RolesController::class);
Route::resource('permissions',PermissionsController::class);
