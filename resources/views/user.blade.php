<style>
    .custom-file-label::after {
    content: "Seleccionar" !important;

}
</style>
@extends('layouts.app')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <!--  <a class="nav-link" href="#">Cerrar Sesion</a> -->
                <form method="POST" action="{{ route('logout') }}" accept-charset="UTF-8" name="logout-form" id="logout-form" class="pt-2">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-link nav-link">Cerrar Sesion</button>
                </form>
            </li>
        </ul>

    </div>
  </nav>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de cuenta bancaria') }}</div>

                <div class="card-body pb-0">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Cuenta personal</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Banco de credito</option>
                              <option>Interbank</option>
                              <option>Pichincha</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo de cuenta</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Ahorro</option>
                              <option>Credito</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="validationCustomUsername">Ingrese su cuenta en soles</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">S/.</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                            Please choose a username.
                            </div>
                          </div>
                          </div>

                          <div class="form-group">
                            <label for="validationCustomUsername">Ingrese su cuenta en dolares</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">$</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                            Please choose a username.
                            </div>
                          </div>
                          </div>

                          <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="myInput" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput">Adjuntar DNI o carnet de extranjeria</label>
                                </div>
                            </div>
                          </div>
   
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="accept">Registrándote, aceptas  <a href="#" target="_blank">Términos y Condiciones</a> / <a href="#" target="_blank">Políticas de  privacidad y uso de Datos</a>.</label>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

