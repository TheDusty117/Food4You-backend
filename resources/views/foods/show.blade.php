@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="my-4">Nuovo cibo: {{ $food->name }}</h1>
</div>

<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <p class="mb-2">Nome: {{ $food->name }}</p>
            <p class="mb-2">Ingredienti: {{ $food->ingredients }}</p>
            <p class="mb-2">Descrizione: {{ $food->description }}</p>
            <p class="mb-2">Prezzo: {{ $food->price }}</p>
            {{-- <p class="mb-2">Vegano: {{ $food->vegan ? 'Sì' : 'No' }}</p>
            <p class="mb-2">Piccante: {{ $food->spicy ? 'Sì' : 'No' }}</p> --}}
            <p class="mb-2">Visibile: {{ $food->visibility === 'public' ? 'Public' : 'Private' }}</p>
            {{-- <p class="mb-2">Slug: {{ $food->slug }}</p> --}}

            @if ($food->image)
            <div class="mb-4">
                <h3>Immagine</h3>
                <img src="{{ asset('storage/' . $food->image) }}" alt="Food Image" style="max-width: 100%;">
            </div>
            @endif



        </div>
    </div>
</div>

<div class="container">
    <a href="{{ route('foods.index') }}" class="btn btn-secondary mt-4">Torna all'elenco</a>
    <a href="{{ route('foods.edit', $food) }}" class="btn btn-primary mt-4">Modifica</a>
</div>


@endsection
