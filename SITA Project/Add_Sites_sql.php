<?php 

	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "sita";
	$conn = mysqli_connect($servername, $username, $password, $database);


	$temp = explode(".", $_FILES["file"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$target_dir = "File/";
	$target_file = $target_dir . "DT" . $newfilename . basename($_FILES["Denah_Tanah"]["name"]);
	move_uploaded_file($_FILES["Denah_Tanah"]["tmp_name"], $target_file);
	$Denah_Tanah="DT" . $newfilename . $_FILES["Denah_Tanah"]["name"];

	$target_file = $target_dir . "PL" . $newfilename . basename($_FILES["Peta_Lokasi_Radius_Tower"]["name"]);
	move_uploaded_file($_FILES["Peta_Lokasi_Radius_Tower"]["tmp_name"], $target_file);
	$Peta_Lokasi_Radius_Tower="PL" . $newfilename . $_FILES["Peta_Lokasi_Radius_Tower"]["name"];

	$target_file = $target_dir . "SBL" . $newfilename . basename($_FILES["Sketsa_Batas_Lahan"]["name"]);
	move_uploaded_file($_FILES["Sketsa_Batas_Lahan"]["tmp_name"], $target_file);
	$Sketsa_Batas_Lahan="SBL" . $newfilename . $_FILES["Sketsa_Batas_Lahan"]["name"];

	$target_file = $target_dir . "Cs" . $newfilename . basename($_FILES["Comcase_File"]["name"]);
	move_uploaded_file($_FILES["Comcase_File"]["tmp_name"], $target_file);
	$Comcase_File="Cs" . $newfilename . $_FILES["Comcase_File"]["name"];

	//$Surat_PBB="asd";
	//$Surat_SKRD="asd";
	//$Comcase_File="asd";

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
	$Status=$_POST['Status'];
	$NJOP_Tanah=$_POST['NJOP_Tanah'];
	$NJOP_Bangunan=$_POST['NJOP_Bangunan'];
	 
//rpm
	$No_SKRD=$_POST['No_SKRD']; 
	$Harga_SKRD=$_POST['Harga_SKRD']; 
	$Tanggal_Jatuh_Tempo=$_POST['Tanggal_Jatuh_Tempo']; 
	$Koef_SKRD=$_POST['Koef_SKRD']; 
	$Status=$_POST['Status']; 
	 
//imb
	$Nomor_IMB=$_POST['Nomor_IMB'];
	$Mitra_Pengurus_IMB=$_POST['Mitra_Pengurus_IMB'];
	$Daftar_Ulang_IMB=$_POST['Daftar_Ulang_IMB'];
	$Tanggal_Awal_IMB=$_POST['Tanggal_Awal_IMB'];
	$Tanggal_Akhir_IMB=$_POST['Tanggal_Akhir_IMB'];
	$Status_Kepengurusan_IMB=$_POST['Status_Kepengurusan_IMB'];
	$Status_IMB=$_POST['Status_IMB'];

//imtu
	$Nomor_Ijin=$_POST['Nomor_Ijin']; 
	$Tanggal_Awal_Ijin=$_POST['Tanggal_Awal_Ijin']; 
	$Tanggal_Akhir_Ijin=$_POST['Tanggal_Akhir_Ijin']; 

//dephub/kominfo
	$$Nomor_Ijin=$_POST['Nomor_Ijin']; 
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
	$Nomor=$_POST['Nomor']; 
	$Status=$_POST['Status']; 
	$Tanggal_Start=$_POST['Tanggal_Start']; 
	$Tanggal_Finish=$_POST['Tanggal_Finish']; 

//comsace
	$Comcase_Tanggal=$_POST['Comcase_Tanggal']; 
	$Comcase_Keterangan=$_POST['Comcase_Keterangan']; 
	$Comcase_Status=$_POST['Comcase_Status']; 
	$Comcase_Solusi=$_POST['Comcase_Solusi']; 
	$Comcase_Mitra=$_POST['Comcase_Mitra']; 

//perintah post

	mysqli_query($conn,"
		INSERT INTO site (
		sites_id,
		sites_nama,
		sites_status_lahan,
		sites_status_tower,
		sites_pemilik_tower,
		sites_alamat,
		sites_kota_kabupaten,
		sites_kontraktor_utama,
		sites_penyedia_menara,
		sites_branch,
		sites_long,
		sites_lat,
		sites_on_air_date,
		sites_colocated_site,
		sites_type_bts,
		sites_type_site,
		sites_tower_height,
		sites_tower_type,
		sites_shelter_type,
		sites_shelter_size,
		sites_luas_lahan,
		sites_luas_jalan_akses,
		sites_denah_tanah,
		sites_peta_lrt,
		sites_sketsa_bt,
		sites_tanggal_start,
		sites_tanggal_finish,
		sites_harga_per_tahun,
		sites_remark,
		perpanjangan_pagu,
		perpanjangan_pic,
		perpanjangan_spph,
		perpanjangan_vendor_list,
		perpanjangan_invoice,
		bak_nomor,
		bak_tanggal,
		bak_harga,
		bak_status,
		comcase_tanggal,
		comcase_keterangan,
		comcase_status,
		comcase_solusi,
		comcase_file,
		comcase_mitra
		)
		VALUES(
		'$Site_ID',
		'$Nama_Site',
		'$Status_Lahan',
		'$Satus_Tower',
		'$Pemilik_Tower',
		'$Alamat_Site',
		'$Kota_Kabupaten',
		'$Kontraktor_Utama',
		'$Penyedia_Menara',
		'$Branch',
		'$Longitude',
		'$Latitude',
		'$On_Air_Date',
		'$Colocated_Site',
		'$BTS_Type',
		'$Site_Type',
		'$Tower_Height',
		'$Tower_Type',
		'$Shelter_Type',
		'$Shelter_Size',
		'$Luas_Lahan',
		'$Luas_Jalan_Akses',
		'$Denah_Tanah',
		'$Peta_Lokasi_Radius_Tower',
		'$Sketsa_Batas_Lahan',
		'$Tanggal_Mulai_Sewa',
		'$Tanggal_Akhir_Sewa',
		'$Harga_Per_Tahun',
		'$Remark',
		'$Pagu',
		'$PIC',
		'$SPPH',
		'$Vendor_List',
		'$Invoice',
		'$Nomor_BAK',
		'$Tanggal_BAK',
		'$Harga_BAK',
		'$Status',
		'$Comcase_Tanggal',
		'$Comcase_Keterangan ',
		'$Comcase_Status',
		'$Comcase_Solusi',
		'$Comcase_File',
		'$Comcase_Mitra'
		)
		");

		mysqli_query($conn,"
		INSERT INTO ho(
		ho_nomor,
		ho_daftar_ulang,
		ho_start,
		ho_finish,
		ho_status
		)
		VALUES(
		'$Nomor_HO',
		'$Daftar_Ulang_HO',
		'$Tanggal_Start_HO',
		'$Tanggal_Finish_HO',
		'$Status_HO' 
		)
		");

	if(!$conn) {
		echo "failed";
		die("Connection failed: " . mysqli_connect_error());	
	}
	else {
		echo "success";
		//header("Location: List_User.php");
	}
?>