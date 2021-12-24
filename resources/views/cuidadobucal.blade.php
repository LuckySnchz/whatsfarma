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
  justify-content: center;

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


      <script type="text/javascript">

//SOLO COMPLETAR LOS precioun..//

             function uno(sel) {


if (sel.value >="0"){
divC = document.getElementById("totaluno");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciouno=270;
              totalpreciouno=sel.value*preciouno;
              $('#totalpreciouno').val(totalpreciouno);
              var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}


             function dos(sel) {


if (sel.value >="0"){
divCc = document.getElementById("totaldos");
              divCc.style.display = "block";
              divCd = document.getElementById("tucuenta");
              divCd.style.display = "block";
              preciodos=50;
              totalpreciodos=sel.value*preciodos;
              $('#totalpreciodos').val(totalpreciodos);
              var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}


 function tres(sel) {


if (sel.value >="0"){
divC = document.getElementById("totaltres");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciotres=75;
              totalpreciotres=sel.value*preciotres;
              $('#totalpreciotres').val(totalpreciotres);
               var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}
function cuatro(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatro");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciocuatro=15;
              totalpreciocuatro=sel.value*preciocuatro;
              $('#totalpreciocuatro').val(totalpreciocuatro);
             var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}


 function cinco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcinco");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciocinco=20;
              totalpreciocinco=sel.value*preciocinco;
              $('#totalpreciocinco').val(totalpreciocinco);
              var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}

 function seis(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseis");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              precioseis=750;
              totalprecioseis=sel.value*precioseis;
              $('#totalprecioseis').val(totalprecioseis);
             var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}


 function siete(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsiete");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciosiete=900;
              totalpreciosiete=sel.value*preciosiete;
              $('#totalpreciosiete').val(totalpreciosiete);
             var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}


 function ocho(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalocho");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              precioocho=400;
              totalprecioocho=sel.value*precioocho;
              $('#totalprecioocho').val(totalprecioocho);
             var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();              
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}

function nueve(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnueve");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              precionueve=150;
              totalprecionueve=sel.value*precionueve;
              $('#totalprecionueve').val(totalprecionueve);
              var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();             
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}

 function diez(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiez");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciodiez=150;
              totalpreciodiez=sel.value*preciodiez;
              $('#totalpreciodiez').val(totalpreciodiez);
             var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();             
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}
function once(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalonce");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              precioonce=150;
              totalprecioonce=sel.value*precioonce;
              $('#totalprecioonce').val(totalprecioonce);
             var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();             
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}
function doce(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldoce");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciodoce=150;
              totalpreciodoce=sel.value*preciodoce;
              $('#totalpreciodoce').val(totalpreciodoce);
              var totalpreciouno = $("#totalpreciouno").val();
              var totalpreciodos = $("#totalpreciodos").val();
              var totalpreciotres = $("#totalpreciotres").val();
              var totalpreciocuatro = $("#totalpreciocuatro").val();
              var totalpreciocinco = $("#totalpreciocinco").val();
              var totalprecioseis = $("#totalprecioseis").val();             
              var totalpreciosiete = $("#totalpreciosiete").val();
              var totalprecioocho = $("#totalprecioocho").val();
              var totalprecionueve = $("#totalprecionueve").val();
              var totalpreciodiez = $("#totalpreciodiez").val();
              var totalprecioonce = $("#totalprecioonce").val();
              var totalpreciodoce = $("#totalpreciodoce").val();


              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce));
}
}
    </script>
   </head>
     <header>
      
</header>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 150px;text-align: center;" > 
  <img src="{{ asset('img/marca.jpg') }}" style="width: 40%">
   <img src="{{ asset('img/quedatencasa.jpg') }}" style="width: 14.3%;margin-left: 86.6%;margin-top: -12%">
</section>



<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 45px;text-align: center;margin-top: -2%" >

