<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// RUTAS PARA COMPUTER
Route::get('computer/index', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::post('computer', [ComputerController::class, 'store'])->name('api.v1.computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');

// RUTAS PARA AREA
Route::get('area/index', [AreaController::class, 'index'])->name('api.v1.area.index');
Route::post('area', [AreaController::class, 'store'])->name('api.v1.area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('api.v1.area.show');
Route::put('area/{area}', [AreaController::class, 'update'])->name('api.v1.area.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('api.v1.area.destroy');



// RUTAS PARA TRAINING CENTER
Route::get('training_center/index', [TrainingCenterController::class, 'index'])->name('api.v1.training_center.index');
Route::post('training_center', [TrainingCenterController::class, 'store'])->name('api.v1.training_center.store');
Route::get('training_center/{training_center}', [TrainingCenterController::class, 'show'])->name('api.v1.training_center.show');
Route::put('training_center/{training_center}', [TrainingCenterController::class, 'update'])->name('api.v1.training_center.update');
Route::delete('training_center/{training_center}', [TrainingCenterController::class, 'destroy'])->name('api.v1.training_center.destroy');


// RUTAS PARA COURSE
Route::get('course/index', [CourseController::class, 'index'])->name('api.v1.course.index');
Route::post('course', [CourseController::class, 'store'])->name('api.v1.course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('api.v1.course.show');
Route::put('course/{course}', [CourseController::class, 'update'])->name('api.v1.course.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('api.v1.course.destroy');


// RUTAS PARA APPRENTICE
Route::get('apprentice/index', [ApprenticeController::class, 'index'])->name('api.v1.apprentice.index');
Route::post('apprentice', [ApprenticeController::class, 'store'])->name('api.v1.apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('api.v1.apprentice.show');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('api.v1.apprentice.update');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentice.destroy');


// RUTAS PARA TEACHER
Route::get('teacher/index', [TeacherController::class, 'index'])->name('api.v1.teacher.index');
Route::post('teacher', [TeacherController::class, 'store'])->name('api.v1.teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('api.v1.teacher.show');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('api.v1.teacher.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('api.v1.teacher.destroy');