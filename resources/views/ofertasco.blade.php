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
$html = file_get_contents('https://www.cotodigital3.com.ar/sitios/cdigi/browse?_dyncharset=utf-8&Dy=1&Ntt=cafe+dolca&Nty=1&Ntk=&siteScope=ok&_D%3AsiteScope=+&atg_store_searchInput=cafe+dolca&idSucursal=200&_D%3AidSucursal=+&search=Ir&_D%3Asearch=+&_DARGS=%2Fsitios%2Fcartridges%2FSearchBox%2FSearchBox.jsp');
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
 ?>

<!--PRECIO COTO-->

<div class="flex-container" style="line-height: 3.8em;">

  <?php
  echo '<b>'.'PRECIO'.'</b><br>';
 //cuando no hay oferta atg_store_newPrice
  //cuando hay oferta 
$hrefs = $xpath->evaluate("//*[@class='second_price_discount_container']/span");

    $arrayprices=[]; 
     for ($i =0; $i <$hrefs->length; $i++) {
      
             $href = $hrefs->item($i);
             $res=$href->textContent;
            
             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res= ltrim($res);
             




             $arrayprices[]=$res;



          //echo '<b>'.sizeof($arrayprices).'</b><br>';
          //echo '<b>'.$res.'</b><br>';
           }
            
  $newarrayprices=[]; 

             for ($i = 0; $i <sizeof( $arrayprices)/3; $i++) {

              $res=$arrayprices[($i)*3]; 
              
            



              $newarrayprices[]=$res;

              //echo '<b>'.sizeof($newarrayprices).'</b><br>';
                      
  
      }
$res = min($newarrayprices);
echo '<b>'.$res.'</b><br>';  

      ?>

  </div>

<!--NOMBRE DEL PRODUCTO COTO-->

<div class="flex-container" style="line-height: 3.8em;">
<?php
echo '<b>'.'PRODUCTO'.'</b><br>';
$hrefs = $xpath->evaluate("//*[@class='descrip_full']");
    $arraynames=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
          
             $arraynames[]=$res;

            //echo '<b>'.$res.'</b><br>';
            
  }
  $newarraynames=[]; 
  for ($i = 0; $i <sizeof( $arraynames); $i++) {
         $res=$arraynames[($i)];
  $newarraynames[]=$res;
         $res=strtoupper($res);     
              //echo '<b>'.sizeof($newarraynames).'</b><br>';
               echo '<b>'.$res.'</b><br>';           
  
      }?>
<?php
  echo '<b>'.'PRECIO'.'</b><br>';
 
$hrefs = $xpath->evaluate("//*[@class='second_price_discount_container']/span");

    $arrayprices=[]; 
     for ($i =0; $i <$hrefs->length; $i++) {
      
             $href = $hrefs->item($i);
             $res=$href->textContent;
            
             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res= ltrim($res);
             




             $arrayprices[]=$res;



          //echo '<b>'.sizeof($arrayprices).'</b><br>';
          //echo '<b>'.$res.'</b><br>';
           }
            
  $newarrayprices=[]; 

             for ($i = 0; $i <sizeof( $arrayprices)/3; $i++) {

              $res=$arrayprices[($i)*3]; 
              
            



              $newarrayprices[]=$res;
              //echo '<b>'.sizeof($newarrayprices).'</b><br>';
             echo '<b>'.$res.'</b><br>';           
  
      }?>

 

  </div>



<!--CODIGO COTO-->

<div class="flex-container" style="line-height: 3.8em;display: none">

  <?php
  echo '<b>'.'CODIGO COTO'.'</b><br>';
  
$hrefs = $xpath->evaluate("//*[@class='span_codigoplu']");//CODIGO DEL PRODUCTO//
    $arraycod=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;
             $res=str_replace('(', '', $res);
             $res=str_replace(')', '', $res); 
              $res= trim($res);
              $res= rtrim($res);
              $res= ltrim($res);
             




             $arraycod[]=$res;



         // echo '<b>'.$res.'</b><br>';
           }
            
  $newarraycod=[]; 

             for ($i = 0; $i <sizeof( $arraycod); $i++) {

              $res=$arraycod[($i)]; 
              
            



              $newarraycod[]=$res;
            //  echo '<b>'.$res.'</b><br>';           
  
      }?>

  </div>
   
 
<!--LINK COMPRAR COTO--> 
<div class="flex-container" style="line-height: 1.2em;margin-top: 0.5em;display: none">
<?php
echo '<b>'.'LINK'.'</b><br><br><br>';
$hrefs = $xpath->evaluate("//*[@class='descrip_full']");
    $arraylinks=[]; 
     for ($i = 0; $i <$hrefs->length; $i++) {
             $href = $hrefs->item($i);
             $res=$href->textContent;   
            $res=str_replace(' ', '+', $res);
            $res=str_replace('+++++', '+', $res);
            $res=str_replace('+&', '', $res);
             
            $res='https://www.cotodigital3.com.ar/sitios/cdigi/browse?_dyncharset=utf-8&Dy=1&Ntt='.$res;
             $arraylinks[]=$res;
             echo '<b>'.$res.'</b><br>';
            echo '<b>'.sizeof($arraylinks).'</b><br><br><br><br>'; 
            }

             for ($i = 0; $i <sizeof( $arraylinks); $i++) {

              
                //echo '<b>'.$arraylinks[($i)].'</b><br>';           
  
      }?>
  </div>




</div>


 


 
</section>
</body>
</html>
 