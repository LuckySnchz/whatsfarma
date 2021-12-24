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

      <title>PERFUMERIA</title>
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

              var totalpreciouno=$("#totalpreciouno").val();
              var totalpreciodos=$("#totalpreciodos").val();
              var totalpreciotres=$("#totalpreciotres").val();
              var totalpreciocuatro=$("#totalpreciocuatro").val();
              var totalpreciocinco=$("#totalpreciocinco").val();
              var totalprecioseis=$("#totalprecioseis").val();             
              var totalpreciosiete=$("#totalpreciosiete").val();
              var totalprecioocho=$("#totalprecioocho").val();
              var totalprecionueve=$("#totalprecionueve").val();
              var totalpreciodiez=$("#totalpreciodiez").val();
              var totalprecioonce=$("#totalprecioonce").val();
              var totalpreciodoce=$("#totalpreciodoce").val();
              var totalpreciotrece=$("#totalpreciotrece").val();
              var totalpreciocatorce=$("#totalpreciocatorce").val();
              var totalprecioquince=$("#totalprecioquince").val();
              var totalpreciodieciseis=$("#totalpreciodieciseis").val();
              var totalpreciodiecisiete=$("#totalpreciodiecisiete").val();
              var totalpreciodieciocho=$("#totalpreciodieciocho").val();
              var totalpreciodiecinueve=$("#totalpreciodiecinueve").val();
              var totalprecioveinte=$("#totalprecioveinte").val();
              var totalprecioveintiuno=$("#totalprecioveintiuno").val();
              var totalprecioveintidos=$("#totalprecioveintidos").val();
              var totalprecioveintitres=$("#totalprecioveintitres").val();
              var totalprecioveinticuatro=$("#totalprecioveinticuatro").val();
              var totalprecioveinticinco=$("#totalprecioveinticinco").val();
              var totalprecioveintiseis=$("#totalprecioveintiseis").val();
              var totalprecioveintisiete=$("#totalprecioveintisiete").val();
              var totalprecioveintiocho=$("#totalprecioveintiocho").val();
              var totalprecioveintinueve=$("#totalprecioveintinueve").val();
              var totalpreciotreinta=$("#totalpreciotreinta").val();
                           
                           
           $('#totalapagarprincipal').val(totalpreciouno-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciotrece)-(-totalpreciocatorce)-(-totalprecioquince)-(-totalpreciodieciseis)-(-totalpreciodiecisiete)-(-totalpreciodieciocho)-(-totalpreciodiecinueve)-(-totalprecioveinte)-(-totalprecioveintiuno)-(-totalprecioveintidos)-(-totalprecioveintitres)-(-totalprecioveinticuatro)-(-totalprecioveinticinco)-(-totalprecioveintiseis)-(-totalprecioveintisiete)-(-totalprecioveintiocho)-(-totalprecioveintinueve)-(-totalpreciotreinta));
  }

function uno(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaluno");      
 
             

              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciouno=arrayprincipal[0];
              var totalpreciouno=sel.value*preciouno;
              $('#totalpreciouno').val(totalpreciouno);
              total();
            }
          }
 


            function dos(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldos");
              divCc.style.display= "block";
              divCd= document.getElementById("tucuenta");
              divCd.style.display= "block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              preciodos=arrayprincipal[1];
              totalpreciodos=sel.value*preciodos;
              $('#totalpreciodos').val(totalpreciodos);
              total();
              }
            }
              


 function tres(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltres");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciotres=arrayprincipal[2];
              totalpreciotres=sel.value*preciotres;
              $('#totalpreciotres').val(totalpreciotres);
              total();
             }
           }
function cuatro(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatro");
             
 
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocuatro=arrayprincipal[3];
              totalpreciocuatro=sel.value*preciocuatro;
              $('#totalpreciocuatro').val(totalpreciocuatro);
              total();
             }
           }
           function cinco(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcinco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciocinco=arrayprincipal[4];
              totalpreciocinco=sel.value*preciocinco;
              $('#totalpreciocinco').val(totalpreciocinco);
              
  total();
}
}

 function seis(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseis");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioseis=arrayprincipal[5];
              totalprecioseis=sel.value*precioseis;
              $('#totalprecioseis').val(totalprecioseis);
             total();
}
}


 function siete(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsiete");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciosiete=arrayprincipal[6];
              totalpreciosiete=sel.value*preciosiete;
              $('#totalpreciosiete').val(totalpreciosiete);
            total();

}
}
 function ocho(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalocho");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioocho=arrayprincipal[7];
              totalprecioocho=sel.value*precioocho;
              $('#totalprecioocho').val(totalprecioocho);
            total();

}
}

