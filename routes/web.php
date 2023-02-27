<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware'=>"web"],function(){

    Route::view('form','form');
    Route::view('login','login');


    Route::post('login',[FormController::class,'logindata']);
    Route::get('display',[FormController::class,'formdata']);
  
    Route::post('form',[FormController::class,'adddata']);   
    Route::get('delete/{id}',[FormController::class,'delete']); 
    Route::get('update/{id}',[FormController::class,'update']);
    Route::post('update',[FormController::class,'updatedata']);
    Route::view('update','update');
  
    Route::view('upload','upload');
    Route::post('/upload',[FormController::class,'upload']);

    Route::view('profile','profile');
  

Route::get('/logout', function() {
if(session()->has('email'))
{

    session()->pull('email',null);

}
return redirect('login');

});


Route::get('/login', function() {
    if(session()->has('email'))
    {
    
return redirect('profile');
    
    }
    return view('login');
    
    });
});

