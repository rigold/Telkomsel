<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sita";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
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
							<a href="List_User.php"><br>> LIST USER<br></a>
							<a href="List_Sites.php"><br>> LIST SITES<br></a>
						</p>
					</div>
					
					<p>&#169; Copyright 2017. Created by Rigold Nainggolan & Tomson Pangaribuan</p>
				</div>
				<div class="body">
					<h1><a href="Home.php">DETAIL RPM/SKRD</a></h1>
					<br>
					<div class="line-separator"></div>
					<div id="featured">
						<div>
							<br>
							<?php
								$kota_kab=$_REQUEST['kota_kab'];
								$sql = "SELECT * from site where sites_kota_kabupaten='".$kota_kab."'";;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
							?>
							<h5><?php echo $row['sites_kota_kabupaten'];?>
							</h5>
						</div>
						<div>

							<?php
									$sql = "SELECT site.sites_id, site.sites_nama, site.sites_alamat, site.sites_luas_lahan, site.sites_tower_height, skrd_rpm.harga_skrd, (SELECT SUM(skrd_rpm.harga_skrd) FROM skrd_rpm,site WHERE site.sites_id = skrd_rpm.sites_id && site.sites_kota_kabupaten = '".$kota_kab."') AS 'jl_skrd' FROM site,skrd_rpm WHERE site.sites_id = skrd_rpm.sites_id && site.sites_kota_kabupaten = '".$kota_kab."'";

									//

									//$totpbb = "SELECT SUM(pbb.nilai_pbb_site) FROM pbb,site WHERE site.sites_id = pbb.sites_id";
									$result = $conn->query($sql);
									//  AVG_pagu has the AVG value of all columns of `perpanjangan_pagu` in table `site`
									if ($result->num_rows > 0) {
									    echo "<table>
									        <tr>
									            <th>Site ID</th>
												<th>Nama Site</th>
												<th>Alamat</th>
												<th>Luas Tanah</th>
												<th>Tinggi Tower</th>
												<th>Nilai SKRD</th>
									        </tr>";
									    //  output data of each row
									    //  $rows = array(); // This is not actually required
									    while ($row = $result->fetch_assoc()) {
									        //$rows[] = $row["AVG_pagu"]; // This is not actually required
									        echo "
									            <tr>
									                    <td>" . $row["sites_id"] . "</td>
									                    <td>" . $row["sites_nama"] . "</td>
									                    <td>" . $row["sites_alamat"] . "</td>
									                    <td>" . $row["sites_luas_lahan"] . "</td>
									                    <td>" . $row["sites_tower_height"] . "</td>
									                    <td>" . $row["harga_skrd"] . "</td>

									            </tr>";
									    }

									    echo "</table>";
									    $result = $conn->query($sql);
									    $row = $result->fetch_assoc();
									    echo "
									    <table>
									    	<tr>
									    		<td>
									    			Total SKRD
									    		</td>
									    		<td>
									    			" . $row["jl_skrd"] . "
									    		</td>
									    	</tr>
									    	<tr>
									    		<td>
									    			Remark<br><br><br><br>
									    		</td>
									    		<td>
									    		</td>
									    	</tr>
									    </table>";
									    echo " " . date("Y/m/d") ;
									    echo "<br><br>";
									    echo "
									    ";
									}
									else {
									    //echo "No records found!";
									}
									$conn->close();
								?>
								<table>
									<tr>
										
									    <td style="width: 145px;">
									    	Dibuat Oleh,
									    </td>
									    <td>
									   		Diperiksa Oleh,
									    </td>
									    <td>
									    	Disetujui Oleh,
									    </td>
									    <td style="text-align: center;">
									    	Mengetahui,
									    </td>
									</tr>
								</table>
								<br><br><br><br><br><br>
								<table>
									<tr>
									    <td>
									    	Login User
									    </td>
									    <td>
									   		Danial Sam
									    </td>
									    <td>
									    	Yoyok Dwi Harianto
									    </td>
									    <td>
									    	Erika Widiasuti
									    </td>
									    <td>
									    	Maruli Simamora
									    </td>
									</tr>
									<tr style="background-color: none;">
									    <td>
									    	Jabatan
									    </td>
									    <td>
									   		Pj. Spv. Site Administrasi Jatim
									    </td>
									    <td>
									    	Manager Site Management Jatim
									    </td>
									    <td>
									    	Manager Legal and Regulatory Jawa Bali
									    </td>
									    <td>
									    	GM Legal and Stakeholder Jawa Bali
									    </td>
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
				</div>
			</div>
		</div>
	</body>
</html>