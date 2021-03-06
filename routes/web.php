<?php

// use App\Http\Controllers\User\Usercontroller;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| Here is where you can register web routes for your application. These
| Here is where you can register web` routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| contains the "web" middleware group. Now create something great!
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=> false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/add-roles', function(){
    $roles = [
        ['name' => 'admin', 'guard_name' => 'web'],
        ['name' => 'author', 'guard_name' => 'web'],
        ['name' => 'editor', 'guard_name' => 'web'],
    ];
    $role = Role::insert($roles);
    return 'success';
});


require('admin.php');
