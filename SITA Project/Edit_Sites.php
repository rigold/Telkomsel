<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>SITA Project</title>
		<link rel="stylesheet" href="css/styleinput.css" type="text/css" charset="utf-8" />
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
					    <a href="PBB.php">PBB</a>
					    <a href="RPM.php">RPM</a>
					    <a href="Comcase.php">Comcase</a>
				    </div>
				</li>
				<li><a href="About.php">About</a></li>
				<li><a href="Index.php">Log out</a></li>

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
					
					<p><br><br>&#169; Copyright 2017. Created by R.I.KE.N</p>
				</div>

				<div class="body">
					<img src="images/bg2.png" alt="ab2s-img" class="
					abs2-img" />

					<h1>Formulir Edit Site</h1>

					<form action="List_Sites.php" method="post" enctype="multipart/form-data">
						<div id="site">
							<h3>Informasi Site</h3>
							<p>
							<label for="a">Nama Site:</label> <input type="text" name="NamaSite" size="50" placeholder="Keputih 007">
							</p>
							<p>
							<label for="b">Site ID:</label> <input type="text" name="SiteID" size="50" placeholder="007006005004">
							</p>
							<p>
							<label for="c">Status:</label> <input type="text" name="Status" size="50" placeholder="Beli">
							</p>
							<p>
							<label for="d">Alamat:</label> <input type="text" name="Alamat" size="50" placeholder="Keputih Gang Makam Blok E no 23">
							</p>
							<p>
							<label for="e">Luas Lahan:</label> <input type="text" name="Luas" size="50" placeholder="350 m2">
							</p>
							<p>
							<label for="f">Durasi Sewa:</label> <input type="text" name="Durasi" size="50" placeholder="10 Tahun">
							</p>
							<p>
							<label for="g">Gambar Site:</label>
							<input type="file" name="fileToUpload" id="fileToUpload" size="50"><br>
							</p>
							<h3>Identitas Pemilik Lahan</h3>
							<p>
							<label for="e">No KTP:</label> <input type="text" name="KTP" size="50" placeholder="0910812710827">
							</p>
							<p>
							<label for="e">Nama Pemilik:</label> <input type="text" name="NamaMilik" size="50" placeholder="Rigold">
							</p>
							<p>
							<label for="e">Alamat:</label> <input type="text" name="AlamatMilik" size="50" placeholder="Keputih Gang Makam Blok E no 23">
							</p>
							<p>
							<label for="e">No Telefon:</label> <input type="text" name="HP" size="50" placeholder="081362827722">
							</p>
    						<input type="submit" value="Submit" name="submit">
    						<a href='List_Sites.php'>
    							<button type="button" onclick="alert('Delete Success!');" "location.href='List_Sites.php';">Delete</button>
    						</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>