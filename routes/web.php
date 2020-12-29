<?php

use App\Http\Controllers\PageController;
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

Route::get('/',[
    'as'=> 'trang-chu',
    'uses' => 'PageController@getIndex'
]);



Route::get('lienhe', [
    'as'=>'lienhe',
    'uses'=>'PageController@getLienHe'
]);

Route::get('adminabc',[
    'as'=> 'index-admin',
    'uses' => 'PageController@getIndexAdmin'
]);

Route::get('admin-add-form',[
    'as'=> 'getadminadd',
    'uses' => 'PageController@getAdminAdd'
]);

Route::post('admin-add',[
    'as'=> 'adminadd',
    'uses' => 'PageController@postAdminAdd'
]);

Route::get('admin-edit-form/{id}',[
    'as'=> 'getadminedit',
    'uses' => 'PageController@getAdminEdit'
]);

Route::post('admin-edit',[
    'as'=> 'adminedit',
    'uses' => 'PageController@postAdminEdit'
]);

Route::post('admin-delete/{id}',[
    'as'=> 'admindelete',
    'uses' => 'PageController@postAdminDelete'
]);
