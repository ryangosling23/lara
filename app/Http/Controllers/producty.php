<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class producty extends Controller
{
    public function pruduct($name='id', $sort='desc'){
        $prod=\App\Models\product::orderby($name, $sort)->get();
        $cat=\App\Models\category::all();
        return view('catalog',['prod'=>$prod]);
    }

    public function filter($id){
        $prod=\App\Models\product::where('category', $id)->get();
        $cat=\App\Models\category::all();
        return view('catalog', ['prod' =>$prod,'cat'=>$cat]);
    }

    

}
