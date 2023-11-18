@extends('layouts.app')

@section('content')
    <h1>Detalles del Autor</h1>

    @if($author)
        <table>
            <tr>
                <td>Codigo:</td>
                <td>{{ $author->codigo }}</td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>{{ $author->nombre }}</td>
            </tr>
        </table>
        <button onclick="window.location='{{ route('authors.index') }}'" class="btn btn-primary">Ir a autores</button>
    @else
        <p>No se encontró el autor.</p>
    @endif
@endsection
