<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listar Equipo</h1>

<table>
    <thead>
        <tr>
            <th>estadio</th>
            <th>aforo</th>
            <th>año</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach ($equipo as $equipo)
        <tr>
            <td>{{$equipo->estadio}}</td>
            <td>{{$equipo->aforo}}</td>
            <td>{{$equipo->año}}</td>
          
            <td>
                <a href="{{route('equipo.show',$equipo->id)}}">Detalle</a>
                <a href="{{route('equipo.edit',$equipo->id)}}">Editar</a>
                <form action="{{route('equipo.destroy',$equipo->id)}}" method="POST">
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
