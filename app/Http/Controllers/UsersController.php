<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Outlet;

class UsersController extends Controller
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
                $user = User::join('outlet','outlet.id', '=','users.id_outlet')
                ->select('users.*', 'outlet.nama_outlet')->get();
            }
            
            else {
                $user = User::join('outlet','outlet.id', '=','users.id_outlet')
            ->select('users.*', 'outlet.nama_outlet')
            ->where('users.id_outlet',Auth::user()->id_outlet)
            ->get();
            }

        }
        return view('user',['user' => $user]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role == "admin"){
            $outlet = Outlet::where('id', (Auth::user()->id_outlet))->get();
        }
        else{
            $outlet = Outlet::all();
        }
        return view('adduser',['outlet' => $outlet]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->role);
        $user = new User;
        $user->id_outlet = $request->id_outlet;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;

        $user->save();
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check()){
            $user = User::join('outlet','outlet.id', '=','users.id_outlet')
            ->select('users.*', 'outlet.nama_outlet')
            ->where('users.id_outlet',$id)
            ->get();
        }
        return view('user',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all()->find($id);
        if(Auth::user()->role == "admin"){
            $outlet = Outlet::where('id', (Auth::user()->id_outlet))->get();
        }
        else{
            $outlet = Outlet::all();
        }

        return view('updateuser',[
            'user' => $user,
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
        $user = User::find($id);
        $user->id_outlet = $request->id_outlet;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;

        $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/user');
    }
}
