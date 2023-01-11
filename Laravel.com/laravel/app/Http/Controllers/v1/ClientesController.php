<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\v1\Cliente;


class ClientesController extends Controller
{
     function getAll(Request $request)
    {
        $search =$request->search;
        $response = new \stdClass();
        $cliente = Cliente::all();
        $response->success=true;
        $response->data = $cliente; 
        return response()->json($response,200);
    }
    
    function getItem($id)
    {
        $response= new \stdClass();
        $cliente= Cliente::find($id);
        $response->success=true;
        $response->data = $cliente;
        return response()->json($response,200);   
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $cliente = new Cliente();
        
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->sexo = $request->sexo;
        $cliente->edad = $request->edad;
        $cliente->celular = $request->celular;
        $cliente->domicilio = $request->domicilio;
        $cliente->tipo_doc = $request->tipo_doc;
        $cliente->numero_doc = $request->numero_doc;
        $cliente->ocupacion = $request->ocupacion;
        $cliente->correo = $request->correo;        
          


        $cliente->save();
        $response->success = true; 
        $response->data = $cliente;
        return response()->json($response,200);   
    }

    function putUpdate(Request $request)
    {
        $response = new \stdClass();
        $cliente = Cliente::find($request->id);

        if($cliente)
        {
            $cliente->nombres = $request->nombres;
            $cliente->apellidos = $request->apellidos;
            $cliente->sexo = $request->sexo;
            $cliente->edad = $request->edad;
            $cliente->celular = $request->celular; 
            $cliente->domicilio = $request->domicilio;
            $cliente->tipo_doc = $request->tipo_doc;
            $cliente->numero_doc = $request->numero_doc;
            $cliente->ocupacion = $request->ocupacion;
            $cliente->correo = $request->correo;
            

            $cliente->save();
            $response->success = true;
            $response->data = $cliente;
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
        $cliente = Cliente::find($request->id);

        if($cliente)
        {
            
            if($request->nombres)
            $cliente->nombres = $request->nombres;
            
            if($request->apellidos)
            $cliente->apellidos = $request->apellidos;
            
            if($request->sexo)
            $cliente->sexo = $request->sexo;

            if($request->edad)
            $cliente->edad = $request->edad;
            
            if($request->celular)
            $cliente->celular = $request->celular;
            
            if($request->domicilio)
            $cliente->domicilio = $request->domicilio;
            
            if($request->tipo_doc)
            $cliente->tipo_doc = $request->tipo_doc;
            
            if($request->numero_doc)
            $cliente->numero_doc = $request->numero_doc;
            
            if($request->ocupacion)
            $cliente->ocupacion = $request->ocupacion;

            if($request->correo)
            $cliente->correo = $request->correo;

            
            $cliente->save();
            $response->success = true;
            $response->data = $cliente;
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
        $cliente = Cliente::find($id); 
        if($cliente){
            $cliente->delete();
            $response->success = true;

        }
        else{
            $response->success = false;
            $response->erros = ["el cliente con el id ".$id." no existe"];
        }
        return response()->json($response, ($response->success?200:401));

    }
    
}