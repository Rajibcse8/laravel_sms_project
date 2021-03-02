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

           return redirect('/dashboard');
            			
           
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


    public function test(){

       
        $datas = Purchase::with('user')->orderBy('id')->get();

       //if($datas)dd('okk');
       //else dd('not okk');
       echo $datas;
    }
}
