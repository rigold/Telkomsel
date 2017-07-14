<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php

	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "sita";
	$conn = mysqli_connect($servername, $username, $password, $database);
?>
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
							<a href="List_User.php"><br>> LIST USER<br></a>
							<a href="List_Sites.php"><br>> LIST SITES<br></a>
						</p>
					</div>
					
					<p>&#169; Copyright 2017. Created by Rigold Nainggolan & Tomson Pangaribuan</p>
				</div>
				<div class="body">
					<h1>DETAIL SITE</h1>
					<br>
					<div class="line-separator"></div>	
					<div class="tab">
						<button class="tablinks" onclick="openTabs(event, 'INFORMASI SITES')">INFORMASI SITES</button>
						<button class="tablinks" onclick="openTabs(event, 'PERPANJANGAN')">PERPANJANGAN</button>
						<button class="tablinks" onclick="openTabs(event, 'BAK')">BAK</button>
						<button class="tablinks" onclick="openTabs(event, 'HO')">HO</button>
						<button class="tablinks" onclick="openTabs(event, 'ID PEMILIK LAHAN')">ID PEMILIK LAHAN</button>
						<button class="tablinks" onclick="openTabs(event, 'SURAT PERNYATAAN')">SURAT PERNYATAAN</button>
						<button class="tablinks" onclick="openTabs(event, 'AKTA')">AKTA</button>
						<button class="tablinks" onclick="openTabs(event, 'IJIN LAIN')">IJIN LAIN</button>
						<button class="tablinks" onclick="openTabs(event, 'SURAT KETERANGAN')">SURAT KETERANGAN</button>
						<button class="tablinks" onclick="openTabs(event, 'SURAT LAIN')">SURAT LAIN</button>
						<button class="tablinks" onclick="openTabs(event, 'PBB')">PBB</button>
						<button class="tablinks" onclick="openTabs(event, 'RPM')">RPM</button>
						<button class="tablinks" onclick="openTabs(event, 'IMB')">IMB</button>
						<button class="tablinks" onclick="openTabs(event, 'IMTU')">IMTU</button>
						<button class="tablinks" onclick="openTabs(event, 'IJIN DEPHUB/KOMINFO')">IJIN DEPHUB/KOMINFO</button>
						<button class="tablinks" onclick="openTabs(event, 'IPPT')">IPTT</button>
						<button class="tablinks" onclick="openTabs(event, 'IPB')">IPB</button>
						<button class="tablinks" onclick="openTabs(event, 'IJIN PRINSIP')">IJIN PRINSIP</button>
						<button class="tablinks" onclick="openTabs(event, 'IJIN GENSET')">IJIN GENSET</button>
						<button class="tablinks" onclick="openTabs(event, 'COMCASE')">COMCASE</button>	
					</div>
					<div id="INFORMASI SITES" class="tabcontent">
						<table border="0">
							<a id="detail">
							<?php
								$sites_id = $_GET['sites_id'];
								$sql = "SELECT
									sites_id,
									sites_nama,
									sites_status_lahan,
									sites_status_tower,
									sites_pemilik_tower,
									sites_alamat,
									sites_kota_kabupaten,
									sites_kontraktor_utama,
									sites_penyedia_menara,
									sites_branch,
									sites_long,
									sites_lat,
									sites_on_air_date,
									sites_colocated_site,
									sites_type_bts,
									sites_type_site,
									sites_tower_height,
									sites_tower_type,
									sites_shelter_type,
									sites_shelter_size,
									sites_luas_lahan,
									sites_luas_jalan_akses,
									sites_denah_tanah,
									sites_peta_lrt,
									sites_sketsa_bt,
									sites_tanggal_start,
									sites_tanggal_finish,
									sites_harga_per_tahun,
									sites_remark 
									FROM site
									WHERE sites_id=$sites_id
									";
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();

								$a=$row["sites_denah_tanah"]; 
								$aloc="File/".$a;
								$b=$row["sites_peta_lrt"]; 
								$bloc="File/".$b;
								$c=$row["sites_sketsa_bt"]; 
								$cloc="File/".$c;

								echo "
								<tr><th>Site ID</th><td>" . $row["sites_id"]."</td></tr> 
								<tr><th>Nama Site</th><td>" .$row["sites_nama"]."</td></tr> 
								<tr><th>Status Lahan</th><td>" .$row["sites_status_lahan"]."</td></tr> 
								<tr><th>Status Tower</th><td>" .$row["sites_status_tower"]."</td></tr> 
								<tr><th>Pemilik Tower</th><td>" .$row["sites_pemilik_tower"]."</td></tr> 
								<tr><th>Alamat Site</th><td>" .$row["sites_alamat"]."</td></tr> 
								<tr><th>Kota/Kabupaten</th><td>" .$row["sites_kota_kabupaten"]."</td></tr> 
								<tr><th>Kontraktor Utama</th><td>" .$row["sites_kontraktor_utama"]."</td></tr> 
								<tr><th>Penyedia Menara</th><td>" .$row["sites_penyedia_menara"]."</td></tr> 
								<tr><th>Branch</th><td>" .$row["sites_branch"]."</td></tr> 
								<tr><th>Longitude</th><td>" .$row["sites_long"]."</td></tr> 
								<tr><th>Latitude</th><td>" .$row["sites_lat"]."</td></tr> 
								<tr><th>On Air Date</th><td>" .$row["sites_on_air_date"]."</td></tr> 
								<tr><th>Colocated Site</th><td>" .$row["sites_colocated_site"]."</td></tr> 
								<tr><th>BTS Type</th><td>" .$row["sites_type_bts"]."</td></tr> 
								<tr><th>Site Type</th><td>" .$row["sites_type_site"]."</td></tr> 
								<tr><th>Tower Height</th><td>" .$row["sites_tower_height"]."</td></tr> 
								<tr><th>Tower Type</th><td>" .$row["sites_tower_type"]."</td></tr> 
								<tr><th>Shelter Type</th><td>" .$row["sites_shelter_type"]."</td></tr> 
								<tr><th>Shelter Size</th><td>" .$row["sites_shelter_size"]."</td></tr> 
								<tr><th>Luas Lahan</th><td>" .$row["sites_luas_lahan"]."</td></tr> 
								<tr><th>Luas Jalan Akses</th><td>" .$row["sites_luas_jalan_akses"]."</td></tr> 
								<tr><th>Denah Tanah</th><td><a href=".$aloc.">".$a."</a></td></tr> 
								<tr><th>Peta Radius Tower</th><td><a href=".$bloc.">".$b."</a></td></tr> 
								<tr><th>Sketsa Batas Lahan</th><td><a href=".$cloc.">".$c."</a></td></tr> 
								<tr><th>Tanggal Mulai Sewa</th><td>" .$row["sites_tanggal_start"]."</td></tr> 
								<tr><th>Tanggal Akhir Sewa</th><td>" .$row["sites_tanggal_finish"]."</td></tr> 
								<tr><th>Harga/Tahun</th><td>" .$row["sites_harga_per_tahun"]."</td></tr> 
								<tr><th>Remark</th><td>" .$row["sites_remark"]."</td></tr> 
								";
							?>
							</a>

						</table>
					</div>
					<div id="PERPANJANGAN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql2 = "SELECT
									perpanjangan_pagu,
									perpanjangan_pic,
									perpanjangan_spph,
									perpanjangan_vendor_list,
									perpanjangan_invoice
									FROM site
									WHERE sites_id=$sites_id
									";
								$result2 = $conn->query($sql2);
								$row2 = $result2->fetch_assoc();

								echo "
								<tr><th>Pagu</th><td>" . $row2["perpanjangan_pagu"]."</td></tr> 
								<tr><th>PIC</th><td>" .$row2["perpanjangan_pic"]."</td></tr> 
								<tr><th>SPPH</th><td>" .$row2["perpanjangan_spph"]."</td></tr> 
								<tr><th>Vendor</th><td>" .$row2["perpanjangan_vendor_list"]."</td></tr> 
								<tr><th>Invoice</th><td>" .$row2["perpanjangan_invoice"]."</td></tr> 
								";
								?>
							</a>
						</table>
					</div>
					<div id="BAK" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql3 = "SELECT
									bak_nomor,
									bak_tanggal,
									bak_harga,
									bak_status
									FROM site
									WHERE sites_id=$sites_id
									";
								$result3 = $conn->query($sql3);
								$row3 = $result3->fetch_assoc();

								echo "
								<tr><th>Nomor BAK</th><td>" . $row3["bak_nomor"]."</td></tr> 
								<tr><th>Tanggal_BAK</th><td>" .$row3["bak_tanggal"]."</td></tr> 
								<tr><th>Harga_BAK</th><td>" .$row3["bak_harga"]."</td></tr> 
								<tr><th>Status</th><td>" .$row3["bak_status"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="HO" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql4 = "SELECT
									ho_nomor,
									ho_daftar_ulang,
									ho_start,
									ho_finish,
									ho_status
									FROM ho
									WHERE sites_id=$sites_id
									";
								$result4 = $conn->query($sql4);
								$row4 = $result4->fetch_assoc();

								echo "
								<tr><th>Nomor HO</th><td>" . $row4["ho_nomor"]."</td></tr>
								<tr><th>Daftar Ulang HO</th><td>" .$row4["ho_daftar_ulang"]."</td></tr> 
								<tr><th>Tanggal Start HO</th><td>" .$row4["ho_start"]."</td></tr>
								<tr><th>Tanggal Finish HO</th><td>" .$row4["ho_finish"]."</td></tr>
								<tr><th>Status HO</th><td>" .$row4["ho_status"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="ID PEMILIK LAHAN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql5 = "SELECT
									identitas_pemilik_ktp,
									identitas_pemilik_kk,
									identitas_pemilik_lahan,
									identitas_pemilik_kuasa,
									identitas_pemilik_alamat,
									identitas_pemilik_telepon,
									identitas_pemilik_hp,
									identitas_pemilik_email,
									identitas_pemilik_sp_keluarga
									FROM identitas_pemilik
									WHERE sites_id=$sites_id
									";
								$result5 = $conn->query($sql5);
								$row5 = $result5->fetch_assoc();

								echo "
								<tr><th>KTP Pemilik</th><td>" . $row5["identitas_pemilik_ktp"]."</td></tr>
								<tr><th>Kartu Keluarga Pemilik</th><td>" .$row5["identitas_pemilik_kk"]."</td></tr> 
								<tr><th>Pemilik Lahan</th><td>" .$row5["identitas_pemilik_lahan"]."</td></tr>
								<tr><th>Orang yang dikuasakan</th><td>" .$row5["identitas_pemilik_kuasa"]."</td></tr>
								<tr><th>Alamat Pemilik</th><td>" .$row5["identitas_pemilik_alamat"]."</td></tr>
								<tr><th>Telepon</th><td>" .$row5["identitas_pemilik_telepon"]."</td></tr> 
								<tr><th>No. HP</th><td>" .$row5["identitas_pemilik_hp"]."</td></tr>
								<tr><th>E-mail</th><td>" .$row5["identitas_pemilik_email"]."</td></tr>
								<tr><th>Surat Persetujuan Keluarga</th><td>" .$row5["identitas_pemilik_sp_keluarga"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="SURAT PERNYATAAN" class="tabcontent">
						<table border="0">
							<a id="detail">
							<?php
								$sites_id = $_GET['sites_id'];
								$sql6 = "SELECT
									sp,
									sp_ahli_waris,
									sp_janda,
									sp_kepemilikan_tanah,
									sp_pelepasan_hak,
									sp_pembayaran,
									sp_penguasaan_fisik_tanah,
									sp_peralihan_atas_pekarangan,
									sp_persetujuan_kepala_desa,
									sp_tanah_pemohon,
									sp_tidak_keberatan_jalan_pribadi,
									sp_tidak_keberatan_jalan_umum
									FROM identitas_pemilik
									WHERE sites_id=$sites_id
									";
								$result6 = $conn->query($sql6);
								$row6 = $result6->fetch_assoc();

								echo "
									<tr><th>Surat Pernyataan</th><td>" . $row6["sp"]."</td></tr>
									<tr><th>Surat Pernyataan Ahli Waris</th><td>" .$row6["sp_ahli_waris"]."</td></tr> 
									<tr><th>Surat Pernyataan Janda</th><td>" .$row6["sp_janda"]."</td></tr>
									<tr><th>Surat Pernyataan Kepemilikan Tanah</th><td>" .$row6["sp_kepemilikan_tanah"]."</td></tr>
									<tr><th>Surat Pernyataan Pelepasan Hak</th><td>" .$row6["sp_pelepasan_hak"]."</td></tr>
									<tr><th>Surat Pernyataan Pembayaran</th><td>" .$row6["sp_pembayaran"]."</td></tr> 
									<tr><th>Surat Pernyataan Penguasaan Fisik Tanah</th><td>" .$row6["sp_penguasaan_fisik_tanah"]."</td></tr>
									<tr><th>Surat Pernyataan Peralihan Atas Pekarangan</th><td>" .$row6["sp_peralihan_atas_pekarangan"]."</td></tr>
									<tr><th>Surat Pernyataan Persetujuan Kepala Desa</th><td>" .$row6["sp_persetujuan_kepala_desa"]."</td></tr>
									<tr><th>Surat Pernyataan Tanah Pemohon</th><td>" .$row6["sp_tanah_pemohon"]."</td></tr>
									<tr><th>Surat Pernyataan Tidak Keberatan Jalan Pribadi</th><td>" .$row6["sp_tidak_keberatan_jalan_pribadi"]."</td></tr>
									<tr><th>Surat Pernyataan Tidak Keberatan Jalan Umum</th><td>" .$row6["sp_tidak_keberatan_jalan_umum"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="AKTA" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql7 = "SELECT
									akta_hibah,
									akta_jualbeli_sewa,
									akta_hak_bersama,
									akta_warisan,
									akta_pemisahan,
									akta_nikah
									FROM identitas_pemilik
									WHERE sites_id=$sites_id
									";
								$result7 = $conn->query($sql7);
								$row7 = $result7->fetch_assoc();

								echo "
								<tr><th>Akta Hibah</th><td>" . $row7["akta_hibah"]."</td></tr> 
								<tr><th>Akta Jual Beli Sewa</th><td>" .$row7["akta_jualbeli_sewa"]."</td></tr> 
								<tr><th>Akta Hak Bersama</th><td>" .$row7["akta_hak_bersama"]."</td></tr> 
								<tr><th>Akta Warisan</th><td>" .$row7["akta_warisan"]."</td></tr> 
								<tr><th>Akta Pemisahan</th><td>" .$row7["akta_pemisahan"]."</td></tr>
								<tr><th>Akta Nikah</th><td>" .$row7["akta_nikah"]."</td></tr> 
								";
								?>
							</a>
						</table>
					</div>
					<div id="IJIN LAIN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql8 = "SELECT
									ijin_ippt,
									ijin_warga,
									ijin_ukl_upl,
									ijin_sertifikat_tanah
									FROM identitas_pemilik
									WHERE sites_id=$sites_id
									";
								$result8 = $conn->query($sql8);
								$row8 = $result8->fetch_assoc();

								echo "
								<tr><th>Ijin Perubahan Pengguna Tanah</th><td>" . $row8["ijin_ippt"]."</td></tr> 
								<tr><th>Ijin Warga</th><td>" .$row8["ijin_warga"]."</td></tr> 
								<tr><th>Ijin UKL UPL</th><td>" .$row8["ijin_ukl_upl"]."</td></tr> 
								<tr><th>Ijin Sertifikat Tanah</th><td>" .$row8["ijin_sertifikat_tanah"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="SURAT KETERANGAN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql9 = "SELECT
									sket_akses_lahan_jalan,
									sket_asal_tanah,
									sket_beda_luas_tanah,
									sket_beda_nama,
									sket_fatwa_waris,
									sket_kematian,
									sket_penduduk,
									sket_permohonan_imb_ho_ip,
									sket_persetujuan_sewa_lahan,
									sket_riwayat_tanah,
									sket_suami_istri,
									sket_tanah,
									sket_tidak_sengketa,
									sket_keberatan
									FROM identitas_pemilik
									WHERE sites_id=$sites_id
									";
								$result9 = $conn->query($sql9);
								$row9 = $result9->fetch_assoc();

								echo "
								<tr><th>Surat Keterangan Akses Lahan Jalan</th><td>" . $row9["sket_akses_lahan_jalan"]."</td></tr> 
								<tr><th>Surat Keterangan Asal Tanah</th><td>" .$row9["sket_asal_tanah"]."</td></tr> 
								<tr><th>Surat Keterangan Beda Luas Tanah</th><td>" .$row9["sket_beda_luas_tanah"]."</td></tr> 
								<tr><th>Surat Keterangan Beda Nama</th><td>" .$row9["sket_beda_nama"]."</td></tr>
								<tr><th>Surat Keterangan Fatwa Waris</th><td>" . $row9["sket_fatwa_waris"]."</td></tr> 
								<tr><th>Surat Keterangan Kematian</th><td>" .$row9["sket_kematian"]."</td></tr> 
								<tr><th>Surat Keterangan Penduduk</th><td>" .$row9["sket_penduduk"]."</td></tr> 
								<tr><th>Surat Keterangan Permohonan IMB, HO, &IP</th><td>" .$row9["sket_permohonan_imb_ho_ip"]."</td></tr>
								<tr><th>Surat Keterangan Persetujuan Sewa Lahan</th><td>" . $row9["sket_persetujuan_sewa_lahan"]."</td></tr> 
								<tr><th>Surat Keterangan Riwayat Tanah</th><td>" .$row9["sket_riwayat_tanah"]."</td></tr> 
								<tr><th>Surat Keterangan Suami Istri</th><td>" .$row9["sket_suami_istri"]."</td></tr> 
								<tr><th>Surat Keterangan Tanah</th><td>" .$row9["sket_tanah"]."</td></tr>
								<tr><th>Surat Keterangan Tidak Sengketa</th><td>" .$row9["sket_tidak_sengketa"]."</td></tr> 
								<tr><th>Surat Keterangan Tidak Keberatan Didirikan</th><td>" .$row9["sket_keberatan"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="SURAT LAIN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql0 = "SELECT
									sl_sk,
									sl_sk_pengambilan_jaminan_asli,
									sl_surat_jaminan_hukum,
									sl_pks,
									sl_surat_perjanjian_sewa_tanah
									FROM identitas_pemilik
									WHERE sites_id=$sites_id
									";
								$result0 = $conn->query($sql0);
								$row0 = $result0->fetch_assoc();

								echo "
								<tr><th>Surat Kuasa</th><td>" . $row0["sl_sk"]."</td></tr> 
								<tr><th>Surat Kuasa Pengambilan Jaminan Asli</th><td>" .$row0["sl_sk_pengambilan_jaminan_asli"]."</td></tr> 
								<tr><th>Surat Jaminan Hukum</th><td>" .$row0["sl_surat_jaminan_hukum"]."</td></tr> 
								<tr><th>Surat Ijin PKS</th><td>" .$row0["sl_pks"]."</td></tr>
								<tr><th>Surat Perjanjian Sewa Tanah</th><td>" .$row0["sl_surat_perjanjian_sewa_tanah"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="PBB" class="tabcontent">
						<table border="0">
							<a id="detail">
							<?php
							$sites_id = $_GET['sites_id'];
							$sql11 = "SELECT
								nop,
								nilai_pbb_site,
								tanggal_mulai,
								tanggal_jatuh_tempo,
								status,
								njop_tanah,
								njop_bangunan,
								surat_pbb
								FROM pbb
								WHERE sites_id=$sites_id
								";
							$result11 = $conn->query($sql11);
							$row11 = $result11->fetch_assoc();
							$a=$row11["surat_pbb"]; 
							$aloc="File/".$a;

							echo "
							<tr><th>Nomor Objek Pajak</th><td>" .$row11["nop"]."</td></tr> 
							<tr><th>Nilai PBB</th><td>" .$row11["nilai_pbb_site"]."</td></tr> 
							<tr><th>Tanggal Mulai</th><td>" .$row11["tanggal_mulai"]."</td></tr> 
							<tr><th>Tanggal Jatuh Tempo</th><td>" .$row11["tanggal_jatuh_tempo"]."</td></tr>
							<tr><th>Status</th><td>" .$row11["status"]."</td></tr>
							<tr><th>NJOP Tanah</th><td>" .$row11["njop_tanah"]."</td></tr> 
							<tr><th>NJOP Bangunan</th><td>" .$row11["njop_bangunan"]."</td></tr>
							<tr><th>Surat PBB</th><td><a href=".$aloc.">".$a."</a></td></tr>
							";
							?>
							</a>
						</table>
					</div>
					<div id="RPM" class="tabcontent">
						<table border="0">
							<a id="detail">
							<?php
							$sites_id = $_GET['sites_id'];
							$sql12 = "SELECT
								no_skrd,
								harga_skrd,
								tanggal_jatuh_tempo,
								koef_skrd,
								status,
								surat_skrd
								FROM skrd_rpm
								WHERE sites_id=$sites_id
								";
							$result12 = $conn->query($sql12);
							$row12 = $result12->fetch_assoc();
							$a=$row12["surat_skrd"]; 
							$aloc="File/".$a;

							echo "
							<tr><th>No SKRD</th><td>" .$row12["no_skrd"]."</td></tr> 
							<tr><th>Harga SKRD</th><td>" .$row12["harga_skrd"]."</td></tr>
							<tr><th>Tanggal Jatuh Tempo</th><td>" .$row12["tanggal_jatuh_tempo"]."</td></tr>
							<tr><th>Koef SKRD</th><td>" .$row12["koef_skrd"]."</td></tr> 
							<tr><th>Status</th><td>" .$row12["status"]."</td></tr>
							<tr><th>Surat SKRD</th><td><a href=".$aloc.">".$a."</a></td></tr>
							";
							?>
							</a>
						</table>
					</div>
					<div id="IMB" class="tabcontent">
						<table border="0">
							<a id="detail">
							<?php
							$sites_id = $_GET['sites_id'];
							$sql13 = "SELECT
								imb_nomor,
								imb_mitra_pengurus,
								imb_daftar_ulang,
								imb_start,
								imb_finish,
								imb_status_kepengurusan,
								imb_status
								FROM imb
								WHERE sites_id=$sites_id
								";
							$result13 = $conn->query($sql13);
							$row13 = $result13->fetch_assoc();

							echo "
							<tr><th>Nomor IMB</th><td>" .$row13["imb_nomor"]."</td></tr> 
							<tr><th>Mitra Pengurus IMB</th><td>" .$row13["imb_mitra_pengurus"]."</td></tr> 
							<tr><th>Daftar Ulang IMB</th><td>" .$row13["imb_daftar_ulang"]."</td></tr> 
							<tr><th>Tanggal Awal IMB</th><td>" .$row13["imb_start"]."</td></tr>
							<tr><th>Tanggal Akhir IMB</th><td>" .$row13["imb_finish"]."</td></tr>
							<tr><th>Status Kepengurusan IMB</th><td>" .$row13["imb_status_kepengurusan"]."</td></tr>
							<tr><th>Status IMB</th><td>" .$row13["imb_status"]."</td></tr>
							";
							?>
							</a>
						</table>
					</div>
					<div id="IMTU" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql14 = "SELECT
									ijin_imtu_nomor,
									ijin_imtu_start,
									ijin_imtu_finish
									FROM imtu
									WHERE sites_id=$sites_id
									";
								$result14 = $conn->query($sql14);
								$row14 = $result->fetch_assoc();

								echo "
								<tr><th>Nomor Ijin</th><td>" .$row14["ijin_imtu_nomor"]."</td></tr> 
								<tr><th>Tanggal Awal Ijin</th><td>" .$row14["ijin_imtu_start"]."</td></tr> 
								<tr><th>Tanggal Akhir Ijin</th><td>" .$row14["ijin_imtu_finish"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="IJIN DEPHUB/KOMINFO" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql15 = "SELECT
									ijin_dephub_nomor,
									ijin_dephub_start,
									ijin_dephub_finish
									FROM ijin_dephub
									WHERE sites_id=$sites_id
									";
								$result15 = $conn->query($sql15);
								$row15 = $result15->fetch_assoc();

								echo "
								<tr><th>Nomor Ijin</th><td>" .$row15["ijin_dephub_nomor"]."</td></tr> 
								<tr><th>Tanggal Mulai Ijin</th><td>" .$row15["ijin_dephub_start"]."</td></tr> 
								<tr><th>Tanggal Akhir Ijin</th><td>" .$row15["ijin_dephub_finish"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="IPPT" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql16 = "SELECT
									ijin_ptt_nomor,
									ijin_ptt_start,
									ijin_ptt_finish
									FROM ijin_ptt
									WHERE sites_id=$sites_id
									";
								$result16 = $conn->query($sql16);
								$row16 = $result16->fetch_assoc();

								echo "
								<tr><th>Nomor Ijin Pendirian</th><td>" .$row16["ijin_ptt_nomor"]."</td></tr> 
								<tr><th>Tanggal Awal Ijin Pendirian</th><td>" .$row16["ijin_ptt_start"]."</td></tr> 
								<tr><th>Tanggal Akhir Ijin Pendirian</th><td>" .$row16["ijin_ptt_finish"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="IPB" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql17 = "SELECT
									ijin_ipb_nomor,
									ijin_ipb_start,
									ijin_ipb_finish
									FROM ipb
									WHERE sites_id=$sites_id
									";
								$result17 = $conn->query($sql17);
								$row17 = $result17->fetch_assoc();

								echo "
								<tr><th>Nomor IPB</th><td>" .$row17["ijin_ipb_nomor"]."</td></tr> 
								<tr><th>Tanggal Awal IPB</th><td>" .$row17["ijin_ipb_start"]."</td></tr> 
								<tr><th>Tanggal Akhir IPB</th><td>" .$row17["ijin_ipb_finish"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="IJIN PRINSIP" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql18 = "SELECT
									ijin_prinsip_nomor,
									ijin_prinsip_start,
									ijin_prinsip_finish
									FROM ijin_prinsip
									WHERE sites_id=$sites_id
									";
								$result18 = $conn->query($sql18);
								$row18 = $result18->fetch_assoc();

								echo "
								<tr><th>Nomor Ijin Prinsip</th><td>" .$row18["ijin_prinsip_nomor"]."</td></tr> 
								<tr><th>Tanggal Awal Ijin Prinsip</th><td>" .$row18["ijin_prinsip_start"]."</td></tr> 
								<tr><th>Tanggal Akhir Ijin Prinsip</th><td>" .$row18["ijin_prinsip_finish"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="IJIN GENSET" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql19 = "SELECT
									ijin_genset_nomor,
									ijin_genset_status,
									ijin_genset_start,
									ijin_genset_finish
									FROM ijin_genset
									WHERE sites_id=$sites_id
									";
								$result19 = $conn->query($sql19);
								$row19 = $result19->fetch_assoc();

								echo "
								<tr><th>Nomor</th><td>" .$row19["ijin_genset_nomor"]."</td></tr> 
								<tr><th>Status</th><td>" .$row19["ijin_genset_status"]."</td></tr> 
								<tr><th>Tanggal Start</th><td>" .$row19["ijin_genset_start"]."</td></tr>
								<tr><th>Tanggal Finish</th><td>" .$row19["ijin_genset_finish"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="COMCASE" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql20 = "SELECT
									comcase_tanggal,
									comcase_keterangan,
									comcase_status,
									comcase_solusi,
									comcase_file,
									comcase_mitra
									FROM site
									WHERE sites_id=$sites_id
									";
								$result20 = $conn->query($sql20);
								$row20 = $result20->fetch_assoc();
								$a=$row20["comcase_file"]; 
								$aloc="File/".$a;
								echo "
								<tr><th>Comcase Tanggal</th><td>" . $row20["comcase_tanggal"]."</td></tr> 
								<tr><th>Comcase Keterangan</th><td>" .$row20["comcase_keterangan"]."</td></tr> 
								<tr><th>Comcase Status</th><td>" .$row20["comcase_status"]."</td></tr> 
								<tr><th>Comcase Solusi</th><td>" .$row20["comcase_solusi"]."</td></tr>
								<tr><th>Comcase File</th><td><a href=".$aloc.">".$a."</a></td></tr> 
								<tr><th>Comcase Mitra</th><td>" .$row20["comcase_mitra"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>

					<button onclick="myFunction()"  style="margin-bottom: 200px;">Print Halaman</button>
					<script>
						function myFunction() {
					    window.print();
						}
					</script>
				</div>
			</div>
		</div>
	</body>
</html>

<!-- - - - - - - - - - JavaScript untuk tab menu di class=page - - - - - - - - - -->
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