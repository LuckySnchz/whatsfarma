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
      <title>ADULTOS MAYORES</title>
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

var totalpreciounoa = $("#totalpreciounoa").val();
              var totalpreciodosa = $("#totalpreciodosa").val();
              var totalpreciotresa = $("#totalpreciotresa").val();
              var totalpreciocuatroa = $("#totalpreciocuatroa").val();
              var totalpreciocincoa = $("#totalpreciocincoa").val();
              var totalprecioseisa = $("#totalprecioseisa").val();             
              var totalpreciosietea = $("#totalpreciosietea").val();
              var totalprecioochoa = $("#totalprecioochoa").val();
              var totalprecionuevea = $("#totalprecionuevea").val();
              var totalpreciodieza = $("#totalpreciodieza").val();
              var totalpreciooncea = $("#totalpreciooncea").val();
              var totalpreciodocea = $("#totalpreciodocea").val();
              var totalpreciotrecea = $("#totalpreciotrecea").val();
              var totalpreciocatorcea = $("#totalpreciocatorcea").val();
              var totalprecioquincea = $("#totalprecioquincea").val();
              var totalpreciodieciseisa = $("#totalpreciodieciseisa").val();
              var totalpreciodiecisietea = $("#totalpreciodiecisietea").val();
              var totalpreciodieciochoa = $("#totalpreciodieciochoa").val();
              var totalpreciodiecinuevea = $("#totalpreciodiecinuevea").val();
              var totalprecioveintea = $("#totalprecioveintea").val();
              var totalprecioveintiunoa = $("#totalprecioveintiunoa").val();
              var totalprecioveintidosa = $("#totalprecioveintidosa").val();
              var totalprecioveintitresa = $("#totalprecioveintitresa").val();
              var totalprecioveinticuatroa = $("#totalprecioveinticuatroa").val();
              var totalprecioveinticincoa = $("#totalprecioveinticincoa").val();
              var totalprecioveintiseisa = $("#totalprecioveintiseisa").val();
              var totalprecioveintisietea = $("#totalprecioveintisietea").val();
              var totalprecioveintiochoa = $("#totalprecioveintiochoa").val();
              var totalprecioveintinuevea = $("#totalprecioveintinuevea").val();
              var totalpreciotreintaa = $("#totalpreciotreintaa").val();
             ;

              $('#totalapagaradultos').val(totalpreciounoa-(-totalpreciodosa)-(-totalpreciotresa)
-(-totalpreciocuatroa)-(-totalpreciocincoa)-(-totalprecioseisa)-(-totalpreciosietea)-(-totalprecioochoa)-(-totalprecionuevea)-(-totalpreciodieza)-(-totalpreciooncea)-(-totalpreciodocea)-(-totalpreciotrecea)-(-totalpreciocatorcea)-(-totalprecioquincea)-(-totalpreciodieciseisa)-(-totalpreciodiecisietea)-(-totalpreciodieciochoa)-(-totalpreciodiecinuevea)-(-totalprecioveintea)-(-totalprecioveintiunoa)-(-totalprecioveintidosa)-(-totalprecioveintitresa)-(-totalprecioveinticuatroa)-(-totalprecioveinticincoa)-(-totalprecioveintiseisa)-(-totalprecioveintisietea)-(-totalprecioveintiochoa)-(-totalprecioveintinuevea)-(-totalpreciotreintaa));
  }
function unoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalunoa");      
 
             

              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciounoa=arrayadultos[0];
              var totalpreciounoa=sel.value*preciounoa;
              $('#totalpreciounoa').val(totalpreciounoa);
              total();
            }
          }
 


            function dosa(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldosa");
              divCc.style.display= "block";
              divCd= document.getElementById("tucuenta");
              divCd.style.display= "block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              preciodosa=arrayadultos[1];
              totalpreciodosa=sel.value*preciodosa;
              $('#totalpreciodosa').val(totalpreciodosa);
              total();
              }
            }
              


 function tresa(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltresa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciotresa=arrayadultos[2];
              totalpreciotresa=sel.value*preciotresa;
              $('#totalpreciotresa').val(totalpreciotresa);
              total();
             }
           }
function cuatroa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatroa");
             
 
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocuatroa=arrayadultos[3];
              totalpreciocuatroa=sel.value*preciocuatroa;
              $('#totalpreciocuatroa').val(totalpreciocuatroa);
              total();
             }
           }
           function cincoa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincoa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocincoa=arrayadultos[4];
              totalpreciocincoa=sel.value*preciocincoa;
              $('#totalpreciocincoa').val(totalpreciocincoa);
              
  total();
}
}

 function seisa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseisa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioseisa=arrayadultos[5];
              totalprecioseisa=sel.value*precioseisa;
              $('#totalprecioseisa').val(totalprecioseisa);
             total();
}
}


 function sietea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsietea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciosietea=arrayadultos[6];
              totalpreciosietea=sel.value*preciosietea;
              $('#totalpreciosietea').val(totalpreciosietea);
            total();

}
}
 function ochoa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochoa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioochoa=arrayadultos[7];
              totalprecioochoa=sel.value*precioochoa;
              $('#totalprecioochoa').val(totalprecioochoa);
            total();

}
}

function nuevea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnuevea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precionuevea=arrayadultos[8];
              totalprecionuevea=sel.value*precionuevea;
              $('#totalprecionuevea').val(totalprecionuevea);
             total();

}
}

 function dieza(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldieza");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodieza=arrayadultos[9];
              totalpreciodieza=sel.value*preciodieza;
              $('#totalpreciodieza').val(totalpreciodieza);
             total();

}
}
function oncea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaloncea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciooncea=arrayadultos[10];
              totalpreciooncea=sel.value*preciooncea;
              $('#totalpreciooncea').val(totalpreciooncea);
            total();

}
}
function docea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldocea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodocea=arrayadultos[11];
              totalpreciodocea=sel.value*preciodocea;
              $('#totalpreciodocea').val(totalpreciodocea);
    var totalpreciodocea= $("#totalpreciodocea").val();
            total();

}
}
function trecea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltrecea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciotrecea=arrayadultos[12];
              var totalpreciotrecea=sel.value*preciotrecea;
              $('#totalpreciotrecea').val(totalpreciotrecea);
              total();
            }
          }
 function catorcea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcatorcea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciocatorcea=arrayadultos[13];
              var totalpreciocatorcea=sel.value*preciocatorcea;
              $('#totalpreciocatorcea').val(totalpreciocatorcea);
              total();
            }
          }

          function quincea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquincea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioquincea=arrayadultos[14];
              var totalprecioquincea=sel.value*precioquincea;
              $('#totalprecioquincea').val(totalprecioquincea);
              total();
            }
          }

          function dieciseisa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseisa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciseisa=arrayadultos[15];
              var totalpreciodieciseisa=sel.value*preciodieciseisa;
              $('#totalpreciodieciseisa').val(totalpreciodieciseisa);
              total();
            }
          }

          function diecisietea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisietea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecisietea=arrayadultos[16];
              var totalpreciodiecisietea=sel.value*preciodiecisietea;
              $('#totalpreciodiecisietea').val(totalpreciodiecisietea);
              total();
            }
          }
 function dieciochoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciochoa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciochoa=arrayadultos[17];
              var totalpreciodieciochoa=sel.value*preciodieciochoa;
              $('#totalpreciodieciochoa').val(totalpreciodieciochoa);
              total();
            }
          }
 function diecinuevea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinuevea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecinuevea=arrayadultos[18];
              var totalpreciodiecinuevea=sel.value*preciodiecinuevea;
              $('#totalpreciodiecinuevea').val(totalpreciodiecinuevea);
              total();
            }
          }
 function veintea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintea=arrayadultos[19];
              var totalprecioveintea=sel.value*precioveintea;
              $('#totalprecioveintea').val(totalprecioveintea);
              total();
            }
          }
 function veintiunoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiunoa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiunoa=arrayadultos[20];
              var totalprecioveintiunoa=sel.value*precioveintiunoa;
              $('#totalprecioveintiunoa').val(totalprecioveintiunoa);
              total();
            }
          }
 function veintidosa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidosa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintidosa=arrayadultos[21];
              var totalprecioveintidosa=sel.value*precioveintidosa;
              $('#totalprecioveintidosa').val(totalprecioveintidosa);
              total();
            }
          }
 function veintitresa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitresa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintitresa=arrayadultos[22];
              var totalprecioveintitresa=sel.value*precioveintitresa;
              $('#totalprecioveintitresa').val(totalprecioveintitresa);
              total();
            }
          }
 function veinticuatroa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatroa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticuatroa=arrayadultos[23];
              var totalprecioveinticuatroa=sel.value*precioveinticuatroa;
              $('#totalprecioveinticuatroa').val(totalprecioveinticuatroa);
              total();
            }
          }
 function veinticincoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticincoa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticincoa=arrayadultos[24];
              var totalprecioveinticincoa=sel.value*precioveinticincoa;
              $('#totalprecioveinticincoa').val(totalprecioveinticincoa);
              total();
            }
          }
 function veintiseisa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseisa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiseisa=arrayadultos[25];
              var totalprecioveintiseisa=sel.value*precioveintiseisa;
              $('#totalprecioveintiseisa').val(totalprecioveintiseisa);
              total();
            }
          }
          function veintisietea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisietea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintisietea=arrayadultos[26];
              var totalprecioveintisietea=sel.value*precioveintisietea;
              $('#totalprecioveintisietea').val(totalprecioveintisietea);
              total();
            }
          }
 
 function veintiochoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiochoa");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiochoa=arrayadultos[27];
              var totalprecioveintiochoa=sel.value*precioveintiochoa;
              $('#totalprecioveintiochoa').val(totalprecioveintiochoa);
              total();
            }
          }
          function veintinuevea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinuevea");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintinuevea=arrayadultos[28];
              var totalprecioveintinuevea=sel.value*precioveintinuevea;
              $('#totalprecioveintinuevea').val(totalprecioveintinuevea);
              total();
            }
          }
 function treintaa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltreintaa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display="block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              var preciotreintaa=arrayadultos[29];
              var totalpreciotreintaa=sel.value*preciotreintaa;
              $('#totalpreciotreintaa').val(totalpreciotreintaa);
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
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 130px" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 110px;margin:0;padding: 0">
 
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

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="width: 100%;margin-top: -29px;height: 80px"> 
   <form class="" action="ira" method="get" id="myform" >
