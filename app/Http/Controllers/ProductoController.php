<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NuevoProducto= new Producto(['nombre'=>$request->nombre,'marca'=>$request->marca,'precio'=>$request->precio,'descripcion'=>$request->descripcion]);
        $NuevoProducto->save();
        
        return response()->json(['Success'=>'true','Respuesta'=>'Producto creado correctamente']);

    }

    public function Modificar(Request $request,$id){
           $Modificar=DB::table('productos')->where('id',$id)->update(['nombre'=>$request->nombre,'marca'=>$request->marca,'precio'=>$request->precio,'descripcion'=>$request->descripcion]);
           return response()->json(['Success'=>'true','Respuesta'=>'Producto modificado correctamente']);
    }
     
    public function Eliminar($id){
        $Eliminar=DB::table('productos')->where('id',$id)->delete();
        return response()->json(['Success'=>'true','Respuesta'=>'Producto eliminado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
