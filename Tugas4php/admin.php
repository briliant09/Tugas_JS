<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TUGAS JS 7</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
<!-- Awal Header -->
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="header" class="page-header">
				<h1 class="h1">
					Website Profil 
				</h1>
			</div>
<!-- Akhir Header -->

<!-- Awal navigasi -->
			<ul id="nav" class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link active" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="portofolio.html">Portofolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">Contact</a>
				</li>

			</ul>
<!-- Akhir navigasi -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div id="home" class="col-md-8">
					<dl>
						<dt>
							Biodata
						</dt>
						<dd>
                        <?php

                            $nama = "Brilian Wahyu Hidayat";
                            $umur = 21;
                            $berat_badan = 50;
                            $_pekerjaan = 'Mahasiswa';
                            $email = "brilianwhidayat@gmail.com";
							$alamat = "Lampung";
							$nohp = "085658856864";
							

                            echo 'Nama : '.$nama;
                            echo '<br/>Umur: '.$umur.' tahun';
                            echo '<br/>Berat Badan : '.$berat_badan.'kg';
                            echo '<br/>Pelkerjaan : '.$_pekerjaan;
                            echo '<br/>email : '.$email;
                            echo '<br/>Alamat : '.$alamat;
                            print '<br/>Nomor telpon: '.$nohp;

                            ?>
							</script>
						</dd>
					</dl>
				</div>
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src="images/IMG-20230511-WA0047-picsay.jpg" height="100%" width="140%">
				</div>
			</div>
		</div>
		<div id="quote" class="col-md-4">
			<blockquote class="blockquote text-right">
				<p class="mb-0">
					من صبر ظفر
					<br>
					“Barang siapa yang bersabar maka ia akan beruntung”
				</p>
				<footer class="blockquote-footer">
					 <cite>Pepatah Arab</cite>
				</footer>
			</blockquote>
		</div>
	</div>
	<div id="desc" class="row">
		<div class="col-md-4">
			<p>
				I'm student of Informatics Engineering from Lampung University, Passionate with a focus on Technology, programming, Video Editor, Design, 
					UI UX, and problem solving. Experienced at Oracle Academy, I have a responsible and I can manage Team and Manage time for the 
					activities that has been planned.
			</p>
		</div>
		<div class="col-md-4">
			<p>
				<cite>Address</cite><br><strong>- </strong>Dayamurni, Tumijajar, Tulang Bawang Barat, Lampung</small>
			</p>
		</div>
		<div class="col-md-4">
			 
			<address>
				<div class="social_icon">
					<ul>
					   <li><a href="https://web.facebook.com/brilian.wahyuhidayat?locale=id_ID" target="_blank">@facebook</a></li>
					   <li><a href="https://twitter.com/home" target="_blank">@twitter</a></li>
					   <li><a href="https://www.linkedin.com/in/brilian-wahyu-hidayat-5248a1271/" target="_blank">@linkedin</a></li>
					   <li><a href="https://www.instagram.com/brilianwhidayat/" target="_blank">@instagram</a></li>
					</ul>
				 </div>
			</address>
		</div>
	</div>
	<div class="row">
		<div id="footer" class="col-md-12">
			<p align="center">
			<strong>Layoutit &copy brilianwhidayat 2023</strong>
			</p>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>