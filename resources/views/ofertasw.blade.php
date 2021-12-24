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



           


 <div class="grid-container" style=";margin-top: -25px">   




<!--PRECIO COTO--> 
<div class="grid-container" style=";margin-top: -25px">   


<!--PRECIO COTO-->

<div class="flex-container" style="line-height: 3.8em;">
<?php

 $arraylinkcarrefour=[]; 
 foreach ($luckycarts as $luckycart) {
   $linkcarrefour=$luckycart->Carrefourlink;
   $arraylinkcarrefour[]=$linkcarrefour;
 }

 $arraylinkcoto=[]; 
 foreach ($luckycarts as $luckycart) {
   $linkcoto=$luckycart->Cotolink;
   $arraylinkcoto[]=$linkcoto;
 }



 $arrayimagecoto=[]; 
 foreach ($luckycarts as $luckycart) {
   $imagecoto=$luckycart->Cotoimage;
   $arrayimagecoto[]=$imagecoto;
 }

?>
<!--PRECIO WALMART-->
<?php


      //PRECIO CARREFOUR//
 $arraypricescarrefour=[];  
$res0=0;
if($arraylinkcarrefour[(0)]=="NULL"){
// echo '<b>'.$res0.'</b><br>';


 $arraypricescarrefour[0]="NULL";
}

