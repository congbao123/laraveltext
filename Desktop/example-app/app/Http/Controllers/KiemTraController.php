<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baitap;
 

class KiemTraController extends Controller
{ 
      public function getindex(){	
        $baitap =Baitap::orderBy('id','DESC')->get();

    	return view('shopchu',compact('baitap'));
      }

     public function show($id) {
      $baitap =Baitap::find($id);
      return view('chitiet',['baitap'=>$baitap]);
     }
     public function search(Request $request) {
      $query = $request->input('query');
      $baitap =Baitap::where('na_me','like','%'.$query.'%')->get();
      return view('search',['baitap'=>$baitap,'query'=>$query]);
     }

}
