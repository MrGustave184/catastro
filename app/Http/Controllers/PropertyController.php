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
        $propertyData = $request->all();
        $solventeArray = ['solvente', 'no solvente'];
        $solvente = array_rand($solventeArray);

        $propertyData['gravamenes'] = $solventeArray[$solvente];
        $property = Property::create($propertyData);

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

    public function showGravamenes(Request $request)
    {
        $property = Property::where('cedula', $request->cedula)->firstOrFail();

        return view('gravamenes.show', [
            'data' => [
                'nombre' => $property->nombre,
                'cedula' => $property->cedula,
                'solvente' => $property->gravamenes,
                'date' => Carbon::parse()
            ]
        ]);
    }

    public function searchGravamenes()
    {
        return view('gravamenes.search');
    }

    public function ejidos()
    {
        $ejidos = [
            [
                'caracteristicas' => 'pH: 4, Textura: arenoso, Estructura: deteriorada',
                'ubicacion' => 'Caracas, San Martín',
                'superficie' => '250',
            ],
            [
                'caracteristicas' => 'pH: 7, Textura: arcilloso, Estructura: buenas condiciones',
                'ubicacion' => 'Caracas, Barrio Bucaral',
                'superficie' => '350',
            ],
            [
                'caracteristicas' => 'pH: 6, Textura: arenoso, Estructura: buenas condiciones',
                'ubicacion' => 'Caracas, Los Naranjos',
                'superficie' => '100',
            ]
        ];
        return view('ejidos', ['ejidos' => $ejidos ]);
    }
}
