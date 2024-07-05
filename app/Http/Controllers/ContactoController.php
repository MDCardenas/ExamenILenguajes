<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function vistaContactos($id){
        $contactos = Contacto::where('codigoEntrada', $id)->get();

        echo $contactos;
        return view('vercontactos',compact('contactos'))->with('numeroEntradaR', $id);
    }
    
    public function vistaAgregar($id){
        return view('agregarcontacto',['numeroEntradaR'=>$id]);
    }

    public function guardarContacto(Request $request){
        $nvoContacto = new Contacto();
        $nvoContacto->codigoEntrada = $request->codigo;
        $nvoContacto->nombre = $request->nombre;
        $nvoContacto->apellido = $request->apellido;
        $nvoContacto->telefono = $request->telefono;
        $nvoContacto->save();

        return redirect('/directorios/contactos/'.$request->codigo);
    }
}
