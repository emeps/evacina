<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationnRequest;
use App\Http\Requests\UpdateApplicationnRequest;
use App\Models\Application;
use App\Models\Citizen;
use App\Models\Vacine;
use http\Params;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        foreach ($applications as $application) {
            $citizen = Citizen::query()->where('id_cidadao', $application->id_cidadao)->get();
            $application->nome = $citizen[0]->nome;
            $vacine = Vacine::query()->where('id_vacina', $application->id_vacina)->get();
            $application->vacina = $vacine[0]->nome;
        }
//        dd($applications);
        return view('application.list', [
            'applications' => $applications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vacines = Vacine::all();
        $citizens = Citizen::all();
        return view('application.edit', [
            'application' => new Application(),
            'vacines' => $vacines,
            'citizens' => $citizens,
            'user' => auth()->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['nome_aplicador'] = auth()->user()->name;
        $vacine = Vacine::query()->where('id_vacina', $data['id_vacina'])->get();
        $data['lote'] = $vacine[0]->lote;
        Application::create($data);
        return redirect()->route('application.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $applicationID)
    {
        $application = Application::query()->where('id_campanha', $applicationID)->get();
        $citizen = Citizen::query()->where('id_cidadao', $application[0]->id_cidadao)->get();
        $application[0]->nome = $citizen[0]->nome;
        $vacine = Vacine::query()->where('id_vacina', $application[0]->id_vacina)->get();
        $application[0]->vacina = $vacine[0]->nome;
        return view('application.details', [
            'application' => $application[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $applicationID)
    {
        $application = Application::query()->where('id_campanha', $applicationID)->get();
        $citizens = Citizen::all();
        $vacines = Vacine::all();
        return view('application.update', [
            'application' => $application[0],
            'citizens' => $citizens,
            'vacines' => $vacines,
            'user' => auth()->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $applicationID)
    {
        $data = $request->all();
        $application = Application::query()->where('id_campanha', $applicationID)->get();
        $data['nome_aplicador'] = auth()->user()->name;
        $vacine = Vacine::query()->where('id_vacina', $data['id_vacina'])->get();
        $data['lote'] = $vacine[0]->lote;
        $application[0]->update($data);
        return redirect()->route('application.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $applicationID)
    {
        $application = Application::query()->where('id_campanha', $applicationID)->get();
        $application[0]->delete();
        return redirect()->route('application.list');
    }
}
