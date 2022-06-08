<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\login;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Counter;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CarpooMailController;
use App\Http\Controllers\NewsAppController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CarpooAppController;
use Illuminate\Support\Facades\Mail;

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

//login/logout

Route::get('/login', [App\Http\Controllers\login::class, 'index'])->name('login_index');

Route::get('/logout', [App\Http\Controllers\login::class, 'logout'])->name('logout');

Route::post('/login', [App\Http\Controllers\login::class, 'store'])->name('login_post');


//changepassworD

Route::get('/forgotpassword', [App\Http\Controllers\WelcomeController::class, 'passwordforget'])->name('password_frg');
Route::post('/forgotpass', [App\Http\Controllers\WelcomeController::class, 'changepassword'])->name('changepassword');


//email
Route::get('/SendEmail',[MailController::class, "SendEmail"]);


//register
Route::get('/Register', [App\Http\Controllers\WelcomeController::class, 'Register'])->name('Register_page');
Route::post("/save-user",[WelcomeController::class, "Storing"]);


//	MainPage('first page that we see after login')
Route::get('/MainPage', [App\Http\Controllers\WelcomeController::class, 'MainPage'])->name('Main_page');

//Profile
Route::get('/View/{id}/Profile', [App\Http\Controllers\ProfileController::class, 'ViewProfile'])->name('View_Profile');
Route::get("/Edit/{id}/Profile",[ProfileController::class,"editing"])->name('Profile.edit');
Route::post("/Edit/{id}/Profile",[ProfileController::class,"updating"])->name('Profile.edit.update');
Route::get("/Delete/{id}/Profile",[ProfileController::class,"deleting"])->name('Profile.delete');

////////////////////////news application///////////////////////
Route::get('/View/MainNewsPage', [App\Http\Controllers\NewsAppController::class, 'ViewMainNewsPage'])->name('View_MainNewsPage');
// add news (popup)
Route::post("/View/save-news",[NewsAppController::class, "StoringNews"]);
Route::get('/ViewSinglePage/{id}/News', [App\Http\Controllers\NewsAppController::class, 'ViewSinglePageNews'])->name('View_SinglePageNews');
// like
// Route::post("/ViewSinglePage/{id}/News", [App\Http\Controllers\NewsAppController::class, 'LikeSinglePageNews'])->name('Like_SinglePageNews');
Route::get('/like/{id}', [LikeController::class, 'like']);
Route::get('/likeCarpoo/{id}', [LikeController::class, 'likeCarpoo']);
// delete news
Route::get('/DeleteSinglePage/{id}/News', [App\Http\Controllers\NewsAppController::class, 'DeleteSinglePageNews'])->name('Delete_SinglePageNews');
Route::get("/EditNews/{id}",[NewsAppController::class,"editingNews"])->name('News.edit');
Route::put("/Update_News",[NewsAppController::class,"updatingNews"]);


////////////////////////Carpooling application///////////////////////
Route::get('/View/MainCarpoolingPage', [App\Http\Controllers\CarpooAppController::class, 'ViewMainCarpooPage'])->name('View_MainCarpooPage');
Route::post("/View/save-carpoo",[CarpooAppController::class, "StoringCarpoo"]);

Route::get('/View/AvailableCarpooPage', [App\Http\Controllers\CarpooAppController::class, 'ViewAvailableCarpooPage'])->name('View_AvailableCarpooPage');
Route::get('/View/{id}/SaveUpdateCarpooAvailable', [App\Http\Controllers\CarpooAppController::class, 'UpdateAvailableCarpooPage'])->name('Update_AvailableCarpooPage');
Route::get("/Delete/{id}/Carpool",[CarpooAppController::class,"deletingCarpool"])->name('Carpool.delete');
Route::get("/Delete2/{id}/Carpool2",[CarpooAppController::class,"deletingCarpool2"])->name('Carpool2.delete');
Route::get("/Deleting/{id}/ChosenCarpooling",[CarpooAppController::class,"DeletingChosenCarpooling"])->name('ChosenCarpooling.delete');
Route::get('/SendEmailCarpoo',[CarpooMailController::class, "SendEmailCarpoo"]);

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

// require __DIR__.'/auth.php';