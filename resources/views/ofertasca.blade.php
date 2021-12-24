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
$html = file_get_contents('https://supermercado.carrefour.com.ar/acondicionador-tresemme-detox-capilar-750-cc.html');
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
 ?>



<!--NOMBRE DEL PRODUCTO CARREFOUR-->

<div class="flex-container" style="line-height: 3.8em;">
<?php
echo '<b>'.'PRODUCTO'.'</b><br>';
$hrefs = $xpath->evaluate("//*[@class='title title-food truncate']");
    $arraynames=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
          $res=strtoupper($res);
             $arraynames[]=$res;

            //echo '<b>'.$res.'</b><br>';
            
  }
  $newarraynames=[]; 
  for ($i = 0; $i <sizeof( $arraynames); $i++) {
         $res=$arraynames[($i)];
  $newarraynames[]=$res;
              
               echo '<b>'.$res.'</b><br>';           
  
      }?>


 

  </div>





<!--PRECIO CARREFOUR--> 
<div class="flex-container precio" style="line-height: 3.8em;">   
  

<?php  

echo '<b>'.'PRECIO'.'</b><br>';

      //PRECIO CARREFOUR//
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");
 $arrayprices=[]; 
   $fact=0.6;
     for ($i = 0; $i <$hrefs->length; $i++) {

             $href = $hrefs->item($i);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res =  (float) $res;

   $arrayprices[]=$res; 

                         
             
         
    }

       $newarraybestprices=[];

    for ($i = 0; $i <sizeof( $arrayprices); $i++) {
               $res=$arrayprices[($i)];
               $res=str_replace('$', '', $res);
               $res=(float)$res;
               $newarraybestprices[]=$res; 
                echo '<b>'.$res.'</b><br>';           
  
      }?>
  </div>
  
</div>


 


 <div class="flex-container" style="line-height: 3.8em;">
<?php
echo '<b>'.'LINK'.'</b><br>';
$hrefs = $xpath->evaluate("//*[@class='title title-food truncate']");
    $arraylinks=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
          $res=strtolower($res);
          // $res=str_replace('  ', ' ', $res);
             // $res=str_replace(' ', '-', $res);
            
              $res=str_replace('
                í-', 'i-', $res);
               $res=str_replace('
                ú-', 'u-', $res);
                $res=str_replace('
                ó-', 'o-', $res);
                 $res=str_replace('
                é-', 'é-', $res);
                  $res=str_replace('
                -á', 'a-', $res);
              $res=str_replace('ñ', 'n', $res);
                  $res= trim($res);
              $res= rtrim($res);
              $res= ltrim($res);
              $res=str_replace(' ', '-', $res);

             $res=str_replace('arroz-doble-carolina-molinos-ala-500-g.', 
              'mg-arroz-doble-carolina-molinos-ala-500-g.', $res);

            $res=str_replace('arroz-aromático-dos-hermanos-500-g.', 
              'arroz-aromatico-dos-hermanos-500-g.', $res);


//OJO NO ELIMINA BLANCOS, EJ https://supermercado.carrefour.com.ar/arroz-doble-carolina-dos- hermanos-1-kg.html---https://supermercado.carrefour.com.ar/arroz- doble-carolina-molinos-ala-1-kg.html//

             
              
              $res='https://supermercado.carrefour.com.ar/'.$res.'html';
             $arraylinks[]=$res;

            echo '<b>'.$res.'</b><br>';
            
  }
 ?>


 




  </div>
   
 

<!--VER PRODUCTO CAREFOUR(LINK IMAGEN)--> 
<div class="flex-container" style="line-height: 1.2em;margin-top: 0.5em;">
<?php
echo '<b>'.'IMAGENES'.'</b><br>';
$hrefs = $xpath->evaluate("//*[@class='image']//img/@src");
    $arrayimages=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
            $res=str_replace(' ', '', $res);
            $res= trim($res);
              $res= rtrim($res);
              $res= ltrim($res);
             $arraylinks[]=$res;
//OJO NO ELIMINA BLANCOS, EJ: https://supermercado.carre/our.com.ar catálogo / producto / caché / 1 / small_image / 214x / 9df78eab33525d08d6e5fb8d27136e95 / 7/7 / 7790503198467_02_1.jpg---//
             //OJO, NO ES LA URL https://supermercado.carrefour.com.ar/media/catalog/product/cache/1/small_imageddb0d2d3b3d3d3bf3d3d3d3 /7/7791120021565_02.jpg-------https://supermercado.carrefour.com.car catalog / product / cache / 1 / small_image / 214x / 9df78eab33525d08d6e5fb8d27136e95 / 7/7 / 7790070411792_02.jpg---https: //supermercado.carrefour catálogo / producto / caché / 1 / small_image / 214x / 9df78eab33525d08d6e5fb8d27136e95 / 7/7 / 7790503198467_02_1.jpg---https://supermercado.carrefour.com.ar/media/catalog/product/cache/1/small_imageddb0d2d3b3d3d3bf3d3d3d3 /7/7791120021565_02.jpg---//
             $arrayimages[]=$res;
echo '<b>'.$res.'</b><br>';

            }

             for ($i = 0; $i <sizeof( $arrayimages); $i++) {

              
                //echo '<b>'.$arrayimages[($i)].'</b><br>';           
  
      }?>
  </div>
 
</section>
</body>
</html>
 