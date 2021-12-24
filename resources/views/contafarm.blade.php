<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CONTAFARM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://printjs-4de6.kxcdn.com/print.min.js">
  <link href="https://printjs-4de6.kxcdn.com/print.min.css">
  <script src="print.js"></script>
  <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="print.css">
  
<script src="script.js?1.1.0" language="Javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">


  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
  {
  width:100%;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: #eee;
}
#ai th,#vm th, #va th,#vt th{
  border: 1px solid #eee;
  border-collapse: collapse;
}
.services .icon-box:hover {
  background: #fff;
  border-color: #fff;
 
}
.about .icon-box:hover .icon i {
  color: black;
}
.services .icon-box:hover .icon i {
  color: black;
}
.services .icon-box:hover h4 a, .services .icon-box:hover p {
  color: black;
}
.services .icon-box {
  margin-bottom: 20px;
  text-align: left;
  padding: 50px;
}
input[type]:focus {
background-color:orange;
border: 2px solid black;
color: black;
}



</style>


</head>


<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contafarm@gmail.com</a>
        <i class="icofont-phone"></i> 221-3602683
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="youtube"><i class="icofont-youtube"></i></a>
        <a href="https://instagram.com/solucionesholisticaseo?igshid=yvloazfv6spx" class="instagram"><i class="icofont-instagram"></i></a>
        <!--<a href="#" class="skype"><i class="icofont-skype"></i></a>-->
        <!--<a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>-->
      </div>
    </div>
     <header id="header"  style="height: 120px">

    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light" ><a href="index.html"><span style="color:#ff6600">CONTA</span><strong style="color:green">FARM</strong></span><br><span style="font-size: 0.50em">Controla tus movimientos</span></a></h1>
        <strong style="font-size: 15px;text-decoration:underline">Caja_id: </strong>
        {{session("Caja_id")}}
      </div>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  </section>

  <!-- ======= Header ======= -->
  





 


  <!-- ======= Services Section ======= -->
  <!--VALVULAS-->
    <section id="servicios" class="services" style="padding: 0">    
  
        <form class="" id="" action="/abrircaja" method="post" >
{{csrf_field()}}


      <div class="container" style="border: solid black 1px; border-radius: 1%;background-color: grey;color:white">   <br>  
<h4 style="font-size: 18px;text-align: center;text-decoration: underline;color:black"><b>TOTAL CAJA</b></h4>

<p><b><input type="text" class="form-control" name="finalcaja" id="totalcaja"style="font-size: 20px;text-align: center;height: 30px"></b></p>


        <div class="row" style=";display: flex;justify-content: center;">
        

         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Incio </b></p>
              
            </div>           
              <div>
              
              <p><b><input type="text" class="form-control" name="iniciocaja" id="iniciocaja"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>0.50</b></p>
              <p><b><input type="text" class="form-control" name="cincuentacentavos" id="cincuentacentavos" value="0" style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>1</b></p>
              <p><b><input type="text" value="0" class="form-control" name="unpeso"  id="unpeso"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>2</b></p>
              <p><b><input type="text" value="0" class="form-control" name="dospesos" id="dospesos"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

           

            </div>     
             

            </div>
          <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  
                  
              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>5</b></p>
              <p><b><input type="text" value="0" class="form-control" name="cincopesos" id="cincopesos"style="font-size: 15px;text-align: center;height: 30px;text-align: center;"></b></p></div>
              <div>
              <p style="font-size:15px;margin-bottom: 1px;text-align: center;"><b>10</b></p>
              <p><b><input type="text" value="0" class="form-control" name="diezpesos" id="diezpesos"style="font-size: 15px;text-align: center;height: 30px;text-align: center;"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>20</b></p>
              <p><b><input type="text" value="0" class="form-control" name="veintepesos" id="veintepesos"style="font-size: 15px;text-align: center;height: 30px;text-align: center;"></b></p></div>
            
                <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>50</b></p>
              <p><b><input type="text" value="0"class="form-control" name="cincuentapesos" id="cincuentapesos"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              

              </div>
          </div>

                <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  
                      
              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>100</b></p>
              <p><b><input type="text" value="0" class="form-control" name="cienpesos" id="cienpesos"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size:15px;margin-bottom: 1px;text-align: center;"><b>200</b></p>
              <p><b><input type="text" value="0" class="form-control" name="doscientospesos" id="doscientospesos"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>500</b></p>
              <p><b><input type="text"value="0"class="form-control" name="quinientospesos" id="quinientospesos"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
                <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>1000</b></p>
              <p><b><input type="text" value="0" class="form-control" name="milpesos" id="milpesos"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              
        
              </div>

          </div>
   
        </div>

   

      </div>
       <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="submit" name="abrircaja" id="abrircaja" value="ABRIR CAJA"></b></p>   
      </form>

    </section><br><!-- End Services Section -->

     <section id="servicios" class="services" style="padding: 0">           

      <div class="container" style="border: solid black 1px; border-radius: 1%;background-color: grey;color:white">   <br>  
