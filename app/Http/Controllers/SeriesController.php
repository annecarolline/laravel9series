<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use \App\Models\Serie;

class SeriesController extends Controller
{
    /**
     * [obterSeries description]
     * @return [type] [description]
     */
    public function obterSeries()
    {
        $series = Serie::query()->orderBy('titulo')->get();

        return $series;
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $series = $this->obterSeries();

        return view('series.index')->with('series',$series);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create(){
        return view('series.create');
    }

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){

        $dados = new Serie();
        $dados->titulo = $request->input('titulo');
        $dados->ano = $request->input('ano');
        $dados->categoria = $request->input('categoria');
        $dados->elenco = $request->input('elenco');

        if ($dados->save()){
            return redirect('/series');
        }
        
        return 'Houve erro ao tentar salvar!';
    }
}
