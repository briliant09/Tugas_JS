<?php
require 'Tugas5.php';

$dataKonversiSuhu1 = new KonversiSuhu("Celcius", 53, "Fahrenheit");
$dataKonversiSuhu2 = new KonversiSuhu("Fahrenheit", 39, "Celcius");
$dataKonversiSuhu3 = new KonversiSuhu("Celcius", 29, "Rheamur");
$dataKonversiSuhu4 = new KonversiSuhu("Rheamur", 24, "Celcius");


$dataKonversiSuhu1->cetak();
$dataKonversiSuhu2->cetak();
$dataKonversiSuhu3->cetak();
$dataKonversiSuhu4->cetak();



?>