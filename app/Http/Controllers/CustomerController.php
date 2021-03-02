<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
   
    
    public function index()
    {
        $data['customers']=DB::select("select * from customers ");
        return view('customer.index',$data);


      /*  $purchases = Purchase::with('users')->get();
        return view('purchase.index',compact('purchases'));*/
    }

   
    
    public function create()
    {
        return view('customer.create');
       
      
    }

  
    
    public function store(Request $request)
    {

       
       
        /*   $customer=Customer::create([
              'customer_name'=>$request->customer_name,
              'customer_address'=>$request->customer_address,
              'status'=>$request->status,
              'creater_customer_id'=>auth()->id()
            ]);
            $customer->save();

            return redirect('/dashboard');*/
    }

   
    
    public function show(Customer $customer)
    {
       
        
    }

   
    
    public function edit(Customer $customer)
    {
        //
    }

   
    
    public function update(Request $request, Customer $customer)
    {
        //
    }

  
    
    public function destroy(Customer $customer)
    {
        //
    }

}
