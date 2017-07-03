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
	      				<a href="Site_Daerah.php"> Bangkalan </a> 
						<a href="Site_Daerah.php"> Banyuwangi </a> 
						<a href="Site_Daerah.php"> Batu </a> 
						<a href="Site_Daerah.php"> Blitar Kab. </a> 
						<a href="Site_Daerah.php"> Blitar Kota </a> 
						<a href="Site_Daerah.php#"> Bojonegoro </a> 
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

					<h1>List User</h1>
					<br>
					<div class="line-separator"></div>
								<table>
									<tr>
										<th>
											Picture
										</th>
										<th>
											Nama User
										</th>
										<th>
											NIK(ID)
										</th>
										<th>
											Password
										</th>
										<th>
											Jabatan
										</th>
										<th>
											Action
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
											if ($_FILES["fileToUpload"]["size"] > 500000000) {
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
										    echo '<img src= "'.$img.'" width="100" height="100" />';
										    echo '<br>';
											?>
										</td>
										<td>
											<?php echo $_POST["Nama"]; ?><br>
										</td>
										<td>
											<?php echo $_POST["NIK"]; ?><br>
										</td>
										<td>	
											<?php echo $_POST["Password"]; ?><br>
										</td>	
										<td>	
											<?php echo $_POST["Jabatan"]; ?><br>
										</td>
										<td>
											<button type="button" onclick="location.href='Edit_User.php';">Edit</button>
										</td>
									</tr>
								</table>

				</div>
			</div>
		</div>
	</body>
</html>