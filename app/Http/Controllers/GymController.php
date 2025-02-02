<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itens = Gym::all();
        return view('gym.index', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gym.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // Adicione suas regras de validação aqui
        ]);

        Gym::create($request->all());
        return redirect()->route('gym.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gym $gym)
    {
        return view('gym.show', compact('gym'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gym $gym)
    {
        return view('gym.edit', compact('gym'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gym $gym)
    {
        $request->validate([
            // Adicione suas regras de validação aqui
        ]);

        $gym->update($request->all());
        return redirect()->route('gym.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gym $gym)
    {
        $gym->delete();
        return redirect()->route('gym.index');
    }
}
