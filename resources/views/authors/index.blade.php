@extends('layouts.app')

@section('content')
    <h1>Lista de Autores</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->nombre }}</td>
                    <td style="text-align: center;">
                        <form action="{{ route('authors.show', $author->id) }}" method="GET">
                            @csrf
                            <button type="submit">Ver</button>
                        </form>
                    </td>
                    <td style="text-align: center;">
                        <form action="{{ route('authors.edit', $author->id) }}" method="GET">
                            @csrf
                            <button type="submit">Editar</button>
                        </form>
                    </td>
                    <td style="text-align: center;">
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('authors.create') }}" method="GET">
        @csrf
        <button type="submit">Nuevo autor</button>
    </form>

@endsection
