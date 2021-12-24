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
        $("#vidmas").click(function(){
        $('#vidmastext').val('');
        $( ".vidmas" ).toggle();

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
        $("#vmmassi").click(function(){
        $("#vmmastext").hide();  
        $('#vmmastext').val('');
        

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
        $("#vamassi").click(function(){
        $("#vamastext").hide();
        $('#vamastext').val('');
         

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
        $("#vpmassi").click(function(){
        $("#vpmastext").hide();
        $('#vpmastext').val('');

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
        $("#vtmassi").click(function(){
        $("#vtmastext").hide();
        $('#vtmastext').val('');
         
      

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
   $(function(){
        $("#fsnormal").click(function(){
        $("#fsdeprimidatext").val('');
        $('.fsdeprimida').hide();  
        $( ".fsnormal" ).toggle();

        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#fsdeprimida").click(function(){
        $("#fsnormaltext").val('');
        $( ".fsnormal" ).hide();
        $( ".fsdeprimida" ).toggle();
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#psestima").click(function(){
        $("#psnoestimatext").val('');
        $( ".psnoestima" ).hide();
        $("#psestimatext").val('');
        $( ".psestima" ).toggle();
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#psnoestima").click(function(){
        $("#psestimatext").val('');
        $( ".psestima" ).hide();
        $("#psnoestimatext").val('');
        $( ".psnoestima" ).togle();
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#vcidilatada").click(function(){      
        $( ".vcidilatada" ).toggle();
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#vcinormal").click(function(){
                $("#vcinormaltext").val('');
        $( ".vcinormal" ).toggle();
        
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#vcimas").click(function(){
        $("#vcimastext").val('');
        $( ".vcimas" ).toggle();
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#fsvimas").click(function(){
        $("#fsvimastext").val('');
        $( ".fsvimas" ).toggle();
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#fsvinormal").click(function(){
        $("#fsvideprimidatext").val('');
        $(".fsvideprimida").hide();
        $("#fsvinormaltext").val('');
        $( ".fsvinormal" ).toggle();
       
        });
    });
</script>

 <script type="text/javascript">
   $(function(){
        $("#fsvideprimida").click(function(){
        $("#fsvinormaltext").val('');
        $(".fsvinormal").hide();
        $("#fsvideprimidatext").val('');
        $( ".fsvideprimida" ).toggle();
       
        });
    });
</script>
 <script type="text/javascript">
   $(function(){
        $("#informe").click(function(){
        $("#enviar")[0].reset();
        

        });
    });
</script>
<script>
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="nombreyapellido"
    $('#nombreyapellido').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#nombreyapellido').val(finalResult);
            }
        }
    };
});
</script>

<script>
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="peso"
    $('#peso').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#peso').val(finalResult);
            }
        }
    };
});
</script>
<script>
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="altura"
    $('#altura').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#altura').val(finalResult);
            }
        }
    };
});
</script>
<script>
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="ddvi"
    $('#ddvi').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#ddvi').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="numerodocumento"
    $('#numerodocumento').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#numerodocumento').val(finalResult);
            }
        }
    };
});
</script>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">infoimagenes@gmail.com</a>
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
  </section>

  <!-- ======= Header ======= -->
  <header id="header"  style="height: 120px">

    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light" ><a href="index.html"><span style="color:#ff6600">INFOIMAGENES</span><br><span style="font-size: 0.50em">Soluciones Tecnológicas al Servicio de la Salud</span></a></h1>
        
      </div>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

 

  <main id="main">

    <!-- ======= Quiénes Somos Section ======= -->
   

       <!-- ======= Services Section ======= -->

    <section id="servicios" class="services">
      <div class="container" style="">   
<h2 style="text-align: center">ECOCARDIOGRAMA DOPPLER<strong style="color:#ff6600"> COLOR</strong> </h2><br>
<div class="row" style=";display: flex;justify-content: center;">  
<div class="col-lg-6 col-md-6" style="">

        
       <button class="btn btn-success" id="informe" style="width: 100%;margin-left: 2%;color: white;background-color:#ff6600;border:solid 0.1px black;height: 30px;"><b style="font-size: 15px;line-height: 4px">NUEVO INFORME</b></button><br>

      

  </div>
