<?php

require_once 'table_opsi_set.php';

function crdb()
{
    $arr = array(
        array(
            "table" => "m_bank",
            "data" => array(
                "id" => ai(11),
                "nama" => char(255),
                "singkatan" => char(255),
            )
        ),
        array(
            "table" => "m_tryout",
            "data" => array(
                "id" => ai(11),
                "tryout" => char(255),
                "singkatan" => char(255),
            )
        ),
        array(
            "table" => "type_kelompok",
            "data" => array(
                "id" => ai(11),
                "type_kelompok" => char(255),
                "singkatan" => char(255),
                "id_tryout" => char(255),
            )
        ),
        array(
            "table" => "mata_pelajaran",
            "data" => array(
                "id" => ai(11),
                "matpel" => char(255),
                "id_type_kelompok" => char(255),
            )
        ),
        array(
            "table" => "banksoal",
            "data" => array(
                "id" => ai(11),
                "id_mapel" => char(255),
                "file" => char(255),
                "tanggal" => timestamp(),
                "aktif" => char(255),
            )
        ),
        array(
            "table" => "rekening",
            "data" => array(
                "id" => ai(11),
                "norek" => char(255),
                "id_m_bank" => char(255),
                "atasnama" => char(),
            )
        ),
        array(
            "table" => "kupon",
            "data" => array(
                "id" => ai(11),
                "image" => char(255),
                "nilai" => char(255),
                "tgl" => char(255),
                "aktif" => char(),
            )
        ),
        array(
            "table" => "user_detail",
            "data" => array(
                "id" => ai(11),
                "nama" => char(255),
                "jenis_kelamin" => char(255),
                "tempat_lahir" => char(255),
                "tanggal_lahir" => char(255),
                "email" => char(255),
                "hp" => char(255),
                "instagram" => char(255),
                "foto" => char(255),
                "namasekolah" => char(255),
                "kota" => char(255),
                "provinsi" => char(255),
                "kelas" => char(255),
                "jurusan" => char(255),
                "tahun_lulus" => char(255),
                "aktif" => char(255),
                "tanggal_daftar" => timestamp(),
            )
        ),
        array(
            "table" => "soal",
            "data" => array(
                "id" => ai(11),
                "soal" => char(255),
                "id_matpel" => char(255),
                "aktif" => char(),
                "tanggal" => char(255),
                "waktu_awal" => char(255),
                "waktu_berakhir" => char(255),
            )
        ),
        array(
            "table" => "detail_soal",
            "data" => array(
                "id" => ai(11),
                "id_user" => char(255),
                "soal" => textlong(255),
                "a" => text(),
                "b" => text(),
                "c" => text(),
                "d" => text(),
                "e" => text(),
                "jawaban" => char(255),
                "nilai_soal" => char(255),
            )
        ),
        array(
            "table" => "sertifikat",
            "data" => array(
                "id" => ai(11),
                "id_user" => char(255),
                "file" => char(255),
                "tanggal" => char(255),
                "aktif" => char(255),
            )
        ),
        array(
            "table" => "nilai",
            "data" => array(
                "id" => ai(11),
                "id_user" => char(255),
                "jawaban" => textlong(255),
                "nilai" => char(255),
            )
        ),
        array(
            "table" => "kodeunik",
            "data" => array(
                "id" => ai(11),
                "id_user" => char(255),
                "kodeunik" => textlong(255),
                "aktif" => char(255),
            )
        ),
        array(
            "table" => "type_status",
            "data" => array(
                "id" => ai(11),
                "type_status" => char(255),
            )
        ),
        array(
            "table" => "status",
            "data" => array(
                "id" => char(255),
                "status" => char(255),
                "type_status" => textlong(255),
            )
        )
    );

    return $arr;

}
