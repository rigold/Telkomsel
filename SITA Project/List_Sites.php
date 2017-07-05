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
						<a href="Site_Daerah.php"> Bojonegoro </a> 
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
					<h1>List Site</h1>
					<br>
					<div class="line-separator"></div>
								<table id="sites">
									<tr>
										<th>
											Informasi Site
										</th>
										<th>
											Informasi Pemilik
										</th>
										<th>
											Action
										</th>
									</tr>

									<tr>
										<td>
											<ul>
												<li>
													Nama Site : Keputih 212
												</li>
												<li>
													Site ID : K212Surabaya
												</li>
												<li>
													Alamat : Keputih Gang Makam Blok A no 10
												</li>
											</ul>
										</td>
										<td>	
											<ul>
												<li>
													Nama : Tomson Pangaribuan
												</li>
												<li>
													Alamat : Perumdos ITS blok T no 93
												</li>
											</ul>
										</td>
										<td>
											<button type="button" onclick="location.href='Edit_Sites.php';">Edit</button>
											<button type="button" onclick="location.href='Detail.php';">Detail</button>
										</td>
									</tr>
									<tr>
										<td>
											<ul>
												<li>
													Nama Site : Kejawan 119
												</li>
												<li>
													Site ID : K119Surabaya
												</li>
												<li>
													Alamat : Kejawan no 15
												</li>
											</ul>
										</td>
										<td>	
											<ul>
												<li>
													Nama : Gideon Siburian
												</li>
												<li>
													Alamat : Keputih Gang Pasar no 17
												</li>
											</ul>
										</td>
										<td>
											<button type="button" onclick="location.href='Edit_Sites.php';">Edit</button>
											<button type="button" onclick="location.href='Detail.php';">Detail</button>
										</td>
									</tr>									

									<tr>
										<td>
											<ul>
												<li>
													Nama Site :<?php echo $_POST["NamaSite"]; ?>
												</li>
												<li>
													Site ID :<?php echo $_POST["SiteID"]; ?>
												</li>
												<li>
													Alamat :<?php echo $_POST["Alamat"]; ?>
												</li>
											</ul>
											
										</td>
										<td>	
											<ul>
												<li>
													Nama :<?php echo $_POST["NamaMilik"]; ?>
												</li>

												<li>
													Alamat :<?php echo $_POST["AlamatMilik"]; ?>
												</li>
											</ul>
										</td>
										<td>
											<button type="button" onclick="location.href='Edit_Sites.php';">Edit</button>
											<button type="button" onclick="location.href='Detail.php';">Detail</button>
										</td>	
									</tr>
								</table>

				</div>
			</div>
		</div>
	</body>
</html>


