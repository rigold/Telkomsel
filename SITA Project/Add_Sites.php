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
							<a href="List_User.php"><br>> LIST USER<br></a>
							<a href="List_Sites.php"><br>> LIST SITES<br></a>
						</p>
					</div>
					<p>&#169; Copyright 2017. Created by Rigold Nainggolan & Tomson Pangaribuan</p>
				</div>
				<div class="body">
					<h1>Formulir Input Site</h1>
					<div class="tab">
						<button class="tablinks" onclick="openTabs(event, 'Sites')">INFORMASI SITES</button>
						<button class="tablinks" onclick="openTabs(event, 'Perpanjangan')">PERPANJANGAN</button>
						<button class="tablinks" onclick="openTabs(event, 'BAK')">BAK</button>
						<button class="tablinks" onclick="openTabs(event, 'THO')">HO</button>
						<button class="tablinks" onclick="openTabs(event, 'IPL')">ID PEMILIK LAHAN</button>
						<button class="tablinks" onclick="openTabs(event, 'SP')">SURAT PERNYATAAN</button>
						<button class="tablinks" onclick="openTabs(event, 'Akta')">AKTA</button>
						<button class="tablinks" onclick="openTabs(event, 'IjinLain')">IJIN LAIN</button>
						<button class="tablinks" onclick="openTabs(event, 'SKet')">SURAT KETERANGAN</button>
						<button class="tablinks" onclick="openTabs(event, 'SK')">SURAT LAIN</button>
						<button class="tablinks" onclick="openTabs(event, 'PBB')">PBB</button>
						<button class="tablinks" onclick="openTabs(event, 'SKRD')">RPM</button>
						<button class="tablinks" onclick="openTabs(event, 'IMB')">IMB</button>
						<button class="tablinks" onclick="openTabs(event, 'IMTU')">IMTU</button>
						<button class="tablinks" onclick="openTabs(event, 'IjinDep')">IJIN DEPHUB/KOMINFO</button>
						<button class="tablinks" onclick="openTabs(event, 'IPTT')">IPTT</button>
						<button class="tablinks" onclick="openTabs(event, 'IPB')">IPB</button>
						<button class="tablinks" onclick="openTabs(event, 'IIP')">IJIN PRINSIP</button>
						<button class="tablinks" onclick="openTabs(event, 'Genset')">IJIN GENSET</button>
						<button class="tablinks" onclick="openTabs(event, 'Comcase')">COMCASE</button>
						<button class="tablinks" onclick="openTabs(event, 'Submit')">SUBMIT</button>
					</div>
					<form id="satu" action="Add_Sites_sql.php" method="post" enctype="multipart/form-data">
						<div id="site">
							<div id="Sites" class="tabcontent">
								<table border="0">
									<h2>Informasi Sites</h2>
									<a id="detail">
										
										<p>
											<label for="a">Site ID :</label> <input type="text" name="Site_ID" size="50" required pattern="{6}" title="Input hanya boleh 6 Karakter!">
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
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Perpanjangan" class="tabcontent">
								<table border="0">
									<h2>Perpanjangan</h2>
									<a id="detail">
										<p>
											<label for="a">Pagu :</label> <input type="text" name="Pagu" size="50">
										</p>
										<p>
											<label for="a">PIC :</label> <input type="text" name="PIC" size="50">
										</p>
										<p>
											<label for="a">SPPH :</label> <input type="text" name="SPPH" size="50">
										</p>
										<p>
											<label for="a">Vendor List :</label> <input type="text" name="Vendor_List" size="50">
										</p>
										<p>
											<label for="a">Invoice :</label> <input type="date" id="Invoice" name="Invoice" >
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="BAK" class="tabcontent">
								<table border="0">
									<h2>Berita Acara Kesepakatan</h2>
									<a id="detail">
										<p>
											<label for="a">No BAK :</label> <input type="text" name="Nomor_BAK" size="50" required>
										</p>
										<p>
											<label for="a">Tanggal BAK :</label> <input type="date" id="Tanggal_BAK" name="Tanggal_BAK" >
										</p>
										<p>
											<label for="a">Harga BAK :</label> <input type="text" name="Harga_BAK" name="Harga_BAK" size="50">
										</p>
										<p>
											<label for="a">Status :</label> <input type="text" name="Status" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="THO" class="tabcontent">
								<table border="0">
									<h2>Tabel HO</h2>
									<a id="detail">
										<p>
											<label for="a">No HO :</label> <input type="text" name="Nomor_HO" size="50" required>
										</p>
										<p>
											<label for="a">Daftar Ulang HO :</label> <input type="date" id="Daftar_Ulang_HO" name="Daftar_Ulang_HO" >
										</p>
										<p>
											<label for="a">Tanggal Start HO :</label> <input type="date" id="Tanggal_Start_HO" name="Tanggal_Start_HO" >
										</p>
										<p>
											<label for="a">Tanggal Finish HO :</label> <input type="date" id="Tanggal_Finish_HO" name="Tanggal_Finish_HO" >
										</p>
										<p>
											<label for="a">Status HO :</label> <input type="text" name="Status_HO" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IPL" class="tabcontent">
								<table border="0">
									<h2>Identitas Pemilik Lahan</h2>
									<a id="detail">
										<p>
											<label for="a">KTP Pemilik :</label> <input type="text" name="KTP_Pemilik" size="50" required>
										</p>
										<p>
											<label for="a">Kartu Keluarga Pemilik :</label> <input type="text" name="Kartu_Keluarga_Pemilik" size="50">
										</p>
										<p>
											<label for="a">Pemilik Lahan :</label> <input type="text" name="Pemilik_Lahan" size="50">
										</p>
										<p>
											<label for="a">Orang yang dikuasakan :</label> <input type="text" name="Orang_Yang_Di_Kuasakan" size="50">
										</p>
										<p>
											<label for="a">Alamat Pemilik :</label> <input type="text" name="Alamat_Pemilik" size="50">
										</p>
										<p>
											<label for="a">Telepon :</label> <input type="text" name="Telepon" size="50">
										</p>
										<p>
											<label for="a">No. HP :</label> <input type="text" name="HP" size="50">
										</p>
										<p>
											<label for="a">E-Mail :</label> <input type="text" name="E_mail" size="50">
										</p>
										<p>
											<label for="a">Surat Persetujuan Keluarga :</label> <input type="text" name="Surat_Persetujuan_Keluarga" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SP" class="tabcontent">
								<table border="0">
									<h2>Surat Pernyataan</h2>
									<a id="detail">
										<p>
											<label for="a">Surat Pernyataan :</label>   
											<select name="SP">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Ahli Waris :</label>   
											<select name="SP_Ahli_Waris">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Janda:</label>   
											<select name="SP_Janda">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Kepemilikan Tanah :</label>   
											<select name="SP_Kepemilikan_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Pelepasan Hak :</label>   
											<select name="SP_Pelepasan_Hak">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Pembayaran:</label>   
											<select name="SP_Pembayaran">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Penguasaan Fisik Tanah:</label>   
											<select name="SP_Penguasaan_Fisik_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Peralihan Atas Pekarangan :</label>   
											<select name="SP_Peralihan_Atas_Pekarangan">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Persetujuan Kepala Desa :</label>   
											<select name="SP_Persetujuan_Kepala_Desa">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Tanah Pemohon :</label>   
											<select name="SP_Tanah_Pemohon">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Tidak Keberatan Jalan Pribadi :</label>   
											<select name="SP_Tidak_Keberatan_Jalan_Pribadi">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Pernyataan Tidak Keberatan Jalan Umum :</label>   
											<select name="SP_Tidak_Keberatan_Jalan_Umum">
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
									<h2>Akta</h2>
									<a id="detail">
										<p>
											<label for="a">Akta Hibah :</label> <input type="text" name="Akta_Hibah" size="50">
										</p>
										<p>
											<label for="a">Akta Jual Beli Sewa :</label> <input type="text" name="Akta_Jual_Beli_Sewa" size="50">
										</p>
										<p>
											<label for="a">Akta Hak Bersama :</label> <input type="text" name="Akta_Hak_Bersama" size="50">
										</p>
										<p>
											<label for="a">Akta Warisan :</label> <input type="text" name="Akta_Warisan" size="50">
										</p>
										<p>
											<label for="a">Akta Pemisahan :</label> <input type="text" name="Akta_Pemisahan" size="50">
										</p>
										<p>
											<label for="a">Akta Nikah :</label> <input type="text" name="Akta_Nikah" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IjinLain" class="tabcontent">
								<table border="0">
									<h2>Ijin Lain</h2>
									<a id="detail">
										<p>
											<label for="a">Ijin Perubahan Pengguna Tanah :</label> <input type="text" name="Ijin_Perubahan_Pengguna_Tanah" size="50">
										</p>
										<p>
											<label for="a">Ijin Warga :</label> <input type="text" name="Ijin_Warga" size="50">
										</p>
										<p>
											<label for="a">Ijin UKL UPL :</label> <input type="text" name="Ijin_UKL_UPL" size="50">
										</p>
										<p>
											<label for="a">Ijin Sertifikat Tanah :</label> <input type="text" name="Ijin_Sertifikat_Tanah" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SKet" class="tabcontent">
								<table border="0">
									<h2>Surat Keterangan</h2>
									<a id="detail">
										<p>
											<label for="a">Surat Keterangan Akses Lahan Jalan :</label>   
											<select name="SK_Akses_Lahan_Jalan">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Asal Tanah :</label>   
											<select name="SK_Asal_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Beda Luas Tanah :</label>   
											<select name="SK_Beda_Luas_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Beda Nama :</label>   
											<select name="SK_Beda_Nama">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Fatwa Waris :</label>   
											<select name="SK_Fatwa_Waris">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Kematian :</label>   
											<select name="SK_Kematian">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Penduduk :</label>   
											<select name="SK_Penduduk">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Permohonan IMB, HO, dan IP :</label>   
											<select name="SK_Permohonan_IMB_dll">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Persetujuan Sewa Lahan :</label>   
											<select name="SK_Persetujuan_Sewa_Lahan">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Riwayat Tanah :</label>   
											<select name="SK_Riwayat_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Suami Istri :</label>   
											<select name="SK_Suami_Istri">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Tanah :</label>   
											<select name="SK_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Tidak Sengketa :</label>   
											<select name="SK_Tidak_Sengketa">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Keterangan Tidak Keberatan Didirikan :</label>   
											<select name="SK_Tidak_Keberatan_Didirikan">
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
									<h2>Surat Lain</h2>
									<a id="detail">
										<p>
											<label for="a">Surat Ijin PKS :</label> <input type="text" name="Surat_Ijin_PKS" size="50">
										</p>
										<p>
											<label for="a">Surat Kuasa :</label>   
											<select name="Surat_Kuasa">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Kuasa Pengambilan Jaminan Asli :</label>   
											<select name="Surat_Kuasa_Pengambilan_Jaminan_Asli">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Kuasa Jaminan Hukum :</label>   
											<select name="Surat_Jaminan_Hukum">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label for="a">Surat Perjanjian Sewa Tanah :</label>   
											<select name="Surat_Perjanjian_Sewa_Tanah">
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
									<h2>Informasi Pajak Bumi dan Bangunan</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor Objek Pajak :</label> <input type="text" name="Nomor_Objek_Pajak" size="50" required>
										</p>
										<p>
											<label for="a">Nilai PBB :</label> <input type="text" name="Nilai_PBB" size="50">
										</p>
										<p>
											<label for="a">Tanggal Mulai :</label> <input type="date" id="Tanggal_Mulai" name="Tanggal_Mulai" >
										</p>
										<p>
											<label for="a">Tanggal Jatuh Tempo :</label> <input type="date" id="Tanggal_Jatuh_Tempo" name="Tanggal_Jatuh_Tempo" >
										</p>
										<p>
											<label for="a">Status :</label> <input type="text" name="Status_PBB" size="50">
										</p>
										<p>
											<label for="a">NJOP Tanah :</label> <input type="text" name="NJOP_Tanah" size="50">
										</p>
										<p>
											<label for="a">NJOP Bangunan :</label> <input type="text" name="NJOP_Bangunan" size="50">
										</p>
										<p>
											<label for="a">Surat PBB :</label> <input type="file" name="Surat_PBB" id="Surat_PBB" size="50"><br>
										</p>
										<p>
											<label for="a">Koefisien PBB :</label> <input type="text" name="Koef_PBB" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SKRD" class="tabcontent">
								<table border="0">
									<h2>SKRD dan RPM</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor SKRD :</label> <input type="text" name="No_SKRD" size="50" required>
										</p>
										<p>
											<label for="a">Nilai SKRD :</label> <input type="text" name="Harga_SKRD" size="50">
										</p>
										<p>
											<label for="a">Tanggal Jatuh Tempo :</label> <input type="date" id="Tanggal_Jatuh_Tempo" name="Tanggal_Jatuh_Tempo" >
										</p>
										<p>
											<label for="a">Koefisien SKRD :</label> <input type="text" name="Koef_SKRD" size="50">
										</p>
										<p>
											<label for="a">Status :</label> <input type="text" name="Status_SKRD" size="50">
										</p>
										<p>
											<label for="a">Surat SKRD :</label> <input type="file" name="Surat_SKRD" id="Surat_SKRD" size="50"><br>	
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IMB" class="tabcontent">
								<table border="0">
									<h2>Informasi Ijin Mendirikan Bangunan</h2>
									<a id="detail">										
										<p>
											<label for="a">Nomor IMB :</label> <input type="text" name="Nomor_IMB" size="50" required>
										</p>
										<p>
											<label for="a">Mitra Pengurusa IMB :</label> <input type="text" name="Mitra_Pengurus_IMB" size="50">
										</p>
										<p>
											<label for="a">Daftar Ulang IMB :</label> <input type="date" id="Daftar_Ulang_IMB" name="Daftar_Ulang_IMB" >
										</p>
										<p>
											<label for="a">Tanggal Awal Mulai IMB :</label> <input type="date" id="Tanggal_Awal_IMB" name="Tanggal_Awal_IMB" >
										</p>
										<p>
											<label for="a">Tanggal Akhir IMB :</label> <input type="date" id="Tanggal_Akhir_IMB" name="Tanggal_Akhir_IMB" >
										</p>
										<p>
											<label for="a">Status Kepengurusan IMB :</label> <input type="text" name="Status_Kepengurusan_IMB" size="50">
										</p>
										<p>
											<label for="a">Status IMB :</label> <input type="text" name="Status_IMB" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IMTU" class="tabcontent">
								<table border="0">
									<h2>Informasi Ijin Mendirikan Tempat Usaha</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor Ijin :</label> <input type="text" name="Nomor_Ijin_imtu" size="50" required>
										</p>
										<p>
											<label for="a">Tanggal Awal Ijin :</label> <input type="date" id="Tanggal_Awal_Ijin" name="Tanggal_Awal_Ijin_imtu" >
										</p>
										<p>
											<label for="a">Tanggal Akhir Ijin :</label> <input type="date" id="Tanggal_Akhir_Ijin" name="Tanggal_Akhir_Ijin_imtu" >
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IjinDep" class="tabcontent">
								<table border="0">
									<h2>Informasi Ijin Departemen DepHub/Kominfo</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor Ijin :</label> <input type="text" name="Nomor_Ijin" size="50" required>
										</p>
										<p>
											<label for="a">Tanggal Mulai Ijin :</label> <input type="date" id="Tanggal_Mulai_Ijin" name="Tanggal_Mulai_Ijin" >
										</p>
										<p>
											<label for="a">Tanggal Akhir Ijin :</label> <input type="date" id="Tanggal_Akhir_Ijin" name="Tanggal_Akhir_Ijin" >
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IPTT" class="tabcontent">
								<table border="0">
									<h2>Informasi Ijin Pendirian Tower Telkomsel</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor Ijin Pendirian :</label> <input type="text" name="Nomor_Ijin_Pendirian" size="50" required>
										</p>
										<p>
											<label for="a">Tanggal Mulai Ijin Pendirian :</label> <input type="date" id="Tanggal_Awal_Ijin_Pendirian" name="Tanggal_Awal_Ijin_Pendirian" >
										</p>
										<p>
											<label for="a">Tanggal Akhir Ijin Pendirian:</label> <input type="date" id="Tanggal_Akhir_Ijin_Pendirian" name="Tanggal_Akhir_Ijin_Pendirian" >
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IPB" class="tabcontent">
								<table border="0">
								<h2>Informasi Ijin Penggunaan Bangunan</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor IPB :</label> <input type="text" name="Nomor_IPB" size="50" required>
										</p>
										<p>
											<label for="a">Tanggal Mulai IPB :</label> <input type="date" id="Tanggal_Awal_IPB" name="Tanggal_Awal_IPB" >
										</p>
										<p>
											<label for="a">Tanggal Akhir IPB :</label> <input type="date" id="Tanggal_Akhir_IPB" name="Tanggal_Akhir_IPB" >
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="IIP" class="tabcontent">
								<table border="0">
									<h2>Informasi Ijin Prinsip</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor Ijin Prinsip :</label> <input type="text" name="Nomor_Ijin_Prinsip" size="50" required>
										</p>
										<p>
											<label for="a">Tanggal Mulai Ijin Prinsip :</label> <input type="date" id="Tanggal_Awal_Ijin_Prinsip" name="Tanggal_Awal_Ijin_Prinsip" >
										</p>
										<p>
											<label for="a">Tanggal Akhir Ijin Prinsip:</label> <input type="date" id="Tanggal_Akhir_Ijin_Prinsip" name="Tanggal_Akhir_Ijin_Prinsip" >
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Genset" class="tabcontent">
								<table border="0">
									<h2>Informasi Ijin Genset</h2>
									<a id="detail">
										<p>
											<label for="a">Nomor :</label> <input type="text" name="Nomor_Genset" size="50" required>
										</p>
										<p>
											<label for="a">Status :</label> <input type="text" name="Status_Genset" size="50">
										</p>
										<p>
											<label for="a">Tanggal Start :</label> <input type="date" id="Tanggal_Start" name="Tanggal_Start" >
										</p>
										<p>
											<label for="a">Tanggal Finish :</label> <input type="date" id="Tanggal_Finish" name="Tanggal_Finish" >
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Comcase" class="tabcontent">
								<table border="0">
									<h2>Comcase</h2>
									<a id="detail">
										<p>
											<label for="a">Comcase Tanggal :</label> <input type="date" id="Comcase_Tanggal" name="Comcase_Tanggal" >
										</p>
										<p>
											<label for="a">Comcase Keterangan :</label> <input type="text" name="Comcase_Keterangan" size="50">
										</p>
										<p>
											<label for="a">Comcase Status :</label> <input type="text" name="Comcase_Status" size="50">
										</p>
										<p>
											<label for="a">Comcase Solusi :</label> <input type="text" name="Comcase_Solusi" size="50">
										</p>
										<p>
											<label for="a">Comcase File :</label> <input type="file" name="Comcase_File" id="Comcase_File" size="50"><br>
										</p>
										<p>
											<label for="a">Comcase Mitra :</label> <input type="text" name="Comcase_Mitra" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Submit" class="tabcontent">
								<table border="0">
									<h2 id="check">Submit</h2>
									<a id="detail">
									<h3>
										Apakah anda yakin data yang anda masukkan sudah benar?
									</h3>
									<h3>
										Jika Ya, klik Submit
									</h3>
									<br><input id="final" type="submit" value="Submit" name="submit">
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