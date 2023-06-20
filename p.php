<?php
class Jajanan {
    public $aoka;
    public $nabati;
    public $bengbeng;
    public $wafello;
    public $coku;
    public $potato;
    public $clic;
    public $sosis;
    public $jmlAoka;
    public $jmlNabati;
    public $jmlBengbeng;
    public $jmlWafello;
    public $jmlCoku;
    public $jmlPotato;
    public $jmlClic;
    public $jmlSosis;
    public $hargaAoka;
    public $hargaNabati;
    public $hargaBengbeng;
    public $hargaWafello;
    public $hargaCoku;
    public $hargaPotato;
    public $hargaClic;
    public $hargaSosis;
    public $totalSeluruh;
    public $totalHargaAoka;
    public $totalHargaNabati;
    public $totalHargaBengbeng;
    public $totalHargaWafello;
    public $totalHargaCoku;
    public $totalHargaPotato;
    public $totalHargaClic;
    public $totalHargaSosis;

    public function __construct() {
        $this->hargaAoka = 3000;
        $this->hargaNabati = 2000;
        $this->hargaBengbeng = 2000;
        $this->hargaWafello = 2000;
        $this->hargaCoku = 1000;
        $this->hargaPotato = 500;
        $this->hargaClic = 500;
        $this->hargaSosis = 1000;
    }
}
class jumlah extends Jajanan {
    public function getJumlah($jmlAoka, $jmlNabati, $jmlBengbeng, $jmlWafello, $jmlCoku, $jmlPotato, $jmlClic, $jmlSosis){
        $this->jmlAoka = $jmlAoka;
        $this->jmlNabati = $jmlNabati;
        $this->jmlBengbeng = $jmlBengbeng;
        $this->jmlWafello = $jmlWafello;
        $this->jmlCoku = $jmlCoku;
        $this->jmlPotato = $jmlPotato;
        $this->jmlClic = $jmlClic;
        $this->jmlSosis = $jmlSosis;

    }

    public function setHarga() {
        $this->totalHargaAoka = $this->hargaAoka * $this->jmlAoka;
        $this->totalHargaNabati = $this->hargaNabati * $this->jmlNabati;
        $this->totalHargaBengbeng = $this->hargaBengbeng * $this->jmlBengbeng;
        $this->totalHargaWafello = $this->hargaWafello * $this->jmlWafello;
        $this->totalHargaCoku = $this->hargaCoku * $this->jmlCoku;
        $this->totalHargaPotato = $this->hargaPotato * $this->jmlPotato;
        $this->totalHargaClic = $this->hargaClic * $this->jmlClic;
        $this->totalHargaSosis = $this->hargaSosis * $this->jmlSosis;
        $this->totalSeluruh = $this->totalHargaAoka + $this->totalHargaNabati + $this->totalHargaBengbeng
        + $this->totalHargaWafello + $this->totalHargaCoku + $this->totalHargaPotato + $this->totalHargaClic + $this->totalHargaSosis;
    }

    public function cetakStruk() {
        echo "Aoka : $this->jmlAoka x Rp. $this->hargaAoka : <b>$this->totalHargaAoka</b>";
        echo "<br>";
        echo "Nabati : $this->jmlNabati x Rp. $this->hargaNabati : <b>$this->totalHargaNabati</b>";
        echo "<br>";
        echo "Bengbeng : $this->jmlBengbeng x Rp. $this->hargaBengbeng : <b>$this->totalHargaBengbeng</b>";
        echo "<br>";
        echo "Wafello : $this->jmlWafello x Rp. $this->hargaWafello : <b>$this->totalHargaWafello</b>";
        echo "<br>";
        echo "Coku : $this->jmlCoku x Rp. $this->hargaCoku : <b>$this->totalHargaCoku</b>";
        echo "<br>";
        echo "Potato : $this->jmlPotato x Rp. $this->hargaPotato : <b>$this->totalHargaPotato</b>";
        echo "<br>";
        echo "Clic : $this->jmlClic x Rp. $this->hargaClic : <b>$this->totalHargaClic</b>";
        echo "<br>";
        echo "Sosis : $this->jmlSosis x Rp. $this->hargaSosis : <b>$this->totalHargaSosis</b>";
        echo "<br>";
        echo "Total Bayar : Rp. <b>$this->totalSeluruh</b>";
        echo "<br>";
    }
}
?>