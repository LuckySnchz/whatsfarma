<?php

session_start();




 ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https:fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>INICIO</title>
      <style>

  .flex-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: left;

}

.flex-container > div {

  width: 300px;
  height: 350px;
  margin: 10px;
  text-align: center;
  line-height: 25px;
  font-size: 1.2em;
  padding: 10px;
  margin-bottom: -5%;

}
body{
  background-color: #4bbfdd;
}


      </style>


   </head>
     <header>
      
</header>
<a name="covid"></a>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 150px;text-align: center;" > 
  <img src="{{ asset('img/logos/marca.jpg') }}" style="width: 40%">
 

</section>


<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 45px;text-align: center;margin-top: -2%" >

</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 100px;text-align: center;margin-top: -2%" >



@if($constante==0)
<div  id="whatsapp" style="display: none;font-size: 2em">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%">
<?php


echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirceuno%20$totalpreciouno%20$dos%20$productodos%20$pircedos%20$totalpreciodos%20$tres%20$productotres%20$pircetres%20$totalpreciotres%20$cuatro%20$productocuatro%20$pircecuatro%20$totalpreciocuatro%20 $cinco%20$productocinco%20$pircecinco%20$totalpreciocinco%20
 $seis%20$productoseis%20$pirceseis%20$totalprecioseis%20$siete%20$productosiete%20$pircesiete%20$totalpreciosiete%20
   $ocho%20$productoocho%20$pirceocho%20$totalprecioocho%20$nueve%20$productonueve%20$pircenueve%20$totalprecionueve%20
     $diez%20$productodiez%20$pircediez%20$totalpreciodiez%20$once%20$productoonce%20$pirceonce%20$totalprecioonce
 $doce%20$productodoce%20$pircedoce%20$totalpreciodoce%20$trece%20$productotrece%20$pircetrece%20$totalpreciotrece%20$catorce%20$productocatorce%20$pircecatorce%20$totalpreciocatorce%20$quince%20$productoquince%20$pircequince%20$totalprecioquince%20$dieciseis%20$productodieciseis%20$pircedieciseis%20$totalpreciodieciseis%20$diecisiete%20$productodiecisiete%20$pircediecisiete%20$totalpreciodiecisiete%20$dieciocho%20$productodieciocho%20$pircedieciocho%20$totalpreciodieciocho
%20$diecinueve%20$productodiecinueve%20$pircediecinueve%20$totalpreciodiecinueve%20$veinte%20$productoveinte%20$pirceveinte%20$totalprecioveinte%20$veintiuno%20$productoveintiuno%20$pirceveintiuno%20$totalprecioveintiuno%20$veintidos%20$productoveintidos%20$pirceveintidos%20$totalprecioveintidos%20$veintitres%20$productoveintitres%20$pirceveintitres%20$totalprecioveintitres%20$veinticuatro%20$productoveinticuatro%20$pirceveinticuatro%20$totalprecioveinticuatro%20$veinticinco%20$productoveinticinco%20$pirceveinticinco%20$totalprecioveinticinco%20$veintiseis%20$productoveintiseis%20$pirceveintiseis%20$totalprecioveintiseis%20$veintisiete%20$productoveintisiete%20$pirceveintisiete%20$totalprecioveintisiete%20$veintiocho%20$productoveintiocho%20$pirceveintiocho%20$totalprecioveintiocho%20$veintinueve%20$productoveintinueve%20$pirceveintinueve%20$totalprecioveintinueve%20treinta%20$productotreinta%20$pircetreinta%20$totalpreciotreinta%20$unom%20$productounom%20$pirceunom%20$totalpreciounom%20$dosm%20$productodosm%20$pircedosm%20$totalpreciodosm%20$tresm%20$productotresm%20$pircetresm%20$totalpreciotresm%20$cuatrom%20$productocuatrom%20$pircecuatrom%20$totalpreciocuatrom%20 $cincom%20$productocincom%20$pircecincom%20$totalpreciocincom%20
 $seism%20$productoseism%20$pirceseism%20$totalprecioseism%20$sietem%20$productosietem%20$pircesietem%20$totalpreciosietem%20
   $ochom%20$productoochom%20$pirceochom%20$totalprecioochom%20$nuevem%20$productonuevem%20$pircenuevem%20$totalprecionuevem%20
     $diezm%20$productodiezm%20$pircediezm%20$totalpreciodiezm%20$oncem%20$productooncem%20$pirceoncem%20$totalprecioonce
 $docem%20$productodocem%20$pircedocem%20$totalpreciodocem%20$trecem%20$productotrecem%20$pircetrecem%20$totalpreciotrecem%20$catorcem%20$productocatorcem%20$pircecatorcem%20$totalpreciocatorcem%20$quincem%20$productoquincem%20$pircequincem%20$totalprecioquincem%20$dieciseism%20$productodieciseism%20$pircedieciseism%20$totalpreciodieciseism%20$diecisietem%20$productodiecisietem%20$pircediecisietem%20$totalpreciodiecisietem%20$dieciochom%20$productodieciochom%20$pircedieciochom%20$totalpreciodieciocho
