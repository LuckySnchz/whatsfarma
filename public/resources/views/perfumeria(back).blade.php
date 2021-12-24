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


      <script type="text/javascript">

//SOLO COMPLETAR LOS precioun..//
 function total() {                         
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
              var totalpreciotrece = $("#totalpreciotrece").val();
              var totalpreciocatorce = $("#totalpreciocatorce").val();
              var totalprecioquince = $("#totalprecioquince").val();
              var totalpreciodieciseis = $("#totalpreciodieciseis").val();
              var totalpreciodiecisiete = $("#totalpreciodiecisiete").val();
              var totalpreciodieciocho = $("#totalpreciodieciocho").val();
              var totalpreciodiecinueve = $("#totalpreciodiecinueve").val();
              var totalprecioveinte = $("#totalprecioveinte").val();
              var totalprecioveintiuno = $("#totalprecioveintiuno").val();
              var totalprecioveintidos = $("#totalprecioveintidos").val();
              var totalprecioveintitres = $("#totalprecioveintitres").val();
              var totalprecioveinticuatro = $("#totalprecioveinticuatro").val();
              var totalprecioveinticinco = $("#totalprecioveinticinco").val();
              var totalprecioveintiseis = $("#totalprecioveintiseis").val();
              var totalprecioveintisiete = $("#totalprecioveintisiete").val();
              var totalprecioveintiocho = $("#totalprecioveintiocho").val();
              var totalprecioveintinueve = $("#totalprecioveintinueve").val();
              var totalpreciotreinta = $("#totalpreciotreinta").val();

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

              $('#totalapagar').val((totalpreciouno)-(-totalpreciodos)-(-totalpreciotres)
-(-totalpreciocuatro)-(-totalpreciocinco)-(-totalprecioseis)-(-totalpreciosiete)-(-totalprecioocho)-(-totalprecionueve)-(-totalpreciodiez)-(-totalprecioonce)-(-totalpreciodoce)-(-totalpreciotrece)-(-totalpreciocatorce)-(-totalprecioquince)-(-totalpreciodieciseis)-(-totalpreciodiecisiete)-(-totalpreciodieciocho)-(-totalpreciodiecinueve)-(-totalprecioveinte)-(-totalprecioveintiuno)-(-totalprecioveintidos)-(-totalprecioveintitres)-(-totalprecioveinticuatro)-(-totalprecioveinticinco)-(-totalprecioveintiseis)-(-totalprecioveintisiete)-(-totalprecioveintiocho)-(-totalprecioveintinueve)-(-totalpreciotreinta)-(-totalpreciounom)-(-totalpreciodosm)-(-totalpreciotresm)
-(-totalpreciocuatrom)-(-totalpreciocincom)-(-totalprecioseism)-(-totalpreciosietem)-(-totalprecioochom)-(-totalprecionuevem)-(-totalpreciodiezm)-(-totalpreciooncem)-(-totalpreciodocem)-(-totalpreciotrecem)-(-totalpreciocatorcem)-(-totalprecioquincem)-(-totalpreciodieciseism)-(-totalpreciodiecisietem)-(-totalpreciodieciochom)-(-totalpreciodiecinuevem)-(-totalprecioveintem)-(-totalprecioveintiunom)-(-totalprecioveintidosm)-(-totalprecioveintitresm)-(-totalprecioveinticuatrom)-(-totalprecioveinticincom)-(-totalprecioveintiseism)-(-totalprecioveintisietem)-(-totalprecioveintiochom)-(-totalprecioveintinuevem)-(-totalpreciotreintam)-
(-totalpreciounoa)-(-totalpreciodosa)-(-totalpreciotresa)
-(-totalpreciocuatroa)-(-totalpreciocincoa)-(-totalprecioseisa)-(-totalpreciosietea)-(-totalprecioochoa)-(-totalprecionuevea)-(-totalpreciodieza)-(-totalpreciooncea)-(-totalpreciodocea)-(-totalpreciotrecea)-(-totalpreciocatorcea)-(-totalprecioquincea)-(-totalpreciodieciseisa)-(-totalpreciodiecisietea)-(-totalpreciodieciochoa)-(-totalpreciodiecinuevea)-(-totalprecioveintea)-(-totalprecioveintiunoa)-(-totalprecioveintidosa)-(-totalprecioveintitresa)-(-totalprecioveinticuatroa)-(-totalprecioveinticincoa)-(-totalprecioveintiseisa)-(-totalprecioveintisietea)-(-totalprecioveintiochoa)-(-totalprecioveintinuevea)-(-totalpreciotreintaa));

}