<h4 style="font-size: 18px;text-align: center;text-decoration: underline;color:black"><b>ZETAS</b></h4>



        <div class="row" style=";display: flex;justify-content: center;">
        

         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Medicamento</b></p>
            </div>           
              <div>
              
              <p><b><input type="text" class="form-control" value="0" name="medicamento" id="medicamento"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Perfumería</b></p>
              <p><b><input type="text" class="form-control" name="perfumeria" id="perfumeria" value="0" style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Obra Social</b></p>
              <p><b><input type="text" value="0" class="form-control" name="obrasocial"  id="obrasocial"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

                        

            </div> 
             

      <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="button" name="cerrarcaja" id="cerrarcaja" value="CERRAR CAJA"></b></p> 
            </div>
          
      </div>
    </div>
    

    </section><br>
  

   <section id="servicios" class="services" style="padding: 0">           

      <div class="container" style="border: solid black 1px; border-radius: 1%;background-color: grey;color:white">   <br>  
<h4 style="font-size: 18px;text-align: center;text-decoration: underline;color:black"><b>REINTEGROS Y GASTOS</b></h4>



        <div class="row" style=";display: flex;justify-content: center;">
        

         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px;background-color: green" > 
            <h4 style="font-size: 18px;text-align: center;text-decoration: underline; color: black"><b>INGRESÓ/NO TICKET</b></h4> 

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Importe Total</b></p><br>
                
            </div>           
              <div>
              
              <p><b><input type="text" class="form-control" value="0" name="ingresoticket" id="ingresoticket"style="font-size: 20px;text-align: center;height: 30px"></b></p><br>

              <p><b><input type="text" class="form-control" placeholder="nota"name="textingresonotickt" id="textingresonotickt"style="font-size: 20px;text-align: center;height: 30px"></b></p>




            </div><br>

              
      <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="button" name="ingresonoticket" id="ingresonoticket" value="ENVIAR"></b></p> 

                        

            </div>     
             

            </div>
          
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px;background-color: red" > 
            <h4 style="font-size: 18px;text-align: center;text-decoration: underline; color: black"><b>TICKET/NO INGRESÓ</b></h4> 

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Importe Total</b></p><br>
            </div>           
              <div>
              
              <p><b><input type="text" class="form-control" value="0" name="ticketnoingreso" id="ticketnoingreso"style="font-size: 20px;text-align: center;height: 30px"></b></p><br>


              <p><b><input type="text" class="form-control" placeholder="nota"name="textticktnoingreso" id="textticktnoingreso"style="font-size: 20px;text-align: center;height: 30px"></b></p>



            </div><br>
           
       <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="button" name="ticketnoingreso" id="ticketnoingreso" value="ENVIAR"></b></p> 
                        

            </div>     
             

            </div>

              <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px;background-color: orange" > 
            <h4 style="font-size: 18px;text-align: center;text-decoration: underline; color: black"><b>GASTOS</b></h4> 

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Importe</b></p><br>
            </div>           
              <div>
              
              <p><b><input type="text" class="form-control" value="0" name="gastos" id="gastos"style="font-size: 20px;text-align: center;height: 30px"></b></p>

            <br>


              <p><b><input type="text" class="form-control" placeholder="nota"name="gastos" id="gastos"style="font-size: 20px;text-align: center;height: 30px"></b></p>



            </div>
           <br>

              <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="button" name="gastos" id="gastos" value="ENVIAR"></b></p>           

            </div>     
             

            </div>
           
      </div>
    </div>
      <br>

    </section><br>
    <section id="servicios" class="services" style="padding: 0;">           

      <div class="container" style="border: solid black 1px; border-radius: 1%;background-color: grey;color: black">   <br>  
