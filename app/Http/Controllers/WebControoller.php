<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IlluminateSupportFacadesAuth;
use IlluminateSupportFacadesSession;
use DB;
use App;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Auth;
use app\Requests;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use App\Item; 
use App\Cart; 



class WebControoller extends Controller
{
public function index(){

      if ( session('success'))
        {
         Alert::success('Success Title', 'Success Message');
        }

    $data = Item::with('images')->get();


		return view('/index',compact('data'));
	}

	 public function showDetails(Request $request ,$id)
    {

    
    
    	 if($request->ajax()){

       
      	$data = Item::with('images')->findOrFail($id);
           // return response()->json(['result' => $data]);

       if($data){
           $page = view('myModel')->with('data',$data)->render();
       // dd($page);
             return Response(['page'=>$page , 'success'=>true]);

            }

   }
    

    }

     public function addToCart(Item $product) {
        
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);
        //dd($cart);

        session()->put('cart', $cart);
         return redirect('/')->with('success', 'Data Added successfully.');
    }

     public function showCart() {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        return view('show', compact('cart'));
    }

     public function update(Request $request, Item $product)
    {
        $request->validate([
            'qty' => 'required|numeric'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);
        return redirect('/showCart')->with('success', 'Product updated');
    }

    public function remove(Item $product)
    {
        $cart = new Cart( session()->get('cart'));
        $cart->remove($product->id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect('/showCart')->with('success', 'Product was removed');

    }

    public function like(Request $request,$id){
         $user=auth()->user()->name;
$data = Item ::findOrFail($id);
        if($data->like==0){
        $like=1;
        $user=auth()->user()->name;
        $form_data = array(
            'like'       => $like ,
            'user_name' => $user );
         Item::whereId($id)->update($form_data);
        }


        else{
        $like=0;
        $user=null;
        $form_data = array(
            'like'       => $like ,
            'user_name' => $user );
         Item::whereId($id)->update($form_data);
        // $form_data = array(
        //     'status'       => $status );
     }
                    return redirect('/');


       }

       public function checkout($amount) {
            return view('checkout',compact('amount'));
    }
    
        public function charge(Request $request) {

       // dd($request->stripeToken);
          $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => ' Test from laravel new app'
        ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...
            // clearn cart 

            session()->forget('cart');  
       
            return redirect('/')->with('success', " Payment was done. Thanks");

        } else {
            return redirect()->back();
        }
    }
    



}