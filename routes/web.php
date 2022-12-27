<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashBordController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\OurCoursesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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


Route::get('/', [PostController::class, 'index']) -> name('accueil');
Route::get('A Propos de Nous', [PageController::class, 'about'] ) -> name('about');
Route::get('Questions Reponses', [PageController::class, 'faq'] ) -> name('faq');
Route::get('Contact', [PageController::class, 'contact'] ) -> name('contact');
Route::get('Mes Cours', [CoursesController::class, 'courses']) -> name('courses');
Route::get('Details du Cours', [OurCoursesController::class, 'ourCourses']) -> name('ourCourses');

// Route::get('Profiles', [ProfileController::class, 'profiles']) -> name('profile');
Route::get('profiles', [ProfileController::class, 'profiles'])->middleware('auth')->name('profile');
Route::post('profiles', [ProfileController::class, 'update_avatar'])->middleware('auth')->name('profile.update');

Route::get('Tableau de Bord', [DashBordController::class, 'dashBord']) -> name('dashBord');


Route::get('Inscription', [InscriptionController::class, 'inscription']) -> name('inscription');
Route::get('Connexion', [InscriptionController::class, 'connexion']) -> name('connexion');
Route::get('Mot de Passe Oublié', [InscriptionController::class, 'forgetPassword']) -> name('password');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin
Route::get('/AdminDashboard', [AdminControllers::class, 'AdDash'])->name('AdminDashboard');
Route::get('/AddCours', [AdminControllers::class, 'AddCours'])->name('AddCours');
Route::get('/Transactions',[AdminControllers::class, 'adminTransaction']) ->name('admin.Dashbord');

// Add Cours
Route::post('/createCours', [AdminControllers::class, 'createCours'])->name('createCours');
Route::post('/createCour', [AdminControllers::class, 'Enregistrer'])->name('create.Cours');

// Transaction
Route::get('transaction',[TransactionController::class, 'index']) -> name('transaction');
