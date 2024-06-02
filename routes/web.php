<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PostController;



use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProductController as SanPhamController;
use App\Http\Controllers\backend\MenuController as MnuController;

use App\Http\Controllers\backend\BrandController as ThuonghieuController;

use App\Http\Controllers\backend\CategoryController as DanhmucController;
use App\Http\Controllers\backend\TopicController as TopiController;
use App\Http\Controllers\backend\PostController as BaiDangController;
use App\Http\Controllers\backend\ContactController as LienheController;
use App\Http\Controllers\backend\UserController as NguoidungController;
use App\Http\Controllers\backend\BannerController as BanController;














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

; 
Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('/san-pham',[ProductController::class,"index"])->name('site.product');
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,"product_detail"])->name('site.product.detail');
Route::get('/lien-he',[ContactController::class,"index"])->name('site.contact');
Route::prefix('admin')->group(function () {
    Route::get("/", [AdminController::class, "index"])->name('admin.index');


    Route::prefix('product')->group(function () {
        Route::get("/", [SanPhamController::class, "index"])->name('admin.product.index');
        Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
        Route::get("create", [SanPhamController::class, "create"])->name('admin.product.create');
        Route::post("store", [SanPhamController::class, "store"])->name('admin.product.store');
        Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
        Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
        Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
        Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
        Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');   
});

Route::prefix('category')->group(function () {
    Route::get("/", [DanhmucController::class, "index"])->name('admin.category.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [DanhmucController::class, "create"])->name('admin.category.create');
    Route::post("store", [DanhmucController::class, "store"])->name('admin.category.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});


Route::prefix('brand')->group(function () {
    Route::get("/", [ThuonghieuController::class, "index"])->name('admin.brand.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [ThuonghieuController::class, "create"])->name('admin.brand.create');
    Route::post("store", [ThuonghieuController::class, "store"])->name('admin.brand.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});


Route::prefix('menu')->group(function () {
    Route::get("/", [MnuController::class, "index"])->name('admin.menu.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [ThuonghieuController::class, "create"])->name('admin.brand.create');
    Route::post("store", [MnuController::class, "store"])->name('admin.menu.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});


Route::prefix('topic')->group(function () {
    Route::get("/", [TopiController::class, "index"])->name('admin.topic.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [ThuonghieuController::class, "create"])->name('admin.brand.create');
    Route::post("store", [TopiController::class, "store"])->name('admin.topic.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});

Route::prefix('post')->group(function () {
    Route::get("/", [BaiDangController::class, "index"])->name('admin.post.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [ThuonghieuController::class, "create"])->name('admin.brand.create');
    Route::post("store", [BaiDangController::class, "store"])->name('admin.post.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});

Route::prefix('contact')->group(function () {
    Route::get("/", [LienheController::class, "index"])->name('admin.contact.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [ThuonghieuController::class, "create"])->name('admin.brand.create');
    Route::post("store", [LienheController::class, "store"])->name('admin.contact.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});

Route::prefix('user')->group(function () {
    Route::get("/", [NguoidungController::class, "index"])->name('admin.user.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [NguoidungController::class, "create"])->name('admin.user.create');
    Route::post("store", [NguoidungController::class, "store"])->name('admin.user.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});

Route::prefix('banner')->group(function () {
    Route::get("/", [banController::class, "index"])->name('admin.banner.index');
    Route::get("trash", [ProductController::class, "trash"])->name('admin.product.trash');
    Route::get("create", [NguoidungController::class, "create"])->name('admin.user.create');
    Route::post("store", [banController::class, "store"])->name('admin.banner.store');
    Route::get("eidt/{id}", [ProductController::class, "eidt"])->name('admin.product.eidt');
    Route::get("update/{id}", [ProductController::class, "update"])->name('admin.product.update');
    Route::get("delete/{id}", [ProductController::class, "delete"])->name('admin.product.delete');
    Route::get("restore/{id}", [ProductController::class, "restore"])->name('admin.product.restore');
    Route::get("destroy/{id}", [ProductController::class, "destroy"])->name('admin.product.destroy');
});
});
        