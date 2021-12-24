<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get("/demo",function(){
	return view('demo');

});

Route::get("/farmacia",function(){
	return view('farmacia');

});

Route::get("/marcas",function(){

  $marcas= App\Marca::all();
   $productos= App\Producto::all();
  return view('marcas',compact('marcas','productos'));

});

Route::get("/enviar",function(){
    $constante=0;

    return view('enviar',compact("constante"));

});

Route::get("/inicio",function(){

	return view('inicio');

});



Route::get("/perfumeria",function(){
	     $constante=0;
      $productos= App\Producto::all(); 

      foreach ($productos as $producto) {         
            $nombrevariable=$producto->NombreVariable;
            $$nombrevariable=" ";
            $nombreprecio=$producto->NombrePrecio;
            $$nombreprecio=" ";
            $nombretotalprecio=$producto->NombreTotalPrecio;
            $$nombretotalprecio=" ";
            $nombreproducto=$producto->NombreProducto;
            $$nombreproducto=" ";
            $nombrepirce=$producto->NombrePirce;
             $$nombrepirce=" ";
         }     
         
       $nombre=" ";
       $whatsapp=" ";
       $totalapagarprincipal="";	  
	     return view('perfumeria',compact('constante','productos','nombre','whatsapp','totalapagarprincipal','productouno','uno','preciouno','totalpreciouno','pirceuno',
'productodos','dos','preciodos','totalpreciodos','pircedos',
'productotres','tres','preciotres','totalpreciotres','pircetres',
'productocuatro','cuatro','preciocuatro','totalpreciocuatro','pircecuatro',
'productocinco','cinco','preciocinco','totalpreciocinco','pircecinco',
'productoseis','seis','precioseis','totalprecioseis','pirceseis',
'productosiete','siete','preciosiete','totalpreciosiete','pircesiete',
'productoocho','ocho','precioocho','totalprecioocho','pirceocho',
'productonueve','nueve','precionueve','totalprecionueve','pircenueve',
'productodiez','diez','preciodiez','totalpreciodiez','pircediez',
'productoonce','once','precioonce','totalprecioonce','pirceonce',
'productodoce','doce','preciodoce','totalpreciodoce','pircedoce',
'productotrece','trece','preciotrece','totalpreciotrece','pircetrece',
'productocatorce','catorce','preciocatorce','totalpreciocatorce','pircecatorce',
'productoquince','quince','precioquince','totalprecioquince','pircequince',
'productodieciseis','dieciseis','preciodieciseis','totalpreciodieciseis','pircedieciseis',
'productodiecisiete','diecisiete','preciodiecisiete','totalpreciodiecisiete','pircediecisiete',
'productodieciocho','dieciocho','preciodieciocho','totalpreciodieciocho','pircedieciocho',
'productodiecinueve','diecinueve','preciodiecinueve','totalpreciodiecinueve','pircediecinueve',
'productoveinte','veinte','precioveinte','totalprecioveinte','pirceveinte',
'productoveintiuno','veintiuno','precioveintiuno','totalprecioveintiuno','pirceveintiuno',
'productoveintidos','veintidos','precioveintidos','totalprecioveintidos','pirceveintidos',
'productoveintitres','veintitres','precioveintitres','totalprecioveintitres','pirceveintitres',
'productoveinticuatro','veinticuatro','precioveinticuatro','totalprecioveinticuatro','pirceveinticuatro',
'productoveinticinco','veinticinco','precioveinticinco','totalprecioveinticinco','pirceveinticinco',
'productoveintiseis','veintiseis','precioveintiseis','totalprecioveintiseis','pirceveintiseis',
'productoveintisiete','veintisiete','precioveintisiete','totalprecioveintisiete','pirceveintisiete',
'productoveintiocho','veintiocho','precioveintiocho','totalprecioveintiocho','pirceveintiocho',
'productoveintinueve','veintinueve','precioveintinueve','totalprecioveintinueve','pirceveintinueve',
'productotreinta','treinta','preciotreinta','totalpreciotreinta','pircetreinta'));
});




