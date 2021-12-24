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
$html = file_get_contents('https://www.farmaonline.com/comodin');
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
 ?>
<!--ID LINK IMAGENES--> 
<div class="flex-container" style="line-height: 1.2em;margin-top: 0.5em;display: block">
<?php

$hrefs = $xpath->evaluate("//li[@class='bebe---maternidad']//img/@src");
    $arrayimagesuno=[]; 
     for ($i = 0; $i <1; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
           
             $res=str_replace(' ', '', $res);


             $arrayimagesuno[]=$res;
 ////echo '<b>'.$res.'</b><br>';

            }
  $newarrayimagesuno=[]; 

             for ($i = 0; $i <sizeof( $arrayimagesuno); $i++) {
              $arrayimagesuno[($i)]=$res;
              $newarrayimagesuno[]=$res; 
           
              ////echo '<b>'.$res.'</b><br>';           
  
      }

$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//img/@src");
    $arrayimagesdos=[]; 
     for ($i = 0; $i <11; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
           
            


    $res=str_replace(' ', '', $res);
             $arrayimagesdos[]=$res;
 ////echo '<b>'.$res.'</b><br>';

            }
  $newarrayimagesdos=[]; 

             for ($i = 0; $i <sizeof( $arrayimagesdos); $i++) {

              $res=$arrayimagesdos[($i)];
              $newarrayimagesdos[]=$res; 
          
            // //echo '<b>'.$res.'</b><br>';           
  
      }

      $hrefs = $xpath->evaluate("//li[@class='bebe---maternidad']//img/@src");
    $arrayimagestres=[]; 
     for ($i = 1; $i <2; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
     $res=str_replace(' ', '', $res);
             $arrayimagestres[]=$res;
 ////echo '<b>'.$res.'</b><br>';

            }
  $newarrayimagestres=[]; 

             for ($i = 0; $i <sizeof( $arrayimagestres); $i++) {

              $res=$arrayimagestres[($i)];
              $newarrayimagestres[]=$res; 
            
             ////echo '<b>'.$res.'</b><br>';           
  
      }


$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//img/@src");
    $arrayimagescuatro=[]; 
     for ($i = 11; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
     $res=str_replace(' ', '', $res);
             $arrayimagescuatro[]=$res;
////echo '<b>'.sizeof($arrayimages).'</b><br>';

            }
  $newarrayimagescuatro=[]; 

             for ($i = 0; $i <sizeof( $arrayimagescuatro); $i++) {

             $res=$arrayimagescuatro[($i)];
              $newarrayimagescuatro[]=$res;  
             
             ////echo '<b>'.$res.'</b><br>';           
  
      }


      $newarrayimages = array_merge($newarrayimagesuno, $newarrayimagesdos,$newarrayimagestres,$newarrayimagescuatro);
      for ($i = 0; $i <sizeof( $newarrayimages); $i++) {
              $res=$newarrayimages[($i)]; 
           
            //echo '<b>'.$res.'</b><br>';  
//echo '<b>'.sizeof($newarrayimages).'</b><br>';
  
      }
        

      ?>
  </div>






 <!--OFERTAS FARMALINK??-->
<div class="flex-container" style="line-height: 3.8em;display: block">   
<?php
$hrefs = $xpath->evaluate("//li[@class='bebe---maternidad']");
    $arraysalesuno=[]; 
     for ($i = 0; $i <1; $i++) {
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

             $arraysalesuno[]=$res;
 ////echo '<b>'.$res.'</b><br>';

            }
  $newarraysalesuno=[]; 

             for ($i = 0; $i <sizeof( $arraysalesuno); $i++) {
              $arraysalesuno[($i)]=$res;
              $newarraysalesuno[]=$res; 
           
              ////echo '<b>'.$res.'</b><br>';           
  
      }

