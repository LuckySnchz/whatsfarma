<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/index', function () {
    return view('index');
});

Route::get('/curl', function () {
    return view('curl');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contafarm', function () {
    return view('contafarm');
});

Route::post("/abrircaja","CajaController@abrircaja");


Route::get('/infoimagenes', function () {
    return view('infoimagenes');
});

Route::post("/informe","InformeController@informar");

Route::get('/informe', function () {
    return view('informe');
});
Route::post("/infoimagenes","InformeController@ingresar");

Route::get('/infoimagenesprueba', function () {
    return view('infoimagenesprueba');
});

Route::post("/informeprueba","InformeController@informarprueba");

Route::get('/informeprueba', function () {
    return view('informeprueba');
});





Route::get("/ofertas",function(){
$allsales=App\Sale::all();
$allsalesamericana=App\SaleAmericana::all();
	return view('ofertas',compact('allsales','allsalesamericana'));

});

Route::get("/ofertasw",function(){
$commerces=App\Commerce::all();
$cotos=App\Coto::all();
$carrefours=App\Carrefour::all();
$walmarts=App\Walmart::all();
$luckycarts=App\Luckycarts::all();
  return view('ofertasw',compact('commerces','cotos','carrefours','walmarts','luckycarts'));

});


Route::get("/ofertasca",function(){

  return view('ofertasca');

});

Route::get("/ofertasco",function(){

  return view('ofertasco');

});
Route::get("/ofertasfarm",function(){
$allsales=App\Sale::all();
$allsalescount=App\Sale::all()->count();
$allsalesamericana=App\SaleAmericana::all();
  return view('ofertasfarm',compact('allsales','allsalescount','allsalesamericana'));

});

Route::get("/sales",function(){
$allsales=App\Sale::all();
  return view('sales',compact('allsales'));

});


Route::get("/ofertashoy",function(){

$marca= $_GET["search"]; 
$marcasearch=str_replace(' ', '%20', $marca);
  return view('ofertas',compact('marcasearch'));

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


      
      return view('capilares',compact('constante','productos','nombre','whatsapp','totalapagarbucales','unoca','preciounoca',
        'totalpreciounoca','pirceunoca','productodosca','dosca','preciodosca','totalpreciodosca','pircedosca','productotresca','tresca',
        'preciotresca','totalpreciotresca','pircetresca','productocuatroca',
        'cuatroca','preciocuatroca','totalpreciocuatroca','pircecuatroca',
        'productocincoca','cincoca','preciocincoca','totalpreciocincoca',
        'pircecincoca',
'productoseisca','seisca','precioseisca','totalprecioseisca','pirceseisca',
'productosieteca','sieteca','preciosieteca','totalpreciosieteca',
'pircesieteca',
'productoochoca','ochoca','precioochoca','totalprecioochoca','pirceochoca',
'productonueveca','nueveca','precionueveca','totalprecionueveca',
'pircenueveca',
'productodiezca','diezca','preciodiezca','totalpreciodiezca','pircediezca',
'productoonceca','onceca','precioonceca','totalprecioonceca','pirceonceca',
'productodoceca','doceca','preciodoceca','totalpreciodoceca','pircedoceca',
'productotrececa','trececa','preciotrececa','totalpreciotrececa',
'pircetrececa',
'productocatorceca','catorceca','preciocatorceca','totalpreciocatorceca',
'pircecatorceca','productoquinceca','quinceca','precioquinceca',
'totalprecioquinceca','pircequinceca','productodieciseisca','dieciseisca',
'preciodieciseisca','totalpreciodieciseisca','pircedieciseisca',
'productodiecisieteca','diecisieteca','preciodiecisieteca',
'totalpreciodiecisieteca','pircediecisieteca','productodieciochoca',
'dieciochoca','preciodieciochoca','totalpreciodieciochoca',
'pircedieciochoca',
'productodiecinueveca','diecinueveca','preciodiecinueveca',
'totalpreciodiecinueveca','pircediecinueveca','productoveinteca','veinteca','precioveinteca','totalprecioveinteca','pirceveinteca','productoveintiunoca','veintiunoca','precioveintiunoca','totalprecioveintiunoca',
'pirceveintiunoca',
'productoveintidosca','veintidosca','precioveintidosca',
'totalprecioveintidosca','pirceveintidosca','productoveintitresca',
'veintitresca','precioveintitresca','totalprecioveintitresca',
'pirceveintitresca','productoveinticuatroca','veinticuatroca',
'precioveinticuatroca','totalprecioveinticuatroca','pirceveinticuatroca',
'productoveinticincoca','veinticincoca','precioveinticincoca',
'totalprecioveinticincoca','pirceveinticincoca',
'productoveintiseisca','veintiseisca','precioveintiseisca',
'totalprecioveintiseisca','pirceveintiseisca','productoveintisieteca',
'veintisieteca','precioveintisieteca','totalprecioveintisieteca',
'pirceveintisieteca','productoveintiochoca','veintiochoca',
'precioveintiochoca','totalprecioveintiochoca','pirceveintiochoca',
'productoveintinueveca','veintinueveca','precioveintinueveca',
'totalprecioveintinueveca','pirceveintinueveca','productotreintaca',
'treintaca','preciotreintaca','totalpreciotreintaca','pircetreintaca'));
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
'productoveinteco','veinteco','precioveinteco','totalprecioveinteco',
'pirceveinteco','productoveintiunoco','veintiunoco','precioveintiunoco',
'totalprecioveintiunoco','pirceveintiunoco',
'productoveintidosco','veintidosco','precioveintidosco',
'totalprecioveintidosco','pirceveintidosco',
'productoveintitresco','veintitresco','precioveintitresco',
'totalprecioveintitresco','pirceveintitresco',
'productoveinticuatroco','veinticuatroco','precioveinticuatroco',
'totalprecioveinticuatroco','pirceveinticuatroco',
'productoveinticincoco','veinticincoco','precioveinticincoco',
'totalprecioveinticincoco','pirceveinticincoco',
'productoveintiseisco','veintiseisco','precioveintiseisco',
'totalprecioveintiseisco','pirceveintiseisco',
'productoveintisieteco','veintisieteco','precioveintisieteco',
'totalprecioveintisieteco','pirceveintisieteco',
'productoveintiochoco','veintiochoco','precioveintiochoco',
'totalprecioveintiochoco','pirceveintiochoco',
'productoveintinueveco','veintinueveco','precioveintinueveco',
'totalprecioveintinueveco','pirceveintinueveco',
'productotreintaco','treintaco','preciotreintaco','totalpreciotreintaco',
'pircetreintaco'));
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
session(["$productonombreprecio" => ""]);//preciouno
session(["$productototalprecio" => ""]);//$totalpreciouno

$nombrepirce=$producto->NombrePirce;//pirceuno

session(["$nombrepirce" => ""]);  //$pirceuno
session(["$productonombrevariable" => " "]);//uno

         }

       $nombre=" ";

       $whatsapp=" ";

       $totalapagar=" ";

       $constante=1;


  } 
$submit= $_GET["submit"];


if($submit=="inicio"){       
     
      return redirect('inicio');}


if($submit=="farmacia"){       
     
      return redirect('farmacia');}





if($submit=="mujeres"){

         $productos= App\Mujer::all();
     
	 	  return view('mujeres',compact('constante','nombre','whatsapp','productos'));}

if($submit=="adultos"){
         $productos= App\Adulto::all();
     
          return view('adultos',compact('constante','nombre','whatsapp','productos'));}



if($submit=="principal"){
         $productos= App\Producto::all();
     
          return view('perfumeria',compact('constante','nombre','whatsapp','productos'));}


if($submit=="bucales"){
         $productos= App\Bucal::all();
     
          return view('bucales',compact('constante','nombre','whatsapp','productos'));}

//ACA VA EL SUBMIT(A LA VISTA QUE QUIERO IR) LE PASO TODOS SUS PRODUCTO Y DIRIJO A ESA VISTA

          /*if($submit=="bucales"){
         $productos= App\Bucal::all();
     
          return view('bucales',compact('constante','nombre','whatsapp','productos'));*/

          if($submit=="capilares"){
         $productos= App\Capilar::all();
     
          return view('capilares',compact('constante','nombre','whatsapp','productos'));}

             if($submit=="corporales"){
         $productos= App\Corporal::all();
     
          return view('corporales',compact('constante','nombre','whatsapp','productos'));}

