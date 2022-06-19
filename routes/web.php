<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\personController;

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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', [homeController::class, 'index'])->name('index.index');

Route::get('/about', [homeController::class, 'about'])->name('index.about');


// Route::get('/greetings', function () {
//   $datas = [
//     [ 
//       "name" => 'Abby'
//     ]
//   ];
//   return $datas;
// });

// Route::get('/greetings', function () {
//   $datas = [
//     "name" => "Abby"
//   ];
//   return view('routesTest', $datas);
// });

// Route::get('/greetings', [homeController::class, 'greetings']);


// Route::get('/dog/{dogName}', function ($dogName) {
//   $datas = [
//     "name" => "Abby",
//     "dogName" => $dogName
//   ];
//   return view('routesTest', $datas);
// });

Route::get('/dog/{dogName}', [homeController::class, 'dog']);

Route::get('/cat', function () {
  // 這裡輸入 params key
  $catNumbers = request('catNumbers');
  // 有指定的話顯示
  if(isset($catNumbers)) {
    $datas = [
      "catNumbers" => strip_tags($catNumbers)
    ];
    return view('cat', $datas);
  } else {
    // 沒指定的話顯示
    $datas = [
      "catNumbers" => '很多'
    ];
    return view('cat', $datas);
  }
});

Route::get('/shop/{category?}/{item?}', function ($a = null, $b = null) {
  if(isset($a)) {
    if(isset($b)) {
      return "你正在瀏覽商店${a}分類的${b}品項";
    }
  } 
  return '你正在瀏覽商店的所有商品';
});

Route::get('/people/add', [personController::class, 'add']);
Route::post('/people/create', [personController::class, 'create']);
