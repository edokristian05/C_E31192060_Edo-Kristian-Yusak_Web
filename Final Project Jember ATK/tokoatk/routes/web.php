<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::livewire('/', 'home')->name('home');
Route::livewire('/produks','product-index')->name('produks');
Route::livewire('/produks/kategori/{kategoriId}','produk-kategori')->name('produks.kategori');
Route::livewire('/produks/{id}','produk-detail')->name('produks.detail');
Route::livewire('/keranjang','keranjang')->name('keranjang');
Route::livewire('/checkout','checkout')->name('checkout');
Route::livewire('/history','history')->name('history');