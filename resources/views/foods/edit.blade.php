@extends('layouts.app')

@section('content')

<div class="container">
    <h1>
        Modifica: {{ $food->name }}
    </h1>
    <form action="{{ route('foods.update', $food) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">

            <label for="name" class="form-label">Inserisci il nome del cibo</label>
            <input type="text" name="name" class="form-control" value="{{old('name',$food->name)}}" id="name">
            <!-- {{-- errore title --}} -->
            <!-- @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                // questo va nella classe 
                 @error('image') is-invalid @enderror
              
                 @enderror -->

        </div>
        <div class="mb-3">

            <label for="price" class="form-label">Inserisci il prezzo</label>
            <input type="number" name="price" class="form-control" value="{{ old('price',$food->price) }}" id="price">
        </div>
        <div class="mb-3">

            <label for="ingredients" class="form-label">inserisci un'igrediente</label>
            <input type="text" name="ingredients" class="form-control" value="{{ old('ingedients',$food->ingredients) }}" id="ingredients">
        </div>
        <div class="mb-3">

            <label for="description" class="form-label">Inserisci una descrizione</label>
            <textarea name="description" class="form-control " id="description" rows="6" cols="50">{{ old('price',$food->descrition) }}</textarea>
        </div>



        <div class="mb-3">
            <label for="vegan" class="form-label">Vegano</label>
            @if($food->vegan == 0)
            <input type="text" name="vegan" class="form-control" value="Vegano" id="vegan">
            @else
            <input type="text" name="vegan" class="form-control" value="non Vegano" id="vegan">
            @endif
        </div>


        <div class="mb-3">
            <label for="spicy" class="form-label">Picchante</label>
            @if($food->spicy == 0)
            <input type="text" name="spicy" class="form-control" value="Picchante" id="spicy">
            @else
            <input type="text" name="spicy" class="form-control" value="Non Picchante" id="spicy">
            @endif
        </div>


        <div class="mb-3">
            <label for="availability" class="form-label">Disponibile</label>
            @if($food->availability == 0)
            <input type="text" name="availability" class="form-control" value="Disponibile" id="availability">
            @else
            <input type="text" name="availability" class="form-control" value="Non Disponibile" id="availability">
            @endif
        </div>


        <div class="mb-3">
            <label for="visibility" class="form-label">Visibilità</label>
            @if($food->avaible == 0)
            <input type="text" name="visibility" class="form-control" value="Visibile" id="visibility">
            @else
            <input type="text" name="visibility" class="form-control" value="Non Visibile" id="visibility">
            @endif
        </div>
    </form>
</div>

@endsection