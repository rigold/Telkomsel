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
	if ($_FILES["Denah_Tanah"]["size"] == 0)
	{
	    $Denah_Tanah = "-";
	}
	else
	{
		$Denah_Tanah="DT" . $newfilename . $_FILES["Denah_Tanah"]["name"];
	}

	$target_file = $target_dir . "PL" . $newfilename . basename($_FILES["Peta_Lokasi_Radius_Tower"]["name"]);
	move_uploaded_file($_FILES["Peta_Lokasi_Radius_Tower"]["tmp_name"], $target_file);
	if ($_FILES["Peta_Lokasi_Radius_Tower"]["size"] == 0)
	{
	    $Peta_Lokasi_Radius_Tower = "-";
	}
	else
	{
		$Peta_Lokasi_Radius_Tower="PL" . $newfilename . $_FILES["Peta_Lokasi_Radius_Tower"]["name"];
	}

	$target_file = $target_dir . "SBL" . $newfilename . basename($_FILES["Sketsa_Batas_Lahan"]["name"]);
	move_uploaded_file($_FILES["Sketsa_Batas_Lahan"]["tmp_name"], $target_file);
	if ($_FILES["Sketsa_Batas_Lahan"]["size"] == 0)
	{
	    $Sketsa_Batas_Lahan = "-";
	}
	else
	{
		$Sketsa_Batas_Lahan="SBL" . $newfilename . $_FILES["Sketsa_Batas_Lahan"]["name"];
	}

	$target_file = $target_dir . "Cs" . $newfilename . basename($_FILES["Comcase_File"]["name"]);
	move_uploaded_file($_FILES["Comcase_File"]["tmp_name"], $target_file);
	if ($_FILES["Comcase_File"]["size"] == 0)
	{
	    $Comcase_File = "-";
	}
	else
	{
		$Comcase_File="Cs" . $newfilename . $_FILES["Comcase_File"]["name"];
	}

	$target_file = $target_dir . "PBB" . $newfilename . basename($_FILES["Surat_PBB"]["name"]);
	move_uploaded_file($_FILES["Surat_PBB"]["tmp_name"], $target_file);
	if ($_FILES["Surat_PBB"]["size"] == 0)
	{
	    $Surat_PBB = "-";
	}
	else
	{
		$Surat_PBB="PBB" . $newfilename . $_FILES["Surat_PBB"]["name"];
	}

	$target_file = $target_dir . "RPM" . $newfilename . basename($_FILES["Surat_SKRD"]["name"]);
	move_uploaded_file($_FILES["Surat_SKRD"]["tmp_name"], $target_file);
	if ($_FILES["Surat_SKRD"]["size"] == 0)
	{
	    $Surat_SKRD = "-";
	}
	else
	{
		$Surat_SKRD="RPM" . $newfilename . $_FILES["Surat_SKRD"]["name"];
	}
	
