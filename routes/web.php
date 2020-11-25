<?php
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('photos', 'App/Http/Controllers/PhotoController');
Route::resource('items', 'App\Http\Controllers\ItemController');
Route::get('products', 'App\Http\controllers\ItemControllers@showProducts');
Route::get('addProduct', function () {
//新增一筆作法1
    // $product = new App\Models\Product;
    // $product->title = '手機一台';
    // $product->price = '1500';
    // $product->desc = 'test';
    // $product->enabled = 0;
    // $product->cgy_id = 8;
    // $product->save();
    //新增一筆作法2

    App\Models\Product::create(['title' => '商品2', 'price' => 114514, 'desc' => 'test', 'enabled' => 1, 'cgy_id' => 2]);
    //使用Item的create()來新增
    //mess assignment保護機制困難

});
Route::get('query/{id}', function ($id) {
    $product = \App\Models\Product::find($id);
    dd($product);
});
// 查詢資料
// 單筆資料
// //用流水號進行查詢，找不到就算了
// $item = Item::find($id);

// //用流水號進行查詢，找不到會報錯
// $item = Item::findOrFail($id);

// //查詢有啟用的商品,取出第一個
// $item = Item::where('enabled',true)->first();
// 多筆資料
// //取得items表格的所有資料
// $items = Item::get();

// //取得items表格的所有資料，並依created_at欄位由大至小排序
// $items = Item::orderBy('created_at','desc')->get();

// //取得items表格的所有enabled欄位為true的資料
// $items = Item::where('enabled',true)->get();

Route::get('change/{id}', function ($id) {
    $product = \App\Models\Product::find($id);
    $product->price = 12500;
    $product->save();
    //第二種作法
    // $song = Song::updateOrCreate(['id'=>$song->id],['name'=>'Song99']);
});
Route::get('delete/{id}', function ($id) {
    $product = \App\Models\Product::find($id);
    //使用資料參考來刪除
    $product->delete();
    //使用主鍵來刪除
    // \App\Models\Product::destroy($product->id);
});