function uno(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totaluno");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciouno=50;
              var totalpreciouno=sel.value*preciouno;
              $('#totalpreciouno').val(totalpreciouno);
              total();
            }
          }
 


            function dos(sel) {


if (sel.value >="0"){
divCc = document.getElementById("totaldos");
              divCc.style.display = "block";
              divCd = document.getElementById("tucuenta");
              divCd.style.display = "block";
              preciodos=200;
              totalpreciodos=sel.value*preciodos;
              $('#totalpreciodos').val(totalpreciodos);
              total();
              }
            }
              


 function tres(sel) {


if (sel.value >="0"){
divC = document.getElementById("totaltres");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              preciotres=250;
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
              preciocuatro=15;
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
              preciocinco=20;
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
              precioseis=15;
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
              preciosiete=900;
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
              precioocho=400;
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
              precionueve=150;
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
              preciodiez=150;
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
              precioonce=150;
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
              preciodoce=150;
              totalpreciodoce=sel.value*preciodoce;
              $('#totalpreciodoce').val(totalpreciodoce);
    var totalpreciounom = $("#totalpreciounom").val();
            total();

}
}

function trece(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totaltrece");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciotrece=50;
              var totalpreciotrece=sel.value*preciotrece;
              $('#totalpreciotrece').val(totalpreciotrece);
              total();
            }
          }
 function catorce(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalcatorce");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciocatorce=50;
              var totalpreciocatorce=sel.value*preciocatorce;
              $('#totalpreciocatorce').val(totalpreciocatorce);
              total();
            }
          }

          function quince(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalquince");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioquince=50;
              var totalprecioquince=sel.value*precioquince;
              $('#totalprecioquince').val(totalprecioquince);
              total();
            }
          }

          function dieciseis(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totaldieciseis");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciodieciseis=50;
              var totalpreciodieciseis=sel.value*preciodieciseis;
              $('#totalpreciodieciseis').val(totalpreciodieciseis);
              total();
            }
          }

          function diecisiete(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totaldiecisiete");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciodiecisiete=50;
              var totalpreciodiecisiete=sel.value*preciodiecisiete;
              $('#totalpreciodiecisiete').val(totalpreciodiecisiete);
              total();
            }
          }
 function dieciocho(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totaldieciocho");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciodieciocho=50;
              var totalpreciodieciocho=sel.value*preciodieciocho;
              $('#totalpreciodieciocho').val(totalpreciodieciocho);
              total();
            }
          }
 function diecinueve(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totaldiecinueve");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciodiecinueve=50;
              var totalpreciodiecinueve=sel.value*preciodiecinueve;
              $('#totalpreciodiecinueve').val(totalpreciodiecinueve);
              total();
            }
          }
 function veinte(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveinte");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveinte=50;
              var totalprecioveinte=sel.value*precioveinte;
              $('#totalprecioveinte').val(totalprecioveinte);
              total();
            }
          }
 function veintiuno(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveintiuno");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveintiuno=50;
              var totalprecioveintiuno=sel.value*precioveintiuno;
              $('#totalprecioveintiuno').val(totalprecioveintiuno);
              total();
            }
          }
 function veintidos(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveintidos");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveintidos=50;
              var totalprecioveintidos=sel.value*precioveintidos;
              $('#totalprecioveintidos').val(totalprecioveintidos);
              total();
            }
          }
 function veintitres(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveintitres");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveintitres=50;
              var totalprecioveintitres=sel.value*precioveintitres;
              $('#totalprecioveintitres').val(totalprecioveintitres);
              total();
            }
          }
 function veinticuatro(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveinticuatro");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveinticuatro=50;
              var totalprecioveinticuatro=sel.value*precioveinticuatro;
              $('#totalprecioveinticuatro').val(totalprecioveinticuatro);
              total();
            }
          }
 function veinticinco(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveinticinco");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveinticinco=50;
              var totalprecioveinticinco=sel.value*precioveinticinco;
              $('#totalprecioveinticinco').val(totalprecioveinticinco);
              total();
            }
          }
 function veintiseis(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveintiseis");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveintiseis=50;
              var totalprecioveintiseis=sel.value*precioveintiseis;
              $('#totalprecioveintiseis').val(totalprecioveintiseis);
              total();
            }
          }
          function veintisiete(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveintisiete");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveintisiete=50;
              var totalprecioveintisiete=sel.value*precioveintisiete;
              $('#totalprecioveintisiete').val(totalprecioveintisiete);
              total();
            }
          }
 
 function veintiocho(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveintiocho");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveintiocho=50;
              var totalprecioveintiocho=sel.value*precioveintiocho;
              $('#totalprecioveintiocho').val(totalprecioveintiocho);
              total();
            }
          }
          function veintinueve(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totalveintinueve");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var precioveintinueve=50;
              var totalprecioveintinueve=sel.value*precioveintinueve;
              $('#totalprecioveintinueve').val(totalprecioveintinueve);
              total();
            }
          }
 function treinta(sel) {
if (sel.value >="0"){
              divC = document.getElementById("totaltreinta");
              divC.style.display = "block";
              divCc = document.getElementById("tucuenta");
              divCc.style.display = "block";
              var preciotreinta=50;
              var totalpreciotreinta=sel.value*preciotreinta;
              $('#totalpreciotreinta').val(totalpreciotreinta);
              total();
            }
          }
 
 


function unoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalunoa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciounoa=50;
              var totalpreciounoa=sel.value*preciounoa;
              $('#totalpreciounoa').val(totalpreciounoa);
              total();
            }
          }
 


            function dosa(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldosa");
              divCc.style.display= "block";
              divCda= document.getElementById("tucuenta");
              divCd.style.display= "block";
              preciodosa=200;
              totalpreciodosa=sel.value*preciodosa;
              $('#totalpreciodosa').val(totalpreciodosa);
              total();
              }
            }
              


 function tresa(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltresa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciotresa=250;
              totalpreciotresa=sel.value*preciotresa;
              $('#totalpreciotresa').val(totalpreciotresa);
              total();
             }
           }
function cuatroa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatroa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciocuatroa=15;
              totalpreciocuatroa=sel.value*preciocuatroa;
              $('#totalpreciocuatroa').val(totalpreciocuatroa);
              total();
             }
           }
           function cincoa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincoa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciocincoa=20;
              totalpreciocincoa=sel.value*preciocincoa;
              $('#totalpreciocincoa').val(totalpreciocincoa);
              
  total();
}
}

 function seisa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseisa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              precioseisa=15;
              totalprecioseisa=sel.value*precioseisa;
              $('#totalprecioseisa').val(totalprecioseisa);
             total();
}
}


 function sietea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsietea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciosietea=900;
              totalpreciosietea=sel.value*preciosietea;
              $('#totalpreciosietea').val(totalpreciosietea);
            total();

}
}
 function ochoa(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochoa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              precioochoa=400;
              totalprecioochoa=sel.value*precioochoa;
              $('#totalprecioochoa').val(totalprecioochoa);
            total();

}
}

function nuevea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnuevea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              precionuevea=150;
              totalprecionuevea=sel.value*precionuevea;
              $('#totalprecionuevea').val(totalprecionuevea);
             total();

}
}

 function dieza(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldieza");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciodieza=150;
              totalpreciodieza=sel.value*preciodieza;
              $('#totalpreciodieza').val(totalpreciodieza);
             total();

}
}
function oncea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaloncea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciooncea=150;
              totalpreciooncea=sel.value*preciooncea;
              $('#totalpreciooncea').val(totalpreciooncea);
            total();

}
}
function docea(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldocea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciodocea=150;
              totalpreciodocea=sel.value*preciodocea;
              $('#totalpreciodocea').val(totalpreciodocea);
    var totalpreciodocea= $("#totalpreciodocea").val();
            total();

}
}
function trecea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltrecea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciotrecea=50;
              var totalpreciotrecea=sel.value*preciotrecea;
              $('#totalpreciotrecea').val(totalpreciotrecea);
              total();
            }
          }
 function catorcea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcatorcea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciocatorcea=50;
              var totalpreciocatorcea=sel.value*preciocatorcea;
              $('#totalpreciocatorcea').val(totalpreciocatorcea);
              total();
            }
          }

          function quincea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquincea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioquincea=50;
              var totalprecioquincea=sel.value*precioquincea;
              $('#totalprecioquincea').val(totalprecioquincea);
              total();
            }
          }

          function dieciseisa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseisa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodieciseisa=50;
              var totalpreciodieciseisa=sel.value*preciodieciseisa;
              $('#totalpreciodieciseisa').val(totalpreciodieciseisa);
              total();
            }
          }

          function diecisietea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisietea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodiecisietea=50;
              var totalpreciodiecisietea=sel.value*preciodiecisietea;
              $('#totalpreciodiecisietea').val(totalpreciodiecisietea);
              total();
            }
          }
 function dieciochoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciochoa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodieciochoa=50;
              var totalpreciodieciochoa=sel.value*preciodieciochoa;
              $('#totalpreciodieciochoa').val(totalpreciodieciochoa);
              total();
            }
          }
 function diecinuevea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinuevea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodiecinuevea=50;
              var totalpreciodiecinuevea=sel.value*preciodiecinuevea;
              $('#totalpreciodiecinuevea').val(totalpreciodiecinuevea);
              total();
            }
          }
 function veintea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintea=50;
              var totalprecioveintea=sel.value*precioveintea;
              $('#totalprecioveintea').val(totalprecioveintea);
              total();
            }
          }
 function veintiunoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiunoa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintiunoa=50;
              var totalprecioveintiunoa=sel.value*precioveintiunoa;
              $('#totalprecioveintiunoa').val(totalprecioveintiunoa);
              total();
            }
          }
 function veintidosa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidosa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintidosa=50;
              var totalprecioveintidosa=sel.value*precioveintidosa;
              $('#totalprecioveintidosa').val(totalprecioveintidosa);
              total();
            }
          }
 function veintitresa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitresa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintitresa=50;
              var totalprecioveintitresa=sel.value*precioveintitresa;
              $('#totalprecioveintitresa').val(totalprecioveintitresa);
              total();
            }
          }
 function veinticuatroa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatroa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveinticuatroa=50;
              var totalprecioveinticuatroa=sel.value*precioveinticuatroa;
              $('#totalprecioveinticuatroa').val(totalprecioveinticuatroa);
              total();
            }
          }
 function veinticincoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticincoa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveinticincoa=50;
              var totalprecioveinticincoa=sel.value*precioveinticincoa;
              $('#totalprecioveinticincoa').val(totalprecioveinticincoa);
              total();
            }
          }
 function veintiseisa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseisa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintiseisa=50;
              var totalprecioveintiseisa=sel.value*precioveintiseisa;
              $('#totalprecioveintiseisa').val(totalprecioveintiseisa);
              total();
            }
          }
          function veintisietea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisietea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintisietea=50;
              var totalprecioveintisietea=sel.value*precioveintisietea;
              $('#totalprecioveintisietea').val(totalprecioveintisietea);
              total();
            }
          }
 
 function veintiochoa(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiochoa");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintiochoa=50;
              var totalprecioveintiochoa=sel.value*precioveintiochoa;
              $('#totalprecioveintiochoa').val(totalprecioveintiochoa);
              total();
            }
          }
          function veintinuevea(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinuevea");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintinuevea=50;
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
              var preciotreintaa=50;
              var totalpreciotreintaa=sel.value*preciotreintaa;
              $('#totalpreciotreintaa').val(totalpreciotreintaa);
              total();
            }
          }








          function unom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalunom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciounom=590;
              var totalpreciounom=sel.value*preciounom;
              $('#totalpreciounom').val(totalpreciounom);
              total();
            }
          }
 


            function dosm(sel) {


if (sel.value >="0"){
divCc= document.getElementById("totaldosm");
              divCc.style.display= "block";
              divCdm= document.getElementById("tucuenta");
              divCd.style.display= "block";
              preciodosm=330;
              totalpreciodosm=sel.value*preciodosm;
              $('#totalpreciodosm').val(totalpreciodosm);
              total();
              }
            }
              


 function tresm(sel) {


if (sel.value >="0"){
divC= document.getElementById("totaltresm");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciotresm=180;
              totalpreciotresm=sel.value*preciotresm;
              $('#totalpreciotresm').val(totalpreciotresm);
              total();
             }
           }
