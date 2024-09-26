<?php

use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PersonalInfoController;
// use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
// use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\HonoringGalleryController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PortfolioDetailsController;
use App\Http\Controllers\ProjectDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;

use Google\Service\MyBusinessAccountManagement\Admin;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Admin Routes
    Route::resource('photos', AdminPortfolioController::class);
    Route::resource('projects', AdminProjectController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('personalinfo', PersonalInfoController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('publications', PublicationController::class);
    Route::resource('awards', AwardController::class);
    Route::resource('honoringGallery', HonoringGalleryController::class);
    Route::delete('photo/{photo}', [PhotoController::class, 'destroyPhoto'])->name('photo.destroy');
    Route::get('photo/{photo}', [PhotoController::class, 'edit'])->name('photo.edit');
});


// Admin Routes

// Routes (Front Namespace)

Route::group(['namespace' => 'Front'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/project-details/{id}', [ProjectDetailsController::class, 'index'])->name('project-details');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');
}); 


require __DIR__.'/auth.php';
