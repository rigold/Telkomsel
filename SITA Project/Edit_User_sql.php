<?php

	include("connect.php");

	$hapus=$_REQUEST['hapus'];
	$file ="upload/" . $hapus;
	
	$query = "SELECT * from user where nik='".$nik."'"; 
	$result = mysql_query($query,$conn) or die ( mysql_error());
	$row = mysql_fetch_assoc($result);

	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$target_dir = "upload/";
	$target_file2 = $target_dir . $newfilename . basename($_FILES["fileToUpload"]["name"]);
	$target_file = preg_replace("/ /", "-", $target_file2);

	$image2=$newfilename . $_FILES["fileToUpload"]["name"];
	$image = preg_replace("/ /", "-", $image2);
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

	$nama=$_POST["Nama"];
	$nik=$_POST["NIK"];
	$password=$_POST["Password"];
	$jabatan=$_POST["Jabatan"];

	if(empty($_FILES['fileToUpload']['name']))
	{
		$result = mysql_query("UPDATE user SET nik='$nik',password='$password',nama_user='$nama',jabatan='$jabatan' WHERE nik='$nik'",$conn);
	}
	else
	{
		$result = mysql_query("UPDATE user SET nik='$nik',password='$password',nama_user='$nama',jabatan='$jabatan',link_profile_pic='$image' WHERE nik='$nik'",$conn);
		unlink($file);
	}
	header("Location:List_User.php");
?>

<?php mysql_close($conn); ?>