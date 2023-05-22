@extends('layouts.app')

@section('content')

<h1>{{ $food->name }}</h1>
<p>Ingredienti: {{ $food->ingredients }}</p>
<p>Descrizione: {{ $food->description }}</p>
<p>Prezzo: {{ $food->price }}</p>
<p>Vegano: {{ $food->vegan ? 'Sì' : 'No' }}</p>
<p>Piccante: {{ $food->spicy ? 'Sì' : 'No' }}</p>
<p>Available: {{ $food->availability ? 'Sì' : 'No' }}</p>
<p>Visibile: {{ $food->visibility ? 'Sì' : 'No' }}</p>
<p>slug: {{$food->slug}}</p>

@endsection
