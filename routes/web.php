<?php

use App\Http\Controllers\QlsvKhoahocController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\REQUEST;
use Illuminate\Support\Facades\DB;


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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//-------------------- Khoá học ------------------------
Route::group(['prefix' => 'khoahoc'], function () {
    Route::get("/index", 'QlsvKhoahocController@index')->name("qlsv_khoahoc.index");
    Route::get('/create', 'QlsvKhoahocController@create')->name('qlsv_khoahoc.create');
    Route::post('/store', 'QlsvKhoahocController@store')->name('qlsv_khoahoc.store');
    Route::get('/edit/{id}', 'QlsvKhoahocController@edit')->name('qlsv_khoahoc.edit');
    Route::post('/update/{id}', 'QlsvKhoahocController@update')->name('qlsv_khoahoc.update');
    Route::get('/delete/{id}', 'QlsvKhoahocController@destroy');
    Route::delete('deleteCheckbox', 'QlsvKhoahocController@deleteAll');
    Route::get('/search', 'QlsvKhoahocController@search');
});

//-------------------- Lớp học  ------------------------
Route::group(['prefix' => 'lophoc'], function () {
    Route::get("/index", 'QlsvLophocController@index')->name("qlsvlophoc.index");
    Route::get('/create', 'QlsvLophocController@create')->name('qlsvlophoc.create');
    Route::post('/store', 'QlsvLophocController@store')->name('qlsvlophoc.store');
    Route::get('/edit/{id}', 'QlsvLophocController@edit')->name('qlsvlophoc.edit');
    Route::post('/update/{id}', 'QlsvLophocController@update')->name('qlsvlophoc.update');
    Route::get('/delete/{id}', 'QlsvLophocController@destroy');
});

//-------------------- Giảng viên ------------------------
Route::group(['prefix' => 'giangvien'], function () {
    Route::get("/index", 'QlsvGiangvienController@index')->name("qlsv_giangvien.index");
    Route::get('/create', 'QlsvGiangvienController@create')->name('qlsv_giangvien.create');
    Route::post('/store', 'QlsvGiangvienController@store')->name('qlsv_giangvien.store');
    Route::get('/edit/{id}', 'QlsvGiangvienController@edit')->name('qlsv_giangvien.edit');
    Route::post('/update/{id}', 'QlsvGiangvienController@update')->name('qlsv_giangvien.update');
    Route::get('/delete/{id}', 'QlsvGiangvienController@destroy');
});


//-------------------- Thời khoá biểu  ------------------------
Route::group(['prefix' => 'thoikhoabieu'], function () {
    Route::get("/index", 'QlsvThoikhoabieuController@index')->name("qlsv_thoikhoabieu.index");
    Route::get('/create', 'QlsvThoikhoabieuController@create')->name('qlsv_thoikhoabieu.create');
    Route::post('/store', 'QlsvThoikhoabieuController@store')->name('qlsv_thoikhoabieu.store');
    Route::get('/edit/{id}', 'QlsvThoikhoabieuController@edit')->name('qlsv_thoikhoabieu.edit');
    Route::post('/update/{id}', 'QlsvThoikhoabieuController@update')->name('qlsv_thoikhoabieu.update');
    Route::get('/delete/{id}', 'QlsvThoikhoabieuController@destroy');
});


//-------------------- Phòng học  ------------------------
Route::group(['prefix' => 'phonghoc'], function () {
    Route::get("/index", 'QlsvPhonghocController@index')->name("qlsv_phonghoc.index");
    Route::get('/create', 'QlsvPhonghocController@create')->name('qlsv_phonghoc.create');
    Route::post('/store', 'QlsvPhonghocController@store')->name('qlsv_phonghoc.store');
    Route::get('/edit/{id}', 'QlsvPhonghocController@edit')->name('qlsv_phonghoc.edit');
    Route::post('/update/{id}', 'QlsvPhonghocController@update')->name('qlsv_phonghoc.update');
    Route::get('/delete/{id}', 'QlsvPhonghocController@destroy');
});

//-------------------- Điểm danh  ------------------------
Route::group(['prefix' => 'diemdanh'], function () {
    Route::get("/index", 'QlsvDiemdanhController@index')->name("qlsv_diemdanh.index");
    Route::get('/create', 'QlsvDiemdanhController@create')->name('qlsv_diemdanh.create');
    Route::post('/store', 'QlsvDiemdanhController@store')->name('qlsv_diemdanh.store');
    Route::get('/edit/{id}', 'QlsvDiemdanhController@edit')->name('qlsv_diemdanh.edit');
    Route::post('/update/{id}', 'QlsvDiemdanhController@update')->name('qlsv_diemdanh.update');
    Route::get('/delete/{id}', 'QlsvDiemdanhController@destroy');
});

