<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    public function index() {
        $comics = Comic::all(); 
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        $comics = Comic::find('$id');
        return view("comics.show", compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view("comics.edit", compact('comic')); 
    }

    public function destroy(Comic $comic)
    {
        $comic->delete(); 
        return redirect()->route('comics.index'); 
    }

    public function create()
    {
        return view("comics.create"); 
    }

    public function store(Request $request)
    {
        $data = $request->all(); 
        $comic = new Comic(); 
        $comic->fill($data); 
        $comic->save(); 
        return redirect()->route('comics.show', $comic->id); 
    }

}