<h4 style="font-size: 16px;text-align: center;text-decoration: underline;"><b>PAGOS ELECTRONICOS, NOTAS DE CREDITO</b></h4>



        <div class="row" style=";display: flex;justify-content: center;">
        

         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Importe A Cobrar</b></p>
            </div>           
              <div>
              
              <p><b><input type="text" class="form-control" value="0" name="importedomiciliotext" id="importedomiciliotext" placeholder="Importe Domicilio"style="font-size: 20px;text-align: center;height: 30px"></b></p></div><br>
                           
               <p style="font-size: 15px;margin-bottom: 1px;text-align: left;text-decoration: underline;"><b>Abona con:</b></p>

               

               <div><input type="radio" style=""  name="formadepago"  value="tarjetadebitodomicilio" id="tarjetadebitodomicilio">
               <label style="font-size: 15px">Tarjeta de Débito</label></div>

              <div class="tarjetadebitodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="tarjetadebitodomiciliotext" value="0" name="tarjetadebitodomiciliotext"></b></div>

                <div><input type="radio" style=""  name="formadepago"  id="tarjetacreditodomicilio" value="tarjetacreditodomicilio">
               <label style="font-size: 15px">Tarjeta de Crédito</label></div>

               <div class="tarjetacreditodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="tarjetacreditodomiciliotext" value="0" name="tarjetacreditodomiciliotext"></b></div>

               <div><input type="radio" style=""  name="formadepago" id="mercadopagodomicilio" value="mercadopagodomicilio">
               <label style="font-size: 15px">Mercado Pago</label></div>

                  <div class="mercadopagodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="mercadopagodomiciliotext" value="0" name="mercadopagodomiciliotext"></b></div>

               
               <div><input type="radio" style=""  name="formadepago" id="transferenciadomicilio" value="transferenciadomicilio">
               <label style="font-size: 15px">Transferencia</label></div>

                  <div class="transferenciadomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="transferenciadomiciliotext" value="0" name="transferenciadomiciliotext"></b></div>

               <div><input type="radio" style=""  name="formadepago" id="dimodomicilio" value="dimodomicilio">
               <label style="font-size: 15px">dimo</label></div>

               <div class="dimodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="dimodomiciliotext" value="0" name="dimodomiciliotext"></b></div>

               <div><input type="radio" style=""  name="formadepago" id="notadecreditodomicilio" value="notadecreditodomicilio">
               <label style="font-size: 15px">notadecredito</label></div>

               <div class="notadecreditodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" value="0" id="notadecreditodomiciliotext" name="notadecreditodomiciliotext"></b></div>


              

       

            
              <br>
              <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="button" name="domicilio" id="domicilio" value="ENVIAR PAGO"></b></p>

            </div>     
             
  
            </div>
          
      </div>



    </div>
  </div><br><br>
  </section>
     <section id="servicios" class="services" style="padding: 0;">           

      <div class="container" style="border: solid black 1px; border-radius: 1%;background-color: grey;color: black">   <br>  