//sites	
	$Site_ID=$_POST['Site_ID'];
	$Nama_Site = empty($_POST['Nama_Site']) ? "-" : $_POST['Nama_Site']; 
	$Status_Lahan = empty($_POST['Status_Lahan']) ? "-" : $_POST['Status_Lahan'];
	$Satus_Tower=$_POST['Satus_Tower']; 
	$Pemilik_Tower = empty($_POST['Pemilik_Tower']) ? "-" : $_POST['Pemilik_Tower'];
	$Alamat_Site = empty($_POST['Alamat_Site']) ? "-" : $_POST['Alamat_Site'];
	$Kota_Kabupaten = empty($_POST['Kota_Kabupaten']) ?  : $_POST['Kota_Kabupaten'];
	$Kontraktor_Utama = empty($_POST['Kontraktor_Utama']) ? "-" : $_POST['Kontraktor_Utama'];
	$Penyedia_Menara = empty($_POST['Penyedia_Menara']) ? "-" : $_POST['Penyedia_Menara'];
	$Branch = empty($_POST['Branch']) ? "-" : $_POST['Branch'];
	$Longitude = empty($_POST['Longitude']) ? "-" : $_POST['Longitude'];
	$Latitude = empty($_POST['Latitude']) ? "-" : $_POST['Latitude'];
	$On_Air_Date=$_POST['On_Air_Date']; 
	$Colocated_Site = empty($_POST['Colocated_Site']) ? "-" : $_POST['Colocated_Site'];
	$BTS_Type = empty($_POST['BTS_Type']) ? "-" : $_POST['BTS_Type'];
	$Site_Type = empty($_POST['Site_Type']) ? "-" : $_POST['Site_Type'];
	$Tower_Height = empty($_POST['Tower_Height']) ? "0" : $_POST['Tower_Height'];
	$Tower_Type = empty($_POST['Tower_Type']) ? "-" : $_POST['Tower_Type'];
	$Shelter_Type = empty($_POST['Shelter_Type']) ? "-" : $_POST['Shelter_Type'];
	$Shelter_Size = empty($_POST['Shelter_Size']) ? "0" : $_POST['Shelter_Size'];
	$Luas_Lahan = empty($_POST['Luas_Lahan']) ? "0" : $_POST['Luas_Lahan'];
	$Luas_Jalan_Akses = empty($_POST['Luas_Jalan_Akses']) ? "0" : $_POST['Luas_Jalan_Akses'];
	$Tanggal_Mulai_Sewa=$_POST['Tanggal_Mulai_Sewa']; 
	$Tanggal_Akhir_Sewa=$_POST['Tanggal_Akhir_Sewa']; 
	$Harga_Per_Tahun = empty($_POST['Harga_Per_Tahun']) ? "0" : $_POST['Harga_Per_Tahun'];
	$Remark = empty($_POST['Remark']) ? "-" : $_POST['Remark'];

//perpanjangan
	$Pagu = empty($_POST['Pagu']) ? "0" : $_POST['Pagu'];
	$PIC = empty($_POST['PIC']) ? "-" : $_POST['PIC'];
	$SPPH = empty($_POST['SPPH']) ? "0" : $_POST['SPPH'];
	$Vendor_List = empty($_POST['Vendor_List']) ? "-" : $_POST['Vendor_List'];
	$Invoice = empty($_POST['Invoice']) ?  : $_POST['Invoice'];

//bak
	$Nomor_BAK = empty($_POST['Nomor_BAK']) ? "-" : $_POST['Nomor_BAK'];
	$Tanggal_BAK = empty($_POST['Tanggal_BAK']) ?  : $_POST['Tanggal_BAK'];
	$Harga_BAK = empty($_POST['Harga_BAK']) ? "0" : $_POST['Harga_BAK'];
	$Status = empty($_POST['Status']) ? "-" : $_POST['Status'];

//hoz
	$Nomor_HO = empty($_POST['Nomor_HO']) ? "-" : $_POST['Nomor_HO'];
	$Daftar_Ulang_HO = empty($_POST['Daftar_Ulang_HO']) ?  : $_POST['Daftar_Ulang_HO'];
	$Tanggal_Start_HO=$_POST['Tanggal_Start_HO']; 
	$Tanggal_Finish_HO=$_POST['Tanggal_Finish_HO']; 
	$Status_HO = empty($_POST['Status_HO']) ? "-" : $_POST['Status_HO'];

//identitas pemilik lahan
	$KTP_Pemilik = empty($_POST['KTP_Pemilik']) ? "-" : $_POST['KTP_Pemilik'];
	$Kartu_Keluarga_Pemilik = empty($_POST['Kartu_Keluarga_Pemilik']) ? "-" : $_POST['Kartu_Keluarga_Pemilik'];
	$Pemilik_Lahan = empty($_POST['Pemilik_Lahan']) ? "-" : $_POST['Pemilik_Lahan'];
	$Orang_Yang_Di_Kuasakan = empty($_POST['Orang_Yang_Di_Kuasakan']) ? "-" : $_POST['Orang_Yang_Di_Kuasakan'];
	$Alamat_Pemilik = empty($_POST['Alamat_Pemilik']) ? "-" : $_POST['Alamat_Pemilik'];
	$Telepon = empty($_POST['Telepon']) ? "-" : $_POST['Telepon'];
	$HP = empty($_POST['HP']) ? "-" : $_POST['HP'];
	$E_mail = empty($_POST['E_mail']) ? "-" : $_POST['E_mail'];
	$Surat_Persetujuan_Keluarga = empty($_POST['Surat_Persetujuan_Keluarga']) ?  : $_POST['Surat_Persetujuan_Keluarga'];

