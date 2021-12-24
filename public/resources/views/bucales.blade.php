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

      <title>CUIDADO BUCAL</title>
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

              var totalpreciounoo = $("#totalpreciounoo").val();
              var totalpreciodoso = $("#totalpreciodoso").val();
              var totalpreciotreso = $("#totalpreciotreso").val();
              var totalpreciocuatroo = $("#totalpreciocuatroo").val();
              var totalpreciocincoo = $("#totalpreciocincoo").val();
              var totalprecioseiso = $("#totalprecioseiso").val();           
              var totalpreciosieteo = $("#totalpreciosieteo").val();
              var totalprecioochoo = $("#totalprecioochoo").val();
              var totalprecionueveo = $("#totalprecionueveo").val();
              var totalpreciodiezo = $("#totalpreciodiezo").val();
              var totalprecioonceo = $("#totalprecioonceo").val();
              var totalpreciodoceo = $("#totalpreciodoceo").val();
              var totalpreciotreceo = $("#totalpreciotreceo").val();
              var totalpreciocatorceo = $("#totalpreciocatorceo").val();
              var totalprecioquinceo = $("#totalprecioquinceo").val();
              var totalpreciodieciseiso = $("#totalpreciodieciseiso").val();
            var totalpreciodiecisieteo = $("#totalpreciodiecisieteo").val();
              var totalpreciodieciochoo = $("#totalpreciodieciochoo").val();
            var totalpreciodiecinueveo = $("#totalpreciodiecinueveo").val();
              var totalprecioveinteo = $("#totalprecioveinteo").val();
              var totalprecioveintiunoo = $("#totalprecioveintiunoo").val();
              var totalprecioveintidoso = $("#totalprecioveintidoso").val();
            var totalprecioveintitreso = $("#totalprecioveintitreso").val();
        var totalprecioveinticuatroo = $("#totalprecioveinticuatroo").val();
          var totalprecioveinticincoo = $("#totalprecioveinticincoo").val();
            var totalprecioveintiseiso = $("#totalprecioveintiseiso").val();
          var totalprecioveintisieteo = $("#totalprecioveintisieteo").val();
          var totalprecioveintiochoo = $("#totalprecioveintiochoo").val();
          var totalprecioveintinueveo = $("#totalprecioveintinueveo").val();
          var totalpreciotreintao = $("#totalpreciotreintao").val();

              $('#totalapagarbucales').val(totalpreciounoo-(-totalpreciodoso)-(-totalpreciotreso)
-(-totalpreciocuatroo)-(-totalpreciocincoo)-(-totalprecioseiso)-(-totalpreciosieteo)-(-totalprecioochoo)-(-totalprecionueveo)-(-totalpreciodiezo)-(-totalprecioonceo)-(-totalpreciodoceo)-(-totalpreciotreceo)-(-totalpreciocatorceo)-(-totalprecioquinceo)-(-totalpreciodieciseiso)-(-totalpreciodiecisieteo)-(-totalpreciodieciochoo)-(-totalpreciodiecinueveo)-(-totalprecioveinteo)-(-totalprecioveintiunoo)-(-totalprecioveintidoso)-(-totalprecioveintitreso)-(-totalprecioveinticuatroo)-(-totalprecioveinticincoo)-(-totalprecioveintiseiso)-(-totalprecioveintisieteo)-(-totalprecioveintiochoo)-(-totalprecioveintinueveo)-(-totalpreciotreintao));
  }
                           
function unoo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalunoo");      
 
             

              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciounoo=arraybucales[0];
              var totalpreciounoo=sel.value*preciounoo;
              $('#totalpreciounoo').val(totalpreciounoo);
              total();
            }
          }
 


            function doso(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldoso");
              divCc.style.display= "block";
              divCd= document.getElementById("tucuenta");
              divCd.style.display= "block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              preciodoso=arraybucales[1];
              totalpreciodoso=sel.value*preciodoso;
              $('#totalpreciodoso').val(totalpreciodoso);
              total();
              }
            }
              


 function treso(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltreso");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciotreso=arraybucales[2];
              totalpreciotreso=sel.value*preciotreso;
              $('#totalpreciotreso').val(totalpreciotreso);
              total();
             }
           }
