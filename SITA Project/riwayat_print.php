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
	$rowz = $result->fetch_assoc();
   
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
									<a href='riwayat_print.php'><br>> RIWAYAT PRINT<br></a>
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
					<h1>RIWAYAT CETAK</h1>
					<br>
					<div class="line-separator"></div>	
					<div class="tab">
						<button class="tablinks" onclick="openTabs(event, 'DATA SITES')">DATA SITES</button>
						<button class="tablinks" onclick="openTabs(event, 'LIST PANJANG')">LIST PANJANG</button>
						<button class="tablinks" onclick="openTabs(event, 'MONITORING')">MONITORING</button>
						<button class="tablinks" onclick="openTabs(event, 'PERIZINAN')">PERIZINAN</button>
						<button class="tablinks" onclick="openTabs(event, 'PBB')">PBB</button>
						<button class="tablinks" onclick="openTabs(event, 'DETAIL PBB')">DETAIL PBB</button>
						<button class="tablinks" onclick="openTabs(event, 'RPM')">RPM</button>
						<button class="tablinks" onclick="openTabs(event, 'DETAIL RPM')">DETAIL RPM</button>
						<button class="tablinks" onclick="openTabs(event, 'COMCASE')">COMCASE</button>
					</div>
					<div id="DATA SITES" class="tabcontent">
						<table border="0">
							<a id="detail">
							SIAPA???
							</a>

						</table>
					</div>
					<div id="LIST PANJANG" class="tabcontent">
						<table border="0">
							<a id="detail">
								YANG???
							</a>
						</table>
					</div>
					<div id="MONITORING" class="tabcontent">
						<table border="0">
							<a id="detail">
								TANYA???
							</a>
						</table>
					</div>
					<div id="PERIZINAN" class="tabcontent">
						<table border="0">
							<a id="detail">
								AYO??
							</a>
						</table>
					</div>
					<div id="PBB" class="tabcontent">
						<table border="0">
							<a id="detail">
								JAWAB???
							</a>
						</table>
					</div>
					<div id="DETAIL PBB" class="tabcontent">
						<table border="0">
							<a id="detail">
							NANTI???
							</a>
						</table>
					</div>
					<div id="RPM" class="tabcontent">
						<table border="0">
							<a id="detail">
								YANG JAWAB??
							</a>
						</table>
					</div>
					<div id="DETAIL RPM" class="tabcontent">
						<table border="0">
							<a id="detail">
								DIKASI???
							</a>
						</table>
					</div>
					<div id="COMCASE" class="tabcontent">
						<table border="0">
							<a id="detail">
								SEPEDA???
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