//surat_pernyataan
	$SP = empty($_POST['SP']) ?  : $_POST['SP'];
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
	$Akta_Hibah = empty($_POST['Akta_Hibah']) ? "-" : $_POST['Akta_Hibah'];
	$Akta_Jual_Beli_Sewa = empty($_POST['Akta_Jual_Beli_Sewa']) ? "-" : $_POST['Akta_Jual_Beli_Sewa'];
	$Akta_Hak_Bersama = empty($_POST['Akta_Hak_Bersama']) ? "-" : $_POST['Akta_Hak_Bersama']; 
	$Akta_Warisan = empty($_POST['Akta_Warisan']) ? "-" : $_POST['Akta_Warisan'];
	$Akta_Pemisahan = empty($_POST['Akta_Pemisahan']) ? "-" : $_POST['Akta_Pemisahan'];
	$Akta_Nikah = empty($_POST['Akta_Nikah']) ? "-" : $_POST['Akta_Nikah'];

//ijin_lain
	$Ijin_Perubahan_Pengguna_Tanah = empty($_POST['Ijin_Perubahan_Pengguna_Tanah']) ? "-" : $_POST['Ijin_Perubahan_Pengguna_Tanah'];
	$Ijin_Warga = empty($_POST['Ijin_Warga']) ? "-" : $_POST['Ijin_Warga'];
	$Ijin_UKL_UPL = empty($_POST['Ijin_UKL_UPL']) ? "-" : $_POST['Ijin_UKL_UPL'];
	$Ijin_Sertifikat_Tanah = empty($_POST['Ijin_Sertifikat_Tanah']) ? "-" : $_POST['Ijin_Sertifikat_Tanah'];

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
	$Surat_Kuasa =$_POST['Surat_Kuasa'];
	$Surat_Kuasa_Pengambilan_Jaminan_Asli=$_POST['Surat_Kuasa_Pengambilan_Jaminan_Asli']; 
	$Surat_Jaminan_Hukum=$_POST['Surat_Jaminan_Hukum'];
	$Surat_Ijin_PKS = empty($_POST['Surat_Ijin_PKS']) ? "-" : $_POST['Surat_Ijin_PKS']; 
	$Surat_Perjanjian_Sewa_Tanah=$_POST['Surat_Perjanjian_Sewa_Tanah']; 

//pbb
	$Nomor_Objek_Pajak = empty($_POST['Nomor_Objek_Pajak']) ? "-" : $_POST['Nomor_Objek_Pajak'];
	$Nilai_PBB = empty($_POST['Nilai_PBB']) ? "0" : $_POST['Nilai_PBB'];
	$Denda_PBB = empty($_POST['Denda_PBB']) ? "0" : $_POST['Denda_PBB'];
	$Fee_PBB = empty($_POST['Fee_PBB']) ? "0" : $_POST['Fee_PBB'];
	$Tanggal_Jatuh_Tempo_PBB=$_POST['Tanggal_Jatuh_Tempo_PBB'];
	$Status_PBB = empty($_POST['Status_PBB']) ? "-" : $_POST['Status_PBB'];
	$NJOP_Tanah=$_POST['NJOP_Tanah'];
	$NJOP_Bangunan=$_POST['NJOP_Bangunan'];
	$Koef_PBB=$_POST['Koef_PBB'];
	$Mitra_PBB = empty($_POST['Mitra_PBB']) ?"-": $_POST['Mitra_PBB'];
	 
//rpm
	$No_SKRD = empty($_POST['No_SKRD']) ? "-" : $_POST['No_SKRD'];
	$Harga_SKRD = empty($_POST['Harga_SKRD']) ? "-" : $_POST['Harga_SKRD'];
	$Tanggal_Jatuh_Tempo_RPM=$_POST['Tanggal_Jatuh_Tempo_RPM']; 
	$Koef_SKRD=$_POST['Koef_SKRD']; 
	$Status_SKRD = empty($_POST['Status_SKRD']) ? "-" : $_POST['Status_SKRD'];
	 
