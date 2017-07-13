<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "sita";
	$conn = mysqli_connect($servername, $username, $password, $database);

	$hapus=$_REQUEST['hapus'];
	$file ="upload/" . $hapus;
	$query = "SELECT * from user where nik='".$nik."'"; 
	$result = mysqli_query($conn, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);

	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
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
		unlink($file);
		header("Location:List_User.php");
	}
	//header("Location:List_User.php");
?>