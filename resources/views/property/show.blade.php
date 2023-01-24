@extends('layout')

@section('content')
    <div class="row">
        <div class="col-6 col-md-4">
            <img src="{{ url('/img/logo.png') }}">
        </div>
        <div class="col-6 col-md-8 d-flex justify-content-start align-items-center pt-4">
            <h1 class="ms-4">Cédula Catastral</h1>
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
            <tr>
                <th scope="row">Norte</th>
                <td>pal norte</td>
                <td>123</td>
            </tr>
            <tr>
                <th scope="row">Norte</th>
                <td>pal norte</td>
                <td>123</td>
            </tr>
            <tr>
                <th scope="row">Norte</th>
                <td>pal norte</td>
                <td>123</td>
            </tr>
        </tbody>
    </table>

    <p><strong>Nota:</strong> área aproximada del terreno: 500m<sup>2</sup></p>

    <p class="mt-5">Código catastral registrado:</p>
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
                    <!-- <td>1</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td> -->
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection