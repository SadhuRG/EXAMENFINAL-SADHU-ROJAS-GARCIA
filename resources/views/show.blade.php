@extends('layout')
@section('title', 'Cliente | ' . $cliente->id)

@section('content')


<div class="action-buttons">
    <h2>Cliente</h2>

    <a href="{{ route('clientes.edit', ['id' => $cliente->id]) }}" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; border: 2px solid black; border-radius: 20px; text-decoration: none; text-align: center; font-size: 20px; margin-right: 20px;">
        Editar
    </a>

    <form action="{{ route('clientes.destroy', ['id' => $cliente->id]) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; border: 2px solid black; border-radius: 20px; text-decoration: none; text-align: center; font-size: 20px;">
            Eliminar
        </button>
    </form>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>Detalles del cliente</h2>
        <p><strong>Código:</strong> {{ $cliente->id }}</p>
        <p><strong>Nombres:</strong> {{ $cliente->Nombres }}</p>
        <p><strong>Email:</strong> {{ $cliente->Email }}</p>
        <p><strong>Dirección:</strong> {{ $cliente->Direccion }}</p>
        <p><strong>Fono:</strong> {{ $cliente->Fono }}</p>
    </div>
</div>
@endsection