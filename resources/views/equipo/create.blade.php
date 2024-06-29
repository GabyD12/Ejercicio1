<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Equipo</h1>

    <form action="{{route('equipo.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
           Estadio
            <br>
            <input type="text" name="estadio">
        </label>
        <br>
        <label>
           Aforo
            <br>
            <input type="text" name="aforo">
        </label>
       
        <br>
        <label>
          Año
            <br>
            <input type="text" name="año">
        </label>

        <br>
     
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       




</body>
</html>