<!DOCTYPE html>

<?php

	$conn = mysqli_connect("localhost","root","","sita");

	$sites_id=$_REQUEST['sites_id'];
	//$file1=$_REQUEST['file1'];
	//$file2=$_REQUEST['file2'];
	//$file3=$_REQUEST['file3'];
	//$file4=$_REQUEST['file4'];
	
	$query1 = "SELECT * from ho where sites_id='".$sites_id."'";
	$query2 = "SELECT * from identitas_pemilik where sites_id='".$sites_id."'";
	$query3 = "SELECT * from ijin_dephub where sites_id='".$sites_id."'";
	$query4 = "SELECT * from ijin_genset where sites_id='".$sites_id."'";
	$query5 = "SELECT * from ijin_prinsip where sites_id='".$sites_id."'";
	$query6 = "SELECT * from ijin_ptt where sites_id='".$sites_id."'";
	$query7 = "SELECT * from imb where sites_id='".$sites_id."'";
	$query8 = "SELECT * from imtu where sites_id='".$sites_id."'";
	$query9 = "SELECT * from ipb where sites_id='".$sites_id."'";
	$query10 = "SELECT * from pbb where sites_id='".$sites_id."'";
	$query11 = "SELECT * from site where sites_id='".$sites_id."'";
	$query12 = "SELECT * from skrd_rpm where sites_id='".$sites_id."'";

	$result1 = mysqli_query($conn, $query1);
	$result2= mysqli_query($conn, $query2);
	$result3 = mysqli_query($conn, $query3);
	$result4 = mysqli_query($conn, $query4);
	$result5 = mysqli_query($conn, $query5);
	$result6 = mysqli_query($conn, $query6);
	$result7 = mysqli_query($conn, $query7);
	$result8 = mysqli_query($conn, $query8);
	$result9 = mysqli_query($conn, $query9);
	$result10 = mysqli_query($conn, $query10);
	$result11 = mysqli_query($conn, $query11);
	$result12 = mysqli_query($conn, $query12);

	$row1 = mysqli_fetch_assoc($result1);
	$row2 = mysqli_fetch_assoc($result2);
	$row3 = mysqli_fetch_assoc($result3);
	$row4 = mysqli_fetch_assoc($result4);
	$row5 = mysqli_fetch_assoc($result5);
	$row6 = mysqli_fetch_assoc($result6);
	$row7 = mysqli_fetch_assoc($result7);
	$row8 = mysqli_fetch_assoc($result8);
	$row9 = mysqli_fetch_assoc($result9);
	$row10 = mysqli_fetch_assoc($result10);
	$row11 = mysqli_fetch_assoc($result11);
	$row12 = mysqli_fetch_assoc($result12);

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
					<h1>Formulir Edit Site</h1>
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
						<button class="tablinks" onclick="openTabs(event, 'Submit')">UPDATE</button>
					</div>
					<form  id="satu" <?php echo "action= \"Edit_Sites_sql.php?sites_id=$row11[sites_id]&file1=$row11[sites_denah_tanah]&file2=$row11[sites_peta_lrt]&file3=$row11[sites_sketsa_bt]&file4=$row10[surat_pbb]&file5=$row12[surat_skrd]&file6=$row11[comcase_file]\" ";?> method="post" enctype="multipart/form-data">
						<div id="site">
							<div id="Sites" class="tabcontent">
								<table border="0">
									<h2>Informasi Sites</h2>
									<a id="detail">
										
										<p>
											<label >Site ID :</label> <input type="text" name="Site_ID" value="<?php echo $row11['sites_id'];?>" size="50">
										</p>
										<p>
											<label >Nama Site :</label> <input type="text" name="Nama_Site" value="<?php echo $row11['sites_nama'];?>" size="50">
										</p>
										<p>
											<label >Status Lahan :</label> <input type="text" name="Status_Lahan" value="<?php echo $row11['sites_status_lahan'];?>" size="50">
										</p>
										<p>
											<label >Status Tower :</label> <input type="text" name="Satus_Tower" value="<?php echo $row11['sites_status_tower'];?>" size="50">
										</p>
										<p>
											<label >Pemilik Tower :</label> <input type="text" name="Pemilik_Tower" value="<?php echo $row11['sites_pemilik_tower'];?>" size="50">
										</p>
										<p>
											<label >Alamat Site :</label> <input type="text" name="Alamat_Site" value="<?php echo $row11['sites_alamat'];?>" size="50">
										</p>
										<p>
											<label >Kota/Kabupaten :</label> <input type="text" name="Kota_Kabupaten" value="<?php echo $row11['sites_kota_kabupaten'];?>" size="50">
										</p>
										<p>
											<label >Kontraktor Utama :</label> <input type="text" name="Kontraktor_Utama" value="<?php echo $row11['sites_kontraktor_utama'];?>" size="50">
										</p>
										<p>
											<label >Penyedia Menara :</label> <input type="text" name="Penyedia_Menara" value="<?php echo $row11['sites_penyedia_menara'];?>" size="50">
										</p>

										<p>
											<label >Branch :</label> <input type="text" name="Branch" value="<?php echo $row11['sites_branch'];?>" size="50">
										</p>
										<p>
											<label >Longitude :</label> <input type="text" name="Longitude" value="<?php echo $row11['sites_long'];?>" size="50">
										</p>
										<p>
											<label >Latitude :</label> <input type="text" name="Latitude" value="<?php echo $row11['sites_lat'];?>" size="50">
										</p>
										<p>
											<label >On Air Date :</label> <input type="date" id="On_Air_Date" name="On_Air_Date" value="<?php echo $row11['sites_on_air_date'];?>">
										</p>
										<p>
											<label >Colocated Site :</label> <input type="text" name="Colocated_Site" value="<?php echo $row11['sites_colocated_site'];?>" size="50">
										</p>
										<p>
											<label >BTS Type :</label> <input type="text" name="BTS_Type" value="<?php echo $row11['sites_type_bts'];?>" size="50">
										</p>
										<p>
											<label >Site Type :</label> <input type="text" name="Site_Type" value="<?php echo $row11['sites_type_site'];?>" size="50">
										</p>
										<p>
											<label >Tower Height :</label> <input type="text" name="Tower_Height" value="<?php echo $row11['sites_tower_height'];?>" size="50">
										</p>
										<p>
											<label >Tower Type :</label> <input type="text" name="Tower_Type" value="<?php echo $row11['sites_tower_type'];?>" size="50">
										</p>
										<p>
											<label >Shelter Type :</label> <input type="text" name="Shelter_Type" value="<?php echo $row11['sites_shelter_type'];?>" size="50">
										</p>
										<p>
											<label >Shelter Size :</label> <input type="text" name="Shelter_Size" value="<?php echo $row11['sites_shelter_size'];?>" size="50">
										</p>
										<p>
											<label >Luas Lahan :</label> <input type="text" name="Luas_Lahan" value="<?php echo $row11['sites_luas_lahan'];?>" size="50">
										</p>
										<p>
											<label >Luas Jalan Akses :</label> <input type="text" name="Luas_Jalan_Akses" value="<?php echo $row11['sites_luas_jalan_akses'];?>" size="50">
										</p>
										<p>
											<label >Denah Tanah :</label> <input type="file" name="Denah_Tanah" id="Denah_Tanah" value="<?php echo $row11['sites_denah_tanah'];?>" size="50"><br>
										</p>
										<p>
											<label >Peta Radius Tower :</label> <input type="file" name="Peta_Lokasi_Radius_Tower" value="<?php echo $row11['sites_peta_lrt'];?>" id="Peta_Lokasi_Radius_Tower" size="50"><br>
										</p>
										<p>
											<label >Sketsa Batas Lahan :</label> <input type="file" name="Sketsa_Batas_Lahan" value="<?php echo $row11['sites_sketsa_bt'];?>" id="Sketsa_Batas_Lahan" size="50"><br>
										</p>
										<p>
											<label >Tanggal Mulai Sewa :</label> <input type="date" id="Tanggal_Mulai_Sewa" value="<?php echo $row11['sites_tanggal_start'];?>" name="Tanggal_Mulai_Sewa" >
										</p>
										<p>
											<label >Tanggal Akhir Sewa :</label> <input type="date" id="Tanggal_Akhir_Sewa" value="<?php echo $row11['sites_tanggal_finish'];?>" name="Tanggal_Akhir_Sewa" >
										</p>
										<p>
											<label >Harga/Tahun :</label> <input type="text" name="Harga_Per_Tahun" value="<?php echo $row11['sites_harga_per_tahun'];?>" size="50">
										</p>
										<p>
											<label >Remark :</label> <input type="text" name="Remark" value="<?php echo $row11['sites_remark'];?>" size="50">
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
											<label >Pagu :</label> <input type="text" name="Pagu" value="<?php echo $row11['perpanjangan_pagu'];?>" size="50">
										</p>
										<p>
											<label >PIC :</label> <input type="text" name="PIC" value="<?php echo $row11['perpanjangan_pic'];?>" size="50">
										</p>
										<p>
											<label >SPPH :</label> <input type="text" name="SPPH" value="<?php echo $row11['perpanjangan_spph'];?>" size="50">
										</p>
										<p>
											<label >Vendor List :</label> <input type="text" name="Vendor_List" value="<?php echo $row11['perpanjangan_vendor_list'];?>" size="50">
										</p>
										<p>
											<label >Invoice :</label> <input type="date" id="Invoice" name="Invoice" value="<?php echo $row11['perpanjangan_invoice'];?>" >
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
											<label >No BAK :</label> <input type="text"  value="<?php echo $row11['bak_nomor'];?>" name="Nomor_BAK" size="50">
										</p>
										<p>
											<label >Tanggal BAK :</label> <input type="date" id="Tanggal_BAK"  value="<?php echo $row11['bak_tanggal'];?>" name="Tanggal_BAK" >
										</p>
										<p>
											<label >Harga BAK :</label> <input type="text" value="<?php echo $row11['bak_harga'];?>" name="Harga_BAK" size="50">
										</p>
										<p>
											<label >Status :</label> <input type="text"  value="<?php echo $row11['bak_status'];?>" name="Status" size="50">
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
											<label >No HO :</label> <input type="text"  value="<?php echo $row1['ho_nomor'];?>" name="Nomor_HO" size="50">
										</p>
										<p>
											<label >Daftar Ulang HO :</label> <input type="date" id="Daftar_Ulang_HO"  value="<?php echo $row1['ho_daftar_ulang'];?>" name="Daftar_Ulang_HO" >
										</p>
										<p>
											<label >Tanggal Start HO :</label> <input type="date" id="Tanggal_Start_HO"  value="<?php echo $row1['ho_start'];?>" name="Tanggal_Start_HO" >
										</p>
										<p>
											<label >Tanggal Finish HO :</label> <input type="date" id="Tanggal_Finish_HO"  value="<?php echo $row1['ho_finish'];?>" name="Tanggal_Finish_HO" >
										</p>
										<p>
											<label >Status HO :</label> <input type="text"  value="<?php echo $row1['ho_status'];?>" name="Status_HO" size="50">
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
											<label >KTP Pemilik :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_ktp'];?>" name="KTP_Pemilik" size="50">
										</p>
										<p>
											<label >Kartu Keluarga Pemilik :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_kk'];?>" name="Kartu_Keluarga_Pemilik" size="50">
										</p>
										<p>
											<label >Pemilik Lahan :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_lahan'];?>" name="Pemilik_Lahan" size="50">
										</p>
										<p>
											<label >Orang yang dikuasakan :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_kuasa'];?>" name="Orang_Yang_Di_Kuasakan" size="50">
										</p>
										<p>
											<label >Alamat Pemilik :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_alamat'];?>" name="Alamat_Pemilik" size="50">
										</p>
										<p>
											<label >Telepon :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_telepon'];?>" name="Telepon" size="50">
										</p>
										<p>
											<label >No. HP :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_hp'];?>" name="HP" size="50">
										</p>
										<p>
											<label >E-Mail :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_email'];?>" name="E_mail" size="50">
										</p>
										<p>
											<label >Surat Persetujuan Keluarga :</label> <input type="text"  value="<?php echo $row2['identitas_pemilik_sp_keluarga'];?>" name="Surat_Persetujuan_Keluarga" size="50">
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
									<p><label >Surat Pernyataan :</label> <input type="text"  value="<?php echo $row2['sp'];?>" name="SP" size="50"></p>
									<p><label >Surat Pernyataan Ahli Waris :</label> <input type="text"  value="<?php echo $row2['sp_ahli_waris'];?>" name="SP_Ahli_Waris" size="50"></p>
									<p><label >Surat Pernyataan Janda :</label> <input type="text"  value="<?php echo $row2['sp_janda'];?>" name="SP_Janda" size="50"></p>
									<p><label >Surat Pernyataan Kepemilikan Tanah :</label> <input type="text"  value="<?php echo $row2['sp_kepemilikan_tanah'];?>" name="SP_Kepemilikan_Tanah" size="50"></p>
									<p><label >Surat Pernyataan Pelepasan Hak :</label> <input type="text"  value="<?php echo $row2['sp_pelepasan_hak'];?>" name="SP_Pelepasan_Hak" size="50"></p>
									<p><label >Surat Pernyataan Pembayaran :</label> <input type="text"  value="<?php echo $row2['sp_pembayaran'];?>" name="SP_Pembayaran" size="50"></p>
									<p><label >Surat Pernyataan Penguasaan Fisik Tanah :</label> <input type="text"  value="<?php echo $row2['sp_penguasaan_fisik_tanah'];?>" name="SP_Penguasaan_Fisik_Tanah" size="50"></p>
									<p><label >Surat Pernyataan Peralihan Atas Pekarangan :</label> <input type="text"  value="<?php echo $row2['sp_peralihan_atas_pekarangan'];?>" name="SP_Peralihan_Atas_Pekarangan" size="50"></p>
									<p><label >Surat Pernyataan Persetujuan Kepala Desa :</label> <input type="text"  value="<?php echo $row2['sp_persetujuan_kepala_desa'];?>" name="SP_Persetujuan_Kepala_Desa" size="50"></p>
									<p><label >Surat Pernyataan Tanah Pemohon :</label> <input type="text"  value="<?php echo $row2['sp_tanah_pemohon'];?>" name="SP_Tanah_Pemohon" size="50"></p>
									<p><label >Surat Pernyataan Tidak Keberatan Jalan Pribadi :</label> <input type="text"  value="<?php echo $row2['sp_tidak_keberatan_jalan_pribadi'];?>" name="SP_Tidak_Keberatan_Jalan_Pribadi" size="50"></p>
									<p><label >Surat Pernyataan Tidak Keberatan Jalan Umum :</label> <input type="text"  value="<?php echo $row2['sp_tidak_keberatan_jalan_umum'];?>" name="SP_Tidak_Keberatan_Jalan_Umum" size="50"></p> 
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
											<label >Akta Hibah :</label> <input type="text"  value="<?php echo $row2['akta_hibah'];?>" name="Akta_Hibah" size="50">
										</p>
										<p>
											<label >Akta Jual Beli Sewa :</label> <input type="text"  value="<?php echo $row2['akta_jualbeli_sewa'];?>" name="Akta_Jual_Beli_Sewa" size="50">
										</p>
										<p>
											<label >Akta Hak Bersama :</label> <input type="text"  value="<?php echo $row2['akta_hak_bersama'];?>" name="Akta_Hak_Bersama" size="50">
										</p>
										<p>
											<label >Akta Warisan :</label> <input type="text"  value="<?php echo $row2['akta_warisan'];?>" name="Akta_Warisan" size="50">
										</p>
										<p>
											<label >Akta Pemisahan :</label> <input type="text"  value="<?php echo $row2['akta_pemisahan'];?>" name="Akta_Pemisahan" size="50">
										</p>
										<p>
											<label >Akta Nikah :</label> <input type="text"  value="<?php echo $row2['akta_nikah'];?>" name="Akta_Nikah" size="50">
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
											<label >Ijin Perubahan Pengguna Tanah :</label> <input type="text"  value="<?php echo $row2['ijin_ippt'];?>" name="Ijin_Perubahan_Pengguna_Tanah" size="50">
										</p>
										<p>
											<label >Ijin Warga :</label> <input type="text"  value="<?php echo $row2['ijin_warga'];?>" name="Ijin_Warga" size="50">
										</p>
										<p>
											<label >Ijin UKL UPL :</label> <input type="text"  value="<?php echo $row2['ijin_ukl_upl'];?>" name="Ijin_UKL_UPL" size="50">
										</p>
										<p>
											<label >Ijin Sertifikat Tanah :</label> <input type="text"  value="<?php echo $row2['ijin_sertifikat_tanah'];?>" name="Ijin_Sertifikat_Tanah" size="50">
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
									<p><label >Surat Keterangan Akses Lahan Jalan :</label> <input type="text"  value="<?php echo $row2['sket_akses_lahan_jalan'];?>" name="SK_Akses_Lahan_Jalan" size="50"></p>
									<p><label >Surat Keterangan Asal Tanah :</label> <input type="text"  value="<?php echo $row2['sket_asal_tanah'];?>" name="SK_Asal_Tanah" size="50"></p>
									<p><label >Surat Keterangan Beda Luas Tanah :</label> <input type="text"  value="<?php echo $row2['sket_beda_luas_tanah'];?>" name="SK_Beda_Luas_Tanah" size="50"></p>
									<p><label >Surat Keterangan Beda Nama :</label> <input type="text"  value="<?php echo $row2['sket_beda_nama'];?>" name="SK_Beda_Nama" size="50"></p>
									<p><label >Surat Keterangan Fatwa Waris :</label> <input type="text"  value="<?php echo $row2['sket_fatwa_waris'];?>" name="SK_Fatwa_Waris" size="50"></p>
									<p><label >Surat Keterangan Kematian :</label> <input type="text"  value="<?php echo $row2['sket_kematian'];?>" name="SK_Kematian" size="50"></p>
									<p><label >Surat Keterangan Penduduk :</label> <input type="text"  value="<?php echo $row2['sket_penduduk'];?>" name="SK_Penduduk" size="50"></p>
									<p><label >Surat Keterangan Permohonan IMB, HO, dan IP :</label> <input type="text"  value="<?php echo $row2['sket_permohonan_imb_ho_ip'];?>" name="SK_Permohonan_IMB_dll" size="50"></p>
									<p><label >Surat Keterangan Persetujuan Sewa Lahan :</label> <input type="text"  value="<?php echo $row2['sket_persetujuan_sewa_lahan'];?>" name="SK_Persetujuan_Sewa_Lahan" size="50"></p>
									<p><label >Surat Keterangan Riwayat Tanah :</label> <input type="text"  value="<?php echo $row2['sket_riwayat_tanah'];?>" name="SK_Riwayat_Tanah" size="50"></p>
									<p><label >Surat Keterangan Suami Istri :</label> <input type="text"  value="<?php echo $row2['sket_suami_istri'];?>" name="SK_Suami_Istri" size="50"></p>
									<p><label >Surat Keterangan Tanah :</label> <input type="text"  value="<?php echo $row2['sket_tanah'];?>" name="SK_Tanah" size="50"></p>
									<p><label >Surat Keterangan Tidak Sengketa :</label> <input type="text"  value="<?php echo $row2['sket_tidak_sengketa'];?>" name="SK_Tidak_Sengketa" size="50"></p>
									<p><label >Surat Keterangan Tidak Keberatan Didirikan :</label> <input type="text"  value="<?php echo $row2['sket_keberatan'];?>" name="SK_Tidak_Keberatan_Didirikan" size="50"></p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="SK" class="tabcontent">
								<table border="0">
									<h2>Surat Lain</h2>
									<a id="detail">
										<p><label >Surat Ijin PKS :</label> <input type="text"  value="<?php echo $row2['sl_pks'];?>" name="Surat_Ijin_PKS" size="50"></p>
										<p><label >Surat Kuasa :</label> <input type="text"  value="<?php echo $row2['sl_sk_pengambilan_jaminan_asli'];?>" name="Surat_Kuasa" size="50"></p>
										<p><label >Surat Kuasa Pengambilan Jaminan Asli :</label> <input type="text"  value="<?php echo $row2['sl_surat_jaminan_hukum'];?>" name="Surat_Kuasa_Pengambilan_Jaminan_Asli" size="50"></p>
										<p><label >Surat Kuasa Jaminan Hukum :</label> <input type="text"  value="<?php echo $row2['sl_sk'];?>" name="Surat_Jaminan_Hukum" size="50"></p>
										<p><label >Surat Perjanjian Sewa Tanah :</label> <input type="text"  value="<?php echo $row2['sl_surat_perjanjian_sewa_tanah'];?>" name="Surat_Perjanjian_Sewa_Tanah" size="50"></p>
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
											<label >Nomor Objek Pajak :</label> <input type="text"  value="<?php echo $row10['nop'];?>" name="Nomor_Objek_Pajak" size="50">
										</p>
										<p>
											<label >Nilai PBB :</label> <input type="text"  value="<?php echo $row10['nilai_pbb_site'];?>" name="Nilai_PBB" size="50">
										</p>
										<p>
											<label >Tanggal Mulai :</label> <input type="date" id="Tanggal_Mulai"  value="<?php echo $row10['tanggal_mulai'];?>" name="Tanggal_Mulai" >
										</p>
										<p>
											<label >Tanggal Jatuh Tempo :</label> <input type="date" id="Tanggal_Jatuh_Tempo"  value="<?php echo $row10['tanggal_jatuh_tempo'];?>" name="Tanggal_Jatuh_Tempo" >
										</p>
										<p>
											<label >Status :</label> <input type="text"  value="<?php echo $row10['status'];?>" name="Status_PBB" size="50">
										</p>
										<p>
											<label >NJOP Tanah :</label> <input type="text"  value="<?php echo $row10['njop_tanah'];?>" name="NJOP_Tanah" size="50">
										</p>
										<p>
											<label >NJOP Bangunan :</label> <input type="text"  value="<?php echo $row10['njop_bangunan'];?>" name="NJOP_Bangunan" size="50">
										</p>
										<p>
											<label >Surat PBB :</label> <input type="file"  value="<?php echo $row10['surat_pbb'];?>" name="Surat_PBB" id="sket_pelunasan_pbb" size="50"><br>
										</p>
										<p>
											<label >Koefisien PBB :</label> <input type="text"  value="<?php echo $row10['koef_pbb'];?>" name="Koef_PBB" size="50">
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
											<label >Nomor SKRD :</label> <input type="text"  value="<?php echo $row12['no_skrd'];?>" name="No_SKRD" size="50">
										</p>
										<p>
											<label >Nilai SKRD :</label> <input type="text"  value="<?php echo $row12['harga_skrd'];?>" name="Harga_SKRD" size="50">
										</p>
										<p>
											<label >Tanggal Jatuh Tempo :</label> <input type="date" id="Tanggal_Jatuh_Tempo"  value="<?php echo $row12['tanggal_jatuh_tempo'];?>" name="Tanggal_Jatuh_Tempo" >
										</p>
										<p>
											<label >Koefisien SKRD :</label> <input type="text"  value="<?php echo $row12['koef_skrd'];?>" name="Koef_SKRD" size="50">
										</p>
										<p>
											<label >Status :</label> <input type="text"  value="<?php echo $row12['status'];?>" name="Status_SKRD" size="50">
										</p>
										<p>
											<label >Surat SKRD :</label> <input type="file"  value="<?php echo $row12['surat_skrd'];?>" name="Surat_SKRD" id="Surat_SKRD" size="50"><br>	
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
											<label >Nomor IMB :</label> <input type="text"  value="<?php echo $row7['imb_nomor'];?>" name="Nomor_IMB" size="50">
										</p>
										<p>
											<label >Mitra Pengurusa IMB :</label> <input type="text"  value="<?php echo $row7['imb_mitra_pengurus'];?>" name="Mitra_Pengurus_IMB" size="50">
										</p>
										<p>
											<label >Daftar Ulang IMB :</label> <input type="date" id="Daftar_Ulang_IMB"  value="<?php echo $row7['imb_daftar_ulang'];?>" name="Daftar_Ulang_IMB" >
										</p>
										<p>
											<label >Tanggal Awal Mulai IMB :</label> <input type="date" id="Tanggal_Awal_IMB"  value="<?php echo $row7['imb_start'];?>" name="Tanggal_Awal_IMB" >
										</p>
										<p>
											<label >Tanggal Akhir IMB :</label> <input type="date" id="Tanggal_Akhir_IMB"  value="<?php echo $row7['imb_finish'];?>" name="Tanggal_Akhir_IMB" >
										</p>
										<p>
											<label >Status Kepengurusan IMB :</label> <input type="text"  value="<?php echo $row7['imb_status_kepengurusan'];?>" name="Status_Kepengurusan_IMB" size="50">
										</p>
										<p>
											<label >Status IMB :</label> <input type="text"  value="<?php echo $row7['imb_status'];?>" name="Status_IMB" size="50">
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
											<label >Nomor Ijin :</label> <input type="text"  value="<?php echo $row8['ijin_imtu_nomor'];?>" name="Nomor_Ijin_imtu" size="50">
										</p>
										<p>
											<label >Tanggal Awal Ijin :</label> <input type="date" id="Tanggal_Awal_Ijin_imtu"  value="<?php echo $row8['ijin_imtu_start'];?>" name="Tanggal_Awal_Ijin_imtu" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin :</label> <input type="date" id="Tanggal_Akhir_Ijin_imtu"  value="<?php echo $row8['ijin_imtu_finish'];?>" name="Tanggal_Akhir_Ijin_imtu" >
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
											<label >Nomor Ijin :</label> <input type="text"  value="<?php echo $row3['ijin_dephub_nomor'];?>" name="Nomor_Ijin" size="50">
										</p>
										<p>
											<label >Tanggal Mulai Ijin :</label> <input type="date" id="Tanggal_Mulai_Ijin"  value="<?php echo $row3['ijin_dephub_start'];?>" name="Tanggal_Mulai_Ijin" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin :</label> <input type="date" id="Tanggal_Akhir_Ijin"  value="<?php echo $row3['ijin_dephub_finish'];?>" name="Tanggal_Akhir_Ijin" >
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
											<label >Nomor Ijin Pendirian :</label> <input type="text"  value="<?php echo $row6['ijin_ptt_nomor'];?>" name="Nomor_Ijin_Pendirian" size="50">
										</p>
										<p>
											<label >Tanggal Mulai Ijin Pendirian :</label> <input type="date" id="Tanggal_Awal_Ijin_Pendirian"  value="<?php echo $row6['ijin_ptt_start'];?>" name="Tanggal_Awal_Ijin_Pendirian" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin Pendirian:</label> <input type="date" id="Tanggal_Akhir_Ijin_Pendirian"  value="<?php echo $row6['ijin_ptt_finish'];?>" name="Tanggal_Akhir_Ijin_Pendirian" >
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
											<label >Nomor IPB :</label> <input type="text"  value="<?php echo $row9['ijin_ipb_nomor'];?>" name="Nomor_IPB" size="50">
										</p>
										<p>
											<label >Tanggal Mulai IPB :</label> <input type="date" id="Tanggal_Awal_IPB"  value="<?php echo $row9['ijin_ipb_start'];?>" name="Tanggal_Awal_IPB" >
										</p>
										<p>
											<label >Tanggal Akhir IPB :</label> <input type="date" id="Tanggal_Akhir_IPB"  value="<?php echo $row9['ijin_ipb_finish'];?>" name="Tanggal_Akhir_IPB" >
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
											<label >Nomor Ijin Prinsip :</label> <input type="text"  value="<?php echo $row5['ijin_prinsip_nomor'];?>" name="Nomor_Ijin_Prinsip" size="50">
										</p>
										<p>
											<label >Tanggal Mulai Ijin Prinsip :</label> <input type="date" id="Tanggal_Awal_Ijin_Prinsip"  value="<?php echo $row5['ijin_prinsip_start'];?>" name="Tanggal_Awal_Ijin_Prinsip" >
										</p>
										<p>
											<label >Tanggal Akhir Ijin Prinsip:</label> <input type="date" id="Tanggal_Akhir_Ijin_Prinsip"  value="<?php echo $row5['ijin_prinsip_finish'];?>" name="Tanggal_Akhir_Ijin_Prinsip" >
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
											<label >Nomor :</label> <input type="text"  value="<?php echo $row4['ijin_genset_nomor'];?>" name="Nomor_Genset" size="50">
										</p>
										<p>
											<label >Status :</label> <input type="text"  value="<?php echo $row4['ijin_genset_status'];?>" name="Status_Genset" size="50">
										</p>
										<p>
											<label >Tanggal Start :</label> <input type="date" id="Tanggal_Start"  value="<?php echo $row4['ijin_genset_start'];?>" name="Tanggal_Start" >
										</p>
										<p>
											<label >Tanggal Finish :</label> <input type="date" id="Tanggal_Finish"  value="<?php echo $row4['ijin_genset_finish'];?>" name="Tanggal_Finish" >
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
											<label >Comcase Tanggal :</label> <input type="date" id="Comcase_Tanggal"  value="<?php echo $row11['comcase_tanggal'];?>" name="Comcase_Tanggal" >
										</p>
										<p>
											<label >Comcase Keterangan :</label> <input type="text"  value="<?php echo $row11['comcase_keterangan'];?>" name="Comcase_Keterangan" size="50">
										</p>
										<p>
											<label >Comcase Status :</label> <input type="text"  value="<?php echo $row11['comcase_status'];?>" name="Comcase_Status" size="50">
										</p>
										<p>
											<label >Comcase Solusi :</label> <input type="text"  value="<?php echo $row11['comcase_solusi'];?>" name="Comcase_Solusi" size="50">
										</p>
										<p>
											<label >Comcase File :</label> <input type="file"  value="<?php echo $row11['comcase_file'];?>" name="Comcase_File" id="Comcase_File" size="50"><br>
										</p>
										<p>
											<label >Comcase Mitra :</label> <input type="text"  value="<?php echo $row11['comcase_mitra'];?>" name="Comcase_Mitra" size="50">
										</p>
									</a>
								</table>
							</div>
						</div>
						<div id="site">
							<div id="Submit" class="tabcontent">
								<table border="0">
									<h2 id="check">Update</h2>
									<a id="detail">
									<h3>
										Apakah anda yakin data yang anda masukkan sudah benar?
									</h3>
									<h3>
										Jika Ya, klik Update
									</h3>
									<br><input id="final" type="submit" value="UPDATE" name="submit">
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