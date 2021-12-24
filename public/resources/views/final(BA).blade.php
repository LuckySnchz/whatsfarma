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


body{
  background-color: #4bbfdd;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;

}
.grid-item { 
 
  border: 0.1px solid;
  padding: 10px;
  font-size: 12px;
  text-align: right;
}
         
      </style>
<script type="text/javascript">


function unom(sel) {
if (sel.value >="0"){
          
              var preciounom=590;
              var totalpreciounom=sel.value*preciounom;
              $('#totalpreciounom').val(totalpreciounom);
             //total();
            }
          }
 


            function dosm(sel) {


if (sel.value >="0"){

              preciodosm=330;
              totalpreciodosm=sel.value*preciodosm;
              $('#totalpreciodosm').val(totalpreciodosm);
             //total();
              }
            }
              


 function tresm(sel) {


if (sel.value >="0"){

              preciotresm=180;
              totalpreciotresm=sel.value*preciotresm;
              $('#totalpreciotresm').val(totalpreciotresm);
             //total();
             }
           }
function cuatrom(sel) {
if (sel.value >="0"){

              preciocuatrom=100;
              totalpreciocuatrom=sel.value*preciocuatrom;
              $('#totalpreciocuatrom').val(totalpreciocuatrom);
             //total();
             }
           }
           function cincom(sel) {
if (sel.value >="0"){

              preciocincom=390;
              totalpreciocincom=sel.value*preciocincom;
              $('#totalpreciocincom').val(totalpreciocincom);
              
 //total();
}
}

 function seism(sel) {
if (sel.value >="0"){

              precioseism=190;
              totalprecioseism=sel.value*precioseism;
              $('#totalprecioseism').val(totalprecioseism);
            //total();
}
}


 function sietem(sel) {
if (sel.value >="0"){

              preciosietem=350;
              totalpreciosietem=sel.value*preciosietem;
              $('#totalpreciosietem').val(totalpreciosietem);
           //total();

}
}
 function ochom(sel) {
if (sel.value >="0"){

              precioochom=140;
              totalprecioochom=sel.value*precioochom;
              $('#totalprecioochom').val(totalprecioochom);
           //total();

}
}

