@extends('layout')

@section('content')
    <div class="row">
        <div class="col-5 col-md-4">
            <img src="{{ url('/img/logo.png') }}">
        </div>
        <div class="col-5 col-md-6 d-flex justify-content-start align-items-center pt-4">
            <h1 class="ms-4">Cédula Catastral</h1>
        </div>
        <div class="col-2 d-flex align-items-center">
            <button class="btn btn-primary">Descargar PDF</button>
        </div>
    </div>
    <hr />

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th colspan="3" class="text-center">Medidas y Linderos Particulares del terreno</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['medidas'] as $key => $medida)
            <tr>
                <th scope="row">{{ ucfirst($key) }}</th>
                <td>{{ $medida['texto'] }}</td>
                <td>{{ $medida['ml'] }} ML</td>
            </tr>
            @endforeach

            <!-- <tr>
                <th scope="row">Norte</th>
                <td>pal norte</td>
                <td>123</td>
            </tr>
            <tr>
                <th scope="row">Norte</th>
                <td>pal norte</td>
                <td>123</td>
            </tr> -->
        </tbody>
    </table>

    <p><strong>Nota:</strong> área aproximada del terreno: 500m<sup>2</sup></p>

    <p class="mt-5">Código catastral que reposa en los archivos de la oficina Municipal Catastral</p>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th colspan="27" class="text-center">Código Catastral</th>
            </tr>
            <tr>
                <th colspan="2">Efed</th>
                <th colspan="2">Mun</th>
                <th colspan="2">Prr</th>
                <th colspan="3">Amb</th>
                <th colspan="3">Sec</th>
                <th colspan="3">Man</th>
                <th colspan="3">Par</th>
                <th colspan="3">Sbp</th>
                <th colspan="3">Niv</th>
                <th colspan="3">Und</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($data['codigo_catastral'] as $char)
                    <td>{{ $char }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection