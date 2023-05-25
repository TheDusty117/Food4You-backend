@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h1 class="mb-4">{{ $food->name }}</h1>
            <p class="mb-2">Ingredienti: {{ $food->ingredients }}</p>
            <p class="mb-2">Descrizione: {{ $food->description }}</p>
            <p class="mb-2">Prezzo: {{ $food->price }}</p>
            <p class="mb-2">Vegano: {{ $food->vegan ? 'Sì' : 'No' }}</p>
            <p class="mb-2">Piccante: {{ $food->spicy ? 'Sì' : 'No' }}</p>
            <p class="mb-2">Visibile: {{ $food->visibility === 'public' ? 'Public' : 'Private' }}</p>
            <p class="mb-2">Slug: {{ $food->slug }}</p>

            <a href="{{ route('foods.index') }}" class="btn btn-secondary mt-4">Torna all'elenco</a>
            <a href="{{ route('foods.edit', $food) }}" class="btn btn-primary mt-4">Modifica</a>

        </div>
    </div>
</div>

@endsection