</div>
</div>
</section>
<div class="nuevoinforme" id="nuevoinforme" style="">
    <section id="servicios" class="services">
<div class="container" style="">   

<div class="row" style=";display: flex;justify-content: center;">  
<div class="col-lg-6 col-md-6" style="">
<div class="icon-box" style="border-radius: 5%;padding-left:110px;padding-right:100px;padding-bottom: 20px;padding-top: 20px" >  

<form class="" id="enviar" action="/informeprueba" method="post" >
{{csrf_field()}}

  <label for="usr" style="text-decoration:underline">NOMBRE Y APELLIDO:</label><br>
  <input type="text" class="form-control" required id="nombreyapellido" name="nombreyapellido" style="width: 100%;text-align: center;height: 30px;margin:-1%"><br>

  <label for="usr" style="text-decoration:underline">NUMERO DE DOCUMENTO:</label><br>
  <input type="text" class="form-control" required id="numerodocumento" name="numerodocumento" style="width: 100%;text-align: center;height: 30px;margin:-1%"><br>

  <label for="usr" style="text-decoration:underline;">FECHA:</label><br>
  <input type="date" class="form-control" required name="fecha" style="width: 100%;height: 30px;margin:-1%"><br>

  <label for="usr" style="text-decoration:underline">Peso (Kg):</label><br> 
  <input type="text" class="form-control" required id="peso" style="width: 100%;text-align: center;height: 30px;margin:-1%"name="peso" id="peso"><br>
  <label for="usr" style="text-decoration:underline">Altura (cm):</label><br>
  <input type="text" class="form-control" required id="altura"style="width: 100%;text-align: center;height: 30px;margin:-1%"name="altura" id="altura"><br>
  <input type="text" id="supcorporaltext"name="supcorporaltext" required style="width: 100%;border-radius: 7px;text-align: center;height: 30px;margin:-1%"><br><br>
  
  <input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;height: 30px;margin:-1%;background-color:#ff6600;border:solid 0.1px black" type="button" id="supcorporal" value="Superficie Corporal">

 
</div></div></div></div>
<br><br>



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
<script>
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="dsvi"
    $('#dsvi').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#dsvi').val(finalResult);
            }
        }
    };
});
</script>
<script>
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="fey"
    $('#fey').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#fey').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="septum"
    $('#septum').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#septum').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="pptabla"
    $('#pptabla').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#pptabla').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aotabla"
    $('#aotabla').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aotabla').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aitabla"
    $('#aitabla').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aitabla').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="vdtabla"
    $('#vdtabla').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#vdtabla').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aorticavelpico"
    $('#aorticavelpico').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aorticavelpico').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aorticapico"
    $('#aorticapico').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aorticapico').val(finalResult);
            }
        }
    };
});


$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aorticamedio"
    $('#aorticamedio').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aorticamedio').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aorticaarea"
    $('#aorticaarea').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aorticaarea').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="pulmonarvelpico"
    $('#pulmonarvelpico').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#pulmonarvelpico').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="pulmonarpico"
    $('#pulmonarpico').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#pulmonarpico').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="pulmonarmedio"
    $('#pulmonarmedio').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#pulmonarmedio').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="pulmonararea"
    $('#pulmonararea').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#pulmonararea').val(finalResult);
            }
        }
    };
});



$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="mitralvelpicoe"
    $('#mitralvelpicoe').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#mitralvelpicoe').val(finalResult);
            }
        }
    };
});


$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="mitralvelpicoa"
    $('#mitralvelpicoa').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#mitralvelpicoa').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="mitralpico"
    $('#mitralpico').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#mitralpico').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="mitralmedio"
    $('#mitralmedio').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#mitralmedio').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="mitralarea"
    $('#mitralarea').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#mitralarea').val(finalResult);
            }
        }
    };
});
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="tricuspidevelpicoe"
    $('#tricuspidevelpicoe').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#tricuspidevelpicoe').val(finalResult);
            }
        }
    };
});


