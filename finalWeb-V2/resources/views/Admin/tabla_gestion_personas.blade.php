@extends('Admin.main')

@section('contenido')

    <div class="container">
    <h1>Mostrar Usuarios</h1>
        <a href="{{route ('personas.create')}}">
            <button type="button" class="btn btn-info">Crear producto</button>
        </a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Tipo de Persona</th>
                <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($personas as $personas)
                <tr>
                    <td>{{$personas->id}}</td>
                    <td>{{$personas->nombre}}</td>
                    <td>{{$personas->apellidos}}</td>
                    <td>{{$personas->telefono}}</td>
                    <td>{{$personas->id_tipo_persona}}</td>
                    <td>
                        <a href="">
                            <button type="button" class="btn btn-primary">Modificar</button>
                        </a>
                        <form action="" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection