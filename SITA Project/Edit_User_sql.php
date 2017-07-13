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
	$image=$newfilename . $_FILES["fileToUpload"]["name"];
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

	$nama=$_POST["Nama"];
	$nik=$_POST["NIK"];
	$password=$_POST["Password"];
	$jabatan=$_POST["Jabatan"];
	$link="fileToUpload";

	if(empty($_FILES['fileToUpload']['name']))
	{
		$result = mysqli_query($conn, "UPDATE user SET nik='$nik',password='$password',nama_user='$nama',jabatan='$jabatan' WHERE nik='$nik'");
		header("Location:List_User.php");
	}
	else
	{
		$result = mysqli_query($conn, "UPDATE user SET nik='$nik',password='$password',nama_user='$nama',jabatan='$jabatan',	link_profile_pic='$image' WHERE nik='$nik'");
	}
	header("Location:List_User.php");
?>