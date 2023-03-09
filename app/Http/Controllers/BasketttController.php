<?php

namespace App\Http\Controllers;

use App\Models\baskettt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class basketttcontroller extends Controller
{
     public function baskets(){
       
        $id_user =Auth::user()->id;     
        $p = baskettt::where("user_id", $id_user)->get();
        Auth::user()->id;
        return view('basket', compact('p'));
     }

     public function productsbasket($id){
          $test=baskettt::create([
         'user_id'=>Auth::user()->id,
         'product_id'=>$id,
         'quantity'=> 1,
      ]
    );
        return redirect('catalog');
     }

     public function deletebasket($id){
      baskettt::find($id)->delete();
      return redirect()->route('bskt');
     }

   //   public function showes($add=0){
   //    $a=DB::table('catalogs')->get();
   //    return view('catalog',["a"=>$a, "add"=>$add])
   //   }

}

?>