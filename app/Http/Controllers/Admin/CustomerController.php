<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    { 

        $customers = Customer::orderBy('customer_id','ASC')->get();
        
    //    dd($customers);
        return view('admin.modules.Customer.index',['customers'=>$customers]);

    }
    
    public function create(){
        return view('admin.modules.customer.Create');
    }

    

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'code' => 'required',
            'name' => 'required',
            'address' =>'required',
            'status' =>'required',
            
            
        ]);
        if($validator->passes()){
            $customer = new Customer();
            $customer-> code = $request->code; 
            $customer-> name = $request->name; 
            $customer->address = $request->address; 
            $customer->status = $request->status; 
            $customer->save();
            $request->session();

            return redirect()->route('CustomerMaster')->with('success', 'Customers added successfully');
            
        }
        else{
            return redirect()->route('customer.create')->withErrors($validator);
        }
              
    }
     public function edit($customer_id){
        $customers = customer::findOrFail($customer_id);
        
        return view('admin.modules.Customer.edit',['customer' => $customers]);
    }
        
    public function update($customer_id,Request $request){
        $validator = Validator::make($request->all(),[
            'code' => 'required',
            'name' => 'required',
            'address' =>'required',
            'status' =>'required',
            
            
        ]);
        if($validator->passes()){
            $customer =  Customer::find($customer_id);
            $customer-> code = $request->code; 
            $customer-> name = $request->name; 
            $customer->address = $request->address; 
            $customer->status = $request->status; 
            $customer->save();
            
            return redirect()->route('CustomerMaster')->with('success', 'Customers added successfully');
    }
    
        else{
            return redirect()->route('customer.edit',$customer_id)->withErrors($validator);
         }   



     }

    public function destroy($id)
        {
            $task =Customer::findOrFail($id); // Find the task with the specified ID
            $task->delete(); // Delete the task
            return redirect('/CustomerMaster'); // Redirect back to the index page
        }
     }
