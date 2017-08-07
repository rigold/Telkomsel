<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		exit;
   	}

	if(time() - $_SESSION['timestamp'] > 60*60) {
	    echo"<script>alert('1 Jam Sudah Berakhir!'); </script>";
	    unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
	    $_SESSION['logged_in'] = false;
	   	echo "<script language='javascript' type='text/javascript'> location.href='logout.php' </script>";
	    exit;
	} else {
	    $_SESSION['timestamp'] = time();
	}

   	include("connect.php");

	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result = mysql_query($sql, $conn);
	$row = mysql_fetch_assoc($result);
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
						$sql3 = "SELECT * FROM z_perpanjangan ORDER BY no DESC LIMIT 1";
						$result3 = mysql_query($sql3, $conn);
						$row3 = mysql_fetch_assoc($result3);
					?>
					<h1><a href="Home.php">LIST PERPANJANGAN</a></h1>
					<h6>PERPANJANGAN/<?php echo $row3['no'];?>/<?php echo $row['nik'];?>/<?php echo date("d-m-Y");
						?>
					</h6>
					<br>
					<div class="line-separator"></div>
					<br>
					<div id="featured">
						<div>
								<?php
									$sql = "SELECT site.sites_id, site.sites_nama, site.sites_alamat, site.sites_penawaran_pemilik_lahan, site.perpanjangan_spph, site.perpanjangan_spph_tanggal, site.tanggal_masuk_pks, site.tanggal_keluar_pks, daerah.kota_kabupaten, site.perpanjangan_pagu, site.sites_tanggal_start, site.sites_tanggal_finish, site.perpanjangan_invoice, site.perpanjangan_invoice_nomor, site.bak_status, identitas_pemilik.sl_pks, (SELECT CAST(AVG(perpanjangan_pagu) AS DECIMAL(10,0)) FROM site) AS 'AVG_pagu' FROM site, daerah, identitas_pemilik WHERE site.sites_id = identitas_pemilik.sites_id && site.sites_kota_kabupaten = daerah.kota_kabupaten GROUP BY site.sites_id";
									$result = mysql_query($sql, $conn);
									$no = 1;
									if (!empty($result)) {
									    echo "<table id= 'myTable'>
									        <tr>
									        				<th>No.</th>
									                        <th onclick='sortTable(0)'>Site ID</th>
									                        <th onclick='sortTable(1)'>Site Name</th>
									                        <th>Alamat</th>
									                        <th onclick='sortTable(2)'>Kab.Kota</th>
									                        <th onclick='sortTable(3)'>Pagu</th>
									                        <th>Harga Rata Rata</th>
									                        <th>Penawaran Pemilik Lahan</th>
									                        <th>Awal Kontrak</th>
									                        <th>Akhir Kontrak</th>
									                        <th>Harga SPPH</th>
									                        <th>Tanggal SPPH</th>
									                        <th>No. Invoice</th>
									                        <th>Tangga Ttd Invoice</th>
									                        <th>Surat PKS</th>
									                        <th>Tanggal Masuk Surat PKS</th>
									                        <th>Tangal Keluar Surat PKS</th>
									                        <th>Status</th>
									        </tr>";
									    while ($row = mysql_fetch_assoc($result)) {
									        echo "
									            <tr>
									                    <td>" . $no++ . "</td>
									                    <td>" . $row["sites_id"] . "</td>
									                    <td>" . $row["sites_nama"] . "</td>
									                    <td>" . $row["sites_alamat"] . "</td>
									                    <td>" . $row["kota_kabupaten"] . "</td>
									                    <td>Rp." .number_format($row["perpanjangan_pagu"]). "</td>
									                    <td>Rp." .number_format($row["AVG_pagu"]). "</td>
									                    <td>Rp." .number_format($row["sites_penawaran_pemilik_lahan"]). "</td>
									                    <td>" . $row["sites_tanggal_start"] . "</td>
									                    <td>" . $row["sites_tanggal_finish"] . "</td>
									                    <td>Rp." .number_format($row["perpanjangan_spph"]). "</td>
									                    <td>" . $row["perpanjangan_spph_tanggal"] . "</td>
									                    <td>" . $row["perpanjangan_invoice_nomor"] . "</td>
									                    <td>" . $row["perpanjangan_invoice"] . "</td>
									                    <td>" . $row["sl_pks"] . "</td>
									                    <td>" . $row["tanggal_masuk_pks"] . "</td>
									                    <td>" . $row["tanggal_keluar_pks"] . "</td>
									                    <td>" . $row["bak_status"] . "</td>
									            </tr>";
									    }

									    echo "</table>";
									}
								?>
						</div>
					</div>
					<?php
					$link="in_perpanjangan.php";
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
		</div>

		<script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("myTable");
		  switching = true;
		  //Set the sorting direction to ascending:
		  dir = "asc"; 
		  /*Make a loop that will continue until
		  no switching has been done:*/
		  while (switching) {
		    //start by saying: no switching is done:
		    switching = false;
		    rows = table.getElementsByTagName("TR");
		    /*Loop through all table rows (except the
		    first, which contains table headers):*/
		    for (i = 1; i < (rows.length - 1); i++) {
		      //start by saying there should be no switching:
		      shouldSwitch = false;
		      /*Get the two elements you want to compare,
		      one from current row and one from the next:*/
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];
		      /*check if the two rows should switch place,
		      based on the direction, asc or desc:*/
		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          //if so, mark as a switch and break the loop:
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          //if so, mark as a switch and break the loop:
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
		    if (shouldSwitch) {
		      /*If a switch has been marked, make the switch
		      and mark that a switch has been done:*/
		      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		      switching = true;
		      //Each time a switch is done, increase this count by 1:
		      switchcount ++;      
		    } else {
		      /*If no switching has been done AND the direction is "asc",
		      set the direction to "desc" and run the while loop again.*/
		      if (switchcount == 0 && dir == "asc") {
		        dir = "desc";
		        switching = true;
		      }
		    }
		  }
		}
		</script>


	</body>
</html>

<?php mysql_close($conn); ?>