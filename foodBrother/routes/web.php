<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//'as' the simlar name in route
Route::get('home',['as' => 'food.show','uses' => 'homeController@getList']);
// Route::get('home','homeController@getList')->name('food.show');
Route::post('home','addProductController@postAdd');
Route::get('loginForm',"loginController@getLogin")->name('login.show');
Route::post('loginForm',"loginController@login");
Route::post('logout',"loginController@logout");
Route::get('regist',['as'=>'dangnhap','uses'=>'loginController@getRegist']);
Route::post('regist',"loginController@regist");
Route::get('chitiet/{id}','productController@getDetail')->name('chitietsanpham');

Route::get('cart','cartController@getCart')->name('cart.show');
Route::post('cart','cartController@delCart');
Route::get('editPro/{id}','productController@getEdit')->name('edit.show');
Route::post('editPro/{id}','productController@posEdit');

Route::group(['prefix' => 'product'],function(){
    Route::get('add',['as' => 'admin.product.getAdd','uses' => 'ProductContoller@getAdd']);
    Route::post('add',['as' => 'admin.product.postAdd','uses' => 'ProductContoller@postAdd']);
    Route::get('list',['as' => 'admin.product.getList','uses' => 'ProductContoller@getList']);
    Route::get('delete/{id}',['as' => 'admin.product.getDelete','uses' => 'ProductContoller@getDelete']);
    Route::get('edit/{id}',['as' => 'admin.product.getEdit','uses' => 'ProductContoller@getEdit']);
    Route::post('edit/{id}',['as' => 'admin.product.postEdit','uses' => 'ProductContoller@postEdit']);
    Route::get('delimg/{id}',['as' => 'admin.product.getDelImg','uses' => 'ProductContoller@getDelImg']);
    Route::get('listdanhgia',['as' => 'admin.product.listDanhgia','uses' => 'ProductContoller@getDanhgia']);
});

?>

