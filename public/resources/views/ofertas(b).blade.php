<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRAPPING WEB</title>

   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https:fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    
    .grid-container {


  display: grid;
  grid-template-columns: auto auto auto;
  width: 90%;
  margin-left: 5%;

}

    .grid-container-uno {


  display: grid;
  grid-template-columns: auto;
  width: 90%;
  margin-left: 5%;

}
    .grid-container-dos {


  display: grid;
  grid-template-columns: auto auto;
  width: 40%;


}

.grid-item { 
 

  font-size: 10px;
  text-align: right;

}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
</style>
</head>
<body>
    <!--FARMAONLINE
https://devhints.io/xpath
https://stackoverrun.com/es/q/4034565-->

<section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 10000px;text-align: center;width: 100%" > 

 <section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 180px;text-align: center;width: 90%; margin-left: 5%" >
    <h1>
OFERTOMETRO!</h1>
<h2>Compara Tus Ofertas</h2><br>
</section>

 <section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 50px;text-align: center;width: 90%; margin-left: 5%;margin-top: -28px" >
       
{{ $marcasearch ?? '' }}
  <div class="search-container">
    <form action="ofertashoy" method="get">
      <input type="text" placeholder="Bucar Por Marcas" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>

</div>
    </section> 

           


 <div class="grid-container" style=";margin-top: -25px">   







<?php
$html = file_get_contents('https://www.farmaonline.com/plenitud');
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
 ?>

<!--VER PRODUCTO (LINK IMAGEN)--> 
<div class="flex-container" style="line-height: 1.2em;margin-top: 0.5em;display: none">
<?php
$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//img/@src");
    $arrayimages=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
            $res=str_replace(' ', '', $res);
            
             $arrayimages[]=$res;


            }

             for ($i = 0; $i <sizeof( $arrayimages); $i++) {

              
                //echo '<b>'.$arrayimages[($i)].'</b><br>';           
  
      }?>
  </div>



<!--ID PRODUCTO--> 
<div class="flex-container" style="line-height: 1.2em;margin-top: 0.5em;display: none">
<?php
$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//img/@src");
    $arrayproducts=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
           
            


$First = '0 / ';
$Second = '_';
$Firstpos=strpos($res, $First);
$Secondpos=strpos($res, $Second);
$res = substr($res, $Firstpos, $Secondpos);
 $res=substr($res,-7,7);
             $arrayproducts[]=$res;


            }

             for ($i = 0; $i <sizeof( $arrayproducts); $i++) {

              
               // echo '<b>'.$arrayproducts[($i)].'</b><br>';           
  
      }?>
  </div>


 <!--OFERTAS??-->
<div class="flex-container" style="line-height: 3.8em;display: none">   
<?php
$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']");
  $arraysales=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent; 

       
$First = '-';
$Second = 'mes';
$Firstpos=strpos($res, $First);
$Secondpos=strpos($res, $Second);


$res = substr($res, $Firstpos, $Secondpos);

$Firstbis = '-';
$Secondbis = 'mes';
$Firstposbis=strpos($res, $Firstbis);
$Secondposbis=strpos($res, $Secondbis);

$res = substr($res, $Firstposbis, $Secondposbis);
$res=str_replace('-', '', $res);

$arraysales[]=$res;

            
      }

      for ($i = 0; $i <sizeof( $arraysales); $i++) {
   

       if($arraysales[($i)]==0){
        $arraysales[($i)]='No Hay Oferta!';
     }

            // echo '<b>'.$arraysales[($i)].'</b><br>';
      }?>
  </div>

  <!--CODIGO DE PRODUCTO DE LA DROGUERIA-->
    <div class="flex-container codigo" style="line-height: 3.7em;display: none"><?php

$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//a[contains(@href, 'https://www.farmaonline.com/plenitud-')]/@ href");

    $arrayids=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
     
            
             $arrayids[]=$res;

          // echo '<b>'.$res.'</b><br>';
            
  
     
      }
      $newarrayids=[];
       for ($i = 0; $i <sizeof( $arrayids)/3; $i++) {

                 $newarrayids[]=$arrayids[($i*3)];
              
                 $ini=strlen ($arrayids[($i*3)])-9;
                 $res=substr($arrayids[($i*3)],0,-2);
                 $res=substr($res,$ini,7);
                 $newarrayids[]=$res;
                echo '<b>'.$res.'</b><br>';
           
      }   

      ?>

