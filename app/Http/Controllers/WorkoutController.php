<?php

namespace App\Http\Controllers;

use App\Models\workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workouts = Workout::all();
        return view('workouts.index', compact('workouts'));
    }

    public function create()
    {
        return view('workouts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer',
            'date' => 'required|date'
        ]);

        Workout::create($validated);

        return redirect()->route('workouts.index')
            ->with('success', 'Treino criado com sucesso!');
    }

    public function show(Workout $workout)
    {
        return view('workouts.show', compact('workout'));
    }

    public function edit(Workout $workout)
    {
        return view('workouts.edit', compact('workout'));
    }

    public function update(Request $request, Workout $workout)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer',
            'date' => 'required|date'
        ]);

        $workout->update($validated);

        return redirect()->route('workouts.index')
            ->with('success', 'Treino atualizado com sucesso!');
    }

    public function destroy(Workout $workout)
    {
        $workout->delete();

        return redirect()->route('workouts.index')
            ->with('success', 'Treino excluído com sucesso!');
    }
}
