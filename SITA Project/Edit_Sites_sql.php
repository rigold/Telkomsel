<?php
	
	include("connect.php");

	$sites_id=$_REQUEST['sites_id'];
	$file1=$_REQUEST['file1'];//denah tanah
	$file2=$_REQUEST['file2'];//sites peta lrt
	$file3=$_REQUEST['file3'];//batas tanah
	$file4=$_REQUEST['file4'];//pbb
	$file5=$_REQUEST['file5'];//skrd
	$file6=$_REQUEST['file6'];//comcase

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

	$result1 = mysql_query($query1,$conn);
	$result2 = mysql_query($query2,$conn);
	$result3 = mysql_query($query3,$conn);
	$result4 = mysql_query($query4,$conn);
	$result5 = mysql_query($query5,$conn);
	$result6 = mysql_query($query6,$conn);
	$result7 = mysql_query($query7,$conn);
	$result8 = mysql_query($query8,$conn);
	$result9 = mysql_query($query9,$conn);
	$result10 = mysql_query($query10,$conn);
	$result11 = mysql_query($query11,$conn);
	$result12 = mysql_query($query12,$conn);

	$row1 = mysql_fetch_assoc($result1);
	$row2 = mysql_fetch_assoc($result2);
	$row3 = mysql_fetch_assoc($result3);
	$row4 = mysql_fetch_assoc($result4);
	$row5 = mysql_fetch_assoc($result5);
	$row6 = mysql_fetch_assoc($result6);
	$row7 = mysql_fetch_assoc($result7);
	$row8 = mysql_fetch_assoc($result8);
	$row9 = mysql_fetch_assoc($result9);
	$row10 = mysql_fetch_assoc($result10);
	$row11 = mysql_fetch_assoc($result11);
	$row12 = mysql_fetch_assoc($result12);

	$temp = explode(".", $_FILES["Denah_Tanah"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$target_dir = "File/";

	$target_file11 = $target_dir . "DT" . $newfilename . basename($_FILES["Denah_Tanah"]["name"]);
	$target_file1 = preg_replace("/ /", "-", $target_file11);
	$DTType = pathinfo($target_file1,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["Denah_Tanah"]["tmp_name"], $target_file1);
	if(!empty($_FILES['Denah_Tanah']['name']))
	{
		if($DTType != "jpg" AND $DTType != "png" AND $DTType != "jpeg")
		{
			echo "<script type='text/javascript'>alert('Ekstensi Denah Tanah tidak sesuai(Bukan .jpg/.jpeg/.png)');</script>";
		    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
		    exit;
		}
		else
		{
			if ($_FILES["Denah_Tanah"]["size"] > 2000000)
			{
				echo "<script type='text/javascript'>alert('File Denah Tanah terlalu besar(Diatas 2MB)!');</script>";
				echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
				exit;
			}
			else
			{
				$file11="DT" . $newfilename . $_FILES["Denah_Tanah"]["name"];
				$file1 = preg_replace("/ /", "-", $file11);
			}
		}
	}

	$target_file21 = $target_dir . "PL" . $newfilename . basename($_FILES["Peta_Lokasi_Radius_Tower"]["name"]);
	$target_file2 = preg_replace("/ /", "-", $target_file21);
	$PLType = pathinfo($target_file2,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["Peta_Lokasi_Radius_Tower"]["tmp_name"], $target_file2);
	if(!empty($_FILES['Peta_Lokasi_Radius_Tower']['name']))
	{
		if($PLType != "jpg" AND $PLType != "png" AND $PLType != "jpeg")
		{
			echo "<script type='text/javascript'>alert('Ekstensi Peta Lokasi Radius Tower tidak sesuai(Bukan .jpg/.jpeg/.png)');</script>";
		    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
		    exit;
		}
		else
		{
			if ($_FILES["Denah_Tanah"]["size"] > 2000000)
			{
				echo "<script type='text/javascript'>alert('File Peta Lokasi Radius Tower terlalu besar(Diatas 2MB)!');</script>";
				echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
				exit;
			}
			else
			{
				$file21="PL" . $newfilename . $_FILES["Peta_Lokasi_Radius_Tower"]["name"];
				$file2 = preg_replace("/ /", "-", $file21);
			}
		}
	}

	$target_file31 = $target_dir . "SBL" . $newfilename . basename($_FILES["Sketsa_Batas_Lahan"]["name"]);
	$target_file3 = preg_replace("/ /", "-", $target_file31);
	$SBLType = pathinfo($target_file3,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["Sketsa_Batas_Lahan"]["tmp_name"], $target_file3);
	if(!empty($_FILES['Sketsa_Batas_Lahan']['name']))
	{
	if($SBLType != "jpg" AND $SBLType != "png" AND $SBLType != "jpeg")
		{
			echo "<script type='text/javascript'>alert('Ekstensi Sketsa Batas Lahan tidak sesuai(Bukan .jpg/.jpeg/.png)');</script>";
		    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
		    exit;
		}
		else
		{
			if ($_FILES["Sketsa_Batas_Lahan"]["size"] > 2000000)
			{
				echo "<script type='text/javascript'>alert('File Sketsa Batas Lahan terlalu besar(Diatas 2MB)!');</script>";
				echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
				exit;
			}
			else
			{
				$file31="SBL" . $newfilename . $_FILES["Sketsa_Batas_Lahan"]["name"];
				$file3 = preg_replace("/ /", "-", $file31);
			}
		}
	}

	$target_file61 = $target_dir . "Cs" . $newfilename . basename($_FILES["Comcase_File"]["name"]);
	$target_file6 = preg_replace("/ /", "-", $target_file61);
	$CFType = pathinfo($target_file6,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["Comcase_File"]["tmp_name"], $target_file6);
	if(!empty($_FILES['Comcase_File']['name']))
	{
		if($CFType != "zip" AND $CFType != "rar" AND $CFType != "doc" AND $CFType != "docx")
		{
			echo "<script type='text/javascript'>alert('Ekstensi Comcase File tidak sesuai(Bukan .zip/.rar/.doc/.docx)');</script>";
		    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
		    exit;
		}
		else
		{
			if ($_FILES["Comcase_File"]["size"] > 10000000)
			{
				echo "<script type='text/javascript'>alert('File Comcase File terlalu besar(Diatas 10MB)!');</script>";
				echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
				exit;
			}
			else
			{
				$file61="Cs" . $newfilename . $_FILES["Comcase_File"]["name"];
				$file6 = preg_replace("/ /", "-", $file61);
			}
		}
	}

	$target_file41 = $target_dir . "PBB" . $newfilename . basename($_FILES["Surat_PBB"]["name"]);
	$target_file4 = preg_replace("/ /", "-", $target_file41);
	$SPBBType = pathinfo($target_file4,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["Surat_PBB"]["tmp_name"], $target_file4);
	
	if(!empty($_FILES['Surat_PBB']['name']))
	{
		if($SPBBType != "jpg" AND $SPBBType != "png" AND $SPBBType != "jpeg" AND $SPBBType != "pdf")
		{
			echo "<script type='text/javascript'>alert('Ekstensi Surat PBB tidak sesuai(Bukan .jpg/.jpeg/.png)');</script>";
		    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
		    exit;
		}
		else
		{
			if ($_FILES["Surat_PBB"]["size"] > 2000000)
			{
				echo "<script type='text/javascript'>alert('File Surat PBB terlalu besar(Diatas 2MB)!');</script>";
    			echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
    			exit;
			}
			else
			{
				$file41="PBB" . $newfilename . $_FILES["Surat_PBB"]["name"];
				$file4 = preg_replace("/ /", "-", $file41);
			}
		}
	}

	$target_file51 = $target_dir . "RPM" . $newfilename . basename($_FILES["Surat_SKRD"]["name"]);
	$target_file5 = preg_replace("/ /", "-", $target_file51);
	$SRPMType = pathinfo($target_file5,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["Surat_SKRD"]["tmp_name"], $target_file5);
	if(!empty($_FILES['Surat_SKRD']['name']))
	{
		if($SRPMType != "jpg" AND $SRPMType != "png" AND $SRPMType != "jpeg" AND $SRPMType != "pdf")
		{
			echo "<script type='text/javascript'>alert('Ekstensi Surat RPM/SKRD tidak sesuai(Bukan .jpg/.jpeg/.png)');</script>";
		    echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
		    exit;
		}
		else
		{
			if ($_FILES["Surat_SKRD"]["size"] > 2000000)
			{
				echo "<script type='text/javascript'>alert('File Surat RPM/SKRD terlalu besar(Diatas 2MB)!');</script>";
    			echo "<script language='javascript' type='text/javascript'> location.href='javascript:history.go(-1)' </script>";
    			exit;
			}
			else
			{
				$file51="RPM" . $newfilename . $_FILES["Surat_SKRD"]["name"];
				$file5 = preg_replace("/ /", "-", $file51);
			}
		}
	}

//sites	
	$Site_ID=$_POST['Site_ID']; 
	$Nama_Site=$_POST['Nama_Site']; 
	$Status_Lahan=$_POST['Status_Lahan']; 
	$Satus_Tower=$_POST['Satus_Tower']; 
	$Pemilik_Tower=$_POST['Pemilik_Tower']; 
	$Alamat_Site=$_POST['Alamat_Site']; 
	$Kota_Kabupaten=$_POST['Kota_Kabupaten']; 
	$Kontraktor_Utama=$_POST['Kontraktor_Utama']; 
	$Penyedia_Menara=$_POST['Penyedia_Menara']; 
	$Branch=$_POST['Branch']; 
	$Longitude=$_POST['Longitude']; 
	$Latitude=$_POST['Latitude']; 
	$On_Air_Date=$_POST['On_Air_Date']; 
	$Colocated_Site=$_POST['Colocated_Site']; 
	$BTS_Type=$_POST['BTS_Type']; 
	$Site_Type=$_POST['Site_Type']; 
	$Tower_Height=$_POST['Tower_Height']; 
	$Tower_Type=$_POST['Tower_Type']; 
	$Shelter_Type=$_POST['Shelter_Type']; 
	$Shelter_Size=$_POST['Shelter_Size']; 
	$Luas_Lahan=$_POST['Luas_Lahan']; 
	$Luas_Jalan_Akses=$_POST['Luas_Jalan_Akses']; 
	$Tanggal_Mulai_Sewa=$_POST['Tanggal_Mulai_Sewa']; 
	$Tanggal_Akhir_Sewa=$_POST['Tanggal_Akhir_Sewa']; 
	$Harga_Per_Tahun=$_POST['Harga_Per_Tahun'];
	$Penawaran_Pemilik=$_POST['Penawaran_Pemilik']; 
	$Remark=$_POST['Remark']; 

//perpanjangan
	$Pagu=$_POST['Pagu']; 
	$PIC=$_POST['PIC']; 
	$SPPH=$_POST['SPPH']; 
	$Tanggal_SPPH=$_POST['Tanggal_SPPH'];
	$Vendor_List=$_POST['Vendor_List']; 
	$Invoice=$_POST['Invoice'];
	$No_Invoice=$_POST['No_Invoice'];
	$Tanggal_Masuk_PKS=$_POST['Tanggal_Masuk_PKS'];
	$Tanggal_Keluar_PKS=$_POST['Tanggal_Keluar_PKS'];

//bak
	$Nomor_BAK=$_POST['Nomor_BAK']; 
	$Tanggal_BAK=$_POST['Tanggal_BAK']; 
	$Harga_BAK=$_POST['Harga_BAK']; 
	$Status=$_POST['Status']; 

//ho
	$Nomor_HO=$_POST['Nomor_HO'];
	$Daftar_Ulang_HO=$_POST['Daftar_Ulang_HO']; 
	$Tanggal_Start_HO=$_POST['Tanggal_Start_HO']; 
	$Tanggal_Finish_HO=$_POST['Tanggal_Finish_HO']; 
	$Status_HO=$_POST['Status_HO']; 

//identitas pemilik lahan
	$KTP_Pemilik=$_POST['KTP_Pemilik']; 
	$Kartu_Keluarga_Pemilik=$_POST['Kartu_Keluarga_Pemilik']; 
	$Pemilik_Lahan=$_POST['Pemilik_Lahan']; 
	$Orang_Yang_Di_Kuasakan=$_POST['Orang_Yang_Di_Kuasakan']; 
	$Alamat_Pemilik=$_POST['Alamat_Pemilik']; 
	$Telepon=$_POST['Telepon']; 
	$HP=$_POST['HP']; 
	$E_mail=$_POST['E_mail']; 
	$Surat_Persetujuan_Keluarga=$_POST['Surat_Persetujuan_Keluarga']; 

//surat_pernyataan
	$SP=$_POST['SP']; 
	$SP_Ahli_Waris=$_POST['SP_Ahli_Waris']; 
	$SP_Janda=$_POST['SP_Janda']; 
	$SP_Kepemilikan_Tanah=$_POST['SP_Kepemilikan_Tanah']; 
	$SP_Pelepasan_Hak=$_POST['SP_Pelepasan_Hak']; 
	$SP_Pembayaran=$_POST['SP_Pembayaran']; 
	$SP_Penguasaan_Fisik_Tanah=$_POST['SP_Penguasaan_Fisik_Tanah']; 
	$SP_Peralihan_Atas_Pekarangan=$_POST['SP_Peralihan_Atas_Pekarangan']; 
	$SP_Persetujuan_Kepala_Desa=$_POST['SP_Persetujuan_Kepala_Desa']; 
	$SP_Tanah_Pemohon=$_POST['SP_Tanah_Pemohon']; 
	$SP_Tidak_Keberatan_Jalan_Pribadi=$_POST['SP_Tidak_Keberatan_Jalan_Pribadi']; 
	$SP_Tidak_Keberatan_Jalan_Umum=$_POST['SP_Tidak_Keberatan_Jalan_Umum']; 

//akta
	$Akta_Hibah=$_POST['Akta_Hibah']; 
	$Akta_Jual_Beli_Sewa=$_POST['Akta_Jual_Beli_Sewa']; 
	$Akta_Hak_Bersama=$_POST['Akta_Hak_Bersama']; 
	$Akta_Warisan=$_POST['Akta_Warisan']; 
	$Akta_Pemisahan=$_POST['Akta_Pemisahan']; 
	$Akta_Nikah=$_POST['Akta_Nikah']; 

//ijin_lain
	$Ijin_Perubahan_Pengguna_Tanah=$_POST['Ijin_Perubahan_Pengguna_Tanah']; 
	$Ijin_Warga=$_POST['Ijin_Warga']; 
	$Ijin_UKL_UPL=$_POST['Ijin_UKL_UPL']; 
	$Ijin_Sertifikat_Tanah=$_POST['Ijin_Sertifikat_Tanah']; 

//surat_keterangan
	$SK_Akses_Lahan_Jalan=$_POST['SK_Akses_Lahan_Jalan']; 
	$SK_Asal_Tanah=$_POST['SK_Asal_Tanah']; 
	$SK_Beda_Luas_Tanah=$_POST['SK_Beda_Luas_Tanah']; 
	$SK_Beda_Nama=$_POST['SK_Beda_Nama']; 
	$SK_Fatwa_Waris=$_POST['SK_Fatwa_Waris']; 
	$SK_Kematian=$_POST['SK_Kematian']; 
	$SK_Penduduk=$_POST['SK_Penduduk']; 
	$SK_Permohonan_IMB_dll=$_POST['SK_Permohonan_IMB_dll']; 
	$SK_Persetujuan_Sewa_Lahan=$_POST['SK_Persetujuan_Sewa_Lahan']; 
	$SK_Riwayat_Tanah=$_POST['SK_Riwayat_Tanah']; 
	$SK_Suami_Istri=$_POST['SK_Suami_Istri']; 
	$SK_Tanah=$_POST['SK_Tanah']; 
	$SK_Tidak_Sengketa=$_POST['SK_Tidak_Sengketa']; 
	$SK_Tidak_Keberatan_Didirikan=$_POST['SK_Tidak_Keberatan_Didirikan']; 

//surat_lain
	$Surat_Kuasa=$_POST['Surat_Kuasa']; 
	$Surat_Kuasa_Pengambilan_Jaminan_Asli=$_POST['Surat_Kuasa_Pengambilan_Jaminan_Asli']; 
	$Surat_Jaminan_Hukum=$_POST['Surat_Jaminan_Hukum']; 
	$Surat_Ijin_PKS=$_POST['Surat_Ijin_PKS']; 
	$Surat_Perjanjian_Sewa_Tanah=$_POST['Surat_Perjanjian_Sewa_Tanah']; 

//pbb
	$Nomor_Objek_Pajak=$_POST['Nomor_Objek_Pajak'];
	$Nilai_PBB=$_POST['Nilai_PBB'];
	$Denda_PBB=$_POST['Denda_PBB'];
	$Fee_PBB=$_POST['Fee_PBB'];
	$Tanggal_Jatuh_Tempo_PBB=$_POST['Tanggal_Jatuh_Tempo_PBB'];
	$Status_PBB=$_POST['Status_PBB'];
	$NJOP_Tanah=$_POST['NJOP_Tanah'];
	$NJOP_Bangunan=$_POST['NJOP_Bangunan'];
	$Koef_PBB=$_POST['Koef_PBB'];
	$Mitra_PBB=$_POST['Mitra_PBB'];
	 
//rpm
	$No_SKRD=$_POST['No_SKRD']; 
	$Harga_SKRD=$_POST['Harga_SKRD']; 
	$Tanggal_Jatuh_Tempo_RPM=$_POST['Tanggal_Jatuh_Tempo_RPM']; 
	$Koef_SKRD=$_POST['Koef_SKRD']; 
	$Status_SKRD=$_POST['Status_SKRD']; 
	 
//imb
	$Nomor_IMB=$_POST['Nomor_IMB'];
	$Mitra_Pengurus_IMB=$_POST['Mitra_Pengurus_IMB'];
	$Daftar_Ulang_IMB=$_POST['Daftar_Ulang_IMB'];
	$Tanggal_Awal_IMB=$_POST['Tanggal_Awal_IMB'];
	$Tanggal_Akhir_IMB=$_POST['Tanggal_Akhir_IMB'];
	$Status_Kepengurusan_IMB=$_POST['Status_Kepengurusan_IMB'];
	$Status_IMB=$_POST['Status_IMB'];

//imtu
	$Nomor_Ijin_imtu=$_POST['Nomor_Ijin_imtu']; 
	$Tanggal_Awal_Ijin_imtu=$_POST['Tanggal_Awal_Ijin_imtu']; 
	$Tanggal_Akhir_Ijin_imtu=$_POST['Tanggal_Akhir_Ijin_imtu']; 

//dephub/kominfo
	$Nomor_Ijin=$_POST['Nomor_Ijin']; 
	$Tanggal_Mulai_Ijin=$_POST['Tanggal_Mulai_Ijin']; 
	$Tanggal_Akhir_Ijin=$_POST['Tanggal_Akhir_Ijin']; 

//ippt
	$Nomor_Ijin_Pendirian=$_POST['Nomor_Ijin_Pendirian']; 
	$Tanggal_Awal_Ijin_Pendirian=$_POST['Tanggal_Awal_Ijin_Pendirian']; 
	$Tanggal_Akhir_Ijin_Pendirian=$_POST['Tanggal_Akhir_Ijin_Pendirian']; 

//ipb
	$Ijin_IPB_Nomor=$_POST['Nomor_IPB']; 
	$Ijin_IPB_Start=$_POST['Tanggal_Awal_IPB']; 
	$Ijin_IPB_Finish=$_POST['Tanggal_Akhir_IPB']; 

//ijin_prinsip
	$Nomor_Ijin_Prinsip=$_POST['Nomor_Ijin_Prinsip']; 
	$Tanggal_Awal_Ijin_Prinsip=$_POST['Tanggal_Awal_Ijin_Prinsip']; 
	$Tanggal_Akhir_Ijin_Prinsip=$_POST['Tanggal_Akhir_Ijin_Prinsip']; 

//ijin_genset
	$Nomor_Genset=$_POST['Nomor_Genset']; 
	$Status_Genset=$_POST['Status_Genset']; 
	$Tanggal_Start=$_POST['Tanggal_Start']; 
	$Tanggal_Finish=$_POST['Tanggal_Finish']; 

//comsace
	$Comcase_Tanggal=$_POST['Comcase_Tanggal']; 
	$Comcase_Keterangan=$_POST['Comcase_Keterangan']; 
	$Comcase_Status=$_POST['Comcase_Status']; 
	$Comcase_Solusi=$_POST['Comcase_Solusi']; 
	$Comcase_Mitra=$_POST['Comcase_Mitra']; 
	$Comcase_No_FPP=$_POST['Comcase_No_FPP']; 
	$Comcase_Biaya=$_POST['Comcase_Biaya']; 
	$Comcase_Keldok=$_POST['Comcase_Keldok']; 
	$Comcase_Status_Bayar=$_POST['Comcase_Status_Bayar']; 

	if(empty($_FILES["Denah_Tanah"]["name"])&&empty($_FILES["Peta_Lokasi_Radius_Tower"]["name"])&&empty($_FILES["Sketsa_Batas_Lahan"]["name"])&&empty($_FILES["Comcase_File"]["name"])&&empty($_FILES["Surat_PBB"]["name"])&&empty($_FILES["Surat_SKRD"]["name"]))
	{
		$result1 = mysql_query("
			UPDATE ho 
			SET ho_nomor='$Nomor_HO',
				ho_daftar_ulang='$Daftar_Ulang_HO',
				ho_start='$Tanggal_Start_HO' ,
				ho_finish='$Tanggal_Finish_HO',
				ho_status='$Status_HO'
			WHERE sites_id='$sites_id' 
			",$conn);
		$result2 = mysql_query("
			UPDATE identitas_pemilik 
			SET
				identitas_pemilik_ktp='$KTP_Pemilik' ,
				identitas_pemilik_kk='$Kartu_Keluarga_Pemilik' ,
				identitas_pemilik_lahan='$Pemilik_Lahan' ,
				identitas_pemilik_kuasa='$Orang_Yang_Di_Kuasakan' ,
				identitas_pemilik_alamat='$Alamat_Pemilik' ,
				identitas_pemilik_telepon='$Telepon' ,
				identitas_pemilik_hp='$HP' ,
				identitas_pemilik_email='$E_mail' ,
				identitas_pemilik_sp_keluarga='$Surat_Persetujuan_Keluarga' ,
				sp='$SP' ,
				sp_ahli_waris='$SP_Ahli_Waris' ,
				sp_janda='$SP_Janda' ,
				sp_kepemilikan_tanah='$SP_Kepemilikan_Tanah' ,
				sp_pelepasan_hak='$SP_Pelepasan_Hak' ,
				sp_pembayaran='$SP_Pembayaran' ,
				sp_penguasaan_fisik_tanah='$SP_Penguasaan_Fisik_Tanah' ,
				sp_peralihan_atas_pekarangan='$SP_Peralihan_Atas_Pekarangan' ,
				sp_persetujuan_kepala_desa='$SP_Persetujuan_Kepala_Desa' ,
				sp_tanah_pemohon='$SP_Tanah_Pemohon' ,
				sp_tidak_keberatan_jalan_pribadi='$SP_Tidak_Keberatan_Jalan_Pribadi' ,
				sp_tidak_keberatan_jalan_umum='$SP_Tidak_Keberatan_Jalan_Umum' ,
				akta_hibah='$Akta_Hibah' ,
				akta_jualbeli_sewa='$Akta_Jual_Beli_Sewa' ,
				akta_hak_bersama='$Akta_Hak_Bersama' ,
				akta_warisan='$Akta_Warisan' ,
				akta_pemisahan='$Akta_Pemisahan' ,
				akta_nikah='$Akta_Nikah' ,
				ijin_ippt='$Ijin_Perubahan_Pengguna_Tanah' ,
				ijin_warga='$Ijin_Warga' ,
				ijin_ukl_upl='$Ijin_UKL_UPL' ,
				ijin_sertifikat_tanah='$Ijin_Sertifikat_Tanah' ,
				sket_beda_nama='$SK_Akses_Lahan_Jalan' ,
				sket_akses_lahan_jalan='$SK_Asal_Tanah' ,
				sket_asal_tanah='$SK_Beda_Luas_Tanah' ,
				sket_beda_luas_tanah='$SK_Beda_Nama' ,
				sket_fatwa_waris='$SK_Fatwa_Waris' ,
				sket_kematian='$SK_Kematian' ,
				sket_penduduk='$SK_Penduduk' ,
				sket_permohonan_imb_ho_ip='$SK_Permohonan_IMB_dll' ,
				sket_persetujuan_sewa_lahan='$SK_Persetujuan_Sewa_Lahan' ,
				sket_riwayat_tanah='$SK_Riwayat_Tanah' ,
				sket_suami_istri='$SK_Suami_Istri' ,
				sket_tanah='$SK_Tanah' ,
				sket_tidak_sengketa='$SK_Tidak_Sengketa' ,
				sket_keberatan='$SK_Tidak_Keberatan_Didirikan' ,
				sl_sk='$Surat_Kuasa' ,
				sl_sk_pengambilan_jaminan_asli='$Surat_Kuasa_Pengambilan_Jaminan_Asli' ,
				sl_surat_jaminan_hukum='$Surat_Jaminan_Hukum' ,
				sl_pks='$Surat_Ijin_PKS' ,
				sl_surat_perjanjian_sewa_tanah='$Surat_Perjanjian_Sewa_Tanah'
			WHERE sites_id='$sites_id' ",$conn);
		$result3 = mysql_query("
			UPDATE ijin_dephub 
			SET
				ijin_dephub_nomor='$Nomor_Ijin' ,
				ijin_dephub_start='$Tanggal_Mulai_Ijin' ,
				ijin_dephub_finish='$Tanggal_Akhir_Ijin'
			WHERE sites_id='$sites_id' ",$conn);
		$result4 = mysql_query("
			UPDATE ijin_genset 
			SET
				ijin_genset_nomor='$Nomor_Genset' ,
				ijin_genset_status='$Status_Genset' ,
				ijin_genset_start='$Tanggal_Start' ,
				ijin_genset_finish='$Tanggal_Finish'
			WHERE sites_id='$sites_id' ",$conn);
		$result5 = mysql_query("
			UPDATE ijin_prinsip 
			SET
				ijin_prinsip_nomor='$Nomor_Ijin_Prinsip' ,
				ijin_prinsip_start='$Tanggal_Awal_Ijin_Prinsip' ,
				ijin_prinsip_finish='$Tanggal_Akhir_Ijin_Prinsip'
			WHERE sites_id='$sites_id' ",$conn);
		$result6 = mysql_query("
			UPDATE ijin_ptt 
			SET
				ijin_ptt_nomor='$Nomor_Ijin_Pendirian' ,
				ijin_ptt_start='$Tanggal_Awal_Ijin_Pendirian' ,
				ijin_ptt_finish='$Tanggal_Akhir_Ijin_Pendirian'
			WHERE sites_id='$sites_id' ",$conn);
		$result7 = mysql_query("
			UPDATE imb 
			SET
				imb_nomor='$Nomor_IMB' ,
				imb_mitra_pengurus='$Mitra_Pengurus_IMB' ,
				imb_daftar_ulang='$Daftar_Ulang_IMB' ,
				imb_start='$Tanggal_Awal_IMB' ,
				imb_finish='$Tanggal_Akhir_IMB' ,
				imb_status_kepengurusan='$Status_Kepengurusan_IMB' ,
				imb_status='$Status_IMB'
			WHERE sites_id='$sites_id' ",$conn);
		$result8 = mysql_query("
			UPDATE imtu 
			SET
				ijin_imtu_nomor='$Nomor_Ijin_imtu', 
				ijin_imtu_start='$Tanggal_Awal_Ijin_imtu', 
				ijin_imtu_finish='$Tanggal_Akhir_Ijin_imtu'
			WHERE sites_id='$sites_id' ",$conn);
		$result9 = mysql_query("
			UPDATE ipb 
			SET
				ijin_ipb_nomor='$Ijin_IPB_Nomor' ,
				ijin_ipb_start='$Ijin_IPB_Start' ,
				ijin_ipb_finish='$Ijin_IPB_Finish'
			WHERE sites_id='$sites_id' ",$conn);
		$result10 = mysql_query("
			UPDATE pbb 
			SET 
				nop='$Nomor_Objek_Pajak' ,
				nilai_pbb_site='$Nilai_PBB' ,
				pbb_denda='$Denda_PBB' ,
				pbb_fee='$Fee_PBB' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo_PBB' ,
				status='$Status_PBB' ,
				njop_tanah='$NJOP_Tanah' ,
				njop_bangunan='$NJOP_Bangunan' ,
				koef_pbb='$Koef_PBB' ,
				pbb_mitra='$Mitra_PBB'
			WHERE sites_id='$sites_id' ",$conn);
		$result11 = mysql_query("
			UPDATE site 
			SET
				sites_id='$Site_ID' ,
				sites_nama='$Nama_Site' ,
				sites_status_lahan='$Status_Lahan' ,
				sites_status_tower='$Satus_Tower' ,
				sites_pemilik_tower='$Pemilik_Tower' ,
				sites_alamat='$Alamat_Site' ,
				sites_kota_kabupaten='$Kota_Kabupaten' ,
				sites_kontraktor_utama='$Kontraktor_Utama' ,
				sites_penyedia_menara='$Penyedia_Menara' ,
				sites_branch='$Branch' ,
				sites_long='$Longitude' ,
				sites_lat='$Latitude' ,
				sites_on_air_date='$On_Air_Date' ,
				sites_colocated_site='$Colocated_Site' ,
				sites_type_bts='$BTS_Type' ,
				sites_type_site='$Site_Type' ,
				sites_tower_height='$Tower_Height' ,
				sites_tower_type='$Tower_Type' ,
				sites_shelter_type='$Shelter_Type' ,
				sites_shelter_size='$Shelter_Size' ,
				sites_luas_lahan='$Luas_Lahan' ,
				sites_luas_jalan_akses='$Luas_Jalan_Akses' ,
				sites_tanggal_start='$Tanggal_Mulai_Sewa' ,
				sites_tanggal_finish='$Tanggal_Akhir_Sewa' ,
				sites_harga_per_tahun='$Harga_Per_Tahun' ,
				sites_penawaran_pemilik_lahan='$Penawaran_Pemilik' ,
				sites_remark='$Remark' ,
				perpanjangan_pagu='$Pagu' ,
				perpanjangan_pic='$PIC' ,
				perpanjangan_spph='$SPPH' ,
				perpanjangan_spph_tanggal='$Tanggal_SPPH' ,
				perpanjangan_vendor_list='$Vendor_List' ,
				perpanjangan_invoice='$Invoice' ,
				perpanjangan_invoice_nomor='$No_Invoice' ,
				tanggal_masuk_pks='$Tanggal_Masuk_PKS',
				tanggal_keluar_pks='$Tanggal_Keluar_PKS',
				bak_nomor='$Nomor_BAK' ,
				bak_tanggal='$Tanggal_BAK' ,
				bak_harga='$Harga_BAK' ,
				bak_status='$Status' ,
				comcase_tanggal='$Comcase_Tanggal' ,
				comcase_keterangan='$Comcase_Keterangan ' ,
				comcase_status='$Comcase_Status' ,
				comcase_solusi='$Comcase_Solusi' ,
				comcase_mitra='$Comcase_Mitra' ,
				comcase_no_fpp='$Comcase_No_FPP' ,
				comcase_biaya='$Comcase_Biaya' ,
				comcase_keldok='$Comcase_Keldok' ,
				comcase_status_bayar='$Comcase_Status_Bayar'
			WHERE sites_id='$sites_id' ",$conn);
		$result12 = mysql_query("
			UPDATE skrd_rpm 
			SET
				no_skrd='$No_SKRD' ,
				sites_id='$Site_ID' ,
				harga_skrd='$Harga_SKRD' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo_RPM' ,
				koef_skrd='$Koef_SKRD' ,
				status='$Status_SKRD'
			WHERE sites_id='$sites_id' ",$conn);
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
			$file6=$row11['comcase_file'];
		}
		else
		{
			unlink($filehapus6);
		}
		if(empty($_FILES["Surat_PBB"]["name"]))
		{
			$file4=$row10['surat_pbb'];
		}
		else
		{
			unlink($filehapus4);
		}
		if(empty($_FILES["Surat_SKRD"]["name"]))
		{
			$file5=$row12['surat_skrd'];
		}
		else
		{
			unlink($filehapus5);
		}

		$result1 = mysql_query("
			UPDATE ho 
			SET 
				ho_nomor='$Nomor_HO' ,
				ho_daftar_ulang='$Daftar_Ulang_HO' ,
				ho_start='$Tanggal_Start_HO' ,
				ho_finish='$Tanggal_Finish_HO' ,
				ho_status='$Status_HO'
			WHERE sites_id='$sites_id' ",$conn);
		$result2 = mysql_query("
			UPDATE identitas_pemilik 
			SET
				identitas_pemilik_ktp='$KTP_Pemilik' ,
				identitas_pemilik_kk='$Kartu_Keluarga_Pemilik' ,
				identitas_pemilik_lahan='$Pemilik_Lahan' ,
				identitas_pemilik_kuasa='$Orang_Yang_Di_Kuasakan' ,
				identitas_pemilik_alamat='$Alamat_Pemilik' ,
				identitas_pemilik_telepon='$Telepon' ,
				identitas_pemilik_hp='$HP' ,
				identitas_pemilik_email='$E_mail' ,
				identitas_pemilik_sp_keluarga='$Surat_Persetujuan_Keluarga' ,
				sp='$SP' ,
				sp_ahli_waris='$SP_Ahli_Waris' ,
				sp_janda='$SP_Janda' ,
				sp_kepemilikan_tanah='$SP_Kepemilikan_Tanah' ,
				sp_pelepasan_hak='$SP_Pelepasan_Hak' ,
				sp_pembayaran='$SP_Pembayaran' ,
				sp_penguasaan_fisik_tanah='$SP_Penguasaan_Fisik_Tanah' ,
				sp_peralihan_atas_pekarangan='$SP_Peralihan_Atas_Pekarangan' ,
				sp_persetujuan_kepala_desa='$SP_Persetujuan_Kepala_Desa' ,
				sp_tanah_pemohon='$SP_Tanah_Pemohon' ,
				sp_tidak_keberatan_jalan_pribadi='$SP_Tidak_Keberatan_Jalan_Pribadi' ,
				sp_tidak_keberatan_jalan_umum='$SP_Tidak_Keberatan_Jalan_Umum' ,
				akta_hibah='$Akta_Hibah' ,
				akta_jualbeli_sewa='$Akta_Jual_Beli_Sewa' ,
				akta_hak_bersama='$Akta_Hak_Bersama' ,
				akta_warisan='$Akta_Warisan' ,
				akta_pemisahan='$Akta_Pemisahan' ,
				akta_nikah='$Akta_Nikah' ,
				ijin_ippt='$Ijin_Perubahan_Pengguna_Tanah' ,
				ijin_warga='$Ijin_Warga' ,
				ijin_ukl_upl='$Ijin_UKL_UPL' ,
				ijin_sertifikat_tanah='$Ijin_Sertifikat_Tanah' ,
				sket_beda_nama='$SK_Akses_Lahan_Jalan' ,
				sket_akses_lahan_jalan='$SK_Asal_Tanah' ,
				sket_asal_tanah='$SK_Beda_Luas_Tanah' ,
				sket_beda_luas_tanah='$SK_Beda_Nama' ,
				sket_fatwa_waris='$SK_Fatwa_Waris' ,
				sket_kematian='$SK_Kematian' ,
				sket_penduduk='$SK_Penduduk' ,
				sket_permohonan_imb_ho_ip='$SK_Permohonan_IMB_dll' ,
				sket_persetujuan_sewa_lahan='$SK_Persetujuan_Sewa_Lahan' ,
				sket_riwayat_tanah='$SK_Riwayat_Tanah' ,
				sket_suami_istri='$SK_Suami_Istri' ,
				sket_tanah='$SK_Tanah' ,
				sket_tidak_sengketa='$SK_Tidak_Sengketa' ,
				sket_keberatan='$SK_Tidak_Keberatan_Didirikan' ,
				sl_sk='$Surat_Kuasa' ,
				sl_sk_pengambilan_jaminan_asli='$Surat_Kuasa_Pengambilan_Jaminan_Asli' ,
				sl_surat_jaminan_hukum='$Surat_Jaminan_Hukum' ,
				sl_pks='$Surat_Ijin_PKS' ,
				sl_surat_perjanjian_sewa_tanah='$Surat_Perjanjian_Sewa_Tanah'
			WHERE sites_id='$sites_id' ",$conn);
		$result3 = mysql_query("
			UPDATE ijin_dephub 
			SET
				ijin_dephub_nomor='$Nomor_Ijin' ,
				ijin_dephub_start='$Tanggal_Mulai_Ijin' ,
				ijin_dephub_finish='$Tanggal_Akhir_Ijin'
			WHERE sites_id='$sites_id' ",$conn);
		$result4 = mysql_query("
			UPDATE ijin_genset 
			SET
				ijin_genset_nomor='$Nomor_Genset' ,
				ijin_genset_status='$Status_Genset' ,
				ijin_genset_start='$Tanggal_Start' ,
				ijin_genset_finish='$Tanggal_Finish'
			WHERE sites_id='$sites_id' ",$conn);
		$result5 = mysql_query("
			UPDATE ijin_prinsip 
			SET
				ijin_prinsip_nomor='$Nomor_Ijin_Prinsip' ,
				ijin_prinsip_start='$Tanggal_Awal_Ijin_Prinsip' ,
				ijin_prinsip_finish='$Tanggal_Akhir_Ijin_Prinsip'
			WHERE sites_id='$sites_id' ",$conn);
		$result6 = mysql_query("
			UPDATE ijin_ptt 
			SET
				ijin_ptt_nomor='$Nomor_Ijin_Pendirian' ,
				ijin_ptt_start='$Tanggal_Awal_Ijin_Pendirian' ,
				ijin_ptt_finish='$Tanggal_Akhir_Ijin_Pendirian'
			WHERE sites_id='$sites_id' ",$conn);
		$result7 = mysql_query("
			UPDATE imb 
			SET
				imb_nomor='$Nomor_IMB' ,
				imb_mitra_pengurus='$Mitra_Pengurus_IMB' ,
				imb_daftar_ulang='$Daftar_Ulang_IMB' ,
				imb_start='$Tanggal_Awal_IMB' ,
				imb_finish='$Tanggal_Akhir_IMB' ,
				imb_status_kepengurusan='$Status_Kepengurusan_IMB' ,
				imb_status='$Status_IMB'
			WHERE sites_id='$sites_id' ",$conn);
		$result8 = mysql_query("
			UPDATE imtu 
			SET
				ijin_imtu_nomor,='$Nomor_Ijin_imtu', 
				ijin_imtu_start,='$Tanggal_Awal_Ijin_imtu', 
				ijin_imtu_finish='$Tanggal_Akhir_Ijin_imtu'
			WHERE sites_id='$sites_id' ",$conn);
		$result9 = mysql_query("
			UPDATE ipb 
			SET
				ijin_ipb_nomor='$Ijin_IPB_Nomor' ,
				ijin_ipb_start='$Ijin_IPB_Start' ,
				ijin_ipb_finish='$Ijin_IPB_Finish'
			WHERE sites_id='$sites_id' ",$conn);
		$result10 = mysql_query("
			UPDATE pbb 
			SET 
				nop='$Nomor_Objek_Pajak' ,
				nilai_pbb_site='$Nilai_PBB' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo_PBB' ,
				status='$Status_PBB' ,
				njop_tanah='$NJOP_Tanah' ,
				njop_bangunan='$NJOP_Bangunan' ,
				surat_pbb='$file4' ,
				koef_pbb='$Koef_PBB'
			WHERE sites_id='$sites_id' ",$conn);
		$result11 = mysql_query("
			UPDATE site 
			SET
				sites_id='$Site_ID' ,
				sites_nama='$Nama_Site' ,
				sites_status_lahan='$Status_Lahan' ,
				sites_status_tower='$Satus_Tower' ,
				sites_pemilik_tower='$Pemilik_Tower' ,
				sites_alamat='$Alamat_Site' ,
				sites_kota_kabupaten='$Kota_Kabupaten' ,
				sites_kontraktor_utama='$Kontraktor_Utama' ,
				sites_penyedia_menara='$Penyedia_Menara' ,
				sites_branch='$Branch' ,
				sites_long='$Longitude' ,
				sites_lat='$Latitude' ,
				sites_on_air_date='$On_Air_Date' ,
				sites_colocated_site='$Colocated_Site' ,
				sites_type_bts='$BTS_Type' ,
				sites_type_site='$Site_Type' ,
				sites_tower_height='$Tower_Height' ,
				sites_tower_type='$Tower_Type' ,
				sites_shelter_type='$Shelter_Type' ,
				sites_shelter_size='$Shelter_Size' ,
				sites_luas_lahan='$Luas_Lahan' ,
				sites_luas_jalan_akses='$Luas_Jalan_Akses' ,
				sites_denah_tanah='$file1' ,
				sites_peta_lrt='$file2' ,
				sites_sketsa_bt='$file3' ,
				sites_tanggal_start='$Tanggal_Mulai_Sewa' ,
				sites_tanggal_finish='$Tanggal_Akhir_Sewa' ,
				sites_harga_per_tahun='$Harga_Per_Tahun' ,
				sites_penawaran_pemilik_lahan='$Penawaran_Pemilik' ,
				sites_remark='$Remark' ,
				perpanjangan_pagu='$Pagu' ,
				perpanjangan_pic='$PIC' ,
				perpanjangan_spph='$SPPH' ,
				perpanjangan_spph_tanggal='$Tanggal_SPPH' ,
				perpanjangan_vendor_list='$Vendor_List' ,
				perpanjangan_invoice='$Invoice' ,
				perpanjangan_invoice_nomor='$No_Invoice' ,
				tanggal_masuk_pks='$Tanggal_Masuk_PKS',
				tanggal_keluar_pks='$Tanggal_Keluar_PKS',
				bak_nomor='$Nomor_BAK' ,
				bak_tanggal='$Tanggal_BAK' ,
				bak_harga='$Harga_BAK' ,
				bak_status='$Status' ,
				comcase_tanggal='$Comcase_Tanggal' ,
				comcase_keterangan='$Comcase_Keterangan ' ,
				comcase_status='$Comcase_Status' ,
				comcase_solusi='$Comcase_Solusi' ,
				comcase_file='$file6' ,
				comcase_mitra='$Comcase_Mitra' 
			WHERE sites_id='$sites_id' ",$conn);
		$result12 = mysql_query("
			UPDATE skrd_rpm 
			SET
				no_skrd='$No_SKRD' ,
				sites_id='$Site_ID' ,
				harga_skrd='$Harga_SKRD' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo_RPM' ,
				koef_skrd='$Koef_SKRD' ,
				status='$Status_SKRD' ,
				surat_skrd='$file5'
			WHERE sites_id='$sites_id' ",$conn);

	}
	header("Location:List_Sites.php");
?>

<?php mysql_close($conn); ?>