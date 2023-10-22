<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DeliveryChargeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PackageComboController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Admin\ReturnPolicyController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\AuthController;

Route::controller(AuthController::class)->group(function () {

    Route::get('/','loginAdmin')->name('loginAdmin');
    Route::get('/registrationAdmin','registrationAdmin')->name('registrationAdmin');
});

Route::controller(SystemController::class)->group(function () {


});


Route::group(['prefix' => 'admin'], function () {

Route::resource('bannerList', BannerController::class);
Route::resource('contactInfoList', ContactController::class);
Route::resource('deliveryChargeList', DeliveryChargeController::class);
Route::resource('orderList', OrderController::class);
Route::resource('packageCombo', PackageComboController::class);
Route::resource('privacyPolicy', PrivacyPolicyController::class);
Route::resource('productList', ProductController::class);
Route::resource('returnPolicy', ReturnPolicyController::class);
Route::resource('reviewList', ReviewController::class);
Route::resource('socialLinkList', SocialLinkController::class);
Route::resource('systemInfo', SystemController::class);

});


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
