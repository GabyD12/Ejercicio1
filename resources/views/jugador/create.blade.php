<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jugador</h1>

    <form action="{{route('jugador.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
           Nombre
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
           Posicion
            <br>
            <input type="text" name="posicion">
        </label>
       
        <br>
        <label>
          Fecha De Nacimiento
            <br>
            <input type="text" name="fecha_de_nacimiento">
        </label>
        <br>
        <label>
            Equipo
            <br>
            <select name="equipo_id" required>
                @foreach($equipo as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </label>
        <br>
     
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       
