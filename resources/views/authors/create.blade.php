@extends('layouts.app')

@section('content')
    <h1>Autores</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Codigo:</td>
                <td><input type="text" name="codigo" value="{{ old('codigo') }}"></td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" value="{{ old('nombre') }}"></td>
            </tr>
        </table>
        <br>
        <br>
        <input type="submit" name="btnRegistrar" value="Registrar">
    </form>
@endsection