Route::get("/mujeres",function(){
       $constante=0;


         $productos= App\Mujer::all();
      
         foreach ($productos as $producto) {
         
            $nombrevariable=$producto->NombreVariable;
            $$nombrevariable=" ";//unom



            $nombreprecio=$producto->NombrePrecio;
            $$nombreprecio=" ";//preciounom


            $nombretotalprecio=$producto->NombreTotalPrecio;
            $$nombretotalprecio=" ";//totalpreciounom


            $nombreproducto=$producto->NombreProducto;
            $$nombreproducto=" ";//productounom

            $nombrepirce=$producto->NombrePirce;
             $$nombrepirce=" ";//pirceuno

         }

         
       


       $nombre=" ";

       $whatsapp=" ";

$totalapagarmujeres="";


      
      return view('mujeres',compact('constante','productos','nombre','whatsapp','totalapagarmujeres',
'productounom','unom','preciounom','totalpreciounom','pirceunom',
'productodosm','dosm','preciodosm','totalpreciodosm','pircedosm',
'productotresm','tresm','preciotresm','totalpreciotresm','pircetresm',
'productocuatrom','cuatrom','preciocuatrom','totalpreciocuatrom','pircecuatrom',
'productocincom','cincom','preciocincom','totalpreciocincom','pircecincom',
'productoseism','seism','precioseism','totalprecioseism','pirceseism',
'productosietem','sietem','preciosietem','totalpreciosietem','pircesietem',
'productoochom','ochom','precioochom','totalprecioochom','pirceochom',
'productonuevem','nuevem','precionuevem','totalprecionuevem','pircenuevem',
'productodiezm','diezm','preciodiezm','totalpreciodiezm','pircediezm',
'productooncem','oncem','preciooncem','totalpreciooncem','pirceoncem',
'productodocem','docem','preciodocem','totalpreciodocem','pircedocem',
'productotrecem','trecem','preciotrecem','totalpreciotrecem','pircetrecem',
'productocatorcem','catorcem','preciocatorcem','totalpreciocatorcem','pircecatorcem',
'productoquincem','quincem','precioquincem','totalprecioquincem','pircequincem',
'productodieciseism','dieciseism','preciodieciseism','totalpreciodieciseism','pircedieciseism',
'productodiecisietem','diecisietem','preciodiecisietem','totalpreciodiecisietem','pircediecisietem',
'productodieciochom','dieciochom','preciodieciochom','totalpreciodieciochom','pircedieciochom',
'productodiecinuevem','diecinuevem','preciodiecinuevem','totalpreciodiecinuevem','pircediecinuevem',
'productoveintem','veintem','precioveintem','totalprecioveintem','pirceveintem',
'productoveintiunom','veintiunom','precioveintiunom','totalprecioveintiunom','pirceveintiunom',
'productoveintidosm','veintidosm','precioveintidosm','totalprecioveintidosm','pirceveintidosm',
'productoveintitresm','veintitresm','precioveintitresm','totalprecioveintitresm','pirceveintitresm',
'productoveinticuatrom','veinticuatrom','precioveinticuatrom','totalprecioveinticuatrom','pirceveinticuatrom',
'productoveinticincom','veinticincom','precioveinticincom','totalprecioveinticincom','pirceveinticincom',
'productoveintiseism','veintiseism','precioveintiseism','totalprecioveintiseism','pirceveintiseism',
'productoveintisietem','veintisietem','precioveintisietem','totalprecioveintisietem','pirceveintisietem',
'productoveintiochom','veintiochom','precioveintiochom','totalprecioveintiochom','pirceveintiochom',
'productoveintinuevem','veintinuevem','precioveintinuevem','totalprecioveintinuevem','pirceveintinuevem',
'productotreintam','treintam','preciotreintam','totalpreciotreintam','pircetreintam'));
});



