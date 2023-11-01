<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\hoteRequest;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CreateTable;
use App\Http\Controllers\KiemTraController;
use App\Models\Baitap;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/tong','cong@tinhtong' );
// Route::post('/tong','cong@cong' );
// bài adminpage
// Route::get('admin', function () {
//     return view('adminpage');
// });
// Route::get('/admin', [admincontroller::class, 'index']);
// Route::post('/admin', [admincontroller::class, 'addRoom']);  
    Route::get('/', function () {
        return view('welcome');
    }); 
    Route::get('/trangchu', [KiemTraController::class, 'getindex']); 
    Route::get('/trangchu2', [KiemTraController::class, 'gettrangchu']); 

    // Route::get('/admin', [PageController::class, 'getIndexAdmin']); 
    // Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');														
    // Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);											

//    Route::get('/index', [PageController::class, 'getmaster']); 
//    Route::get('/trangchu', [PageController::class, 'getIndex']);
//    Route::get('/loai-san-pham', [PageController::class, 'getLoaiSp']);  
//    Route::get('/chitietsanpham', [PageController::class, 'getChitiet']);  
//    Route::get('/lienhe', [PageController::class, 'getLienhe']);  
//    Route::get('/about', [PageController::class, 'getAbout']);  

    // Route::get('index', [
    //     'as' => 'master',
    //     'uses' => 'PageController@getIndex'
    // ]);
    // Route::get('loai-san-pham',[				
    //     'as'=>'page.loai_sanpham',			
    //     'uses'=>'PageController@getLoaiSp'			
    //     ]);		

    //     Route::get('chi-tiet-san-pham',[				
    //         'as'=>'chitietsanpham',			
    //         'uses'=>'PageController@getChitiet'			
    //         ]);			
                        
    //         Route::get('lien_he',[				
    //             'as'=>'lienhe',			
    //             'uses'=>'PageController@getLienhe'			
    //             ]);	

    //             Route::get('gioi_thieu',[				
    //                 'as'=>'about',			
    //                 'uses'=>'PageController@getAbout'			
    //                 ]);			
                
            
        // Route::get('/sql', [CreateTable::class,'table']);