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
              var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
              var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
              var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
            var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
              var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
             var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
             var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
             var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
             var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
             var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
            var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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
    var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function unom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalunom");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciounom=270;
              totalpreciounom=sel.value*preciounom;
              $('#totalpreciounom').val(totalpreciounom);

           
             var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function dosm(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldosm");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciodosm=270;
              totalpreciodosm=sel.value*preciodosm;
              $('#totalpreciodosm').val(totalpreciodosm);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function tresm(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaltresm");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciotresm=270;
              totalpreciotresm=sel.value*preciotresm;
              $('#totalpreciotresm').val(totalpreciotresm);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function cuatrom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatrom");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciocuatrom=270;
              totalpreciocuatrom=sel.value*preciocuatrom;
              $('#totalpreciocuatrom').val(totalpreciocuatrom);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function cincom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincom");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciocincom=270;
              totalpreciocincom=sel.value*preciocincom;
              $('#totalpreciocincom').val(totalpreciocincom);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function seism(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseism");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              precioseism=270;
              totalprecioseism=sel.value*precioseism;
              $('#totalprecioseism').val(totalprecioseism);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}
function sietem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsietem");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciosietem=270;
              totalpreciosietem=sel.value*preciosietem;
              $('#totalpreciosietem').val(totalpreciosietem);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}
function ochom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochom");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              precioochom=270;
              totalprecioochom=sel.value*precioochom;
              $('#totalprecioochom').val(totalprecioochom);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}
function nuevem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnuevem");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              precionuevem=270;
              totalprecionuevem=sel.value*precionuevem;
              $('#totalprecionuevem').val(totalprecionuevem);
              var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function diezm(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiezm");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciodiezm=270;
              totalpreciodiezm=sel.value*preciodiezm;
              $('#totalpreciodiezm').val(totalpreciodiezm);
              var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}

function oncem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaloncem");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciooncem=270;
              totalpreciooncem=sel.value*preciooncem;
              $('#totalpreciooncem').val(totalpreciooncem);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

}
}
function docem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldocem");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciodocem=270;
              totalpreciodocem=sel.value*preciodocem;
              $('#totalpreciodocem').val(totalpreciodocem);
var totalpreciounom = $("#totalpreciounom").val();
              var totalpreciodosm = $("#totalpreciodosm").val();
              var totalpreciotresm = $("#totalpreciotresm").val();
              var totalpreciocuatrom = $("#totalpreciocuatrom").val();
              var totalpreciocincom = $("#totalpreciocincom").val();
              var totalprecioseism = $("#totalprecioseism").val();             
              var totalpreciosietem = $("#totalpreciosietem").val();
              var totalprecioochom = $("#totalprecioochom").val();
              var totalprecionuevem = $("#totalprecionuevem").val();
              var totalpreciodiezm = $("#totalpreciodiezm").val();
              var totalpreciooncem = $("#totalpreciooncem").val();
              var totalpreciodocem = $("#totalpreciodocem").val();
              
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
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem));

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

        


         <b><input type="text" class="form-control"value="Total A Pagar:" style="width: 12%;height:40px;margin-left: 32%;font-size: 1.4em;color: red;border: none;margin-top: -0.7%;position: fixed;z-index: 99;border: solid red 0.5px;background-color: red;color: white"></b>


        <b><input type="text" class="form-control"  name="totalapagar" id="totalapagar" value="" style="width: 7%;height:40px;margin-left: 43%;font-size: 1.4em;color: red;border-right: solid red 0.5px;border-top: solid red 0.5px;border-bottom: solid red 0.5px;margin-top: -0.7%;position: fixed;z-index: 100;background-color: red;color: white"></b>

         <b> <button type="submit" id="myform"  style="color:white;background-color:#25AAE1;width: 15%;height: 2.6em;color:white;float: right;margin-top: -0.5%" class="btn col-xl"  name="button">FINALIZAR PEDIDO</button></b><br>

</div>

</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 100px;text-align: center;margin-top: -2%" >

@if($constante==0)
<div  id="whatsapp" style="display: none">
<img src="{{ asset('img/logo.jpg') }}" style="width: 5%">
<?php

echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirce%20$totalpreciouno%20$dos%20$productodos%20$pirce%20$totalpreciodos%20$tres%20$productotres%20$pirce%20$totalpreciotres%20$cuatro%20$productocuatro%20$pirce%20$totalpreciocuatro%20 $cinco%20$productocinco%20$pirce%20$totalpreciocinco%20
 $seis%20$productoseis%20$pirce%20$totalprecioseis%20$siete%20$productosiete%20$pirce%20$totalpreciosiete%20
   $ocho%20$productoocho%20$pirce%20$totalprecioocho%20$nueve%20$productonueve%20$pirce%20$totalprecionueve%20
     $diez%20$productodiez%20$pirce%20$totalpreciodiez%20$once%20$productoonce%20$pirce%20$totalprecioonce%20
 $doce%20$productodoce%20$pirce%20$totalpreciodoce%20TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>";
?>
 <br><br><br>
</div>


@endif

@if($constante==1)
<div  id="whatsapp" style="display: block;">
<img src="{{ asset('img/logo.jpg') }}" style="width: 5%">
<?php

echo

