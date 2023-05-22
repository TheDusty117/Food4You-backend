@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-inverse table-responsive">
            <thead>
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
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->slug }}</td>
                        <td>{{ $food->availability }}</td>
                        <td>{{ $food->visibility }}</td>
                        <td>{{ $food->created_at }}</td>
                        <td>{{ $food->updated_at }}</td>

                        {{-- BOTTONI DI MODIFICA E CANCELLAZIONE --}}
                        <td>
                            <button class="btn btn-secondary">
                                M
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                X
                            </button>
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