function nuevem(sel) {
if (sel.value >="0"){

              precionuevem=140;
              totalprecionuevem=sel.value*precionuevem;
              $('#totalprecionuevem').val(totalprecionuevem);
            //total();

}
}

 function diezm(sel) {
if (sel.value >="0"){

              preciodiezm=950;
              totalpreciodiezm=sel.value*preciodiezm;
              $('#totalpreciodiezm').val(totalpreciodiezm);
            //total();

}
}
function oncem(sel) {
if (sel.value >="0"){

              preciooncem=590;
              totalpreciooncem=sel.value*preciooncem;
              $('#totalpreciooncem').val(totalpreciooncem);
           //total();

}
}
function docem(sel) {
if (sel.value >="0"){

              preciodocem=140;
              totalpreciodocem=sel.value*preciodocem;
              $('#totalpreciodocem').val(totalpreciodocem);
    var totalpreciodocem= $("#totalpreciodocea").val();
           //total();

}
}
function trecem(sel) {
if (sel.value >="0"){
          
              var preciotrecem=350;
              var totalpreciotrecem=sel.value*preciotrecem;
              $('#totalpreciotrecem').val(totalpreciotrecem);
             //total();
            }
          }
 function catorcem(sel) {
if (sel.value >="0"){
           
              var preciocatorcem=250;
              var totalpreciocatorcem=sel.value*preciocatorcem;
              $('#totalpreciocatorcem').val(totalpreciocatorcem);
             //total();
            }
          }

          function quincem(sel) {
if (sel.value >="0"){
        
              var precioquincem=250;
              var totalprecioquincem=sel.value*precioquincem;
              $('#totalprecioquincem').val(totalprecioquincem);
             //total();
            }
          }

          function dieciseism(sel) {
if (sel.value >="0"){
            
              var preciodieciseism=730;
              var totalpreciodieciseism=sel.value*preciodieciseism;
              $('#totalpreciodieciseism').val(totalpreciodieciseism);
             //total();
            }
          }

          function diecisietem(sel) {
if (sel.value >="0"){
            
              var preciodiecisietem=460;
              var totalpreciodiecisietem=sel.value*preciodiecisietem;
              $('#totalpreciodiecisietem').val(totalpreciodiecisietem);
             //total();
            }
          }
 function dieciochom(sel) {
if (sel.value >="0"){
        
              var preciodieciochom=710;
              var totalpreciodieciochom=sel.value*preciodieciochom;
              $('#totalpreciodieciochom').val(totalpreciodieciochom);
             //total();
            }
          }
 function diecinuevem(sel) {
if (sel.value >="0"){
            
              var preciodiecinuevem=230;
              var totalpreciodiecinuevem=sel.value*preciodiecinuevem;
              $('#totalpreciodiecinuevem').val(totalpreciodiecinuevem);
             //total();
            }
          }
 function veintem(sel) {
if (sel.value >="0"){
           
              var precioveintem=160;
              var totalprecioveintem=sel.value*precioveintem;
              $('#totalprecioveintem').val(totalprecioveintem);
             //total();
            }
          }
 function veintiunom(sel) {
if (sel.value >="0"){
       
              var precioveintiunom=400;
              var totalprecioveintiunom=sel.value*precioveintiunom;
              $('#totalprecioveintiunom').val(totalprecioveintiunom);
             //total();
            }
          }
 function veintidosm(sel) {
if (sel.value >="0"){
          
              var precioveintidosm=3100;
              var totalprecioveintidosm=sel.value*precioveintidosm;
              $('#totalprecioveintidosm').val(totalprecioveintidosm);
             //total();
            }
          }
 function veintitresm(sel) {
if (sel.value >="0"){
       
              var precioveintitresm=90;
              var totalprecioveintitresm=sel.value*precioveintitresm;
              $('#totalprecioveintitresm').val(totalprecioveintitresm);
             //total();
            }
          }
 function veinticuatrom(sel) {
if (sel.value >="0"){
            
              var precioveinticuatrom=110;
              var totalprecioveinticuatrom=sel.value*precioveinticuatrom;
              $('#totalprecioveinticuatrom').val(totalprecioveinticuatrom);
             //total();
            }
          }
 function veinticincom(sel) {
if (sel.value >="0"){
      
              var precioveinticincom=760;
              var totalprecioveinticincom=sel.value*precioveinticincom;
              $('#totalprecioveinticincom').val(totalprecioveinticincom);
             //total();
            }
          }
 function veintiseism(sel) {
if (sel.value >="0"){
           
              var precioveintiseism=950;
              var totalprecioveintiseism=sel.value*precioveintiseism;
              $('#totalprecioveintiseism').val(totalprecioveintiseism);
             //total();
            }
          }
          function veintisietem(sel) {
if (sel.value >="0"){
           
              var precioveintisietem=420;
              var totalprecioveintisietem=sel.value*precioveintisietem;
              $('#totalprecioveintisietem').val(totalprecioveintisietem);
             //total();
            }
          }
 
 function veintiochom(sel) {
if (sel.value >="0"){
           
              var precioveintiochom=590;
              var totalprecioveintiochom=sel.value*precioveintiochom;
              $('#totalprecioveintiochom').val(totalprecioveintiochom);
             //total();
            }
          }
          function veintinuevem(sel) {
if (sel.value >="0"){
           
              var precioveintinuevem=290;
              var totalprecioveintinuevem=sel.value*precioveintinuevem;
              $('#totalprecioveintinuevem').val(totalprecioveintinuevem);
             //total();
            }
          }
 function treintam(sel) {
if (sel.value >="0"){
            
              var preciotreintam=365;
              var totalpreciotreintam=sel.value*preciotreintam;
              $('#totalpreciotreintam').val(totalpreciotreintam);
             //total();
            }
          }
 //ADULTOS//


 function unoa(sel) {
if (sel.value >="0"){
          
              var preciounoa=590;
              var totalpreciounoa=sel.value*preciounoa;
              $('#totalpreciounoa').val(totalpreciounoa);
             //total();
            }
          }
 


            function dosa(sel) {


if (sel.value >="0"){

              preciodosa=330;
              totalpreciodosa=sel.value*preciodosa;
              $('#totalpreciodosa').val(totalpreciodosa);
             //total();
              }
            }
              


 function tresa(sel) {


if (sel.value >="0"){

              preciotresa=180;
              totalpreciotresa=sel.value*preciotresa;
              $('#totalpreciotresa').val(totalpreciotresa);
             //total();
             }
           }
