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

      <title>FINAL</title>
      <style>


body{
  background-color:#4bbfdd;
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

.grid-container {

  border: 0.1px solid;
  display: grid;
  grid-template-columns: auto auto auto;

}
.grid-item { 
 
  border: 0.1px solid;
  font-size: 10px;
  text-align: right;
}

.flex-container-carrito {

  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
  background-color: DodgerBlue;
}

.flex-container-carrito>div {
  background-color: #f1f1f1;
  color: white;
  width: 100px;
  height: 100px;
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


//MUJERES//







function unom(sel) {
if (sel.value >="0"){


              preciounom=arraymujeres[0];           
              var totalpreciounom=sel.value*preciounom;
              $('#totalpreciounom').val(totalpreciounom);
             //total();
            }
          }
 


            function dosm(sel) {


if (sel.value >="0"){

              preciodosm=arraymujeres[1];
              totalpreciodosm=sel.value*preciodosm;
              $('#totalpreciodosm').val(totalpreciodosm);
             //total();
              }
            }
              


 function tresm(sel) {


if (sel.value >="0"){

              preciotresm=arraymujeres[2];
              totalpreciotresm=sel.value*preciotresm;
              $('#totalpreciotresm').val(totalpreciotresm);
             //total();
             }
           }
function cuatrom(sel) {
if (sel.value >="0"){

              preciocuatrom=arraymujeres[3];
              totalpreciocuatrom=sel.value*preciocuatrom;
              $('#totalpreciocuatrom').val(totalpreciocuatrom);
             //total();
             }
           }
           function cincom(sel) {
if (sel.value >="0"){

              preciocincom=arraymujeres[4];
              totalpreciocincom=sel.value*preciocincom;
              $('#totalpreciocincom').val(totalpreciocincom);
              
 //total();
}
}

 function seism(sel) {
if (sel.value >="0"){

              precioseism=arraymujeres[5];
              totalprecioseism=sel.value*precioseism;
              $('#totalprecioseism').val(totalprecioseism);
            //total();
}
}


 function sietem(sel) {
if (sel.value >="0"){

              preciosietem=arraymujeres[6];
              totalpreciosietem=sel.value*preciosietem;
              $('#totalpreciosietem').val(totalpreciosietem);
           //total();

}
}
 function ochom(sel) {
if (sel.value >="0"){

              precioochom=arraymujeres[7];
              totalprecioochom=sel.value*precioochom;
              $('#totalprecioochom').val(totalprecioochom);
           //total();

}
}

function nuevem(sel) {
if (sel.value >="0"){

              precionuevem=arraymujeres[8];
              totalprecionuevem=sel.value*precionuevem;
              $('#totalprecionuevem').val(totalprecionuevem);
            //total();

}
}

 function diezm(sel) {
if (sel.value >="0"){

              preciodiezm=arraymujeres[9];
              totalpreciodiezm=sel.value*preciodiezm;
              $('#totalpreciodiezm').val(totalpreciodiezm);
            //total();

}
}
function oncem(sel) {
if (sel.value >="0"){

              preciooncem=arraymujeres[10];
              totalpreciooncem=sel.value*preciooncem;
              $('#totalpreciooncem').val(totalpreciooncem);
           //total();

}
}
function docem(sel) {
if (sel.value >="0"){

              preciodocem=arraymujeres[11];
              totalpreciodocem=sel.value*preciodocem;
              $('#totalpreciodocem').val(totalpreciodocem);
    var totalpreciodocem= $("#totalpreciodocea").val();
           //total();

}
}
function trecem(sel) {
if (sel.value >="0"){
          
              var preciotrecem=arraymujeres[12];
              var totalpreciotrecem=sel.value*preciotrecem;
              $('#totalpreciotrecem').val(totalpreciotrecem);
             //total();
            }
          }
 function catorcem(sel) {
if (sel.value >="0"){
           
              var preciocatorcem=arraymujeres[13];
              var totalpreciocatorcem=sel.value*preciocatorcem;
              $('#totalpreciocatorcem').val(totalpreciocatorcem);
             //total();
            }
          }

          function quincem(sel) {
if (sel.value >="0"){
        
              var precioquincem=arraymujeres[14];
              var totalprecioquincem=sel.value*precioquincem;
              $('#totalprecioquincem').val(totalprecioquincem);
             //total();
            }
          }

          function dieciseism(sel) {
if (sel.value >="0"){
            
              var preciodieciseism=arraymujeres[15];
              var totalpreciodieciseism=sel.value*preciodieciseism;
              $('#totalpreciodieciseism').val(totalpreciodieciseism);
             //total();
            }
          }

          function diecisietem(sel) {
if (sel.value >="0"){
            
              var preciodiecisietem=arraymujeres[16];
              var totalpreciodiecisietem=sel.value*preciodiecisietem;
              $('#totalpreciodiecisietem').val(totalpreciodiecisietem);
             //total();
            }
          }
 function dieciochom(sel) {
if (sel.value >="0"){
        
              var preciodieciochom=arraymujeres[17];
              var totalpreciodieciochom=sel.value*preciodieciochom;
              $('#totalpreciodieciochom').val(totalpreciodieciochom);
             //total();
            }
          }
 function diecinuevem(sel) {
if (sel.value >="0"){
            
              var preciodiecinuevem=arraymujeres[18];
              var totalpreciodiecinuevem=sel.value*preciodiecinuevem;
              $('#totalpreciodiecinuevem').val(totalpreciodiecinuevem);
             //total();
            }
          }
 function veintem(sel) {
if (sel.value >="0"){
           
              var precioveintem=arraymujeres[19];
              var totalprecioveintem=sel.value*precioveintem;
              $('#totalprecioveintem').val(totalprecioveintem);
             //total();
            }
          }
 function veintiunom(sel) {
if (sel.value >="0"){
       
              var precioveintiunom=arraymujeres[20];
              var totalprecioveintiunom=sel.value*precioveintiunom;
              $('#totalprecioveintiunom').val(totalprecioveintiunom);
             //total();
            }
          }
 function veintidosm(sel) {
if (sel.value >="0"){
          
              var precioveintidosm=arraymujeres[21];
              var totalprecioveintidosm=sel.value*precioveintidosm;
              $('#totalprecioveintidosm').val(totalprecioveintidosm);
             //total();
            }
          }
 function veintitresm(sel) {
if (sel.value >="0"){
       
              var precioveintitresm=arraymujeres[22];
              var totalprecioveintitresm=sel.value*precioveintitresm;
              $('#totalprecioveintitresm').val(totalprecioveintitresm);
             //total();
            }
          }
 function veinticuatrom(sel) {
if (sel.value >="0"){
            
              var precioveinticuatrom=arraymujeres[23];
              var totalprecioveinticuatrom=sel.value*precioveinticuatrom;
              $('#totalprecioveinticuatrom').val(totalprecioveinticuatrom);
             //total();
            }
          }
 function veinticincom(sel) {
if (sel.value >="0"){
      
              var precioveinticincom=arraymujeres[24];
              var totalprecioveinticincom=sel.value*precioveinticincom;
              $('#totalprecioveinticincom').val(totalprecioveinticincom);
             //total();
            }
          }
 function veintiseism(sel) {
if (sel.value >="0"){
           
              var precioveintiseism=arraymujeres[25];
              var totalprecioveintiseism=sel.value*precioveintiseism;
              $('#totalprecioveintiseism').val(totalprecioveintiseism);
             //total();
            }
          }
          function veintisietem(sel) {
if (sel.value >="0"){
           
              var precioveintisietem=arraymujeres[26];
              var totalprecioveintisietem=sel.value*precioveintisietem;
              $('#totalprecioveintisietem').val(totalprecioveintisietem);
             //total();
            }
          }
 
 function veintiochom(sel) {
if (sel.value >="0"){
           
              var precioveintiochom=arraymujeres[27];
              var totalprecioveintiochom=sel.value*precioveintiochom;
              $('#totalprecioveintiochom').val(totalprecioveintiochom);
             //total();
            }
          }
          function veintinuevem(sel) {
if (sel.value >="0"){
           
              var precioveintinuevem=arraymujeres[28];
              var totalprecioveintinuevem=sel.value*precioveintinuevem;
              $('#totalprecioveintinuevem').val(totalprecioveintinuevem);
             //total();
            }
          }
 function treintam(sel) {
if (sel.value >="0"){
            
              var preciotreintam=arraymujeres[29];
              var totalpreciotreintam=sel.value*preciotreintam;
              $('#totalpreciotreintam').val(totalpreciotreintam);
             //total();
            }
          }

          //FIN MUJERES//

 //ADULTOS//
 function unoa(sel) {
if (sel.value >="0"){
          
              var preciounoa=110;
              var totalpreciounoa=sel.value*preciounoa;
              $('#totalpreciounoa').val(totalpreciounoa);
             //total();
            }
          }
 


            function dosa(sel) {


if (sel.value >="0"){

              preciodosa=350;
              totalpreciodosa=sel.value*preciodosa;
              $('#totalpreciodosa').val(totalpreciodosa);
             //total();
              }
            }
              


 function tresa(sel) {


if (sel.value >="0"){

              preciotresa=280;
              totalpreciotresa=sel.value*preciotresa;
              $('#totalpreciotresa').val(totalpreciotresa);
             //total();
             }
           }
function cuatroa(sel) {
if (sel.value >="0"){

              preciocuatroa=99;
              totalpreciocuatroa=sel.value*preciocuatroa;
              $('#totalpreciocuatroa').val(totalpreciocuatroa);
             //total();
             }
           }
           function cincoa(sel) {
if (sel.value >="0"){

              preciocincoa=99;
              totalpreciocincoa=sel.value*preciocincoa;
              $('#totalpreciocincoa').val(totalpreciocincoa);
              
 //total();
}
}

 function seisa(sel) {
if (sel.value >="0"){

              precioseisa=250;
              totalprecioseisa=sel.value*precioseisa;
              $('#totalprecioseisa').val(totalprecioseisa);
            //total();
}
}


 function sietea(sel) {
if (sel.value >="0"){

              preciosietea=575;
              totalpreciosietea=sel.value*preciosietea;
              $('#totalpreciosietea').val(totalpreciosietea);
           //total();

}
}
 function ochoa(sel) {
if (sel.value >="0"){

              precioochoa=310;
              totalprecioochoa=sel.value*precioochoa;
              $('#totalprecioochoa').val(totalprecioochoa);
           //total();

}
}

function nuevea(sel) {
if (sel.value >="0"){

              precionuevea=790;
              totalprecionuevea=sel.value*precionuevea;
              $('#totalprecionuevea').val(totalprecionuevea);
            //total();

}
}

 function dieza(sel) {
if (sel.value >="0"){

              preciodieza=410;
              totalpreciodieza=sel.value*preciodieza;
              $('#totalpreciodieza').val(totalpreciodieza);
            //total();

}
}
function oncea(sel) {
if (sel.value >="0"){

              preciooncea=480;
              totalpreciooncea=sel.value*preciooncea;
              $('#totalpreciooncea').val(totalpreciooncea);
           //total();

}
}
function docea(sel) {
if (sel.value >="0"){

              preciodocea=735;
              totalpreciodocea=sel.value*preciodocea;
              $('#totalpreciodocea').val(totalpreciodocea);
    var totalpreciodocea= $("#totalpreciodocea").val();
           //total();

}
}
function trecea(sel) {
if (sel.value >="0"){
          
              var preciotrecea=210;
              var totalpreciotrecea=sel.value*preciotrecea;
              $('#totalpreciotrecea').val(totalpreciotrecea);
             //total();
            }
          }
 function catorcea(sel) {
if (sel.value >="0"){
           
              var preciocatorcea=170;
              var totalpreciocatorcea=sel.value*preciocatorcea;
              $('#totalpreciocatorcea').val(totalpreciocatorcea);
             //total();
            }
          }

          function quincea(sel) {
if (sel.value >="0"){
        
              var precioquincea=320;
              var totalprecioquincea=sel.value*precioquincea;
              $('#totalprecioquincea').val(totalprecioquincea);
             //total();
            }
          }

          function dieciseisa(sel) {
if (sel.value >="0"){
            
              var preciodieciseisa=110;
              var totalpreciodieciseisa=sel.value*preciodieciseisa;
              $('#totalpreciodieciseisa').val(totalpreciodieciseisa);
             //total();
            }
          }

          function diecisietea(sel) {
if (sel.value >="0"){
            
              var preciodiecisietea=250;
              var totalpreciodiecisietea=sel.value*preciodiecisietea;
              $('#totalpreciodiecisietea').val(totalpreciodiecisietea);
             //total();
            }
          }
 function dieciochoa(sel) {
if (sel.value >="0"){
        
              var preciodieciochoa=199;
              var totalpreciodieciochoa=sel.value*preciodieciochoa;
              $('#totalpreciodieciochoa').val(totalpreciodieciochoa);
             //total();
            }
          }
 function diecinuevea(sel) {
if (sel.value >="0"){
            
              var preciodiecinuevea=439;
              var totalpreciodiecinuevea=sel.value*preciodiecinuevea;
              $('#totalpreciodiecinuevea').val(totalpreciodiecinuevea);
             //total();
            }
          }
 function veintea(sel) {
if (sel.value >="0"){
           
              var precioveintea=190;
              var totalprecioveintea=sel.value*precioveintea;
              $('#totalprecioveintea').val(totalprecioveintea);
             //total();
            }
          }
 function veintiunoa(sel) {
if (sel.value >="0"){
       
              var precioveintiunoa=140;
              var totalprecioveintiunoa=sel.value*precioveintiunoa;
              $('#totalprecioveintiunoa').val(totalprecioveintiunoa);
             //total();
            }
          }
 function veintidosa(sel) {
if (sel.value >="0"){
          
              var precioveintidosa=330;
              var totalprecioveintidosa=sel.value*precioveintidosa;
              $('#totalprecioveintidosa').val(totalprecioveintidosa);
             //total();
            }
          }
 function veintitresa(sel) {
if (sel.value >="0"){
       
              var precioveintitresa=670;
              var totalprecioveintitresa=sel.value*precioveintitresa;
              $('#totalprecioveintitresa').val(totalprecioveintitresa);
             //total();
            }
          }
 function veinticuatroa(sel) {
if (sel.value >="0"){
            
              var precioveinticuatroa=920;
              var totalprecioveinticuatroa=sel.value*precioveinticuatroa;
              $('#totalprecioveinticuatroa').val(totalprecioveinticuatroa);
             //total();
            }
          }
 function veinticincoa(sel) {
if (sel.value >="0"){
      
              var precioveinticincoa=890;
              var totalprecioveinticincoa=sel.value*precioveinticincoa;
              $('#totalprecioveinticincoa').val(totalprecioveinticincoa);
             //total();
            }
          }
 function veintiseisa(sel) {
if (sel.value >="0"){
           
              var precioveintiseisa=1750;
              var totalprecioveintiseisa=sel.value*precioveintiseisa;
              $('#totalprecioveintiseisa').val(totalprecioveintiseisa);
             //total();
            }
          }
          function veintisietea(sel) {
if (sel.value >="0"){
           
              var precioveintisietea=290;
              var totalprecioveintisietea=sel.value*precioveintisietea;
              $('#totalprecioveintisietea').val(totalprecioveintisietea);
             //total();
            }
          }
 
 function veintiochoa(sel) {
if (sel.value >="0"){
           
              var precioveintiochoa=240;
              var totalprecioveintiochoa=sel.value*precioveintiochoa;
              $('#totalprecioveintiochoa').val(totalprecioveintiochoa);
             //total();
            }
          }
          function veintinuevea(sel) {
if (sel.value >="0"){
           
              var precioveintinuevea=390;
              var totalprecioveintinuevea=sel.value*precioveintinuevea;
              $('#totalprecioveintinuevea').val(totalprecioveintinuevea);
             //total();
            }
          }
 function treintaa(sel) {
if (sel.value >="0"){
            
              var preciotreintaa=250;
              var totalpreciotreintaa=sel.value*preciotreintaa;
              $('#totalpreciotreintaa').val(totalpreciotreintaa);
             //total();
            }
          }
 

 //FIN ADULTOS//

 //PRINCIPAL//
 
 
function uno(sel) {
if (sel.value >="0"){


              preciouno=arrayprincipales[0];           
              var totalpreciouno=sel.value*preciouno;
              $('#totalpreciouno').val(totalpreciouno);
             //total();
            }
          }
 


            function dos(sel) {


if (sel.value >="0"){

              preciodos=arrayprincipales[1];
              totalpreciodos=sel.value*preciodos;
              $('#totalpreciodos').val(totalpreciodos);
             //total();
              }
            }
              


 function tres(sel) {


if (sel.value >="0"){

              preciotres=arrayprincipales[2];
              totalpreciotres=sel.value*preciotres;
              $('#totalpreciotres').val(totalpreciotres);
             //total();
             }
           }
function cuatro(sel) {
if (sel.value >="0"){

              preciocuatro=arrayprincipales[3];
              totalpreciocuatro=sel.value*preciocuatro;
              $('#totalpreciocuatro').val(totalpreciocuatro);
             //total();
             }
           }
           function cinco(sel) {
if (sel.value >="0"){

              preciocinco=arrayprincipales[4];
              totalpreciocinco=sel.value*preciocinco;
              $('#totalpreciocinco').val(totalpreciocinco);
              
 //total();
}
}

 function seis(sel) {
if (sel.value >="0"){

              precioseis=arrayprincipales[5];
              totalprecioseis=sel.value*precioseis;
              $('#totalprecioseis').val(totalprecioseis);
            //total();
}
}


 function siete(sel) {
if (sel.value >="0"){

              preciosiete=arrayprincipales[6];
              totalpreciosiete=sel.value*preciosiete;
              $('#totalpreciosiete').val(totalpreciosiete);
           //total();

}
}
 function ocho(sel) {
if (sel.value >="0"){

              precioocho=arrayprincipales[7];
              totalprecioocho=sel.value*precioocho;
              $('#totalprecioocho').val(totalprecioocho);
           //total();

}
}

function nueve(sel) {
if (sel.value >="0"){

              precionueve=arrayprincipales[8];
              totalprecionueve=sel.value*precionueve;
              $('#totalprecionueve').val(totalprecionueve);
            //total();

}
}

 function diez(sel) {
if (sel.value >="0"){

              preciodiez=arrayprincipales[9];
              totalpreciodiez=sel.value*preciodiez;
              $('#totalpreciodiez').val(totalpreciodiez);
            //total();

}
}
function once(sel) {
if (sel.value >="0"){

              precioonce=arrayprincipales[10];
              totalprecioonce=sel.value*precioonce;
              $('#totalprecioonce').val(totalprecioonce);
           //total();

}
}
function doce(sel) {
if (sel.value >="0"){

              preciodoce=arrayprincipales[11];
              totalpreciodoce=sel.value*preciodoce;
              $('#totalpreciodoce').val(totalpreciodoce);
    var totalpreciodoce= $("#totalpreciodocea").val();
           //total();

}
}
function trece(sel) {
if (sel.value >="0"){
          
              var preciotrece=arrayprincipales[12];
              var totalpreciotrece=sel.value*preciotrece;
              $('#totalpreciotrece').val(totalpreciotrece);
             //total();
            }
          }
 function catorce(sel) {
if (sel.value >="0"){
           
              var preciocatorce=arrayprincipales[13];
              var totalpreciocatorce=sel.value*preciocatorce;
              $('#totalpreciocatorce').val(totalpreciocatorce);
             //total();
            }
          }

          function quince(sel) {
if (sel.value >="0"){
        
              var precioquince=arrayprincipales[14];
              var totalprecioquince=sel.value*precioquince;
              $('#totalprecioquince').val(totalprecioquince);
             //total();
            }
          }

          function dieciseis(sel) {
if (sel.value >="0"){
            
              var preciodieciseis=arrayprincipales[15];
              var totalpreciodieciseis=sel.value*preciodieciseis;
              $('#totalpreciodieciseis').val(totalpreciodieciseis);
             //total();
            }
          }

          function diecisiete(sel) {
if (sel.value >="0"){
            
              var preciodiecisiete=arrayprincipales[16];
              var totalpreciodiecisiete=sel.value*preciodiecisiete;
              $('#totalpreciodiecisiete').val(totalpreciodiecisiete);
             //total();
            }
          }
 function dieciocho(sel) {
if (sel.value >="0"){
        
              var preciodieciocho=arrayprincipales[17];
              var totalpreciodieciocho=sel.value*preciodieciocho;
              $('#totalpreciodieciocho').val(totalpreciodieciocho);
             //total();
            }
          }
 function diecinueve(sel) {
if (sel.value >="0"){
            
              var preciodiecinueve=arrayprincipales[18];
              var totalpreciodiecinueve=sel.value*preciodiecinueve;
              $('#totalpreciodiecinueve').val(totalpreciodiecinueve);
             //total();
            }
          }
 function veinte(sel) {
if (sel.value >="0"){
           
              var precioveinte=arrayprincipales[19];
              var totalprecioveinte=sel.value*precioveinte;
              $('#totalprecioveinte').val(totalprecioveinte);
             //total();
            }
          }
 function veintiuno(sel) {
if (sel.value >="0"){
       
              var precioveintiuno=arrayprincipales[20];
              var totalprecioveintiuno=sel.value*precioveintiuno;
              $('#totalprecioveintiuno').val(totalprecioveintiuno);
             //total();
            }
          }
 function veintidos(sel) {
if (sel.value >="0"){
          
              var precioveintidos=arrayprincipales[21];
              var totalprecioveintidos=sel.value*precioveintidos;
              $('#totalprecioveintidos').val(totalprecioveintidos);
             //total();
            }
          }
 function veintitres(sel) {
if (sel.value >="0"){
       
              var precioveintitres=arrayprincipales[22];
              var totalprecioveintitres=sel.value*precioveintitres;
              $('#totalprecioveintitres').val(totalprecioveintitres);
             //total();
            }
          }
 function veinticuatro(sel) {
if (sel.value >="0"){
            
              var precioveinticuatro=arrayprincipales[23];
              var totalprecioveinticuatro=sel.value*precioveinticuatro;
              $('#totalprecioveinticuatro').val(totalprecioveinticuatro);
             //total();
            }
          }
 function veinticinco(sel) {
if (sel.value >="0"){
      
              var precioveinticinco=arrayprincipales[24];
              var totalprecioveinticinco=sel.value*precioveinticinco;
              $('#totalprecioveinticinco').val(totalprecioveinticinco);
             //total();
            }
          }
 function veintiseis(sel) {
if (sel.value >="0"){
           
              var precioveintiseis=arrayprincipales[25];
              var totalprecioveintiseis=sel.value*precioveintiseis;
              $('#totalprecioveintiseis').val(totalprecioveintiseis);
             //total();
            }
          }
          function veintisiete(sel) {
if (sel.value >="0"){
           
              var precioveintisiete=arrayprincipales[26];
              var totalprecioveintisiete=sel.value*precioveintisiete;
              $('#totalprecioveintisiete').val(totalprecioveintisiete);
             //total();
            }
          }
 
 function veintiocho(sel) {
if (sel.value >="0"){
           
              var precioveintiocho=arrayprincipales[27];
              var totalprecioveintiocho=sel.value*precioveintiocho;
              $('#totalprecioveintiocho').val(totalprecioveintiocho);
             //total();
            }
          }
          function veintinueve(sel) {
if (sel.value >="0"){
           
              var precioveintinueve=arrayprincipales[28];
              var totalprecioveintinueve=sel.value*precioveintinueve;
              $('#totalprecioveintinueve').val(totalprecioveintinueve);
             //total();
            }
          }
 function treinta(sel) {
if (sel.value >="0"){
            
              var preciotreinta=arrayprincipales[29];
              var totalpreciotreinta=sel.value*preciotreinta;
              $('#totalpreciotreinta').val(totalpreciotreinta);
             //total();
            }
          }

 //FIN PRINCIPAL//
//BUCALES//
function unoo(sel) {
if (sel.value >="0"){
          
              var preciounoo=310;
              var totalpreciounoo=sel.value*preciounoo;
              $('#totalpreciounoo').val(totalpreciounoo);
             //total();
            }
          }
 


            function doso(sel) {


if (sel.value >="0"){

              preciodoso=330;
              totalpreciodoso=sel.value*preciodoso;
              $('#totalpreciodoso').val(totalpreciodoso);
             //total();
              }
            }
              


 function treso(sel) {


if (sel.value >="0"){

              preciotreso=310;
              totalpreciotreso=sel.value*preciotreso;
              $('#totalpreciotreso').val(totalpreciotreso);
             //total();
             }
           }
function cuatroo(sel) {
if (sel.value >="0"){

              preciocuatroo=310;
              totalpreciocuatroo=sel.value*preciocuatroo;
              $('#totalpreciocuatroo').val(totalpreciocuatroo);
             //total();
             }
           }
           function cincoo(sel) {
if (sel.value >="0"){

              preciocincoo=255;
              totalpreciocincoo=sel.value*preciocincoo;
              $('#totalpreciocincoo').val(totalpreciocincoo);
              
 //total();
}
}

 function seiso(sel) {
if (sel.value >="0"){

              precioseiso=330;
              totalprecioseiso=sel.value*precioseiso;
              $('#totalprecioseiso').val(totalprecioseiso);
            //total();
}
}


 function sieteo(sel) {
if (sel.value >="0"){

              preciosieteo=210;
              totalpreciosieteo=sel.value*preciosieteo;
              $('#totalpreciosieteo').val(totalpreciosieteo);
           //total();

}
}
 function ochoo(sel) {
if (sel.value >="0"){

              precioochoo=230;
              totalprecioochoo=sel.value*precioochoo;
              $('#totalprecioochoo').val(totalprecioochoo);
           //total();

}
}

function nueveo(sel) {
if (sel.value >="0"){

              precionueveo=290;
              totalprecionueveo=sel.value*precionueveo;
              $('#totalprecionueveo').val(totalprecionueveo);
            //total();

}
}

 function diezo(sel) {
if (sel.value >="0"){

              preciodiezo=390;
              totalpreciodiezo=sel.value*preciodiezo;
              $('#totalpreciodiezo').val(totalpreciodiezo);
            //total();

}
}
function onceo(sel) {
if (sel.value >="0"){

              precioonceo=350;
              totalprecioonceo=sel.value*precioonceo;
              $('#totalprecioonceo').val(totalprecioonceo);
           //total();

}
}
function doceo(sel) {
if (sel.value >="0"){

              preciodoceo=280;
              totalpreciodoceo=sel.value*preciodoceo;
              $('#totalpreciodoceo').val(totalpreciodoceo);
    var totalpreciodoceo= $("#totalpreciodocea").val();
           //total();

}
}
function treceo(sel) {
if (sel.value >="0"){
          
              var preciotreceo=70;
              var totalpreciotreceo=sel.value*preciotreceo;
              $('#totalpreciotreceo').val(totalpreciotreceo);
             //total();
            }
          }
 function catorceo(sel) {
if (sel.value >="0"){
           
              var preciocatorceo=390;
              var totalpreciocatorceo=sel.value*preciocatorceo;
              $('#totalpreciocatorceo').val(totalpreciocatorceo);
             //total();
            }
          }

          function quinceo(sel) {
if (sel.value >="0"){
        
              var precioquinceo=250;
              var totalprecioquinceo=sel.value*precioquinceo;
              $('#totalprecioquinceo').val(totalprecioquinceo);
             //total();
            }
          }

          function dieciseiso(sel) {
if (sel.value >="0"){
            
              var preciodieciseiso=210;
              var totalpreciodieciseiso=sel.value*preciodieciseiso;
              $('#totalpreciodieciseiso').val(totalpreciodieciseiso);
             //total();
            }
          }

          function diecisieteo(sel) {
if (sel.value >="0"){
            
              var preciodiecisieteo=110;
              var totalpreciodiecisieteo=sel.value*preciodiecisieteo;
              $('#totalpreciodiecisieteo').val(totalpreciodiecisieteo);
             //total();
            }
          }
 function dieciochoo(sel) {
if (sel.value >="0"){
        
              var preciodieciochoo=90;
              var totalpreciodieciochoo=sel.value*preciodieciochoo;
              $('#totalpreciodieciochoo').val(totalpreciodieciochoo);
             //total();
            }
          }
 function diecinueveo(sel) {
if (sel.value >="0"){
            
              var preciodiecinueveo=260;
              var totalpreciodiecinueveo=sel.value*preciodiecinueveo;
              $('#totalpreciodiecinueveo').val(totalpreciodiecinueveo);
             //total();
            }
          }
 function veinteo(sel) {
if (sel.value >="0"){
           
              var precioveinteo=150;
              var totalprecioveinteo=sel.value*precioveinteo;
              $('#totalprecioveinteo').val(totalprecioveinteo);
             //total();
            }
          }
 function veintiunoo(sel) {
if (sel.value >="0"){
       
              var precioveintiunoo=310;
              var totalprecioveintiunoo=sel.value*precioveintiunoo;
              $('#totalprecioveintiunoo').val(totalprecioveintiunoo);
             //total();
            }
          }
 function veintidoso(sel) {
if (sel.value >="0"){
          
              var precioveintidoso=310;
              var totalprecioveintidoso=sel.value*precioveintidoso;
              $('#totalprecioveintidoso').val(totalprecioveintidoso);
             //total();
            }
          }
 function veintitreso(sel) {
if (sel.value >="0"){
       
              var precioveintitreso=440;
              var totalprecioveintitreso=sel.value*precioveintitreso;
              $('#totalprecioveintitreso').val(totalprecioveintitreso);
             //total();
            }
          }
 function veinticuatroo(sel) {
if (sel.value >="0"){
            
              var precioveinticuatroo=415;
              var totalprecioveinticuatroo=sel.value*precioveinticuatroo;
              $('#totalprecioveinticuatroo').val(totalprecioveinticuatroo);
             //total();
            }
          }
 function veinticincoo(sel) {
if (sel.value >="0"){
      
              var precioveinticincoo=350;
              var totalprecioveinticincoo=sel.value*precioveinticincoo;
              $('#totalprecioveinticincoo').val(totalprecioveinticincoo);
             //total();
            }
          }
 function veintiseiso(sel) {
if (sel.value >="0"){
           
              var precioveintiseiso=310;
              var totalprecioveintiseiso=sel.value*precioveintiseiso;
              $('#totalprecioveintiseiso').val(totalprecioveintiseiso);
             //total();
            }
          }
          function veintisieteo(sel) {
if (sel.value >="0"){
           
              var precioveintisieteo=310;
              var totalprecioveintisieteo=sel.value*precioveintisieteo;
              $('#totalprecioveintisieteo').val(totalprecioveintisieteo);
             //total();
            }
          }
 
 function veintiochoo(sel) {
if (sel.value >="0"){
           
              var precioveintiochoo=240;
              var totalprecioveintiochoo=sel.value*precioveintiochoo;
              $('#totalprecioveintiochoo').val(totalprecioveintiochoo);
             //total();
            }
          }
          function veintinueveo(sel) {
if (sel.value >="0"){
           
              var precioveintinueveo=240;
              var totalprecioveintinueveo=sel.value*precioveintinueveo;
              $('#totalprecioveintinueveo').val(totalprecioveintinueveo);
             //total();
            }
          }
 function treintao(sel) {
if (sel.value >="0"){
            
              var preciotreintao=240;
              var totalpreciotreintao=sel.value*preciotreintao;
              $('#totalpreciotreintao').val(totalpreciotreintao);
             //total();
            }
          }

         
//FIN CAPILARES//
function unoca(sel) {
if (sel.value >="0"){
          
              var preciounoca=195;
              var totalpreciounoca=sel.value*preciounoca;
              $('#totalpreciounoca').val(totalpreciounoca);
             //total();
            }
          }
 


            function dosca(sel) {


if (sel.value >="0"){

              preciodosca=195;
              totalpreciodosca=sel.value*preciodosca;
              $('#totalpreciodosca').val(totalpreciodosca);
             //total();
              }
            }
              


 function tresca(sel) {


if (sel.value >="0"){

              preciotresca=195;
              totalpreciotresca=sel.value*preciotresca;
              $('#totalpreciotresca').val(totalpreciotresca);
             //total();
             }
           }
function cuatroca(sel) {
if (sel.value >="0"){

              preciocuatroca=195;
              totalpreciocuatroca=sel.value*preciocuatroca;
              $('#totalpreciocuatroca').val(totalpreciocuatroca);
             //total();
             }
           }
           function cincoca(sel) {
if (sel.value >="0"){

              preciocincoca=430;
              totalpreciocincoca=sel.value*preciocincoca;
              $('#totalpreciocincoca').val(totalpreciocincoca);
              
 //total();
}
}

 function seisca(sel) {
if (sel.value >="0"){

              precioseisca=195;
              totalprecioseisca=sel.value*precioseisca;
              $('#totalprecioseisca').val(totalprecioseisca);
            //total();
}
}


 function sieteca(sel) {
if (sel.value >="0"){

              preciosieteca=195;
              totalpreciosieteca=sel.value*preciosieteca;
              $('#totalpreciosieteca').val(totalpreciosieteca);
           //total();

}
}
 function ochoca(sel) {
if (sel.value >="0"){

              precioochoca=195;
              totalprecioochoca=sel.value*precioochoca;
              $('#totalprecioochoca').val(totalprecioochoca);
           //total();

}
}

function nueveca(sel) {
if (sel.value >="0"){

              precionueveca=195;
              totalprecionueveca=sel.value*precionueveca;
              $('#totalprecionueveca').val(totalprecionueveca);
            //total();

}
}

 function diezca(sel) {
if (sel.value >="0"){

              preciodiezca=550;
              totalpreciodiezca=sel.value*preciodiezca;
              $('#totalpreciodiezca').val(totalpreciodiezca);
            //total();

}
}
function onceca(sel) {
if (sel.value >="0"){

              precioonceca=195;
              totalprecioonceca=sel.value*precioonceca;
              $('#totalprecioonceca').val(totalprecioonceca);
           //total();

}
}
function doceca(sel) {
if (sel.value >="0"){

              preciodoceca=285;
              totalpreciodoceca=sel.value*preciodoceca;
              $('#totalpreciodoceca').val(totalpreciodoceca);
    var totalpreciodoceca= $("#totalpreciodocea").val();
           //total();

}
}
function trececa(sel) {
if (sel.value >="0"){
          
              var preciotrececa=285;
              var totalpreciotrececa=sel.value*preciotrececa;
              $('#totalpreciotrececa').val(totalpreciotrececa);
             //total();
            }
          }
 function catorceca(sel) {
if (sel.value >="0"){
           
              var preciocatorceca=195;
              var totalpreciocatorceca=sel.value*preciocatorceca;
              $('#totalpreciocatorceca').val(totalpreciocatorceca);
             //total();
            }
          }

          function quinceca(sel) {
if (sel.value >="0"){
        
              var precioquinceca=195;
              var totalprecioquinceca=sel.value*precioquinceca;
              $('#totalprecioquinceca').val(totalprecioquinceca);
             //total();
            }
          }

          function dieciseisca(sel) {
if (sel.value >="0"){
            
              var preciodieciseisca=195;
              var totalpreciodieciseisca=sel.value*preciodieciseisca;
              $('#totalpreciodieciseisca').val(totalpreciodieciseisca);
             //total();
            }
          }

          function diecisieteca(sel) {
if (sel.value >="0"){
            
              var preciodiecisieteca=195;
              var totalpreciodiecisieteca=sel.value*preciodiecisieteca;
              $('#totalpreciodiecisieteca').val(totalpreciodiecisieteca);
             //total();
            }
          }
 function dieciochoca(sel) {
if (sel.value >="0"){
        
              var preciodieciochoca=195;
              var totalpreciodieciochoca=sel.value*preciodieciochoca;
              $('#totalpreciodieciochoca').val(totalpreciodieciochoca);
             //total();
            }
          }
 function diecinueveca(sel) {
if (sel.value >="0"){
            
              var preciodiecinueveca=295;
              var totalpreciodiecinueveca=sel.value*preciodiecinueveca;
              $('#totalpreciodiecinueveca').val(totalpreciodiecinueveca);
             //total();
            }
          }
 function veinteca(sel) {
if (sel.value >="0"){
           
              var precioveinteca=295;
              var totalprecioveinteca=sel.value*precioveinteca;
              $('#totalprecioveinteca').val(totalprecioveinteca);
             //total();
            }
          }
 function veintiunoca(sel) {
if (sel.value >="0"){
       
              var precioveintiunoca=290;
              var totalprecioveintiunoca=sel.value*precioveintiunoca;
              $('#totalprecioveintiunoca').val(totalprecioveintiunoca);
             //total();
            }
          }
 function veintidosca(sel) {
if (sel.value >="0"){
          
              var precioveintidosca=230;
              var totalprecioveintidosca=sel.value*precioveintidosca;
              $('#totalprecioveintidosca').val(totalprecioveintidosca);
             //total();
            }
          }
 function veintitresca(sel) {
if (sel.value >="0"){
       
              var precioveintitresca=130;
              var totalprecioveintitresca=sel.value*precioveintitresca;
              $('#totalprecioveintitresca').val(totalprecioveintitresca);
             //total();
            }
          }
 function veinticuatroca(sel) {
if (sel.value >="0"){
            
              var precioveinticuatroca=130;
              var totalprecioveinticuatroca=sel.value*precioveinticuatroca;
              $('#totalprecioveinticuatroca').val(totalprecioveinticuatroca);
             //total();
            }
          }
 function veinticincoca(sel) {
if (sel.value >="0"){
      
              var precioveinticincoca=195;
              var totalprecioveinticincoca=sel.value*precioveinticincoca;
              $('#totalprecioveinticincoca').val(totalprecioveinticincoca);
             //total();
            }
          }
 function veintiseisca(sel) {
if (sel.value >="0"){
           
              var precioveintiseisca=145;
              var totalprecioveintiseisca=sel.value*precioveintiseisca;
              $('#totalprecioveintiseisca').val(totalprecioveintiseisca);
             //total();
            }
          }
          function veintisieteca(sel) {
if (sel.value >="0"){
           
              var precioveintisieteca=195;
              var totalprecioveintisieteca=sel.value*precioveintisieteca;
              $('#totalprecioveintisieteca').val(totalprecioveintisieteca);
             //total();
            }
          }
 
 function veintiochoca(sel) {
if (sel.value >="0"){
           
              var precioveintiochoca=130;
              var totalprecioveintiochoca=sel.value*precioveintiochoca;
              $('#totalprecioveintiochoca').val(totalprecioveintiochoca);
             //total();
            }
          }
          function veintinueveca(sel) {
if (sel.value >="0"){
           
              var precioveintinueveca=130;
              var totalprecioveintinueveca=sel.value*precioveintinueveca;
              $('#totalprecioveintinueveca').val(totalprecioveintinueveca);
             //total();
            }
          }
 function treintaca(sel) {
if (sel.value >="0"){
            
              var preciotreintaca=195;
              var totalpreciotreintaca=sel.value*preciotreintaca;
              $('#totalpreciotreintaca').val(totalpreciotreintaca);
             //total();
            }
          }

          //FIN CAPILARES//



          //CORPORALES//

function unoco(sel) {
if (sel.value >="0"){
          
              var preciounoco=440;
              var totalpreciounoco=sel.value*preciounoco;
              $('#totalpreciounoco').val(totalpreciounoco);
             //total();
            }
          }
 


            function dosco(sel) {


if (sel.value >="0"){

              preciodosco=290;
              totalpreciodosco=sel.value*preciodosco;
              $('#totalpreciodosco').val(totalpreciodosco);
             //total();
              }
            }
              


 function tresco(sel) {


if (sel.value >="0"){

              preciotresco=290;
              totalpreciotresco=sel.value*preciotresco;
              $('#totalpreciotresco').val(totalpreciotresco);
             //total();
             }
           }
function cuatroco(sel) {
if (sel.value >="0"){

              preciocuatroco=440;
              totalpreciocuatroco=sel.value*preciocuatroco;
              $('#totalpreciocuatroco').val(totalpreciocuatroco);
             //total();
             }
           }
           function cincoco(sel) {
if (sel.value >="0"){

              preciocincoco=440;
              totalpreciocincoco=sel.value*preciocincoco;
              $('#totalpreciocincoco').val(totalpreciocincoco);
              
 //total();
}
}

 function seisco(sel) {
if (sel.value >="0"){

              precioseisco=390;
              totalprecioseisco=sel.value*precioseisco;
              $('#totalprecioseisco').val(totalprecioseisco);
            //total();
}
}


 function sieteco(sel) {
if (sel.value >="0"){

              preciosieteco=230;
              totalpreciosieteco=sel.value*preciosieteco;
              $('#totalpreciosieteco').val(totalpreciosieteco);
           //total();

}
}
 function ochoco(sel) {
if (sel.value >="0"){

              precioochoco=390;
              totalprecioochoco=sel.value*precioochoco;
              $('#totalprecioochoco').val(totalprecioochoco);
           //total();

}
}

function nueveco(sel) {
if (sel.value >="0"){

              precionueveco=460;
              totalprecionueveco=sel.value*precionueveco;
              $('#totalprecionueveco').val(totalprecionueveco);
            //total();

}
}

 function diezco(sel) {
if (sel.value >="0"){

              preciodiezco=390;
              totalpreciodiezco=sel.value*preciodiezco;
              $('#totalpreciodiezco').val(totalpreciodiezco);
            //total();

}
}
function onceco(sel) {
if (sel.value >="0"){

              precioonceco=390;
              totalprecioonceco=sel.value*precioonceco;
              $('#totalprecioonceco').val(totalprecioonceco);
           //total();

}
}
function doceco(sel) {
if (sel.value >="0"){

              preciodoceco=750;
              totalpreciodoceco=sel.value*preciodoceco;
              $('#totalpreciodoceco').val(totalpreciodoceco);
    var totalpreciodoceco= $("#totalpreciodocea").val();
           //total();

}
}
function trececo(sel) {
if (sel.value >="0"){
          
              var preciotrececo=790;
              var totalpreciotrececo=sel.value*preciotrececo;
              $('#totalpreciotrececo').val(totalpreciotrececo);
             //total();
            }
          }
 function catorceco(sel) {
if (sel.value >="0"){
           
              var preciocatorceco=750;
              var totalpreciocatorceco=sel.value*preciocatorceco;
              $('#totalpreciocatorceco').val(totalpreciocatorceco);
             //total();
            }
          }

          function quinceco(sel) {
if (sel.value >="0"){
        
              var precioquinceco=350;
              var totalprecioquinceco=sel.value*precioquinceco;
              $('#totalprecioquinceco').val(totalprecioquinceco);
             //total();
            }
          }

          function dieciseisco(sel) {
if (sel.value >="0"){
            
              var preciodieciseisco=1310;
              var totalpreciodieciseisco=sel.value*preciodieciseisco;
              $('#totalpreciodieciseisco').val(totalpreciodieciseisco);
             //total();
            }
          }

          function diecisieteco(sel) {
if (sel.value >="0"){
            
              var preciodiecisieteco=850;
              var totalpreciodiecisieteco=sel.value*preciodiecisieteco;
              $('#totalpreciodiecisieteco').val(totalpreciodiecisieteco);
             //total();
            }
          }
 function dieciochoco(sel) {
if (sel.value >="0"){
        
              var preciodieciochoco=550;
              var totalpreciodieciochoco=sel.value*preciodieciochoco;
              $('#totalpreciodieciochoco').val(totalpreciodieciochoco);
             //total();
            }
          }
 function diecinueveco(sel) {
if (sel.value >="0"){
            
              var preciodiecinueveco=600;
              var totalpreciodiecinueveco=sel.value*preciodiecinueveco;
              $('#totalpreciodiecinueveco').val(totalpreciodiecinueveco);
             //total();
            }
          }
 function veinteco(sel) {
if (sel.value >="0"){
           
              var precioveinteco=280;
              var totalprecioveinteco=sel.value*precioveinteco;
              $('#totalprecioveinteco').val(totalprecioveinteco);
             //total();
            }
          }
 function veintiunoco(sel) {
if (sel.value >="0"){
       
              var precioveintiunoco=320;
              var totalprecioveintiunoco=sel.value*precioveintiunoco;
              $('#totalprecioveintiunoco').val(totalprecioveintiunoco);
             //total();
            }
          }
 function veintidosco(sel) {
if (sel.value >="0"){
          
              var precioveintidosco=280;
              var totalprecioveintidosco=sel.value*precioveintidosco;
              $('#totalprecioveintidosco').val(totalprecioveintidosco);
             //total();
            }
          }
 function veintitresco(sel) {
if (sel.value >="0"){
       
              var precioveintitresco=250;
              var totalprecioveintitresco=sel.value*precioveintitresco;
              $('#totalprecioveintitresco').val(totalprecioveintitresco);
             //total();
            }
          }
 function veinticuatroco(sel) {
if (sel.value >="0"){
            
              var precioveinticuatroco=210;
              var totalprecioveinticuatroco=sel.value*precioveinticuatroco;
              $('#totalprecioveinticuatroco').val(totalprecioveinticuatroco);
             //total();
            }
          }
 function veinticincoco(sel) {
if (sel.value >="0"){
      
              var precioveinticincoco=210;
              var totalprecioveinticincoco=sel.value*precioveinticincoco;
              $('#totalprecioveinticincoco').val(totalprecioveinticincoco);
             //total();
            }
          }
 function veintiseisco(sel) {
if (sel.value >="0"){
           
              var precioveintiseisco=370;
              var totalprecioveintiseisco=sel.value*precioveintiseisco;
              $('#totalprecioveintiseisco').val(totalprecioveintiseisco);
             //total();
            }
          }
          function veintisieteco(sel) {
if (sel.value >="0"){
           
              var precioveintisieteco=170;
              var totalprecioveintisieteco=sel.value*precioveintisieteco;
              $('#totalprecioveintisieteco').val(totalprecioveintisieteco);
             //total();
            }
          }
 
 function veintiochoco(sel) {
if (sel.value >="0"){
           
              var precioveintiochoco=270;
              var totalprecioveintiochoco=sel.value*precioveintiochoco;
              $('#totalprecioveintiochoco').val(totalprecioveintiochoco);
             //total();
            }
          }
          function veintinueveco(sel) {
if (sel.value >="0"){
           
              var precioveintinueveco=390;
              var totalprecioveintinueveco=sel.value*precioveintinueveco;
              $('#totalprecioveintinueveco').val(totalprecioveintinueveco);
             //total();
            }
          }
 function treintaco(sel) {
if (sel.value >="0"){
            
              var preciotreintaco=250;
              var totalpreciotreintaco=sel.value*preciotreintaco;
              $('#totalpreciotreintaco').val(totalpreciotreintaco);
             //total();
            }
          }

          //FIN CORPORALES//

</script>

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
  <form class="" action="final" method="get" >
    <input type="hidden" name="origen" value="final">
<div class="flex-container-iconos" style="margin-top: -30px;margin-left: 50px">

<div style="margin-left: 45px">
   <img src="/img/logos/carrito.jpg"  style="width:50px;height: 50px">
</div>

<div style="margin-top: -5px;width: 150px;height: 150px;">

<a href="#" id="mostrar-ocultar" class="dropbtn" style="border-radius: 10px;background-color: DodgerBlue;margin-left: -200px;width: 150px;height: 150px">=</a>
  
   </div>
  
   <div id="botones" style="display: none;width: 200px;height: 300px;z-index: 100;margin-top: 10px;background-color: white;z-index: 110">

     <b><a href="inicio" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 47px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Whatsfarma</a></b><br>

 <b><a href="perfumeria" class="btn btn-success" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 1px;font-size: 1.5em;z-index: 110;color:black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidate En Casa!!!</a></b><br>

 <b><a href="mujeres" class="btn btn-success" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Mujer</a></b><br>  

 <b><a href="adultos" class="btn btn-success" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Adultos</a></b><br>

<b><a href="bucales" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 1.5px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Salud Bucal!</a></b><br>

<b><a href="capilares" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Capilar</a></b><br>

<b><a href="corporales" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Corporal</a></b><br>

<a href="farmacia" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -370px;margin-top: 1.5px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Farmacia</a>

 <b><a href="marcas" class="btn btn-success" style="width: 340px;height: 50px;background-color: orange;color: white;margin-left: -344px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Próximas Marcas!!!</a></b><br>
</div>
</div>
  
</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 70px;text-align: center;margin-top: -8.1%;width: 100%" >

<div class="flex-container">
<div>    
@if($sumatotal==0)    
  <b> <button style="color:black;background-color:white;width: 30%;height: 50px;margin-left: -3%;color: red;font-size: 2em" class="btn col-xl" value="" name="button"></button></b><br><br>
@else
  <b> <button style="color:black;background-color:white;width: 30%;height: 50px;margin-left: -3%;color: red;font-size: 2em" class="btn col-xl" value="{{$sumatotal}}" name="button">${{$sumatotal}}</button></b><br><br>
  @endif
</div>
</div>     

</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 120px;width: 100%;margin-top: -29px">
<div class="flex-container-footer-dos">
  <div>
      <b><input type="text" class="form-control" required placeholder="Nombre" name="nombre" id="nombre" value="{{session('nombre')}}" style="width: 100%;margin-left: 1%;margin-bottom: 1%;color: red;text-align:center;margin-top: 0.8%;background-color:white"></b>   
   
  </div>
  <div>
     <b> <input type="text" class="form-control" required placeholder="Whatsapp"  name="whatsapp" id="whatsapp" value="{{session('whatsapp')}}" style="width: 100%;margin-left: 1%;color: red;text-align:center;background-color:white"></b>
  </div>
</div>
</section>  

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 850px;text-align: center;margin-top: 0.5%;margin-top:-10%;width: 100%" > 

  

           
 
 <div class="grid-container" style="">   

<div class="grid-item"style="background-color:#00a94f;width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >Cant.</label></b></div>

   

<!--<div class="grid-item"style="background-color:#00a94f;width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >Precio Unitario</label></b></div>-->



<div class="grid-item"style="background-color:#00a94f;width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >Producto</label></b></div>

<div class="grid-item"style="background-color:#00a94f;width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >Total</label></b></div>


<!--MUJERES-->

<div class="grid-item">
   <?php 
   $arraycantidadesm=[]; 
   
  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadmm=$$cantidadm;
  $productom=$productomujeres->DescripcionProducto;
  if($cantidadmm>0){
 
 
 $arraycantidadesm[] =$cantidadm;
   
  
  //   echo 
   //$cantidadmm;
   // echo "<br>";
}
}
?>
@foreach($arraycantidadesm as $arraycantidadm)



<b><select class="form-control"onChange="{{$arraycantidadm}}(this)" style="width: 90%;margin-left: 5%;position: relative;margin-top: 5%;z-index: 99;color: red;border:solid 0.5px white">
                 <option value="0">X</option>
                  @if($$arraycantidadm==1)                  
                  <option value="1" selected>1</option><br>
                  @else
                  <option value="1">1</option>
                  @endif
                  @if($$arraycantidadm==2)                  
                  <option value="2" selected>2</option>
                  @else
                  <option value="2">2</option>
                  @endif
               @if($$arraycantidadm==3)                  
                  <option value="3" selected>3</option>
                  @else
                  <option value="3">3</option>
                  @endif

                  @if($$arraycantidadm==4)                  
                  <option value="4" selected>4</option>
                  @else
                  <option value="4">4</option>
                  @endif

                  @if($$arraycantidadm==5)                  
                  <option value="5" selected>5</option>
                  @else
                  <option value="5">5</option>
                  @endif
                  
                  @if($$arraycantidadm==6)                  
                  <option value="6" selected>6</option>
                  @else
                  <option value="6">6</option>
                  @endif

                  @if($$arraycantidadm==7)                  
                  <option value="7" selected>7</option>
                  @else
                  <option value="7">7</option>
                  @endif

                  @if($$arraycantidadm==8)                  
                  <option value="8" selected>8</option>
                  @else
                  <option value="8">8</option>
                  @endif

                  @if($$arraycantidadm==9)                  
                  <option value="9" selected>9</option>
                  @else
                  <option value="9">9</option>
                  @endif

                  @if($$arraycantidadm==10)                  
                  <option value="10" selected>10</option>
                  @else
                  <option value="10">10</option>
                  @endif



                  
        </select></b>




@endforeach



  </div>

<div class="grid-item mujeres" style="display: none">
  <?php  
  $arraypreciosunitariosm=[]; 
  foreach($productosmujeres as $productomujeres){
    $preciounitariom=$productomujeres->Precio;

 
$arraypreciosunitariosm[] =$preciounitariom;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arraymujeres=<?php echo json_encode($arraypreciosunitariosm);?>;
 
</script>


  </div>

  <div class="grid-item" style="text-align: center">
    <?php  

  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadmm=$$cantidadm;
  $productom=$productomujeres->DescripcionProducto;
  if($cantidadmm>0){

   
echo "<br>";

echo 
$productom;
echo "<br>";


   
}
}
?>


</div>


  <div class="grid-item">
  <?php 
   $arraypreciostotalesm=[];  
  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadmm=$$cantidadm;
  $preciom=$productomujeres->NombreTotalPrecio;
  
  if($cantidadmm>0){
 $arraypreciostotalesm[] =$preciom;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotalesm as $arraypreciototalm)

<b> <input type="text" 

class="form-control" id="{{$arraypreciototalm}}" name="{{$arraypreciototalm}}" value="{{$$arraypreciototalm}}" style="width: 90%;margin-left: 5%;color: red;text-align:center;background-color:white;margin-top: 1.3%;border:solid 0.5px white;"></b>


@endforeach



</div>

<!--FIN MUJERES-->
<!--ADULTOS-->

<div class="grid-item">
   <?php 
   $arraycantidadesa=[]; 
   
  foreach($productosadultos as $productoadultos){
  $cantidada=$productoadultos->NombreVariable;
  $cantidadaa=$$cantidada;
  $productoa=$productoadultos->DescripcionProducto;
  if($cantidadaa>0){
 
 
 $arraycantidadesa[] =$cantidada;
   
  
  //   echo 
   //$cantidadmm;
   // echo "<br>";
}
}
?>
@foreach($arraycantidadesa as $arraycantidada)



<b><select class="form-control"onChange="{{$arraycantidada}}(this)" style="width: 90%;margin-left: 5%;position: relative;margin-top: 5%;z-index: 99;color: red;border:solid 0.5px white">
                 <option value="0">X</option>
                  @if($$arraycantidada==1)                  
                  <option value="1" selected>1</option><br>
                  @else
                  <option value="1">1</option>
                  @endif
                  @if($$arraycantidada==2)                  
                  <option value="2" selected>2</option>
                  @else
                  <option value="2">2</option>
                  @endif
               @if($$arraycantidada==3)                  
                  <option value="3" selected>3</option>
                  @else
                  <option value="3">3</option>
                  @endif

                  @if($$arraycantidada==4)                  
                  <option value="4" selected>4</option>
                  @else
                  <option value="4">4</option>
                  @endif

                  @if($$arraycantidada==5)                  
                  <option value="5" selected>5</option>
                  @else
                  <option value="5">5</option>
                  @endif
                  
                  @if($$arraycantidada==6)                  
                  <option value="6" selected>6</option>
                  @else
                  <option value="6">6</option>
                  @endif

                  @if($$arraycantidada==7)                  
                  <option value="7" selected>7</option>
                  @else
                  <option value="7">7</option>
                  @endif

                  @if($$arraycantidada==8)                  
                  <option value="8" selected>8</option>
                  @else
                  <option value="8">8</option>
                  @endif

                  @if($$arraycantidada==9)                  
                  <option value="9" selected>9</option>
                  @else
                  <option value="9">9</option>
                  @endif

                  @if($$arraycantidada==10)                  
                  <option value="10" selected>10</option>
                  @else
                  <option value="10">10</option>
                  @endif



                  
        </select></b>




@endforeach



  </div>

<!-- <div class="grid-item">
  <?php  
  $arraypreciosunitariosa=[]; 
  foreach($productosadultos as $productoadultos){
  $cantidada=$productoadultos->NombreVariable;
  $cantidadaa=$$cantidada;
  $preciounitarioa=$productoadultos->Precio;
  
  if($cantidadaa>0){
 
$arraypreciosunitariosa[] =$preciounitarioa;
// echo 
// $preciounitariom;
//  echo "<br>";
}
}
?>

@foreach($arraypreciosunitariosa as $arraypreciounitarioa)
 
<b> <input type="text" class="form-control" id="{{$arraypreciounitarioa}}" name="{{$arraypreciounitarioa}}" disabled="selected"value="{{$arraypreciounitarioa}}" style="width: 100%;margin-left: -1%;color: grey;text-align:center;background-color:white;margin-top: 2.1%

"></b>


@endforeach

  </div>-->

  <div class="grid-item" style="text-align: center">
    <?php  

  foreach($productosadultos as $productoadultos){
  $cantidada=$productoadultos->NombreVariable;
  $cantidadaa=$$cantidada;
  $productoa=$productoadultos->DescripcionProducto;
  if($cantidadaa>0){

   
echo "<br>";

echo 
$productoa;
echo "<br>";


   
}
}
?>


</div>


  <div class="grid-item">
  <?php 
   $arraypreciostotalesa=[];  
  foreach($productosadultos as $productoadultos){
  $cantidada=$productoadultos->NombreVariable;
  $cantidadaa=$$cantidada;
  $precioa=$productoadultos->NombreTotalPrecio;
  
  if($cantidadaa>0){
 $arraypreciostotalesa[] =$precioa;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotalesa as $arraypreciototala)

<b> <input type="text"  

class="form-control" id="{{$arraypreciototala}}" name="{{$arraypreciototala}}" value="{{$$arraypreciototala}}" style="width: 90%;margin-left: 5%;color: red;text-align:center;background-color:white;border:solid 0.5px white;"></b>


@endforeach



</div>
<!--FIN ADULTOS-->


<!--PRINCIPALES-->
<div class="grid-item">
   <?php 
   $arraycantidadesp=[]; 
   
  foreach($productosprincipales as $productoprincipal){
  $cantidadp=$productoprincipal->NombreVariable;
  $cantidadpp=$$cantidadp;
  $productop=$productoprincipal->DescripcionProducto;
  if($cantidadpp>0){
 
 
 $arraycantidadesp[] =$cantidadp;
   
  
  //   echo 
   //$cantidadmm;
   // echo "<br>";
}
}
?>
@foreach($arraycantidadesp as $arraycantidadp)



<b><select class="form-control"onChange="{{$arraycantidadp}}(this)" style="width: 90%;margin-left: 5%;position: relative;margin-top: 5%;z-index: 99;color: red;border:solid 0.5px white">
                 <option value="0">X</option>
                  @if($$arraycantidadp==1)                  
                  <option value="1" selected>1</option><br>
                  @else
                  <option value="1">1</option>
                  @endif
                  @if($$arraycantidadp==2)                  
                  <option value="2" selected>2</option>
                  @else
                  <option value="2">2</option>
                  @endif
                  @if($$arraycantidadp==3)                  
                  <option value="3" selected>3</option>
                  @else
                  <option value="3">3</option>
                  @endif

                  @if($$arraycantidadp==4)                  
                  <option value="4" selected>4</option>
                  @else
                  <option value="4">4</option>
                  @endif

                  @if($$arraycantidadp==5)                  
                  <option value="5" selected>5</option>
                  @else
                  <option value="5">5</option>
                  @endif
                  
                  @if($$arraycantidadp==6)                  
                  <option value="6" selected>6</option>
                  @else
                  <option value="6">6</option>
                  @endif

                  @if($$arraycantidadp==7)                  
                  <option value="7" selected>7</option>
                  @else
                  <option value="7">7</option>
                  @endif

                  @if($$arraycantidadp==8)                  
                  <option value="8" selected>8</option>
                  @else
                  <option value="8">8</option>
                  @endif

                  @if($$arraycantidadp==9)                  
                  <option value="9" selected>9</option>
                  @else
                  <option value="9">9</option>
                  @endif

                  @if($$arraycantidadp==10)                  
                  <option value="10" selected>10</option>
                  @else
                  <option value="10">10</option>
                  @endif



                  
        </select></b>




@endforeach



  </div>

<!-- <div class="grid-item">
  <?php  
  $arraypreciosunitariosp=[]; 
  foreach($productosprincipales as $productoprincipal){
  $cantidadp=$productoprincipal->NombreVariable;
  $cantidadpp=$$cantidadp;
  $preciounitariop=$productoprincipal->Precio;
  
  if($cantidadpp>0){
 
$arraypreciosunitariosp[] =$preciounitariop;
// echo 
// $preciounitariom;
//  echo "<br>";
}
}
?>

@foreach($arraypreciosunitariosp as $arraypreciounitariop)
 
<b> <input type="text" class="form-control" id="{{$arraypreciounitariop}}" name="{{$arraypreciounitariop}}" disabled="selected"value="{{$arraypreciounitariop}}" style="width: 100%;margin-left: -1%;color: grey;text-align:center;background-color:white;margin-top: 2.1%

"></b>


@endforeach

  </div>-->
<div class="grid-item mujeres" style="display: none">
  <?php  
  $arraypreciosunitariosp=[]; 
  foreach($productosprincipales as $productoprincipal){
    $preciounitariop=$productoprincipal->Precio;

 
$arraypreciosunitariosp[] =$preciounitariop;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayprincipales=<?php echo json_encode($arraypreciosunitariosp);?>;
 
</script>


  </div>
  <div class="grid-item" style="text-align: center">
    <?php  

  foreach($productosprincipales as $productoprincipal){
  $cantidadp=$productoprincipal->NombreVariable;
  $cantidadpp=$$cantidadp;
  $productop=$productoprincipal->DescripcionProducto;
  if($cantidadpp>0){

   
echo "<br>";

echo 
$productop;
echo "<br>";


   
}
}
?>


</div>


  <div class="grid-item">
  <?php 
   $arraypreciostotalesp=[];  
  foreach($productosprincipales as $productoprincipal){
  $cantidadp=$productoprincipal->NombreVariable;
  $cantidadpp=$$cantidadp;
  $preciop=$productoprincipal->NombreTotalPrecio;
  
  if($cantidadpp>0){
 $arraypreciostotalesp[] =$preciop;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotalesp as $arraypreciototalp)

<b> <input type="text" 

class="form-control" id="{{$arraypreciototalp}}" name="{{$arraypreciototalp}}" value="{{$$arraypreciototalp}}" style="width: 90%;margin-left: 5%;color: red;text-align:center;background-color:white;margin-top: 1.3%;border:solid 0.5px white;"></b>


@endforeach



</div>


<!--FIN PRINCIPAL-->


<!--BUCALES-->

<div class="grid-item">
   <?php 
   $arraycantidadeso=[]; 
   
  foreach($productosbucales as $productobucales){
  $cantidado=$productobucales->NombreVariable;
  $cantidadoo=$$cantidado;
  $productoo=$productobucales->DescripcionProducto;
  if($cantidadoo>0){
 
 
 $arraycantidadeso[] =$cantidado;
   
  
  //   echo 
   //$cantidadmm;
   // echo "<br>";
}
}
?>
@foreach($arraycantidadeso as $arraycantidado)



<b><select class="form-control"onChange="{{$arraycantidado}}(this)" style="width: 90%;margin-left: 5%;position: relative;margin-top: 5%;z-index: 99;color: red;border:solid 0.5px white">
                 <option value="0">X</option>
                  @if($$arraycantidado==1)                  
                  <option value="1" selected>1</option><br>
                  @else
                  <option value="1">1</option>
                  @endif
                  @if($$arraycantidado==2)                  
                  <option value="2" selected>2</option>
                  @else
                  <option value="2">2</option>
                  @endif
               @if($$arraycantidado==3)                  
                  <option value="3" selected>3</option>
                  @else
                  <option value="3">3</option>
                  @endif

                  @if($$arraycantidado==4)                  
                  <option value="4" selected>4</option>
                  @else
                  <option value="4">4</option>
                  @endif

                  @if($$arraycantidado==5)                  
                  <option value="5" selected>5</option>
                  @else
                  <option value="5">5</option>
                  @endif
                  
                  @if($$arraycantidado==6)                  
                  <option value="6" selected>6</option>
                  @else
                  <option value="6">6</option>
                  @endif

                  @if($$arraycantidado==7)                  
                  <option value="7" selected>7</option>
                  @else
                  <option value="7">7</option>
                  @endif

                  @if($$arraycantidado==8)                  
                  <option value="8" selected>8</option>
                  @else
                  <option value="8">8</option>
                  @endif

                  @if($$arraycantidado==9)                  
                  <option value="9" selected>9</option>
                  @else
                  <option value="9">9</option>
                  @endif

                  @if($$arraycantidado==10)                  
                  <option value="10" selected>10</option>
                  @else
                  <option value="10">10</option>
                  @endif



                  
        </select></b>




@endforeach



  </div>

 <div class="grid-item mujeres" style="display: none">
  <?php  
  $arraypreciosunitariosm=[]; 
  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadmm=$$cantidadm;
  $preciounitariom=$productomujeres->Precio;
  
  if($cantidadmm>0){
 
$arraypreciosunitariosm[] =$preciounitariom;
// echo 
// $preciounitariom;
//  echo "<br>";
}
}
?>

@foreach($arraypreciosunitariosm as $arraypreciounitariom)
 
<b> <input type="text" class="form-control" id="{{$arraypreciounitariom}}" name="{{$arraypreciounitariom}}" disabled="selected"value="{{$arraypreciounitariom}}" style="width: 100%;margin-left: -1%;color: grey;text-align:center;background-color:white;margin-top: 2.1%

"></b>


@endforeach

  </div>

  <div class="grid-item" style="text-align: center">
    <?php  

  foreach($productosbucales as $productobucales){
  $cantidado=$productobucales->NombreVariable;
  $cantidadoo=$$cantidado;
  $productoo=$productobucales->DescripcionProducto;
  if($cantidadoo>0){

   
echo "<br>";

echo 
$productoo;
echo "<br>";


   
}
}
?>


</div>


  <div class="grid-item">
  <?php 
   $arraypreciostotaleso=[];  
  foreach($productosbucales as $productobucales){
  $cantidado=$productobucales->NombreVariable;
  $cantidadoo=$$cantidado;
  $precioo=$productobucales->NombreTotalPrecio;
  
  if($cantidadoo>0){
 $arraypreciostotaleso[] =$precioo;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotaleso as $arraypreciototalo)

<b> <input type="text" 

class="form-control" id="{{$arraypreciototalo}}" name="{{$arraypreciototalo}}" value="{{$$arraypreciototalo}}" style="width: 90%;margin-left: 5%;color: red;text-align:center;background-color:white;margin-top: 1.3%;border:solid 0.5px white;"></b>


@endforeach



</div>

<!--FIN BUCALES-->


<!--CAPILARES-->

<div class="grid-item">
   <?php 
   $arraycantidadesca=[]; 
   
  foreach($productoscapilares as $productocapilares){
  $cantidadca=$productocapilares->NombreVariable;
  $cantidadcaca=$$cantidadca;
  $productoca=$productocapilares->DescripcionProducto;
  if($cantidadcaca>0){
 
 
 $arraycantidadesca[] =$cantidadca;
   
  
  //   echo 
   //$cantidadmm;
   // echo "<br>";
}
}
?>
@foreach($arraycantidadesca as $arraycantidadca)



<b><select class="form-control"onChange="{{$arraycantidadca}}(this)" style="width: 90%;margin-left: 5%;position: relative;margin-top: 5%;z-index: 99;color: red;border:solid 0.5px white">
                 <option value="0">X</option>
                  @if($$arraycantidadca==1)                  
                  <option value="1" selected>1</option><br>
                  @else
                  <option value="1">1</option>
                  @endif
                  @if($$arraycantidadca==2)                  
                  <option value="2" selected>2</option>
                  @else
                  <option value="2">2</option>
                  @endif
               @if($$arraycantidadca==3)                  
                  <option value="3" selected>3</option>
                  @else
                  <option value="3">3</option>
                  @endif

                  @if($$arraycantidadca==4)                  
                  <option value="4" selected>4</option>
                  @else
                  <option value="4">4</option>
                  @endif

                  @if($$arraycantidadca==5)                  
                  <option value="5" selected>5</option>
                  @else
                  <option value="5">5</option>
                  @endif
                  
                  @if($$arraycantidadca==6)                  
                  <option value="6" selected>6</option>
                  @else
                  <option value="6">6</option>
                  @endif

                  @if($$arraycantidadca==7)                  
                  <option value="7" selected>7</option>
                  @else
                  <option value="7">7</option>
                  @endif

                  @if($$arraycantidadca==8)                  
                  <option value="8" selected>8</option>
                  @else
                  <option value="8">8</option>
                  @endif

                  @if($$arraycantidadca==9)                  
                  <option value="9" selected>9</option>
                  @else
                  <option value="9">9</option>
                  @endif

                  @if($$arraycantidadca==10)                  
                  <option value="10" selected>10</option>
                  @else
                  <option value="10">10</option>
                  @endif



                  
        </select></b>




@endforeach



  </div>

 <!--<div class="grid-item">
  <?php  
  $arraypreciosunitariosm=[]; 
  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadmm=$$cantidadm;
  $preciounitariom=$productomujeres->Precio;
  
  if($cantidadmm>0){
 
$arraypreciosunitariosm[] =$preciounitariom;
// echo 
// $preciounitariom;
//  echo "<br>";
}
}
?>

@foreach($arraypreciosunitariosm as $arraypreciounitariom)
 
<b> <input type="text" class="form-control" id="{{$arraypreciounitariom}}" name="{{$arraypreciounitariom}}" disabled="selected"value="{{$arraypreciounitariom}}" style="width: 100%;margin-left: -1%;color: grey;text-align:center;background-color:white;margin-top: 2.1%

"></b>


@endforeach

  </div>-->

  <div class="grid-item" style="text-align: center">
    <?php  

  foreach($productoscapilares as $productocapilares){
  $cantidadca=$productocapilares->NombreVariable;
  $cantidadcaca=$$cantidadca;
  $productoca=$productocapilares->DescripcionProducto;
  if($cantidadcaca>0){

   
echo "<br>";

echo 
$productoca;
echo "<br>";


   
}
}
?>


</div>


  <div class="grid-item">
  <?php 
   $arraypreciostotalesca=[];  
  foreach($productoscapilares as $productocapilares){
  $cantidadca=$productocapilares->NombreVariable;
  $cantidadcaca=$$cantidadca;
  $precioca=$productocapilares->NombreTotalPrecio;
  
  if($cantidadcaca>0){
 $arraypreciostotalesca[] =$precioca;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotalesca as $arraypreciototalca)

<b> <input type="text" 

class="form-control" id="{{$arraypreciototalca}}" name="{{$arraypreciototalca}}" value="{{$$arraypreciototalca}}" style="width: 90%;margin-left: 5%;color: red;text-align:center;background-color:white;margin-top: 1.3%;border:solid 0.5px white;"></b>


@endforeach



</div>

<!--FIN CAPILARES-->

<!--CORPORALES-->

<div class="grid-item">
   <?php 
   $arraycantidadesco=[]; 
   
  foreach($productoscorporales as $productocorporales){
  $cantidadco=$productocorporales->NombreVariable;
  $cantidadcoco=$$cantidadco;
  $productoco=$productocorporales->DescripcionProducto;
  if($cantidadcoco>0){
 
 
 $arraycantidadesco[] =$cantidadco;
   
  
  //   echo 
   //$cantidadmm;
   // echo "<br>";
}
}
?>
@foreach($arraycantidadesco as $arraycantidadco)



<b><select class="form-control"onChange="{{$arraycantidadco}}(this)" style="width: 90%;margin-left: 5%;position: relative;margin-top: 5%;z-index: 99;color: red;border:solid 0.5px white">
                 <option value="0">X</option>
                  @if($$arraycantidadco==1)                  
                  <option value="1" selected>1</option><br>
                  @else
                  <option value="1">1</option>
                  @endif
                  @if($$arraycantidadco==2)                  
                  <option value="2" selected>2</option>
                  @else
                  <option value="2">2</option>
                  @endif
               @if($$arraycantidadco==3)                  
                  <option value="3" selected>3</option>
                  @else
                  <option value="3">3</option>
                  @endif

                  @if($$arraycantidadco==4)                  
                  <option value="4" selected>4</option>
                  @else
                  <option value="4">4</option>
                  @endif

                  @if($$arraycantidadco==5)                  
                  <option value="5" selected>5</option>
                  @else
                  <option value="5">5</option>
                  @endif
                  
                  @if($$arraycantidadco==6)                  
                  <option value="6" selected>6</option>
                  @else
                  <option value="6">6</option>
                  @endif

                  @if($$arraycantidadco==7)                  
                  <option value="7" selected>7</option>
                  @else
                  <option value="7">7</option>
                  @endif

                  @if($$arraycantidadco==8)                  
                  <option value="8" selected>8</option>
                  @else
                  <option value="8">8</option>
                  @endif

                  @if($$arraycantidadco==9)                  
                  <option value="9" selected>9</option>
                  @else
                  <option value="9">9</option>
                  @endif

                  @if($$arraycantidadco==10)                  
                  <option value="10" selected>10</option>
                  @else
                  <option value="10">10</option>
                  @endif



                  
        </select></b>




@endforeach



  </div>

 <!--<div class="grid-item">
  <?php  
  $arraypreciosunitariosm=[]; 
  foreach($productoscorporales as $productocorporales){
  $cantidadm=$productocorporales->NombreVariable;
  $cantidadmm=$$cantidadm;
  $preciounitariom=$productocorporales->Precio;
  
  if($cantidadmm>0){
 
$arraypreciosunitariosm[] =$preciounitariom;
// echo 
// $preciounitariom;
//  echo "<br>";
}
}
?>

@foreach($arraypreciosunitariosm as $arraypreciounitariom)
 
<b> <input type="text" class="form-control" id="{{$arraypreciounitariom}}" name="{{$arraypreciounitariom}}" disabled="selected"value="{{$arraypreciounitariom}}" style="width: 100%;margin-left: -1%;color: grey;text-align:center;background-color:white;margin-top: 2.1%

"></b>


@endforeach

  </div>-->

  <div class="grid-item" style="text-align: center">
    <?php  

  foreach($productoscorporales as $productocorporales){
  $cantidadco=$productocorporales->NombreVariable;
  $cantidadcoco=$$cantidadco;
  $productoco=$productocorporales->DescripcionProducto;
  if($cantidadcoco>0){

   
echo "<br>";

echo 
$productoco;
echo "<br>";


   
}
}
?>


</div>


  <div class="grid-item">
  <?php 
   $arraypreciostotalesco=[];  
  foreach($productoscorporales as $productocorporales){
  $cantidadco=$productocorporales->NombreVariable;
  $cantidadcoco=$$cantidadco;
  $precioco=$productocorporales->NombreTotalPrecio;
  
  if($cantidadcoco>0){
 $arraypreciostotalesco[] =$precioco;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotalesco as $arraypreciototalco)

<b> <input type="text" 

class="form-control" id="{{$arraypreciototalco}}" name="{{$arraypreciototalco}}" value="{{$$arraypreciototalco}}" style="width: 90%;margin-left: 5%;color: red;text-align:center;background-color:white;margin-top: 1.3%;border:solid 0.5px white;"></b>


@endforeach



</div>

<!--CORPORALES-->








</div>



 
<br>
  <b> <button type="submit"  id="myedition" style="color:black;text-align: center;background-color:#00a94f;width: 100%" class="btn col-xl"><strong style="color: white;margin-left: -5%">MODIFICAR PEDIDO</strong></button></b><br><br>
   <b> <button type="submit"  id="myedition" style="color:black;text-align: center;background-color:#4bbfdd;width: 100%" class="btn col-xl"><strong style="color: white;margin-left: -5%">VER TOTAL</strong></button></b><br><br>
 </form>


<div  id="whatsapp" style="display: block;font-size: 1.3em;margin-left: -8%">
<img src="/img/logos/whatsapp.jpg" style="width: 5%">
<?php


echo


"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20
$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirceuno%20$totalpreciouno%20$dos%20$productodos%20$pircedos%20$totalpreciodos%20$tres%20$productotres%20$pircetres%20$totalpreciotres%20$cuatro%20$productocuatro%20$pircecuatro%20$totalpreciocuatro%20 $cinco%20
$productocinco%20$pircecinco%20$totalpreciocinco%20$seis%20$productoseis%20
$pirceseis%20$totalprecioseis%20$siete%20$productosiete%20$pircesiete%20
$totalpreciosiete%20$ocho%20$%20$pirceocho%20$totalprecioocho%20$nueve%20
$productonueve%20$pircenueve%20$totalprecionueve%20$diez%20$productodiez%20
$pircediez%20$totalpreciodiez%20$once%20$productoonce%20$pirceonce%20
$totalprecioonce$doce%20$productodoce%20$pircedoce%20$totalpreciodoce%20
$trece%20$productotrece%20$pircetrece%20$totalpreciotrece%20$catorce%20
$productocatorce%20$pircecatorce%20$totalpreciocatorce%20$quince%20
 $productoquince%20$pircequince%20$totalprecioquince%20$dieciseis%20
 $productodieciseis%20$pircedieciseis%20$totalpreciodieciseis%20$diecisiete%20$productodiecisiete%20$pircediecisiete%20$totalpreciodiecisiete%20
 $dieciocho%20$productodieciocho%20$pircedieciocho%20$totalpreciodieciocho
%20$diecinueve%20$productodiecinueve%20$pircediecinueve%20
$totalpreciodiecinueve%20$veinte%20$productoveinte%20$pirceveinte%20
$totalprecioveinte%20$veintiuno%20$productoveintiuno%20$pirceveintiuno%20
$totalprecioveintiuno%20$veintidos%20$productoveintidos%20$pirceveintidos%20
$totalprecioveintidos%20$veintitres%20$productoveintitres%20$pirceveintitres%20$totalprecioveintitres%20$veinticuatro%20$productoveinticuatro%20
$pirceveinticuatro%20$totalprecioveinticuatro%20$veinticinco%20
$productoveinticinco%20$pirceveinticinco%20$totalprecioveinticinco%20
$veintiseis%20$productoveintiseis%20$pirceveintiseis%20$totalprecioveintiseis%20$veintisiete%20$productoveintisiete%20$pirceveintisiete%20
$totalprecioveintisiete%20$veintiocho%20$productoveintiocho%20
$pirceveintiocho%20$totalprecioveintiocho%20$veintinueve%20
$productoveintinueve%20$pirceveintinueve%20$totalprecioveintinueve%20$treinta%20$productotreinta%20$pircetreinta%20$totalpreciotreinta%20$unom%20
$productounom%20$pirceunom%20$totalpreciounom%20$dosm%20$productodosm%20
$pircedosm%20$totalpreciodosm%20$tresm%20$productotresm%20$pircetresm%20
$totalpreciotresm%20$cuatrom%20$productocuatrom%20$pircecuatrom%20
$totalpreciocuatrom%20 $cincom%20$productocincom%20$pircecincom%20
$totalpreciocincom%20$seism%20$productoseism%20$pirceseism%20
$totalprecioseism%20$sietem%20$productosietem%20$pircesietem%20
$totalpreciosietem%20$ochom%20$productoochom%20$pirceochom%20
$totalprecioochom%20$nuevem%20$productonuevem%20$pircenuevem%20
$totalprecionuevem%20$diezm%20$productodiezm%20$pircediezm%20
$totalpreciodiezm%20$oncem%20$productooncem%20$pirceoncem%20
$totalprecioonce$docem%20$productodocem%20$pircedocem%20$totalpreciodocem%20
$trecem%20$productotrecem%20$pircetrecem%20$totalpreciotrecem%20$catorcem%20
 $productocatorcem%20$pircecatorcem%20$totalpreciocatorcem%20$quincem%20
 $productoquincem%20$pircequincem%20$totalprecioquincem%20$dieciseism%20
 $productodieciseism%20$pircedieciseism%20$totalpreciodieciseism%20
 $diecisietem%20$productodiecisietem%20$pircediecisietem%20
 $totalpreciodiecisietem%20$dieciochom%20$productodieciochom%20
 $pircedieciochom%20$totalpreciodieciochom%20$diecinuevem%20
 $productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20
 $veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20
 $veintiunom%20$productoveintiunom%20$pirceveintiunom%20
 $totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20
 $pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20
 $productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20
 $veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20
 $totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20
 $pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20
 $productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20
 $veintisietem%20$productoveintisietem%20$pirceveintisietem%20
 $totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20
 $pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20
 $productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20
 $treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreintam%20
 $unoa%20$productounoa%20$pirceunoa%20$totalpreciounoa%20$dosa%20
 $productodosa%20$pircedosa%20$totalpreciodosa%20$tresa%20$productotresa%20
 $pircetresa%20$totalpreciotresa%20$cuatroa%20$productocuatroa%20
 $pircecuatroa%20$totalpreciocuatroa%20 $cincoa%20$productocincoa%20
 $pircecincoa%20$totalpreciocincoa%20 $seisa%20$productoseisa%20$pirceseisa%20$totalprecioseisa%20$sietea%20$productosietea%20$pircesietea%20
 $totalpreciosietea%20$ochoa%20$productoochoa%20$pirceochoa%20
 $totalprecioochoa%20$nuevea%20$productonuevea%20$pircenuevea%20
 $totalprecionuevea%20$dieza%20$productodieza%20$pircedieza%20
 $totalpreciodieza%20$oncea%20$productooncea%20$pirceoncea%20$totalprecioonce$docea%20$productodocea%20$pircedocea%20$totalpreciodocea%20$trecea%20
 $productotrecea%20$pircetrecea%20$totalpreciotrecea%20$catorcea%20
 $productocatorcea%20$pircecatorcea%20$totalpreciocatorcea%20$quincea%20
 $productoquincea%20$pircequincea%20$totalprecioquincea%20$dieciseisa%20
 $productodieciseisa%20$pircedieciseisa%20$totalpreciodieciseisa%20
 $diecisietea%20$productodiecisietea%20$pircediecisietea%20
 $totalpreciodiecisietea%20$dieciochoa%20$productodieciochoa%20
 $pircedieciochoa%20$totalpreciodieciochoa%20$diecinuevea%20
 $productodiecinuevea%20$pircediecinuevea%20$totalpreciodiecinuevea%20
 $veintea%20$productoveintea%20$pirceveintea%20$totalprecioveintea%20
 $veintiunoa%20$productoveintiunoa%20$pirceveintiunoa%20
 $totalprecioveintiunoa%20$veintidosa%20$productoveintidosa%20
 $pirceveintidosa%20$totalprecioveintidosa%20$veintitresa%20
 $productoveintitresa%20$pirceveintitresa%20$totalprecioveintitresa%20
 $veinticuatroa%20$productoveinticuatroa%20$pirceveinticuatroa%20
 $totalprecioveinticuatroa%20$veinticincoa%20$productoveinticincoa%20
 $pirceveinticincoa%20$totalprecioveinticincoa%20$veintiseisa%20
 $productoveintiseisa%20$pirceveintiseisa%20$totalprecioveintiseisa%20
 $veintisietea%20$productoveintisietea%20$pirceveintisietea%20
 $totalprecioveintisietea%20$veintiochoa%20$productoveintiochoa%20
 $pirceveintiochoa%20$totalprecioveintiochoa%20$veintinuevea%20
 $productoveintinuevea%20$pirceveintinuevea%20$totalprecioveintinuevea%20
 $treintaa%20$productotreintaa%20$pircetreintaa%20$totalpreciotreintaa%20
 $unoo%20$productounoo%20$pirceunoo%20$totalpreciounoo%20$doso%20
 $productodoso%20$pircedoso%20$totalpreciodoso%20$treso%20$productotreso%20
 $pircetreso%20$totalpreciotreso%20$cuatroo%20$productocuatroo%20
 $pircecuatroo%20$totalpreciocuatroo%20$cincoo%20$productocincoo%20
 $pircecincoo%20$totalpreciocincoo%20$seiso%20$productoseiso%20$pirceseiso%20$totalprecioseiso%20$sieteo%20$productosieteo%20$pircesieteo%20
 $totalpreciosieteo%20$ochoo%20$productoochoo%20$pirceochoo%20
 $totalprecioochoo%20$nueveo%20$productonueveo%20$pircenueveo%20
 $totalprecionueveo%20$diezo%20$productodiezo%20$pircediezo%20
 $totalpreciodiezo%20$onceo%20$productoonceo%20$pirceonceo%20$totalprecioonce$doceo%20$productodoceo%20$pircedoceo%20$totalpreciodoceo%20$treceo%20
 $productotreceo%20$pircetreceo%20$totalpreciotreceo%20$catorceo%20
 $productocatorceo%20$pircecatorceo%20$totalpreciocatorceo%20$quinceo%20
 $productoquinceo%20$pircequinceo%20$totalprecioquinceo%20$dieciseiso%20
 $productodieciseiso%20$pircedieciseiso%20$totalpreciodieciseiso%20
 $diecisieteo%20$productodiecisieteo%20$pircediecisieteo%20
 $totalpreciodiecisieteo%20$dieciochoo%20$productodieciochoo%20
 $pircedieciochoo%20$totalpreciodieciochoo%20$diecinueveo%20
 $productodiecinueveo%20$pircediecinueveo%20$totalpreciodiecinueveo%20
 $veinteo%20$productoveinteo%20$pirceveinteo%20$totalprecioveinteo%20
 $veintiunoo%20$productoveintiunoo%20$pirceveintiunoo%20
 $totalprecioveintiunoo%20$veintidoso%20$productoveintidoso%20
 $pirceveintidoso%20$totalprecioveintidoso%20$veintitreso%20
 $productoveintitreso%20$pirceveintitreso%20$totalprecioveintitreso%20
 $veinticuatroo%20$productoveinticuatroo%20$pirceveinticuatroo%20
 $totalprecioveinticuatroo%20$veinticincoo%20$productoveinticincoo%20
 $pirceveinticincoo%20$totalprecioveinticincoo%20$veintiseiso%20
 $productoveintiseiso%20$pirceveintiseiso%20$totalprecioveintiseiso%20
 $veintisieteo%20$productoveintisieteo%20$pirceveintisieteo%20
 $totalprecioveintisieteo%20$veintiochoo%20$productoveintiochoo%20
 $pirceveintiochoo%20$totalprecioveintiochoo%20$veintinueveo%20
 $productoveintinueveo%20$pirceveintinueveo%20$totalprecioveintinueveo%20
 $treintao%20$productotreintao%20$pircetreintao%20$totalpreciotreintao%20
 $unoca%20$productounoca%20$pirceunoca%20$totalpreciounoca%20$dosca%20
 $productodosca%20$pircedosca%20$totalpreciodosca%20$tresca%20$productotresca%20$pircetresca%20$totalpreciotresca%20$cuatroca%20$productocuatroca%20
 $pircecuatroca%20$totalpreciocuatroca%20$cincoca%20$productocincoca%20
 $pircecincoca%20$totalpreciocincoca%20$seisca%20$productoseisca%20
 $pirceseisca%20$totalprecioseisca%20$sieteca%20$productosieteca%20
 $pircesieteca%20$totalpreciosieteca%20$ochoca%20$productoochoca%20
 $pirceochoca%20$totalprecioochoca%20$nueveca%20$productonueveca%20
 $pircenueveca%20$totalprecionueveca%20$diezca%20$productodiezca%20
 $pircediezca%20$totalpreciodiezca%20$onceca%20$productoonceca%20
 $pirceonceca%20$totalprecioonce$doceca%20$productodoceca%20$pircedoceca%20
 $totalpreciodoceca%20$trececa%20$productotrececa%20$pircetrececa%20
 $totalpreciotrececa%20$catorceca%20$productocatorceca%20$pircecatorceca%20
 $totalpreciocatorceca%20$quinceca%20$productoquinceca%20$pircequinceca%20
 $totalprecioquinceca%20$dieciseisca%20$productodieciseisca%20
 $pircedieciseisca%20$totalpreciodieciseisca%20$diecisieteca%20
 $productodiecisieteca%20$pircediecisieteca%20$totalpreciodiecisieteca%20
 $dieciochoca%20$productodieciochoca%20$pircedieciochoca%20
 $totalpreciodieciochoca%20$diecinueveca%20$productodiecinueveca%20
 $pircediecinueveca%20$totalpreciodiecinueveca%20$veinteca%20
 $productoveinteca%20$pirceveinteca%20$totalprecioveinteca%20
 $veintiunoca%20$productoveintiunoca%20$pirceveintiunoca%20
 $totalprecioveintiunoca%20$veintidosca%20$productoveintidosca%20
 $pirceveintidosca%20$totalprecioveintidosca%20$veintitresca%20
 $productoveintitresca%20$pirceveintitresca%20$totalprecioveintitresca%20
 $veinticuatroca%20$productoveinticuatroca%20$pirceveinticuatroca%20
 $totalprecioveinticuatroca%20$veinticincoca%20$productoveinticincoca%20
 $pirceveinticincoca%20$totalprecioveinticincoca%20$veintiseisca%20
 $productoveintiseisca%20$pirceveintiseisca%20$totalprecioveintiseisca%20
 $veintisieteca%20$productoveintisieteca%20$pirceveintisieteca%20
 $totalprecioveintisieteca%20$veintiochoca%20$productoveintiochoca%20
 $pirceveintiochoca%20$totalprecioveintiochoca%20$veintinueveca%20
 $productoveintinueveca%20$pirceveintinueveca%20$totalprecioveintinueveca%20
 $treintaca%20$productotreintaca%20$pircetreintaca%20$totalpreciotreintaca%20
$unoco%20$productounoco%20$pirceunoco%20$totalpreciounoco%20$dosco%20
 $productodosco%20$pircedosco%20$totalpreciodosco%20$tresco%20$productotresco%20$pircetresco%20$totalpreciotresco%20$cuatroco%20$productocuatroco%20
 $pircecuatroco%20$totalpreciocuatroco%20$cincoco%20$productocincoco%20
 $pircecincoco%20$totalpreciocincoco%20$seisco%20$productoseisco%20
 $pirceseisco%20$totalprecioseisco%20$sieteco%20$productosieteco%20
 $pircesieteco%20$totalpreciosieteco%20$ochoco%20$productoochoco%20
 $pirceochoco%20$totalprecioochoco%20$nueveco%20$productonueveco%20
 $pircenueveco%20$totalprecionueveco%20$diezco%20$productodiezco%20
 $pircediezco%20$totalpreciodiezco%20$onceco%20$productoonceco%20
 $pirceonceco%20$totalprecioonce$doceco%20$productodoceco%20$pircedoceco%20
 $totalpreciodoceco%20$trececo%20$productotrececo%20$pircetrececo%20
 $totalpreciotrececo%20$catorceco%20$productocatorceco%20$pircecatorceco%20
 $totalpreciocatorceco%20$quinceco%20$productoquinceco%20$pircequinceco%20
 $totalprecioquinceco%20$dieciseisco%20$productodieciseisco%20
 $pircedieciseisco%20$totalpreciodieciseisco%20$diecisieteco%20
 $productodiecisieteco%20$pircediecisieteco%20$totalpreciodiecisieteco%20
 $dieciochoco%20$productodieciochoco%20$pircedieciochoco%20
 $totalpreciodieciochoco%20$diecinueveco%20$productodiecinueveco%20
 $pircediecinueveco%20$totalpreciodiecinueveco%20$veinteco%20
 $productoveinteco%20$pirceveinteco%20$totalprecioveinteco%20
 $veintiunoco%20$productoveintiunoco%20$pirceveintiunoco%20
 $totalprecioveintiunoco%20$veintidosco%20$productoveintidosco%20
 $pirceveintidosco%20$totalprecioveintidosco%20$veintitresco%20
 $productoveintitresco%20$pirceveintitresco%20$totalprecioveintitresco%20
 $veinticuatroco%20$productoveinticuatroco%20$pirceveinticuatroco%20
 $totalprecioveinticuatroco%20$veinticincoco%20$productoveinticincoco%20
 $pirceveinticincoco%20$totalprecioveinticincoco%20$veintiseisco%20
 $productoveintiseisco%20$pirceveintiseisco%20$totalprecioveintiseisco%20
 $veintisieteco%20$productoveintisieteco%20$pirceveintisieteco%20
 $totalprecioveintisieteco%20$veintiochoco%20$productoveintiochoco%20
 $pirceveintiochoco%20$totalprecioveintiochoco%20$veintinueveco%20
 $productoveintinueveco%20$pirceveintinueveco%20$totalprecioveintinueveco%20
 $treintaco%20$productotreintaco%20$pircetreintaco%20$totalpreciotreintaco%20
 TOTAL%20A%20PAGAR:%20$sumatotal'>ENVIAR WHATSAPP</a>"
?>
        
 <br><br><br>
</div>

</section>


</section>

</div>

<body>



   

</body>

</html>
