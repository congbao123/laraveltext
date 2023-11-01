<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Thêm khai báo lớp Product
use App\Models\BillDetail; // Thêm khai báo lớp BillDetail
use App\Models\Slide;

class PageController extends Controller
{


    public function getIndexAdmin()
    {
        $products = Product::all();
        return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => count(BillDetail::all())]);
    }	
  
  public function getAdminAdd() {
    return view('pageadmin.formAdd');
  }
  public function postAdminAdd(Request $request)							
   {							
     $product = new Product();							
     if ($request->hasFile('inputImage')) {							
     $file = $request->file('inputImage');							
     $fileName = $file->getClientOriginalName('inputImage');							
     $file->move('source/image/product', $fileName);							
     }							
     $file_name = null;							
     if ($request->file('inputImage') != null) {							
     $file_name = $request->file('inputImage')->getClientOriginalName();							
     }			    					
     $product->name = $request->inputName;							
     $product->image = $file_name;							
     $product->description = $request->inputDescription;							
     $product->unit_price = $request->inputPrice;							
     $product->promotion_price = $request->inputPromotionPrice;							
     $product->id_type = $request->inputType;							
     $product->unit = $request->inputUnit;							
     $product->save();							
     $product->new = $request->inputNew;							
return $this->getIndexAdmin();							
 }							

    // public function getIndex(){	
    //     $slide =Slide::all();
    // 	//return view('page.trangchu',['slide'=>$slide]);
    //            $new_product = Product::where('new',1)->get();	
    //     //dd($new_product);	
    // 	return view('page.trangchu',compact('slide','new_product'));
	
    // }	      

        // public function getmaster() {
        //     return view('master');
        // }
        // public function getIndex(){			
        //     return view('page.trangchu');		
        // }	
        // public function getLoaiSp(){				
        //     return view('page.loai_sanpham');			
        // }		
        // public function getChitiet(){			
        //     return view('page.chitietsanpham');			
        //     }			
        //     public function getLienhe(){		
        //         return view('page.lienhe');		
        //         }	
        //         public function getAbout(){		
        //             return view('page.about');		
        //             }		
                        
    }
