<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Area;
use App\Models\Rol;
use App\Models\Employee;
use App\Models\EmployeeRole;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EmployeeRolController;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $area = new AreaController();
        $area = $area->getAll();

        $rol = new RolController();
        $rol = $rol->getAll();

        return view('employee.create', [
            'areas' => $area,
            'roles' => $rol,
        ]);

    }
    public function save(Request $request)
    {
        // Validacion 
        $validate = $this->validate($request, [
            'name' =>'required|string|max:255',
            'email' =>'required|string|email|max:255',
            'gender' =>'required',
            'area' =>'required',
            'description' =>'required',
            'rol' =>'required',
        ]);
        
        // Recoger los datos
        $name = $request->input('name');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $area_id = $request->input('area');
        $description = $request->input('description');

        // Asignar valores al objeto Employee
        $user = new Employee();
        $user->nombre = $name;
        $user->email = $email;
        $user->sexo = $gender;
        $user->area_id = $area_id;
        $user->boletin = $request->status == 'on' ? 1 : 0;
        $user->descripcion = $description;
        $user->save();

        $empleado_id = Employee::latest('id')->first();

        // Asignar valores al objeto EmployeeRole
        $user_rol = new EmployeeRole();
        $user_rol->rol_id = $request->input('rol');
        $user_rol->empleado_id = $empleado_id->id;
        $user_rol->save();

        return redirect()->route('home')->with([
            'message' => 'Empleado guardado correctamente.'
        ]);

    }

    public function edit($id)
    {
        $area = new AreaController();
        $area = $area->getAll();

        $rol = new RolController();
        $rol = $rol->getAll();

        $employeesRole = EmployeeRole::where('empleado_id', $id)->first();
        // $employee_rol = new EmployeeRolController();
        // $employee_rol = $employee_rol->getAll();

        $user = \Auth::user();
        $employee = Employee::find($id);

        // var_dump($employee->user->id);
        // die();
        if($user && $employee){
            return view('employee.edit', [
                'employee' => $employee,
                'areas' => $area,
                'roles' => $rol,
                'employee_rol' => $employeesRole,
            ]);
        }else{
            return redirect()->route('home');
        }
    }

    public function update(Request $request)
    {
        // Validacion
        $validate = $this->validate($request, [
            'name' =>'required|string|max:255',
            'email' =>'required|string|email|max:255',
            'gender' =>'required',
            'area' =>'required',
            'description' =>'required',
            // 'rol' =>'required',
        ]);
        // Recoger datos
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $area_id = $request->input('area');
        $description = $request->input('description');

        // Asignar valores al objeto+
        $user = Employee::find($id);
        $user->nombre = $name;
        $user->email = $email;
        $user->sexo = $gender;
        $user->area_id = $area_id;
        $user->boletin = $request->status == 'on' ? 1 : 0;
        $user->descripcion = $description;
        $user->update();

        // $empleado_id = Employee::latest('id')->first();
        $employee = Employee::where('id', $id)->first();
        // var_dump($employeesRole->id);
        // var_dump($employeesRole->nombre);
        // die();

        // Asignar valores al objeto EmployeeRole
        $employeesRole = EmployeeRole::where('empleado_id', $employee->id)->first();
        // $user = EmployeeRole::find($employeesRole->id);
        // var_dump($employeesRole);
        // die();
        // $user_rol = new EmployeeRole();
        $employeesRole->rol_id = $request->input('rol');
        $employeesRole->empleado_id = $employee->id;
        $employeesRole->update();
        
        // var_dump($user);
        // die();
        return redirect()->route('home')
        ->with(['message' => 'Empleado actualizado correctamente.']);

    }

    public function delete($id)
    {
        // var_dump("ID formualario".$id)."<br>";
        // die();
        // $user = \Auth::user();
        $employeesRole = EmployeeRole::where('empleado_id', $id)->first();
        $employee = Employee::find($id);
        // Eliminar registros de la tabla empleado_rol
        $employeesRole->delete();
        // Eliminar registros de la tabla empleados
        $employee->delete();
        $message = ['message' => "El empleado se ha borrado correctamente."];

        return redirect()->route('home')->with($message);

    }
}
