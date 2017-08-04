<?php
	if(empty($_SESSION))
		session_start();

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		}

   	include("connect.php");

	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result = $conn->query($sql);
	$rowz = $result->fetch_assoc();
   
   	if($rowz['admin']=="User"){header("Location: Home.php");}
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
						<a href="upload/<?php echo $rowz['link_profile_pic'];?>" class="figure"><img src="upload/<?php echo $rowz['link_profile_pic'];?>" alt=""/></a>		
					</div>

					</h1>
					<div id="tweets">
						<h3><?php echo $rowz['jabatan'];?></h3>
						<p>
							<br>Nama User : <?php echo $rowz['nama_user'];?>
							<br>NIK : <?php echo $rowz['nik'];?>
							<br>Akun : <?php if (empty($rowz['admin'])){echo "User";}else{echo $rowz['admin'];}?>
						</p>
					</div>
					<div id="article">
						<h3>MENU ADMIN</h3>
						<?php
							if($rowz['admin']=="Admin")
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
				</div>
				<div class="body">
					<h1>List Sites</h1>
					<br>
					<div class="line-separator"></div>
					<br>
						<?php
						$sql = "SELECT sites_denah_tanah,sites_peta_lrt,sites_sketsa_bt,sites_id, sites_nama, sites_kota_kabupaten, sites_alamat FROM site";
						$sql2 = "SELECT surat_pbb FROM pbb";
						$sql3 = "SELECT surat_skrd FROM skrd_rpm";
						$sql4 = "SELECT comcase_file FROM site";

						$result = $conn->query($sql);
						$result1 = $conn->query($sql2);
						$result2 = $conn->query($sql3);
						$result3 = $conn->query($sql4);
						
						$no = 1;
						if ($result->num_rows > 0) 
						{
						    echo "<table id= 'myTable'>
						    <tr>
						    	<th onclick='sortTable(0)'>No.</th>
						    	<th onclick='sortTable(1)'>Site ID</th>
						    	<th onclick='sortTable(2)'>Nama Site</th>
						    	<th onclick='sortTable(3)'>Kota/Kab </th>
						    	<th>Alamat</th>
						    	<th>Action</th>
						    </tr>";
						    while($row = $result->fetch_assoc())
						    {
						    	$frow1=$row["sites_denah_tanah"]; 
								$file1="File/".$frow1;
								$frow2=$row["sites_peta_lrt"]; 
								$file2="File/".$frow2;
								$frow3=$row["sites_sketsa_bt"]; 
								$file3="File/".$frow3;

								$row1 = $result1->fetch_assoc();
								$row2 = $result2->fetch_assoc();
								$row3 = $result3->fetch_assoc();

								$frow4=$row1["surat_pbb"];
								$file4="File/".$frow4;
								$frow5=$row2["surat_skrd"];
								$file5="File/".$frow5;
								$frow6=$row3["comcase_file"];
								$file6="File/".$frow6;

						        echo "
						        <tr>
						        	<td>".$no++."</td>
						        	<td>".$row["sites_id"]."</td>
							        <td>".$row["sites_nama"]."</td>
							        <td>".$row["sites_kota_kabupaten"]."</td>
							        <td>".$row["sites_alamat"]."</td>
							        <td><button onclick= \"location.href='Edit_Sites.php?sites_id=$row[sites_id]'\">Edit</button>
							        	<button onclick= \"location.href='Detail.php?sites_id=$row[sites_id]'\">Detail</button>
							        	<button onclick= \"location.href='Delete_Sites.php?sites_id=$row[sites_id]&file1=$file1&file2=$file2&file3=$file3&file4=$file4&file5=$file5&file6=$file6'\">Delete</button>
						        </tr>";
						    } 

						    echo "</table>";
						}
						?>
				</div>
			</div>
		</div>

		<script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("myTable");
		  switching = true;
		  dir = "asc"; 
		  while (switching) {
		    switching = false;
		    rows = table.getElementsByTagName("TR");
		    for (i = 1; i < (rows.length - 1); i++)
		    {
		      shouldSwitch = false;
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];
		      if (dir == "asc")
		      {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase())
		        {
		          shouldSwitch= true;
		          break;
		        }
		      }
		      else if (dir == "desc")
		      {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase())
		        {
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
		    if (shouldSwitch)
		    {
		      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		      switching = true;
		      switchcount ++;      
		    }
		    else
		    {
		      if (switchcount == 0 && dir == "asc")
		      {
		        dir = "desc";
		        switching = true;
		      }
		    }
		  }
		}
		</script>
	</body>
	<?php
	mysql_close($conn);
	?>
</html>