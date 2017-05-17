<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');

});
Route::get('/master', function () {
    return view('master');
});
Route::get('/index', function () {
    return view('index');
});



Route::get('pengguna','penggunaController@awal');
Route::get('pengguna/tambah','penggunaController@tambah');
Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get('karyawan','karyawanController@awal');
Route::get('karyawan','karyawanController@awal');
Route::get('karyawan/tambah','karyawanController@tambah');
Route::get('karyawan/lihat/{karyawan}','karyawanController@lihat');
Route::post('karyawan/simpan','karyawanController@simpan');
Route::get('karyawan/edit/{karyawan}','karyawanController@edit');
Route::post('karyawan/edit/{karyawan}','karyawanController@update');
Route::get('karyawan/hapus/{karyawan}','karyawanController@hapus');

Route::get('harga','hargaController@awal');
Route::get('harga/tambah','hargaController@tambah');
Route::get('harga/lihat/{harga}','hargaController@lihat');
Route::post('harga/simpan','hargaController@simpan');
Route::get('harga/edit/{harga}','hargaController@edit');
Route::post('harga/edit/{harga}','hargaController@update');
Route::get('harga/hapus/{harga}','hargaController@hapus');

Route::get('tamu','tamuController@awal');
Route::get('tamu/tambah','tamuController@tambah');
Route::get('tamu/lihat/{tamu}','tamuController@lihat');
Route::post('tamu/simpan','tamuController@simpan');
Route::get('tamu/edit/{tamu}','tamuController@edit');
Route::post('tamu/edit/{tamu}','tamuController@update');
Route::get('tamu/hapus/{tamu}','tamuController@hapus');

Route::get('fasilitas','fasilitasController@awal');
Route::get('fasilitas/tambah','fasilitasController@tambah');
Route::get('fasilitas/lihat/{fasilitas}','fasilitasController@lihat');
Route::post('fasilitas/simpan','fasilitasController@simpan');
Route::get('fasilitas/edit/{fasilitas}','fasilitasController@edit');
Route::post('fasilitas/edit/{fasilitas}','fasilitasController@update');
Route::get('fasilitas/hapus/{fasilitas}','fasilitasController@hapus');


Route::get('fasilitas_kamar','fasilitas_kamarController@awal');
Route::get('fasilitas_kamar/tambah','fasilitas_kamarController@tambah');
Route::get('fasilitas_kamar/lihat/{fasilitas_kamar}','fasilitas_kamarController@lihat');
Route::post('fasilitas_kamar/simpan','fasilitas_kamarController@simpan');
Route::get('fasilitas_kamar/edit/{fasilitas_kamar}','fasilitas_kamarController@edit');
Route::post('fasilitas_kamar/edit/{fasilitas_kamar}','fasilitas_kamarController@update');
Route::get('fasilitas_kamar/hapus/{fasilitas_kamar}','fasilitas_kamarController@hapus');

Route::get('kamar','kamarController@awal');
Route::get('kamar/tambah','kamarController@tambah');
Route::get('kamar/lihat/{kamar}','kamarController@lihat');
Route::post('kamar/simpan','kamarController@simpan');
Route::get('kamar/edit/{kamar}','kamarController@edit');
Route::post('kamar/edit/{kamar}','kamarController@update');
Route::get('kamar/hapus/{kamar}','kamarController@hapus');

Route::get('check_out','check_outController@awal');
Route::get('check_out/tambah','check_outController@tambah');
Route::get('check_out/lihat/{check_out}','check_outController@lihat');
Route::post('check_out/simpan','check_outController@simpan');
Route::get('check_out/edit/{check_out}','check_outController@edit');
Route::post('check_out/edit/{check_out}','check_outController@update');
Route::get('check_out/hapus/{check_out}','check_outController@hapus');

Route::get('check_in','check_inController@awal');
Route::get('check_in/tambah','check_inController@tambah');
Route::get('check_in/lihat/{check_in}','check_inController@lihat');
Route::post('check_in/simpan','check_inController@simpan');
Route::get('check_in/edit/{check_in}','check_inController@edit');
Route::post('check_in/edit/{check_in}','check_inController@update');
Route::get('check_in/hapus/{check_in}','check_inController@hapus');

Route::get('transaksi','transaksiController@awal');
Route::get('transaksi/tambah','transaksiController@tambah');
Route::get('transaksi/lihat/{transaksi}','transaksiController@lihat');
Route::post('transaksi/simpan','transaksiController@simpan');
Route::get('transaksi/edit/{transaksi}','transaksiController@edit');
Route::post('transaksi/edit/{transaksi}','transaksiController@update');
Route::get('transaksi/hapus/{transaksi}','transaksiController@hapus');
