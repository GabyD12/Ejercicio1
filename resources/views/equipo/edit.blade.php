<h1>Actualizar Equipo</h1>
<form action="{{route('equipo.update', $equipo)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Estadio
    <br>
    <input name="estadio" type="text" value="{{old('estadio',$equipo->estadio) }}">
    <br>
    </label>
   
    <label>
    Aforo
    <br>
     <input name="aforo" type="text" value="{{old('aforo',$equipo->aforo) }}">
     <br>
     </label>
    
    <label>
    EAño
    <br>
    <input name="año" type="text" value="{{old('año',$equipo->año)}}">
    <br>
    </label>
   
    <br>

       
        
    <br>
   
    <button  type="submit">Actualizar Equipo</button>
   
</form>