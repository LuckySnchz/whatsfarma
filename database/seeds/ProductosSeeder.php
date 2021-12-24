<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('productos')->truncate();
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productouno','NombreVariable' =>  'uno','NombrePrecio' 

=>   'preciouno','NombreTotalPrecio' =>'totalpreciouno','DescripcionProducto' => 'Alcohol en Gel BIOPHARMA 250 ml.','Precio'=> '250 ','NombrePirce'=>'pirceuno','NombreDiv'=>'totaluno','image'=>'img (1).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productodos','NombreVariable' =>  'dos','NombrePrecio' 

=>  'preciodos','NombreTotalPrecio' =>'totalpreciodos','DescripcionProducto' => 'Alcohol  96º BIALCOHOL 250 ml','Precio'=> '90','NombrePirce'=>'pircedos','NombreDiv'=>'totaldos','image'=>'img (2).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productotres','NombreVariable' =>  'tres','NombrePrecio' 

=>  'preciotres','NombreTotalPrecio' =>'totalpreciotres','DescripcionProducto' => 'Caja Guantes BREMEN 100 Unid.','Precio'=> '900','NombrePirce'=>'pircetres','NombreDiv'=>'totaltres','image'=>'img (3).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productocuatro','NombreVariable' =>  'cuatro','NombrePrecio' 

=>  'preciocuatro','NombreTotalPrecio' =>'totalpreciocuatro','DescripcionProducto' => ' Par de Guantes BREMEN','Precio'=> '20','NombrePirce'=>'pircecuatro','NombreDiv'=>'totalcuatro','image'=>'img (4).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productocinco','NombreVariable' =>  'cinco','NombrePrecio' 

=>  'preciocinco','NombreTotalPrecio' =>'totalpreciocinco','DescripcionProducto' => 'GUANTES DE NITRILO LAVANDA CAJA','Precio'=> '1000','NombrePirce'=>'pircecinco','NombreDiv'=>'totalcinco','image'=>'img (5).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productoseis','NombreVariable' =>  'seis','NombrePrecio' 

=>  'precioseis','NombreTotalPrecio' =>'totalprecioseis','DescripcionProducto' => 'GUANTES DE NITRILO LAVANDA PAR','Precio'=> '25','NombrePirce'=>'pirceseis','NombreDiv'=>'totalseis','image'=>'img (6).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productosiete','NombreVariable' =>  'siete','NombrePrecio' 

=>  'preciosiete','NombreTotalPrecio' =>'totalpreciosiete','DescripcionProducto' => 'BARBIJOS TRIPLE CAPA, CON AJUSTE NASAL Y TIRAS PARA ATAR.','Precio'=> '50','NombrePirce'=>'pircesiete','NombreDiv'=>'totalsiete','image'=>'img (7).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productoocho','NombreVariable' =>  'ocho','NombrePrecio' 

=>  'precioocho','NombreTotalPrecio' =>'totalprecioocho','DescripcionProducto' => ' ESPADOL Antiséptico Desinfectante  250 ml ','Precio'=> '456','NombrePirce'=>'pirceocho','NombreDiv'=>'totalocho','image'=>'img (8).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productonueve','NombreVariable' =>  'nueve','NombrePrecio' 

=>  'precionueve','NombreTotalPrecio' =>'totalprecionueve','DescripcionProducto' => 'Agua Oxigenada LABORIT 10 Vol. 100 cc','Precio'=> '60','NombrePirce'=>'pircenueve','NombreDiv'=>'totalnueve','image'=>'img (9).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productodiez','NombreVariable' =>  'diez','NombrePrecio' 

=>  'preciodiez','NombreTotalPrecio' =>'totalpreciodiez','DescripcionProducto' => 'Agua Oxigenada LABORIT 10 Vol. 250 cc','Precio'=> '100','NombrePirce'=>'pircediez','NombreDiv'=>'totaldiez','image'=>'img (10).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productoonce','NombreVariable' =>  'once','NombrePrecio' 

