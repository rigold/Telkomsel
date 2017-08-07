<?php
	if(empty($_SESSION))
		session_start();

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		}

   	include("connect.php");

	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result = mysql_query($sql, $conn);
	$result1 = mysql_query($sql, $conn);
	$row = mysql_fetch_assoc($result);
	$row1 = mysql_fetch_assoc($result1);
?>

<!DOCTYPE html>

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
						<?php
							if($row['admin']=="Admin")
							{
								echo "
								<h3>MENU ADMIN</h3>
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
								echo "";
						?>
					</div>
				</div>
				<div class="body">
					<?php
						$kota_kab=$_REQUEST['kota_kab'];
						$sql2 = "SELECT * from site where sites_kota_kabupaten='".$kota_kab."'";
						$result2 = mysql_query($sql2, $conn);
						$row2 = mysql_fetch_assoc($result2);

						$sql3 = "SELECT * FROM z_detail_pbb ORDER BY no DESC LIMIT 1";
						$result3 = mysql_query($sql3, $conn);
						$row3 = mysql_fetch_assoc($result3);
					?>
					<h1><a href="Home.php">DETAIL PBB</a></h1>
					<h6>PBB/<?php echo $row2['sites_kota_kabupaten'];?>/<?php echo $row3['no'];?>/<?php echo $row1['nik'];?>/<?php echo date("d-m-Y");
						?>	 
					</h6>
					<br>
					<div class="line-separator"></div>
					<div id="featured">
						<div>
							<br>
							<?php
								$kota_kab=$_REQUEST['kota_kab'];
								$sql = "SELECT * from site where sites_kota_kabupaten='".$kota_kab."'";;
								$result = mysql_query($sql, $conn);
								$row = mysql_fetch_assoc($result);
							?>
							<h5><?php echo $row['sites_kota_kabupaten'];?>
							</h5>
						</div>
						<div>
							<?php
									$sql = "SELECT site.sites_id, site.sites_nama, site.sites_alamat, site.sites_luas_lahan, site.sites_tower_height, pbb.njop_tanah, pbb.njop_bangunan, pbb.nilai_pbb_site, (SELECT SUM(pbb.nilai_pbb_site) FROM pbb,site,ijin_ptt WHERE site.sites_id = pbb.sites_id && site.sites_id = ijin_ptt.sites_id && site.sites_kota_kabupaten = '".$kota_kab."') AS 'jl_pbb', ijin_ptt.ijin_ptt_nomor FROM site,pbb,ijin_ptt WHERE site.sites_id = pbb.sites_id && site.sites_id = ijin_ptt.sites_id && site.sites_kota_kabupaten = '".$kota_kab."'";

									$result = mysql_query($sql, $conn);
									$no = 1;
									if (!empty($result))
									{
									    echo "<table id= 'myTable'>
									        <tr>
									        	<th onclick='sortTable(0)'>No.</th>
									            <th onclick='sortTable(1)'>Site ID</th>
												<th onclick='sortTable(2)'>Nama Site</th>
												<th>Alamat</th>
												<th>No. SPPT</th>
												<th onclick='sortTable(3)'>NJOP Tanah</th>
												<th onclick='sortTable(4)'>NJOP Bangunan</th>
												<th onclick='sortTable(5)'>Luas Tanah</th>
												<th onclick='sortTable(6)'>Tinggi Tower</th>
												<th onclick='sortTable(7)'>Nilai PBB</th>
									        </tr>";
									    while ($row = mysql_fetch_assoc($result))
									    {
									        echo "
									            <tr>
									            		<td>" . $no++ . "</td>
									                    <td>" . $row["sites_id"] . "</td>
									                    <td>" . $row["sites_nama"] . "</td>
									                    <td>" . $row["sites_alamat"] . "</td>
									                    <td>" . $row["ijin_ptt_nomor"] . "</td>
									                    <td>Rp." .number_format($row["njop_tanah"]). "</td>
									                    <td>Rp." .number_format($row["njop_bangunan"]). "</td>
									                    <td>" . $row["sites_luas_lahan"] . "m<sup>2</sup></td>
									                    <td>" . $row["sites_tower_height"] . " m</td>
									                    <td>Rp." .number_format($row["nilai_pbb_site"]). "</td>

									            </tr>";
									    }

									    echo "</table>";
									    $result = mysql_query($sql, $conn);
										$row = mysql_fetch_assoc($result);
									    echo "
									    <table>
									    	<tr>
									    		<td>
									    			Total PBB
									    		</td>
									    		<td>
									    			Rp." . number_format($row["jl_pbb"]) . "
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
								?>
								<table>
									<tr>
										
									    <td style="width: 145px;border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Dibuat Oleh,
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									   		Diperiksa Oleh,
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Disetujui Oleh,
									    </td>
									    <td style="text-align: center;border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Mengetahui,
									    </td>
									</tr>
								</table>
								<br><br><br>
								<?php
									$kota_kab=$_REQUEST['kota_kab'];
									$sql = "SELECT * from site where sites_kota_kabupaten='".$kota_kab."'";;
									$result = mysql_query($sql, $conn);
									$row = mysql_fetch_assoc($result);
								?>
								<table>
									<tr>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	<?php echo $row1['nama_user'];?>
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									   		Danial Sam
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Yoyok Dwi Harianto
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Erika Widiasuti
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Maruli Simamora
									    </td>
									</tr>
									<tr style="background-color: none;">
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	<?php echo $row1['jabatan'];?>
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									   		Spv. Site Administrasi Jatim
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Manager Site Management Jatim
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	Manager Legal and Regulatory Jawa Bali
									    </td>
									    <td style="border-top-width: 0px;border-right-width: 0px;border-left-width: 0px;border-bottom-width: 0px;">
									    	GM Legal and Stakeholder Jawa Bali
									    </td>
									</tr>
								</table>
						</div>
					</div>
					<?php
					$link="in_detail_pbb.php?kota_kab=".$kota_kab;
					?>
					<button  onclick="myFunction()">Print Halaman </button>
					<script type="text/javascript">
						function myFunction(){
							var a="<?php echo $link; ?>";
							document.location.href = a;
					    	window.print();
						}
					</script>
				</div>
			</div>
		</div>

<!-----------------------------------------Java Sorting---------------------------------------------->

		<script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("myTable");
		  switching = true;
		  dir = "asc"; 
		  while (switching) {
		    switching = false;
		    rows = table.getElementsByTagName("TR");
		    for (i = 1; i < (rows.length - 1); i++) {
		      shouldSwitch = false;
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];
		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
		    if (shouldSwitch) {
		      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		      switching = true;
		      switchcount ++;      
		    } else {
		      if (switchcount == 0 && dir == "asc") {
		        dir = "desc";
		        switching = true;
		      }
		    }
		  }
		}
		</script>

<!-----------------------------------------END Java Sorting-------------------------------------------->

	</body>
</html>

<?php mysql_close($conn); ?>