$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']");
    $arraysalesdos=[]; 
     for ($i = 0; $i <11; $i++) {
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

             $arraysalesdos[]=$res;
 ////echo '<b>'.$res.'</b><br>';

            }
  $newarraysalesdos=[]; 

             for ($i = 0; $i <sizeof( $arraysalesdos); $i++) {

              $res=$arraysalesdos[($i)];
              $newarraysalesdos[]=$res; 
          
            // //echo '<b>'.$res.'</b><br>';           
  
      }

      $hrefs = $xpath->evaluate("//li[@class='bebe---maternidad']");
    $arraysalestres=[]; 
     for ($i = 1; $i <2; $i++) {
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

             $arraysalestres[]=$res;
 ////echo '<b>'.$res.'</b><br>';

            }
  $newarraysalestres=[]; 

             for ($i = 0; $i <sizeof( $arraysalestres); $i++) {

              $res=$arraysalestres[($i)];
              $newarraysalestres[]=$res; 
            
             ////echo '<b>'.$res.'</b><br>';           
  
      }


$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']");
    $arraysalescuatro=[]; 
     for ($i = 11; $i <$hrefs->length; $i++) {
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

             $arraysalescuatro[]=$res;
////echo '<b>'.sizeof($arraysales).'</b><br>';

            }
  $newarraysalescuatro=[]; 

             for ($i = 0; $i <sizeof( $arraysalescuatro); $i++) {

             $res=$arraysalescuatro[($i)];
              $newarraysalescuatro[]=$res;  
             
             ////echo '<b>'.$res.'</b><br>';           
  
      }


      $newarraysales = array_merge($newarraysalesuno, $newarraysalesdos,$newarraysalestres,$newarraysalescuatro);
      for ($i = 0; $i <sizeof( $newarraysales); $i++) {
              $res=$newarraysales[($i)]; 
           if($newarraysales[($i)]==0){
        $newarraysales[($i)]='No Hay Oferta!';
     
}
            //echo '<b>'.$res.'</b><br>';  
                
////echo '<b>'.sizeof($newarraysales).'</b><br>';
  
      }

      ?>
  </div>


<!--NOMBRE DEL PRODUCTO-->

<div class="flex-container" style="line-height: 3.8em;display: block">
  <?php
$hrefs = $xpath->evaluate("//*[@class='product-name']");
    $arraynames=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
          $res=strtoupper($res);
             $arraynames[]=$res;

            ////echo '<b>'.$res.'</b><br>';
            
  }
  $newarraynames=[]; 
  for ($i = 0; $i <sizeof( $arraynames)-1; $i++) {
         $res=$arraynames[($i)];
  $newarraynames[]=$res;
              
            //echo '<b>'.$res.'</b><br>';
  
             //echo '<b>'.sizeof($newarraynames).'</b><br>';           
  
      }?>


 

  </div>

<!-------------------------------------------------------------------------------->
<!--ID PRODUCTO--> 
<div class="flex-container" style="line-height: 1.2em;margin-top: 0.5em;">
<?php

$hrefs = $xpath->evaluate("//li[@class='bebe---maternidad']//img/@src");
    $arrayproductsuno=[]; 
     for ($i = 0; $i <1; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
           
            


$First = '0 / ';
$Second = '_';
$Firstpos=strpos($res, $First);
$Secondpos=strpos($res, $Second);
$res = substr($res, $Firstpos, $Secondpos);
 $res=substr($res,-7,7);
             $arrayproductsuno[]=$res;
 //echo '<b>'.$res.'</b><br>';

            }
  $newarrayproductsuno=[]; 

             for ($i = 0; $i <sizeof( $arrayproductsuno); $i++) {
              $arrayproductsuno[($i)]=$res;
              $newarrayproductsuno[]=$res; 
           
              //echo '<b>'.$res.'</b><br>';           
  
      }

