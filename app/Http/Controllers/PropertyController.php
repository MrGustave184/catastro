<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Property;

class PropertyController extends Controller
{
    public function register()
    {
        return view('property.register');
    }

    public function create(Request $request)
    {
        $property = Property::create($request->all());

        return view('property.show', [
            'data' => $property->formatForResponse()
        ]);
    }

    public function search()
    {
        return view('property.search');
    }

    public function searchByCI(Request $request)
    {
        $property = Property::where('cedula', $request->cedula)->firstOrFail();

        return view('property.show', [
            'data' => $property->formatForResponse()
        ]);
    }

    public function show()
    {
        return view('property.show');
    }

    public function showEjido(Request $request)
    {
        $property = Property::where('cedula', $request->cedula)->firstOrFail();
        $solventeArray = ['solvente', 'no solvente'];
        $solvente = array_rand($solventeArray);

        return view('ejidos.show', [
            'data' => [
                'nombre' => $property->nombre,
                'cedula' => $property->cedula,
                'solvente' => $solventeArray[$solvente],
                'date' => Carbon::parse()
            ]
        ]);
    }

    public function searchEjido()
    {
        return view('ejidos.search');
    }
}
