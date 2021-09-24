<?php

use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\utilisateurs\UtilisateurComponent;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/articles', function () {
    return Article::with("type")->paginate(5);
});

Route::get('/typesarticles', function () {
    return TypeArticle::with("articles")->paginate(5);
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/habilitations/utilisateurs', [App\Http\Controllers\UserController::class, 'index'])
->middleware("auth.admin")
->name('utilisateurs'); */

Route::group(
    [
        "middleware" => ["auth", "auth.admin"],
        "as" => "admin."
    ],
    function () {
        Route::group([
            "prefix" => "habilitations",
            "as" => "habilitations."
        ], function () {
            Route::get("/utilisateurs", UtilisateurComponent::class)->name("users.index");
        });
    }
);
