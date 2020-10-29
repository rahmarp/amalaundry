<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Outlet;
use Illuminate\Support\Facades\Auth;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::check()){
            if((Auth::user()->role) == 'superadmin'){
                $paket = Paket::all();
            }
            else{
                $paket = Paket::where('id_outlet', Auth::user()->id_outlet)->get();
            }
        }
        
        return view('paket',['paket' => $paket]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            if((Auth::user()->role) == 'superadmin'){
                $outlet = Outlet::all();
            }
            else{
                $outlet = Outlet::where('id', Auth::user()->id_outlet)->get();
            }
        }
        return view('addpaket',['outlet' => $outlet]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paket = Paket::create($request->all());
        return redirect('/paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket = Paket::all()->find($id);
        if(Auth::check()){
            if((Auth::user()->role) == 'superadmin'){
                $outlet = Outlet::all();
            }
            else{
                $outlet = Outlet::where('id', Auth::user()->id_outlet)->get();
            }
        }

        return view('updatepaket',[
            'paket' => $paket,
            'outlet' => $outlet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_outlet = $request->outlet;
        $nama_paket = $request->nama_paket;
        $jenis = $request->jenis;
        $harga = $request->harga;
        

        $paket = Paket::find($id);
        $paket->id_outlet = $id_outlet;
        $paket->nama_paket = $nama_paket;
        $paket->jenis = $jenis;
        $paket->harga = $harga;

        $paket->save();
        return redirect('paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = paket::find($id);
        $paket->delete();

        return redirect('paket');
    }
}
