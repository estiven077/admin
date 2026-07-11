<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

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




// Area
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/index',[AreaController::class,'index'])->name('area.index');
Route::get('area/show/{id}', [AreaController::class, 'show'])->name('area.show');

// Computer
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/index',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/show/{id}', [ComputerController::class, 'show'])->name('computer.show');

// Training_center
Route::get('training_center/create', [TrainingCenterController::class, 'create'])->name('training_center.create');
Route::post('training_center/store', [TrainingCenterController::class, 'store'])->name('training_center.store');
Route::get('training_center/index',[TrainingCenterController::class,'index'])->name('training_center.index');
Route::get('training_center/show/{id}', [TrainingCenterController::class, 'show'])->name('training_center.show');

// Couse
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/index',[CourseController::class,'index'])->name('course.index');
Route::get('course/show/{id}', [CourseController::class, 'show'])->name('course.show');

// Apprentice
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/index',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('apprentice/show/{id}',[ApprenticeController::class,'show'])->name('apprentice.show');

// Teacher
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/index',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/show/{id}', [TeacherController::class, 'show'])->name('teacher.show');

//APRENTICE
Route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update');


 Route::delete('apprentice/{aprrentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');
 Route::get('apprentice/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');

 //AREA
 Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');


 Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
 Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');


//COMPUTER
 Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');


 Route::delete('computer/{curso}',[ComputerController::class,'destroy'])->name('computer.destroy');
 Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');

 //COURSE
 Route::put('course/{course}',[CourseController::class,'update'])->name('course.update');


 Route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');
 Route::get('course/{course}/editar',[CourseController::class,'edit'])->name('course.edit');

 //TEACHER
 Route::put('teacher/{course}',[TeacherController::class,'update'])->name('teacher.update');


 Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
 Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');
 
//TRAINING_CENTER
Route::put('training_center/{training_center}', [TrainingCenterController::class, 'update'])->name('training_center.update');
Route::delete('training_center/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training_center.destroy');
Route::get('training_center/{training_center}/editar', [TrainingCenterController::class, 'edit'])->name('training_center.edit');