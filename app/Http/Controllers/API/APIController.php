<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\KeranjangRequest;

class APIController extends Controller
{
    public function index(){
        $product = Product::all();

        return response($product);
    }
    public function getProductMakanan(){
        $product = Product::where('kategori', 'makanan')->get();

        return response($product);
    }
    public function getProductKue(){
        $product = Product::where('kategori', 'kue')->get();

        return response($product);
    }
    public function getProductPeralatan(){
        $product = Product::where('kategori', 'peralatan')->get();

        return response($product);
    }

    public function getCart(){
        $user = Cart::where('users_id', auth()->user()->id)->get();
        
        $user->load(['product', 'user']);

        return response($user);
    }

    public function postToCart(KeranjangRequest $request){
        $cart = new Cart();
        $cart->fill($request->all());
        $cart->users_id = auth()->user()->id;

        $cart->save();
        $cart->load(['product', 'user']);
        
        return response($cart);
    }
}