$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="tricuspidevelpicoa"
    $('#tricuspidevelpicoa').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#tricuspidevelpicoa').val(finalResult);
            }
        }
    };
});
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="tricuspidepico"
    $('#tricuspidepico').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#tricuspidepico').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="tricuspidemedio"
    $('#tricuspidemedio').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#tricuspidemedio').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="tricuspidearea"
    $('#tricuspidearea').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#tricuspidearea').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="vidmastext"
    $('#vidmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#vidmastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="epmastext"
    $('#epmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#epmastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="asinergiastext"
    $('#asinergiastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#asinergiastext').val(finalResult);
            }
        }
    };
});
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="epdmastext"
    $('#epdmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#epdmastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="fsvinormaltext"
    $('#fsvinormaltext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#fsvinormaltext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="fsvideprimidatext"
    $('#fsvideprimidatext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#fsvideprimidatext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="fsvimastext"
    $('#fsvimastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#fsvimastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="vmmastext"
    $('#vmmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#vmmastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="ailevetext"
    $('#ailevetext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#ailevetext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aimoderadatext"
    $('#aimoderadatext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aimoderadatext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aiseveratext"
    $('#aiseveratext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aiseveratext').val(finalResult);
            }
        }
    };
});



















$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aimastext"
    $('#aimastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aimastext').val(finalResult);
            }
        }
    };
});
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="vamastext"
    $('#vamastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#vamastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="aamastext"
    $('#aamastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#aamastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="cdmastext"
    $('#cdmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#cdmastext').val(finalResult);
            }
        }
    };
});


$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="fsnormaltext"
    $('#fsnormaltext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#fsnormaltext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="fsdeprimidatext"
    $('#fsdeprimidatext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#fsdeprimidatext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="fsmastext"
    $('#fsmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#fsmastext').val(finalResult);
            }
        }
    };
});
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="psestimatext"
    $('#psestimatext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#psestimatext').val(finalResult);
            }
        }
    };
});
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="vcimastext"
    $('#vcimastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#vcimastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="vpmastext"
    $('#vpmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#vpmastext').val(finalResult);
            }
        }
    };
});

$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="vtmastext"
    $('#vtmastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#vtmastext').val(finalResult);
            }
        }
    };
});



$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es"; name="pemastext"
    $('#pemastext').click(function(event) {
        recognition.start();
    });
       recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#pemastext').val(finalResult);
            }
        }
    };
});
</script>


