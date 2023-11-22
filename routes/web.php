<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Auth\LoginController;



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




// routes/web.php

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::get('/', function () {
    return view('home');
});

Route::get('/services' , function () {
    return view('services');
});
Route::get('/events' , function () {
    return view('events');
});
Route::get('/blogs' , function () {
    return view('blogs');
});
Route::get('/aboutUs' , function () {
    return view('aboutUs');
});
// Route::get('/' , function () {
//     return view('login');
// });


Route::get('/admin/adminDashboard', [RecordsController::class,'adminDashboard']);

Route::get('/admin/adminAddRecords', [RecordsController::class, 'adminAddRecords']); //Show Form

Route::post('/admin', [RecordsController::class, 'storeRecords']); //Store Data

Route::get('/admin/adminRecords', [RecordsController::class,'adminRecords']);

Route::get('/admin/adminEvents', [RecordsController::class,'adminEvents']);

Route::get('/admin/adminCreateBlog', [RecordsController::class,'adminCreateBlog']);


Route::put('/admin/{record}', [RecordsController::class, 'adminUpdateRecord']); //Update Form

Route::delete('/admin/{record}',[RecordsController::class, 'destroy']);

Route::get('/admin/{record}/adminEditRecords', [RecordsController::class, 'adminEditRecords']); //show Edit From


Route::get('/admin/{record}', [RecordsController::class,'adminRecordView']);//show each Records

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create-mon', [AppointmentController::class, 'create'])->name('appointments.create-mon');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
// Admin Authentication Routes

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::get('register', [AdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('register', [AdminAuthController::class, 'register']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});


Route::middleware(['auth.user'])->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');