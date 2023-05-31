@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped table-inverse table-responsive">
        <thead>

            {{-- aggiunta del cibo bottone --}}
            <div class="container py-4">
                <h1>Menù del risotrante</h1>
                <div class="d-flex justify-content-start align-items-center py-3">
                    
                
                
                    <a class="btn btn-primary me-3" href="{{ route('foods.create') }}">
                        Aggiungi un nuovo cibo
                    </a>

                    
                    <a href="{{ route('foods.index', ['trashed' => true ]) }}" class="btn btn-warning">
                        Cestino <span> {{ $num_trashed }}</span>
                    </a>

                </div>

            </div>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                
                <th>Visibilità</th>
                
                <th>Azioni</th>
                
    
                
                
            </tr>

        </thead>
        @forelse ($foods as $food)
        <tbody>
            <tr>
                <td >{{ $food->id }}</td>
                <td>
                    <a href="{{ route('foods.show',$food) }}">{{ $food->name }}</a>
                </td>
                <td>{{ $food->price }} €</td>
                
                <td>{{ $food->visibility }}</td>



                {{-- BOTTONI DI MODIFICA E CANCELLAZIONE --}}
                <td>
                    <form class="d-flex justify-content-start" action="{{ route( 'foods.destroy', $food) }}" method="POST">
                        
                        <span class="btn btn-secondary me-4" href="{{ route('foods.edit',$food) }}">
                            
                            {{-- <i class="fas fa-wrench pe-2"> </i> <p>Modifica</p> --}}
                            <p>Modifica</p>
                        </span>
                        
                
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger me-4" type="submit" value="ELIMINA">


                        @if($food->trashed())
                        <form action="{{ route( 'foods.restore', $food) }}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-success me-4" value="RIPRISTINA">
                            
                        </form>
                        @endif
                    </form>
                </td>
                


                

            </tr>
            @empty
                <tr>
                    <th colspan="6">
                        <div class="align-items-center text-center py-4">

                            <p>Nessun cibo inserito</p>
                            
                            <a class="btn btn-secondary " href="{{ route('foods.create') }}">
                                Aggiungi cibo
                            </a>
                        </div>
                    </th>
                </tr>
                
            </tbody>
        </table>
        <a href="{{ route('foods.index') }}" class="btn btn-secondary mt-4">Torna all'elenco</a>
        @endforelse
    
</div>

@endsection