</section><!-- End Services Section -->
 
    
       <!-- ======= Services Section ======= -->
  <!-- ======= Services Section ======= -->
    <section id="servicios" class="services" style="margin-top: -8%">
       
      <div class="container" style="">
      

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >   
            <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>DDVI (mm)</b></p>
              <p><b><input type="text" class="form-control" name="ddvi"id="ddvi"style="font-size: 20px;text-align: center;height: 30px"></p></b></div>

              <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>DSVI (mm)</b></p>
              <p><b><input type="text" class="form-control" name="dsvi"id="dsvi"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

               <div>
               <p style="font-size: 20px;margin-bottom: 1px"><b>FEY (%)</b></p>
               <p><b><input type="text" class="form-control" name="fey"id="fey" style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>FAC (%)</b></p>
              <p><b><input type="text" class="form-control" id="factext" name="factext" style="font-size: 20px;text-align: center;height: 30px"></b></p></div><br>
                           
 <p><b><input  style=" border: 1px solid black;width: 100%;text-decoration:underline;border-radius: 7px;background-color:#ff6600;border:solid 0.1px black" type="button" name="" id="fac" value="FAC"></b></p>
            </div>
           </div>

           <div class="col-lg-4 col-md-6">
            <div class="icon-box" style="border-radius: 5%;padding: 15px">
            <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>Septum (mm).</b></p>
              <p><b><input type="text" class="form-control" name="septum"id="septum"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>Pared posterior (mm)</b></p>
              <p><b><input type="text" class="form-control" name="pp"id="pptabla"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              

              <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>AO (mm).</b></p>
              <p><b><input type="text" class="form-control" name="ao"id="aotabla"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>AI (mm)</b></p>
              <p><b><input type="text" class="form-control" name="aitabla" id="aitabla" style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              
              <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>VD (mm)</b></p>
              <p><b><input type="text" class="form-control" name="vd"id="vdtabla"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
               
               
            
          </div>

          

        </div>

      </div>

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
    </section><!-- End Services Section -->
 


  <!-- ======= Services Section ======= -->
  <!--VALVULAS-->
    <section id="servicios" class="services" style="margin-top: -8%">
       
  
        
     
      <div class="container" style="">
       

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  
            <div>
              <h4 style="font-size: 18px;text-align: center;"> Válvula Aórtica</h4>
            </div>           
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.)</b></p>
              <p><b><input type="text" class="form-control" name="aorticavelpico" id="aorticavelpico"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="aorticapico" id="aorticapico"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="aorticamedio"  id="aorticamedio"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Area Valvular (cm2)</b></p>
              <p><b><input type="text" class="form-control" name="aorticaarea" id="aorticaarea"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>

              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="aorticainsuficiencia" style="font-size: 20px;text-align: center;width: 100%;height: 30px">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p></div>

            </div>     
             

            </div>
          <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  
            <div>
              <h4 style="font-size: 18px;text-align: center"> Válvula Pulmonar</h4>
            </div>           
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.)</b></p>
              <p><b><input type="text" class="form-control" name="pulmonarvelpico" id="pulmonarvelpico"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size:15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="pulmonarpico" id="pulmonarpico"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="pulmonarmedio" id="pulmonarmedio"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
                <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Area Valvular (cm2)</b></p>
              <p><b><input type="text" class="form-control" name="pulmonararea" id="pulmonararea"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="pulmonarinsuficiencia" style="font-size: 15px;text-align: center;width: 100%">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p></div>

              </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->
   
    <!-- ======= Services Section ======= -->
    <section id="servicios" class="services">
        <div><br>

        
        </div>
      <div class="container" style="margin-top: -7%">
       

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  
            <div>
              <h4 style="font-size: 18px;text-align: center"> Válvula Mitral</h4>
            </div>           
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.)E</b></p>
              <p><b><input type="text" class="form-control" name="mitralvelpicoe" id="mitralvelpicoe"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.)A</b></p>
              <p><b><input type="text" class="form-control" name="mitralvelpicoa" id="mitralvelpicoa"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="mitralpico" id="mitralpico"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="mitralmedio" id="mitralmedio"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Area Valvular (cm2)</b></p>
              <p><b><input type="text" class="form-control" name="mitralarea" id="mitralarea"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 20px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="mitralinsuficiencia" style="font-size: 15px;text-align: center;width: 100%;height: 30px">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p></div>

            </div>     
             

            </div>
          <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;padding: 15px" >  
            <div>
              <h4 style="font-size: 18px;text-align: center"> Válvula Tricúspide</h4>
            </div>           
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.)E</b></p>
              <p><b><input type="text" class="form-control" name="tricuspidevelpicoe" id="tricuspidevelpicoe"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.)A</b></p>
              <p><b><input type="text" class="form-control" name="tricuspidevelpicoa" id="tricuspidevelpicoa"style="font-size: 15px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="tricuspidepico" id="tricuspidepico"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><b><input type="text" class="form-control" name="tricuspidemedio" id="tricuspidemedio"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Area Valvular (cm2)</b></p>
              <p><b><input type="text" class="form-control" name="tricuspidearea" id="tricuspidearea"style="font-size: 20px;text-align: center;height: 30px"></b></p></div>
              <div>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="tricuspideinsuficiencia" style="font-size: 15px;text-align: center;height: 30px;width: 100%">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p></div>

              </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->


