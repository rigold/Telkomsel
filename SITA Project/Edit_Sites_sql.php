<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "sita";
	$conn = mysqli_connect($servername, $username, $password, $database);

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

	$result1 = mysqli_query($conn, $query1);
	$result2 = mysqli_query($conn, $query2);
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

	$temp = explode(".", $_FILES[""][""]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$target_dir = "File/";

	$target_file1 = $target_dir . "DT" . $newfilename . basename($_FILES["Denah_Tanah"]["name"]);
	move_uploaded_file($_FILES["Denah_Tanah"]["tmp_name"], $target_file1);
	$file1="DT" . $newfilename . $_FILES["Denah_Tanah"]["name"];

	$target_file2 = $target_dir . "PL" . $newfilename . basename($_FILES["Peta_Lokasi_Radius_Tower"]["name"]);
	move_uploaded_file($_FILES["Peta_Lokasi_Radius_Tower"]["tmp_name"], $target_file2);
	$file2="PL" . $newfilename . $_FILES["Peta_Lokasi_Radius_Tower"]["name"];

	$target_file3 = $target_dir . "SBL" . $newfilename . basename($_FILES["Sketsa_Batas_Lahan"]["name"]);
	move_uploaded_file($_FILES["Sketsa_Batas_Lahan"]["tmp_name"], $target_file3);
	$file3="SBL" . $newfilename . $_FILES["Sketsa_Batas_Lahan"]["name"];

	$target_file6 = $target_dir . "Cs" . $newfilename . basename($_FILES["Comcase_File"]["name"]);
	move_uploaded_file($_FILES["Comcase_File"]["tmp_name"], $target_file6);
	$file6="Cs" . $newfilename . $_FILES["Comcase_File"]["name"];

	$target_file4 = $target_dir . "PBB" . $newfilename . basename($_FILES["Surat_PBB"]["name"]);
	move_uploaded_file($_FILES["Surat_PBB"]["tmp_name"], $target_file4);
	$file4="PBB" . $newfilename . $_FILES["Surat_PBB"]["name"];

	$target_file5 = $target_dir . "RPM" . $newfilename . basename($_FILES["Surat_SKRD"]["name"]);
	move_uploaded_file($_FILES["Surat_SKRD"]["tmp_name"], $target_file5);
	$file5="RPM" . $newfilename . $_FILES["Surat_SKRD"]["name"];

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
	$Remark=$_POST['Remark']; 

//perpanjangan
	$Pagu=$_POST['Pagu']; 
	$PIC=$_POST['PIC']; 
	$SPPH=$_POST['SPPH']; 
	$Vendor_List=$_POST['Vendor_List']; 
	$Invoice=$_POST['Invoice']; 

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
	$Tanggal_Mulai=$_POST['Tanggal_Mulai'];
	$Tanggal_Jatuh_Tempo=$_POST['Tanggal_Jatuh_Tempo'];
	$Status_PBB=$_POST['Status_PBB'];
	$NJOP_Tanah=$_POST['NJOP_Tanah'];
	$NJOP_Bangunan=$_POST['NJOP_Bangunan'];
	$Koef_PBB=$_POST['Koef_PBB'];
	 
//rpm
	$No_SKRD=$_POST['No_SKRD']; 
	$Harga_SKRD=$_POST['Harga_SKRD']; 
	$Tanggal_Jatuh_Tempo=$_POST['Tanggal_Jatuh_Tempo']; 
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

	if(empty($_FILES["Denah_Tanah"]["name"])&&empty($_FILES["Peta_Lokasi_Radius_Tower"]["name"])&&empty($_FILES["Sketsa_Batas_Lahan"]["name"])&&empty($_FILES["Comcase_File"]["name"])&&empty($_FILES["Surat_PBB"]["name"])&&empty($_FILES["Surat_SKRD"]["name"]))
	{
		$result1 = mysqli_query($conn, "
			UPDATE ho 
			SET ho_nomor='$Nomor_HO',
				ho_daftar_ulang='$Daftar_Ulang_HO',
				ho_start='$Tanggal_Start_HO' ,
				ho_finish='$Tanggal_Finish_HO',
				ho_status='$Status_HO'
			WHERE sites_id='$sites_id' 
			");
		$result2 = mysqli_query($conn, "
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
			WHERE sites_id='$sites_id' ");
		$result3 = mysqli_query($conn, "
			UPDATE ijin_dephub 
			SET
				ijin_dephub_nomor='$Nomor_Ijin' ,
				ijin_dephub_start='$Tanggal_Mulai_Ijin' ,
				ijin_dephub_finish='$Tanggal_Akhir_Ijin'
			WHERE sites_id='$sites_id' ");
		$result4 = mysqli_query($conn, "
			UPDATE ijin_genset 
			SET
				ijin_genset_nomor='$Nomor_Genset' ,
				ijin_genset_status='$Status_Genset' ,
				ijin_genset_start='$Tanggal_Start' ,
				ijin_genset_finish='$Tanggal_Finish'
			WHERE sites_id='$sites_id' ");
		$result5 = mysqli_query($conn, "
			UPDATE ijin_prinsip 
			SET
				ijin_genset_nomor='$Nomor_Genset' ,
				ijin_prinsip_start='$Tanggal_Awal_Ijin_Prinsip' ,
				ijin_prinsip_finish='$Tanggal_Akhir_Ijin_Prinsip'
			WHERE sites_id='$sites_id' ");
		$result6 = mysqli_query($conn, "
			UPDATE ijin_ptt 
			SET
				ijin_prinsip_nomor='$Nomor_Ijin_Prinsip' ,
				ijin_ptt_start='$Tanggal_Awal_Ijin_Pendirian' ,
				ijin_ptt_finish='$Tanggal_Akhir_Ijin_Pendirian'
			WHERE sites_id='$sites_id' ");
		$result7 = mysqli_query($conn, "
			UPDATE imb 
			SET
				imb_nomor='$Nomor_IMB' ,
				imb_mitra_pengurus='$Mitra_Pengurus_IMB' ,
				imb_daftar_ulang='$Daftar_Ulang_IMB' ,
				imb_start='$Tanggal_Awal_IMB' ,
				imb_finish='$Tanggal_Akhir_IMB' ,
				imb_status_kepengurusan='$Status_Kepengurusan_IMB' ,
				imb_status='$Status_IMB'
			WHERE sites_id='$sites_id' ");
		$result8 = mysqli_query($conn, "
			UPDATE imtu 
			SET
				ijin_imtu_nomor,='$Nomor_Ijin_imtu', 
				ijin_imtu_start,='$Tanggal_Awal_Ijin_imtu', 
				ijin_imtu_finish='$Tanggal_Akhir_Ijin_imtu'
			WHERE sites_id='$sites_id' ");
		$result9 = mysqli_query($conn, "
			UPDATE ipb 
			SET
				ijin_ipb_nomor='$Ijin_IPB_Nomor' ,
				ijin_ipb_start='$Ijin_IPB_Start' ,
				ijin_ipb_finish='$Ijin_IPB_Finish'
			WHERE sites_id='$sites_id' ");
		$result10 = mysqli_query($conn, "
			UPDATE pbb 
			SET 
				nop='$Nomor_Objek_Pajak' ,
				nilai_pbb_site='$Nilai_PBB' ,
				tanggal_mulai='$Tanggal_Mulai' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo' ,
				status='$Status_PBB' ,
				njop_tanah='$NJOP_Tanah' ,
				njop_bangunan='$NJOP_Bangunan' ,
				koef_pbb='$Koef_PBB'
			WHERE sites_id='$sites_id' ");
		$result11 = mysqli_query($conn, "
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
				sites_remark='$Remark' ,
				perpanjangan_pagu='$Pagu' ,
				perpanjangan_pic='$PIC' ,
				perpanjangan_spph='$SPPH' ,
				perpanjangan_vendor_list='$Vendor_List' ,
				perpanjangan_invoice='$Invoice' ,
				bak_nomor='$Nomor_BAK' ,
				bak_tanggal='$Tanggal_BAK' ,
				bak_harga='$Harga_BAK' ,
				bak_status='$Status' ,
				comcase_tanggal='$Comcase_Tanggal' ,
				comcase_keterangan='$Comcase_Keterangan ' ,
				comcase_status='$Comcase_Status' ,
				comcase_solusi='$Comcase_Solusi' ,
				comcase_mitra='$Comcase_Mitra' 
			WHERE sites_id='$sites_id' ");
		$result12 = mysqli_query($conn, "
			UPDATE skrd_rpm 
			SET
				no_skrd='$No_SKRD' ,
				sites_id='$Site_ID' ,
				harga_skrd='$Harga_SKRD' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo' ,
				koef_skrd='$Koef_SKRD' ,
				status='$Status_SKRD'
			WHERE sites_id='$sites_id' ");
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

		$result1 = mysqli_query($conn, "
			UPDATE ho 
			SET 
				ho_nomor='$Nomor_HO' ,
				ho_daftar_ulang='$Daftar_Ulang_HO' ,
				ho_start='$Tanggal_Start_HO' ,
				ho_finish='$Tanggal_Finish_HO' ,
				ho_status='$Status_HO'
			WHERE sites_id='$sites_id' ");
		$result2 = mysqli_query($conn, "
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
			WHERE sites_id='$sites_id' ");
		$result3 = mysqli_query($conn, "
			UPDATE ijin_dephub 
			SET
				ijin_dephub_nomor='$Nomor_Ijin' ,
				ijin_dephub_start='$Tanggal_Mulai_Ijin' ,
				ijin_dephub_finish='$Tanggal_Akhir_Ijin'
			WHERE sites_id='$sites_id' ");
		$result4 = mysqli_query($conn, "
			UPDATE ijin_genset 
			SET
				ijin_genset_nomor='$Nomor_Genset' ,
				ijin_genset_status='$Status_Genset' ,
				ijin_genset_start='$Tanggal_Start' ,
				ijin_genset_finish='$Tanggal_Finish'
			WHERE sites_id='$sites_id' ");
		$result5 = mysqli_query($conn, "
			UPDATE ijin_prinsip 
			SET
				ijin_genset_nomor='$Nomor_Genset' ,
				ijin_prinsip_start='$Tanggal_Awal_Ijin_Prinsip' ,
				ijin_prinsip_finish='$Tanggal_Akhir_Ijin_Prinsip'
			WHERE sites_id='$sites_id' ");
		$result6 = mysqli_query($conn, "
			UPDATE ijin_ptt 
			SET
				ijin_prinsip_nomor='$Nomor_Ijin_Prinsip' ,
				ijin_ptt_start='$Tanggal_Awal_Ijin_Pendirian' ,
				ijin_ptt_finish='$Tanggal_Akhir_Ijin_Pendirian'
			WHERE sites_id='$sites_id' ");
		$result7 = mysqli_query($conn, "
			UPDATE imb 
			SET
				imb_nomor='$Nomor_IMB' ,
				imb_mitra_pengurus='$Mitra_Pengurus_IMB' ,
				imb_daftar_ulang='$Daftar_Ulang_IMB' ,
				imb_start='$Tanggal_Awal_IMB' ,
				imb_finish='$Tanggal_Akhir_IMB' ,
				imb_status_kepengurusan='$Status_Kepengurusan_IMB' ,
				imb_status='$Status_IMB'
			WHERE sites_id='$sites_id' ");
		$result8 = mysqli_query($conn, "
			UPDATE imtu 
			SET
				ijin_imtu_nomor,='$Nomor_Ijin_imtu', 
				ijin_imtu_start,='$Tanggal_Awal_Ijin_imtu', 
				ijin_imtu_finish='$Tanggal_Akhir_Ijin_imtu'
			WHERE sites_id='$sites_id' ");
		$result9 = mysqli_query($conn, "
			UPDATE ipb 
			SET
				ijin_ipb_nomor='$Ijin_IPB_Nomor' ,
				ijin_ipb_start='$Ijin_IPB_Start' ,
				ijin_ipb_finish='$Ijin_IPB_Finish'
			WHERE sites_id='$sites_id' ");
		$result10 = mysqli_query($conn, "
			UPDATE pbb 
			SET 
				nop='$Nomor_Objek_Pajak' ,
				nilai_pbb_site='$Nilai_PBB' ,
				tanggal_mulai='$Tanggal_Mulai' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo' ,
				status='$Status_PBB' ,
				njop_tanah='$NJOP_Tanah' ,
				njop_bangunan='$NJOP_Bangunan' ,
				surat_pbb='$file4' ,
				koef_pbb='$Koef_PBB'
			WHERE sites_id='$sites_id' ");
		$result11 = mysqli_query($conn, "
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
				sites_remark='$Remark' ,
				perpanjangan_pagu='$Pagu' ,
				perpanjangan_pic='$PIC' ,
				perpanjangan_spph='$SPPH' ,
				perpanjangan_vendor_list='$Vendor_List' ,
				perpanjangan_invoice='$Invoice' ,
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
			WHERE sites_id='$sites_id' ");
		$result12 = mysqli_query($conn, "
			UPDATE skrd_rpm 
			SET
				no_skrd='$No_SKRD' ,
				sites_id='$Site_ID' ,
				harga_skrd='$Harga_SKRD' ,
				tanggal_jatuh_tempo='$Tanggal_Jatuh_Tempo' ,
				koef_skrd='$Koef_SKRD' ,
				status='$Status_SKRD' ,
				surat_skrd='$file5'
			WHERE sites_id='$sites_id' ");

	}
	header("Location:List_Sites.php");
?>