//imb
	$Nomor_IMB = empty($_POST['Nomor_IMB']) ? "-" : $_POST['Nomor_IMB'];
	$Mitra_Pengurus_IMB = empty($_POST['Mitra_Pengurus_IMB']) ? "-" : $_POST['Mitra_Pengurus_IMB'];
	$Daftar_Ulang_IMB=$_POST['Daftar_Ulang_IMB'];
	$Tanggal_Awal_IMB=$_POST['Tanggal_Awal_IMB'];
	$Tanggal_Akhir_IMB=$_POST['Tanggal_Akhir_IMB'];
	$Status_Kepengurusan_IMB = empty($_POST['Status_Kepengurusan_IMB']) ? "-" : $_POST['Status_Kepengurusan_IMB'];
	$Status_IMB = empty($_POST['Status_IMB']) ? "-" : $_POST['Status_IMB'];

//imtu
	$Nomor_Ijin_imtu = empty($_POST['Nomor_Ijin_imtu']) ? "-" : $_POST['Nomor_Ijin_imtu'];
	$Tanggal_Awal_Ijin_imtu=$_POST['Tanggal_Awal_Ijin_imtu']; 
	$Tanggal_Akhir_Ijin_imtu=$_POST['Tanggal_Akhir_Ijin_imtu']; 

//dephub/kominfo
	$Nomor_Ijin = empty($_POST['Nomor_Ijin']) ? "-" : $_POST['Nomor_Ijin'];
	$Tanggal_Mulai_Ijin=$_POST['Tanggal_Mulai_Ijin']; 
	$Tanggal_Akhir_Ijin=$_POST['Tanggal_Akhir_Ijin']; 

//ippt
	$Nomor_Ijin_Pendirian = empty($_POST['Nomor_Ijin_Pendirian']) ? "-" : $_POST['Nomor_Ijin_Pendirian'];
	$Tanggal_Awal_Ijin_Pendirian=$_POST['Tanggal_Awal_Ijin_Pendirian']; 
	$Tanggal_Akhir_Ijin_Pendirian=$_POST['Tanggal_Akhir_Ijin_Pendirian']; 

//ipb
	$Ijin_IPB_Nomor = empty($_POST['Ijin_IPB_Nomor']) ? "-" : $_POST['Nomor_IPB'];
	$Ijin_IPB_Start=$_POST['Tanggal_Awal_IPB']; 
	$Ijin_IPB_Finish=$_POST['Tanggal_Akhir_IPB']; 

//ijin_prinsip
	$Nomor_Ijin_Prinsip = empty($_POST['Nomor_Ijin_Prinsip']) ? "-" : $_POST['Nomor_Ijin_Prinsip'];
	$Tanggal_Awal_Ijin_Prinsip=$_POST['Tanggal_Awal_Ijin_Prinsip']; 
	$Tanggal_Akhir_Ijin_Prinsip=$_POST['Tanggal_Akhir_Ijin_Prinsip']; 

//ijin_genset
	$Nomor_Genset = empty($_POST['Nomor_Genset']) ? "-" : $_POST['Nomor_Genset'];
	$Status_Genset = empty($_POST['Status_Genset']) ? "-" : $_POST['Status_Genset'];
	$Tanggal_Start=$_POST['Tanggal_Start']; 
	$Tanggal_Finish=$_POST['Tanggal_Finish']; 

//comsace
	$Comcase_Tanggal=$_POST['Comcase_Tanggal']; 
	$Comcase_Keterangan = empty($_POST['Comcase_Keterangan']) ? "-" : $_POST['Comcase_Keterangan'];
	$Comcase_Status = empty($_POST['Comcase_Status']) ? "-" : $_POST['Comcase_Status'];
	$Comcase_Solusi = empty($_POST['Comcase_Solusi']) ? "-" : $_POST['Comcase_Solusi'];
	$Comcase_Mitra = empty($_POST['Comcase_Mitra']) ? "-" : $_POST['Comcase_Mitra'];

