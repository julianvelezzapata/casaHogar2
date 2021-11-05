<?php

namespace App\Controllers;
use App\Models\AnimalModelo;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function ingreso()
    { // PASO 1 : recibo los datos enviados en la pantalla
        $nombre= $this->request->getPost("nombre");
        $foto= $this->request->getPost("foto"); 
        $edad= $this->request->getPost("edad"); 
        $descripcion= $this->request->getPost("descripcion"); 
        $tipo= $this->request->getPost("tipo"); 

        
        
      // PASO2: vslido que llego
      if ($this->validate('animal')) {
          echo("todo bien");
      }else {
        $mensaje="tienes datos pendientes";
          return redirect()->to(site_url('/productos/ingreso'))->with('mensaje', $mensaje);
      }
      //PASO 3 : crear un arreglo asociativo con los datos anteriores
      $datos = array (
          "nombre" => $nombre,
          "foto" => $foto,
          "edad" => $edad,
          "descripcion" => $descripcion,
          "tipo" => $tipo,
      );
      //PASO 4 :  intentamos grabar los datos en la base de datos
      try {                       // intente hacer esto  
        $modelo = new AnimalModelo();
        $modelo-> insert($datos);     // insert() palabra reservada codeignater para insertar el arreglo que contiene la informacion
        return redirect()->to(site_url('/productos/ingreso'))->with('mensaje',"exito agregando producto");
        
      } catch (\Exception $error) { // capture por que no pudo hacerse (error)
        return redirect()->to(site_url('/productos/ingreso'))->with('mensaje',$error -> getMessage());    
      }
    }

    public function buscar(){

      try{
        
        $modelo= new AnimalModelo();// lo primero que tengo que hacer para buscar datos es buscar el modelo        
        $resultado=$modelo->findAll();// despues decirle que si me puede ayudar a buscar todos los datos        
        $animales=array('animales'=>$resultado); // adecuar la respuesta para poderla enviar, creo variable animales
        
        return view('listaProductos',$animales); // retornar la vista en el arreglo productos

      }catch(\Exception $error) { // capture por que no pudo hacerse (error)
      // arreglar  return redirect()->to(site_url('/animales/ingreso'))->with('mensaje',$error -> getMessage());
      }
      return view ('listaAnimales');
    }


}
