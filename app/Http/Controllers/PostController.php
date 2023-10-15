<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('posty.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('posty.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dump($request);
        //dd($request);
        //$request->dump();
        //echo "<p>Tytuł: $request->tytul</p>";

        $request->validate([
            'tytul' => 'required|min:3',
            'autor' => 'required|min:2',
            'email' => 'required|email:rfc,dns',
            'tresc' => 'required|min:3'
        ]);
        return redirect()->route('posty.index')->with('message', 'Dodano poprawnie');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
