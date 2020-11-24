<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use Carbon\Carbon;
use App\Transaction;

class TransactionController extends Controller
{
    public function index()
    {        
        $paket = Paket::all();
        $date = Carbon::now();
        $afterdate = Carbon::now()->subDays(-3);
        
        if (session()->get('cart')) {
            $count = count(session()->get('cart'));
            $products = session()->get('cart');
          } else {
            $count = 0;
            $products = 0;
          }
          $products = session()->get('cart');
          
         

        return view('addtransaksi',[
            'paket'=> $paket,
            'date' => $date,
            'afterdate' => $afterdate,
            'count' => $count,
            'products' => $products
            ]);
    }

    public function store()
    {
      dd('masuk');
      // $transaction = new Transaction;
      // $total = 0;
      // foreach (session('cart') as $id => $details){
      //   $total += $details['harga'] * $details['quantity'];
      // }
      // $transaction->id_outlet = Auth::user()->id_outlet;
      // $transaction->id_member = $request->member;
      // $transaction->tanggal = $request->tanggal;
      // $transaction->batas_waktu = $request->bataswaktu;
      // $transaction->tgl_bayar = $request->tgl_bayar;
      // $transaction->biaya_tambahan = 0;
      // $transaction->diskon = $request->diskon;
      // $transaction->pajak = $request->pajak;
      // $transaction->status = $request->status;
      // $transaction->bayar = $request->bayar;
      // $transaction->id_user = Auth::User()->id;
      // $transaction->save();

      // $t = Transaction::latest()->pluck('id')->first();
      // foreach (session('cart') as $id => $details) {
      //     $detailTransaction = new DetailTransaction;
      //     $detailTransaction->id_transaction = $t;
      //     $detailTransaction->id_paket = $details['id_paket'];
      //     $detailTransaction->qty = $details['quantity'];
      //     // $detailTransaction->harga = $details['harga'] * $details['quantity'];
      //     $detailTransaction->save();
      // }

      // $request->session()->flush();

    }
}
