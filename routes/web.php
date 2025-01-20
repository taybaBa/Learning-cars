<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('/signup',[\App\Http\Controllers\SignUpController::class,'create']);
Route::get('/login',[\App\Http\Controllers\LoginController::class,'index']);



//Route::get('/about', function () {
//    return view ('about');
//});
//Route::get('/contact',function (){
//    return view('contact');
//});

//=======Regex Routes=====================
//Route::get('/product/{id}',function (string $category = 'All'){
//    return [
//        "Product for cateogory = $category"];
//
//})->where('id','[a-z]+');
//Route::get('{lang}/product/{cateogory}',function (string $lang,string $category = 'All'){
//    return [
//        "Language = $lang",
//
//        "Product for cateogory = $category"];
//
//})->where(['cateogory'=>'[a-z]+','lang'=>'\d{4,}']);

//===============Named Routes=====================
//Route::get('/', function () {
//    //$aboutURL = '/about';
//    $aboutPageUrl = route('about');
//    dump($aboutPageUrl);
//
//    $productPageURL = route('product.view',['lang' => 'en', 'cateogory' => 'cars']);
//    $productPageURL = route('user');
//    dd($productPageURL);
//    return view('home');
//});
//Route::view('/about','about')->name('about');
//Route::get('/p/{lang}/product/{cateogory}',function (string $lang,string $category = 'All'){
//    return [
//        "Language = $lang",
//        "Product for cateogory = $category"];
//
//})->name('product.view');
//
//Route::get('user/profile',function (){
//
//})->name('profile');
//
//Route::get('/current-user',function (){
////return redirect()->route('profile');
//return to_route('profile');
//})->name('user');

//===============Groups Routes=====================
//Route::prefix('admin')->group(function(){
//    Route::get('/users',function (){
//        return 'admin/users';
//    });
//
//});
//
//Route::name('admin.')->group(function(){
//    Route::get('/users',function (){
//        return '/users'; //route name admin.users
//    })->name('users');
//
//});

//===============Fall back Routes=====================
//Route::fallback(function (){
//    return '404';
//});

//=====challenge=====
//Route::get('/sum/{num1}/{num2}',function (int $num1, int $num2) {
//    $sum   = $num1 + $num2;
//    return 'Sum of ' .$num1. ' and '. $num2 .' is '. $sum ;
//});

//===============Groups Controller Routes=====================
//Route::controller(CarController::class)->group(function(){
//    Route::get('/car','index');
//    Route::get('/my-car','index');
//
//});

//===============Single action Controller=====================
//Route::get('/car/invokeable',\App\Http\Controllers\CarController::class);
//Route::get('/car',[\App\Http\Controllers\CarController::class,'index']);


//===============Resource Controller=====================
//Route::apiresource('/products',ProductController::class)->except('destroy');


//=======challenge 2==========
//Route::get('/sum/{num1}/{num2}',[\App\Http\Controllers\TestController::class,'sum'])->whereNumber(['num1','num2']);
//Route::get('/sub/{num1}/{num2}',[\App\Http\Controllers\TestController::class,'sub'])->whereNumber(['num1','num2']);