<form class="" action="enviar" method="get" id="myform" >
<div  id="tucuenta" style="display: none">

 <label style="font-size: 1.2em;margin-left: -10%">Total A Pagar:</label><br>
        

        <b><input type="text" class="form-control"  name="totalapagar" id="totalapagar" value="" style="width: 10%;height:40px;margin-left: 52%;font-size: 1.4em;color: red;border: none;margin-top: -3%"></b>

         <b> <button type="submit" id="myform"  style="color:white;background-color:#25AAE1;width: 15%;height: 2.6em;color:white;float: right;margin-top: -3.4%" class="btn col-xl"  name="button">FINALIZAR PEDIDO</button></b><br>

</div>

</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 100px;text-align: center;margin-top: -2%" >

@if($constante==0)
<div  id="whatsapp" style="display: none">
<img src="{{ asset('img/logo.jpg') }}" style="width: 5%">
<?php

echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirceuno%20$totalpreciouno%20$dos%20$productodos%20$pircedos%20$totalpreciodos%20$tres%20$productotres%20$pircetres%20$totalpreciotres%20$cuatro%20$productocuatro%20$pircecuatro%20$totalpreciocuatro%20 $cinco%20$productocinco%20$pircecinco%20$totalpreciocinco%20
 $seis%20$productoseis%20$pirceseis%20$totalprecioseis%20$siete%20$productosiete%20$pircesiete%20$totalpreciosiete%20
   $ocho%20$productoocho%20$pirceocho%20$totalprecioocho%20$nueve%20$productonueve%20$pircenueve%20$totalprecionueve%20
     $diez%20$productodiez%20$pircediez%20$totalpreciodiez%20$once%20$productoonce%20$pirceonce%20$totalprecioonce%20
 $doce%20$productodoce%20$pircedoce%20$totalpreciodoce%20TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>";
?>
 <br><br><br>
</div>


@endif

@if($constante==1)
<div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logo.jpg') }}" style="width: 5%">
<?php

echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirceuno%20$totalpreciouno%20$dos%20$productodos%20$pircedos%20$totalpreciodos%20$tres%20$productotres%20$pircetres%20$totalpreciotres%20$cuatro%20$productocuatro%20$pircecuatro%20$totalpreciocuatro%20 $cinco%20$productocinco%20$pircecinco%20$totalpreciocinco%20
 $seis%20$productoseis%20$pirceseis%20$totalprecioseis%20$siete%20$productosiete%20$pircesiete%20$totalpreciosiete%20
   $ocho%20$productoocho%20$pirceocho%20$totalprecioocho%20$nueve%20$productonueve%20$pircenueve%20$totalprecionueve%20
     $diez%20$productodiez%20$pircediez%20$totalpreciodiez%20$once%20$productoonce%20$pirceonce%20$totalprecioonce%20
 $doce%20$productodoce%20$pircedoce%20$totalpreciodoce%20TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>";
?>
 <br><br><br>
</div>


@endif

 
@if($constante==1)
<div id="datos" style="display: none;">
 <div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logo.jpg') }}" style="width: 5%;margin-left: -70%">
<?php

echo
"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Quisiera%20Hacer%20Una%20Consulta.'>CONSULTAS POR WHATSAPP</a>";
?>
        
        <b><input type="text" class="form-control" required placeholder="Nombre" name="nombre" id="nombre" value="" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>
<div class="dropdown" >
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-left: 77.5%;background-color:#25AAE1 ;margin-bottom: 1%;margin-top: 0.05%;width:18em;color:white">CATEGORIAS
    <span class="caret" ></span></button>
    <ul class="dropdown-menu" style="width:18em">
      <li><a href="presentacion_unlp">CUIDATE</a></li>
      <li><a href="caratula_unlp">FARMACIA</a></li>      
      <li><a href="consulta_unlp">PERFUMERIA</a></li>
    
    
    </ul>
  </div>

        </div>

@endif

 
@if($constante==0)
<div id="datos" style="display: block">
 <div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logo.jpg') }}" style="width: 5%;margin-left: -70%">
<?php

echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Quisiera%20Hacer%20Una%20Consulta'>CONSULTAS POR WHATSAPP</a>";
?>
      
       <b> <input type="text" class="form-control" required placeholder="Nombre"  name="nombre" id="nombre" value="" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>

        </div>
