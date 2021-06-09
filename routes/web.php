<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeApiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ApiController;
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





Route::get('admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::resource('/', HomeController::class); 
Route::resource('admin/author', AuthorController::class);
Route::resource('admin/news', NewsController::class);

//api
Route::post('api/login', [ApiController::class, 'authenticate']);
Route::post('api/register', [ApiController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('api/logout', [ApiController::class, 'logout']);
    Route::get('api/home', [HomeApiController::class, 'index']);
    Route::get('api/home/{id}', [HomeApiController::class, 'show']);
});