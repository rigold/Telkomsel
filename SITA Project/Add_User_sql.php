<?php
	include("connect.php");

	$temp = explode(".", $_FILES["file"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);

	$target_dir = "upload/";
	$target_file2 = $target_dir . $newfilename . basename($_FILES["fileToUpload"]["name"]);
	$target_file = preg_replace("/ /", "-", $target_file2);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        echo "File bukan image.";
	        $uploadOk = 0;
	    }
	}
	if (file_exists($target_file)) {
	    echo "Maaf, ada file yang sama.";
	    $uploadOk = 0;
	}
	
	if ($uploadOk == 0) {
	    echo "Maaf, file tidak dapat di upload.";
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    } else {
	        echo "Maaf, ada error dalam mengupload file.";
	    }
	}
	
	if(empty($_FILES["fileToUpload"]["name"]))
	{
		$image="no_img.jpg";
	}
	else
	{
		$image2=$newfilename . $_FILES["fileToUpload"]["name"];
		$image = preg_replace("/ /", "-", $image2);
	}

	$Nama=$_POST['Nama'];
	$NIK=$_POST['NIK'];
	$Password=$_POST['Password'];
	$Jabatan=$_POST['Jabatan'];
	
	mysql_query("INSERT INTO user (nama_user,nik,password,jabatan,link_profile_pic,admin)
		VALUES('$Nama','$NIK','$Password','$Jabatan','$image','User')", $conn);

	if(!$conn) {
		echo "failed";
		die("Connection failed: " . mysql_error());	
	}
	else {
		echo "success";
		header("Location: List_User.php");
	}
?>

<?php mysql_close($conn); ?>