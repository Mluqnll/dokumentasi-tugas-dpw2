<?php

class Ujang{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Ujang = new Ujang;
$Ujang->jumlah_kaki = "4";
$Ujang->bisa_terbang = "Tidak";
$Ujang->suara = "Meong";

echo "Ujang Adalah Seekor Kucing  <br>";
echo "Mempunyai Kaki Sebanyak  $Ujang->jumlah_kaki <br>";
echo "Apakah Bisa Terbang : $Ujang->bisa_terbang <br>";
echo "Bunyi Suaranya $Ujang->suara <br>";
echo "<hr>";

class coco{
    public $nama, $jumlah_kaki, $bisa_terbang,$suara;
}

$coco = new coco;
$coco->jumlah_kaki = "4";
$coco->bisa_terbang ="Tidak";
$coco->suara = "emmakkkkkk";

echo "Coco Adalah Seekor Sapi <br>";
echo "Mempunyai Kaki Sebanyak $coco->jumlah_kaki <br>";
echo "Apakah Bisa Terbang : $coco->bisa_terbang <br>";
echo "Bunyi Suaranya $coco->suara <br>";
echo "<hr>";

class brata{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$brata = new brata;
$brata->jumlah_kaki = "2";
$brata->bisa_terbang ="Bisa";
$brata->suara = "Miiiippppp";

echo "brata Adalah Seekor Elang<br>";
echo "Mempunyai Kaki Sebanyak $brata->jumlah_kaki <br>";
echo "Apakah Bisa Terbang : $brata->bisa_terbang <br>";
echo "Bunyi Suaranya $brata->suara <br>";
echo "<hr>";

class lusy{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$lusy = new lusy;
$lusy->jumlah_kaki = "2";
$lusy->bisa_terbang ="Tidak";
$lusy->suara = "Kwak - kwak";

echo "Lusi Adalah seekor Angsa <br>";
echo "Mempunyai Kaki Sebanyak $lusy->jumlah_kaki <br>";
echo "Apakah Bisa Terbang : $lusy->bisa_terbang <br>";
echo "Bunyi Suaranya $lusy->suara <br>";
echo "<hr>";