<h4 style="font-size: 18px;text-align: center;text-decoration: underline;"><b>DOMICILIOS</b></h4>



        <div class="row" style=";display: flex;justify-content: center;">
        

         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Importe A Cobrar</b></p>
            </div>           
              <div>
              
              <p><b><input type="text" class="form-control" value="0" name="importedomiciliotext" id="importedomiciliotext" placeholder="Importe Domicilio"style="font-size: 20px;text-align: center;height: 30px"></b></p></div><br>
                           
               <p style="font-size: 15px;margin-bottom: 1px;text-align: left;text-decoration: underline;"><b>Abona con:</b></p>

               <div><input type="radio" style=""  name="formadepago"  id="efectivodomicilio" value="efectivodomicilio">
               <label style="font-size: 15px">Efectivo</label></div>

            <div class="efectivodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="efectivodomiciliotext" value="0"name="efectivodomiciliotext"></b></div>

               <div><input type="radio" style=""  name="formadepago"  value="tarjetadebitodomicilio" id="tarjetadebitodomicilio">
               <label style="font-size: 15px">Tarjeta de Débito</label></div>

              <div class="tarjetadebitodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="tarjetadebitodomiciliotext" value="0" name="tarjetadebitodomiciliotext"></b></div>

                <div><input type="radio" style=""  name="formadepago"  id="tarjetacreditodomicilio" value="tarjetacreditodomicilio">
               <label style="font-size: 15px">Tarjeta de Crédito</label></div>

               <div class="tarjetacreditodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="tarjetacreditodomiciliotext" value="0" name="tarjetacreditodomiciliotext"></b></div>

               <div><input type="radio" style=""  name="formadepago" id="mercadopagodomicilio" value="mercadopagodomicilio">
               <label style="font-size: 15px">Mercado Pago</label></div>

                  <div class="mercadopagodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="mercadopagodomiciliotext" value="0" name="mercadopagodomiciliotext"></b></div>

               
               <div><input type="radio" style=""  name="formadepago" id="transferenciadomicilio" value="transferenciadomicilio">
               <label style="font-size: 15px">Transferencia</label></div>

                  <div class="transferenciadomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="transferenciadomiciliotext" value="0" name="transferenciadomiciliotext"></b></div>

               <div><input type="radio" style=""  name="formadepago" id="dimodomicilio" value="dimodomicilio">
               <label style="font-size: 15px">dimo</label></div>

               <div class="dimodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" id="dimodomiciliotext" value="0" name="dimodomiciliotext"></b></div>

               <div><input type="radio" style=""  name="formadepago" id="notadecreditodomicilio" value="notadecreditodomicilio">
               <label style="font-size: 15px">notadecredito</label></div>

               <div class="notadecreditodomicilio" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="importe" value="0" id="notadecreditodomiciliotext" name="notadecreditodomiciliotext"></b></div>


              <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Vuelto</b></p>
              <p><b><input type="text" value="0" class="form-control" name="vueltodomiciliotext"  id="vueltodomiciliotext"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

       

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Paciente</b></p>
              <p><b><input type="text" value="" class="form-control" name="paciente"  id="paciente"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
           
            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Domicilio</b></p>
              <p><b><input type="text" value="" class="form-control" name="domicilio"  id="domicilio"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

            <div>
              <p style="font-size: 15px;margin-bottom: 1px;text-align: center;"><b>Teléfono</b></p>
              <p><b><input type="text" value="" class="form-control" name="telefono"  id="telefono"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <br>
              <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="button" name="domicilio" id="domicilio" value="ENVIAR DOMICILIO"></b></p>

            </div>     
             
  
            </div>
          
      </div>



    </div>
  </div>
  </section>
      <br>
    </section><br>
     
  
     <script type="text/javascript">
   $(function(){
        $("#efectivodomicilio").click(function(){
        $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).toggle();

        $("#tarjetadebitodomiciliotext").val('0');
        $( ".tarjetadebitodomicilio" ).hide();

        $("#tarjetacreditodomiciliotext").val('0');
        $( ".tarjetacreditodomicilio" ).hide();  

        $("#mercadopagodomiciliotext").val('0');
        $( ".mercadopagodomicilio" ).hide();

        $("#transferenciadomiciliotext").val('0');
        $( ".transferenciadomicilio" ).hide();     
        
        $("#dimodomiciliotext").val('0');
        $( ".dimodomicilio" ).hide(); 

        $("#notadecreditodomiciliotext").val('0');
        $( ".notadecreditodomicilio" ).hide();   




        });
    });
</script>

    <script type="text/javascript">
   $(function(){
        $("#tarjetadebitodomicilio").click(function(){ 
              
        $("#tarjetadebitodomiciliotext").val($("#importedomiciliotext").val());
        $( ".tarjetadebitodomicilio" ).toggle();
        $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).hide();

 $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).hide();

  $("#tarjetacreditodomiciliotext").val('0');
        $( ".tarjetacreditodomicilio" ).hide();  

  $("#mercadopagodomiciliotext").val('0');
        $( ".mercadopagodomicilio" ).hide();

  $("#transferenciadomiciliotext").val('0');
        $( ".transferenciadomicilio" ).hide();     
        
 $("#dimodomiciliotext").val('0');
        $( ".dimodomicilio" ).hide(); 

$("#notadecreditodomiciliotext").val('0');
        $( ".notadecreditodomicilio" ).hide();
        });
    });
</script>
   
    <script type="text/javascript">
   $(function(){
        $("#tarjetacreditodomicilio").click(function(){
        $("#tarjetacreditodomiciliotext").val($("#importedomiciliotext").val());
        $( ".tarjetacreditodomicilio" ).toggle();
  

        $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).hide();

        $("#tarjetadebitodomiciliotext").val('0');
        $( ".tarjetadebitodomicilio" ).hide();  

        $("#mercadopagodomiciliotext").val('0');
        $( ".mercadopagodomicilio" ).hide();

        $("#transferenciadomiciliotext").val('0');
        $( ".transferenciadomicilio" ).hide();     
        
        $("#dimodomiciliotext").val('0');
        $( ".dimodomicilio" ).hide(); 

        $("#notadecreditodomiciliotext").val('0');
        $( ".notadecreditodomicilio" ).hide();
        });
    });
