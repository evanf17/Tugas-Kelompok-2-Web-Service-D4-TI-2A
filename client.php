<?php

$wsdl="http://localhost:8080/wskelompok2/?wsdl";
$client2 = new SoapClient ( $wsdl, array('cache_wsdl' => WSDL_CACHE_NONE, 'trace'=>1) );

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$agama = $_POST['agama'];
$kelahiran = $_POST['kelahiran'];
//eksekusi servis ke-1
$input=array('nama'=>$nama,'npm'=>$npm, 'agama'=>$agama,'kelahiran'=>$kelahiran);
echo '<p>';
echo $client2->setInfo($input);
echo '</p>';

?>
