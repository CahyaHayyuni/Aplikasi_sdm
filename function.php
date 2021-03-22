<?php

function terlambat($tgl_dateline, $tgl_kembali)
{

    $tgl_dateline = explode("-", $tgl_dateline);
    $tgl_dateline_pecah = $tgl_dateline[0] . "-" . $tgl_dateline[1] . "-" . $tgl_dateline[2];

    $tgl_kembali = explode("-", $tgl_kembali);
    $tgl_kembali_pecah = $tgl_kembali[0] . "-" . $tgl_kembali[1] . "-" . $tgl_kembali[2];

    $selisih = strtotime($tgl_kembali_pecah) - strtotime($tgl_dateline_pecah);

    $selisih = $selisih / 86400;

    if ($selisih >= 1) {
        $hasi_tgl = floor($selisih);
    } else {
        $hasi_tgl = 0;
    }

    return $hasi_tgl;
}
