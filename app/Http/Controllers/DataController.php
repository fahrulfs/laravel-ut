<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Handler\IFTTTHandler;

class DataController extends Controller
{
   public function input_form()
   {
     return view('form'); 
   } 
   public function procces_form(){

$nim=$_REQUEST['nim'];
$nama=$_REQUEST['nama'];
$tmpt=$_REQUEST['tmpt'];
$ttl=$_REQUEST['ttl'];
$akt=$_REQUEST['akt'];
// $jns=$_REQUEST['jns'];
// $jns1=$_REQUEST['jns1'];
$file=$_REQUEST['file'];
$alamat=$_REQUEST['alamat'];
if (empty($nim) && empty($nama) && empty($tmpt) && empty($ttl)&&empty($akt)&&empty($file) && empty($alamat)) {
  echo "<h1>DATA KOSONG</h1>" ;
} else {

  echo "Berhasil" ;
}

// return view('anggota_hima');
}

public function hima(){

return view('anggota_hima');

}
}  

