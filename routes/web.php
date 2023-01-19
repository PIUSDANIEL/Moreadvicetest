<?php


use App\Http\Controllers\Task\Taskcontroller;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();



Route::post('uploadtask',[Taskcontroller::class,'uploadtask'])->name('uploadtask');

Route::get('taskfetch',[Taskcontroller::class,'taskfetch'])->name('taskfetch');


Route::get('taskfetchprogress',[Taskcontroller::class,'taskfetchprogress'])->name('taskfetchprogress');


Route::get('taskfetchblocked',[Taskcontroller::class,'taskfetchblocked'])->name('taskfetchblocked');

Route::get('taskfetchdone',[Taskcontroller::class,'taskfetchdone'])->name('taskfetchdone');

Route::get('taskgetedit/{id}',[Taskcontroller::class,'taskgetedit'])->name('taskgetedit');

Route::get('taskupdate',[Taskcontroller::class,'taskupdate'])->name('taskupdate');

Route::post('taskedit',[Taskcontroller::class,'taskedit'])->name('taskedit');

Route::get('taskview/{id}',[Taskcontroller::class,'taskview'])->name('taskview');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
