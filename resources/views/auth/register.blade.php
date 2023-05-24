@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- @method('PUT') --}}
                        {{-- NAME --}}
                        <div class="mb-4 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome*') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- EMAIL --}}
                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail*') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- PASSWORD --}}
                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password*') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- CONFERMA PASSWORD --}}
                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password*') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- da qui è custom --}}

                        {{-- RESTAURANT NAME INSERIMENTO OK FUNZIONANTE (vedi RegisteredUSerController) --}}
                    <div class="mb-4 row">
                          <label for="restaurant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Attività*') }}</label>

                          <div class="col-md-6">
                              <input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>

                              @error('restaurant_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                          </div>
                      </div>

                      {{-- INDIRIZZO RISTORANTE --}}
                    <div class="mb-4 row">
                        <label for="restaurant_address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo Attività*') }}</label>

                        <div class="col-md-6">
                            <input id="restaurant_address" type="text" class="form-control @error('restaurant_address') is-invalid @enderror" name="restaurant_address" value="{{ old('restaurant_address') }}" required autocomplete="restaurant_address" autofocus>

                            @error('restaurant_address')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror

                        </div>
                    </div>

                      {{-- PARTITA IVA --}}
                      <div class="mb-4 row">
                        <label for="restaurant_vat" class="col-md-4 col-form-label text-md-right">{{ __('Partita IVA*') }}</label>

                        <div class="col-md-6">
                            <input id="restaurant_vat" type="number" class="form-control @error('restaurant_vat') is-invalid @enderror" name="restaurant_vat" value="{{ old('restaurant_vat') }}" required autocomplete="restaurant_vat" autofocus>

                            @error('restaurant_vat')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror

                        </div>
                    </div>



                    {{-- EMAIL --}}
                        {{-- <div class="mb-4 row">

                            <label for="restaurant_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="restaurant_email" type="restaurant_email" class="form-control @error('email') is-invalid @enderror" name="restaurant_email" value="{{ old('restaurant_email') }}" required autocomplete="restaurant_email">

                                @error('restaurant_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- NUMERO DI TELEFONO --}}
                        <div class="mb-4 row">
                            <label for="restaurant_telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="restaurant_telephone_number" type="number" class="form-control @error('restaurant_telephone_number') is-invalid @enderror" name="restaurant_telephone_number" value="{{ old('restaurant_telephone_number') }}" required autocomplete="restaurant_telephone_number" autofocus>

                                @error('restaurant_telephone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        {{-- CATEGORIE --}}
                        <div class="mb-3">
                            <label for="categories" class="form-label">Tipologia di ristorante</label>
                            <div class="form-check">
                                {{-- <input name="categories[]" @checked( in_array($category->id, old('categories',[]) ) ) class="form-check-input" type="checkbox" value="{{ $category->id }}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  {{ $category->name }}
                                </label>  --}}

                                <input name="categories[1]" class="form-check-input" type="checkbox" value="italiano" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    italiano
                                </label>
                            </div>

                            <div class="form-check">

                                <input name="categories[2]" class="form-check-input" type="checkbox" value="italiano" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    internazionale
                                </label>
                            </div>

                                @error('categories')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror 







                        </div>




                        <div class="mb-4 row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrati') }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
