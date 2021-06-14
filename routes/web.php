    <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MedRecordController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\AppointmentController;

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

Route::get('/', [HomeController::class, 'home'])->name('home.index');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

//Route::resource('patients', \App\Http\Controllers\PatientsController::class);
Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index');
Route::post('/patients', [PatientsController::class, 'store'])->name('patients.store');
Route::get('/patients/create', [PatientsController::class, 'create'])->name('patients.create');
Route::get('/patients/{patient}', [PatientsController::class, 'show'])->name('patients.show');
Route::get('/patients/{patient}/edit', [PatientsController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{patient}/edit', [PatientsController::class, 'update'])->name('patients.update');
Route::post('/patients/{patient}/delete', [PatientsController::class, 'destroy'])->name('patients.destroy');

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{appointment}/edit', [AppointmentController::class, 'update'])->name('appointments.update');
Route::post('/appointments/{appointment}/delete', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

Route::resource('surgeries',
    \App\Http\Controllers\SurgeriesController::class, ['only' => ['create','store']]);

Route::resource('allergies',
    \App\Http\Controllers\AllergiesController::class, ['only' => ['create','store']]);

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{user}/update', [UsersController::class, 'edit'])->name('users.edit');
Route::post('/users/{user}/update', [UsersController::class, 'update'])->name('users.update');

Route::get('/med_records', [MedRecordController::class, 'index'])->name('med_records.index');
Route::get('/med_records/create', [MedRecordController::class, 'create'])->name('med_records.create');
Route::get('/med_records/{med_record}', [MedRecordController::class, 'show'])->name('med_records.show');
Route::delete('/med_records/{med_record}', [MedRecordController::class, 'destroy'])->name('med_records.destroy');
Route::get('/med_records/{med_record}/edit', [MedRecordController::class, 'edit'])->name('med_records.edit');
Route::put('/med_records/{med_record}/edit', [MedRecordController::class, 'update'])->name('med_records.update');

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('auth.logout');