//ACA ES CUANDO NO CAMBIO DE VISTA SINO QUE DE UNA MISMA VISTA HAGO SUBMIT ENVIAR//
if(($origen=="principal" && $submit=="enviar" )||($origen=="mujeres" && $submit=="enviar" )||($origen=="adultos" && $submit=="enviar" )||($origen=="bucales" && $submit=="enviar" )||($origen=="capilares" && $submit=="enviar" )||($origen=="corporales" && $submit=="enviar" ))
 {
    $constante=1;

//ACA ME FIJO SI EXISTE UN PRECIO TOTAL EN EL SESSION ENTONCES RECUPERO LOS DEMAS VALORES CON SUS RESPECTIVAS VARIABLES Y LAS GUARDO SINO GUARDO VALORES NULOS//

//MUJERES//
if(!empty(session('totalpreciounom'))){
$unom=session('unom');
$pirceunom=session('pirceunom');
$preciounom=session('preciounom');
$totalpreciounom=session('totalpreciounom');
$productounom=session('productounom');}
else{
$unom="";
$pirceunom="";
$preciounom="";
$totalpreciounom=0;
$productounom="";   
}

if(!empty(session('totalpreciodosm'))){
$dosm=session('dosm');
$pircedosm=session('pircedosm');
$preciodosm=session('preciodosm');
$totalpreciodosm=session('totalpreciodosm');
$productodosm=session('productodosm');}
else{
$dosm="";
$pircedosm="";
$preciodosm="";
$totalpreciodosm=0;
$productodosm="";   
}

if(!empty(session('totalpreciotresm'))){
$tresm=session('tresm');
$pircetresm=session('pircetresm');
$preciotresm=session('preciotresm');
$totalpreciotresm=session('totalpreciotresm');
$productotresm=session('productotresm');}
else{
$tresm="";
$pircetresm="";
$preciotresm="";
$totalpreciotresm=0;
$productotresm="";   
}

if(!empty(session('totalpreciocuatrom'))){
$cuatrom=session('cuatrom');
$pircecuatrom=session('pircecuatrom');
$preciocuatrom=session('preciocuatrom');
$totalpreciocuatrom=session('totalpreciocuatrom');
$productocuatrom=session('productocuatrom');}
else{
$cuatrom="";
$pircecuatrom="";
$preciocuatrom="";
$totalpreciocuatrom=0;
$productocuatrom="";   
}

if(!empty(session('totalpreciocincom'))){
$cincom=session('cincom');
$pircecincom=session('pircecincom');
$preciocincom=session('preciocincom');
$totalpreciocincom=session('totalpreciocincom');
$productocincom=session('productocincom');}
else{
$cincom="";
$pircecincom="";
$preciocincom="";
$totalpreciocincom=0;
$productocincom="";   
}

if(!empty(session('totalprecioseism'))){
$seism=session('seism');
$pirceseism=session('pirceseism');
$precioseism=session('precioseism');
$totalprecioseism=session('totalprecioseism');
$productoseism=session('productoseism');}
else{
$seism="";
$pirceseism="";
$precioseism="";
$totalprecioseism=0;
$productoseism="";   
}

if(!empty(session('totalpreciosietem'))){
$sietem=session('sietem');
$pircesietem=session('pircesietem');
$preciosietem=session('preciosietem');
$totalpreciosietem=session('totalpreciosietem');
$productosietem=session('productosietem');}
else{
$sietem="";
$pircesietem="";
$preciosietem="";
$totalpreciosietem=0;
$productosietem="";   
}

if(!empty(session('totalprecioochom'))){
$ochom=session('ochom');
$pirceochom=session('pirceochom');
$precioochom=session('precioochom');
$totalprecioochom=session('totalprecioochom');
$productoochom=session('productoochom');}
else{
$ochom="";
$pirceochom="";
$precioochom="";
$totalprecioochom=0;
$productoochom="";   
}

if(!empty(session('totalprecionuevem'))){
$nuevem=session('nuevem');
$pircenuevem=session('pircenuevem');
$precionuevem=session('precionuevem');
$totalprecionuevem=session('totalprecionuevem');
$productonuevem=session('productonuevem');}
else{
$nuevem="";
$pircenuevem="";
$precionuevem="";
$totalprecionuevem=0;
$productonuevem="";   
}

if(!empty(session('totalpreciodiezm'))){
$diezm=session('diezm');
$pircediezm=session('pircediezm');
$preciodiezm=session('preciodiezm');
$totalpreciodiezm=session('totalpreciodiezm');
$productodiezm=session('productodiezm');}
else{
$diezm="";
$pircediezm="";
$preciodiezm="";
$totalpreciodiezm=0;
$productodiezm="";   
}

if(!empty(session('totalpreciooncem'))){
$oncem=session('oncem');
$pirceoncem=session('pirceoncem');
$preciooncem=session('preciooncem');
$totalpreciooncem=session('totalpreciooncem');
$productooncem=session('productooncem');}
else{
$oncem="";
$pirceoncem="";
$preciooncem="";
$totalpreciooncem=0;
$productooncem="";   
}


if(!empty(session('totalpreciodocem'))){
$docem=session('docem');
$pircedocem=session('pircedocem');
$preciodocem=session('preciodocem');
$totalpreciodocem=session('totalpreciodocem');
$productodocem=session('productodocem');}
else{
$docem="";
$pircedocem="";
$preciodocem="";
$totalpreciodocem=0;
$productodocem="";   
}

if(!empty(session('totalpreciotrecem'))){
$trecem=session('trecem');
$pircetrecem=session('pircetrecem');
$preciotrecem=session('preciotrecem');
$totalpreciotrecem=session('totalpreciotrecem');
$productotrecem=session('productotrecem');}
else{
$trecem="";
$pircetrecem="";
$preciotrecem="";
$totalpreciotrecem=0;
$productotrecem="";   
}

if(!empty(session('totalpreciocatorcem'))){
$catorcem=session('catorcem');
$pircecatorcem=session('pircecatorcem');
$preciocatorcem=session('preciocatorcem');
$totalpreciocatorcem=session('totalpreciocatorcem');
$productocatorcem=session('productocatorcem');}
else{
$catorcem="";
$pircecatorcem="";
$preciocatorcem="";
$totalpreciocatorcem=0;
$productocatorcem="";   
}

if(!empty(session('totalprecioquincem'))){
$quincem=session('quincem');
$pircequincem=session('pircequincem');
$precioquincem=session('precioquincem');
$totalprecioquincem=session('totalprecioquincem');
$productoquincem=session('productoquincem');}
else{
$quincem="";
$pircequincem="";
$precioquincem="";
$totalprecioquincem=0;
$productoquincem="";   
}

if(!empty(session('totalpreciodieciseism'))){
$dieciseism=session('dieciseism');
$pircedieciseism=session('pircedieciseism');
$preciodieciseism=session('preciodieciseism');
$totalpreciodieciseism=session('totalpreciodieciseism');
$productodieciseism=session('productodieciseism');}
else{
$dieciseism="";
$pircedieciseism="";
$preciodieciseism="";
$totalpreciodieciseism=0;
$productodieciseism="";   
}

if(!empty(session('totalpreciodiecisietem'))){
$diecisietem=session('diecisietem');
$pircediecisietem=session('pircediecisietem');
$preciodiecisietem=session('preciodiecisietem');
$totalpreciodiecisietem=session('totalpreciodiecisietem');
$productodiecisietem=session('productodiecisietem');}
else{
$diecisietem="";
$pircediecisietem="";
$preciodiecisietem="";
$totalpreciodiecisietem=0;
$productodiecisietem="";   
}

if(!empty(session('totalpreciodieciochom'))){
$dieciochom=session('dieciochom');
$pircedieciochom=session('pircedieciochom');
$preciodieciochom=session('preciodieciochom');
$totalpreciodieciochom=session('totalpreciodieciochom');
$productodieciochom=session('productodieciochom');}
else{
$dieciochom="";
$pircedieciochom="";
$preciodieciochom="";
$totalpreciodieciochom=0;
$productodieciochom="";   
}

if(!empty(session('totalpreciodiecinuevem'))){
$diecinuevem=session('diecinuevem');
$pircediecinuevem=session('pircediecinuevem');
$preciodiecinuevem=session('preciodiecinuevem');
$totalpreciodiecinuevem=session('totalpreciodiecinuevem');
$productodiecinuevem=session('productodiecinuevem');}
else{
$diecinuevem="";
$pircediecinuevem="";
$preciodiecinuevem="";
$totalpreciodiecinuevem=0;
$productodiecinuevem="";   
}

if(!empty(session('totalprecioveintem'))){
$veintem=session('veintem');
$pirceveintem=session('pirceveintem');
$precioveintem=session('precioveintem');
$totalprecioveintem=session('totalprecioveintem');
$productoveintem=session('productoveintem');}
else{
$veintem="";
$pirceveintem="";
$precioveintem="";
$totalprecioveintem=0;
$productoveintem="";   
}

if(!empty(session('totalprecioveintiunom'))){
$veintiunom=session('veintiunom');
$pirceveintiunom=session('pirceveintiunom');
$precioveintiunom=session('precioveintiunom');
$totalprecioveintiunom=session('totalprecioveintiunom');
$productoveintiunom=session('productoveintiunom');}
else{
$veintiunom="";
$pirceveintiunom="";
$precioveintiunom="";
$totalprecioveintiunom=0;
$productoveintiunom="";   
}

if(!empty(session('totalprecioveintidosm'))){
$veintidosm=session('veintidosm');
$pirceveintidosm=session('pirceveintidosm');
$precioveintidosm=session('precioveintidosm');
$totalprecioveintidosm=session('totalprecioveintidosm');
$productoveintidosm=session('productoveintidosm');}
else{
$veintidosm="";
$pirceveintidosm="";
$precioveintidosm="";
$totalprecioveintidosm=0;
$productoveintidosm="";   
}

if(!empty(session('totalprecioveintitresm'))){
$veintitresm=session('veintitresm');
$pirceveintitresm=session('pirceveintitresm');
$precioveintitresm=session('precioveintitresm');
$totalprecioveintitresm=session('totalprecioveintitresm');
$productoveintitresm=session('productoveintitresm');}
else{
$veintitresm="";
$pirceveintitresm="";
$precioveintitresm="";
$totalprecioveintitresm=0;
$productoveintitresm="";   
}

if(!empty(session('totalprecioveinticuatrom'))){
$veinticuatrom=session('veinticuatrom');
$pirceveinticuatrom=session('pirceveinticuatrom');
$precioveinticuatrom=session('precioveinticuatrom');
$totalprecioveinticuatrom=session('totalprecioveinticuatrom');
$productoveinticuatrom=session('productoveinticuatrom');}
else{
$veinticuatrom="";
$pirceveinticuatrom="";
$precioveinticuatrom="";
$totalprecioveinticuatrom=0;
$productoveinticuatrom="";   
}


if(!empty(session('totalprecioveinticincom'))){
$veinticincom=session('veinticincom');
$pirceveinticincom=session('pirceveinticincom');
$precioveinticincom=session('precioveinticincom');
$totalprecioveinticincom=session('totalprecioveinticincom');
$productoveinticincom=session('productoveinticincom');}
else{
$veinticincom="";
$pirceveinticincom="";
$precioveinticincom="";
$totalprecioveinticincom=0;
$productoveinticincom="";   
}

if(!empty(session('totalprecioveintiseism'))){
$veintiseism=session('veintiseism');
$pirceveintiseism=session('pirceveintiseism');
$precioveintiseism=session('precioveintiseism');
$totalprecioveintiseism=session('totalprecioveintiseism');
$productoveintiseism=session('productoveintiseism');}
else{
$veintiseism="";
$pirceveintiseism="";
$precioveintiseism="";
$totalprecioveintiseism=0;
$productoveintiseism="";   
}

if(!empty(session('totalprecioveintisietem'))){
$veintisietem=session('veintisietem');
$pirceveintisietem=session('pirceveintisietem');
$precioveintisietem=session('precioveintisietem');
$totalprecioveintisietem=session('totalprecioveintisietem');
$productoveintisietem=session('productoveintisietem');}
else{
$veintisietem="";
$pirceveintisietem="";
$precioveintisietem="";
$totalprecioveintisietem=0;
$productoveintisietem="";   
}

if(!empty(session('totalprecioveintiochom'))){
$veintiochom=session('veintiochom');
$pirceveintiochom=session('pirceveintiochom');
$precioveintiochom=session('precioveintiochom');
$totalprecioveintiochom=session('totalprecioveintiochom');
$productoveintiochom=session('productoveintiochom');}
else{
$veintiochom="";
$pirceveintiochom="";
$precioveintiochom="";
$totalprecioveintiochom=0;
$productoveintiochom="";   
}
if(!empty(session('totalprecioveintinuevem'))){
$veintinuevem=session('veintinuevem');
$pirceveintinuevem=session('pirceveintinuevem');
$precioveintinuevem=session('precioveintinuevem');
$totalprecioveintinuevem=session('totalprecioveintinuevem');
$productoveintinuevem=session('productoveintinuevem');}
else{
$veintinuevem="";
$pirceveintinuevem="";
$precioveintinuevem="";
$totalprecioveintinuevem=0;
$productoveintinuevem="";   
}

if(!empty(session('totalpreciotreintam'))){
$treintam=session('treintam');
$pircetreintam=session('pircetreintam');
$preciotreintam=session('preciotreintam');
$totalpreciotreintam=session('totalpreciotreintam');
$productotreintam=session('productotreintam');}
else{
$treintam="";
$pircetreintam="";
$preciotreintam="";
$totalpreciotreintam=0;
$productotreintam="";   
}


//ADULTOS//

if(!empty(session('totalpreciounoa'))){
$unoa=session('unoa');
$pirceunoa=session('pirceunoa');
$preciounoa=session('preciounoa');
$totalpreciounoa=session('totalpreciounoa');
$productounoa=session('productounoa');}
else{
$unoa="";
$pirceunoa="";
$preciounoa="";
$totalpreciounoa=0;
$productounoa="";   
}

if(!empty(session('totalpreciodosa'))){
$dosa=session('dosa');
$pircedosa=session('pircedosa');
$preciodosa=session('preciodosa');
$totalpreciodosa=session('totalpreciodosa');
$productodosa=session('productodosa');}
else{
$dosa="";
$pircedosa="";
$preciodosa="";
$totalpreciodosa=0;
$productodosa="";   
}

if(!empty(session('totalpreciotresa'))){
$tresa=session('tresa');
$pircetresa=session('pircetresa');
$preciotresa=session('preciotresa');
$totalpreciotresa=session('totalpreciotresa');
$productotresa=session('productotresa');}
else{
$tresa="";
$pircetresa="";
$preciotresa="";
$totalpreciotresa=0;
$productotresa="";   
}

if(!empty(session('totalpreciocuatroa'))){
$cuatroa=session('cuatroa');
$pircecuatroa=session('pircecuatroa');
$preciocuatroa=session('preciocuatroa');
$totalpreciocuatroa=session('totalpreciocuatroa');
$productocuatroa=session('productocuatroa');}
else{
$cuatroa="";
$pircecuatroa="";
$preciocuatroa="";
$totalpreciocuatroa=0;
$productocuatroa="";   
}

if(!empty(session('totalpreciocincoa'))){
$cincoa=session('cincoa');
$pircecincoa=session('pircecincoa');
$preciocincoa=session('preciocincoa');
$totalpreciocincoa=session('totalpreciocincoa');
$productocincoa=session('productocincoa');}
else{
$cincoa="";
$pircecincoa="";
$preciocincoa="";
$totalpreciocincoa=0;
$productocincoa="";   
}

if(!empty(session('totalprecioseisa'))){
$seisa=session('seisa');
$pirceseisa=session('pirceseisa');
$precioseisa=session('precioseisa');
$totalprecioseisa=session('totalprecioseisa');
$productoseisa=session('productoseisa');}
else{
$seisa="";
$pirceseisa="";
$precioseisa="";
$totalprecioseisa=0;
$productoseisa="";   
}

if(!empty(session('totalpreciosietea'))){
$sietea=session('sietea');
$pircesietea=session('pircesietea');
$preciosietea=session('preciosietea');
$totalpreciosietea=session('totalpreciosietea');
$productosietea=session('productosietea');}
else{
$sietea="";
$pircesietea="";
$preciosietea="";
$totalpreciosietea=0;
$productosietea="";   
}

if(!empty(session('totalprecioochoa'))){
$ochoa=session('ochoa');
$pirceochoa=session('pirceochoa');
$precioochoa=session('precioochoa');
$totalprecioochoa=session('totalprecioochoa');
$productoochoa=session('productoochoa');}
else{
$ochoa="";
$pirceochoa="";
$precioochoa="";
$totalprecioochoa=0;
$productoochoa="";   
}

if(!empty(session('totalprecionuevea'))){
$nuevea=session('nuevea');
$pircenuevea=session('pircenuevea');
$precionuevea=session('precionuevea');
$totalprecionuevea=session('totalprecionuevea');
$productonuevea=session('productonuevea');}
else{
$nuevea="";
$pircenuevea="";
$precionuevea="";
$totalprecionuevea=0;
$productonuevea="";   
}

if(!empty(session('totalpreciodieza'))){
$dieza=session('dieza');
$pircedieza=session('pircedieza');
$preciodieza=session('preciodieza');
$totalpreciodieza=session('totalpreciodieza');
$productodieza=session('productodieza');}
else{
$dieza="";
$pircedieza="";
$preciodieza="";
$totalpreciodieza=0;
$productodieza="";   
}

if(!empty(session('totalpreciooncea'))){
$oncea=session('oncea');
$pirceoncea=session('pirceoncea');
$preciooncea=session('preciooncea');
$totalpreciooncea=session('totalpreciooncea');
$productooncea=session('productooncea');}
else{
$oncea="";
$pirceoncea="";
$preciooncea="";
$totalpreciooncea=0;
$productooncea="";   
}


if(!empty(session('totalpreciodocea'))){
$docea=session('docea');
$pircedocea=session('pircedocea');
$preciodocea=session('preciodocea');
$totalpreciodocea=session('totalpreciodocea');
$productodocea=session('productodocea');}
else{
$docea="";
$pircedocea="";
$preciodocea="";
$totalpreciodocea=0;
$productodocea="";   
}

if(!empty(session('totalpreciotrecea'))){
$trecea=session('trecea');
$pircetrecea=session('pircetrecea');
$preciotrecea=session('preciotrecea');
$totalpreciotrecea=session('totalpreciotrecea');
$productotrecea=session('productotrecea');}
else{
$trecea="";
$pircetrecea="";
$preciotrecea="";
$totalpreciotrecea=0;
$productotrecea="";   
}

if(!empty(session('totalpreciocatorcea'))){
$catorcea=session('catorcea');
$pircecatorcea=session('pircecatorcea');
$preciocatorcea=session('preciocatorcea');
$totalpreciocatorcea=session('totalpreciocatorcea');
$productocatorcea=session('productocatorcea');}
else{
$catorcea="";
$pircecatorcea="";
$preciocatorcea="";
$totalpreciocatorcea=0;
$productocatorcea="";   
}

if(!empty(session('totalprecioquincea'))){
$quincea=session('quincea');
$pircequincea=session('pircequincea');
$precioquincea=session('precioquincea');
$totalprecioquincea=session('totalprecioquincea');
$productoquincea=session('productoquincea');}
else{
$quincea="";
$pircequincea="";
$precioquincea="";
$totalprecioquincea=0;
$productoquincea="";   
}

if(!empty(session('totalpreciodieciseisa'))){
$dieciseisa=session('dieciseisa');
$pircedieciseisa=session('pircedieciseisa');
$preciodieciseisa=session('preciodieciseisa');
$totalpreciodieciseisa=session('totalpreciodieciseisa');
$productodieciseisa=session('productodieciseisa');}
else{
$dieciseisa="";
$pircedieciseisa="";
$preciodieciseisa="";
$totalpreciodieciseisa=0;
$productodieciseisa="";   
}

if(!empty(session('totalpreciodiecisietea'))){
$diecisietea=session('diecisietea');
$pircediecisietea=session('pircediecisietea');
$preciodiecisietea=session('preciodiecisietea');
$totalpreciodiecisietea=session('totalpreciodiecisietea');
$productodiecisietea=session('productodiecisietea');}
else{
$diecisietea="";
$pircediecisietea="";
$preciodiecisietea="";
$totalpreciodiecisietea=0;
$productodiecisietea="";   
}

if(!empty(session('totalpreciodieciochoa'))){
$dieciochoa=session('dieciochoa');
$pircedieciochoa=session('pircedieciochoa');
$preciodieciochoa=session('preciodieciochoa');
$totalpreciodieciochoa=session('totalpreciodieciochoa');
$productodieciochoa=session('productodieciochoa');}
else{
$dieciochoa="";
$pircedieciochoa="";
$preciodieciochoa="";
$totalpreciodieciochoa=0;
$productodieciochoa="";   
}

if(!empty(session('totalpreciodiecinuevea'))){
$diecinuevea=session('diecinuevea');
$pircediecinuevea=session('pircediecinuevea');
$preciodiecinuevea=session('preciodiecinuevea');
$totalpreciodiecinuevea=session('totalpreciodiecinuevea');
$productodiecinuevea=session('productodiecinuevea');}
else{
$diecinuevea="";
$pircediecinuevea="";
$preciodiecinuevea="";
$totalpreciodiecinuevea=0;
$productodiecinuevea="";   
}

if(!empty(session('totalprecioveintea'))){
$veintea=session('veintea');
$pirceveintea=session('pirceveintea');
$precioveintea=session('precioveintea');
$totalprecioveintea=session('totalprecioveintea');
$productoveintea=session('productoveintea');}
else{
$veintea="";
$pirceveintea="";
$precioveintea="";
$totalprecioveintea=0;
$productoveintea="";   
}

if(!empty(session('totalprecioveintiunoa'))){
$veintiunoa=session('veintiunoa');
$pirceveintiunoa=session('pirceveintiunoa');
$precioveintiunoa=session('precioveintiunoa');
$totalprecioveintiunoa=session('totalprecioveintiunoa');
$productoveintiunoa=session('productoveintiunoa');}
else{
$veintiunoa="";
$pirceveintiunoa="";
$precioveintiunoa="";
$totalprecioveintiunoa=0;
$productoveintiunoa="";   
}

if(!empty(session('totalprecioveintidosa'))){
$veintidosa=session('veintidosa');
$pirceveintidosa=session('pirceveintidosa');
$precioveintidosa=session('precioveintidosa');
$totalprecioveintidosa=session('totalprecioveintidosa');
$productoveintidosa=session('productoveintidosa');}
else{
$veintidosa="";
$pirceveintidosa="";
$precioveintidosa="";
$totalprecioveintidosa=0;
$productoveintidosa="";   
}

if(!empty(session('totalprecioveintitresa'))){
$veintitresa=session('veintitresa');
$pirceveintitresa=session('pirceveintitresa');
$precioveintitresa=session('precioveintitresa');
$totalprecioveintitresa=session('totalprecioveintitresa');
$productoveintitresa=session('productoveintitresa');}
else{
$veintitresa="";
$pirceveintitresa="";
$precioveintitresa="";
$totalprecioveintitresa=0;
$productoveintitresa="";   
}

if(!empty(session('totalprecioveinticuatroa'))){
$veinticuatroa=session('veinticuatroa');
$pirceveinticuatroa=session('pirceveinticuatroa');
$precioveinticuatroa=session('precioveinticuatroa');
$totalprecioveinticuatroa=session('totalprecioveinticuatroa');
$productoveinticuatroa=session('productoveinticuatroa');}
else{
$veinticuatroa="";
$pirceveinticuatroa="";
$precioveinticuatroa="";
$totalprecioveinticuatroa=0;
$productoveinticuatroa="";   
}


if(!empty(session('totalprecioveinticincoa'))){
$veinticincoa=session('veinticincoa');
$pirceveinticincoa=session('pirceveinticincoa');
$precioveinticincoa=session('precioveinticincoa');
$totalprecioveinticincoa=session('totalprecioveinticincoa');
$productoveinticincoa=session('productoveinticincoa');}
else{
$veinticincoa="";
$pirceveinticincoa="";
$precioveinticincoa="";
$totalprecioveinticincoa=0;
$productoveinticincoa="";   
}

if(!empty(session('totalprecioveintiseisa'))){
$veintiseisa=session('veintiseisa');
$pirceveintiseisa=session('pirceveintiseisa');
$precioveintiseisa=session('precioveintiseisa');
$totalprecioveintiseisa=session('totalprecioveintiseisa');
$productoveintiseisa=session('productoveintiseisa');}
else{
$veintiseisa="";
$pirceveintiseisa="";
$precioveintiseisa="";
$totalprecioveintiseisa=0;
$productoveintiseisa="";   
}

if(!empty(session('totalprecioveintisietea'))){
$veintisietea=session('veintisietea');
$pirceveintisietea=session('pirceveintisietea');
$precioveintisietea=session('precioveintisietea');
$totalprecioveintisietea=session('totalprecioveintisietea');
$productoveintisietea=session('productoveintisietea');}
else{
$veintisietea="";
$pirceveintisietea="";
$precioveintisietea="";
$totalprecioveintisietea=0;
$productoveintisietea="";   
}

if(!empty(session('totalprecioveintiochoa'))){
$veintiochoa=session('veintiochoa');
$pirceveintiochoa=session('pirceveintiochoa');
$precioveintiochoa=session('precioveintiochoa');
$totalprecioveintiochoa=session('totalprecioveintiochoa');
$productoveintiochoa=session('productoveintiochoa');}
else{
$veintiochoa="";
$pirceveintiochoa="";
$precioveintiochoa="";
$totalprecioveintiochoa=0;
$productoveintiochoa="";   
}
if(!empty(session('totalprecioveintinuevea'))){
$veintinuevea=session('veintinuevea');
$pirceveintinuevea=session('pirceveintinuevea');
$precioveintinuevea=session('precioveintinuevea');
$totalprecioveintinuevea=session('totalprecioveintinuevea');
$productoveintinuevea=session('productoveintinuevea');}
else{
$veintinuevea="";
$pirceveintinuevea="";
$precioveintinuevea="";
$totalprecioveintinuevea=0;
$productoveintinuevea="";   
}

if(!empty(session('totalpreciotreintaa'))){
$treintaa=session('treintaa');
$pircetreintaa=session('pircetreintaa');
$preciotreintaa=session('preciotreintaa');
$totalpreciotreintaa=session('totalpreciotreintaa');
$productotreintaa=session('productotreintaa');}
else{
$treintaa="";
$pircetreintaa="";
$preciotreintaa="";
$totalpreciotreintaa=0;
$productotreintaa="";   
}



//PRINCIPAL//
if(!empty(session('totalpreciouno'))){
$uno=session('uno');
$pirceuno=session('pirceuno');
$preciouno=session('preciouno');
$totalpreciouno=session('totalpreciouno');
$productouno=session('productouno');}
else{
$uno="";
$pirceuno="";
$preciouno="";
$totalpreciouno=0;
$productouno="";   
}

if(!empty(session('totalpreciodos'))){
$dos=session('dos');
$pircedos=session('pircedos');
$preciodos=session('preciodos');
$totalpreciodos=session('totalpreciodos');
$productodos=session('productodos');}
else{
$dos="";
$pircedos="";
$preciodos="";
$totalpreciodos=0;
$productodos="";   
}

if(!empty(session('totalpreciotres'))){
$tres=session('tres');
$pircetres=session('pircetres');
$preciotres=session('preciotres');
$totalpreciotres=session('totalpreciotres');
$productotres=session('productotres');}
else{
$tres="";
$pircetres="";
$preciotres="";
$totalpreciotres=0;
$productotres="";   
}

if(!empty(session('totalpreciocuatro'))){
$cuatro=session('cuatro');
$pircecuatro=session('pircecuatro');
$preciocuatro=session('preciocuatro');
$totalpreciocuatro=session('totalpreciocuatro');
$productocuatro=session('productocuatro');}
else{
$cuatro="";
$pircecuatro="";
$preciocuatro="";
$totalpreciocuatro=0;
$productocuatro="";   
}

if(!empty(session('totalpreciocinco'))){
$cinco=session('cinco');
$pircecinco=session('pircecinco');
$preciocinco=session('preciocinco');
$totalpreciocinco=session('totalpreciocinco');
$productocinco=session('productocinco');}
else{
$cinco="";
$pircecinco="";
$preciocinco="";
$totalpreciocinco=0;
$productocinco="";   
}

if(!empty(session('totalprecioseis'))){
$seis=session('seis');
$pirceseis=session('pirceseis');
$precioseis=session('precioseis');
$totalprecioseis=session('totalprecioseis');
$productoseis=session('productoseis');}
else{
$seis="";
$pirceseis="";
$precioseis="";
$totalprecioseis=0;
$productoseis="";   
}

if(!empty(session('totalpreciosiete'))){
$siete=session('siete');
$pircesiete=session('pircesiete');
$preciosiete=session('preciosiete');
$totalpreciosiete=session('totalpreciosiete');
$productosiete=session('productosiete');}
else{
$siete="";
$pircesiete="";
$preciosiete="";
$totalpreciosiete=0;
$productosiete="";   
}

if(!empty(session('totalprecioocho'))){
$ocho=session('ocho');
$pirceocho=session('pirceocho');
$precioocho=session('precioocho');
$totalprecioocho=session('totalprecioocho');
$productoocho=session('productoocho');}
else{
$ocho="";
$pirceocho="";
$precioocho="";
$totalprecioocho=0;
$productoocho="";   
}

if(!empty(session('totalprecionueve'))){
$nueve=session('nueve');
$pircenueve=session('pircenueve');
$precionueve=session('precionueve');
$totalprecionueve=session('totalprecionueve');
$productonueve=session('productonueve');}
else{
$nueve="";
$pircenueve="";
$precionueve="";
$totalprecionueve=0;
$productonueve="";   
}

if(!empty(session('totalpreciodiez'))){
$diez=session('diez');
$pircediez=session('pircediez');
$preciodiez=session('preciodiez');
$totalpreciodiez=session('totalpreciodiez');
$productodiez=session('productodiez');}
else{
$diez="";
$pircediez="";
$preciodiez="";
$totalpreciodiez=0;
$productodiez="";   
}

if(!empty(session('totalprecioonce'))){
$once=session('once');
$pirceonce=session('pirceonce');
$precioonce=session('precioonce');
$totalprecioonce=session('totalprecioonce');
$productoonce=session('productoonce');}
else{
$once="";
$pirceonce="";
$precioonce="";
$totalprecioonce=0;
$productoonce="";   
}


if(!empty(session('totalpreciodoce'))){
$doce=session('doce');
$pircedoce=session('pircedoce');
$preciodoce=session('preciodoce');
$totalpreciodoce=session('totalpreciodoce');
$productodoce=session('productodoce');}
else{
$doce="";
$pircedoce="";
$preciodoce="";
$totalpreciodoce=0;
$productodoce="";   
}

if(!empty(session('totalpreciotrece'))){
$trece=session('trece');
$pircetrece=session('pircetrece');
$preciotrece=session('preciotrece');
$totalpreciotrece=session('totalpreciotrece');
$productotrece=session('productotrece');}
else{
$trece="";
$pircetrece="";
$preciotrece="";
$totalpreciotrece=0;
$productotrece="";   
}

if(!empty(session('totalpreciocatorce'))){
$catorce=session('catorce');
$pircecatorce=session('pircecatorce');
$preciocatorce=session('preciocatorce');
$totalpreciocatorce=session('totalpreciocatorce');
$productocatorce=session('productocatorce');}
else{
$catorce="";
$pircecatorce="";
$preciocatorce="";
$totalpreciocatorce=0;
$productocatorce="";   
}

if(!empty(session('totalprecioquince'))){
$quince=session('quince');
$pircequince=session('pircequince');
$precioquince=session('precioquince');
$totalprecioquince=session('totalprecioquince');
$productoquince=session('productoquince');}
else{
$quince="";
$pircequince="";
$precioquince="";
$totalprecioquince=0;
$productoquince="";   
}

if(!empty(session('totalpreciodieciseis'))){
$dieciseis=session('dieciseis');
$pircedieciseis=session('pircedieciseis');
$preciodieciseis=session('preciodieciseis');
$totalpreciodieciseis=session('totalpreciodieciseis');
$productodieciseis=session('productodieciseis');}
else{
$dieciseis="";
$pircedieciseis="";
$preciodieciseis="";
$totalpreciodieciseis=0;
$productodieciseis="";   
}

if(!empty(session('totalpreciodiecisiete'))){
$diecisiete=session('diecisiete');
$pircediecisiete=session('pircediecisiete');
$preciodiecisiete=session('preciodiecisiete');
$totalpreciodiecisiete=session('totalpreciodiecisiete');
$productodiecisiete=session('productodiecisiete');}
else{
$diecisiete="";
$pircediecisiete="";
$preciodiecisiete="";
$totalpreciodiecisiete=0;
$productodiecisiete="";   
}

if(!empty(session('totalpreciodieciocho'))){
$dieciocho=session('dieciocho');
$pircedieciocho=session('pircedieciocho');
$preciodieciocho=session('preciodieciocho');
$totalpreciodieciocho=session('totalpreciodieciocho');
$productodieciocho=session('productodieciocho');}
else{
$dieciocho="";
$pircedieciocho="";
$preciodieciocho="";
$totalpreciodieciocho=0;
$productodieciocho="";   
}

if(!empty(session('totalpreciodiecinueve'))){
$diecinueve=session('diecinueve');
$pircediecinueve=session('pircediecinueve');
$preciodiecinueve=session('preciodiecinueve');
$totalpreciodiecinueve=session('totalpreciodiecinueve');
$productodiecinueve=session('productodiecinueve');}
else{
$diecinueve="";
$pircediecinueve="";
$preciodiecinueve="";
$totalpreciodiecinueve=0;
$productodiecinueve="";   
}

if(!empty(session('totalprecioveinte'))){
$veinte=session('veinte');
$pirceveinte=session('pirceveinte');
$precioveinte=session('precioveinte');
$totalprecioveinte=session('totalprecioveinte');
$productoveinte=session('productoveinte');}
else{
$veinte="";
$pirceveinte="";
$precioveinte="";
$totalprecioveinte=0;
$productoveinte="";   
}

if(!empty(session('totalprecioveintiuno'))){
$veintiuno=session('veintiuno');
$pirceveintiuno=session('pirceveintiuno');
$precioveintiuno=session('precioveintiuno');
$totalprecioveintiuno=session('totalprecioveintiuno');
$productoveintiuno=session('productoveintiuno');}
else{
$veintiuno="";
$pirceveintiuno="";
$precioveintiuno="";
$totalprecioveintiuno=0;
$productoveintiuno="";   
}

if(!empty(session('totalprecioveintidos'))){
$veintidos=session('veintidos');
$pirceveintidos=session('pirceveintidos');
$precioveintidos=session('precioveintidos');
$totalprecioveintidos=session('totalprecioveintidos');
$productoveintidos=session('productoveintidos');}
else{
$veintidos="";
$pirceveintidos="";
$precioveintidos="";
$totalprecioveintidos=0;
$productoveintidos="";   
}

if(!empty(session('totalprecioveintitres'))){
$veintitres=session('veintitres');
$pirceveintitres=session('pirceveintitres');
$precioveintitres=session('precioveintitres');
$totalprecioveintitres=session('totalprecioveintitres');
$productoveintitres=session('productoveintitres');}
else{
$veintitres="";
$pirceveintitres="";
$precioveintitres="";
$totalprecioveintitres=0;
$productoveintitres="";   
}

if(!empty(session('totalprecioveinticuatro'))){
$veinticuatro=session('veinticuatro');
$pirceveinticuatro=session('pirceveinticuatro');
$precioveinticuatro=session('precioveinticuatro');
$totalprecioveinticuatro=session('totalprecioveinticuatro');
$productoveinticuatro=session('productoveinticuatro');}
else{
$veinticuatro="";
$pirceveinticuatro="";
$precioveinticuatro="";
$totalprecioveinticuatro=0;
$productoveinticuatro="";   
}


if(!empty(session('totalprecioveinticinco'))){
$veinticinco=session('veinticinco');
$pirceveinticinco=session('pirceveinticinco');
$precioveinticinco=session('precioveinticinco');
$totalprecioveinticinco=session('totalprecioveinticinco');
$productoveinticinco=session('productoveinticinco');}
else{
$veinticinco="";
$pirceveinticinco="";
$precioveinticinco="";
$totalprecioveinticinco=0;
$productoveinticinco="";   
}

if(!empty(session('totalprecioveintiseis'))){
$veintiseis=session('veintiseis');
$pirceveintiseis=session('pirceveintiseis');
$precioveintiseis=session('precioveintiseis');
$totalprecioveintiseis=session('totalprecioveintiseis');
$productoveintiseis=session('productoveintiseis');}
else{
$veintiseis="";
$pirceveintiseis="";
$precioveintiseis="";
$totalprecioveintiseis=0;
$productoveintiseis="";   
}

if(!empty(session('totalprecioveintisiete'))){
$veintisiete=session('veintisiete');
$pirceveintisiete=session('pirceveintisiete');
$precioveintisiete=session('precioveintisiete');
$totalprecioveintisiete=session('totalprecioveintisiete');
$productoveintisiete=session('productoveintisiete');}
else{
$veintisiete="";
$pirceveintisiete="";
$precioveintisiete="";
$totalprecioveintisiete=0;
$productoveintisiete="";   
}

if(!empty(session('totalprecioveintiocho'))){
$veintiocho=session('veintiocho');
$pirceveintiocho=session('pirceveintiocho');
$precioveintiocho=session('precioveintiocho');
$totalprecioveintiocho=session('totalprecioveintiocho');
$productoveintiocho=session('productoveintiocho');}
else{
$veintiocho="";
$pirceveintiocho="";
$precioveintiocho="";
$totalprecioveintiocho=0;
$productoveintiocho="";   
}
if(!empty(session('totalprecioveintinueve'))){
$veintinueve=session('veintinueve');
$pirceveintinueve=session('pirceveintinueve');
$precioveintinueve=session('precioveintinueve');
$totalprecioveintinueve=session('totalprecioveintinueve');
$productoveintinueve=session('productoveintinueve');}
else{
$veintinueve="";
$pirceveintinueve="";
$precioveintinueve="";
$totalprecioveintinueve=0;
$productoveintinueve="";   
}

if(!empty(session('totalpreciotreinta'))){
$treinta=session('treinta');
$pircetreinta=session('pircetreinta');
$preciotreinta=session('preciotreinta');
$totalpreciotreinta=session('totalpreciotreinta');
$productotreinta=session('productotreinta');}
else{
$treinta="";
$pircetreinta="";
$preciotreinta="";
$totalpreciotreinta=0;
$productotreinta="";   
}
//BUCALES//

if(!empty(session('totalpreciounoo'))){
$unoo=session('unoo');
$pirceunoo=session('pirceunoo');
$preciounoo=session('preciounoo');
$totalpreciounoo=session('totalpreciounoo');
$productounoo=session('productounoo');}
else{
$unoo="";
$pirceunoo="";
$preciounoo="";
$totalpreciounoo=0;
$productounoo="";   
}

if(!empty(session('totalpreciodoso'))){
$doso=session('doso');
$pircedoso=session('pircedoso');
$preciodoso=session('preciodoso');
$totalpreciodoso=session('totalpreciodoso');
$productodoso=session('productodoso');}
else{
$doso="";
$pircedoso="";
$preciodoso="";
$totalpreciodoso=0;
$productodoso="";   
}

if(!empty(session('totalpreciotreso'))){
$treso=session('treso');
$pircetreso=session('pircetreso');
$preciotreso=session('preciotreso');
$totalpreciotreso=session('totalpreciotreso');
$productotreso=session('productotreso');}
else{
$treso="";
$pircetreso="";
$preciotreso="";
$totalpreciotreso=0;
$productotreso="";   
}

if(!empty(session('totalpreciocuatroo'))){
$cuatroo=session('cuatroo');
$pircecuatroo=session('pircecuatroo');
$preciocuatroo=session('preciocuatroo');
$totalpreciocuatroo=session('totalpreciocuatroo');
$productocuatroo=session('productocuatroo');}
else{
$cuatroo="";
$pircecuatroo="";
$preciocuatroo="";
$totalpreciocuatroo=0;
$productocuatroo="";   
}

if(!empty(session('totalpreciocincoo'))){
$cincoo=session('cincoo');
$pircecincoo=session('pircecincoo');
$preciocincoo=session('preciocincoo');
$totalpreciocincoo=session('totalpreciocincoo');
$productocincoo=session('productocincoo');}
else{
$cincoo="";
$pircecincoo="";
$preciocincoo="";
$totalpreciocincoo=0;
$productocincoo="";   
}

if(!empty(session('totalprecioseiso'))){
$seiso=session('seiso');
$pirceseiso=session('pirceseiso');
$precioseiso=session('precioseiso');
$totalprecioseiso=session('totalprecioseiso');
$productoseiso=session('productoseiso');}
else{
$seiso="";
$pirceseiso="";
$precioseiso="";
$totalprecioseiso=0;
$productoseiso="";   
}

if(!empty(session('totalpreciosieteo'))){
$sieteo=session('sieteo');
$pircesieteo=session('pircesieteo');
$preciosieteo=session('preciosieteo');
$totalpreciosieteo=session('totalpreciosieteo');
$productosieteo=session('productosieteo');}
else{
$sieteo="";
$pircesieteo="";
$preciosieteo="";
$totalpreciosieteo=0;
$productosieteo="";   
}

if(!empty(session('totalprecioochoo'))){
$ochoo=session('ochoo');
$pirceochoo=session('pirceochoo');
$precioochoo=session('precioochoo');
$totalprecioochoo=session('totalprecioochoo');
$productoochoo=session('productoochoo');}
else{
$ochoo="";
$pirceochoo="";
$precioochoo="";
$totalprecioochoo=0;
$productoochoo="";   
}

if(!empty(session('totalprecionueveo'))){
$nueveo=session('nueveo');
$pircenueveo=session('pircenueveo');
$precionueveo=session('precionueveo');
$totalprecionueveo=session('totalprecionueveo');
$productonueveo=session('productonueveo');}
else{
$nueveo="";
$pircenueveo="";
$precionueveo="";
$totalprecionueveo=0;
$productonueveo="";   
}

if(!empty(session('totalpreciodiezo'))){
$diezo=session('diezo');
$pircediezo=session('pircediezo');
$preciodiezo=session('preciodiezo');
$totalpreciodiezo=session('totalpreciodiezo');
$productodiezo=session('productodiezo');}
else{
$diezo="";
$pircediezo="";
$preciodiezo="";
$totalpreciodiezo=0;
$productodiezo="";   
}

if(!empty(session('totalprecioonceo'))){
$onceo=session('onceo');
$pirceonceo=session('pirceonceo');
$precioonceo=session('precioonceo');
$totalprecioonceo=session('totalprecioonceo');
$productoonceo=session('productoonceo');}
else{
$onceo="";
$pirceonceo="";
$precioonceo="";
$totalprecioonceo=0;
$productoonceo="";   
}


if(!empty(session('totalpreciodoceo'))){
$doceo=session('doceo');
$pircedoceo=session('pircedoceo');
$preciodoceo=session('preciodoceo');
$totalpreciodoceo=session('totalpreciodoceo');
$productodoceo=session('productodoceo');}
else{
$doceo="";
$pircedoceo="";
$preciodoceo="";
$totalpreciodoceo=0;
$productodoceo="";   
}

if(!empty(session('totalpreciotreceo'))){
$treceo=session('treceo');
$pircetreceo=session('pircetreceo');
$preciotreceo=session('preciotreceo');
$totalpreciotreceo=session('totalpreciotreceo');
$productotreceo=session('productotreceo');}
else{
$treceo="";
$pircetreceo="";
$preciotreceo="";
$totalpreciotreceo=0;
$productotreceo="";   
}

if(!empty(session('totalpreciocatorceo'))){
$catorceo=session('catorceo');
$pircecatorceo=session('pircecatorceo');
$preciocatorceo=session('preciocatorceo');
$totalpreciocatorceo=session('totalpreciocatorceo');
$productocatorceo=session('productocatorceo');}
else{
$catorceo="";
$pircecatorceo="";
$preciocatorceo="";
$totalpreciocatorceo=0;
$productocatorceo="";   
}

if(!empty(session('totalprecioquinceo'))){
$quinceo=session('quinceo');
$pircequinceo=session('pircequinceo');
$precioquinceo=session('precioquinceo');
$totalprecioquinceo=session('totalprecioquinceo');
$productoquinceo=session('productoquinceo');}
else{
$quinceo="";
$pircequinceo="";
$precioquinceo="";
$totalprecioquinceo=0;
$productoquinceo="";   
}

if(!empty(session('totalpreciodieciseiso'))){
$dieciseiso=session('dieciseiso');
$pircedieciseiso=session('pircedieciseiso');
$preciodieciseiso=session('preciodieciseiso');
$totalpreciodieciseiso=session('totalpreciodieciseiso');
$productodieciseiso=session('productodieciseiso');}
else{
$dieciseiso="";
$pircedieciseiso="";
$preciodieciseiso="";
$totalpreciodieciseiso=0;
$productodieciseiso="";   
}

if(!empty(session('totalpreciodiecisieteo'))){
$diecisieteo=session('diecisieteo');
$pircediecisieteo=session('pircediecisieteo');
$preciodiecisieteo=session('preciodiecisieteo');
$totalpreciodiecisieteo=session('totalpreciodiecisieteo');
$productodiecisieteo=session('productodiecisieteo');}
else{
$diecisieteo="";
$pircediecisieteo="";
$preciodiecisieteo="";
$totalpreciodiecisieteo=0;
$productodiecisieteo="";   
}

if(!empty(session('totalpreciodieciochoo'))){
$dieciochoo=session('dieciochoo');
$pircedieciochoo=session('pircedieciochoo');
$preciodieciochoo=session('preciodieciochoo');
$totalpreciodieciochoo=session('totalpreciodieciochoo');
$productodieciochoo=session('productodieciochoo');}
else{
$dieciochoo="";
$pircedieciochoo="";
$preciodieciochoo="";
$totalpreciodieciochoo=0;
$productodieciochoo="";   
}

if(!empty(session('totalpreciodiecinueveo'))){
$diecinueveo=session('diecinueveo');
$pircediecinueveo=session('pircediecinueveo');
$preciodiecinueveo=session('preciodiecinueveo');
$totalpreciodiecinueveo=session('totalpreciodiecinueveo');
$productodiecinueveo=session('productodiecinueveo');}
else{
$diecinueveo="";
$pircediecinueveo="";
$preciodiecinueveo="";
$totalpreciodiecinueveo=0;
$productodiecinueveo="";   
}

if(!empty(session('totalprecioveinteo'))){
$veinteo=session('veinteo');
$pirceveinteo=session('pirceveinteo');
$precioveinteo=session('precioveinteo');
$totalprecioveinteo=session('totalprecioveinteo');
$productoveinteo=session('productoveinteo');}
else{
$veinteo="";
$pirceveinteo="";
$precioveinteo="";
$totalprecioveinteo=0;
$productoveinteo="";   
}

if(!empty(session('totalprecioveintiunoo'))){
$veintiunoo=session('veintiunoo');
$pirceveintiunoo=session('pirceveintiunoo');
$precioveintiunoo=session('precioveintiunoo');
$totalprecioveintiunoo=session('totalprecioveintiunoo');
$productoveintiunoo=session('productoveintiunoo');}
else{
$veintiunoo="";
$pirceveintiunoo="";
$precioveintiunoo="";
$totalprecioveintiunoo=0;
$productoveintiunoo="";   
}

if(!empty(session('totalprecioveintidoso'))){
$veintidoso=session('veintidoso');
$pirceveintidoso=session('pirceveintidoso');
$precioveintidoso=session('precioveintidoso');
$totalprecioveintidoso=session('totalprecioveintidoso');
$productoveintidoso=session('productoveintidoso');}
else{
$veintidoso="";
$pirceveintidoso="";
$precioveintidoso="";
$totalprecioveintidoso=0;
$productoveintidoso="";   
}

if(!empty(session('totalprecioveintitreso'))){
$veintitreso=session('veintitreso');
$pirceveintitreso=session('pirceveintitreso');
$precioveintitreso=session('precioveintitreso');
$totalprecioveintitreso=session('totalprecioveintitreso');
$productoveintitreso=session('productoveintitreso');}
else{
$veintitreso="";
$pirceveintitreso="";
$precioveintitreso="";
$totalprecioveintitreso=0;
$productoveintitreso="";   
}

if(!empty(session('totalprecioveinticuatroo'))){
$veinticuatroo=session('veinticuatroo');
$pirceveinticuatroo=session('pirceveinticuatroo');
$precioveinticuatroo=session('precioveinticuatroo');
$totalprecioveinticuatroo=session('totalprecioveinticuatroo');
$productoveinticuatroo=session('productoveinticuatroo');}
else{
$veinticuatroo="";
$pirceveinticuatroo="";
$precioveinticuatroo="";
$totalprecioveinticuatroo=0;
$productoveinticuatroo="";   
}


if(!empty(session('totalprecioveinticincoo'))){
$veinticincoo=session('veinticincoo');
$pirceveinticincoo=session('pirceveinticincoo');
$precioveinticincoo=session('precioveinticincoo');
$totalprecioveinticincoo=session('totalprecioveinticincoo');
$productoveinticincoo=session('productoveinticincoo');}
else{
$veinticincoo="";
$pirceveinticincoo="";
$precioveinticincoo="";
$totalprecioveinticincoo=0;
$productoveinticincoo="";   
}

if(!empty(session('totalprecioveintiseiso'))){
$veintiseiso=session('veintiseiso');
$pirceveintiseiso=session('pirceveintiseiso');
$precioveintiseiso=session('precioveintiseiso');
$totalprecioveintiseiso=session('totalprecioveintiseiso');
$productoveintiseiso=session('productoveintiseiso');}
else{
$veintiseiso="";
$pirceveintiseiso="";
$precioveintiseiso="";
$totalprecioveintiseiso=0;
$productoveintiseiso="";   
}

if(!empty(session('totalprecioveintisieteo'))){
$veintisieteo=session('veintisieteo');
$pirceveintisieteo=session('pirceveintisieteo');
$precioveintisieteo=session('precioveintisieteo');
$totalprecioveintisieteo=session('totalprecioveintisieteo');
$productoveintisieteo=session('productoveintisieteo');}
else{
$veintisieteo="";
$pirceveintisieteo="";
$precioveintisieteo="";
$totalprecioveintisieteo=0;
$productoveintisieteo="";   
}

if(!empty(session('totalprecioveintiochoo'))){
$veintiochoo=session('veintiochoo');
$pirceveintiochoo=session('pirceveintiochoo');
$precioveintiochoo=session('precioveintiochoo');
$totalprecioveintiochoo=session('totalprecioveintiochoo');
$productoveintiochoo=session('productoveintiochoo');}
else{
$veintiochoo="";
$pirceveintiochoo="";
$precioveintiochoo="";
$totalprecioveintiochoo=0;
$productoveintiochoo="";   
}
if(!empty(session('totalprecioveintinueveo'))){
$veintinueveo=session('veintinueveo');
$pirceveintinueveo=session('pirceveintinueveo');
$precioveintinueveo=session('precioveintinueveo');
$totalprecioveintinueveo=session('totalprecioveintinueveo');
$productoveintinueveo=session('productoveintinueveo');}
else{
$veintinueveo="";
$pirceveintinueveo="";
$precioveintinueveo="";
$totalprecioveintinueveo=0;
$productoveintinueveo="";   
}

if(!empty(session('totalpreciotreintao'))){
$treintao=session('treintao');
$pircetreintao=session('pircetreintao');
$preciotreintao=session('preciotreintao');
$totalpreciotreintao=session('totalpreciotreintao');
$productotreintao=session('productotreintao');}
else{
$treintao="";
$pircetreintao="";
$preciotreintao="";
$totalpreciotreintao=0;
$productotreintao="";   
}

//CAPILARES//
if(!empty(session('totalpreciounoca'))){
$unoca=session('unoca');
$pirceunoca=session('pirceunoca');
$preciounoca=session('preciounoca');
$totalpreciounoca=session('totalpreciounoca');
$productounoca=session('productounoca');}
else{
$unoca="";
$pirceunoca="";
$preciounoca="";
$totalpreciounoca=0;
$productounoca="";   
}

if(!empty(session('totalpreciodosca'))){
$dosca=session('dosca');
$pircedosca=session('pircedosca');
$preciodosca=session('preciodosca');
$totalpreciodosca=session('totalpreciodosca');
$productodosca=session('productodosca');}
else{
$dosca="";
$pircedosca="";
$preciodosca="";
$totalpreciodosca=0;
$productodosca="";   
}

if(!empty(session('totalpreciotresca'))){
$tresca=session('tresca');
$pircetresca=session('pircetresca');
$preciotresca=session('preciotresca');
$totalpreciotresca=session('totalpreciotresca');
$productotresca=session('productotresca');}
else{
$tresca="";
$pircetresca="";
$preciotresca="";
$totalpreciotresca=0;
$productotresca="";   
}

if(!empty(session('totalpreciocuatroca'))){
$cuatroca=session('cuatroca');
$pircecuatroca=session('pircecuatroca');
$preciocuatroca=session('preciocuatroca');
$totalpreciocuatroca=session('totalpreciocuatroca');
$productocuatroca=session('productocuatroca');}
else{
$cuatroca="";
$pircecuatroca="";
$preciocuatroca="";
$totalpreciocuatroca=0;
$productocuatroca="";   
}

if(!empty(session('totalpreciocincoca'))){
$cincoca=session('cincoca');
$pircecincoca=session('pircecincoca');
$preciocincoca=session('preciocincoca');
$totalpreciocincoca=session('totalpreciocincoca');
$productocincoca=session('productocincoca');}
else{
$cincoca="";
$pircecincoca="";
$preciocincoca="";
$totalpreciocincoca=0;
$productocincoca="";   
}

if(!empty(session('totalprecioseisca'))){
$seisca=session('seisca');
$pirceseisca=session('pirceseisca');
$precioseisca=session('precioseisca');
$totalprecioseisca=session('totalprecioseisca');
$productoseisca=session('productoseisca');}
else{
$seisca="";
$pirceseisca="";
$precioseisca="";
$totalprecioseisca=0;
$productoseisca="";   
}

if(!empty(session('totalpreciosieteca'))){
$sieteca=session('sieteca');
$pircesieteca=session('pircesieteca');
$preciosieteca=session('preciosieteca');
$totalpreciosieteca=session('totalpreciosieteca');
$productosieteca=session('productosieteca');}
else{
$sieteca="";
$pircesieteca="";
$preciosieteca="";
$totalpreciosieteca=0;
$productosieteca="";   
}

if(!empty(session('totalprecioochoca'))){
$ochoca=session('ochoca');
$pirceochoca=session('pirceochoca');
$precioochoca=session('precioochoca');
$totalprecioochoca=session('totalprecioochoca');
$productoochoca=session('productoochoca');}
else{
$ochoca="";
$pirceochoca="";
$precioochoca="";
$totalprecioochoca=0;
$productoochoca="";   
}

if(!empty(session('totalprecionueveca'))){
$nueveca=session('nueveca');
$pircenueveca=session('pircenueveca');
$precionueveca=session('precionueveca');
$totalprecionueveca=session('totalprecionueveca');
$productonueveca=session('productonueveca');}
else{
$nueveca="";
$pircenueveca="";
$precionueveca="";
$totalprecionueveca=0;
$productonueveca="";   
}

if(!empty(session('totalpreciodiezca'))){
$diezca=session('diezca');
$pircediezca=session('pircediezca');
$preciodiezca=session('preciodiezca');
$totalpreciodiezca=session('totalpreciodiezca');
$productodiezca=session('productodiezca');}
else{
$diezca="";
$pircediezca="";
$preciodiezca="";
$totalpreciodiezca=0;
$productodiezca="";   
}

if(!empty(session('totalprecioonceca'))){
$onceca=session('onceca');
$pirceonceca=session('pirceonceca');
$precioonceca=session('precioonceca');
$totalprecioonceca=session('totalprecioonceca');
$productoonceca=session('productoonceca');}
else{
$onceca="";
$pirceonceca="";
$precioonceca="";
$totalprecioonceca=0;
$productoonceca="";   
}


if(!empty(session('totalpreciodoceca'))){
$doceca=session('doceca');
$pircedoceca=session('pircedoceca');
$preciodoceca=session('preciodoceca');
$totalpreciodoceca=session('totalpreciodoceca');
$productodoceca=session('productodoceca');}
else{
$doceca="";
$pircedoceca="";
$preciodoceca="";
$totalpreciodoceca=0;
$productodoceca="";   
}

if(!empty(session('totalpreciotrececa'))){
$trececa=session('trececa');
$pircetrececa=session('pircetrececa');
$preciotrececa=session('preciotrececa');
$totalpreciotrececa=session('totalpreciotrececa');
$productotrececa=session('productotrececa');}
else{
$trececa="";
$pircetrececa="";
$preciotrececa="";
$totalpreciotrececa=0;
$productotrececa="";   
}

if(!empty(session('totalpreciocatorceca'))){
$catorceca=session('catorceca');
$pircecatorceca=session('pircecatorceca');
$preciocatorceca=session('preciocatorceca');
$totalpreciocatorceca=session('totalpreciocatorceca');
$productocatorceca=session('productocatorceca');}
else{
$catorceca="";
$pircecatorceca="";
$preciocatorceca="";
$totalpreciocatorceca=0;
$productocatorceca="";   
}

if(!empty(session('totalprecioquinceca'))){
$quinceca=session('quinceca');
$pircequinceca=session('pircequinceca');
$precioquinceca=session('precioquinceca');
$totalprecioquinceca=session('totalprecioquinceca');
$productoquinceca=session('productoquinceca');}
else{
$quinceca="";
$pircequinceca="";
$precioquinceca="";
$totalprecioquinceca=0;
$productoquinceca="";   
}

if(!empty(session('totalpreciodieciseisca'))){
$dieciseisca=session('dieciseisca');
$pircedieciseisca=session('pircedieciseisca');
$preciodieciseisca=session('preciodieciseisca');
$totalpreciodieciseisca=session('totalpreciodieciseisca');
$productodieciseisca=session('productodieciseisca');}
else{
$dieciseisca="";
$pircedieciseisca="";
$preciodieciseisca="";
$totalpreciodieciseisca=0;
$productodieciseisca="";   
}

if(!empty(session('totalpreciodiecisieteca'))){
$diecisieteca=session('diecisieteca');
$pircediecisieteca=session('pircediecisieteca');
$preciodiecisieteca=session('preciodiecisieteca');
$totalpreciodiecisieteca=session('totalpreciodiecisieteca');
$productodiecisieteca=session('productodiecisieteca');}
else{
$diecisieteca="";
$pircediecisieteca="";
$preciodiecisieteca="";
$totalpreciodiecisieteca=0;
$productodiecisieteca="";   
}

if(!empty(session('totalpreciodieciochoca'))){
$dieciochoca=session('dieciochoca');
$pircedieciochoca=session('pircedieciochoca');
$preciodieciochoca=session('preciodieciochoca');
$totalpreciodieciochoca=session('totalpreciodieciochoca');
$productodieciochoca=session('productodieciochoca');}
else{
$dieciochoca="";
$pircedieciochoca="";
$preciodieciochoca="";
$totalpreciodieciochoca=0;
$productodieciochoca="";   
}

if(!empty(session('totalpreciodiecinueveca'))){
$diecinueveca=session('diecinueveca');
$pircediecinueveca=session('pircediecinueveca');
$preciodiecinueveca=session('preciodiecinueveca');
$totalpreciodiecinueveca=session('totalpreciodiecinueveca');
$productodiecinueveca=session('productodiecinueveca');}
else{
$diecinueveca="";
$pircediecinueveca="";
$preciodiecinueveca="";
$totalpreciodiecinueveca=0;
$productodiecinueveca="";   
}

if(!empty(session('totalprecioveinteca'))){
$veinteca=session('veinteca');
$pirceveinteca=session('pirceveinteca');
$precioveinteca=session('precioveinteca');
$totalprecioveinteca=session('totalprecioveinteca');
$productoveinteca=session('productoveinteca');}
else{
$veinteca="";
$pirceveinteca="";
$precioveinteca="";
$totalprecioveinteca=0;
$productoveinteca="";   
}

if(!empty(session('totalprecioveintiunoca'))){
$veintiunoca=session('veintiunoca');
$pirceveintiunoca=session('pirceveintiunoca');
$precioveintiunoca=session('precioveintiunoca');
$totalprecioveintiunoca=session('totalprecioveintiunoca');
$productoveintiunoca=session('productoveintiunoca');}
else{
$veintiunoca="";
$pirceveintiunoca="";
$precioveintiunoca="";
$totalprecioveintiunoca=0;
$productoveintiunoca="";   
}

if(!empty(session('totalprecioveintidosca'))){
$veintidosca=session('veintidosca');
$pirceveintidosca=session('pirceveintidosca');
$precioveintidosca=session('precioveintidosca');
$totalprecioveintidosca=session('totalprecioveintidosca');
$productoveintidosca=session('productoveintidosca');}
else{
$veintidosca="";
$pirceveintidosca="";
$precioveintidosca="";
$totalprecioveintidosca=0;
$productoveintidosca="";   
}

if(!empty(session('totalprecioveintitresca'))){
$veintitresca=session('veintitresca');
$pirceveintitresca=session('pirceveintitresca');
$precioveintitresca=session('precioveintitresca');
$totalprecioveintitresca=session('totalprecioveintitresca');
$productoveintitresca=session('productoveintitresca');}
else{
$veintitresca="";
$pirceveintitresca="";
$precioveintitresca="";
$totalprecioveintitresca=0;
$productoveintitresca="";   
}

if(!empty(session('totalprecioveinticuatroca'))){
$veinticuatroca=session('veinticuatroca');
$pirceveinticuatroca=session('pirceveinticuatroca');
$precioveinticuatroca=session('precioveinticuatroca');
$totalprecioveinticuatroca=session('totalprecioveinticuatroca');
$productoveinticuatroca=session('productoveinticuatroca');}
else{
$veinticuatroca="";
$pirceveinticuatroca="";
$precioveinticuatroca="";
$totalprecioveinticuatroca=0;
$productoveinticuatroca="";   
}


if(!empty(session('totalprecioveinticincoca'))){
$veinticincoca=session('veinticincoca');
$pirceveinticincoca=session('pirceveinticincoca');
$precioveinticincoca=session('precioveinticincoca');
$totalprecioveinticincoca=session('totalprecioveinticincoca');
$productoveinticincoca=session('productoveinticincoca');}
else{
$veinticincoca="";
$pirceveinticincoca="";
$precioveinticincoca="";
$totalprecioveinticincoca=0;
$productoveinticincoca="";   
}

if(!empty(session('totalprecioveintiseisca'))){
$veintiseisca=session('veintiseisca');
$pirceveintiseisca=session('pirceveintiseisca');
$precioveintiseisca=session('precioveintiseisca');
$totalprecioveintiseisca=session('totalprecioveintiseisca');
$productoveintiseisca=session('productoveintiseisca');}
else{
$veintiseisca="";
$pirceveintiseisca="";
$precioveintiseisca="";
$totalprecioveintiseisca=0;
$productoveintiseisca="";   
}

if(!empty(session('totalprecioveintisieteca'))){
$veintisieteca=session('veintisieteca');
$pirceveintisieteca=session('pirceveintisieteca');
$precioveintisieteca=session('precioveintisieteca');
$totalprecioveintisieteca=session('totalprecioveintisieteca');
$productoveintisieteca=session('productoveintisieteca');}
else{
$veintisieteca="";
$pirceveintisieteca="";
$precioveintisieteca="";
$totalprecioveintisieteca=0;
$productoveintisieteca="";   
}

if(!empty(session('totalprecioveintiochoca'))){
$veintiochoca=session('veintiochoca');
$pirceveintiochoca=session('pirceveintiochoca');
$precioveintiochoca=session('precioveintiochoca');
$totalprecioveintiochoca=session('totalprecioveintiochoca');
$productoveintiochoca=session('productoveintiochoca');}
else{
$veintiochoca="";
$pirceveintiochoca="";
$precioveintiochoca="";
$totalprecioveintiochoca=0;
$productoveintiochoca="";   
}
if(!empty(session('totalprecioveintinueveca'))){
$veintinueveca=session('veintinueveca');
$pirceveintinueveca=session('pirceveintinueveca');
$precioveintinueveca=session('precioveintinueveca');
$totalprecioveintinueveca=session('totalprecioveintinueveca');
$productoveintinueveca=session('productoveintinueveca');}
else{
$veintinueveca="";
$pirceveintinueveca="";
$precioveintinueveca="";
$totalprecioveintinueveca=0;
$productoveintinueveca="";   
}

if(!empty(session('totalpreciotreintaca'))){
$treintaca=session('treintaca');
$pircetreintaca=session('pircetreintaca');
$preciotreintaca=session('preciotreintaca');
$totalpreciotreintaca=session('totalpreciotreintaca');
$productotreintaca=session('productotreintaca');}
else{
$treintaca="";
$pircetreintaca="";
$preciotreintaca="";
$totalpreciotreintaca=0;
$productotreintaca="";   
}

//FIN CAPILARES//

//CORPORALES//
$unoco=session('unoco');
if(!empty(session('totalpreciounoco'))){
$unoco=session('unoco');
$pirceunoco=session('pirceunoco');
$preciounoco=session('preciounoco');
$totalpreciounoco=session('totalpreciounoco');
$productounoco=session('productounoco');}
else{
$unoco="";
$pirceunoco="";
$preciounoco="";
$totalpreciounoco=0;
$productounoco="";   
}

if(!empty(session('totalpreciodosco'))){
$dosco=session('dosco');
$pircedosco=session('pircedosco');
$preciodosco=session('preciodosco');
$totalpreciodosco=session('totalpreciodosco');
$productodosco=session('productodosco');}
else{
$dosco="";
$pircedosco="";
$preciodosco="";
$totalpreciodosco=0;
$productodosco="";   
}

if(!empty(session('totalpreciotresco'))){
$tresco=session('tresco');
$pircetresco=session('pircetresco');
$preciotresco=session('preciotresco');
$totalpreciotresco=session('totalpreciotresco');
$productotresco=session('productotresco');}
else{
$tresco="";
$pircetresco="";
$preciotresco="";
$totalpreciotresco=0;
$productotresco="";   
}

if(!empty(session('totalpreciocuatroco'))){
$cuatroco=session('cuatroco');
$pircecuatroco=session('pircecuatroco');
$preciocuatroco=session('preciocuatroco');
$totalpreciocuatroco=session('totalpreciocuatroco');
$productocuatroco=session('productocuatroco');}
else{
$cuatroco="";
$pircecuatroco="";
$preciocuatroco="";
$totalpreciocuatroco=0;
$productocuatroco="";   
}

if(!empty(session('totalpreciocincoco'))){
$cincoco=session('cincoco');
$pircecincoco=session('pircecincoco');
$preciocincoco=session('preciocincoco');
$totalpreciocincoco=session('totalpreciocincoco');
$productocincoco=session('productocincoco');}
else{
$cincoco="";
$pircecincoco="";
$preciocincoco="";
$totalpreciocincoco=0;
$productocincoco="";   
}

if(!empty(session('totalprecioseisco'))){
$seisco=session('seisco');
$pirceseisco=session('pirceseisco');
$precioseisco=session('precioseisco');
$totalprecioseisco=session('totalprecioseisco');
$productoseisco=session('productoseisco');}
else{
$seisco="";
$pirceseisco="";
$precioseisco="";
$totalprecioseisco=0;
$productoseisco="";   
}

if(!empty(session('totalpreciosieteco'))){
$sieteco=session('sieteco');
$pircesieteco=session('pircesieteco');
$preciosieteco=session('preciosieteco');
$totalpreciosieteco=session('totalpreciosieteco');
$productosieteco=session('productosieteco');}
else{
$sieteco="";
$pircesieteco="";
$preciosieteco="";
$totalpreciosieteco=0;
$productosieteco="";   
}

if(!empty(session('totalprecioochoco'))){
$ochoco=session('ochoco');
$pirceochoco=session('pirceochoco');
$precioochoco=session('precioochoco');
$totalprecioochoco=session('totalprecioochoco');
$productoochoco=session('productoochoco');}
else{
$ochoco="";
$pirceochoco="";
$precioochoco="";
$totalprecioochoco=0;
$productoochoco="";   
}

if(!empty(session('totalprecionueveco'))){
$nueveco=session('nueveco');
$pircenueveco=session('pircenueveco');
$precionueveco=session('precionueveco');
$totalprecionueveco=session('totalprecionueveco');
$productonueveco=session('productonueveco');}
else{
$nueveco="";
$pircenueveco="";
$precionueveco="";
$totalprecionueveco=0;
$productonueveco="";   
}

if(!empty(session('totalpreciodiezco'))){
$diezco=session('diezco');
$pircediezco=session('pircediezco');
$preciodiezco=session('preciodiezco');
$totalpreciodiezco=session('totalpreciodiezco');
$productodiezco=session('productodiezco');}
else{
$diezco="";
$pircediezco="";
$preciodiezco="";
$totalpreciodiezco=0;
$productodiezco="";   
}

if(!empty(session('totalprecioonceco'))){
$onceco=session('onceco');
$pirceonceco=session('pirceonceco');
$precioonceco=session('precioonceco');
$totalprecioonceco=session('totalprecioonceco');
$productoonceco=session('productoonceco');}
else{
$onceco="";
$pirceonceco="";
$precioonceco="";
$totalprecioonceco=0;
$productoonceco="";   
}


if(!empty(session('totalpreciodoceco'))){
$doceco=session('doceco');
$pircedoceco=session('pircedoceco');
$preciodoceco=session('preciodoceco');
$totalpreciodoceco=session('totalpreciodoceco');
$productodoceco=session('productodoceco');}
else{
$doceco="";
$pircedoceco="";
$preciodoceco="";
$totalpreciodoceco=0;
$productodoceco="";   
}

if(!empty(session('totalpreciotrececo'))){
$trececo=session('trececo');
$pircetrececo=session('pircetrececo');
$preciotrececo=session('preciotrececo');
$totalpreciotrececo=session('totalpreciotrececo');
$productotrececo=session('productotrececo');}
else{
$trececo="";
$pircetrececo="";
$preciotrececo="";
$totalpreciotrececo=0;
$productotrececo="";   
}

if(!empty(session('totalpreciocatorceco'))){
$catorceco=session('catorceco');
$pircecotarceco=session('pircecotarceco');
$preciocatorceco=session('preciocatorceco');
$totalpreciocatorceco=session('totalpreciocatorceco');
$productocatorceco=session('productocatorceco');}
else{
$catorceco="";
$pircecatorceco="";
$preciocatorceco="";
$totalpreciocatorceco=0;
$productocatorceco="";   
}

if(!empty(session('totalprecioquinceco'))){
$quinceco=session('quinceco');
$pircequinceco=session('pircequinceco');
$precioquinceco=session('precioquinceco');
$totalprecioquinceco=session('totalprecioquinceco');
$productoquinceco=session('productoquinceco');}
else{
$quinceco="";
$pircequinceco="";
$precioquinceco="";
$totalprecioquinceco=0;
$productoquinceco="";   
}

if(!empty(session('totalpreciodieciseisco'))){
$dieciseisco=session('dieciseisco');
$pircedieciseisco=session('pircedieciseisco');
$preciodieciseisco=session('preciodieciseisco');
$totalpreciodieciseisco=session('totalpreciodieciseisco');
$productodieciseisco=session('productodieciseisco');}
else{
$dieciseisco="";
$pircedieciseisco="";
$preciodieciseisco="";
$totalpreciodieciseisco=0;
$productodieciseisco="";   
}

if(!empty(session('totalpreciodiecisieteco'))){
$diecisieteco=session('diecisieteco');
$pircediecisieteco=session('pircediecisieteco');
$preciodiecisieteco=session('preciodiecisieteco');
$totalpreciodiecisieteco=session('totalpreciodiecisieteco');
$productodiecisieteco=session('productodiecisieteco');}
else{
$diecisieteco="";
$pircediecisieteco="";
$preciodiecisieteco="";
$totalpreciodiecisieteco=0;
$productodiecisieteco="";   
}

if(!empty(session('totalpreciodieciochoco'))){
$dieciochoco=session('dieciochoco');
$pircedieciochoco=session('pircedieciochoco');
$preciodieciochoco=session('preciodieciochoco');
$totalpreciodieciochoco=session('totalpreciodieciochoco');
$productodieciochoco=session('productodieciochoco');}
else{
$dieciochoco="";
$pircedieciochoco="";
$preciodieciochoco="";
$totalpreciodieciochoco=0;
$productodieciochoco="";   
}

if(!empty(session('totalpreciodiecinueveco'))){
$diecinueveco=session('diecinueveco');
$pircediecinueveco=session('pircediecinueveco');
$preciodiecinueveco=session('preciodiecinueveco');
$totalpreciodiecinueveco=session('totalpreciodiecinueveco');
$productodiecinueveco=session('productodiecinueveco');}
else{
$diecinueveco="";
$pircediecinueveco="";
$preciodiecinueveco="";
$totalpreciodiecinueveco=0;
$productodiecinueveco="";   
}

if(!empty(session('totalprecioveinteco'))){
$veinteco=session('veinteco');
$pirceveinteco=session('pirceveinteco');
$precioveinteco=session('precioveinteco');
$totalprecioveinteco=session('totalprecioveinteco');
$productoveinteco=session('productoveinteco');}
else{
$veinteco="";
$pirceveinteco="";
$precioveinteco="";
$totalprecioveinteco=0;
$productoveinteco="";   
}

if(!empty(session('totalprecioveintiunoco'))){
$veintiunoco=session('veintiunoco');
$pirceveintiunoco=session('pirceveintiunoco');
$precioveintiunoco=session('precioveintiunoco');
$totalprecioveintiunoco=session('totalprecioveintiunoco');
$productoveintiunoco=session('productoveintiunoco');}
else{
$veintiunoco="";
$pirceveintiunoco="";
$precioveintiunoco="";
$totalprecioveintiunoco=0;
$productoveintiunoco="";   
}

if(!empty(session('totalprecioveintidosco'))){
$veintidosco=session('veintidosco');
$pirceveintidosco=session('pirceveintidosco');
$precioveintidosco=session('precioveintidosco');
$totalprecioveintidosco=session('totalprecioveintidosco');
$productoveintidosco=session('productoveintidosco');}
else{
$veintidosco="";
$pirceveintidosco="";
$precioveintidosco="";
$totalprecioveintidosco=0;
$productoveintidosco="";   
}

if(!empty(session('totalprecioveintitresco'))){
$veintitresco=session('veintitresco');
$pirceveintitresco=session('pirceveintitresco');
$precioveintitresco=session('precioveintitresco');
$totalprecioveintitresco=session('totalprecioveintitresco');
$productoveintitresco=session('productoveintitresco');}
else{
$veintitresco="";
$pirceveintitresco="";
$precioveintitresco="";
$totalprecioveintitresco=0;
$productoveintitresco="";   
}

if(!empty(session('totalprecioveinticuatroco'))){
$veinticuatroco=session('veinticuatroco');
$pirceveinticuatroco=session('pirceveinticuatroco');
$precioveinticuatroco=session('precioveinticuatroco');
$totalprecioveinticuatroco=session('totalprecioveinticuatroco');
$productoveinticuatroco=session('productoveinticuatroco');}
else{
$veinticuatroco="";
$pirceveinticuatroco="";
$precioveinticuatroco="";
$totalprecioveinticuatroco=0;
$productoveinticuatroco="";   
}


if(!empty(session('totalprecioveinticincoco'))){
$veinticincoco=session('veinticincoco');
$pirceveinticincoco=session('pirceveinticincoco');
$precioveinticincoco=session('precioveinticincoco');
$totalprecioveinticincoco=session('totalprecioveinticincoco');
$productoveinticincoco=session('productoveinticincoco');}
else{
$veinticincoco="";
$pirceveinticincoco="";
$precioveinticincoco="";
$totalprecioveinticincoco=0;
$productoveinticincoco="";   
}

if(!empty(session('totalprecioveintiseisco'))){
$veintiseisco=session('veintiseisco');
$pirceveintiseisco=session('pirceveintiseisco');
$precioveintiseisco=session('precioveintiseisco');
$totalprecioveintiseisco=session('totalprecioveintiseisco');
$productoveintiseisco=session('productoveintiseisco');}
else{
$veintiseisco="";
$pirceveintiseisco="";
$precioveintiseisco="";
$totalprecioveintiseisco=0;
$productoveintiseisco="";   
}

if(!empty(session('totalprecioveintisieteco'))){
$veintisieteco=session('veintisieteco');
$pirceveintisieteco=session('pirceveintisieteco');
$precioveintisieteco=session('precioveintisieteco');
$totalprecioveintisieteco=session('totalprecioveintisieteco');
$productoveintisieteco=session('productoveintisieteco');}
else{
$veintisieteco="";
$pirceveintisieteco="";
$precioveintisieteco="";
$totalprecioveintisieteco=0;
$productoveintisieteco="";   
}

if(!empty(session('totalprecioveintiochoco'))){
$veintiochoco=session('veintiochoco');
$pirceveintiochoco=session('pirceveintiochoco');
$precioveintiochoco=session('precioveintiochoco');
$totalprecioveintiochoco=session('totalprecioveintiochoco');
$productoveintiochoco=session('productoveintiochoco');}
else{
$veintiochoco="";
$pirceveintiochoco="";
$precioveintiochoco="";
$totalprecioveintiochoco=0;
$productoveintiochoco="";   
}
if(!empty(session('totalprecioveintinueveco'))){
$veintinueveco=session('veintinueveco');
$pirceveintinueveco=session('pirceveintinueveco');
$precioveintinueveco=session('precioveintinueveco');
$totalprecioveintinueveco=session('totalprecioveintinueveco');
$productoveintinueveco=session('productoveintinueveco');}
else{
$veintinueveco="";
$pirceveintinueveco="";
$precioveintinueveco="";
$totalprecioveintinueveco=0;
$productoveintinueveco="";   
}

if(!empty(session('totalpreciotreintaco'))){
$treintaco=session('treintaco');
$pircetreintaco=session('pircetreintaco');
$preciotreintaco=session('preciotreintaco');
$totalpreciotreintaco=session('totalpreciotreintaco');
$productotreintaco=session('productotreintaco');}
else{
$treintaco="";
$pircetreintaco="";
$preciotreintaco="";
$totalpreciotreintaco=0;
$productotreintaco="";   
}
//FIN CORPORALES//


  
$sumatotal=$totalpreciounom+$totalpreciodosm+$totalpreciotresm+$totalpreciocuatrom+$totalpreciocincom+$totalprecioseism+$totalpreciosietem+$totalprecioochom+$totalprecionuevem+$totalpreciodiezm+$totalpreciooncem+$totalpreciodocem+$totalpreciotrecem+$totalpreciocatorcem+$totalprecioquincem+$totalpreciodieciseism+$totalpreciodiecisietem+$totalpreciodieciochom+$totalpreciodiecinuevem+$totalprecioveintem+$totalprecioveintiunom+$totalprecioveintidosm+$totalprecioveintitresm+$totalprecioveinticuatrom+$totalprecioveinticincom+$totalprecioveintiseism+$totalprecioveintisietem+$totalprecioveintiochom+$totalprecioveintinuevem+$totalpreciotreintam+$totalpreciounoa+$totalpreciodosa+$totalpreciotresa+$totalpreciocuatroa+$totalpreciocincoa+$totalprecioseisa+$totalpreciosietea+$totalprecioochoa+$totalprecionuevea+$totalpreciodieza+$totalpreciooncea+$totalpreciodocea+$totalpreciotrecea+$totalpreciocatorcea+$totalprecioquincea+$totalpreciodieciseisa+$totalpreciodiecisietea+$totalpreciodieciochoa+$totalpreciodiecinuevea+$totalprecioveintea+$totalprecioveintiunoa+$totalprecioveintidosa+$totalprecioveintitresa+$totalprecioveinticuatroa+$totalprecioveinticincoa+$totalprecioveintiseisa+$totalprecioveintisietea+$totalprecioveintiochoa+$totalprecioveintinuevea+$totalpreciotreintaa+$totalpreciouno+$totalpreciodos+$totalpreciotres+$totalpreciocuatro+$totalpreciocinco+$totalprecioseis+$totalpreciosiete+$totalprecioocho+$totalprecionueve+$totalpreciodiez+$totalprecioonce+$totalpreciodoce+$totalpreciotrece+$totalpreciocatorce+$totalprecioquince+$totalpreciodieciseis+$totalpreciodiecisiete+$totalpreciodieciocho+$totalpreciodiecinueve+$totalprecioveinte+$totalprecioveintiuno+$totalprecioveintidos+$totalprecioveintitres+$totalprecioveinticuatro+$totalprecioveinticinco+$totalprecioveintiseis+$totalprecioveintisiete+$totalprecioveintiocho+$totalprecioveintinueve+$totalpreciotreinta+
$totalpreciounoo+$totalpreciodoso+$totalpreciotreso+$totalpreciocuatroo+$totalpreciocincoo+$totalprecioseiso+$totalpreciosieteo+$totalprecioochoo+$totalprecionueveo+$totalpreciodiezo+$totalprecioonceo+$totalpreciodoceo+$totalpreciotreceo+$totalpreciocatorceo+$totalprecioquinceo+$totalpreciodieciseiso+$totalpreciodiecisieteo+$totalpreciodieciochoo+$totalpreciodiecinueveo+$totalprecioveinteo+$totalprecioveintiunoo+$totalprecioveintidoso+$totalprecioveintitreso+$totalprecioveinticuatroo+$totalprecioveinticincoo+$totalprecioveintiseiso+$totalprecioveintisieteo+$totalprecioveintiochoo+$totalprecioveintinueveo+$totalpreciotreintao+
$totalpreciounoca+$totalpreciodosca+$totalpreciotresca+$totalpreciocuatroca+$totalpreciocincoca+$totalprecioseisca+$totalpreciosieteca+$totalprecioochoca+$totalprecionueveca+$totalpreciodiezca+$totalprecioonceca+$totalpreciodoceca+$totalpreciotrececa+$totalpreciocatorceca+$totalprecioquinceca+$totalpreciodieciseisca+$totalpreciodiecisieteca+$totalpreciodieciochoca+$totalpreciodiecinueveca+$totalprecioveinteca+$totalprecioveintiunoca+$totalprecioveintidosca+$totalprecioveintitresca+$totalprecioveinticuatroca+$totalprecioveinticincoca+$totalprecioveintiseisca+$totalprecioveintisieteca+$totalprecioveintiochoca+$totalprecioveintinueveca+$totalpreciotreintaca+$totalpreciounoco+$totalpreciodosco+$totalpreciotresco+$totalpreciocuatroco+$totalpreciocincoco+$totalprecioseisco+$totalpreciosieteco+$totalprecioochoco+$totalprecionueveco+$totalpreciodiezco+$totalprecioonceco+$totalpreciodoceco+$totalpreciotrececo+$totalpreciocatorceco+$totalprecioquinceco+$totalpreciodieciseisco+$totalpreciodiecisieteco+$totalpreciodieciochoco+$totalpreciodiecinueveco+$totalprecioveinteco+$totalprecioveintiunoco+$totalprecioveintidosco+$totalprecioveintitresco+$totalprecioveinticuatroco+$totalprecioveinticincoco+$totalprecioveintiseisco+$totalprecioveintisieteco+$totalprecioveintiochoco+$totalprecioveintinueveco+$totalpreciotreintaco;

session(["sumatotal" => $sumatotal]);
//MUJERES//
if($totalpreciounom==0){
    $totalpreciounom="";
}
if($totalpreciodosm==0){
    $totalpreciodosm="";
}
if($totalpreciotresm==0){
    $totalpreciotresm="";
}
if($totalpreciocuatrom==0){
    $totalpreciocuatrom="";
}
if($totalpreciocincom==0){
    $totalpreciocincom="";
}
if($totalprecioseism==0){
    $totalprecioseism="";
}
if($totalpreciosietem==0){
    $totalpreciosietem="";
}
if($totalprecioochom==0){
    $totalprecioochom="";
}
if($totalprecionuevem==0){
    $totalprecionuevem="";
}
if($totalpreciodiezm==0){
    $totalpreciodiezm="";
}
if($totalpreciooncem==0){
    $totalpreciooncem="";
}
if($totalpreciodocem==0){
    $totalpreciodocem="";
}
if($totalpreciotrecem==0){
    $totalpreciotrecem="";
}
if($totalpreciocatorcem==0){
    $totalpreciocatorcem="";
}
if($totalprecioquincem==0){
    $totalprecioquincem="";
}
if($totalpreciodieciseism==0){
    $totalpreciodieciseism="";
}
if($totalpreciodiecisietem==0){
    $totalpreciodiecisietem="";
}
if($totalpreciodieciochom==0){
    $totalpreciodieciochom="";
}
if($totalpreciodiecinuevem==0){
    $totalpreciodiecinuevem="";
}
if($totalprecioveintem==0){
    $totalprecioveintem="";
}
if($totalprecioveintiunom==0){
    $totalprecioveintiunom="";
}
if($totalprecioveintidosm==0){
    $totalprecioveintidosm="";
}
if($totalprecioveintitresm==0){
    $totalprecioveintitresm="";
}
if($totalprecioveinticuatrom==0){
    $totalprecioveinticuatrom="";
}
if($totalprecioveinticincom==0){
    $totalprecioveinticincom="";
}
if($totalprecioveintiseism==0){
    $totalprecioveintiseism="";
}
if($totalprecioveintisietem==0){
    $totalprecioveintisietem="";
}
if($totalprecioveintiochom==0){
    $totalprecioveintiochom="";
}
if($totalprecioveintinuevem==0){
    $totalprecioveintinuevem="";
}
if($totalpreciotreintam==0){
    $totalpreciotreintam="";
}

if($unom==0){
    $unom="";
}
if($dosm==0){
    $dosm="";
}
if($tresm==0){
    $tresm="";
}
if($cuatrom==0){
    $cuatrom="";
}
if($cincom==0){
    $cincom="";
}
if($seism==0){
    $seism="";
}
if($sietem==0){
    $sietem="";
}
if($ochom==0){
    $ochom="";
}
if($nuevem==0){
    $nuevem="";
}
if($diezm==0){
    $diezm="";
}
if($oncem==0){
    $oncem="";
}
if($docem==0){
    $docem="";
}
if($trecem==0){
    $trecem="";
}
if($catorcem==0){
    $catorcem="";
}
if($quincem==0){
    $quincem="";
}
if($dieciseism==0){
    $dieciseism="";
}
if($diecisietem==0){
    $diecisietem="";
}
if($dieciochom==0){
    $dieciochom="";
}
if($diecinuevem==0){
    $diecinuevem="";
}
if($veintem==0){
    $veintem="";
}
if($veintiunom==0){
    $veintiunom="";
}
if($veintidosm==0){
    $veintidosm="";
}
if($veintitresm==0){
    $veintitresm="";
}
if($veinticuatrom==0){
    $veinticuatrom="";
}
if($veinticincom==0){
    $veinticincom="";
}
if($veintiseism==0){
    $veintiseism="";
}
if($veintisietem==0){
    $veintisietem="";
}
if($veintiochom==0){
    $veintiochom="";
}
if($veintinuevem==0){
    $veintinuevem="";
}
if($treintam==0){
    $treintam="";
}

if($preciounom=0){
    $preciounom="";
}
if($preciodosm=0){
    $preciodosm="";
}
if($preciotresm=0){
    $preciotresm="";
}
if($preciocuatrom=0){
    $preciocuatrom="";
}
if($preciocincom=0){
    $preciocincom="";
}
if($precioseism=0){
    $precioseism="";
}
if($preciosietem=0){
    $preciosietem="";
}
if($precioochom=0){
    $precioochom="";
}
if($precionuevem=0){
    $precionuevem="";
}
if($preciodiezm=0){
    $preciodiezm="";
}
if($preciooncem=0){
    $preciooncem="";
}
if($preciodocem=0){
    $preciodocem="";
}
if($preciotrecem=0){
    $preciotrecem="";
}
if($preciocatorcem=0){
    $preciocatorcem="";
}
if($precioquincem=0){
    $precioquincem="";
}
if($preciodieciseism=0){
    $preciodieciseism="";
}
if($preciodiecisietem=0){
    $preciodiecisietem="";
}
if($preciodieciochom=0){
    $preciodieciochom="";
}
if($preciodiecinuevem=0){
    $preciodiecinuevem="";
}
if($precioveintem=0){
    $precioveintem="";
}
if($precioveintiunom=0){
    $precioveintiunom="";
}
if($precioveintidosm=0){
    $precioveintidosm="";
}
if($precioveintitresm=0){
    $precioveintitresm="";
}
if($precioveinticuatrom=0){
    $precioveinticuatrom="";
}
if($precioveinticincom=0){
    $precioveinticincom="";
}
if($precioveintiseism=0){
    $precioveintiseism="";
}
if($precioveintisietem=0){
    $precioveintisietem="";
}
if($precioveintiochom=0){
    $precioveintiochom="";
}
if($precioveintinuevem=0){
    $precioveintinuevem="";
}
if($preciotreintam=0){
    $preciotreintam="";
}
//ADULTOS//
if($totalpreciounoa==0){
    $totalpreciounoa="";
}
if($totalpreciodosa==0){
    $totalpreciodosa="";
}
if($totalpreciotresa==0){
    $totalpreciotresa="";
}
if($totalpreciocuatroa==0){
    $totalpreciocuatroa="";
}
if($totalpreciocincoa==0){
    $totalpreciocincoa="";
}
if($totalprecioseisa==0){
    $totalprecioseisa="";
}
if($totalpreciosietea==0){
    $totalpreciosietea="";
}
if($totalprecioochoa==0){
    $totalprecioochoa="";
}
if($totalprecionuevea==0){
    $totalprecionuevea="";
}
if($totalpreciodieza==0){
    $totalpreciodieza="";
}
if($totalpreciooncea==0){
    $totalpreciooncea="";
}
if($totalpreciodocea==0){
    $totalpreciodocea="";
}
if($totalpreciotrecea==0){
    $totalpreciotrecea="";
}
if($totalpreciocatorcea==0){
    $totalpreciocatorcea="";
}
if($totalprecioquincea==0){
    $totalprecioquincea="";
}
if($totalpreciodieciseisa==0){
    $totalpreciodieciseisa="";
}
if($totalpreciodiecisietea==0){
    $totalpreciodiecisietea="";
}
if($totalpreciodieciochoa==0){
    $totalpreciodieciochoa="";
}
if($totalpreciodiecinuevea==0){
    $totalpreciodiecinuevea="";
}
if($totalprecioveintea==0){
    $totalprecioveintea="";
}
if($totalprecioveintiunoa==0){
    $totalprecioveintiunoa="";
}
if($totalprecioveintidosa==0){
    $totalprecioveintidosa="";
}
if($totalprecioveintitresa==0){
    $totalprecioveintitresa="";
}
if($totalprecioveinticuatroa==0){
    $totalprecioveinticuatroa="";
}
if($totalprecioveinticincoa==0){
    $totalprecioveinticincoa="";
}
if($totalprecioveintiseisa==0){
    $totalprecioveintiseisa="";
}
if($totalprecioveintisietea==0){
    $totalprecioveintisietea="";
}
if($totalprecioveintiochoa==0){
    $totalprecioveintiochoa="";
}
if($totalprecioveintinuevea==0){
    $totalprecioveintinuevea="";
}
if($totalpreciotreintaa==0){
    $totalpreciotreintaa="";
}

if($unoa==0){
    $unoa="";
}
if($dosa==0){
    $dosa="";
}
if($tresa==0){
    $tresa="";
}
if($cuatroa==0){
    $cuatroa="";
}
if($cincoa==0){
    $cincoa="";
}
if($seisa==0){
    $seisa="";
}
if($sietea==0){
    $sietea="";
}
if($ochoa==0){
    $ochoa="";
}
if($nuevea==0){
    $nuevea="";
}
if($dieza==0){
    $dieza="";
}
if($oncea==0){
    $oncea="";
}
if($docea==0){
    $docea="";
}
if($trecea==0){
    $trecea="";
}
if($catorcea==0){
    $catorcea="";
}
if($quincea==0){
    $quincea="";
}
if($dieciseisa==0){
    $dieciseisa="";
}
if($diecisietea==0){
    $diecisietea="";
}
if($dieciochoa==0){
    $dieciochoa="";
}
if($diecinuevea==0){
    $diecinuevea="";
}
if($veintea==0){
    $veintea="";
}
if($veintiunoa==0){
    $veintiunoa="";
}
if($veintidosa==0){
    $veintidosa="";
}
if($veintitresa==0){
    $veintitresa="";
}
if($veinticuatroa==0){
    $veinticuatroa="";
}
if($veinticincoa==0){
    $veinticincoa="";
}
if($veintiseisa==0){
    $veintiseisa="";
}
if($veintisietea==0){
    $veintisietea="";
}
if($veintiochoa==0){
    $veintiochoa="";
}
if($veintinuevea==0){
    $veintinuevea="";
}
if($treintaa==0){
    $treintaa="";
}

if($preciounoa=0){
    $preciounoa="";
}
if($preciodosa=0){
    $preciodosa="";
}
if($preciotresa=0){
    $preciotresa="";
}
if($preciocuatroa=0){
    $preciocuatroa="";
}
if($preciocincoa=0){
    $preciocincoa="";
}
if($precioseisa=0){
    $precioseisa="";
}
if($preciosietea=0){
    $preciosietea="";
}
if($precioochoa=0){
    $precioochoa="";
}
if($precionuevea=0){
    $precionuevea="";
}
if($preciodieza=0){
    $preciodieza="";
}
if($preciooncea=0){
    $preciooncea="";
}
if($preciodocea=0){
    $preciodocea="";
}
if($preciotrecea=0){
    $preciotrecea="";
}
if($preciocatorcea=0){
    $preciocatorcea="";
}
if($precioquincea=0){
    $precioquincea="";
}
if($preciodieciseisa=0){
    $preciodieciseisa="";
}
if($preciodiecisietea=0){
    $preciodiecisietea="";
}
if($preciodieciochoa=0){
    $preciodieciochoa="";
}
if($preciodiecinuevea=0){
    $preciodiecinuevea="";
}
if($precioveintea=0){
    $precioveintea="";
}
if($precioveintiunoa=0){
    $precioveintiunoa="";
}
if($precioveintidosa=0){
    $precioveintidosa="";
}
if($precioveintitresa=0){
    $precioveintitresa="";
}
if($precioveinticuatroa=0){
    $precioveinticuatroa="";
}
if($precioveinticincoa=0){
    $precioveinticincoa="";
}
if($precioveintiseisa=0){
    $precioveintiseisa="";
}
if($precioveintisietea=0){
    $precioveintisietea="";
}
if($precioveintiochoa=0){
    $precioveintiochoa="";
}
if($precioveintinuevea=0){
    $precioveintinuevea="";
}
if($preciotreintaa=0){
    $preciotreintaa="";
}
//PRINCIPAL//
if($totalpreciouno==0){
    $totalpreciouno="";
}
if($totalpreciodos==0){
    $totalpreciodos="";
}
if($totalpreciotres==0){
    $totalpreciotres="";
}
if($totalpreciocuatro==0){
    $totalpreciocuatro="";
}
if($totalpreciocinco==0){
    $totalpreciocinco="";
}
if($totalprecioseis==0){
    $totalprecioseis="";
}
if($totalpreciosiete==0){
    $totalpreciosiete="";
}
if($totalprecioocho==0){
    $totalprecioocho="";
}
if($totalprecionueve==0){
    $totalprecionueve="";
}
if($totalpreciodiez==0){
    $totalpreciodiez="";
}
if($totalprecioonce==0){
    $totalprecioonce="";
}
if($totalpreciodoce==0){
    $totalpreciodoce="";
}
if($totalpreciotrece==0){
    $totalpreciotrece="";
}
if($totalpreciocatorce==0){
    $totalpreciocatorce="";
}
if($totalprecioquince==0){
    $totalprecioquince="";
}
if($totalpreciodieciseis==0){
    $totalpreciodieciseis="";
}
if($totalpreciodiecisiete==0){
    $totalpreciodiecisiete="";
}
if($totalpreciodieciocho==0){
    $totalpreciodieciocho="";
}
if($totalpreciodiecinueve==0){
    $totalpreciodiecinueve="";
}
if($totalprecioveinte==0){
    $totalprecioveinte="";
}
if($totalprecioveintiuno==0){
    $totalprecioveintiuno="";
}
if($totalprecioveintidos==0){
    $totalprecioveintidos="";
}
if($totalprecioveintitres==0){
    $totalprecioveintitres="";
}
if($totalprecioveinticuatro==0){
    $totalprecioveinticuatro="";
}
if($totalprecioveinticinco==0){
    $totalprecioveinticinco="";
}
if($totalprecioveintiseis==0){
    $totalprecioveintiseis="";
}
if($totalprecioveintisiete==0){
    $totalprecioveintisiete="";
}
if($totalprecioveintiocho==0){
    $totalprecioveintiocho="";
}
if($totalprecioveintinueve==0){
    $totalprecioveintinueve="";
}
if($totalpreciotreinta==0){
    $totalpreciotreinta="";
}
//PRINCIPAL//
if($uno==0){
    $uno="";
}
if($dos==0){
    $dos="";
}
if($tres==0){
    $tres="";
}
if($cuatro==0){
    $cuatro="";
}
if($cinco==0){
    $cinco="";
}
if($seis==0){
    $seis="";
}
if($siete==0){
    $siete="";
}
if($ocho==0){
    $ocho="";
}
if($nueve==0){
    $nueve="";
}
if($diez==0){
    $diez="";
}
if($once==0){
    $once="";
}
if($doce==0){
    $doce="";
}
if($trece==0){
    $trece="";
}
if($catorce==0){
    $catorce="";
}
if($quince==0){
    $quince="";
}
if($dieciseis==0){
    $dieciseis="";
}
if($diecisiete==0){
    $diecisiete="";
}
if($dieciocho==0){
    $dieciocho="";
}
if($diecinueve==0){
    $diecinueve="";
}
if($veinte==0){
    $veinte="";
}
if($veintiuno==0){
    $veintiuno="";
}
if($veintidos==0){
    $veintidos="";
}
if($veintitres==0){
    $veintitres="";
}
if($veinticuatro==0){
    $veinticuatro="";
}
if($veinticinco==0){
    $veinticinco="";
}
if($veintiseis==0){
    $veintiseis="";
}
if($veintisiete==0){
    $veintisiete="";
}
if($veintiocho==0){
    $veintiocho="";
}
if($veintinueve==0){
    $veintinueve="";
}
if($treinta==0){
    $treinta="";
}

if($preciouno=0){
    $preciouno="";
}
if($preciodos=0){
    $preciodos="";
}
if($preciotres=0){
    $preciotres="";
}
if($preciocuatro=0){
    $preciocuatro="";
}
if($preciocinco=0){
    $preciocinco="";
}
if($precioseis=0){
    $precioseis="";
}
if($preciosiete=0){
    $preciosiete="";
}
if($precioocho=0){
    $precioocho="";
}
if($precionueve=0){
    $precionueve="";
}
if($preciodiez=0){
    $preciodiez="";
}
if($precioonce=0){
    $precioonce="";
}
if($preciodoce=0){
    $preciodoce="";
}
if($preciotrece=0){
    $preciotrece="";
}
if($preciocatorce=0){
    $preciocatorce="";
}
if($precioquince=0){
    $precioquince="";
}
if($preciodieciseis=0){
    $preciodieciseis="";
}
if($preciodiecisiete=0){
    $preciodiecisiete="";
}
if($preciodieciocho=0){
    $preciodieciocho="";
}
if($preciodiecinueve=0){
    $preciodiecinueve="";
}
if($precioveinte=0){
    $precioveinte="";
}
if($precioveintiuno=0){
    $precioveintiuno="";
}
if($precioveintidos=0){
    $precioveintidos="";
}
if($precioveintitres=0){
    $precioveintitres="";
}
if($precioveinticuatro=0){
    $precioveinticuatro="";
}
if($precioveinticinco=0){
    $precioveinticinco="";
}
if($precioveintiseis=0){
    $precioveintiseis="";
}
if($precioveintisiete=0){
    $precioveintisiete="";
}
if($precioveintiocho=0){
    $precioveintiocho="";
}
if($precioveintinueve=0){
    $precioveintinueve="";
}
if($preciotreinta=0){
    $preciotreinta="";
}
//BUCALES//

if($totalpreciounoo==0){
    $totalpreciounoo="";
}
if($totalpreciodoso==0){
    $totalpreciodoso="";
}
if($totalpreciotreso==0){
    $totalpreciotreso="";
}
if($totalpreciocuatroo==0){
    $totalpreciocuatroo="";
}
if($totalpreciocincoo==0){
    $totalpreciocincoo="";
}
if($totalprecioseiso==0){
    $totalprecioseiso="";
}
if($totalpreciosieteo==0){
    $totalpreciosieteo="";
}
if($totalprecioochoo==0){
    $totalprecioochoo="";
}
if($totalprecionueveo==0){
    $totalprecionueveo="";
}
if($totalpreciodiezo==0){
    $totalpreciodiezo="";
}
if($totalprecioonceo==0){
    $totalprecioonceo="";
}
if($totalpreciodoceo==0){
    $totalpreciodoceo="";
}
if($totalpreciotreceo==0){
    $totalpreciotreceo="";
}
if($totalpreciocatorceo==0){
    $totalpreciocatorceo="";
}
if($totalprecioquinceo==0){
    $totalprecioquinceo="";
}
if($totalpreciodieciseiso==0){
    $totalpreciodieciseiso="";
}
if($totalpreciodiecisieteo==0){
    $totalpreciodiecisieteo="";
}
if($totalpreciodieciochoo==0){
    $totalpreciodieciochoo="";
}
if($totalpreciodiecinueveo==0){
    $totalpreciodiecinueveo="";
}
if($totalprecioveinteo==0){
    $totalprecioveinteo="";
}
if($totalprecioveintiunoo==0){
    $totalprecioveintiunoo="";
}
if($totalprecioveintidoso==0){
    $totalprecioveintidoso="";
}
if($totalprecioveintitreso==0){
    $totalprecioveintitreso="";
}
if($totalprecioveinticuatroo==0){
    $totalprecioveinticuatroo="";
}
if($totalprecioveinticincoo==0){
    $totalprecioveinticincoo="";
}
if($totalprecioveintiseiso==0){
    $totalprecioveintiseiso="";
}
if($totalprecioveintisieteo==0){
    $totalprecioveintisieteo="";
}
if($totalprecioveintiochoo==0){
    $totalprecioveintiochoo="";
}
if($totalprecioveintinueveo==0){
    $totalprecioveintinueveo="";
}
if($totalpreciotreintao==0){
    $totalpreciotreintao="";
}

if($unoo==0){
    $unoo="";
}
if($doso==0){
    $doso="";
}
if($treso==0){
    $treso="";
}
if($cuatroo==0){
    $cuatroo="";
}
if($cincoo==0){
    $cincoo="";
}
if($seiso==0){
    $seiso="";
}
if($sieteo==0){
    $sieteo="";
}
if($ochoo==0){
    $ochoo="";
}
if($nueveo==0){
    $nueveo="";
}
if($diezo==0){
    $diezo="";
}
if($onceo==0){
    $onceo="";
}
if($doceo==0){
    $doceo="";
}
if($treceo==0){
    $treceo="";
}
if($catorceo==0){
    $catorceo="";
}
if($quinceo==0){
    $quinceo="";
}
if($dieciseiso==0){
    $dieciseiso="";
}
if($diecisieteo==0){
    $diecisieteo="";
}
if($dieciochoo==0){
    $dieciochoo="";
}
if($diecinueveo==0){
    $diecinueveo="";
}
if($veinteo==0){
    $veinteo="";
}
if($veintiunoo==0){
    $veintiunoo="";
}
if($veintidoso==0){
    $veintidoso="";
}
if($veintitreso==0){
    $veintitreso="";
}
if($veinticuatroo==0){
    $veinticuatroo="";
}
if($veinticincoo==0){
    $veinticincoo="";
}
if($veintiseiso==0){
    $veintiseiso="";
}
if($veintisieteo==0){
    $veintisieteo="";
}
if($veintiochoo==0){
    $veintiochoo="";
}
if($veintinueveo==0){
    $veintinueveo="";
}
if($treintao==0){
    $treintao="";
}

if($preciounoo=0){
    $preciounoo="";
}
if($preciodoso=0){
    $preciodoso="";
}
if($preciotreso=0){
    $preciotreso="";
}
if($preciocuatroo=0){
    $preciocuatroo="";
}
if($preciocincoo=0){
    $preciocincoo="";
}
if($precioseiso=0){
    $precioseiso="";
}
if($preciosieteo=0){
    $preciosieteo="";
}
if($precioochoo=0){
    $precioochoo="";
}
if($precionueveo=0){
    $precionueveo="";
}
if($preciodiezo=0){
    $preciodiezo="";
}
if($precioonceo=0){
    $precioonceo="";
}
if($preciodoceo=0){
    $preciodoceo="";
}
if($preciotreceo=0){
    $preciotreceo="";
}
if($preciocatorceo=0){
    $preciocatorceo="";
}
if($precioquinceo=0){
    $precioquinceo="";
}
if($preciodieciseiso=0){
    $preciodieciseiso="";
}
if($preciodiecisieteo=0){
    $preciodiecisieteo="";
}
if($preciodieciochoo=0){
    $preciodieciochoo="";
}
if($preciodiecinueveo=0){
    $preciodiecinueveo="";
}
if($precioveinteo=0){
    $precioveinteo="";
}
if($precioveintiunoo=0){
    $precioveintiunoo="";
}
if($precioveintidoso=0){
    $precioveintidoso="";
}
if($precioveintitreso=0){
    $precioveintitreso="";
}
if($precioveinticuatroo=0){
    $precioveinticuatroo="";
}
if($precioveinticincoo=0){
    $precioveinticincoo="";
}
if($precioveintiseiso=0){
    $precioveintiseiso="";
}
if($precioveintisieteo=0){
    $precioveintisieteo="";
}
if($precioveintiochoo=0){
    $precioveintiochoo="";
}
if($precioveintinueveo=0){
    $precioveintinueveo="";
}
if($preciotreintao=0){
    $preciotreintao="";
}

//CAPILARES//
if($totalpreciounoca==0){
    $totalpreciounoca="";
}
if($totalpreciodosca==0){
    $totalpreciodosca="";
}
if($totalpreciotresca==0){
    $totalpreciotresca="";
}
if($totalpreciocuatroca==0){
    $totalpreciocuatroca="";
}
if($totalpreciocincoca==0){
    $totalpreciocincoca="";
}
if($totalprecioseisca==0){
    $totalprecioseisca="";
}
if($totalpreciosieteca==0){
    $totalpreciosieteca="";
}
if($totalprecioochoca==0){
    $totalprecioochoca="";
}
if($totalprecionueveca==0){
    $totalprecionueveca="";
}
if($totalpreciodiezca==0){
    $totalpreciodiezca="";
}
if($totalprecioonceca==0){
    $totalprecioonceca="";
}
if($totalpreciodoceca==0){
    $totalpreciodoceca="";
}
if($totalpreciotrececa==0){
    $totalpreciotrececa="";
}
if($totalpreciocatorceca==0){
    $totalpreciocatorceca="";
}
if($totalprecioquinceca==0){
    $totalprecioquinceca="";
}
if($totalpreciodieciseisca==0){
    $totalpreciodieciseisca="";
}
if($totalpreciodiecisieteca==0){
    $totalpreciodiecisieteca="";
}
if($totalpreciodieciochoca==0){
    $totalpreciodieciochoca="";
}
if($totalpreciodiecinueveca==0){
    $totalpreciodiecinueveca="";
}
if($totalprecioveinteca==0){
    $totalprecioveinteca="";
}
if($totalprecioveintiunoca==0){
    $totalprecioveintiunoca="";
}
if($totalprecioveintidosca==0){
    $totalprecioveintidosca="";
}
if($totalprecioveintitresca==0){
    $totalprecioveintitresca="";
}
if($totalprecioveinticuatroca==0){
    $totalprecioveinticuatroca="";
}
if($totalprecioveinticincoca==0){
    $totalprecioveinticincoca="";
}
if($totalprecioveintiseisca==0){
    $totalprecioveintiseisca="";
}
if($totalprecioveintisieteca==0){
    $totalprecioveintisieteca="";
}
if($totalprecioveintiochoca==0){
    $totalprecioveintiochoca="";
}
if($totalprecioveintinueveca==0){
    $totalprecioveintinueveca="";
}
if($totalpreciotreintaca==0){
    $totalpreciotreintaca="";
}
//IDEM TOTALPRECIO==0//
if($unoca==0){
    $unoca="";
}
if($dosca==0){
    $dosca="";
}
if($tresca==0){
    $tresca="";
}
if($cuatroca==0){
    $cuatroca="";
}
if($cincoca==0){
    $cincoca="";
}
if($seisca==0){
    $seisca="";
}
if($sieteca==0){
    $sieteca="";
}
if($ochoca==0){
    $ochoca="";
}
if($nueveca==0){
    $nueveca="";
}
if($diezca==0){
    $diezca="";
}
if($onceca==0){
    $onceca="";
}
if($doceca==0){
    $doceca="";
}
if($trececa==0){
    $trececa="";
}
if($catorceca==0){
    $catorceca="";
}
if($quinceca==0){
    $quinceca="";
}
if($dieciseisca==0){
    $dieciseisca="";
}
if($diecisieteca==0){
    $diecisieteca="";
}
if($dieciochoca==0){
    $dieciochoca="";
}
if($diecinueveca==0){
    $diecinueveca="";
}
if($veinteca==0){
    $veinteca="";
}
if($veintiunoca==0){
    $veintiunoca="";
}
if($veintidosca==0){
    $veintidosca="";
}
if($veintitresca==0){
    $veintitresca="";
}
if($veinticuatroca==0){
    $veinticuatroca="";
}
if($veinticincoca==0){
    $veinticincoca="";
}
if($veintiseisca==0){
    $veintiseisca="";
}
if($veintisieteca==0){
    $veintisieteca="";
}
if($veintiochoca==0){
    $veintiochoca="";
}
if($veintinueveca==0){
    $veintinueveca="";
}
if($treintaca==0){
    $treintaca="";
}
//IDEM TOTALPRECIO==0//
if($preciounoca=0){
    $preciounoca="";
}
if($preciodosca=0){
    $preciodosca="";
}
if($preciotresca=0){
    $preciotresca="";
}
if($preciocuatroca=0){
    $preciocuatroca="";
}
if($preciocincoca=0){
    $preciocincoca="";
}
if($precioseisca=0){
    $precioseisca="";
}
if($preciosieteca=0){
    $preciosieteca="";
}
if($precioochoca=0){
    $precioochoca="";
}
if($precionueveca=0){
    $precionueveca="";
}
if($preciodiezca=0){
    $preciodiezca="";
}
if($precioonceca=0){
    $precioonceca="";
}
if($preciodoceca=0){
    $preciodoceca="";
}
if($preciotrececa=0){
    $preciotrececa="";
}
if($preciocatorceca=0){
    $preciocatorceca="";
}
if($precioquinceca=0){
    $precioquinceca="";
}
if($preciodieciseisca=0){
    $preciodieciseisca="";
}
if($preciodiecisieteca=0){
    $preciodiecisieteca="";
}
if($preciodieciochoca=0){
    $preciodieciochoca="";
}
if($preciodiecinueveca=0){
    $preciodiecinueveca="";
}
if($precioveinteca=0){
    $precioveinteca="";
}
if($precioveintiunoca=0){
    $precioveintiunoca="";
}
if($precioveintidosca=0){
    $precioveintidosca="";
}
if($precioveintitresca=0){
    $precioveintitresca="";
}
if($precioveinticuatroca=0){
    $precioveinticuatroca="";
}
if($precioveinticincoca=0){
    $precioveinticincoca="";
}
if($precioveintiseisca=0){
    $precioveintiseisca="";
}
if($precioveintisieteca=0){
    $precioveintisieteca="";
}
if($precioveintiochoca=0){
    $precioveintiochoca="";
}
if($precioveintinueveca=0){
    $precioveintinueveca="";
}
if($preciotreintaca=0){
    $preciotreintaca="";
}
//FIN CAPILARES//
//CORPORALES//
if($totalpreciounoco==0){
    $totalpreciounoco="";
}
if($totalpreciodosco==0){
    $totalpreciodosco="";
}
if($totalpreciotresco==0){
    $totalpreciotresco="";
}
if($totalpreciocuatroco==0){
    $totalpreciocuatroco="";
}
if($totalpreciocincoco==0){
    $totalpreciocincoco="";
}
if($totalprecioseisco==0){
    $totalprecioseisco="";
}
if($totalpreciosieteco==0){
    $totalpreciosieteco="";
}
if($totalprecioochoco==0){
    $totalprecioochoco="";
}
if($totalprecionueveco==0){
    $totalprecionueveco="";
}
if($totalpreciodiezco==0){
    $totalpreciodiezco="";
}
if($totalprecioonceco==0){
    $totalprecioonceco="";
}
if($totalpreciodoceco==0){
    $totalpreciodoceco="";
}
if($totalpreciotrececo==0){
    $totalpreciotrececo="";
}
if($totalpreciocatorceco==0){
    $totalpreciocatorceco="";
}
if($totalprecioquinceco==0){
    $totalprecioquinceco="";
}
if($totalpreciodieciseisco==0){
    $totalpreciodieciseisco="";
}
if($totalpreciodiecisieteco==0){
    $totalpreciodiecisieteco="";
}
if($totalpreciodieciochoco==0){
    $totalpreciodieciochoco="";
}
if($totalpreciodiecinueveco==0){
    $totalpreciodiecinueveco="";
}
if($totalprecioveinteco==0){
    $totalprecioveinteco="";
}
if($totalprecioveintiunoco==0){
    $totalprecioveintiunoco="";
}
if($totalprecioveintidosco==0){
    $totalprecioveintidosco="";
}
if($totalprecioveintitresco==0){
    $totalprecioveintitresco="";
}
if($totalprecioveinticuatroco==0){
    $totalprecioveinticuatroco="";
}
if($totalprecioveinticincoco==0){
    $totalprecioveinticincoco="";
}
if($totalprecioveintiseisco==0){
    $totalprecioveintiseisco="";
}
if($totalprecioveintisieteco==0){
    $totalprecioveintisieteco="";
}
if($totalprecioveintiochoco==0){
    $totalprecioveintiochoco="";
}
if($totalprecioveintinueveco==0){
    $totalprecioveintinueveco="";
}
if($totalpreciotreintaco==0){
    $totalpreciotreintaco="";
}
//IDEM TOTALPRECIO==0//
if($unoco==0){
    $unoco="";
}
if($dosco==0){
    $dosco="";
}
if($tresco==0){
    $tresco="";
}
if($cuatroco==0){
    $cuatroco="";
}
if($cincoco==0){
    $cincoco="";
}
if($seisco==0){
    $seisco="";
}
if($sieteco==0){
    $sieteco="";
}
if($ochoco==0){
    $ochoco="";
}
if($nueveco==0){
    $nueveco="";
}
if($diezco==0){
    $diezco="";
}
if($onceco==0){
    $onceco="";
}
if($doceco==0){
    $doceco="";
}
if($trececo==0){
    $trececo="";
}
if($catorceco==0){
    $catorceco="";
}
if($quinceco==0){
    $quinceco="";
}
if($dieciseisco==0){
    $dieciseisco="";
}
if($diecisieteco==0){
    $diecisieteco="";
}
if($dieciochoco==0){
    $dieciochoco="";
}
if($diecinueveco==0){
    $diecinueveco="";
}
if($veinteco==0){
    $veinteco="";
}
if($veintiunoco==0){
    $veintiunoco="";
}
if($veintidosco==0){
    $veintidosco="";
}
if($veintitresco==0){
    $veintitresco="";
}
if($veinticuatroco==0){
    $veinticuatroco="";
}
if($veinticincoco==0){
    $veinticincoco="";
}
if($veintiseisco==0){
    $veintiseisco="";
}
if($veintisieteco==0){
    $veintisieteco="";
}
if($veintiochoco==0){
    $veintiochoco="";
}
if($veintinueveco==0){
    $veintinueveco="";
}
if($treintaco==0){
    $treintaco="";
}
//IDEM TOTALPRECIO==0//
if($preciounoco=0){
    $preciounoco="";
}
if($preciodosco=0){
    $preciodosco="";
}
if($preciotresco=0){
    $preciotresco="";
}
if($preciocuatroco=0){
    $preciocuatroco="";
}
if($preciocincoco=0){
    $preciocincoco="";
}
if($precioseisco=0){
    $precioseisco="";
}
if($preciosieteco=0){
    $preciosieteco="";
}
if($precioochoco=0){
    $precioochoco="";
}
if($precionueveco=0){
    $precionueveco="";
}
if($preciodiezco=0){
    $preciodiezco="";
}
if($precioonceco=0){
    $precioonceco="";
}
if($preciodoceco=0){
    $preciodoceco="";
}
if($preciotrececo=0){
    $preciotrececo="";
}
if($preciocatorceco=0){
    $preciocatorceco="";
}
if($precioquinceco=0){
    $precioquinceco="";
}
if($preciodieciseisco=0){
    $preciodieciseisco="";
}
if($preciodiecisieteco=0){
    $preciodiecisieteco="";
}
if($preciodieciochoco=0){
    $preciodieciochoco="";
}
if($preciodiecinueveco=0){
    $preciodiecinueveco="";
}
if($precioveinteco=0){
    $precioveinteco="";
}
if($precioveintiunoco=0){
    $precioveintiunoco="";
}
if($precioveintidosco=0){
    $precioveintidosco="";
}
if($precioveintitresco=0){
    $precioveintitresco="";
}
if($precioveinticuatroco=0){
    $precioveinticuatroco="";
}
if($precioveinticincoco=0){
    $precioveinticincoco="";
}
if($precioveintiseisco=0){
    $precioveintiseisco="";
}
if($precioveintisieteco=0){
    $precioveintisieteco="";
}
if($precioveintiochoco=0){
    $precioveintiochoco="";
}
if($precioveintinueveco=0){
    $precioveintinueveco="";
}
if($preciotreintaco=0){
    $preciotreintaco="";
}
//FIN CORPORALES//

$nombre=session('nombre');

$totalapagar=session('totalapagar');

$productosmujeres= App\Mujer::all();

$productosprincipales= App\Producto::all();

$productosadultos= App\Adulto::all();

$productosbucales= App\Bucal::all();

$productoscapilares= App\Capilar::all();

$productoscorporales= App\Corporal::all();

$cantidadm="";
$cantidadmm="";
$productom="";
$preciom="";
$sumatotal="";

$cantidada="";
$cantidadaa="";
$productoa="";
$precioa="";

$cantidadp="";
$cantidadpp="";
$productop="";
$preciop="";

$cantidado="";
$cantidadoo="";
$productoo="";
$precioo="";

$cantidadca="";
$cantidadcaca="";
$productoca="";
$precioca="";

$cantidadco="";
$cantidadcoco="";
$productoco="";
$precioco="";

        return view('final',compact('sumatotal','preciom','cantidadm','cantidadmm','productom','precioca','cantidadca','cantidadcaca','productoca','cantidado','cantidadoo','productoo','precioo','preciop','cantidadp','cantidadpp','productop','precioa','cantidada','cantidadaa','productoa','precioco','cantidadco','cantidadcoco','productoco','productosmujeres','productosprincipales','productosadultos','productosbucales','productoscapilares','productoscorporales','constante','nombre','totalapagar','productouno','uno','preciouno','totalpreciouno','pirceuno',
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
'productocatorce','catorce','preciocatorce','totalpreciocatorce','pircecatorce','productoquince','quince','precioquince','totalprecioquince','pircequince','productodieciseis','dieciseis','preciodieciseis','totalpreciodieciseis','pircedieciseis','productodiecisiete','diecisiete','preciodiecisiete','totalpreciodiecisiete','pircediecisiete',
'productodieciocho','dieciocho','preciodieciocho','totalpreciodieciocho','pircedieciocho','productodiecinueve','diecinueve','preciodiecinueve','totalpreciodiecinueve','pircediecinueve','productoveinte','veinte','precioveinte','totalprecioveinte','pirceveinte','productoveintiuno','veintiuno','precioveintiuno','totalprecioveintiuno','pirceveintiuno',
'productoveintidos','veintidos','precioveintidos','totalprecioveintidos','pirceveintidos','productoveintitres','veintitres','precioveintitres','totalprecioveintitres','pirceveintitres','productoveinticuatro','veinticuatro','precioveinticuatro','totalprecioveinticuatro','pirceveinticuatro','productoveinticinco','veinticinco','precioveinticinco','totalprecioveinticinco','pirceveinticinco','productoveintiseis','veintiseis','precioveintiseis','totalprecioveintiseis','pirceveintiseis',
'productoveintisiete','veintisiete','precioveintisiete',
'totalprecioveintisiete','pirceveintisiete','productoveintiocho','veintiocho','precioveintiocho','totalprecioveintiocho','pirceveintiocho',
'productoveintinueve','veintinueve','precioveintinueve',
'totalprecioveintinueve','pirceveintinueve','productotreinta','treinta','preciotreinta','totalpreciotreinta','pircetreinta','productounom','unom','preciounom','totalpreciounom','pirceunom','productodosm','dosm','preciodosm','totalpreciodosm','pircedosm','productotresm','tresm','preciotresm','totalpreciotresm','pircetresm','productocuatrom','cuatrom','preciocuatrom','totalpreciocuatrom','pircecuatrom','productocincom','cincom','preciocincom','totalpreciocincom','pircecincom','productoseism','seism','precioseism','totalprecioseism','pirceseism','productosietem','sietem','preciosietem','totalpreciosietem','pircesietem','productoochom','ochom','precioochom','totalprecioochom','pirceochom','productonuevem','nuevem','precionuevem','totalprecionuevem','pircenuevem','productodiezm','diezm','preciodiezm','totalpreciodiezm','pircediezm','productooncem','oncem','preciooncem','totalpreciooncem','pirceoncem','productodocem','docem','preciodocem','totalpreciodocem','pircedocem','productotrecem','trecem','preciotrecem','totalpreciotrecem','pircetrecem','productocatorcem','catorcem','preciocatorcem','totalpreciocatorcem','pircecatorcem','productoquincem','quincem','precioquincem','totalprecioquincem','pircequincem',
'productodieciseism','dieciseism','preciodieciseism','totalpreciodieciseism','pircedieciseism','productodiecisietem','diecisietem','preciodiecisietem','totalpreciodiecisietem','pircediecisietem','productodieciochom','dieciochom','preciodieciochom','totalpreciodieciochom','pircedieciochom',
'productodiecinuevem','diecinuevem','preciodiecinuevem',
'totalpreciodiecinuevem','pircediecinuevem',
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
'productotreintam','treintam','preciotreintam','totalpreciotreintam','pircetreintam',
'productounoa','unoa','preciounoa','totalpreciounoa','pirceunoa',
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
'productotreintaa','treintaa','preciotreintaa','totalpreciotreintaa','pircetreintaa','productounoo','unoo','preciounoo','totalpreciounoo','pirceunoo',
'productodoso','doso','preciodoso','totalpreciodoso','pircedoso',
'productotreso','treso','preciotreso','totalpreciotreso','pircetreso',
'productocuatroo','cuatroo','preciocuatroo','totalpreciocuatroo','pircecuatroo',
'productocincoo','cincoo','preciocincoo','totalpreciocincoo','pircecincoo',
'productoseiso','seiso','precioseiso','totalprecioseiso','pirceseiso',
'productosieteo','sieteo','preciosieteo','totalpreciosieteo','pircesieteo',
'productoochoo','ochoo','precioochoo','totalprecioochoo','pirceochoo',
'productonueveo','nueveo','precionueveo','totalprecionueveo','pircenueveo',
'productodiezo','diezo','preciodiezo','totalpreciodiezo','pircediezo',
'productoonceo','onceo','precioonceo','totalprecioonceo','pirceonceo',
'productodoceo','doceo','preciodoceo','totalpreciodoceo','pircedoceo',
'productotreceo','treceo','preciotreceo','totalpreciotreceo','pircetreceo',
'productocatorceo','catorceo','preciocatorceo','totalpreciocatorceo','pircecatorceo',
'productoquinceo','quinceo','precioquinceo','totalprecioquinceo','pircequinceo',
'productodieciseiso','dieciseiso','preciodieciseiso','totalpreciodieciseiso','pircedieciseiso',
'productodiecisieteo','diecisieteo','preciodiecisieteo','totalpreciodiecisieteo','pircediecisieteo',
'productodieciochoo','dieciochoo','preciodieciochoo','totalpreciodieciochoo','pircedieciochoo',
'productodiecinueveo','diecinueveo','preciodiecinueveo','totalpreciodiecinueveo','pircediecinueveo',
'productoveinteo','veinteo','precioveinteo','totalprecioveinteo','pirceveinteo',
'productoveintiunoo','veintiunoo','precioveintiunoo','totalprecioveintiunoo','pirceveintiunoo',
'productoveintidoso','veintidoso','precioveintidoso','totalprecioveintidoso','pirceveintidoso',
'productoveintitreso','veintitreso','precioveintitreso','totalprecioveintitreso','pirceveintitreso',
'productoveinticuatroo','veinticuatroo','precioveinticuatroo','totalprecioveinticuatroo','pirceveinticuatroo',
'productoveinticincoo','veinticincoo','precioveinticincoo','totalprecioveinticincoo','pirceveinticincoo',
'productoveintiseiso','veintiseiso','precioveintiseiso','totalprecioveintiseiso','pirceveintiseiso',
'productoveintisieteo','veintisieteo','precioveintisieteo','totalprecioveintisieteo','pirceveintisieteo',
'productoveintiochoo','veintiochoo','precioveintiochoo','totalprecioveintiochoo','pirceveintiochoo',
'productoveintinueveo','veintinueveo','precioveintinueveo','totalprecioveintinueveo','pirceveintinueveo',
'productotreintao','treintao','preciotreintao','totalpreciotreintao','pircetreintao','totalapagar','productounoca','unoca','preciounoca','totalpreciounoca','pirceunoca','productodosca','dosca','preciodosca','totalpreciodosca','pircedosca','productotresca','tresca','preciotresca','totalpreciotresca','pircetresca','productocuatroca','cuatroca','preciocuatroca','totalpreciocuatroca','pircecuatroca','productocincoca','cincoca','preciocincoca','totalpreciocincoca','pircecincoca','productoseisca','seisca','precioseisca','totalprecioseisca','pirceseisca','productosieteca','sieteca','preciosieteca','totalpreciosieteca','pircesieteca','productoochoca','ochoca','precioochoca','totalprecioochoca','pirceochoca','productonueveca','nueveca','precionueveca','totalprecionueveca','pircenueveca','productodiezca','diezca','preciodiezca','totalpreciodiezca','pircediezca','productoonceca','onceca','precioonceca','totalprecioonceca','pirceonceca','productodoceca','doceca','preciodoceca','totalpreciodoceca','pircedoceca','productotrececa','trececa','preciotrececa','totalpreciotrececa','pircetrececa','productocatorceca','catorceca','preciocatorceca','totalpreciocatorceca','pircecatorceca','productoquinceca','quinceca','precioquinceca','totalprecioquinceca','pircequinceca',
'productodieciseisca','dieciseisca','preciodieciseisca','totalpreciodieciseisca','pircedieciseisca','productodiecisieteca','diecisieteca','preciodiecisieteca','totalpreciodiecisieteca','pircediecisieteca','productodieciochoca','dieciochoca','preciodieciochoca','totalpreciodieciochoca','pircedieciochoca',
'productodiecinueveca','diecinueveca','preciodiecinueveca',
'totalpreciodiecinueveca','pircediecinueveca',
'productoveinteca','veinteca','precioveinteca','totalprecioveinteca','pirceveinteca','productoveintiunoca','veintiunoca','precioveintiunoca','totalprecioveintiunoca','pirceveintiunoca',
'productoveintidosca','veintidosca','precioveintidosca','totalprecioveintidosca','pirceveintidosca',
'productoveintitresca','veintitresca','precioveintitresca','totalprecioveintitresca','pirceveintitresca',
'productoveinticuatroca','veinticuatroca','precioveinticuatroca','totalprecioveinticuatroca','pirceveinticuatroca',
'productoveinticincoca','veinticincoca','precioveinticincoca','totalprecioveinticincoca','pirceveinticincoca',
'productoveintiseisca','veintiseisca','precioveintiseisca','totalprecioveintiseisca','pirceveintiseisca',
'productoveintisieteca','veintisieteca','precioveintisieteca','totalprecioveintisieteca','pirceveintisieteca',
'productoveintiochoca','veintiochoca','precioveintiochoca','totalprecioveintiochoca','pirceveintiochoca',
'productoveintinueveca','veintinueveca','precioveintinueveca','totalprecioveintinueveca','pirceveintinueveca',
'productotreintaca','treintaca','preciotreintaca','totalpreciotreintaca','pircetreintaca','productounoco','unoco','preciounoco','totalpreciounoco','pirceunoco',
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
'productotreintaco','treintaco','preciotreintaco','totalpreciotreintaco','pircetreintaco'

));}

      
});





