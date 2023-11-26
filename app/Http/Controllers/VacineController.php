<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacineRequest;
use App\Http\Requests\UpdateVacineRequest;
use App\Models\Vacine;
use Illuminate\Http\Request;

class VacineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacines = Vacine::all();
        return view('vacine.list', [
            'vacines' => $vacines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacine.edit', [
            'vacine' => new Vacine(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Vacine::query()->create($data);
        return redirect()->route('dashboard')->with('success', 'Vacina cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $vacineID)
    {
//        dd('Estou aqui');
        $vacine = Vacine::query()->where('id_vacina', $vacineID)->first();
        return view('vacine.details', [
            'vacine' => $vacine,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $vacineID)
    {
        $vacine = Vacine::query()->where('id_vacina', $vacineID)->first();
        return view('vacine.update', [
            'vacine' => $vacine,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $vacineID)
    {
        $data = $request->all();
        $vacine = Vacine::query()->where('id_vacina', $vacineID)->first();
        $vacine->update($data);
        return redirect()->route('dashboard')->with('success', 'Vacina atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $vacineID)
    {
        $vacine = Vacine::query()->where('id_vacina', $vacineID)->first();
        $vacine->delete();
        return redirect()->route('dashboard')->with('success', 'Vacina excluída com sucesso!');
    }
}