=>  'precioonce','NombreTotalPrecio' =>'totalprecioonce','DescripcionProducto' => 'Agua Oxigenada LABORIT 10 Vol. 500 cc','Precio'=> '150','NombrePirce'=>'pirceonce','NombreDiv'=>'totalonce','image'=>'img (11).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productodoce','NombreVariable' =>  'doce','NombrePrecio' 

=>  'preciodoce','NombreTotalPrecio' =>'totalpreciodoce','DescripcionProducto' => 'Vick Vaporub Lata 12 gr.','Precio'=> '80 ','NombrePirce'=>'pircedoce','NombreDiv'=>'totaldoce','image'=>'img (12).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productotrece','NombreVariable' =>  'trece','NombrePrecio' 

=>  'preciotrece','NombreTotalPrecio' =>'totalpreciotrece','DescripcionProducto' => 'Vick Vaporub Lata 50 gr.','Precio'=> '260 ','NombrePirce'=>'pircetrece','NombreDiv'=>'totaltrece','image'=>'img (13).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productocatorce','NombreVariable' =>  'catorce','NombrePrecio' 

=>  'preciocatorce','NombreTotalPrecio' =>'totalpreciocatorce','DescripcionProducto' => 'Vick Vitapyrena Sobre','Precio'=> '35 ','NombrePirce'=>'pircecatorce','NombreDiv'=>'totalcatorce','image'=>'img (14).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productoquince','NombreVariable' =>  'quince','NombrePrecio' 

=>  'precioquince','NombreTotalPrecio' =>'totalprecioquince','DescripcionProducto' => 'Vick Vitapyrena Forte Sobre','Precio'=> '40','NombrePirce'=>'pircequince','NombreDiv'=>'totalquince','image'=>'img (15).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productodieciseis','NombreVariable' =>  'dieciseis','NombrePrecio' 

=>  'preciodieciseis','NombreTotalPrecio' =>'totalpreciodieciseis','DescripcionProducto' => 'Bayaspirina C Caliente Limón','Precio'=> '30','NombrePirce'=>'pircedieciseis','NombreDiv'=>'totaldieciseis','image'=>'img (16).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productodiecisiete','NombreVariable' =>  'diecisiete','NombrePrecio' 

=>  'preciodiecisiete','NombreTotalPrecio' =>'totalpreciodiecisiete','DescripcionProducto' => ' Bisolvon Jarabe Adultos','Precio'=> '449','NombrePirce'=>'pircediecisiete','NombreDiv'=>'totaldiecisiete','image'=>'img (17).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productodieciocho','NombreVariable' =>  'dieciocho','NombrePrecio' 

=>  'preciodieciocho','NombreTotalPrecio' =>'totalpreciodieciocho','DescripcionProducto' => ' Cedrix Balsámico Fórmula Concentrada 100 ml','Precio'=> '370 ','NombrePirce'=>'pircedieciocho','NombreDiv'=>'totaldieciocho','image'=>'img (18).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productodiecinueve','NombreVariable' =>  'diecinueve','NombrePrecio' 

=>  'preciodiecinueve','NombreTotalPrecio' =>'totalpreciodiecinueve','DescripcionProducto' => ' Athos Jarabe 100 ml','Precio'=> '300','NombrePirce'=>'pircediecinueve','NombreDiv'=>'totaldiecinueve','image'=>'img (19).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productoveinte','NombreVariable' =>  'veinte','NombrePrecio' 

=>  'precioveinte','NombreTotalPrecio' =>'totalprecioveinte','DescripcionProducto' => 'Athos Caramelos 9 Unid.','Precio'=> '190','NombrePirce'=>'pirceveinte','NombreDiv'=>'totalveinte','image'=>'img (20).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productoveintiuno','NombreVariable' =>  'veintiuno','NombrePrecio' 

