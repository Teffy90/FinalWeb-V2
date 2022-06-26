@extends('Admin.main')
@section('contenido')

    <div class="container">
    <a href="{{route ('admin.create')}}">
        <button type="button" class="btn btn-primary">Crear Usuario</button>
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
                        <a href="{{route ('admin.edit', $personas->id)}}">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                        <form action="{{route ('admin.destroy', $personas ?? '' ->id)}}" method="post">
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