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
                    $conn->query("UPDATE site 
                        SET
                            sites_nama = '".$line[1]."',
                            sites_status_lahan = '".$line[2]."',
                            sites_status_tower = '".$line[3]."',
                            sites_pemilik_tower = '".$line[4]."',
                            sites_alamat = '".$line[5]."',
                            sites_kota_kabupaten = '".$line[6]."',
                            sites_kontraktor_utama = '".$line[7]."',
                            sites_penyedia_menara = '".$line[8]."',
                            sites_branch = '".$line[9]."',
                            sites_long = '".$line[10]."',
                            sites_lat = '".$line[11]."',
                            sites_on_air_date = '".$line[12]."',
                            sites_colocated_site = '".$line[13]."',
                            sites_type_bts = '".$line[14]."',
                            sites_type_site = '".$line[15]."',
                            sites_tower_height = '".$line[16]."',
                            sites_tower_type = '".$line[17]."',
                            sites_shelter_type = '".$line[18]."',
                            sites_shelter_size = '".$line[19]."',
                            sites_luas_lahan = '".$line[20]."',
                            sites_luas_jalan_akses = '".$line[21]."',
                            sites_tanggal_start = '".$line[22]."',
                            sites_tanggal_finish = '".$line[23]."',
                            sites_harga_per_tahun = '".$line[24]."',
                            sites_remark = '".$line[25]."',
                            perpanjangan_pagu = '".$line[26]."',
                            perpanjangan_pic = '".$line[27]."',
                            perpanjangan_spph = '".$line[28]."',
                            perpanjangan_vendor_list = '".$line[29]."',
                            perpanjangan_invoice = '".$line[30]."',
                            bak_nomor = '".$line[31]."',
                            bak_tanggal = '".$line[32]."',
                            bak_harga = '".$line[33]."',
                            bak_status = '".$line[34]."',
                            comcase_tanggal = '".$line[132]."',
                            comcase_keterangan = '".$line[133]."',
                            comcase_status = '".$line[134]."',
                            comcase_solusi = '".$line[135]."',
                            comcase_mitra = '".$line[136]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE ho
                        SET
                            ho_nomor = '".$line[35]."',
                            ho_daftar_ulang = '".$line[36]."',
                            ho_start = '".$line[37]."',
                            ho_finish = '".$line[38]."',
                            ho_status = '".$line[39]."',
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE identitas_pemilik
                        SET
                            identitas_pemilik_ktp = '".$line[40]."',
                            identitas_pemilik_kk = '".$line[41]."',
                            identitas_pemilik_lahan = '".$line[42]."',
                            identitas_pemilik_kuasa = '".$line[43]."',
                            identitas_pemilik_alamat = '".$line[44]."',
                            identitas_pemilik_telepon = '".$line[45]."',
                            identitas_pemilik_hp = '".$line[46]."',
                            identitas_pemilik_email = '".$line[47]."',
                            identitas_pemilik_sp_keluarga = '".$line[48]."',
                            sp = '".$line[49]."',
                            sp_ahli_waris = '".$line[50]."',
                            sp_janda = '".$line[51]."',
                            sp_kepemilikan_tanah = '".$line[52]."',
                            sp_pelepasan_hak = '".$line[53]."',
                            sp_pembayaran = '".$line[54]."',
                            sp_penguasaan_fisik_tanah = '".$line[55]."',
                            sp_peralihan_atas_pekarangan = '".$line[56]."',
                            sp_persetujuan_kepala_desa = '".$line[57]."',
                            sp_tanah_pemohon = '".$line[58]."',
                            sp_tidak_keberatan_jalan_pribadi = '".$line[59]."',
                            sp_tidak_keberatan_jalan_umum = '".$line[60]."',
                            akta_hibah = '".$line[61]."',
                            akta_jualbeli_sewa = '".$line[62]."',
                            akta_hak_bersama = '".$line[63]."',
                            akta_warisan = '".$line[64]."',
                            akta_pemisahan = '".$line[65]."',
                            akta_nikah = '".$line[66]."',
                            ijin_ippt = '".$line[67]."',
                            ijin_warga = '".$line[68]."',
                            ijin_ukl_upl = '".$line[69]."',
                            ijin_sertifikat_tanah = '".$line[70]."',
                            sket_beda_nama = '".$line[74]."',
                            sket_akses_lahan_jalan = '".$line[71]."',
                            sket_asal_tanah = '".$line[72]."',
                            sket_beda_luas_tanah = '".$line[73]."',
                            sket_fatwa_waris = '".$line[75]."',
                            sket_kematian = '".$line[76]."',
                            sket_penduduk = '".$line[77]."',
                            sket_permohonan_imb_ho_ip = '".$line[78]."',
                            sket_persetujuan_sewa_lahan = '".$line[79]."',
                            sket_riwayat_tanah = '".$line[80]."',
                            sket_suami_istri = '".$line[81]."',
                            sket_tanah = '".$line[82]."',
                            sket_tidak_sengketa = '".$line[83]."',
                            sket_keberatan = '".$line[84]."',
                            sl_sk = '".$line[86]."',
                            sl_sk_pengambilan_jaminan_asli = '".$line[87]."',
                            sl_surat_jaminan_hukum = '".$line[88]."',
                            sl_pks = '".$line[85]."',
                            sl_surat_perjanjian_sewa_tanah = '".$line[89]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE ijin_dephub
                        SET
                            ijin_dephub_nomor = '".$line[116]."',
                            ijin_dephub_start = '".$line[117]."',
                            ijin_dephub_finish = '".$line[118]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE ijin_genset
                        SET
                            ijin_genset_nomor = '".$line[128]."',
                            ijin_genset_status = '".$line[129]."',
                            ijin_genset_start = '".$line[130]."',
                            ijin_genset_finish = '".$line[131]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE ijin_prinsip
                        SET
                            ijin_prinsip_nomor = '".$line[125]."',
                            ijin_prinsip_start = '".$line[126]."',
                            ijin_prinsip_finish = '".$line[127]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE ijin_ptt
                        SET
                            ijin_ptt_nomor = '".$line[119]."',
                            ijin_ptt_start = '".$line[120]."',
                            ijin_ptt_finish = '".$line[121]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE imb
                        SET
                            imb_nomor = '".$line[106]."',
                            imb_mitra_pengurus = '".$line[107]."',
                            imb_daftar_ulang = '".$line[108]."',
                            imb_start = '".$line[109]."',
                            imb_finish = '".$line[110]."',
                            imb_status_kepengurusan = '".$line[111]."',
                            imb_status = '".$line[112]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE imtu
                        SET
                            ijin_imtu_nomor = '".$line[113]."',
                            ijin_imtu_start = '".$line[114]."',
                            ijin_imtu_finish = '".$line[115]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE ipb
                        SET
                            ijin_ipb_nomor = '".$line[122]."',
                            ijin_ipb_start = '".$line[123]."',
                            ijin_ipb_finish = '".$line[124]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

                        $conn->query("UPDATE pbb
                        SET
                            nop = '".$line[90]."',
                            nilai_pbb_site = '".$line[91]."',
                            pbb_denda = '".$line[92]."',
                            pbb_fee = '".$line[93]."',
                            tanggal_jatuh_tempo = '".$line[94]."',
                            status = '".$line[95]."',
                            njop_tanah = '".$line[96]."',
                            njop_bangunan = '".$line[97]."',
                            koef_pbb = '".$line[98]."',
                            pbb_mitra = '".$line[99]."'
                        WHERE sites_id = '".$line[0]."'
                        ");

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