if($arraylinkcarrefour[(0)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(0)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");

     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res0 =  (float) $res;

   $arraypricescarrefour[0]=$res0; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    } 

    $res1=0;
    if($arraylinkcarrefour[(1)]=="NULL"){

       //echo '<b>'.$res1.'</b><br>';
 $arraypricescarrefour[1]="NULL";
}

    if($arraylinkcarrefour[(1)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(1)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res1 =  (float) $res;

   $arraypricescarrefour[1]=$res1; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    } 
 
   $res2=0;
    if($arraylinkcarrefour[(2)]=="NULL"){
      $arraypricescarrefour[2]="NULL";
      // echo '<b>'.$res2.'</b><br>';
    }

    if($arraylinkcarrefour[(2)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(2)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res2 =  (float) $res;

   $arraypricescarrefour[2]=$res2; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    } 
    
  
 $res3=0;
    if($arraylinkcarrefour[(3)]=="NULL"){
      $arraypricescarrefour[3]="NULL";
       //echo '<b>'.$res3.'</b><br>';
    }
    if($arraylinkcarrefour[(3)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(3)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res3 =  (float) $res;

   $arraypricescarrefour[3]=$res3; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    }
 

 $res4=0;
    if($arraylinkcarrefour[(4)]=="NULL"){
      $arraypricescarrefour[4]="NULL";
       //echo '<b>'.$res4.'</b><br>';
    }

    if($arraylinkcarrefour[(4)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(4)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res4 =  (float) $res;

   $arraypricescarrefour[4]=$res4; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    }
   
  $res5=0;
    if($arraylinkcarrefour[(5)]=="NULL"){
      $arraypricescarrefour[5]="NULL";
       //echo '<b>'.$res5.'</b><br>';
    }

    if($arraylinkcarrefour[(5)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(5)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res5=  (float) $res;

   $arraypricescarrefour[5]=$res5; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    }
  
 $res6=0;
    if($arraylinkcarrefour[(6)]=="NULL"){
      $arraypricescarrefour[6]="NULL";
       //echo '<b>'.$res6.'</b><br>';
    }
$res6=0;
    if($arraylinkcarrefour[(6)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(6)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res6 =  (float) $res;

   $arraypricescarrefour[6]=$res6; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    }
  $res7=0;
    if($arraylinkcarrefour[(7)]=="NULL"){
      $arraypricescarrefour[7]="NULL";
       //echo '<b>'.$res7.'</b><br>';
    }

if($arraylinkcarrefour[(7)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(7)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");
 $arraypricescarrefour=[]; 

     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res7 =  (float) $res;

   $arraypricescarrefour[7]=$res7; 
// echo '<b>'.$res.'</b><br>';
                         
             
         }
    }
 
  $res8=0;
    if($arraylinkcarrefour[(8)]=="NULL"){
      $arraypricescarrefour[8]="NULL";
       //echo '<b>'.$res8.'</b><br>';
    }

    if($arraylinkcarrefour[(8)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(8)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res8 =  (float) $res;

   $arraypricescarrefour[8]=$res8; 
 //echo '<b>'.$res.'</b><br>';
                         
             
         }
    }
   
  $res9=0;
    if($arraylinkcarrefour[(9)]=="NULL"){
      $arraypricescarrefour[9]="NULL";
       //echo '<b>'.$res9.'</b><br>';
    }
    if($arraylinkcarrefour[(9)]!=="NULL"){
$html = file_get_contents($arraylinkcarrefour[(9)]);
      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina
      $xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("//*[@class='price-box productos-destacados-price']");


     for ($i = 0; $i <1; $i++) {

             $href = $hrefs->item(0);
             $res=$href->textContent; 

              $res=str_replace('$', '', $res);
             $res9=  (float) $res;

   $arraypricescarrefour[9]=$res9; 
// echo '<b>'.$res.'</b><br>';

                         
             
         }
    }
 $arraypricescarrefour[0]=$res0; 
 $arraypricescarrefour[1]=$res1; 
 $arraypricescarrefour[2]=$res2; 
 $arraypricescarrefour[3]=$res3; 
 $arraypricescarrefour[4]=$res4; 
 $arraypricescarrefour[5]=$res5;
 $arraypricescarrefour[6]=$res6; 
 $arraypricescarrefour[7]=$res7; 
 $arraypricescarrefour[8]=$res8; 
 $arraypricescarrefour[9]=$res9; 

     for ($i = 0; $i <sizeof($arraypricescarrefour); $i++) {

$res=$arraypricescarrefour[($i)]; 
                       
//echo '<b>'.$res.'</b><br>';

      }
        ?>



  <?php
  //cuando no hay oferta *[@class='atg_store_newPrice']
  //cuando hay oferta *[@class='first_price_discount_container']/span
  //cuando hay oferta+comunidad *[@class='second_price_discount_container']/span

//PRECIO 1 COTO
  
  $arrayprices=[];
$html = file_get_contents($arraylinkcoto[(0)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res11=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res11= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res12=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res12= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res13=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res13= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res11>0){
  $res1=$res11;
}
if($res12>0){
  $res1=$res12;
}
if($res13>0){
  $res1=$res13;
}
$arrayprices[1]=$res1;

//echo '<b>'.$res1.'</b><br>';
//PRECIO 2


$html = file_get_contents($arraylinkcoto[(1)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res21=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res21= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res22=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res22= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res23=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res23= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res21>0){
  $res2=$res21;
}
if($res22>0){
  $res2=$res22;
}
if($res23>0){
  $res2=$res23;
}

$arrayprices[2]=$res2;
//echo '<b>'.$res2.'</b><br>';

//PRECIO 3 COTO


$html = file_get_contents($arraylinkcoto[(2)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res31=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res31= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res32=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res32= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res33=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res33= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res31>0){
  $res3=$res31;
}
if($res32>0){
  $res3=$res32;
}
if($res33>0){
  $res3=$res33;
}

$arrayprices[3]=$res3;
//echo '<b>'.$res3.'</b><br>';


//PRECIO 4 COTO


$html = file_get_contents($arraylinkcoto[(3)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res41=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res41= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res42=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res42= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res43=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res43= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res41>0){
  $res4=$res41;
}
if($res42>0){
  $res4=$res42;
}
if($res43>0){
  $res4=$res43;
}

$arrayprices[4]=$res4;
//echo '<b>'.$res4.'</b><br>';


//PRECIO 5 COTO


$html = file_get_contents($arraylinkcoto[(4)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res51=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res51= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res52=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res52= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res53=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res53= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res51>0){
  $res5=$res51;
}
if($res52>0){
  $res5=$res52;
}
if($res53>0){
  $res5=$res53;
}

$arrayprices[5]=$res5;
//echo '<b>'.$res5.'</b><br>';



//PRECIO 6 COTO


$html = file_get_contents($arraylinkcoto[(5)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res61=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res61= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res62=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res62= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res63=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res63= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res61>0){
  $res6=$res61;
}
if($res62>0){
  $res6=$res62;
}
if($res63>0){
  $res6=$res63;
}

$arrayprices[6]=$res6;
//echo '<b>'.$res6.'</b><br>';

//PRECIO 7 COTO


$html = file_get_contents($arraylinkcoto[(6)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res71=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res71= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res72=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res72= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res73=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res73= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res71>0){
  $res7=$res71;
}
if($res72>0){
  $res7=$res72;
}
if($res73>0){
  $res7=$res73;
}

$arrayprices[7]=$res7;
//echo '<b>'.$res7.'</b><br>';

//PRECIO 8


$html = file_get_contents($arraylinkcoto[(7)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res81=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res81= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res82=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res82= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res83=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res83= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res81>0){
  $res8=$res81;
}
if($res82>0){
  $res8=$res82;
}
if($res83>0){
  $res8=$res83;
}

$arrayprices[8]=$res8;
//echo '<b>'.$res8.'</b><br>';


//PRECIO 9 COTO


$html = file_get_contents($arraylinkcoto[(8)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res91=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res91= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res92=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res92= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res93=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res93= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res91>0){
  $res9=$res91;
}
if($res92>0){
  $res9=$res92;
}
if($res93>0){
  $res9=$res93;
}

$arrayprices[9]=$res9;
//echo '<b>'.$res9.'</b><br>';


//PRECIO 10


$html = file_get_contents($arraylinkcoto[(9)]);

      $dom = new DOMDocument(); // creamos un nuevo documento
      @$dom->loadHTML($html); // cargamos el código html
      // obtenemos todo de la pagina

      $xpath = new DOMXPath($dom);
    
 

$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");
$count1=0;
foreach ($hrefs as $href) {
$count1=$count1+1;
    
          
   }  
       //echo '<b>'.$count1.'</b><br>';
          


$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");
$count2=0;
foreach ($hrefs as $href) {
$count2=$count2+1;
    
          
   } 
    //echo '<b>'.$count2.'</b><br>';   



$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");
$count3=0;
foreach ($hrefs as $href) {
$count3=$count3+1;
    
          
   } 
  
    //echo '<b>'.$count3.'</b><br>'; 


//PRECIO REGULAR SIN NINGUNA OFERTA
   
$res101=0;
if($count1==7&&$count2==0&&$count3==0){
$hrefs = $xpath->query("//*[@class='atg_store_newPrice']");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res101= ltrim($res);       




           



        //echo '<b>'.$res11.'</b><br>';
          
             

            }

}

//PRECIO CON OFERTA
$res102=0;
if($count1==6&&$count2==1&&$count3==0){
$hrefs = $xpath->query("//*[@class='first_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res102= ltrim($res);       




       



      //echo '<b>'.$res12.'</b><br>';
          
             

            }


}
//PRECIO CON OFERTA + COMUNIDAD
$res103=0;
if($count1==6&&$count2==1&&$count3==1){
$hrefs = $xpath->query("//*[@class='second_price_discount_container']/span");

     for ($i =0; $i <1; $i++) {
      
             $href = $hrefs->item(0);
             $res=$href->textContent;

             $res=str_replace('PRECIO CONTADO', '', $res);
             $res=str_replace('$', '', $res);   
             $res=str_replace('c / u  ', '', $res);  
             $res=str_replace('c/u', '', $res);         
              $res= trim($res);
              $res= rtrim($res);
              $res103= ltrim($res);       







       //echo '<b>'.$res13.'</b><br>';
          
             

            }
}
if($res101>0){
  $res10=$res101;
}
if($res102>0){
  $res10=$res102;
}
if($res103>0){
  $res10=$res103;
}

$arrayprices[10]=$res10;

//echo '<b>'.$res10.'</b><br>';


  
     for ($i = 1; $i <sizeof($arrayprices)+1; $i++) {

$res=$arrayprices[($i)]; 
                       
//echo '<b>'.$res.'</b><br>';

      }
       ?>




  </div>

  
</div>


 





 <div class="grid-container-uno" style=";margin-top: 60px">  

<div class="flex-container" style="line-height: 3.8em;width: -10px"> 

@for ($i = 0; $i < sizeof( $arrayimagecoto); $i++)


 <section class="container jumbotron shadow p-3 mb-5 bg-white rounded"style="height: 620px;text-align: center;width: 100%; margin-left: 5%" >


<b><img src="{{$arrayimagecoto[($i)]}}" style="color: black; width="200" height="200" "><br></b><br>
@if(($arraypricescarrefour[($i)]!==0)&&($arrayprices[($i+1)] > $arraypricescarrefour[($i)]))

<b><a href=""style="color:black;text-align: center;width: 100px;background-color:red;height: 100px;color: white;font-size: 2em;padding-top: 30px;border-radius: 50px" class="btn col-xl"><b><strong style="">{{"$"}}
  {{$arrayprices[($i+1)]-$arraypricescarrefour[($i)]}}</strong></b></a></b><br>

@endif

@if(($arraypricescarrefour[($i)]!==0)&&($arrayprices[($i+1)] < $arraypricescarrefour[($i)]))

<b><a href=""style="color:black;text-align: center;width: 100px;background-color:red;height: 100px;color: white;font-size: 2em;padding-top: 30px;border-radius: 50px" class="btn col-xl"><b><strong style="">{{"$"}}
  {{$arraypricescarrefour[($i)]-$arrayprices[($i+1)]}}</strong></b></a></b><br>

@endif

<label style="margin-left: 20px;font-size: 2em">Coto</label><br>
<b><a href="{{$arraylinkcoto[($i)]}}"style="color:black;text-align: center;width: 100%;background-color:orange;height: 60px;font-size: 2em" class="btn col-xl"><b><strong style="">
  {{"$"}}{{$arrayprices[($i+1)]}}</strong></b></a></b><br>

@if($arraylinkcarrefour[($i)]!="NULL")
<label style="margin-left: 20px;font-size: 2em">Carrefour</label><br>
<b><a href="{{$arraylinkcarrefour[($i)]}}"style="color:black;text-align: center;width: 100%;background-color:rgb(3, 155, 229);height: 60px;;font-size: 2em" class="btn col-xl"><b><strong style="">{{"$"}}{{$arraypricescarrefour[($i)]}}</strong></b></a></b><br>@endif


</section>
@endfor

</div>

</div>

</section>
</body>
</html>
 