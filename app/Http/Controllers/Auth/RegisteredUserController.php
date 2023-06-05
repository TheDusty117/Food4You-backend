<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Category;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('auth.register', compact('categories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'restaurant_name' => ['required', 'min:3', 'max:100'],
            'restaurant_address' => ['required', 'min:4', 'max:150'],
            'restaurant_vat' => ['required', 'size:11'],
            'restaurant_telephone_number' => ['nullable', 'min:7', 'max:10'],
            'img_restaurant' => ['image', 'max:2048'], // Dimensione massima dell'immagine: 2MB
            'categories' => ['required', 'array'],
            'categories.*' => ['exists:categories,id'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $restaurant = Restaurant::create([
            'name' => $request->restaurant_name,
            'address' => $request->restaurant_address,
            'vat' => $request->restaurant_vat,
            'email' => $user->email,
            'telephone_number' => $request->restaurant_telephone_number,
            'user_id' => $user->id,
            'slug' => Str::slug($request->restaurant_name, '-'),
        ]);

        $restaurant->categories()->sync($request->input('categories', []));

        if ($request->hasFile('img_restaurant')) {
            $imagePath = '/images/' . $request->file('img_restaurant')->getClientOriginalName();
            $restaurant->img_restaurant = $imagePath;
            $restaurant->save();
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
