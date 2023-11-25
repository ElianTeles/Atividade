<?php
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('post', [PostController::class,'getAll']);
Route::post('post', [PostController::class,'createPost']);
Route::patch('post/{id}', [PostController::class,'updatePost']);
Route::delete('post/{id}', [PostController::class,'deletePost']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
