<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DemologController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [SiteController::class, 'index']);
Route::get('/image', [SiteController::class, 'images']);

Route::get('/imageslugable', [SiteController::class, 'imageslugable']);
Route::get('/user_image', [SiteController::class, 'user_image']);



Route::get('cmpermission', [PermissionController::class, 'commandcreate']);

Route::get('cmrole', [RoleController::class, 'commandcreate']);


Route::get('/hasuserimage', [SiteController::class, 'hasuserimage']);
Route::get('/addpermission', [RoleController::class, 'addpermission']);
Route::get('/useraddrole', [RoleController::class, 'useraddrole']);

Route::get('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

// Route::resource('post', PostController::class);
// cần thêm middleware vào trong bootstrap/app để sử dụng role ,permission

Route::get('post/demo', [PostController::class, 'demo']);
Route::get('post/create', [PostController::class, 'create']);
Route::get('post', [PostController::class, 'index'])
    ->middleware(['role_or_permission:admin|post.view']);

Route::get('demo/log', [DemologController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
})->name('home');