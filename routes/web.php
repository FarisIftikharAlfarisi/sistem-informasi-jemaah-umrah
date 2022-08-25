<?php

use App\Models\Category;
use function Ramsey\Uuid\v1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\DataJemaahController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "active" => "about"
    ]);
});


Route::get('/posts',[PostController::class,"index"]);

Route::get('/posts/{post:slug}',[PostController::class,"show"]);

Route::get('/categories',function(){
    return view('categories',[
        "title" => "Posts Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::get('/login',[LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('admin');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',function (){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug']);
Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug',[AdminCategoryController::class,'checkSlug']);
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/dashboard/datajemaah/checkSlug',[DataJemaahController::class,'checkSlug']);
Route::resource('/dashboard/datajemaah', DataJemaahController::class)->middleware('admin');

Route::get('/dashboard/marketing/checkSlug',[MarketingController::class,'checkSlug']);
Route::resource('/dashboard/marketing', MarketingController::class)->middleware('admin');
