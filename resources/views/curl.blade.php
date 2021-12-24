<?php 
$html = file_get_contents('https://supermercado.carrefour.com.ar/catalogsearch/result/?q=atun+la+campagnola'); //Convierte la información de la URL en cadena
echo $html;
?>