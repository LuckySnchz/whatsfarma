<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INFOIMAGENES</title>
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
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
td{width: 100%;height: 15px;padding: 2px;text-align: center}
* {
  box-sizing: border-box;
}

.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 15px;
  text-align: center;
}

.flex-item-left {
  background-color: white;
  padding: 5px;
  flex: 50%;
}

.flex-item-right {
  background-color:white;
  padding: 5px;
  flex: 50%;
}
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}
body{ background-color: white }

</style>
<script type="text/javascript">
  $(function(){
        $("#epmas").click(function(){
        $( ".epmas" ).toggle();
        });
    });
  </script>
  <script type="text/javascript">
   $(function(){
        $("#epdmas").click(function(){
        $( ".epdmas" ).toggle();
        });
    });
</script>
  <script type="text/javascript">
   $(function(){
        $("#aimas").click(function(){
        $('#aimastext').val('');
        $( ".aimas" ).toggle();

        });
    });
</script>
<script type="text/javascript">
   $(function(){
        $("#aiconservada").click(function(){
        $("#ailevetext").val('');
        $('.aileve').hide();  
        $("#aimoderadatext").val('');
        $('.aimoderada').hide();
        $("#aiseveratext").val('');
        $('.aisevera').hide();

        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#aileve").click(function(){
        $("#ailevetext").val('');
        $( ".aileve" ).toggle();
        $("#aimoderadatext").val('');
        $('.aimoderada').hide();
        $("#aiseveratext").val('');
        $(".aisevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#aimoderada").click(function(){
        $("#aimoderadatext").val('');
        $( ".aimoderada" ).toggle();
        $("#ailevetext").val('');
        $('.aileve').hide();
        $("#aiseveratext").val('');
        $(".aisevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#aisevera").click(function(){
        $("#aiseveratext").val('');  
        $( ".aisevera" ).toggle();
        $("#aimoderadatext").val('');
        $('.aimoderada').hide();
        $("#ailevetext").val('');
        $(".aileve").hide();
        });
    });
</script>
  <script type="text/javascript">
   $(function(){
        $("#vmmas").click(function(){
        $('#vmmastext').val('');
        $( ".vmmas" ).toggle();

        });
    });
</script>
<script type="text/javascript">
   $(function(){
        $("#vmconservada").click(function(){
        $("#vmlevetext").val('');
        $('.vmleve').hide();  
        $("#vmmoderadatext").val('');
        $('.vmmoderada').hide();
        $("#vmseveratext").val('');
        $('.vmsevera').hide();

        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vmleve").click(function(){
        $("#vmlevetext").val('');
        $( ".vmleve" ).toggle();
        $("#vmmoderadatext").val('');
        $('.vmmoderada').hide();
        $("#vmseveratext").val('');
        $(".vmsevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vmmoderada").click(function(){
        $("#vmmoderadatext").val('');
        $( ".vmmoderada" ).toggle();
        $("#vmlevetext").val('');
        $('.vmleve').hide();
        $("#vmseveratext").val('');
        $(".vmsevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vmsevera").click(function(){
        $("#vmseveratext").val('');  
        $( ".vmsevera" ).toggle();
        $("#vmmoderadatext").val('');
        $('.vmmoderada').hide();
        $("#vmlevetext").val('');
        $(".vmleve").hide();
        });
    });
</script>

  <script type="text/javascript">
   $(function(){
        $("#vamas").click(function(){
        $('#vamastext').val('');
        $( ".vamas" ).toggle();

        });
    });
</script>
<script type="text/javascript">
   $(function(){
        $("#vaconservada").click(function(){
        $("#valevetext").val('');
        $('.valeve').hide();  
        $("#vamoderadatext").val('');
        $('.vamoderada').hide();
        $("#vaseveratext").val('');
        $('.vasevera').hide();

        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#valeve").click(function(){
        $("#valevetext").val('');
        $( ".valeve" ).toggle();
        $("#vamoderadatext").val('');
        $('.vamoderada').hide();
        $("#vaseveratext").val('');
        $(".vasevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vamoderada").click(function(){
        $("#vamoderadatext").val('');
        $( ".vamoderada" ).toggle();
        $("#valevetext").val('');
        $('.valeve').hide();
        $("#vaseveratext").val('');
        $(".vasevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vasevera").click(function(){
        $("#vaseveratext").val('');  
        $( ".vasevera" ).toggle();
        $("#vamoderadatext").val('');
        $('.vamoderada').hide();
        $("#valevetext").val('');
        $(".valeve").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vpmas").click(function(){
        $('#vpmastext').val('');
        $( ".vpmas" ).toggle();

        });
    });
</script>
<script type="text/javascript">
   $(function(){
        $("#vpconservada").click(function(){
        $("#vplevetext").val('');
        $('.vpleve').hide();  
        $("#vpmoderadatext").val('');
        $('.vpmoderada').hide();
        $("#vpseveratext").val('');
        $('.vpsevera').hide();

        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vpleve").click(function(){
        $("#vplevetext").val('');
        $( ".vpleve" ).toggle();
        $("#vpmoderadatext").val('');
        $('.vpmoderada').hide();
        $("#vpseveratext").val('');
        $(".vpsevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vpmoderada").click(function(){
        $("#vpmoderadatext").val('');
        $( ".vpmoderada" ).toggle();
        $("#vplevetext").val('');
        $('.vpleve').hide();
        $("#vpseveratext").val('');
        $(".vpsevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vpsevera").click(function(){
        $("#vpseveratext").val('');  
        $( ".vpsevera" ).toggle();
        $("#vpmoderadatext").val('');
        $('.vpmoderada').hide();
        $("#vplevetext").val('');
        $(".vpleve").hide();
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#vtmas").click(function(){
        $('#vtmastext').val('');
        $( ".vtmas" ).toggle();

        });
    });
</script>
<script type="text/javascript">
   $(function(){
        $("#vtconservada").click(function(){
        $("#vtlevetext").val('');
        $('.vtleve').hide();  
        $("#vtmoderadatext").val('');
        $('.vtmoderada').hide();
        $("#vtseveratext").val('');
        $('.vtsevera').hide();

        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vtleve").click(function(){
        $("#vtlevetext").val('');
        $( ".vtleve" ).toggle();
        $("#vtmoderadatext").val('');
        $('.vtmoderada').hide();
        $("#vtseveratext").val('');
        $(".vtsevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vtmoderada").click(function(){
        $("#vtmoderadatext").val('');
        $( ".vtmoderada" ).toggle();
        $("#vtlevetext").val('');
        $('.vtleve').hide();
        $("#vtseveratext").val('');
        $(".vtsevera").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#vtsevera").click(function(){
        $("#vtseveratext").val('');  
        $( ".vtsevera" ).toggle();
        $("#vtmoderadatext").val('');
        $('.vtmoderada').hide();
        $("#vtlevetext").val('');
        $(".vtleve").hide();
        });
    });
</script>
<script type="text/javascript">
   $(function(){
        $("#pemas").click(function(){
        $('#pemastext').val('');
        $( ".pemas" ).toggle();

        });
    });
</script>
<script type="text/javascript">
   $(function(){
        $("#pelibre").click(function(){
        $("#pelevetext").val('');
        $('.peleve').hide();  
        $("#pemoderadotext").val('');
        $('.pemoderado').hide();
        $("#peseverotext").val('');
        $('.pesevero').hide();

        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#peleve").click(function(){
        $("#pelevetext").val('');
        $( ".peleve" ).toggle();
        $("#pemoderadotext").val('');
        $('.pemoderado').hide();
        $("#peseverotext").val('');
        $(".pesevero").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#pemoderado").click(function(){
        $("#pemoderadotext").val('');
        $( ".pemoderado" ).toggle();
        $("#pelevetext").val('');
        $('.peleve').hide();
        $("#peseverotext").val('');
        $(".pesevero").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#pesevero").click(function(){
        $("#peseverotext").val('');  
        $( ".pesevero" ).toggle();
        $("#pemoderadotext").val('');
        $('.pemoderado').hide();
        $("#pelevetext").val('');
        $(".peleve").hide();
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#aamas").click(function(){
        $('#aamastext').val('');
        $( ".aamas" ).toggle();

        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#cdmas").click(function(){
        $('#cdmastext').val('');
        $( ".cdmas" ).toggle();

        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#fsmas").click(function(){
        $('#fsmastext').val('');
        $( ".fsmas" ).toggle();

        });
    });
</script>
<script type="text/javascript">
  function myFunction() {
    window.print();
}
</script>
</head>

<body>
 
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container" id="box" style="background-color: white;display: none">
  <div class="row well" style="background-color: white">
   
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="flex-container">


  
     <div class="flex-item-right">
<strong style="font-size: 20px;text-align: right;">Consultorio Dr. Lucio T. Padilla</strong>
</div> <br>
 <div class="flex-item-left">
<strong style="font-size: 18px">ECOCARDIOGRAMA DOPPLER</strong><br><strong style="color:#ff6600;font-size: 18px"> COLOR</strong></div>

 
      </div>
     
  </header>

 

  <main id="main" style="background-color: white">


 <section id="servicios" class="services" style="width: 80%;margin-left: 10%">



     
<div class="flex-container">
<div class="flex-item-left" style="background-color: white;text-align: left;">

<b><label for="usr" style="text-decoration:underline" name="nombreyapellido">NOMBRE Y APELLIDO:{{ $nombreyapellido ?? '' }}</label></b><br>
<b><label for="usr" style="text-decoration:underline" name="fecha">FECHA:</label>{{ $fecha ?? '' }}</b><br>
</div>

  <div class="flex-item-right" style="background-color: white;text-align: left;">

 
 <b><label for="usr" style="text-decoration:underline" name="peso">Peso:</label>{{ $peso ?? '' }}</b><br>
 <b><label for="usr" style="text-decoration:underline" name="altura">Altura (cm):</label>{{ $altura ?? '' }}</b><br>
 <b><label for="usr" style="text-decoration:underline" name="superficiecorporal">Superficie Corporal:</label>{{ $supcorporaltext ?? '' }}</b><br>
  </div></div>

  <div class="flex-container">
  
  <div class="flex-item-right">
      <table>
              <tr>
              <td><p ><b>DDVI (mm)</b></p><br></td>
              <td><p ><b>DSVI (mm)</b></p><br></td>
              <td><p ><b>FEY (%)</strong></b></p><br></td></tr>
              

              <tr>
               <td> <label>{{ $ddvi ?? '' }}</label><br><br></td>
               <td> <label> {{ $dsvi ?? '' }}</label><br><br></td>
               <td> <label> {{ $fey ?? '' }}</label><br><br></td></tr>
               

              </table>
  </div>
  <div class="flex-item-left">
     <table><tr>
             <td><p ><b>FAC (%)</b></p></td>
             <td> <p ><b>Septum (mm).</b></p></td>
             <td> <p ><b>Pared <br>posterior (mm)</b></p></td></tr>
             
           <tr>
            <td> <label>{{ $factext ?? '' }} </label><br><br></td>
            <td><label>{{ $septum ?? '' }}</label><br><br></td>
            <td><label>{{ $pp ?? '' }}</label><br><br></td></tr>           
           </table>
  </div>
  <div class="flex-item-right">
      <table><tr>
            <td> <p ><b>AO (mm).</b></p><br></td>
             <td> <p ><b>AI (mm)</b></p><br></td>
             <td> <p ><b>VD (mm)</b></p><br></td></tr>
             <tr>
            <td><label>{{ $ao ?? '' }}</label><br><br></td>
            <td><label>{{ $aitabla ?? '' }}</label><br><br></td>
            <td><label>{{ $vd ?? '' }}</label><br><br></td></tr>
             
           </table>
  </div>
</div><br><br>
   <div class="flex-container">
   <div class="flex-item-left">
    <div>
             <strong style="font-size: 15px; text-decoration:underline;"> Válvula Aórtica</strong>
            </div> 

              <div>
              <table><tr>
              <td><label style="height: 30px">Vel Pico (m/seg.)</label></td>
              <td><label style="width: 30px">{{ $aorticavelpico ?? '' }}</label></td></tr>
              
              <tr><td><label style="height: 30px">Gde. Pico (mmHg)</label></td>
              <td><label style="height: 30px">{{ $aorticapico ?? '' }}</label></td></tr>

              <tr><td><label style="height: 30px">Gdte Medio (mmHg)</label></td>
              <td><label style="height: 30px">{{ $aorticamedio ?? '' }}</label></td></tr>

              <tr><td><label>Area Valvular (cm2)</label></td>
              <td><label>{{ $aorticaarea ?? '' }}</label></td></tr>

              <tr><td><label>Insuficiencia</label></td>               
              <td><label>{{ $aorticainsuficiencia ?? '' }}</label></td></tr></table></div>
   </div>

  <div class="flex-item-right">
    <div>
               <strong style="font-size: 15px; text-decoration:underline;"> Válvula Pulmonar</strong>
            </div> 

               <div>
              <table><tr>
              <td><label style="height: 30px">Vel Pico (m/seg.)</label></td>
              <td><label  style="width: 30px">{{ $pulmonarvelpico ?? '' }}</label></td></tr>
              
              <tr><td><label style="height: 30px">Gde. Pico (mmHg)</label></td>
              <td><label style="height: 30px">{{ $pulmonarpico ?? '' }}</label></td></tr>

              <tr><td><label style="height: 30px">Gdte Medio (mmHg)</label></td>
              <td><label style="height: 30px">{{ $pulmonarmedio ?? '' }}</label></td></tr>

              <tr><td><label>Area Valvular (cm2)</label></td>
              <td><label>{{ $pulmonararea ?? '' }}</label></td></tr>

              <tr><td><label>Insuficiencia</label></td>               
              <td><label>{{ $pulmonarinsuficiencia ?? '' }}</label></td></tr></table></div>
   </div>

<div class="flex-item-left">
  <div>
              <strong style="font-size: 15px; text-decoration:underline;"> Válvula Mitral</strong>
            </div> 

               <div>
              <table><tr>
              <td><label style="height: 14px">Vel Pico E (m/seg.)</label></td>
              <td><label style="height: 14px" >{{ $mitralvelpicoe ?? '' }}</label></td></tr>

               <td><label style="height: 14px">Vel Pico A (m/seg.)</label></td>
              <td><label style="height: 14px">{{ $mitralvelpicoa ?? '' }}</label></td></tr>
              
              <tr><td><label>Gde. Pico (mmHg)</label></td>
              <td><label>{{ $mitralpico ?? '' }}</label></td></tr>

              <tr><td><label>Gdte Medio (mmHg)</label></td>
              <td><label>{{ $mitralmedio ?? '' }}</label></td></tr>

              <tr><td><label>Area Valvular (cm2)</label></td>
              <td><label>{{ $mitralarea ?? '' }}</label></td></tr>

              <tr><td><label >Insuficiencia</label></td>               
              <td><label>{{ $mitralinsuficiencia ?? '' }}</label></td></tr></table></div>
   </div>

  <div class="flex-item-right">
     <div>
          <strong style="font-size: 15px; text-decoration:underline;"> Válvula Tricúspide</strong>
            </div> 

               <div>
              <table><tr>
              <td><label style="height: 14px">Vel Pico E (m/seg.)</label></td>
              <td><label  style="height: 14px">{{ $tricuspidevelpicoe ?? '' }}</label></td></tr>

              <td><label style="height: 14px">Vel Pico A (m/seg.)</label></td>
              <td><label style="height: 14px">{{ $tricuspidevelpicoa ?? '' }}</label></td></tr>
              
              <tr><td><label>Gde. Pico (mmHg)</label></td>
              <td><label>{{ $tricuspidepico ?? '' }}</label></td></tr>

              <tr><td><label>Gdte Medio (mmHg)</label></td>
              <td><label>{{ $tricuspidemedio ?? '' }}</label></td></tr>

              <tr><td><label>Area Valvular (cm2)</label></td>
              <td><label>{{ $tricuspidearea ?? '' }}</label></td></tr>

              <tr><td><label>Insuficiencia</label></td>               
              <td><label>{{ $tricuspideinsuficiencia ?? '' }}</label></td></tr></table></div>
   </div>
</div>
</div><br><br><br>
<!--VENTRICULO IZQUIERDO-->
<div> <strong style="font-size: 15px;text-decoration:underline">Ventrículo Izquierdo: </strong><strong style="font-size: 15px">Espesor parietal: </strong><label style="font-size: 15px">{{$ep ?? ''}}{{ $epmastext ?? '' }}{{ $epd ?? '' }}{{ $vidmastext ?? '' }}</label><strong style="font-size: 15px">Motilidad Parietal: </strong><label style="font-size: 15px">{{$asinergiastext ?? ''}}{{ $epdmastext ?? '' }}</label></div>        
  
  <!--FUNCION SISTOLICA DEL VENTRICULO IZQUIERDO-->    

<div> 
@if($fsvi=='normal ')
  <strong style="font-size: 15px;text-decoration:underline">Función Sistólica del Ventrículo Izquierdo: </strong><label style="font-size: 15px">{{$fsvi ?? ''}}{{': '}}{{$fsvinormaltext ?? ''}}{{'%. '}}{{ $fsvimastext ?? '' }}</label>
  @endif
</div> 

 <div> 
@if($fsvi=='deprimida ')
  <strong style="font-size: 15px;text-decoration:underline">Función Sistólica del Ventrículo Izquierdo: </strong><label style="font-size: 15px">{{$fsvi ?? ''}}{{': '}}{{$fsvideprimidatext ?? ''}}{{'%. '}}{{ $fsvimastext ?? '' }}</label>
  @endif
</div> 

<script type="text/javascript">
  function operacionsupcorporal(a,b){
    if(a>0&&b>0){
     var value=Math.sqrt(a*b/3600).toFixed(2); 
   
   $("#supcorporaltext").val(value);
     
}else{alert('Debe ingresar Valores de Peso y Altura');
 }
}
</script>
<script type="text/javascript">
  jQuery('#supcorporal').click(function(){
     var peso= parseInt(jQuery('#peso').val(),10); 
     var altura= parseInt(jQuery('#altura').val(),10); 
     operacionsupcorporal(peso,altura); 
});
</script>


  <script type="text/javascript">
  function operacion(a,b){
    if(a>0&&b>0){
     var value=((a-b)/a).toFixed(2); 
   
   $("#factext").val(value);
     
}else{alert('Debe ingresar Valores de ddvi y dsvi');
 }
}
</script>
<script type="text/javascript">
  jQuery('#fac').click(function(){
     var ddvi= parseInt(jQuery('#ddvi').val(),10); 
     var dsvi= parseInt(jQuery('#dsvi').val(),10); 
     operacion(ddvi,dsvi); 
});
</script>

<!--AURICULA IZQUIERDA-->
<div>
  @if($ai!=='dimensiones conservadas. ')
<strong style="font-size: 15px;text-decoration:underline">Aurícula Izquierda: </strong><label style="font-size: 15px">{{$ai ?? ''}}{{ $ailevetext ?? '' }}{{ $aimoderadatext ?? '' }}{{ $aiseveratext ?? '' }}{{'ml/m2. '}}{{ $aimastext ?? '' }}</label>
@else
<strong style="font-size: 15px;text-decoration:underline">Aurícula Izquierda: </strong><label style="font-size: 15px">{{$ai ?? ''}}</label>
@endif
</div>


   <!--VALVULA MITRAL-->
<div>
<strong style="font-size: 15px;text-decoration:underline">Válvula Mitral: </strong><label style="font-size: 15px">{{ $vm ?? '' }}{{ $vmmastext ?? '' }}</label>
</div> 


 <!--VALVULA AORTICA-->

<div>
<strong style="font-size: 15px;text-decoration:underline">Valvula Aórtica: </strong><label style="font-size: 15px">{{ $va ?? '' }}{{ $vamastext ?? '' }}</label>
</div>

<!--AORTA ASCENDENTE-->
 <div>
<strong style="font-size: 15px;text-decoration:underline">Aorta Ascendente: </strong><label style="font-size: 15px">{{$aa ?? ''}}{{ $aamastext ?? '' }}</label>
</div> 

<!--CAVIDADES DERECHAS-->
<!--función sistólica-->
<div>
<strong style="font-size: 15px;text-decoration:underline">Cavidades Derechas: </strong><label style="font-size: 15px">{{$cd ?? ''}}{{ $cdmastext ?? '' }}</label>
</div>


<div>
  @if($fs=='normal TAPSE mm. ')
<strong style="font-size: 15px;text-decoration:underline">Función sistólica del Ventrículo Derecho: </strong><label style="font-size: 15px">{{$fs ?? ''}}{{' : '}}{{$fsnormaltext ?? ''}}{{'mm'}}{{ $fsmastext ?? '' }}</label><br>
@endif
  @if($fs=='deprimida TAPSE mm. ')
<strong style="font-size: 15px;text-decoration:underline">Función sistólica del Ventrículo Derecho: </strong><label style="font-size: 15px">{{$fs ?? ''}}{{' : '}}{{$fsdeprimidatext ?? ''}}{{'mm'}}{{ $fsmastext ?? '' }}</label><br>
@endif
</div>

<div>
<strong style="font-size: 15px;text-decoration:underline">Presión Sistólica de la Arteria Pulmonar: </strong><label style="font-size: 15px">{{$ps ?? ''}}{{$psestimatext ?? ''}}{{'mmHg'}}</label><br>
</div>

<div>
<strong style="font-size: 15px;text-decoration:underline">VCI: </strong><label style="font-size: 15px">{{$vci ?? ''}}{{ $vcid ?? '' }}{{ $vcimastext ?? '' }}</label>
</div>

       

  <!--VALVULA PULMONAR-->
<div>
<strong style="font-size: 15px;text-decoration:underline">Válvula Pulmonar: </strong><label style="font-size: 15px">{{ $vp ?? '' }}{{ $vpmastext ?? '' }}</label>
</div>
  <!--VALVULA TRICUSPIDE-->
  <div>
<strong style="font-size: 15px;text-decoration:underline">Válvula Tricúspide: </strong><label style="font-size: 15px">{{ $vt ?? '' }}{{ $vtmastext ?? '' }}</label>
</div>


<!--PERICARDIO-->

  <div>
<strong style="font-size: 15px;text-decoration:underline">Pericardio: </strong><label style="font-size: 15px">{{$pe ?? ''}}{{ $pemastext ?? '' }}</label>
</div>





       


  <div style="text-align: center;margin-top: 5%">
  <label for="usr" style="font-size: 16px;text-decoration:underline;text-align: center">Conclusiones:</label><br>
  </div>

<!--VENTRICULO IZQUIERDO-->

 @if(($ep!=='normal. ')||($epd!=='dimensiones conservadas. ')||($mp=='si'))
   <strong style="font-size: 15px">Ventrículo Izquierdo: </strong><strong style="font-size: 15px">Espesor parietal:</strong><label style="font-size: 15px">{{$ep ?? ''}}{{ $epmastext ?? '' }}{{ $epd ?? '' }}{{ $vidmastext ?? '' }}</label><strong style="font-size: 15px">Motilidad Parietal: </strong><label style="font-size: 15px">{{$asinergiastext ?? ''}}{{ $epdmastext ?? '' }}</label></div><br>
    @endif

@if($fsvi=='deprimida ')
<div> <strong style="font-size: 15px">Función Sistólica del Ventrículo Izquierdo: </strong><label style="font-size: 15px">{{$fsvi ?? ''}}{{'. '}}{{ $fsvimastext ?? '' }}</label>
@endif

  @if($epd!=='dimensiones conservadas. ')
 <label style="font-size: 15px"> {{$epd ?? ''}}{{ $epdmastext ?? '' }}</label><br>
  @endif

  @if($mp=='si')
  <strong style="font-size: 15px">Motilidad Parietal:</b><label style="font-size: 15px">{{$asinergiastext ?? ''}}{{ $epdmastext ?? '' }}</label><br>
 @endif
 
 <!--AURICULA IZQUIERDA-->

@if($ai!=='dimensiones conservadas. ')
<strong style="font-size: 15px">Aurícula Izquierda: </strong><label style="font-size: 15px">{{ $ai ?? '' }}{{ $aimastext ?? '' }}</label><br>
@endif



   <!--VALVULA MITRAL-->


@if($vm=='no')
<strong style="font-size: 15px">Válvula Mitral: </strong><label style="font-size: 15px">{{ $vmmastext ?? '' }}</label><br>
@endif

 <!--VALVULA AORTICA-->

@if($va=='no')
<strong style="font-size: 15px">Válvula Aórtica: </strong>{{ $vamastext ?? '' }}</label><br>
@endif

<!--AORTA ASCENDENTE-->
@if($aa=='dilatada. ')
<strong style="font-size: 15px">Aorta Ascendente: </strong><label style="font-size: 15px">{{$aa ?? ''}}{{ $aamastext ?? '' }}</label><br>
@endif
<!--CAVIDADES DERECHAS-->
<!--función sistólica-->
<div>
@if($cd!=='dimensiones conservadas. ')
<strong style="font-size: 15px">Cavidades Derechas: </strong><label style="font-size: 15px">{{$cd ?? ''}}{{ $cdmastext ?? '' }}</label>
@endif
@if($fs!=='normal TAPSE mm. ')
<strong style="font-size: 15px">Función sistólica del Ventrículo Derecho: </strong><label style="font-size: 15px">{{$fs ?? ''}}{{ $fsmastext ?? '' }}</label><br>
@endif
@if($ps!=='se estima. ')
<strong style="font-size: 15px">Presión Sistólica de la Arteria Pulmonar: </strong><label style="font-size: 15px">{{$ps ?? ''}}{{$psestimatext ?? ''}}{{'mmHg'}}</label><br>@endif

@if($vci=='dilatada. ')
<strong style="font-size: 15px">VCI: </strong><label style="font-size: 15px">{{$vcid ?? ''}}</label>
@endif


@if(($vci=='dilatada. ')||($vci=='diámetro normal. '))
 
<label>{{ $vcimastext ?? '' }}</label>
@endif


  <!--VALVULA PULMONAR-->
@if($vp=='no')
<strong style="font-size: 15px">Válvula Pulmonar: </strong>{{ $vpmastext ?? '' }}</label><br>
@endif>
  <!--VALVULA TRICUSPIDE-->
@if($vt=='no')
<strong style="font-size: 15px">Válvula Tricúspide: </strong>{{ $vtmastext ?? '' }}</label><br>
@endif

<!--PERICARDIO-->

@if($pe!=='libre. ')

<strong style="font-size: 15px">Pericardio: </strong><label style="font-size: 15px">{{$pe ?? ''}}{{ $pemastext ?? '' }}</label>
@endif
  <div style="text-align: center;margin-top: 5%">
    <p style="text-decoration-line: underline;">...........................................................................................................................................................................................</p>
<strong style="font-size: 15px">  Barrientos 1566 10  “D” - Ciudad Autonoma de Buenos Aires – Argentina.(011) 4803-3394</strong> 
<br>
<strong style="font-size: 15px">consultoriotpadilla@yahoo.com.ar</strong>
</p></div><br><br>


     <center>
             <button  style="width: 100%;height: 50px;font-size: 30px;background-color: #ff6600;border: solid 0.1px background-color: #ff6600" class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true" ></span> Imprimir</button>
      </center>
        
  </div>
</div> <br><br>  

 </section>
   

</html>

  <!-- ======= Footer ======= -->
  

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