Route::get("/adultos",function(){
           $constante=0;


         $productos= App\Adulto::all();
      
         foreach ($productos as $producto) {
         
            $nombrevariable=$producto->NombreVariable;
            $$nombrevariable=" ";



            $nombreprecio=$producto->NombrePrecio;
            $$nombreprecio=" ";


            $nombretotalprecio=$producto->NombreTotalPrecio;
            $$nombretotalprecio=" ";


            $nombreproducto=$producto->NombreProducto;
            $$nombreproducto=" ";

            $nombrepirce=$producto->NombrePirce;
             $$nombrepirce=" ";

         }

         
       


       $nombre=" ";

       $whatsapp=" ";
       $totalapagaradultos="";



      
      return view('adultos',compact('constante','productos','nombre','whatsapp','totalapagaradultos',
'unoa','preciounoa','totalpreciounoa','pirceunoa',
'productodosa','dosa','preciodosa','totalpreciodosa','pircedosa',
'productotresa','tresa','preciotresa','totalpreciotresa','pircetresa',
'productocuatroa','cuatroa','preciocuatroa','totalpreciocuatroa','pircecuatroa',
'productocincoa','cincoa','preciocincoa','totalpreciocincoa','pircecincoa',
'productoseisa','seisa','precioseisa','totalprecioseisa','pirceseisa',
'productosietea','sietea','preciosietea','totalpreciosietea','pircesietea',
'productoochoa','ochoa','precioochoa','totalprecioochoa','pirceochoa',
'productonuevea','nuevea','precionuevea','totalprecionuevea','pircenuevea',
'productodieza','dieza','preciodieza','totalpreciodieza','pircedieza',
'productooncea','oncea','preciooncea','totalpreciooncea','pirceoncea',
'productodocea','docea','preciodocea','totalpreciodocea','pircedocea',
'productotrecea','trecea','preciotrecea','totalpreciotrecea','pircetrecea',
'productocatorcea','catorcea','preciocatorcea','totalpreciocatorcea','pircecatorcea',
'productoquincea','quincea','precioquincea','totalprecioquincea','pircequincea',
'productodieciseisa','dieciseisa','preciodieciseisa','totalpreciodieciseisa','pircedieciseisa',
'productodiecisietea','diecisietea','preciodiecisietea','totalpreciodiecisietea','pircediecisietea',
'productodieciochoa','dieciochoa','preciodieciochoa','totalpreciodieciochoa','pircedieciochoa',
'productodiecinuevea','diecinuevea','preciodiecinuevea','totalpreciodiecinuevea','pircediecinuevea',
'productoveintea','veintea','precioveintea','totalprecioveintea','pirceveintea',
'productoveintiunoa','veintiunoa','precioveintiunoa','totalprecioveintiunoa','pirceveintiunoa',
'productoveintidosa','veintidosa','precioveintidosa','totalprecioveintidosa','pirceveintidosa',
'productoveintitresa','veintitresa','precioveintitresa','totalprecioveintitresa','pirceveintitresa',
'productoveinticuatroa','veinticuatroa','precioveinticuatroa','totalprecioveinticuatroa','pirceveinticuatroa',
'productoveinticincoa','veinticincoa','precioveinticincoa','totalprecioveinticincoa','pirceveinticincoa',
'productoveintiseisa','veintiseisa','precioveintiseisa','totalprecioveintiseisa','pirceveintiseisa',
'productoveintisietea','veintisietea','precioveintisietea','totalprecioveintisietea','pirceveintisietea',
'productoveintiochoa','veintiochoa','precioveintiochoa','totalprecioveintiochoa','pirceveintiochoa',
'productoveintinuevea','veintinuevea','precioveintinuevea','totalprecioveintinuevea','pirceveintinuevea',
'productotreintaa','treintaa','preciotreintaa','totalpreciotreintaa','pircetreintaa'));
});



