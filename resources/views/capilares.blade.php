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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <title>CUIDADO MUJER</title>
      <style>

      <style>

  .flex-container {
  display: flex;
  flex-direction: row;

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



  .flex-container-iconos {
  display: flex;
  flex-direction: row;


}

.flex-container-iconos > div {

  width: 50px;
  height: 50px;
 padding: 55px;
 margin-top: -20px;

  
  

}

.flex-container-footer {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 150px;

  flex-direction: column;
}

.flex-container-footer>div {
  background-color:white;
  color: white;
  width: 350px;
  height: 40px;

  color:black;
  text-align: center;
  line-height: 25px;
  font-size: 1.2em;
  padding: 5px;
  margin: 5px;
}

.flex-container-marca {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 150px;

}

.flex-container-marca>div {
  background-color: #f1f1f1;
  color: white;
  width: 100px;
  height: 100px;
}

.flex-container-footer-dos {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;

  flex-direction: column;
}

.flex-container-footer-dos>div {
  background-color:white;
  color: white;
  width: 350px;
  height: 40px;
  color:black;
  text-align: center;
  line-height: 25px;
  font-size: 1.2em;
  padding: 5px;
  margin: 5px;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.flex-container-nav {
  display: flex;


  height: 100px;

  flex-direction: column;
}

.flex-container-nav>div {
  background-color:white;

  color: white;
  width: 97%;
  height: 100px;

 
  color:black;

  line-height: 25px;
  font-size: 1.2em;

  margin: 25px;
  margin-top: -5px;
}

body{
  background-color:#4bbfdd;
}


 .zoom:hover{
        /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
        transform : scale(2);
        -moz-transform : scale(2);      /* Firefox */
        -webkit-transform : scale(2);   /* Chrome - Safari */
        -o-transform : scale(2);        /* Opera */
    }
 .flex-container-celu {
   display: flex;
  justify-content: center;


}

.flex-container-celu > div {

  background-color: #4bbfdd;
  width: 1140px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;


}

 .flex-container-carru {
   display: flex;
  justify-content: center;


}

.flex-container-carru > div {

  background-color: #f1f1f1;
  width: 1140px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;


}

      </style>


      <script type="text/javascript">

//SOLO COMPLETAR LOS precioun..//
  function total() { 

                            var totalpreciounoca = $("#totalpreciounoca").val();
              var totalpreciodosca = $("#totalpreciodosca").val();
              var totalpreciotresca = $("#totalpreciotresca").val();
              var totalpreciocuatroca = $("#totalpreciocuatroca").val();
              var totalpreciocincoca = $("#totalpreciocincoca").val();
              var totalprecioseisca = $("#totalprecioseisca").val();         
              var totalpreciosieteca = $("#totalpreciosieteca").val();
              var totalprecioochoca = $("#totalprecioochoca").val();
              var totalprecionueveca = $("#totalprecionueveca").val();
              var totalpreciodiezca = $("#totalpreciodiezca").val();
              var totalprecioonceca = $("#totalprecioonceca").val();
              var totalpreciodoceca = $("#totalpreciodoceca").val();
              var totalpreciotrececa = $("#totalpreciotrececa").val();
              var totalpreciocatorceca = $("#totalpreciocatorceca").val();
              var totalprecioquinceca = $("#totalprecioquinceca").val();
            var totalpreciodieciseisca = $("#totalpreciodieciseisca").val();
          var totalpreciodiecisieteca = $("#totalpreciodiecisieteca").val();
          var totalpreciodieciochoca = $("#totalpreciodieciochoca").val();
          var totalpreciodiecinueveca = $("#totalpreciodiecinueveca").val();
          var totalprecioveinteca = $("#totalprecioveinteca").val();
          var totalprecioveintiunoca = $("#totalprecioveintiunoca").val();
          var totalprecioveintidosca = $("#totalprecioveintidosca").val();
          var totalprecioveintitresca = $("#totalprecioveintitresca").val();
      var totalprecioveinticuatroca = $("#totalprecioveinticuatroca").val();
        var totalprecioveinticincoca = $("#totalprecioveinticincoca").val();
        var totalprecioveintiseisca = $("#totalprecioveintiseisca").val();
        var totalprecioveintisieteca = $("#totalprecioveintisieteca").val();
        var totalprecioveintiochoca = $("#totalprecioveintiochoca").val();
        var totalprecioveintinueveca = $("#totalprecioveintinueveca").val();
        var totalpreciotreintaca = $("#totalpreciotreintaca").val();

                           
              $('#totalapagarcapilares').val(totalpreciounoca-(-totalpreciodosca)-(-totalpreciotresca)
-(-totalpreciocuatroca)-(-totalpreciocincoca)-(-totalprecioseisca)-
(-totalpreciosieteca)-(-totalprecioochoca)-(-totalprecionueveca)-
(-totalpreciodiezca)-(-totalprecioonceca)-(-totalpreciodoceca)-
(-totalpreciotrececa)-(-totalpreciocatorceca)-(-totalprecioquinceca)-
(-totalpreciodieciseisca)-(-totalpreciodiecisieteca)-(-totalpreciodieciochoca)
-(-totalpreciodiecinueveca)-(-totalprecioveinteca)-(-totalprecioveintiunoca)
-(-totalprecioveintidosca)-(-totalprecioveintitresca)-(-totalprecioveinticuatroca)
-(-totalprecioveinticincoca)-(-totalprecioveintiseisca)-(-totalprecioveintisieteca)
-(-totalprecioveintiochoca)-(-totalprecioveintinueveca)-(-totalpreciotreintaca));
  }
function unoca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalunoca");      
 
             

              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciounoca=arraycapilares[0];
              var totalpreciounoca=sel.value*preciounoca;
              $('#totalpreciounoca').val(totalpreciounoca);
              total();
            }
          }
 


            function dosca(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldosca");
              divCc.style.display= "block";
              divCd= document.getElementById("tucuenta");
              divCd.style.display= "block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              preciodosca=arraycapilares[1];
              totalpreciodosca=sel.value*preciodosca;
              $('#totalpreciodosca').val(totalpreciodosca);
              total();
              }
            }
              


 function tresca(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltresca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciotresca=arraycapilares[2];
              totalpreciotresca=sel.value*preciotresca;
              $('#totalpreciotresca').val(totalpreciotresca);
              total();
             }
           }
