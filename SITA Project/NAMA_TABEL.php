--------------site-----------------------
sites_id
sites_nama
sites_status_lahan
sites_status_tower
sites_pemilik_tower
sites_alamat
sites_kota_kabupaten
sites_kontraktor_utama
sites_penyedia_menara
sites_branch
sites_long
sites_lat
sites_on_air_date
sites_colocated_site
sites_type_bts
sites_type_site
sites_tower_height
sites_tower_type
sites_shelter_type
sites_shelter_size
sites_luas_lahan
sites_luas_jalan_akses
sites_denah_tanah
sites_peta_lrt
sites_sketsa_bt
sites_tanggal_start
sites_tanggal_finish
sites_harga_per_tahun
sites_remark
perpanjangan_pagu
perpanjangan_pic
perpanjangan_spph
perpanjangan_vendor_list
perpanjangan_invoice
bak_nomor
bak_tanggal
bak_harga
bak_status
comcase_tanggal
comcase_keterangan
comcase_status
comcase_solusi
comcase_file
comcase_mitra

---------------------ho---------------------

ho_nomor
ho_daftar_ulang
ho_start
ho_finish
ho_status

-----------------identitas pemilik---------------------

identitas_pemilik_ktp
identitas_pemilik_kk
identitas_pemilik_lahan
identitas_pemilik_kuasa
identitas_pemilik_alamat
identitas_pemilik_telepon
identitas_pemilik_hp
identitas_pemilik_email
identitas_pemilik_sp_keluarga
sp
sp_ahli_waris
sp_janda
sp_kepemilikan_tanah
sp_pelepasan_hak
sp_pembayaran
sp_penguasaan_fisik_tanah
sp_peralihan_atas_pekarangan
sp_persetujuan_kepala_desa
sp_tanah_pemohon
sp_tidak_keberatan_jalan_pribadi
sp_tidak_keberatan_jalan_umum
akta_hibah
akta_jualbeli_sewa
akta_hak_bersama
akta_warisan
akta_pemisahan
akta_nikah
ijin_ippt
ijin_warga
ijin_ukl_upl
ijin_sertifikat_tanah
sket_akses_lahan_jalan
sket_asal_tanah
sket_beda_luas_tanah
sket_beda_nama
sket_fatwa_waris
sket_kematian
sket_penduduk
sket_permohonan_imb_ho_ip
sket_persetujuan_sewa_lahan
sket_riwayat_tanah
sket_suami_istri
sket_tanah
sket_tidak_sengketa
sket_keberatan
sl_sk
sl_sk_pengambilan_jaminan_asli
sl_surat_jaminan_hukum
sl_pks
sl_surat_perjanjian_sewa_tanah

--------------pbb-----------------

nop
nilai_pbb_site
tanggal_mulai
tanggal_jatuh_tempo
status
njop_tanah
njop_bangunan
surat_pbb
sket_pelunasan_pbb

--------------rpm------------------

no_skrd
harga_skrd
tanggal_jatuh_tempo
koef_skrd
status
surat_skrd

-------------imb------------------

imb_nomor
imb_mitra_pengurus 
imb_daftar_ulang
imb_start
imb_finish
imb_status_kepengurusan 
imb_status 

--------------imtu-----------------

ijin_imtu_nomor
ijin_imtu_start
ijin_imtu_finish

-------------ijin dephub-----------

ijin_dephub_nomor
ijin_dephub_start
ijin_dephub_finish

--------------ijin ptt-------------

ijin_ptt_nomor
ijin_ptt_start
ijin_ptt_finish

-------------ipb----------------------

ijin_ipb_nomor
ijin_ipb_start
ijin_ipb_finish

------------ijin prinsip--------------

ijin_prinsip_nomor
ijin_prinsip_start
ijin_prinsip_finish

-----------ijin genset-------------

ijin_genset_nomor
ijin_genset_status
ijin_genset_start
ijin_genset_finish

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