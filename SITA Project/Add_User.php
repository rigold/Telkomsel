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
	      				<a href="#">Perpanjangan Sewa</a>
					    <a href="Izin.php">Perizinan</a>
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

					<h1>Formulir Input User</h1>

					<form action="List_User.php" method="post" enctype="multipart/form-data">
						<div id="tulis">
							<p>
							<label for="a">Nama User:</label> <input type="text" name="Nama" size="50">
							</p>
							<p>
							<label for="b">NIK(ID):</label> <input type="text" name="NIK" size="50">
							</p>
							<p>
							<label for="c">Password:</label> <input type="text" name="Password" size="50">
							</p>
							<p>
							<label for="d">Jabatan:</label> <input type="text" name="Jabatan" size="50">
							</p>
							<p>
							<label for="e">Profile Picture:</label>
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