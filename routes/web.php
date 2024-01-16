<?php

use App\Models\Lga;
use App\Models\State;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SystemSettingsController;

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
    return redirect('/login');
});

Route::get('/home', function () {
    $state = State::where('name', 'Kano')->first();
    return Lga::where('state_id', $state->id)->where('name', 'Ajingi')->first();
});

Auth::routes();

Route::group(['prefix' => 'app', 'as' => 'app.', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('schools', SchoolController::class);
    Route::resource('teachers', TeacherController::class);
    Route::post('teachers/import', [TeacherController::class, 'import'])->name('teachers.import');
    Route::resource('students', StudentController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('resources', ResourcesController::class);
    Route::resource('monitoring', MonitoringController::class);
    Route::resource('facilities', FacilityController::class);
    Route::post('schools/import', [SchoolController::class, 'import'])->name('schools.import');
    Route::post('schools/export', [SchoolController::class, 'export'])->name('schools.export');
    Route::resource('settings', SystemSettingsController::class)->except('store', 'update', 'edit', 'show', 'destroy');
    Route::post('settings', [SystemSettingsController::class, 'updateSystemSettings'])->name('update.system.settings');
    Route::post('settings/currency', [SystemSettingsController::class, 'updateStoreCurrency'])->name('update.store.currency');
    Route::get('chat', function (){
                return view('chat.index');
    })->name('chat');
});
