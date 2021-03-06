<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\Stock;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
   
    
    public function index()
    {

        $datas['customers'] = Customer::with('user')->get();
         return view('customer.index',$datas);


      /*  $purchases = Purchase::with('users')->get();
        return view('purchase.index',compact('purchases'));*/
    }

   
    
    public function create()
    {
        return view('customer.create');
       
      
    }

  
    
    public function store(Request $request)
    {

       
       
           $customer=Customer::create([
              'customer_name'=>$request->customer_name,
              'customer_address'=>$request->customer_address,
              'status'=>$request->status,
              'creater_customer_id'=>auth()->id()
            ]);
            $customer->save();

            return redirect('/dashboard')->with('sucsess','Costomer Created Successfully');
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


    public function reportcreate(){


    
       // $datas['status'] = Customer::distinct('status')->pluck('status');
        $datas['user'] = User::get();
 
        return view('customer.customerreport',$datas);


       // $users = Customer::select('name')->distinct()->get();



    }

    public function reportstore(Request $request){

        $startdate=$request->startdate;
        $enddate=$request->enddate;
        $name=$request->name;

       if(empty($name) && empty($startdate)  && empty($enddate)){
            return redirect('customer')->with('error','Ypu must have to  fil input field ');
            
            //msgg plz enter value
       }

       if($startdate>$enddate){
        return redirect('/dashboard');
        //with erroe msg plz entrr valid duration
       }

      if(empty($name)){
      
        if(empty($startdate) && !empty($enddate)){

            $datas = customer::with('user')->
            whereBetween('created_at', [$enddate, $enddate] )->get();
            return view('customer.showreport',compact('datas'));
            
        }

        if(!empty($startdate) && empty($enddate)){

                $datas = customer::with('user')->
                where('created_at', '=','startdate' )->get();
                return view('customer.showreport',compact('datas'));
        }

        else{

            $datas = customer::with('user')->
            whereBetween('created_at', [$startdate, $enddate] )->get();
            return view('customer.showreport',compact('datas'));
        }

      }

      if(!empty($name)){


        if(empty($startdate) && !empty($enddate)){

            $datas = customer::with('user')->
            whereBetween('created_at', [$enddate, $enddate] )
            ->where('creater_customer_id','=',$name)->get();
            return view('customer.showreport',compact('datas'));

        }

        if(!empty($startdate) && empty($enddate)){

                $datas = customer::with('user')->
                where('created_at'.'=', '$startdate')
                ->where('creater_customer_id','=',$name)->get();
                return view('customer.showreport',compact('datas'));
        }

        if(!empty($startdate) && !empty($enddate)){

            $datas = customer::with('user')->
            whereBetween('created_at', [$startdate, $enddate] )
            ->where('creater_customer_id','=',$name)->get();
            return view('customer.showreport',compact('datas'));
        }

        if(empty($startdate) && empty($enddate)){

            $datas = customer::with('user')
            ->where('creater_customer_id','=',$name)->get();
            return view('customer.showreport',compact('datas'));
        }



      }


}

}
