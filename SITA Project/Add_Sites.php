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
											<label >Site ID</label> <input placeholder="Masukkan Id Site" type="text" name="Site_ID" size="50" required pattern="{6}" title="Input hanya boleh 6 Karakter!">
										</p>
										<p>
											<label >Nama Site</label> <input placeholder="Masukkan Nama Site" type="text" name="Nama_Site" size="50">
										</p>
										<p>
											<label >Status Lahan</label> <input placeholder="Masukkan Status Lahan" type="text" name="Status_Lahan" size="50">
										</p>
										<p>
											<label >Status Tower</label>   
											<select name="Satus_Tower">
											    <option value="Beli">Beli	</option>
											    <option value="Pinjam">Pinjam</option>
											</select>
										</p>
										<p>
											<label >Pemilik Tower</label> <input placeholder="Masukkan Nama Pemilik Tower" type="text" name="Pemilik_Tower" size="50">
										</p>
										<p>
											<label >Alamat Site</label> <input placeholder="Masukkan Alamat Lengkap Site" type="text" name="Alamat_Site" size="50">
										</p>
										<p>
											<label >Kota/Kabupaten</label>
											<select name="Kota_Kabupaten">
											    <option value="Bangkalan">Bangkalan</option>
											    <option value="Banyuwangi">Banyuwangi</option>
											    <option value="Batu">Batu</option>
											    <option value="Blitar Kab.">Blitar Kab.</option>
											    <option value="Blitar Kota">Blitar Kota</option>
											    <option value="Bojonegoro">Bojonegoro</option>
											    <option value="Bondowoso">Bondowoso</option>
											    <option value="Gresik">Gresik</option>
											    <option value="Jember">Jember</option>
											    <option value="Jombang">Jombang</option>
											    <option value="Kediri Kab.">Kediri Kab.</option>
											    <option value="Kediri Kota">Kediri Kota</option>
											    <option value="Lamongan">Lamongan</option>
											    <option value="Lumajang">Lumajang</option>
											    <option value="Madiun Kab.">Madiun Kab.</option>
											    <option value="Madiun Kota">Madiun Kota</option>
											    <option value="Magetan">Magetan</option>
											    <option value="Malang Kab.">Malang Kab.</option>
											    <option value="Malang Kota">Malang Kota</option>
											    <option value="Mojokerto Kab.">Mojokerto Kab.</option>
											    <option value="Mojokerto Kota">Mojokerto Kota</option>
											    <option value="Nganjuk">Nganjuk</option>
											    <option value="Ngawi">Ngawi</option>
											    <option value="Pacitan">Pacitan</option>
											    <option value="Pamekasan">Pamekasan</option>
											    <option value="Pasuruan Kab.">Pasuruan Kab.</option>
											    <option value="Pasuruan Kota">Pasuruan Kota</option>
											    <option value="Ponorogo">Ponorogo</option>
											    <option value="Probolinggo Kab.">Probolinggo Kab.</option>
											    <option value="Probolinggo Kota">Probolinggo Kota</option>
											    <option value="Sampang">Sampang</option>
											    <option value="Sidoarjo">Sidoarjo</option>
											    <option value="Situbondo">Situbondo</option>
											    <option value="Sumenep">Sumenep</option>
											    <option value="Surabaya">Surabaya</option>
											    <option value="Trenggalek">Trenggalek</option>
											    <option value="Tuban">Tuban</option>
											    <option value="Tulungagung">Tulungagung</option>
											</select>
										</p>
										<p>
											<label >Kontraktor Utama</label> <input placeholder="Masukkan Nama Kontraktor Utama" type="text" name="Kontraktor_Utama" size="50">
										</p>
										<p>
											<label >Penyedia Menara</label> <input placeholder="Masukkan Nama Penyedia Menara" type="text" name="Penyedia_Menara" size="50">
										</p>

										<p>
											<label >Branch</label> <input placeholder="Masukkan Branch Site" type="text" name="Branch" size="50">
										</p>
										<p>
											<label >Longitude</label> <input placeholder="!! HANYA ANGKA, '-', dan '.' CONTOH: -17.12" type="text" name="Longitude" size="50">
										</p>
										<p>
											<label >Latitude</label> <input placeholder="!! HANYA ANGKA, '-', dan '.' CONTOH: -17.12" type="text" name="Latitude" size="50">
										</p>
										<p>
											<label >On Air Date</label> <input type="date" id="On_Air_Date" name="On_Air_Date">
										</p>
										<p>
											<label >Colocated Site</label> <input placeholder="Masukkan Colocated Site" type="text" name="Colocated_Site" size="50">
										</p>
										<p>
											<label >BTS Type</label> <input placeholder="Masukkan Tipe BTS" type="text" name="BTS_Type" size="50">
										</p>
										<p>
											<label >Site Type</label> <input placeholder="Masukkan Tipe Site" type="text" name="Site_Type" size="50">
										</p>
										<p>
											<label >Tower Height</label> <input placeholder="!! HANYA ANGKA SAJA" type="text" name="Tower_Height" size="50">
										</p>
										<p>
											<label >Tower Type</label> <input placeholder="Masukkan Tipe Tower" type="text" name="Tower_Type" size="50">
										</p>
										<p>
											<label >Shelter Type</label> <input placeholder="Masukkan Tipe Shelter" type="text" name="Shelter_Type" size="50">
										</p>
										<p>
											<label >Shelter Size</label> <input placeholder="Masukkan Ukuran Shelter" type="text" name="Shelter_Size" size="50">
										</p>
										<p>
											<label >Luas Lahan</label> <input placeholder="Masukkan Luas Lahan" type="text" name="Luas_Lahan" size="50">
										</p>
										<p>
											<label >Luas Jalan Akses</label> <input placeholder="Masukkan Luas Jalan Akses" type="text" name="Luas_Jalan_Akses" size="50">
										</p>
										<p>
											<label >Denah Tanah</label> <input type="file" name="Denah_Tanah" id="Denah_Tanah" size="50"><br>
										</p>
										<p>
											<label >Peta Radius Tower</label> <input type="file" name="Peta_Lokasi_Radius_Tower" id="Peta_Lokasi_Radius_Tower" size="50"><br>
										</p>
										<p>
											<label >Sketsa Batas Lahan</label> <input type="file" name="Sketsa_Batas_Lahan" id="Sketsa_Batas_Lahan" size="50"><br>
										</p>
										<p>
											<label >Tanggal Mulai Sewa</label> <input type="date" id="Tanggal_Mulai_Sewa" name="Tanggal_Mulai_Sewa" >
										</p>
										<p>
											<label >Tanggal Akhir Sewa</label> <input type="date" id="Tanggal_Akhir_Sewa" name="Tanggal_Akhir_Sewa" >
										</p>
										<p>
											<label >Harga per Tahun</label> <input placeholder="!! HANYA ANGKA SAJA"type="text" name="Harga_Per_Tahun" size="50">
										</p>
										<p>
											<label >Remark</label> <input placeholder="Masukkan Detail Tentang Site" type="text" name="Remark" size="50">
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
											<label >Pagu</label> <input placeholder="!! HANYA ANGKA SAJA, Maximum Penawaran"type="text" name="Pagu" size="50">
										</p>
										<p>
											<label >PIC</label> <input placeholder="Masukkan Nama Orang yang bertanggung jawab"type="text" name="PIC" size="50">
										</p>
										<p>
											<label >SPPH</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan SPPH"type="text" name="SPPH" size="50">
										</p>
										<p>
											<label >Vendor</label> <input placeholder="Masukkan Nama Vendor"type="text" name="Vendor_List" size="50">
										</p>
										<p>
											<label >Invoice</label> <input type="date" id="Invoice" name="Invoice" >
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
											<label >No BAK</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nomor BAK"type="text" name="Nomor_BAK" size="50" >
										</p>
										<p>
											<label >Tanggal BAK</label> <input type="date" id="Tanggal_BAK" name="Tanggal_BAK" >
										</p>
										<p>
											<label >Harga BAK</label> <input placeholder="Masukkan Harga BAK"type="text" name="Harga_BAK" name="Harga_BAK" size="50">
										</p>
										<p>
											<label >Status</label> <input placeholder="Masukkan Status Terkini"type="text" name="Status" size="50">
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
											<label >No HO</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nomor HO"type="text" name="Nomor_HO" size="50" >
										</p>
										<p>
											<label >Daftar Ulang HO</label> <input type="date" id="Daftar_Ulang_HO" name="Daftar_Ulang_HO" >
										</p>
										<p>
											<label >Tanggal Start HO</label> <input type="date" id="Tanggal_Start_HO" name="Tanggal_Start_HO" >
										</p>
										<p>
											<label >Tanggal Finish HO</label> <input type="date" id="Tanggal_Finish_HO" name="Tanggal_Finish_HO" >
										</p>
										<p>
											<label >Status HO</label> <input placeholder="Masukkan Status Terkini HO" type="text" name="Status_HO" size="50">
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
											<label >KTP Pemilik</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nomor KTP Pemilik" type="text" name="KTP_Pemilik" size="50" >
										</p>
										<p>
											<label >Kartu Keluarga Pemilik</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nomor Kartu Keluarga" type="text" name="Kartu_Keluarga_Pemilik" size="50">
										</p>
										<p>
											<label >Pemilik Lahan</label> <input placeholder="Masukkan Nama Pemilik Lahan" type="text" name="Pemilik_Lahan" size="50">
										</p>
										<p>
											<label >Orang yang dikuasakan</label> <input placeholder="Masukkan Nama Orang yang Dikuasakan" type="text" name="Orang_Yang_Di_Kuasakan" size="50">
										</p>
										<p>
											<label >Alamat Pemilik</label> <input placeholder="Masukkan Alamat Pemilik Lahan" type="text" name="Alamat_Pemilik" size="50">
										</p>
										<p>
											<label >Telepon</label> <input placeholder="Masukkan Nomor Telepon Rumah" type="text" name="Telepon" size="50">
										</p>
										<p>
											<label >No. HP</label> <input placeholder="Masukkan Nomor Handphone" type="text" name="HP" size="50">
										</p>
										<p>
											<label >E-Mail</label> <input placeholder="Masukkan Alamat Email" type="text" name="E_mail" size="50">
										</p>
										<p>
											<label >Surat Persetujuan Keluarga</label><select name="Surat_Persetujuan_Keluarga">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
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
											<label >Surat Pernyataan</label>   
											<select name="SP">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Ahli Waris</label>   
											<select name="SP_Ahli_Waris">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Janda:</label>   
											<select name="SP_Janda">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Kepemilikan Tanah</label>   
											<select name="SP_Kepemilikan_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Pelepasan Hak</label>   
											<select name="SP_Pelepasan_Hak">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Pembayaran:</label>   
											<select name="SP_Pembayaran">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Penguasaan Fisik Tanah:</label>   
											<select name="SP_Penguasaan_Fisik_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Peralihan Atas Pekarangan</label>   
											<select name="SP_Peralihan_Atas_Pekarangan">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Persetujuan Kepala Desa</label>   
											<select name="SP_Persetujuan_Kepala_Desa">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Tanah Pemohon</label>   
											<select name="SP_Tanah_Pemohon">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Tidak Keberatan Jalan Pribadi</label>   
											<select name="SP_Tidak_Keberatan_Jalan_Pribadi">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Pernyataan Tidak Keberatan Jalan Umum</label>   
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
											<label >Akta Hibah</label> <input placeholder="Masukkan Nomor Surat Akta Hibah" type="text" name="Akta_Hibah" size="50">
										</p>
										<p>
											<label >Akta Jual Beli Sewa</label> <input placeholder="Masukkan Nomor Surat Akta Jual Beli Sewa" type="text" name="Akta_Jual_Beli_Sewa" size="50">
										</p>
										<p>
											<label >Akta Hak Bersama</label> <input placeholder="Masukkan Nomor Surat Akta Hak Bersama" type="text" name="Akta_Hak_Bersama" size="50">
										</p>
										<p>
											<label >Akta Warisan</label> <input placeholder="Masukkan Nomor Surat Akta Warisan" type="text" name="Akta_Warisan" size="50">
										</p>
										<p>
											<label >Akta Pemisahan</label> <input placeholder="Masukkan Nomor Surat Akta Pemisahan" type="text" name="Akta_Pemisahan" size="50">
										</p>
										<p>
											<label >Akta Nikah</label> <input placeholder="Masukkan Nomor Surat Akta Nikah" type="text" name="Akta_Nikah" size="50">
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
											<label >Ijin Perubahan Pengguna Tanah</label> <input placeholder="Masukkan Nomor Surat Ijin Perubahan Pengguna Tanah" type="text" name="Ijin_Perubahan_Pengguna_Tanah" size="50">
										</p>
										<p>
											<label >Ijin Warga</label> <input placeholder="Masukkan Nomor Surat Ijin Warga" type="text" name="Ijin_Warga" size="50">
										</p>
										<p>
											<label >Ijin UKL UPL</label> <input placeholder="Masukkan Nomor Surat Ijin UKL UPL" type="text" name="Ijin_UKL_UPL" size="50">
										</p>
										<p>
											<label >Ijin Sertifikat Tanah</label> <input placeholder="Masukkan Nomor Surat Ijin Sertifikat Tanah" type="text" name="Ijin_Sertifikat_Tanah" size="50">
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
											<label >Surat Keterangan Akses Lahan Jalan</label>   
											<select name="SK_Akses_Lahan_Jalan">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Asal Tanah</label>   
											<select name="SK_Asal_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Beda Luas Tanah</label>   
											<select name="SK_Beda_Luas_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Beda Nama</label>   
											<select name="SK_Beda_Nama">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Fatwa Waris</label>   
											<select name="SK_Fatwa_Waris">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Kematian</label>   
											<select name="SK_Kematian">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Penduduk</label>   
											<select name="SK_Penduduk">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Permohonan IMB, HO, dan IP</label>   
											<select name="SK_Permohonan_IMB_dll">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Persetujuan Sewa Lahan</label>   
											<select name="SK_Persetujuan_Sewa_Lahan">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Riwayat Tanah</label>   
											<select name="SK_Riwayat_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Suami Istri</label>   
											<select name="SK_Suami_Istri">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Tanah</label>   
											<select name="SK_Tanah">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Tidak Sengketa</label>   
											<select name="SK_Tidak_Sengketa">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Keterangan Tidak Keberatan Didirikan</label>   
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
											<label >Surat Ijin PKS</label> <input placeholder="Masukkan Nomor Surat Ijin PKS" type="text" name="Surat_Ijin_PKS" size="50">
										</p>
										<p>
											<label >Surat Kuasa</label>   
											<select name="Surat_Kuasa">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Kuasa Pengambilan Jaminan Asli</label>   
											<select name="Surat_Kuasa_Pengambilan_Jaminan_Asli">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Kuasa Jaminan Hukum</label>   
											<select name="Surat_Jaminan_Hukum">
											    <option value="Ada">Ada</option>
											    <option value="Tidak">Tidak</option>
											</select>
										</p>
										<p>
											<label >Surat Perjanjian Sewa Tanah</label>   
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
											<label >Nomor Objek Pajak</label> <input placeholder="Masukkan Nomor Surat Objek Pajak" type="text" name="Nomor_Objek_Pajak" size="50">
										</p>
										<p>
											<label >Nilai PBB</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nilai PBB" type="text" name="Nilai_PBB" size="50">
										</p>
										<p>
											<label >Denda PBB</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nilai Denda PBB" type="text" name="Denda_PBB" size="50">
										</p>
										<p>
											<label >Fee PBB</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Fee PBB" type="text" name="Fee_PBB" size="50">
										</p>
										<p>
											<label >Tanggal Mulai</label> <input type="date" id="Tanggal_Mulai" name="Tanggal_Mulai" >
										</p>
										<p>
											<label >Tanggal Jatuh Tempo</label> <input type="date" id="Tanggal_Jatuh_Tempo" name="Tanggal_Jatuh_Tempo" >
										</p>
										<p>
											<label >Status</label> <input placeholder="Masukkan Status PBB Site Terkini" type="text" name="Status_PBB" size="50">
										</p>
										<p>
											<label >NJOP Tanah</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nilai Jual Objek Pajak Tanah" type="text" name="NJOP_Tanah" size="50">
										</p>
										<p>
											<label >NJOP Bangunan</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nilai Jual Objek Pajak Bangunan" type="text" name="NJOP_Bangunan" size="50">
										</p>
										<p>
											<label >Surat PBB</label> <input type="file" name="Surat_PBB" id="Surat_PBB" size="50"><br>
										</p>
										<p>
											<label >Koefisien PBB</label> <input placeholder="Masukkan Koefisien PBB,CONTOH : 0.1 (Koma memakai titik)" type="text" name="Koef_PBB" size="50">
										</p>
										<p>
											<label >Mitra PBB</label> <input placeholder="Masukkan Mitra PBB" type="text" name="Mitra_PBB" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SKRD" class="tabcontent">
								<table border="0">
									<h2>RPM</h2>
									<a id="detail">
										<p>
											<label >Nomor RPM</label> <input placeholder="Masukkan Nomor RPM" type="text" name="No_SKRD" size="50">
										</p>
										<p>
											<label >Nilai/Harga RPM</label> <input placeholder="!! HANYA ANGKA SAJA, Masukkan Nilai RPM" type="text" name="Harga_SKRD" size="50">
										</p>
										<p>
											<label >Tanggal Jatuh Tempo</label> <input type="date" id="Tanggal_Jatuh_Tempo" name="Tanggal_Jatuh_Tempo" >
										</p>
										<p>
											<label >Koefisien RPM</label> <input placeholder="Masukkan Koefisien RPM,CONTOH : 0.1 (Koma memakai titik)" type="text" name="Koef_SKRD" size="50">
										</p>
										<p>
											<label >Status</label> <input placeholder="Masukkan Status RPM Site Terkini" type="text" name="Status_SKRD" size="50">
										</p>
										<p>
											<label >Surat RPM</label> <input type="file" name="Surat_SKRD" id="Surat_SKRD" size="50"><br>	
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
											<label >Nomor IMB</label> <input placeholder="Masukkan Nomor IMB" type="text" name="Nomor_IMB" size="50" >
										</p>
										<p>
											<label >Mitra Pengurusa IMB</label> <input placeholder="Masukkan Nama Mitra Pengurus IMB" type="text" name="Mitra_Pengurus_IMB" size="50">
										</p>
										<p>
											<label >Daftar Ulang IMB</label> <input type="date" id="Daftar_Ulang_IMB" name="Daftar_Ulang_IMB" >
										</p>
										<p>
											<label >Tanggal Awal Mulai IMB</label> <input type="date" id="Tanggal_Awal_IMB" name="Tanggal_Awal_IMB" >
										</p>
										<p>
											<label >Tanggal Akhir IMB</label> <input type="date" id="Tanggal_Akhir_IMB" name="Tanggal_Akhir_IMB" >
										</p>
										<p>
											<label >Status Kepengurusan IMB</label> <input placeholder="Masukkan Status Kepengurusan IMB" type="text" name="Status_Kepengurusan_IMB" size="50">
										</p>
										<p>
											<label >Status IMB</label> <input placeholder="Masukkan Status IMB Site Terkini" type="text" name="Status_IMB" size="50">
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
											<label >Nomor Ijin</label> <input placeholder="Masukkan Nomor Ijin IMTU" type="text" name="Nomor_Ijin_imtu" size="50">
										</p>
										<p>
											<label >Tanggal Awal Ijin</label> <input type="date" id="Tanggal_Awal_Ijin" name="Tanggal_Awal_Ijin_imtu" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin</label> <input type="date" id="Tanggal_Akhir_Ijin" name="Tanggal_Akhir_Ijin_imtu" >
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
											<label >Nomor Ijin</label> <input placeholder="Masukkan Nomor Ijin Dephub/KOMINFO" type="text" name="Nomor_Ijin" size="50">
										</p>
										<p>
											<label >Tanggal Mulai Ijin</label> <input type="date" id="Tanggal_Mulai_Ijin" name="Tanggal_Mulai_Ijin" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin</label> <input type="date" id="Tanggal_Akhir_Ijin" name="Tanggal_Akhir_Ijin" >
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
											<label >Nomor Ijin Pendirian</label> <input placeholder="Masukkan Nomor Ijin IPTT" type="text" name="Nomor_Ijin_Pendirian" size="50">
										</p>
										<p>
											<label >Tanggal Mulai Ijin Pendirian</label> <input type="date" id="Tanggal_Awal_Ijin_Pendirian" name="Tanggal_Awal_Ijin_Pendirian" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin Pendirian:</label> <input type="date" id="Tanggal_Akhir_Ijin_Pendirian" name="Tanggal_Akhir_Ijin_Pendirian" >
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
											<label >Nomor IPB</label> <input placeholder="Masukkan Nomor Surat IPB" type="text" name="Nomor_IPB" size="50">
										</p>
										<p>
											<label >Tanggal Mulai IPB</label> <input type="date" id="Tanggal_Awal_IPB" name="Tanggal_Awal_IPB" >
										</p>
										<p>
											<label >Tanggal Akhir IPB</label> <input type="date" id="Tanggal_Akhir_IPB" name="Tanggal_Akhir_IPB" >
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
											<label >Nomor Ijin Prinsip</label> <input placeholder="Masukkan Nomor Ijin Prinsip" type="text" name="Nomor_Ijin_Prinsip" size="50">
										</p>
										<p>
											<label >Tanggal Mulai Ijin Prinsip</label> <input type="date" id="Tanggal_Awal_Ijin_Prinsip" name="Tanggal_Awal_Ijin_Prinsip" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin Prinsip:</label> <input type="date" id="Tanggal_Akhir_Ijin_Prinsip" name="Tanggal_Akhir_Ijin_Prinsip" >
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
											<label >Nomor</label> <input placeholder="Masukkan Nomor Ijin Genset" type="text" name="Nomor_Genset" size="50">
										</p>
										<p>
											<label >Status</label> <input placeholder="Masukkan Status Genset Terkini" type="text" name="Status_Genset" size="50">
										</p>
										<p>
											<label >Tanggal Start</label> <input type="date" id="Tanggal_Start" name="Tanggal_Start" >
										</p>
										<p>
											<label >Tanggal Finish</label> <input type="date" id="Tanggal_Finish" name="Tanggal_Finish" >
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
											<label >Comcase Tanggal</label> <input type="date" id="Comcase_Tanggal" name="Comcase_Tanggal" >
										</p>
										<p>
											<label >Comcase Keterangan</label> <input placeholder="Masukkan Keterangan Masalah Site" type="text" name="Comcase_Keterangan" size="50">
										</p>
										<p>
											<label >Comcase Status</label> <input placeholder="Masukkan Status Terkini Site" type="text" name="Comcase_Status" size="50">
										</p>
										<p>
											<label >Comcase Solusi</label> <input placeholder="Masukkan Solusi Terkini Site" type="text" name="Comcase_Solusi" size="50">
										</p>
										<p>
											<label >Comcase File</label> <input type="file" name="Comcase_File" id="Comcase_File" size="50"><br>
										</p>
										<p>
											<label >Comcase Mitra</label> <input placeholder="Masukkan Mitra Yang membantu mengurus Comcase" type="text" name="Comcase_Mitra" size="50">
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
									<br><input id="final" type="submit" value="Submit" name="submit" onclick="return confirm('Are you sure?');">
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