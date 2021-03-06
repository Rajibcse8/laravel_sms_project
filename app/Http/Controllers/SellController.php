<?php

namespace App\Http\Controllers;

use App\Sell;
use App\Customer;
use App\User;
use Illuminate\Http\Request;
use DB;

class SellController extends Controller
{
    
    
    public function index()
    {

        $datas['sellers'] = Sell::with('user','customers')->get();
      
         return  view('sell.index',$datas);
        
    }

    
    public function create()
    {

        $data['nameid']=Customer::get();
        return view('sell.create',$data);
    }

    
    
    public function store(Request $request)
    {
        $user = DB::table('stocks')->where('id', 1)->first();
        $amount= $user->smsquantity;
       
        if($amount>$request->quantity){

            if($request->startdate>$request->enddate){
                return redirect('/dashboard')->with('error','Enter valid date Range');
                //Enter valid date Range
        }
        else{

            $sell =Sell::create(['client_id'=>$request->name,
            'quantity'=>$request->quantity,'startdate'=>$request->startdate,
            'enddate'=>$request->enddate,
            'seller_id'=>auth()->id(),
           'sell_status'=>$request->status]);
            $sell->save();
    
            $amount-=$request->quantity;
    
    
            DB::table('stocks')
            ->where('id', 1)
            ->update(['smsquantity' =>$amount ]);  
    
            return redirect('/dashboard')->with('success','Succesfully sale make and update total stock ');

        }

       

        }
        else {

            return redirect('/dashboard')->with('error','You dont have enough stock');

        }
      /*  if($request->quantiry >> $amount){
           
        }
       
        if($request->quantiry<=$amount){
            if($request->startdate>$request->enddate){
                return redirect('/dashboard')->with('error','Enter valid date Range');
                //Enter valid date Range
            }

        $sell =Sell::create(['client_id'=>$request->name,
        'quantity'=>$request->quantity,'startdate'=>$request->startdate,
        'enddate'=>$request->enddate,
        'seller_id'=>auth()->id(),
       'sell_status'=>$request->status]);
        $sell->save();

        $amount-=$request->quantity;


        DB::table('stocks')
        ->where('id', 1)
        ->update(['smsquantity' =>$amount ]);  

        return redirect('/dashboard')->with('success','Succesfully sale make and update total stock ');
        
    
    }

    else{
          
        return redirect('/dashboard')->with("success','You dont' have enough stock ");
        
      }

     
         /*
          $user = DB::table('stocks')->where('id', 1)->first();
        $amount= $user->smsquantity;
        $amount+=$request->quantity;

         */

    }

   
    
    public function show(Sell $sell)
    {
        //
    }

    
    
    public function edit(Sell $sell)
    {
        //
    }

    
    
    public function update(Request $request, Sell $sell)
    {
        //
    }


    
    public function destroy(Sell $sell)
    {
        
        
    }

    public function reportcreate(){
        $data['names']=Customer::get();
        return view('sell.sellrepot',$data);
    }

    public function sellreportstore(Request $request){
       
        if($request->startdate>$request->enddate){
             return redirect('/dashboard')->with('error','Pleze enter valid duration');
             //with erroe msg plz entrr valid duration
        }



        if(empty($request->name)){

               if( (empty($request->startdate)||empty($request->enddate)) ||(empty($request->startdate)&& empty($request->enddate) )){
                   return redirect('/dashboard')->with('error'," You did't  pick any data from input field");
               }

               else{

                $datas = Sell::with('customers')->
                whereBetween('enddate', [$request->startdate, $request->enddate] )->get();

                $sum=0;
                foreach($datas as $data){
                    $sum+=$data->quantity;
                }
                
                return view('sell.showsellreport',compact('datas','sum'));
               

               }

        }

        if(!empty($request->name)){


            if(!empty($request->startdate) && !empty($request->enddate)){

                $datas = Sell::with('customers')->
                whereBetween('enddate', [$request->startdate, $request->enddate] )
                ->where('client_id','=',$request->name)->get();
                
                $sum=0;
                foreach($datas as $data){
                    $sum+=$data->quantity;
                }
                
                return view('sell.showsellreport',compact('datas','sum'));
                
            }

            if(empty($request->startdate) && empty($request->enddate)){

                $datas = Sell::with('customers')->
                where('client_id','=',$request->name)->get();

                
                $sum=0;
                foreach($datas as $data){
                    $sum+=$data->quantity;
                }
                return view('sell.showsellreport',compact('datas','sum'));
                
            }
            if(empty($request->startdate) || ($request->enddate)){

                return redirect('/dashboard')->with('error','At this case you must have to fill both date field');;
            //msggg  you must havr to fill both fate range

            }


           



        }





      //  if($!empty())
      /*  $datas = Sell::with('customers')->
        whereBetween('enddate', [$request->startdate, $request->enddate] )
        ->where('client_id','=',$request->name)->get();
      
        return view('sell.showsellreport',compact('datas'));*/
        
      

            

    }

        
    }

   
