<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mujer;
class EditmujerController extends Controller
{
 public function editarproducto(Request $form){

$target_path = "img/";
$target_path = $target_path . basename('imgm (' .$form["id"]. ').jpg'); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

$productos= Mujer::all();
$mujer =Mujer::find($form["id"]);


  $mujer->image = 'imgm (' .$form["id"]. ').jpg';

  if(!empty($_POST["Descripcion"])){
  $mujer->DescripcionProducto = $_POST["Descripcion"];}
   if(!empty($_POST["Precio"])){
  $mujer->Precio = $_POST["Precio"];}
  

      $mujer->save();
      return redirect("/mujeresedit");

}
}
