<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bucal;
class EditbucalesController extends Controller
{
    public function editarproducto(Request $form){

$target_path = "img/";
$target_path = $target_path . basename('imgo (' .$form["id"]. ').jpg'); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

$productos= Bucal::all();
$bucal =Bucal::find($form["id"]);


  $bucal->image = 'imgo (' .$form["id"]. ').jpg';

  if(!empty($_POST["Descripcion"])){
  $bucal->DescripcionProducto = $_POST["Descripcion"];}
   if(!empty($_POST["Precio"])){
  $bucal->Precio = $_POST["Precio"];}
  

      $bucal->save();
      return redirect("/bucalesedit");

}  
}
