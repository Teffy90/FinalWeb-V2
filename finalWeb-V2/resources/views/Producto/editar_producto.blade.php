@extends('Admin.main')

@section('contenido')

        <div class="container col-sm-8">
            <h2>Editar Usuario</h2>
                <form action="{{route('productos.update', $productos->id)}}"method="POST">
                @method('PUT')
                @csrf
                    <div>
                        <div class="form group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input value="{{$productos->nombre}}" type="text" class="form-control" id="nombre"  name="nombre" >
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
                            <input value="{{$productos->codigo_barras}}" type="text" class="form-control" id="codigo_barras"  name="codigo_barras" >
                        </div>
                        <div class="form group">
                            <label for="presentacion" class="form-label">Presentacion</label>
                            <input value="{{$productos->presentacion}}" type="text" class="form-control" id="presentacion"  name="presentacion" >
                        </div>
                        <div class="form group">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input value="{{$productos->cantidad}}" type="text" class="form-control" id="cantidad"  name="cantidad" >
                        </div>
                        <div class="form group">
                            <label for="unidades" class="form-label">Unidades</label>
                            <input value="{{$productos->unidades}}" type="text" class="form-control" id="unidades"  name="unidades" >
                        </div>
                        <div class="form group">
                            <label for="precio_entrada" class="form-label">Precio de Entrada</label>
                            <input value="{{$productos->precio_entrada}}" type="text" class="form-control" id="precio_entrada"  name="precio_entrada" >
                        </div>
                        <div class="form group">
                            <label for="precio_salida" class="form-label">Precio de Salida</label>
                            <input value="{{$productos->precio_salida}}" type="text" class="form-control" id="precio_salida"  name="precio_salida" >
                        </div>
                        
                    </div>
                    <br>
                    <br>
                    <div>
                        <a href="/productoss">
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                        </a>                        
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>

                </form>

         </div>    
    

@endsection