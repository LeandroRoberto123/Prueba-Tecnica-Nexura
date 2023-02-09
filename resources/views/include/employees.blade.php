<div class="card">
    <div class="card-header">Lista de Empleados</div>
    <div class="card-body">
      <a href="{{ route ('employee.create')}}" class="btn btn-primary btn-sm"><i class="bi bi-person-plus-fill"></i>&nbsp;Crear Empleado</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Sexo</th>
                <th scope="col">Area</th>
                <th scope="col">Boletin</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>&nbsp;Actualizar</a></td>
                <td><a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>&nbsp;Eliminar</a></td>
              </tr>
            </tbody>
          </table>
    </div>
</div>