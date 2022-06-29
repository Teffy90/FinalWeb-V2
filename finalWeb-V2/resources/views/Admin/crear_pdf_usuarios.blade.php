    <h1>Buena Fortuna</h1>
    
    <p>A continuacion se mostrará una lista de los usuarios activos del sistema.</p>
    <br>        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Tipo de Persona</th>
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

                </tr>
            @endforeach