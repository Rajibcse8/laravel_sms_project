<?php



namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;
use DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $datas['purchases'] = Purchase::with('user')->get();
       // $purchases=DB::select("select * from purchases ");
        return view('purchase.index',$datas);
      //$purchases=Purchase::with('user')->get();
        //return view('purchase.index',compact('purchases'));

      //  $purchases = Purchase::with('users')->get();
      //  return view('purchase.index',compact('purchases'));*/
    }

   
    public function create()

    {
        return view('purchase.create');
    }

   
    public function store(Request $request)
    {

    

         
 
           $purchase =Purchase::create(['purchase_amount'=>$request->amount,
           'purchase_quantity'=>$request->quantity,'purchase_type'=>$request->Purchase_type,
           'creater_purchase_id'=>auth()->id()]);
           $purchase->save();


           $user = DB::table('stocks')->where('id', 1)->first();
           $amount= $user->smsquantity;
           $amount+=$request->quantity;

           DB::table('stocks')
            ->where('id', 1)
            ->update(['smsquantity' =>$amount ]);



           return redirect('/dashboard')->with('success','Purchase successfully created');;
           
            			
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

  
    
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

 
    
    public function destroy(Purchase $purchase)
    {
        //
    }

    public function reportcreate(){
        return view('purchase.purchasereport');
    }

    public function reportstore(Request $request){

        $datas = Purchase::whereBetween('created_at', [$request->startdate, $request->enddate])->get();
      
        return view('purchase.showreport',compact('datas'));
      
    }



    public function test(){

       
        $datas = Purchase::with('user')->orderBy('id')->get();

       //if($datas)dd('okk');
       //else dd('not okk');
       echo $datas;
    }
    public function test2(){

       
        $datas = Purchase::with('user')->orderBy('id')->get();

       //if($datas)dd('okk');
       //else dd('not okk');
       echo $datas;
    }
}