</div>
<!--NOMBRE DEL PRODUCTO-->

<div class="flex-container" style="line-height: 3.8em;display: none"><?php
$hrefs = $xpath->evaluate("//*[@class='product-name']");
    $arraynames=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
          $res=strtoupper($res);
             $arraynames[]=$res;

            //echo '<b>'.$res.'</b><br>';
            
  }



  ?>


 


  </div>

   
 <!--LINK A COMPRAR EN FARMAONLINE-->    
  <div class="flex-container"style="line-height: 1.2em;margin-top: 0.5em;display: none">   
<?php
  $hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//a[contains(@href, 'https://www.farmaonline.com/plenitud-')]/@ href");
       $arraylinks=[]; 
       $newarraylinks=[]; 
      for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
             //$res=str_replace('https://', '', $res);
            
             $arraylinks[]=$res;
              //echo '<b>'.$res.'</b><br>';        
      }
      ?>

</div>



<!--PRECIO FARMAONLINE--> 
<div class="flex-container precio" style="line-height: 3.8em;display: none">   
 

      

<?php  

//CODIGO FARMAONLINE//  
     $newarrayids=[];
       for ($i = 0; $i <sizeof( $arrayids)/3; $i++) {

                 $newarrayids[]=$arrayids[($i*3)];
              
                 $ini=strlen ($arrayids[($i*3)])-9;
                 $res=substr($arrayids[($i*3)],0,-2);
                 $res=substr($res,$ini,7);
                 $newarrayfinalids[]=$res;
                //echo '<b>'.$res.'</b><br>';
           
      }  
      //PRECIO FARMAONLINE ACTUAL, aparece tanto si hay o no OFERTA//
$hrefs = $xpath->evaluate("//*[@class='best-price']");
 $arrayprices=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {

             $href = $hrefs->item($i);
             $res=$href->textContent;          
              $arrayprices[]=$res; 
             //echo '<b>'.$res.'</b><br>';
         
    }

       $newarraybestprices=[];
  
    for ($i = 0; $i <sizeof( $arrayprices); $i++) {
               $res=$arrayprices[($i)];
               $res=str_replace('$', '', $res);
               $res=(int)$res;
               $newarraybestprices[]=$res; 
                //echo '<b>'.$res.'</b><br>';           
  
      }



        //PRECIO FARMAONLINE OLD, aparece tanto si hay o no OFERTA//
$hrefsold = $xpath->evaluate("//*[@class='old-price']");
$hrefsbest = $xpath->evaluate("//*[@class='best-price']");
 $arraypoldrices=[]; 
     for ($i = 0; $i <$hrefsbest->length; $i++) {

if($hrefsold->item($i)==null){
  $res='0';}else{
             $href = $hrefsold->item($i);
             $res=$href->textContent;}
              
             
               
            $arrayoldprices[]=$res; 
              
            echo '<b>'.$res.'</b><br>';
             }
         
    
    $newarraypoldrices=[];
    $fact=0.80;
    for ($i = 0; $i <sizeof( $arrayoldprices); $i++) {
               $res=$arrayoldprices[($i)];
               $res=str_replace('$', '', $res);
               $res=(int)$res/$fact;
               $newarrayoldprices[]=$res; 
                //echo '<b>'.$res.'</b><br>';           
  
      }






 for ($i = 0; $i <sizeof( $arraylinks)/3; $i++) {


                 $newarraylinks[]=$arraylinks[($i*3)];
               // echo '<b>'.$arraylinks[($i*3)].'</b><br>';
           
      }?>
  </div>
  <!--PRECIO SUIZO--> 
<div class="flex-container" style="line-height: 3.8em;display: none"> 

 <?php  
$newarraynosuizoids=[];
for ($i = 0; $i < sizeof( $newarrayids)-1; $i++){
foreach($allsales as $allsale){
if($allsale->Codigo==$newarrayfinalids[($i)]){
$res=$allsale->Codigo;
$newarraynosuizoids[]=$res;

    //echo '<b>'.$res.'</b><br>';

}}}?>
  </div>


  <!--PRECIO SUIZO FINAL--> 
<div class="flex-container" style="line-height: 3.8em;width: -10px;display: none"> 
<?php

 $newarrayfinalesids=json_encode($newarrayfinalids);

 $newarrayfinalesids=json_decode($newarrayfinalesids);//ARRAY

