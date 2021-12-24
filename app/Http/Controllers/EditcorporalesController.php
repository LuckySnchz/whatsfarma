<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corporal;
class EditcorporalesController extends Controller
{
   public function editarproducto(Request $form){

$target_path = "img/";
$target_path = $target_path . basename('imgco (' .$form["id"]. ').jpg'); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

$productos= corporal::all();
$corporal =corporal::find($form["id"]);


  $corporal->image = 'imgco (' .$form["id"]. ').jpg';

  if(!empty($_POST["Descripcion"])){
  $corporal->DescripcionProducto = $_POST["Descripcion"];}
   if(!empty($_POST["Precio"])){
  $corporal->Precio = $_POST["Precio"];}
  

      $corporal->save();
      return redirect("/corporalesedit");

}
}