<!--ACA COMNIENZA INFORME-->
<!--VENTRICULO IZQUIERDO-->
<section id="servicios" class="services">
        <div><br>

        
        </div>
      <div class="container" style="margin-top: -7%">
       

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" >  
            <div>
              <h4>Ventrículo Izquierdo:</h4>
            </div>     
              <div>
              <h5><b>Espesor parietal: </b></h5>
            </div>       
              <div>

               <input type="radio" style="" checked  name="ep" value="normal. ">
               <label style="font-size: 15px">normal</label></div>
             
             <div> <input type="radio" style=""  name="ep"  value="hipertrofia leve. ">
               <label style="font-size: 15px"> hipertrofia leve</label></div>

               <div><input type="radio" style=""  name="ep"  value="hipertrofia moderada. ">
               <label style="font-size: 15px"> hipertrofia moderada</label></div>

               <div><input type="radio" style=""  name="ep"  value="hipertrofia severa. ">
               <label style="font-size: 15px"> hipertrofia severa</label></div><br><br>
            <div>
           <button type="button" id="epmas" class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br></div>
               
                <div class="epmas" style="display: none">
                <input type="text" id="epmastext" name="epmastext" class="form-control"></div><br><br>
            </div>  
             

            </div>
          <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" >  
            <div>
              <h5><b>Dimensiones.</b></h5>
            </div>
           
            <div><input type="radio" style="" checked  name="epd"  value="dimensiones conservadas. ">
               <label style="font-size: 15px">conservadas</label></div>           
             <div>
               <input type="radio" style=""  name="epd" value="dimensiones levemente aumentadas. ">
               <label style="font-size: 15px">levemente aumentadas</label></div>
             
             <div> <input type="radio" style=""  name="epd" value="dimensiones moderadamente aumentadas. ">
               <label style="font-size: 15px"> moderadamente aumentadas</label></div>

               <div><input type="radio" style=""  name="epd"  value="dimensiones severamente aumentadas. ">
               <label style="font-size: 15px"> severamente aumentadas</label></div>

            <div>

            <button type="button" id="vidmas"class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br>
<div style="display: none" class="vidmas">
<input type="text" id="vidmastext" name="vidmastext" style="width: 800px;margin-left: 5px;width: 100%"  class="form-control"></div><br>





              <h5><b> Motilidad Parietal.</b></h5>
              <h6> <b>Asinergias regionales:</b></h6>
            </div>
            
             <div><input type="radio" style="" checked  name="mp"   value="normal. " onclick="asinergiano();">
               <label style="font-size: 15px">No</label></div>           
             <div>
               <input type="radio" style=""  name="mp"  value="si" onclick="asinergiasi();">
               <label style="font-size: 15px">Sí</label>

            <input type="text" name="asinergiastext" style="width: 100%;display: none" id="asinergiastext">


             </div><br>
                <div>
                <button type="button" id="epdmas" class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button></div><br>
               
                <div class="epdmas" style="display: none">
                <input type="text" id="epdmastext" name="epdmastext" class="form-control"></div>





<script type="text/javascript">
  function asinergiasi(){

     asinergias = document.getElementById("asinergiastext");
              asinergias.style.display = "block";
  }
  function asinergiano(){
    
              document.getElementById("asinergiastext").value = "";
               asinergias = document.getElementById("asinergiastext");
              asinergias.style.display = "none";
  }

</script>

              </div>
          </div>

             <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" > 

            <div>
              <h5><b>Función Sistólica del Ventrículo Izquierdo:</b></h5>
            </div>
            <div>

              <input type="radio" style="" checked  name="fsvi" id="fsvinormal" value="normal ">
               <label style="font-size: 15px">normal</label></div>

                <div class="fsvinormal" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="% fracción de eyección" id="fsvinormaltext" name="fsvinormaltext"></b></div>
            
            <div>
             <input type="radio" style=""   name="fsvi" id="fsvideprimida" value="deprimida ">
               <label style="font-size: 15px">deprimida</label></div>
             
            <div class="fsvideprimida" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="% fracción de eyección" id="fsvideprimidatext" name="fsvideprimidatext"></b></div><br>

            <div>
           <button type="button" id="fsvimas" class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br></div>
               
                <div class="fsvimas" style="display: none">
                <input type="text" id="fsvimastext" name="fsvimastext" class="form-control"></div><br><br><br><br><br><br><br>
        </div>
        </div>
        </div>
        </div>
    </section><!-- End Services Sectio
    <!--AURICULA IZQUIERDA-->
 <section id="servicios" class="services">
        <div><br>

        
        </div>
      <div class="container" style="margin-top: -7%">
       

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" >  
<label for="usr" style="font-size: 20px;">Aurícula Izquierda:</label><br>
<h5><b>Dimensiones:</b></h5>
<div>
<input type="radio" style="" checked name="ai" id="aiconservada" value="dimensiones conservadas. ">
<label for="" style="font-size: 15px;">Conservadas</label></div>
<div>
<input type="radio" style=""  name="ai" id="aileve" value="dimensiones levemente aumentadas. "><label style="font-size: 15px">Levemente aumentadas</label></div>