//-------------------- sinhvien  ------------------------
Route::group(['prefix' => 'sinhvien'], function () {
    Route::get('index', 'QlsvSinhVienController@index')->name('qlsv_sinhvien.index');
    Route::get('/create', 'QlsvSinhVienController@create')->name('qlsv_sinhvien.create');
    Route::post('/store', 'QlsvSinhVienController@store')->name('qlsv_sinhvien.store');
    Route::get('/edit/{id}', 'QlsvSinhVienController@edit')->name('qlsv_sinhvien.edit');
    Route::post('/update/{id}', 'QlsvSinhVienController@update')->name('qlsv_sinhvien.update');
    Route::get('/delete/{id}', 'QlsvSinhVienController@destroy');
});

//-------------------- kieuthi  ------------------------
Route::group(['prefix' => 'kieuthi'], function () {
    Route::get('/index', 'QlsvKieuthiController@index')->name('qlsv_kieuthi.index');
    Route::get('/create', 'QlsvKieuthiController@create')->name('qlsv_kieuthi.create');
    Route::post('/store', 'QlsvKieuthiController@store')->name('qlsv_kieuthi.store');
    Route::get('/edit/{id}', 'QlsvKieuthiController@edit')->name('qlsv_kieuthi.edit');
    Route::post('/update/{id}', 'QlsvKieuthiController@update')->name('qlsv_kieuthi.update');
    Route::get('/delete/{id}', 'QlsvKieuthiController@destroy');
});

//-------------------- diemthi  ------------------------
Route::group(['prefix' => 'diemthi'], function () {
    Route::get('/index', 'QlsvDiemthiController@index')->name('qlsv_diemthi.index');
    Route::get('create', 'QlsvDiemthiController@create')->name('qlsv_diemthi.create');
    Route::post('store', 'QlsvDiemthiController@store')->name('qlsv_diemthi.store');
    Route::get('/edit/{id}', 'QlsvDiemthiController@edit')->name('qlsv_diemthi.edit');
    Route::post('/update/{id}', 'QlsvDiemthiController@update')->name('qlsv_diemthi.update');
    Route::get('/delete/{id}', 'QlsvDiemthiController@destroy')->name('qlsv_diemthi.delete');
});

//-------------------- monhoc  ------------------------
Route::group(['prefix' => 'monhoc'], function () {
    Route::get('index', 'QlsvMonhocController@index')->name('qlsv_monhoc.index');
    Route::get('/create', 'QlsvMonhocController@create')->name('qlsv_monhoc.create');
    Route::post('/add', 'QlsvMonhocController@store')->name('qlsv_monhoc.store');
    Route::get('/edit/{id}', 'QlsvMonhocController@edit')->name('qlsv_monhoc.edit');
    Route::post('/update/{id}', 'QlsvMonhocController@update')->name('qlsv_monhoc.update');
    Route::get('/delete/{id}', 'QlsvMonhocController@destroy')->name('qlsv_monhoc.destroy');
    Route::get('/find', 'QlsvMonhocController@search')->name('qlsv_monhoc.search');
});

//-------------------- worktask  ------------------------
Route::group(['prefix' => 'worktask'], function () {
    Route::get('index', 'QlsvWorktaskController@index')->name('qlsv_worktask.index');
    Route::get('/create', 'QlsvWorktaskController@create')->name('qlsv_worktask.create');
    Route::post('/store', 'QlsvWorktaskController@store')->name('qlsv_worktask.store');
    Route::get('/edit/{id}', 'QlsvWorktaskController@edit')->name('qlsv_worktask.edit');
    Route::post('/update/{id}', 'QlsvWorktaskController@update')->name('qlsv_worktask.update');
    Route::get('/delete/{id}', 'QlsvWorktaskController@destroy')->name('qlsv_worktask.destroy');
    Route::get('/find', 'QlsvWorktaskController@search')->name('qlsv_worktask.search');
});

//-------------------- worktaskdetail  ------------------------
Route::group(['prefix' => 'worktaskdetail'], function () {
    Route::get('index', 'QlsvWorktaskdetailController@index')->name('qlsv_worktaskdetail.index');
    Route::get('/create', 'QlsvWorktaskdetailController@create')->name('qlsv_worktaskdetail.create');
    Route::post('/store', 'QlsvWorktaskdetailController@store')->name('qlsv_worktaskdetail.store');
    Route::get('/edit/{id}', 'QlsvWorktaskdetailController@edit')->name('qlsv_worktaskdetail.edit');
    Route::post('/update/{id}', 'QlsvWorktaskdetailController@update')->name('qlsv_worktaskdetail.update');
    Route::get('/delete/{id}', 'QlsvWorktaskdetailController@destroy')->name('qlsv_worktaskdetail.destroy');
    Route::get('/find', 'QlsvWorktaskdetailController@search')->name('qlsv_worktaskdetail.search');
});
