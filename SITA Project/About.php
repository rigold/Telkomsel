<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>SITA Project</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
		<link rel="icon" href="images/favicon.png">
	</head>
	
	<body>
		<div class=navi>
			<ul>
				<img src="images/bgnav.png" alt="">
				<li><a href="Home.php">Home</a></li>

				<li class="dropdown">
					<a class="dropbtn">Data Site</a>
					<div class="dropdown-content">
	      				<a href="#"> Bangkalan </a> 
						<a href="#"> Banyuwangi </a> 
						<a href="#"> Batu </a> 
						<a href="#"> Blitar Kab. </a> 
						<a href="#"> Blitar Kota </a> 
						<a href="#"> Bojonegoro </a> 
						<a href="#"> Bondowoso </a> 
						<a href="#"> Gresik </a> 
						<a href="#"> Jember </a> 
						<a href="#"> Jombang </a> 
						<a href="#"> Kediri Kab. </a> 
						<a href="#"> Kediri Kota </a> 
						<a href="#"> Lamongan </a> 
						<a href="#"> Lumajang </a> 
						<a href="#"> Madiun Kab. </a> 
						<a href="#"> Madiun Kota </a> 
						<a href="#"> Magetan </a> 
						<a href="#"> Malang Kab. </a> 
						<a href="#"> Malang Kota </a> 
						<a href="#"> Mojokerto Kab. </a> 
						<a href="#"> Mojokerto Kota </a> 
						<a href="#"> Nganjuk </a> 
						<a href="#"> Ngawi </a> 
						<a href="#"> Pacitan </a> 
						<a href="#"> Pamekasan </a> 
						<a href="#"> Pasuruan Kab. </a> 
						<a href="#"> Pasuruan Kota </a> 
						<a href="#"> Ponorogo </a> 
						<a href="#"> Probolinggo Kab. </a> 
						<a href="#"> Probolinggo Kota </a> 
						<a href="#"> Sampang </a> 
						<a href="#"> Sidoarjo </a> 
						<a href="#"> Situbondo </a> 
						<a href="#"> Sumenep </a> 
						<a href="#"> Surabaya </a> 
						<a href="#"> Trenggalek </a> 
						<a href="#"> Tuban </a> 
						<a href="#"> Tulungagung </a> 

				    </div>
				</li>

				<li class="dropdown">
					<a class="dropbtn">Administrasi</a>
					<div class="dropdown-content">
	      				<a href="List_Panjang.php">List Perpanjangan</a>
	      				<a href="Monitoring.php">Monitoring</a>
					    <a href="PBB.php">PBB</a>
					    <a href="RPM.php">RPM</a>
					    <a href="Comcase.php">Comcase</a>
				    </div>
				</li>
				<li><a href="About.php">About</a></li>
				<li><a href="Index.php">Log out</a></li>
				<h1>
					<?php
					echo " " . date("Y/m/d") ;
					?>
					</h1>
				<form action="Search.php" id="search">
					<input type="text"/>
					<input type="submit" onclick="location.href='Search.php';" value="" id="submit"/>
				</form>
			</ul>	
		</div>

		<div id="background">
			<img src="images/bg1.jpg" alt="abs-img" class="abs-img" />

			<div class="page">
				<img src="images/bg3.png" alt="abs3-img" class="abs3-img" />
				<img src="images/bg4.png" alt="abs4-img" class="abs4-img" />
				<div class="sidebar">

					<div class="featured">						
						<a href="gallery.php" class="figure"><img src="images/person.jpg" alt=""/></a>		
					</div>

					<div id="tweets">
						<h3>Staff 1</h3>
						<p>
							<br>Nama User : Immanuel Rio
							<br>NIK : 19574
							<br>Jabatan : Staff Manajemen Site
							<br>Akun : Admin
						</p>
					</div>
					<div id="article">
						<h3>MENU ADMIN</h3>
						<p>
							<a href="Add_User.php">> ADD USER<br></a>
							<a href="Add_Sites.php"><br>> ADD SITE<br></a>
							<a href="Edit_User.php"><br>> EDIT USER<br></a>
							<a href="Edit_Sites.php"><br>> EDIT SITE<br></a>
							<a href="List_User.php"><br>> LIST USER<br></a>
							<a href="List_Sites.php"><br>> LIST SITES<br></a>
						</p>
					</div>
					
					<p><br><br>&#169; Copyright 2017. Created by Rigold Nainggolan & Tomson Pangaribuan</p>
				</div>

				<div class="body">
					<img src="images/bg2.png" alt="ab2s-img" class="
					abs2-img" />

					<h2><a href="About.php">ABOUT - Tentang Kami</a></h2>

					<div id="featured">
						<div>
							<h4>
								<p>
									Web ini dibuat untuk melengkapi tugas Kerja Praktik oleh Developer di PT.Telkomsel - Surabaya.
									<br>
									Nama Project : SITA Project
									<br>
									Juni - Juli,2017
								</p>
							</h4>
							<h4>Pembimbing Lapangan
								<p>
									Immanuel Rio - 12345 - Staff Manajemen Site
								</p>
							</h4>
							<h4>Developer
								<p>
									Teknik Informatika - Institut Teknologi Sepuluh Nopember (ITS) - Surabaya
									<br><br>
									Rigold Nainggolan - 5113100139 - rigold95@gmail.com
									<br>
									Tomson Pangaribuan - 5113100048 - tomsonpangaribuan@gmail.com
								</p>
							</h4>
							<h4>Admin Website
								<p>
									Nama Seseorang - Nomor Handphone - Email@email.com
								</p>
							</h4>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>