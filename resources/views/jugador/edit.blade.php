<h1>Actualizar Jugador</h1>
<form action="{{route('jugador.update', $jugador)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Nombre
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$jugador->nombre) }}">
    <br>
    </label>
   
    <label>
    posicion
    <br>
     <input name="posicion" type="text" value="{{old('posicion',$jugador->posicion) }}">
     <br>
     </label>
    
    <label>
    Fecha De Nacimiento
    <br>
    <input name="fecha_de_nacimiento" type="text" value="{{old('fecha_de_nacimiento',$jugador->fecha_de_nacimiento)}}">
    <br>
    </label>
   
    <br>

       
        
    <br>
   
    <button  type="submit">Actualizar Jugador</button>
   
</form>