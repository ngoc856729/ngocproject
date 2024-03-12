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

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::middleware(['Authcheck','tokencheck','Admincheck'])->group(function () {
    Route::get('/createdroleuser', [UserController::class, 'addRole']);
    Route::delete('/removeroleuser', [UserController::class, 'deleteRole']);
    Route::put('/updateroleuser', [UserController::class, 'UpdateRole']);
    Route::get('/selectuser', [UserController::class, 'select_roles']);
    Route::put('/updateuser', [UserController::class, 'Updateusers']);
    Route::delete('/deleteuser', [UserController::class, 'deleteuser']);
});
Route::middleware(['Authcheck','cookiecheck'])->group(function () {
    Route::get('/usercontrol', [UserController::class, 'role_user']);
    Route::get('/createduser', [UserController::class, 'createduserview']);
});
Route::middleware(['Authcheck','tokencheck','Admincheck'])->group(function () {
    Route::post('/insertuser', [UserController::class, 'insert_users']);
});
Route::get('/', [UserController::class, 'view_login_user']);


