<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginContoller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/projects', [PageController::class, 'projects'])->name('projects');

Route::get('/articles', [ArtikelController::class, 'articles'])->name('articles');
Route::get('/articles/{id}', [ArtikelController::class, 'articlesDetail'])->name('articles-detail');

Route::get('/about', [PageController::class, 'about']);

Route::get('/login', [LoginContoller::class, 'index'])->name('login-page')->middleware('guest');
Route::post('/login', [LoginContoller::class, 'login'])->name('login');
// Route::get('/register', [LoginContoller::class, 'register'])->name('register');
// Route::post('/register', [LoginContoller::class, 'store'])->name('add-account');
Route::get('/logout', [LoginContoller::class, 'logout'])->name('logout');


Route::get('/dashboard' ,[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard/user' ,[DashboardController::class, 'user'])->name('daftar-user')->middleware('auth');

Route::get('/dashboard/showcase-project' ,[DashboardController::class, 'showcase'])->name('showcase-project')->middleware('auth');

Route::get('/dashboard/tambah-project' ,[DashboardController::class, 'tambah'])->name('tambah-project')->middleware('auth');
Route::post('/dashboard/tambah-project' ,[DashboardController::class, 'simpan'])->name('tambah-project-baru')->middleware('auth');

Route::post('/dashboard/edit-project/{id}' ,[DashboardController::class, 'editProject'])->name('edit-project')->middleware('auth');
Route::get('/dashboard/edit-project/{id}' ,[DashboardController::class, 'edit'])->name('edit-project')->middleware('auth');

Route::get('/dashboard/delete-project/{id}' ,[DashboardController::class, 'delete'])->name('delete-project')->middleware('auth');

Route::get('/dashboard/artikel' ,[ArtikelController::class, 'artikel'])->name('artikel')->middleware('auth');
Route::get('/dashboard/tambah-artikel' ,[ArtikelController::class, 'tambahArtikel'])->name('tambah-artikel')->middleware('auth');
Route::post('/dashboard/tambah-artikel' ,[ArtikelController::class, 'tambahArtikelBaru'])->name('tambah-artikel-baru')->middleware('auth');
Route::get('/dashboard/artikel/edit/{id}' ,[ArtikelController::class, 'editArtikel'])->name('edit-artikel')->middleware('auth');
Route::get('/dashboard/artikel/update/{id}' ,[ArtikelController::class, 'editArtikel'])->name('edit-artikel')->middleware('auth');
Route::post('/dashboard/artikel/update/{id}' ,[ArtikelController::class, 'edit'])->name('edit-artikel')->middleware('auth');
Route::get('/dashboard/artikel/delete/{id}' ,[ArtikelController::class, 'delete'])->name('hapus-artikel')->middleware('auth');
