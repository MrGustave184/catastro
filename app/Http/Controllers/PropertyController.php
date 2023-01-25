<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
            'encabezado' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo at quidem reiciendis ratione, recusandae nemo, eos velit blanditiis ducimus exercitationem sunt inventore, molestiae laudantium adipisci accusamus dolor dolorem sit.',
            'medidas' => [
                'norte' => [
                    'texto' => 'text propiedad medida norte',
                    'ml' => 37
                ],
                'sur' => [
                    'texto' => 'text propiedad medida sur',
                    'ml' => 38
                ],
                'este' => [
                    'texto' => 'text propiedad medida este',
                    'ml' => 38
                ],
                'oeste' => [
                    'texto' => 'text propiedad medida oeste',
                    'ml' => 39
                ],
            ],
            'date' => Carbon::parse()
        ];

        return view('property.show', [
            'data' => $data
        ]);
    }
}