</script>

<script type="text/javascript">
   $(function(){
        $("#mercadopagodomicilio").click(function(){
        $("#mercadopagodomiciliotext").val($("#importedomiciliotext").val());
        $( ".mercadopagodomicilio" ).toggle();

        $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).hide();

        $("#tarjetadebitodomiciliotext").val('0');
        $( ".tarjetadebitodomicilio" ).hide();  

         $("#tarjetacreditodomiciliotext").val('0');
        $( ".tarjetacreditodomicilio" ).hide(); 

        $("#transferenciadomiciliotext").val('0');
        $( ".transferenciadomicilio" ).hide();     
        
        $("#dimodomiciliotext").val('0');
        $( ".dimodomicilio" ).hide(); 

        $("#notadecreditodomiciliotext").val('0');
        $( ".notadecreditodomicilio" ).hide();
        });
    });
</script>

<script type="text/javascript">
   $(function(){
        $("#transferenciadomicilio").click(function(){
        $("#transferenciadomiciliotext").val($("#importedomiciliotext").val());
        $( ".transferenciadomicilio" ).toggle();

        $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).hide();

        $("#tarjetadebitodomiciliotext").val('0');
        $( ".tarjetadebitodomicilio" ).hide();  

         $("#tarjetacreditodomiciliotext").val('0');
        $( ".tarjetacreditodomicilio" ).hide(); 

          $("#mercadopagodomiciliotext").val('0');
        $( ".mercadopagodomicilio" ).hide();   
        
        $("#dimodomiciliotext").val('0');
        $( ".dimodomicilio" ).hide(); 

        $("#notadecreditodomiciliotext").val('0');
        $( ".notadecreditodomicilio" ).hide();


        });
    });
</script>

<script type="text/javascript">
   $(function(){
        $("#dimodomicilio").click(function(){
        $("#dimodomiciliotext").val($("#importedomiciliotext").val());
        $( ".dimodomicilio" ).toggle();

        $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).hide();

        $("#tarjetadebitodomiciliotext").val('0');
        $( ".tarjetadebitodomicilio" ).hide();  

         $("#tarjetacreditodomiciliotext").val('0');
        $( ".tarjetacreditodomicilio" ).hide(); 

          $("#mercadopagodomiciliotext").val('0');
        $( ".mercadopagodomicilio" ).hide();   
        
         $("#transferenciadomiciliotext").val('0');
        $( ".transferenciadomicilio" ).hide(); 

        $("#notadecreditodomiciliotext").val('0');
        $( ".notadecreditodomicilio" ).hide();
        });
    });
</script>

<script type="text/javascript">
   $(function(){
        $("#notadecreditodomicilio").click(function(){
        $("#notadecreditodomiciliotext").val('0');
        $( ".notadecreditodomicilio" ).toggle();

        $("#efectivodomiciliotext").val('0');
        $( ".efectivodomicilio" ).hide();

        $("#tarjetadebitodomiciliotext").val('0');
        $( ".tarjetadebitodomicilio" ).hide();  

        $("#tarjetacreditodomiciliotext").val('0');
        $( ".tarjetacreditodomicilio" ).hide(); 

        $("#mercadopagodomiciliotext").val('0');
        $( ".mercadopagodomicilio" ).hide();   
        
        $("#transferenciadomiciliotext").val('0');
        $( ".transferenciadomicilio" ).hide(); 
        
        $("#dimodomiciliotext").val('0');
        $( ".dimodomicilio" ).hide(); 
        });
    });
</script>
 <script type="text/javascript">
$("input[id=efectivodomiciliotext]").click(function(){

  $("#efectivodomiciliotext").val('');
    
  });;
 
</script>

 <script type="text/javascript">
$("input[id=tarjetadebitodomiciliotext]").click(function(){

  $("#tarjetadebitodomiciliotext").val($("#importedomiciliotext").val());
    
  }); 
</script>

 <script type="text/javascript">
$("input[id=tarjetacreditodomiciliotext]").click(function(){

  $("#tarjetacreditodomiciliotext").val($("#importedomiciliotext").val());
    
  }); 
</script>

<script type="text/javascript">
$("input[id=mercadopagodomiciliotext]").click(function(){

  $("#mercadopagodomiciliotext").val($("#importedomiciliotext").val());
    
  }); 
</script>

<script type="text/javascript">
$("input[id=transferenciadomiciliotext]").click(function(){

  $("#transferenciadomiciliotext").val($("#importedomiciliotext").val());
    
  }); 
