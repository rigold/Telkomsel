<?php
	if(empty($_SESSION))
		session_start();

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		}

   	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sita";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
   
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		      				<a href="Site_Daerah.php?siteloc=Bangkalan">Bangkalan</a> 
							<a href="Site_Daerah.php?siteloc=Banyuwangi">Banyuwangi</a> 
							<a href="Site_Daerah.php?siteloc=Batu">Batu</a> 
							<a href="Site_Daerah.php?siteloc=Blitar Kab.">Blitar Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Blitar Kota">Blitar Kota</a> 
							<a href="Site_Daerah.php?siteloc=Bojonegoro">Bojonegoro</a> 
							<a href="Site_Daerah.php?siteloc=Bondowoso">Bondowoso</a> 
							<a href="Site_Daerah.php?siteloc=Gresik">Gresik</a> 
							<a href="Site_Daerah.php?siteloc=Jember">Jember</a> 
							<a href="Site_Daerah.php?siteloc=Jombang">Jombang</a> 
							<a href="Site_Daerah.php?siteloc=Kediri Kab.">Kediri Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Kediri Kota">Kediri Kota</a> 
							<a href="Site_Daerah.php?siteloc=Lamongan">Lamongan</a> 
							<a href="Site_Daerah.php?siteloc=Lumajang">Lumajang</a> 
							<a href="Site_Daerah.php?siteloc=Madiun Kab.">Madiun Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Madiun Kota">Madiun Kota</a> 
							<a href="Site_Daerah.php?siteloc=Magetan">Magetan</a> 
							<a href="Site_Daerah.php?siteloc=Malang Kab.">Malang Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Malang Kota">Malang Kota</a> 
							<a href="Site_Daerah.php?siteloc=Mojokerto Kab.">Mojokerto Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Mojokerto Kota">Mojokerto Kota</a> 
							<a href="Site_Daerah.php?siteloc=Nganjuk">Nganjuk</a> 
							<a href="Site_Daerah.php?siteloc=Ngawi">Ngawi</a> 
							<a href="Site_Daerah.php?siteloc=Pacitan">Pacitan</a> 
							<a href="Site_Daerah.php?siteloc=Pamekasan">Pamekasan</a> 
							<a href="Site_Daerah.php?siteloc=Pasuruan Kab.">Pasuruan Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Pasuruan Kota">Pasuruan Kota</a> 
							<a href="Site_Daerah.php?siteloc=Ponorogo">Ponorogo</a> 
							<a href="Site_Daerah.php?siteloc=Probolinggo Kab.">Probolinggo Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Probolinggo Kota">Probolinggo Kota</a> 
							<a href="Site_Daerah.php?siteloc=Sampang">Sampang</a> 
							<a href="Site_Daerah.php?siteloc=Sidoarjo">Sidoarjo</a> 
							<a href="Site_Daerah.php?siteloc=Situbondo">Situbondo</a> 
							<a href="Site_Daerah.php?siteloc=Sumenep">Sumenep</a> 
							<a href="Site_Daerah.php?siteloc=Surabaya">Surabaya</a> 
							<a href="Site_Daerah.php?siteloc=Trenggalek">Trenggalek</a> 
							<a href="Site_Daerah.php?siteloc=Tuban">Tuban</a> 
							<a href="Site_Daerah.php?siteloc=Tulungagung">Tulungagung</a> 
				    </div>
				</li>

				<li class="dropdown">
					<a class="dropbtn">Administrasi</a>
					<div class="dropdown-content">
	      				<a href="List_Panjang.php">List Perpanjangan</a>
	      				<a href="Monitoring.php">Monitoring</a>
	      				<a href="Izin.php">Perizinan</a>
					    <a href="PBB.php">PBB</a>
					    <a href="RPM.php">RPM</a>
					    <a href="Comcase.php">Comcase</a>
				    </div>
				</li>
				<li><a href="About.php">About</a></li>
				<li><a href="logout.php">Log out</a></li>
				<h1>
					<?php
					echo " " . date("Y/m/d") ;
					?>
				</h1>
				<form action="Search.php" id="search" method="GET">
					<input type="text" name="cari" />
					<input type="submit" value="" id="submit"/>
				</form>
			</ul>	
		</div>

		<div id="background">
			<img src="images/bg1.jpg" alt="abs-img" class="abs-img" />

			<div class="page">
				<div class="sidebar">

					<div class="featured">						
						<a class="figure"><img src="upload/<?php echo $row['link_profile_pic'];?>" alt=""/></a>		
					</div>

					</h1>
					<div id="tweets">
						<h3>Staff 1</h3>
						<p>
							<br>Nama User : <?php echo $row['nama_user'];?>
							<br>NIK : <?php echo $row['nik'];?>
							<br>Jabatan : <?php echo $row['jabatan'];?>
							<br>Akun : <?php 
										if (empty($row['admin']))
										{
											echo "User";
										}
										else{
											echo $row['admin'];
										}
										?>
						</p>
					</div>
					<div id="article">
						<h3>MENU ADMIN</h3>
						<p>
							<a href="Add_User.php">> ADD USER<br></a>
							<a href="Add_Sites.php"><br>> ADD SITE<br></a>
							<a href="List_User.php"><br>> LIST USER<br></a>
							<a href="List_Sites.php"><br>> LIST SITES<br></a>
						</p>
					</div>
					
					<p>&#169; Copyright 2017. Created by Rigold Nainggolan & Tomson Pangaribuan</p>
				</div>

				<div class="body">
					

					<h1><a href="About.php">Selamat Datang Di SITA Project</a></h1>

					<ul class="navigation">
						<li><a href="Warning.php">Berita</a></li>
						<li><a href="PBB.php">RAB PBB</a></li>
						<li><a href="RPM.php">RAB RPM</a></li>
						<li><a href="Izin.php">Perizinan</a></li>
						<li><a href="List_Panjang.php">Perpanjangan</a></li>
					</ul>

					<div id="featured">
						<div>
							<h3>Pengenalan Terhadap Web ini :
								<p>
									Web ini adalah tempat penampungan dan pengolahan data site untuk kemudian data dapat dipilah sesuai dengan kebutuhan pengguna, web ini juga menyediakan fitur untuk melakukan print tabel kedalam bentuk dokumen.
									<br>Ada dua hak akses pada web ini :<br> 
									<br>1. Admin (Hampir dapat melakukan semua perubahan pada web)
									<br>2. User (Pengguna akhir yang hanya dapat melakukan fungsi view, search dan print).
									
									<br><br>
									Bila ada pertanyaan yang ingin diajukan, segera hubungi kami melalui link berikut ini. 
									<a href="About.php">Hubungi kami !</a>
								</p>
							</h3>
							<h3>Q & A (Pertanyaan Umum):
								<p>
									1.Saya Lupa Pasword / User Name saya, Apa yang dapat saya lakukan?
									<br>Hubungi Admin secara langsung atau Klik Halaman "About" untuk melihat informasi kontak Admin.
									<br>
									<br>2.Saya ingin mengubah data diri saya
									<br>Hubungi Admin secara langsung atau Klik Halaman "About" untuk melihat informasi kontak Admin.
									<br>
									<br>3.Siapa saja yang bisa melakukan insert / delete data site dan data lain pada web ini?
									<br>Admin
									<br>
									<br>4.Web ini menolong sekali dan bertampilan bagus, apa yang dapat saya berikan?
									<br>Tolong Kami dikasih Nilai A . :)
								</p>
							</h3>
						</div>
					</div>
					
					
				</div>
				
			</div>

			
		</div>
	</body>
</html>