@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header text-center">EDITAR EMPLEADO</h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('employee.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $employee->id}}">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre completo *</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name"  value="{{ $employee->nombre }}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Correo electrónico *</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $employee->email }}" autocomplete="email"
                                    placeholder="Correo electrónico">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="boletin" class="col-md-4 col-form-label text-md-end">Género * </label>
                            <div class="col-md-6">
                                <input type="radio" name="gender" id="sexM" value="M" class="form-check-input @error('gender') is-invalid @enderror" {{ $employee->sexo == 'M' ? 'checked' : ''}}>
                                <label class="form-check-label" for="sexM">
                                    &nbsp;Masculino
                                </label>
                                <br>
                                <input type="radio" name="gender" id="sexF" value="F" class="form-check-input @error('gender') is-invalid @enderror" {{ $employee->sexo == 'F' ? 'checked' : ''}}>
                                <label class="form-check-label" for="sexF">
                                    &nbsp;Femenino
                                </label>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="area" class="col-md-4 col-form-label text-md-end">Área *</label>

                            <div class="col-md-6">
                                <select name="area" id="area" class="form-select @error('area') is-invalid @enderror">
                                    @foreach($areas as $area)
                                        <option value="<?= $area->id ?>" <?= $employee->area_id == $area->id ?  'selected' : '' ?>><?= $area->nombre ?></option>
                                    @endforeach
                                </select>
                                @error('area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Descripción *</label>

                            <div class="col-md-6">
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" 
                                placeholder="Descripción de la experiencia del empleado">{{ $employee->descripcion}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="boletin_info" class="col-md-4 col-form-label text-md-end"></label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" {{ $employee->boletin == 1 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="boletin">
                                        Deseo recibir boletín informativo
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rol" class="col-md-4 col-form-label text-md-end">Roles * </label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    @foreach($roles as $rol)
                                    <input class="form-check-input @error('rol') is-invalid @enderror" type="checkbox"
                                        id="rol" name="rol" value="{{$rol->id}}" {{ $rol->id == $employee_rol->rol_id ?  'checked' : ''}}>
                                    <label class="form-check-label" for="rol">
                                        {{ $rol->nombre }}
                                    </label><br>
                                    @endforeach

                                    @error('rol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary button-edit">
                                    Actualizar
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