Route::get("/final",function(){
       
$nombre= $_GET["nombre"];
session(["nombre" => $nombre]);

$whatsapp= $_GET["whatsapp"];
session(["whatsapp" => $whatsapp]);

  $productos= App\Mujer::all();

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
 $productototalprecio=$producto->NombreTotalPrecio;//totalpreciounom
 $productonombrevariable=$producto->NombreVariable;//uno

 if(!empty($_GET["$productototalprecio"])&&$_GET["$productototalprecio"]>0){//totalpreciouno

 $$productototalprecio=$_GET["$productototalprecio"];


 session(["$productototalprecio" => $$productototalprecio]);//$totalpreciouno



//ANALIZAR LOS TOTALESPRECIOS QUE VIENEN//

//PRECIOS TOTALES MAYORES QUE CERO//


    //GUARDAR CANTIDADES EN SESSION//$uno
$$productonombrevariable=$$productototalprecio/$productoprecio;//$totalpreciouno/$totalprecio
session(["$productonombrevariable" => $$productonombrevariable]);

$nombrepirce=$producto->NombrePirce;//pirceuno
             $$nombrepirce="TOTAL $";
 session(["$nombrepirce" => $$nombrepirce]);            

}if(empty($_GET["$productototalprecio"])||$_GET["$productototalprecio"]==0){

//SI PRECIOTOTAL (ej preciototaluno) es CERO//
session(["$productonombre" => ""]);//$productouno
session(["$productonombreprecio" => ""]);//preciouno
session(["$productototalprecio" => '0']);//$totalpreciouno

$nombrepirce=$producto->NombrePirce;//pirceuno

session(["$nombrepirce" => ""]);  //$pirceuno
session(["$productonombrevariable" => " "]);//uno

         }

       $nombre=" ";

       $whatsapp=" ";

       $totalapagar=" ";

       $constante=0;


  } 

  //FINAL MUJERES//

  //ADULTOS//

  $productos= App\Adulto::all();

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
 $productototalprecio=$producto->NombreTotalPrecio;//totalpreciounom
 $productonombrevariable=$producto->NombreVariable;//uno

 if(!empty($_GET["$productototalprecio"])&&$_GET["$productototalprecio"]>0){//totalpreciouno

 $$productototalprecio=$_GET["$productototalprecio"];


 session(["$productototalprecio" => $$productototalprecio]);//$totalpreciouno



//ANALIZAR LOS TOTALESPRECIOS QUE VIENEN//

//PRECIOS TOTALES MAYORES QUE CERO//


    //GUARDAR CANTIDADES EN SESSION//$uno
$$productonombrevariable=$$productototalprecio/$productoprecio;//$totalpreciouno/$totalprecio
session(["$productonombrevariable" => $$productonombrevariable]);

$nombrepirce=$producto->NombrePirce;//pirceuno
             $$nombrepirce="TOTAL $";
 session(["$nombrepirce" => $$nombrepirce]);            

}if(empty($_GET["$productototalprecio"])||$_GET["$productototalprecio"]==0){

//SI PRECIOTOTAL (ej preciototaluno) es CERO//
session(["$productonombre" => ""]);//$productouno
session(["$productonombreprecio" => ""]);//preciouno
session(["$productototalprecio" => '0']);//$totalpreciouno

$nombrepirce=$producto->NombrePirce;//pirceuno

session(["$nombrepirce" => ""]);  //$pirceuno
session(["$productonombrevariable" => " "]);//uno

         }

       $nombre=" ";

       $whatsapp=" ";

       $totalapagar=" ";

       $constante=0;


  } 
  //FINAL ADULTOS//


  //PRINCIPAL//

  $productos= App\Producto::all();

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
 $productototalprecio=$producto->NombreTotalPrecio;//totalpreciounom
 $productonombrevariable=$producto->NombreVariable;//uno

 if(!empty($_GET["$productototalprecio"])&&$_GET["$productototalprecio"]>0){//totalpreciouno

 $$productototalprecio=$_GET["$productototalprecio"];


 session(["$productototalprecio" => $$productototalprecio]);//$totalpreciouno



//ANALIZAR LOS TOTALESPRECIOS QUE VIENEN//

//PRECIOS TOTALES MAYORES QUE CERO//


    //GUARDAR CANTIDADES EN SESSION//$uno
$$productonombrevariable=$$productototalprecio/$productoprecio;//$totalpreciouno/$totalprecio
session(["$productonombrevariable" => $$productonombrevariable]);

$nombrepirce=$producto->NombrePirce;//pirceuno
             $$nombrepirce="TOTAL $";
 session(["$nombrepirce" => $$nombrepirce]);            

}if(empty($_GET["$productototalprecio"])||$_GET["$productototalprecio"]==0){

//SI PRECIOTOTAL (ej preciototaluno) es CERO//
session(["$productonombre" => ""]);//$productouno
session(["$productonombreprecio" => ""]);//preciouno
session(["$productototalprecio" => '0']);//$totalpreciouno

$nombrepirce=$producto->NombrePirce;//pirceuno

session(["$nombrepirce" => ""]);  //$pirceuno
session(["$productonombrevariable" => " "]);//uno

         }

       $nombre=" ";

       $whatsapp=" ";

       $totalapagar=" ";

       $constante=0;


  } 
  //FINAL PRINCIPAL//

