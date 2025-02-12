<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SkillController;

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

//FrontEnd
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
Route::get('/skill', [HomeController::class, 'skill'])->name('skill');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/course', [HomeController::class, 'course'])->name('course');
Route::get('/certificate', [HomeController::class, 'certificate'])->name('certificate');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/add-contact', [HomeController::class, 'addContact'])->name('add-contact');
Route::get('/other', [HomeController::class, 'other'])->name('other');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/dashboard', function () {
//    return view('backend.home');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //BackEnd
//    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
    Route::resource('sliders',SliderController::class);
    Route::resource('abouts',AboutController::class);
    Route::resource('experiences',ExperienceController::class);
    Route::resource('projects',ProjectController::class);
    Route::resource('contacts',ContactController::class);
    Route::resource('services',ServiceController::class);
    Route::resource('courses',CourseController::class);
    Route::resource('skills',SkillController::class);
});

require __DIR__.'/auth.php';
