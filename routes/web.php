<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;


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
    return inertia('Home');
});
Route::get('/user', function () {

    return inertia('User', ['users' => User::select('id', 'name')->get()]);
});
Route::get('/settings', function () {
    return inertia('Settings');
});
Route::get('/datatable', UserController::class)->name('datatable');
Route::get('/api/users', function () {
    return datatables(User::select('id', 'name', 'email'))->setRowClass(function ($user) {
        return $user->id % 2 == 0 ? "table-success" : "table-warning";
    })->toJson();
})->name("api.users");
