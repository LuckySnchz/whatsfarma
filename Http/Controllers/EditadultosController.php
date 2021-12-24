<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adulto;
class EditadultosController extends Controller
{
  public function editarproducto(Request $form){

$target_path = "img/";
$target_path = $target_path . basename('imga (' .$form["id"]. ').jpg'); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

$productos= Adulto::all();
$adulto =Adulto::find($form["id"]);


  $adulto->image = 'imga (' .$form["id"]. ').jpg';

  if(!empty($_POST["Descripcion"])){
  $adulto->DescripcionProducto = $_POST["Descripcion"];}
   if(!empty($_POST["Precio"])){
  $adulto->Precio = $_POST["Precio"];}
  

      $adulto->save();
      return redirect("/adultosedit");

}  
}
