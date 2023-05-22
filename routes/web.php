<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//controllers usati
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FoodController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('ristoranti', [RestaurantController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //comando shortcut, che crea tutte e 4 le route(edit,update,destroy,show)
    Route::resource('foods',FoodController::class)->parameters([
        'foods' => 'food:slug' //TRASFORMO ID IN SLUG, NELLE VARIE (index,show, ecc)
    ]);

});

//Rotta per la vista show del food
Route::get('/foods/{id}', 'FoodController@show')->name('foods.show');


require __DIR__ . '/auth.php';
