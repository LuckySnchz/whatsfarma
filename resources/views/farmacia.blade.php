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
       
      <link rel="stylesheet" href="css/app.css">
      <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
      <title>INICIO</title>
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
<a name="Ancla" id="a"></a>
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

<div class="flex-container-celu">
  <div id="celu" style="display: none;background-color: #4bbfdd;margin-top: -29px"> 
<img src="/img/logos/celu.jpg" style="width: 300px;height: 500px;border-radius: 10%;margin-top: 20px">
  </div>
</div>


 <div id="mostrartodo" style="display: none">

  <section class="container jumbotron shadow p-3 mb-5 rounded"style="background-color:rgb(255,165,0);height: 45px;margin-top:-7.8%;color: white;text-align: center" >
  <form class="" action="ira" method="get" id="myform" >
  <input type="hidden" name="origen" value="farmacia">  
  
  <h3 style="color: white;margin-top: 5px;width: 90%;margin-left: 15px"><strong style="color: black"> + </strong>Cerca!!!</h3>
</section>



<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="width: 100%;margin-top: -29px;height: 60px"> 
<div class="flex-container-iconos" style="margin-top: -30px;margin-left: 50px">

<div style="margin-left: 85px;margin-top: -30px">
   <a href="https://api.whatsapp.com/send?phone=542213602683&text=Hola,%20quisiera%20realizar%20una%20consulta" > <img src="/img/logos/whatsapp.jpg"  style="width:50px;height: 50px"></a>
</div>
<div style="margin-top: -15px;width: 150px;height: 150px;">

<a href="#" id="mostrar-ocultar" class="dropbtn" style="border-radius: 10px;background-color: DodgerBlue;margin-left: -200px;width: 150px;height: 150px">=</a>
  
   </div>
  
   <div id="botones" style="display: none;width: 200px;height: 300px;z-index: 100;margin-top: 10px;background-color: white;z-index: 110">

  <b><a href="inicio" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 47px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Whatsfarma</a></b><br>

<b><a href="perfumeria" class="btn btn-success" style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color:black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidate En Casa!!!</a></b><br>


 <b><a href="mujeres" class="btn btn-success"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Mujer</a></b><br>

<b><a href="adultos" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Adultos</a></b><br>



<b><a href="bucales" class="btn btn-success"  style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Salud Bucal!</a></b><br>

<b><a href="capilares" class="btn btn-success"   style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Capilar</a></b><br>
  

  <b><a href="corporales" class="btn btn-success"style="width: 340px;height: 50px;background-color: #4bbfdd;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Cuidado Corporal</a></b><br>

 <b><a  href="marcas"class="btn btn-success"   style="width: 340px;height: 50px;background-color: orange;color: white;margin-left: -410px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: white;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Otras Marcas!!!</a></b><br>

</div>
</div>
</form>
</section>


<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 500px;text-align: center;margin-top: -8%;font-size: 1.5em" >




<div class="flex-container" style="">

<div>
  <img src="{{ asset('img/logos/fotoreceta.jpg') }}" style="width: 350px;height: 300px;margin-top: -25px;margin-left: -25px">
</div>
<div>


</div>
</div>

    </section>

</div>

</body>
</html>
