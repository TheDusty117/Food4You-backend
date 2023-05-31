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

    //ROTTA CHE RIPRISTINA I FOOD ELIMINATI
    Route::post('foods/{food:slug}/restore', [FoodController::class, 'restore'])->name('foods.restore')->withTrashed();

    //comando shortcut, che crea tutte e 4 le route(edit,update,destroy,show)
    Route::resource('foods', FoodController::class)->parameters([
        'foods' => 'food:slug' //TRASFORMO ID IN SLUG, NELLE VARIE (index,show, ecc)
    ])->withTrashed(['update', 'destroy', 'edit']);


    //PROVA CARRELLO E SCOMMENTA IN CASO NON FUNZA================
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::get('/cart/view', [CartController::class, 'viewCart'])->name('cart.view');

});


require __DIR__ . '/auth.php';
