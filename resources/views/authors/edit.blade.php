@extends('layouts.app')

@section('content')
    <h1>Editar Autor</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')

        <table>
            <tr>
                <td>Codigo:</td>
                <td><input type="text" name="codigo" value="{{ old('codigo', $author->codigo) }}"></td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" value="{{ old('nombre', $author->nombre) }}"></td>
            </tr>
        </table>

        <br>
        <br>
        <input type="submit" name="btnActualizar" value="Actualizar">
    </form>
@endsection