//BUCAL//
 $productos= App\Bucal::all();
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
 $productototalprecio=$producto->NombreTotalPrecio;//totalpreciounom
 $productonombrevariable=$producto->NombreVariable;//uno

 if(!empty($_GET["$productototalprecio"])&&$_GET["$productototalprecio"]>0){//totalpreciouno

 $$productototalprecio=$_GET["$productototalprecio"];


 session(["$productototalprecio" => $$productototalprecio]);//$totalpreciouno



//ANALIZAR LOS TOTALESPRECIOS QUE VIENEN//

//PRECIOS TOTALES MAYORES QUE CERO//


    //GUARDAR CANTIDADES EN SESSION//$uno
$$productonombrevariable=$$productototalprecio/$productoprecio;//$totalpreciouno/$totalprecio
session(["$productonombrevariable" => $$productonombrevariable]);

$nombrepirce=$producto->NombrePirce;//pirceuno
             $$nombrepirce="TOTAL $";
 session(["$nombrepirce" => $$nombrepirce]);            

}if(empty($_GET["$productototalprecio"])||$_GET["$productototalprecio"]==0){

//SI PRECIOTOTAL (ej preciototaluno) es CERO//
session(["$productonombre" => ""]);//$productouno
session(["$productonombreprecio" => ""]);//preciouno
session(["$productototalprecio" => '0']);//$totalpreciouno

$nombrepirce=$producto->NombrePirce;//pirceuno

session(["$nombrepirce" => ""]);  //$pirceuno
session(["$productonombrevariable" => " "]);//uno

         }

       $nombre=" ";

       $whatsapp=" ";

       $totalapagar=" ";

       $constante=0;


  } 

  //FINAL BUCAL//

