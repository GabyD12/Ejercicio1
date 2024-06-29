<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listar Jugador</h1>

<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>posicion</th>
            <th>fecha_de_nacimiento</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach ($jugador as $jugador)
        <tr>
            <td>{{$jugador->nombre}}</td>
            <td>{{$jugador->posicion}}</td>
            <td>{{$jugador->fecha_de_nacimiento}}</td>
          
            <td>
                <a href="{{route('jugador.show',$jugador->id)}}">Detalle</a>
                <a href="{{route('jugador.edit',$jugador->id)}}">Editar</a>
                <form action="{{route('jugador.destroy',$jugador->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
   
</body>
</html>
