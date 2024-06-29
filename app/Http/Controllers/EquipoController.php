<?php

namespace App\Http\Controllers;
use App\Models\Equipo;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    //
    public function index(){
        $equipo = Equipo::orderBy('id', 'desc')->get();
        return view('equipo.listar', ['equipo' => $equipo]);
    }
    public function edit(Equipo $equipo){
        return view('equipo.edit', compact('equipo'));
    }
    public function update(Request $request, Equipo $equipo){
        $equipo->estadio=$request->estadio;
        $equipo->aforo=$request->aforo;
        $equipo->año=$request-> año;
        
        $equipo->save();
     
        return redirect()->route('equipo.index');
     
      }    

      public function destroy (Equipo $equipo){
           
        $equipo->delete();
        return redirect()->route('equipo.index');
    }

    public function show(Equipo $equipo){


        return view('equipo.show',compact('equipo'));




    }
     public function create(){
        return view('equipo.create');
    }


    public function store(Request $request){
       
        $equipo= new Equipo();
        $equipo->estadio=$request->estadio;
        $equipo->aforo=$request->aforo;
        $equipo->año=$request->año;
        
        
        $equipo->save();
   


    }
}
