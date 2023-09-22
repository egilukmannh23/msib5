<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My first web</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="#beranda">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#profile">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
			<?php
				// beranda
			$beranda = "Hello, Im Egi Lukman Nur Hakim";
			$beranda2 = "Saya adalah seorang mahasiswa Sistem Informasi dari STMIK JABAR yang tertarik terhadap perkembangan teknologi terutama hardware dan software. Saya adalah orang yang aktif dalam belajar hal baru dan aktif juga dalam bersosial baik itu di organisasi ataupun di luar organisasi.";
			//profile
			$profile = array(array("title" => "Sekolah", "description" => "Saya bersekolah di SMKN 11 Garut masuk di jurusan Teknik Komputer Jaringan. Lalu dilanjutkan kuliah di STMIK JABAR di jurusan SISTEM INFORMASI" ),array ("title" => "Keahlian", "description" => "Mahir menggunakan Ms office dan memiliki sertifikat nasional. 
			Mampu Menggunakan HTML dan CSS" ), array ("title" => "Pengalaman", "description" => "Mengikuti organisasi dari tingkat SLTP dan aktif mengikuti organisasi sampai sekarang")); 

			//contact
			$contact = array(array("title" => "gmail", "description" => "egilukman357@gmail.com"), array("title" => "Instagram", "description" => "lort_egil"), array("title" => "Telegram", "description" => "081901089729"));

			echo "<h2>$beranda</h2>";
			echo "<p>$beranda2</p>";
			echo "<div class=\"row\">";
			foreach($profile as $profil) {
				echo "<div class=\"col-md-6\">";
				echo "<dt>" . $profil ["title"]. "</dt>";
				echo "<dd>" . $profil ["description"]. "</dd>";
				echo "</div>";

			}

			echo "</div>";
			echo "<div =\"row\">";
			foreach ($contact as $kontak){
			echo "<div =\"col-md-4\">";
			echo "<h4>". $kontak ["title"]. "</h4>";
			echo "<a href = \"www.gmail.com\">" . $kontak ["description"]. "</a>";
			echo "</div>";
			echo "</div>";
			}

			?>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>