function cuatrom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcuatrom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciocuatrom=100;
              totalpreciocuatrom=sel.value*preciocuatrom;
              $('#totalpreciocuatrom').val(totalpreciocuatrom);
              total();
             }
           }
           function cincom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalcincom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciocincom=390;
              totalpreciocincom=sel.value*preciocincom;
              $('#totalpreciocincom').val(totalpreciocincom);
              
  total();
}
}

 function seism(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalseism");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              precioseism=190;
              totalprecioseism=sel.value*precioseism;
              $('#totalprecioseism').val(totalprecioseism);
             total();
}
}


 function sietem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalsietem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciosietem=350;
              totalpreciosietem=sel.value*preciosietem;
              $('#totalpreciosietem').val(totalpreciosietem);
            total();

}
}
 function ochom(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalochom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              precioochom=140;
              totalprecioochom=sel.value*precioochom;
              $('#totalprecioochom').val(totalprecioochom);
            total();

}
}

function nuevem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totalnuevem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              precionuevem=140;
              totalprecionuevem=sel.value*precionuevem;
              $('#totalprecionuevem').val(totalprecionuevem);
             total();

}
}

 function diezm(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldiezm");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciodiezm=950;
              totalpreciodiezm=sel.value*preciodiezm;
              $('#totalpreciodiezm').val(totalpreciodiezm);
             total();

}
}
function oncem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaloncem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciooncem=590;
              totalpreciooncem=sel.value*preciooncem;
              $('#totalpreciooncem').val(totalpreciooncem);
            total();

}
}
function docem(sel) {
if (sel.value >="0"){
divC = document.getElementById("totaldocem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              preciodocem=140;
              totalpreciodocem=sel.value*preciodocem;
              $('#totalpreciodocem').val(totalpreciodocem);
    var totalpreciodocem= $("#totalpreciodocea").val();
            total();

}
}
function trecem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaltrecem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciotrecem=350;
              var totalpreciotrecem=sel.value*preciotrecem;
              $('#totalpreciotrecem').val(totalpreciotrecem);
              total();
            }
          }
 function catorcem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalcatorcem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciocatorcem=250;
              var totalpreciocatorcem=sel.value*preciocatorcem;
              $('#totalpreciocatorcem').val(totalpreciocatorcem);
              total();
            }
          }

          function quincem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalquincem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioquincem=250;
              var totalprecioquincem=sel.value*precioquincem;
              $('#totalprecioquincem').val(totalprecioquincem);
              total();
            }
          }

          function dieciseism(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciseism");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodieciseism=730;
              var totalpreciodieciseism=sel.value*preciodieciseism;
              $('#totalpreciodieciseism').val(totalpreciodieciseism);
              total();
            }
          }

          function diecisietem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecisietem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodiecisietem=460;
              var totalpreciodiecisietem=sel.value*preciodiecisietem;
              $('#totalpreciodiecisietem').val(totalpreciodiecisietem);
              total();
            }
          }
 function dieciochom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldieciochom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodieciochom=710;
              var totalpreciodieciochom=sel.value*preciodieciochom;
              $('#totalpreciodieciochom').val(totalpreciodieciochom);
              total();
            }
          }
 function diecinuevem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totaldiecinuevem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var preciodiecinuevem=230;
              var totalpreciodiecinuevem=sel.value*preciodiecinuevem;
              $('#totalpreciodiecinuevem').val(totalpreciodiecinuevem);
              total();
            }
          }
 function veintem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintem=160;
              var totalprecioveintem=sel.value*precioveintem;
              $('#totalprecioveintem').val(totalprecioveintem);
              total();
            }
          }
 function veintiunom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiunom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintiunom=400;
              var totalprecioveintiunom=sel.value*precioveintiunom;
              $('#totalprecioveintiunom').val(totalprecioveintiunom);
              total();
            }
          }
 function veintidosm(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintidosm");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintidosm=3100;
              var totalprecioveintidosm=sel.value*precioveintidosm;
              $('#totalprecioveintidosm').val(totalprecioveintidosm);
              total();
            }
          }
 function veintitresm(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintitresm");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintitresm=90;
              var totalprecioveintitresm=sel.value*precioveintitresm;
              $('#totalprecioveintitresm').val(totalprecioveintitresm);
              total();
            }
          }
 function veinticuatrom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticuatrom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveinticuatrom=710;
              var totalprecioveinticuatrom=sel.value*precioveinticuatrom;
              $('#totalprecioveinticuatrom').val(totalprecioveinticuatrom);
              total();
            }
          }
 function veinticincom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveinticincom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveinticincom=760;
              var totalprecioveinticincom=sel.value*precioveinticincom;
              $('#totalprecioveinticincom').val(totalprecioveinticincom);
              total();
            }
          }
 function veintiseism(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiseism");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintiseism=950;
              var totalprecioveintiseism=sel.value*precioveintiseism;
              $('#totalprecioveintiseism').val(totalprecioveintiseism);
              total();
            }
          }
          function veintisietem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintisietem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintisietem=420;
              var totalprecioveintisietem=sel.value*precioveintisietem;
              $('#totalprecioveintisietem').val(totalprecioveintisietem);
              total();
            }
          }
 
 function veintiochom(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintiochom");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintiochom=590;
              var totalprecioveintiochom=sel.value*precioveintiochom;
              $('#totalprecioveintiochom').val(totalprecioveintiochom);
              total();
            }
          }
          function veintinuevem(sel) {
if (sel.value >="0"){
              divC= document.getElementById("totalveintinuevem");
              divC.style.display= "block";
              divCc= document.getElementById("tucuenta");
              divCc.style.display= "block";
              var precioveintinuevem=290;
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
              var preciotreintam=365;
              var totalpreciotreintam=sel.value*preciotreintam;
              $('#totalpreciotreintam').val(totalpreciotreintam);
              total();
            }
          }

    </script>
   </head>
     <header>
      
