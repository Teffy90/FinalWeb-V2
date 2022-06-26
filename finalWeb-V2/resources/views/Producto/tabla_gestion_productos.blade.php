@extends('Admin.main')

@section('contenido')

    <div class="container">
    <a href="{{route ('productos.create')}}">
        <button type="button" class="btn btn-primary">Crear producto</button>
    </a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Codigo de Barras</th>
                <th scope="col">Presentacion</th>
                <th scope="col">Cantidades</th>
                <th scope="col">Unidades</th>
                <th scope="col">Precio Entrada</th>
                <th scope="col">Precio Salida</th>

                <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($productos as $productos)
                <tr>
                    <td>{{$productos->id}}</td>
                    <td>{{$productos->nombre}}</td>
                    <td>{{$productos->id_categoria}}</td>   
                    <td>{{$productos->codigo_barras}}</td>                 
                    <td>{{$productos->presentacion}}</td>
                    <td>{{$productos->cantidad}}</td>
                    <td>{{$productos->unidades}}</td>
                    <td>{{$productos->precio_entrada}}</td>
                    <td>{{$productos->precio_salida}}</td>
                    <td>
                        <a href="{{route ('productos.edit', $productos->id)}}">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                        <form action="{{route ('productos.destroy', $productos ?? '' ->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>    
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection