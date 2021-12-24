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
              var totalpreciotrecem = $("#totalpreciotrecem").val();
              var totalpreciocatorcem = $("#totalpreciocatorcem").val();
              var totalprecioquincem = $("#totalprecioquincem").val();
              var totalpreciodieciseism = $("#totalpreciodieciseism").val();
              var totalpreciodiecisietem = $("#totalpreciodiecisietem").val();
              var totalpreciodieciochom = $("#totalpreciodieciochom").val();
              var totalpreciodiecinuevem = $("#totalpreciodiecinuevem").val();
              var totalprecioveintem = $("#totalprecioveintem").val();
              var totalprecioveintiunom = $("#totalprecioveintiunom").val();
              var totalprecioveintidosm = $("#totalprecioveintidosm").val();
              var totalprecioveintitresm = $("#totalprecioveintitresm").val();
              var totalprecioveinticuatrom = $("#totalprecioveinticuatrom").val();
              var totalprecioveinticincom = $("#totalprecioveinticincom").val();
              var totalprecioveintiseism = $("#totalprecioveintiseism").val();
              var totalprecioveintisietem = $("#totalprecioveintisietem").val();
              var totalprecioveintiochom = $("#totalprecioveintiochom").val();
              var totalprecioveintinuevem = $("#totalprecioveintinuevem").val();
              var totalpreciotreintam = $("#totalpreciotreintam").val();
                           
              $('#totalapagarmujeres').val(totalpreciounom-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem)-(-totalpreciotrecem)-(-totalpreciocatorcem)-(-totalprecioquincem)-(-totalpreciodieciseism)-(-totalpreciodiecisietem)-(-totalpreciodieciochom)-(-totalpreciodiecinuevem)-(-totalprecioveintem)-(-totalprecioveintiunom)-(-totalprecioveintidosm)-(-totalprecioveintitresm)-(-totalprecioveinticuatrom)-(-totalprecioveinticincom)-(-totalprecioveintiseism)-(-totalprecioveintisietem)-(-totalprecioveintiochom)-(-totalprecioveintinuevem)-(-totalpreciotreintam));
  }
function unom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalunom");      
 
             

              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciounom=arraymujeres[0];
              var totalpreciounom=sel.value*preciounom;
              $('#totalpreciounom').val(totalpreciounom);
              total();
            }
          }
 


            function dosm(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldosm");
              divCc.style.display= "block";
              divCd= document.getElementById("tucuenta");
              divCd.style.display= "block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              preciodosm=arraymujeres[1];
              totalpreciodosm=sel.value*preciodosm;
              $('#totalpreciodosm').val(totalpreciodosm);
              total();
              }
            }
              


 function tresm(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltresm");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciotresm=arraymujeres[2];
              totalpreciotresm=sel.value*preciotresm;
              $('#totalpreciotresm').val(totalpreciotresm);
              total();
             }
           }
function cuatrom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatrom");
             
 
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocuatrom=arraymujeres[3];
              totalpreciocuatrom=sel.value*preciocuatrom;
              $('#totalpreciocuatrom').val(totalpreciocuatrom);
              total();
             }
           }
           function cincom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincom");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocincom=arraymujeres[4];
              totalpreciocincom=sel.value*preciocincom;
              $('#totalpreciocincom').val(totalpreciocincom);
              
  total();
}
}

 function seism(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseism");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioseism=arraymujeres[5];
              totalprecioseism=sel.value*precioseism;
              $('#totalprecioseism').val(totalprecioseism);
             total();
}
}


 function sietem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsietem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciosietem=arraymujeres[6];
              totalpreciosietem=sel.value*preciosietem;
              $('#totalpreciosietem').val(totalpreciosietem);
            total();

}
}
 function ochom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochom");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioochom=arraymujeres[7];
              totalprecioochom=sel.value*precioochom;
              $('#totalprecioochom').val(totalprecioochom);
            total();

}
}

function nuevem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnuevem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precionuevem=arraymujeres[8];
              totalprecionuevem=sel.value*precionuevem;
              $('#totalprecionuevem').val(totalprecionuevem);
             total();

}
}

 function diezm(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiezm");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodiezm=arraymujeres[9];
              totalpreciodiezm=sel.value*preciodiezm;
              $('#totalpreciodiezm').val(totalpreciodiezm);
             total();

}
}
function oncem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaloncem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciooncem=arraymujeres[10];
              totalpreciooncem=sel.value*preciooncem;
              $('#totalpreciooncem').val(totalpreciooncem);
            total();

}
}
function docem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldocem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodocem=arraymujeres[11];
              totalpreciodocem=sel.value*preciodocem;
              $('#totalpreciodocem').val(totalpreciodocem);
    var totalpreciodocem= $("#totalpreciodocea").val();
            total();

}
}
function trecem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltrecem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciotrecem=arraymujeres[12];
              var totalpreciotrecem=sel.value*preciotrecem;
              $('#totalpreciotrecem').val(totalpreciotrecem);
              total();
            }
          }
 function catorcem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcatorcem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciocatorcem=arraymujeres[13];
              var totalpreciocatorcem=sel.value*preciocatorcem;
              $('#totalpreciocatorcem').val(totalpreciocatorcem);
              total();
            }
          }

          function quincem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquincem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioquincem=arraymujeres[14];
              var totalprecioquincem=sel.value*precioquincem;
              $('#totalprecioquincem').val(totalprecioquincem);
              total();
            }
          }

          function dieciseism(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseism");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciseism=arraymujeres[15];
              var totalpreciodieciseism=sel.value*preciodieciseism;
              $('#totalpreciodieciseism').val(totalpreciodieciseism);
              total();
            }
          }

          function diecisietem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisietem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecisietem=arraymujeres[16];
              var totalpreciodiecisietem=sel.value*preciodiecisietem;
              $('#totalpreciodiecisietem').val(totalpreciodiecisietem);
              total();
            }
          }
 function dieciochom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciochom");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciochom=arraymujeres[17];
              var totalpreciodieciochom=sel.value*preciodieciochom;
              $('#totalpreciodieciochom').val(totalpreciodieciochom);
              total();
            }
          }
 function diecinuevem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinuevem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecinuevem=arraymujeres[18];
              var totalpreciodiecinuevem=sel.value*preciodiecinuevem;
              $('#totalpreciodiecinuevem').val(totalpreciodiecinuevem);
              total();
            }
          }
 function veintem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintem=arraymujeres[19];
              var totalprecioveintem=sel.value*precioveintem;
              $('#totalprecioveintem').val(totalprecioveintem);
              total();
            }
          }
 function veintiunom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiunom");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiunom=arraymujeres[20];
              var totalprecioveintiunom=sel.value*precioveintiunom;
              $('#totalprecioveintiunom').val(totalprecioveintiunom);
              total();
            }
          }
 function veintidosm(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidosm");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintidosm=arraymujeres[21];
              var totalprecioveintidosm=sel.value*precioveintidosm;
              $('#totalprecioveintidosm').val(totalprecioveintidosm);
              total();
            }
          }
 function veintitresm(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitresm");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintitresm=arraymujeres[22];
              var totalprecioveintitresm=sel.value*precioveintitresm;
              $('#totalprecioveintitresm').val(totalprecioveintitresm);
              total();
            }
          }
 function veinticuatrom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatrom");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticuatrom=arraymujeres[23];
              var totalprecioveinticuatrom=sel.value*precioveinticuatrom;
              $('#totalprecioveinticuatrom').val(totalprecioveinticuatrom);
              total();
            }
          }
 function veinticincom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticincom");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticincom=arraymujeres[24];
              var totalprecioveinticincom=sel.value*precioveinticincom;
              $('#totalprecioveinticincom').val(totalprecioveinticincom);
              total();
            }
          }
 function veintiseism(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseism");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiseism=arraymujeres[25];
              var totalprecioveintiseism=sel.value*precioveintiseism;
              $('#totalprecioveintiseism').val(totalprecioveintiseism);
              total();
            }
          }
          function veintisietem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisietem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintisietem=arraymujeres[26];
              var totalprecioveintisietem=sel.value*precioveintisietem;
              $('#totalprecioveintisietem').val(totalprecioveintisietem);
              total();
            }
          }
 
 function veintiochom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiochom");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiochom=arraymujeres[27];
              var totalprecioveintiochom=sel.value*precioveintiochom;
              $('#totalprecioveintiochom').val(totalprecioveintiochom);
              total();
            }
          }
          function veintinuevem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinuevem");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintinuevem=arraymujeres[28];
              var totalprecioveintinuevem=sel.value*precioveintinuevem;
              $('#totalprecioveintinuevem').val(totalprecioveintinuevem);
              total();
            }
          }
 function treintam(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltreintam");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display="block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              var preciotreintam=arraymujeres[29];
              var totalpreciotreintam=sel.value*preciotreintam;
              $('#totalpreciotreintam').val(totalpreciotreintam);
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
  <input type="hidden" name="origen" value="mujeres">
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
  

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="corporales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Corporal</button></b><br>

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

    <input type="text" class="form-control" disabled="selected" name="totalapagarmujeres" id="totalapagarmujeres"  value=" "style="width: 100%;height:40px;margin-left: 1%;font-size: 1.2em;margin-top: -0.5%;background-color:white;text-align: center;color: red;z-index: 100"></b></div>

 
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
   <b><label>{{$producto->DescripcionProducto}}<br><strong style="color:red">{{$producto->Precio}}</strong></label></b>
  
 
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
<div class="grid-item mujeres" style="display: none">
  <?php  
  $arraypreciosunitariosm=[]; 
  foreach($productos as $producto){
    $preciounitariom=$producto->Precio;

 
$arraypreciosunitariosm[] =$preciounitariom;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arraymujeres=<?php echo json_encode($arraypreciosunitariosm);?>;
 
</script>


  </div>




<body>


</body>

</html>
