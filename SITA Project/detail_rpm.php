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
	$result1 = $conn->query($sql);
	$row = $result->fetch_assoc();
	$row1 = $result1->fetch_assoc();

	$kota_kab=$_REQUEST['kota_kab'];
	$sql2 = "SELECT * from site where sites_kota_kabupaten='".$kota_kab."'";;
	$result2 = $conn->query($sql2);
	$row2 = $result2->fetch_assoc();
	$sql3 = "SELECT * FROM z_detail_rpm ORDER BY no DESC LIMIT 1";
	$result3 = $conn->query($sql3);
	$row3 = $result3->fetch_assoc();
   
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
							if($row1['admin']=="Admin")
							{
								echo "
								<p>
									<a href='Add_User.php'>> ADD USER<br></a>
									<a href='Add_Sites.php'><br>> ADD SITE<br></a>
									<a href='List_User.php'><br>> LIST USER<br></a>
									<a href='List_Sites.php'><br>> LIST SITES<br></a>
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
								</p>
								";
						?>
					</div>
					
					<p>&#169; Copyright 2017. Created by Rigold Nainggolan & Tomson Pangaribuan</p>
				</div>
				<div class="body">
					<?php
						
					?>
					<h1><a href="Home.php">DETAIL RPM/SKRD</a></h1>
					<h6>RPM/<?php echo $row2['sites_kota_kabupaten'];?>/<?php echo $row3['no'];?>/<?php echo $row1['nik'];?>/<?php echo date("Y");
						?>	 
					</h6>
					<br>
					<div class="line-separator"></div>
					<div id="featured">
						<div>
							<br>
							<h5><?php echo $row2['sites_kota_kabupaten'];?>
							</h5>
						</div>
						<div>

							<?php
									$sql = "SELECT site.sites_id, site.sites_nama, site.sites_alamat, site.sites_luas_lahan, site.sites_tower_height, skrd_rpm.harga_skrd, (SELECT SUM(skrd_rpm.harga_skrd) FROM skrd_rpm,site WHERE site.sites_id = skrd_rpm.sites_id && site.sites_kota_kabupaten = '".$kota_kab."') AS 'jl_skrd' FROM site,skrd_rpm WHERE site.sites_id = skrd_rpm.sites_id && site.sites_kota_kabupaten = '".$kota_kab."'";

									//

									//$totpbb = "SELECT SUM(pbb.nilai_pbb_site) FROM pbb,site WHERE site.sites_id = pbb.sites_id";
									$result = $conn->query($sql);
									//  AVG_pagu has the AVG value of all columns of `perpanjangan_pagu` in table `site`
									$no = 1;
									if ($result->num_rows > 0) {
									    echo "<table id= 'myTable'>
									        <tr>
									            <th onclick='sortTable(0)'>No.</th>
									            <th onclick='sortTable(1)'>Site ID</th>
												<th onclick='sortTable(2)'>Nama Site</th>
												<th>Alamat</th>
												<th onclick='sortTable(3)'>Luas Tanah</th>
												<th onclick='sortTable(4)'>Tinggi Tower</th>
												<th onclick='sortTable(5)'>Nilai SKRD</th>
									        </tr>";
									    //  output data of each row
									    //  $rows = array(); // This is not actually required
									    while ($row = $result->fetch_assoc()) {
									        //$rows[] = $row["AVG_pagu"]; // This is not actually required
									        echo "
									            <tr>
									                    <td>" . $no++ . "</td>
									                    <td>" . $row["sites_id"] . "</td>
									                    <td>" . $row["sites_nama"] . "</td>
									                    <td>" . $row["sites_alamat"] . "</td>
									                    <td>" . $row["sites_luas_lahan"] . " m<sup>2</sup></td>
									                    <td>" . $row["sites_tower_height"] . " m</td>
									                    <td>Rp." . $row["harga_skrd"] . "</td>

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
								<br><br><br><br>
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
									   		Pj. Spv. Site Administrasi Jatim
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
					$link="in_rpm.php?kota_kab=".$kota_kab;
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