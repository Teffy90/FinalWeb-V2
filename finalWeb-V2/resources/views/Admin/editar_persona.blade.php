@extends('Admin.main')

@section('contenido')

        <div class="container col-sm-8">
            <h2>Editar Usuario</h2>
                <form action="{{route('admin.update', $personas->id)}}"method="POST">
                @method('PUT')
                @csrf
                    <div >
                        <div class="form group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input value="{{$personas->nombre}}" type="text" class="form-control" id="nombre"  name="nombre" >
                        </div>
                        <div class="form group">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input value="{{$personas->apellidos}}" type="text" class="form-control" id="apellidos"  name="apellidos" >
                        </div>
                        <div class="form group">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input value="{{$personas->telefono}}" type="text" class="form-control" id="telefono"  name="telefono" >
                        </div>
                        <div class="form group">
                            <label for="id_tipo_persona" class="form-label">Tipo de Usuario</label><br>
                            <select id="id_tipo_persona"  name="id_tipo_persona" class="form-control">
                                <option value="">Seleccione el tipo de personas</option>
                                    @foreach ($tipo_personas as $tipo_personas)
                                        <option value="{{$tipo_personas->id}}">{{$tipo_personas->nombre}}</option>
                                        
                                    @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <br>
                    <br>
                    <div>
                        <a href="/admin">
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                        </a>                        
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>

                </form>

         </div>    
    

@endsection