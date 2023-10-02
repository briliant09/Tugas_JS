<?php
require_once 'abstract.php';
class persegiPanjang extends Bentuk2D{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namabidang(){
        return "Persegi Panjang";
    }
    public function kelilingbidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
    public function luasbidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
}
?>