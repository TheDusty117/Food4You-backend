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



        <div class='mb-3'>
            <div class="form-check form-switch">
                <input class="form-check-input" value="" name='vegan' type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Vegano</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" value="" name='spicy' type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Piccante</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" value="" name='avaiability' type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Disponibile</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" value="" name='visibility' type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Visibile</label>
            </div>
        </div>

        <button type="submit" class="btn btn-secondary">
            Modifica cibo
        </button>




    </form>
</div>

@endsection
