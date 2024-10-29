<?php
class Kue {
    var $bahan = ['Tepung', 'Gula', 'Telur'];
    var $bentuk;

    function memasak_kue($jenis_kue) {
        echo "Memasak kue $jenis_kue dengan bahan: " . implode(", ", $this->bahan) . ".<br>";
    }

    function membungkusKue($jenis_bungkus) {
        echo "Membungkus kue dengan $jenis_bungkus.<br>";
    }
}

$kue_bolu = new Kue();
$kue_donat = new Kue();
$kue_gethuk = new Kue();

$kue_bolu->memasak_kue("Bolu");
$kue_bolu->membungkusKue("kotak");

$kue_donat->memasak_kue("Donat");
$kue_donat->membungkusKue("plastik");

$kue_gethuk->memasak_kue("Gethuk");
$kue_gethuk->membungkusKue("daun pisang");
?>