m%20$diecinuevem%20$productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20$veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20$veintiunom%20$productoveintiunom%20$pirceveintiunom%20$totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20$pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20$productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20$veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20$totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20$pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20$productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20$veintisietem%20$productoveintisietem%20$pirceveintisietem%20$totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20$pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20$productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreintam%20$unoa%20$productounoa%20$pirceunoa%20$totalpreciounoa%20$dosa%20$productodosa%20$pircedosa%20$totalpreciodosa%20$tresa%20$productotresa%20$pircetresa%20$totalpreciotresa%20$cuatroa%20$productocuatroa%20$pircecuatroa%20$totalpreciocuatroa%20 $cincoa%20$productocincoa%20$pircecincoa%20$totalpreciocincoa%20 $seisa%20$productoseisa%20$pirceseisa%20$totalprecioseisa%20$sietea%20$productosietea%20$pircesietea%20$totalpreciosietea%20$ochoa%20$productoochoa%20$pirceochoa%20$totalprecioochoa%20$nuevea%20$productonuevea%20$pircenuevea%20$totalprecionuevea%20$dieza%20$productodieza%20$pircedieza%20$totalpreciodieza%20$oncea%20$productooncea%20$pirceoncea%20$totalprecioonce
 $docea%20$productodocea%20$pircedocea%20$totalpreciodocea%20$trecea%20$productotrecea%20$pircetrecea%20$totalpreciotrecea%20$catorcea%20$productocatorcea%20$pircecatorcea%20$totalpreciocatorcea%20$quincea%20$productoquincea%20$pircequincea%20$totalprecioquincea%20$dieciseisa%20$productodieciseisa%20$pircedieciseisa%20$totalpreciodieciseisa%20$diecisietea%20$productodiecisietea%20$pircediecisietea%20$totalpreciodiecisietea%20$dieciochoa%20$productodieciochoa%20$pircedieciochoa%20$totalpreciodieciochoa%20$diecinuevea%20$productodiecinuevea%20$pircediecinuevea%20$totalpreciodiecinuevea%20$veintea%20$productoveintea%20$pirceveintea%20$totalprecioveintea%20$veintiunoa%20$productoveintiunoa%20$pirceveintiunoa%20$totalprecioveintiunoa%20$veintidosa%20$productoveintidosa%20$pirceveintidosa%20$totalprecioveintidosa%20$veintitresa%20$productoveintitresa%20$pirceveintitresa%20$totalprecioveintitresa%20$veinticuatroa%20$productoveinticuatroa%20$pirceveinticuatroa%20$totalprecioveinticuatroa%20$veinticincoa%20$productoveinticincoa%20$pirceveinticincoa%20$totalprecioveinticincoa%20$veintiseisa%20$productoveintiseisa%20$pirceveintiseisa%20$totalprecioveintiseisa%20$veintisietea%20$productoveintisietea%20$pirceveintisietea%20$totalprecioveintisietea%20$veintiochoa%20$productoveintiochoa%20$pirceveintiochoa%20$totalprecioveintiochoa%20$veintinuevea%20$productoveintinuevea%20$pirceveintinuevea%20$totalprecioveintinuevea%20treintaa%20$productotreintaa%20$pircetreintaa%20$totalpreciotreintaa%20
TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>"
?>
     
 <br><br><br>
</div>


@endif

@if($constante==1)
<div  id="whatsapp" style="display: block;font-size: 2em">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%">
<?php


echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirceuno%20$totalpreciouno%20$dos%20$productodos%20$pircedos%20$totalpreciodos%20$tres%20$productotres%20$pircetres%20$totalpreciotres%20$cuatro%20$productocuatro%20$pircecuatro%20$totalpreciocuatro%20 $cinco%20$productocinco%20$pircecinco%20$totalpreciocinco%20
 $seis%20$productoseis%20$pirceseis%20$totalprecioseis%20$siete%20$productosiete%20$pircesiete%20$totalpreciosiete%20
   $ocho%20$productoocho%20$pirceocho%20$totalprecioocho%20$nueve%20$productonueve%20$pircenueve%20$totalprecionueve%20
     $diez%20$productodiez%20$pircediez%20$totalpreciodiez%20$once%20$productoonce%20$pirceonce%20$totalprecioonce
 $doce%20$productodoce%20$pircedoce%20$totalpreciodoce%20$trece%20$productotrece%20$pircetrece%20$totalpreciotrece%20$catorce%20$productocatorce%20$pircecatorce%20$totalpreciocatorce%20$quince%20$productoquince%20$pircequince%20$totalprecioquince%20$dieciseis%20$productodieciseis%20$pircedieciseis%20$totalpreciodieciseis%20$diecisiete%20$productodiecisiete%20$pircediecisiete%20$totalpreciodiecisiete%20$dieciocho%20$productodieciocho%20$pircedieciocho%20$totalpreciodieciocho
%20$diecinueve%20$productodiecinueve%20$pircediecinueve%20$totalpreciodiecinueve%20$veinte%20$productoveinte%20$pirceveinte%20$totalprecioveinte%20$veintiuno%20$productoveintiuno%20$pirceveintiuno%20$totalprecioveintiuno%20$veintidos%20$productoveintidos%20$pirceveintidos%20$totalprecioveintidos%20$veintitres%20$productoveintitres%20$pirceveintitres%20$totalprecioveintitres%20$veinticuatro%20$productoveinticuatro%20$pirceveinticuatro%20$totalprecioveinticuatro%20$veinticinco%20$productoveinticinco%20$pirceveinticinco%20$totalprecioveinticinco%20$veintiseis%20$productoveintiseis%20$pirceveintiseis%20$totalprecioveintiseis%20$veintisiete%20$productoveintisiete%20$pirceveintisiete%20$totalprecioveintisiete%20$veintiocho%20$productoveintiocho%20$pirceveintiocho%20$totalprecioveintiocho%20$veintinueve%20$productoveintinueve%20$pirceveintinueve%20$totalprecioveintinueve%20treinta%20$productotreinta%20$pircetreinta%20$totalpreciotreinta%20$unom%20$productounom%20$pirceunom%20$totalpreciounom%20$dosm%20$productodosm%20$pircedosm%20$totalpreciodosm%20$tresm%20$productotresm%20$pircetresm%20$totalpreciotresm%20$cuatrom%20$productocuatrom%20$pircecuatrom%20$totalpreciocuatrom%20 $cincom%20$productocincom%20$pircecincom%20$totalpreciocincom%20
 $seism%20$productoseism%20$pirceseism%20$totalprecioseism%20$sietem%20$productosietem%20$pircesietem%20$totalpreciosietem%20
   $ochom%20$productoochom%20$pirceochom%20$totalprecioochom%20$nuevem%20$productonuevem%20$pircenuevem%20$totalprecionuevem%20
     $diezm%20$productodiezm%20$pircediezm%20$totalpreciodiezm%20$oncem%20$productooncem%20$pirceoncem%20$totalprecioonce
 $docem%20$productodocem%20$pircedocem%20$totalpreciodocem%20$trecem%20$productotrecem%20$pircetrecem%20$totalpreciotrecem%20$catorcem%20$productocatorcem%20$pircecatorcem%20$totalpreciocatorcem%20$quincem%20$productoquincem%20$pircequincem%20$totalprecioquincem%20$dieciseism%20$productodieciseism%20$pircedieciseism%20$totalpreciodieciseism%20$diecisietem%20$productodiecisietem%20$pircediecisietem%20$totalpreciodiecisietem%20$dieciochom%20$productodieciochom%20$pircedieciochom%20$totalpreciodieciocho
