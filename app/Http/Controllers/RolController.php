<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAll()
    {
        $roles = Rol::orderBy('id', 'ASC')->get();
        // var_dump($areas[0]->nombre);
        // die();
        // return view('home', [
        //     'images' => $images,
        // ]);
        return $roles;
    }
}
