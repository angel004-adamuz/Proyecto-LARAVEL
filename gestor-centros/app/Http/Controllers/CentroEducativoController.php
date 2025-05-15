<?php

namespace App\Http\Controllers;

use App\Models\CentroEducativo;
use Illuminate\Http\Request;

class CentroEducativoController extends Controller
{
    public function index()
    {
        $centros = CentroEducativo::all();
        return view('centros.index', compact('centros'));
    }

    public function create()
    {
        return view('centros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:centro_educativos,email',
        ]);

        CentroEducativo::create($request->all());

        return redirect()->route('centros.index')->with('success', 'Centro educativo creado correctamente.');
    }

    public function show(CentroEducativo $centro)
    {
        return view('centros.show', compact('centro'));
    }

    public function edit(CentroEducativo $centro)
    {
        return view('centros.edit', compact('centro'));
    }

    public function update(Request $request, CentroEducativo $centro)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:centro_educativos,email,' . $centro->id,
        ]);

        $centro->update($request->all());

        return redirect()->route('centros.index')->with('success', 'Centro educativo actualizado correctamente.');
    }

    public function destroy(CentroEducativo $centro)
    {
        $centro->delete();

        return redirect()->route('centros.index')->with('success', 'Centro educativo eliminado correctamente.');
    }
}
