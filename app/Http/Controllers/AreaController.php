<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
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
        $areas = Area::orderBy('id', 'ASC')->get();
        // var_dump($areas[0]->nombre);
        // die();
        // return view('home', [
        //     'images' => $images,
        // ]);
        return $areas;
    }
}
