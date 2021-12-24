<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class EditperfumeriaController extends Controller
{
   public function editarproducto(Request $form){

$target_path = "img/";
$target_path = $target_path . basename('img (' .$form["id"]. ').jpg'); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

$productos= Producto::all();
$producto =Producto::find($form["id"]);


  $producto->image = 'img (' .$form["id"]. ').jpg';

  if(!empty($_POST["Descripcion"])){
  $producto->DescripcionProducto = $_POST["Descripcion"];}
   if(!empty($_POST["Precio"])){
  $producto->Precio = $_POST["Precio"];}
  

      $producto->save();
      return redirect("/perfumeriaedit");

}
}
