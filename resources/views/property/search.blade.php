@extends('layout')
@section('title')
    Registrar Propiedad
@endsection

@section('content')
    <div class="col pt-4">
        <h1>Buscar propietarios</h1>
        <p class="lead">App para registro de propiedades</p>
        <hr />
        <div class="content-background p-4">
            <form>
                <div class="form-group mb-4">
                    <label for="exampleInputPassword1">Cédula de Identidad</label>
                    <input type="number" class="form-control" id="owner-ci" placeholder="Cédula">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
@endsection