<div class="aileve" style="display: none">

<b><input type="text" style="width: 50%" placeholder="Volumen: ml/m2" id="ailevetext" name="ailevetext"></b></div>

<div>
<input type="radio" style=""  name="ai" id="aimoderada" value="dimensiones moderadamente aumentadas. "><label for="" style="font-size: 15px">Moderadamente aumentadas</label></div>

<div class="aimoderada" style="display: none">
<b><input type="text" style="width: 50%;" placeholder="Volumen: ml/m2" id="aimoderadatext" name="aimoderadatext"></b></div>


<div>
<input type="radio" style=""  name="ai" id="aisevera" value="dimensiones severamente aumentadas. "><label for="" style="">Severamente aumentadas</label></div>

<div class="aisevera" style="display: none">
<b><input type="text" style="width: 50%;" placeholder="Volumen: ml/m2" id="aiseveratext" name="aiseveratext"></div></b><br>

<button type="button" id="aimas"class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br>
<div style="display: none" class="aimas">
<input type="text" id="aimastext" name="aimastext" style="width: 800px;margin-left: 5px;width: 100%"  class="form-control"></div><br>


</div>
</div>

<div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" >

  <label for="usr" style="font-size: 20px;">Válvula Mitral:</label><br>

<div>

<strong for="" style="font-size: 15px;">Estructura y funcionalidad conservada. No se detecta regurgitación.</strong><br>

<input type="radio" style="" checked name="vm" id="vmmassi" value="Estructura y funcionalidad conservada. No se detecta regurgitación."><label>Sí</label><br>


<input type="radio" style=""  name="vm" id="vmmas" value="no"><label>No</label><br>


<div style="display: none" class="vmmas">
<input type="text" id="vmmastext" name="vmmastext" style="width: 800px;margin-left:2px;width: 100%"  class="form-control"></div>
<br><br><br><br><br><br>


</div>
</div>            

</div>
</div>

</section>


<section id="servicios" class="services">
        <div><br>

        
        </div>
      <div class="container" style="margin-top: -7%">
       

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" > 
       


<label for="usr" style="font-size: 20px;">Válvula Aórtica:</label><br>

<strong for="" style="font-size: 15px;">Estructura y funcionalidad conservada. No se detecta regurgitación.</strong><br>

<input type="radio" style=""  checked name="va" id="vamassi" value="Estructura y funcionalidad conservada. No se detecta regurgitación."><label>Sí</label><br>


<input type="radio" style=""  name="va" id="vamas" value="no"><label>No</label><br>

<div style="display: none" class="vamas">
<input type="text" id="vamastext" name="vamastext" style="width: 800px;margin-left: 2px;width: 100%"  class="form-control"></div><br>


</div>
</div>

 <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" > 
<label for="usr" style="font-size: 20px;">Aorta Ascendente:</label><br>
<div>
<input type="radio" style="" checked name="aa" id="aaconservada" value="diámetros conservados. "  >
<label for="" style="font-size: 15px;">Diámetros conservados</label></div>
<div>
<input type="radio" style=""  name="aa" id="aadilatada" value="dilatada. ">
<label style="font-size: 15px">Dilatada</label></div>

