@extends('layout')

@section('content')

    <td >
        <h2 style="text-align: center; margin: 40px 0;">
             <a style="color: red; padding: 2px 20px; border: 3px solid red; border-radius: 15px; text-decoration: none;" href="{{ route('clientes.create') }}">Crear Nuevo Cliente</a>
        </h2>

    <div class="container">
    <div class="row justify-content-center">
        @if ($clientes)
            @foreach ($clientes as $cliente)
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card mb-4" style="width: 18rem; border: 2px solid black;">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $cliente->Nombres }}</h5>
                            <a href="{{ route('clientes.show', ['id' => $cliente->id]) }}" class="btn btn-primary">Ver detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <p class="text-center">No existen clientes</p>
            </div>
        @endif
    </div>
    </div>


    </td>

@endsection
