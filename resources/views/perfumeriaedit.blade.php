<?php

session_start();




 ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <link rel="stylesheet" type="text/css" href="css/site.css" />
    <script type="text/javascript" src="js/cssrefresh.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https:fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <title>CUIDATE EN CASA</title>
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

<div class="flex-container" style="display: inline-block;float: left;margin-left: 3%;"> 
 
<div style="margin-top: 100px;">
<div style="">
  <form class="" action="/perfumeriaeditar" method="post" id="edit" enctype="multipart/form-data">
      {{csrf_field()}}
      
         <b><input type="text" name="Descripcion" placeholder="{{$producto->DescripcionProducto}}" value=""style="width: 300px;height: 50px;border:solid 0.1px white;margin-top: -60px;text-align: center"> <br><br>



   <strong><input type="text"name="Precio" placeholder="{{$producto->Precio}}" value="" style="color:red;text-align: center"></strong></b><br><br>

<img class="group list-group-image" src="{{ asset('img/'.$producto->image) }}" alt="" style="width: 150px;height: 150px" /> 

 <input type="hidden" name="id" value="{{$producto->id}}"><br>


   <input type="file" name="imagen" style="color: white;margin-left: 53px;margin-top: 10px">


</div>





 <!-- <form class="" action="mujereseditar" method="get" id="myedit"> -->
  <!--<img src="/img/dos.jpg" style="width: 13em;height: 9em;">
  <!--SOLO COMPLETAR LOS <label></label>
   <b><input type="text" name="{{$producto->NombreProducto}}"placeholder="{{$producto->DescripcionProducto}}" value=""style="width: 300px;height: 50px;border:solid 0.1px white;margin-top: -60px;text-align: center"> <br><br>



   <strong><input type="text"name="{{$producto->NombrePrecio}}" placeholder="{{$producto->Precio}}" value="" style="color:red;text-align: center"></strong></b><br><br>
  
 
  <!--<div style="display: none">
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

  <b><button  type="submit" class="btn btn-success" id="myedit" name="id"value="{{$producto->id}}}"  style="width:100%;height: 50px;background-color: #00a94f;color: white;margin-left: -10px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black" class="btn col-XL" class="btn btn-danger">Editar</button></b><br>


<p style="text-decoration-line: underline;margin-left: -20px">...................................................................</p>-->
</div>

<button  type="submit" class="btn btn-success" id="edit"  style="width:60%;height: 50px;background-color:rgb(38, 211, 103);color: white;margin-left: -10px;margin-top: 1px;font-size: 1.5em;z-index: 110;color: black;border: solid 0.5px black">EDITAR</button><br>

</form>
 
</div>

@endforeach

 <!-- </form>-->

</section>

</div>
<!--<div class="grid-item principales" style="display: none">
  <?php  
  $arraypreciosunitarios=[]; 
  foreach($productos as $producto){
    $preciounitario=$producto->Precio;

 
$arraypreciosunitarios[] =$preciounitario;

}
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayprincipales=<?php echo json_encode($arraypreciosunitarios);?>;
 
</script>


  </div>-->




<body>


</body>

</html>
