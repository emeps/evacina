<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCitizenRequest;
use App\Http\Requests\UpdateCitizenRequest;
use App\Models\Application;
use App\Models\Citizen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CitizenController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citizens = Citizen::all();
        return view('user.list', [
           'citizens' => $citizens,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('user.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCitizenRequest $request)
    {
        $data = $request->validated();


        $user = User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make('password'),
        ]);
        $user->citizen()->create($data);
        return redirect()->route('dashboard')->with('success', 'Cidadão cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $citizenID)
    {
        $citizen = Citizen::query()->where('id_cidadao', $citizenID)->get();
        $citizen[0]['email'] = DB::select('select email from users where id = ?', [$citizen[0]->user_id]);
        $citizen[0]['email'] = $citizen[0]['email'][0]->email;
        return view('user.update', [
            'user' => $citizen[0],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function listDetails (int $citizen)
    {
        dd($citizen);
//        $citizen = Citizen::query()->findOrFail($citizen);
//        return view('user.edit', [
//            'citizen' => $citizen,
//        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $citizenID)
    {

        $data = $request->all();
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);
        $citizen = Citizen::where('id_cidadao', $citizenID)->get()[0];
        $user = User::query()->findOrFail($citizen->user_id);
        $user->update([
            'name' => $request->nome,
            'email' => $request->email,
        ]);
        $citizen->update($data, ['id_cidadao' => $citizenID]);
        return redirect()->route('dashboard')->with('success', 'Cidadão cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $citizenID)
    {
        $citizen = Citizen::query()->findOrFail($citizenID);
        $user = User::query()->findOrFail($citizen->user_id);
        $applications = Application::query()->where('id_cidadao', $citizenID)->get();
        foreach ($applications as $application) {
            $application->delete();
        }
        $citizen->user()->delete();
        $citizen->delete();
        return redirect()->route('citizen.list')->with('success', 'Cidadão excluído com sucesso!');
    }

    public function  consultaPorDoenca(){
        $doenca = \request()->doenca;
        $resultado = [];
        $resultado = DB::table('cidadao')
            ->select(
                'cidadao.nome',
                'cidadao.cns',
                'cidadao.cpf',
                'aplicacao.data_aplicacao',
                'aplicacao.dose',
                'vacina.nome as vacina',
                'aplicacao.nome_aplicador',
                'aplicacao.unidade_saude',
                'aplicacao.lote',
            )
            ->leftJoin('aplicacao', 'cidadao.id_cidadao', '=', 'aplicacao.id_cidadao')
            ->leftJoin('vacina', 'aplicacao.id_vacina', '=', 'vacina.id_vacina')
            ->where('vacina.doenca', '=', $doenca)
            ->orderBy('cidadao.nome')
            ->orderBy('aplicacao.data_aplicacao')
            ->get();

        return view('vacine.vacine-card-search', [
            'resultados' => $resultado,
        ]);
    }
    public function  consulta(){
        $cpf = \request()->cpf;
        $resultado = [];
            $resultado = DB::table('cidadao')
                ->select(
                    'cidadao.nome',
                    'cidadao.cns',
                    'aplicacao.data_aplicacao',
                    'aplicacao.dose',
                    'vacina.nome as vacina',
                    'aplicacao.nome_aplicador',
                    'aplicacao.unidade_saude',
                    'aplicacao.lote',
                    'vacina.doenca'
                )
                ->leftJoin('aplicacao', 'cidadao.id_cidadao', '=', 'aplicacao.id_cidadao')
                ->leftJoin('vacina', 'aplicacao.id_vacina', '=', 'vacina.id_vacina')
                ->where('cidadao.cpf', '=', $cpf)
                ->orderBy('cidadao.nome')
                ->orderBy('aplicacao.data_aplicacao')
                ->get();

            return view('vacine.vacine-card-search', [
                'resultados' => $resultado,
            ]);
    }
}
