<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
 

class KiemTraController extends Controller
{ 
      public function getindex(){	
        $products =Product::orderBy('id','DESC')->get();

    	return view('shopchu',compact('products'));
      }
    }
