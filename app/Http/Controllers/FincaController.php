<?php

namespace App\Http\Controllers;

use App\Models\Finca;
use Illuminate\Http\Request;


class FincaController extends Controller
{
    public function index()
    {

        $fincas = Finca::orderBy('id', 'desc')->paginate();

        return view('fincas.index', compact('fincas'));
    }
    
    public function create()
    {
      return view('fincas.create');
   }

    public function store(Request $request)
    {
        $finca = new Finca();

        $finca->nombre = $request->nombre;
        $finca->vereda = $request->vereda;
        $finca->municipio = $request->municipio;
        $finca->extension = $request->extension;

        $finca->save();
        // $i = $request->input();
        // $respuesta = Finca::create($i);


        return redirect()->route('fincas.show', $finca);
        // return $respuesta;
    }

    public function show(Finca $finca)
    {
        return view('fincas.show', compact('finca'));
    }

    public function edit(Finca $finca)
    {
        return view('fincas.edit', compact('finca'));
    }

    public function update(Request $request, Finca $finca)
    {
        $finca->nombre = $request->nombre;
        $finca->vereda = $request->vereda;
        $finca->municipio = $request->municipio;
        $finca->extension = $request->extension;

        $finca->save();

        return redirect()->route('fincas.show', $finca);
    }
}