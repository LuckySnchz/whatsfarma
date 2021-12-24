
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
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


</style>
</head>
<body>

<section class="container jumbotron shadow p-3 mb-5 bg-#eee rounded"style="height: 5000px;margin-left: 8.5%">
  <h2 style="text-align: center">ECOCARDIOGRAMA DOPPLER <strong style="color:orange">COLOR</strong></h2>
<div class="container" style="">
  <br><br>
  <div class="datos" style="margin-left: 20%">

  <label for="usr" style="text-decoration:underline">NOMBRE Y APELLIDO:</label><br>
  <input type="text" class="form-control" id="usr" style="width: 80%"><br>
  <label for="usr" style="text-decoration:underline">FECHA:</label><br>
  <input type="date" class="form-control" id="usr" style="width: 80%"><br>

  <table style=" border: 1px solid #eee">
  <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="text-decoration:underline">Peso:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 120%;margin-right: -150px;"id="peso"></th>
    <th style=" border: 1px solid #eee">Kg.</th> </tr>


     <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="text-decoration:underline">Altura:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 120%;margin-right: -150px;"id="altura"></th>
    <th style=" border: 1px solid #eee">cm.</th> </tr>

     <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="text-decoration:underline">SC:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 120%;margin-right: -150px;"id="supcorporal" onmouseenter="supcorporal();"></th>
    </tr>   
</table>
  
  <script type="text/javascript">
    function supcorporal() {

var peso = document.getElementById('peso').value;
var altura = document.getElementById('altura').value;
if(peso>0&&altura>0){
var supcorporal = Math.sqrt(peso*altura/3600);
var supcorporal= supcorporal.toFixed(2)
 $('#supcorporal').val(supcorporal);

}
}

  </script>
</div>
<br><br>
<!--
<div class="row" style="margin-left: -200px">
 
  <div class="col-sm-3" style="margin-bottom: 0.5px;text-align: right;"><b>Septum (mm)</b></div>
  <div class="col-sm-3" style="margin-bottom: 0.5px"><b><input type="text" class="form-control" id="septum"style=""></b></div>
  <div class="col-sm-3" style="margin-bottom: 0.5px;text-align: right;margin-left: -200px"><b>AO (mm)</b></div>
  <div class="col-sm-3" style="margin-bottom: 0.5px"><b><input type="text" class="form-control" id="ao"style=""></b></div>

  <div class="col-sm-3" style="margin-bottom: 0.5px;text-align: right"><b>Pared posterior (mm)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="pp"style=""></b></div>
  <div class="col-sm-3"style="margin-bottom: 0.5px;text-align: right;margin-left: -200px"><b>AI (mm)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="aitabla"style=""></b></div>
 
 <div class="col-sm-3" style="margin-bottom: 0.5px;text-align: right"><b>DDVI (mm)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="ddvi"style=""></div>
  <div class="col-sm-3"style="margin-bottom: 0.5px;text-align: right;margin-left: -200px"><b>FEY (%)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="fey"style=""></b></div>

  <div class="col-sm-3"style="margin-bottom: 0.5px;text-align: right"><b>DSVI (mm)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="dsvi"style=""></b></div>
  <div class="col-sm-3"style="margin-bottom: 0.5px;text-align: right;margin-left: -200px"><b>VD (mm)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="vd"style=""></b></div>

  <div class="col-sm-3"style="margin-bottom: 0.5px;text-align: right"><b>FAC (%)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="fac"
     onmouseenter="fac();"></b></div>

  <div class="col-sm-3"style="margin-bottom: 0.5px;text-align: right;margin-left: -200px"><b>PSAP (mmHg.)</b></div>
  <div class="col-sm-3"style="margin-bottom: 5px"><b><input type="text" class="form-control" id="psap"style=""></b></div>
 
</div>
<br><br>-->




  <script type="text/javascript">
    function fac() {
    
var ddvi = document.getElementById('ddvi').value;
var dsvi = document.getElementById('dsvi').value;
if(ddvi>0&&dsvi>0){
var fac = (ddvi-dsvi)/ddvi;
var fac= fac.toFixed(2)
 $('#fac').val(fac);


}
}

  </script>

