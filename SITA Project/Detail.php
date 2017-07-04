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

					<h1>List Site</h1>
					<br>
					<div class="line-separator"></div>
							
					<div class="tab">
						<button class="tablinks" onclick="openTabs(event, 'Sites')">Informasi Sites</button>
						<button class="tablinks" onclick="openTabs(event, 'Pemilik')">Identitas Pemilik Lahan</button>
						<button class="tablinks" onclick="openTabs(event, 'PBB')">Informasi PBB</button>
						<button class="tablinks" onclick="openTabs(event, 'SKRD')">SKRD/RPM</button>
					</div>

					<div id="Sites" class="tabcontent">
						<table border="0">
									<a id="detail">
										<tr>
											<th>
												Site ID
											</th>
											<td>	
												: K212Surabaya
											</td>
										</tr>
										<tr>
											<th>
												Nama Site
											</th>
											<td>	
												: Keputih 212
											</td>
										</tr>									
										<tr>
											<th>
												Status Lahan
											</th>
											<td>	
												: Beli
											</td>	
										</tr>
										<tr>
											<th>
												Status Beli/Pinjam
											</th>
											<td>	
												: Beli
											</td>
										</tr>
										<tr>
											<th>
												Pemilik Tower
											</th>
											<td>	
												: Telkomsel
											</td>
										</tr>									
										<tr>
											<th>
												Alamat Site
											</th>
											<td>	
												: Keputih Gang Makam Blok A no 10
											</td>	
										</tr>
										<tr>
											<th>
												Kota/Kabupaten
											</th>
											<td>	
												: Surabaya
											</td>
										</tr>
										<tr>
											<th>
												Kontraktor Utama
											</th>
											<td>	
												: PT. Suka Senang
											</td>
										</tr>									
										<tr>
											<th>
												Penyedia Menara
											</th>
											<td>	
												: PT. Sedih Menangis
											</td>	
										</tr>
										<tr>
											<th>
												Branch
											</th>
											<td>	
												: Surabaya
											</td>
										</tr>
										<tr>
											<th>
												Tower Height
											</th>
											<td>	
												: 100 m
											</td>
										</tr>									
										<tr>
											<th>
												Luas Lahan
											</th>
											<td>	
												: 350 m2
											</td>	
										</tr>
										<tr>
											<th>
												Durasi Sewas
											</th>
											<td>	
												: 10 Tahun
											</td>
										</tr>
										<tr>
											<th>
												Tanggal Mulai Sewa
											</th>
											<td>	
												: 17/08/2010
											</td>
										</tr>									
										<tr>
											<th>
												Tanggal Akhir Sewa
											</th>
											<td>	
												: 17/08/2020
											</td>	
										</tr>
										<tr>
											<th>
												Remark
											</th>
											<td>	
												: Baik baik saja
											</td>	
										</tr>
									</a>
						</table>
					</div>

					<div id="Pemilik" class="tabcontent">
						<table border="0">
									<a id="detail">
										<tr>
											<th>
												No. KTP
											</th>
											<td>	
												: 31-73-02-15-07-91-0004
											</td>
										</tr>
										<tr>
											<th>
												Kartu Keluarga
											</th>
											<td>	
												: 3203041711053312
											</td>
										</tr>									
										<tr>
											<th>
												Pemilik Lahan
											</th>
											<td>	
												: Tagor Ba
											</td>	
										</tr>
										<tr>
											<th>
												Alamat Pemilik
											</th>
											<td>	
												: Keputih Gang Makam Blok A no 09
											</td>
										</tr>
										<tr>
											<th>
												Pemilik Tower
											</th>
											<td>	
												: Telkomsel
											</td>
										</tr>									
										<tr>
											<th>
												No. Handphone
											</th>
											<td>	
												: 0812641648
											</td>	
										</tr>
										<tr>
											<th>
												E-Mail
											</th>
											<td>	
												: TagorBa@gmail.com
											</td>
										</tr>
										<tr>
											<th>
												Surat Persetujuan Keluarga
											</th>
											<td>	
												: Ada
											</td>
										</tr>									
									</a>
						</table>
					</div>
					<div id="PBB" class="tabcontent">
						<table border="0">
									<a id="detail">
										<tr>
											<th>
												Nomor Objek Pajak
											</th>
											<td>	
												: 36.75.742.010.022-0116.0
											</td>
										</tr>
										<tr>
											<th>
												Nilai PBB
											</th>
											<td>	
												: 3.000.000 Rupiah
											</td>
										</tr>									
										<tr>
											<th>
												Tanggal Mulai
											</th>
											<td>	
												: 17/08/2010
											</td>	
										</tr>
										<tr>
											<th>
												Tanggal Jatuh Tempo
											</th>
											<td>	
												: 17/08/2020
											</td>
										</tr>
										<tr>
											<th>
												Status
											</th>
											<td>	
												: Baik baik saja
											</td>
										</tr>									
										<tr>
											<th>
												NJOP Tanah
											</th>
											<td>	
												: 3.000.000 Rupiah
											</td>	
										</tr>
										<tr>
											<th>
												NJOP Bangunan
											</th>
											<td>	
												: 3.000.000 Rupiah
											</td>
										</tr>
										<tr>
											<th>
												Surat PBB
											</th>
											<td>	
												<img src="images/cute.jpg" alt="abs-img" width="200" height="200" />
											</td>
										</tr>									
									</a>
						</table>
					</div>
					<div id="SKRD" class="tabcontent">
						<table border="0">
									<a id="detail">
										<tr>
											<th>
												Nomor SKRD
											</th>
											<td>	
												: 36.75.742.010.022-0116.0
											</td>
										</tr>
										<tr>
											<th>
												Harga SKRD
											</th>
											<td>	
												: 3.000.000 Rupiah
											</td>
										</tr>
										<tr>
											<th>
												Tanggal Jatuh Tempo
											</th>
											<td>	
												: 17/08/2020
											</td>
										</tr>
										<tr>
											<th>
												Koefisien SKRD
											</th>
											<td>	
												: 1,1
											</td>
										</tr>									
										<tr>
											<th>
												NJOP Tanah
											</th>
											<td>	
												: 3.000.000 Rupiah
											</td>	
										</tr>
										<tr>
											<th>
												Status
											</th>
											<td>	
												: ???
											</td>
										</tr>
										<tr>
											<th>
												Surat SKRD
											</th>
											<td>	
												<img src="images/cute2.jpg" alt="abs-img" width="200" height="200" />
											</td>
										</tr>									
									</a>
						</table>
					</div>
					<!--<div class="wrap">
						<button type="button" onclick="location.href='Edit_Sites.php';">Edit</button>
					</div> -->
					
				</div>
			</div>
		</div>
	</body>
</html>

<!-- - - - - - - - - - JavaScript - - - - - - - - - -->
<script>
function openTabs(evt, TabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(TabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>