<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TasksController;
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


Auth::routes([
    'reset' => false,
]);
//
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Employee routes
Route::resource('employees', EmployeeController::class)->only([
    'index', 'create', 'store', 'update', 'destroy'
]);

//Tasks routes
Route::resource('tasks', TasksController::class);

//Attendance routes
Route::get('/attendance', function () {
    return view('attendances.index');
})->name('attendance.index');
Route::get('/attendance/new', function () {
    return view('attendances.create');
})->name('attendance.create');


//Reports routes
Route::get('/report/punctuality', function () {
    return view('report.punctuality');
})->name('report.punctuality');
Route::get('/report/productivity', function () {
    return view('report.productivity');
})->name('report.productivity');
Route::get('/report/efficiency', function () {
    return view('report.efficiency');
})->name('report.efficiency');


//profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

//settings routes
Route::name('settings.')->group(function () {

    //department routes
    Route::get('/department', [SettingsController::class, 'departments'])->name('departments');
    Route::post('/department/add', [SettingsController::class, 'addDepartment'])->name('addDepartment');
    Route::post('/department/update/{id}', [SettingsController::class, 'updateDepartment'])->name('updateDepartment');
    Route::post('/department/delete/{id}', [SettingsController::class, 'deleteDepartment'])->name('deleteDepartment');

    //department routes
    Route::get('/position', [SettingsController::class, 'position'])->name('positions');
    Route::post('/position/add', [SettingsController::class, 'addPosition'])->name('addPosition');
    Route::post('/position/update/{id}', [SettingsController::class, 'updatePosition'])->name('updatePosition');
    Route::post('/position/delete/{id}', [SettingsController::class, 'deletePosition'])->name('deletePosition');

    //comments views

    Route::get('/comments', [CommentsController::class, 'index'])->name('comments');
    Route::post('/comments/add', [CommentsController::class, 'addComment'])->name('addComment');
    Route::post('/comments/update/{id}', [CommentsController::class, 'updateComment'])->name('updateComment');
    Route::get('/comments/delete/{id}', [CommentsController::class, 'deleteComment'])->name('deleteComment');

});
