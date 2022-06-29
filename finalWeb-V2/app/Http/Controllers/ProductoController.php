<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Barryvdh\DomPDF\Facade as PDF;
Barryvdh\DomPDF\Facade::class;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Producto.tabla_gestion_productos') -> with('productos', Producto::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_categorias = Categoria::all();
        return view('Producto.crear_producto', compact('tipo_categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto ->nombre = $request-> nombre;
        $producto ->id_categoria = $request-> id_categoria;
        $producto ->codigo_barras = $request-> codigo_barras;
        $producto ->presentacion = $request-> presentacion;
        $producto ->cantidad = $request-> cantidad;
        $producto ->unidades = $request-> unidades;
        $producto ->precio_entrada = $request-> precio_entrada;
        $producto ->precio_salida = $request-> precio_salida;        
        $producto->save();

        return redirect()->route('productos.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $tipo_categorias = Categoria::all();
        return view ('Producto.editar_producto', compact('tipo_categorias'))->with ('productos',$producto);
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
        $producto = Producto::find($id);
        $producto ->nombre = $request-> nombre;
        $producto ->id_categoria = $request-> id_categoria;
        $producto ->codigo_barras = $request-> codigo_barras;
        $producto ->presentacion = $request-> presentacion;
        $producto ->cantidad = $request-> cantidad;
        $producto ->unidades = $request-> unidades;
        $producto ->precio_entrada = $request-> precio_entrada;
        $producto ->precio_salida = $request-> precio_salida;        
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto -> delete();
        return redirect()->route('productos.index');
    }

    public function descargarPDF2()//descarga el pdf
    {
        $productos = Producto::all();
        $pdf = PDF::loadView('Producto.crear_pdf_productos', compact('productos'));
        return $pdf->download('lista_productos.pdf');
    }
}
