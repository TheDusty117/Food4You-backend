@extends('layouts.app')

@section('content')

{{-- aggiunta del cibo bottone --}}
<div class="container py-4">
    <h1>Menù del risotrante</h1>
    <div class="d-flex justify-content-start align-items-center py-3">
        
    
    
        <a class="btn btn-primary me-3" href="{{ route('foods.create') }}">
            Aggiungi un nuovo cibo
        </a>

        {{-- COLLEGAMENTO AL CESTINO --}}
        {{-- <a href="{{ route('foods.index', ['trashed' => true ]) }}" class="btn btn-warning">
            Cestino <span> {{ $num_trashed }}</span>
        </a> --}}

    </div>

</div>

<div class="container">
    <table class="table  table-bordered table-responsive">
        <thead>



            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cibo</th>
                <th scope="col">Prezzo</th>
                
                <th scope="col">Visibilità</th>
                
                <th scope="col">Azioni</th>
  
            </tr>

        </thead>
        <tbody>
            @forelse ($foods as $food)
            <tr>
                <th scope='row'>{{ $food->id }}</th>
                
                <td>
                    <a href="{{ route('foods.show',$food) }}">{{ $food->name }}</a>
                </td>
                <td>{{ $food->price }} €</td>
                
                <td>{{ $food->visibility }}</td>



                {{-- BOTTONI DI MODIFICA E CANCELLAZIONE --}}

                <td class="d-flex">
                    <a class="btn btn-secondary me-4" href="{{ route('foods.edit',$food) }}">
                        
                        
                        <p class="my-auto">MODIFICA</p>
                    </a>
                    <form class="d-flex justify-content-start" action="{{ route( 'foods.destroy', $food) }}" method="POST">
                        
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger me-4" type="submit" value="ELIMINA">
                    </form>

                    
                    @if($food->trashed())
                    <form action="{{ route( 'foods.restore', $food) }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-success me-4" value="RIPRISTINA">
                        
                    </form>
                    @endif
                </td>
             
                


                

            </tr>
            @empty
                <tr>
                    <th colspan="6">
                        <div class="align-items-center text-center py-4">

                            <p>Nessun cibo inserito</p>
                            
                            <a class="btn btn-warning " href="{{ route('foods.create') }}">
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
