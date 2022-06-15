<?php

use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;

use App\Http\Controllers\PaymentController;

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
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', [LandingController::class, 'index'])->name('home');
//
//Route::group(['middleware' => ['auth']], function() {
//    Route::resource('roles', RoleController::class);
//    Route::resource('users', UserController::class);
//    Route::resource('products', BelajarController::class);
//});
//
//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});

//testing
//Route::get('test',[LandingController::class, 'test']);

// Testing

Route::get('payment', [PaymentController::class,'index'])->name('payment');
Route::post('/payment', [PaymentController::class, 'payment_post']);

//Route::get('/createQuestion/{section}', [QuestionsController::class, 'createQuestion'])
//    ->name('createQuestion');
//
//Route::get('/detailQuestion/{question}', [QuestionsController::class, 'detailQuestion'])
//    ->name('detailQuestion');
//
//Route::post('/storeQuestion/{section}', [QuestionsController::class, 'storeQuestion'])
//    ->name('storeQuestion');
//Route::post('/deleteQuestion/{id}', [QuestionsController::class, 'deleteQuestion'])
//    ->name('deleteQuestion');

Route::get('/', [LandingController::class, 'index'])->name('index');

Route::get('belajar', [LandingController::class, 'belajar'])->name('belajar.index');
Route::get('detailbelajar/{title}', [LandingController::class, 'detailbelajar'])->name('detailbelajar');

Route::get('banksoal', [LandingController::class, 'banksoal'])->name('banksoal.index');
Route::get('detailbanksoal/{title}', [LandingController::class, 'detailbanksoal'])->name('detailbanksoal');
Route::get('downloadFile/{title}', [LandingController::class, 'downnloadFile'])->name('downloadFile');

Route::get('artikel', [LandingController::class, 'artikel'])->name('artikel');
Route::get('detailartikel/{slug}', [LandingController::class, 'detailartikel'])->name('detailartikel');

Route::get('tentangkami', [LandingController::class, 'tentangkami'])->name('tentangkami');

Route::get('/startQuiz', [LandingController::class, 'startQuiz'])
    ->name('startQuiz');
Route::get('/userQuizDetails/{id}', [LandingController::class, 'userQuizDetails'])
    ->name('userQuizDetails');

//comment
//    Route::post('/comment/store', 'CommentControllFFer@store')->name('comment.add');
Route::post('/comment/storeArtikel', [CommentController::class, 'storeArtikel'])->name('comment.addArtikel');
Route::post('/comment/storeBelajar', [CommentController::class, 'storeBelajar'])->name('comment.addBelajar');
//    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
Route::post('/comment/reply', [CommentController::class, 'replyStore'])->name('reply.add');

//Bootcamo
Route::get('/bootcamp', [LandingController::class, 'bootcamp'])->name('bootcamp.index');
Route::get('detailBootcamp/{title}', [LandingController::class, 'detailBootcamp'])->name('detailBootcamp');

//Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {

Route::middleware(['auth','verfied', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/detailQuiz/{banksoal}', [BankSoalController::class, 'detailQuiz'])
        ->name('detailQuiz');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified']], function() {

    // dashboard
    Route::resource('dashboard', DashboardController::class);

    // Belajar
    Route::resource('belajar', BelajarController::class);
    Route::get('find', [BelajarController::class, 'find'])->name('find-belajar');

    // User
    Route::resource('user', UserController::class);

    // Role
    Route::resource('role', RoleController::class);

    // Bank Soal
//    Route::resource('banksoal', BankSoalController::class);

//     Artikel
    Route::resource('artikel', BlogController::class);
//    Route::get('user/edit/{id}','BlogController@edit');
//    Route::put('user/update/{id}','BlogController@update');

    //Bank Soal
    Route::resource('banksoal', BankSoalController::class);
    Route::get('/detailQuiz/{banksoal}', [BankSoalController::class, 'detailQuiz'])
        ->name('detailQuiz');

    //Profile
    Route::resource('profile', ProfileController::class);
    Route::get('delete_photo', [ProfileController::class, 'delete'])->name('delete.photo.profile');

    //Questions
    Route::get('/createQuestion/{banksoal}', [QuestionsController::class, 'createQuestion'])
        ->name('createQuestion');

    Route::get('/detailQuestion/{question}', [QuestionsController::class, 'detailQuestion'])
        ->name('detailQuestion');

    Route::post('/storeQuestion/{banksoal}', [QuestionsController::class, 'storeQuestion'])
        ->name('storeQuestion');
    Route::post('/deleteQuestion/{id}', [QuestionsController::class, 'deleteQuestion'])
        ->name('deleteQuestion');

    Route::get('/userQuizHome', [BankSoalController::class, 'userQuizHome'])
        ->name('userQuizHome');

    Route::post('/deleteUserQuiz/{id}', [BankSoalController::class, 'deleteUserQuiz'])
        ->name('deleteUserQuiz');

    Route::get('/userQuizDetails/{id}', [BankSoalController::class, 'userQuizDetails'])
        ->name('userQuizDetails');

    // bootcamp
    Route::resource('bootcamp', BootcampController::class);
    Route::get('/detailBootcamp/{bootcamp}', [BootcampController::class, 'detailBootcamp'])
        ->name('detailBootcamp');
    Route::get('/createMateriBootcamp/{bootcamp}', [BootcampController::class, 'createMateriBootcamp'])
        ->name('createMateriBootcamp');
    Route::get('/detailMateriBootcamp/{bootcamp}', [BootcampController::class, 'detailMateriBootcamp'])
        ->name('detailMateriBootcamp');
    Route::post('/storeMateriBootcamp/{bootcamp}', [BootcampController::class, 'storeMateriBootcamp'])
        ->name('storeMateriBootcamp');
    Route::post('/deleteMateriBootcamp/{id}', [BootcampController::class, 'deleteMateriBootcamp'])
        ->name('deleteMateriBootcamp');
});

//Route::middleware(['auth', 'verified', 'role:admin|user'])->prefix('user')->group(function () {
//
//    Route::get('/userQuizHome', [AppUserController::class, 'userQuizHome'])
//        ->name('userQuizHome');
//
//    Route::get('/userQuizDetails/{id}', [AppUserController::class, 'userQuizDetails'])
//        ->name('userQuizDetails');
//
//    Route::post('/deleteUserQuiz/{id}', [AppUserController::class, 'deleteUserQuiz'])
//        ->name('deleteUserQuiz');
//
//    Route::get('/startQuiz', [AppUserController::class, 'startQuiz'])
//        ->name('startQuiz');
//});

