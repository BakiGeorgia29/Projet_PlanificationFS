<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiel = materiel::orderBy('created_at','ASC')->get();
        return view('materiel.index',compact('materiel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materiel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materiel = materiel::create($request->all());
        //dd($request->all());
        return redirect()->route('materiel')->with('success','materiel a ete ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $materiel = Materiel::findOrFail($id);

        return view('materiel.show', compact('materiel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materiel = Materiel::findOrFail($id);
        return view ('materiel.edit', compact('materiel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $materiel = Materiel::findOrFail($id);

        $materiel->update($request->all());

        return redirect()->route('materiel')->with('success','Materiel a ete mis a jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $materiel = Materiel::findOrFail($id);
        $materiel->delete();
        return redirect()->route('materiel')->with('success','Le materiel a ete supprime');
    }

    public function showmaterdef (){
        $materieldef = Materiel::all()->where('quantitemauvais','>','0');
        //dd($materieldef);
        return view('materiel.materieldef', compact('materieldef'));
    }

    public function dechargermat(){
        return view('materiel.formdecharger');
    }
}

