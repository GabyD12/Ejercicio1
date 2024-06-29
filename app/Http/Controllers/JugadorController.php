<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use App\Models\Equipo;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    //
    public function index(){
        $jugador = Jugador::orderBy('id', 'desc')->get();
        return view('jugador.listar', ['jugador' => $jugador]);
    }
    public function edit(Jugador $jugador){
        return view('jugador.edit', compact('jugador'));
    }
    public function update(Request $request, Jugador $jugador){
        $jugador->nombre=$request->nombre;
        $jugador->posicion=$request->posicion;
        $jugador->fecha_de_nacimiento=$request-> fecha_de_nacimiento;
        
        $jugador->save();
     
        return redirect()->route('jugador.index');
     
      }    

      public function destroy (Jugador $jugador){
           
        $jugador->delete();
        return redirect()->route('jugador.index');
    }

    public function show(Jugador $jugador){


        return view('jugador.show',compact('jugador'));




    }
     public function create(){
        
            $equipo = Equipo::all(); // Pasar los equipos a la vista
            return view('jugador.create', compact('equipo'));
        
    }


    public function store(Request $request){
       
        $jugador= new Jugador();
        $jugador->nombre=$request->nombre;
        $jugador->posicion=$request->posicion;
        $jugador->fecha_de_nacimiento=$request->fecha_de_nacimiento;
        $jugador->equipo_id = $request['equipo_id'];
        
        
        
        $jugador->save();
   


    }
}
