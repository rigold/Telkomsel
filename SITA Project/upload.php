
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
			<div class="page">
				<div class="body2">
					<h1>Upload File Ke DATABASE</a></h1>
					<p>
						1. Download Template ms.excel berikut ini, lalu isi data anda sesuai dengan urutan header tabel <br>
						2. Simpan Document Excel kedalam format .csv / .csv (coma delimited)<br>
						3. Upload file anda !<br>
						<br>
						<br>
						<a href="File/file.xlsx">DOWNLOAD FILE</a>
						<br>
						<br>

					</p>
					<form action="upload_sql.php" method="post" enctype="multipart/form-data">
							<input type="file" name="file" size="50" style="margin-left: 50px;"> 
							<br>
							<br>
						 	<input type="submit" value="Submit" name="submit">
					</form>
											
					
				</div>

			</div>

			
		</div>
		
	</body>
</html>