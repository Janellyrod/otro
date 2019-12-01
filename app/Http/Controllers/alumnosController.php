<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnosModel;

class alumnosController extends Controller
{
   public function index()
    {
        $alumnos = alumnosModel::all();
       return view("alumnos", compact("alumnos"));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumnos=new alumnosModel();
        $alumnos->nombreA=$request->nombre;//primero es el de la bd y el segundo es el del formulario
        $alumnos->apeP=$request->apellido;//primero es el de la bd y el segundo es el del formulario
        $alumnos->grado=$request->grado;//primero es el de la bd y el segundo es el del formulario
        $alumnos->carrera=$request->carrera;//primero es el de la bd y el segundo es el del formulario
        $alumnos->save();
        return redirect("alumnos")->with("success", "Alumno agregado");
        
        //return redirect()->("plantilla.blade.php"); //nombre de la vista
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(alumnosModel::where("id",$id)->exists()){
        $alumnos = aluModel::select("*")->where("id",$id)->get();
        return view("editaalumnos", compact("alumnos"));
        }
        else{return redirect("alumnos")->with("error", "Alumno no encontrado");
        
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if(alumnosModel::where("id",$id)->exists()){
        $alumnos = bancosModel::find($id);
        $alumnos->nombreA=$request->nombre;//primero es el de la bd y el segundo es el del formulario
        $alumnos->apeP=$request->apellido;//primero es el de la bd y el segundo es el del formulario
        $alumnos->grado=$request->grado;//primero es el de la bd y el segundo es el del formulario
        $alumnos->carrera=$request->carrera;//primero es el de la bd y el segundo es el del formulario
        $alumnos->save();
        return redirect("alumnos")->with("success", "Actualizacion correta");
        }
        else{return redirect("alumnos")->with("error", "Alumno no encontrado");
        
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(alumnosModel::where("id",$id)->exists()){
        $alumnos = aluModel::find($id);
        $alumnos->delete();
        return redirect("alumnos")->with("success", "Alumno eliminado");
    }
        else{return redirect("alumnos")->with("error", "Alumno no encontrado");
        
        }
    }
}
