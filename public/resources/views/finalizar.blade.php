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
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;

}
.grid-item { 
 
  border: 0.1px solid;
  padding: 10px;
  font-size: 12px;
  text-align: right;
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
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 43px;text-align: center;margin-top: -0.5%;position: fixed;margin-left: -0.7%;width: 84.5%" >

<form class="" action="finalizar" method="get" id="myform" >




         
<div  id="tucuenta" style="display: none">
<input type="hidden" name="origen" value="principal">
        

<img src="{{ asset('img/logos/carrito.jpg') }}" style="width: 5%;margin-top: -1%;margin-left: -10%">

        <!--<b><input type="text" class="form-control"  name="totalapagar" id="totalapagar" value="{{session('totalapagar')}}" style="width: 7%;height:40px;margin-left: 49%;font-size: 1.2em;color: red;border-right: solid red 0.5px;border-top: solid red 0.5px;border-bottom: solid red 0.5px;margin-top: -4.7%;z-index: 1000;background-color: red;color: white"></b>

         <b> <button type="submit" id="myform"  style="color:white;background-color:#25AAE1;width: 10%;height: 2.6em;color:black;float: right;margin-top: -3.5%;z-index: 100" class="btn col-xl"  name="button">FINALIZAR</button></b><br>-->

</div>
</section>
</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 100px;text-align: center;margin-top: -2%" >

@if($constante==0)
<div  id="whatsapp" style="display: none;font-size: 2em">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%">
<?php


/*"<a 
href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$unom%20$productounom%20$pirceunom%20$totalpreciounom%20$dosm%20$productodosm%20$pircedosm%20$totalpreciodosm%20$tresm%20$productotresm%20$pircetresm%20$totalpreciotresm%20$cuatrom%20$productocuatrom%20$pircecuatrom%20$totalpreciocuatrom%20 $cincom%20$productocincom%20$pircecincom%20$totalpreciocincom%20
 $seism%20$productoseism%20$pirceseism%20$totalprecioseism%20$sietem%20$productosietem%20$pircesietem%20$totalpreciosietem%20
   $ochom%20$productoochom%20$pirceochom%20$totalprecioochom%20$nuevem%20$productonuevem%20$pircenuevem%20$totalprecionuevem%20
     $diezm%20$productodiezm%20$pircediezm%20$totalpreciodiezm%20$oncem%20$productooncem%20$pirceoncem%20$totalpreciooncem
 $docem%20$productodocem%20$pircedocem%20$totalpreciodocem%20$trecem%20$productotrecem%20$pircetrecem%20$totalpreciotrecem%20$catorcem%20$productocatorcem%20$pircecatorcem%20$totalpreciocatorcem%20$quincem%20$productoquincem%20$pircequincem%20$totalprecioquincem%20$dieciseism%20$productodieciseism%20$pircedieciseism%20$totalpreciodieciseism%20$diecisietem%20$productodiecisietem%20$pircediecisietem%20$totalpreciodiecisietem%20$dieciochom%20$productodieciochom%20$pircedieciochom%20$totalpreciodieciochom%20$diecinuevem%20$productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20$veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20$veintiunom%20$productoveintiunom%20$pirceveintiunom%20$totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20$pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20$productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20$veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20$totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20$pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20$productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20$veintisietem%20$productoveintisietem%20$pirceveintisietem%20$totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20$pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20$productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreintam%20
TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>

</a>"*/
?>
 <br><br><br>
</div>


@endif

@if($constante==1)
<div  id="whatsapp" style="display: block;font-size: 2em">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%">
<?php

//echo
/*"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$unom%20$productounom%20$pirceunom%20$totalpreciounom%20$dosm%20$productodosm%20$pircedosm%20$totalpreciodosm%20$tresm%20$productotresm%20$pircetresm%20$totalpreciotresm%20$cuatrom%20$productocuatrom%20$pircecuatrom%20$totalpreciocuatrom%20 $cincom%20$productocincom%20$pircecincom%20$totalpreciocincom%20$seism%20$productoseism%20$pirceseism%20$totalprecioseism%20$sietem%20$productosietem%20$pircesietem%20$totalpreciosietem%20
   $ochom%20$productoochom%20$pirceochom%20$totalprecioochom%20$nuevem%20$productonuevem%20$pircenuevem%20$totalprecionuevem%20
     $diezm%20$productodiezm%20$pircediezm%20$totalpreciodiezm%20$oncem%20$productooncem%20$pirceoncem%20$totalpreciooncem
 $docem%20$productodocem%20$pircedocem%20$totalpreciodocem%20$trecem%20$productotrecem%20$pircetrecem%20$totalpreciotrecem%20$catorcem%20$productocatorcem%20$pircecatorcem%20$totalpreciocatorcem%20$quincem%20$productoquincem%20$pircequincem%20$totalprecioquincem%20$dieciseism%20$productodieciseism%20$pircedieciseism%20$totalpreciodieciseism%20$diecisietem%20$productodiecisietem%20$pircediecisietem%20$totalpreciodiecisietem%20$dieciochom%20$productodieciochom%20$pircedieciochom%20$totalpreciodieciochom%20$diecinuevem%20$productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20$veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20$veintiunom%20$productoveintiunom%20$pirceveintiunom%20$totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20$pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20$productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20$veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20$totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20$pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20$productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20$veintisietem%20$productoveintisietem%20$pirceveintisietem%20$totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20$pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20$productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreintam%20
TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>"*/
?>
 <br><br><br>
</div>


@endif

 
@if($constante==1)
<div id="datos" style="display: none;">
 <div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%;margin-left: -77%">
<?php

echo
"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Quisiera%20Hacer%20Una%20Consulta.'>whatsapp</a>";
?>
        
        <b><input type="text" class="form-control" required placeholder="Nombre" name="nombre" id="nombre" value="{{session('nombre')}}" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="{{session('whatsapp')}}" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>
<div class="dropdown" style="position: fixed;margin-left: 50%;margin-top: -4.5%">
    
  </div>

        </div>

@endif

 
@if($constante==0)
<div id="datos" style="display: block">
 <div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%;margin-left: -77%">
<?php

echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Quisiera%20Hacer%20Una%20Consulta'>Whatsapp</a>";
?>
      
       <b> <input type="text" class="form-control" required placeholder="Nombre"  name="nombre" id="nombre" value="{{session('nombre')}}" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="{{session('whatsapp')}}" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>

        </div>
<div class="dropdown" style="position: fixed;margin-left: 50%;margin-top: -4.5%">
   
  </div>

@endif
<div class="grid-container" style="margin-top: 10%">   

<div class="grid-item"style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center"><b><label for="Rp1" >Cantidad</label></b></div>

<div class="grid-item"style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center"><b><label for="Rp1" >Precio Unitario</label></b></div>

<div class="grid-item"style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center"><b><label for="Rp1" >Producto</label></b></div>

<div class="grid-item"style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center"><b><label for="Rp1" >Precio Total</label></b></div>


@if(session('totalpreciouno')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="uno" value="{{session('uno')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciouno" value="{{session('preciouno')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productouno" value="{{session('productouno')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciouno" value="{{session('totalpreciouno')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="uno" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciouno" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productouno" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciouno" value="">

</div>


@endif
@if(session('totalpreciodos')>0)
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="dos" value="{{session('dos')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciodos" value="{{session('preciodos')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
<input type="text" name="productodos" value="{{session('productodos')}}">


</div>
<div class="grid-item"style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciodos" value="{{session('totalpreciodos')}}">

</div>

@else
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="dos" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciodos" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
<input type="text" name="productodos" value="">


</div>
<div class="grid-item"style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciodos" value="">

</div>
@endif


@if(session('totalpreciotres')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="tres" value="{{session('tres')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciotres" value="{{session('preciotres')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productotres" value="{{session('productotres')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciotres" value="{{session('totalpreciotres')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="tres" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciotres" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productotres" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciotres" value="">

</div>


@endif

@if(session('totalpreciocuatro')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="cuatro" value="{{session('cuatro')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciocuatro" value="{{session('preciocuatro')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productocuatro" value="{{session('productocuatro')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciocuatro" value="{{session('totalpreciocuatro')}}">

</div>
@else

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="cuatro" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciocuatro" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productocuatro" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciocuatro" value="">

</div>
@endif

@if(session('totalpreciocinco')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="cinco" value="{{session('cinco')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciocinco" value="{{session('preciocinco')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productocinco" value="{{session('productocinco')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciocinco" value="{{session('totalpreciocinco')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="cinco" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciocinco" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productocinco" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciocinco" value="">

</div>

@endif

@if(session('totalprecioseis')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="seis" value="{{session('seis')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="precioseis" value="{{session('precioseis')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productoseis" value="{{session('productoseis')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalprecioseis" value="{{session('totalprecioseis')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="seis" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="precioseis" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productoseis" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalprecioseis" value="">

</div>

@endif

@if(session('totalpreciosiete')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="siete" value="{{session('siete')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciosiete" value="{{session('preciosiete')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productosiete" value="{{session('productosiete')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciosiete" value="{{session('totalpreciosiete')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="siete" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciosiete" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productosiete" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciosiete" value="">

</div>

@endif
@if(session('totalprecioocho')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="ocho" value="{{session('ocho')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="precioocho" value="{{session('precioocho')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productoocho" value="{{session('productoocho')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalprecioocho" value="{{session('totalprecioocho')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="ocho" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="precioocho" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productoocho" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalprecioocho" value="">

</div>

@endif


@if(session('totalprecionueve')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="nueve" value="{{session('nueve')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="precionueve" value="{{session('precionueve')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productonueve" value="{{session('productonueve')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalprecionueve" value="{{session('totalprecionueve')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="nueve" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="precionueve" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productonueve" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalprecionueve" value="">

</div>

@endif
@if(session('totalpreciodiez')>0)

<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="diez" value="{{session('diez')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciodiez" value="{{session('preciodiez')}}">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productodiez" value="{{session('productodiez')}}">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciodiez" value="{{session('totalpreciodiez')}}">

</div>
@else
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="diez" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
  <input type="text" name="preciodiez" value="">

</div>
<div class="grid-item" style="background-color:white;width: 100%
;color:black;font-size: 1em;text-align: center">
<input type="text" name="productodiez" value="">


</div>
<div class="grid-item" style="background-color:white;width: 100%;color:black;font-size: 1em;text-align: center">
  <input type="text" name="totalpreciodiez" value="">

</div>

@endif


























































































































































</div>

</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height:100000px;text-align: center;margin-top: -2%" >

 <b> <button type="submit" id="myform"  style="color:white;background-color:#25AAE1;width: 10%;height: 2.6em;color:white;float: right;;z-index: 100" class="btn col-xl"  name="button">FINALIZAR</button></b><br>

</form>
</section>
<body>


</body>

</html>