//CAPILARES//

  $productos= App\Capilar::all();

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
 $productototalprecio=$producto->NombreTotalPrecio;//totalpreciounom
 $productonombrevariable=$producto->NombreVariable;//uno

 if(!empty($_GET["$productototalprecio"])&&$_GET["$productototalprecio"]>0){//totalpreciouno

 $$productototalprecio=$_GET["$productototalprecio"];


 session(["$productototalprecio" => $$productototalprecio]);//$totalpreciouno



//ANALIZAR LOS TOTALESPRECIOS QUE VIENEN//

//PRECIOS TOTALES MAYORES QUE CERO//


    //GUARDAR CANTIDADES EN SESSION//$uno
$$productonombrevariable=$$productototalprecio/$productoprecio;//$totalpreciouno/$totalprecio
session(["$productonombrevariable" => $$productonombrevariable]);

$nombrepirce=$producto->NombrePirce;//pirceuno
             $$nombrepirce="TOTAL $";
 session(["$nombrepirce" => $$nombrepirce]);            

}if(empty($_GET["$productototalprecio"])||$_GET["$productototalprecio"]==0){

//SI PRECIOTOTAL (ej preciototaluno) es CERO//
session(["$productonombre" => ""]);//$productouno
session(["$productonombreprecio" => ""]);//preciouno
session(["$productototalprecio" => '0']);//$totalpreciouno

$nombrepirce=$producto->NombrePirce;//pirceuno

session(["$nombrepirce" => ""]);  //$pirceuno
session(["$productonombrevariable" => " "]);//uno

         }

       $nombre=" ";

       $whatsapp=" ";

       $totalapagar=" ";

       $constante=0;


  } 
//FINAL CAPILARES//

//CORPORALES//


  $productos= App\Corporal::all();

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
 $productototalprecio=$producto->NombreTotalPrecio;//totalpreciounom
 $productonombrevariable=$producto->NombreVariable;//uno

 if(!empty($_GET["$productototalprecio"])&&$_GET["$productototalprecio"]>0){//totalpreciouno

 $$productototalprecio=$_GET["$productototalprecio"];


 session(["$productototalprecio" => $$productototalprecio]);//$totalpreciouno



//ANALIZAR LOS TOTALESPRECIOS QUE VIENEN//

//PRECIOS TOTALES MAYORES QUE CERO//


    //GUARDAR CANTIDADES EN SESSION//$uno
$$productonombrevariable=$$productototalprecio/$productoprecio;//$totalpreciouno/$totalprecio
session(["$productonombrevariable" => $$productonombrevariable]);

$nombrepirce=$producto->NombrePirce;//pirceuno
             $$nombrepirce="TOTAL $";
 session(["$nombrepirce" => $$nombrepirce]);            

}if(empty($_GET["$productototalprecio"])||$_GET["$productototalprecio"]==0){

//SI PRECIOTOTAL (ej preciototaluno) es CERO//
session(["$productonombre" => ""]);//$productouno
session(["$productonombreprecio" => ""]);//preciouno
session(["$productototalprecio" => '0']);//$totalpreciouno

$nombrepirce=$producto->NombrePirce;//pirceuno

session(["$nombrepirce" => ""]);  //$pirceuno
session(["$productonombrevariable" => " "]);//uno

         }

       $nombre=" ";

       $whatsapp=" ";

       $totalapagar=" ";

       $constante=0;


  } 

  //FINAL CORPORALES//

  
$uno =session('uno');
$pirceuno =session('pirceuno');
$preciouno =session('preciouno');
$totalpreciouno =session('totalpreciouno');
$productouno =session('productouno');


$dos =session('dos');
$pircedos =session('pircedos');
$preciodos =session('preciodos');
$totalpreciodos =session('totalpreciodos');
$productodos =session('productodos');

$tres =session('tres');
$pircetres =session('pircetres');
$preciotres =session('preciotres');
$totalpreciotres =session('totalpreciotres');
$productotres =session('productotres');


$cuatro =session('cuatro');
$pircecuatro =session('pircecuatro');
$preciocuatro =session('preciocuatro');
$totalpreciocuatro =session('totalpreciocuatro');
$productocuatro =session('productocuatro');

$cinco =session('cinco');
$pircecinco =session('pircecinco');
$preciocinco =session('preciocinco');
$totalpreciocinco =session('totalpreciocinco');
$productocinco =session('productocinco');

$seis =session('seis');
$pirceseis =session('pirceseis');
$precioseis =session('precioseis');
$totalprecioseis =session('totalprecioseis');
$productoseis =session('productoseis');

$siete =session('siete');
$pircesiete =session('pircesiete');
$preciosiete =session('preciosiete');
$totalpreciosiete =session('totalpreciosiete');
$productosiete =session('productosiete');

$ocho =session('ocho');
$pirceocho =session('pirceocho');
$precioocho =session('precioocho');
$totalprecioocho =session('totalprecioocho');
$productoocho =session('productoocho');

$nueve =session('nueve');
$pircenueve =session('pircenueve');
$precionueve =session('precionueve');
$totalprecionueve =session('totalprecionueve');
$productonueve =session('productonueve');

$diez =session('diez');
$pircediez =session('pircediez');
$preciodiez =session('preciodiez');
$totalpreciodiez =session('totalpreciodiez');
$productodiez =session('productodiez');

$once =session('once');
$pirceonce =session('pirceonce');
$precioonce =session('precioonce');
$totalprecioonce =session('totalprecioonce');
$productoonce =session('productoonce');

$doce =session('doce');
$pircedoce =session('pircedoce');
$preciodoce =session('preciodoce');
$totalpreciodoce =session('totalpreciodoce');
$productodoce =session('productodoce');

$trece =session('trece');
$pircetrece =session('pircetrece');
$preciotrece =session('preciotrece');
$totalpreciotrece =session('totalpreciotrece');
$productotrece =session('productotrece');

$catorce =session('catorce');
$pircecatorce =session('pircecatorce');
$preciocatorce =session('preciocatorce');
$totalpreciocatorce =session('totalpreciocatorce');
$productocatorce =session('productocatorce');

$quince =session('quince');
$pircequince =session('pircequince');
$precioquince =session('precioquince');
$totalprecioquince =session('totalprecioquince');
$productoquince =session('productoquince');

$dieciseis =session('dieciseis');
$pircedieciseis =session('pircedieciseis');
$preciodieciseis =session('preciodieciseis');
$totalpreciodieciseis =session('totalpreciodieciseis');
$productodieciseis =session('productodiecisiete');

$diecisiete =session('diecisiete');
$pircediecisiete =session('pircediecisiete');
$preciodiecisiete =session('preciodiecisiete');
$totalpreciodiecisiete =session('totalpreciodiecisiete');
$productodiecisiete =session('productodiecisiete');

$dieciocho =session('dieciocho');
$pircedieciocho =session('pircedieciocho');
$preciodieciocho =session('preciodieciocho');
$totalpreciodieciocho =session('totalpreciodieciocho');
$productodieciocho =session('productodieciocho');

$diecinueve =session('diecinueve');
$pircediecinueve =session('pircediecinueve');
$preciodiecinueve =session('preciodiecinueve');
$totalpreciodiecinueve =session('totalpreciodiecinueve');
$productodiecinueve =session('productodiecinueve');

$veinte =session('veinte');
$pirceveinte =session('pirceveinte');
$precioveinte =session('precioveinte');
$totalprecioveinte =session('totalprecioveinte');
$productoveinte =session('productoveinte');

$veintiuno =session('veintiuno');
$pirceveintiuno =session('pirceveintiuno');
$precioveintiuno =session('precioveintiuno');
$totalprecioveintiuno =session('totalprecioveintiuno');
$productoveintiuno =session('productoveintiuno');

$veintidos =session('veintidos');
$pirceveintidos =session('pirceveintidos');
$precioveintidos =session('precioveintidos');
$totalprecioveintidos =session('totalprecioveintidos');
$productoveintidos =session('productoveintidos');

$veintitres =session('veintitres');
$pirceveintitres =session('pirceveintitres');
$precioveintitres =session('precioveintitres');
$totalprecioveintitres =session('totalprecioveintitres');
$productoveintitres =session('productoveintitres');

$veinticuatro =session('veinticuatro');
$pirceveinticuatro =session('pirceveinticuatro');
$precioveinticuatro =session('precioveinticuatro');
$totalprecioveinticuatro =session('totalprecioveinticuatro');
$productoveinticuatro =session('productoveinticuatro');

$veinticinco =session('veinticinco');
$pirceveinticinco =session('pirceveinticinco');
$precioveinticinco =session('precioveinticinco');
$totalprecioveinticinco =session('totalprecioveinticinco');
$productoveinticinco =session('productoveinticinco');

