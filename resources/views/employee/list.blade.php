@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @include('include.message')
            <div class="card">
                <h4 class="card-header text-center">LISTA DE EMPLEADOS</h4>
                <div class="card-body text-end">
                    <a title="Crear empleado" href="{{ route ('employee.create')}}" class="btn btn-primary btn-md"><i class="bi bi-person-plus-fill"></i>&nbsp;Crear</a>
                    <div class="table-responsive">
                      
                    <table class="table">
                      <thead id="th-center">
                          <tr>
                              {{-- <th scope="col">#</th> --}}
                              <th scope="col"><i class="bi bi-person-circle"></i>&nbsp;Nombre</th>
                              <th scope="col"><i class="bi bi-envelope-at"></i>&nbsp;Email</th>
                              <th scope="col"><i class="bi bi-gender-ambiguous"></i>&nbsp;Sexo</th>
                              <th scope="col"><i class="bi bi-briefcase-fill"></i>&nbsp;Area</th>
                              <th scope="col"><i class="bi bi-envelope-fill"></i>&nbsp;Boletín</th>
                              <th scope="col">Modificar</th>
                              <th scope="col">Eliminar</th>
                          </tr>
                      </thead>
                      <tbody id="tb-center">
                        @if (count($employees) > 0)
                          @foreach ($employees as $employee)
                          <tr>
                              <td>{{$employee->nombre}}</td>
                              <td>{{$employee->email}}</td>
                              <td>{{ Helpers::showSex($employee->sexo) }}</td>
                              <td>{{$employee->areas->nombre}}</td>
                              <td>{{ Helpers::showBoletin($employee->boletin) }}</td>
                              <td><a href="{{ route('employee.edit', ['id' => $employee->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a></td>
                              <td>
                                 <!-- Button trigger modal -->
                                 <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$employee->id}}" value="{{$employee->id}}">
                                    <i class="bi bi-trash"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$employee->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Estas seguro?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              Si eliminas este empleado nunca podrás recupéralo, ¿estás seguro de querer borrarlo?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <a href="{{ route('employee.delete', ['id' => $employee->id]) }}" class="btn btn-danger">Borrar definitivamente</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </td>
                          </tr>
                          @endforeach
                        @else
                            <tr>
                                <td colspan="7">Sin empleados...</td>
                            </tr>
                        @endif
                      </tbody>
                  </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection