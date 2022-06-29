@extends('Admin.main')

@section('contenido')
            
            <div class="container col-sm-8">
            <h2>Añadir Producto</h2>
                <form action="{{route('productos.store')}}" method="post" id="formularioProducto">
                    @csrf
                    <div>
                        <div class="form group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre"  name="nombre" >
                        </div>
                        <div class="form group">
                            <label for="id_categoria" class="form-label">Categoria</label><br>
                            <select id="id_categoria"  name="id_categoria" class="form-control">
                                <option value="">Seleccione el tipo de personas</option>
                                @foreach ($tipo_categorias as $tipo_categorias)
                                    <option value="{{$tipo_categorias->id}}">{{$tipo_categorias->nombre}}</option>
                                    
                                @endforeach
                            </select>   
                        </div>
                        <div class="form group">
                            <label for="codigo_barras" class="form-label">Codigo de Barras</label>
                            <input type="text" class="form-control" id="codigo_barras"  name="codigo_barras" >
                        </div>
                        <div class="form group">
                            <label for="presentacion" class="form-label">Presentacion</label>
                            <input type="text" class="form-control" id="presentacion"  name="presentacion" >
                        </div>
                        <div class="form group">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad"  name="cantidad" >
                        </div>
                        <div class="form group">
                            <label for="unidades" class="form-label">Unidades</label>
                            <input type="text" class="form-control" id="unidades"  name="unidades" >
                        </div>
                        <div class="form group">
                            <label for="precio_entrada" class="form-label">Precio de Entrada</label>
                            <input type="text" class="form-control" id="precio_entrada"  name="precio_entrada" >
                        </div>
                        <div class="form group">
                            <label for="precio_salida" class="form-label">Precio de Salida</label>
                            <input type="text" class="form-control" id="precio_salida"  name="precio_salida" >
                        </div>
                        
                    </div>
                    <br>
                    <br>
                    <div>
                        <a href="/productos">
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                        </a>                        
                        <button type="submit" class="btn text-white" style="background-color: #BB8FCE">Crear</button>
                    </div>

                </form>

            </div>    
                


@endsection