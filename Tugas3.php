<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
</head>
<body>
    
<?php
$m1 = ['npm' => '011119', 'nama' => 'El', 'nilai' => 90];
$m2 = ['npm' => '011112', 'nama' => 'Rafael', 'nilai' => 59];
$m3 = ['npm' => '011113', 'nama' => 'Ani', 'nilai' => 75];
$m4 = ['npm' => '011114', 'nama' => 'Adi', 'nilai' => 85];
$m5 = ['npm' => '011115', 'nama' => 'Ando', 'nilai' => 50];
$m6 = ['npm' => '011118', 'nama' => 'Nu', 'nilai' => 100];
$m7 = ['npm' => '011117', 'nama' => 'Ne', 'nilai' => 95];
$m8 = ['npm' => '011116', 'nama' => 'Ana', 'nilai' => 60];
$m9 = ['npm' => '011111', 'nama' => 'Andi', 'nilai' => 80];
$m10 = ['npm' => '011110', 'nama' => 'Al', 'nilai' => 89];

$ar_judul = ['No', 'NPM','Nama Mahasiswa', 'Nilai', 'Grade', 'Predikat', 'Keterangan'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlah_mahasiswa= count($mahasiswa);
$nilai = array_column($mahasiswa, 'nilai');
$nilai_total = array_sum($nilai);
$nilai_tertinggi =max($nilai) ;
$nilai_terendah = min($nilai); 
$nilai_rata_rata = $nilai_total / $jumlah_mahasiswa;
$agregate = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai rata-rata' => $nilai_rata_rata,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Nilai Total' => $nilai_total
]

?>
<h1 align="center" style="color:#618264">Daftar Nilai Mahasiswa</h1>
<table border="1" cellpadding="10" cellspacing="2" width="100%" bgcolor="#94A684" style="color:#FFEEF4">
    <thead>
        <tr>
            <?php
            foreach($ar_judul as $judul){?>
                <th><?=$judul?></th>
           
           <?php }?>
        </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach($mahasiswa as $m){
    $warna = $no % 2 == 1 ? '#AEC3AE' : '#E4E4D0';

    $keterangan = $m ['nilai'] >= 60 ? "Lulus" : "Tidak Lulus";

    if ($m ['nilai'] >= 85 && $m ['nilai'] <= 100) $grade = "A";
    else if ($m ['nilai'] >= 75 && $m ['nilai'] <= 84) $grade = "B";
    else if ($m ['nilai'] >= 60 && $m ['nilai'] <= 74) $grade = "C";
    else if ($m ['nilai'] >= 30 && $m ['nilai'] <= 59) $grade = "D";
    else if ($m ['nilai'] >= 0 && $m ['nilai'] <= 29) $grade = "E";
    else $grade = "";

    switch ($grade) {
    case 'A': $predikat = 'Memuaskan'; break;
    case 'B': $predikat = 'Bagus'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang'; break;
    case 'E': $predikat = 'Buruk'; break;
    default: $predikat = '';
    }
    ?>
    <tr bgcolor="<?= $warna; ?>" style="color:black">

    <td><?= $no ?></td>
    <td><?= $m['npm'] ?></td>
    <td><?= $m['nama'] ?></td>
    <td><?= $m['nilai'] ?></td>
    <td><?= $grade ?></td>
    <td><?= $predikat ?></td>
    <td><?= $keterangan ?></td>
    </tr>
    
    <?php
    $no++;
    }
    ?>
 <tfoot>
 <?php
foreach($agregate as $agr => $hasil){
?>
<tr bgcolor="#FFEEF4" style="color:#618264" >
    <th colspan="3"><?=$agr?></th>
    <th colspan="5"><?=$hasil?></th>
</tr>
<?php } ?>
 </tfoot>
    </tbody>
</table>
</body>
</html>