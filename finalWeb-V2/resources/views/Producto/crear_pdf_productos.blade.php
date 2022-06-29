<h1>Buena Fortuna</h1>
    <br>
    <p>A continuacion se mostrará una lista de los productos activos del sistema.</p>

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
                    

                </tr>
            @endforeach
            </tbody>
        </table>