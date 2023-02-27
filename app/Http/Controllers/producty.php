<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class producty extends Controller
{
    public function pruduct($name='id', $sort='desc'){
        $prod=\App\Models\product::orderby($name, $sort)->get();
        return view('catalog',['prod'=>$prod]);
    }
}
