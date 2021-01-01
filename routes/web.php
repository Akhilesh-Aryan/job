<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('work.home');
});


//Route::get("/search",[CompanyController::class,"show"])->name("search");

Route::prefix("company")->group(function(){
    
    Route::get("/profile",[CompanyController::class,"index"])->name("company.profile")->middleware('auth');
    Route::post('profile',[CompanyController::class,"store"])->name("company.profile.insert")->middleware('auth');
   
    Route::get('/jobs',[CompanyController::class,"jobView"])->name("company.jobs")->middleware('auth');
    Route::post('jobs',[CompanyController::class,"jobViewCreate"])->name("company.job.insert")->middleware('auth');
    Route::get('/jobs/delete/{job}',[CompanyController::class,"destroy"])->name("company.jobs.delete")->middleware('auth');

});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');