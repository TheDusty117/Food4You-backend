@extends('layouts.app')

@section('content')

<div>
    <h1>Food index</h1>
</div>
@endsection

    <div class="container">
        <table class="table table-striped table-inverse table-responsive">
            <thead>

                {{-- aggiunta del cibo bottone --}}
                <div class="container py-4">
                    <h2>Questi sono i Foods</h2>
                    <a class="btn btn-primary" href="{{ route('foods.create') }}">
                        Aggiungi cibo
                    </a>
                </div>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Slug</th>
                    <th>Availability</th>
                    <th>Visibility</th>
                    <th>Created at</th>
                    <th>Updated at</th>

                    {{-- thead di bottoni --}}
                    <th>Modifica</th>
                    <th>Cancella</th>

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
                        <td>{{ $food->availability }}</td>
                        <td>{{ $food->visibility }}</td>
                        <td>{{ $food->created_at }}</td>
                        <td>{{ $food->updated_at }}</td>

                        {{-- BOTTONI DI MODIFICA E CANCELLAZIONE --}}
                        <td>
                            <a class="btn btn-secondary" href="{{ route('foods.edit',$food) }}">
                                M
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('foods.destroy',$food) }}">
                                X
                            </a>
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

