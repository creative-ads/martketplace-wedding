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

use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminProfileController;

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/about', 'AboutController@index')
    ->name('about');

Route::get('/explore', 'ExploreController@index')
    ->name('explore');

Route::get('/explore/cari', 'ExploreController@cari')
    ->name('explore_cari');

Route::get('/payment', 'PaymentController@index')
    ->name('payment');

Route::get('/payment/detail/{id}', 'PaymentController@detail')
    ->name('payment_detail');

Route::get('/payment/detail/tf/{id}', 'PaymentController@detailtf')
    ->name('payment_detail_tf');

Route::post('/payment/midtrans/callback', 'PaymentController@callback')
    ->name('midtrans_callback');

Route::post('/kirimbukti', 'PaymentController@kirimbukti')
    ->name('kirimbukti')
    ->middleware(['auth', 'verified']);

Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail');

Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth', 'verified']);

Route::get('/transaksi', 'CheckoutController@transaksi')
    ->name('transaksi')
    ->middleware(['auth', 'verified']);

Route::get('/user', 'UserController@index')
    ->name('user')
    ->middleware(['auth', 'verified']);

Route::post('/user/edit-profile-submit', 'UserController@profile_submit')
    ->name('user_edit_profile_submit')
    ->middleware(['auth', 'verified']);

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('wedding-package', 'WeddingPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('rekening', 'RekeningController');
        Route::resource('transaction', 'TransactionController');
        Route::post('transaction/kirimbukti', 'TransactionController@kirimbukti')->name('transaction.kirimbukti');

        Route::get('slide/view', 'AdminSlideController@index')->name('admin_slide_view');
        Route::get('slide/add', 'AdminSlideController@add')->name('admin_slide_add');
        Route::post('slide/store', 'AdminSlideController@store')->name('admin_slide_store');
        Route::get('slide/edit/{id}', 'AdminSlideController@edit')->name('admin_slide_edit');
        Route::post('slide/update/{id}', 'AdminSlideController@update')->name('admin_slide_update');
        Route::get('slide/delete/{id}', 'AdminSlideController@delete')->name('admin_slide_delete');
        Route::get('/setting', [AdminSettingController::class, 'index'])->name('admin_setting');
        Route::post('/setting/update', [AdminSettingController::class, 'update'])->name('admin_setting_update');
        Route::get('/users', 'MemberController@index')->name('admin_users');
        Route::get('/users/show/{id}', 'MemberController@show')->name('admin_users_show');
        Route::get('/users/edit/{id}', 'MemberController@edit')->name('admin_users_edit');
        Route::post('/users/update', 'MemberController@profile_submit')->name('admin_users_update');
        Route::get('/users/delete/{id}', 'MemberController@delete')->name('admin_users_delete');
        Route::get('/users/add', 'MemberController@add')->name('admin_users_add');
        Route::post('/users/store', 'MemberController@store')->name('admin_users_store');
        Route::get('/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');
        Route::post('/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
    });

// Auth::routes(['verify' => true]);
Auth::routes(['verify' => false]);
