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
});
// Route::resource('photos', 'App/Http/Controllers/PhotoController');
Route::resource('items', 'App\Http\Controllers\ItemController');
Route::get('products', 'App\Http\controllers\ItemControllers@showProducts');
Route::get('addProduct', function () {
//新增一筆作法1
    $product = new App\Models\Product;
    $product->title = '手機一台';
    $product->price = '15000';
    $product->desc = 'test';
    $product->enabled = 1;
    $product->cgy_id = 2;
    $product->save();
});
// Route::post(‘tasks’,[‘as’ =>‘tasks.store’,’uses’=>’App\Http\Controllers\TaskController@store’]);
