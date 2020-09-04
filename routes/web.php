<?php

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

// 3【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう。

<?php
Route:get('XXX', 'AAAController@bbb');
?>

<!--// 4【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう。-->

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});