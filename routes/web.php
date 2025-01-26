<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Artisan;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

//BackEnd
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
Route::resource('sliders',SliderController::class);
Route::resource('abouts',AboutController::class);
Route::resource('experiences',ExperienceController::class);

//FrontEnd
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/certificates', [HomeController::class, 'certificates'])->name('certificates');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/others', [HomeController::class, 'others'])->name('others');