$veintiseis =session('veintiseis');
$pirceveintiseis =session('pirceveintiseis');
$precioveintiseis =session('precioveintiseis');
$totalprecioveintiseis =session('totalprecioveintiseis');
$productoveintiseis =session('productoveintiseis');

$veintisiete =session('veintisiete');
$pirceveintisiete =session('pirceveintisiete');
$precioveintisiete =session('precioveintisiete');
$totalprecioveintisiete =session('totalprecioveintisiete');
$productoveintisiete =session('productoveintisiete');

$veintiocho =session('veintiocho');
$pirceveintiocho =session('pirceveintiocho');
$precioveintiocho =session('precioveintiocho');
$totalprecioveintiocho =session('totalprecioveintiocho');
$productoveintiocho =session('productoveintiocho');

$veintinueve =session('veintinueve');
$pirceveintinueve =session('pirceveintinueve');
$precioveintinueve =session('precioveintinueve');
$totalprecioveintinueve =session('totalprecioveintinueve');
$productoveintinueve =session('productoveintinueve');

$treinta =session('treinta');
$pircetreinta =session('pircetreinta');
$preciotreinta =session('preciotreinta');
$totalpreciotreinta =session('totalpreciotreinta');
$productotreinta =session('productotreinta');

//MUJERES//


$unom=session('unom');
$pirceunom=session('pirceunom');
$preciounom=session('preciounom');
$totalpreciounom=session('totalpreciounom');
$productounom=session('productounom');


$dosm=session('dosm');
$pircedosm=session('pircedosm');
$preciodosm=session('preciodosm');
$totalpreciodosm=session('totalpreciodosm');
$productodosm=session('productodosm');

$tresm=session('tresm');
$pircetresm=session('pircetresm');
$preciotresm=session('preciotresm');
$totalpreciotresm=session('totalpreciotresm');
$productotresm=session('productotresm');


$cuatrom=session('cuatrom');
$pircecuatrom=session('pircecuatrom');
$preciocuatrom=session('preciocuatrom');
$totalpreciocuatrom=session('totalpreciocuatrom');
$productocuatrom=session('productocuatrom');

$cincom=session('cincom');
$pircecincom=session('pircecincom');
$preciocincom=session('preciocincom');
$totalpreciocincom=session('totalpreciocincom');
$productocincom=session('productocincom');

$seism=session('seism');
$pirceseism=session('pirceseism');
$precioseism=session('precioseism');
$totalprecioseism=session('totalprecioseism');
$productoseism=session('productoseism');

$sietem=session('sietem');
$pircesietem=session('pircesietem');
$preciosietem=session('preciosietem');
$totalpreciosietem=session('totalpreciosietem');
$productosietem=session('productosietem');

$ochom=session('ochom');
$pirceochom=session('pirceochom');
$precioochom=session('precioochom');
$totalprecioochom=session('totalprecioochom');
$productoochom=session('productoochom');

$nuevem=session('nuevem');
$pircenuevem=session('pircenuevem');
$precionuevem=session('precionuevem');
$totalprecionuevem=session('totalprecionuevem');
$productonuevem=session('productonuevem');

$diezm=session('diezm');
$pircediezm=session('pircediezm');
$preciodiezm=session('preciodiezm');
$totalpreciodiezm=session('totalpreciodiezm');
$productodiezm=session('productodiezm');

$oncem=session('oncem');
$pirceoncem=session('pirceoncem');
$preciooncem=session('preciooncem');
$totalpreciooncem=session('totalpreciooncem');
$productooncem=session('productooncem');

$docem=session('docem');
$pircedocem=session('pircedocem');
$preciodocem=session('preciodocem');
$totalpreciodocem=session('totalpreciodocem');
$productodocem=session('productodocem');

$trecem=session('trecem');
$pircetrecem=session('pircetrecem');
$preciotrecem=session('preciotrecem');
$totalpreciotrecem=session('totalpreciotrecem');
$productotrecem=session('productotrecem');

$catorcem=session('catorcem');
$pircecatorcem=session('pircecatorcem');
$preciocatorcem=session('preciocatorcem');
$totalpreciocatorcem=session('totalpreciocatorcem');
$productocatorcem=session('productocatorcem');

$quincem=session('quincem');
$pircequincem=session('pircequincem');
$precioquincem=session('precioquincem');
$totalprecioquincem=session('totalprecioquincem');
$productoquincem=session('productoquincem');

$dieciseism=session('dieciseism');
$pircedieciseism=session('pircedieciseism');
$preciodieciseism=session('preciodieciseism');
$totalpreciodieciseism=session('totalpreciodieciseism');
$productodieciseism=session('productodiecisietem');

$diecisietem=session('diecisietem');
$pircediecisietem=session('pircediecisietem');
$preciodiecisietem=session('preciodiecisietem');
$totalpreciodiecisietem=session('totalpreciodiecisietem');
$productodiecisietem=session('productodiecisietem');

$dieciochom=session('dieciochom');
$pircedieciochom=session('pircedieciochom');
$preciodieciochom=session('preciodieciochom');
$totalpreciodieciochom=session('totalpreciodieciochom');
$productodieciochom=session('productodieciochom');

$diecinuevem=session('diecinuevem');
$pircediecinuevem=session('pircediecinuevem');
$preciodiecinuevem=session('preciodiecinuevem');
$totalpreciodiecinuevem=session('totalpreciodiecinuevem');
$productodiecinuevem=session('productodiecinuevem');

$veintem=session('veintem');
$pirceveintem=session('pirceveintem');
$precioveintem=session('precioveintem');
$totalprecioveintem=session('totalprecioveintem');
$productoveintem=session('productoveintem');

$veintiunom=session('veintiunom');
$pirceveintiunom=session('pirceveintiunom');
$precioveintiunom=session('precioveintiunom');
$totalprecioveintiunom=session('totalprecioveintiunom');
$productoveintiunom=session('productoveintiunom');

$veintidosm=session('veintidosm');
$pirceveintidosm=session('pirceveintidosm');
$precioveintidosm=session('precioveintidosm');
$totalprecioveintidosm=session('totalprecioveintidosm');
$productoveintidosm=session('productoveintidosm');

$veintitresm=session('veintitresm');
$pirceveintitresm=session('pirceveintitresm');
$precioveintitresm=session('precioveintitresm');
$totalprecioveintitresm=session('totalprecioveintitresm');
$productoveintitresm=session('productoveintitresm');

$veinticuatrom=session('veinticuatrom');
$pirceveinticuatrom=session('pirceveinticuatrom');
$precioveinticuatrom=session('precioveinticuatrom');
$totalprecioveinticuatrom=session('totalprecioveinticuatrom');
$productoveinticuatrom=session('productoveinticuatrom');

$veinticincom=session('veinticincom');
$pirceveinticincom=session('pirceveinticincom');
$precioveinticincom=session('precioveinticincom');
$totalprecioveinticincom=session('totalprecioveinticincom');
$productoveinticincom=session('productoveinticincom');

$veintiseism=session('veintiseism');
$pirceveintiseism=session('pirceveintiseism');
$precioveintiseism=session('precioveintiseism');
$totalprecioveintiseism=session('totalprecioveintiseism');
$productoveintiseism=session('productoveintiseism');

$veintisietem=session('veintisietem');
$pirceveintisietem=session('pirceveintisietem');
$precioveintisietem=session('precioveintisietem');
$totalprecioveintisietem=session('totalprecioveintisietem');
$productoveintisietem=session('productoveintisietem');

$veintiochom=session('veintiochom');
$pirceveintiochom=session('pirceveintiochom');
$precioveintiochom=session('precioveintiochom');
$totalprecioveintiochom=session('totalprecioveintiochom');
$productoveintiochom=session('productoveintiochom');

$veintinuevem=session('veintinuevem');
$pirceveintinuevem=session('pirceveintinuevem');
$precioveintinuevem=session('precioveintinuevem');
$totalprecioveintinuevem=session('totalprecioveintinuevem');
$productoveintinuevem=session('productoveintinuevem');

$treintam=session('treintam');
$pircetreintam=session('pircetreintam');
$preciotreintam=session('preciotreintam');
$totalpreciotreintam=session('totalpreciotreintam');
$productotreintam=session('productotreintam');

//ADULTOS//


$unoa=session('unoa');
$pirceunoa=session('pirceunoa');
$preciounoa=session('preciounoa');
$totalpreciounoa=session('totalpreciounoa');
$productounoa=session('productounoa');


$dosa=session('dosa');
$pircedosa=session('pircedosa');
$preciodosa=session('preciodosa');
$totalpreciodosa=session('totalpreciodosa');
$productodosa=session('productodosa');

$tresa=session('tresa');
$pircetresa=session('pircetresa');
$preciotresa=session('preciotresa');
$totalpreciotresa=session('totalpreciotresa');
$productotresa=session('productotresa');


$cuatroa=session('cuatroa');
$pircecuatroa=session('pircecuatroa');
$preciocuatroa=session('preciocuatroa');
$totalpreciocuatroa=session('totalpreciocuatroa');
$productocuatroa=session('productocuatroa');

$cincoa=session('cincoa');
$pircecincoa=session('pircecincoa');
$preciocincoa=session('preciocincoa');
$totalpreciocincoa=session('totalpreciocincoa');
$productocincoa=session('productocincoa');

$seisa=session('seisa');
$pirceseisa=session('pirceseisa');
$precioseisa=session('precioseisa');
$totalprecioseisa=session('totalprecioseisa');
$productoseisa=session('productoseisa');

$sietea=session('sietea');
$pircesietea=session('pircesietea');
$preciosietea=session('preciosietea');
$totalpreciosietea=session('totalpreciosietea');
$productosietea=session('productosietea');

$ochoa=session('ochoa');
$pirceochoa=session('pirceochoa');
$precioochoa=session('precioochoa');
$totalprecioochoa=session('totalprecioochoa');
$productoochoa=session('productoochoa');

$nuevea=session('nuevea');
$pircenuevea=session('pircenuevea');
$precionuevea=session('precionuevea');
$totalprecionuevea=session('totalprecionuevea');
$productonuevea=session('productonuevea');

$dieza=session('dieza');
$pircedieza=session('pircedieza');
$preciodieza=session('preciodieza');
$totalpreciodieza=session('totalpreciodieza');
$productodieza=session('productodieza');

$oncea=session('oncea');
$pirceoncea=session('pirceoncea');
$preciooncea=session('preciooncea');
$totalpreciooncea=session('totalpreciooncea');
$productooncea=session('productooncea');

$docea=session('docea');
$pircedocea=session('pircedocea');
$preciodocea=session('preciodocea');
$totalpreciodocea=session('totalpreciodocea');
$productodocea=session('productodocea');

$trecea=session('trecea');
$pircetrecea=session('pircetrecea');
$preciotrecea=session('preciotrecea');
$totalpreciotrecea=session('totalpreciotrecea');
$productotrecea=session('productotrecea');

$catorcea=session('catorcea');
$pircecatorcea=session('pircecatorcea');
$preciocatorcea=session('preciocatorcea');
$totalpreciocatorcea=session('totalpreciocatorcea');
$productocatorcea=session('productocatorcea');

$quincea=session('quincea');
$pircequincea=session('pircequincea');
$precioquincea=session('precioquincea');
$totalprecioquincea=session('totalprecioquincea');
$productoquincea=session('productoquincea');

$dieciseisa=session('dieciseisa');
$pircedieciseisa=session('pircedieciseisa');
$preciodieciseisa=session('preciodieciseisa');
$totalpreciodieciseisa=session('totalpreciodieciseisa');
$productodieciseisa=session('productodiecisietea');

$diecisietea=session('diecisietea');
$pircediecisietea=session('pircediecisietea');
$preciodiecisietea=session('preciodiecisietea');
$totalpreciodiecisietea=session('totalpreciodiecisietea');
$productodiecisietea=session('productodiecisietea');

$dieciochoa=session('dieciochoa');
$pircedieciochoa=session('pircedieciochoa');
$preciodieciochoa=session('preciodieciochoa');
$totalpreciodieciochoa=session('totalpreciodieciochoa');
$productodieciochoa=session('productodieciochoa');

$diecinuevea=session('diecinuevea');
$pircediecinuevea=session('pircediecinuevea');
$preciodiecinuevea=session('preciodiecinuevea');
$totalpreciodiecinuevea=session('totalpreciodiecinuevea');
$productodiecinuevea=session('productodiecinuevea');

$veintea=session('veintea');
$pirceveintea=session('pirceveintea');
$precioveintea=session('precioveintea');
$totalprecioveintea=session('totalprecioveintea');
$productoveintea=session('productoveintea');

$veintiunoa=session('veintiunoa');
$pirceveintiunoa=session('pirceveintiunoa');
$precioveintiunoa=session('precioveintiunoa');
$totalprecioveintiunoa=session('totalprecioveintiunoa');
$productoveintiunoa=session('productoveintiunoa');

$veintidosa=session('veintidosa');
$pirceveintidosa=session('pirceveintidosa');
$precioveintidosa=session('precioveintidosa');
$totalprecioveintidosa=session('totalprecioveintidosa');
$productoveintidosa=session('productoveintidosa');

$veintitresa=session('veintitresa');
$pirceveintitresa=session('pirceveintitresa');
$precioveintitresa=session('precioveintitresa');
$totalprecioveintitresa=session('totalprecioveintitresa');
$productoveintitresa=session('productoveintitresa');

$veinticuatroa=session('veinticuatroa');
$pirceveinticuatroa=session('pirceveinticuatroa');
$precioveinticuatroa=session('precioveinticuatroa');
$totalprecioveinticuatroa=session('totalprecioveinticuatroa');
$productoveinticuatroa=session('productoveinticuatroa');

$veinticincoa=session('veinticincoa');
$pirceveinticincoa=session('pirceveinticincoa');
$precioveinticincoa=session('precioveinticincoa');
$totalprecioveinticincoa=session('totalprecioveinticincoa');
$productoveinticincoa=session('productoveinticincoa');

$veintiseisa=session('veintiseisa');
$pirceveintiseisa=session('pirceveintiseisa');
$precioveintiseisa=session('precioveintiseisa');
$totalprecioveintiseisa=session('totalprecioveintiseisa');
$productoveintiseisa=session('productoveintiseisa');

$veintisietea=session('veintisietea');
$pirceveintisietea=session('pirceveintisietea');
$precioveintisietea=session('precioveintisietea');
$totalprecioveintisietea=session('totalprecioveintisietea');
$productoveintisietea=session('productoveintisietea');

$veintiochoa=session('veintiochoa');
$pirceveintiochoa=session('pirceveintiochoa');
$precioveintiochoa=session('precioveintiochoa');
$totalprecioveintiochoa=session('totalprecioveintiochoa');
$productoveintiochoa=session('productoveintiochoa');

$veintinuevea=session('veintinuevea');
$pirceveintinuevea=session('pirceveintinuevea');
$precioveintinuevea=session('precioveintinuevea');
$totalprecioveintinuevea=session('totalprecioveintinuevea');
$productoveintinuevea=session('productoveintinuevea');

$treintaa=session('treintaa');
$pircetreintaa=session('pircetreintaa');
$preciotreintaa=session('preciotreintaa');
$totalpreciotreintaa=session('totalpreciotreintaa');
$productotreintaa=session('productotreintaa');



//FIN ADULTOS//

//BUCALES//

$unoo=session('unoo');
$pirceunoo=session('pirceunoo');
$preciounoo=session('preciounoo');
$totalpreciounoo=session('totalpreciounoo');
$productounoo=session('productounoo');


$doso=session('doso');
$pircedoso=session('pircedoso');
$preciodoso=session('preciodoso');
$totalpreciodoso=session('totalpreciodoso');
$productodoso=session('productodoso');

$treso=session('treso');
$pircetreso=session('pircetreso');
$preciotreso=session('preciotreso');
$totalpreciotreso=session('totalpreciotreso');
$productotreso=session('productotreso');


$cuatroo=session('cuatroo');
$pircecuatroo=session('pircecuatroo');
$preciocuatroo=session('preciocuatroo');
$totalpreciocuatroo=session('totalpreciocuatroo');
$productocuatroo=session('productocuatroo');

$cincoo=session('cincoo');
$pircecincoo=session('pircecincoo');
$preciocincoo=session('preciocincoo');
$totalpreciocincoo=session('totalpreciocincoo');
$productocincoo=session('productocincoo');

$seiso=session('seiso');
$pirceseiso=session('pirceseiso');
$precioseiso=session('precioseiso');
$totalprecioseiso=session('totalprecioseiso');
$productoseiso=session('productoseiso');

$sieteo=session('sieteo');
$pircesieteo=session('pircesieteo');
$preciosieteo=session('preciosieteo');
$totalpreciosieteo=session('totalpreciosieteo');
$productosieteo=session('productosieteo');

$ochoo=session('ochoo');
$pirceochoo=session('pirceochoo');
$precioochoo=session('precioochoo');
$totalprecioochoo=session('totalprecioochoo');
$productoochoo=session('productoochoo');

$nueveo=session('nueveo');
$pircenueveo=session('pircenueveo');
$precionueveo=session('precionueveo');
$totalprecionueveo=session('totalprecionueveo');
$productonueveo=session('productonueveo');

$diezo=session('diezo');
$pircediezo=session('pircediezo');
$preciodiezo=session('preciodiezo');
$totalpreciodiezo=session('totalpreciodiezo');
$productodiezo=session('productodiezo');

$onceo=session('onceo');
$pirceonceo=session('pirceonceo');
$precioonceo=session('precioonceo');
$totalprecioonceo=session('totalprecioonceo');
$productoonceo=session('productoonceo');

$doceo=session('doceo');
$pircedoceo=session('pircedoceo');
$preciodoceo=session('preciodoceo');
$totalpreciodoceo=session('totalpreciodoceo');
$productodoceo=session('productodoceo');

$treceo=session('treceo');
$pircetreceo=session('pircetreceo');
$preciotreceo=session('preciotreceo');
$totalpreciotreceo=session('totalpreciotreceo');
$productotreceo=session('productotreceo');

$catorceo=session('catorceo');
$pircecatorceo=session('pircecatorceo');
$preciocatorceo=session('preciocatorceo');
$totalpreciocatorceo=session('totalpreciocatorceo');
$productocatorceo=session('productocatorceo');

$quinceo=session('quinceo');
$pircequinceo=session('pircequinceo');
$precioquinceo=session('precioquinceo');
$totalprecioquinceo=session('totalprecioquinceo');
$productoquinceo=session('productoquinceo');

$dieciseiso=session('dieciseiso');
$pircedieciseiso=session('pircedieciseiso');
$preciodieciseiso=session('preciodieciseiso');
$totalpreciodieciseiso=session('totalpreciodieciseiso');
$productodieciseiso=session('productodiecisieteo');

$diecisieteo=session('diecisieteo');
$pircediecisieteo=session('pircediecisieteo');
$preciodiecisieteo=session('preciodiecisieteo');
$totalpreciodiecisieteo=session('totalpreciodiecisieteo');
$productodiecisieteo=session('productodiecisieteo');

$dieciochoo=session('dieciochoo');
$pircedieciochoo=session('pircedieciochoo');
$preciodieciochoo=session('preciodieciochoo');
$totalpreciodieciochoo=session('totalpreciodieciochoo');
$productodieciochoo=session('productodieciochoo');

$diecinueveo=session('diecinueveo');
$pircediecinueveo=session('pircediecinueveo');
$preciodiecinueveo=session('preciodiecinueveo');
$totalpreciodiecinueveo=session('totalpreciodiecinueveo');
$productodiecinueveo=session('productodiecinueveo');

$veinteo=session('veinteo');
$pirceveinteo=session('pirceveinteo');
$precioveinteo=session('precioveinteo');
$totalprecioveinteo=session('totalprecioveinteo');
$productoveinteo=session('productoveinteo');

$veintiunoo=session('veintiunoo');
$pirceveintiunoo=session('pirceveintiunoo');
$precioveintiunoo=session('precioveintiunoo');
$totalprecioveintiunoo=session('totalprecioveintiunoo');
$productoveintiunoo=session('productoveintiunoo');

$veintidoso=session('veintidoso');
$pirceveintidoso=session('pirceveintidoso');
$precioveintidoso=session('precioveintidoso');
$totalprecioveintidoso=session('totalprecioveintidoso');
$productoveintidoso=session('productoveintidoso');

$veintitreso=session('veintitreso');
$pirceveintitreso=session('pirceveintitreso');
$precioveintitreso=session('precioveintitreso');
$totalprecioveintitreso=session('totalprecioveintitreso');
$productoveintitreso=session('productoveintitreso');

$veinticuatroo=session('veinticuatroo');
$pirceveinticuatroo=session('pirceveinticuatroo');
$precioveinticuatroo=session('precioveinticuatroo');
$totalprecioveinticuatroo=session('totalprecioveinticuatroo');
$productoveinticuatroo=session('productoveinticuatroo');

$veinticincoo=session('veinticincoo');
$pirceveinticincoo=session('pirceveinticincoo');
$precioveinticincoo=session('precioveinticincoo');
$totalprecioveinticincoo=session('totalprecioveinticincoo');
$productoveinticincoo=session('productoveinticincoo');

$veintiseiso=session('veintiseiso');
$pirceveintiseiso=session('pirceveintiseiso');
$precioveintiseiso=session('precioveintiseiso');
$totalprecioveintiseiso=session('totalprecioveintiseiso');
$productoveintiseiso=session('productoveintiseiso');

$veintisieteo=session('veintisieteo');
$pirceveintisieteo=session('pirceveintisieteo');
$precioveintisieteo=session('precioveintisieteo');
$totalprecioveintisieteo=session('totalprecioveintisieteo');
$productoveintisieteo=session('productoveintisieteo');

$veintiochoo=session('veintiochoo');
$pirceveintiochoo=session('pirceveintiochoo');
$precioveintiochoo=session('precioveintiochoo');
$totalprecioveintiochoo=session('totalprecioveintiochoo');
$productoveintiochoo=session('productoveintiochoo');

$veintinueveo=session('veintinueveo');
$pirceveintinueveo=session('pirceveintinueveo');
$precioveintinueveo=session('precioveintinueveo');
$totalprecioveintinueveo=session('totalprecioveintinueveo');
$productoveintinueveo=session('productoveintinueveo');

$treintao=session('treintao');
$pircetreintao=session('pircetreintao');
$preciotreintao=session('preciotreintao');
$totalpreciotreintao=session('totalpreciotreintao');
$productotreintao=session('productotreintao');

//FIN BUCALES//

//CAPILARES//
$unoca=session('unoca');
$pirceunoca=session('pirceunoca');
$preciounoca=session('preciounoca');
$totalpreciounoca=session('totalpreciounoca');
$productounoca=session('productounoca');


$dosca=session('dosca');
$pircedosca=session('pircedosca');
$preciodosca=session('preciodosca');
$totalpreciodosca=session('totalpreciodosca');
$productodosca=session('productodosca');

$tresca=session('tresca');
$pircetresca=session('pircetresca');
$preciotresca=session('preciotresca');
$totalpreciotresca=session('totalpreciotresca');
$productotresca=session('productotresca');


$cuatroca=session('cuatroca');
$pircecuatroca=session('pircecuatroca');
$preciocuatroca=session('preciocuatroca');
$totalpreciocuatroca=session('totalpreciocuatroca');
$productocuatroca=session('productocuatroca');

$cincoca=session('cincoca');
$pircecincoca=session('pircecincoca');
$preciocincoca=session('preciocincoca');
$totalpreciocincoca=session('totalpreciocincoca');
$productocincoca=session('productocincoca');

$seisca=session('seisca');
$pirceseisca=session('pirceseisca');
$precioseisca=session('precioseisca');
$totalprecioseisca=session('totalprecioseisca');
$productoseisca=session('productoseisca');

$sieteca=session('sieteca');
$pircesieteca=session('pircesieteca');
$preciosieteca=session('preciosieteca');
$totalpreciosieteca=session('totalpreciosieteca');
$productosieteca=session('productosieteca');

$ochoca=session('ochoca');
$pirceochoca=session('pirceochoca');
$precioochoca=session('precioochoca');
$totalprecioochoca=session('totalprecioochoca');
$productoochoca=session('productoochoca');

$nueveca=session('nueveca');
$pircenueveca=session('pircenueveca');
$precionueveca=session('precionueveca');
$totalprecionueveca=session('totalprecionueveca');
$productonueveca=session('productonueveca');

$diezca=session('diezca');
$pircediezca=session('pircediezca');
$preciodiezca=session('preciodiezca');
$totalpreciodiezca=session('totalpreciodiezca');
$productodiezca=session('productodiezca');

$onceca=session('onceca');
$pirceonceca=session('pirceonceca');
$precioonceca=session('precioonceca');
$totalprecioonceca=session('totalprecioonceca');
$productoonceca=session('productoonceca');

$doceca=session('doceca');
$pircedoceca=session('pircedoceca');
$preciodoceca=session('preciodoceca');
$totalpreciodoceca=session('totalpreciodoceca');
$productodoceca=session('productodoceca');

$trececa=session('trececa');
$pircetrececa=session('pircetrececa');
$preciotrececa=session('preciotrececa');
$totalpreciotrececa=session('totalpreciotrececa');
$productotrececa=session('productotrececa');

$catorceca=session('catorceca');
$pircecatorceca=session('pircecatorceca');
$preciocatorceca=session('preciocatorceca');
$totalpreciocatorceca=session('totalpreciocatorceca');
$productocatorceca=session('productocatorceca');

$quinceca=session('quinceca');
$pircequinceca=session('pircequinceca');
$precioquinceca=session('precioquinceca');
$totalprecioquinceca=session('totalprecioquinceca');
$productoquinceca=session('productoquinceca');

$dieciseisca=session('dieciseisca');
$pircedieciseisca=session('pircedieciseisca');
$preciodieciseisca=session('preciodieciseisca');
$totalpreciodieciseisca=session('totalpreciodieciseisca');
$productodieciseisca=session('productodiecisieteca');

$diecisieteca=session('diecisieteca');
$pircediecisieteca=session('pircediecisieteca');
$preciodiecisieteca=session('preciodiecisieteca');
$totalpreciodiecisieteca=session('totalpreciodiecisieteca');
$productodiecisieteca=session('productodiecisieteca');

$dieciochoca=session('dieciochoca');
$pircedieciochoca=session('pircedieciochoca');
$preciodieciochoca=session('preciodieciochoca');
$totalpreciodieciochoca=session('totalpreciodieciochoca');
$productodieciochoca=session('productodieciochoca');

$diecinueveca=session('diecinueveca');
$pircediecinueveca=session('pircediecinueveca');
$preciodiecinueveca=session('preciodiecinueveca');
$totalpreciodiecinueveca=session('totalpreciodiecinueveca');
$productodiecinueveca=session('productodiecinueveca');

$veinteca=session('veinteca');
$pirceveinteca=session('pirceveinteca');
$precioveinteca=session('precioveinteca');
$totalprecioveinteca=session('totalprecioveinteca');
$productoveinteca=session('productoveinteca');

$veintiunoca=session('veintiunoca');
$pirceveintiunoca=session('pirceveintiunoca');
$precioveintiunoca=session('precioveintiunoca');
$totalprecioveintiunoca=session('totalprecioveintiunoca');
$productoveintiunoca=session('productoveintiunoca');

$veintidosca=session('veintidosca');
$pirceveintidosca=session('pirceveintidosca');
$precioveintidosca=session('precioveintidosca');
$totalprecioveintidosca=session('totalprecioveintidosca');
$productoveintidosca=session('productoveintidosca');

$veintitresca=session('veintitresca');
$pirceveintitresca=session('pirceveintitresca');
$precioveintitresca=session('precioveintitresca');
$totalprecioveintitresca=session('totalprecioveintitresca');
$productoveintitresca=session('productoveintitresca');

$veinticuatroca=session('veinticuatroca');
$pirceveinticuatroca=session('pirceveinticuatroca');
$precioveinticuatroca=session('precioveinticuatroca');
$totalprecioveinticuatroca=session('totalprecioveinticuatroca');
$productoveinticuatroca=session('productoveinticuatroca');

$veinticincoca=session('veinticincoca');
$pirceveinticincoca=session('pirceveinticincoca');
$precioveinticincoca=session('precioveinticincoca');
$totalprecioveinticincoca=session('totalprecioveinticincoca');
$productoveinticincoca=session('productoveinticincoca');

$veintiseisca=session('veintiseisca');
$pirceveintiseisca=session('pirceveintiseisca');
$precioveintiseisca=session('precioveintiseisca');
$totalprecioveintiseisca=session('totalprecioveintiseisca');
$productoveintiseisca=session('productoveintiseisca');

$veintisieteca=session('veintisieteca');
$pirceveintisieteca=session('pirceveintisieteca');
$precioveintisieteca=session('precioveintisieteca');
$totalprecioveintisieteca=session('totalprecioveintisieteca');
$productoveintisieteca=session('productoveintisieteca');

$veintiochoca=session('veintiochoca');
$pirceveintiochoca=session('pirceveintiochoca');
$precioveintiochoca=session('precioveintiochoca');
$totalprecioveintiochoca=session('totalprecioveintiochoca');
$productoveintiochoca=session('productoveintiochoca');

$veintinueveca=session('veintinueveca');
$pirceveintinueveca=session('pirceveintinueveca');
$precioveintinueveca=session('precioveintinueveca');
$totalprecioveintinueveca=session('totalprecioveintinueveca');
$productoveintinueveca=session('productoveintinueveca');

$treintaca=session('treintaca');
$pircetreintaca=session('pircetreintaca');
$preciotreintaca=session('preciotreintaca');
$totalpreciotreintaca=session('totalpreciotreintaca');
$productotreintaca=session('productotreintaca');
//FIN CAPILARES//

//CORPORALES//
$unoco=session('unoco');
$pirceunoco=session('pirceunoco');
$preciounoco=session('preciounoco');
$totalpreciounoco=session('totalpreciounoco');
$productounoco=session('productounoco');


$dosco=session('dosco');
$pircedosco=session('pircedosco');
$preciodosco=session('preciodosco');
$totalpreciodosco=session('totalpreciodosco');
$productodosco=session('productodosco');

$tresco=session('tresco');
$pircetresco=session('pircetresco');
$preciotresco=session('preciotresco');
$totalpreciotresco=session('totalpreciotresco');
$productotresco=session('productotresco');


$cuatroco=session('cuatroco');
$pircecuatroco=session('pircecuatroco');
$preciocuatroco=session('preciocuatroco');
$totalpreciocuatroco=session('totalpreciocuatroco');
$productocuatroco=session('productocuatroco');

$cincoco=session('cincoco');
$pircecincoco=session('pircecincoco');
$preciocincoco=session('preciocincoco');
$totalpreciocincoco=session('totalpreciocincoco');
$productocincoco=session('productocincoco');

