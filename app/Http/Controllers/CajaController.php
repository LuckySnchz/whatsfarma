<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caja;

class CajaController extends Controller
{
    public function abrircaja(Request $form){



$caja= new Caja();

$caja->Cajainicial= $_POST["iniciocaja"];
$caja->Cincuentacentavos= $_POST["cincuentacentavos"];
$caja->Unpeso= $_POST["unpeso"];
$caja->Dospesos= $_POST["dospesos"];
$caja->Cincopesos= $_POST["cincopesos"];
$caja->Diezpesos= $_POST["diezpesos"];
$caja->Veintepesos= $_POST["veintepesos"];
$caja->Cincuentapesos= $_POST["cincuentapesos"];
$caja->Cienpesos= $_POST["cienpesos"];
$caja->Doscientopesos= $_POST["doscientospesos"];
$caja->Quinientospesos= $_POST["quinientospesos"];
$caja->Milpesos= $_POST["milpesos"];
$caja->Cajafinal= $_POST["finalcaja"];

 $caja->save();

$Caja_id = $caja->id;
session(["Caja_id" => $Caja_id]);
 return view("/contafarm");




    }
}