Route::get("/bucales",function(){
       $constante=0;
      $productos= App\Bucal::all(); 

      foreach ($productos as $producto) {         
            $nombrevariable=$producto->NombreVariable;
            $$nombrevariable=" ";
            $nombreprecio=$producto->NombrePrecio;
            $$nombreprecio=" ";
            $nombretotalprecio=$producto->NombreTotalPrecio;
            $$nombretotalprecio=" ";
            $nombreproducto=$producto->NombreProducto;
            $$nombreproducto=" ";
            $nombrepirce=$producto->NombrePirce;
             $$nombrepirce=" ";
         }     
         
       $nombre=" ";
       $whatsapp=" ";
       $totalapagarbucales="";  


      
      return view('bucales',compact('constante','productos','nombre','whatsapp','totalapagarbucales','unoo','preciounoo','totalpreciounoo','pirceunoo','productodoso','doso','preciodoso','totalpreciodoso','pircedoso','productotreso','treso','preciotreso','totalpreciotreso','pircetreso','productocuatroo','cuatroo','preciocuatroo','totalpreciocuatroo','pircecuatroo','productocincoo','cincoo','preciocincoo','totalpreciocincoo','pircecincoo',
'productoseiso','seiso','precioseiso','totalprecioseiso','pirceseiso',
'productosieteo','sieteo','preciosieteo','totalpreciosieteo','pircesieteo',
'productoochoo','ochoo','precioochoo','totalprecioochoo','pirceochoo',
'productonueveo','nueveo','precionueveo','totalprecionueveo','pircenueveo',
'productodiezo','diezo','preciodiezo','totalpreciodiezo','pircediezo',
'productoonceo','onceo','precioonceo','totalprecioonceo','pirceonceo',
'productodoceo','doceo','preciodoceo','totalpreciodoceo','pircedoceo',
'productotreceo','treceo','preciotreceo','totalpreciotreceo','pircetreceo',
'productocatorceo','catorceo','preciocatorceo','totalpreciocatorceo','pircecatorceo','productoquinceo','quinceo','precioquinceo','totalprecioquinceo','pircequinceo','productodieciseiso','dieciseiso','preciodieciseiso','totalpreciodieciseiso','pircedieciseiso',
'productodiecisieteo','diecisieteo','preciodiecisieteo','totalpreciodiecisieteo','pircediecisieteo','productodieciochoo','dieciochoo','preciodieciochoo','totalpreciodieciochoo','pircedieciochoo',
'productodiecinueveo','diecinueveo','preciodiecinueveo','totalpreciodiecinueveo','pircediecinueveo','productoveinteo','veinteo','precioveinteo','totalprecioveinteo','pirceveinteo','productoveintiunoo','veintiunoo','precioveintiunoo','totalprecioveintiunoo','pirceveintiunoo',
'productoveintidoso','veintidoso','precioveintidoso','totalprecioveintidoso','pirceveintidoso','productoveintitreso','veintitreso','precioveintitreso','totalprecioveintitreso','pirceveintitreso','productoveinticuatroo','veinticuatroo','precioveinticuatroo','totalprecioveinticuatroo','pirceveinticuatroo','productoveinticincoo','veinticincoo','precioveinticincoo','totalprecioveinticincoo','pirceveinticincoo',
'productoveintiseiso','veintiseiso','precioveintiseiso','totalprecioveintiseiso','pirceveintiseiso','productoveintisieteo','veintisieteo','precioveintisieteo','totalprecioveintisieteo','pirceveintisieteo','productoveintiochoo','veintiochoo','precioveintiochoo','totalprecioveintiochoo','pirceveintiochoo','productoveintinueveo','veintinueveo','precioveintinueveo','totalprecioveintinueveo','pirceveintinueveo','productotreintao','treintao','preciotreintao','totalpreciotreintao','pircetreintao'));
});



