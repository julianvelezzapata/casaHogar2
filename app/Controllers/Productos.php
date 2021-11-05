<?php

namespace App\Controllers;
// se trae, importa el modelo de datos
use App\Models\ProductoModelo;

class Productos extends BaseController
{
    public function index()
    {
        return view('resgistroProductos');
    }

    public function registrar()
    {  //PASO 1:  recibo los datos enviados del formulario
        $producto= $this->request->getPost("producto"); // traigo el valor que llame name="producto" del formulario
        $foto= $this->request->getPost("foto"); // traigo el valor que llame name="foto" del formulario
        $precio= $this->request->getPost("precio"); // traigo el valor que llame name="precio" del formulario
        $descripcion= $this->request->getPost("descripcion"); // traigo el valor que llame name="descripcion" del formulario
        $tipo= $this->request->getPost("tipo"); // traigo el valor que llame name="tipo" del formulario
        
      // PASO 2: VALIDO QUE LLEGO
      if($this->validate('producto')){  // this operador flecha para acceder al metodo cuando lo uso pongo el nombre de la variable o clase producto
        echo("bien");
      }else {
        
        $mensaje="tienes datos pendientes";
          return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje); // redirecciona para poder mostrar el modal
      }
      //PASO3: crear un arreglo asociativo con los datos anteriores
        $datos=array(
            "producto" =>$producto,
            "foto" => $foto,
            "precio" => $precio,
            "descripcion" => $descripcion,
            "tipo" => $tipo
        );

        //PASO4: intentamos grabar los datos en la BD
        try {                       // intente hacer esto  
          $modelo = new ProductoModelo();
          $modelo-> insert($datos);     // insert() palabra reservada codeignater para insertar el arreglo que contiene la informacion
          return redirect()->to(site_url('/productos/registro'))->with('mensaje',"exito agregando producto");
          
        } catch (\Exception $error) { // capture por que no pudo hacerse (error)
          return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error -> getMessage());    
        }
    }

    public function buscar(){

      try{
        
        $modelo= new ProductoModelo();// lo primero que tengo que hacer para buscar datos es buscar el modelo        
        $resultado=$modelo->findAll();// despues decirle que si me puede ayudar a buscar todos los datos        
        $productos=array('productos'=>$resultado); // adecuar la respuesta para poderla enviar, creo variable productos
         return view('listaProductos',$productos); // retornar la vista en el arreglo productos

      }catch(\Exception $error) { // capture por que no pudo hacerse (error)
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error -> getMessage());
      }
      return view ('listaProductos');
    }

   public function eliminar($id){
     try{
        $modelo=new ProductoModelo();
        
        $modelo->where('id',$id)->delete();
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',"exito eliminando el producto");

       }catch(\Exception $error){
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

     }


   }

  public function editar($id){

    $producto= $this->request->getPost("producto"); // traigo el valor que llame name="producto" del formulario
    $precio= $this->request->getPost("precio"); // traigo el valor que llame name="precio" del formulario

    // validacion de datos

    //organizo los datos en un array asociativo
    $datos = array(
      'producto'=>$producto,
      'precio'=> $precio
    );
    // crear un objeto del modelo
    try {                       // intente hacer esto  
      $modelo = new ProductoModelo();
      $modelo-> update($id, $datos);     // update() palabra reservada codeignater para actualice el arreglo que contiene la informacion
      return redirect()->to(site_url('/productos/registro'))->with('mensaje',"exito editando producto");
      
    } catch (\Exception $error) { // capture por que no pudo hacerse (error)
      return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error -> getMessage());    
    }

  }
}





