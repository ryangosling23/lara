<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productpage extends Controller
{
    public function onelist($id)
    {
        $prod = \App\Models\product::where('id', $id)->get();
        return view('productpage', ['prod' => $prod]);
    }
}
