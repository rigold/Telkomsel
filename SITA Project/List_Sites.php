<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>SITA Project</title>
		<link rel="stylesheet" href="css/styleinput.css" type="text/css" charset="utf-8" />
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
	      				<a href="#"> Bangkalan </a> 
						<a href="#"> Banyuwangi </a> 
						<a href="#"> Batu </a> 
						<a href="#"> Blitar Kab. </a> 
						<a href="#"> Blitar Kota </a> 
						<a href="#"> Bojonegoro </a> 
						<a href="#"> Bondowoso </a> 
						<a href="#"> Gresik </a> 
						<a href="#"> Jember </a> 
						<a href="#"> Jombang </a> 
						<a href="#"> Kediri Kab. </a> 
						<a href="#"> Kediri Kota </a> 
						<a href="#"> Lamongan </a> 
						<a href="#"> Lumajang </a> 
						<a href="#"> Madiun Kab. </a> 
						<a href="#"> Madiun Kota </a> 
						<a href="#"> Magetan </a> 
						<a href="#"> Malang Kab. </a> 
						<a href="#"> Malang Kota </a> 
						<a href="#"> Mojokerto Kab. </a> 
						<a href="#"> Mojokerto Kota </a> 
						<a href="#"> Nganjuk </a> 
						<a href="#"> Ngawi </a> 
						<a href="#"> Pacitan </a> 
						<a href="#"> Pamekasan </a> 
						<a href="#"> Pasuruan Kab. </a> 
						<a href="#"> Pasuruan Kota </a> 
						<a href="#"> Ponorogo </a> 
						<a href="#"> Probolinggo Kab. </a> 
						<a href="#"> Probolinggo Kota </a> 
						<a href="#"> Sampang </a> 
						<a href="#"> Sidoarjo </a> 
						<a href="#"> Situbondo </a> 
						<a href="#"> Sumenep </a> 
						<a href="#"> Surabaya </a> 
						<a href="#"> Trenggalek </a> 
						<a href="#"> Tuban </a> 
						<a href="#"> Tulungagung </a> 

				    </div>
				</li>

				<li class="dropdown">
					<a class="dropbtn">Administrasi</a>
					<div class="dropdown-content">
	      				<a href="#">Perpanjangan Sewa</a>
					    <a href="Izin.php">Perizinan</a>
					    <a href="PBB.php">PBB</a>
					    <a href="RPM.php">RPM</a>
					    <a href="Comcase.php">Comcase</a>

				    </div>
				</li>
				<li><a href="About.php">About</a></li>
				<li><a href="Index.php">Log out</a></li>

				<form action="Search.php" id="search">
					<input type="text"/>
					<input type="submit" onclick="location.href='Search.php';" value="" id="submit"/>
				</form>
			</ul>	
		</div>

		<div id="background">
			<img src="images/bg1.jpg" alt="abs-img" class="abs-img" />

			<div class="page">
				<img src="images/bg3.png" alt="abs3-img" class="abs3-img" />
				<img src="images/bg4.png" alt="abs4-img" class="abs4-img" />
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
					<img src="images/bg2.png" alt="ab2s-img" class="
					abs2-img" />

					<h1>List Site</h1>
								<table id="sites">
									<tr>
										<th>
											Gambar
										</th>
										<th>
											Informasi Site
										</th>
										<th>
											Informasi Pemilik
										</th>
									</tr>

									<tr>
										<td>
											<?php
											$target_dir = "images/";
											$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
											$uploadOk = 1;
											$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
											// Check if image file is a actual image or fake image
											if(isset($_POST["submit"])) {
											    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
											    if($check !== false) {
											        $uploadOk = 1;
											    } else {
											        echo "File bukan image.";
											        $uploadOk = 0;
											    }
											}
											// Check if file already exists
											if (file_exists($target_file)) {
											    echo "Maaf, ada file yang sama.";
											    $uploadOk = 0;
											}
											// Check file size
											if ($_FILES["fileToUpload"]["size"] > 500000) {
											    echo "Maaf, file terlalu besar.";
											    $uploadOk = 0;
											}
											// Allow certain file formats
											if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
											&& $imageFileType != "gif" ) {
											    echo "Maaf, hanya JPG, JPEG, PNG & GIF yang diperbolehkan.";
											    $uploadOk = 0;
											}
											// Check if $uploadOk is set to 0 by an error
											if ($uploadOk == 0) {
											    echo "Maaf, file tidak dapat di upload.";
											// if everything is ok, try to upload file
											} else {
											    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
											    } else {
											        echo "Maaf, ada error dalam mengupload file.";
											    }
											}
											/* Displaying Image*/
											$image=$_FILES["fileToUpload"]["name"]; 
										    $img="images/".$image;
										    echo '<img src= "'.$img.'" width="250" height="250" />';
										    echo '<br>';
											?>
										</td>
										<td>
											<ul>
												<li>
													Nama Site :<?php echo $_POST["NamaSite"]; ?>
												</li>
												<li>
													Site ID :<?php echo $_POST["SiteID"]; ?>
												</li>
												<li>
													Status :<?php echo $_POST["Status"]; ?>
												</li>
												<li>
													Alamat :<?php echo $_POST["Alamat"]; ?>
												</li>
												<li>
													Luas Lahan :<?php echo $_POST["Luas"]; ?>
												</li>
												<li>
													Durasi :<?php echo $_POST["Durasi"]; ?>
												</li>
											</ul>
											
										</td>
										<td>	
											<ul>
												<li>
													No KTP :<?php echo $_POST["KTP"]; ?>
												</li>
												<li>
													Nama :<?php echo $_POST["NamaMilik"]; ?>
												</li>

												<li>
													Alamat :<?php echo $_POST["AlamatMilik"]; ?>
												</li>
												<li>
													No Telefon :<?php echo $_POST["HP"]; ?>
												</li>
											</ul>
										</td>	
									</tr>
								</table>

				</div>
			</div>
		</div>
	</body>
</html>