function cuatroca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatroca");
             
 
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocuatroca=arraycapilares[3];
              totalpreciocuatroca=sel.value*preciocuatroca;
              $('#totalpreciocuatroca').val(totalpreciocuatroca);
              total();
             }
           }
           function cincoca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincoca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocincoca=arraycapilares[4];
              totalpreciocincoca=sel.value*preciocincoca;
              $('#totalpreciocincoca').val(totalpreciocincoca);
              
  total();
}
}

 function seisca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseisca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioseisca=arraycapilares[5];
              totalprecioseisca=sel.value*precioseisca;
              $('#totalprecioseisca').val(totalprecioseisca);
             total();
}
}


 function sieteca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsieteca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciosieteca=arraycapilares[6];
              totalpreciosieteca=sel.value*preciosieteca;
              $('#totalpreciosieteca').val(totalpreciosieteca);
            total();

}
}
 function ochoca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochoca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioochoca=arraycapilares[7];
              totalprecioochoca=sel.value*precioochoca;
              $('#totalprecioochoca').val(totalprecioochoca);
            total();

}
}

function nueveca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnueveca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precionueveca=arraycapilares[8];
              totalprecionueveca=sel.value*precionueveca;
              $('#totalprecionueveca').val(totalprecionueveca);
             total();

}
}

 function diezca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiezca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodiezca=arraycapilares[9];
              totalpreciodiezca=sel.value*preciodiezca;
              $('#totalpreciodiezca').val(totalpreciodiezca);
             total();

}
}
function onceca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalonceca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioonceca=arraycapilares[10];
              totalprecioonceca=sel.value*precioonceca;
              $('#totalprecioonceca').val(totalprecioonceca);
            total();

}
}
function doceca(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldoceca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodoceca=arraycapilares[11];
              totalpreciodoceca=sel.value*preciodoceca;
              $('#totalpreciodoceca').val(totalpreciodoceca);
    var totalpreciodoceca= $("#totalpreciodocea").val();
            total();

}
}
function trececa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltrececa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciotrececa=arraycapilares[12];
              var totalpreciotrececa=sel.value*preciotrececa;
              $('#totalpreciotrececa').val(totalpreciotrececa);
              total();
            }
          }
 function catorceca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcatorceca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciocatorceca=arraycapilares[13];
              var totalpreciocatorceca=sel.value*preciocatorceca;
              $('#totalpreciocatorceca').val(totalpreciocatorceca);
              total();
            }
          }

          function quinceca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquinceca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioquinceca=arraycapilares[14];
              var totalprecioquinceca=sel.value*precioquinceca;
              $('#totalprecioquinceca').val(totalprecioquinceca);
              total();
            }
          }

          function dieciseisca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseisca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciseisca=arraycapilares[15];
              var totalpreciodieciseisca=sel.value*preciodieciseisca;
              $('#totalpreciodieciseisca').val(totalpreciodieciseisca);
              total();
            }
          }

          function diecisieteca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisieteca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecisieteca=arraycapilares[16];
              var totalpreciodiecisieteca=sel.value*preciodiecisieteca;
              $('#totalpreciodiecisieteca').val(totalpreciodiecisieteca);
              total();
            }
          }
 function dieciochoca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciochoca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciochoca=arraycapilares[17];
              var totalpreciodieciochoca=sel.value*preciodieciochoca;
              $('#totalpreciodieciochoca').val(totalpreciodieciochoca);
              total();
            }
          }
 function diecinueveca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinueveca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecinueveca=arraycapilares[18];
              var totalpreciodiecinueveca=sel.value*preciodiecinueveca;
              $('#totalpreciodiecinueveca').val(totalpreciodiecinueveca);
              total();
            }
          }
 function veinteca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinteca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinteca=arraycapilares[19];
              var totalprecioveinteca=sel.value*precioveinteca;
              $('#totalprecioveinteca').val(totalprecioveinteca);
              total();
            }
          }
 function veintiunoca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiunoca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiunoca=arraycapilares[20];
              var totalprecioveintiunoca=sel.value*precioveintiunoca;
              $('#totalprecioveintiunoca').val(totalprecioveintiunoca);
              total();
            }
          }
 function veintidosca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidosca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintidosca=arraycapilares[21];
              var totalprecioveintidosca=sel.value*precioveintidosca;
              $('#totalprecioveintidosca').val(totalprecioveintidosca);
              total();
            }
          }
 function veintitresca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitresca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintitresca=arraycapilares[22];
              var totalprecioveintitresca=sel.value*precioveintitresca;
              $('#totalprecioveintitresca').val(totalprecioveintitresca);
              total();
            }
          }
 function veinticuatroca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatroca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticuatroca=arraycapilares[23];
              var totalprecioveinticuatroca=sel.value*precioveinticuatroca;
              $('#totalprecioveinticuatroca').val(totalprecioveinticuatroca);
              total();
            }
          }
 function veinticincoca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticincoca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticincoca=arraycapilares[24];
              var totalprecioveinticincoca=sel.value*precioveinticincoca;
              $('#totalprecioveinticincoca').val(totalprecioveinticincoca);
              total();
            }
          }
 function veintiseisca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseisca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiseisca=arraycapilares[25];
              var totalprecioveintiseisca=sel.value*precioveintiseisca;
              $('#totalprecioveintiseisca').val(totalprecioveintiseisca);
              total();
            }
          }
          function veintisieteca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisieteca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintisieteca=arraycapilares[26];
              var totalprecioveintisieteca=sel.value*precioveintisieteca;
              $('#totalprecioveintisieteca').val(totalprecioveintisieteca);
              total();
            }
          }
 
 function veintiochoca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiochoca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiochoca=arraycapilares[27];
              var totalprecioveintiochoca=sel.value*precioveintiochoca;
              $('#totalprecioveintiochoca').val(totalprecioveintiochoca);
              total();
            }
          }
          function veintinueveca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinueveca");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintinueveca=arraycapilares[28];
              var totalprecioveintinueveca=sel.value*precioveintinueveca;
              $('#totalprecioveintinueveca').val(totalprecioveintinueveca);
              total();
            }
          }
 function treintaca(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltreintaca");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display="block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              var preciotreintaca=arraycapilares[29];
              var totalpreciotreintaca=sel.value*preciotreintaca;
              $('#totalpreciotreintaca').val(totalpreciotreintaca);
              total();
            }
          }
 
 
    </script>
    <script type="text/javascript">
      $(document).ready(function(){ 
   $('#mostrar-ocultar').on('click',function(){
      $('#botones').toggle();
   });
});

    </script>
   <script type="text/javascript">
      $(document).ready(function($){
  var ventana_ancho = $(window).width();
if(ventana_ancho<740){
divmt= document.getElementById("mostrartodo");
              divmt.style.display= "block";
;
}


if(ventana_ancho>=740){

divce= document.getElementById("celu");
divce.style.display= "block";

}

}); 
    </script>
   </head>
  
  <header>
