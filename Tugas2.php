<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <h1>Form Data Diri</h1>
    <form method="POST">
    <table>
    <tr>
    <td><label for="">Nama</label></td>
    <td><input type="text" name="nama" placeholder="Masukkan nama"><br></td>
    </tr>
    <tr>
    <td><label for="">Pekerjaan</label></td>
    <td><select name="pekerjaan" id="">
        <option value="">---Pilihan Pekerjaan---</option>
        <option value="Programmer">Programmer</option>
        <option value="Content Creator">Content Creator</option>
        <option value="Barista">Barista</option>
        <option value="PNS">PNS</option>
        <option value="Arkeolog">Arkeolog</option>
        <option value="Dokter">Dokter</option>
        <option value="Akuntan">Akuntan</option>
        <option value="Bidan">Bidan</option>
        <option value="Guru/Dosen">Guru/Dosen</option>
        <option value="Arsitek">Arsitek</option>
    </select> <br>
    </td>
    </tr>
    <tr>
    <td><label >Hobby </label><br></td>
    <td>
        <input type="radio" name="hobby" value="Futsal/Sepak bola">Futsal/Sepak bola<br>
        <input type="radio" name="hobby" value="Basket">Basket<br>
        <input type="radio" name="hobby" value="Berenang">Berenang<br>
        <input type="radio" name="hobby" value="Berkuda">Berkuda<br>
        <input type="radio" name="hobby" value="Memanah">Memanah<br>
        <input type="radio" name="hobby" value="Dengar musik">Dengar musik<br>
        <input type="radio" name="hobby" value="Baca Novel">Baca Novel<br>
        <input type="radio" name="hobby" value="Memasak">Memasak<br>
        <input type="radio" name="hobby" value="Badminton">Badminton<br>
        <input type="radio" name="hobby" value="Menyanyi">Menyanyi<br>
    </td><br>
    </tr>
    <tr>
        <td> <button name="simpan" type="submit">Simpan</button></td>
    </tr>
    </table>
    </form>
    <?php
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];
    $tombol = $_POST['simpan'];

    if(isset($tombol)){
   ?>
        Data Diri;
        <table style="padding: 10; text-align: center; width: 100%; color:#f8efed" >
        <tr bgcolor="#580938"><td>Nama </td> <td>Pekerjaan </td> <td>Hobby </td> </tr>
        <tr bgcolor="#aa0e3f"><td><?= $nama ?></td> <td><?= $pekerjaan ?></td> <td><?= $hobby ?></td></tr>

      
        </table>

   <?php } ?>
  
</body>
</html>