=>  'precioveintiuno','NombreTotalPrecio' =>'totalprecioveintiuno','DescripcionProducto' => 'Caramelos Fecofar 9 Unid.','Precio'=> '140','NombrePirce'=>'pirceveintiuno','NombreDiv'=>'totalveintiuno','image'=>'img (21).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productoveintidos','NombreVariable' =>  'veintidos','NombrePrecio' 

=>  'precioveintidos','NombreTotalPrecio' =>'totalprecioveintidos','DescripcionProducto' => 'Caramelos Fecofar Free 12 Unid. Libre Azúcar y TACC','Precio'=> '150 ','NombrePirce'=>'pirceveintidos','NombreDiv'=>'totalveintidos','image'=>'img (22).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productoveintitres','NombreVariable' =>  'veintitres','NombrePrecio' 

=>  'precioveintitres','NombreTotalPrecio' =>'totalprecioveintitres','DescripcionProducto' => ' Alernix CB 10 cap.','Precio'=> '230','NombrePirce'=>'pirceveintitres','NombreDiv'=>'totalveintitres','image'=>'img (23).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productoveinticuatro','NombreVariable' =>  'veinticuatro','NombrePrecio' 

=>  'precioveinticuatro','NombreTotalPrecio' =>'totalprecioveinticuatro','DescripcionProducto' => 'Aerotina 10 comp.','Precio'=> '160 ','NombrePirce'=>'pirceveinticuatro','NombreDiv'=>'totalveinticuatro','image'=>'img (24).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productoveinticinco','NombreVariable' =>  'veinticinco','NombrePrecio' 

=>  'precioveinticinco','NombreTotalPrecio' =>'totalprecioveinticinco','DescripcionProducto' => 'Aerotina Cápsulas Blandas 7 cap.','Precio'=> '185 ','NombrePirce'=>'pirceveinticinco','NombreDiv'=>'totalveinticinco','image'=>'img (25).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productoveintiseis','NombreVariable' =>  'veintiseis','NombrePrecio' 

=>  'precioveintiseis','NombreTotalPrecio' =>'totalprecioveintiseis','DescripcionProducto' => 'Acton Cápsulas Blandas 10 cap.','Precio'=> '90','NombrePirce'=>'pirceveintiseis','NombreDiv'=>'totalveintiseis','image'=>'img (26).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productoveintisiete','NombreVariable' =>  'veintisiete','NombrePrecio' 

=>  'precioveintisiete','NombreTotalPrecio' =>'totalprecioveintisiete','DescripcionProducto' => 'Ibupirac 400 mg 12 comp','Precio'=> '75','NombrePirce'=>'pirceveintisiete','NombreDiv'=>'totalveintisiete','image'=>'img (27).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productoveintiocho','NombreVariable' =>  'veintiocho','NombrePrecio' 

=>  'precioveintiocho','NombreTotalPrecio' =>'totalprecioveintiocho','DescripcionProducto' => ' Tafirol 500 mg 10 comp','Precio'=> '70 ','NombrePirce'=>'pirceveintiocho','NombreDiv'=>'totalveintiocho','image'=>'img (28).jpg']);
DB::table('productos')->insert(['Codigo' =>'12344','NombreProducto' => 'productoveintinueve','NombreVariable' =>  'veintinueve','NombrePrecio' 

=>  'precioveintinueve','NombreTotalPrecio' =>'totalprecioveintinueve','DescripcionProducto' => ' Next Gripe 10 comp','Precio'=> '200','NombrePirce'=>'pirceveintinueve','NombreDiv'=>'totalveintinueve','image'=>'img (29).jpg']);
DB::table('productos')->insert(['Codigo' =>'12345','NombreProducto' => 'productotreinta','NombreVariable' =>  'treinta','NombrePrecio' 

=>  'preciotreinta','NombreTotalPrecio' =>'totalpreciotreinta','DescripcionProducto' => ' Qura Plus 10 comp.','Precio'=> '160 ','NombrePirce'=>'pircetreinta','NombreDiv'=>'totaltreinta','image'=>'img (30).jpg']);









    }
}
