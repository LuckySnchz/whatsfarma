<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFERTAS</title>

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
      <input type="text" disabled placeholder="Bucar Por Marcas" name="search">
      <button type="submit" disabled><i class="fa fa-search"></i></button>
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






 <!--OFERTAS FARMALINK??-->
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

          //  echo '<b>'.$arraysales[($i)].'</b><br>';
      }?>
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
  $newarraynames=[]; 
  for ($i = 0; $i <sizeof( $arraynames)-1; $i++) {
         $res=$arraynames[($i)];
  $newarraynames[]=$res;
              
               //echo '<b>'.sizeof($newarraynames).'</b><br>';           
  
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
  $newarrayproducts=[]; 

             for ($i = 0; $i <sizeof( $arrayproducts); $i++) {

              $res=$arrayproducts[($i)]; 
              $newarrayproducts[]=$res;
              //echo '<b>'.sizeof($newarrayproducts).'</b><br>';           
  
      }?>
  </div>
<!--LINK COMPRAR FARMAONLINE-->

<div class="flex-container" style="line-height: 3.8em;"><?php
$hrefs = $xpath->evaluate("//*[@class='product-name']");
    $arraylinkfarma=[]; 
     for ($i = 0; $i <$hrefs->length-1; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
             $res=str_replace('ñ', '', $res);
             $res=str_replace(')', '', $res);
             $res=str_replace('(', '', $res);
             $res=str_replace('/', '', $res);

            // $res='https://www.farmaonline.com/plenitud-'.$res.$newarrayproducts[($i)].'/p';

//VER PORQUE HAY ALGUNOS LINKS QUE NO LE ELIMINA TODOS LOS BLANCOS//
  
              $res= rtrim($res);
              $res= ltrim($res);
              $res=str_replace(' ', '-', $res);
            $res='https://www.farmaonline.com/plenitud-'.$res.$newarrayproducts[($i)].'/p';

$res= trim($res);
             $arraylinkfarma[]=$res;



         // echo '<b>'.$res.'</b><br>';
           }
            
  $newarraylinkfarma=[]; 

             for ($i = 0; $i <sizeof( $arraylinkfarma); $i++) {

              $res=$arraylinkfarma[($i)]; 
              
              $res= trim($res);
                $res=str_replace(' ', '-', $res);



              $newarraylinkfarma[]=$res;
            //  echo '<b>'.$res.'</b><br>';           
  
      }?>

  </div>
   
 



<!--PRECIO FARMAONLINE--> 
<div class="flex-container precio" style="line-height: 3.8em;display: none">   
 

      

<?php  



      //PRECIO FARMAONLINE ACTUAL, aparece tanto si hay o no OFERTA//
$hrefs = $xpath->evaluate("//*[@class='best-price']");
 $arrayprices=[]; 
   $fact=0.6;
     for ($i = 0; $i <$hrefs->length; $i++) {

             $href = $hrefs->item($i);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res =  (float) $res;



             if($arraysales[($i)]!=='2da80off') {

              $arrayprices[]=$res; 
             
         
    }

             if(($arraysales[($i)]=='2da80off')&&($res<1000)) {

              $arrayprices[]=$res*0.6; 
             
         
    }

       if(($arraysales[($i)]=='2da80off')&&($res>=1000)) {

              $arrayprices[]=$res*600; 
             
         
    }
  }

       $newarraybestprices=[];
  $fact=0.84;
    for ($i = 0; $i <sizeof( $arrayprices); $i++) {
               $res=$arrayprices[($i)];
               $res=str_replace('$', '', $res);
               $res=(int)$res*$fact;
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
               $res=(int)$res*$fact;
               $newarrayoldprices[]=$res; 
                //echo '<b>'.$res.'</b><br>';           
  
      }?>
  </div>
  <!--PRECIO OFERTAS SUIZO--> 
<div class="flex-container" style="line-height: 3.8em;display: none"> 

 <?php  
$arraypricesuizo=[];
for ($i = 0; $i < sizeof( $arrayproducts)-1; $i++){
foreach($allsales as $allsale){
if($allsale->Codigo==$arrayproducts[($i)]){
$res=($allsale->Precio);
$arraypricesuizo[]=$res;

    //echo '<b>'.$res.'</b><br>';

}}}?>

  <?php 

   $arraysalescodigodebarras=[]; 

  for ($i = 0; $i <sizeof( $newarrayproducts); $i++) { 
  foreach($allsales as $allsale){
    if($newarrayproducts[($i)]==$allsale->Codigo){
  $res=$allsale->CodigoDeBarra;
 
 $arraysalescodigodebarras[] =$res;

//echo '<b>'.$res.'</b><br>';

}
}
}
 
?>
  </div>

</div>


 


 <div class="grid-container-uno" style=";margin-top: 60px">  




<!--NOMBRE PRODUCTO-->

<div class="flex-container" style="line-height: 3.8em;width: -10px"> 
@for ($i = 0; $i < sizeof( $arraynames)-1; $i++)
@if($arraysales[($i)]!=='No Hay Oferta!')
 <section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 500px;text-align: center;width: 100%" >



<!--NOMBRE PRODUCTO-->





<b><img src="{{$arrayimages[($i)]}}" style="color: black; width="200" height="200" "><br>{{$arraynames[($i)]}}</b><br>
 



<label > Farmaonline</label>

@foreach($allsales as $allsale)


@if(($arraysales[($i)]!=='No Hay Oferta!')&&($allsale->Codigo==$newarrayproducts[($i)])&&($arraysales[($i)]=='2da80off'))
<b><a href="{{$newarraylinkfarma[($i)]}}"style="color:black;text-align: center;color:white;text-align: center;width: 50%;background-color:red" class="btn col-xl"><b>{{"$"}}{{$arrayprices[($i)]}}{{"!!!"}}<strong style="color: white"></strong></b></a></b><br>


<label style="margin-left: 40px">Suizo</label>
<b><a href="http://caba30.suizoargentina.com.ar/stock?buscar%5Bcodigo%5D={{$newarrayproducts[($i)]}}&buscar%5Btipo_codigo%5D=1&buscarbtn=Buscar&buscarbtn=Buscar&buscar%5Btipo_busqueda%5D=codigo"style="color:black;text-align: center;width: 50%;background-color:#25aae1;" class="btn col-xl"><b>{{"$"}}{{($allsale->Precio)}}<strong style="color: white"></strong></b></a></b><br>

@endif


@if(($arraysales[($i)]!=='No Hay Oferta!')&&($allsale->Codigo==$newarrayproducts[($i)])&&($arraysales[($i)]!=='2da80off'))
<b><a href="{{$newarraylinkfarma[($i)]}}"style="color:black;text-align: center;color:black;text-align: center;width: 50%;background-color:#ff8278" class="btn col-xl"><b>{{"$"}}{{$arrayprices[($i)]}}<strong style="color: white"></strong></b></a></b><br>


<label style="margin-left: 40px">Suizo</label>
<b><a href="http://caba30.suizoargentina.com.ar/stock?buscar%5Bcodigo%5D={{$newarrayproducts[($i)]}}&buscar%5Btipo_codigo%5D=1&buscarbtn=Buscar&buscarbtn=Buscar&buscar%5Btipo_busqueda%5D=codigo"style="color:black;text-align: center;width: 50%;background-color:#25aae1;" class="btn col-xl"><b>{{"$"}}{{($allsale->Precio)}}<strong style="color: white"></strong></b></a></b><br>

@endif

@endforeach


</section>
@endif
@endfor

</div>
@foreach($allsales as $allsale)
@endforeach

</div>
</section>
</body>
</html>
 