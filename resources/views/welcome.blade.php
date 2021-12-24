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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
      <title>INICIO</title>
      <style>


body{
  background-color:#4bbfdd;
}
.flex-container {
  display: flex;
  flex-direction: column;

}

.flex-container > div {

  

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

<div class="flex-container-celu">
  <div id="celu" style="display: none;background-color: #4bbfdd;margin-top: -29px"> 
<img src="/img/logos/celu.jpg" style="width: 300px;height: 500px;border-radius: 10%;margin-top: 20px">
  </div>
</div>


 <div id="mostrartodo" style="display: none">

  <section class="container jumbotron shadow p-3 mb-5 rounded"style="background-color:rgb(255,165,0);height: 45px;text-align: center;margin-top:-7.8%;color: white" >
   
  
  <h3 style="color: white;margin-top: 5px;"><strong style="color: black"> + </strong>Cerca!!!</h3>
</section>



<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 500px;text-align: center;margin-top: -7.8%;font-size: 1.5em" >

<a  class="btn btn-primary" href="farmacia" target="_self" style="color:black;background-color:#00a94f;max-width: 100%;min-width: 35%;border: solid white 0.05em;margin-left: -1%;margin-bottom: 10%;color: white;font-size: 1em">
 <b><strong> FARMACIA</strong></b>
</button></a>


<a type="button" class="btn btn-primary" href="mujeres"  style="color:black;background-color:#00a94f;max-width: 100%;border: solid white 0.05em;margin-left: 1%;margin-bottom: 10%;min-width: 35%;color: white;font-size: 1em">
 <b><strong>PERFUMERIA</strong></b>
</button></a>
<div class="flex-container" style="">
<div>
  <img src="{{ asset('img/logos/moto.jpg') }}" style="width: 120px;height: 100px">
</div>
<div>
  <img src="{{ asset('img/logos/zona.jpg') }}" style="width: 120px;height: 100px">
</div>
<div>
  <img src="{{ asset('img/logos/stock.jpg') }}" style="width: 120px;height: 100px">
</div>
</div>
<!--<h1> ESTAMOS TRABAJANDO!!!</h1>-->

    </section>

</div>

</body>
</html>
