<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/*
        ПРИМЕЧАНИЕ: при тестировании АПИ использовать
        Content-Type: application/json
        Accept: application/json
*/

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teachers/{teacher_id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('groups', [GroupController::class, 'index'])->name('teacher.index');
Route::get('groups/{group_id}', [GroupController::class, 'show'])->name('teacher.show');


