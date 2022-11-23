<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(Request $request, $id = null){

      $categori = Category::all();
      $products = Product::where('name','LIKE','%'.$request->search.'%')->paginate(6);
      return view('shop.index', compact('products', 'categori', 'id'));
    }

    public function show($id){
      $product = Product::findOrFail($id);
      return view('shop.show', compact('product'));
    }

    public function Category($id){
        $categori = Category::all();
        $products = Product::where('category_id', $id)->paginate(6);
        return view('shop.index', compact('products', 'categori','id'));
    }

}
