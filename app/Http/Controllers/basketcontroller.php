<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basketcontroller extends Controller
{
     public function baskets(){
        $id_user=Auth::user()->id;
        $p=basket::where("user_id",$id_user)->get();
        Auth::user()->id;
        return('basket',compact('p'))
     }
}
