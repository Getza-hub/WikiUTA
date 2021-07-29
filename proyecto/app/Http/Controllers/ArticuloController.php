<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Area;
use App\Models\User;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        $articulos = Articulo::all();
        $articulos_ordenados = $articulos->sortByDesc('updated_at');
        $areas = Area::all();
        
        return view(('welcome'),compact('articulos_ordenados','areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
        $articulos->id = $request->get("id");
        $articulos->nombre = $request->get("descripcion");
        $articulos->save();
        return redirect("/articulos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $articulo = Articulo::where('articulo_id', '=', $id)->first();
        $user = User::where('user_id', '=', $articulo->user_id)->first();
       
        $areas = Area::all();
       // $user = User::find($articulo->user_id);
        return view(('articulos.Ver'),compact('articulo','areas','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}