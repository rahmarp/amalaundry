<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

class CartController extends Controller
{
    public function store(Request $request, $id)
    {   
        $product = Paket::all()->find($id);
             

            $cart = session()->get('cart');

            //if cart is empty then add the product
            if (!$cart) {
                $cart[$id] = [
                    "id_paket" => $product->id,
                    "nama_paket" => $product->nama_paket,
                    "harga" => $product->harga,
                    "quantity" => 1
                ];

                session()->put('cart', $cart);
                return redirect()->back()->with('success','Produk telah ditambahkan ke keranjang belanja anda');
            }

            //if product already exist in cart then increase the quantity
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
 
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Produk telah ditambahkan ke keranjang belanja anda');
            }

            //if product doesnt exist in cart then add the product
            $cart[$id] = [
                    "id_paket" => $product->id,
                    "nama_paket" => $product->nama_paket,
                    "harga" => $product->harga,
                    "quantity" => 1
            ];
            
            session()->put('cart', $cart);
            return redirect()->back()->with('success','Produk telah ditambahkan ke keranjang belanja anda');
        
    }
}
