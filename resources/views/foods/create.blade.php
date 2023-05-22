@extends('layouts.app')

@section('content')
    <div>
        <h1>Food create</h1>

        <form class="px-5 my-3" method="POST" action="{{route('foods.store')}}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nome del cibo</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="exampleInputEmail1" value="{{old('price')}}">
                @error('price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Ingredienti</label>
                <input type="text" name="ingredients" class="form-control @error('ingredients') is-invalid @enderror" id="exampleInputEmail1" value="{{old('ingredients')}}">
                @error('ingredients')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <div class="form-floating">
                    <textarea class="form-control" name="description" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" style="height: 100px">{{old('description')}}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>


            </div>

            <button type="submit" class="btn btn-primary">Salva nuovo cibo</button>

        </form>
    </div>
@endsection
