<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\WebCmsController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/login', [IndexController::class, 'login'])->name('login');
// Route::get('/', [IndexController::class, 'login'])->name('index');
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/news', [IndexController::class, 'news'])->name('news');
Route::get('/political-detail', [IndexController::class, 'political_detail'])->name('political-detail');
Route::get('/political-point', [IndexController::class, 'political_point'])->name('political-point');
Route::get('/politics', [IndexController::class, 'politics'])->name('politics');
Route::get('/presidential-score-detail', [IndexController::class, 'presidential_score_detail'])->name('presidential-score-detail');
Route::get('/volunteer', [IndexController::class, 'volunteer'])->name('volunteer');
Route::post('/volunteer-submit', [IndexController::class, 'volunteer_submit'])->name('volunteer-submit');
Route::get('/watch-list', [IndexController::class, 'watch_list'])->name('watch-list');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [IndexController::class, 'contact_submit'])->name('contact-submit');



Route::group(['middleware' => 'auth'], function()
{


    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/home', [HomeController::class, 'user_profile'])->name('user_profile');
    Route::get('/profile', [HomeController::class, 'user_profile'])->name('user_profile');
    Route::get('/user-profile', [HomeController::class , 'user_profile'])->name('user_profile');

    Route::get('/update-password', [HomeController::class , 'update_password'])->name('update_password');
    Route::post('/user-password-update', [HomeController::class, 'user_passwordupdate'])->name('user_passwordupdate');

    Route::get('logo-favicon', [HomeController::class , 'logo'])->name('logo');
    Route::post('change_logo', [HomeController::class , 'change_logo'])->name('change_logo');

    Route::post('/user-info-update', [HomeController::class, 'user_infoupdate'])->name('user_infoupdate');
    Route::post('/user-photo-update', [HomeController::class, 'upload_image'])->name('upload_image');
    Route::post('/profile-submit', [HomeController::class, 'profile_submit'])->name('profile_submit');
    Route::post('/user-updates', [HomeController::class , 'user_updates'])->name('user_updates');


    Route::post('/cms_create', [GenericController::class , 'cms_generator'])->name('cms_generator');
    Route::post('/modalform', [GenericController::class , 'modalform'])->name('modalform');


    Route::post('/{slug?}/create', [GenericController::class , 'crud_generator'])->name('crud_generator');


    Route::get('/attributes', [GenericController::class , 'roles'])->name('roles');
    Route::get('/attribute/{slug}', [GenericController::class , 'listing'])->name('listing');
    Route::post('/delete-record', [GenericController::class , 'delete_record'])->name('delete_record');

    Route::post('/generic-submit', [GenericController::class , 'generic_submit'])->name('generic_submit');
    Route::post('/assign-role-submit', [GenericController::class , 'roleassign_submit'])->name('roleassign_submit');
    Route::post('/role-assign-modal', [GenericController::class , 'role_assign_modal'])->name('role_assign_modal');

    Route::get('web-config', [HomeController::class , 'web_config'])->name('web_config');
    Route::post('config-update', [HomeController::class , 'config_update'])->name('config_update');

    Route::post('cms-generator', [WebCmsController::class, 'cms_generator'])->name('cms.generator');
    Route::get('banners-cms', [WebCmsController::class, 'banners'])->name('banners.cms');
    Route::get('home-cms', [WebCmsController::class, 'home'])->name('home.cms');
    Route::get('politics-cms', [WebCmsController::class, 'politics'])->name('politics.cms');



});






