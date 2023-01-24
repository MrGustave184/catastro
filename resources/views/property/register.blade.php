@extends('layout')
@section('title')
    Registrar Propiedad
@endsection

@section('content')
    <div class="col pt-4">
        <h1>Registrar</h1>
        <!-- <p class="lead">App para registro de propiedades</p> -->
        <hr />
        <div class="content-background p-4 row">
            <form>
                <div class="col d-flex justify-content-center"><h2>Datos del propietario</h2></div>
                <div class="form-group mb-4">
                    <label for="exampleInputEmail1">Nombre del propietario</label>
                    <input type="text" class="form-control" id="owner-name" aria-describedby="emailHelp" placeholder="Nombre">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <label for="owner-ci">Cédula de Identidad</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">V-</div>
                    </div>
                    <input type="number" class="form-control" id="owner-ci" placeholder="Cédula">
                </div>
                <div class="col d-flex justify-content-center"><h2>Medidas y linderos particulares del terrero</h2></div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="norte">Norte</label>
                        <input type="text" class="form-control" id="norte">
                    </div>
                    <div class="col-4">
                        <label for="norte-ml">ML</label>
                        <input type="number" class="form-control" id="norte-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="sur">Sur</label>
                        <input type="text" class="form-control" id="sur">
                    </div>
                    <div class="col-4">
                        <label for="sur-ml">ML</label>
                        <input type="number" class="form-control" id="sur-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="este">Este</label>
                        <input type="text" class="form-control" id="este">
                    </div>
                    <div class="col-4">
                        <label for="este-ml">ML</label>
                        <input type="number" class="form-control" id="este-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <div class="col-8">
                        <label for="oeste">Oeste</label>
                        <input type="text" class="form-control" id="oeste">
                    </div>
                    <div class="col-4">
                        <label for="oeste-ml">ML</label>
                        <input type="number" class="form-control" id="oeste-ml">
                    </div>
                </div>
                <div class="form-group mb-4 row">
                    <label for="area-aprox">área aproximada del terreno en m<sup>2</sup></label>
                    <div class="col-6 col-md-4 col-lg-2">
                        <input type="number" class="form-control" id="area-aprox" col="3">
                    </div>
                </div>
                <div class="col d-flex justify-content-center"><h2>Código Catastral</h2></div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Efed</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Mun</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Prr</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
@endsection