</header>
<a name="covid"></a>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 150px;text-align: center;" > 
  <img src="{{ asset('img/logos/marca.jpg') }}" style="width: 40%">
 

</section>



<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 45px;text-align: center;margin-top: -2%" >
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 43px;text-align: center;margin-top: -0.5%;position: fixed;margin-left: -0.7%;width: 84.5%" >
<form class="" action="enviar" method="get" id="myform" >
<div  id="tucuenta" style="display: none">

        

<img src="{{ asset('img/logos/carrito.jpg') }}" style="width: 5%;margin-top: -1%;margin-left: -10%">

        <b><input type="text" class="form-control"  name="totalapagar" id="totalapagar" value="" style="width: 7%;height:40px;margin-left: 49%;font-size: 1.2em;color: red;border-right: solid red 0.5px;border-top: solid red 0.5px;border-bottom: solid red 0.5px;margin-top: -4.7%;z-index: 1000;background-color: red;color: white"></b>

         <b> <button type="submit" id="myform"  style="color:white;background-color:#25AAE1;width: 10%;height: 2.6em;color:white;float: right;margin-top: -3.5%;z-index: 100" class="btn col-xl"  name="button">FINALIZAR</button></b><br>

</div>
</section>
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
m%20$diecinuevem%20$productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20$veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20$veintiunom%20$productoveintiunom%20$pirceveintiunom%20$totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20$pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20$productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20$veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20$totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20$pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20$productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20$veintisietem%20$productoveintisietem%20$pirceveintisietem%20$totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20$pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20$productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreintam%20
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
m%20$diecinuevem%20$productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20$veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20$veintiunom%20$productoveintiunom%20$pirceveintiunom%20$totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20$pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20$productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20$veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20$totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20$pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20$productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20$veintisietem%20$productoveintisietem%20$pirceveintisietem%20$totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20$pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20$productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreinta%20
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