"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirce%20$totalpreciouno%20$dos%20$productodos%20$pirce%20$totalpreciodos%20$tres%20$productotres%20$pirce%20$totalpreciotres%20$cuatro%20$productocuatro%20$pirce%20$totalpreciocuatro%20 $cinco%20$productocinco%20$pirce%20$totalpreciocinco%20
 $seis%20$productoseis%20$pirce%20$totalprecioseis%20$siete%20$productosiete%20$pirce%20$totalpreciosiete%20
   $ocho%20$productoocho%20$pirce%20$totalprecioocho%20$nueve%20$productonueve%20$pirce%20$totalprecionueve%20
     $diez%20$productodiez%20$pirce%20$totalpreciodiez%20$once%20$productoonce%20$pirce%20$totalprecioonce%20
 $doce%20$productodoce%20$pirce%20$totalpreciodoce%20TOTAL%20A%20PAGAR:%20$totalapagar'>ENVIAR WHATSAPP</a>";
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
      <li><a href="cuidadobucal">CUIDADO BUCAL</a></li>
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
     <li><a href="cuidadobucal">CUIDADO BUCAL</a></li>
      <li><a href="caratula_unlp">FARMACIA</a></li>      
      <li><a href="consulta_unlp">PERFUMERIA</a></li>
    
    
    </ul>
  </div>

@endif
</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 4300px;text-align: center;margin-top: -2%" >



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


        <b><input type="text" class="form-control"  name="totalpreciouno" id="totalpreciouno" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalpreciodos" id="totalpreciodos" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalpreciotres" id="totalpreciotres" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalpreciocuatro" id="totalpreciocuatro"style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalpreciocinco" id="totalpreciocinco" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalprecioseis" id="totalprecioseis" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>>


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


        <b><input type="text" class="form-control"  name="totalpreciosiete" id="totalpreciosiete" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>>


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


        <b><input type="text" class="form-control"  name="totalprecioocho" id="totalprecioocho" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalprecionueve" id="totalprecionueve" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>

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


        <b><input type="text" class="form-control"  name="totalpreciodiez" id="totalpreciodiez" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalprecioonce" id="totalprecioonce" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


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


        <b><input type="text" class="form-control"  name="totalpreciodoce" id="totalpreciodoce" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>
<section class="container jumbotron shadow p-3 mb-5 rounded"style="background-color:  #FF69B4;height: 45px;text-align: center;margin-top: -2%;color: white" >
  <p>CUIDADO PERSONAL, MUJER!</p><br>
</section>
<div>

  <img src="{{ asset('img/unom.jpg') }}" style="width: 13em;height: 9em;">
  <!--SOLO COMPLETAR LOS <label></label>-->
   <b><label>Kit: Alcohol en gel 250ml+1 barbijo triple capa+1 par de guantes látex $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciounom" name="preciounom" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="unom(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totalunom" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciounom" id="totalpreciounom" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>
 <div>

  <img src="{{ asset('img/dosm.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Barbijo triple capa con ajuste nasal y tiras para sujetar, $50.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciodosm" name="preciodosm" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="dosm(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totaldosm" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciodosm" id="totalpreciodosm" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>

<div>

  <img src="{{ asset('img/tresm.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol Etílico 96º 250 ml, $75.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciotresm" name="preciotresm" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="tresm(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totaltresm" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciotresm" id="totalpreciotresm" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>

<div>

  <img src="{{ asset('img/cuatrom.jpg') }}" style="width: 11em;height: 9em;">
  
   <b><label>Par de Guantes de Latex Trux $15.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciocuatrom" name="preciocuatrom" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="cuatrom(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totalcuatrom" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciocuatrom" id="totalpreciocuatrom" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>
<div>

  <img src="{{ asset('img/cincom.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Par de Guantes de Latex de Nitrilo Alta resistencia $20.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciocincom" name="preciocincom" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="cincom(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totalcincom" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciocincom" id="totalpreciocincom" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>

<div>

  <img src="{{ asset('img/seism.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Caja de Guantes de Latex Trux $700.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="precioseism" name="precioseism" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="seism(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totalseism" style="display: none">


        <b><input type="text" class="form-control"  name="totalprecioseism" id="totalprecioseism" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/sietem.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Caja de Guantes de Latex de Nitrilo Alta resistencia $900.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciosietem" name="preciosietem" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="sietem(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totalsietem" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciosietem" id="totalpreciosietem" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>
</div>

<div>
<img src="{{ asset('img/ochom.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Espadol Antiseptico, 250 ml $400.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="precioochom" name="precioochom" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="ochom(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totalochom" style="display: none">


        <b><input type="text" class="form-control"  name="totalprecioochom" id="totalprecioochom" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/nuevem.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="precionuevem" name="precionuevem" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="nuevem(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totalnuevem" style="display: none">


        <b><input type="text" class="form-control"  name="totalprecionuevem" id="totalprecionuevem" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>

</div>

</div>
<div>
<img src="{{ asset('img/diezm.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciodiezm" name="preciodiezm" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="diezm(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totaldiezm" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciodiezm" id="totalpreciodiezm" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/oncem.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciooncem" name="preciooncem" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="oncem(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totaloncem" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciooncem" id="totalpreciooncem" value="0" style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

</div>

<div>
<img src="{{ asset('img/docem.jpg') }}" style="width: 13em;height: 9em;">
  
   <b><label>Alcohol 500 ml $270.-</label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="preciodocem" name="preciodocem" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="docem(this)" style="width: 30%;margin-left: 35%;position: relative;margin-top: 5%">
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



  

<div  id="totaldocem" style="display: none">


        <b><input type="text" class="form-control"  name="totalpreciodocem" id="totalpreciodocem" value="0"style="width: 30%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>

</div>

</div>

</div>
 
 
  


</form>





</section>



<body>



   

</body>

</html>