//echo '<b>'.$newarraynosuizoids[16].'</b><br>';

$arraypreciofinalsuizo=[];
for ($i = 0; $i < sizeof( $newarrayfinalesids); $i++){
 $num= $newarrayfinalesids[($i)];

if (in_array($num,$newarraynosuizoids)) {
  foreach($allsales as $allsale){
if($allsale->Codigo==$num){
  $res=$allsale->Precio*$fact;
  $res=round($res, 2)*1.235;
  $arraypreciofinalsuizo[]=$res;
    //echo '<b>'.$allsale->Precio*1.235.'</b><br>';
}
}
}
else{
   $res="No hay Oferta!";
   $arraypreciofinalsuizo[]=$res;
 //echo '<b>'.$nooferta.'</b><br>';
}
}
           
?>




  

  </div>
</div>


 


 <div class="grid-container-uno" style=";margin-top: 60px">  




<!--NOMBRE PRODUCTO-->

<div class="flex-container" style="line-height: 3.8em;width: -10px"> 
@for ($i = 0; $i < sizeof( $arraynames)-1; $i++)
 <section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 250px;text-align: center;width: 100%" >

 <img src="{{ asset('img/logos/cam.jpg') }}" style="width: 35px;height: 35px;margin-top: -25px;margin-left: -25px">

<!--NOMBRE PRODUCTO-->
<b><a href="{{$arrayimages[($i)]}}" style="color: black;">{{$arraynames[($i)]}}</a></b><br>

<!--PRECIO FARMAONLINE-->
<label > Farmaonline</label>

<b><a href="{{$newarraylinks[($i)]}}"style="color:black;text-align: center;color:black;text-align: center;width: 40%;background-color:#ff8278" class="btn col-xl"><b><strong style="">{{$arrayprices[($i)]}}</strong></b></a></b><br>
<!--PRECIO SUIZO-->
<!--SUIZO TIENE OFERTA-->

@if($arraysales[($i)]!=='No Hay Oferta!')
<label style="margin-left: 40px">Suizo</label>
<b><a href="http://caba30.suizoargentina.com.ar/stock?buscar%5Bcodigo%5D={{$newarrayfinalids[($i)]}}&buscar%5Btipo_codigo%5D=1&buscarbtn=Buscar&buscarbtn=Buscar&buscar%5Btipo_busqueda%5D=codigo"style="color:black;text-align: center;width: 40%;background-color:#25aae1;" class="btn col-xl"><b><strong style="">{{$arraypreciofinalsuizo[($i)]}}{{"suizo SI"}}</strong></b></a></b><br>

@endif
<!--SUIZO NO TIENE OFERTA Y FARMAONLINE NO TIENE OFERTA-->
@if(($arraysales[($i)]=='No Hay Oferta!')&&($arraysales[($i)]=='No Hay Oferta!'))
<label style="margin-left: 40px">Suizo</label>
<b><a href="http://caba30.suizoargentina.com.ar/stock?buscar%5Bcodigo%5D={{$newarrayfinalids[($i)]}}&buscar%5Btipo_codigo%5D=1&buscarbtn=Buscar&buscarbtn=Buscar&buscar%5Btipo_busqueda%5D=codigo"style="color:black;text-align: center;width: 40%;background-color:#25aae1;" class="btn col-xl"><b><strong style="">{{$newarraybestprices[($i)]*0.84}}{{"suizo NO tiene of Farmaonline NO"}}</strong></b></a></b><br>

@endif
<!--SUIZO NO TIENE OFERTA Y FARMAONLINE TIENE OFERTA-->
@if(($arraysales[($i)]=='No Hay Oferta!')&&($arraysales[($i)]!=='No Hay Oferta!'))
<label style="margin-left: 40px">Suizo</label>
<b><a href="http://caba30.suizoargentina.com.ar/stock?buscar%5Bcodigo%5D={{$newarrayfinalids[($i)]}}&buscar%5Btipo_codigo%5D=1&buscarbtn=Buscar&buscarbtn=Buscar&buscar%5Btipo_busqueda%5D=codigo"style="color:black;text-align: center;width: 40%;background-color:#25aae1;" class="btn col-xl"><b><strong style="">{{$newarrayoldprices[($i)]}}{{"suizo NO of Farmaonline SI"}}</strong></b></a></b><br>

@endif
</section>
@endfor

</div>

</div>



</section>

















</body>
</html>
 