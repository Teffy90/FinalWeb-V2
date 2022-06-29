@extends('Admin.main')

@section('contenido')
            
            <div class="container col-sm-8">
            <h2>Crear Usuario</h2>
                <form action="{{route('admin.store')}}" method="post" id="formularioUsuario" name="formularioUsuario">
                    @csrf
                    <div>
                        <div class="form group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre"  name="nombre" >
                        </div>
                        <div class="form group">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos"  name="apellidos" >
                        </div>
                        <div class="form group">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono"  name="telefono" >
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
                        <a href="{{route ('admin.index')}}">
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                        </a>                        
                        <button type="submit" class="btn text-white" style="background-color: #BB8FCE">Guardar</button>
                    </div>

                </form>

            </div>    
                


@endsection