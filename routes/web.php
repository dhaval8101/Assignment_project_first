<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserviewController;

use App\Http\Controllers\TransactionController;

use App\Http\Controllers\HomeController;

 Auth::routes();


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
//welcome page Route
Route::get('/', function () {
    return view('welcome');
});


Route::view('login','login');
Route::get('/logout',[HomeController::class,'logout'])->name('login.check');
Route::post('register',[RegisterController::class,'create']);
//Home Page route
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Account Route
Route::view('account','account');
//Account table  store data
Route::post('account',[AccountController::class,'adddata']);
//Account table display page
Route::get('display',[AccountController::class,'formdata']);
//Account update, delete Route
Route::get('delete/{id}',[AccountController::class,'delete']);
Route::get('updatea/{id}',[AccountController::class,'updateshow']);
Route::post('update',[AccountController::class,'update']);
Route::view('update','update');
//Account User Route
Route::view('/usershow/user/{id}','user');
Route::get('/usershow/{id}',[UserviewController::class,'usershow'])->name('usershow');
Route::post('/usershow/user/{id}',[UserviewController::class,'userview']);
Route::view('hello/{account_id}','hello');
Route::get('/helloshow/hello/{account_id}',[TransactionController::class,'formdata']);
Route::get('/helloshow/{id}',[TransactionController::class, 'index'])->name('index');
Route::post('/helloshow/{id}',[TransactionController::class,'store']);
Route::get('/helloshow/hello/{account_id}',[TransactionController::class,'create']);

// Route::get('deletedata/{id}',[UserviewController::class,'delete_data']);
Route::get('viewdata/{id}',[UserviewController::class,'viewdata']);

Route::post('dataupdate',[UserviewController::class,'datauser']);
//Account User update and delete route
// Route::post('delete/{id}',[UserviewController::class,'destroy'])->name('destroy');
// Route::get('updatedata/{id}',[UserviewController::class,'updatedata']);
// Route::post('dataupdate/{id}',[UserviewController::class,'updateuser']);
Route::view('dataupdate','dataupdate');
Route::get('usershow/{id}', [UserviewController::class, 'usershow']);
Route::delete('usershow/{id}', [UserviewController::class, 'delete'])->name('usershow.delete');




//Transaction Update and Delete
Route::get('destroy/{id}',[TransactionController::class,'destroy']);
Route::get('update/{id}',[TransactionController::class,'updateid']);
Route::post('updatetransaction',[TransactionController::class,'update']);
Route::view('updatetransaction','updatetransaction');



 //Transaction Page Route 
Route::get('/helloshow/{id}',[TransactionController::class, 'index'])->name('index');
Route::post('/helloshow/add_transaction/{account_id}',[TransactionController::class,'store']);
Route::get('/helloshow/add_transaction/{id}',[TransactionController::class,'create']);
Route::get('index', [TransactionController::class, 'show'])->name('index.show');
Route::post('index',[TransactionController::class,'showtransaction']);


Route::get('/deletetransaction/{id}',[TransactionController::class, 'destroy'])->name('destroy');
Route::get('editTransaction/{id}',[TransactionController::class, 'updateid'])->name('updateid');
Route::put('/transaction/update/{id}', [TransactionController::class, 'update'])->name('update');

Route::post('transactionshow',[TransactionController::class,'showTransaction']);
Auth::routes(); 