</script>
<script type="text/javascript">
$("input[id=dimodomiciliotext]").click(function(){

  $("#dimodomiciliotext").val('');
    
  }); 
</script>
<script type="text/javascript">
$("input[id=notadecreditodomiciliotext]").click(function(){

  $("#notadecreditodomiciliotext").val('');
    
  }); 
</script>

<script type="text/javascript">
$("input[id=importedomiciliotext]").click(function(){

  $("#importedomiciliotext").val('');
    
  }); 
</script>
<script type="text/javascript">
$("input[id=vueltodomiciliotext]").click(function(){

$efectivodomiciliotext=$("#efectivodomiciliotext").val();
$notadecreditodomiciliotext=$("#notadecreditodomiciliotext").val();
$importedomiciliotext=$("#importedomiciliotext").val();

if($importedomiciliotext==0){
  alert("Debe Ingresar un Importe a Cobrar");
}

if(($efectivodomiciliotext>0)){
$("#vueltodomiciliotext").val($efectivodomiciliotext-$("#importedomiciliotext").val());}


if(($notadecreditodomiciliotext>0)){
$("#vueltodomiciliotext").val($notadecreditodomiciliotext-$("#importedomiciliotext").val());}

if(($("#vueltodomiciliotext").val()<0)&&($("#notadecreditodomiciliotext").val()==0)){
   alert("El Importe debe ser mayor o igual " + $importedomiciliotext);
   $("#vueltodomiciliotext").val('');
}

if($("#vueltodomiciliotext").val()<0){
 $vueltodomiciliotext=-$("#vueltodomiciliotext").val();

  $("#vueltodomiciliotext").val("Cobrar " + $vueltodomiciliotext);
}
    
  }); 
</script>

    <script type="text/javascript">
  function operacion(a,b,c,d,e,f,g,h,i,j,k,l){
 
    if(a>0){
     var value=(a+(b*0.5+c*1+d*2+e*5+f*10+g*20+h*50+i*100+j*200+k*500+l*1000)).toFixed(2); 
   
   $("#totalcaja").val(value);
     
}else{alert('Debe ingresar un valor de Inicio de Caja');
 }
}
</script>
<script type="text/javascript">
  jQuery('#abrircaja').click(function(){
     var iniciocaja= parseInt(jQuery('#iniciocaja').val(),10); 
     var cincuentacentavos= parseInt(jQuery('#cincuentacentavos').val(),10); 
     var unpeso= parseInt(jQuery('#unpeso').val(),10); 
     var dospesos= parseInt(jQuery('#dospesos').val(),10); 
     var cincopesos= parseInt(jQuery('#cincopesos').val(),10); 
     var diezpesos= parseInt(jQuery('#diezpesos').val(),10); 
     var veintepesos= parseInt(jQuery('#veintepesos').val(),10); 
     var cincuentapesos= parseInt(jQuery('#cincuentapesos').val(),10); 
     var cienpesos= parseInt(jQuery('#cienpesos').val(),10); 
     var doscientospesos= parseInt(jQuery('#doscientospesos').val(),10); 
     var quinientospesos= parseInt(jQuery('#quinientospesos').val(),10); 
     var milpesos= parseInt(jQuery('#milpesos').val(),10);


     
     operacion(iniciocaja,cincuentacentavos,unpeso,dospesos,cincopesos,diezpesos,veintepesos,cincuentapesos,cienpesos,doscientospesos,quinientospesos,milpesos); 
});
</script>
</html>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3 style="color:#ff6600">Infoimagenes</h3>
            <p style="font-size: 15px">
              Calle 3 761 <br>
              La Plata, Buenos Aires, Argentina<br><br>
              <strong style="font-size: 15px">Teléfono:</strong> +54 221 3602683<br>
              <strong style="font-size: 15px">Email:</strong> infoimagenes@gmail.com <br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://instagram.com/solucionesholisticaseo?igshid=yvloazfv6spx" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul style="font-size: 15px">
              <li><i class="bx bx-chevron-right"></i> <a href="#inicio">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Quiénes Somos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#servicios">Informe</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#eventos">Eventos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Galería</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Miembros del Equipo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contacto</a></li>-->
            </ul>
          </div>

           <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p style="font-size: 15px">Suscribite, recibirás todas las novedades en tu email</p>
           <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>-->

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->

 <script src="{{asset('js/app.js')}}"></script>
</body>

</html>

