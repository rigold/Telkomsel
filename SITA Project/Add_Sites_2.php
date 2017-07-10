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
	      				<a href="Site_Daerah.php"> Bangkalan </a> 
						<a href="Site_Daerah.php"> Banyuwangi </a> 
						<a href="Site_Daerah.php"> Batu </a> 
						<a href="Site_Daerah.php"> Blitar Kab. </a> 
						<a href="Site_Daerah.php"> Blitar Kota </a> 
						<a href="Site_Daerah.php#"> Bojonegoro </a> 
						<a href="Site_Daerah.php"> Bondowoso </a> 
						<a href="Site_Daerah.php"> Gresik </a> 
						<a href="Site_Daerah.php"> Jember </a> 
						<a href="Site_Daerah.php"> Jombang </a> 
						<a href="Site_Daerah.php"> Kediri Kab. </a> 
						<a href="Site_Daerah.php"> Kediri Kota </a> 
						<a href="Site_Daerah.php"> Lamongan </a> 
						<a href="Site_Daerah.php"> Lumajang </a> 
						<a href="Site_Daerah.php"> Madiun Kab. </a> 
						<a href="Site_Daerah.php"> Madiun Kota </a> 
						<a href="Site_Daerah.php"> Magetan </a> 
						<a href="Site_Daerah.php"> Malang Kab. </a> 
						<a href="Site_Daerah.php"> Malang Kota </a> 
						<a href="Site_Daerah.php"> Mojokerto Kab. </a> 
						<a href="Site_Daerah.php"> Mojokerto Kota </a> 
						<a href="Site_Daerah.php"> Nganjuk </a> 
						<a href="Site_Daerah.php"> Ngawi </a> 
						<a href="Site_Daerah.php"> Pacitan </a> 
						<a href="Site_Daerah.php"> Pamekasan </a> 
						<a href="Site_Daerah.php"> Pasuruan Kab. </a> 
						<a href="Site_Daerah.php"> Pasuruan Kota </a> 
						<a href="Site_Daerah.php"> Ponorogo </a> 
						<a href="Site_Daerah.php"> Probolinggo Kab. </a> 
						<a href="Site_Daerah.php"> Probolinggo Kota </a> 
						<a href="Site_Daerah.php"> Sampang </a> 
						<a href="Site_Daerah.php"> Sidoarjo </a> 
						<a href="Site_Daerah.php"> Situbondo </a> 
						<a href="Site_Daerah.php"> Sumenep </a> 
						<a href="Site_Daerah.php"> Surabaya </a> 
						<a href="Site_Daerah.php"> Trenggalek </a> 
						<a href="Site_Daerah.php"> Tuban </a> 
						<a href="Site_Daerah.php"> Tulungagung </a> 

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
				<form action="Search.php" id="search">
					<input type="text"/>
					<input type="submit" onclick="location.href='Search.php';" value="" id="submit"/>
				</form>
			</ul>	
		</div>
		<div id="background">
			<img src="images/bg1.jpg" alt="abs-img" class="abs-img" />
			<div class="page">
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
					
					<p><br><br>&#169; Copyright 2017. Created by R.I.KE.N</p>
				</div>
				<div class="body">
					<h1>Formulir Input User</h1>
					<form action="Add_User_2_sql.php" method="post" enctype="multipart/form-data">
						<div id="tulis">
							<h2>Informasi Sites</h2>
							<p>
							<label for="a">Site ID :</label> <input type="text" name="Site_ID" size="50">
							</p>
							<p>
							<label for="a">Nama Site :</label> <input type="text" name="Nama_Site" size="50">
							</p>
							<p>
							<label for="a">Status Lahan :</label> <input type="text" name="Status_Lahan" size="50">
							</p>
							<p>
							<label for="a">Status Tower :</label>   
							<select name="Satus_Tower">
							    <option value="Beli">Beli	</option>
							    <option value="Pinjam">Pinjam</option>
							</select>
							</p>
							<p>
							<label for="a">Pemilik Tower :</label> <input type="text" name="Pemilik_Tower" size="50">
							</p>
							<p>
							<label for="a">Alamat Site :</label> <input type="text" name="Alamat_Site" size="50">
							</p>
							<p>
							<label for="a">Kota/Kabupaten :</label> <input type="text" name="Kota_Kabupaten" size="50">
							</p>
							<p>
							<label for="a">Kontraktor Utama :</label> <input type="text" name="Kontraktor_Utama" size="50">
							</p>
							<p>
							<label for="a">Penyedia Menara :</label> <input type="text" name="Penyedia_Menara" size="50">
							</p>
							<p>
							<label for="a">Branch :</label> <input type="text" name="Branch" size="50">
							</p>
							<p>
							<label for="a">Longitude :</label> <input type="text" name="Longitude" size="50">
							</p>
							<p>
							<label for="a">Latitude :</label> <input type="text" name="Latitude" size="50">
							</p>
							<p>
							<label for="a">On Air Date :</label> <input type="date" id="On_Air_Date" name="On_Air_Date">
							</p>
							<p>
							<label for="a">Colocated Site :</label> <input type="text" name="Colocated_Site" size="50">
							</p>
							<p>
							<label for="a">BTS Type :</label> <input type="text" name="BTS_Type" size="50">
							</p>
							<p>
							<label for="a">Site Type :</label> <input type="text" name="Site_Type" size="50">
							</p>
							<p>
							<label for="a">Tower Height :</label> <input type="text" name="Tower_Height" size="50">
							</p>
							<p>
							<label for="a">Tower Type :</label> <input type="text" name="Tower_Type" size="50">
							</p>
							<p>
							<label for="a">Shelter Type :</label> <input type="text" name="Shelter_Type" size="50">
							</p>
							<p>
							<label for="a">Shelter Size :</label> <input type="text" name="Shelter_Size" size="50">
							</p>
							<p>
							<label for="a">Luas Lahan :</label> <input type="text" name="Luas_Lahan" size="50">
							</p>
							<p>
							<label for="a">Luas Jalan Akses :</label> <input type="text" name="Luas_Jalan_Akses" size="50">
							</p>
							<p>
							<label for="a">Denah Tanah :</label> <input type="file" name="Denah_Tanah" id="Denah_Tanah" size="50"><br>
							</p>
							<p>
							<label for="a">Peta Radius Tower :</label> <input type="file" name="Peta_Lokasi_Radius_Tower" id="Peta_Lokasi_Radius_Tower" size="50"><br>
							</p>
							<p>
							<label for="a">Sketsa Batas Lahan :</label> <input type="file" name="Sketsa_Batas_Lahan" id="Sketsa_Batas_Lahan" size="50"><br>
							</p>
							<p>
							<label for="a">Tanggal Mulai Sewa :</label> <input type="date" id="Tanggal_Mulai_Sewa" name="Tanggal_Mulai_Sewa" >
							</p>
							<p>
							<label for="a">Tanggal Akhir Sewa :</label> <input type="date" id="Tanggal_Akhir_Sewa" name="Tanggal_Akhir_Sewa" >
							</p>
							<p>
							<label for="a">Harga/Tahun :</label> <input type="text" name="Harga_Per_Tahun" size="50">
							</p>
							<p>
							<label for="a">Remark :</label> <input type="text" name="Remark" size="50">
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>