$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//img/@src");
    $arrayproductsdos=[]; 
     for ($i = 0; $i <11; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
           
            


$First = '0 / ';
$Second = '_';
$Firstpos=strpos($res, $First);
$Secondpos=strpos($res, $Second);
$res = substr($res, $Firstpos, $Secondpos);
 $res=substr($res,-7,7);
             $arrayproductsdos[]=$res;
 //echo '<b>'.$res.'</b><br>';

            }
  $newarrayproductsdos=[]; 

             for ($i = 0; $i <sizeof( $arrayproductsdos); $i++) {

              $res=$arrayproductsdos[($i)];
              $newarrayproductsdos[]=$res; 
          
            // //echo '<b>'.$res.'</b><br>';           
  
      }

      $hrefs = $xpath->evaluate("//li[@class='bebe---maternidad']//img/@src");
    $arrayproductstres=[]; 
     for ($i = 1; $i <2; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
           
            


$First = '0 / ';
$Second = '_';
$Firstpos=strpos($res, $First);
$Secondpos=strpos($res, $Second);
$res = substr($res, $Firstpos, $Secondpos);
 $res=substr($res,-7,7);
             $arrayproductstres[]=$res;
 //echo '<b>'.$res.'</b><br>';

            }
  $newarrayproductstres=[]; 

             for ($i = 0; $i <sizeof( $arrayproductstres); $i++) {

              $res=$arrayproductstres[($i)];
              $newarrayproductstres[]=$res; 
            
             //echo '<b>'.$res.'</b><br>';           
  
      }


$hrefs = $xpath->evaluate("//li[@class='cuidado-de-adulto']//img/@src");
    $arrayproductscuatro=[]; 
     for ($i = 11; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
           
            


$First = '0 / ';
$Second = '_';
$Firstpos=strpos($res, $First);
$Secondpos=strpos($res, $Second);
$res = substr($res, $Firstpos, $Secondpos);
 $res=substr($res,-7,7);
             $arrayproductscuatro[]=$res;
//echo '<b>'.sizeof($arrayproducts).'</b><br>';

            }
  $newarrayproductscuatro=[]; 

             for ($i = 0; $i <sizeof( $arrayproductscuatro); $i++) {

             $res=$arrayproductscuatro[($i)];
              $newarrayproductscuatro[]=$res;  
             
             //echo '<b>'.$res.'</b><br>';           
  
      }


      $newarrayproducts = array_merge($newarrayproductsuno, $newarrayproductsdos,$newarrayproductstres,$newarrayproductscuatro);
      for ($i = 0; $i <sizeof( $newarrayproducts); $i++) {
              $res=$newarrayproducts[($i)]; 
           
           // echo '<b>'.$res.'</b><br>';  
            
//echo '<b>'.sizeof($newarrayproducts).'</b><br>';
  //echo '<b>'.$res.'</b><br>';
      }
        

      ?>
  </div>
<!-------------------------------------------------------------------------------->
<!--LINK COMPRAR FARMAONLINE-->
<div class="flex-container" style="line-height: 3.8em;display: block">
  <?php
$hrefs = $xpath->evaluate("//*[@class='product-name']");
    $arraylinkfarma=[]; 
     for ($i = 0; $i <$hrefs->length-1; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
             $res = mb_strtolower($res);
             $res=str_replace('ñ', '', $res);
             $res=str_replace(')', '', $res);
             $res=str_replace('(', '', $res);
             $res=str_replace('/', '', $res);
             $res=str_replace('á', '', $res);
             $res=str_replace('é', '', $res);
             $res=str_replace('í', '', $res);
             $res=str_replace('ó', '', $res);
             $res=str_replace('ú', '', $res);
             

//VER PORQUE HAY ALGUNOS LINKS QUE NO LE ELIMINA TODOS LOS BLANCOS//
              $res= trim($res);
              $res= rtrim($res);
              $res= ltrim($res);
              $res=str_replace(' ', '-', $res);
        $res='https://www.farmaonline.com/comodin-'.$res.$newarrayproducts[($i)].'/p';


             $arraylinkfarma[]=$res;



          //echo '<b>'.sizeof($arraylinkfarma).'</b><br>';
           }
            
  $newarraylinkfarma=[]; 

             for ($i = 0; $i <sizeof( $arraylinkfarma); $i++) {

              $res=$arraylinkfarma[($i)]; 
              
             



              $newarraylinkfarma[]=$res;
            //echo '<b>'.$res.'</b><br>';    
             
 //echo '<b>'.sizeof($newarraylinkfarma).'</b><br>';
      }?>

  </div>

   
 



<!--PRECIO FARMAONLINE--> 
<div class="flex-container precio" style="line-height: 3.8em;display: block">      

