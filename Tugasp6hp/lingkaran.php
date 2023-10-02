<?php
require_once 'abstract.php';
class lingkaran extends Bentuk2D{
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }

    public function namabidang(){
        return "Lingkaran";
    }
    public function kelilingbidang(){
        $keliling = 2 * 3.14 * $this->jari2;
        return $keliling;
    }
    public function luasbidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }
}
?>