<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Ddvi;
use App\Septum;
use App\Vaorticat;
use App\Vpulmonart;
use App\Vmitralt;
use App\Vtricuspidet;
use App\Ventriculoizquierdo;
use App\Auriculaizquierda;
use App\Vmitral;
use App\Vaortica;
use App\Aortaascendente;
use App\Cavidadderecha;
use App\Fsvd;
use App\Arteriapulmonar;
use App\Vpulmonar;
use App\Vtricuspide;
use App\Pericardio;


class InformeController extends Controller
{
    public function informar(Request $form){  

$ddvi= new Ddvi();

$ddvi->Ddvi= $_POST["ddvi"];
$ddvi->Dsvi= $_POST["dsvi"];
$ddvi->Fey= $_POST["fey"];
$ddvi->Factext= $_POST["factext"];
$ddvi->IdPaciente=session('IdPaciente');

 $ddvi->save();

$septum= new Septum();

$septum->Septum= $_POST["septum"];
$septum->Pp= $_POST["pp"];
$septum->Ao= $_POST["ao"];
$septum->Aitabla= $_POST["aitabla"];
$septum->Vd= $_POST["vd"];
$septum->IdPaciente=session('IdPaciente');

 $septum->save();

 $vaorticat= new Vaorticat();

$vaorticat->Aorticavelpico= $_POST["aorticavelpico"];
$vaorticat->Aorticapico= $_POST["aorticapico"];
$vaorticat->Aorticamedio= $_POST["aorticamedio"];
$vaorticat->Aorticaarea= $_POST["aorticaarea"];
$vaorticat->Aorticainsuficiencia= $_POST["aorticainsuficiencia"];
$vaorticat->IdPaciente=session('IdPaciente');

 $vaorticat->save();


 $vpulmonart= new Vpulmonart();

$vpulmonart->Pulmonarvelpico= $_POST["pulmonarvelpico"];
$vpulmonart->Pulmonarpico= $_POST["pulmonarpico"];
$vpulmonart->Pulmonarmedio= $_POST["pulmonarmedio"];
$vpulmonart->Pulmonararea= $_POST["pulmonararea"];
$vpulmonart->Pulmonarinsuficiencia= $_POST["pulmonarinsuficiencia"];
$vpulmonart->IdPaciente=session('IdPaciente');

 $vpulmonart->save();

  $vmitralt= new Vmitralt();

$vmitralt->Mitralvelpicoa= $_POST["mitralvelpicoa"];
$vmitralt->Mitralvelpicoe= $_POST["mitralvelpicoe"];
$vmitralt->Mitralpico= $_POST["mitralpico"];
$vmitralt->Mitralmedio= $_POST["mitralmedio"];
$vmitralt->Mitralarea= $_POST["mitralarea"];
$vmitralt->Mitralinsuficiencia= $_POST["mitralinsuficiencia"];
$vmitralt->IdPaciente=session('IdPaciente');

 $vmitralt->save();

 $vtricuspidet= new Vtricuspidet();

$vtricuspidet->Tricuspidevelpicoa= $_POST["tricuspidevelpicoa"];
$vtricuspidet->Tricuspidevelpicoe= $_POST["tricuspidevelpicoe"];
$vtricuspidet->Tricuspidepico= $_POST["tricuspidepico"];
$vtricuspidet->Tricuspidemedio= $_POST["tricuspidemedio"];
$vtricuspidet->Tricuspidearea= $_POST["tricuspidearea"];
$vtricuspidet->Tricuspideinsuficiencia= $_POST["tricuspideinsuficiencia"];
$vtricuspidet->IdPaciente=session('IdPaciente');

 $vtricuspidet->save();

$ventriculoizquierdo= new Ventriculoizquierdo();

$ventriculoizquierdo->EspesorParietal=$_POST["ep"];
$ventriculoizquierdo->EspesorParietalMasTexto=$_POST["epmastext"];
$ventriculoizquierdo->VentriculoIzquierdoMasTexto=$_POST["vidmastext"];
$ventriculoizquierdo->EspesorParietalDimensiones=$_POST["epd"];
$ventriculoizquierdo->AsinergiasTexto=$_POST["asinergiastext"];
$ventriculoizquierdo->MotilidadParietal=$_POST["mp"];
$ventriculoizquierdo->MotilidadParietalMasTexto=$_POST["epdmastext"];
$ventriculoizquierdo->IdPaciente=session('IdPaciente');
$ventriculoizquierdo->save();


$auriculaizquierda= new Auriculaizquierda();

$auriculaizquierda->AuriculaIzquierda=$_POST["ai"];
$auriculaizquierda->AuriculaIzquierdaLevementeAumentada=$_POST["ailevetext"];
$auriculaizquierda->AuriculaIzquierdaModeradamenteAumentada=$_POST["aimoderadatext"];
$auriculaizquierda->AuriculaIzquierdaSeveramenteAumentada=$_POST["aiseveratext"];
$auriculaizquierda->AuriculaIzquierdaMasTexto=$_POST["aimastext"];
$auriculaizquierda->IdPaciente=session('IdPaciente');

$auriculaizquierda->save();

$valvulamitral= new Vmitral();
$valvulamitral->EstructuraReurgitaciones=$_POST["vm"];
$valvulamitral->ValvulaMitralMasTetxo=$_POST["vmmastext"];
$valvulamitral->IdPaciente=session('IdPaciente');

$valvulamitral->save();

$valvulaaortica= new Vaortica();
$valvulaaortica->EstructuraReurgitaciones=$_POST["va"];
$valvulaaortica->ValvulaAorticaMasTetxo=$_POST["vamastext"];
$valvulaaortica->IdPaciente=session('IdPaciente');

$valvulaaortica->save();

$aortaascendente= new Aortaascendente();
$aortaascendente->Diametros=$_POST["aa"];
$aortaascendente->AortaAscendenteMasTetxo=$_POST["aamastext"];
$aortaascendente->IdPaciente=session('IdPaciente');

$aortaascendente->save();

$cavidadesderechas= new Cavidadderecha();
$cavidadesderechas->Dimensiones=$_POST["cd"];
$cavidadesderechas->CavidadesDerechasMasTetxo=$_POST["cdmastext"];
$cavidadesderechas->IdPaciente=session('IdPaciente');

$cavidadesderechas->save();

$funcionsistolicaventriculoderecho= new Fsvd();
$funcionsistolicaventriculoderecho->FuncionSistolicaVentriculoDerecho=$_POST["fs"];
$funcionsistolicaventriculoderecho->FuncionSistolicaVentriculoDerechoNormal=$_POST["fsnormaltext"];
$funcionsistolicaventriculoderecho->FuncionSistolicaVentriculoDerechoDeprimida=$_POST["fsdeprimidatext"];
$funcionsistolicaventriculoderecho->FuncionSistolicaVentriculoDerechoMasTexto=$_POST["fsmastext"];
$funcionsistolicaventriculoderecho->IdPaciente=session('IdPaciente');

$funcionsistolicaventriculoderecho->save();


$presionsistolicaarteriapulmonar= new Arteriapulmonar();
$presionsistolicaarteriapulmonar->PresionSistolicaArteriaPulmonar=$_POST["ps"];
$presionsistolicaarteriapulmonar->Diametro=$_POST["vci"];
$presionsistolicaarteriapulmonar->DiametroDilatado=$_POST["vcid"];
$presionsistolicaarteriapulmonar->IdPaciente=session('IdPaciente');

$presionsistolicaarteriapulmonar->save();

$valvulapulmonar= new Vpulmonar();
$valvulapulmonar->EstructuraReurgitaciones=$_POST["vp"];
$valvulapulmonar->ValvulaPulmonarMasTetxo=$_POST["vpmastext"];
$valvulapulmonar->IdPaciente=session('IdPaciente');
$valvulapulmonar->save();

$valvulatricuspide= new Vtricuspide();
$valvulatricuspide->EstructuraReurgitaciones=$_POST["vt"];
$valvulatricuspide->ValvulatricuspideMasTetxo=$_POST["vtmastext"];
$valvulatricuspide->IdPaciente=session('IdPaciente');
$valvulatricuspide->save();

$pericardio= new Pericardio();
$pericardio->DerramePericardico=$_POST["pe"];
$pericardio->PericardioMasTetxo=$_POST["pemastext"];
$pericardio->IdPaciente=session('IdPaciente');
$pericardio->save();

$ddvi=$_POST["ddvi"];
$dsvi=$_POST["dsvi"];
$fey=$_POST["fey"];
$factext=$_POST["factext"];
$septum=$_POST["septum"];
$pp=$_POST["pp"];
$ao=$_POST["ao"];
$aitabla=$_POST["aitabla"];
$vd=$_POST["vd"];

$aorticavelpico=$_POST["aorticavelpico"];
$aorticapico=$_POST["aorticapico"];
$aorticamedio=$_POST["aorticamedio"];
$aorticaarea=$_POST["aorticaarea"];
$aorticainsuficiencia=$_POST["aorticainsuficiencia"];

$pulmonarvelpico=$_POST["pulmonarvelpico"];
$pulmonarpico=$_POST["pulmonarpico"];
$pulmonarmedio=$_POST["pulmonarmedio"];
$pulmonararea=$_POST["pulmonararea"];
$pulmonarinsuficiencia=$_POST["pulmonarinsuficiencia"];

$mitralvelpicoa=$_POST["mitralvelpicoa"];
$mitralvelpicoe=$_POST["mitralvelpicoe"];
$mitralpico=$_POST["mitralpico"];
$mitralmedio=$_POST["mitralmedio"];
$mitralarea=$_POST["mitralarea"];
$mitralinsuficiencia=$_POST["mitralinsuficiencia"];

$tricuspidevelpicoa=$_POST["tricuspidevelpicoa"];
$tricuspidevelpicoe=$_POST["tricuspidevelpicoe"];
$tricuspidepico=$_POST["tricuspidepico"];
$tricuspidemedio=$_POST["tricuspidemedio"];
$tricuspidearea=$_POST["tricuspidearea"];
$tricuspideinsuficiencia=$_POST["tricuspideinsuficiencia"];

//VENTRICULO IZQUIERDO//
$ep=$_POST["ep"];
$epmastext=$_POST["epmastext"];
$vidmastext=$_POST["vidmastext"];
$epd=$_POST["epd"];
$mp=$_POST["mp"];
$asinergiastext=$_POST["asinergiastext"];
$epdmastext=$_POST["epdmastext"];

//FUNCION SISTOLICA DEL VENTRICULO IZQUIERDO//
$fsvi=$_POST["fsvi"];
$fsvideprimidatext=$_POST["fsvideprimidatext"];
$fsvinormaltext=$_POST["fsvinormaltext"];
$fsvimastext=$_POST["fsvimastext"];

//AURICULA IZQUIERDA//

$ai=$_POST["ai"];
$ailevetext=$_POST["ailevetext"];
$aimoderadatext=$_POST["aimoderadatext"];
$aiseveratext=$_POST["aiseveratext"];
$aimastext=$_POST["aimastext"];

//VALVULA MITRAL//

$vm=$_POST["vm"];
$vmmastext=$_POST["vmmastext"];

//VALVULA AORTICA//

$va=$_POST["va"];
$vamastext=$_POST["vamastext"];

//VALCULA PULMONAR//

$vp=$_POST["vp"];
$vpmastext=$_POST["vpmastext"];

//VALVULA TRICUSPIDE//

$vt=$_POST["vt"];
$vtmastext=$_POST["vtmastext"];

//PERICARDIO//

$pe=$_POST["pe"];
$pemastext=$_POST["pemastext"];

//AORTA ASCENDENTE//
$aa=$_POST["aa"];
$aamastext=$_POST["aamastext"];
//CAVIDADES DERECHAS //
$cd=$_POST["cd"];
$cdmastext=$_POST["cdmastext"];


//FUNCION SISTOLICA DEL VD //

$fs=$_POST["fs"];
$fsnormaltext=$_POST["fsnormaltext"];
$fsmastext=$_POST["fsmastext"];
$fsdeprimidatext=$_POST["fsdeprimidatext"];

//PRESION SISTOLICA DE LA ARTERIA PULMONAR//
$ps=$_POST["ps"];
$psestimatext=$_POST["psestimatext"];
$vci=$_POST["vci"];
$vcid=$_POST["vcid"];
$vcimastext=$_POST["vcimastext"];

//PERICARDIO//
$pe=$_POST["pe"];
$pemastext=$_POST["pemastext"];



 $nombreyapellido=session('nombreyapellido');
 $numerodocumento=session('numerodocumento');
 $fecha=session('fecha');
 $altura=session('altura');
 $peso=session('peso');
 $supcorporaltext=session('supcorporaltext');

    //DATOS PARA EL INFORME//
    return view("/informe",compact('ep','epd','asinergiastext','mp','ai','ailevetext','aimoderadatext','aiseveratext','epmastext','epdmastext','vidmastext','fsvi','fsvideprimidatext','fsvinormaltext','fsvimastext','nombreyapellido','fecha','peso','altura','supcorporaltext','ddvi','dsvi','fey','factext','septum','pp','ao','aitabla','vd','aorticavelpico','aorticapico','aorticamedio','aorticaarea','aorticainsuficiencia','pulmonarvelpico','pulmonarpico','pulmonarmedio','pulmonararea','pulmonarinsuficiencia','mitralvelpicoe','mitralvelpicoa','mitralpico','mitralmedio','mitralarea','mitralinsuficiencia','tricuspidevelpicoe','tricuspidevelpicoa','tricuspidepico','tricuspidemedio','tricuspidearea','tricuspideinsuficiencia','ai','ailevetext','aimoderadatext','aiseveratext','aimastext','vm','vmmastext','va','vamastext','vp','vpmastext','vt','vtmastext','pe','pemastext','aa','aamastext','cd','cdmastext','fs','fsmastext','fsnormaltext','fsdeprimidatext','ps','psestimatext','vci','vcid','vcimastext','pe','pemastext'));
    
}
public function ingresar(Request $form){  
$paciente= new Paciente();

$paciente->NombreApellido= $_POST["nombreyapellido"];
$paciente->NumeroDocumento= $_POST["numerodocumento"];
$paciente->FechaEstudio= $_POST["fecha"];
$paciente->Peso= $_POST["peso"];
$paciente->Altura= $_POST["altura"];
$paciente->SuperficieCorporal= $_POST["supcorporaltext"];

 $paciente->save();

$IdPaciente=$paciente->id;
session(["IdPaciente" => $IdPaciente]);

$nombreyapellido=$_POST["nombreyapellido"];
session(["nombreyapellido" => $nombreyapellido]);


$numerodocumento=$_POST["numerodocumento"];
session(["numerodocumento" => $numerodocumento]);


$fecha=$_POST["fecha"];
session(["fecha" => $fecha]);

$altura=$_POST["altura"];
session(["altura" => $altura]);

$peso=$_POST["peso"];
session(["peso" => $peso]);

$supcorporaltext=$_POST["supcorporaltext"];
session(["supcorporaltext" => $supcorporaltext]);

$activar=1;

 return view("/infoimagenes",compact('nombreyapellido','numerodocumento','fecha','altura','supcorporaltext','peso','activar'));
 }


