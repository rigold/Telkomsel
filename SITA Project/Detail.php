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
							<a href="Edit_User.php"><br>> EDIT USER<br></a>
							<a href="Edit_Sites.php"><br>> EDIT SITE<br></a>
							<a href="List_User.php"><br>> LIST USER<br></a>
							<a href="List_Sites.php"><br>> LIST SITES<br></a>
						</p>
					</div>
					
					<p><br><br>&#169; Copyright 2017. Created by R.I.KE.N</p>
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
						<button class="tablinks" onclick="openTabs(event, 'IPPT')">IPPT</button>
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
								$sql = "SELECT
									perpanjangan_pagu,
									perpanjangan_pic,
									perpanjangan_spph,
									perpanjangan_vendor_list,
									perpanjangan_invoice
									FROM site
									WHERE sites_id=$sites_id
									";
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();

								echo "
								<tr><th>Pagu</th><td>" . $row["perpanjangan_pagu"]."</td></tr> 
								<tr><th>PIC</th><td>" .$row["perpanjangan_pic"]."</td></tr> 
								<tr><th>SPPH</th><td>" .$row["perpanjangan_spph"]."</td></tr> 
								<tr><th>Vendor</th><td>" .$row["perpanjangan_vendor_list"]."</td></tr> 
								<tr><th>Invoice</th><td>" .$row["perpanjangan_invoice"]."</td></tr> 
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
								$sql = "SELECT
									bak_nomor,
									bak_tanggal,
									bak_harga,
									bak_status
									FROM site
									WHERE sites_id=$sites_id
									";
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();

								echo "
								<tr><th>Nomor BAK</th><td>" . $row["bak_nomor"]."</td></tr> 
								<tr><th>Tanggal_BAK</th><td>" .$row["bak_tanggal"]."</td></tr> 
								<tr><th>Harga_BAK</th><td>" .$row["bak_harga"]."</td></tr> 
								<tr><th>Status</th><td>" .$row["bak_status"]."</td></tr>
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
								$sql = "SELECT
									ho_nomor,
									ho_daftar_ulang,
									ho_start,
									ho_finish,
									ho_status
									FROM ho
									WHERE sites_id=$sites_id
									";
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();

								echo "
								<tr><th>Nomor HO</th><td>" . $row["ho_nomor"]."</td></tr>
								<tr><th>Daftar Ulang HO</th><td>" .$row["ho_daftar_ulang"]."</td></tr> 
								<tr><th>Tanggal Start HO</th><td>" .$row["ho_start"]."</td></tr>
								<tr><th>Tanggal Finish HO</th><td>" .$row["ho_finish"]."</td></tr>
								<tr><th>Status HO</th><td>" .$row["ho_status"]."</td></tr>
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
								$sql = "SELECT
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
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();

								echo "
								<tr><th>KTP Pemilik</th><td>" . $row["identitas_pemilik_ktp"]."</td></tr>
								<tr><th>Kartu Keluarga Pemilik</th><td>" .$row["identitas_pemilik_kk"]."</td></tr> 
								<tr><th>Pemilik Lahan</th><td>" .$row["identitas_pemilik_lahan"]."</td></tr>
								<tr><th>Orang yang dikuasakan</th><td>" .$row["identitas_pemilik_kuasa"]."</td></tr>
								<tr><th>Alamat Pemilik</th><td>" .$row["identitas_pemilik_alamat"]."</td></tr>
								<tr><th>Telepon</th><td>" .$row["identitas_pemilik_telepon"]."</td></tr> 
								<tr><th>No. HP</th><td>" .$row["identitas_pemilik_hp"]."</td></tr>
								<tr><th>E-mail</th><td>" .$row["identitas_pemilik_email"]."</td></tr>
								<tr><th>Surat Persetujuan Keluarga</th><td>" .$row["identitas_pemilik_sp_keluarga"]."</td></tr>
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
								$sql = "SELECT
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
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();

								echo "
									<tr><th>Surat Pernyataan</th><td>" . $row["sp"]."</td></tr>
									<tr><th>Surat Pernyataan Ahli Waris</th><td>" .$row["sp_ahli_waris"]."</td></tr> 
									<tr><th>Surat Pernyataan Janda</th><td>" .$row["sp_janda"]."</td></tr>
									<tr><th>Surat Pernyataan Kepemilikan Tanah</th><td>" .$row["sp_kepemilikan_tanah"]."</td></tr>
									<tr><th>Surat Pernyataan Pelepasan Hak</th><td>" .$row["sp_pelepasan_hak"]."</td></tr>
									<tr><th>Surat Pernyataan Pembayaran</th><td>" .$row["sp_pembayaran"]."</td></tr> 
									<tr><th>Surat Pernyataan Penguasaan Fisik Tanah</th><td>" .$row["sp_penguasaan_fisik_tanah"]."</td></tr>
									<tr><th>Surat Pernyataan Peralihan Atas Pekarangan</th><td>" .$row["sp_peralihan_atas_pekarangan"]."</td></tr>
									<tr><th>Surat Pernyataan Persetujuan Kepala Desa</th><td>" .$row["sp_persetujuan_kepala_desa"]."</td></tr>
									<tr><th>Surat Pernyataan Tanah Pemohon</th><td>" .$row["sp_tanah_pemohon"]."</td></tr>
									<tr><th>Surat Pernyataan Tidak Keberatan Jalan Pribadi</th><td>" .$row["sp_tidak_keberatan_jalan_pribadi"]."</td></tr>
									<tr><th>Surat Pernyataan Tidak Keberatan Jalan Umum</th><td>" .$row["sp_tidak_keberatan_jalan_umum"]."</td></tr>
								";
								?>
							</a>
						</table>
					</div>
					<div id="AKTA" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Akta Hibah</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Akta Jual Beli Sewa</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Akta Hak Bersama</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Akta Warisan</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Akta Pemisahan</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Akta Nikah</ th>
								<td>: No Database </td>
								</tr> 
								 
							</a>
						</table>
					</div>
					<div id="IJIN LAIN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Ijin Perubahan Pengguna Tanah</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Ijin Warga</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Ijin UKL UPL</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Ijin Sertifikat Tanah</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="SURAT KETERANGAN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Surat Keterangan Akses Lahan Jalan</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Asal Tanah</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Beda Luas Tanah</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Beda Nama</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Fatwa Waris</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Kematian</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Penduduk</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Permohonan IMB, HO, &IP</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Persetujuan Sewa Lahan</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Riwayat Tanah</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Suami Istri</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Tanah</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Tidak Sengketa</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Keterangan Tidak Keberatan Didirikan</ th>
								<td>: No Database </td>
								</tr> 
								 
							</a>
						</table>
					</div>
					<div id="SURAT LAIN" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Surat Kuasa</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Kuasa Pengambilan Jaminan Asli</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Jaminan Hukum</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Ijin PKS</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat Perjanjian Sewa Tanah</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="PBB" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor Objek Pajak</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Nilai PBB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Mulai</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Jatuh Tempo</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Status</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>NJOP Tanah</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>NJOP Bangunan</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat PBB</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="RPM" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>No SKRD</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Harga SKRD</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Jatuh Tempo</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Koef SKRD</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Status</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Surat SKRD</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="IMB" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor IMB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Mitra Pengurus IMB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Daftar Ulang IMB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Awal IMB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Akhir IMB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Status Kepengurusan IMB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Status IMB</ th>
								<td>: No Database </td>
								</tr> 
								 
							</a>
						</table>
					</div>
					<div id="IMTU" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor Ijin</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Awal Ijin</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Akhir Ijin</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="IJIN DEPHUB/KOMINFO" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor Ijin</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Mulai Ijin</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Akhir Ijin</ th>
								<td>: No Database </td>
								</tr> 
								 
							</a>
						</table>
					</div>
					<div id="IPPT" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor Ijin Pendirian</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Awal Ijin Pendirian</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Akhir Ijin Pendirian</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="IPB" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor IPB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Awal IPB</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Akhir IPB</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="IJIN PRINSIP" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor Ijin Prinsip</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Awal Ijin Prinsip</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Akhir Ijin Prinsip</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="IJIN GENSET" class="tabcontent">
						<table border="0">
							<a id="detail">
								<tr>
								<th>Nomor</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Status</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Start</ th>
								<td>: No Database </td>
								</tr> 
								 
								<tr>
								<th>Tanggal Finish</ th>
								<td>: No Database </td>
								</tr> 

							</a>
						</table>
					</div>
					<div id="COMCASE" class="tabcontent">
						<table border="0">
							<a id="detail">
								<?php
								$sites_id = $_GET['sites_id'];
								$sql = "SELECT
									comcase_tanggal,
									comcase_keterangan,
									comcase_status,
									comcase_solusi,
									comcase_file,
									comcase_mitra
									FROM site
									WHERE sites_id=$sites_id
									";
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								$a=$row["comcase_file"]; 
								$aloc="File/".$a;
								echo "
								<tr><th>Comcase Tanggal</th><td>" . $row["comcase_tanggal"]."</td></tr> 
								<tr><th>Comcase Keterangan</th><td>" .$row["comcase_keterangan"]."</td></tr> 
								<tr><th>Comcase Status</th><td>" .$row["comcase_status"]."</td></tr> 
								<tr><th>Comcase Solusi</th><td>" .$row["comcase_solusi"]."</td></tr>
								<tr><th>Comcase File</th><td><a href=".$aloc.">".$a."</a></td></tr> 
								<tr><th>Comcase Mitra</th><td>" .$row["comcase_mitra"]."</td></tr>
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