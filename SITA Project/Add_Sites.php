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

					<h1>Formulir Input Site</h1>

					<div class="tab">
						<button class="tablinks" onclick="openTabs(event, 'Sites')">I</button>
						<button class="tablinks" onclick="openTabs(event, 'SuratLain')">II</button>
						<button class="tablinks" onclick="openTabs(event, 'Perpanjangan')">III</button>
						<button class="tablinks" onclick="openTabs(event, 'BAK')">IV</button>
						<button class="tablinks" onclick="openTabs(event, 'THO')">V</button>
						<button class="tablinks" onclick="openTabs(event, 'IPL')">VI</button>
						<button class="tablinks" onclick="openTabs(event, 'SP')">VII</button>
						<button class="tablinks" onclick="openTabs(event, 'Akta')">VIII</button>
						<button class="tablinks" onclick="openTabs(event, 'IjinLain')">IX</button>
						<button class="tablinks" onclick="openTabs(event, 'SKet')">X</button>
						<button class="tablinks" onclick="openTabs(event, 'SK')">XI</button>
						<button class="tablinks" onclick="openTabs(event, 'PBB')">XII</button>
						<button class="tablinks" onclick="openTabs(event, 'SKRD')">XIII</button>
						<button class="tablinks" onclick="openTabs(event, 'IMB')">XIV</button>
						<button class="tablinks" onclick="openTabs(event, 'IMTU')">XV</button>
						<button class="tablinks" onclick="openTabs(event, 'IjinDep')">XVI</button>
						<button class="tablinks" onclick="openTabs(event, 'IPTT')">XVII</button>
						<button class="tablinks" onclick="openTabs(event, 'IPB')">XVIII</button>
						<button class="tablinks" onclick="openTabs(event, 'IIP')">XIX</button>
						<button class="tablinks" onclick="openTabs(event, 'Genset')">XX</button>
						<button class="tablinks" onclick="openTabs(event, 'Comcase')">XXI</button>
					</div>

					<form id="satu" action="List_Sites.php" method="post" enctype="multipart/form-data">
						<div id="site">
							<div id="Sites" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Informasi Sites</h2>
										<p>
											<label for="a">Site ID :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Nama Site :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Status Lahan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Status Tower :</label>   
											<select name="cars">
											    <option value="volvo">Beli	</option>
											    <option value="saab">Pinjam</option>
											</select>
										</p>
										<p>
											<label for="a">Pemilik Tower :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Alamat Site :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Kota/Kabupaten :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Kontraktor Utama :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Penyedia Menara :</label> <input type="text" name="NamaSite" size="50">
										</p>

										<p>
											<label for="a">Branch :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Longitude :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Latitude :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">On Air Date :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Colocated Site :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">BTS Type :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Site Type :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Tower Height :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Tower Type :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Shelter Type :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Shelter Size :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Luas Lahan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Luas Jalan Akses :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Durasi Sewa :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Denah Tanah :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Peta Radius Tower :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Sketsa Batas Lahan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Tanggal Mulai Sewa :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Tanggal Akhir Sewa :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Ijin PKS :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Harga/Tahun :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Remark :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<br><input type="submit" value="Submit" name="submit">			
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SuratLain" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Surat Lain</h2>
										<p>
											<label for="a">Status Jaminan Hukum :</label>   
											<select name="cars">
											    <option value="volvo">Ada</option>
											    <option value="saab">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Ijin Bekerja :</label>   
											<select name="cars">
											    <option value="volvo">Ada</option>
											    <option value="saab">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Perjanjian Sewa Tanah :</label>   
											<select name="cars">
											    <option value="volvo">Ada</option>
											    <option value="saab">Tidak</option>
											</select>
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Perpanjangan" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Perpanjangan</h2>
										<p>
											<label for="a">Pagu :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">PIC :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">SPPH :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Vendor List :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Invoice :</label> <input type="date" id="myDate" value="">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Perpanjangan" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Perpanjangan</h2>
										<p>
											<label for="a">Pagu :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">PIC :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">SPPH :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Vendor List :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Invoice :</label> <input type="date" id="myDate" value="">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="BAK" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Berita Acara Kesepakatan</h2>
										<p>
											<label for="a">No BAK :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Tanggal BAK :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Harga BAK :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Status :</label> <input type="text" name="NamaSite" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="THO" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Tabel HO</h2>
										<p>
											<label for="a">No HO :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Status HO :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Start Tahun HO :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Daftar Ulang HO :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Tanggal Start HO :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Tanggal Finish HO :</label> <input type="date" id="myDate" value="">
										</p>
										
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IPL" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Identitas Pemilik Lahan</h2>
										<p>
											<label for="a">KTP Pemilik :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Kartu Keluarga Pemilik :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Pemilik Lahan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Orang yang dikuasakan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Alamat Pemilik :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Telefon :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">No. HP :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">E-Mail :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Surat Persetujuan Keluarga :</label> <input type="text" name="NamaSite" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SP" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Surat Pernyataan</h2>
										<p>
											<label for="a">Surat Pernyataan :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Ahli Waris :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Janda:</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Kepemilikan Tanah :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Pelepasan Hak :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Pembayaran:</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Penguasaan Fisik Tanah:</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Peralihan Atas Pekarangan :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Persetujuan Kepala Desa :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Tanah Pemohon :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Tidak Keberatan Jalan Pribadi :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Tidak Keberatan Jalan Umum :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Akta" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Akta</h2>
										<p>
											<label for="a">Akta Hibah :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Akta Jual Beli Sewa :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Akta Hak Bersama :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Akta Warisan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Akta Pemisahan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Akta Nikah :</label> <input type="text" name="NamaSite" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IjinLain" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Ijin Lain</h2>
										<p>
											<label for="a">Ijin Perubahan Pengguna Tanah :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Ijin IPPT :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Ijin Warga :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Ijin UKL UPL :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Ijin Sertifikat Tanah :</label> <input type="text" name="NamaSite" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SKet" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Surat Keterangan</h2>
										<p>
											<label for="a">Surat Keterangan Akses Lahan Jalan :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Asal Tanah :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Beda Luas Tanah :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Beda Nama :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Fatwa Waris :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Kematian :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Penduduk :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Permohonan IMB, HO, dan IP :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Persetujuan Sewa Lahan :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Riwayat Tanah :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Suami Istri :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Tanah :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Tidak Sengketa :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Tidak Keberatan Didirikan :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SK" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Surat Kuasa</h2>
										<p>
											<label for="a">Surat Kuasa :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Kuasa Pengambilan Jaminan Asli :</label>   
											<select name="cars">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="PBB" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Informasi Pajak Bumi dan Bangunan</h2>
										<p>
											<label for="a">Nomor Objek Pajak :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Nilai PBB :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Tanggal Mulai :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Tanggal Jatuh Tempo :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Status :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">NJOP Tanah :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">NJOP Bangunan :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Surat PBB :</label> <input type="text" name="NamaSite" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SKRD" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>SKRD dan RPM</h2>
										<p>
											<label for="a">Nomor SKRD :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Nilai SKRD :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Tanggal Jatuh Tempo :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Koefisien SKRD :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Status :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Surat SKRD :</label> <input type="text" name="NamaSite" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IMB" class="tabcontent">
								<table border="0">
									<a id="detail">
										<h2>Informasi Ijin Mendirikan Bangunan</h2>
										<p>
											<label for="a">Nomor IMB :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Status IMB :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Durasi IMB :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Daftar Ulang IMB :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Tanggal Awal Mulai IMB :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Tanggal Akhir IMB :</label> <input type="date" id="myDate" value="">
										</p>
										<p>
											<label for="a">Status Kepengurusan IMB :</label> <input type="text" name="NamaSite" size="50">
										</p>
										<p>
											<label for="a">Mitra Pengurusa IMB :</label> <input type="text" name="NamaSite" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>


					</form>



				</div>
			</div>
		</div>
	</body>
</html>
<!-- - - - - - - - - - JavaScript - - - - - - - - - -->
<script>
document.getElementsByClassName('tablinks')[0].click()
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