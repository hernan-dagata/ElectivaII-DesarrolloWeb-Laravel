<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
        ]);

        $author = new Author;
        $author->codigo = $request->codigo;
        $author->nombre = $request->nombre;
        $author->save();

        return redirect()->route('authors.index')->with('success', 'Autor creado exitosamente.');
    }

    public function show($id)
    {
        $author = Author::find($id);
        return view('authors.show', compact('author'));
    }

    public function edit($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Autor no encontrado.');
        }

        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
        ]);

        $author = Author::find($id);

        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Autor no encontrado.');
        }

        $author->codigo = $request->codigo;
        $author->nombre = $request->nombre;
        $author->save();

        return redirect()->route('authors.show', $author->id)->with('success', 'Autor actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Autor no encontrado.');
        }

        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Autor eliminado exitosamente.');
    }
}
