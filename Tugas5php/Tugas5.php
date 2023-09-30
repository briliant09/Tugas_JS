<?php
class KonversiSuhu{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit(){
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit"){
            return ($this->besaranSuhu * 9/5) + 32;
        }
    }

    public function FahrenheitToCelcius(){
        if ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius"){
            return ($this->besaranSuhu - 32) * 5/9;
        }
    }
    public function CelciusToRheamur(){
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur"){
            return $this->besaranSuhu * 4/5;
        }
    }
    public function RheamurToCelcius(){
        if ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius"){
            return $this->besaranSuhu * 5/4;
        }
    }
    public function cetak(){
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit"){
            $hasilKonversi = $this->CelciusToFahrenheit();
        }elseif ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius"){
            $hasilKonversi = $this->FahrenheitToCelcius();
        }elseif ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur"){
            $hasilKonversi = $this->CelciusToRheamur();
        }elseif ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius"){
            $hasilKonversi = $this->RheamurToCelcius();
        }


        if ($hasilKonversi !== null) {
            echo '<h1 align="center" style="color:#400d03">Konversi Suhu</h1>';
            echo '<table border="1" cellpadding="10" cellspacing="2" width="100%" bgcolor="#90827a" style="color:#fffaf2">';
            echo '<tr><th>Satuan suhu awal</th><th>Besaran Suhu</th><th>Satuan suhu tujuan</th><th>Hasil konversi</th></tr>';
            echo '<tr>';
            echo '<td>' . $this->satuanSuhuAwal . '</td>';
            echo '<td>' . $this->besaranSuhu . '</td>';
            echo '<td>' . $this->satuanSuhuTujuan . '</td>';
            echo '<td>' . $hasilKonversi . '</td>';
            echo '</tr>';
            echo '</table>';
        }
        }
}
?>