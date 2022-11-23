<?php

namespace App\Http\Controllers;

use App\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $carts = Cart::where('user_id', Auth::user()->id)->get();
      return view('cart.index', compact('carts'));
    }

    public function create(Request $request){
      $duplicate = Cart::where('product_id', $request->product_id)->first();

      if($duplicate){
        return redirect('/cart')->with('error','Barang sudah ada di cart!');
      }
      Cart::create([
        'user_id' => Auth::user()->id,
        'product_id' => $request->product_id,
        'qty' => 1
      ]);
      return redirect('/cart')->with('success','Barang Berhasil ditambahkan dalam cart!');
    }

    public function update(Request $request, $id){
      Cart::where('id', $id)->update([
        'qty' => $request->quantity
      ]);
      return response()->json([
        'success' => true
      ]);
    }
}