function nueve(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnueve");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precionueve=arrayprincipal[8];
              totalprecionueve=sel.value*precionueve;
              $('#totalprecionueve').val(totalprecionueve);
             total();

}
}

 function diez(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiez");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodiez=arrayprincipal[9];
              totalpreciodiez=sel.value*preciodiez;
              $('#totalpreciodiez').val(totalpreciodiez);
             total();

}
}
function once(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalonce");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              precioonce=arrayprincipal[10];
              totalprecioonce=sel.value*precioonce;
              $('#totalprecioonce').val(totalprecioonce);
            total();

}
}
function doce(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldoce");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              preciodoce=arrayprincipal[11];
              totalpreciodoce=sel.value*preciodoce;
              $('#totalpreciodoce').val(totalpreciodoce);
    var totalpreciodoce= $("#totalpreciodocea").val();
            total();

}
}
function trece(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltrece");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciotrece=arrayprincipal[12];
              var totalpreciotrece=sel.value*preciotrece;
              $('#totalpreciotrece').val(totalpreciotrece);
              total();
            }
          }
 function catorce(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcatorce");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciocatorce=arrayprincipal[13];
              var totalpreciocatorce=sel.value*preciocatorce;
              $('#totalpreciocatorce').val(totalpreciocatorce);
              total();
            }
          }

          function quince(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquince");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioquince=arrayprincipal[14];
              var totalprecioquince=sel.value*precioquince;
              $('#totalprecioquince').val(totalprecioquince);
              total();
            }
          }

          function dieciseis(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseis");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciseis=arrayprincipal[15];
              var totalpreciodieciseis=sel.value*preciodieciseis;
              $('#totalpreciodieciseis').val(totalpreciodieciseis);
              total();
            }
          }

          function diecisiete(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisiete");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecisiete=arrayprincipal[16];
              var totalpreciodiecisiete=sel.value*preciodiecisiete;
              $('#totalpreciodiecisiete').val(totalpreciodiecisiete);
              total();
            }
          }
 function dieciocho(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciocho");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodieciocho=arrayprincipal[17];
              var totalpreciodieciocho=sel.value*preciodieciocho;
              $('#totalpreciodieciocho').val(totalpreciodieciocho);
              total();
            }
          }
 function diecinueve(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinueve");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var preciodiecinueve=arrayprincipal[18];
              var totalpreciodiecinueve=sel.value*preciodiecinueve;
              $('#totalpreciodiecinueve').val(totalpreciodiecinueve);
              total();
            }
          }
 function veinte(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinte");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinte=arrayprincipal[19];
              var totalprecioveinte=sel.value*precioveinte;
              $('#totalprecioveinte').val(totalprecioveinte);
              total();
            }
          }
 function veintiuno(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiuno");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiuno=arrayprincipal[20];
              var totalprecioveintiuno=sel.value*precioveintiuno;
              $('#totalprecioveintiuno').val(totalprecioveintiuno);
              total();
            }
          }
 function veintidos(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidos");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintidos=arrayprincipal[21];
              var totalprecioveintidos=sel.value*precioveintidos;
              $('#totalprecioveintidos').val(totalprecioveintidos);
              total();
            }
          }
 function veintitres(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitres");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintitres=arrayprincipal[22];
              var totalprecioveintitres=sel.value*precioveintitres;
              $('#totalprecioveintitres').val(totalprecioveintitres);
              total();
            }
          }
 function veinticuatro(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatro");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticuatro=arrayprincipal[23];
              var totalprecioveinticuatro=sel.value*precioveinticuatro;
              $('#totalprecioveinticuatro').val(totalprecioveinticuatro);
              total();
            }
          }
 function veinticinco(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticinco");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveinticinco=arrayprincipal[24];
              var totalprecioveinticinco=sel.value*precioveinticinco;
              $('#totalprecioveinticinco').val(totalprecioveinticinco);
              total();
            }
          }
 function veintiseis(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseis");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiseis=arrayprincipal[25];
              var totalprecioveintiseis=sel.value*precioveintiseis;
              $('#totalprecioveintiseis').val(totalprecioveintiseis);
              total();
            }
          }
          function veintisiete(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisiete");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintisiete=arrayprincipal[26];
              var totalprecioveintisiete=sel.value*precioveintisiete;
              $('#totalprecioveintisiete').val(totalprecioveintisiete);
              total();
            }
          }
 
 function veintiocho(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiocho");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintiocho=arrayprincipal[27];
              var totalprecioveintiocho=sel.value*precioveintiocho;
              $('#totalprecioveintiocho').val(totalprecioveintiocho);
              total();
            }
          }
          function veintinueve(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinueve");
             
 


              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
divp = document.getElementById("tupedido");
              divp.style.display = "none";

              var precioveintinueve=arrayprincipal[28];
              var totalprecioveintinueve=sel.value*precioveintinueve;
              $('#totalprecioveintinueve').val(totalprecioveintinueve);
              total();
            }
          }
 function treinta(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltreinta");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display="block";
              divp = document.getElementById("tupedido");
              divp.style.display = "none";
              var preciotreinta=arrayprincipal[29];
              var totalpreciotreinta=sel.value*preciotreinta;
              $('#totalpreciotreinta').val(totalpreciotreinta);
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
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 200px" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 10px;margin:0;padding: 0">
 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="/img/logos/marca.jpg"  style="width:100%;background-color: white;height: 180px">
        <div class="carousel-caption">
          <!--<h3>FARMACIA INTERNACIONAL</h3>
          <p>3 nro 761. TE:4224533</p>-->
        </div>
      </div>
      
      <div class="item">
        <img src="/img/logos/farmainternacional.jpg"  style="width:90%;background-color: white;height: 180px">
        <div class="carousel-caption">
         
        </div>
      </div>

      <div class="item">
        <img src="/img/logos/tupedido.jpg"  style="width:100%;background-color: white;height: 180px">
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



 <b><button type="submit" class="btn btn-success" id="myform" name="submit"value="mujeres"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Mujer</button></b><br>

 <b><button type="submit" class="btn btn-success" id="myform" name="submit"value="adultos" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Adultos</button></b><br>

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="bucales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Salud Bucal!</button></b><br>

  <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="capilares"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Capilar</button></b><br>

    <b><button  type="submit" class="btn btn-success" id="myform" name="submit"value="corporales"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Corporal</button></b><br>
  
 <b><button type="submit" class="btn btn-success" id="myform" name="submit"value="farmacia"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Farmacia</button></b><br>

 <b><button type="submit" class="btn btn-success" id="myform" name="submit"value="marcas" style="width: 340px;height: 50px;background-color: orange;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Próximas Marcas!!!</button></b><br>

 <b><button type="submit"id="myform" name="submit"value="enviar" style="width: 340px;height: 50px;background-color: #00a94f;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">FINALIZAR</button></b>


    
</div>
</div>
</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 170px;width: 100%;margin-top: -29px">
  <form class="" action="ira" method="get" id="myform" >       

<input type="hidden" name="origen" value="principal">
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

    <input type="text" class="form-control" disabled="selected" name="totalapagarprincipal" id="totalapagarprincipal"  value=" "style="width: 100%;height:40px;margin-left: 1%;font-size: 1.2em;margin-top: -0.5%;background-color:white;text-align: center;color: red;z-index: 100"></b></div>


</div>
</div>

</section>

      

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height:10500px;text-align: center;margin-top: -29px" >


@foreach($productos as $producto)

<div class="flex-container" style="display: inline-block;float: left;margin-left: 4.5%"> 

<div>
<img class="group list-group-image zoom" src="{{asset('img/'.$producto->image) }}" alt="" style="width: 150px;height: 150px;" /> 

  <!--<img src="/img/dos.jpg" style="width: 13em;height: 9em;">
  <!--SOLO COMPLETAR LOS <label></label>-->
   <b><label>{{$producto->DescripcionProducto}}<br><strong style="color:red">{{$producto->Precio}}.-</strong></label></b>
  
 
  <div style="display: none">
   <b><input type="text" class="form-control" id="{{$producto->NombrePrecio}}" name="{{$producto->NombrePrecio}}" value=""style="width: 80%;height: 2em;border-style: none"></b>
   
</div>

<select class="form-control"onChange="{{$producto->NombreVariable}}(this)" style="width: 40%;margin-left: 35%;position: relative;margin-top: 5%;z-index: 99">
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
<p style="text-decoration-line: underline;margin-left: -20px">.......................................................</p>
</div>

</div>

@endforeach

</form>

</section>
</div>
<div class="grid-item principal" style="display: none">
  <?php  
  $arraypreciosunitariosp=[]; 
  foreach($productos as $producto){
    $preciounitariop=$producto->Precio;

 
$arraypreciosunitariosp[] =$preciounitariop;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayprincipal=<?php echo json_encode($arraypreciosunitariosp);?>;
 
</script>


  </div>




<body>


</body>

</html>