$seisco=session('seisco');
$pirceseisco=session('pirceseisco');
$precioseisco=session('precioseisco');
$totalprecioseisco=session('totalprecioseisco');
$productoseisco=session('productoseisco');

$sieteco=session('sieteco');
$pircesieteco=session('pircesieteco');
$preciosieteco=session('preciosieteco');
$totalpreciosieteco=session('totalpreciosieteco');
$productosieteco=session('productosieteco');

$ochoco=session('ochoco');
$pirceochoco=session('pirceochoco');
$precioochoco=session('precioochoco');
$totalprecioochoco=session('totalprecioochoco');
$productoochoco=session('productoochoco');

$nueveco=session('nueveco');
$pircenueveco=session('pircenueveco');
$precionueveco=session('precionueveco');
$totalprecionueveco=session('totalprecionueveco');
$productonueveco=session('productonueveco');

$diezco=session('diezco');
$pircediezco=session('pircediezco');
$preciodiezco=session('preciodiezco');
$totalpreciodiezco=session('totalpreciodiezco');
$productodiezco=session('productodiezco');

$onceco=session('onceco');
$pirceonceco=session('pirceonceco');
$precioonceco=session('precioonceco');
$totalprecioonceco=session('totalprecioonceco');
$productoonceco=session('productoonceco');

$doceco=session('doceco');
$pircedoceco=session('pircedoceco');
$preciodoceco=session('preciodoceco');
$totalpreciodoceco=session('totalpreciodoceco');
$productodoceco=session('productodoceco');

$trececo=session('trececo');
$pircetrececo=session('pircetrececo');
$preciotrececo=session('preciotrececo');
$totalpreciotrececo=session('totalpreciotrececo');
$productotrececo=session('productotrececo');

$catorceco=session('catorceco');
$pircecatorceco=session('pircecatarceco');
$preciocatorceco=session('preciocatorceco');
$totalpreciocatorceco=session('totalpreciocatorceco');
$productocatorceco=session('productocatorceco');

$quinceco=session('quinceco');
$pircequinceco=session('pircequinceco');
$precioquinceco=session('precioquinceco');
$totalprecioquinceco=session('totalprecioquinceco');
$productoquinceco=session('productoquinceco');

$dieciseisco=session('dieciseisco');
$pircedieciseisco=session('pircedieciseisco');
$preciodieciseisco=session('preciodieciseisco');
$totalpreciodieciseisco=session('totalpreciodieciseisco');
$productodieciseisco=session('productodiecisieteco');

$diecisieteco=session('diecisieteco');
$pircediecisieteco=session('pircediecisieteco');
$preciodiecisieteco=session('preciodiecisieteco');
$totalpreciodiecisieteco=session('totalpreciodiecisieteco');
$productodiecisieteco=session('productodiecisieteco');

$dieciochoco=session('dieciochoco');
$pircedieciochoco=session('pircedieciochoco');
$preciodieciochoco=session('preciodieciochoco');
$totalpreciodieciochoco=session('totalpreciodieciochoco');
$productodieciochoco=session('productodieciochoco');

$diecinueveco=session('diecinueveco');
$pircediecinueveco=session('pircediecinueveco');
$preciodiecinueveco=session('preciodiecinueveco');
$totalpreciodiecinueveco=session('totalpreciodiecinueveco');
$productodiecinueveco=session('productodiecinueveco');

$veinteco=session('veinteco');
$pirceveinteco=session('pirceveinteco');
$precioveinteco=session('precioveinteco');
$totalprecioveinteco=session('totalprecioveinteco');
$productoveinteco=session('productoveinteco');

$veintiunoco=session('veintiunoco');
$pirceveintiunoco=session('pirceveintiunoco');
$precioveintiunoco=session('precioveintiunoco');
$totalprecioveintiunoco=session('totalprecioveintiunoco');
$productoveintiunoco=session('productoveintiunoco');

$veintidosco=session('veintidosco');
$pirceveintidosco=session('pirceveintidosco');
$precioveintidosco=session('precioveintidosco');
$totalprecioveintidosco=session('totalprecioveintidosco');
$productoveintidosco=session('productoveintidosco');

$veintitresco=session('veintitresco');
$pirceveintitresco=session('pirceveintitresco');
$precioveintitresco=session('precioveintitresco');
$totalprecioveintitresco=session('totalprecioveintitresco');
$productoveintitresco=session('productoveintitresco');

$veinticuatroco=session('veinticuatroco');
$pirceveinticuatroco=session('pirceveinticuatroco');
$precioveinticuatroco=session('precioveinticuatroco');
$totalprecioveinticuatroco=session('totalprecioveinticuatroco');
$productoveinticuatroco=session('productoveinticuatroco');

$veinticincoco=session('veinticincoco');
$pirceveinticincoco=session('pirceveinticincoco');
$precioveinticincoco=session('precioveinticincoco');
$totalprecioveinticincoco=session('totalprecioveinticincoco');
$productoveinticincoco=session('productoveinticincoco');

$veintiseisco=session('veintiseisco');
$pirceveintiseisco=session('pirceveintiseisco');
$precioveintiseisco=session('precioveintiseisco');
$totalprecioveintiseisco=session('totalprecioveintiseisco');
$productoveintiseisco=session('productoveintiseisco');

$veintisieteco=session('veintisieteco');
$pirceveintisieteco=session('pirceveintisieteco');
$precioveintisieteco=session('precioveintisieteco');
$totalprecioveintisieteco=session('totalprecioveintisieteco');
$productoveintisieteco=session('productoveintisieteco');

$veintiochoco=session('veintiochoco');
$pirceveintiochoco=session('pirceveintiochoco');
$precioveintiochoco=session('precioveintiochoco');
$totalprecioveintiochoco=session('totalprecioveintiochoco');
$productoveintiochoco=session('productoveintiochoco');

$veintinueveco=session('veintinueveco');
$pirceveintinueveco=session('pirceveintinueveco');
$precioveintinueveco=session('precioveintinueveco');
$totalprecioveintinueveco=session('totalprecioveintinueveco');
$productoveintinueveco=session('productoveintinueveco');

$treintaco=session('treintaco');
$pircetreintaco=session('pircetreintaco');
$preciotreintaco=session('preciotreintaco');
$totalpreciotreintaco=session('totalpreciotreintaco');
$productotreintaco=session('productotreintaco');
//FIN CORPORALES//

$nombre=session('nombre');

$totalapagar=session('totalapagar');

$productosmujeres= App\Mujer::all();

$productosprincipales= App\Producto::all();

$productosadultos= App\Adulto::all();

$productosbucales= App\Bucal::all();

$productoscapilares= App\Capilar::all();

$productoscorporales= App\Corporal::all();

$cantidadm="";
$cantidadmm="";
$productom="";
$preciom="";

$cantidada="";
$cantidadaa="";
$productoa="";
$precioa="";

$cantidado="";
$cantidadoo="";
$productoo="";
$precioo="";

$cantidadca="";
$cantidadcaca="";
$productoca="";
$precioca="";

$cantidadco="";
$cantidadcoco="";
$productoco="";
$precioco="";

$sumatotal=$totalpreciounom+$totalpreciodosm+$totalpreciotresm+$totalpreciocuatrom+$totalpreciocincom+$totalprecioseism+$totalpreciosietem+$totalprecioochom+$totalprecionuevem+$totalpreciodiezm+$totalpreciooncem+$totalpreciodocem+$totalpreciotrecem+$totalpreciocatorcem+$totalprecioquincem+$totalpreciodieciseism+$totalpreciodiecisietem+$totalpreciodieciochom+$totalpreciodiecinuevem+$totalprecioveintem+$totalprecioveintiunom+$totalprecioveintidosm+$totalprecioveintitresm+$totalprecioveinticuatrom+$totalprecioveinticincom+$totalprecioveintiseism+$totalprecioveintisietem+$totalprecioveintiochom+$totalprecioveintinuevem+$totalpreciotreintam+$totalpreciounoa+$totalpreciodosa+$totalpreciotresa+$totalpreciocuatroa+$totalpreciocincoa+$totalprecioseisa+$totalpreciosietea+$totalprecioochoa+$totalprecionuevea+$totalpreciodieza+$totalpreciooncea+$totalpreciodocea+$totalpreciotrecea+$totalpreciocatorcea+$totalprecioquincea+$totalpreciodieciseisa+$totalpreciodiecisietea+$totalpreciodieciochoa+$totalpreciodiecinuevea+$totalprecioveintea+$totalprecioveintiunoa+$totalprecioveintidosa+$totalprecioveintitresa+$totalprecioveinticuatroa+$totalprecioveinticincoa+$totalprecioveintiseisa+$totalprecioveintisietea+$totalprecioveintiochoa+$totalprecioveintinuevea+$totalpreciotreintaa+$totalpreciouno+$totalpreciodos+$totalpreciotres+$totalpreciocuatro+$totalpreciocinco+$totalprecioseis+$totalpreciosiete+$totalprecioocho+$totalprecionueve+$totalpreciodiez+$totalprecioonce+$totalpreciodoce+$totalpreciotrece+$totalpreciocatorce+$totalprecioquince+$totalpreciodieciseis+$totalpreciodiecisiete+$totalpreciodieciocho+$totalpreciodiecinueve+$totalprecioveinte+$totalprecioveintiuno+$totalprecioveintidos+$totalprecioveintitres+$totalprecioveinticuatro+$totalprecioveinticinco+$totalprecioveintiseis+$totalprecioveintisiete+$totalprecioveintiocho+$totalprecioveintinueve+$totalpreciotreinta+$totalpreciounoo+$totalpreciodoso+$totalpreciotreso+$totalpreciocuatroo+$totalpreciocincoo+$totalprecioseiso+$totalpreciosieteo+$totalprecioochoo+$totalprecionueveo+$totalpreciodiezo+$totalprecioonceo+$totalpreciodoceo+$totalpreciotreceo+$totalpreciocatorceo+$totalprecioquinceo+$totalpreciodieciseiso+$totalpreciodiecisieteo+$totalpreciodieciochoo+$totalpreciodiecinueveo+$totalprecioveinteo+$totalprecioveintiunoo+$totalprecioveintidoso+$totalprecioveintitreso+$totalprecioveinticuatroo+$totalprecioveinticincoo+$totalprecioveintiseiso+$totalprecioveintisieteo+$totalprecioveintiochoo+$totalprecioveintinueveo+$totalpreciotreintao+
  $totalpreciounoca+$totalpreciodosca+$totalpreciotresca+$totalpreciocuatroca+$totalpreciocincoca+$totalprecioseisca+$totalpreciosieteca+$totalprecioochoca+$totalprecionueveca+$totalpreciodiezca+$totalprecioonceca+$totalpreciodoceca+$totalpreciotrececa+$totalpreciocatorceca+$totalprecioquinceca+$totalpreciodieciseisca+$totalpreciodiecisieteca+$totalpreciodieciochoca+$totalpreciodiecinueveca+$totalprecioveinteca+$totalprecioveintiunoca+$totalprecioveintidosca+$totalprecioveintitresca+$totalprecioveinticuatroca+$totalprecioveinticincoca+$totalprecioveintiseisca+$totalprecioveintisieteca+$totalprecioveintiochoca+$totalprecioveintinueveca+$totalpreciotreintaca+$totalpreciounoco+$totalpreciodosco+$totalpreciotresco+$totalpreciocuatroco+$totalpreciocincoco+$totalprecioseisco+$totalpreciosieteco+$totalprecioochoco+$totalprecionueveco+$totalpreciodiezco+$totalprecioonceco+$totalpreciodoceco+$totalpreciotrececo+$totalpreciocatorceco+$totalprecioquinceco+$totalpreciodieciseisco+$totalpreciodiecisieteco+$totalpreciodieciochoco+$totalpreciodiecinueveco+$totalprecioveinteco+$totalprecioveintiunoco+$totalprecioveintidosco+$totalprecioveintitresco+$totalprecioveinticuatroco+$totalprecioveinticincoco+$totalprecioveintiseisco+$totalprecioveintisieteco+$totalprecioveintiochoco+$totalprecioveintinueveco+$totalpreciotreintaco;
//MUJERES//

if($totalpreciounom==0){
    $totalpreciounom="";
}
if($totalpreciodosm==0){
    $totalpreciodosm="";
}
if($totalpreciotresm==0){
    $totalpreciotresm="";
}
if($totalpreciocuatrom==0){
    $totalpreciocuatrom="";
}
if($totalpreciocincom==0){
    $totalpreciocincom="";
}
if($totalprecioseism==0){
    $totalprecioseism="";
}
if($totalpreciosietem==0){
    $totalpreciosietem="";
}
if($totalprecioochom==0){
    $totalprecioochom="";
}
if($totalprecionuevem==0){
    $totalprecionuevem="";
}
if($totalpreciodiezm==0){
    $totalpreciodiezm="";
}
if($totalpreciooncem==0){
    $totalpreciooncem="";
}
if($totalpreciodocem==0){
    $totalpreciodocem="";
}
if($totalpreciotrecem==0){
    $totalpreciotrecem="";
}
if($totalpreciocatorcem==0){
    $totalpreciocatorcem="";
}
if($totalprecioquincem==0){
    $totalprecioquincem="";
}
if($totalpreciodieciseism==0){
    $totalpreciodieciseism="";
}
if($totalpreciodiecisietem==0){
    $totalpreciodiecisietem="";
}
if($totalpreciodieciochom==0){
    $totalpreciodieciochom="";
}
if($totalpreciodiecinuevem==0){
    $totalpreciodiecinuevem="";
}
if($totalprecioveintem==0){
    $totalprecioveintem="";
}
if($totalprecioveintiunom==0){
    $totalprecioveintiunom="";
}
if($totalprecioveintidosm==0){
    $totalprecioveintidosm="";
}
if($totalprecioveintitresm==0){
    $totalprecioveintitresm="";
}
if($totalprecioveinticuatrom==0){
    $totalprecioveinticuatrom="";
}
if($totalprecioveinticincom==0){
    $totalprecioveinticincom="";
}
if($totalprecioveintiseism==0){
    $totalprecioveintiseism="";
}
if($totalprecioveintisietem==0){
    $totalprecioveintisietem="";
}
if($totalprecioveintiochom==0){
    $totalprecioveintiochom="";
}
if($totalprecioveintinuevem==0){
    $totalprecioveintinuevem="";
}
if($totalpreciotreintam==0){
    $totalpreciotreintam="";
}

if($unom==0){
    $unom="";
}
if($dosm==0){
    $dosm="";
}
if($tresm==0){
    $tresm="";
}
if($cuatrom==0){
    $cuatrom="";
}
if($cincom==0){
    $cincom="";
}
if($seism==0){
    $seism="";
}
if($sietem==0){
    $sietem="";
}
if($ochom==0){
    $ochom="";
}
if($nuevem==0){
    $nuevem="";
}
if($diezm==0){
    $diezm="";
}
if($oncem==0){
    $oncem="";
}
if($docem==0){
    $docem="";
}
if($trecem==0){
    $trecem="";
}
if($catorcem==0){
    $catorcem="";
}
if($quincem==0){
    $quincem="";
}
if($dieciseism==0){
    $dieciseism="";
}
if($diecisietem==0){
    $diecisietem="";
}
if($dieciochom==0){
    $dieciochom="";
}
if($diecinuevem==0){
    $diecinuevem="";
}
if($veintem==0){
    $veintem="";
}
if($veintiunom==0){
    $veintiunom="";
}
if($veintidosm==0){
    $veintidosm="";
}
if($veintitresm==0){
    $veintitresm="";
}
if($veinticuatrom==0){
    $veinticuatrom="";
}
if($veinticincom==0){
    $veinticincom="";
}
if($veintiseism==0){
    $veintiseism="";
}
if($veintisietem==0){
    $veintisietem="";
}
if($veintiochom==0){
    $veintiochom="";
}
if($veintinuevem==0){
    $veintinuevem="";
}
if($treintam==0){
    $treintam="";
}

if($preciounom=0){
    $preciounom="";
}
if($preciodosm=0){
    $preciodosm="";
}
if($preciotresm=0){
    $preciotresm="";
}
if($preciocuatrom=0){
    $preciocuatrom="";
}
if($preciocincom=0){
    $preciocincom="";
}
if($precioseism=0){
    $precioseism="";
}
if($preciosietem=0){
    $preciosietem="";
}
if($precioochom=0){
    $precioochom="";
}
if($precionuevem=0){
    $precionuevem="";
}
if($preciodiezm=0){
    $preciodiezm="";
}
if($preciooncem=0){
    $preciooncem="";
}
if($preciodocem=0){
    $preciodocem="";
}
if($preciotrecem=0){
    $preciotrecem="";
}
if($preciocatorcem=0){
    $preciocatorcem="";
}
if($precioquincem=0){
    $precioquincem="";
}
if($preciodieciseism=0){
    $preciodieciseism="";
}
if($preciodiecisietem=0){
    $preciodiecisietem="";
}
if($preciodieciochom=0){
    $preciodieciochom="";
}
if($preciodiecinuevem=0){
    $preciodiecinuevem="";
}
if($precioveintem=0){
    $precioveintem="";
}
if($precioveintiunom=0){
    $precioveintiunom="";
}
if($precioveintidosm=0){
    $precioveintidosm="";
}
if($precioveintitresm=0){
    $precioveintitresm="";
}
if($precioveinticuatrom=0){
    $precioveinticuatrom="";
}
if($precioveinticincom=0){
    $precioveinticincom="";
}
if($precioveintiseism=0){
    $precioveintiseism="";
}
if($precioveintisietem=0){
    $precioveintisietem="";
}
if($precioveintiochom=0){
    $precioveintiochom="";
}
if($precioveintinuevem=0){
    $precioveintinuevem="";
}
if($preciotreintam=0){
    $preciotreintam="";
}

//ADULTO//

if($totalpreciounoa==0){
    $totalpreciounoa="";
}
if($totalpreciodosa==0){
    $totalpreciodosa="";
}
if($totalpreciotresa==0){
    $totalpreciotresa="";
}
if($totalpreciocuatroa==0){
    $totalpreciocuatroa="";
}
if($totalpreciocincoa==0){
    $totalpreciocincoa="";
}
if($totalprecioseisa==0){
    $totalprecioseisa="";
}
if($totalpreciosietea==0){
    $totalpreciosietea="";
}
if($totalprecioochoa==0){
    $totalprecioochoa="";
}
if($totalprecionuevea==0){
    $totalprecionuevea="";
}
if($totalpreciodieza==0){
    $totalpreciodieza="";
}
if($totalpreciooncea==0){
    $totalpreciooncea="";
}
if($totalpreciodocea==0){
    $totalpreciodocea="";
}
if($totalpreciotrecea==0){
    $totalpreciotrecea="";
}
if($totalpreciocatorcea==0){
    $totalpreciocatorcea="";
}
if($totalprecioquincea==0){
    $totalprecioquincea="";
}
if($totalpreciodieciseisa==0){
    $totalpreciodieciseisa="";
}
if($totalpreciodiecisietea==0){
    $totalpreciodiecisietea="";
}
if($totalpreciodieciochoa==0){
    $totalpreciodieciochoa="";
}
if($totalpreciodiecinuevea==0){
    $totalpreciodiecinuevea="";
}
if($totalprecioveintea==0){
    $totalprecioveintea="";
}
if($totalprecioveintiunoa==0){
    $totalprecioveintiunoa="";
}
if($totalprecioveintidosa==0){
    $totalprecioveintidosa="";
}
if($totalprecioveintitresa==0){
    $totalprecioveintitresa="";
}
if($totalprecioveinticuatroa==0){
    $totalprecioveinticuatroa="";
}
if($totalprecioveinticincoa==0){
    $totalprecioveinticincoa="";
}
if($totalprecioveintiseisa==0){
    $totalprecioveintiseisa="";
}
if($totalprecioveintisietea==0){
    $totalprecioveintisietea="";
}
if($totalprecioveintiochoa==0){
    $totalprecioveintiochoa="";
}
if($totalprecioveintinuevea==0){
    $totalprecioveintinuevea="";
}
if($totalpreciotreintaa==0){
    $totalpreciotreintaa="";
}

if($unoa==0){
    $unoa="";
}
if($dosa==0){
    $dosa="";
}
if($tresa==0){
    $tresa="";
}
if($cuatroa==0){
    $cuatroa="";
}
if($cincoa==0){
    $cincoa="";
}
if($seisa==0){
    $seisa="";
}
if($sietea==0){
    $sietea="";
}
if($ochoa==0){
    $ochoa="";
}
if($nuevea==0){
    $nuevea="";
}
if($dieza==0){
    $dieza="";
}
if($oncea==0){
    $oncea="";
}
if($docea==0){
    $docea="";
}
if($trecea==0){
    $trecea="";
}
if($catorcea==0){
    $catorcea="";
}
if($quincea==0){
    $quincea="";
}
if($dieciseisa==0){
    $dieciseisa="";
}
if($diecisietea==0){
    $diecisietea="";
}
if($dieciochoa==0){
    $dieciochoa="";
}
if($diecinuevea==0){
    $diecinuevea="";
}
if($veintea==0){
    $veintea="";
}
if($veintiunoa==0){
    $veintiunoa="";
}
if($veintidosa==0){
    $veintidosa="";
}
if($veintitresa==0){
    $veintitresa="";
}
if($veinticuatroa==0){
    $veinticuatroa="";
}
if($veinticincoa==0){
    $veinticincoa="";
}
if($veintiseisa==0){
    $veintiseisa="";
}
if($veintisietea==0){
    $veintisietea="";
}
if($veintiochoa==0){
    $veintiochoa="";
}
if($veintinuevea==0){
    $veintinuevea="";
}
if($treintaa==0){
    $treintaa="";
}

if($preciounoa=0){
    $preciounoa="";
}
if($preciodosa=0){
    $preciodosa="";
}
if($preciotresa=0){
    $preciotresa="";
}
if($preciocuatroa=0){
    $preciocuatroa="";
}
if($preciocincoa=0){
    $preciocincoa="";
}
if($precioseisa=0){
    $precioseisa="";
}
if($preciosietea=0){
    $preciosietea="";
}
if($precioochoa=0){
    $precioochoa="";
}
if($precionuevea=0){
    $precionuevea="";
}
if($preciodieza=0){
    $preciodieza="";
}
if($preciooncea=0){
    $preciooncea="";
}
if($preciodocea=0){
    $preciodocea="";
}
if($preciotrecea=0){
    $preciotrecea="";
}
if($preciocatorcea=0){
    $preciocatorcea="";
}
if($precioquincea=0){
    $precioquincea="";
}
if($preciodieciseisa=0){
    $preciodieciseisa="";
}
if($preciodiecisietea=0){
    $preciodiecisietea="";
}
if($preciodieciochoa=0){
    $preciodieciochoa="";
}
if($preciodiecinuevea=0){
    $preciodiecinuevea="";
}
if($precioveintea=0){
    $precioveintea="";
}
if($precioveintiunoa=0){
    $precioveintiunoa="";
}
if($precioveintidosa=0){
    $precioveintidosa="";
}
if($precioveintitresa=0){
    $precioveintitresa="";
}
if($precioveinticuatroa=0){
    $precioveinticuatroa="";
}
if($precioveinticincoa=0){
    $precioveinticincoa="";
}
if($precioveintiseisa=0){
    $precioveintiseisa="";
}
if($precioveintisietea=0){
    $precioveintisietea="";
}
if($precioveintiochoa=0){
    $precioveintiochoa="";
}
if($precioveintinuevea=0){
    $precioveintinuevea="";
}
if($preciotreintaa=0){
    $preciotreintaa="";
}
//PRINCIPAL//

if($totalpreciouno==0){
    $totalpreciouno="";
}
if($totalpreciodos==0){
    $totalpreciodos="";
}
if($totalpreciotres==0){
    $totalpreciotres="";
}
if($totalpreciocuatro==0){
    $totalpreciocuatro="";
}
if($totalpreciocinco==0){
    $totalpreciocinco="";
}
if($totalprecioseis==0){
    $totalprecioseis="";
}
if($totalpreciosiete==0){
    $totalpreciosiete="";
}
if($totalprecioocho==0){
    $totalprecioocho="";
}
if($totalprecionueve==0){
    $totalprecionueve="";
}
if($totalpreciodiez==0){
    $totalpreciodiez="";
}
if($totalprecioonce==0){
    $totalprecioonce="";
}
if($totalpreciodoce==0){
    $totalpreciodoce="";
}
if($totalpreciotrece==0){
    $totalpreciotrece="";
}
if($totalpreciocatorce==0){
    $totalpreciocatorce="";
}
if($totalprecioquince==0){
    $totalprecioquince="";
}
if($totalpreciodieciseis==0){
    $totalpreciodieciseis="";
}
if($totalpreciodiecisiete==0){
    $totalpreciodiecisiete="";
}
if($totalpreciodieciocho==0){
    $totalpreciodieciocho="";
}
if($totalpreciodiecinueve==0){
    $totalpreciodiecinueve="";
}
if($totalprecioveinte==0){
    $totalprecioveinte="";
}
if($totalprecioveintiuno==0){
    $totalprecioveintiuno="";
}
if($totalprecioveintidos==0){
    $totalprecioveintidos="";
}
if($totalprecioveintitres==0){
    $totalprecioveintitres="";
}
if($totalprecioveinticuatro==0){
    $totalprecioveinticuatro="";
}
if($totalprecioveinticinco==0){
    $totalprecioveinticinco="";
}
if($totalprecioveintiseis==0){
    $totalprecioveintiseis="";
}
if($totalprecioveintisiete==0){
    $totalprecioveintisiete="";
}
if($totalprecioveintiocho==0){
    $totalprecioveintiocho="";
}
if($totalprecioveintinueve==0){
    $totalprecioveintinueve="";
}
if($totalpreciotreinta==0){
    $totalpreciotreinta="";
}

if($uno==0){
    $uno="";
}
if($dos==0){
    $dos="";
}
if($tres==0){
    $tres="";
}
if($cuatro==0){
    $cuatro="";
}
if($cinco==0){
    $cinco="";
}
if($seis==0){
    $seis="";
}
if($siete==0){
    $siete="";
}
if($ocho==0){
    $ocho="";
}
if($nueve==0){
    $nueve="";
}
if($diez==0){
    $diez="";
}
if($once==0){
    $once="";
}
if($doce==0){
    $doce="";
}
if($trece==0){
    $trece="";
}
if($catorce==0){
    $catorce="";
}
if($quince==0){
    $quince="";
}
if($dieciseis==0){
    $dieciseis="";
}
if($diecisiete==0){
    $diecisiete="";
}
if($dieciocho==0){
    $dieciocho="";
}
if($diecinueve==0){
    $diecinueve="";
}
if($veinte==0){
    $veinte="";
}
if($veintiuno==0){
    $veintiuno="";
}
if($veintidos==0){
    $veintidos="";
}
if($veintitres==0){
    $veintitres="";
}
if($veinticuatro==0){
    $veinticuatro="";
}
if($veinticinco==0){
    $veinticinco="";
}
if($veintiseis==0){
    $veintiseis="";
}
if($veintisiete==0){
    $veintisiete="";
}
if($veintiocho==0){
    $veintiocho="";
}
if($veintinueve==0){
    $veintinueve="";
}
if($treinta==0){
    $treinta="";
}

if($preciouno=0){
    $preciouno="";
}
if($preciodos=0){
    $preciodos="";
}
if($preciotres=0){
    $preciotres="";
}
if($preciocuatro=0){
    $preciocuatro="";
}
if($preciocinco=0){
    $preciocinco="";
}
if($precioseis=0){
    $precioseis="";
}
if($preciosiete=0){
    $preciosiete="";
}
if($precioocho=0){
    $precioocho="";
}
if($precionueve=0){
    $precionueve="";
}
if($preciodiez=0){
    $preciodiez="";
}
if($precioonce=0){
    $precioonce="";
}
if($preciodoce=0){
    $preciodoce="";
}
if($preciotrece=0){
    $preciotrece="";
}
if($preciocatorce=0){
    $preciocatorce="";
}
if($precioquince=0){
    $precioquince="";
}
if($preciodieciseis=0){
    $preciodieciseis="";
}
if($preciodiecisiete=0){
    $preciodiecisiete="";
}
if($preciodieciocho=0){
    $preciodieciocho="";
}
if($preciodiecinueve=0){
    $preciodiecinueve="";
}
if($precioveinte=0){
    $precioveinte="";
}
if($precioveintiuno=0){
    $precioveintiuno="";
}
if($precioveintidos=0){
    $precioveintidos="";
}
if($precioveintitres=0){
    $precioveintitres="";
}
if($precioveinticuatro=0){
    $precioveinticuatro="";
}
if($precioveinticinco=0){
    $precioveinticinco="";
}
if($precioveintiseis=0){
    $precioveintiseis="";
}
if($precioveintisiete=0){
    $precioveintisiete="";
}
if($precioveintiocho=0){
    $precioveintiocho="";
}
if($precioveintinueve=0){
    $precioveintinueve="";
}
if($preciotreinta=0){
    $preciotreinta="";
}

//BUCALES//

if($totalpreciounoo==0){
    $totalpreciounoo="";
}
if($totalpreciodoso==0){
    $totalpreciodoso="";
}
if($totalpreciotreso==0){
    $totalpreciotreso="";
}
if($totalpreciocuatroo==0){
    $totalpreciocuatroo="";
}
if($totalpreciocincoo==0){
    $totalpreciocincoo="";
}
if($totalprecioseiso==0){
    $totalprecioseiso="";
}
if($totalpreciosieteo==0){
    $totalpreciosieteo="";
}
if($totalprecioochoo==0){
    $totalprecioochoo="";
}
if($totalprecionueveo==0){
    $totalprecionueveo="";
}
if($totalpreciodiezo==0){
    $totalpreciodiezo="";
}
if($totalprecioonceo==0){
    $totalprecioonceo="";
}
if($totalpreciodoceo==0){
    $totalpreciodoceo="";
}
if($totalpreciotreceo==0){
    $totalpreciotreceo="";
}
if($totalpreciocatorceo==0){
    $totalpreciocatorceo="";
}
if($totalprecioquinceo==0){
    $totalprecioquinceo="";
}
if($totalpreciodieciseiso==0){
    $totalpreciodieciseiso="";
}
if($totalpreciodiecisieteo==0){
    $totalpreciodiecisieteo="";
}
if($totalpreciodieciochoo==0){
    $totalpreciodieciochoo="";
}
if($totalpreciodiecinueveo==0){
    $totalpreciodiecinueveo="";
}
if($totalprecioveinteo==0){
    $totalprecioveinteo="";
}
if($totalprecioveintiunoo==0){
    $totalprecioveintiunoo="";
}
if($totalprecioveintidoso==0){
    $totalprecioveintidoso="";
}
if($totalprecioveintitreso==0){
    $totalprecioveintitreso="";
}
if($totalprecioveinticuatroo==0){
    $totalprecioveinticuatroo="";
}
if($totalprecioveinticincoo==0){
    $totalprecioveinticincoo="";
}
if($totalprecioveintiseiso==0){
    $totalprecioveintiseiso="";
}
if($totalprecioveintisieteo==0){
    $totalprecioveintisieteo="";
}
if($totalprecioveintiochoo==0){
    $totalprecioveintiochoo="";
}
if($totalprecioveintinueveo==0){
    $totalprecioveintinueveo="";
}
if($totalpreciotreintao==0){
    $totalpreciotreintao="";
}

