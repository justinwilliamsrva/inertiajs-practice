<?php

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
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

Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LoginController::class,'destroy'])->name('logout')->middleware('auth');




Route::middleware(['auth'])->group(function () {


    Route::get('/', function () {
        return inertia('Home');
    })->name('home');
    Route::get('/user', function () {

        return inertia('User', [
            'users' => User::query()
                ->when(Request::input("search"), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->select("id", "name", "email")
                ->paginate(10)
                ->withQueryString(),
            'filters' => Request::only(['search']),
            'can' => ['createUser'=> Auth::user()->can("create", User::class)]

        ]);
    });

    Route::post('/user', function () {
        //validate
        $attributes = Request::validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',


        ]);
        //create user
        User::create($attributes);

        //redirect
        return redirect('/user');
    });


    Route::get('/user/create', function () {

        return inertia('CreateUsers');
    })->middleware('can:create,App\Models\User');


    Route::get('/settings', function () {
        return inertia('Settings');
    });
    Route::get('/datatable', UserController::class)->name('datatable');
    Route::get('/api/users', function () {
        return datatables(User::select('id', 'name', 'email'))->setRowClass(function ($user) {
            return $user->id % 2 == 0 ? "table-success" : "table-warning";
        })->toJson();
    })->name("api.users");
});