function cuatroo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatroo");
             
 
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocuatroo=arraybucales[3];
              totalpreciocuatroo=sel.value*preciocuatroo;
              $('#totalpreciocuatroo').val(totalpreciocuatroo);
              total();
             }
           }
           function cincoo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincoo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocincoo=arraybucales[4];
              totalpreciocincoo=sel.value*preciocincoo;
              $('#totalpreciocincoo').val(totalpreciocincoo);
              
  total();
}
}

 function seiso(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseiso");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioseiso=arraybucales[5];
              totalprecioseiso=sel.value*precioseiso;
              $('#totalprecioseiso').val(totalprecioseiso);
             total();
}
}


 function sieteo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsieteo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciosieteo=arraybucales[6];
              totalpreciosieteo=sel.value*preciosieteo;
              $('#totalpreciosieteo').val(totalpreciosieteo);
            total();

}
}
 function ochoo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochoo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioochoo=arraybucales[7];
              totalprecioochoo=sel.value*precioochoo;
              $('#totalprecioochoo').val(totalprecioochoo);
            total();

}
}

function nueveo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnueveo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precionueveo=arraybucales[8];
              totalprecionueveo=sel.value*precionueveo;
              $('#totalprecionueveo').val(totalprecionueveo);
             total();

}
}

 function diezo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiezo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodiezo=arraybucales[9];
              totalpreciodiezo=sel.value*preciodiezo;
              $('#totalpreciodiezo').val(totalpreciodiezo);
             total();

}
}
function onceo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalonceo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioonceo=arraybucales[10];
              totalprecioonceo=sel.value*precioonceo;
              $('#totalprecioonceo').val(totalprecioonceo);
            total();

}
}
function doceo(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldoceo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodoceo=arraybucales[11];
              totalpreciodoceo=sel.value*preciodoceo;
              $('#totalpreciodoceo').val(totalpreciodoceo);
    var totalpreciodoceo= $("#totalpreciodocea").val();
            total();

}
}
function treceo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltreceo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciotreceo=arraybucales[12];
              var totalpreciotreceo=sel.value*preciotreceo;
              $('#totalpreciotreceo').val(totalpreciotreceo);
              total();
            }
          }
 function catorceo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcatorceo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciocatorceo=arraybucales[13];
              var totalpreciocatorceo=sel.value*preciocatorceo;
              $('#totalpreciocatorceo').val(totalpreciocatorceo);
              total();
            }
          }

          function quinceo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquinceo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioquinceo=arraybucales[14];
              var totalprecioquinceo=sel.value*precioquinceo;
              $('#totalprecioquinceo').val(totalprecioquinceo);
              total();
            }
          }

          function dieciseiso(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseiso");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciseiso=arraybucales[15];
              var totalpreciodieciseiso=sel.value*preciodieciseiso;
              $('#totalpreciodieciseiso').val(totalpreciodieciseiso);
              total();
            }
          }

          function diecisieteo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisieteo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecisieteo=arraybucales[16];
              var totalpreciodiecisieteo=sel.value*preciodiecisieteo;
              $('#totalpreciodiecisieteo').val(totalpreciodiecisieteo);
              total();
            }
          }
 function dieciochoo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciochoo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciochoo=arraybucales[17];
              var totalpreciodieciochoo=sel.value*preciodieciochoo;
              $('#totalpreciodieciochoo').val(totalpreciodieciochoo);
              total();
            }
          }
 function diecinueveo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinueveo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecinueveo=arraybucales[18];
              var totalpreciodiecinueveo=sel.value*preciodiecinueveo;
              $('#totalpreciodiecinueveo').val(totalpreciodiecinueveo);
              total();
            }
          }
 function veinteo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinteo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinteo=arraybucales[19];
              var totalprecioveinteo=sel.value*precioveinteo;
              $('#totalprecioveinteo').val(totalprecioveinteo);
              total();
            }
          }
 function veintiunoo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiunoo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiunoo=arraybucales[20];
              var totalprecioveintiunoo=sel.value*precioveintiunoo;
              $('#totalprecioveintiunoo').val(totalprecioveintiunoo);
              total();
            }
          }
 function veintidoso(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidoso");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintidoso=arraybucales[21];
              var totalprecioveintidoso=sel.value*precioveintidoso;
              $('#totalprecioveintidoso').val(totalprecioveintidoso);
              total();
            }
          }
 function veintitreso(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitreso");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintitreso=arraybucales[22];
              var totalprecioveintitreso=sel.value*precioveintitreso;
              $('#totalprecioveintitreso').val(totalprecioveintitreso);
              total();
            }
          }
 function veinticuatroo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatroo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticuatroo=arraybucales[23];
              var totalprecioveinticuatroo=sel.value*precioveinticuatroo;
              $('#totalprecioveinticuatroo').val(totalprecioveinticuatroo);
              total();
            }
          }
 function veinticincoo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticincoo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticincoo=arraybucales[24];
              var totalprecioveinticincoo=sel.value*precioveinticincoo;
              $('#totalprecioveinticincoo').val(totalprecioveinticincoo);
              total();
            }
          }
 function veintiseiso(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseiso");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiseiso=arraybucales[25];
              var totalprecioveintiseiso=sel.value*precioveintiseiso;
              $('#totalprecioveintiseiso').val(totalprecioveintiseiso);
              total();
            }
          }
          function veintisieteo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisieteo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintisieteo=arraybucales[26];
              var totalprecioveintisieteo=sel.value*precioveintisieteo;
              $('#totalprecioveintisieteo').val(totalprecioveintisieteo);
              total();
            }
          }
 
 function veintiochoo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiochoo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiochoo=arraybucales[27];
              var totalprecioveintiochoo=sel.value*precioveintiochoo;
              $('#totalprecioveintiochoo').val(totalprecioveintiochoo);
              total();
            }
          }
          function veintinueveo(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinueveo");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintinueveo=arraybucales[28];
              var totalprecioveintinueveo=sel.value*precioveintinueveo;
              $('#totalprecioveintinueveo').val(totalprecioveintinueveo);
              total();
            }
          }
 function treintao(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltreintao");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display="block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              var preciotreintao=arraybucales[29];
              var totalpreciotreintao=sel.value*preciotreintao;
              $('#totalpreciotreintao').val(totalpreciotreintao);
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
 
<div class="flex-container-celu" style="display: none" >
  <div id="celu" style="display: none;background-color: #4bbfdd;margin-top: -29px"> 
<img src="/img/logos/celu.jpg" style="width: 300px;height: 500px;border-radius: 10%;margin-top: 20px">
  </div>
</div>


 <div id="mostrartodo" >
<form class="" action="ira" method="get" id="myform" > 
  <input type="hidden" name="origen" value="bucales">
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

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="mujeres" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color:black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Mujer</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="adultos"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Adultos</button></b><br>

   <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="capilares"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Capilar</button></b><br>

     <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="corporales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Corporal</button></b><br>

 <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="farmacia"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Farmacia</button></b><br>

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="marcas" style="width: 340px;height: 50px;background-color: orange;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Otras Marcas!!!</button></b><br>

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

    <input type="text" class="form-control" disabled="selected" name="totalapagarbucales" id="totalapagarbucales"  value=" "style="width: 100%;height:40px;margin-left: 1%;font-size: 1.2em;margin-top: -0.5%;background-color:white;text-align: center;color: red;z-index: 100"></b></div>

 
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
<div class="grid-item bucales" style="display: none">
  <?php  
  $arraypreciosunitarioso=[]; 
  foreach($productos as $producto){
    $preciounitarioo=$producto->Precio;

 
$arraypreciosunitarioso[] =$preciounitarioo;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arraybucales=<?php echo json_encode($arraypreciosunitarioso);?>;
 
</script>


  </div>



<body>


</body>

</html>