if($unoo==0){
    $unoo="";
}
if($doso==0){
    $doso="";
}
if($treso==0){
    $treso="";
}
if($cuatroo==0){
    $cuatroo="";
}
if($cincoo==0){
    $cincoo="";
}
if($seiso==0){
    $seiso="";
}
if($sieteo==0){
    $sieteo="";
}
if($ochoo==0){
    $ochoo="";
}
if($nueveo==0){
    $nueveo="";
}
if($diezo==0){
    $diezo="";
}
if($onceo==0){
    $onceo="";
}
if($doceo==0){
    $doceo="";
}
if($treceo==0){
    $treceo="";
}
if($catorceo==0){
    $catorceo="";
}
if($quinceo==0){
    $quinceo="";
}
if($dieciseiso==0){
    $dieciseiso="";
}
if($diecisieteo==0){
    $diecisieteo="";
}
if($dieciochoo==0){
    $dieciochoo="";
}
if($diecinueveo==0){
    $diecinueveo="";
}
if($veinteo==0){
    $veinteo="";
}
if($veintiunoo==0){
    $veintiunoo="";
}
if($veintidoso==0){
    $veintidoso="";
}
if($veintitreso==0){
    $veintitreso="";
}
if($veinticuatroo==0){
    $veinticuatroo="";
}
if($veinticincoo==0){
    $veinticincoo="";
}
if($veintiseiso==0){
    $veintiseiso="";
}
if($veintisieteo==0){
    $veintisieteo="";
}
if($veintiochoo==0){
    $veintiochoo="";
}
if($veintinueveo==0){
    $veintinueveo="";
}
if($treintao==0){
    $treintao="";
}

if($preciounoo=0){
    $preciounoo="";
}
if($preciodoso=0){
    $preciodoso="";
}
if($preciotreso=0){
    $preciotreso="";
}
if($preciocuatroo=0){
    $preciocuatroo="";
}
if($preciocincoo=0){
    $preciocincoo="";
}
if($precioseiso=0){
    $precioseiso="";
}
if($preciosieteo=0){
    $preciosieteo="";
}
if($precioochoo=0){
    $precioochoo="";
}
if($precionueveo=0){
    $precionueveo="";
}
if($preciodiezo=0){
    $preciodiezo="";
}
if($precioonceo=0){
    $precioonceo="";
}
if($preciodoceo=0){
    $preciodoceo="";
}
if($preciotreceo=0){
    $preciotreceo="";
}
if($preciocatorceo=0){
    $preciocatorceo="";
}
if($precioquinceo=0){
    $precioquinceo="";
}
if($preciodieciseiso=0){
    $preciodieciseiso="";
}
if($preciodiecisieteo=0){
    $preciodiecisieteo="";
}
if($preciodieciochoo=0){
    $preciodieciochoo="";
}
if($preciodiecinueveo=0){
    $preciodiecinueveo="";
}
if($precioveinteo=0){
    $precioveinteo="";
}
if($precioveintiunoo=0){
    $precioveintiunoo="";
}
if($precioveintidoso=0){
    $precioveintidoso="";
}
if($precioveintitreso=0){
    $precioveintitreso="";
}
if($precioveinticuatroo=0){
    $precioveinticuatroo="";
}
if($precioveinticincoo=0){
    $precioveinticincoo="";
}
if($precioveintiseiso=0){
    $precioveintiseiso="";
}
if($precioveintisieteo=0){
    $precioveintisieteo="";
}
if($precioveintiochoo=0){
    $precioveintiochoo="";
}
if($precioveintinueveo=0){
    $precioveintinueveo="";
}
if($preciotreintao=0){
    $preciotreintao="";
}

//CAPILARES//
if($totalpreciounoca==0){
    $totalpreciounoca="";
}
if($totalpreciodosca==0){
    $totalpreciodosca="";
}
if($totalpreciotresca==0){
    $totalpreciotresca="";
}
if($totalpreciocuatroca==0){
    $totalpreciocuatroca="";
}
if($totalpreciocincoca==0){
    $totalpreciocincoca="";
}
if($totalprecioseisca==0){
    $totalprecioseisca="";
}
if($totalpreciosieteca==0){
    $totalpreciosieteca="";
}
if($totalprecioochoca==0){
    $totalprecioochoca="";
}
if($totalprecionueveca==0){
    $totalprecionueveca="";
}
if($totalpreciodiezca==0){
    $totalpreciodiezca="";
}
if($totalprecioonceca==0){
    $totalprecioonceca="";
}
if($totalpreciodoceca==0){
    $totalpreciodoceca="";
}
if($totalpreciotrececa==0){
    $totalpreciotrececa="";
}
if($totalpreciocatorceca==0){
    $totalpreciocatorceca="";
}
if($totalprecioquinceca==0){
    $totalprecioquinceca="";
}
if($totalpreciodieciseisca==0){
    $totalpreciodieciseisca="";
}
if($totalpreciodiecisieteca==0){
    $totalpreciodiecisieteca="";
}
if($totalpreciodieciochoca==0){
    $totalpreciodieciochoca="";
}
if($totalpreciodiecinueveca==0){
    $totalpreciodiecinueveca="";
}
if($totalprecioveinteca==0){
    $totalprecioveinteca="";
}
if($totalprecioveintiunoca==0){
    $totalprecioveintiunoca="";
}
if($totalprecioveintidosca==0){
    $totalprecioveintidosca="";
}
if($totalprecioveintitresca==0){
    $totalprecioveintitresca="";
}
if($totalprecioveinticuatroca==0){
    $totalprecioveinticuatroca="";
}
if($totalprecioveinticincoca==0){
    $totalprecioveinticincoca="";
}
if($totalprecioveintiseisca==0){
    $totalprecioveintiseisca="";
}
if($totalprecioveintisieteca==0){
    $totalprecioveintisieteca="";
}
if($totalprecioveintiochoca==0){
    $totalprecioveintiochoca="";
}
if($totalprecioveintinueveca==0){
    $totalprecioveintinueveca="";
}
if($totalpreciotreintaca==0){
    $totalpreciotreintaca="";
}
//IDEM TOTALPRECIO==0//
if($unoca==0){
    $unoca="";
}
if($dosca==0){
    $dosca="";
}
if($tresca==0){
    $tresca="";
}
if($cuatroca==0){
    $cuatroca="";
}
if($cincoca==0){
    $cincoca="";
}
if($seisca==0){
    $seisca="";
}
if($sieteca==0){
    $sieteca="";
}
if($ochoca==0){
    $ochoca="";
}
if($nueveca==0){
    $nueveca="";
}
if($diezca==0){
    $diezca="";
}
if($onceca==0){
    $onceca="";
}
if($doceca==0){
    $doceca="";
}
if($trececa==0){
    $trececa="";
}
if($catorceca==0){
    $catorceca="";
}
if($quinceca==0){
    $quinceca="";
}
if($dieciseisca==0){
    $dieciseisca="";
}
if($diecisieteca==0){
    $diecisieteca="";
}
if($dieciochoca==0){
    $dieciochoca="";
}
if($diecinueveca==0){
    $diecinueveca="";
}
if($veinteca==0){
    $veinteca="";
}
if($veintiunoca==0){
    $veintiunoca="";
}
if($veintidosca==0){
    $veintidosca="";
}
if($veintitresca==0){
    $veintitresca="";
}
if($veinticuatroca==0){
    $veinticuatroca="";
}
if($veinticincoca==0){
    $veinticincoca="";
}
if($veintiseisca==0){
    $veintiseisca="";
}
if($veintisieteca==0){
    $veintisieteca="";
}
if($veintiochoca==0){
    $veintiochoca="";
}
if($veintinueveca==0){
    $veintinueveca="";
}
if($treintaca==0){
    $treintaca="";
}
//IDEM TOTALPRECIO==0//
if($preciounoca=0){
    $preciounoca="";
}
if($preciodosca=0){
    $preciodosca="";
}
if($preciotresca=0){
    $preciotresca="";
}
if($preciocuatroca=0){
    $preciocuatroca="";
}
if($preciocincoca=0){
    $preciocincoca="";
}
if($precioseisca=0){
    $precioseisca="";
}
if($preciosieteca=0){
    $preciosieteca="";
}
if($precioochoca=0){
    $precioochoca="";
}
if($precionueveca=0){
    $precionueveca="";
}
if($preciodiezca=0){
    $preciodiezca="";
}
if($precioonceca=0){
    $precioonceca="";
}
if($preciodoceca=0){
    $preciodoceca="";
}
if($preciotrececa=0){
    $preciotrececa="";
}
if($preciocatorceca=0){
    $preciocatorceca="";
}
if($precioquinceca=0){
    $precioquinceca="";
}
if($preciodieciseisca=0){
    $preciodieciseisca="";
}
if($preciodiecisieteca=0){
    $preciodiecisieteca="";
}
if($preciodieciochoca=0){
    $preciodieciochoca="";
}
if($preciodiecinueveca=0){
    $preciodiecinueveca="";
}
if($precioveinteca=0){
    $precioveinteca="";
}
if($precioveintiunoca=0){
    $precioveintiunoca="";
}
if($precioveintidosca=0){
    $precioveintidosca="";
}
if($precioveintitresca=0){
    $precioveintitresca="";
}
if($precioveinticuatroca=0){
    $precioveinticuatroca="";
}
if($precioveinticincoca=0){
    $precioveinticincoca="";
}
if($precioveintiseisca=0){
    $precioveintiseisca="";
}
if($precioveintisieteca=0){
    $precioveintisieteca="";
}
if($precioveintiochoca=0){
    $precioveintiochoca="";
}
if($precioveintinueveca=0){
    $precioveintinueveca="";
}
if($preciotreintaca=0){
    $preciotreintaca="";
}
//FIN CAPILARES//

//CORPORALES//
if($totalpreciounoco==0){
    $totalpreciounoco="";
}
if($totalpreciodosco==0){
    $totalpreciodosco="";
}
if($totalpreciotresco==0){
    $totalpreciotresco="";
}
if($totalpreciocuatroco==0){
    $totalpreciocuatroco="";
}
if($totalpreciocincoco==0){
    $totalpreciocincoco="";
}
if($totalprecioseisco==0){
    $totalprecioseisco="";
}
if($totalpreciosieteco==0){
    $totalpreciosieteco="";
}
if($totalprecioochoco==0){
    $totalprecioochoco="";
}
if($totalprecionueveco==0){
    $totalprecionueveco="";
}
if($totalpreciodiezco==0){
    $totalpreciodiezco="";
}
if($totalprecioonceco==0){
    $totalprecioonceco="";
}
if($totalpreciodoceco==0){
    $totalpreciodoceco="";
}
if($totalpreciotrececo==0){
    $totalpreciotrececo="";
}
if($totalpreciocatorceco==0){
    $totalpreciocatorceco="";
}
if($totalprecioquinceco==0){
    $totalprecioquinceco="";
}
if($totalpreciodieciseisco==0){
    $totalpreciodieciseisco="";
}
if($totalpreciodiecisieteco==0){
    $totalpreciodiecisieteco="";
}
if($totalpreciodieciochoco==0){
    $totalpreciodieciochoco="";
}
if($totalpreciodiecinueveco==0){
    $totalpreciodiecinueveco="";
}
if($totalprecioveinteco==0){
    $totalprecioveinteco="";
}
if($totalprecioveintiunoco==0){
    $totalprecioveintiunoco="";
}
if($totalprecioveintidosco==0){
    $totalprecioveintidosco="";
}
if($totalprecioveintitresco==0){
    $totalprecioveintitresco="";
}
if($totalprecioveinticuatroco==0){
    $totalprecioveinticuatroco="";
}
if($totalprecioveinticincoco==0){
    $totalprecioveinticincoco="";
}
if($totalprecioveintiseisco==0){
    $totalprecioveintiseisco="";
}
if($totalprecioveintisieteco==0){
    $totalprecioveintisieteco="";
}
if($totalprecioveintiochoco==0){
    $totalprecioveintiochoco="";
}
if($totalprecioveintinueveco==0){
    $totalprecioveintinueveco="";
}
if($totalpreciotreintaco==0){
    $totalpreciotreintaco="";
}
//IDEM TOTALPRECIO==0//
if($unoco==0){
    $unoco="";
}
if($dosco==0){
    $dosco="";
}
if($tresco==0){
    $tresco="";
}
if($cuatroco==0){
    $cuatroco="";
}
if($cincoco==0){
    $cincoco="";
}
if($seisco==0){
    $seisco="";
}
if($sieteco==0){
    $sieteco="";
}
if($ochoco==0){
    $ochoco="";
}
if($nueveco==0){
    $nueveco="";
}
if($diezco==0){
    $diezco="";
}
if($onceco==0){
    $onceco="";
}
if($doceco==0){
    $doceco="";
}
if($trececo==0){
    $trececo="";
}
if($catorceco==0){
    $catorceco="";
}
if($quinceco==0){
    $quinceco="";
}
if($dieciseisco==0){
    $dieciseisco="";
}
if($diecisieteco==0){
    $diecisieteco="";
}
if($dieciochoco==0){
    $dieciochoco="";
}
if($diecinueveco==0){
    $diecinueveco="";
}
if($veinteco==0){
    $veinteco="";
}
if($veintiunoco==0){
    $veintiunoco="";
}
if($veintidosco==0){
    $veintidosco="";
}
if($veintitresco==0){
    $veintitresco="";
}
if($veinticuatroco==0){
    $veinticuatroco="";
}
if($veinticincoco==0){
    $veinticincoco="";
}
if($veintiseisco==0){
    $veintiseisco="";
}
if($veintisieteco==0){
    $veintisieteco="";
}
if($veintiochoco==0){
    $veintiochoco="";
}
if($veintinueveco==0){
    $veintinueveco="";
}
if($treintaco==0){
    $treintaco="";
}
//IDEM TOTALPRECIO==0//
if($preciounoco=0){
    $preciounoco="";
}
if($preciodosco=0){
    $preciodosco="";
}
if($preciotresco=0){
    $preciotresco="";
}
if($preciocuatroco=0){
    $preciocuatroco="";
}
if($preciocincoco=0){
    $preciocincoco="";
}
if($precioseisco=0){
    $precioseisco="";
}
if($preciosieteco=0){
    $preciosieteco="";
}
if($precioochoco=0){
    $precioochoco="";
}
if($precionueveco=0){
    $precionueveco="";
}
if($preciodiezco=0){
    $preciodiezco="";
}
if($precioonceco=0){
    $precioonceco="";
}
if($preciodoceco=0){
    $preciodoceco="";
}
if($preciotrececo=0){
    $preciotrececo="";
}
if($preciocatorceco=0){
    $preciocatorceco="";
}
if($precioquinceco=0){
    $precioquinceco="";
}
if($preciodieciseisco=0){
    $preciodieciseisco="";
}
if($preciodiecisieteco=0){
    $preciodiecisieteco="";
}
if($preciodieciochoco=0){
    $preciodieciochoco="";
}
if($preciodiecinueveco=0){
    $preciodiecinueveco="";
}
if($precioveinteco=0){
    $precioveinteco="";
}
if($precioveintiunoco=0){
    $precioveintiunoco="";
}
if($precioveintidosco=0){
    $precioveintidosco="";
}
if($precioveintitresco=0){
    $precioveintitresco="";
}
if($precioveinticuatroco=0){
    $precioveinticuatroco="";
}
if($precioveinticincoco=0){
    $precioveinticincoco="";
}
if($precioveintiseisco=0){
    $precioveintiseisco="";
}
if($precioveintisieteco=0){
    $precioveintisieteco="";
}
if($precioveintiochoco=0){
    $precioveintiochoco="";
}
if($precioveintinueveco=0){
    $precioveintinueveco="";
}
if($preciotreintaco=0){
    $preciotreintaco="";
}
//FIN CORPORALES//
        return view('final',compact('preciom','cantidadm','cantidadmm','productom','precioa','cantidada','cantidadaa','productoa',
          'precioo','cantidado','cantidadoo','productoo','precioca','cantidadca','cantidadcaca','productoca','productosmujeres','productosprincipales','productosadultos','productosbucales','productoscapilares','productoscorporales','constante','nombre','whatsapp','totalapagar','productouno','uno','preciouno','totalpreciouno','pirceuno',
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
'productotreinta','treinta','preciotreinta','totalpreciotreinta','pircetreinta',
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
'productotreintam','treintam','preciotreintam','totalpreciotreintam','pircetreintam',
'productounoa','unoa','preciounoa','totalpreciounoa','pirceunoa',
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
'productotreintaa','treintaa','preciotreintaa','totalpreciotreintaa','pircetreintaa','productounoo','unoo','preciounoo','totalpreciounoo','pirceunoo','productodoso','doso','preciodoso','totalpreciodoso','pircedoso','productotreso','treso','preciotreso','totalpreciotreso','pircetreso',
'productocuatroo','cuatroo','preciocuatroo','totalpreciocuatroo','pircecuatroo','productocincoo','cincoo','preciocincoo','totalpreciocincoo','pircecincoo','productoseiso','seiso','precioseiso','totalprecioseiso','pirceseiso','productosieteo','sieteo','preciosieteo','totalpreciosieteo','pircesieteo','productoochoo','ochoo','precioochoo','totalprecioochoo','pirceochoo','productonueveo','nueveo','precionueveo','totalprecionueveo','pircenueveo','productodiezo','diezo','preciodiezo','totalpreciodiezo','pircediezo','productoonceo','onceo','precioonceo','totalprecioonceo','pirceonceo','productodoceo','doceo','preciodoceo','totalpreciodoceo','pircedoceo','productotreceo','treceo','preciotreceo','totalpreciotreceo','pircetreceo','productocatorceo','catorceo','preciocatorceo','totalpreciocatorceo','pircecatorceo','productoquinceo','quinceo','precioquinceo','totalprecioquinceo','pircequinceo',
'productodieciseiso','dieciseiso','preciodieciseiso','totalpreciodieciseiso','pircedieciseiso','productodiecisieteo','diecisieteo','preciodiecisieteo','totalpreciodiecisieteo','pircediecisieteo','productodieciochoo','dieciochoo','preciodieciochoo','totalpreciodieciochoo','pircedieciochoo',
'productodiecinueveo','diecinueveo','preciodiecinueveo',
'totalpreciodiecinueveo','pircediecinueveo','productoveinteo','veinteo','precioveinteo','totalprecioveinteo','pirceveinteo',
'productoveintiunoo','veintiunoo','precioveintiunoo','totalprecioveintiunoo','pirceveintiunoo','productoveintidoso','veintidoso','precioveintidoso','totalprecioveintidoso','pirceveintidoso','productoveintitreso','veintitreso','precioveintitreso','totalprecioveintitreso','pirceveintitreso',
'productoveinticuatroo','veinticuatroo','precioveinticuatroo','totalprecioveinticuatroo','pirceveinticuatroo','productoveinticincoo','veinticincoo','precioveinticincoo','totalprecioveinticincoo','pirceveinticincoo','productoveintiseiso','veintiseiso','precioveintiseiso','totalprecioveintiseiso','pirceveintiseiso','productoveintisieteo','veintisieteo','precioveintisieteo','totalprecioveintisieteo','pirceveintisieteo','productoveintiochoo','veintiochoo','precioveintiochoo','totalprecioveintiochoo','pirceveintiochoo','productoveintinueveo','veintinueveo','precioveintinueveo','totalprecioveintinueveo','pirceveintinueveo','productotreintao','treintao','preciotreintao','totalpreciotreintao','pircetreintao','sumatotal','productounoca','unoca','totalpreciounoca','pirceunoca','productounoca',
'productodosca','dosca','preciodosca','totalpreciodosca','pircedosca',
'productotresca','tresca','preciotresca','totalpreciotresca','pircetresca',
'productocuatroca','cuatroca','preciocuatroca','totalpreciocuatroca','pircecuatroca',
'productocincoca','cincoca','preciocincoca','totalpreciocincoca','pircecincoca',
'productoseisca','seisca','precioseisca','totalprecioseisca','pirceseisca',
'productosieteca','sieteca','preciosieteca','totalpreciosieteca','pircesieteca',
'productoochoca','ochoca','precioochoca','totalprecioochoca','pirceochoca',
'productonueveca','nueveca','precionueveca','totalprecionueveca','pircenueveca',
'productodiezca','diezca','preciodiezca','totalpreciodiezca','pircediezca',
'productoonceca','onceca','precioonceca','totalprecioonceca','pirceonceca',
'productodoceca','doceca','preciodoceca','totalpreciodoceca','pircedoceca',
'productotrececa','trececa','preciotrececa','totalpreciotrececa','pircetrececa',
'productocatorceca','catorceca','preciocatorceca','totalpreciocatorceca','pircecatorceca',
'productoquinceca','quinceca','precioquinceca','totalprecioquinceca','pircequinceca',
'productodieciseisca','dieciseisca','preciodieciseisca','totalpreciodieciseisca','pircedieciseisca',
'productodiecisieteca','diecisieteca','preciodiecisieteca','totalpreciodiecisieteca','pircediecisieteca',
'productodieciochoca','dieciochoca','preciodieciochoca','totalpreciodieciochoca','pircedieciochoca',
'productodiecinueveca','diecinueveca','preciodiecinueveca','totalpreciodiecinueveca','pircediecinueveca',
'productoveinteca','veinteca','precioveinteca','totalprecioveinteca','pirceveinteca',
'productoveintiunoca','veintiunoca','precioveintiunoca','totalprecioveintiunoca','pirceveintiunoca',
'productoveintidosca','veintidosca','precioveintidosca','totalprecioveintidosca','pirceveintidosca',
'productoveintitresca','veintitresca','precioveintitresca','totalprecioveintitresca','pirceveintitresca',
'productoveinticuatroca','veinticuatroca','precioveinticuatroca','totalprecioveinticuatroca','pirceveinticuatroca',
'productoveinticincoca','veinticincoca','precioveinticincoca','totalprecioveinticincoca','pirceveinticincoca',
'productoveintiseisca','veintiseisca','precioveintiseisca','totalprecioveintiseisca','pirceveintiseisca',
'productoveintisieteca','veintisieteca','precioveintisieteca','totalprecioveintisieteca','pirceveintisieteca',
'productoveintiochoca','veintiochoca','precioveintiochoca','totalprecioveintiochoca','pirceveintiochoca',
'productoveintinueveca','veintinueveca','precioveintinueveca','totalprecioveintinueveca','pirceveintinueveca',
'productotreintaca','treintaca','preciotreintaca','totalpreciotreintaca','pircetreintaca','productounoco','unoco','totalpreciounoco','pirceunoco','productounoco',
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
'productotreintaco','treintaco','preciotreintaco','totalpreciotreintaco','pircetreintaco'

));

      
});

//VIEWS EDITAR//
//EDITAR MUJERES//
Route::get("/mujeresedit",function(){
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


      
      return view('mujeresedit',compact('constante','productos','nombre','whatsapp','totalapagarmujeres',
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

/*Route::get("/mujereseditar",function(){
$productos= App\Mujer::all();


 foreach ($productos as $producto) {
  //TRAER DEL FORM NUEVOS PRECIOS Y NUEVOS NOMBRE DE PRODUCTO//


$productodescripcion=$producto->NombreProducto;
$productoprecio=$producto->NombrePrecio;
$productoimage=$producto->image;

if(!empty($_GET["$productodescripcion"])){
 $$productodescripcion=$_GET["$productodescripcion"];//$productounom
  DB::table('mujeres')
    ->where('id',$_GET["id"])
    ->update(['DescripcionProducto' =>$$productodescripcion]);

    

}


if(!empty($_GET["$productoprecio"])){
 $$productoprecio=$_GET["$productoprecio"];//$preciounom
  DB::table('mujeres')
    ->where('id',$_GET["id"])
    ->update(['Precio' =>$$productoprecio]);



}

}
  return view("/mujeresedit",compact("productos"));

  });*/


Route::post("/mujereseditar","EditmujerController@editarproducto");
//FIN EDITAR MUJERES//
//EDITAR PERFUMERIA(QUEDATE EN CASA)//

Route::get("/perfumeriaedit",function(){
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
       return view('perfumeriaedit',compact('constante','productos','nombre','whatsapp','totalapagarprincipal','productouno','uno','preciouno','totalpreciouno','pirceuno',
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

Route::post("/perfumeriaeditar","EditperfumeriaController@editarproducto");
//FIN EDITAR PERFUMERIA (QUEDATE EN CASA)//
//EDITAR ADULTOS//

Route::get("/adultosedit",function(){
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



      
      return view('adultosedit',compact('constante','productos','nombre','whatsapp','totalapagaradultos',
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

Route::post("/adultoseditar","EditadultosController@editarproducto");
//FIN EDITAR ADULTOS//
//EDITAR 
Route::get("/bucalesedit",function(){
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


      
      return view('bucalesedit',compact('constante','productos','nombre','whatsapp','totalapagarbucales','unoo','preciounoo','totalpreciounoo','pirceunoo','productodoso','doso','preciodoso','totalpreciodoso','pircedoso','productotreso','treso','preciotreso','totalpreciotreso','pircetreso','productocuatroo','cuatroo','preciocuatroo','totalpreciocuatroo','pircecuatroo','productocincoo','cincoo','preciocincoo','totalpreciocincoo','pircecincoo',
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
Route::post("/bucaleseditar","EditbucalesController@editarproducto");

Route::get("/capilaresedit",function(){
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


      
      return view('capilaresedit',compact('constante','productos','nombre','whatsapp','totalapagarbucales','unoca','preciounoca',
        'totalpreciounoca','pirceunoca','productodosca','dosca','preciodosca','totalpreciodosca','pircedosca','productotresca','tresca',
        'preciotresca','totalpreciotresca','pircetresca','productocuatroca',
        'cuatroca','preciocuatroca','totalpreciocuatroca','pircecuatroca',
        'productocincoca','cincoca','preciocincoca','totalpreciocincoca',
        'pircecincoca',
'productoseisca','seisca','precioseisca','totalprecioseisca','pirceseisca',
'productosieteca','sieteca','preciosieteca','totalpreciosieteca',
'pircesieteca',
'productoochoca','ochoca','precioochoca','totalprecioochoca','pirceochoca',
'productonueveca','nueveca','precionueveca','totalprecionueveca',
'pircenueveca',
'productodiezca','diezca','preciodiezca','totalpreciodiezca','pircediezca',
'productoonceca','onceca','precioonceca','totalprecioonceca','pirceonceca',
'productodoceca','doceca','preciodoceca','totalpreciodoceca','pircedoceca',
'productotrececa','trececa','preciotrececa','totalpreciotrececa',
'pircetrececa',
'productocatorceca','catorceca','preciocatorceca','totalpreciocatorceca',
'pircecatorceca','productoquinceca','quinceca','precioquinceca',
'totalprecioquinceca','pircequinceca','productodieciseisca','dieciseisca',
'preciodieciseisca','totalpreciodieciseisca','pircedieciseisca',
'productodiecisieteca','diecisieteca','preciodiecisieteca',
'totalpreciodiecisieteca','pircediecisieteca','productodieciochoca',
'dieciochoca','preciodieciochoca','totalpreciodieciochoca',
'pircedieciochoca',
'productodiecinueveca','diecinueveca','preciodiecinueveca',
'totalpreciodiecinueveca','pircediecinueveca','productoveinteca','veinteca','precioveinteca','totalprecioveinteca','pirceveinteca','productoveintiunoca','veintiunoca','precioveintiunoca','totalprecioveintiunoca',
'pirceveintiunoca',
'productoveintidosca','veintidosca','precioveintidosca',
'totalprecioveintidosca','pirceveintidosca','productoveintitresca',
'veintitresca','precioveintitresca','totalprecioveintitresca',
'pirceveintitresca','productoveinticuatroca','veinticuatroca',
'precioveinticuatroca','totalprecioveinticuatroca','pirceveinticuatroca',
'productoveinticincoca','veinticincoca','precioveinticincoca',
'totalprecioveinticincoca','pirceveinticincoca',
'productoveintiseisca','veintiseisca','precioveintiseisca',
'totalprecioveintiseisca','pirceveintiseisca','productoveintisieteca',
'veintisieteca','precioveintisieteca','totalprecioveintisieteca',
'pirceveintisieteca','productoveintiochoca','veintiochoca',
'precioveintiochoca','totalprecioveintiochoca','pirceveintiochoca',
'productoveintinueveca','veintinueveca','precioveintinueveca',
'totalprecioveintinueveca','pirceveintinueveca','productotreintaca',
'treintaca','preciotreintaca','totalpreciotreintaca','pircetreintaca'));
});

Route::post("/capilareseditar","EditcapilaresController@editarproducto");

Route::get("/corporalesedit",function(){
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


      
      return view('corporalesedit',compact('constante','productos','nombre','whatsapp','totalapagarcorporales','productounoco','unoco','preciounoco','totalpreciounoco','pirceunoco',
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
'productoveinteco','veinteco','precioveinteco','totalprecioveinteco',
'pirceveinteco','productoveintiunoco','veintiunoco','precioveintiunoco',
'totalprecioveintiunoco','pirceveintiunoco',
'productoveintidosco','veintidosco','precioveintidosco',
'totalprecioveintidosco','pirceveintidosco',
'productoveintitresco','veintitresco','precioveintitresco',
'totalprecioveintitresco','pirceveintitresco',
'productoveinticuatroco','veinticuatroco','precioveinticuatroco',
'totalprecioveinticuatroco','pirceveinticuatroco',
'productoveinticincoco','veinticincoco','precioveinticincoco',
'totalprecioveinticincoco','pirceveinticincoco',
'productoveintiseisco','veintiseisco','precioveintiseisco',
'totalprecioveintiseisco','pirceveintiseisco',
'productoveintisieteco','veintisieteco','precioveintisieteco',
'totalprecioveintisieteco','pirceveintisieteco',
'productoveintiochoco','veintiochoco','precioveintiochoco',
'totalprecioveintiochoco','pirceveintiochoco',
'productoveintinueveco','veintinueveco','precioveintinueveco',
'totalprecioveintinueveco','pirceveintinueveco',
'productotreintaco','treintaco','preciotreintaco','totalpreciotreintaco',
'pircetreintaco'));
});

Route::post("/corporaleseditar","EditcorporalesController@editarproducto");