echo
"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Quisiera%20Hacer%20Una%20Consulta.'>whatsapp</a>";
?>
        
        <b><input type="text" class="form-control" required placeholder="Nombre" name="nombre" id="nombre" value="" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>
<div class="dropdown" style="position: fixed;margin-left: 50%;margin-top: -4.5%">
     <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-left: 77.5%;background-color:#25AAE1 ;margin-bottom: 1%;margin-top: -12%;width:18em;color:white">CATEGORIAS
    <span class="caret" ></span></button>
   <ul class="dropdown-menu" style="width:18em;margin-left: 77.5%;margin-top: -1%">
     <li><a href="welcome">IR A INICIO</a></li>
      <li><a href="#covid">PROTECCION COVID-19!</a></li>
      <li><a href="mujer">CUIDADO MUJER!</a></li>
      <li><a href="#adultos">CUIDADO ADULTOS MAYORES!</a></li>

     
    
   
    </ul>
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
      
       <b> <input type="text" class="form-control" required placeholder="Nombre"  name="nombre" id="nombre" value="" style="width: 30%;margin-left: 35%;margin-bottom: 1%;color: red;text-align:center;margin-top: -5%;background-color:white"></b>
          

       <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="" style="width: 30%;margin-left: 35%;color: red;text-align:center;background-color:white"></b>

        </div>
<div class="dropdown" style="position: fixed;margin-left: 50%;margin-top: -4.5%">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-left: 77.5%;background-color:#25AAE1 ;margin-bottom: 1%;margin-top: -12%;width:18em;color:white">CATEGORIAS
    <span class="caret" ></span></button>
    <ul class="dropdown-menu" style="width:18em;margin-left: 77.5%;margin-top: -1%">
      <li><a href="welcome">IR A INICIO</a></li>
      <li><a href="#covid">PROTECCION COVID-19!</a></li>
      <li><a href="mujer">CUIDADO MUJER!</a></li>
      <li><a href="#adultos">CUIDADO ADULTOS MAYORES!</a></li>

    
    
    </ul>
  </div>

@endif
</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height:100000px;text-align: center;margin-top: -2%" >
@foreach($productos as $producto)

<div class="flex-container" style="display: inline-block;float: left;margin-left: 3%"> 
 





<div>
<img class="group list-group-image" src="{{ asset('img/'.$producto->image) }}" alt="" style="width: 150px;height: 150px" /> 

  <!--<img src="{{ asset('img/dos.jpg') }}" style="width: 13em;height: 9em;">
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


        <b><input type="text" class="form-control"  name="{{$producto->NombreTotalPrecio}}" id="{{$producto->NombreTotalPrecio}}" value="0" style="width: 20%;margin-left: 35%;font-size: 1.2em;color: white;background-color: red;border: none;position: relative;margin-top: 3%;text-align:center"></b>


</div>


</div>


</div>
@endforeach


</form>


</section>






<body>



   

</body>

</html>
