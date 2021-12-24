<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mujer;
class EditarController extends Controller
{
public function editarproducto(Request $form){

$target_path = "img/";
$target_path = $target_path . basename('imgm (' .$form["id"]. ').jpg'); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

$productos= Mujer::all();
$mujer =Mujer::find($form["id"]);


  $mujer->image = 'imgm (' .$form["id"]. ').jpg';
  
      $mujer->save();


 foreach ($productos as $producto) {
  //TRAER DEL FORM NUEVOS PRECIOS Y NUEVOS NOMBRE DE PRODUCTO//


$productodescripcion=$producto->NombreProducto;
$productoprecio=$producto->NombrePrecio;
$productoimage=$producto->image;

if(!empty($_POST["$productodescripcion"])){
 $mujer->DescripcionProducto=$_POST["$productodescripcion"];


    

}


if(!empty($_POST["$productoprecio"])){
  $mujer->Precio=$_POST["$productodescripcion"];



}

}









      return redirect("/mujeresedit");

   	}
}
