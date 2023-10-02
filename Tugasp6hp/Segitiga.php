<?php
require_once 'abstract.php';
class segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public $sisi1;
    public $sisi2;
    public function __construct($alas, $tinggi, $sisi1, $sisi2){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;
    }

    public function namabidang(){
        return "Segitiga";
    }
    public function kelilingbidang(){
        $keliling = $this->sisi1 + $this->sisi2 + $this->alas;
        return $keliling;
    }
    public function luasbidang(){
        $luas = 1/2 * $this->alas * $this->tinggi;
        return $luas;
    }
}
?>