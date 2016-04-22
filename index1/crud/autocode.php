<?php
function autonumber($id_terakhir, $panjang_kode, $panjang_angka) {
    $kode = substr($id_terakhir, 0, $panjang_kode);
    $angka = substr($id_terakhir, $panjang_kode, $panjang_angka);
    $angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
    $id_baru = $kode.$angka_baru;
    return $id_baru;
}
//echo autonumber('D001', 1, 3); // hasil D002
?>