<div class="flex-container-iconos" style="margin-top: -30px;margin-left: 50px">

<div style="margin-left: 85px">
   <a href="https://api.whatsapp.com/send?phone=542213602683&text=Hola,%20quisiera%20realizar%20una%20consulta" > <img src="/img/logos/whatsapp.jpg"  style="width:50px;height: 50px"></a>
</div>


<div style="margin-top: -5px;width: 150px;height: 150px;">

<a href="#" id="mostrar-ocultar" class="dropbtn" style="border-radius: 10px;background-color: DodgerBlue;margin-left: -200px;width: 150px;height: 150px">=</a>
  
   </div>
  
   <div id="botones" style="display: none;width: 200px;height: 300px;z-index: 100;margin-top: 10px;background-color: white;z-index: 110">

     <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="inicio"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 47px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Whatsfarma</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="principal" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color:black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidate En Casa!!!</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="mujeres" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Mujer</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="bucales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Salud Bucal!</button></b><br>


  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="capilares"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Capilar</button></b><br>
  

    <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="corporales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Corporal</button></b><br>
    
  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="farmacia" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Farmacia</button></b><br>

  <b><button type="submit" class="btn btn-success" id="myform" name="submit"value="marcas"style="width: 340px;height: 50px;background-color: orange;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Otras Marcas!!!</button></b><br>
  
 <b><button type="submit" id="myform" name="submit"value="enviar" style="width: 340px;height: 50px;background-color: #00a94f;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">FINALIZAR</button></b>


</div>
</div>
</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 170px;width: 100%;margin-top: -29px">
        

<input type="hidden" name="origen" value="adultos">
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

    <input type="text" class="form-control" disabled="selected" name="totalapagaradultos" id="totalapagaradultos"  value=" "style="width: 100%;height:40px;margin-left: 1%;font-size: 1.2em;margin-top: -0.5%;background-color:white;text-align: center;color: red;z-index: 100"></b></div>


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


</form>


</section>


</div>

<div class="grid-item adultos" style="display: none">
  <?php  
  $arraypreciosunitariosa=[]; 
  foreach($productos as $producto){
    $preciounitarioa=$producto->Precio;

 
$arraypreciosunitariosa[] =$preciounitarioa;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayadultos=<?php echo json_encode($arraypreciosunitariosa);?>;
 
</script>


  </div>

<body>



   

</body>

</html>