Route::get("/capilares",function(){
       $constante=0;
      $productos= App\Capilar::all(); 

      foreach ($productos as $producto) {         
            $nombrevariable=$producto->NombreVariable;
            $$nombrevariable=" ";
            $nombreprecio=$producto->NombrePrecio;
            $$nombreprecio=" ";
            $nombretotalprecio=$producto->NombreTotalPrecio;
            $$nombretotalprecio=" ";
            $nombreproducto=$producto->NombreProducto;
            $$nombreproducto=" ";
            $nombrepirce=$producto->NombrePirce;
             $$nombrepirce=" ";
         }     
         
       $nombre=" ";
       $whatsapp=" ";
       $totalapagarbucales="";  


      
      return view('capilares',compact('constante','productos','nombre','whatsapp','totalapagarbucales','unoca','preciounoca','totalpreciounoca','pirceunoca','productodosca','dosca','preciodosca','totalpreciodosca','pircedosca','productotresca','tresca','preciotresca','totalpreciotresca','pircetresca','productocuatroca','cuatroca','preciocuatroca','totalpreciocuatroca','pircecuatroca','productocincoca','cincoca','preciocincoca','totalpreciocincoca','pircecincoca',
'productoseisca','seisca','precioseisca','totalprecioseisca','pirceseisca',
'productosieteca','sieteca','preciosieteca','totalpreciosieteca','pircesieteca',
'productoochoca','ochoca','precioochoca','totalprecioochoca','pirceochoca',
'productonueveca','nueveca','precionueveca','totalprecionueveca','pircenueveca',
'productodiezca','diezca','preciodiezca','totalpreciodiezca','pircediezca',
'productoonceca','onceca','precioonceca','totalprecioonceca','pirceonceca',
'productodoceca','doceca','preciodoceca','totalpreciodoceca','pircedoceca',
'productotrececa','trececa','preciotrececa','totalpreciotrececa','pircetrececa',
'productocatorceca','catorceca','preciocatorceca','totalpreciocatorceca','pircecatorceca','productoquinceca','quinceca','precioquinceca','totalprecioquinceca','pircequinceca','productodieciseisca','dieciseisca','preciodieciseisca','totalpreciodieciseisca','pircedieciseisca',
'productodiecisieteca','diecisieteca','preciodiecisieteca','totalpreciodiecisieteca','pircediecisieteca','productodieciochoca','dieciochoca','preciodieciochoca','totalpreciodieciochoca','pircedieciochoca',
'productodiecinueveca','diecinueveca','preciodiecinueveca','totalpreciodiecinueveca','pircediecinueveca','productoveinteca','veinteca','precioveinteca','totalprecioveinteca','pirceveinteca','productoveintiunoca','veintiunoca','precioveintiunoca','totalprecioveintiunoca','pirceveintiunoca',
'productoveintidosca','veintidosca','precioveintidosca','totalprecioveintidosca','pirceveintidosca','productoveintitresca','veintitresca','precioveintitresca','totalprecioveintitresca','pirceveintitresca','productoveinticuatroca','veinticuatroca','precioveinticuatroca','totalprecioveinticuatroca','pirceveinticuatroca','productoveinticincoca','veinticincoca','precioveinticincoca','totalprecioveinticincoca','pirceveinticincoca',
'productoveintiseisca','veintiseisca','precioveintiseisca','totalprecioveintiseisca','pirceveintiseisca','productoveintisieteca','veintisieteca','precioveintisieteca','totalprecioveintisieteca','pirceveintisieteca','productoveintiochoca','veintiochoca','precioveintiochoca','totalprecioveintiochoca','pirceveintiochoca','productoveintinueveca','veintinueveca','precioveintinueveca','totalprecioveintinueveca','pirceveintinueveca','productotreintaca','treintaca','preciotreintaca','totalpreciotreintaca','pircetreintaca'));
});



