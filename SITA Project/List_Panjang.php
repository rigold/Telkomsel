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
	      				<a href="Site_Daerah.php">Bangkalan</a> 
						<a href="Site_Daerah.php">Banyuwangi</a> 
						<a href="Site_Daerah.php">Batu</a> 
						<a href="Site_Daerah.php">Blitar Kab.</a> 
						<a href="Site_Daerah.php">Blitar Kota</a> 
						<a href="Site_Daerah.php">Bojonegoro</a> 
						<a href="Site_Daerah.php">Bondowoso</a> 
						<a href="Site_Daerah.php">Gresik</a> 
						<a href="Site_Daerah.php">Jember</a> 
						<a href="Site_Daerah.php">Jombang</a> 
						<a href="Site_Daerah.php">Kediri Kab.</a> 
						<a href="Site_Daerah.php">Kediri Kota</a> 
						<a href="Site_Daerah.php">Lamongan</a> 
						<a href="Site_Daerah.php">Lumajang</a> 
						<a href="Site_Daerah.php">Madiun Kab.</a> 
						<a href="Site_Daerah.php">Madiun Kota</a> 
						<a href="Site_Daerah.php">Magetan</a> 
						<a href="Site_Daerah.php">Malang Kab.</a> 
						<a href="Site_Daerah.php">Malang Kota</a> 
						<a href="Site_Daerah.php">Mojokerto Kab.</a> 
						<a href="Site_Daerah.php">Mojokerto Kota</a> 
						<a href="Site_Daerah.php">Nganjuk</a> 
						<a href="Site_Daerah.php">Ngawi</a> 
						<a href="Site_Daerah.php">Pacitan</a> 
						<a href="Site_Daerah.php">Pamekasan</a> 
						<a href="Site_Daerah.php">Pasuruan Kab.</a> 
						<a href="Site_Daerah.php">Pasuruan Kota</a> 
						<a href="Site_Daerah.php">Ponorogo</a> 
						<a href="Site_Daerah.php">Probolinggo Kab.</a> 
						<a href="Site_Daerah.php">Probolinggo Kota</a> 
						<a href="Site_Daerah.php">Sampang</a> 
						<a href="Site_Daerah.php">Sidoarjo</a> 
						<a href="Site_Daerah.php">Situbondo</a> 
						<a href="Site_Daerah.php">Sumenep</a> 
						<a href="Site_Daerah.php">Surabaya</a> 
						<a href="Site_Daerah.php">Trenggalek</a> 
						<a href="Site_Daerah.php">Tuban</a> 
						<a href="Site_Daerah.php">Tulungagung</a> 
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
					
					<p><br><br>&#169; Copyright 2017. Created by Rigold Nainggolan & Tomson Pangaribuan</p>
				</div>
				<div class="body">
					<h1><a href="Home.php">LIST PERPANJANGAN</a></h1>
					<br>
					<div class="line-separator"></div>
					<div id="featured">
						<div>
							<br>
							<h5>Cari Berdasarkan Tahun :
							</h5>
						</div>
						<div>
							<form1 action="Search.php" id="search">
								<input type="text"/>
								<input type="submit" onclick="location.href='Search.php';" value="" id="submit"/>
							</form1>
							<table>
							  <tr>
							  	<th>No.</th>
							  	<th>Site ID</th>
								<th>Site Name</th>
								<th>Alamat</th>
								<th>Kab.Kota</th>
								<th>Pagu</th>
								<th>Harga Rata Rata</th>
								<th>Awal Kontrak</th>
								<th>Akhir Kontrak</th>
								<th>Status</th>
							  </tr>
							  <tr>
							    <td>1</td>
							    <td>SBY123</td>
							    <td>Surabaya X</td>
							    <td>Surabaya</td>
							    <td>Surabaya</td>
							    <td>50.000.000</td>
							    <td>45.000.000</td>
							    <td>1/01/2007</td>
							    <td>1/01/2017</td>
							    <td>Habis</td>
							  </tr>
							  <tr>
							    <td>2</td>
							    <td>-</td>
							    <td>-</td>
							    <td>-</td>
							    <td>-</td>
							    <td>-</td>
							    <td>-</td>
							    <td>-</td>
							    <td>-</td>
							    <td>-</td>
							  </tr>
							  <tr>
							    <td>3</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>4</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>5</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>6</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>7</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>8</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>9</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>10</td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							  </tr>
							</table>
							
						</div>
						
					</div>
					<button onclick="myFunction() ">Print Halaman</button>
					<script>
						function myFunction() {
					    window.print();
					}
					</script>
					<div class="pagination">
						  <a href="#">&laquo;</a>
						  <a class="active" href="#">1</a>
						  <a href="Not_Found.php">2</a>
						  <a href="Not_Found.php">3</a>
						  <a href="Not_Found.php">&raquo;</a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>