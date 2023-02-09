@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header text-center">CREAR NUEVO EMPLEADO</h4>
                {{-- <div class="card-header">
                    Crear nuevo empleado
                </div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('employee.save')}}" >
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre completo *</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" required
                                    name="name" value="{{ old('name') }}" autocomplete="name" autofocus
                                    placeholder="Nombre completo del empleado">

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" required
                                    name="email" value="{{ old('email') }}" autocomplete="email"
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
                                <input type="radio" name="gender" id="sexM" value="M"
                                    class="form-check-input @error('gender') is-invalid @enderror" required
                                    {{ old('gender') == 'M' ? 'checked' : '' }}>
                                <label class="form-check-label" for="sexM">
                                    &nbsp;Masculino
                                </label>
                                <br>
                                <input type="radio" name="gender" id="sexF" value="F"
                                    class="form-check-input @error('gender') is-invalid @enderror" required
                                    {{ old('gender') == 'F' ? 'checked' : '' }}>
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
                                <select name="area" id="area" class="form-select @error('area') is-invalid @enderror" required>
                                    <option value="">Seleccione...</option>
                                    @foreach($areas as $area)
                                    <option {{ old('area') == $area->id ? 'selected' : '' }} value="{{ $area->id }}">{{ $area->nombre }}</option>
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
                                <textarea name="description" id="description"
                                    class="form-control @error('description') is-invalid @enderror" required
                                    placeholder="Descripción de la experiencia del empleado"> {{ old('description')}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-7 offset-sm-4">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="status">
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
                                    <input class="form-check-input @error('rol') is-invalid @enderror"
                                    type="checkbox" id="rol" name="rol" {{ old('rol') == $rol->id ? 'checked' : '' }} value="{{$rol->id}}">
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
                                <button type="submit" class="btn btn-primary button-save">
                                    Guardar
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