function cuatroa(sel) {
if (sel.value >="0"){

              preciocuatroa=100;
              totalpreciocuatroa=sel.value*preciocuatroa;
              $('#totalpreciocuatroa').val(totalpreciocuatroa);
             //total();
             }
           }
           function cincoa(sel) {
if (sel.value >="0"){

              preciocincoa=390;
              totalpreciocincoa=sel.value*preciocincoa;
              $('#totalpreciocincoa').val(totalpreciocincoa);
              
 //total();
}
}

 function seisa(sel) {
if (sel.value >="0"){

              precioseisa=190;
              totalprecioseisa=sel.value*precioseisa;
              $('#totalprecioseisa').val(totalprecioseisa);
            //total();
}
}


 function sietea(sel) {
if (sel.value >="0"){

              preciosietea=350;
              totalpreciosietea=sel.value*preciosietea;
              $('#totalpreciosietea').val(totalpreciosietea);
           //total();

}
}
 function ochoa(sel) {
if (sel.value >="0"){

              precioochoa=140;
              totalprecioochoa=sel.value*precioochoa;
              $('#totalprecioochoa').val(totalprecioochoa);
           //total();

}
}

function nuevea(sel) {
if (sel.value >="0"){

              precionuevea=140;
              totalprecionuevea=sel.value*precionuevea;
              $('#totalprecionuevea').val(totalprecionuevea);
            //total();

}
}

 function dieza(sel) {
if (sel.value >="0"){

              preciodieza=950;
              totalpreciodieza=sel.value*preciodieza;
              $('#totalpreciodieza').val(totalpreciodieza);
            //total();

}
}
function oncea(sel) {
if (sel.value >="0"){

              preciooncea=590;
              totalpreciooncea=sel.value*preciooncea;
              $('#totalpreciooncea').val(totalpreciooncea);
           //total();

}
}
function docea(sel) {
if (sel.value >="0"){

              preciodocea=140;
              totalpreciodocea=sel.value*preciodocea;
              $('#totalpreciodocea').val(totalpreciodocea);
    var totalpreciodocea= $("#totalpreciodocea").val();
           //total();

}
}
function trecea(sel) {
if (sel.value >="0"){
          
              var preciotrecea=350;
              var totalpreciotrecea=sel.value*preciotrecea;
              $('#totalpreciotrecea').val(totalpreciotrecea);
             //total();
            }
          }
 function catorcea(sel) {
if (sel.value >="0"){
           
              var preciocatorcea=250;
              var totalpreciocatorcea=sel.value*preciocatorcea;
              $('#totalpreciocatorcea').val(totalpreciocatorcea);
             //total();
            }
          }

          function quincea(sel) {
if (sel.value >="0"){
        
              var precioquincea=250;
              var totalprecioquincea=sel.value*precioquincea;
              $('#totalprecioquincea').val(totalprecioquincea);
             //total();
            }
          }

          function dieciseisa(sel) {
if (sel.value >="0"){
            
              var preciodieciseisa=730;
              var totalpreciodieciseisa=sel.value*preciodieciseisa;
              $('#totalpreciodieciseisa').val(totalpreciodieciseisa);
             //total();
            }
          }

          function diecisietea(sel) {
if (sel.value >="0"){
            
              var preciodiecisietea=460;
              var totalpreciodiecisietea=sel.value*preciodiecisietea;
              $('#totalpreciodiecisietea').val(totalpreciodiecisietea);
             //total();
            }
          }
 function dieciochoa(sel) {
if (sel.value >="0"){
        
              var preciodieciochoa=710;
              var totalpreciodieciochoa=sel.value*preciodieciochoa;
              $('#totalpreciodieciochoa').val(totalpreciodieciochoa);
             //total();
            }
          }
 function diecinuevea(sel) {
if (sel.value >="0"){
            
              var preciodiecinuevea=230;
              var totalpreciodiecinuevea=sel.value*preciodiecinuevea;
              $('#totalpreciodiecinuevea').val(totalpreciodiecinuevea);
             //total();
            }
          }
 function veintea(sel) {
if (sel.value >="0"){
           
              var precioveintea=160;
              var totalprecioveintea=sel.value*precioveintea;
              $('#totalprecioveintea').val(totalprecioveintea);
             //total();
            }
          }
 function veintiunoa(sel) {
if (sel.value >="0"){
       
              var precioveintiunoa=400;
              var totalprecioveintiunoa=sel.value*precioveintiunoa;
              $('#totalprecioveintiunoa').val(totalprecioveintiunoa);
             //total();
            }
          }
 function veintidosa(sel) {
if (sel.value >="0"){
          
              var precioveintidosa=3100;
              var totalprecioveintidosa=sel.value*precioveintidosa;
              $('#totalprecioveintidosa').val(totalprecioveintidosa);
             //total();
            }
          }
 function veintitresa(sel) {
if (sel.value >="0"){
       
              var precioveintitresa=90;
              var totalprecioveintitresa=sel.value*precioveintitresa;
              $('#totalprecioveintitresa').val(totalprecioveintitresa);
             //total();
            }
          }
 function veinticuatroa(sel) {
if (sel.value >="0"){
            
              var precioveinticuatroa=110;
              var totalprecioveinticuatroa=sel.value*precioveinticuatroa;
              $('#totalprecioveinticuatroa').val(totalprecioveinticuatroa);
             //total();
            }
          }
 function veinticincoa(sel) {
if (sel.value >="0"){
      
              var precioveinticincoa=760;
              var totalprecioveinticincoa=sel.value*precioveinticincoa;
              $('#totalprecioveinticincoa').val(totalprecioveinticincoa);
             //total();
            }
          }
 function veintiseisa(sel) {
if (sel.value >="0"){
           
              var precioveintiseisa=950;
              var totalprecioveintiseisa=sel.value*precioveintiseisa;
              $('#totalprecioveintiseisa').val(totalprecioveintiseisa);
             //total();
            }
          }
          function veintisietea(sel) {
if (sel.value >="0"){
           
              var precioveintisietea=420;
              var totalprecioveintisietea=sel.value*precioveintisietea;
              $('#totalprecioveintisietea').val(totalprecioveintisietea);
             //total();
            }
          }
 
 function veintiochoa(sel) {
if (sel.value >="0"){
           
              var precioveintiochoa=590;
              var totalprecioveintiochoa=sel.value*precioveintiochoa;
              $('#totalprecioveintiochoa').val(totalprecioveintiochoa);
             //total();
            }
          }
          function veintinuevea(sel) {
if (sel.value >="0"){
           
              var precioveintinuevea=290;
              var totalprecioveintinuevea=sel.value*precioveintinuevea;
              $('#totalprecioveintinuevea').val(totalprecioveintinuevea);
             //total();
            }
          }
 function treintaa(sel) {
if (sel.value >="0"){
            
              var preciotreintaa=365;
              var totalpreciotreintaa=sel.value*preciotreintaa;
              $('#totalpreciotreintaa').val(totalpreciotreintaa);
             //total();
            }
          }
 

 //FIN ADULTOS//
 



