<?php
	include("connect.php");

	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);

	$target_dir = "upload/";
	$target_file2 = $target_dir . $newfilename . basename($_FILES["fileToUpload"]["name"]);
	$target_file = preg_replace("/ /", "-", $target_file2);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if(isset($_POST["submit"])) {
		
		if(empty($_FILES["fileToUpload"]["name"]))
		{
			$image="no_img.jpg";
		}
		else
		{
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
		    } else {
		        $uploadOk = 0;
		    }

			if (file_exists($target_file)) {
			    $uploadOk = 0;
			}
			
			if ($uploadOk == 0) {
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			    } else {
			        echo "Maaf, ada error dalam mengupload file.";
			    }
			}
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
			{
			    echo "<script type='text/javascript'>alert('Ekstensi Data tidak sesuai(Bukan .jpg/.jpeg/.png)');</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
			    exit;
			}
			if ($_FILES["fileToUpload"]["size"] > 3000000)
			{
				echo "<script type='text/javascript'>alert('Data terlalu besar(Diatas 3MB)!');</script>";
		    	echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
		    	exit;
			}
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
			echo "<script language='javascript' type='text/javascript'> location.href='List_User.php' </script>";
		}
	}
?>

<?php mysql_close($conn); ?>