//perintah post

	mysqli_query($conn,"
		INSERT INTO daerah (
		kota_kabupaten
		)
		VALUES(
		'$Kota_Kabupaten'
		)
	");

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
		sites_id,
		ho_daftar_ulang,
		ho_start,
		ho_finish,
		ho_status
		)
		VALUES(
		'$Nomor_HO',
		'$Site_ID',
		'$Daftar_Ulang_HO',
		'$Tanggal_Start_HO',
		'$Tanggal_Finish_HO',
		'$Status_HO' 
		)
		");

	mysqli_query($conn,"
		INSERT INTO identitas_pemilik (
		identitas_pemilik_ktp,
		sites_id,
		identitas_pemilik_kk,
		identitas_pemilik_lahan,
		identitas_pemilik_kuasa,
		identitas_pemilik_alamat,
		identitas_pemilik_telepon,
		identitas_pemilik_hp,
		identitas_pemilik_email,
		identitas_pemilik_sp_keluarga,

		sp,
		sp_ahli_waris,
		sp_janda,
		sp_kepemilikan_tanah,
		sp_pelepasan_hak,
		sp_pembayaran,
		sp_penguasaan_fisik_tanah,
		sp_peralihan_atas_pekarangan,
		sp_persetujuan_kepala_desa,
		sp_tanah_pemohon,
		sp_tidak_keberatan_jalan_pribadi,
		sp_tidak_keberatan_jalan_umum,

		akta_hibah,
		akta_jualbeli_sewa,
		akta_hak_bersama,
		akta_warisan,
		akta_pemisahan,
		akta_nikah,

		ijin_ippt,
		ijin_warga,
		ijin_ukl_upl,
		ijin_sertifikat_tanah,


		sket_beda_nama,
		sket_akses_lahan_jalan,
		sket_asal_tanah,
		sket_beda_luas_tanah,
		sket_fatwa_waris,
		sket_kematian,
		sket_penduduk,
		sket_permohonan_imb_ho_ip,
		sket_persetujuan_sewa_lahan,
		sket_riwayat_tanah,
		sket_suami_istri,
		sket_tanah,
		sket_tidak_sengketa,
		sket_keberatan,

		sl_sk,
		sl_sk_pengambilan_jaminan_asli,
		sl_surat_jaminan_hukum,
		sl_pks,
		sl_surat_perjanjian_sewa_tanah

		)
		VALUES(
		'$KTP_Pemilik',
		'$Site_ID',
		'$Kartu_Keluarga_Pemilik',
		'$Pemilik_Lahan',
		'$Orang_Yang_Di_Kuasakan',
		'$Alamat_Pemilik',
		'$Telepon',
		'$HP',
		'$E_mail',
		'$Surat_Persetujuan_Keluarga',

		'$SP',
		'$SP_Ahli_Waris',
		'$SP_Janda',
		'$SP_Kepemilikan_Tanah',
		'$SP_Pelepasan_Hak',
		'$SP_Pembayaran',
		'$SP_Penguasaan_Fisik_Tanah',
		'$SP_Peralihan_Atas_Pekarangan',
		'$SP_Persetujuan_Kepala_Desa',
		'$SP_Tanah_Pemohon',
		'$SP_Tidak_Keberatan_Jalan_Pribadi',
		'$SP_Tidak_Keberatan_Jalan_Umum',

		'$Akta_Hibah',
		'$Akta_Jual_Beli_Sewa',
		'$Akta_Hak_Bersama',
		'$Akta_Warisan',
		'$Akta_Pemisahan',
		'$Akta_Nikah',

		'$Ijin_Perubahan_Pengguna_Tanah',
		'$Ijin_Warga',
		'$Ijin_UKL_UPL',
		'$Ijin_Sertifikat_Tanah',

		'$SK_Akses_Lahan_Jalan',
		'$SK_Asal_Tanah',
		'$SK_Beda_Luas_Tanah',
		'$SK_Beda_Nama',
		'$SK_Fatwa_Waris',
		'$SK_Kematian',
		'$SK_Penduduk',
		'$SK_Permohonan_IMB_dll',
		'$SK_Persetujuan_Sewa_Lahan',
		'$SK_Riwayat_Tanah',
		'$SK_Suami_Istri',
		'$SK_Tanah',
		'$SK_Tidak_Sengketa',
		'$SK_Tidak_Keberatan_Didirikan',

		'$Surat_Kuasa',
		'$Surat_Kuasa_Pengambilan_Jaminan_Asli',
		'$Surat_Jaminan_Hukum',
		'$Surat_Ijin_PKS',
		'$Surat_Perjanjian_Sewa_Tanah'
		)
		");

	mysqli_query($conn,"
		INSERT INTO pbb (
		nop,
		sites_id,
		nilai_pbb_site,
		tanggal_jatuh_tempo,
		status,
		njop_tanah,
		njop_bangunan,
		surat_pbb,
		koef_pbb,
		pbb_mitra,
		pbb_denda,
		pbb_fee
		)
		VALUES(
		'$Nomor_Objek_Pajak',
		'$Site_ID',
		'$Nilai_PBB',
		'$Tanggal_Jatuh_Tempo_PBB',
		'$Status_PBB',
		'$NJOP_Tanah',
		'$NJOP_Bangunan',
		'$Surat_PBB',
		'$Koef_PBB',
		'$Mitra_PBB',
		'$Denda_PBB',
		'$Fee_PBB'
		)
	");

	mysqli_query($conn,"
		INSERT INTO skrd_rpm (
		no_skrd,
		sites_id,
		harga_skrd,
		tanggal_jatuh_tempo,
		koef_skrd,
		status,
		surat_skrd
		)
		VALUES(
		'$No_SKRD',
		'$Site_ID',
		'$Harga_SKRD',
		'$Tanggal_Jatuh_Tempo_RPM',
		'$Koef_SKRD',
		'$Status_SKRD',
		'$Surat_SKRD' 
		)
	");

	mysqli_query($conn,"
		INSERT INTO imb (
		imb_nomor,
		sites_id,
		imb_mitra_pengurus,
		imb_daftar_ulang,
		imb_start,
		imb_finish,
		imb_status_kepengurusan,
		imb_status
		)
		VALUES(
		'$Nomor_IMB',
		'$Site_ID',
		'$Mitra_Pengurus_IMB',
		'$Daftar_Ulang_IMB',
		'$Tanggal_Awal_IMB',
		'$Tanggal_Akhir_IMB',
		'$Status_Kepengurusan_IMB',
		'$Status_IMB'
		)
	");

	mysqli_query($conn,"
		INSERT INTO imtu (
		ijin_imtu_nomor,
		sites_id,
		ijin_imtu_start,
		ijin_imtu_finish
		)
		VALUES(
		'$Nomor_Ijin_imtu',
		'$Site_ID',
		'$Tanggal_Awal_Ijin_imtu',
		'$Tanggal_Akhir_Ijin_imtu'
		)
	");

	mysqli_query($conn,"
		INSERT INTO ijin_dephub (
		ijin_dephub_nomor,
		sites_id,
		ijin_dephub_start,
		ijin_dephub_finish
		)
		VALUES(
		'$Nomor_Ijin',
		'$Site_ID',
		'$Tanggal_Mulai_Ijin',
		'$Tanggal_Akhir_Ijin' 
		)
	");

	mysqli_query($conn,"
		INSERT INTO ijin_ptt (
		ijin_ptt_nomor,
		sites_id,
		ijin_ptt_start,
		ijin_ptt_finish
		)
		VALUES(
		'$Nomor_Ijin_Pendirian',
		'$Site_ID',
		'$Tanggal_Awal_Ijin_Pendirian', 
		'$Tanggal_Akhir_Ijin_Pendirian'
		)
	");

	mysqli_query($conn,"
		INSERT INTO ipb (
		ijin_ipb_nomor,
		sites_id,
		ijin_ipb_start,
		ijin_ipb_finish
		)
		VALUES(
		'$Nomor_IPB',
		'$Site_ID',
		'$Ijin_IPB_Start',
		'$Ijin_IPB_Finish'
		)
	");

	mysqli_query($conn,"
		INSERT INTO ijin_prinsip (
		ijin_prinsip_nomor,
		sites_id,
		ijin_prinsip_start,
		ijin_prinsip_finish
		)
		VALUES(
		'$Nomor_Ijin_Prinsip',
		'$Site_ID',
		'$Tanggal_Awal_Ijin_Prinsip',
		'$Tanggal_Akhir_Ijin_Prinsip'
		)
	");

	mysqli_query($conn,"
		INSERT INTO ijin_genset (
		ijin_genset_nomor,
		sites_id,
		ijin_genset_status,
		ijin_genset_start,
		ijin_genset_finish
		)
		VALUES(
		'$Nomor_Genset',
		'$Site_ID',
		'$Status_Genset',
		'$Tanggal_Start',
		'$Tanggal_Finish'
		)
	");


	if(!$conn) {
		echo "failed";
		die("Connection failed: " . mysqli_connect_error());	
	}
	else {
		echo "success";
		header("Location: List_Sites.php");
	}
?>