</script>









   </head>
     <header>
      
</header>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 150px;text-align: center;" > 
  <img src="{{ asset('img/logos/marca.jpg') }}" style="width: 40%">
 

</section>

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 70px;text-align: center;margin-top: -2.1%" >

 <img src="{{ asset('img/logos/carrito.jpg') }}" style="width: 5%;margin-top: 0.1%;margin-left: -5%">

</section>


<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 70px;text-align: center;margin-top: -2.08%" >

           
  <b> <button style="color:black;background-color:white;width: 30%;margin-left: -5%;color: red;font-size: 2em" class="btn col-xl" value="{{$sumatotal}}" name="button">{{$sumatotal}}</button></b><br><br>

     

</section>
<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 850px;text-align: center;margin-top: 0.5%;margin-top: -2.08%" > 

  <form class="" action="final" method="get" >

           
 
 <div class="grid-container" style="">   

<div class="grid-item"style="background-color:rgb(137, 210, 14);width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >cantidad</label></b></div>

   

<div class="grid-item"style="background-color:rgb(137, 210, 14);width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >Precio Unitario</label></b></div>



<div class="grid-item"style="background-color:rgb(137, 210, 14);width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >Producto</label></b></div>

<div class="grid-item"style="background-color:rgb(137, 210, 14);width: 100%;color:white;font-size: 1em;text-align: center"><b><label for="Rp1" >Total</label></b></div>


<!--MUJERES-->

<div class="grid-item">
   <?php 
   $arraycantidades=[]; 
   
  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadmm=$$cantidadm;
  $productom=$productomujeres->DescripcionProducto;
  if($cantidadmm>0){
 
 
 $arraycantidades[] =$cantidadm;
   
  
  //   echo 
   //$cantidadmm;
   // echo "<br>";
}
}
?>
@foreach($arraycantidades as $arraycantidad)



<b><select class="form-control"onChange="{{$arraycantidad}}(this)" style="width: 100%;margin-left: -1%;position: relative;margin-top: 5%;z-index: 99;color: red">
                 <option value="0">X</option>
                  @if($$arraycantidad==1)                  
                  <option value="1" selected>1</option><br>
                  @else
                  <option value="1">1</option>
                  @endif
                  @if($$arraycantidad==2)                  
                  <option value="2" selected>2</option>
                  @else
                  <option value="2">2</option>
                  @endif
               @if($$arraycantidad==3)                  
                  <option value="3" selected>3</option>
                  @else
                  <option value="3">3</option>
                  @endif

                  @if($$arraycantidad==4)                  
                  <option value="4" selected>4</option>
                  @else
                  <option value="4">4</option>
                  @endif

                  @if($$arraycantidad==5)                  
                  <option value="5" selected>5</option>
                  @else
                  <option value="5">5</option>
                  @endif
                  
                  @if($$arraycantidad==6)                  
                  <option value="6" selected>6</option>
                  @else
                  <option value="6">6</option>
                  @endif

                  @if($$arraycantidad==7)                  
                  <option value="7" selected>7</option>
                  @else
                  <option value="7">7</option>
                  @endif

                  @if($$arraycantidad==8)                  
                  <option value="8" selected>8</option>
                  @else
                  <option value="8">8</option>
                  @endif

                  @if($$arraycantidad==9)                  
                  <option value="9" selected>9</option>
                  @else
                  <option value="9">9</option>
                  @endif

                  @if($$arraycantidad==10)                  
                  <option value="10" selected>10</option>
                  @else
                  <option value="10">10</option>
                  @endif



                  
        </select></b>




@endforeach



  </div>

 <div class="grid-item">
  <?php  
  $arraypreciosunitarios=[]; 
  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadm=$$cantidadm;
  $preciounitariom=$productomujeres->Precio;
  
  if($cantidadm>0){
 
$arraypreciosunitarios[] =$preciounitariom;
// echo 
// $preciounitariom;
//  echo "<br>";
}
}
?>

@foreach($arraypreciosunitarios as $arraypreciounitario)
 
<b> <input type="text" class="form-control" id="{{$arraypreciounitario}}" name="{{$arraypreciounitario}}" disabled="selected"value="{{$arraypreciounitario}}" style="width: 100%;margin-left: -1%;color: grey;text-align:center;background-color:white;margin-top: 2.1%"></b>


