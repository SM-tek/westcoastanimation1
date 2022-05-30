<?php
use App\Http\Controllers\UserController;
use App\Mail\SampleMail;
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

Route::get('/', function () {
   // return view('welcome');
   return new SampleMail();
});

Route::get('/email', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/email', [App\Http\Controllers\UserController::class, 'sendEmail'])->name('send.email');
route::get('/Contact-us', [UserController::class, 'contact'])->name('contact');

route::get('/',[UserController::class,'index'])->name('index');
route::get('/whyus',[UserController::class,'whyus'])->name('whyus');
route::get('/portfolio',[UserController::class,'portfolio'])->name('portfolio');
route::get('/services',[UserController::class,'services'])->name('services');

route::get('/2d-animation',[UserController::class,'animation2d'])->name('animation2d');
route::get('/animation3d',[UserController::class,'animation3d'])->name('animation3d');
route::get('/illustration',[UserController::class,'illustration'])->name('illustration');
route::get('/logo_animation',[UserController::class,'logo'])->name('logo');
route::get('/payoneer',[UserController::class,'payoneer'])->name('payoneer');
route::get('/screencast',[UserController::class,'screencast'])->name('screencast');
route::get('/typography',[UserController::class,'typography'])->name('typography');
route::get('/whiteboard',[UserController::class,'whiteboard'])->name('whiteboard');
route::get('/pearsona',[UserController::class,'pearsona'])->name('pearsona');
route::get('/explainer',[UserController::class,'explainer'])->name('explainer');
route::get('/explainer_videos',[UserController::class,'explainer_videos'])->name('explainer-videos');
route::get('/bit_torrent',[UserController::class,'bit_torrent'])->name('bit_torrent');

