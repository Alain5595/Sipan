<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\v1\Persona;


class PersonasController extends Controller
{
     function getAll(Request $request)
    {
        $search =$request->search;
        $response = new \stdClass();
        $persona = Persona::all();
        $response->success=true;
        $response->data = $persona; 
        return response()->json($response,200);
    }
    
    function getItem($id)
    {
        $response= new \stdClass();
        $persona= Persona::find($id);
        $response->success=true;
        $response->data = $persona;
        return response()->json($response,200);   
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $persona = new Persona();
        
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->sexo = $request->sexo;
        $persona->edad = $request->edad;
        $persona->celular = $request->celular;
        $persona->domicilio = $request->domicilio;
        $persona->tipo_doc = $request->tipo_doc;
        $persona->numero_doc = $request->numero_doc;
        $persona->ocupacion = $request->ocupacion;
        $persona->correo = $request->correo;        
          


        $persona->save();
        $response->success = true; 
        $response->data = $persona;
        return response()->json($response,200);   
    }

    function putUpdate(Request $request)
    {
        $response = new \stdClass();
        $persona = Persona::find($request->id);

        if($persona)
        {
            $persona->nombres = $request->nombres;
            $persona->apellidos = $request->apellidos;
            $persona->sexo = $request->sexo;
            $persona->edad = $request->edad;
            $persona->celular = $request->celular; 
            $persona->domicilio = $request->domicilio;
            $persona->tipo_doc = $request->tipo_doc;
            $persona->numero_doc = $request->numero_doc;
            $persona->ocupacion = $request->ocupacion;
            $persona->correo = $request->correo;
            

            $persona->save();
            $response->success = true;
            $response->data = $persona;
        }
        else{
            $response->success = false;
            $response->errors = ["el cliente con el id ".$request->id."no existe"];
        }

        return response()->json($response, ($response->success?200:401));   
    }
    
    function patchUpdate(Request $request)
    {
        $response = new \stdClass();
        $persona = Persona::find($request->id);

        if($persona)
        {
            
            if($request->nombres)
            $persona->nombres = $request->nombres;
            
            if($request->apellidos)
            $persona->apellidos = $request->apellidos;
         
            if($request->sexo)
            $persona->sexo = $request->sexo;

            if($request->edad)
            $persona->edad = $request->edad;
            
            if($request->celular)
            $persona->celular = $request->celular;
            
            if($request->domicilio)
            $persona->domicilio = $request->domicilio;
            
            if($request->tipo_doc)
            $persona->tipo_doc = $request->tipo_doc;
            
            if($request->numero_doc)
            $persona->numero_doc = $request->numero_doc;
            
            if($request->ocupacion)
            $persona->ocupacion = $request->ocupacion;

            if($request->correo)
            $persona->correo = $request->correo;

            
            $persona->save();
            $response->success = true;
            $response->data = $persona;
        }
        else{
            $response->success = false;
            $response->erros = ["el cliente con el id ".$request->id." no existe"];
        }

        return response()->json($response, ($response->success?200:401));   
    }
    
    function delete($id)
    {
        $response = new \stdClass();
        $persona = Persona::find($id); 
        if($persona){
            $persona->delete();
            $response->success = true;

        }
        else{
            $response->success = false;
            $response->erros = ["el cliente con el id ".$id." no existe"];
        }
        return response()->json($response, ($response->success?200:401));

    }
    
}