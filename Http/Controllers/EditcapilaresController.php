<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capilar;
class EditcapilaresController extends Controller
{
public function editarproducto(Request $form){

$target_path = "img/";
$target_path = $target_path . basename('imgca (' .$form["id"]. ').jpg'); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

$productos= Capilar::all();
$capilar =capilar::find($form["id"]);


  $capilar->image = 'imgca (' .$form["id"]. ').jpg';

  if(!empty($_POST["Descripcion"])){
  $capilar->DescripcionProducto = $_POST["Descripcion"];}
   if(!empty($_POST["Precio"])){
  $capilar->Precio = $_POST["Precio"];}
  

      $capilar->save();
      return redirect("/capilaresedit");

}      
}
