<?php

use App\Http\Livewire\Admindashboard;
use App\Http\Livewire\Admincourses;
use App\Http\Livewire\Adminteacher;
use App\Http\Livewire\Index;
use App\Http\Livewire\Adminstudent;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/admindashboard', function () {
    return view('admindashboard');
});
// Route::get('/admindashboard/student', function () {
//     return view('adminstudent');
// });
// Route::get('/admindashboard/teacher', function () {
//     return view('adminteacher');
// });

Route::get('/admindashboard/courses',Admincourses::class);
Route::get('/admindashboard/teacher',Adminteacher::class);
Route::get('/admindashboard',Admindashboard::class);
Route::get('/admindashboard/student',Adminstudent::class);
Route::get('/',Index::class);

// route
