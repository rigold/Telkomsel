<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "sita";
	$conn = mysqli_connect($servername, $username, $password, $database);

	$temp = explode(".", $_FILES["file"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);

	$target_dir = "upload/";
	$target_file = $target_dir . $newfilename . basename($_FILES["fileToUpload"]["name"]);
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
	
	$image=$newfilename . $_FILES["fileToUpload"]["name"];

	$Nama=$_POST['Nama'];
	$NIK=$_POST['NIK'];
	$Password=$_POST['Password'];
	$Jabatan=$_POST['Jabatan'];
	
	mysqli_query($conn,
		"INSERT INTO user (nama_user,nik,password,jabatan,link_profile_pic)
		VALUES('$Nama','$NIK','$Password','$Jabatan','$image')");



	if(!$conn) {
		echo "failed";
		die("Connection failed: " . mysqli_connect_error());	
	}
	else {
		echo "success";
		header("Location: List_User.php");
		
		
	}
?>