<div class="dropdown" >
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-left: 77.5%;background-color:#25AAE1 ;margin-bottom: 1%;margin-top: -13.5%;width:18em;color:white">CATEGORIAS
    <span class="caret" ></span></button>
    <ul class="dropdown-menu" style="width:18em;margin-left: 77.5%;margin-top: -6%">
      <li><a href="presentacion_unlp">CUIDATE</a></li>
      <li><a href="caratula_unlp">FARMACIA</a></li>      
      <li><a href="consulta_unlp">PERFUMERIA</a></li>
    
    
    </ul>
  </div>

@endif
</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 2500px;text-align: center;margin-top: -2%" >



<!--<div class="dropdown" >
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-left: -77.5%;background-color:rgb(137, 210, 14) ;margin-bottom: 1%;margin-top: 0.05%;width:18em">Navega
    <span class="caret" ></span></button>
    <ul class="dropdown-menu" style="width:18em">
      <li><a href="presentacion_unlp">CUIDATE</a></li>
      <li><a href="caratula_unlp">FARMACIA</a></li>      
      <li><a href="consulta_unlp">PERFUMERIA</a></li>
    
    
    </ul>
  </div>-->


<div class="flex-container"> 
<div>

  <img src="{{ asset('img/uno.jpg') }}" style="width: 13em;height: 9em;">
  <!--SOLO COMPLETAR LOS <label></label>-->
   <b><label>Kit: Alcohol en gel 250ml+1 barbijo triple capa+1 par de guantes látex $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciouno" name="preciouno" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="uno(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totaluno" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciouno" id="totalpreciouno" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>
 <div>

  <img src="{{ asset('img/dos.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Barbijo triple capa con ajuste nasal y tiras para sujetar, $50.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciodos" name="preciodos" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="dos(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totaldos" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciodos" id="totalpreciodos" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>

<div>

  <img src="{{ asset('img/tres.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol Etílico 96º 250 ml, $75.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciotres" name="preciotres" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="tres(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totaltres" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciotres" id="totalpreciotres" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>

<div>

  <img src="{{ asset('img/cuatro.jpg') }}" style="width: 11em;height: 9em;">
  
   <b><label>Par de Guantes de Latex Trux $15.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciocuatro" name="preciocuatro" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="cuatro(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totalcuatro" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciocuatro" id="totalpreciocuatro" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>
<div>

  <img src="{{ asset('img/cinco.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Par de Guantes de Latex de Nitrilo Alta resistencia $20.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciocinco" name="preciocinco" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="cinco(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totalcinco" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciocinco" id="totalpreciocinco" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>

<div>

  <img src="{{ asset('img/seis.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Caja de Guantes de Latex Trux $700.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="precioseis" name="precioseis" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="seis(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totalseis" style="display: none">


        <b><input type="text" class="form-control"  name="totalprecioseis" id="totalprecioseis" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/siete.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Caja de Guantes de Latex de Nitrilo Alta resistencia $900.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciosiete" name="preciosiete" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="siete(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totalsiete" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciosiete" id="totalpreciosiete" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>
</div>

<div>
<img src="{{ asset('img/ocho.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Espadol Antiseptico, 250 ml $400.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="precioocho" name="precioocho" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="ocho(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totalocho" style="display: none">


        <b><input type="text" class="form-control"  name="totalprecioocho" id="totalprecioocho" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/nueve.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="precionueve" name="precionueve" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="nueve(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totalnueve" style="display: none">


        <b><input type="text" class="form-control"  name="totalprecionueve" id="totalprecionueve" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>

</div>

</div>
<div>
<img src="{{ asset('img/diez.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciodiez" name="preciodiez" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="diez(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totaldiez" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciodiez" id="totalpreciodiez" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/once.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="precioonce" name="precioonce" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="once(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totalonce" style="display: none">


        <b><input type="text" class="form-control"  name="totalprecioonce" id="totalprecioonce" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/doce.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciodoce" name="preciodoce" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="doce(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  
        </select>



  

<div  id="totaldoce" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciodoce" id="totalpreciodoce" value="0" style="width: 60%;margin-left: 20%;font-size: 1.2em;color: red;border: none;position: relative;margin-top: 5%;text-align:center"></b>


</div>

</div>
</div>
 
  


</form>





</section>



<body>



   

</body>

</html>