Route::get("/corporales",function(){
       $constante=0;


         $productos= App\Corporal::all();
      
         foreach ($productos as $producto) {
         
            $nombrevariable=$producto->NombreVariable;
            $$nombrevariable=" ";//unom



            $nombreprecio=$producto->NombrePrecio;
            $$nombreprecio=" ";//preciounom


            $nombretotalprecio=$producto->NombreTotalPrecio;
            $$nombretotalprecio=" ";//totalpreciounom


            $nombreproducto=$producto->NombreProducto;
            $$nombreproducto=" ";//productounom

            $nombrepirce=$producto->NombrePirce;
             $$nombrepirce=" ";//pirceuno

         }

         
       


       $nombre=" ";

       $whatsapp=" ";

$totalapagarcorporales="";


      
      return view('corporales',compact('constante','productos','nombre','whatsapp','totalapagarcorporales','productounoco','unoco','preciounoco','totalpreciounoco','pirceunoco',
'productodosco','dosco','preciodosco','totalpreciodosco','pircedosco',
'productotresco','tresco','preciotresco','totalpreciotresco','pircetresco',
'productocuatroco','cuatroco','preciocuatroco','totalpreciocuatroco','pircecuatroco',
'productocincoco','cincoco','preciocincoco','totalpreciocincoco','pircecincoco',
'productoseisco','seisco','precioseisco','totalprecioseisco','pirceseisco',
'productosieteco','sieteco','preciosieteco','totalpreciosieteco','pircesieteco',
'productoochoco','ochoco','precioochoco','totalprecioochoco','pirceochoco',
'productonueveco','nueveco','precionueveco','totalprecionueveco','pircenueveco',
'productodiezco','diezco','preciodiezco','totalpreciodiezco','pircediezco',
'productoonceco','onceco','precioonceco','totalprecioonceco','pirceonceco',
'productodoceco','doceco','preciodoceco','totalpreciodoceco','pircedoceco',
'productotrececo','trececo','preciotrececo','totalpreciotrececo','pircetrececo',
'productocatorceco','catorceco','preciocatorceco','totalpreciocatorceco','pircecatorceco',
'productoquinceco','quinceco','precioquinceco','totalprecioquinceco','pircequinceco',
'productodieciseisco','dieciseisco','preciodieciseisco','totalpreciodieciseisco','pircedieciseisco',
'productodiecisieteco','diecisieteco','preciodiecisieteco','totalpreciodiecisieteco','pircediecisieteco',
'productodieciochoco','dieciochoco','preciodieciochoco','totalpreciodieciochoco','pircedieciochoco',
'productodiecinueveco','diecinueveco','preciodiecinueveco','totalpreciodiecinueveco','pircediecinueveco',
'productoveinteco','veinteco','precioveinteco','totalprecioveinteco','pirceveinteco',
'productoveintiunoco','veintiunoco','precioveintiunoco','totalprecioveintiunoco','pirceveintiunoco',
'productoveintidosco','veintidosco','precioveintidosco','totalprecioveintidosco','pirceveintidosco',
'productoveintitresco','veintitresco','precioveintitresco','totalprecioveintitresco','pirceveintitresco',
'productoveinticuatroco','veinticuatroco','precioveinticuatroco','totalprecioveinticuatroco','pirceveinticuatroco',
'productoveinticincoco','veinticincoco','precioveinticincoco','totalprecioveinticincoco','pirceveinticincoco',
'productoveintiseisco','veintiseisco','precioveintiseisco','totalprecioveintiseisco','pirceveintiseisco',
'productoveintisieteco','veintisieteco','precioveintisieteco','totalprecioveintisieteco','pirceveintisieteco',
'productoveintiochoco','veintiochoco','precioveintiochoco','totalprecioveintiochoco','pirceveintiochoco',
'productoveintinueveco','veintinueveco','precioveintinueveco','totalprecioveintinueveco','pirceveintinueveco',
'productotreintaco','treintaco','preciotreintaco','totalpreciotreintaco','pircetreintaco'));
});


//AGREGAR LA RUTA DE LA VISTA CORRESPONDIENTE//