<a name="Ancla" id="a"></a>
<div class="flex-container-carru">
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 150px" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 130px;margin:0;padding: 0">
 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="/img/logos/marca.jpg"  style="width:100%;background-color: white;height: 110px">
        <div class="carousel-caption">
          <!--<h3>FARMACIA INTERNACIONAL</h3>
          <p>3 nro 761. TE:4224533</p>-->
        </div>
      </div>
      
      <div class="item">
        <img src="/img/logos/farmainternacional.jpg"  style="width:90%;background-color: white;height: 110px">
        <div class="carousel-caption">
         
        </div>
      </div>

      <div class="item">
        <img src="/img/logos/tupedido.jpg"  style="width:100%;background-color: white;height: 110px">
        <div class="carousel-caption">
         
        </div>
      </div>
    
     
     
    </div>

  
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </section>
</div>
</header>
 
<div class="flex-container-celu" style="display: none">
  <div id="celu" style="display: none;background-color: #4bbfdd;margin-top: -29px"> 
<img src="/img/logos/celu.jpg" style="width: 300px;height: 500px;border-radius: 10%;margin-top: 20px">
  </div>
</div>


 <div id="mostrartodo" >
<form class="" action="ira" method="get" id="myform" > 
  <input type="hidden" name="origen" value="capilares"><!--EDITAR HIDDEN-->
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="width: 100%;margin-top: -29px;height: 80px"> 
  
<div class="flex-container-iconos" style="margin-top: -30px;margin-left: 50px">

<div style="margin-left: 85px">
   <a href="https://api.whatsapp.com/send?phone=542213602683&text=Hola,%20quisiera%20realizar%20una%20consulta" > <img src="/img/logos/whatsapp.jpg"  style="width:50px;height: 50px"></a>
</div>



<div style="margin-top: -5px;width: 150px;height: 150px;">

<a href="#" id="mostrar-ocultar" class="dropbtn" style="border-radius: 10px;background-color: DodgerBlue;margin-left: -200px;width: 150px;height: 150px">=</a>
  
   </div>
  
   <div id="botones" style="display: none;width: 200px;height: 300px;z-index: 100;margin-top: 10px;background-color: white;z-index: 110">

     <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="inicio" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 47px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Whatsfarma</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="principal" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color:black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidate En Casa!!!</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="adultos"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Adultos</button></b><br>

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="bucales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Salud Bucal!</button></b><br>

    <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="corporales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Corporal</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="farmacia"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Farmacia</button></b><br>

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="marcas" style="width: 340px;height: 50px;background-color: orange;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Próximas Marcas!!!</button></b><br>

 <b><button type="submit"id="myform" name="submit"value="enviar" style="width: 340px;height: 50px;background-color: #00a94f;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">FINALIZAR</button></b>

</div>
</div>
  
</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 170px;width: 100%;margin-top: -29px">
   


<div  id="tupedido" style="display: block">
  <img src="/img/logos/pasos.jpg" style="width: 100%;margin:0;height: 153px">
  </div>
  
 <div class="ancla" style="">
<a href="#Ancla"><img src="/img/logos/ancla.jpg" style="margin-top:130px;max-width: 25%;margin-left: 76.5%;position: fixed;z-index: 100;width: 50px;height: 50px"></a>
</div>

<div  id="tucuenta" style="display: none;">
<div class="flex-container-footer">

  <div> 
<img src="/img/logos/carrito.jpg" style="width: 50px;height: 50px;margin-top: -15px">
  </div>


  <div> <b>
<!--EDITAR TOTALAPAGAR-->
    <input type="text" class="form-control" disabled="selected" name="totalapagarcapilares" id="totalapagarcapilares"  value=" "style="width: 100%;height:40px;margin-left: 1%;font-size: 1.2em;margin-top: -0.5%;background-color:white;text-align: center;color: red;z-index: 100"></b></div>

 
</div>
</div>

</section>

   
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height:10500px;text-align: center;margin-top: -8%" >
@foreach($productos as $producto)

<div class="flex-container" style="display: inline-block;float: left;margin-left: 3%"> 
 
<div>
<img class="group list-group-image" src="{{ asset('img/'.$producto->image) }}" alt="" style="width: 150px;height: 150px" /> 

  <!--<img src="/img/dos.jpg" style="width: 13em;height: 9em;">
  <!--SOLO COMPLETAR LOS <label></label>-->
   <b><label>{{$producto->DescripcionProducto}}<br><strong style="color:red">{{$producto->Precio}}.-</strong></label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="{{$producto->NombrePrecio}}" name="{{$producto->NombrePrecio}}" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"  onChange="{{$producto->NombreVariable}}(this)" style="width: 40%;margin-left: 35%;position: relative;margin-top: 5%;z-index: 99">
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



 
  

<div  id="{{$producto->NombreDiv}}" style="display: none">


        <b><input type="text" class="form-control"  name="{{$producto->NombreTotalPrecio}}" id="{{$producto->NombreTotalPrecio}}" value="0" style="width: 40%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>

<p style="text-decoration-line: underline;margin-left: -20px">...................................................................</p>
</div>


</div>
@endforeach





</section>
</form>
</div>


<div class="grid-item capilares" style="display: none">
  <?php  
  $arraypreciosunitariosca=[]; 
  foreach($productos as $producto){
    $preciounitarioca=$producto->Precio;

 
$arraypreciosunitariosca[] =$preciounitarioca;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arraycapilares=<?php echo json_encode($arraypreciosunitariosca);?>;
 
</script>


<body>


</body>

</html>