<button type="button" id="aamas"class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br><br>
<div style="display: none" class="aamas">
<input type="text" id="aamastext" name="aamastext" style="width: 800px;margin-left: 2px;width: 100%"  class="form-control"><br>

</div>
</div>
</div>
</div>
</section>









<!--CAVIDADES DERECHAS-->
<section id="servicios" class="services">
        <div><br>

        
        </div>
      <div class="container" style="margin-top: -7%">
       

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" >  
            <div>
              <h4>Cavidades derechas:</h4>
            </div>     
              <div>
              <h5><b>Dimensiones: </b></h5>
            </div>       
              <div>

               <input type="radio" style="" checked  name="cd" value="dimensiones conservadas. ">
               <label style="font-size: 15px">Conservadas</label></div>
             
             <div> <input type="radio" style=""  name="cd"  value="dimensiones levemente aumentadas. ">
               <label style="font-size: 15px"> Levemente dilatadas</label></div>

               <div><input type="radio" style=""  name="cd"  value="dimensiones moderadamente aumentadas. ">
               <label style="font-size: 15px"> Moderadamente dilatadas</label></div>

               <div><input type="radio" style=""  name="cd"  value="dimensiones severamente aumentadas.. ">
               <label style="font-size: 15px"> Severamente dilatadas</label></div><br><br>
            <div>
           <button type="button" id="cdmas" class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br></div><br>
               
                <div class="cdmas" style="display: none">
                <input type="text" id="cdmastext" name="cdmastext" class="form-control"></div><br><br>
            </div>  
            </div>
        

         <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" >  
            <div>
              <h4>Función sistólica del Ventrículo Derecho:</h4>
            </div>     
                 
              <div>

               <input type="radio" style="" checked  name="fs" id="fsnormal" value="normal TAPSE mm. ">
               <label style="font-size: 15px">normal (TAPSE mm)</label></div>
             
            <div class="fsnormal" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="mm (milímetros)" id="fsnormaltext" name="fsnormaltext"></b></div>


             <div> <input type="radio" style=""  name="fs" id="fsdeprimida" value="deprimida TAPSE mm. ">
               <label style="font-size: 15px"> deprimida (TAPSE mm)</label></div>

            <div class="fsdeprimida" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="mm (milímetros)" id="fsdeprimidatext" name="fsdeprimidatext"></b></div><br>
              

            <div>
           <button type="button" id="fsmas" class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br></div>
               
                <div class="fsmas" style="display: none">
                <input type="text" id="fsmastext" name="fsmastext" class="form-control"></div><br><br><br><br><br><br>
            </div>  
            </div>
          
 <div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" >  
            <div>
              <h4>Presión Sistólica de la Arteria Pulmonar</h4>
            </div>     
                 
              <div>

               <input type="radio" style="" checked  name="ps" id="psestima" value="se estima. ">
               <label style="font-size: 15px">Se estima</label></div>
             
            <div class="psestima" style="display: none">
            <b><input type="text" style="width: 50%" placeholder="mm Hg(milímetros de Mercurio)" id="psestimatext" name="psestimatext"></b></div>


             <div> <input type="radio" style=""  name="ps" id="psnoestima" value="no se puedo estimar. ">
               <label style="font-size: 15px">No se pudo estimar</label></div>

              <div>
              <h5><b>VCI:</b></h5>
            </div>
            <div>

              <input type="radio" style="" checked  name="vci" id="vcinormal" value="diámetro normal. ">
               <label style="font-size: 15px">diámetro normal</label></div>
            
            <div>
             <input type="radio" style=""   name="vci" id="vcidilatada" value="dilatada. ">
               <label style="font-size: 15px">dilatada</label></div>
             
            <div class="vcidilatada" style="display: none">

           <div>
             <input type="radio" style=""  name="vcid" id="vcidilatadamayor" value="colapso inspiratorio mayor a 50%. ">
               <label style="font-size: 15px">colapso inspiratorio mayor a 50%</label></div>

           <div>
             <input type="radio" style=""   name="vcid" id="vcidilatadamenor" value="colapso inspiratorio menor a 50%. ">
               <label style="font-size: 15px">colapso inspiratorio menor a 50%</label></div>

           </div><br>

            <div>
           <button type="button" id="vcimas" class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br></div>
               
                <div class="vcimas" style="display: none">
                <input type="text" id="vcimastext" name="vcimastext" class="form-control"></div><br>
            </div>  
            </div>
          

        </div>

      </div>

    </section><!-- End Services Sectio


    <!--VALVULA PULMONAR-->
 