Route::get("/ira",function(){

$origen= $_GET["origen"];   
$submit= $_GET["submit"];



if($origen=="mujeres"){
  $productos= App\Mujer::all();
    if(!empty($_GET["totalapagarmujeres"])){
$totalapagarmujeres= $_GET["totalapagarmujeres"];
session(["totalapagarmujeres" => $totalapagarmujeres]);
}else{
    session(["totalapagarmujeres" => "0"]);
}       

     }

if($origen=="adultos"){
   $productos= App\Adulto::all();
    if(!empty($_GET["totalapagaradultos"])){
$totalapagaradultos= $_GET["totalapagaradultos"];
session(["totalapagaradultos" => $totalapagaradultos]);
}else{
    session(["totalapagaradultos" => "0"]);
}

        
     }


if($origen=="principal"){
  $productos= App\Producto::all();
       if(!empty($_GET["totalapagarprincipal"])){
$totalapagarprincipal= $_GET["totalapagarprincipal"];
session(["totalapagarprincipal" => $totalapagarprincipal]);
}else{
    session(["totalapagarprincipal" => "0"]);
}
         
     }

     if($origen=="bucales"){
  $productos= App\Bucal::all();
    if(!empty($_GET["totalapagarbucales"])){
$totalapagarbucales= $_GET["totalapagarbucales"];
session(["totalapagarbucales" => $totalapagarbucales]);
}else{
    session(["totalapagarbucales" => "0"]);
}       

     }

     if($origen=="capilares"){
  $productos= App\Capilar::all();
    if(!empty($_GET["totalapagarcapilares"])){
$totalapagarcapilares= $_GET["totalapagarcapilares"];
session(["totalapagarcapilares" => $totalapagarcapilares]);
}else{
    session(["totalapagarcapilares" => "0"]);
}       

     }

        if($origen=="corporales"){
  $productos= App\Corporal::all();
    if(!empty($_GET["totalapagarcorporales"])){
$totalapagarcorporales= $_GET["totalapagarcorporales"];
session(["totalapagarcorporales" => $totalapagarcorporales]);
}else{
    session(["totalapagarcorporales" => "0"]);
}       

     }

     //ACA VA EL ORIGEN//




//GUARDAR EN SESSION LOS NOMBRES Y PRECIOS DE LOS PRODUCTOS DESDE LA BASE DE DATOS//
 foreach ($productos as $producto) {
 $productodescripcion=$producto->DescripcionProducto;
 $productonombre=$producto->NombreProducto;
 $productonombreprecio=$producto->NombrePrecio;
 $productoprecio=$producto->Precio;
 $$productonombre="$productodescripcion";//$productouno= "Kit Esencial: Alcohol en Gel 250 ml,1 Par de Guantes Latex, 1 Barbijo triple capa";
 $$productonombreprecio="$productoprecio";//$preciouno= 270;
session(["$productonombre" => $$productonombre]);
session(["$productonombreprecio" => $productoprecio]);


//TRAER LOS TOTALES DEL FORM DE CADA UNO Y DIVIDIR TOTALES/PRECIO=CANTIDAD YA QUE LA CANTIDAD DEL SELECT NO FUNCIONA//


//TRAER DEL FORM TOTALPRECIO Y GUARDARLO EN EL SESSION//
 $productototalprecio=$producto->NombreTotalPrecio;

 $$productototalprecio=$_GET["$productototalprecio"];

 session(["$productototalprecio" => $$productototalprecio]);//$totalpreciouno




//ANALIZAR LOS TOTALESPRECIOS QUE VIENEN//

//PRECIOS TOTALES MAYORES QUE CERO//
$productonombrevariable=$producto->NombreVariable;//uno
if($$productototalprecio > 0){
    //GUARDAR CANTIDADES EN SESSION//$uno
$$productonombrevariable=$$productototalprecio/$productoprecio;//$totalpreciouno/$totalprecio
session(["$productonombrevariable" => $$productonombrevariable]);

$nombrepirce=$producto->NombrePirce;//pirceuno
             $$nombrepirce="TOTAL $";
 session(["$nombrepirce" => $$nombrepirce]);            

}else{

//SI PRECIOTOTAL (ej preciototaluno) es CERO//
session(["$productonombre" => ""]);//$productouno
session(["$productonombreprecio" => ""]);//precioun