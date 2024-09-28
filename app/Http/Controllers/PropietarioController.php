<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index()
    {

        $propietarios = Propietario::orderBy('id', 'desc')->paginate();

        return view('propietarios.index', compact('propietarios'));
    }
    public function create()
    {
        return view('propietarios.create');
    }

    public function store(Request $request)
    {
        $propietario = new Propietario();

        $propietario->nombre = $request->nombre;
        $propietario->apellido = $request->apellido;
        

        $propietario->save();

        return redirect()->route('propietarios.show', $propietario);
    }

    public function show(Propietario $propietario)
    {
        return view('propietarios.show', compact('propietario'));
    }

    public function edit(Propietario $propietario)
    {
        return view('propietarios.edit', compact('propietario'));
    }

    public function update(Request $request, Propietario $propietario)
    {
        $propietario -> nombre = $request->nombre;
        $propietario -> apellido = $request->apellido;
       
        $propietario-> save();

       return redirect()->route('propietarios.show', $propietario);
    }

} 