<section id="servicios" class="services">
        <div><br>

        
        </div>
      <div class="container" style="margin-top: -7%">
       

        <div class="row" style=";display: flex;justify-content: center;">
         <div class="col-lg-4 col-md-3" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" > 
       



<label for="usr" style="font-size: 20px;">Válvula Pulmonar:</label><br>

<strong for="" style="font-size: 15px;">Estructura y funcionalidad conservada. No se detecta regurgitación.</strong><br>

<input type="radio" style="" checked name="vp" id="vpmassi" value="Estructura y funcionalidad conservada. No se detecta regurgitación."><label>Sí</label><br>


<input type="radio" style=""  name="vp" id="vpmas" value="no"><label>No</label><br>

<div style="display: none" class="vpmas">
<input type="text" id="vpmastext" name="vpmastext" style="width: 800px;margin-left: 2px;width: 100%"  class="form-control"></div><br><br><br><br><br>


</div>
</div>
<div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" > 
<label for="usr" style="font-size: 20px;">Válvula Tricúspide:</label><br>

<strong for="" style="font-size: 15px;">Estructura y funcionalidad conservada. No se detecta regurgitación.</strong><br>

<input type="radio" style="" checked  name="vt" id="vtmassi" value="Estructura y funcionalidad conservada. No se detecta regurgitación."><label>Sí</label><br>


<input type="radio" style=""  name="vt" id="vtmas" value="no"><label>No</label><br>

<div style="display: none" class="vtmas">
<input type="text" id="vtmastext" name="vtmastext" style="width: 800px;margin-left: 2px;width: 100%"  class="form-control"></div><br><br><br><br><br>


</div>
</div>

<div class="col-lg-4 col-md-6" style="">
            <div class="icon-box" style="border-radius: 5%;width: 100%;padding: 20px" > 
              <label for="usr" style="font-size: 20px;">Pericardio:</label><br>

<div>
<input type="radio" style="" checked name="pe" id="pelibre" value="libre. ">
<label for="" style="font-size: 15px;">Libre</label></div>
<div>
<input type="radio" style=""  name="pe" id="peleve" value="derrame pericárdico leve. "><label style="font-size: 15px">derrame pericárdico leve</label></div>

<div><input type="radio" style=""  name="pe" id="pemoderado" value="derrame pericárdico moderado. "><label for="" style="font-size: 15px">derrame pericárdico moderado</label></div>

<div><input type="radio" style=""  name="pe" id="pesevero" value="derrame pericárdico severo. "><label for="" style="">derrame pericárdico severo</label></div><br>

<button type="button" id="pemas"class="btn btn-success" style="margin-left: 5px;font-size: 20px;height: 30px;line-height: 0.1px;background-color:#ff6600;border:solid 0.1px black">...</button><br><br>
<div style="display: none" class="pemas">
<input type="text" id="pemastext" name="pemastext" style="width: 800px;margin-left: 2px;width: 100%"  class="form-control"></div><br>


</div>
</div>
</section>





 




<section id="servicios" class="services" style="margin-left: 10%">
       
<div class="container" style="margin-top: -7%">
       

     <div class="row" style="text-align: left;">
          <div class="col-lg-12 col-md-12">
               <div class="icon-box" style="border-radius: 5%;margin-left: -10% " > 

  <button type="submit" class="btn btn-success" style="width: 100%;margin-left: 2%;color: white;background-color:#ff6600;border:solid 0.1px black;height: 40px"><b style="font-size: 20px">INFORME</b></button><br>
->

</form>

</div>

 </section>
 
</div>

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

