<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        // Recupera il cibo dal database
        $food = Food::findOrFail($id);

        // Aggiunge il cibo al carrello utilizzando il session storage
        $cart = $request->session()->get('cart', []);
        $cart[$id] = [
            'food' => $food,
            'quantity' => 1,
        ];
        $request->session()->put('cart', $cart);

        // Redireziona l'utente a una pagina di conferma o a quella desiderata
        return redirect()->back()->with('success', 'Cibo aggiunto al carrello');
    }

    public function removeFromCart(Request $request, $id)
    {
        // Rimuove il cibo dal carrello utilizzando il session storage
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }

        // Redireziona l'utente a una pagina di conferma o a quella desiderata
        return redirect()->back()->with('success', 'Cibo rimosso dal carrello');
    }

    public function updateQuantity(Request $request, $id)
    {
        // Aggiorna la quantità del cibo nel carrello utilizzando il session storage
        $quantity = $request->input('quantity', 1);
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            $request->session()->put('cart', $cart);
        }

        // Redireziona l'utente a una pagina di conferma o a quella desiderata
        return redirect()->back()->with('success', 'Quantità del cibo nel carrello aggiornata');
    }

    public function viewCart(Request $request)
    {
        // Ottiene il contenuto del carrello dal session storage
        $cart = $request->session()->get('cart', []);

        // Passa il carrello alla vista del carrello per visualizzarlo
        return view('cart.view', compact('cart'));
    }
}
