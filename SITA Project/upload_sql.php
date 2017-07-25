<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sita";

    $conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit']))
{
    if(!empty($_FILES['file']['name']))
    {
        if(is_uploaded_file($_FILES['file']['tmp_name']))
        {
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            fgetcsv($csvFile);
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile,0,";")) !== FALSE)
            {
                //check whether member already exists in database with same email
                $prevQuery = "SELECT sites_id FROM site WHERE sites_id = '".$line[0]."'";
                $prevResult = $conn->query($prevQuery);
                if($prevResult->num_rows > 0)
                {
                    //update member data
                    $conn->query("UPDATE site SET sites_kota_kabupaten = '".$line[0]."'");
                    echo "update";
                }
                else{
                    //insert member data into database
                    mysqli_query($conn,"
                        INSERT INTO daerah (
                        kota_kabupaten
                        )
                        VALUES(
                        '$line[6]'
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
                        comcase_mitra
                        )
                        VALUES(
                        '$line[0]',
                        '$line[1]',
                        '$line[2]',
                        '$line[3]',
                        '$line[4]',
                        '$line[5]',
                        '$line[6]',
                        '$line[7]',
                        '$line[8]',
                        '$line[9]',
                        '$line[10]',
                        '$line[11]',
                        '$line[12]',
                        '$line[13]',
                        '$line[14]',
                        '$line[15]',
                        '$line[16]',
                        '$line[17]',
                        '$line[18]',
                        '$line[19]',
                        '$line[20]',
                        '$line[21]',
                        '$line[22]',
                        '$line[23]',
                        '$line[24]',
                        '$line[25]',

                        '$line[26]',
                        '$line[27]',
                        '$line[28]',
                        '$line[29]',
                        '$line[30]',

                        '$line[31]',
                        '$line[32]',
                        '$line[33]',
                        '$line[34]',

                        '$line[132]',
                        '$line[133]',
                        '$line[134]',
                        '$line[135]',
                        '$line[136]'

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

                        '$line[35]',
                        '$line[0]',
                        '$line[36]',
                        '$line[37]',
                        '$line[38]',
                        '$line[39]'
 
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

                        '$line[40]',
                        '$line[0]',
                        '$line[41]',
                        '$line[42]',
                        '$line[43]',
                        '$line[44]',
                        '$line[45]',
                        '$line[46]',
                        '$line[47]',
                        '$line[48]',

                        '$line[49]',
                        '$line[50]',
                        '$line[51]',
                        '$line[52]',
                        '$line[53]',
                        '$line[54]',
                        '$line[55]',
                        '$line[56]',
                        '$line[57]',
                        '$line[58]',
                        '$line[59]',
                        '$line[60]',

                        '$line[61]',
                        '$line[62]',
                        '$line[63]',
                        '$line[64]',
                        '$line[65]',
                        '$line[66]',

                        '$line[67]',
                        '$line[68]',
                        '$line[69]',
                        '$line[70]',

                        '$line[71]',
                        '$line[72]',
                        '$line[73]',
                        '$line[74]',
                        '$line[75]',
                        '$line[76]',
                        '$line[77]',
                        '$line[78]',
                        '$line[79]',
                        '$line[80]',
                        '$line[81]',
                        '$line[82]',
                        '$line[83]',
                        '$line[84]',

                        '$line[85]',
                        '$line[86]',
                        '$line[87]',
                        '$line[88]',
                        '$line[89]'

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
                        koef_pbb,
                        pbb_mitra,
                        pbb_denda,
                        pbb_fee
                        )
                        VALUES(

                        '$line[90]',
                        '$line[0]',
                        '$line[91]',
                        '$line[94]',
                        '$line[95]',
                        '$line[96]',
                        '$line[97]',
                        '$line[98]',
                        '$line[99]',
                        '$line[92]',
                        '$line[93]'

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

                        '$line[100]',
                        '$line[0]',
                        '$line[101]',
                        '$line[102]',
                        '$line[103]',
                        '$line[104]',
                        '$line[105]'

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

                        '$line[106]',
                        '$line[0]',
                        '$line[107]',
                        '$line[108]',
                        '$line[109]',
                        '$line[110]',
                        '$line[111]',
                        '$line[112]'

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

                        '$line[113]',
                        '$line[0]',
                        '$line[114]',
                        '$line[115]'

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

                        '$line[116]',
                        '$line[0]',
                        '$line[117]',
                        '$line[118]'

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

                        '$line[119]',
                        '$line[0]',
                        '$line[120]',
                        '$line[121]'

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

                        '$line[122]',
                        '$line[0]',
                        '$line[123]',
                        '$line[124]'

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

                        '$line[125]',
                        '$line[0]',
                        '$line[126]',
                        '$line[127]'

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

                        '$line[128]',
                        '$line[0]',
                        '$line[129]',
                        '$line[130]',
                        '$line[131]'

                        )
                    ");

                    echo "<br> insert->Sukses";
                }
            }
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
            echo "IF 3";
        }
        else
        {
            $qstring = '?status=err';
        }
        echo "IF 2";
    }
    else
    {
        $qstring = '?status=invalid_file';
    }
    echo "IF 1";
}

//redirect to the listing page
//header("Location: List_Sites.php".$qstring);