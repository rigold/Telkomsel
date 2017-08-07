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
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

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
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
			{			    
			    echo "<script type='text/javascript'>alert('Ekstensi Data tidak sesuai(Bukan .jpg/.jpeg/.png)');</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
			}
			else
			{
				if ($_FILES["fileToUpload"]["size"] > 3000000)
				{
					echo "<script type='text/javascript'>alert('Data terlalu besar(Diatas 3MB)!');</script>";
			    	echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
				}
				else
				{
					$result = mysql_query("UPDATE user SET nik='$nik',password='$password',nama_user='$nama',jabatan='$jabatan',link_profile_pic='$image' WHERE nik='$nik'",$conn);
					unlink($file);
				}
			}
		}
		echo "<script language='javascript' type='text/javascript'> location.href='List_User.php' </script>";
?>

<?php mysql_close($conn); ?>