<br><br>
 <!-- ======= Services Section ======= -->
    <section id="servicios" class="services">
      <div class="container" style="margin-left: 18%">

        <div class="section-title"><br>
        
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              
              
              <p style="font-size: 15px;margin-bottom: 1px"><b>Septum (mm).</b></p>
              <p><b><input type="text" class="form-control" id="septum"style=""></b></p>
              <p style="font-size: 15px;margin-bottom: 1px"><b>AO (mm).</b></p>
              <p><b><input type="text" class="form-control" id="ao"style=""></b></p>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Pared posterior (mm)</b></p>
              <p><b><input type="text" class="form-control" id="pp"style=""></b></p>
              <p style="font-size: 15px;margin-bottom: 1px"><b>AI (mm)</b></p>
              <p><b><input type="text" class="form-control" id="aitabla"style=""></b></p>
              <p style="font-size: 15px;margin-bottom: 1px"><b>DDVI (mm)</b></p>
              <p><b><input type="text" class="form-control" id="ddvi"style=""></p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              
             
              <p style="font-size: 15px;margin-bottom: 1px"><b>FEY (%)</b></p>
              <p><b><input type="text" class="form-control" id="fey"style=""></b></p>
              <p style="font-size: 15px;margin-bottom: 1px"><b>DSVI (mm)</b></p>
              <p><b><input type="text" class="form-control" id="dsvi"style=""></b></p>            
              <p style="font-size: 15px;margin-bottom: 1px"><b>VD (mm)</b></p>
              <p><b><input type="text" class="form-control" id="vd"style=""></b></p>
              <p style="font-size: 15px;margin-bottom: 1px"><b>FAC (%)</b></p>
              <p><b><input type="text" class="form-control" id="fac"onmouseenter="fac();"></b></p>
              <p style="font-size: 15px;margin-bottom: 1px"><b>PSAP (mmHg.)</b></p>
              <p><b><input type="text" class="form-control" id="psap"style=""></b></p>
            </div>
          </div>

    


        </div>

      </div>
      <br><br>
    </section><!-- End Services Section -->


     <!-- ======= Services Section ======= -->
    <section id="servicios" class="services">
      <div class="container" style="margin-left: 18%">

        <div class="section-title" style="font-size: 20px"><br>  
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              
               <h4><a href="">Válvula Mitral</a></h4>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.) E:</b></p>
              <p><input type="text" class="form-control" style="width: 100%;"id="mitrale"></p>
              
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.) A:</b></p>
              <p><input type="text" class="form-control" style="width: 100%;"id="mitrala"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="mitralpico" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="mitralmedio" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="mitralnsuficiencia" style="width: 100%">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p>

            </div>
          </div>
         
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
 <h4><a href="">Válvula Tricúspide</a></h4>
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.) E:</b></p>
              <p><input type="text" class="form-control" style="width: 100%;"id="tricuspidee"></p>
              
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.) A:</b></p>
              <p><input type="text" class="form-control" style="width: 100%;"id="tricuspidea"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="tricuspidepico" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="tricuspidemedio" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="tricuspideinsuficiencia" style="width: 100%">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p>







              
            </div>
          </div>

    



        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Services Section ======= -->
    <section id="servicios" class="services">
      <div class="container" style="margin-left: 18%">

        <div class="section-title" style="font-size: 20px"><br>  
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <h4><a href="">Válvula Aórtica</a></h4>
                        
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.)</b></p>
              <p><input type="text" class="form-control" style="width: 100%;"id="aorticavelpico"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="aorticapico" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="aorticamedio" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="aorticainsuficiencia" style="width: 100%">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p>
             
            </div>
          </div>
         
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <h4><a href="">Válvula Pulmonar</a></h4>
             
              
              <p style="font-size: 15px;margin-bottom: 1px"><b>Vel Pico (m/seg.) A:</b></p>
              <p><input type="text" class="form-control" style="width: 100%;"id="pulmonara"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gde. Pico (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="pulmonarpico" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Gdte Medio (mmHg)</b></p>
              <p><input type="text" style="width: 100%" id="pulmonarmedio" class="form-control"></p>

              <p style="font-size: 15px;margin-bottom: 1px"><b>Insuficiencia</b></p>
              <p><select name="pulmonarinsuficiencia" style="width: 100%">
                 <option value="no">No</option>
                 <option value="l">Leve</option>
                 <option value="m">Moderada</option>
                 <option value="s">Severa</option>
                 </select></p>
            </div>
          </div>

    


        </div>

      </div>
    </section><!-- End Services Section -->
  
<!--<table style="font-weight:bold">
  <tr>
    <th>Válvula</th>
    <th>Vel Pico (m/seg.)</th> 
    <th>Gde. Pico (mmHg)</th>
    <th>Gdte Medio (mmHg)</th>
    <th>Insuficiencia</th>
  </tr>
  <tr>
    <td>Mitral </td>
    <td><table style=" border: 1px solid #eee">
  <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="">E:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 100%;"id="mitrale"></th>
     </tr>


     <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="">A:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 100%;"id="mitrala"></th>
  
    </tr>   
</table> </td>
    <td><input type="text" style="width: 80%" id="mitralpico" class="form-control"></td>
    <th><input type="text" style="width: 80%" id="mitralmedio" class="form-control"></th>
    <th><select name="Insuficiencia" style="width: 100%">
    <option value="no">No</option>
    <option value="l">Leve</option>
    <option value="m">Moderada</option>
    <option value="s">Severa</option>
  </select></th>
  </tr>
  <tr>
    <td>Aortica</td>
    <td> <table style=" border: 1px solid #eee">
  <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="color: #eee">-:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 100%;"id="aorticavelpico"></th>
     </tr>
 
</table></td>
    <td><input type="text" style="width: 80%" id="aorticapico" class="form-control"></td>
    <th><input type="text" style="width: 80%"id="aorticamedio" class="form-control"></th>
    <th><select name="Insuficiencia" style="width: 100%">
    <option value="no">No</option>
    <option value="l">Leve</option>
    <option value="m">Moderada</option>
    <option value="s">Severa</option>
  </select></th>
  </tr>
  <tr>
    <td>Tricúspide</td>
    <td> <table style=" border: 1px solid #eee">
  <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="">E:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 100%;"id="tricuspidee"></th>
     </tr>


     <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="">A:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 100%;"id="tricuspidea"></th>
  
    </tr>   
</table> </td>
    <td><input type="text" style="width: 80%" id="tricuspidepico" class="form-control"></td>
    <th><input type="text" style="width: 80%" id="tricuspidemedio" class="form-control"></th>
    <th><select name="Insuficiencia" style="width: 100%">
    <option value="no">No</option>
    <option value="l">Leve</option>
    <option value="m">Moderada</option>
    <option value="s">Severa</option>
  </select></th>
  </tr>
  <tr>
    <td>Pulmonar </td>
    <td><table style=" border: 1px solid #eee">
  <tr style=" border: 1px solid #eee">
    <th style=" border: 1px solid #eee"><label for="usr" style="color: #eee">-:</label></th>
   
   <th style=" border: 1px solid #eee"><input type="text" class="form-control" style="width: 100%;"id="pulmonarvelpico"></th>
     </tr>
 
</table></td>
    <td><input type="text" style="width: 80%" id="pulmonarpico" class="form-control"></td>
    <th><input type="text" style="width: 80%" id="pulmonarmedio" class="form-control"></th>
    <th><select name="Insuficiencia" style="width: 100%">
    <option value="no">No</option>
    <option value="l">Leve</option>
    <option value="m">Moderada</option>
    <option value="s">Severa</option>
  </select></th>
  </tr>


</table>
<br>

  
<label for="usr" style="font-size: 20px;">Aurícula izquierda: </label><br>

<table id="ai"style="width: 55%;border: 1px solid #eee;">
  <tr style="">
  <th style="width: 0.5%;"><input type="radio" checked name="ai" id="aiuno" value="1" onclick="verradiovalueaiuno();"></th>
  <th style=""><label for="usr" style="font-size: 15px">conservadas</label></th> 
   <th><input type="text" style="display:block;text-align: right;" id="aivaluno" class="form-control"></th>
    <th style="display:block" id="aivoluno">vol<br>ml/m2</th>
</tr>

 <tr>
  <th style="width: 0.5%;"><input type="radio" name="ai" id="aidos" value="2" onclick="verradiovalueaidos();"></th>
  <th style=""><label for="usr" style="font-size: 15px">levemente aumentadas</label></th> 
   <th><input type="text" style="display:none;text-align: right;" id="aivaldos" class="form-control"></th>
    <th style="display:none" id="aivoldos">vol<br>ml/m2</th>
</tr>

 <tr style="">
  <th style="width: 0.5%"><input type="radio" name="ai" id="aitres" value="3" onclick="verradiovalueaitres();"></th>
  <th style=""><label for="usr" style="font-size: 15px">moderadamente aumentadas</label></th> 
   <th><input type="text" style="display:none;text-align: right;" id="aivaltres" class="form-control"></th>
    <th style="display:none" id="aivoltres">vol<br>ml/m2</th>
</tr>
 <tr>
  <th><input type="radio" name="ai" id="aicuatro" value="4" onclick="verradiovalueaicuatro();"></th>
  <th><label for="usr" style="font-size: 15px">severamente aumentadas</label></th> 
   <th><input type="text" style="display:none;text-align: right" id="aivalcuatro" class="form-control"></th>
    <th style="display:none" id="aivolcuatro">vol<br>ml/m2</th>
</tr>
</table >

<button type="button" class="btn btn-success" onclick="aimas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="aimas" class="form-control">
<script type="text/javascript">
  function aimas(){
 aimas = document.getElementById("aimas");
              aimas.style.display = "block";
  }

function verradiovalueaiuno(){
  document.getElementById("aivaldos").value = "";
  document.getElementById("aivaltres").value = "";
  document.getElementById("aivalcuatro").value = "";

  var aiuno = document.getElementById('aiuno').value;

  divaivaluno = document.getElementById("aivaluno");
              divaivaluno.style.display = "block";

  divaivoluno = document.getElementById("aivoluno");
              divaivoluno.style.display = "block";

  divaivaldos = document.getElementById("aivaldos");
              divaivaldos.style.display = "none"

divaivaltres = document.getElementById("aivaltres");
              divaivaltres.style.display = "none";

divaivalcuatro = document.getElementById("aivalcuatro");
              divaivalcuatro.style.display = "none";

divaivoldos = document.getElementById("aivoldos");
              divaivoldos.style.display = "none"; 

divaivoltres = document.getElementById("aivoltres");
              divaivoltres.style.display = "none"; 

divaivolcuatro = document.getElementById("aivolcuatro");
              divaivolcuatro.style.display = "none";

}

function verradiovalueaidos(){

 document.getElementById("aivaluno").value = "";
  document.getElementById("aivaltres").value = "";
  document.getElementById("aivalcuatro").value = "";

  var aidos = document.getElementById('aidos').value;

   divaivaluno = document.getElementById("aivaluno");
              divaivaluno.style.display = "none";

  divaivoluno = document.getElementById("aivoluno");
              divaivoluno.style.display = "none";


divaivaltres = document.getElementById("aivaltres");
              divaivaltres.style.display = "none";

divaivalcuatro = document.getElementById("aivalcuatro");
              divaivalcuatro.style.display = "none";


divaivoltres = document.getElementById("aivoltres");
              divaivoltres.style.display = "none"; 

divaivolcuatro = document.getElementById("aivolcuatro");
              divaivolcuatro.style.display = "none";

  

  divaivaldos = document.getElementById("aivaldos");
              divaivaldos.style.display = "block";              

  divaivoldos = document.getElementById("aivoldos");
              divaivoldos.style.display = "block";
}

function verradiovalueaitres(){
   document.getElementById("aivaluno").value = "";
  document.getElementById("aivaldos").value = "";
  document.getElementById("aivalcuatro").value = "";

  var aidos = document.getElementById('aitres').value;
divaivaluno = document.getElementById("aivaluno");
              divaivaluno.style.display = "none";

  divaivoluno = document.getElementById("aivoluno");
              divaivoluno.style.display = "none";

  divaivaldos = document.getElementById("aivaldos");
              divaivaldos.style.display = "none"


divaivalcuatro = document.getElementById("aivalcuatro");
              divaivalcuatro.style.display = "none";

divaivoldos = document.getElementById("aivoldos");
              divaivoldos.style.display = "none"; 


divaivolcuatro = document.getElementById("aivolcuatro");
              divaivolcuatro.style.display = "none";

              divaivaltres = document.getElementById("aivaltres");
              divaivaltres.style.display = "block";              

  divaivoltres = document.getElementById("aivoltres");
              divaivoltres.style.display = "block";
}


function verradiovalueaicuatro(){
   document.getElementById("aivaluno").value = "";
  document.getElementById("aivaldos").value = "";
  document.getElementById("aivaltres").value = "";
  var aidos = document.getElementById('aicuatro').value;

 divaivaluno = document.getElementById("aivaluno");
              divaivaluno.style.display = "none";

  divaivoluno = document.getElementById("aivoluno");
              divaivoluno.style.display = "none";

  divaivaldos = document.getElementById("aivaldos");
              divaivaldos.style.display = "none"

divaivaltres = document.getElementById("aivaltres");
              divaivaltres.style.display = "none";


divaivoldos = document.getElementById("aivoldos");
              divaivoldos.style.display = "none"; 

divaivoltres = document.getElementById("aivoltres");
              divaivoltres.style.display = "none"; 





              divaivalcuatro = document.getElementById("aivalcuatro");
              divaivalcuatro.style.display = "block";              

  divaivolcuatro = document.getElementById("aivolcuatro");
              divaivolcuatro.style.display = "block";
}


</script>
<br>
 <label for="usr" style="font-size: 20px">Ventrículo izquierdo:</label><br>
<label for="usr" style="font-size: 15px">Espesor parietal:</label><br>
<input type="radio" name="vi" id="viuno" value="1" checked onclick="verradiovalueviuno();">
<label for="aiuno" style="font-size: 15px" >normal</label><br>
<input type="radio" name="vi" id="vidos" value="2" onclick="verradiovaluevidos();">
<label for="aidos" style="font-size: 15px">hipertrofia leve</label><br>
<input type="radio" name="vi"value="3" id="vitres" onclick="verradiovaluevitres();">
<label for="aitres" style="font-size: 15px">hipertrofia moderada</label><br>
<input type="radio" name="vi" value="4" id="vicuatro" onclick="verradiovaluevicuatro();">
<label for="aicuatro" style="font-size: 15px">hipertrofia severa</label><br>


<button type="button" class="btn btn-success" onclick="vimas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vimas" class="form-control">
<script type="text/javascript">
  function vimas(){
 vimas = document.getElementById("vimas");
              vimas.style.display = "block";
  }



function verradiovalueviuno(){
  var viuno = document.getElementById('viuno').value;
  
}

function verradiovaluevidos(){ 
  var vidos = document.getElementById('vidos').value;

}

function verradiovaluevitres(){ 
  var vitres = document.getElementById('vitres').value; 

}

function verradiovaluevicuatro(){ 
  var vicuatro = document.getElementById('vicuatro').value;

}

</script>


<label for="usr" style="font-size: 15px">Dimensiones:</label><br>
<input type="radio" name="vid" id="viduno" value="1" checked onclick="verradiovalueviduno();">
<label for="aiuno" style="font-size: 15px" >Dimensiones conservadas</label><br>
<input type="radio" name="vid" id="viddos" value="2" onclick="verradiovalueviddos();">
<label for="aidos" style="font-size: 15px">Dimensiones levemente aumentadas</label><br>
<input type="radio" name="vid"value="3" id="vidtres" onclick="verradiovaluevidtres();">
<label for="aitres" style="font-size: 15px">Dimensiones moderadamente aumentadas</label><br>
<input type="radio" name="vid" value="4" id="vidcuatro" onclick="verradiovaluevidcuatro();">
<label for="aicuatro" style="font-size: 15px">Dimensiones severamente aumentadas</label><br>
<br><br>
<button type="button" class="btn btn-success" onclick="vidmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vidmas" class="form-control">
<script type="text/javascript">
  function vidmas(){
 vidmas = document.getElementById("vidmas");
              vidmas.style.display = "block";
  }


function verradiovalueviduno(){
  var viduno = document.getElementById('viduno').value;

}

function verradiovalueviddos(){ 
  var viddos = document.getElementById('viddos').value;

}

function verradiovaluevidtres(){ 
  var vidtres = document.getElementById('vidtres').value; 

}

function verradiovaluevidcuatro(){ 
  var vidcuatro = document.getElementById('vidcuatro').value;

}

</script>


<label for="usr" style="font-size: 15px">Función sistólica: </label><br>
<input type="radio" name="vifs" id="vifsuno" value="1" checked onclick="verradiovalueuno();">
<label for="vifsuno" style="font-size: 15px" >fraccion de eyeccion conservada</label><br>
<input type="radio" name="vifs" id="vifsdos" value="2" onclick="verradiovaluedos();">
<label for="vifsdos" style="font-size: 15px">levemente deprimida</label><br>
<input type="radio" name="vifs"value="3" id="vifstres" onclick="verradiovaluetres();">
<label for="vifstres" style="font-size: 15px">moderadamente deprimida</label><br>
<input type="radio" name="vifs" value="4" id="vifscuatro" onclick="verradiovaluecuatro();">
<label for="vifscuatro" style="font-size: 15px">severamente deprimida</label><br>
<button type="button" class="btn btn-success" onclick="vifsmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vifsmas" class="form-control">
<script type="text/javascript">
  function vifsmas(){
 vifsmas = document.getElementById("vifsmas");
              vifsmas.style.display = "block";
  }


function verradiovalueuno(){
  var vifsuno = document.getElementById('vifsuno').value;
 
}

function verradiovaluedos(){ 
  var vifsdos = document.getElementById('vifsdos').value;

}

function verradiovaluetres(){ 
  var vifstres = document.getElementById('vifstres').value; 
 
}

function verradiovaluecuatro(){ 
  var vifscuatro = document.getElementById('vifscuatro').value;

}

</script>
<label for="usr" style="font-size: 15px">Perfil de lleno: </label><br>
<input type="radio" name="vipll" id="viplluno" value="1" checked onclick="verradiovalueuno();">
<label for="viplluno" style="font-size: 15px" >normal</label><br>
<input type="radio" name="vipll" id="viplldos" value="2" onclick="verradiovaluedos();">
<label for="viplldos" style="font-size: 15px">compatible con alteración de la relajación</label><br>

<button type="button" class="btn btn-success" onclick="vipmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vipmas" class="form-control">
<script type="text/javascript">
  function vipmas(){
 vipmas = document.getElementById("vipmas");
              vipmas.style.display = "block";
  }


function verradiovalueuno(){
  var viplluno = document.getElementById('viplluno').value;

}

function verradiovaluedos(){ 
  var viplldos = document.getElementById('viplldos').value;

}

function verradiovaluetres(){ 
  var viplltres = document.getElementById('viplltres').value; 
 
}

function verradiovaluecuatro(){ 
  var vipllcuatro = document.getElementById('vipllcuatro').value;
 
}

</script><br><br>
<!-- ======= VALVULA MITRAL ======= -->
 <label for="usr" style="font-size: 20px;">Válvula mitral:</label><br>

<input type="radio" style="margin-left: 20px" checked name="vm" id="vmconservada" value="5" checked onclick="vmconservada();">
<label for="" style="font-size: 15px" id="vmconservadalabel">estructura y funcionalidad conservada</label><br><br>

<div id="vminsuficiencialeveocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="vm" id="vminsuficiencialeveradio" value="6"onclick="vminsuficiencialeveocultar();">
<label for="" style="font-size: 15px" id="vminsuficiencialeveolabel">insuficiencia leve</label><br></div>


 <table id="vm"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vminduficiencialeveradiomostrar" style="display: none"><input type="radio" name="vm" id="vmuno" value="0" onclick="vminsuficiencialevemostrar();"></th></div>
 
   <th><div id="vminduficiencialevevalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vmvaluno" class="form-control"></th></div>
    <th style="" id="vmvoluno"><div id="vminduficiencialevelabelmostrar" style="display: none;color:#33cc33">insuficiencia leve</th></div>

</tr></div> <tr>
  </table >

<div id="vminsuficienciamoderadaocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="vm" id="vminsuficienciamoderadaradio" value="6"onclick="verradiovaluevminsuficienciamoderada();">
<label for="" style="font-size: 15px;" id="vminsuficienciamoderadaolabel">insuficiencia moderada</label><br></div>


 <table id="vm"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vminduficienciamoderadaradiomostrar" style="display: none"><input type="radio" name="vm" id="vmdos" value="0" onclick="verradiovaluevmdos();"></th></div>
 
   <th><div id="vminduficienciamoderadavalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vmvaldos" class="form-control"></th></div>
    <th style="" id="vmvoldos"><div id="vminduficienciamoderadalabelmostrar" style="display: none;color: orange">insuficiencia moderada</th></div>

</tr></div> <tr>
  </table >

<div id="vminsuficienciaseveraocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="vm" id="vminsuficienciaseveraradio" value="6"onclick="verradiovaluevminsuficienciasevera();">
<label for="" style="font-size: 15px;" id="vminsuficienciaseveraolabel">insuficiencia severa</label><br></div>


 <table id="vm"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vminduficienciaseveraradiomostrar" style="display: none"><input type="radio" name="vm" id="vmtres" value="0" onclick="verradiovaluevmdos();"></th></div>
 
   <th><div id="vminduficienciaseveravalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vmvaltres" class="form-control"></th></div>
    <th style="" id="vmvoltres"><div id="vminduficienciaseveralabelmostrar" style="display: none;color: red">insuficiencia severa</th></div>

</tr></div> <tr>
  </table >


<script type="text/javascript">




function vmconservada(){

  
vminsuleveocultar = document.getElementById("vminsuficiencialeveocultar");
              vminsuleveocultar.style.display = "block";
             
             vminsuleveradiomostrar = document.getElementById("vminduficiencialeveradiomostrar");
              vminsuleveradiomostrar.style.display = "none";

              vminsulevevalmostrar = document.getElementById("vminduficiencialevevalmostrar");
              document.getElementById("vmvaluno").value = "";
              vminsulevevalmostrar.style.display = "none";

              vminsulevelabelmostrar = document.getElementById("vminduficiencialevelabelmostrar");
              vminsulevelabelmostrar.style.display = "none";
              

              vminsumoderadaocultar = document.getElementById("vminsuficienciamoderadaocultar");
              vminsumoderadaocultar.style.display = "block";
             
             vminsumoderadaradiomostrar = document.getElementById("vminduficienciamoderadaradiomostrar");
              vminsumoderadaradiomostrar.style.display = "none";

              vminsumoderadavalmostrar = document.getElementById("vminduficienciamoderadavalmostrar");
              document.getElementById("vmvaldos").value = "";
              vminsumoderadavalmostrar.style.display = "none";

              vminsumoderadalabelmostrar = document.getElementById("vminduficienciamoderadalabelmostrar");
              vminsumoderadalabelmostrar.style.display = "none";

                vminsuseveraocultar = document.getElementById("vminsuficienciaseveraocultar");
              vminsuseveraocultar.style.display = "block";
             
             vminsuseveraradiomostrar = document.getElementById("vminduficienciaseveraradiomostrar");
              vminsuseveraradiomostrar.style.display = "none";

              vminsuseveravalmostrar = document.getElementById("vminduficienciaseveravalmostrar");
              document.getElementById("vmvaltres").value = "";
              vminsuseveravalmostrar.style.display = "none";

              vminsuseveralabelmostrar = document.getElementById("vminduficienciaseveralabelmostrar");
              vminsuseveralabelmostrar.style.display = "none";

              vminsuseveraocultar = document.getElementById("vminsuficienciaseveraocultar");
              vminsuseveraocultar.style.display = "block";
             
             vminsuseveraradiomostrar = document.getElementById("vminduficienciaseveraradiomostrar");
              vminsuseveraradiomostrar.style.display = "none";

              vminsuseveravalmostrar = document.getElementById("vminduficienciaseveravalmostrar");
              vminsuseveravalmostrar.style.display = "none";

              vminsuseveralabelmostrar = document.getElementById("vminduficienciaseveralabelmostrar");
              vminsuseveralabelmostrar.style.display = "none";
              document.getElementById("vmconservado").checked = false; 
              



}


    function vminsuficiencialeveocultar(){
vminsuleveocultar = document.getElementById("vminsuficiencialeveocultar");
              vminsuleveocultar.style.display = "none";
             
             vminsuleveradiomostrar = document.getElementById("vminduficiencialeveradiomostrar");
              vminsuleveradiomostrar.style.display = "block";

              vminsulevevalmostrar = document.getElementById("vminduficiencialevevalmostrar");
              vminsulevevalmostrar.style.display = "block";

              vminsulevelabelmostrar = document.getElementById("vminduficiencialevelabelmostrar");
              vminsulevelabelmostrar.style.display = "block";

             
              document.getElementById("vmuno").checked = true;
              document.getElementById("vmconservada").checked = false; 

vminsumoderadaocultar = document.getElementById("vminsuficienciamoderadaocultar");
              vminsumoderadaocultar.style.display = "block";
             
             vminsumoderadaradiomostrar = document.getElementById("vminduficienciamoderadaradiomostrar");
              vminsumoderadaradiomostrar.style.display = "none";

              vminsumoderadavalmostrar = document.getElementById("vminduficienciamoderadavalmostrar");
              document.getElementById("vmvaldos").value = "";
              vminsumoderadavalmostrar.style.display = "none";

              vminsumoderadalabelmostrar = document.getElementById("vminduficienciamoderadalabelmostrar");
              vminsumoderadalabelmostrar.style.display = "none";

              vminsuseveraocultar = document.getElementById("vminsuficienciaseveraocultar");
              vminsuseveraocultar.style.display = "block";
             
             vminsuseveraradiomostrar = document.getElementById("vminduficienciaseveraradiomostrar");
              vminsuseveraradiomostrar.style.display = "none";

              vminsuseveravalmostrar = document.getElementById("vminduficienciaseveravalmostrar");
              document.getElementById("vmvaltres").value = "";
              vminsuseveravalmostrar.style.display = "none";

              vminsuseveralabelmostrar = document.getElementById("vminduficienciaseveralabelmostrar");
              vminsuseveralabelmostrar.style.display = "none";
              
              

  }
      function verradiovaluevminsuficienciamoderada(){
vminsumoderadaocultar = document.getElementById("vminsuficienciamoderadaocultar");
              vminsumoderadaocultar.style.display = "none";
             
             vminsumoderadaradiomostrar = document.getElementById("vminduficienciamoderadaradiomostrar");
              vminsumoderadaradiomostrar.style.display = "block";

              vminsumoderadavalmostrar = document.getElementById("vminduficienciamoderadavalmostrar");
              vminsumoderadavalmostrar.style.display = "block";

              vminsumoderadalabelmostrar = document.getElementById("vminduficienciamoderadalabelmostrar");
              vminsumoderadalabelmostrar.style.display = "block";
              document.getElementById("vmdos").checked = true;
              vminsuleveocultar = document.getElementById("vminsuficiencialeveocultar");
              vminsuleveocultar.style.display = "block";
             
             vminsuleveradiomostrar = document.getElementById("vminduficiencialeveradiomostrar");
              vminsuleveradiomostrar.style.display = "none";

              vminsulevevalmostrar = document.getElementById("vminduficiencialevevalmostrar");
              document.getElementById("vmvaluno").value = "";
              vminsulevevalmostrar.style.display = "none";

              vminsulevelabelmostrar = document.getElementById("vminduficiencialevelabelmostrar");
              vminsulevelabelmostrar.style.display = "none";

              vminsuseveraocultar = document.getElementById("vminsuficienciaseveraocultar");
              vminsuseveraocultar.style.display = "block";
             
             vminsuseveraradiomostrar = document.getElementById("vminduficienciaseveraradiomostrar");
              vminsuseveraradiomostrar.style.display = "none";

              vminsuseveravalmostrar = document.getElementById("vminduficienciaseveravalmostrar");
              vminsuseveravalmostrar.style.display = "none";

              vminsuseveralabelmostrar = document.getElementById("vminduficienciaseveralabelmostrar");
              document.getElementById("vmvaltres").value = "";
              vminsuseveralabelmostrar.style.display = "none"
              document.getElementById("vmconservada").checked = false; 

            
              

  }
      function verradiovaluevminsuficienciasevera(){
vminsuseveraocultar = document.getElementById("vminsuficienciaseveraocultar");
              vminsuseveraocultar.style.display = "none";
             
             vminsuseveraradiomostrar = document.getElementById("vminduficienciaseveraradiomostrar");
              vminsuseveraradiomostrar.style.display = "block";

              vminsuseveravalmostrar = document.getElementById("vminduficienciaseveravalmostrar");
              vminsuseveravalmostrar.style.display = "block";

              vminsuseveralabelmostrar = document.getElementById("vminduficienciaseveralabelmostrar");
              vminsuseveralabelmostrar.style.display = "block";
              document.getElementById("vmtres").checked = true;

              vminsuleveocultar = document.getElementById("vminsuficiencialeveocultar");
              vminsuleveocultar.style.display = "block";
             
             vminsuleveradiomostrar = document.getElementById("vminduficiencialeveradiomostrar");
              vminsuleveradiomostrar.style.display = "none";

              vminsulevevalmostrar = document.getElementById("vminduficiencialevevalmostrar");
              document.getElementById("vmvaluno").value = "";
              vminsulevevalmostrar.style.display = "none";

              vminsulevelabelmostrar = document.getElementById("vminduficiencialevelabelmostrar");
              vminsulevelabelmostrar.style.display = "none";
              vminsumoderadaocultar = document.getElementById("vminsuficienciamoderadaocultar");
              vminsumoderadaocultar.style.display = "block";
             
             vminsumoderadaradiomostrar = document.getElementById("vminduficienciamoderadaradiomostrar");
              vminsumoderadaradiomostrar.style.display = "none";

              vminsumoderadavalmostrar = document.getElementById("vminduficienciamoderadavalmostrar");
              document.getElementById("vmvaldos").value = "";
              vminsumoderadavalmostrar.style.display = "none";

              vminsumoderadalabelmostrar = document.getElementById("vminduficienciamoderadalabelmostrar");
              vminsumoderadalabelmostrar.style.display = "none";
              document.getElementById("vmconservada").checked = false; 
              

  }

</script>

<script type="text/javascript">



function verradiovaluevmuno(){
  document.getElementById("vmvaldos").value = "";
  document.getElementById("vmvaltres").value = "";
  document.getElementById("vmvalcuatro").value = "";

  var vmuno = document.getElementById('vmuno').value;

  divvmvaluno = document.getElementById("vmvaluno");
              divvmvaluno.style.display = "block";

  divvmvoluno = document.getElementById("vmvoluno");
              divvmvoluno.style.display = "block";

  divvmvaldos = document.getElementById("vmvaldos");
              divvmvaldos.style.display = "none"

divvmvaltres = document.getElementById("vmvaltres");
              divvmvaltres.style.display = "none";

divvmvalcuatro = document.getElementById("vmvalcuatro");
              divvmvalcuatro.style.display = "none";

divvmvoldos = document.getElementById("vmvoldos");
              divvmvoldos.style.display = "none"; 

divvmvoltres = document.getElementById("vmvoltres");
              divvmvoltres.style.display = "none"; 

divvmvolcuatro = document.getElementById("vmvolcuatro");
              divvmvolcuatro.style.display = "none";

}

function verradiovaluevmdos(){

 document.getElementById("vmvaluno").value = "";
  document.getElementById("vmvaltres").value = "";
  document.getElementById("vmvalcuatro").value = "";

  var vmdos = document.getElementById('vmdos').value;

   divvmvaluno = document.getElementById("vmvaluno");
              divvmvaluno.style.display = "none";

  divvmvoluno = document.getElementById("vmvoluno");
              divvmvoluno.style.display = "none";


divvmvaltres = document.getElementById("vmvaltres");
              divvmvaltres.style.display = "none";

divvmvalcuatro = document.getElementById("vmvalcuatro");
              divvmvalcuatro.style.display = "none";


divvmvoltres = document.getElementById("vmvoltres");
              divvmvoltres.style.display = "none"; 

divvmvolcuatro = document.getElementById("vmvolcuatro");
              divvmvolcuatro.style.display = "none";

  

  divvmvaldos = document.getElementById("vmvaldos");
              divvmvaldos.style.display = "block";              

  divvmvoldos = document.getElementById("vmvoldos");
              divvmvoldos.style.display = "block";
}

function verradiovaluevmtres(){
   document.getElementById("vmvaluno").value = "";
  document.getElementById("vmvaldos").value = "";
  document.getElementById("vmvalcuatro").value = "";

  var vmdos = document.getElementById('vmtres').value;
divvmvaluno = document.getElementById("vmvaluno");
              divvmvaluno.style.display = "none";

  divvmvoluno = document.getElementById("vmvoluno");
              divvmvoluno.style.display = "none";

  divvmvaldos = document.getElementById("vmvaldos");
              divvmvaldos.style.display = "none"


divvmvalcuatro = document.getElementById("vmvalcuatro");
              divvmvalcuatro.style.display = "none";

divvmvoldos = document.getElementById("vmvoldos");
              divvmvoldos.style.display = "none"; 


divvmvolcuatro = document.getElementById("vmvolcuatro");
              divvmvolcuatro.style.display = "none";

              divvmvaltres = document.getElementById("vmvaltres");
              divvmvaltres.style.display = "block";              

  divvmvoltres = document.getElementById("vmvoltres");
              divvmvoltres.style.display = "block";
}


function verradiovaluevmcuatro(){
   document.getElementById("vmvaluno").value = "";
  document.getElementById("vmvaldos").value = "";
  document.getElementById("vmvaltres").value = "";
  var vmdos = document.getElementById('vmcuatro').value;

 divvmvaluno = document.getElementById("vmvaluno");
              divvmvaluno.style.display = "none";

  divvmvoluno = document.getElementById("vmvoluno");
              divvmvoluno.style.display = "none";

  divvmvaldos = document.getElementById("vmvaldos");
              divvmvaldos.style.display = "none"

divvmvaltres = document.getElementById("vmvaltres");
              divvmvaltres.style.display = "none";


divvmvoldos = document.getElementById("vmvoldos");
              divvmvoldos.style.display = "none"; 

divvmvoltres = document.getElementById("vmvoltres");
              divvmvoltres.style.display = "none"; 





              divvmvalcuatro = document.getElementById("vmvalcuatro");
              divvmvalcuatro.style.display = "block";              

  divvmvolcuatro = document.getElementById("vmvolcuatro");
              divvmvolcuatro.style.display = "block";
}
function verradiovaluevmcinco(){ 
  var vmconservada = document.getElementById('vmconservada').value; 

}



</script>
<button type="button" class="btn btn-success" onclick="vmmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vmmas" class="form-control">
<script type="text/javascript">
  function vmmas(){
 vmmas = document.getElementById("vmmas");
              vmmas.style.display = "block";
  }
</script><!-- End VALVULA MITRAL -->

 <!-- ======= VALVULA AORTICA ======= -->
 <label for="usr" style="font-size: 20px;">Válvula aórtica:</label><br>

<input type="radio" style="margin-left: 20px" checked name="va" id="vaconservada" value="5" checked onclick="vaconservada();">
<label for="" style="font-size: 15px" id="vaconservadalabel">estructura y funcionalidad conservada</label><br><br>

<div id="vainsuficiencialeveocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="va" id="vainsuficiencialeveradio" value="6"onclick="vainsuficiencialeveocultar();">
<label for="" style="font-size: 15px" id="vainsuficiencialeveolabel">insuficiencia leve</label><br></div>


 <table id="va"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vainduficiencialeveradiomostrar" style="display: none"><input type="radio" name="va" id="vauno" value="0" onclick="vainsuficiencialevemostrar();"></th></div>
 
   <th><div id="vainduficiencialevevalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vavaluno" class="form-control"></th></div>
    <th style="" id="vavoluno"><div id="vainduficiencialevelabelmostrar" style="display: none;color:#33cc33">insuficiencia leve</th></div>

</tr></div> <tr>
  </table >

<div id="vainsuficienciamoderadaocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="va" id="vainsuficienciamoderadaradio" value="6"onclick="verradiovaluevainsuficienciamoderada();">
<label for="" style="font-size: 15px;" id="vainsuficienciamoderadaolabel">insuficiencia moderada</label><br></div>


 <table id="va"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vainduficienciamoderadaradiomostrar" style="display: none"><input type="radio" name="va" id="vados" value="0" onclick="verradiovaluevados();"></th></div>
 
   <th><div id="vainduficienciamoderadavalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vavaldos" class="form-control"></th></div>
    <th style="" id="vavoldos"><div id="vainduficienciamoderadalabelmostrar" style="display: none;color: orange">insuficiencia moderada</th></div>

</tr></div> <tr>
  </table >

<div id="vainsuficienciaseveraocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="va" id="vainsuficienciaseveraradio" value="6"onclick="verradiovaluevainsuficienciasevera();">
<label for="" style="font-size: 15px;" id="vainsuficienciaseveraolabel">insuficiencia severa</label><br></div>


 <table id="va"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vainduficienciaseveraradiomostrar" style="display: none"><input type="radio" name="va" id="vatres" value="0" onclick="verradiovaluevados();"></th></div>
 
   <th><div id="vainduficienciaseveravalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vavaltres" class="form-control"></th></div>
    <th style="" id="vavoltres"><div id="vainduficienciaseveralabelmostrar" style="display: none;color: red">insuficiencia severa</th></div>

</tr></div> <tr>
  </table >


<script type="text/javascript">




function vaconservada(){

  
vainsuleveocultar = document.getElementById("vainsuficiencialeveocultar");
              vainsuleveocultar.style.display = "block";
             
             vainsuleveradiomostrar = document.getElementById("vainduficiencialeveradiomostrar");
              vainsuleveradiomostrar.style.display = "none";

              vainsulevevalmostrar = document.getElementById("vainduficiencialevevalmostrar");
              document.getElementById("vavaluno").value = "";
              vainsulevevalmostrar.style.display = "none";

              vainsulevelabelmostrar = document.getElementById("vainduficiencialevelabelmostrar");
              vainsulevelabelmostrar.style.display = "none";
              

              vainsumoderadaocultar = document.getElementById("vainsuficienciamoderadaocultar");
              vainsumoderadaocultar.style.display = "block";
             
             vainsumoderadaradiomostrar = document.getElementById("vainduficienciamoderadaradiomostrar");
              vainsumoderadaradiomostrar.style.display = "none";

              vainsumoderadavalmostrar = document.getElementById("vainduficienciamoderadavalmostrar");
              document.getElementById("vavaldos").value = "";
              vainsumoderadavalmostrar.style.display = "none";

              vainsumoderadalabelmostrar = document.getElementById("vainduficienciamoderadalabelmostrar");
              vainsumoderadalabelmostrar.style.display = "none";

                vainsuseveraocultar = document.getElementById("vainsuficienciaseveraocultar");
              vainsuseveraocultar.style.display = "block";
             
             vainsuseveraradiomostrar = document.getElementById("vainduficienciaseveraradiomostrar");
              vainsuseveraradiomostrar.style.display = "none";

              vainsuseveravalmostrar = document.getElementById("vainduficienciaseveravalmostrar");
              document.getElementById("vavaltres").value = "";
              vainsuseveravalmostrar.style.display = "none";

              vainsuseveralabelmostrar = document.getElementById("vainduficienciaseveralabelmostrar");
              vainsuseveralabelmostrar.style.display = "none";

              vainsuseveraocultar = document.getElementById("vainsuficienciaseveraocultar");
              vainsuseveraocultar.style.display = "block";
             
             vainsuseveraradiomostrar = document.getElementById("vainduficienciaseveraradiomostrar");
              vainsuseveraradiomostrar.style.display = "none";

              vainsuseveravalmostrar = document.getElementById("vainduficienciaseveravalmostrar");
              vainsuseveravalmostrar.style.display = "none";

              vainsuseveralabelmostrar = document.getElementById("vainduficienciaseveralabelmostrar");
              vainsuseveralabelmostrar.style.display = "none";
              document.getElementById("vaconservado").checked = false; 
              



}


    function vainsuficiencialeveocultar(){
vainsuleveocultar = document.getElementById("vainsuficiencialeveocultar");
              vainsuleveocultar.style.display = "none";
             
             vainsuleveradiomostrar = document.getElementById("vainduficiencialeveradiomostrar");
              vainsuleveradiomostrar.style.display = "block";

              vainsulevevalmostrar = document.getElementById("vainduficiencialevevalmostrar");
              vainsulevevalmostrar.style.display = "block";

              vainsulevelabelmostrar = document.getElementById("vainduficiencialevelabelmostrar");
              vainsulevelabelmostrar.style.display = "block";

             
              document.getElementById("vauno").checked = true;
              document.getElementById("vaconservada").checked = false; 

vainsumoderadaocultar = document.getElementById("vainsuficienciamoderadaocultar");
              vainsumoderadaocultar.style.display = "block";
             
             vainsumoderadaradiomostrar = document.getElementById("vainduficienciamoderadaradiomostrar");
              vainsumoderadaradiomostrar.style.display = "none";

              vainsumoderadavalmostrar = document.getElementById("vainduficienciamoderadavalmostrar");
              document.getElementById("vavaldos").value = "";
              vainsumoderadavalmostrar.style.display = "none";

              vainsumoderadalabelmostrar = document.getElementById("vainduficienciamoderadalabelmostrar");
              vainsumoderadalabelmostrar.style.display = "none";

              vainsuseveraocultar = document.getElementById("vainsuficienciaseveraocultar");
              vainsuseveraocultar.style.display = "block";
             
             vainsuseveraradiomostrar = document.getElementById("vainduficienciaseveraradiomostrar");
              vainsuseveraradiomostrar.style.display = "none";

              vainsuseveravalmostrar = document.getElementById("vainduficienciaseveravalmostrar");
              document.getElementById("vavaltres").value = "";
              vainsuseveravalmostrar.style.display = "none";

              vainsuseveralabelmostrar = document.getElementById("vainduficienciaseveralabelmostrar");
              vainsuseveralabelmostrar.style.display = "none";
              
              

  }
      function verradiovaluevainsuficienciamoderada(){
vainsumoderadaocultar = document.getElementById("vainsuficienciamoderadaocultar");
              vainsumoderadaocultar.style.display = "none";
             
             vainsumoderadaradiomostrar = document.getElementById("vainduficienciamoderadaradiomostrar");
              vainsumoderadaradiomostrar.style.display = "block";

              vainsumoderadavalmostrar = document.getElementById("vainduficienciamoderadavalmostrar");
              vainsumoderadavalmostrar.style.display = "block";

              vainsumoderadalabelmostrar = document.getElementById("vainduficienciamoderadalabelmostrar");
              vainsumoderadalabelmostrar.style.display = "block";
              document.getElementById("vados").checked = true;
              vainsuleveocultar = document.getElementById("vainsuficiencialeveocultar");
              vainsuleveocultar.style.display = "block";
             
             vainsuleveradiomostrar = document.getElementById("vainduficiencialeveradiomostrar");
              vainsuleveradiomostrar.style.display = "none";

              vainsulevevalmostrar = document.getElementById("vainduficiencialevevalmostrar");
              document.getElementById("vavaluno").value = "";
              vainsulevevalmostrar.style.display = "none";

              vainsulevelabelmostrar = document.getElementById("vainduficiencialevelabelmostrar");
              vainsulevelabelmostrar.style.display = "none";

              vainsuseveraocultar = document.getElementById("vainsuficienciaseveraocultar");
              vainsuseveraocultar.style.display = "block";
             
             vainsuseveraradiomostrar = document.getElementById("vainduficienciaseveraradiomostrar");
              vainsuseveraradiomostrar.style.display = "none";

              vainsuseveravalmostrar = document.getElementById("vainduficienciaseveravalmostrar");
              vainsuseveravalmostrar.style.display = "none";

              vainsuseveralabelmostrar = document.getElementById("vainduficienciaseveralabelmostrar");
              document.getElementById("vavaltres").value = "";
              vainsuseveralabelmostrar.style.display = "none"
              document.getElementById("vaconservada").checked = false; 

            
              

  }
      function verradiovaluevainsuficienciasevera(){
vainsuseveraocultar = document.getElementById("vainsuficienciaseveraocultar");
              vainsuseveraocultar.style.display = "none";
             
             vainsuseveraradiomostrar = document.getElementById("vainduficienciaseveraradiomostrar");
              vainsuseveraradiomostrar.style.display = "block";

              vainsuseveravalmostrar = document.getElementById("vainduficienciaseveravalmostrar");
              vainsuseveravalmostrar.style.display = "block";

              vainsuseveralabelmostrar = document.getElementById("vainduficienciaseveralabelmostrar");
              vainsuseveralabelmostrar.style.display = "block";
              document.getElementById("vatres").checked = true;

              vainsuleveocultar = document.getElementById("vainsuficiencialeveocultar");
              vainsuleveocultar.style.display = "block";
             
             vainsuleveradiomostrar = document.getElementById("vainduficiencialeveradiomostrar");
              vainsuleveradiomostrar.style.display = "none";

              vainsulevevalmostrar = document.getElementById("vainduficiencialevevalmostrar");
              document.getElementById("vavaluno").value = "";
              vainsulevevalmostrar.style.display = "none";

              vainsulevelabelmostrar = document.getElementById("vainduficiencialevelabelmostrar");
              vainsulevelabelmostrar.style.display = "none";
              vainsumoderadaocultar = document.getElementById("vainsuficienciamoderadaocultar");
              vainsumoderadaocultar.style.display = "block";
             
             vainsumoderadaradiomostrar = document.getElementById("vainduficienciamoderadaradiomostrar");
              vainsumoderadaradiomostrar.style.display = "none";

              vainsumoderadavalmostrar = document.getElementById("vainduficienciamoderadavalmostrar");
              document.getElementById("vavaldos").value = "";
              vainsumoderadavalmostrar.style.display = "none";

              vainsumoderadalabelmostrar = document.getElementById("vainduficienciamoderadalabelmostrar");
              vainsumoderadalabelmostrar.style.display = "none";
              document.getElementById("vaconservada").checked = false; 
              

  }

</script>

<script type="text/javascript">



function verradiovaluevauno(){
  document.getElementById("vavaldos").value = "";
  document.getElementById("vavaltres").value = "";
  document.getElementById("vavalcuatro").value = "";

  var vauno = document.getElementById('vauno').value;

  divvavaluno = document.getElementById("vavaluno");
              divvavaluno.style.display = "block";

  divvavoluno = document.getElementById("vavoluno");
              divvavoluno.style.display = "block";

  divvavaldos = document.getElementById("vavaldos");
              divvavaldos.style.display = "none"

divvavaltres = document.getElementById("vavaltres");
              divvavaltres.style.display = "none";

divvavalcuatro = document.getElementById("vavalcuatro");
              divvavalcuatro.style.display = "none";

divvavoldos = document.getElementById("vavoldos");
              divvavoldos.style.display = "none"; 

divvavoltres = document.getElementById("vavoltres");
              divvavoltres.style.display = "none"; 

divvavolcuatro = document.getElementById("vavolcuatro");
              divvavolcuatro.style.display = "none";

}

function verradiovaluevados(){

 document.getElementById("vavaluno").value = "";
  document.getElementById("vavaltres").value = "";
  document.getElementById("vavalcuatro").value = "";

  var vados = document.getElementById('vados').value;

   divvavaluno = document.getElementById("vavaluno");
              divvavaluno.style.display = "none";

  divvavoluno = document.getElementById("vavoluno");
              divvavoluno.style.display = "none";


divvavaltres = document.getElementById("vavaltres");
              divvavaltres.style.display = "none";

divvavalcuatro = document.getElementById("vavalcuatro");
              divvavalcuatro.style.display = "none";


divvavoltres = document.getElementById("vavoltres");
              divvavoltres.style.display = "none"; 

divvavolcuatro = document.getElementById("vavolcuatro");
              divvavolcuatro.style.display = "none";

  

  divvavaldos = document.getElementById("vavaldos");
              divvavaldos.style.display = "block";              

  divvavoldos = document.getElementById("vavoldos");
              divvavoldos.style.display = "block";
}

function verradiovaluevatres(){
   document.getElementById("vavaluno").value = "";
  document.getElementById("vavaldos").value = "";
  document.getElementById("vavalcuatro").value = "";

  var vados = document.getElementById('vatres').value;
divvavaluno = document.getElementById("vavaluno");
              divvavaluno.style.display = "none";

  divvavoluno = document.getElementById("vavoluno");
              divvavoluno.style.display = "none";

  divvavaldos = document.getElementById("vavaldos");
              divvavaldos.style.display = "none"


divvavalcuatro = document.getElementById("vavalcuatro");
              divvavalcuatro.style.display = "none";

divvavoldos = document.getElementById("vavoldos");
              divvavoldos.style.display = "none"; 


divvavolcuatro = document.getElementById("vavolcuatro");
              divvavolcuatro.style.display = "none";

              divvavaltres = document.getElementById("vavaltres");
              divvavaltres.style.display = "block";              

  divvavoltres = document.getElementById("vavoltres");
              divvavoltres.style.display = "block";
}


function verradiovaluevacuatro(){
   document.getElementById("vavaluno").value = "";
  document.getElementById("vavaldos").value = "";
  document.getElementById("vavaltres").value = "";
  var vados = document.getElementById('vacuatro').value;

 divvavaluno = document.getElementById("vavaluno");
              divvavaluno.style.display = "none";

  divvavoluno = document.getElementById("vavoluno");
              divvavoluno.style.display = "none";

  divvavaldos = document.getElementById("vavaldos");
              divvavaldos.style.display = "none"

divvavaltres = document.getElementById("vavaltres");
              divvavaltres.style.display = "none";


divvavoldos = document.getElementById("vavoldos");
              divvavoldos.style.display = "none"; 

divvavoltres = document.getElementById("vavoltres");
              divvavoltres.style.display = "none"; 





              divvavalcuatro = document.getElementById("vavalcuatro");
              divvavalcuatro.style.display = "block";              

  divvavolcuatro = document.getElementById("vavolcuatro");
              divvavolcuatro.style.display = "block";
}
function verradiovaluevacinco(){ 
  var vaconservada = document.getElementById('vaconservada').value; 

}



</script>
<button type="button" class="btn btn-success" onclick="vamas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vamas" class="form-control">
<script type="text/javascript">
  function vamas(){
 vamas = document.getElementById("vamas");
              vamas.style.display = "block";
  }
</script><!-- End VALVULA AORTICA -->
<br>

 
<label for="usr" style="font-size: 20px">Aorta ascendente: </label><br>
<input type="radio" name="aa" id="aauno" value="1" checked onclick="verradiovalueaauno();">
<label for="aiuno" style="font-size: 15px" >diámetros conservados</label><br>
<input type="radio" name="aa" id="aados" value="2" onclick="verradiovalueaados();">
<label for="aidos" style="font-size: 15px">Dilatada</label><br>

<br><br>

<script type="text/javascript">

function verradiovalueaauno(){
  var aauno = document.getElementById('aauno').value;
  
}

function verradiovalueaados(){ 
  var aados = document.getElementById('aados').value;

}

</script>
<button type="button" class="btn btn-success" onclick="aamas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="aamas" class="form-control">
<script type="text/javascript">
  function aamas(){
 aamas = document.getElementById("aamas");
              aamas.style.display = "block";
  }
</script>
<label for="usr" style="font-size: 20px">Cavidades derechas:</label><br>

<input type="radio" name="cddd" id="cddduno" value="1" checked onclick="verradiovaluecddduno();">
<label for="aiuno" style="font-size: 15px" >Dimensiones conservados</label><br>
<input type="radio" name="cddd" id="cddddos" value="2" onclick="verradiovaluecddddos();">
<label for="aidos" style="font-size: 15px">Dimensiones levemente aumentadas</label><br>
<input type="radio" name="cddd"value="3" id="cdddtres" onclick="verradiovaluecdddtres();">
<label for="aitres" style="font-size: 15px">Dimensiones moderadamente aumentadas</label><br>
<input type="radio" name="cddd" value="4" id="cdddcuatro" onclick="verradiovaluecdddcuatro();">
<label for="aicuatro" style="font-size: 15px">Dimensiones severamente aumentadas</label><br>
<br><br>

<script type="text/javascript">

function verradiovaluecddduno(){
  var cddduno = document.getElementById('cddduno').value;
 
}

function verradiovaluecddddos(){ 
  var cddddos = document.getElementById('cddddos').value;
  
}

function verradiovaluecdddtres(){ 
  var cdddtres = document.getElementById('cdddtres').value; 

}

function verradiovaluecdddcuatro(){ 
  var cdddcuatro = document.getElementById('cdddcuatro').value;

}

</script>
 <button type="button" class="btn btn-success" onclick="cdmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="cdmas" class="form-control">
<script type="text/javascript">
  function cdmas(){
 cdmas = document.getElementById("cdmas");
              cdmas.style.display = "block";
  }
</script>
 <label for="usr" style="font-size: 15px">Función sistólica del VD preservada (TAPSE   mm).</label><br>
<input type="radio" name="cdfsfs" id="cdfsfsuno" value="1" checked onclick="verradiovalueuno();">
<label for="cdfsfsuno" style="font-size: 15px" >levemente deprimida</label><br>
<input type="radio" name="cdfsfs" id="cdfsfsdos" value="2" onclick="verradiovaluedos();">
<label for="cdfsfsdos" style="font-size: 15px">moderadamente deprimida</label><br>
<input type="radio" name="cdfsfs"value="3" id="cdfsfstres" onclick="verradiovaluetres();">
<label for="cdfsfstres" style="font-size: 15px">severamente deprimida</label><br>
<input type="radio" name="cdfsfs" value="4" id="cdfsfscuatro" onclick="verradiovaluecuatro();">
<label for="cdfsfscuatro" style="font-size: 15px">VCI con diámetros normales  y colapso inspiratorio mayor a 50%</label><br>


<script type="text/javascript">

function verradiovalueuno(){
  var cdfsfsuno = document.getElementById('cdfsfsuno').value;

}

function verradiovaluedos(){ 
  var cdfsfsdos = document.getElementById('cdfsfsdos').value;

}

function verradiovaluetres(){ 
  var cdfsfstres = document.getElementById('cdfsfstres').value; 

}

function verradiovaluecuatro(){ 
  var cdfsfscuatro = document.getElementById('cdfsfscuatro').value;


</script>
<button type="button" class="btn btn-success" onclick="cdfsmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="cdfsmas" class="form-control">
<script type="text/javascript">
  function cdfsmas(){
 cdfsmas = document.getElementById("cdfsmas");
              cdfsmas.style.display = "block";
  }
</script>
<label for="usr" style="font-size: 20px">Válvula pulmonar: </label><br>
<input type="radio" name="vp" id="vpuno" value="1" onclick="verradiovaluevpuno();">
<label for="aiuno" style="font-size: 15px" >estructura y funcionalidad conservada</label><br>


<br><br>

<script type="text/javascript">

function verradiovaluevpuno(){
  var vpuno = document.getElementById('vpuno').value;

}



</script>
<button type="button" class="btn btn-success" onclick="vpmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vpmas" class="form-control">
<script type="text/javascript">
  function vpmas(){
 vpmas = document.getElementById("vpmas");
              vpmas.style.display = "block";
  }
</script>
<!-- ======= VALVULA TRICUSPIDE ======= -->
 <label for="usr" style="font-size: 20px;">Válvula tricúspide:</label><br>

<input type="radio" style="margin-left: 20px" checked name="vt" id="vtconservada" value="5" checked onclick="vtconservada();">
<label for="" style="font-size: 15px" id="vtconservadalabel">estructura y funcionalidad conservada</label><br><br>

<div id="vtinsuficiencialeveocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="vt" id="vtinsuficiencialeveradio" value="6"onclick="vtinsuficiencialeveocultar();">
<label for="" style="font-size: 15px" id="vtinsuficiencialeveolabel">insuficiencia leve</label><br></div>


 <table id="vt"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vtinduficiencialeveradiomostrar" style="display: none"><input type="radio" name="vt" id="vtuno" value="0" onclick="vtinsuficiencialevemostrar();"></th></div>
 
   <th><div id="vtinduficiencialevevalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vtvaluno" class="form-control"></th></div>
    <th style="" id="vtvoluno"><div id="vtinduficiencialevelabelmostrar" style="display: none;color:#33cc33">insuficiencia leve</th></div>

</tr></div> <tr>
  </table >

<div id="vtinsuficienciamoderadaocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="vt" id="vtinsuficienciamoderadaradio" value="6"onclick="verradiovaluevtinsuficienciamoderada();">
<label for="" style="font-size: 15px;" id="vtinsuficienciamoderadaolabel">insuficiencia moderada</label><br></div>


 <table id="vt"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vtinduficienciamoderadaradiomostrar" style="display: none"><input type="radio" name="vt" id="vtdos" value="0" onclick="verradiovaluevtdos();"></th></div>
 
   <th><div id="vtinduficienciamoderadavalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vtvaldos" class="form-control"></th></div>
    <th style="" id="vtvoldos"><div id="vtinduficienciamoderadalabelmostrar" style="display: none;color: orange">insuficiencia moderada</th></div>

</tr></div> <tr>
  </table >

<div id="vtinsuficienciaseveraocultar" style="display: block;">
<input type="radio" style="margin-left: 20px" name="vt" id="vtinsuficienciaseveraradio" value="6"onclick="verradiovaluevtinsuficienciasevera();">
<label for="" style="font-size: 15px;" id="vtinsuficienciaseveraolabel">insuficiencia severa</label><br></div>


 <table id="vt"style="width: 55%;border: 1px solid #eee;">

  <tr>
 
  <th style="width: 0.5%;"><div id="vtinduficienciaseveraradiomostrar" style="display: none"><input type="radio" name="vt" id="vttres" value="0" onclick="verradiovaluevtdos();"></th></div>
 
   <th><div id="vtinduficienciaseveravalmostrar" style="display: none"><input type="text" style=";text-align: left;width: 700px" id="vtvaltres" class="form-control"></th></div>
    <th style="" id="vtvoltres"><div id="vtinduficienciaseveralabelmostrar" style="display: none;color: red">insuficiencia severa</th></div>

</tr></div> <tr>
  </table >


<script type="text/javascript">




function vtconservada(){

  
vtinsuleveocultar = document.getElementById("vtinsuficiencialeveocultar");
              vtinsuleveocultar.style.display = "block";
             
             vtinsuleveradiomostrar = document.getElementById("vtinduficiencialeveradiomostrar");
              vtinsuleveradiomostrar.style.display = "none";

              vtinsulevevalmostrar = document.getElementById("vtinduficiencialevevalmostrar");
              document.getElementById("vtvaluno").value = "";
              vtinsulevevalmostrar.style.display = "none";

              vtinsulevelabelmostrar = document.getElementById("vtinduficiencialevelabelmostrar");
              vtinsulevelabelmostrar.style.display = "none";
              

              vtinsumoderadaocultar = document.getElementById("vtinsuficienciamoderadaocultar");
              vtinsumoderadaocultar.style.display = "block";
             
             vtinsumoderadaradiomostrar = document.getElementById("vtinduficienciamoderadaradiomostrar");
              vtinsumoderadaradiomostrar.style.display = "none";

              vtinsumoderadavalmostrar = document.getElementById("vtinduficienciamoderadavalmostrar");
              document.getElementById("vtvaldos").value = "";
              vtinsumoderadavalmostrar.style.display = "none";

              vtinsumoderadalabelmostrar = document.getElementById("vtinduficienciamoderadalabelmostrar");
              vtinsumoderadalabelmostrar.style.display = "none";

                vtinsuseveraocultar = document.getElementById("vtinsuficienciaseveraocultar");
              vtinsuseveraocultar.style.display = "block";
             
             vtinsuseveraradiomostrar = document.getElementById("vtinduficienciaseveraradiomostrar");
              vtinsuseveraradiomostrar.style.display = "none";

              vtinsuseveravalmostrar = document.getElementById("vtinduficienciaseveravalmostrar");
              document.getElementById("vtvaltres").value = "";
              vtinsuseveravalmostrar.style.display = "none";

              vtinsuseveralabelmostrar = document.getElementById("vtinduficienciaseveralabelmostrar");
              vtinsuseveralabelmostrar.style.display = "none";

              vtinsuseveraocultar = document.getElementById("vtinsuficienciaseveraocultar");
              vtinsuseveraocultar.style.display = "block";
             
             vtinsuseveraradiomostrar = document.getElementById("vtinduficienciaseveraradiomostrar");
              vtinsuseveraradiomostrar.style.display = "none";

              vtinsuseveravalmostrar = document.getElementById("vtinduficienciaseveravalmostrar");
              vtinsuseveravalmostrar.style.display = "none";

              vtinsuseveralabelmostrar = document.getElementById("vtinduficienciaseveralabelmostrar");
              vtinsuseveralabelmostrar.style.display = "none";
              document.getElementById("vtconservado").checked = false; 
              



}


    function vtinsuficiencialeveocultar(){
vtinsuleveocultar = document.getElementById("vtinsuficiencialeveocultar");
              vtinsuleveocultar.style.display = "none";
             
             vtinsuleveradiomostrar = document.getElementById("vtinduficiencialeveradiomostrar");
              vtinsuleveradiomostrar.style.display = "block";

              vtinsulevevalmostrar = document.getElementById("vtinduficiencialevevalmostrar");
              vtinsulevevalmostrar.style.display = "block";

              vtinsulevelabelmostrar = document.getElementById("vtinduficiencialevelabelmostrar");
              vtinsulevelabelmostrar.style.display = "block";

             
              document.getElementById("vtuno").checked = true;
              document.getElementById("vtconservada").checked = false; 

vtinsumoderadaocultar = document.getElementById("vtinsuficienciamoderadaocultar");
              vtinsumoderadaocultar.style.display = "block";
             
             vtinsumoderadaradiomostrar = document.getElementById("vtinduficienciamoderadaradiomostrar");
              vtinsumoderadaradiomostrar.style.display = "none";

              vtinsumoderadavalmostrar = document.getElementById("vtinduficienciamoderadavalmostrar");
              document.getElementById("vtvaldos").value = "";
              vtinsumoderadavalmostrar.style.display = "none";

              vtinsumoderadalabelmostrar = document.getElementById("vtinduficienciamoderadalabelmostrar");
              vtinsumoderadalabelmostrar.style.display = "none";

              vtinsuseveraocultar = document.getElementById("vtinsuficienciaseveraocultar");
              vtinsuseveraocultar.style.display = "block";
             
             vtinsuseveraradiomostrar = document.getElementById("vtinduficienciaseveraradiomostrar");
              vtinsuseveraradiomostrar.style.display = "none";

              vtinsuseveravalmostrar = document.getElementById("vtinduficienciaseveravalmostrar");
              document.getElementById("vtvaltres").value = "";
              vtinsuseveravalmostrar.style.display = "none";

              vtinsuseveralabelmostrar = document.getElementById("vtinduficienciaseveralabelmostrar");
              vtinsuseveralabelmostrar.style.display = "none";
              
              

  }
      function verradiovaluevtinsuficienciamoderada(){
vtinsumoderadaocultar = document.getElementById("vtinsuficienciamoderadaocultar");
              vtinsumoderadaocultar.style.display = "none";
             
             vtinsumoderadaradiomostrar = document.getElementById("vtinduficienciamoderadaradiomostrar");
              vtinsumoderadaradiomostrar.style.display = "block";

              vtinsumoderadavalmostrar = document.getElementById("vtinduficienciamoderadavalmostrar");
              vtinsumoderadavalmostrar.style.display = "block";

              vtinsumoderadalabelmostrar = document.getElementById("vtinduficienciamoderadalabelmostrar");
              vtinsumoderadalabelmostrar.style.display = "block";
              document.getElementById("vtdos").checked = true;
              vtinsuleveocultar = document.getElementById("vtinsuficiencialeveocultar");
              vtinsuleveocultar.style.display = "block";
             
             vtinsuleveradiomostrar = document.getElementById("vtinduficiencialeveradiomostrar");
              vtinsuleveradiomostrar.style.display = "none";

              vtinsulevevalmostrar = document.getElementById("vtinduficiencialevevalmostrar");
              document.getElementById("vtvaluno").value = "";
              vtinsulevevalmostrar.style.display = "none";

              vtinsulevelabelmostrar = document.getElementById("vtinduficiencialevelabelmostrar");
              vtinsulevelabelmostrar.style.display = "none";

              vtinsuseveraocultar = document.getElementById("vtinsuficienciaseveraocultar");
              vtinsuseveraocultar.style.display = "block";
             
             vtinsuseveraradiomostrar = document.getElementById("vtinduficienciaseveraradiomostrar");
              vtinsuseveraradiomostrar.style.display = "none";

              vtinsuseveravalmostrar = document.getElementById("vtinduficienciaseveravalmostrar");
              vtinsuseveravalmostrar.style.display = "none";

              vtinsuseveralabelmostrar = document.getElementById("vtinduficienciaseveralabelmostrar");
              document.getElementById("vtvaltres").value = "";
              vtinsuseveralabelmostrar.style.display = "none"
              document.getElementById("vtconservada").checked = false; 

            
              

  }
      function verradiovaluevtinsuficienciasevera(){
vtinsuseveraocultar = document.getElementById("vtinsuficienciaseveraocultar");
              vtinsuseveraocultar.style.display = "none";
             
             vtinsuseveraradiomostrar = document.getElementById("vtinduficienciaseveraradiomostrar");
              vtinsuseveraradiomostrar.style.display = "block";

              vtinsuseveravalmostrar = document.getElementById("vtinduficienciaseveravalmostrar");
              vtinsuseveravalmostrar.style.display = "block";

              vtinsuseveralabelmostrar = document.getElementById("vtinduficienciaseveralabelmostrar");
              vtinsuseveralabelmostrar.style.display = "block";
              document.getElementById("vttres").checked = true;

              vtinsuleveocultar = document.getElementById("vtinsuficiencialeveocultar");
              vtinsuleveocultar.style.display = "block";
             
             vtinsuleveradiomostrar = document.getElementById("vtinduficiencialeveradiomostrar");
              vtinsuleveradiomostrar.style.display = "none";

              vtinsulevevalmostrar = document.getElementById("vtinduficiencialevevalmostrar");
              document.getElementById("vtvaluno").value = "";
              vtinsulevevalmostrar.style.display = "none";

              vtinsulevelabelmostrar = document.getElementById("vtinduficiencialevelabelmostrar");
              vtinsulevelabelmostrar.style.display = "none";
              vtinsumoderadaocultar = document.getElementById("vtinsuficienciamoderadaocultar");
              vtinsumoderadaocultar.style.display = "block";
             
             vtinsumoderadaradiomostrar = document.getElementById("vtinduficienciamoderadaradiomostrar");
              vtinsumoderadaradiomostrar.style.display = "none";

              vtinsumoderadavalmostrar = document.getElementById("vtinduficienciamoderadavalmostrar");
              document.getElementById("vtvaldos").value = "";
              vtinsumoderadavalmostrar.style.display = "none";

              vtinsumoderadalabelmostrar = document.getElementById("vtinduficienciamoderadalabelmostrar");
              vtinsumoderadalabelmostrar.style.display = "none";
              document.getElementById("vtconservada").checked = false; 
              

  }

</script>

<script type="text/javascript">



function verradiovaluevtuno(){
  document.getElementById("vtvaldos").value = "";
  document.getElementById("vtvaltres").value = "";
  document.getElementById("vtvalcuatro").value = "";

  var vtuno = document.getElementById('vtuno').value;

  divvtvaluno = document.getElementById("vtvaluno");
              divvtvaluno.style.display = "block";

  divvtvoluno = document.getElementById("vtvoluno");
              divvtvoluno.style.display = "block";

  divvtvaldos = document.getElementById("vtvaldos");
              divvtvaldos.style.display = "none"

divvtvaltres = document.getElementById("vtvaltres");
              divvtvaltres.style.display = "none";

divvtvalcuatro = document.getElementById("vtvalcuatro");
              divvtvalcuatro.style.display = "none";

divvtvoldos = document.getElementById("vtvoldos");
              divvtvoldos.style.display = "none"; 

divvtvoltres = document.getElementById("vtvoltres");
              divvtvoltres.style.display = "none"; 

divvtvolcuatro = document.getElementById("vtvolcuatro");
              divvtvolcuatro.style.display = "none";

}

function verradiovaluevtdos(){

 document.getElementById("vtvaluno").value = "";
  document.getElementById("vtvaltres").value = "";
  document.getElementById("vtvalcuatro").value = "";

  var vtdos = document.getElementById('vtdos').value;

   divvtvaluno = document.getElementById("vtvaluno");
              divvtvaluno.style.display = "none";

  divvtvoluno = document.getElementById("vtvoluno");
              divvtvoluno.style.display = "none";


divvtvaltres = document.getElementById("vtvaltres");
              divvtvaltres.style.display = "none";

divvtvalcuatro = document.getElementById("vtvalcuatro");
              divvtvalcuatro.style.display = "none";


divvtvoltres = document.getElementById("vtvoltres");
              divvtvoltres.style.display = "none"; 

divvtvolcuatro = document.getElementById("vtvolcuatro");
              divvtvolcuatro.style.display = "none";

  

  divvtvaldos = document.getElementById("vtvaldos");
              divvtvaldos.style.display = "block";              

  divvtvoldos = document.getElementById("vtvoldos");
              divvtvoldos.style.display = "block";
}

function verradiovaluevttres(){
   document.getElementById("vtvaluno").value = "";
  document.getElementById("vtvaldos").value = "";
  document.getElementById("vtvalcuatro").value = "";

  var vtdos = document.getElementById('vttres').value;
divvtvaluno = document.getElementById("vtvaluno");
              divvtvaluno.style.display = "none";

  divvtvoluno = document.getElementById("vtvoluno");
              divvtvoluno.style.display = "none";

  divvtvaldos = document.getElementById("vtvaldos");
              divvtvaldos.style.display = "none"


divvtvalcuatro = document.getElementById("vtvalcuatro");
              divvtvalcuatro.style.display = "none";

divvtvoldos = document.getElementById("vtvoldos");
              divvtvoldos.style.display = "none"; 


divvtvolcuatro = document.getElementById("vtvolcuatro");
              divvtvolcuatro.style.display = "none";

              divvtvaltres = document.getElementById("vtvaltres");
              divvtvaltres.style.display = "block";              

  divvtvoltres = document.getElementById("vtvoltres");
              divvtvoltres.style.display = "block";
}


function verradiovaluevtcuatro(){
   document.getElementById("vtvaluno").value = "";
  document.getElementById("vtvaldos").value = "";
  document.getElementById("vtvaltres").value = "";
  var vtdos = document.getElementById('vtcuatro').value;

 divvtvaluno = document.getElementById("vtvaluno");
              divvtvaluno.style.display = "none";

  divvtvoluno = document.getElementById("vtvoluno");
              divvtvoluno.style.display = "none";

  divvtvaldos = document.getElementById("vtvaldos");
              divvtvaldos.style.display = "none"

divvtvaltres = document.getElementById("vtvaltres");
              divvtvaltres.style.display = "none";


divvtvoldos = document.getElementById("vtvoldos");
              divvtvoldos.style.display = "none"; 

divvtvoltres = document.getElementById("vtvoltres");
              divvtvoltres.style.display = "none"; 





              divvtvalcuatro = document.getElementById("vtvalcuatro");
              divvtvalcuatro.style.display = "block";              

  divvtvolcuatro = document.getElementById("vtvolcuatro");
              divvtvolcuatro.style.display = "block";
}
function verradiovaluevtcinco(){ 
  var vtconservada = document.getElementById('vtconservada').value; 

}



</script>
<button type="button" class="btn btn-success" onclick="vtmas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="vtmas" class="form-control">
<script type="text/javascript">
  function vtmas(){
 vtmas = document.getElementById("vtmas");
              vtmas.style.display = "block";
  }
</script><!-- End VALVULA TRICUSPIDE -->

<label for="usr" style="font-size: 20px;">Pericardio: </label><br>
<input type="radio" name="pe" id="peuno" value="1" checked onclick="verradiovalueuno();">
<label for="peuno" style="font-size: 15px" >libre</label><br>
<input type="radio" name="pe" id="pedos" value="2" onclick="verradiovaluedos();">
<label for="pedos" style="font-size: 15px">derrame pericárdico leve</label><br>
<input type="radio" name="pe"value="3" id="petres" onclick="verradiovaluetres();">
<label for="petres" style="font-size: 15px">derrame pericárdico moderado</label><br>
<input type="radio" name="pe" value="4" id="pecuatro" onclick="verradiovaluecuatro();">
<label for="pecuatro" style="font-size: 15px">derrame pericárdico severo</label><br>

<br><br>

<script type="text/javascript">

function verradiovalueuno(){
  var peuno = document.getElementById('peuno').value;

}

function verradiovaluedos(){ 
  var pedos = document.getElementById('pedos').value;
 
}

function verradiovaluetres(){ 
  var petres = document.getElementById('petres').value; 

}

function verradiovaluecuatro(){ 
  var pecuatro = document.getElementById('pecuatro').value;
 
}


</script>
<button type="button" class="btn btn-success" onclick="pemas();" style="margin-left: 18px;font-size: 20px;height: 30px;line-height: 0.1px">...</button><br><br>
<input type="text" style="display:none;width: 800px;margin-left: 20px" id="pemas" class="form-control">
<script type="text/javascript">
  function pemas(){
 pemas = document.getElementById("pemas");
              pemas.style.display = "block";
  }
</script><br>
<div style="text-align: center">
  <label for="usr" style="font-size: 20px;text-decoration:underline;text-align: center">CONCLUSIONES:</label><br>
  <input type="text" style="margin-left: 20px;height: 100px;max-width: 100%" id="conclusiones" class="form-control"></div><br><br>
 </section>
 <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
