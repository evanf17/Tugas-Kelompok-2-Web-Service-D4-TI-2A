<?php

class MyWs{
    function setInfo($input){
        $nama=$input->nama;
        $npm=$input->npm;
        $agama=$input->agama;
        $kelahiran=$input->kelahiran;
		$selisih=(20-(2016-$kelahiran));
         if (2016 - $kelahiran > 19){
          return 'selamat umur anda mencukupi';
         }else{
          return 'maaf, umur anda tidak mencukupi, anda perlu ' .$selisih. 'tahun lagi untuk memenuhi persyaratan';
         }
         
       }
        
}



//ini_set("soap.wsdl_cache_enabled", 0);

$server = new SoapServer("wskelompok2.wsdl");
$server->setClass("MyWs");
$server->handle();

?>
