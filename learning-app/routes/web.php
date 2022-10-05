<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\learning;
use App\Http\controllers\userController;
use App\Http\controllers\DBController;
use App\Http\controllers\UserDBController;
use App\Http\controllers\uploadController;
use App\Http\controllers\signUpController;
use App\Http\controllers\BlogEntryController;


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
    return view('welcome');
});

// Route::get('/{name}', function ($name) {
//    //echo $name;
//     return view('learn', ['name'=> $name]);
// });

Route::view('about','about'); // view(route,page name)
Route::view('learn','learn');
Route::view('blockaccess','blockaccess');
Route::view('signup','signups');
Route::view('profile','profile');
Route::view('app','app');
Route::view('makeBlog','makeBlog');

Route::post('upload',[uploadController::class, 'uploadPic']);
Route::post('user',[userController::class, 'saveUser']);
Route::post('signup',[signUpController::class, 'sUp']); 
Route::post('makeBlog',[BlogEntryController::class, 'blogEntry']);

Route::get('learning/{name}', [learning::class, 'index']); //routing the learning.php file in controller
Route::get('weather', [DBController::class, 'db_manp']); //database controller
Route::get('userdb', [UserDBController::class, 'getUsers']);
Route::get('list', [UserController::class, 'fetchUser']);
Route::get('blogs', [UserController::class, 'fetchBlog']);
Route::get('delete/{Id}', [UserController::class, 'deleteUser']);
Route::get('edit/{Id}', [UserController::class, 'editUser']);

Route::get('/logout', function () {
    // return view('welcome');
    if (session()->has('name')){
        session()-> pull('name');
        
    } 
    return redirect('login');
});
Route::get('/login', function () {
    // return view('welcome');
    if (session()->has('name')){
        return redirect('profile');
        
    } 
    return view('login');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
