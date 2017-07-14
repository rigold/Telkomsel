<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "sita";
	$conn = mysqli_connect($servername, $username, $password, $database);

	$sites_id=$_REQUEST['sites_id'];
	$file1=$_REQUEST['file1'];
	$file2=$_REQUEST['file2'];
	$file3=$_REQUEST['file3'];
	$file4=$_REQUEST['file4'];
	$file5=$_REQUEST['file5'];
	$file6=$_REQUEST['file6'];

	$filehapus1 ="File/" . $file1;
	$filehapus2 ="File/" . $file2;
	$filehapus3 ="File/" . $file3;
	$filehapus4 ="File/" . $file4;
	$filehapus5 ="File/" . $file5;
	$filehapus6 ="File/" . $file6;

	$query1 = "SELECT * from ho where sites_id='".$sites_id."'";
	$query2 = "SELECT * from identitas_pemilik where sites_id='".$sites_id."'";
	$query3 = "SELECT * from ijin_dephub where sites_id='".$sites_id."'";
	$query4 = "SELECT * from ijin_genset where sites_id='".$sites_id."'";
	$query5 = "SELECT * from ijin_prinsip where sites_id='".$sites_id."'";
	$query6 = "SELECT * from ijin_ptt where sites_id='".$sites_id."'";
	$query7 = "SELECT * from imb where sites_id='".$sites_id."'";
	$query8 = "SELECT * from imtu where sites_id='".$sites_id."'";
	$query9 = "SELECT * from ipb where sites_id='".$sites_id."'";
	$query10 = "SELECT * from pbb where sites_id='".$sites_id."'";
	$query11 = "SELECT * from site where sites_id='".$sites_id."'";
	$query12 = "SELECT * from skrd_rpm where sites_id='".$sites_id."'";

	$result1 = mysqli_query($conn, $query1);
	$result2= mysqli_query($conn, $query2);
	$result3 = mysqli_query($conn, $query3);
	$result4 = mysqli_query($conn, $query4);
	$result5 = mysqli_query($conn, $query5);
	$result6 = mysqli_query($conn, $query6);
	$result7 = mysqli_query($conn, $query7);
	$result8 = mysqli_query($conn, $query8);
	$result9 = mysqli_query($conn, $query9);
	$result10 = mysqli_query($conn, $query10);
	$result11 = mysqli_query($conn, $query11);
	$result12 = mysqli_query($conn, $query12);

	$row1 = mysqli_fetch_assoc($result1);
	$row2 = mysqli_fetch_assoc($result2);
	$row3 = mysqli_fetch_assoc($result3);
	$row4 = mysqli_fetch_assoc($result4);
	$row5 = mysqli_fetch_assoc($result5);
	$row6 = mysqli_fetch_assoc($result6);
	$row7 = mysqli_fetch_assoc($result7);
	$row8 = mysqli_fetch_assoc($result8);
	$row9 = mysqli_fetch_assoc($result9);
	$row10 = mysqli_fetch_assoc($result10);
	$row11 = mysqli_fetch_assoc($result11);
	$row12 = mysqli_fetch_assoc($result12);

	$temp = explode(".", $_FILES["file"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	
	$target_dir = "File/";
	$target_file = $target_dir . "DT" . $newfilename . basename($_FILES["Denah_Tanah"]["name"]);
	move_uploaded_file($_FILES["Denah_Tanah"]["tmp_name"], $target_file);
	$file1="DT" . $newfilename . $_FILES["Denah_Tanah"]["name"];

	$target_file = $target_dir . "PL" . $newfilename . basename($_FILES["Peta_Lokasi_Radius_Tower"]["name"]);
	move_uploaded_file($_FILES["Peta_Lokasi_Radius_Tower"]["tmp_name"], $target_file);
	$file2="PL" . $newfilename . $_FILES["Peta_Lokasi_Radius_Tower"]["name"];

	$target_file = $target_dir . "SBL" . $newfilename . basename($_FILES["Sketsa_Batas_Lahan"]["name"]);
	move_uploaded_file($_FILES["Sketsa_Batas_Lahan"]["tmp_name"], $target_file);
	$file3="SBL" . $newfilename . $_FILES["Sketsa_Batas_Lahan"]["name"];

	$target_file = $target_dir . "Cs" . $newfilename . basename($_FILES["Comcase_File"]["name"]);
	move_uploaded_file($_FILES["Comcase_File"]["tmp_name"], $target_file);
	$file4="Cs" . $newfilename . $_FILES["Comcase_File"]["name"];

	$target_file = $target_dir . "PBB" . $newfilename . basename($_FILES["Surat_PBB"]["name"]);
	move_uploaded_file($_FILES["Surat_PBB"]["tmp_name"], $target_file);
	$file5="PBB" . $newfilename . $_FILES["Surat_PBB"]["name"];

	$target_file = $target_dir . "RPM" . $newfilename . basename($_FILES["Surat_SKRD"]["name"]);
	move_uploaded_file($_FILES["Surat_SKRD"]["tmp_name"], $target_file);
	$file6="RPM" . $newfilename . $_FILES["Surat_SKRD"]["name"];

	if(empty($_FILES["Denah_Tanah"]["name"])&&empty($_FILES["Peta_Lokasi_Radius_Tower"]["name"])&&empty($_FILES["Sketsa_Batas_Lahan"]["name"])&&empty($_FILES["Comcase_File"]["name"])&&empty($_FILES["Surat_PBB"]["name"])&&empty($_FILES["Surat_SKRD"]["name"]))
	{
		mysql_query($conn, "UPDATE ho SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE identitas_pemilik SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE ijin_dephub SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE ijin_genset SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE ijin_prinsip SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE ijin_ptt SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE imb SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE imtu SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE ipb SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE pbb SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE site SET xxx='xxx' WHERE sites_id='$sites_id' ");
		mysql_query($conn, "UPDATE skrd_rpm SET xxx='xxx' WHERE sites_id='$sites_id' ");
	}
	else
	{
		if(empty($_FILES["Denah_Tanah"]["name"]))
		{
			$file1=$row11['sites_denah_tanah'];
		}
		else
		{
			unlink($filehapus1);
		}
		if(empty($_FILES["Peta_Lokasi_Radius_Tower"]["name"]))
		{
			$file2=$row11['sites_peta_lrt'];
		}
		else
		{
			unlink($filehapus2);
		}
		if(empty($_FILES["Sketsa_Batas_Lahan"]["name"]))
		{
			$file3=$row11['sites_sketsa_bt'];
		}
		else
		{
			unlink($filehapus3);
		}
		if(empty($_FILES["Comcase_File"]["name"]))
		{
			$file4=$row11['comcase_file'];
		}
		else
		{
			unlink($filehapus4);
		}
		if(empty($_FILES["Surat_PBB"]["name"]))
		{
			$file5=$row10['surat_pbb'];
		}
		else
		{
			unlink($filehapus5);
		}
		if(empty($_FILES["Surat_SKRD"]["name"]))
		{
			$file6=$row12['surat_skrd'];
		}
		else
		{
			unlink($filehapus6);
		}

		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");
		mysql_query($conn, "UPDATE xxx SET xxx='xxx' WHERE xxx='xxx' ");

	}

	if(empty($_FILES["Denah_Tanah"]["name"]))
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
	header("Location:List_Sites.php");
?>