m%20$diecinuevem%20$productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20$veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20$veintiunom%20$productoveintiunom%20$pirceveintiunom%20$totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20$pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20$productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20$veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20$totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20$pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20$productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20$veintisietem%20$productoveintisietem%20$pirceveintisietem%20$totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20$pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20$productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreintam%20$unoa%20$productounoa%20$pirceunoa%20$totalpreciounoa%20$dosa%20$productodosa%20$pircedosa%20$totalpreciodosa%20$tresa%20$productotresa%20$pircetresa%20$totalpreciotresa%20$cuatroa%20$productocuatroa%20$pircecuatroa%20$totalpreciocuatroa%20 $cincoa%20$productocincoa%20$pircecincoa%20$totalpreciocincoa%20 $seisa%20$productoseisa%20$pirceseisa%20$totalprecioseisa%20$sietea%20$productosietea%20$pircesietea%20$totalpreciosietea%20$ochoa%20$productoochoa%20$pirceochoa%20$totalprecioochoa%20$nuevea%20$productonuevea%20$pircenuevea%20$totalprecionuevea%20$dieza%20$productodieza%20$pircedieza%20$totalpreciodieza%20$oncea%20$productooncea%20$pirceoncea%20$totalprecioonce
 $docea%20$productodocea%20$pircedocea%20$totalpreciodocea%20$trecea%20$productotrecea%20$pircetrecea%20$totalpreciotrecea%20$catorcea%20$productocatorcea%20$pircecatorcea%20$totalpreciocatorcea%20$quincea%20$productoquincea%20$pircequincea%20$totalprecioquincea%20$dieciseisa%20$productodieciseisa%20$pircedieciseisa%20$totalpreciodieciseisa%20$diecisietea%20$productodiecisietea%20$pircediecisietea%20$totalpreciodiecisietea%20$dieciochoa%20$productodieciochoa%20$pircedieciochoa%20$totalpreciodieciochoa%20$diecinuevea%20$productodiecinuevea%20$pircediecinuevea%20$totalpreciodiecinuevea%20$veintea%20$productoveintea%20$pirceveintea%20$totalprecioveintea%20$veintiunoa%20$productoveintiunoa%20$pirceveintiunoa%20$totalprecioveintiunoa%20$veintidosa%20$productoveintidosa%20$pirceveintidosa%20$totalprecioveintidosa%20$veintitresa%20$productoveintitresa%20$pirceveintitresa%20$totalprecioveintitresa%20$veinticuatroa%20$productoveinticuatroa%20$pirceveinticuatroa%20$totalprecioveinticuatroa%20$veinticincoa%20$productoveinticincoa%20$pirceveinticincoa%20$totalprecioveinticincoa%20$veintiseisa%20$productoveintiseisa%20$pirceveintiseisa%20$totalprecioveintiseisa%20$veintisietea%20$productoveintisietea%20$pirceveintisietea%20$totalprecioveintisietea%20$veintiochoa%20$productoveintiochoa%20$pirceveintiochoa%20$totalprecioveintiochoa%20$veintinuevea%20$productoveintinuevea%20$pirceveintinuevea%20$totalprecioveintinuevea%20treintaa%20$productotreintaa%20$pircetreintaa%20$totalpreciotreintaa%20
TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>"
?>
        
 <br><br><br>
</div>


@endif

 
@if($constante==1)
<div id="datos" style="display: none;">
 <div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%;margin-left: -77%">
<?php



?>
        
        <b><input type="text" class="form-control" required placeholder="Nombre" name="nombre" id="nombre" value="{{session('nombre')}}" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="{{session('whatsapp')}}" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>
<div class="dropdown" style="position: fixed;margin-left: 50%;margin-top: -4.5%">
     <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-left: 77.5%;background-color:#25AAE1 ;margin-bottom: 1%;margin-top: -12%;width:18em;color:white">CATEGORIAS
    <span class="caret" ></span></button>
   <ul class="dropdown-menu" style="width:18em;margin-left: 77.5%;margin-top: -1%">
     <li><a href="welcome">IR A INICIO</a></li>
      <li><a href="#covid">PROTECCION COVID-19!</a></li>

    <li><button type="submit"id="myform" name="submit" value="principal">FINALIZAR</button></li>

     <li><button type="submit"name="submit" id="myform" value="mujeres">MUJERES</button></li>

      <li><button type="submit" name="submit" id="myform" value="adultos">ADULTOS</button></li>

     
    
   
    </ul>
  </div>

        </div>

@endif

 
@if($constante==0)
<div id="datos" style="display: block">
 <div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%;margin-left: -77%">
<?php

?>
      
       <b> <input type="text" class="form-control" required placeholder="Nombre"  name="nombre" id="nombre" value="{{session('nombre')}}" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="{{session('whatsapp')}}" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>

        </div>
<div class="dropdown" style="position: fixed;margin-left: 50%;margin-top: -4.5%">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-left: 77.5%;background-color:#25AAE1 ;margin-bottom: 1%;margin-top: -12%;width:18em;color:white">CATEGORIAS
    <span class="caret" ></span></button>
    <ul class="dropdown-menu" style="width:18em;margin-left: 77.5%;margin-top: -1%">
  

      <li><button type="submit"id="myform" name="submit" value="principal">FINALIZAR</button></li>

     <li><button type="submit"name="submit" id="myform" value="mujeres">MUJERES</button></li>

      <li><button type="submit" name="submit" id="myform" value="adultos">ADULTOS</button></li>

    
    
    </ul>
  </div>

@endif

</section>



</form>


</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 350px;text-align: center;margin-top: -2.1%" > 

 

</section>




<body>



   

</body>

</html>
