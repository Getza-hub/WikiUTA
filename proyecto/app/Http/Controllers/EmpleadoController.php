<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Area;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $empleado = Empleado::where('area_id', '=', $id)->get();
        $empleados = $empleado->sortByDesc('updated_at');
        $areas = Area::all();
        return view(('empleados.index'),compact('empleados','areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.Crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->imagen = $request->get("imagen");
        $empleado->nombre = $request->get("nombre");
        $empleado->fono = $request->get("fono");
        $empleado->correo = $request->get("correo");
        $empleado->cargo = $request->get("cargo");
        $empleado->area_id = $request->get("area");
        $empleado->save();
        //dd($empleado);
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($area, $id)
    {
        $empleado = Empleado::find($id);

        $areas = Area::all();
       // $user = User::find($articulo->user_id);
       //dd($empleado);
        return view(('empleados.Ver'),compact('empleado','areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $empleado = Empleado::find($id);
        //dd($empleado);
        return view('empleados.Editar', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        //dd($request);
        $empleado->imagen = $request->imagen;
        $empleado->nombre = $request->nombre;
        $empleado->fono = $request->fono;
        $empleado->correo = $request->correo;
        $empleado->cargo = $request->cargo;
        $empleado->save();
        //dd($empleado);
        return redirect("/empleados/{$empleado->area_id}/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $area = $empleado->area_id;
        $empleado->delete();
        return redirect("/empleados/{$area}");
    }
}
