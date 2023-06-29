<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();
class CartController extends Controller
{
  public function save_cart(Request $request)
  {
    $productId = $request->productID_hidden;
    $quantity = $request->quantity;
    $cart = DB::table('tbl_product')->where('product_id', $productId)->get();
    $category_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'desc')->get();
    $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'desc')->get();

    return view('pages.cart.show_cart')->with('category', $category_product)->with('brand', $brand_product);
    // 
  }
}