@endforeach

  </div>

  <div class="grid-item">
    <?php  

  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadm=$$cantidadm;
  $productom=$productomujeres->DescripcionProducto;
  if($cantidadm>0){

   
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
   $arraypreciostotales=[];  
  foreach($productosmujeres as $productomujeres){
  $cantidadm=$productomujeres->NombreVariable;
  $cantidadm=$$cantidadm;
  $preciom=$productomujeres->NombreTotalPrecio;
  
  if($cantidadm>0){
 $arraypreciostotales[] =$preciom;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotales as $arraypreciototal)

<b> <input type="text" class="form-control" id="{{$arraypreciototal}}" name="{{$arraypreciototal}}" value="{{$$arraypreciototal}}" style="width: 100%;margin-left: -1%;color: red;text-align:center;background-color:white;margin-top: 1.3%"></b>


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



<b><select class="form-control"onChange="{{$arraycantidada}}(this)" style="width: 100%;margin-left: -1%;position: relative;margin-top: 5%;z-index: 99;color: red">
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

 <div class="grid-item">
  <?php  
  $arraypreciosunitariosa=[]; 
  foreach($productosadultos as $productoadultos){
  $cantidada=$productoadultos->NombreVariable;
  $cantidada=$$cantidada;
  $preciounitarioa=$productoadultos->Precio;
  
  if($cantidada>0){
 
$arraypreciosunitariosa[] =$preciounitarioa;
// echo 
// $preciounitariom;
//  echo "<br>";
}
}
?>

@foreach($arraypreciosunitariosa as $arraypreciounitarioa)
 
<b> <input type="text" class="form-control" id="{{$arraypreciounitarioa}}" name="{{$arraypreciounitarioa}}" disabled="selected"value="{{$arraypreciounitarioa}}" style="width: 100%;margin-left: -1%;color: grey;text-align:center;background-color:white;margin-top: 2.1%"></b>


@endforeach

  </div>

  <div class="grid-item">
    <?php  

  foreach($productosadultos as $productoadultos){
  $cantidada=$productoadultos->NombreVariable;
  $cantidada=$$cantidada;
  $productoa=$productoadultos->DescripcionProducto;
  if($cantidada>0){

   
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
  $cantidada=$$cantidada;
  $precioa=$productoadultos->NombreTotalPrecio;
  
  if($cantidada>0){
 $arraypreciostotalesa[] =$precioa;
  //echo 
  //$preciom;
  //echo "<br>";
}
}
?>
 
@foreach($arraypreciostotalesa as $arraypreciototala)

<b> <input type="text" class="form-control" id="{{$arraypreciototala}}" name="{{$arraypreciototala}}" value="{{$$arraypreciototala}}" style="width: 100%;margin-left: -1%;color: red;text-align:center;background-color:white;margin-top: 1.3%"></b>


@endforeach



</div>
<!--FIN ADULTOS-->

<!--FIN PRINCIPAL-->
<!--FIN PRINCIPAL-->





</div>



 
<br>
  <b> <button type="submit"  id="myedition" style="color:black;background-color:rgb(137, 210, 14)" class="btn col-xl"  name="button"><strong style="color: red;margin-left: -5%">VER TOTAL</strong><strong style="color: black;"> / MODIFICAR PEDIDO</strong></button></b><br><br>
 </form>


<div  id="whatsapp" style="display: block;font-size: 1.3em;margin-left: -8%">
<img src="{{ asset('img/logos/logo.jpg') }}" style="width: 5%">
<?php


echo


"<a href='https://api.whatsapp.com/send?phone=5492213602683&text=¡Hola!%20Soy%20$nombre%20Quisiera%20Realizar%20Este%20Pedido:%20$uno%20$productouno%20$pirceuno%20$totalpreciouno%20$dos%20$productodos%20$pircedos%20$totalpreciodos%20$tres%20$productotres%20$pircetres%20$totalpreciotres%20$cuatro%20$productocuatro%20$pircecuatro%20$totalpreciocuatro%20 $cinco%20$productocinco%20$pircecinco%20$totalpreciocinco%20
 $seis%20$productoseis%20$pirceseis%20$totalprecioseis%20$siete%20$productosiete%20$pircesiete%20$totalpreciosiete%20
   $ocho%20$productoocho%20$pirceocho%20$totalprecioocho%20$nueve%20$productonueve%20$pircenueve%20$totalprecionueve%20
     $diez%20$productodiez%20$pircediez%20$totalpreciodiez%20$once%20$productoonce%20$pirceonce%20$totalprecioonce
 $doce%20$productodoce%20$pircedoce%20$totalpreciodoce%20$trece%20$productotrece%20$pircetrece%20$totalpreciotrece%20$catorce%20$productocatorce%20$pircecatorce%20$totalpreciocatorce%20$quince%20$productoquince%20$pircequince%20$totalprecioquince%20$dieciseis%20$productodieciseis%20$pircedieciseis%20$totalpreciodieciseis%20$diecisiete%20$productodiecisiete%20$pircediecisiete%20$totalpreciodiecisiete%20$dieciocho%20$productodieciocho%20$pircedieciocho%20$totalpreciodieciocho
%20$diecinueve%20$productodiecinueve%20$pircediecinueve%20$totalpreciodiecinueve%20$veinte%20$productoveinte%20$pirceveinte%20$totalprecioveinte%20$veintiuno%20$productoveintiuno%20$pirceveintiuno%20$totalprecioveintiuno%20$veintidos%20$productoveintidos%20$pirceveintidos%20$totalprecioveintidos%20$veintitres%20$productoveintitres%20$pirceveintitres%20$totalprecioveintitres%20$veinticuatro%20$productoveinticuatro%20$pirceveinticuatro%20$totalprecioveinticuatro%20$veinticinco%20$productoveinticinco%20$pirceveinticinco%20$totalprecioveinticinco%20$veintiseis%20$productoveintiseis%20$pirceveintiseis%20$totalprecioveintiseis%20$veintisiete%20$productoveintisiete%20$pirceveintisiete%20$totalprecioveintisiete%20$veintiocho%20$productoveintiocho%20$pirceveintiocho%20$totalprecioveintiocho%20$veintinueve%20$productoveintinueve%20$pirceveintinueve%20$totalprecioveintinueve%20$treinta%20$productotreinta%20$pircetreinta%20$totalpreciotreinta%20$unom%20$productounom%20$pirceunom%20$totalpreciounom%20$dosm%20$productodosm%20$pircedosm%20$totalpreciodosm%20$tresm%20$productotresm%20$pircetresm%20$totalpreciotresm%20$cuatrom%20$productocuatrom%20$pircecuatrom%20$totalpreciocuatrom%20 $cincom%20$productocincom%20$pircecincom%20$totalpreciocincom%20
 $seism%20$productoseism%20$pirceseism%20$totalprecioseism%20$sietem%20$productosietem%20$pircesietem%20$totalpreciosietem%20
   $ochom%20$productoochom%20$pirceochom%20$totalprecioochom%20$nuevem%20$productonuevem%20$pircenuevem%20$totalprecionuevem%20
     $diezm%20$productodiezm%20$pircediezm%20$totalpreciodiezm%20$oncem%20$productooncem%20$pirceoncem%20$totalprecioonce
 $docem%20$productodocem%20$pircedocem%20$totalpreciodocem%20$trecem%20$productotrecem%20$pircetrecem%20$totalpreciotrecem%20$catorcem%20$productocatorcem%20$pircecatorcem%20$totalpreciocatorcem%20$quincem%20$productoquincem%20$pircequincem%20$totalprecioquincem%20$dieciseism%20$productodieciseism%20$pircedieciseism%20$totalpreciodieciseism%20$diecisietem%20$productodiecisietem%20$pircediecisietem%20$totalpreciodiecisietem%20$dieciochom%20$productodieciochom%20$pircedieciochom%20$totalpreciodieciocho
m%20$diecinuevem%20$productodiecinuevem%20$pircediecinuevem%20$totalpreciodiecinuevem%20$veintem%20$productoveintem%20$pirceveintem%20$totalprecioveintem%20$veintiunom%20$productoveintiunom%20$pirceveintiunom%20$totalprecioveintiunom%20$veintidosm%20$productoveintidosm%20$pirceveintidosm%20$totalprecioveintidosm%20$veintitresm%20$productoveintitresm%20$pirceveintitresm%20$totalprecioveintitresm%20$veinticuatrom%20$productoveinticuatrom%20$pirceveinticuatrom%20$totalprecioveinticuatrom%20$veinticincom%20$productoveinticincom%20$pirceveinticincom%20$totalprecioveinticincom%20$veintiseism%20$productoveintiseism%20$pirceveintiseism%20$totalprecioveintiseism%20$veintisietem%20$productoveintisietem%20$pirceveintisietem%20$totalprecioveintisietem%20$veintiochom%20$productoveintiochom%20$pirceveintiochom%20$totalprecioveintiochom%20$veintinuevem%20$productoveintinuevem%20$pirceveintinuevem%20$totalprecioveintinuevem%20$treintam%20$productotreintam%20$pircetreintam%20$totalpreciotreintam%20$unoa%20$productounoa%20$pirceunoa%20$totalpreciounoa%20$dosa%20$productodosa%20$pircedosa%20$totalpreciodosa%20$tresa%20$productotresa%20$pircetresa%20$totalpreciotresa%20$cuatroa%20$productocuatroa%20$pircecuatroa%20$totalpreciocuatroa%20 $cincoa%20$productocincoa%20$pircecincoa%20$totalpreciocincoa%20 $seisa%20$productoseisa%20$pirceseisa%20$totalprecioseisa%20$sietea%20$productosietea%20$pircesietea%20$totalpreciosietea%20$ochoa%20$productoochoa%20$pirceochoa%20$totalprecioochoa%20$nuevea%20$productonuevea%20$pircenuevea%20$totalprecionuevea%20$dieza%20$productodieza%20$pircedieza%20$totalpreciodieza%20$oncea%20$productooncea%20$pirceoncea%20$totalprecioonce
 $docea%20$productodocea%20$pircedocea%20$totalpreciodocea%20$trecea%20$productotrecea%20$pircetrecea%20$totalpreciotrecea%20$catorcea%20$productocatorcea%20$pircecatorcea%20$totalpreciocatorcea%20$quincea%20$productoquincea%20$pircequincea%20$totalprecioquincea%20$dieciseisa%20$productodieciseisa%20$pircedieciseisa%20$totalpreciodieciseisa%20$diecisietea%20$productodiecisietea%20$pircediecisietea%20$totalpreciodiecisietea%20$dieciochoa%20$productodieciochoa%20$pircedieciochoa%20$totalpreciodieciochoa%20$diecinuevea%20$productodiecinuevea%20$pircediecinuevea%20$totalpreciodiecinuevea%20$veintea%20$productoveintea%20$pirceveintea%20$totalprecioveintea%20$veintiunoa%20$productoveintiunoa%20$pirceveintiunoa%20$totalprecioveintiunoa%20$veintidosa%20$productoveintidosa%20$pirceveintidosa%20$totalprecioveintidosa%20$veintitresa%20$productoveintitresa%20$pirceveintitresa%20$totalprecioveintitresa%20$veinticuatroa%20$productoveinticuatroa%20$pirceveinticuatroa%20$totalprecioveinticuatroa%20$veinticincoa%20$productoveinticincoa%20$pirceveinticincoa%20$totalprecioveinticincoa%20$veintiseisa%20$productoveintiseisa%20$pirceveintiseisa%20$totalprecioveintiseisa%20$veintisietea%20$productoveintisietea%20$pirceveintisietea%20$totalprecioveintisietea%20$veintiochoa%20$productoveintiochoa%20$pirceveintiochoa%20$totalprecioveintiochoa%20$veintinuevea%20$productoveintinuevea%20$pirceveintinuevea%20$totalprecioveintinuevea%20$treintaa%20$productotreintaa%20$pircetreintaa%20$totalpreciotreintaa%20
TOTAL%20A%20PAGAR:%20$sumatotal'>ENVIAR WHATSAPP</a>"
?>
        
 <br><br><br>
</div>

</section>


</section>



<body>



   

</body>

</html>
