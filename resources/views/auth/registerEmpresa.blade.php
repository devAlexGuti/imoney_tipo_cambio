@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Empresas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registerEmpresa') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="razon_social" class="col-md-4 col-form-label text-md-right">{{ __('Razón Social') }}</label>

                            <div class="col-md-6">
                                <input id="razon_social" type="text" class="form-control @error('razon_social') is-invalid @enderror" name="razon_social" value="{{ old('razon_social') }}" required autocomplete="razon_social" autofocus>

                                @error('razon_social')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero_ruc" class="col-md-4 col-form-label text-md-right">{{ __('Número de RUC') }}</label>

                            <div class="col-md-6">
                                <input id="numero_ruc" type="text" class="form-control @error('numero_ruc') is-invalid @enderror" name="numero_ruc" value="{{ old('numero_ruc') }}" required autocomplete="numero_ruc" autofocus>

                                @error('numero_ruc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividad_economica" class="col-md-4 col-form-label text-md-right">{{ __('Actividad Económica') }}</label>

                            <div class="col-md-6">
                                <input id="actividad_economica" type="actividad_economica" class="form-control @error('actividad_economica') is-invalid @enderror" name="actividad_economica" value="{{ old('actividad_economica') }}" required autocomplete="actividad_economica">

                                @error('actividad_economica')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="grupo_economico" class="col-md-4 col-form-label text-md-right">{{ __('Grupo Económico') }}</label>

                            <div class="col-md-6">
                                <input id="grupo_economico" type="text" class="form-control @error('grupo_economico') is-invalid @enderror" name="grupo_economico" value="{{ old('grupo_economico') }}" required autocomplete="grupo_economico" maxlengthautofocus>

                                @error('grupo_economico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono_fijo" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono Fijo') }}</label>

                            <div class="col-md-6">
                                <input id="telefono_fijo" type="text" class="form-control @error('telefono_fijo') is-invalid @enderror" name="telefono_fijo" value="{{ old('telefono_fijo') }}" required autocomplete="telefono_fijo" autofocus>

                                @error('telefono_fijo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion_fiscal" class="col-md-4 col-form-label text-md-right">{{ __('Dirección Fiscal') }}</label>

                            <div class="col-md-6">
                                <input id="direccion_fiscal" type="text" class="form-control @error('direccion_fiscal') is-invalid @enderror" name="direccion_fiscal" value="{{ old('direccion_fiscal') }}" required autocomplete="direccion_fiscal" autofocus>

                                @error('direccion_fiscal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                            <div class="col-md-6">
                                <input id="departamento" type="text" class="form-control @error('departamento') is-invalid @enderror" name="departamento" value="{{ old('departamento') }}" required autocomplete="departamento" autofocus>

                                @error('departamento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="provincia" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                            <div class="col-md-6">
                                <input id="provincia" type="text" class="form-control @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus>

                                @error('provincia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="distrito" class="col-md-4 col-form-label text-md-right">{{ __('Distrito') }}</label>

                            <div class="col-md-6">
                                <input id="distrito" type="text" class="form-control @error('distrito') is-invalid @enderror" name="distrito" value="{{ old('distrito') }}" required autocomplete="distrito" autofocus>

                                @error('distrito')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                   


                        <div class="form-group row">
                            <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus>

                                @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>

                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ocupacion" class="col-md-4 col-form-label text-md-right">{{ __('Ocupación') }}</label>

                            <div class="col-md-6">
                                <input id="ocupacion" type="text" class="form-control @error('ocupacion') is-invalid @enderror" name="ocupacion" value="{{ old('ocupacion') }}" required autocomplete="ocupacion" autofocus>

                                @error('ocupacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" maxlengthautofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>

                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="domicilio" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>

                                @error('domicilio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nacionalidad" class="col-md-4 col-form-label text-md-right">{{ __('Nacionalidad') }}</label>

                            <div class="col-md-6">
                                <input id="nacionalidad" type="text" class="form-control @error('nacionalidad') is-invalid @enderror" name="nacionalidad" value="{{ old('nacionalidad') }}" required autocomplete="nacionalidad" autofocus>

                                @error('nacionalidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="politico" class="col-md-4 col-form-label text-md-right">{{ __('Es Ud. una persona politicamente expuesta?') }}</label>

                        <div class="col-md-6">
                            <div class="form-check form-check-inline mt-3">
                                <label class="form-check-label mr-1" for="si">Si</label>
                                <input class="form-check-input mr-4" type="radio" name="politico" id="si" value="si" onclick="showPoliticoContainer();">
                                <label class="form-check-label mr-1" for="no">No</label>
                                <input class="form-check-input" type="radio" name="politico" id="no" value="no" onclick="showPoliticoContainer();">  
                              </div>
                              @error('politico')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                    </div>

                    <div id="politico-container" style="display: none;">

                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{ old('cargo') }}" autocomplete="cargo" autofocus>

                                @error('cargo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" >
                            <label for="empresa" class="col-md-4 col-form-label text-md-right">{{ __('Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="empresa" type="text" class="form-control @error('empresa') is-invalid @enderror" name="empresa" value="{{ old('empresa') }}" autocomplete="empresa" autofocus>

                                @error('empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 mx-auto">
                                <div class="form-check">
                                    <input type="checkbox" name="terminos" class="form-check-input" id="accept">
                                 <label class="form-check-label" for="accept">Registrándote, aceptas  <a href="#" target="_blank">Términos y Condiciones</a> / <a href="#" target="_blank">Políticas de  privacidad y uso de Datos</a>.</label>
                                  </div>

                                  @error('terminos')
                                  <span class="invalid-feedback d-block" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                  
                            </div>
                            
                        </div>
                        
                        <div class="form-group row mb-0 mx-auto">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
function showPoliticoContainer() {
    if (document.getElementById('si').checked) {
        document.getElementById('politico-container').style.display = 'block';
    }
    else document.getElementById('politico-container').style.display = 'none';

}
</script>
