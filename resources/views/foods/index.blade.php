@extends('layouts.app')

@section('content')

<div>
    <h1>Food index</h1>
</div>


<div class="container">
    <table class="table table-striped table-inverse table-responsive">
        <thead>

            {{-- aggiunta del cibo bottone --}}
            <div class="container py-4">
                <h2>Questi sono i Foods</h2>
                <a class="btn btn-primary" href="{{ route('foods.create') }}">
                    Aggiungi cibo
                </a>
                <a href="{{ route('foods.index', ['trashed' => true ]) }}" class="btn btn-warning">
                    Cestino <span> {{ $num_trashed }}</span>
                </a>
            </div>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Slug</th>
                <th>Visibility</th>
                {{-- thead di bottoni --}}
                <th>Modifica</th>
                <th>Cancella</th>
                <span>
                    @if(request('trashed'))
                    <th>Ripristina</th>
                    @endif
                </span>

            </tr>
        </thead>
        <tbody>
            @forelse ($foods as $food)
            <tr>
                <td>{{ $food->id }}</td>
                <td>
                    <a href="{{ route('foods.show',$food) }}">{{ $food->name }}</a>
                </td>
                <td>{{ $food->price }}</td>
                <td>{{ $food->slug }}</td>
                <td>{{ $food->visibility }}</td>



                {{-- BOTTONI DI MODIFICA E CANCELLAZIONE --}}
                <td>
                    <a class="btn btn-secondary" href="{{ route('foods.edit',$food) }}">
                        M
                    </a>
                </td>


                <td>
                    <form action="{{ route( 'foods.destroy', $food) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" class="btn btn-danger" value="ELIMINA">
                    </form>
                </td>
                <td>
                    @if($food->trashed())
                    <form action="{{ route( 'foods.restore', $food) }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-success" value="RIPRISTINA">
                    </form>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <th colspan="6">Nessun Food trovato</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection