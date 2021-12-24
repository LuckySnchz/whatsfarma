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

var totalpreciounoco = $("#totalpreciounoco").val();
              var totalpreciodosco = $("#totalpreciodosco").val();
              var totalpreciotresco = $("#totalpreciotresco").val();
              var totalpreciocuatroco = $("#totalpreciocuatroco").val();
              var totalpreciocincoco = $("#totalpreciocincoco").val();
              var totalprecioseisco = $("#totalprecioseisco").val();             
              var totalpreciosieteco = $("#totalpreciosieteco").val();
              var totalprecioochoco = $("#totalprecioochoco").val();
              var totalprecionueveco = $("#totalprecionueveco").val();
              var totalpreciodiezco = $("#totalpreciodiezco").val();
              var totalprecioonceco = $("#totalprecioonceco").val();
              var totalpreciodoceco = $("#totalpreciodoceco").val();
              var totalpreciotrececo = $("#totalpreciotrececo").val();
              var totalpreciocatorceco = $("#totalpreciocatorceco").val();
              var totalprecioquinceco = $("#totalprecioquinceco").val();
            var totalpreciodieciseisco = $("#totalpreciodieciseisco").val();
          var totalpreciodiecisieteco = $("#totalpreciodiecisieteco").val();
          var totalpreciodieciochoco = $("#totalpreciodieciochoco").val();
          var totalpreciodiecinueveco = $("#totalpreciodiecinueveco").val();
          var totalprecioveinteco = $("#totalprecioveinteco").val();
          var totalprecioveintiunoco = $("#totalprecioveintiunoco").val();
          var totalprecioveintidosco = $("#totalprecioveintidosco").val();
          var totalprecioveintitresco = $("#totalprecioveintitresco").val();
      var totalprecioveinticuatroco = $("#totalprecioveinticuatroco").val();
      var totalprecioveinticincoco = $("#totalprecioveinticincoco").val();
      var totalprecioveintiseisco = $("#totalprecioveintiseisco").val();
      var totalprecioveintisieteco = $("#totalprecioveintisieteco").val();
      var totalprecioveintiochoco = $("#totalprecioveintiochoco").val();
      var totalprecioveintinueveco = $("#totalprecioveintinueveco").val();
      var totalpreciotreintaco = $("#totalpreciotreintaco").val();
                           
              $('#totalapagarcorporales').val(totalpreciounoco-(-totalpreciodosco)-(-totalpreciotresco)
-(-totalpreciocuatroco)-(-totalpreciocincoco)-(-totalprecioseisco)-(-totalpreciosieteco)-(-totalprecioochoco)-(-totalprecionueveco)-(-totalpreciodiezco)-(-totalprecioonceco)-(-totalpreciodoceco)-(-totalpreciotrececo)-(-totalpreciocatorceco)-(-totalprecioquinceco)-(-totalpreciodieciseisco)-(-totalpreciodiecisieteco)-(-totalpreciodieciochoco)-(-totalpreciodiecinueveco)-(-totalprecioveinteco)-(-totalprecioveintiunoco)-(-totalprecioveintidosco)-(-totalprecioveintitresco)-(-totalprecioveinticuatroco)-(-totalprecioveinticincoco)-(-totalprecioveintiseisco)-(-totalprecioveintisieteco)-(-totalprecioveintiochoco)-(-totalprecioveintinueveco)-(-totalpreciotreintaco));
  }

function unoco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalunoco");      
 
             

              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciounoco=arraycorporales[0];
              var totalpreciounoco=sel.value*preciounoco;
              $('#totalpreciounoco').val(totalpreciounoco);
              total();
            }
          }
 


            function dosco(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldosco");
              divCc.style.display= "block";
              divCd= document.getElementById("tucuenta");
              divCd.style.display= "block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              preciodosco=arraycorporales[1];
              totalpreciodosco=sel.value*preciodosco;
              $('#totalpreciodosco').val(totalpreciodosco);
              total();
              }
            }
              


 function tresco(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltresco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciotresco=arraycorporales[2];
              totalpreciotresco=sel.value*preciotresco;
              $('#totalpreciotresco').val(totalpreciotresco);
              total();
             }
           }
function cuatroco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatroco");
             
 
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocuatroco=arraycorporales[3];
              totalpreciocuatroco=sel.value*preciocuatroco;
              $('#totalpreciocuatroco').val(totalpreciocuatroco);
              total();
             }
           }
           function cincoco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincoco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocincoco=arraycorporales[4];
              totalpreciocincoco=sel.value*preciocincoco;
              $('#totalpreciocincoco').val(totalpreciocincoco);
              
  total();
}
}

 function seisco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseisco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioseisco=arraycorporales[5];
              totalprecioseisco=sel.value*precioseisco;
              $('#totalprecioseisco').val(totalprecioseisco);
             total();
}
}


 function sieteco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsieteco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciosieteco=arraycorporales[6];
              totalpreciosieteco=sel.value*preciosieteco;
              $('#totalpreciosieteco').val(totalpreciosieteco);
            total();

}
}
 function ochoco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochoco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioochoco=arraycorporales[7];
              totalprecioochoco=sel.value*precioochoco;
              $('#totalprecioochoco').val(totalprecioochoco);
            total();

}
}

function nueveco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnueveco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precionueveco=arraycorporales[8];
              totalprecionueveco=sel.value*precionueveco;
              $('#totalprecionueveco').val(totalprecionueveco);
             total();

}
}

 function diezco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiezco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodiezco=arraycorporales[9];
              totalpreciodiezco=sel.value*preciodiezco;
              $('#totalpreciodiezco').val(totalpreciodiezco);
             total();

}
}
function onceco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalonceco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioonceco=arraycorporales[10];
              totalprecioonceco=sel.value*precioonceco;
              $('#totalprecioonceco').val(totalprecioonceco);
            total();

}
}
function doceco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldoceco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodoceco=arraycorporales[11];
              totalpreciodoceco=sel.value*preciodoceco;
              $('#totalpreciodoceco').val(totalpreciodoceco);
    var totalpreciodoceco= $("#totalpreciodocea").val();
            total();

}
}
function trececo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltrececo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciotrececo=arraycorporales[12];
              var totalpreciotrececo=sel.value*preciotrececo;
              $('#totalpreciotrececo').val(totalpreciotrececo);
              total();
            }
          }
 function cotorceco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcotorceco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciocotorceco=arraycorporales[13];
              var totalpreciocotorceco=sel.value*preciocotorceco;
              $('#totalpreciocotorceco').val(totalpreciocotorceco);
              total();
            }
          }

          function quinceco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquinceco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioquinceco=arraycorporales[14];
              var totalprecioquinceco=sel.value*precioquinceco;
              $('#totalprecioquinceco').val(totalprecioquinceco);
              total();
            }
          }

          function dieciseisco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseisco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciseisco=arraycorporales[15];
              var totalpreciodieciseisco=sel.value*preciodieciseisco;
              $('#totalpreciodieciseisco').val(totalpreciodieciseisco);
              total();
            }
          }

          function diecisieteco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisieteco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecisieteco=arraycorporales[16];
              var totalpreciodiecisieteco=sel.value*preciodiecisieteco;
              $('#totalpreciodiecisieteco').val(totalpreciodiecisieteco);
              total();
            }
          }
 function dieciochoco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciochoco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciochoco=arraycorporales[17];
              var totalpreciodieciochoco=sel.value*preciodieciochoco;
              $('#totalpreciodieciochoco').val(totalpreciodieciochoco);
              total();
            }
          }
 function diecinueveco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinueveco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecinueveco=arraycorporales[18];
              var totalpreciodiecinueveco=sel.value*preciodiecinueveco;
              $('#totalpreciodiecinueveco').val(totalpreciodiecinueveco);
              total();
            }
          }
 function veinteco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinteco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinteco=arraycorporales[19];
              var totalprecioveinteco=sel.value*precioveinteco;
              $('#totalprecioveinteco').val(totalprecioveinteco);
              total();
            }
          }
 function veintiunoco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiunoco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiunoco=arraycorporales[20];
              var totalprecioveintiunoco=sel.value*precioveintiunoco;
              $('#totalprecioveintiunoco').val(totalprecioveintiunoco);
              total();
            }
          }
 function veintidosco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidosco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintidosco=arraycorporales[21];
              var totalprecioveintidosco=sel.value*precioveintidosco;
              $('#totalprecioveintidosco').val(totalprecioveintidosco);
              total();
            }
          }
 function veintitresco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitresco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintitresco=arraycorporales[22];
              var totalprecioveintitresco=sel.value*precioveintitresco;
              $('#totalprecioveintitresco').val(totalprecioveintitresco);
              total();
            }
          }
 function veinticuatroco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatroco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticuatroco=arraycorporales[23];
              var totalprecioveinticuatroco=sel.value*precioveinticuatroco;
              $('#totalprecioveinticuatroco').val(totalprecioveinticuatroco);
              total();
            }
          }
 function veinticincoco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticincoco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticincoco=arraycorporales[24];
              var totalprecioveinticincoco=sel.value*precioveinticincoco;
              $('#totalprecioveinticincoco').val(totalprecioveinticincoco);
              total();
            }
          }
 function veintiseisco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseisco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiseisco=arraycorporales[25];
              var totalprecioveintiseisco=sel.value*precioveintiseisco;
              $('#totalprecioveintiseisco').val(totalprecioveintiseisco);
              total();
            }
          }
          function veintisieteco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisieteco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintisieteco=arraycorporales[26];
              var totalprecioveintisieteco=sel.value*precioveintisieteco;
              $('#totalprecioveintisieteco').val(totalprecioveintisieteco);
              total();
            }
          }
 
 function veintiochoco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiochoco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiochoco=arraycorporales[27];
              var totalprecioveintiochoco=sel.value*precioveintiochoco;
              $('#totalprecioveintiochoco').val(totalprecioveintiochoco);
              total();
            }
          }
          function veintinueveco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinueveco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintinueveco=arraycorporales[28];
              var totalprecioveintinueveco=sel.value*precioveintinueveco;
              $('#totalprecioveintinueveco').val(totalprecioveintinueveco);
              total();
            }
          }
 function treintaco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltreintaco");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display="block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              var preciotreintaco=arraycorporales[29];
              var totalpreciotreintaco=sel.value*preciotreintaco;
              $('#totalpreciotreintaco').val(totalpreciotreintaco);
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
 
<div class="flex-container-celu"  style="display: none">
  <div id="celu" style="display: none;background-color: #4bbfdd;margin-top: -29px"> 
<img src="/img/logos/celu.jpg" style="width: 300px;height: 500px;border-radius: 10%;margin-top: 20px">
  </div>
</div>


 <div id="mostrartodo">
<form class="" action="ira" method="get" id="myform" > 
  <input type="hidden" name="origen" value="corporales">
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


  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="capilares"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Capilar</button></b><br>
  
 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="farmacia"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Farmacia</button></b><br>

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="marcas" style="width: 340px;height: 50px;background-color: orange;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">MARCAS!!!</button></b><br>

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

    <input type="text" class="form-control" disabled="selected" name="totalapagarcorporales" id="totalapagarcorporales"  value=" "style="width: 100%;height:40px;margin-left: 1%;font-size: 1.2em;margin-top: -0.5%;background-color:white;text-align: center;color: red;z-index: 100"></b></div>

 
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

<div class="grid-item corporales" style="display: none">
  <?php  
  $arraypreciosunitariosco=[]; 
  foreach($productos as $producto){
    $preciounitarioco=$producto->Precio;

 
$arraypreciosunitariosco[] =$preciounitarioco;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arraycorporales=<?php echo json_encode($arraypreciosunitariosco);?>;
 
</script>



<body>


</body>

</html>
