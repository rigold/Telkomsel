<?php
	if(empty($_SESSION))
		session_start();

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		}

   	include("connect.php");

   	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result = mysql_query($sql, $conn);
	$row = mysql_fetch_assoc($result);
   
   	if($row['admin']=="User"){header("Location: Home.php");}
?>

<!DOCTYPE html>
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
				<li><a href="Index.php">Log out</a></li>
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
						<a href="upload/<?php echo $row['link_profile_pic'];?>" class="figure"><img src="upload/<?php echo $row['link_profile_pic'];?>" alt=""/></a>		
					</div>

					</h1>
					<div id="tweets">
						<h3><?php echo $row['jabatan'];?></h3>
						<p>
							<br>Nama User : <?php echo $row['nama_user'];?>
							<br>NIK : <?php echo $row['nik'];?>
							<br>Akun : <?php if (empty($row['admin'])){echo "User";}else{echo $row['admin'];}?>
						</p>
					</div>
					<div id="article">
						<h3>MENU ADMIN</h3>
						<?php
							if($row['admin']=="Admin")
							{
								echo "
								<p>
									<a href='Add_User.php'>> ADD USER<br></a>
									<a href='Add_Sites.php'><br>> ADD SITE<br></a>
									<a href='List_User.php'><br>> LIST USER<br></a>
									<a href='List_Sites.php'><br>> LIST SITES<br></a>
									<a href='riwayat_print.php'><br>> RIWAYAT CETAK<br></a>
								</p>
								";
							}
							else
								echo "
									<p>
									<a >> ADD USER<br></a>
									<a ><br>> ADD SITE<br></a>
									<a ><br>> LIST USER<br></a>
									<a ><br>> LIST SITES<br></a>
									<a ><br>> RIWAYAT CETAK<br></a>
								</p>
								";
						?>
					</div>
				</div>
				<div class="body">
					<h1>Formulir Input User</h1>
					<form action="Add_User_sql.php" method="post" enctype="multipart/form-data">
						<div id="tulis">
							<p>
							<label>Nama User:</label> <input type="text" name="Nama" size="50" required placeholder="Masukkan Nama Pegawai">
							</p>
							<p>
							<label>NIK(ID):</label> <input type="text" name="NIK" size="50" required pattern="[0-9]{1,5}" placeholder="Masukan NIK Pegawai">
							</p>
							<p>
							<label>Password:</label> <input type="text" name="Password" size="50" required placeholder="Masukkan Password Pegawai">
							</p>
							<p>
							<label>Jabatan:</label> <input type="text" name="Jabatan" size="50" placeholder="Masukkan Jabatan Pegawai">
							</p>
							<p>
							<label>Picture:</label>
							<input type="file" name="fileToUpload" id="fileToUpload" size="50"><br>
							</p>
    						<input type="submit" value="Submit" name="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<?php mysql_close($conn); ?>