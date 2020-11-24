<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = \App\Member::where('nama_member', 'LIKE', "%{$cari}%")->get();
            return response()->json($data);
        }
    }
}
