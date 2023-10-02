<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'Segitiga.php';

$d1 = new lingkaran(24);
$d2 = new persegiPanjang(3, 9);
$d3 = new segitiga(5, 12, 11, 8);


$data = [$d1, $d2, $d3];

echo '<table border="1" cellpadding="10" cellspacing="2" width="100%" bgcolor="#b00437" style="color:#fff7f4">';
echo '<thead>';
echo '<tr><th>No</th><th>Nama Bidang</th><th>Keterangan</th><th>Luas Bidang</th><th>Keliling Bidang</th></tr>';
echo '</thead>';
echo '<tbody>';

foreach ($data as $no => $d){
    echo "<tr>";
    echo "<td>" . ($no + 1) . "</td>";
    echo "<td>" . $d->namabidang() . "</td>";
    echo "<td></td>";
    echo "<td>" . $d->luasbidang() . "</td>";
    echo "<td>" . $d->kelilingbidang() . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>