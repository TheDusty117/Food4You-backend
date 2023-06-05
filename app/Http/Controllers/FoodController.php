<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Support\Facades\DB;



class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurant_id = Auth::id(); //recupero id utente loggato
        $trashed = $request->input('trashed');

        if ($trashed) {
            $foods = Food::onlyTrashed()->get();
        } else {

            $foods = Food::where('restaurant_id', $restaurant_id)->get();
        }

        $num_trashed = Food::onlyTrashed()->count();

        return view('foods.index', compact('foods', 'num_trashed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRequest $request)
    {
        $data = $request->validated();
        $data['restaurant_id'] = Auth::user()->restaurant->id;
        $data['slug'] = Str::slug($data['name']);

        // Carica l'immagine
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = '/images/' . $image->getClientOriginalName();
            Storage::disk('public')->put($imageName, File::get($image));
            $data['image'] = $imageName;
        }

        $food = Food::create($data);

        return redirect()->route('foods.show', $food);
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //questo controllo serve per far accedere alle varie crud solo all'utente authenticato corrispondente
        if ($food->restaurant_id != Auth::id()) {
            abort(403, 'Ehhh... volevi! Guarda che faccia, non se lo aspettava!');
        }

        return view('foods.show', compact('food'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        if ($food->restaurant_id != Auth::id()) {
            abort(403, 'Ehhh... volevi! Guarda che faccia, non se lo aspettava!');
        }

        return view('foods.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodRequest  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodRequest $request, Food $food)
    {
        try {
            if ($food->restaurant_id != Auth::id()) {
                abort(403, 'Ehhh... volevi! Guarda che faccia, non se lo aspettava!');
            }

            $data = $request->validated();

            // Aggiungi la logica per i checkbox
            $data['vegan'] = $request->has('vegan');
            $data['spicy'] = $request->has('spicy');
            $data['visibility'] = $request->has('visibility') ? 'public' : 'private';

            // Aggiorna il valore dello slug solo se il nome viene modificato
            if ($data['name'] !== $food->name) {
                $data['slug'] = Str::slug($data['name']);
            }

            // Carica l'immagine se è stata fornita
            if ($request->hasFile('image')) {
                // Elimina l'immagine precedente se presente
                if ($food->image) {
                    Storage::disk('public')->delete($food->image);
                }
                $imagePath = $request->file('image')->store('foods', 'public');
                $data['image'] = $imagePath;
            }

            // Aggiorna il cibo nel database
            $food->update($data);

            return redirect()->route('foods.show', $food);
        } catch (PostTooLargeException $e) {
            // Gestione dell'eccezione "PostTooLargeException"
            // Ad esempio, puoi reindirizzare l'utente a una pagina di errore con un messaggio appropriato
            return redirect()->back()->with('error', 'La dimensione del file supera il limite consentito.');
        }
    }


    public function restore(Food $food)
    {
        if ($food->trashed()) {
            $food->restore();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {

        if ($food->restaurant_id != Auth::id()) {
            abort(403, 'Ehhh... volevi! Guarda che faccia, non se lo aspettava!');
        }

        if ($food->trashed()) {
            $food->forceDelete();
        } else {
            $food->delete();
        }

        return back();
    }
}