   public function informarprueba(Request $form){  



$nombreyapellido=$_POST["nombreyapellido"];
$fecha=$_POST["fecha"];
$peso=$_POST["peso"];
$altura=$_POST["altura"];
$supcorporaltext=$_POST["supcorporaltext"];
$ddvi=$_POST["ddvi"];
$dsvi=$_POST["dsvi"];
$fey=$_POST["fey"];
$factext=$_POST["factext"];
$septum=$_POST["septum"];
$pp=$_POST["pp"];
$ao=$_POST["ao"];
$aitabla=$_POST["aitabla"];
$vd=$_POST["vd"];

$aorticavelpico=$_POST["aorticavelpico"];
$aorticapico=$_POST["aorticapico"];
$aorticamedio=$_POST["aorticamedio"];
$aorticaarea=$_POST["aorticaarea"];
$aorticainsuficiencia=$_POST["aorticainsuficiencia"];

$pulmonarvelpico=$_POST["pulmonarvelpico"];
$pulmonarpico=$_POST["pulmonarpico"];
$pulmonarmedio=$_POST["pulmonarmedio"];
$pulmonararea=$_POST["pulmonararea"];
$pulmonarinsuficiencia=$_POST["pulmonarinsuficiencia"];

$mitralvelpicoa=$_POST["mitralvelpicoa"];
$mitralvelpicoe=$_POST["mitralvelpicoe"];
$mitralpico=$_POST["mitralpico"];
$mitralmedio=$_POST["mitralmedio"];
$mitralarea=$_POST["mitralarea"];
$mitralinsuficiencia=$_POST["mitralinsuficiencia"];

$tricuspidevelpicoa=$_POST["tricuspidevelpicoa"];
$tricuspidevelpicoe=$_POST["tricuspidevelpicoe"];
$tricuspidepico=$_POST["tricuspidepico"];
$tricuspidemedio=$_POST["tricuspidemedio"];
$tricuspidearea=$_POST["tricuspidearea"];
$tricuspideinsuficiencia=$_POST["tricuspideinsuficiencia"];

//VENTRICULO IZQUIERDO//
$ep=$_POST["ep"];
$epmastext=$_POST["epmastext"];
$vidmastext=$_POST["vidmastext"];
$epd=$_POST["epd"];
$mp=$_POST["mp"];
$asinergiastext=$_POST["asinergiastext"];
$epdmastext=$_POST["epdmastext"];

//FUNCION SISTOLICA DEL VENTRICULO IZQUIERDO//
$fsvi=$_POST["fsvi"];
$fsvideprimidatext=$_POST["fsvideprimidatext"];
$fsvinormaltext=$_POST["fsvinormaltext"];
$fsvimastext=$_POST["fsvimastext"];

//AURICULA IZQUIERDA//

$ai=$_POST["ai"];
$ailevetext=$_POST["ailevetext"];
$aimoderadatext=$_POST["aimoderadatext"];
$aiseveratext=$_POST["aiseveratext"];
$aimastext=$_POST["aimastext"];

//VALVULA MITRAL//

$vm=$_POST["vm"];
$vmmastext=$_POST["vmmastext"];

//VALVULA AORTICA//

$va=$_POST["va"];
$vamastext=$_POST["vamastext"];

//VALCULA PULMONAR//

$vp=$_POST["vp"];
$vpmastext=$_POST["vpmastext"];

//VALVULA TRICUSPIDE//

$vt=$_POST["vt"];
$vtmastext=$_POST["vtmastext"];

//PERICARDIO//

$pe=$_POST["pe"];
$pemastext=$_POST["pemastext"];

//AORTA ASCENDENTE//
$aa=$_POST["aa"];
$aamastext=$_POST["aamastext"];
//CAVIDADES DERECHAS //
$cd=$_POST["cd"];
$cdmastext=$_POST["cdmastext"];
$vci=$_POST["vci"];

$vcimastext=$_POST["vcimastext"];

//FUNCION SISTOLICA DEL VD //

$fs=$_POST["fs"];
$fsnormaltext=$_POST["fsnormaltext"];
$fsmastext=$_POST["fsmastext"];
$fsdeprimidatext=$_POST["fsdeprimidatext"];

//PRESION SISTOLICA DE LA ARTERIA PULMONAR//
$ps=$_POST["ps"];
$psestimatext=$_POST["psestimatext"];
$vci=$_POST["vci"];
$vcid=$_POST["vcid"];
$vcimastext=$_POST["vcimastext"];

$paciente= new Paciente();

$paciente->NombreApellido= $_POST["nombreyapellido"];
$paciente->NumeroDocumento= $_POST["numerodocumento"];
$paciente->FechaEstudio= $_POST["fecha"];
$paciente->Peso= $_POST["peso"];
$paciente->Altura= $_POST["altura"];
$paciente->SuperficieCorporal= $_POST["supcorporaltext"];
  
 $paciente->save();



    //DATOS PARA EL INFORME//
    return view("/informeprueba",compact('ep','epd','asinergiastext','mp','ai','ailevetext','aimoderadatext','aiseveratext','epmastext','epdmastext','vidmastext','fsvi','fsvideprimidatext','fsvinormaltext','fsvimastext','nombreyapellido','fecha','peso','altura','supcorporaltext','ddvi','dsvi','fey','factext','septum','pp','ao','aitabla','vd','aorticavelpico','aorticapico','aorticamedio','aorticaarea','aorticainsuficiencia','pulmonarvelpico','pulmonarpico','pulmonarmedio','pulmonararea','pulmonarinsuficiencia','mitralvelpicoe','mitralvelpicoa','mitralpico','mitralmedio','mitralarea','mitralinsuficiencia','tricuspidevelpicoe','tricuspidevelpicoa','tricuspidepico','tricuspidemedio','tricuspidearea','tricuspideinsuficiencia','ai','ailevetext','aimoderadatext','aiseveratext','aimastext','vm','vmmastext','va','vamastext','vp','vpmastext','vt','vtmastext','pe','pemastext','aa','aamastext','cd','cdmastext','fs','fsmastext','fsnormaltext','fsdeprimidatext','ps','psestimatext','vci','vcid','vcimastext'));
    
}

}


