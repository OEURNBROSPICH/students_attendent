<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Php;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::any('/Student', function () {
    return view('Student.index');
 }); 
Route::get('/Student',[ProfileController::class,'show_Student']);

//Student Form

Route::any('/Student', function () {
    return view('Student.Student_form');
});

//Student Detail

Route::get('/User', function () {
    return view('Student.User_detail');
});

Route::get('/user_detial_Process',
[ProfileController::class,'user_detial_Process']
)->name('user_detial_Process')->where('id','name','name');

//Student Form
Route::get('/Student_form',
[ProfileController::class,'Student_form']
)->name('Student_form');

Route::post('/student_form_process',
[ProfileController::class,'student_form_process']
)->name('student_form_process');

//Home1
Route::get('/Home1', function () {
    return view('Home1.your');
});

require __DIR__.'/auth.php';
