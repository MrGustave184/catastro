<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function register()
    {
        return view('property.register');
    }

    public function search()
    {
        return view('property.search');
    }

    public function show()
    {
        $data = [
            'nombre' => 'david',
            'cedula' => 'd18410341',
            'codigo_catastral' => str_split('123456789012345678901234567'),
            'area' => 500,
            'medidas' => [
                'norte' => [
                    'text' => 'pal norte',
                    'ml' => 37
                ],
                'sur' => [
                    'text' => 'pal sur',
                    'ml' => 38
                ],
                'este' => [
                    'text' => 'pal este',
                    'ml' => 38
                ],
                'oeste' => [
                    'text' => 'pal oeste',
                    'ml' => 39
                ],
            ]
        ];

        return view('property.show', [
            'data' => $data
        ]);
    }
}