<?php  
      //PRECIO FARMAONLINE ACTUAL, aparece tanto si hay o no OFERTA//
$hrefs = $xpath->evaluate("//*[@class='best-price']");


 $arrayprices=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {

             $href = $hrefs->item($i);
             $res=$href->textContent;          
              $arrayprices[]=$res; 
             ////echo '<b>'.$res.'</b><br>';
         
    }

       $newarraybestprices=[];
  
    for ($i = 0; $i <sizeof( $arrayprices); $i++) {
               $res=$arrayprices[($i)];
               $res=str_replace('$', '', $res);
               $res=(int)$res;
               $newarraybestprices[]=$res; 
              //echo '<b>'.$res.'</b><br>';
               

                 ////echo '<b>'.sizeof($newarraybestprices).'</b><br>';
      }
$hrefsagotado = $xpath->evaluate("//*[@class='out-of-stock']");
 $arraypricesagotado=[]; 
     for ($i = 0; $i <$hrefsagotado->length; $i++) {

             $href = $hrefsagotado->item($i);
             $res=$href->textContent;          
              $arraypricesagotado[]=$res; 
             ////echo '<b>'.$res.'</b><br>';
         
    }

       $newarraybestpricesagotado=[];
  
    for ($i = 0; $i <sizeof( $arraypricesagotado); $i++) {
              
               $newarraybestpriceagotado[]=$res;

 //echo '<b>'.$res.'</b><br>';
               

                 ////echo '<b>'.sizeof($newarraybestpricesagotado).'</b><br>';
             
             
                
             
      }


      $newarraybestpricefinal = array_merge($newarraybestprices, $newarraybestpriceagotado);
      for ($i = 0; $i <sizeof( $newarraybestpricefinal); $i++) {
              $res=$newarraybestpricefinal[($i)];
             

            //echo '<b>'.$res.'</b><br>';  


}?>


  <?php 
$arraysalesganancia=[];  
foreach($allsales as $allsale){
$res=$allsale->Precio;
 
$arraysalesganancia[] =$res;

// echo '<b>'.$res.'</b><br>';

}
?>

  </div>
  
</div>


 


 <div class="grid-container-uno" style=";margin-top: -15px">  
<!--NOMBRE PRODUCTO-->

<div class="flex-container" style="line-height: 3.8em;width: -10px"> 







<!--SUIZO TIENE OFERTA Y FARMAONLINE TIENE OFERTA-->
@for ($i = 0; $i < sizeof( $newarraysales); $i++)
@if($newarraysales[($i)]=='No Hay Oferta!')
 <section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 450px;text-align: center;width: 100%" 
<b><img src="{{$newarrayimages[($i)]}}" style="color: black; width="200" height="200" "><br>{{"$"}}{{$arraynames[($i)]}}</b><br>

<label > Farmaonline</label>

<b><a href="{{$newarraylinkfarma[($i)]}}"style="color:black;text-align: center;color:black;text-align: center;width: 50%;background-color:#ff8278;text-align: center" class="btn col-xl">{{"$"}}{{$newarraybestpricefinal[($i)]}}<b><strong style="color: white"></strong></b></a></b><br>
<script type="text/javascript">
  $newarraybestpricefinal[($i)]=parseInt($newarraybestpricefinal);
</script>
<label style="margin-left: 40px">Suizo</label>
<b><a href="http://caba30.suizoargentina.com.ar/stock?buscar%5Bcodigo%5D={{$newarrayproducts[($i)]}}&buscar%5Btipo_codigo%5D=1&buscarbtn=Buscar&buscarbtn=Buscar&buscar%5Btipo_busqueda%5D=codigo"style="color:black;text-align: center;width: 50%;background-color:#25aae1;text-align: center" class="btn col-xl">{{"$"}}{{$newarraybestpricefinal[($i)]}}<b><strong style="color: white"></strong></b></a></b><br>
</section>
@endif
@endfor
<!--SUIZO NO TIENE OFERTA, FARMAONLINE TIENE OFERTA-->








</div>

</div>
</section>
</body>
</html>
 