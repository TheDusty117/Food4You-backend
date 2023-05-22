<h1>{{ $food->name }}</h1>
<p>Ingredienti: {{ $food->ingredients }}</p>
<p>Descrizione: {{ $food->description }}</p>
<p>Prezzo: {{ $food->price }}</p>
<p>Vegano: {{ $food->is_vegan ? 'Sì' : 'No' }}</p>
<p>Piccante: {{ $food->is_spicy ? 'Sì' : 'No' }}</p>
<p>slug: {{$food->slug}}</p>
